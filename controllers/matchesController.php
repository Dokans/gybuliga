<?php

/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 06.03.2018
 * Time: 16:46
 */
class matchesController extends BaseController
{
    public function getAction()
    {
        if (empty($this->subActions)) {

        } else {
            $this->displayRound($this->subActions[0]);
            $this->template->assign('template', 'matchOverview.tpl');
        }
    }

    public function displayRound($round)
    {
        $try = $this->database->queryAll("SELECT * FROM round WHERE ? IN (SELECT roundID FROM round)", array($round));
        if (empty($try)) {
            throw new ErrorException("Error 500");
        }
        $ret = array();
        $matches = $this->database->queryAll("SELECT matchID AS 'id' FROM matches WHERE round = ?;", array($round));

        foreach ($matches as $matchID) {
            $match = new matchModule($this->database, $this->template);
            $match->load($matchID['id']);
            $ret[] = $match;
        }

        $this->template->assign("matches", $ret);
    }

    public function getRoundsInSeason($season)
    {
        $rounds = $this->database->queryAll("SELECT roundID AS 'id' FROM round WHERE seasonID = ?", array($season));

        $this->template->assign("rounds", $this->parseRounds($rounds));
    }

    private function parseRounds($rounds)
    {
        foreach ($rounds as $key => $round) {
            $rounds[$key]['number'] = $key + 1;
        }

        return $rounds;
    }

    public function getActiveMainSeason()
    {
        $seasonID = $this->database->queryOne("SELECT * FROM gybuliga_dev.season AS s LEFT JOIN gybuliga_dev.seasontype AS st ON s.seasonType = st.typeId WHERE typeId = 1 AND s.`from` < now() < `to`");
        return $seasonID;
    }
}