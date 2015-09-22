<?php
/**
 * Title           index.php file of the 
 * @author         Asanka - <<asankalakmal[at]gmail[dot]com>>
 * created on      21-09-2015, 10:30AM by Asanka
 * updated on      
 *
 * Description     This file include routing part of the Hacker news project 
 *
 * */



/*** error reporting on ***/
error_reporting(E_ALL);

require_once 'bootstrap.php';

if (!isset($_GET['controller'])) {
    $controllerName = 'controllers\\IndexController';
    $action         = 'indexAction';
} else {
    $controllerName     = 'controllers\\' . ucfirst($_GET['controller']) . 'Controller';
    $action             = $_GET['action'] . 'Action';
}

$controller = new $controllerName();
$controller->$action();