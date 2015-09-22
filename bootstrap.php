<?php

$site_path = realpath(dirname(__FILE__));
define ('__SITE_PATH', $site_path);

function autoload($className) {

    $filename = realpath(dirname(__FILE__)) . '/application/' . str_replace('\\', '/', $className) . ".class.php";
    if (file_exists($filename)) {
        include($filename);
        if (class_exists($className)) {
            return TRUE;
        }
    }
    return FALSE;
}
spl_autoload_register('autoload');