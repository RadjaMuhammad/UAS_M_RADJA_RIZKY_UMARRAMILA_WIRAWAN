<?php 
session_start();
if(!isset($_SESSION['ses_email']) AND !isset($_COOKIE['coo_email'])){
    header("location:http://localhost/UAS/UAS_M_RADJA_RIZKY_UMARRAMILA_WIRAWAN/login.php");
}
?>