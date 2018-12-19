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
<body>

	<div class="card text-center">
	  <div class="card-header">
	    HOLLYTOUR
	  </div>
	  <div class="card-body">
			<ul class="list-group list-group-flush">
  			<li class="list-group-item" id="name" value="<?php echo $data['name'];  ?>">Nama : </li>
  			<li class="list-group-item">Packages : </li>
  			<li class="list-group-item">Tour Guider : </li>
  			<li class="list-group-item">Phone Number : </li>
  			<li class="list-group-item">Booking Code : </li>
			</ul>
			<p class="card-text">*Bawalah tiket ini sebagai bukti pemesanan</p>
	    <a href="#" class="btn btn-success" onclick="myFunction()">Cetak Bukti Pemesanan</a>
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
