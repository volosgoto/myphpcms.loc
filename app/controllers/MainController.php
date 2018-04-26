<?php

namespace app\controllers;
use ishop\base\Controller;

class MainController extends Controller {




    public function indexAction(){
        debug($this->controller); die;

        echo __METHOD__;
    }

}