<!--
Module: Delete News Controller
Purpose: Deleting only specific News as per its deleteId
Author: Yubraj Ghimire 
Date: 22.10.2015 
-->
<?php
error_reporting(E_ALL);
include("session.php");
	include("../model/function.php");

	include("../model/database_configure.php");
	$key=$_REQUEST['deleteId'];
	$sql = "select * from cms where keyid=$key";
	$result = mysql_query($sql,$con);
	$arr = mysql_fetch_array($result);

	
		$a = new cms();
		$a->delete();
		header("Location:../view/news_listing.php");
	exit();
		
	
?>
