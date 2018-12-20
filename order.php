<?php

require 'conn.php';
session_start();

if( !isset($_SESSION['user_id']) ){
	header("Location: login.php");
} else {
  $query = "SELECT * FROM user where id_user='{$_SESSION['user_id']}'";
  $result = $conn->query($query);
  $data = $result->fetch(PDO::FETCH_ASSOC);
  }

  $message = '';

  if(!empty($_POST['id_user_fk']) && !empty($_POST['email']) && !empty($_POST['id_paket_fk']) && !empty($_POST['kode_booking']) && !empty($_POST['id_guide_fk']) && !empty($_POST['no_rekening']) && !empty($_POST['metode_bayar'])):

    
    $sql = "INSERT INTO booking (id_user_fk, email, id_paket_fk, kode_booking, id_guide_fk, no_rekening, metode_bayar ) VALUES (:id_user_fk, :email, :id_paket_fk, :kode_booking, :id_guide_fk, :no_rekening, :metode_bayar)";
    $stmt = $conn->prepare($sql);
  
    $stmt->bindParam(':id_user_fk', $_POST['id_user_fk']);
    $stmt->bindParam(':email', $_POST['email']);
    $stmt->bindParam(':id_paket_fk', $_POST['id_paket_fk']);
    $stmt->bindParam(':kode_booking', $_POST['kode_booking']);
    $stmt->bindParam(':id_guide_fk', $_POST['id_guide_fk']);
    $stmt->bindParam(':no_rekening', $_POST['no_rekening']);
    $stmt->bindParam(':metode_bayar', $_POST['metode_bayar']);
  
    if( $stmt->execute() ):
      echo "<script type='text/javascript'>alert('Successfully Booked')</script>";
    else:
      echo "<script type='text/javascript'>alert('Failed to book!')</script>";
    endif;
  endif;

    // Enter the new user in the database
  //   $sql = "INSERT INTO booking (name, email, paket, kode_booking, nama_guide, no_rekening, metode_bayar ) VALUES (:name, :email, :paket, :kode_booking, :nama_guide, :no_rekening, :metode_bayar)";
  //   $stmt = $conn->prepare($sql);
  
  //   $stmt->bindParam(':name', $_POST['name']);
  //   $stmt->bindParam(':email', $_POST['email']);
  //   $stmt->bindParam(':paket', $_POST['paket']);
  //   $stmt->bindParam(':kode_booking', $_POST['kode_booking']);
  //   $stmt->bindParam(':nama_guide', $_POST['nama_guide']);
  //   $stmt->bindParam(':no_rekening', $_POST['no_rekening']);
  //   $stmt->bindParam(':metode_bayar', $_POST['metode_bayar']);
  
  //   if( $stmt->execute() ):
  //     echo "<script type='text/javascript'>alert('Successfully Booked')</script>";
  //   else:
  //     echo "<script type='text/javascript'>alert('Failed to book!')</script>";
  //   endif;
  
  // endif;

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
              <a class="nav-link" href="index-user.php">Home</a>
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
<!-- <form class="needs-validation" novalidate> -->
<form action="" method="POST">
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationTooltip01">Name</label>
      <?php 
          $id= $data['id_user'];
          $query = "SELECT * FROM user WHERE id_user=$id";
          $result = $conn->query($query);
          $user = $result->fetch(PDO::FETCH_ASSOC);
          echo '<input type="text" class="form-control" name="" value="'.$user['name'].'" readonly required="required">';
          echo '<input type="hidden" class="form-control" name="id_user_fk" value="'.$user['id_user'].'" readonly required="required">';
        ?>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationTooltip02">Email</label>
      <?php 
          $id= $data['id_user'];
          $query = "SELECT * FROM user WHERE id_user=$id";
          $result = $conn->query($query);
          $user = $result->fetch(PDO::FETCH_ASSOC);
          echo '<input type="text" class="form-control" name="email" value="'.$user['email'].'" readonly required="required">';

        ?>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationTooltip03">Packages</label>
        <select class="custom-select" name="id_paket_fk" onchange="bookChoice()">
        <option value="0" selected disabled>Choose the package</option>
        <?php 
          $query = "SELECT * FROM paket";
          $result = $conn->query($query);
          while($paket = $result->fetch(PDO::FETCH_ASSOC) ){
            echo '<option value="'.$paket['id_paket'].'">'.$paket['nama_paket'].'</option>';
         }

        ?>
        </select>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationTooltip04">Booking Code</label>
      <input type="text" class="form-control" id="validationTooltip04" placeholder="Your booking code"  name="kode_booking" required>
      <div class="invalid-tooltip">
        Booking code invalid. Please enter your booking code!
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationTooltip05">Guider</label>
			<select name="id_guide_fk" class="form-control custom-select">
      <?php 
          $query = "SELECT * FROM guide";
          $result = $conn->query($query);
          while($guide = $result->fetch(PDO::FETCH_ASSOC) ){
            echo '<option value="'.$guide['id_guide'].'">'.$guide['nama_guide'].'</option>';
         }

        ?>
			</select>
    </div>

    <div class="col-md-6 mb-3">
      <label for="validationTooltip07">Bank Account Number</label>
      <input type="text" class="form-control" id="validationTooltip07" placeholder="Enter Your Bank Account Number" name="no_rekening" required>
    </div>

    <div class="col-md-6 mb-3">
      <label for="validationTooltip06">Payment Method</label>
        <select class="custom-select" name="metode_bayar">
          <option value="0" selected disabled>Choose payment method</option>
          <option value="BCA">BANK CENTRAL ASIA (BCA)</option>
          <option value="BRI">BANK RAKYAT INDONESIA (BRI)</option>
          <option value="BNI">BANK NEGARA INDONESIA (BNI)</option>
          <option value="MANDIRI">BANK MANDIRI</option>
        </select>
    </div>
    <button style="height : 35pt" class="btn btn-primary btn-lg btn-block" type="submit">Book</button>
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
