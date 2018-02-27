<?php

/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 01.11.2017
 * Time: 11:55
 */
class articleModule extends ObjectModule
{
    function load($id)
    {

    }

    function create($params)
    {
       try{
           $this->database->query("INSERT");
       }catch (Exception $e){

       }
    }

}