<?php
    require 'app/start.php';
    if (empty($_GET['page'])){
        $page=false;
    }
    else{
        //get slug from home.php
        $slug=$_GET['page'];

        //get data from database with that slug
        $page=$db->prepare("
            SELECT *
            FROM pages
            WHERE slug = :slug
            LIMIT 1
        ");

        $page->execute(['slug'=>$slug]);

        $page = $page->fetch(PDO::FETCH_ASSOC);

        require VIEW_ROOT . '/page/show.php';
    }
