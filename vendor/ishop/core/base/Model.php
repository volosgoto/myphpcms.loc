<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 27.04.18
 * Time: 10:32
 */

namespace ishop\base;
use ishop\Db;

abstract class Model {

    public $attributes = []; // Array of field of table from DB
    public $errors = [];
    public $rules = [];

    public function __construct(){
        Db::instance();
    }

}