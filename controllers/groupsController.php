<?php

class groupsController extends BaseController
{
    public $selectedGroup = "";
    public $activeSeason = "";

    function getAction()
    {
        $group = $this->selectGroup();

        if (empty($group)) {
            $this->template->assign("template", "groupsOverview.tpl");
            $this->showOverview();
        } else {
            $this->template->assign("template", "groupDetail.tpl");
            $this->showDetail($group);
        }

    }

    public function selectGroup()
    {
        if (isset($this->subActions[0])) {
            $this->subActions[0] = str_replace("-", " ", $this->subActions[0]);
            return $this->subActions[0];
        } else {
            return "";
        }
    }

    public function showOverview()
    {
        $this->activeSeason = $this->getActiveMainSeason();
        $groups = $this->getGroups($this->activeSeason['seasonID']);

        $this->template->assign("groups", $groups);


    }

    public function showDetail($groupName)
    {
        $group = new groupsModule($this->database, $this->template);
        $group->load($groupName);
        $this->template->assign("table", $this->getTable($group));
    }

    public function getTable(groupsModule $group)
    {
        $teams = $group->getTeamsInGroup();
        foreach ($teams as $team) {
            $t = new teamsModule($this->database, $this->template);
            $t->load($team['teamID']);
            $table[$t->id]['name'] = $t->name;
            $table[$t->id]['table'] = $t->getTableInfoInSeason($group->getActiveMainSeason());
        }

        return $group->sortTable($table);
    }

    public function getActiveMainSeason()
    {
        $seasonID = $this->database->queryOne("SELECT * FROM gybuliga_dev.season AS s LEFT JOIN gybuliga_dev.seasontype AS st ON s.seasonType = st.typeId WHERE typeId = 1 AND s.`from` < now() < `to`");
        return $seasonID;
    }

    public function getGroups($season)
    {
        $groups = $this->database->queryAll("SELECT g.name, g.groupID FROM groups AS g LEFT JOIN grouptoseasons AS gts ON g.groupID = gts.groupID LEFT JOIN season AS s ON gts.seasonID = s.seasonID WHERE s.seasonID = $season");
        foreach ($groups as $key => $group) {
            $groups[$key]['url'] = str_replace(" ", "-", $group['name']);
        }
        return $groups;
    }

    private function getMatches($teamID)
    {
        return $this->database->queryAll("SELECT *
                                                FROM matches
                                                LEFT JOIN round ON matches.round = round.roundID
                                                WHERE (matches.team_away = 1 OR matches.team_home = 1) 
                                                AND result != 0 
                                                AND seasonID = " . $this->getActiveMainSeason());
    }
}