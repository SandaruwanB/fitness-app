<?php
    session_start();
    if(isset($_SESSION['user'])){}else{header('location : /auth');}
?>