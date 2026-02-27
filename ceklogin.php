<?php 
session_start();

if (!isset($_SESSION['ses_user']) && !isset($_COOKIE['coo_user'])) {
    header("location:login.php");
    exit;
}
?>