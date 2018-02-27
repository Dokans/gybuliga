<?php

/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 10.11.2017
 * Time: 19:30
 */
class controllerAdmin extends BaseController implements urlParserModule
{
    private $url = "";

    public function __construct(Smarty $template, Db $database)
    {
        parent::__construct("", array(), $template, $database);
        $this->url = parse_url($_SERVER['REQUEST_URI'])['path'];
        $this->parseUrl();
    }

    function getAction()
    {
        $this->showMenu();

        if (isset($this->mainAction) and $this->mainAction != "") {
            $this->showAdminItem();
        } else {
            $this->showHP();
        }
    }

    public function parseUrl()
    {
        $parsedUrl = explode("/", $this->url);
        unset($parsedUrl[0]);
        unset($parsedUrl[1]);
        $this->mainAction = $parsedUrl[2];
        unset($parsedUrl[2]);
        $this->subActions = array_values($parsedUrl);

    }

    public function showMenu()
    {
        $menu = new menuAdmin($this->database, $this->template);
        $menu->showMenu();
    }

    public function showAdminItem()
    {
        try {
            $class = $this->mainAction . "Admin";
            $page = new $class($this->database, $this->template, $this->mainAction, $this->subActions);
            $page->display();
        } catch (Exception $exception) {
            $this->showError($exception->getMessage());
        }
    }

    public function setMessage($message)
    {
        $this->template->assign("message", $message);
    }

    public function showHP()
    {

        $this->template->display('HP.tpl');
    }

    public function showError($error)
    {
        $this->setMessage($error);
        $this->showHP();
    }
}