<?php 
  require 'db.php';
  session_start();
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
	
    <title>Quickwash - Express Laundry</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/heroic-features.css" rel="stylesheet">

  </head>
	
  <?php 
	if ($_SERVER['REQUEST_METHOD'] == 'POST') 
	{
		if (isset($_POST['register'])) { //user registering
			require 'register.php';
		}
	}
	?>

  <body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Quickwash</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="services.php">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
	
	
	<div class="container col-xs-12 	col-sm-9 	col-md-6 	col-lg-6">
		<header class="jumbotron my-4">
			<form action="signup.php" method="post">
			  <div class="form-group">
				<label for="input1">First Name</label>
				<input type="text" class="form-control" name="firstname" placeholder="First Name">
			  </div>
			  <div class="form-group">
				<label for="input2">Last Name</label>
				<input type="text" class="form-control" name="lastname" placeholder="Last Name">
			  </div>			  
			  <div class="form-group">
				<label for="input3">Email address</label>
				<input type="email" class="form-control" name="email" placeholder="name@example.com">
				<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
			  </div>
			  <div class="form-group">
				<label for="input4">Password</label>
				<input type="password" class="form-control" id="password" placeholder="Password">
			  </div>
			  <div class="form-group">
				<label for="input5">Confirm Password</label>
				<input type="password" class="form-control" id="confirmPassword" placeholder="Confirm Password">
			  </div>
			  <p class="text-center">
				<button class="btn btn-primary ml-3 centre" name="register">Register</button>
			  </p>
			</form>
		</header>
	</div>
      
	  

	<body>
 
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