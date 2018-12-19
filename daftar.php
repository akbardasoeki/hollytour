<?php

session_start();

if( isset($_SESSION['user_id']) ){
	header("Location: /");
}

require 'conn.php';

$message = '';

if(!empty($_POST['name']) && !empty($_POST['username']) && !empty($_POST['no_telp']) && !empty($_POST['jns_kelamin']) && !empty($_POST['email']) && !empty($_POST['address']) && !empty($_POST['role']) && !empty($_POST['email'])):
	
	// Enter the new user in the database
	$sql = "INSERT INTO user (name, username, no_telp, jns_kelamin, email, address, password, role ) VALUES (:name, :username, :no_telp, :jns_kelamin, :email, :address, :password, :role)";
	$stmt = $conn->prepare($sql);

  $stmt->bindParam(':name', $_POST['name']);
  $stmt->bindParam(':username', $_POST['username']);
  $stmt->bindParam(':no_telp', $_POST['no_telp']);
  $stmt->bindParam(':jns_kelamin', $_POST['jns_kelamin']);
  $stmt->bindParam(':email', $_POST['email']);
  $stmt->bindParam(':address', $_POST['address']);
	$stmt->bindParam(':password', password_hash($_POST['password'], PASSWORD_BCRYPT));
	$stmt->bindParam(':role', $_POST['role']);

	if( $stmt->execute() ):
		echo "<script type='text/javascript'>alert('Successfully created new user')</script>";
	else:
		echo "<script type='text/javascript'>alert('Sorry there must have been an issue creating your account')</script>";
	endif;

endif;

?>
<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="image/logo.png">

    <title>Sign Up</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/form-validation.css" rel="stylesheet">
  </head>

  <header>

      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="paket.html">Packages</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="galeri.html">Gallery</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="daftar.php">Sign Up <span class="sr-only">(current)</span></a>
            </li>
          </ul>
          <li class="form-inline mt-2 mt-md-0">
            <a class="btn btn-outline-success my-2 my-sm-0" href="login.php">Sign In</a>
          </li>
        </div>
      </nav>
    </header>

  <body class="bg-light">
  

    <div class="container">
      <div class="py-5 text-center">
        <h2 style="margin-top :3%; margin-bottom: -2%">Please Sign Up</h2>
      </div>
      <form action="daftar.php" method="POST">
          <div class="mb-3">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Enter your name" required="">
            <div class="invalid-feedback">
              Valid name is required.
            </div>
          </div>
        <div class="mb-3">
          <label for="username">Username</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">@</span>
            </div>
            <input type="text" class="form-control" name="username" id="username" placeholder="Username" required="">
            <div class="invalid-feedback" style="width: 100%;">
              Your username is required.
            </div>
          </div>
        </div>

        <div class="mb-3">
            <label for="telephone">Phone Number</label>
            <input type="text" class="form-control" id="telephone" name="no_telp" placeholder="08xxxxxxxxxx" required="">
            <div class="invalid-feedback">
              Please enter a valid phone number.
            </div>
          </div>

        <div class="mb-3">
              <label for="Gender">Gender </label><br />
              <input type="radio" name="jns_kelamin" value="Male"/>Male
              <input type="radio" name="jns_kelamin" value="Female"/>Female
              <br />
              <div class="invalid-feedback">
                Please choose your gender.
              </div>
            </div>

        <div class="mb-3">
              <label for="email">Email</label>
              <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email" required="">
              <div class="invalid-feedback">
                  Please enter a valid email address.
              </div>
        </div>

        <div class="mb-3">
          <label for="address">Address</label>
          <input type="text" class="form-control" name="address" id="address" placeholder="Enter your address" required="">
          <div class="invalid-feedback">
            Please enter your address.
          </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
              <label for="Password">Password</label>
              <input type="password" class="form-control" name="password" id="password" placeholder="" value="" required="">
              <div class="invalid-feedback">
                Password is required.
              </div>
            </div>
            

            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit">Sign Up</button>
            
            <div class="col-md-6 mb-3">
              <input type="hidden" class="form-control" name="role" id="role" value="user">
              <div >
            </div>
          </form>
        </div>
      </div>

      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">© 2017-2018 HollyTour Company, Inc.</p>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery-3.3.1.slim.min.js.download" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="assets/js/popper.min.js.download"></script>
    <script src="assets/js/bootstrap.min.js.download"></script>
    <script src="assets/js/holder.min.js.download"></script>
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');

          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
  

</body></html>