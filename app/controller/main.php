<?php
    include_once("../../system/connection.php");
    include_once("../../system/class/Database.php");

    if ( empty($_GET['mod']) ) {
        include_once('home.php');
    } else {
        include_once("{$_GET['mod']}.php");
    }

    function render_page($page,$data=NULL) {
        include_once("../../system/connection.php");
        include_once("../../system/class/Database.php");
        if ( $data ) {
            extract($data);
        }
        include_once("../view/header.php");
        include_once("../view/navigation.php");
        include_once("../view/{$page}.php");
        include_once("../view/footer.php");
    }

    function view() {
        include_once("../../system/connection.php");
        include_once("../../system/class/Database.php");
        echo 'dsad';
    }