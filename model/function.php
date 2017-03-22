<!--
Module: SQL Function
Purpose: List of all the sql functions to alter the news
Author: Yubraj Ghimire 
Date: 17.10.2015 
-->
<?php
class cms
{
	
	
	
	function insert($headline,$date,$author,$news)
	{	
		global $con;
		$sql="insert into cms (headline,date,author,news) values ('$headline','$date','$author','$news')";
			
			if(!mysql_query($sql,$con))		
				echo"News cannot be inserted!".mysql_error();
			else
			{
				echo  "News inserted Successfully!";
				return mysql_insert_id();
				
			}
	}
	
	function update($keyid,$headline,$date,$author,$news)
	{	
		global $con;
		$sql = "Update cms set 
							headline='$headline',
								date='$date',
								author='$author',
								news='$news'
								where
								keyid='$keyid'
							";
												 
		if(mysql_query($sql,$con))
		{
		
			echo " News updated Successfully!";
		}
		else
		{
			die("News cannot be updated!".mysql_error());
		}
	}
	
	function delete()
	{
		global $con;
		$key=$_REQUEST['deleteId'];
		
		$sql="delete from cms where keyid=$key";
		
			if(mysql_query($sql,$con))
		{
		
			echo "News deleted Successfully!";
		}
		else
		{
			die("News cannot be deleted!".mysql_error());
		}

	}
	
	
}
?>