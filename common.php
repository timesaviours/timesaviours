<?php

function autoload($file) {
    $url = './classes/'. strtolower($file).'.class.php';
    if (file_exists($url)) {
        require_once($url);
    }
}

spl_autoload_register('autoload');
