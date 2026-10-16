<?php
    $page = $_GET['page'];
    
    if (isset($page)) {
        if (!is_string($page) || !preg_match('/^[A-Za-z0-9_-]+$/', $page)) {
            $page = 'index';
        }

        include  '/var/www/html/'. $page. ".php";
    }

    else {
        include 'index.php';
    }
?>