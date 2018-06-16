<?php

/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 28.02.2018
 * Time: 17:46
 */
class seasonModule extends objectModule
{
    public $id;
    public $from;
    public $to;
    public $seasonType;
    public $name;

    function load($id)
    {
        $season = $this->database->queryOne("SELECT * FROM season WHERE seasonID = ?", array($id));

        $this->id = $season['seasonID'];
        $this->from = $season['from'];
        $this->to = $season['to'];
        $this->name = $season['name'];
    }

    function create($params)
    {
        // TODO: Implement create() method.
    }



}