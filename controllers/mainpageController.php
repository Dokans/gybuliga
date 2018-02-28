<?php

/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 06.10.2017
 * Time: 20:16
 */
class mainpageController extends BaseController
{
    function getAction()
    {

        $this->showContent();

    }

    public function setPageInfo()
    {
        $this->template->assign("page", array('title' => 'GyBuLiga'));
    }


    public function showContent()
    {

        $test = $this->database->queryAll("SELECT * FROM gybuliga_dev.teams ORDER BY rand() LIMIT 4");
        $this->template->assign("test", $test);
        $this->getBanners();
        $this->getArticlesForMainPage();
        $this->template->assign("template", "hpPage.tpl");
    }

    public function getBanners()
    {

        $banners = $this->database->queryAll("SELECT * FROM articles JOIN banners ON articles.articleID = banners.articleID WHERE publishDate <= now() AND active = 1");
        $this->template->assign("banners", $banners);
    }

    public function getArticlesForMainPage()
    {
        $articles = $this->database->queryAll("SELECT * FROM articles WHERE publishDate <= now()");
        $this->template->assign("articles", $articles);
    }


}