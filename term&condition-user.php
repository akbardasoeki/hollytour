<?php
require 'conn.php';
session_start();

if(!isset($_SESSION['user_id']) ){
	header("Location: login.php");
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
            <li class="nav-item active">
              <a class="nav-link" href="index-user.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about-user.php">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="paket-user.php">Packages</a>
            </li>
						<li class="nav-item">
              <a class="nav-link" href="term&condition-user.php">Term & Conditions</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="galeri-user.php">Gallery</a>
            </li>
						<div class="dropdown" id="navbarCollapse">
  							<a class="nav-link" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    							Account
  							</a>
  							<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    							<a class="dropdown-item" href="profile.php">Profile</a>
    							<a class="dropdown-item" href="booking-user.php">Booking</a>
  							</div>
						</div>
          </ul>

          <li class="form-inline mt-2 mt-md-0">
            <a class="btn btn-outline-success my-2 my-sm-0" href="logout.php">Sign Out</a>
          </li>
        </div>
      </nav>
    </header>
    <main role="main">


        <div class="container" style="margin-top: 5%">
        <h2>Term & Conditions</h2>
        <li>1. Private Trip runs without a minimum quota.</li>
        <li>2. Private Trip is free to choose a trip schedule.</li>
        <li>3. Payment of Down Payment (DP) 50%</li>
        <li>4. Payments can be paid in installments</li>
        <li>5. Payment of full repayment of H-7 departure</li>
        <li>6. Payments only via transfer to: <br>
          BNI Bank - 5371 7622 4015 1410 a / n AGUS PRAYOGI</li>
        <li>7. Each participant is required to provide confirmation of proof of payment, identity, history, food allergy, fin size, and flight schedule.</li>
        <li>8. There is no refund of DP for participants who cancel their participation, unless replaced by someone else</li>
        <li>9. The HOLLYTOUR.ID party has the right to cancel the trip with certain considerations outside the ability and the refund money is returned 100%</li>
        <li>10. We cover the cost of a pp flight of Rp. 800,000, if the flight price exceeds the nominal, the shortfall will be borne by the participant.</li>
        <li>11. Participants are considered to understand and agree to all the provisions above</li>

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


<svg xmlns="http://www.w3.org/2000/svg" width="500" height="500" viewBox="0 0 500 500" preserveAspectRatio="none" style="display: none; visibility: hidden; position: absolute; top: -100%; left: -100%;"><defs><style type="text/css"></style></defs><text x="0" y="25" style="font-weight:bold;font-size:25pt;font-family:Arial, Helvetica, Open Sans, sans-serif">500x500</text></svg></body></html>
