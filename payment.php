<?php

session_start();

require 'conn.php';

if( isset($_SESSION['user_id']) ){

	$records = $conn->prepare('SELECT * FROM booking WHERE id_user_fk = :id');
	$records->bindParam(':id', $_SESSION['user_id']);
	$records->execute();
	$data = $records->fetch(PDO::FETCH_ASSOC);

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
  			<li class="list-group-item" id="name" value="<?php echo $data['id_paket_fk'];  ?>">ID Paket : </li>
  			<li class="list-group-item" id="name" value="<?php echo $data['kode_booking'];  ?>">Kode Booking : </li>
				<li class="list-group-item" id="name" value="<?php echo $data['id_guide_fk'];  ?>">ID Guide: </li>
  			<li class="list-group-item" id="name" value="<?php echo $data['no_rekening'];  ?>">No Rekening : </li>
  			<li class="list-group-item" id="name" value="<?php echo $data['metode_bayar'];  ?>">Metode Bayar : </li>
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
