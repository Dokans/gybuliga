<?php

define("_CORE_",  dirname(dirname(dirname(__FILE__))) . DIRECTORY_SEPARATOR);
define("_CONTROLLERS_", _CORE_ . "controllers" . DIRECTORY_SEPARATOR);
define("_MODULES_", _CORE_ . "modules" . DIRECTORY_SEPARATOR);
define("_ADMIN_", _CORE_ . "admin" . DIRECTORY_SEPARATOR);
define("_LIB_", _CORE_ . "libs" . DIRECTORY_SEPARATOR);
define("_IMG_", _CORE_ . "www" . DIRECTORY_SEPARATOR . "image" . DIRECTORY_SEPARATOR);
require_once "autoloader.php";
require_once _CORE_ . "modules/Database.php";
require_once  _LIB_ . "vendor/autoload.php";

$template = new Smarty();
$template->addTemplateDir(_CORE_ . "templates/admin/");
$template->addConfigDir("smarty/");
$template->setCompileDir(_CORE_ . "templates_c/admin/");
$config = require_once _CORE_ . "config" . DIRECTORY_SEPARATOR . "develop.php";

$database = $database = new Db($config['database']['server'], $config['database']['username'], $config['database']['password'], $config['database']['database_name']);
