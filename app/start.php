<?php
    ini_set('display_errors','On');

    define('APP_ROOT',__DIR__);
    define('VIEW_ROOT', APP_ROOT . '/views');
    define('BASE_URL','http://localhost/myweb/cms');

    $db=new PDO('mysql:host=localhost:3306; dbname=cms','root','');

    require 'functions.php';

    