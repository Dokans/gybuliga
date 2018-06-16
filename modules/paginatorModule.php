<?php

/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 07.03.2018
 * Time: 8:32
 */
class paginatorModule
{
    public $rows;
    public $limit;
    public $pages;

    public function __construct($limit, $rows)
    {
        $this->rows = $rows;
        $this->limit = $limit;
    }

    public function displayPages()
    {

    }

    public function processRows()
    {
        $count = count($this->rows);

        $pages = $count/$this->rows ;
        round($pages);

        $this->pages = $pages;
    }


}