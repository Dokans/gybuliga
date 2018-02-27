<?php

/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 12.02.2018
 * Time: 19:19
 */
class playersAdmin extends baseAdmin
{
    public $link = "players";
    public $name = "Hráči";
    protected $permissionsNeeded = array(8);

    function display()
    {
        if ($this->hasPermissions()) {
            if (isset($this->subActions[0]) and $this->subActions[0] != "") {
                if ($this->subActions[0] == "add") {
                    $this->addPlayer();
                } elseif ($this->subActions[0] == "edit") {
                    $this->editPlayer($this->subActions[1]);
                } else {
                    $this->showOverview();
                }
            } else {
                $this->showOverview();
            }
        }
    }

    public function showOverview()
    {
        $this->getPlayers();
        $this->template->display("playersOverview.tpl");
    }

    public function getPlayers()
    {
        $ret = array();
        $players = $this->database->queryAll("SELECT playerID FROM players");

        foreach ($players as $playerID) {
            $player = new playerModule($this->database, $this->template);
            $player->load($playerID['playerID']);
            $ret[] = $player;
        }

        $this->template->assign("players", $ret);

    }

    public function editPlayer($id)
    {
        $player = new playerModule($this->database, $this->template);
        $player->load($id);

        if (isset($_POST['edit'])) {
            $player->changeClass($_POST['class']);
            $player->changeName($_POST['name'], $_POST['surname']);
            $player->changeContact($_POST['contact']);
            $player->changeNumber($_POST['number']);

            if ($player->currentTeam->id != $_POST['team']) {
                $player->transferTeams($_POST['team']);
            }
        }

        $this->template->assign("player", $player);

        $this->template->assign("teams", $this->getTeams());
        $this->template->display("playerEdit.tpl");
    }

    public function addPlayer()
    {
        if (isset($_POST['player'])) {
            $player = new playerModule($this->database, $this->template);
            if ($player->create($_POST['player'])) {
                $this->template->assign("message", "Úspěch");
            } else {
                $this->template->assign("message", "Něco se pokazilo");
            }
        }
        $this->template->assign("teams", $this->getTeams());
        $this->template->display("playerAdd.tpl");
    }

    public function getTeams()
    {
        $teams = $this->database->queryAll("SELECT teamID AS 'id', name FROM teams");
        return $teams;
    }
}