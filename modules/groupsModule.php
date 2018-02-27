<?php

class groupsModule extends ObjectModule
{
    public $id = "";
    public $name = "";

    public function load($param)
    {
        $group = $this->database->queryOne("SELECT * FROM groups WHERE name LIKE '$param' OR groupID = '$param'");
        $this->id = $group['groupID'];
        $this->name = $group['name'];
        return $this;
    }

    function create($params)
    {
        // TODO: Implement create() method.
    }

    public function loadActiveGroups()
    {
        $activeSeason = $this->getActiveMainSeason();
        return $groups = $this->database->queryAll("  SELECT
                                                    g.name,
                                                    g.groupID
                                                  FROM groups AS g
                                                    LEFT JOIN grouptoseasons AS gs ON g.groupID = gs.groupID
                                                    LEFT JOIN season AS s ON gs.seasonID = s.seasonID
                                                  WHERE s.seasonID = $activeSeason");
    }

    public function getActiveMainSeason()
    {
        return $this->database->queryOne("SELECT seasonID FROM season AS s LEFT JOIN seasontype AS st ON s.seasonType = st.typeId WHERE typeId = 1 AND s.`from` < now() < `to`;");
    }

    public function getTeamsInGroup()
    {
        return $this->database->queryAll("SELECT * FROM teams AS t JOIN teams_in_groups AS tg ON t.teamID = tg.teamID WHERE groupID = $this->id");
    }

    public function sortTable($table)
    {
        usort($table, function ($a, $b) {
            $points = $a['table']['points'] - $b['table']['points'];
            if ($points){
                return $points;
            }else{
                $difrence = ($a['table']['GF'] - $a['table']['GA']) - ($b['table']['GF'] - $b['table']['GA']);

                if ($difrence){
                    return $difrence;
                }else{
                    return $a['table']['GF'] - $b['table']['GF'];
                }
            }
        });
        $table = array_reverse($table);
        return $table;
    }

}