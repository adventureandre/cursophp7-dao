<?php

spl_autoload_register(function($class) {

    $filename = 'class'.DIRECTORY_SEPARATOR.$class.".php";

    if (file_exists($filename)):

        require_once $filename;

    endif;
});

