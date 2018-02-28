<?php


abstract class BaseController
{
    public $mainAction;
    public $subActions;
    public $database;
    public $template;

    /**
     * BaseController constructor.
     * @param string $mainAction
     * @param array $subActions
     * @param Smarty $template
     * @param Db $database
     */
    public function __construct($mainAction, $subActions, $template, $database)
    {
        $this->subActions = $subActions;
        $this->mainAction = $mainAction;
        $this->database = $database;
        $this->template = $template;
    }

    abstract public function getAction();

    abstract public function setPageInfo();
}