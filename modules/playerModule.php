<?php

class playerModule extends ObjectModule
{
    /**
     * @var int id
     * @var teamsModule $currentTeam
     */
    public $id;
    public $name = "";
    public $surname = "";
    public $number = "";
    public $currentTeam;
    public $contact;
    public $class;

    public function load($id)
    {
        $this->id = $id;

        $player = $this->database->queryOne("SELECT * FROM gybuliga_dev.players WHERE playerID = $id");

        $this->name = $player['name'];
        $this->surname = $player['surname'];
        $this->currentTeam = new teamsModule($this->database, $this->template);
        $this->currentTeam->load($player['current_main_team']);
        $this->number = $player['number'];
        if ($player['contact'] != "") {
            $this->contact = $player['contact'];
        }
        $this->class = $player['class'];
        return $this;
    }


    public function create($params)
    {
        try {
            $this->database->query("INSERT players (name, surname, number, class, current_main_team) VALUES (?, ?, ?, ?, ?, ?)", array($params['name'], $params['surname'], $params['number'], $params['class'], $params['current_team']));
            return true;
        } catch (mysqli_sql_exception $exception) {
            return false;
        }
    }

    public function getName()
    {
        return $this->name . " " . $this->surname;
    }

    public function getGoalsForCurrentTeam()
    {
        return $this->database->queryOne("SELECT sum(mg.goals) AS goals
                                        FROM match_goals AS mg
                                        JOIN matches AS m ON mg.matchID = m.matchID
                                        JOIN round AS r ON m.round = r.roundID
                                        JOIN season AS s ON r.seasonID = s.seasonID
                                          WHERE r.seasonID = 1 AND mg.playerID = $this->id AND mg.teamID = " . $this->currentTeam->id)['goals'];
    }

    public function getPastTeams()
    {
        $teams = $this->database->queryAll("SELECT te.name
                                                FROM teams AS te LEFT JOIN transfers AS tr ON te.teamID = tr.toTeam
                                                WHERE playerID = " . $this->id . " AND tr.fromTeam NOT IN (SELECT players.current_main_team
                                                                                                           FROM players
                                                                                                           WHERE players.playerID = " . $this->id . ")
                                                ORDER BY tr.transferID");
        foreach ($teams as $team) {
            $ret[] = $team['name'];
        }
        return $ret;
    }

    public function transferTeams($toTeam)
    {

        try {
            $this->database->query("INSERT INTO transfers(playerID, fromTeam, toTeam, date) VALUE ($this->id, " .  $this->currentTeam->id . ", $toTeam, now())");
            $this->database->query("UPDATE players SET current_main_team = $toTeam WHERE playerID = $this->id");
            $team = new teamsModule($this->database, $this->template);
            $this->currentTeam = $team->load($toTeam);
            return true;
        } catch (mysqli_sql_exception $e) {
            return false;
        }

    }

    public function changeName($name, $surname)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->database->query("UPDATE players SET name = '$name', surname = '$surname' WHERE playerID = " . $this->id);
    }

    public function changeClass($class)
    {
        $this->class = $class;
        $this->database->query("UPDATE players SET class = '$class' WHERE playerID = " . $this->id);
    }

    public function changeContact($contact)
    {
        $this->contact = $contact;
        $this->database->query("UPDATE players SET contact = '$contact' WHERE playerID = " . $this->id);
    }

    public function changeNumber($number)
    {
        $this->number = $number;
        $this->database->query("UPDATE players SET number = '$number' WHERE playerID = " . $this->id);
    }


}