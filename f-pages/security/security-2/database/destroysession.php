<?php
session_start();
$username = $_SESSION['username'];
header("location:../../../../index.php?logout=$username");
unset($_SESSION['user']);
unset($_SESSION['username']);
session_unset();
?>