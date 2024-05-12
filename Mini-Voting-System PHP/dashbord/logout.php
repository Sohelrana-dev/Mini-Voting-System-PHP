<?php 
session_start();
session_destroy();
header('location:commissioner/commissioner_login.php');

?>