<?php

/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 10.11.2017
 * Time: 18:23
 */
class menuAdmin extends BaseAdmin
{

    protected $permissionsNeeded = array();
    private $menuItems;
    public $name = "Menu";


    public function display()
    {
        $links = array();
        foreach ($this->menuItems as $key => $menuItem) {
            $links[$key]['link'] = $menuItem->link;
            $links[$key]['name'] = $menuItem->name;
        }
        $this->template->assign("menuItems", $links);
    }

    public function showMenu()
    {
        if ($this->hasPermissions()) {
           $menuItems = $this->loadMenuItems();

           foreach ($menuItems as $key => $menuItem){
               if (!$menuItem->hasPermissions()){
                   unset($menuItems[$key]);
               }

           }
            $this->menuItems = $menuItems;

        }
        $this->display();
    }

    public function loadMenuItems()
    {
        return require_once _ADMIN_ . "config" . DIRECTORY_SEPARATOR . "menuItems.php";
    }
}