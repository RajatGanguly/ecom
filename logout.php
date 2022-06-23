<?php
    if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
        session_start();
        session_unset();
        session_destroy();
        header('location:./');
        exit;
    }
?>