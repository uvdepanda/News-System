<!--
Module: Authentication Controller
Purpose: Authenticating the username and password provided by the user before login into the admin panel
Author: Yubraj Ghimire 
Date: 23.10.2015 
-->
<?php
error_reporting(E_ALL);
session_start();
include "../model/database_configure.php";


if(isset($_POST['username']) and !empty($_POST['username']))
{
	$username = $_POST['username'];
	$password = $_POST['password'];
	$sql="select * from admin where username='$username' and password='$password'";
	
	$result=mysql_query($sql);
	$row=mysql_fetch_array($result);
	
	$count=mysql_num_rows($result);
	if($count==1)
	{

		$_SESSION['login_fname'] = $username;
			
		header("location: ../view/admin.php");
	}
	else
	{
	
	header("location: ../index.php?invalid" );


	}
	
}
?>
