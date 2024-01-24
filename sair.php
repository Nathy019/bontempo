<?php 
session_start();
unset($_SESSION['email_login']);
unset($_SESSION['senha']);
header('location: login.php')
?>