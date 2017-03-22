<!--
Module: News Listing Controller
Purpose: Retrieving the all possible data of every news available in database
Author: Yubraj Ghimire 
Date: 23.10.2015 
-->

<?php
error_reporting(E_ALL);
	include("../model/database_configure.php");
	$sql = "Select * from cms ";
	$result = mysql_query($sql,$con);

?>