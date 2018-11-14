<?php

session_start();

require 'conn.php';

if( isset($_SESSION['user_id']) ){

	$records = $conn->prepare('SELECT id,email,password FROM user WHERE id = :id');
	$records->bindParam(':id', $_SESSION['user_id']);
	$records->execute();
	$results = $records->fetch(PDO::FETCH_ASSOC);

	$user = NULL;

	if( count($results) > 0){
		$user = $results;
	}

}

?>

<!DOCTYPE html>
    <html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="image/logo.png">

        <title>HollyTour</title>

        <!-- Bootstrap core CSS -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="assets/css/carousel.css" rel="stylesheet">
        <link href="assets/css/album.css" rel="stylesheet">

      </head>
  </head>
  <body>
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
          </ul>
            <li class="form-inline mt-2 mt-md-0">
                <a class="btn btn-outline-success my-2 my-sm-0" href="index.php">Log Out</a>
            </li>
        </div>
      </nav>
    </header>
    <main role="main">

      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">Trip Booking</h1>
        </div>
      </section>

      <div class="album py-5 bg-light">
        <div class="container">

      <form class="needs-validation" novalidate>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationTooltip01">Name</label>
      <input type="text" class="form-control" id="validationTooltip01" placeholder="Your Name" required>

    </div>
    <div class="col-md-4 mb-3">
      <label for="validationTooltip02">Email</label>
      <input type="text" class="form-control" id="validationTooltip02" placeholder="Your Email" required>
      <div class="valid-tooltip">
        Registered!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationTooltipUsername">Username</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
        </div>
        <input type="text" class="form-control" id="validationTooltipUsername" placeholder="Username" aria-describedby="validationTooltipUsernamePrepend" required>
        <div class="invalid-tooltip">
          Please enter registered username!
        </div>
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationTooltip03">Packages</label>
        <select class="custom-select" onchange="bookChoice()">
          <option value="0" selected disabled>Choose the package</option>
          <option value="1">TRIP 3DAY-2NIGHT LOMBOK</option>
          <option value="2">TRIP 4DAY-3NIGHT LOMBOK & FLIGHT ROUND-TRIP</option>
          <option value="3">TRIP 4DAY-3NIGHT LOMBOK</option>
          <option value="4">TRIP 3DAY-2NIGHT BELITUNG</option>
          <option value="5">TRIP 3DAY-2NIGHT SAILING KOMODO</option>
        </select>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationTooltip04">Booking Code</label>
      <input type="text" class="form-control" id="validationTooltip04" placeholder="Your booking code" required disabled>
      <div class="invalid-tooltip">
        Booking code invalid. Please enter your booking code!
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationTooltip05">Phone Number</label>
      <input type="text" class="form-control" id="validationTooltip05" placeholder="Your Phone Number" required>
      <div class="invalid-tooltip">
        Enter your phone number!
      </div>
    </div>

    <div class="col-md-6 mb-3">
      <label for="validationTooltip07">Bank Account Number</label>
      <input type="text" class="form-control" id="validationTooltip07" placeholder="Enter Your Bank Account Number" required>
    </div>

    <div class="col-md-6 mb-3">
      <label for="validationTooltip06">Payment Method</label>
      <div class="custom-control custom-radio">
        <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
        <label class="custom-control-label" for="customRadio1">Bank Central Asia (BCA)</label>
      </div>
      <div class="custom-control custom-radio">
        <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
        <label class="custom-control-label" for="customRadio2">Bank Rakyat Indonesia (BRI)</label>
      </div>
      <div class="custom-control custom-radio">
        <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
        <label class="custom-control-label" for="customRadio3">Bank Negara Indonesia (BNI)</label>
      </div>
      <div class="custom-control custom-radio">
          <input type="radio" id="customRadio4" name="customRadio" class="custom-control-input">
          <label class="custom-control-label" for="customRadio4">Bank Mandiri</label>
        </div>
    </div>
<p><a class="btn btn-secondary" href="payment.html" role="button">Print Payment »</a></p>
  </form>
</html>

<hr class="featurette-divider">

<!-- /END THE FEATURETTES -->

</div><!-- /.container -->


<!-- FOOTER -->
<footer class="container">
<p>© 2017-2018 HollyTour Company, Inc.
</footer>
</main>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="assets/js/jquery-3.3.1.slim.min.js.download" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="assets/js/popper.min.js.download"></script>
<script src="assets/js/bootstrap.min.js.download"></script>
<!-- Just to make our placeholder images work. Don't actually copy the next line! -->
<script src="assets/js/holder.min.js.download"></script>
<script src="assets/js/booking.js"></script>


<svg xmlns="http://www.w3.org/2000/svg" width="500" height="500" viewBox="0 0 500 500" preserveAspectRatio="none" style="display: none; visibility: hidden; position: absolute; top: -100%; left: -100%;"><defs><style type="text/css"></style></defs><text x="0" y="25" style="font-weight:bold;font-size:25pt;font-family:Arial, Helvetica, Open Sans, sans-serif">500x500</text></svg></body></html>