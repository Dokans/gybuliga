<?php

/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 19.02.2018
 * Time: 17:34
 */
class matchesAdmin extends baseAdmin
{
    public $link = "matches";
    public $name = "Zápasy";
    protected $permissionsNeeded = array(6);

    function display()
    {
        if (!isset($this->subActions) or empty($this->subActions)) {
            $this->displayOverview();

        } elseif ($this->subActions[0] == "edit") {
            $this->displayEdit();
        }
    }

    public function displayOverview()
    {
        $this->getSeasons();

        if (!isset($_POST['season'])) {
            $rounds = $this->getRoundsInSeason($this->getActiveMainSeason()['id']);
        } else {
            $rounds = $this->getRoundsInSeason($_POST['season']);
            $this->template->assign("selectedSeason", $_POST['season']);
        }
        $this->template->assign("rounds", $rounds);

        $this->template->display("matchesOverview.tpl");
    }

    public function getSeasons()
    {
        $seasons = $this->database->queryAll("SELECT seasonID AS id, name FROM season");
        $this->template->assign("seasons", $seasons);
        $this->template->assign("mainSeason", $this->getActiveMainSeason());

    }

    public function getActiveMainSeason()
    {
        $mainSeason = $this->database->queryOne("SELECT seasonID AS id, name FROM season WHERE seasonType = 1 AND `from` < now() < `to`");
        return $mainSeason;
    }

    public function getRoundsInSeason($seasonId)
    {
        $rounds = $this->database->queryAll("SELECT * FROM round WHERE seasonID = $seasonId ORDER BY `from`");

        foreach ($rounds as $key => $round) {
            $matches = $this->database->queryAll("SELECT * FROM matches WHERE round = $round[roundID]");

            foreach ($matches as $mKey => $match) {
                $m = new matchModule($this->database, $this->template);
                $m->load($match['matchID']);
                $matches[$mKey] = $m;
            }
            $rounds[$key]['matches'] = $matches;
        }
        return $rounds;
    }

    public function displayEdit()
    {
        $this->tryEdit();

        $this->template->assign("matchID", $this->subActions[1]);
        $this->getMatchDetails($this->subActions[1]);

        $this->template->display("matchEdit.tpl");

    }

    public function tryEdit()
    {
        if (isset($_POST['result'])) {
            $this->changeResult($_POST['matchID'], $_POST['result']);
        } elseif (isset($_POST['goalID']) and $_POST['playerID']) {
            $this->editStriker($_POST['playerID'], $_POST['matchID'], $_POST['goals']);
        } elseif (isset($_POST['teamID'])) {
            $this->addStriker($_POST['playerID'], $_POST['matchID'], $_POST['teamID'], $_POST['goals']);
        }elseif (isset($_POST['mvpAway']) and isset($_POST['mvpHome'])){
            $this->setMvp($_POST['mvpHome'], $_POST['mvpAway'], $_POST['matchID']);
        } elseif (isset($_POST['delete'])) {
            $this->deleteStriker($_POST['playerID'], $this->subActions[1]);
<<<<<<< HEAD
=======
        } elseif (isset($_POST['date'])){
            $this->editDate($_POST['date'], $_POST['matchID']);
>>>>>>> master
        }
    }

    /**
     * @param  int $matchID
     */
    public function getMatchDetails($matchID)
    {
        $match = new matchModule($this->database, $this->template);
        $match->load($matchID);
        $this->template->assign("match", $match);
        $this->template->assign("result", $match->result);
        $this->template->assign("homeTeam", $this->processHomeTeam($match));
        $this->template->assign("awayTeam", $this->processAwayTeam($match));
    }

    /**
     * @param matchModule $match
     * @return array
     */
    public function processHomeTeam($match)
    {
        $ret = array();
        $ret['name'] = $match->homeTeam->name;
        $ret['id'] = $match->homeTeam->id;
        $ret['strikers'] = $match->getHomeStrikers();
        $ret['players'] = $match->homeTeam->getRoster();
        return $ret;
    }

    /**
     * @param matchModule $match
     * @return array
     */
    public function processAwayTeam($match)
    {
        $ret = array();
        $ret['name'] = $match->awayTeam->name;
        $ret['id'] = $match->awayTeam->id;
        $ret['strikers'] = $match->getAwayStrikers();
        $ret['players'] = $match->awayTeam->getRoster();
        return $ret;
    }

    public function changeResult($matchID, $resultID = 0)
    {
        $match = new matchModule($this->database, $this->template);
        $match->load($matchID);
        $match->setResult($resultID);
    }

    public function addStriker($playerID, $matchID, $teamID, $goals)
    {
        $match = new matchModule($this->database, $this->template);
        $match->load($matchID);

        if ($match->addGoals($playerID, $teamID, $goals)) {
            $this->template->assign("success", "Goly přidány");
        } else {
            $this->template->assign("error", "Něco se nepovedlo");
        }
    }

    public function editStriker($playerID, $matchID, $goals)
    {
        $match = new matchModule($this->database, $this->template);
        $match->load($matchID);

        if ($match->editGoals($playerID, $goals)) {
            $this->template->assign("success", "Goly upraveny");
        } else {
            $this->template->assign("error", "Něco se nepovedlo");
        }
    }

    public function deleteStriker($playerID, $matchID)
    {
        $match = new matchModule($this->database, $this->template);
        $match->load($matchID);

        if ($match->deleteGoals($playerID)) {
            $this->template->assign("success", "Goly upraveny");
        } else {
            $this->template->assign("error", "Něco se nepovedlo");
        }
    }

    public function setMvp($homeMvp, $awayMvp, $matchID)
    {
        $match = new matchModule($this->database, $this->template);
        $match->load($matchID);
        if ($match->setMvpHome($homeMvp) and $match->setMvpAway($awayMvp)){
            $this->template->assign("success", "MVP upraveny");
        } else {
            $this->template->assign("error", "Něco se nepovedlo");
        }
    }
    public function editDate($date, $matchID)
    {
        $match = new matchModule($this->database, $this->template);
        $match->load($matchID);
        if ($match->setDate($date)){
            $this->template->assign("success", "Datum upraveno");
        } else {
            $this->template->assign("error", "Něco se nepovedlo");
        }
    }
}