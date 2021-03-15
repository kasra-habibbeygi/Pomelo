<?php

    ini_set('display_error' , 'on');
    error_reporting(-1);
    ob_start();
    session_start();
    date_default_timezone_set('Asia/tehran');
    require_once 'config.php';
    require_once 'helper/base.php';

    if(strstr($_SERVER['REQUEST_URI'] , 'backend')){

        require_once 'helper/backend.php';
        $main = new Backend;

    }else{

        require_once 'helper/frontend.php';
        $main = new Frontend;

    }

?>