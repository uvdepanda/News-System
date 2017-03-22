<!--
Module: Logout
Purpose: Allowing User to logout from admin panel
Author: Yubraj Ghimire 
Date: 20.10.2015 
-->

<?php
session_start();
unset($_SESSION['login_fname']);
session_destroy();
header("location:../index.php");

?>
