<?php

/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 27.10.2017
 * Time: 1:13
 */
class matchModule extends ObjectModule

{
    public $matchID;
    public $homeTeam;
    public $awayTeam;
    public $result;
    public $date;
    public $round;
    public $HomeMVP;
    public $AwayMVP;

    public function load($id)
    {
        $match = $this->database->queryOne("SELECT * FROM matches WHERE matchID = $id");

        $this->matchID = $match['matchID'];
        $this->homeTeam = $this->getTeam($match['team_home']);
        $this->awayTeam = $this->getTeam($match['team_away']);
        $this->result = $match['result'];
        $this->date = $match['date'];
        $this->round = $match['round'];
        $this->AwayMVP = $match['mvp_away'];
        $this->HomeMVP = $match['mvp_home'];
    }

    function create($params)
    {
        // TODO: Implement create() method.
    }

    public function setResult($resultID)
    {
        try {
            $this->database->query("UPDATE matches SET result = $resultID WHERE matchID = $this->matchID");
            return true;
        } catch (mysqli_sql_exception $exception) {
            return false;
        }

    }

    public function getTeam($id)
    {
        $team = new teamsModule($this->database, $this->template);
        $team->load($id);
        return $team;
    }

    public function getHomeStrikers()
    {
        $strikers = $this->database->queryAll("SELECT matchID, id as goalID, teamID, players.playerID, name, surname, goals FROM match_goals JOIN players ON match_goals.playerID = players.playerID WHERE matchID = $this->matchID AND teamID = " . $this->homeTeam->id . " ORDER BY match_goals.goals DESC");
        return $strikers;
    }

    public function getAwayStrikers()
    {
        $strikers = $this->database->queryAll("SELECT matchID, id as goalID, teamID, players.playerID, name, surname, goals FROM match_goals JOIN players ON match_goals.playerID = players.playerID WHERE matchID = $this->matchID AND teamID = " . $this->awayTeam->id . " ORDER BY match_goals.goals DESC");
        return $strikers;
    }

    public function addGoals($playerID, $teamID, $goals)
    {
        try {
            if ($teamID == $this->homeTeam->id or $teamID == $this->awayTeam->id) {
                $this->database->query("INSERT INTO match_goals (matchID, playerID, goals, teamID) VALUE ($this->matchID, $playerID, $goals, $teamID)");
                return true;
            } else {
                return false;
            }
        } catch (Exception $e) {
            return false;
        }

    }

    public function editGoals($playerID, $goals)
    {
        try {
            $this->database->query("UPDATE match_goals SET goals = $goals WHERE matchID = $this->matchID AND playerID = $playerID");
            return true;
        } catch (Exception $e) {
            return false;
        }
    }

    public function deleteGoals($playerID)
    {
        try {
            $this->database->query("DELETE FROM match_goals WHERE matchID = ? AND playerID = ?", array($this->matchID, $playerID));
            return true;
        } catch (Exception $€) {
            return false;
        }
    }

    public function getHomeGoals()
    {
        $ret = $this->database->queryOne("SELECT sum(goals) AS x  FROM match_goals WHERE teamID = " . $this->homeTeam->id . " AND matchID = " . $this->matchID);
        return $ret['x'];
    }


    public function getAwayGoals()
    {
        return $this->database->queryOne("SELECT sum(goals) AS y FROM match_goals WHERE teamID = " . $this->awayTeam->id . " AND matchID = " . $this->matchID)['y'];
    }

    public function setMvpHome($playerID)
    {
        try {
            $this->database->query("UPDATE gybuliga_dev.matches SET mvp_home = $playerID WHERE matchID = " . $this->matchID);
            return true;
        } catch (mysqli_sql_exception $exception) {
            return false;
        }
    }

    public function setMvpAway($playerID)
    {
        try {
            $this->database->query("UPDATE gybuliga_dev.matches SET mvp_away = $playerID WHERE matchID = " . $this->matchID);
            return true;
        } catch (mysqli_sql_exception $exception) {
            return false;
        }
    }

    public function getHomeMVPName()
    {
        try {

            $player = new playerModule($this->database, $this->template);
            $player->load($this->HomeMVP);
            return $player->name . " " . $player->surname;
        } catch (Exception $e) {
            return false;
        }
    }

    public function getAwayMVPName()
    {
        try {

            $player = new playerModule($this->database, $this->template);
            $player->load($this->AwayMVP);
            return $player->name . " " . $player->surname;
        } catch (Exception $e) {
            return false;
        }
    }
}