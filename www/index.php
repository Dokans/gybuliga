<?php

require_once "../config/inc.php";


$controller = new MainController(parse_url($_SERVER['REQUEST_URI'])['path'], $template, $database);

$template->display($template->getTemplateVars('template'));


