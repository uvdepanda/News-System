<!--
Module: News Entry Controller
Purpose: Inserting the data of user input as a new news into the database
Author: Yubraj Ghimire 
Date: 23.10.2015 
-->
<?php
error_reporting(E_ALL);
include ("../model/database_configure.php");
include ("../model/function.php");


	if(isset($_POST['SAVE'])and !empty($_POST['headline'])and !empty($_POST['date'])and !empty($_POST['news'])and !empty($_POST['date']))
	{
	

	$headline=$_POST['headline'];
	$date=$_POST['date'];
	$author=$_POST['author'];
	$news=$_POST['news'];
	
	$a = new cms();
	$a->insert($headline,$date,$author,$news);
	
	header("Location:../view/news_listing.php");
	exit();
	}
?>