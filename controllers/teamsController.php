<?php

/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 04.11.2017
 * Time: 21:46
 */
class teamsController extends BaseController
{
    private $descriptionTextID = 1;
    public $teamDetail;

    function getAction()
    {
        if (empty($this->subActions) or $this->subActions[0] == "") {
            $this->showAll();
            $this->template->assign('template', 'teamOverview.tpl');
        } else {
            $this->showDetail();
            $this->template->assign('template', 'teamDetail.tpl');
        }
    }

    public function showDetail()
    {
        $this->parseTeamFromUrl();
        $this->getTeamInfo();
        $this->getDescriptionText();


    }

    public function showAll()
    {
        $this->getTeamsInfo();
        $this->getDescriptionText();
    }

    public function getTeamsInfo()
    {
        $teamInfo = array();
        $teams = $this->database->queryAll("SELECT teamID FROM teams WHERE active = 1");
        foreach ($teams as $teamID) {
            $team = new teamsModule($this->database, $this->template);
            $team->load($teamID['teamID']);
            $ret = array();
            $ret['id'] = $team->id;
            $ret['logo'] = $team->getTeamLogoPath();
            $ret['name'] = $team->name;
            $ret['capitan'] = $team->getCapitan();
            $ret['urlLink'] = $this->getNameToUrl($team->urlLink);
            $teamInfo[$teamID['teamID']] = $ret;
        }
        $this->template->assign('teams', $teamInfo);
        return $teamInfo;
    }

    public function getDescriptionText()
    {
        $description = $this->database->queryOne("SELECT title, content FROM descriptions WHERE descriptionID = $this->descriptionTextID");
        $this->template->assign("description", $description);
    }

    public function getNameToUrl($name)
    {
        $ret = strtolower($name);
        $ret = str_replace(" ", "-", $ret);
        return "/teams/" . $ret;
    }

    public function getTeamInfo()
    {
        $team = new teamsModule($this->database, $this->template);
        $team->load($this->teamDetail);

        $this->template->assign("teamName", $team->name);
        $this->getRoster($team);
        $this->getTeamText($team);
        $this->template->assign("teamLogo", $team->getTeamLogoPath());
    }

    public function parseTeamFromUrl()
    {
        $team = $this->subActions[0];
        $this->teamDetail = $team;
    }

    public function getRoster(teamsModule $team)
    {
        $roster = $team->getRoster();

        $this->template->assign("roster", $roster);
    }

    public function getTeamText(teamsModule $team)
    {
        $this->template->assign("teamText", $team->getTeamDescription());
    }


}