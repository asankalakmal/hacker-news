<?php

// Automatically find the site directory path
$site_path = realpath(dirname(__FILE__));
define ('__SITE_PATH', $site_path);

// On demand load the PHP clasess
function __autoload($className) {

    $filename = realpath(dirname(__FILE__)) . '/application/' . str_replace('\\', '/', $className) . ".class.php";
    if (file_exists($filename)) {
        include($filename);
        if (class_exists($className)) {
            return TRUE;
        }
    }
    return FALSE;
}