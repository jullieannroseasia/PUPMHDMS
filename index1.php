<?php 

include 'config.php';

session_start();

error_reporting(0);


if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("Location: menu.php");
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="style.css">

	<title>Login Form - Pure Coding</title>
</head>
<body>


<div class="row">
<div class="col-md-12">

<br><br>


<center>
	<img id="polytechnic-university-of-the-philippines-logo-1024x1024g" src="images/log/polytechnic-university-of-the-philippines-logo-1024x1024.png" class="img-responsive" 
	style="width:180px;height:180px;">
	<h1 class="text-center "> &emsp;&emsp;&nbsp;&nbsp;PUP Mulanay <br /><small style="font-size:20px">Health Declaration Monitoring System</small></h1>

<br><br>

	
	<form action="" method="post" class="login-email">
			<div class="input-group"><span class="input-group-addon"><span class="input-group-addon"><img style="width:30px" src="images/log/user.png" /></span>
				<input type="email" placeholder="Email" name="email" style=" height:52px; font-size:20px" value="<?php echo $email; ?>" required>
			</div><br>
			<div class="input-group"> <span class="input-group-addon"><img style="width:30px" src="images/log/lock.png" /></span>
				<input type="password" placeholder="Password" name="password" style=" height:52px; font-size:20px" value="<?php echo $_POST['password']; ?>" required>
			</div> <br>
			<div class="input-group">
				<button name="login" onclick="chcke();" style=" height:52px; font-size:20px" type="login" value="LOG IN" class="btn ">&emsp;&emsp;LOG IN&emsp;&emsp;</button>
			</div>
			
			<p class="login-register-text">Don't have an account? <a href="register.php">Register Here</a>.</p>
		</form>
	</div>
</body>
</html>
