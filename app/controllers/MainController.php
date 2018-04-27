<?php

namespace app\controllers;

use ishop\App;

class MainController extends AppController {

    public function indexAction(){
        $posts = \R::findAll('test');
        //debug($posts);

        $this->setMeta(App::$app->getProperty('site_name'), 'главная', 'главная');
        $this->set(compact('posts'));
    }

}