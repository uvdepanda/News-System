<!--
Module: Edit News
Purpose: Editing the news
Author: Yubraj Ghimire 
Date: 20.10.2015 
-->
<?php
include("../controller/session.php");
include("../controller/edit_news.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Edit News</title>
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
    <div class="welcomeAdmin">Edit News</div>
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
        <form class="form-horizontal" name="news_entry" role="form" method="POST" action="" onSubmit="multipart/form-data" >
          <input type="hidden" name="k_id" value="<?php echo $arr['keyid'];?>">
          <div class="form-group">
            <label class="control-label col-sm-2" for="headline">News Headline:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="headline" name="headline" value="<?=$arr['headline'];?>">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="date">Date:</label>
            <div class="col-sm-10">
              <input type="date" class="form-control" id="date" name="date" value="<?=$arr['date'];?>">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="date">Author:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="author" name="author" value="<?=$arr['author'];?>">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="date">News:</label>
            <div class="col-sm-10">
              <textarea class="form-control" id="news" name="news" rows="15" cols="60" style="text-align:justify;"><?=$arr['news'];?>
</textarea>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-4">
              <button type="submit" name="submit" class="btn btn-default">Update</button>
              <button type="reset" name="cancel" class="btn btn-default">Cancel</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <div class="cb"></div>
    <div class="footer">Copyright 2015. All Rights Reserved.</div>
  </div>
</div>
</body>
</html>
