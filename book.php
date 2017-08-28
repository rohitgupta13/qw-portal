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
	
    <title>Book Pickup</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/heroic-features.css" rel="stylesheet">

	
	
	<script type="text/javascript">
    var datefield=document.createElement("input")
    datefield.setAttribute("type", "date")
    if (datefield.type!="date"){ //if browser doesn't support input type="date", load files for jQuery UI Date Picker
        document.write('<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />\n')
        document.write('<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"><\/script>\n')
        document.write('<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"><\/script>\n') 
    }
</script>
 
<script>
if (datefield.type!="date"){ //if browser doesn't support input type="date", initialize date picker widget:
    jQuery(function($){ //on document.ready
        $('#pickupdate').datepicker();
    })
}
</script>
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
			<form>
				<h5>Select date</h5>
				<input type="date" id="pickupdate" name="pickupdate" size="20" />
			</form>
			<form action="signup.php" method="post">
			  <div class="form-group">
				<label for="exampleSelect1">Select a slot</label>
				<select class="form-control" id="exampleSelect1">
				  <option>12:00-02:00 pm</option>
				  <option>02:00-04:00 pm</option>
				  <option>04:00-06:00 pm</option>
				  <option>06:00-08:00 pm</option>
				  <option>08:00-10:00 pm</option>
				</select>
			  </div>
			   <fieldset class="form-group">
				<legend>Iron</legend>
				<div class="form-check">
				  <label class="form-check-label">
					<input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1" checked>
					Yes
				  </label>
				</div>
				<div class="form-check">
				<label class="form-check-label">
					<input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2">
					No
				  </label>
				</div>
				</fieldset>
				  <div class="form-group">
					<label for="exampleTextarea">Quantity</label>
					 <input class="form-control" type="number" value="0" id="example-number-input">
				  </div>
			  <p class="text-center">
				<button class="btn btn-primary ml-3 centre" name="register">Proceed</button>
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