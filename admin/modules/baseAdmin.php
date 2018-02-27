<?php

/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 10.11.2017
 * Time: 18:16
 */
abstract class BaseAdmin extends Module
{
    protected $permissionsNeeded = array();
    public $link;
    public $mainAction = "";
    public $subActions = "";
    public $name;


    public function __construct(Db $database, Smarty $template, $mainAction = "", $subActions = "")
    {
        parent::__construct($database, $template);

        $this->mainAction = $mainAction;
        $this->subActions = $subActions;

        return $this;
    }

    public function hasPermissions()
    {

        $permissionsNeeded = $this->permissionsNeeded;
        if (isset($_SESSION['permission'])) {
            foreach ($permissionsNeeded as $key => $permissionNeeded) {
                foreach ($_SESSION['permission'] as $permission) {
                    if ($permission['id'] == 1){
                        return true;
                    }
                    if ($permissionNeeded == $permission['id']) {
                        unset($permissionsNeeded[$key]);
                    }
                }
            }
            if (empty($permissionsNeeded)) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    abstract function display();

    public function showMenuLink()
    {
        if ($this->hasPermissions()) {
            return $this->link;
        } else {
            return false;
        }
    }
}