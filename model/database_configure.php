<!--
Module: Database Connection
Purpose: Allow user to access the database
Author: Yubraj Ghimire 
Date: 17.10.2015 
-->
<?php
	$con=mysql_connect("localhost","root","");
	
	mysql_select_db("news-system", $con);
?>
