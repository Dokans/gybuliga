<?php

/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 14.10.2017
 * Time: 20:04
 */
abstract class Module
{
    public $template;
    public $database;

    function __construct(Db $database, Smarty $template)
    {
        $this->database = $database;
        $this->template = $template;
        return $this;
    }
}