<!--
Module: Session
Purpose: To check the session after user logout
Author: Yubraj Ghimire 
Date: 23.10.2015 
-->

<?php
session_start();

if(!isset($_SESSION['login_fname']) )
{
	header("Location:../index.php");
	exit();
}
?>