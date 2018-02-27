<?php

class teamsModule extends ObjectModule
{
    public $id = "";
    public $name = "";
    public $urlLink = "";
    public $capitan;
    public $active;

    function load($param)
    {
        $team = $this->database->queryOne("SELECT * FROM teams WHERE teamID = '$param' OR teams.url =  '$param'");
        $this->id = $team['teamID'];
        $this->name = $team['name'];
        $this->urlLink = $team['url'];
        $this->active = $team['active'];
        if ($team['capitan'] == 0) {
            $team['capitan'] = 1;
        }
        $this->capitan = $team['capitan'];
        return $this;
    }

    function create($params)
    {
        // TODO: Implement create() method.
    }

    public function getCapitan()
    {
        $capitan = new playerModule($this->database, $this->template);
        return $capitan->load($this->capitan);
    }

    public function getTeamLogoPath()
    {
        $path = "../image/" . "teams" . DIRECTORY_SEPARATOR . "$this->id.jpg";
        return str_replace("D", "d", $path);
    }

    public function getRoster()
    {
        $ret = array();
        $players = $this->database->queryAll("SELECT playerID FROM gybuliga_dev.players WHERE current_main_team = $this->id");

        foreach ($players as $playerID) {
            $player = new playerModule($this->database, $this->template);
            $player->load($playerID['playerID']);
            $ret[] = $player;
        }

        return $ret;
    }

    public function getTeamDescription()
    {
        return $this->database->queryOne("SELECT text FROM team_texts_info WHERE team = $this->id")['text'];
    }

    public function getTableInfoInSeason($seasonID)
    {
        $matchesInSeason = $this->database->queryAll("SELECT matchID, team_away, team_home, result FROM matches AS m JOIN round as r ON m.round = r.roundID WHERE r.seasonID = $seasonID[seasonID] AND m.team_home = $this->id OR m.team_away = $this->id");
        $pointsAndBalance = $this->getPointsInSeason($matchesInSeason);
        $goalsScored = $this->getGoalsScored($matchesInSeason);
        $goalsGained = $this->getGoalsGained($matchesInSeason);

        return array(
            "points" => $pointsAndBalance['points'],
            "matchBalance" => $pointsAndBalance['matchBalance'],
            "GF" => $goalsScored,
            "GA" => $goalsGained,
            "matches" => count($matchesInSeason));
    }

    private function getPointsInSeason($matchesInSeason)
    {
        $points = 0;
        $matchBalance = array(
            "wins" => 0,
            "loses" => 0,
            "OW" => 0,
            "OL" => 0
        );
        foreach ($matchesInSeason as $match) {
            if ($this->id == $match['team_away']) {
                if ($match['result'] == 2) {
                    $points += 1;
                    $matchBalance['OL'] += 1;
                } elseif ($match['result'] == 4) {
                    $points += 2;
                    $matchBalance['OW'] += 1;
                } elseif ($match['result'] == 3) {
                    $points += 3;
                    $matchBalance['wins'] += 1;
                } elseif ($match['result'] == 5) {
                    break;
                } else {
                    $matchBalance['loses'] += 1;
                }
            } elseif ($this->id == $match['team_home']) {
                if ($match['result'] == 2) {
                    $points += 2;
                    $matchBalance['OW'] += 1;
                } elseif ($match['result'] == 4) {
                    $points += 1;
                    $matchBalance['OL'] += 1;
                } elseif ($match['result'] == 1) {
                    $points += 3;
                    $matchBalance['wins'] += 1;
                } elseif ($match['result'] == 5) {
                    break;
                } else {
                    $matchBalance['loses'] += 1;
                }
            }
        }
        return array("points" => $points, "matchBalance" => $matchBalance);
    }

    private function getGoalsScored($matches)
    {
        $GF = 0;
        foreach ($matches as $match) {
            $goals = $this->database->queryAll("SELECT goals FROM match_goals WHERE matchID = $match[matchID] AND teamID = $this->id");
            foreach ($goals as $goal) {
                $GF += $goal['goals'];
            }
        }
        return $GF;
    }

    private function getGoalsGained($matches)
    {
        $GA = 0;
        foreach ($matches as $match) {
            $goals = $this->database->queryAll("SELECT goals FROM match_goals WHERE matchID = $match[matchID] AND teamID != $this->id");
            foreach ($goals as $goal) {
                $GA += $goal['goals'];
            }
        }
        return $GA;
    }

    public function setDescription($description)
    {
        $oldText = $this->database->queryOne("SELECT text FROM gybuliga_dev.team_texts_info WHERE team = " . $this->id);
        if ($oldText != null) {
            $this->database->query("UPDATE team_texts_info SET text = '$description' WHERE team = " . $this->id);
        } else {
            $this->database->query("INSERT INTO team_texts_info (team, text) VALUE ($this->id, '$description')");
        }
    }

    public function setName($name)
    {
        $this->name = $name;
        $this->database->query("UPDATE teams SET name = '$name' WHERE teamID = " . $this->id);
    }

    public function setCapitan($capitanID)
    {
        $this->capitan = $capitanID;
        $this->database->query("UPDATE teams SET capitan = '$capitanID' WHERE teamID = " . $this->id);
    }

    public function setActive($active)
    {
        $this->database->query("UPDATE teams SET active = '$active' WHERE teamID = " . $this->id);
    }
}