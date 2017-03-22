<!--
Module: Admin Login Page
Purpose: Allowing User to login into Admin Panel
Author: Yubraj Ghimire 
Date: 18.10.2015 
-->

<!DOCTYPE html>
<html lang="en">
	<head>
	<title >Admin Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="public/css/main.css"/>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script language="javascript">
	function check(c)
	{
		if (c.username.value==""||c.password.value=="")
		{
			alert("Please provide UserName & Password !");
			return false;
			
		}
		return true;
	}
	</script>
	</head>
	<body>
    <div class="container">
      <div class="row cms">
        <div class="cmsTitle">News System</div>
        <div class="welcomeAdmin">Welcome to News Panel</div>
        <div class="brownHeight"></div>
        <div class=" col-md-6 col-md-offset-3 loginForm">
          <p class="tableTd"> Hint: Type "admin" for username & password</p>
          <form class="form-horizontal" name="admin_login" role="form" method="POST" action="controller/authentication.php" onSubmit="return check(this);">
            <div class="adminLogin">ADMIN LOGIN</div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="username">UserName:</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="username" name="username" placeholder="Enter UserName">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="password">Password:</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <div class="checkbox">
                  <label style="color:#000">
                    <input type="checkbox">
                    Remember me</label>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" name="submit" class="btn btn-default">Login</button>
              </div>
            </div>
          </form>
        </div>
        <div class="cb"></div>
        <div class="footer">Copyright 2015. All Rights Reserved.</div>
      </div>
    </div>
</body>
</html>
