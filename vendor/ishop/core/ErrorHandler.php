<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 24.04.18
 * Time: 10:30
 */

namespace ishop;


class ErrorHandler {
    public function __construct() {
        if (DEBUG) {
            error_reporting(E_ALL);
        } else {
            error_reporting(0);
        };

        set_exception_handler([$this, 'exeptionHandler']);
    }

    public function exeptionHandler($e) {
        $this->logErrors($e->getMessage(), $e->getFile(), $e->getLine());
        $this->displayError('Исключение', $e->getMessage(), $e->getFile(), $e->getLine(), $e->getCode());
    }

    protected function logErrors($message = '',  $file = '', $line = '') {
        error_log("[" . date('Y-m-d H:i:s') . "] Текст ошибки: {$message} | Файл: {$file} | Строка: {$line}\n=================\n", 3, ROOT . '/tmp/errors.log');
    }

    protected function displayError($errno, $errstr, $errfile, $errline, $errresponce = 404) {
        http_response_code($errresponce);
        if($errresponce == 404 && !DEBUG){
            require WWW . '/errors/404.php';
            die;
        }
        if(DEBUG){
            require WWW . '/errors/dev.php';
        }else{
            require WWW . '/errors/prod.php';
        }
        die;
    }

}