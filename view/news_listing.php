<!--
Module: News Listing
Purpose: Listing all the available news
Author: Yubraj Ghimire 
Date: 21.10.2015 
-->
<?php

include("../controller/session.php");
include("../controller/news_listing.php");
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>News Listing</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../public/css/main.css"/>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <div class="row cms">
    <div class="cmsTitle">News System</div>
    <div class="welcomeAdmin">News Listing</div>
    <div class="brownHeight"></div>
    <div class="col-md-3">
      <div class="admin_left">
        <div class="admin_left_title">Admin Site</div>
        <ul class="list-group">
          <li class="list-group-item"><a href="../index.php">Logout</a></li>
        </ul>
        <div class="admin_left_title">Manage News </div>
        <ul class="list-group">
          <li class="list-group-item"><a href="../view/news_entry.php">News Entry</a></li>
          <li class="list-group-item"><a href="../view/news_listing.php">News Listing</a></li>
        </ul>
      </div>
    </div>
    <div class="col-md-9">
      <div class="admin_right">
        <table class="table table-bordered table-striped">
          <thead>
            <tr>
              <th class="tbl_head">Date</th>
              <th class="tbl_head">Author</th>
              <th class="tbl_head">Headline</th>
              <th class="tbl_head">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php			
	while($arr = mysql_fetch_array ($result))
	{
	?>
            <tr>
              <td><?=$arr['date'];?></td>
              <td><?=$arr['author'];?></td>
              <td><?=$arr['headline'];?></td>
              <td><a href="view_news.php?viewId=<?=$arr['keyid'];?>">View</a> | <a href="edit_news.php?editId=<?=$arr['keyid'];?>">Edit</a> | <a href="../controller/delete_news.php?deleteId=<?=$arr['keyid'];?>">Delete</a></td>
            </tr>
            <?php
	  
	}
	?>
          </tbody>
        </table>
      </div>
    </div>
    <div class="cb"></div>
    <div class="footer">Copyright 2015. All Rights Reserved.</div>
  </div>
</div>
</html>
<?
	mysql_close($con);
?>