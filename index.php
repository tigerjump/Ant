<?php
/*
 * Entry script
 */

if(version_compare(PHP_VERSION, '5.3.0', '<')){
    die('This require PHP is 5.3+!');
}

//Application path
define('APP_PATH', './Apps');

require './Core/Init.php';
