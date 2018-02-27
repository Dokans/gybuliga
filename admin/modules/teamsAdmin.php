<?php

/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 12.11.2017
 * Time: 12:55
 */
class teamsAdmin extends BaseAdmin
{
    protected $permissionsNeeded = array(5);
    public $link = "teams";
    public $name = "Týmy";

    public function display()
    {

        if (!empty($this->subActions)) {

            if ($this->subActions[0] == "edit"){
                $this->editTeam($this->subActions[1]);
            }

        } else {
            $this->showTeams();
        }
    }

    public function showTeams()
    {
        $teams = $this->database->queryAll("SELECT teamID FROM gybuliga_dev.teams WHERE active = 1");
        foreach ($teams as $key => $team){
            $x = new teamsModule($this->database, $this->template);
            $teams[$key] = $x->load($team['teamID']);
        }

        $this->template->assign("teams", $teams);
        $this->template->display("teamsOverview.tpl");
    }

    public function editTeam($id)
    {
        $team = new teamsModule($this->database, $this->template);
        $team->load($id);

        if (isset($_POST['edit'])){
            $team->setDescription($_POST['description']);
            $team->setName($_POST['name']);
            $team->setCapitan($_POST['capitan']);


        }

        $this->template->assign("team", $team);
        $this->template->display("editTeam.tpl");
    }
}