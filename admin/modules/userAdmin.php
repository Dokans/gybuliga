<?php

/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 14.02.2018
 * Time: 7:58
 */
class userAdmin extends baseAdmin
{
    function display()
    {
      if ($this->subActions[0] == "logout"){
          session_destroy();
          header("Location: /gadmin");
      }
    }

}