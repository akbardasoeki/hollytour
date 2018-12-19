<?php
require 'conn.php';
session_start();


if(!empty($_POST['email']) && !empty($_POST['password'])):

	$email = $_POST['email'];
	$records = $conn->prepare('SELECT * FROM user WHERE email = :email');
	$records->bindParam(':email', $_POST['email']);
	$records->execute();
	$results = $records->fetch(PDO::FETCH_ASSOC);

	$message = '';

	if(count($results) > 0 && password_verify($_POST['password'], $results['password']) ){

		$_SESSION['user_id'] = $results['id_user'];
		if ($results['role']== 'admin') {
		 echo "<script type='text/javascript'>alert('Welcome Admin $email');document.location='index-admin.php'</script>";
		}
		elseif ($results['role']=='user') {
		 echo "<script type='text/javascript'>alert('Welcome $email');document.location='index-user.php'</script>";
		}
	} else {
    echo "<script type='text/javascript'>alert('Sorry, those credentials do not match')</script>";
  }

endif;
?>


<!DOCTYPE html>
<!-- saved from url=(0051)https://getbootstrap.com/docs/4.1/examples/sign-in/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="image/logo.png">

    <title>Sign In</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/signin.css" rel="stylesheet">
  </head>
  <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
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
            <li class="nav-item">
              <a class="nav-link" href="daftar.php">Sign Up</a>
            </li>
          </ul>
          <form class="form-inline mt-2 mt-md-0">
            <button class="btn btn-outline-success my-2 my-sm-0" href="login.php">Sign In</button>
          </form>
        </div>
      </nav>
    </header>
  <body class="text-center">
    <form class="form-signin" action="login.php" method="POST">
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required="" autofocus="">
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required="">
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted">© 2017-2018 HollyTour Company, Inc.</p>
    </form>


</body></html>
