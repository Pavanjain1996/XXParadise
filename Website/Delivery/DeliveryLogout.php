<?php
session_start();
unset($_SESSION['delivery']);
header('location:Index.php');
?>