<?php
    // admin: test, pass: test
    require 'app/start.php';

    $pages = $db->query("
        SELECT id, label, slug
        FROM pages
    ")->fetchAll(PDO::FETCH_ASSOC);

    require VIEW_ROOT . '/home.php';
    ?>