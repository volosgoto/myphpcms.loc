<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 26.04.18
 * Time: 10:11
 */

namespace app\controllers;


use app\models\AppModel;
use ishop\base\Controller;

class AppController extends Controller {

    public function __construct($route) {
        parent::__construct($route);
        new AppModel();
    }

}