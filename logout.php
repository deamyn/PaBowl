<?php
    session_start();
    session_unset();
    session_destroy();
    header("location: index.php");
    // delete cookie
    setcookie('email', '', time() - 3600);
    setcookie('password', '', time() - 3600);
    exit;
?>