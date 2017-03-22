<!--
Module: View News Controller
Purpose: Retrieving the data of specific news as per its viewId
Author: Yubraj Ghimire 
Date: 23.10.2015 
-->

<?php
error_reporting(E_ALL);
	include("../model/database_configure.php");
	$key=$_REQUEST['viewId'];
	$sql = "Select * from cms where keyid=$key";
	$result = mysql_query($sql,$con);
	$arr = mysql_fetch_array($result);


?>