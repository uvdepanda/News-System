<!--
Module: Admin Page
Purpose: Allowing access to admin panel to control over the news
Author: Yubraj Ghimire 
Date: 18.10.2015 
-->
<?php
include("../controller/session.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title >Admin Page</title>
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
    <div class="welcomeAdmin">Welcome to News Panel</div>
    <div class="brownHeight"></div>
    <div class="col-md-3">
      <div class="admin_left">
        <div class="admin_left_title">Admin Site</div>
        <ul class="list-group">
          <li class="list-group-item"><a href="../controller/logout.php">Logout</a></li>
        </ul>
        <div class="admin_left_title">Manage News </div>
        <ul class="list-group">
          <li class="list-group-item"><a href="../view/news_entry.php">News Entry</a></li>
          <li class="list-group-item"><a href="../view/news_listing.php">News Listing</a></li>
        </ul>
      </div>
    </div>
    <div class="col-md-9">
      <div class="admin_right"> </div>
    </div>
    <div class="cb"></div>
    <div class="footer">Copyright 2015. All Rights Reserved.</div>
  </div>
</div>
</body>
</html>
