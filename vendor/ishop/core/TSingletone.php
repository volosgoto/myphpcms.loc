<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 24.04.18
 * Time: 9:14
 */

namespace ishop;


trait TSingletone {

    private static $instance;

    public static function instance() {
        if (self::$instance === null) {
            self::$instance = new self;
        }
        return self::$instance;
    }
}