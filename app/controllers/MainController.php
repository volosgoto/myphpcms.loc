<?php

namespace app\controllers;

use ishop\App;

class MainController extends AppController {



    public function indexAction(){
//        debug($this->route);

//        echo __METHOD__;
        $this->setMeta(App::$app->getProperty('site_name'), 'главная', 'главная');
        $this->set(['key' => 'value', 'name' => 'Andrey', 'age' => '20']);
    }

}