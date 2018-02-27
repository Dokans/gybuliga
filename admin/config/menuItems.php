<?php
return array(
    "teams" => new teamsAdmin($this->database, $this->template),
    "players" => new playersAdmin($this->database, $this->template),
    "matches" => new matchesAdmin($this->database, $this->template),
);