<?php
session_start();
if (!$_SESSION['user_login'] && empty($_SESSION['user_login']) && !isset($_SESSION['user_login'])){
    header('Location: index.php');
    exit();
}