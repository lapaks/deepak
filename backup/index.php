<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Pattake.Com - Pray For Nepal</title>
<link rel="stylesheet" href="css/bootstrap.min.css" media="screen" type="text/css" />
<link rel="stylesheet" href="css/index.css" media="screen" type="text/css" />
</head>
<body>
<div class="container">
<div class="content">
<div class="col-sm-4"></div>
<div class="col-sm-4">
	<div class="login-card" style="transform:translateY(5%)">
<h1><img src="images/prayfornepal_mid.png"  alt="Pray For Nepal" align="middle"></h1>
<form name="form_login" method="post" action="check_login_admin.php">
<input type="text" name="admin_id" placeholder="UserName">
<input type="password" name="admin_password" placeholder="Password">
<input type="submit" name="login" class="login login-submit" value="login">
</form>
<div class="login-help">
  <?php
			if ( isset ( $_SESSION['views'] ) ) {
			echo "Invalid UserName or Password";
			session_destroy();}?>
</div>
</div>
</div>
<div class="col-sm-4"></div>

</div>
</div>
</body>
</html>