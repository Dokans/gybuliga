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

}