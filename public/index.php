<?php
echo 'Front controller' . '<br>';

//echo $_SERVER['QUERY_STRING'];

require_once dirname(__DIR__ )  . '/config/init.php';

new \ishop\Registry();