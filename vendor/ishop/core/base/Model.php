<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 27.04.18
 * Time: 10:32
 */

namespace ishop\base;


abstract class Model {

    public $attributes = [];
    public $errors = [];
    public $rules = [];

    public function __construct(){

    }

}