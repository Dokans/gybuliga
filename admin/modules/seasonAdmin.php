<?php

/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 28.02.2018
 * Time: 17:45
 */
class seasonAdmin extends baseAdmin
{
    public $link = "season";
    public $name = "Sezóny";
    protected $permissionsNeeded = array(3);

    function display()
    {
        if (!isset($this->subActions[0])) {
            $this->showOverview();
        } elseif ($this->subActions[0] == "add") {
            $this->addSeason();
        }
    }

    public function editSeason($seasonID)
    {

    }

    public function showOverview()
    {
        $this->template->assign("seasons", $this->getSeasons());
        $this->template->display("seasonOverview.tpl");

    }

    public function getSeasons()
    {
        $seasons = $this->database->queryAll("SELECT seasonID AS id FROM gybuliga_dev.season");

        foreach ($seasons as &$seasonID) {
            $season = new seasonModule($this->database, $this->template);
            $season->load($seasonID['id']);
            $seasonID = $season;
        }

        return $seasons;
    }

    public function addSeason()
    {
        if (isset($_POST['step'])) {
            $step = $_POST['step'];
        } else {
            $step = 0;
        }

        if ($step != 0) {
            $this->processStep($step);
        }

        $this->showStep($step + 1);
    }

    public function processStep($step)
    {
        switch ($step){
            case 1:
                $this->template->assign("step1", json_encode($_POST));
        }

    }

    public function showStep($step)
    {
        switch ($step) {
            case 1:
                $this->template->assign("seasonTypes", seasonModule::getSeasonTypes($this->database));
                $this->template->display("addSeasonStep1.tpl");
                break;
            case 2:


                break;
        }
    }


    public function displayGetTeams()
    {
        if ($_POST['type'] == "table"){
            $numberOfTeams = $_POST['numberOfTeams'];

            if ($numberOfTeams % 2 == 1){
                $teamsInTableA = round($numberOfTeams/2);
                $teamsInTableB = $teamsInTableA - 1;
            }else{
                $teamsInTableA = $numberOfTeams/2;
                $teamsInTableB = $teamsInTableA;
            }
            $this->template->assign("tableA", $teamsInTableA);
            $this->template->assign("tableB", $teamsInTableB);
            $this->template->display("addSeasonStep2Normal");
        }elseif ($_POST['type'] == "playoff"){

        }
    }
}