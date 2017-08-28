<?php 
/* Reset your password form, sends reset.php password link */
require 'db.php';
session_start();

// Check if form submitted with method="post"
if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) 
{   
	$email = $mysqli->escape_string($_POST['email']);
	$result = $mysqli->query("SELECT * FROM users WHERE email='$email'");

	if ( $result->num_rows == 0 ) // User doesn't exist
	{ 
		$_SESSION['message'] = "User with that email doesn't exist!";
		header("location: error.php");
	}
	else { // User exists (num_rows != 0)

		$user = $result->fetch_assoc(); // $user becomes array with user data
		
		$email = $user['email'];
		$hash = $user['hash'];
		$first_name = $user['first_name'];

		// Session message to display on success.php
		$_SESSION['message'] = "<p>Please check your email <span>$email</span>"
		. " for a confirmation link to complete your password reset!</p>";

		// Send registration confirmation link (reset.php)
		$to      = $email;
		$subject = 'Password Reset Link ( clevertechie.com )';
		$message_body = '
		Hello '.$first_name.',

		You have requested password reset!

		Please click this link to reset your password:

		
http://localhost/login-system/reset.php?email='.$email.'&hash='.$hash;
  

		mail($to, $subject, $message_body);

		header("location: success.php");
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, 
shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Reset Your Password</title>
	<!-- Bootstrap core CSS -->
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="css/heroic-features.css" rel="stylesheet">
</head>
<body>

	<!-- Navigation -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
	  <div class="container">
		<a class="navbar-brand" href="#">Quickwash</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" 
data-target="#navbarResponsive" aria-controls="navbarResponsive" 
aria-expanded="false" aria-label="Toggle navigation">
		  <span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
		  <ul class="navbar-nav ml-auto">
			<li class="nav-item">
			  <a class="nav-link" href="index.php">Home</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link" href="about.php">About</a>
			</li>
			<li class="nav-item active">
			  <a class="nav-link" href="#">Services
				<span class="sr-only">(current)</span>
			  </a>
			</li>
			<li class="nav-item">
			  <a class="nav-link" href="contact.php">Contact</a>
			</li>
		  </ul>
		</div>
	  </div>
	</nav>

	<!-- Page Content -->
	<div class="container">

	  <!-- Jumbotron Header -->
	  <header class="jumbotron my-4">
		<div class="form">

	<h1>Reset Your Password</h1>

	<form action="forgot.php" method="post">
	 <div class="field-wrap">
	  <label>
		Email Address<span class="req">*</span>
	  </label>
	  <input type="email"required autocomplete="off" name="email"/>
	</div>
	<button class="button button-block"/>Reset</button>
	</form>
  </div>
		  
		  
  </header>

	</div>
	<!-- /.container -->

	<!-- Footer -->
	<footer class="py-5 bg-dark">
	  <div class="container">
		<p class="m-0 text-center text-white">Copyright &copy; Quickwash 2017</p>
	  </div>
	  <!-- /.container -->
	</footer>

	<!-- Bootstrap core JavaScript -->
	<script src="vendor/jquery/jquery.min.js"></script>
	<script src="vendor/popper/popper.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  </body>

</html>
