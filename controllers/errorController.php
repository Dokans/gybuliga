<?php

/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 07.10.2017
 * Time: 9:18
 */
class errorController extends BaseController
{
    public function __construct($mainAction, array $subActions, Smarty $template, Db $database, $message)
    {
        parent::__construct($mainAction, $subActions, $template, $database);
        $this->template->assign("message", $message);
    }

    function getAction()
    {
        $this->template->assign("template", "error.tpl");
    }

    public function setPageInfo()
    {
        $this->template->assign("page", array('title' => 'Chyba | GyBuLiga'));
    }


}