<?php 
session_start();
include('User.php');
session_destroy();
header('location: index.php');
?>