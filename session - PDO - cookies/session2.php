<?php
    require_once('session3.php');
    //session_start();
    session_unset($_SESSION['nome']);
    echo $_SESSION["nome"];

    //session_destroy();
?>