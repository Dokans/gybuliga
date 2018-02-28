<?php

/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 22.02.2018
 * Time: 21:16
 */
class statisticController extends BaseController
{
    public function getAction()
    {
        if ($this->subActions[0] = "topStrikers"){
            $this->displayTopStrikers();
        }else{
            throw new ErrorException();
        }

    }

    public function setPageInfo()
    {
        $this->template->assign("page", array('title' => 'GyBuLiga'));
    }


    public function displayTopStrikers()
    {
        $this->template->assign("strikers", $this->getTopStrikers());
        $this->template->assign("template", "topStrikers.tpl");
    }

    public function getTopStrikers()
    {
        $strikers = $this->database->queryAll("SELECT p.playerID, sum(mg.goals) AS goals FROM players p JOIN match_goals mg ON p.playerID = mg.playerID GROUP BY p.playerID ORDER BY goals DESC LIMIT 10");

        foreach ($strikers as $key=> $striker) {
            $player = new playerModule($this->database, $this->template);
            $player->load($striker['playerID']);
            $strikers[$key]['player'] = $player;
        }

        return $strikers;
    }
}