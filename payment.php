<?php

session_start();

require 'conn.php';

if( isset($_SESSION['user_id']) ){

	$records = $conn->prepare('SELECT * FROM booking WHERE id_user_fk = :id');
	$records->bindParam(':id', $_SESSION['user_id']);
	$records->execute();
	$data = $records->fetch(PDO::FETCH_ASSOC);

	$records = $conn->prepare('SELECT * FROM paket WHERE id_paket = :id_paket');
	$records->bindParam(':id_paket', $_SESSION['user_id']);
	$records->execute();
	$paket = $records->fetch(PDO::FETCH_ASSOC);

	$records = $conn->prepare('SELECT * FROM booking WHERE id_user_fk = :id_booking');
	$records->bindParam(':id_booking', $_SESSION['user_id']);
	$records->execute();
	$booking = $records->fetch(PDO::FETCH_ASSOC);

	$records = $conn->prepare('SELECT * FROM guide WHERE id_guide = :id_booking');
	$records->bindParam(':id_booking', $_SESSION['user_id']);
	$records->execute();
	$guide = $records->fetch(PDO::FETCH_ASSOC);

	$records = $conn->prepare('SELECT * FROM booking WHERE id_user_fk = :id_booking');
	$records->bindParam(':id_booking', $_SESSION['user_id']);
	$records->execute();
	$guide = $records->fetch(PDO::FETCH_ASSOC);

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
<body>

	<div class="card text-center">
	  <div class="card-header">
	    HOLLYTOUR
	  </div>
	  <div class="card-body">
			<ul class="list-group list-group-flush">
  			<!-- <li class="list-group-item" id="name" value="">ID Booking : <?php echo $data['id_booking'];  ?></li> -->
  			<!-- <li class="list-group-item" id="name" value="<?php echo $data['id_user_fk'];  ?>">ID User : </li> -->
				<?php 
					$id = $data['id_user_fk'];
          $query = "SELECT * FROM user WHERE id_user = $id";
          $result = $conn->query($query);
          $user = $result->fetch(PDO::FETCH_ASSOC);
					echo '<li class="list-group-item" id="name" value="'.$data['id_user_fk'].'">Name User : '.$user['name'].'</li>';
        ?>
				<?php 
					$id = $data['id_user_fk'];
          $query = "SELECT * FROM user WHERE id_user = $id";
          $result = $conn->query($query);
          $email = $result->fetch(PDO::FETCH_ASSOC);
					echo '<li class="list-group-item" id="name" value="'.$data['id_user_fk'].'">Email : '.$email['email'].'</li>';
        ?>
  			<?php 
					$id = $data['id_paket_fk'];
          $query = "SELECT * FROM paket WHERE id_paket = $id";
          $result = $conn->query($query);
          $paket = $result->fetch(PDO::FETCH_ASSOC);
					echo '<li class="list-group-item" id="name" value="'.$paket['id_paket'].'">Packages : '.$paket['nama_paket'].'</li>';
        ?>
  			<li class="list-group-item" id="name" value="">Kode Booking : <?php echo $booking['kode_booking'];  ?></li>
				<?php 
					$id = $data['id_guide_fk'];
          $query = "SELECT * FROM guide WHERE id_guide = $id";
          $result = $conn->query($query);
          $guide = $result->fetch(PDO::FETCH_ASSOC);
					echo '<li class="list-group-item" id="name" value="'.$guide['id_guide'].'">Guide Name : '.$guide['nama_guide'].'</li>';
        ?>
  			<li class="list-group-item" id="name" value="">Bank Number : <?php echo $booking['no_rekening'];  ?></li>
  			<li class="list-group-item" id="name" value="">Payment Method : <?php echo $booking['metode_bayar'];  ?></li>
			</ul>
			<p class="card-text">*Bawalah tiket ini sebagai bukti pemesanan</p>
	    <a href="#" class="btn btn-dark" onclick="myFunction()">Cetak Bukti Pemesanan</a>
	  </div>
	  <div class="card-footer text-muted">
	    TRAVELLING TICKET
	  </div>
	</div>

<script>
function myFunction() {
  window.print();
}
</script>

</body>
</html>

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
