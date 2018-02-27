<?php

/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 01.11.2017
 * Time: 8:40
 */
abstract class ObjectModule extends Module
{
    abstract function load($id);

    abstract function create($params);
}