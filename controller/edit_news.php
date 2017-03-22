<!--
Module: Edit News Controller
Purpose: Retrieving the data of specific news as per its editId to allow user to make some editing.
Author: Yubraj Ghimire 
Date: 23.10.2015 
-->
<?php
error_reporting(E_ALL);

	include("../model/database_configure.php");
		include("../model/function.php");
	$key=$_REQUEST['editId'];
	$sql = "Select * from cms where keyid=$key";
	$result = mysql_query($sql,$con);
	$arr = mysql_fetch_array($result);
		
	if(isset($_POST['submit'])and !empty($_POST['headline'])and !empty($_POST['date'])and !empty($_POST['news'])and !empty($_POST['author']))
	{

	
	$keyid=$_POST['k_id'];
	$headline=$_POST['headline'];
	$date=$_POST['date'];
	$author=$_POST['author'];
	$news=$_POST['news'];
	
	$a = new cms();
	$a->update($keyid,$headline,$date,$author,$news);
	
	header("Location:../view/news_listing.php");
	exit();
		
	}

?>