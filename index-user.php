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
              <a class="nav-link" href="about-user.html">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="paket-user.html">Packages</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="galeri-user.html">Gallery</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="profile.php">Profile</a>
            </li>
          </ul>
          <li class="form-inline mt-2 mt-md-0">
            <a class="btn btn-outline-success my-2 my-sm-0" href="index.php">Sign Out</a>
          </li>
        </div>
      </nav>
    </header>

    <main role="main">

      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class=""></li>
          <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item">
            <img class="first-slide" src="image/1.jpg" alt="First slide">
            <div class="container">
              <div class="carousel-caption text-left">
                <h1>WELCOME TO HOLLYTOUR</h1>
                <p>We provide holiday packages that fit with your wallet!</p>
              </div>
            </div>
          </div>
          <div class="carousel-item active">
            <img class="second-slide" src="image/2.jpg" alt="Second slide">
            <div class="container">
              <div class="carousel-caption">
                <h1>WELCOME TO HOLLYTOUR</h1>
                <p>We provide holiday packages that fit with your wallet!</p>
                <p><a class="btn btn-lg btn-primary" href="paket-user.html" role="button">See the packages!</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="third-slide" src="image/3.jpg" alt="Third slide">
            <div class="container">
              <div class="carousel-caption text-right">
                <h1>WELCOME TO HOLLYTOUR</h1>
                <p>We provide holiday packages that fit with your wallet!</p>
                <p><a class="btn btn-lg btn-primary" href="galeri.html" role="button">Browse gallery</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>


      <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->

      <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row">
          <div class="col-lg-4">
            <img class="rounded-circle" src="image/lombok.jpg" alt="Generic placeholder image" width="140" height="140">
            <h2>IDR 999K/pax</h2>
            <p>Trip 3Days-2Night Lombok</p>
            <p><a class="btn btn-primary" href="lombok32.html" role="button">View details »</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="image/belitung.jpg" alt="Generic placeholder image" width="140" height="140">
            <h2>IDR 2.000K/pax</h2>
            <p>Trip 3Days-2Night Belitung</p>
            <p><a class="btn btn-primary" href="belitung32.html" role="button">View details »</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="image/komodo.jpg" alt="Generic placeholder image" width="140" height="140">
            <h2>IDR 2.500K/pax</h2>
            <p>Trip 3Days-2Night Sailing Komodo</p>
            <p><a class="btn btn-primary" href="komodo32.html" role="button">View details »</a></p>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->


        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">LOMBOK <span class="text-muted">for 4Days-3Night</span></h2>
            <p class="lead">Enjoy the trip to Lombok for 3 Days and 2 Night with only IDR 2.999K</p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" src="image/lombok.jpg" data-holder-rendered="true">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">BELITUNG <span class="text-muted">for 3Days-2Night</span></h2>
            <p class="lead">Enjoy the trip to Belitung for 3 Days and 2 Night with only IDR 2000K</p>
          </div>
          <div class="col-md-5 order-md-1">
            <img class="featurette-image img-fluid mx-auto" src="image/belitung.jpg" data-holder-rendered="true">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">SAILING KOMODO <span class="text-muted">for 3Days-2Night</span></h2>
            <p class="lead">Enjoy Sailing Komodo for 3 Days and 2 Night with only IDR 2000K</p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" src="image/komodo.jpg" data-holder-rendered="true">
          </div>
        </div>

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


<svg xmlns="http://www.w3.org/2000/svg" width="500" height="500" viewBox="0 0 500 500" preserveAspectRatio="none" style="display: none; visibility: hidden; position: absolute; top: -100%; left: -100%;"><defs><style type="text/css"></style></defs><text x="0" y="25" style="font-weight:bold;font-size:25pt;font-family:Arial, Helvetica, Open Sans, sans-serif">500x500</text></svg></body></html>
