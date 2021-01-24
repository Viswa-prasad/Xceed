<?php
    session_start();
    unset($_SESSION["kid"]);
    //echo "logged out";
    header("Location:login and signup.html");
?>