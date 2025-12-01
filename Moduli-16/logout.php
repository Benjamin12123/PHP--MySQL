<?php 
    session_start();
    include_once('config.once');
    session_destroy();
    header("Location: login.php")
?>