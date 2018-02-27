<?php

function autoload($class)
{
    try {
        if (preg_match('/Controller$/', $class)) {
            if (file_exists(_CONTROLLERS_ . $class . ".php")) {
                require_once(_CONTROLLERS_ . $class . ".php");
            } else {
                throw new Exception("Page not found", 404);
            }
        }elseif (preg_match('/Module$/', $class)){
            if (file_exists(_MODULES_ . $class . ".php")){
                require_once(_MODULES_ . $class . ".php");
            }else{
                throw new Exception("Error", 500);
            }
        }else{
            try{
                require_once _LIB_ . "vendor/autoload.php";
            }catch (Exception $exception){
                     throw new Exception("Error", 500);

            }

        }
    }
    catch (Exception $exception){
        throw new ErrorException($exception->getMessage(), $exception->getCode());
    }
}

spl_autoload_register("autoload");