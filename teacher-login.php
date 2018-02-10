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
	<form class="login-form" method="POST" action="">
		<label>Email</label>
		<input type="email" name="email" placeholder="Email here...">
		<label>Password</label>
		<input type="password" name="password" placeholder="Password here...">
		<input class="submit-btn" type="submit" name="submit" value="Login">
	</form>
</div>

<?php 
	include 'config.php';
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$email = $_POST["email"];
		$password = $_POST["password"];

		$sql = "SELECT email, password FROM teacher_login WHERE email='$email' AND password='$password'";

		$result = mysqli_query($conn, $sql);

		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

		// $active = $row['active'];
      
	    $count = mysqli_num_rows($result);
			
     	if($count == 1) {
         	$_SESSION['login_user'] = $email;
         	header("location: class-list.php");
      	}else {
        	$error = "Your Login Name or Password is invalid";
        	echo "<h3 class='error'>". $error ."</h3>";
      	}
	}
?>

</body>
</html>