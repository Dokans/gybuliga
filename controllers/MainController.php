<?php

/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 05.10.2017
 * Time: 18:14
 */
class MainController implements urlParserModule
{
    /**
     * @var Smarty $template
     * @var Db $database
     */
    public $template;
    public $database;
    private $url;
    private $mainAction;
    private $subActions;
    private $request;

    public function __construct($url, $template, $database)
    {
        $this->url = $url;
        $this->template = $template;
        $this->database = $database;
        $this->request = $_REQUEST;
        $this->parseUrl();
        $this->getHeader();
        $this->getController();
    }

    /**
     *
     */
    public function parseUrl()
    {
        $parsedUrl = explode("/", $this->url);
        unset($parsedUrl[0]);
        if(!isset($parsedUrl[1]) or $parsedUrl[1] == ""){
            $this->mainAction = "mainpage";
        }else{
            $this->mainAction = $parsedUrl[1];
            unset($parsedUrl[1]);
            $this->subActions = array_values($parsedUrl);
        }

    }
    /**
     *
     */
    private function getController(){
        $className = $this->mainAction . "Controller";
        try{
            $controler = new $className($this->mainAction, $this->subActions, $this->template, $this->database);
            $controler->getAction();

        }catch(ErrorException $e){
            $controler = new errorController($this->mainAction, $this->subActions, $this->template, $this->database, $e->getMessage());
            $controler->getAction();
        }
        catch (PDOException $e){
            $controler = new errorController($this->mainAction, $this->subActions, $this->template, $this->database, "Error 500");
            $controler->getAction();
        }
    }

    public function getHeader()
    {
        $this->getGroups();
        $this->getMatches();
    }

    public function getGroups()
    {
        $controller = new groupsController("", array(), $this->template, $this->database);
        $this->template->assign("groups", $controller->getGroups($controller->getActiveMainSeason()['seasonID']));
    }

    public function getMatches()
    {
        $controller = new matchesController("", array(), $this->template, $this->database);
        $this->template->assign("round", $controller->getRoundsInSeason($controller->getActiveMainSeason()['seasonID']));
    }
}