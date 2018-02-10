<!DOCTYPE html>
<html>
<head>
	<title>Login for Mark Submit</title>
	<link rel="stylesheet" type="text/css" href="login.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="main">
    <div class="logo">
        <img src="img/banner1.png" alt="logo" />
    </div>
    <div class="menu">
		<?php include 'navbar.html' ?>
	</div>
</div>

<div class="form" method="POST" action="">
	<form class="login-form" method="POST" action="students-result.php">
		<label>Student ID</label>
		<input type="std_id" name="std_id" placeholder="id here...">
		<label>Password</label>
		<input type="password" name="passwd" placeholder="Password here...">
		<input class="submit-btn" type="submit" name="submit" value="Login">
	</form>
</div>

</body>
</html>