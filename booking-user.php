<?php 
  //memanggil file conn.php yang berisi koneski ke database
  //dengan include, semua kode dalam file conn.php dapat digunakan pada file index.php
  require 'conn.php';
session_start();

if( !isset($_SESSION['user_id']) ){
	header("Location: login.php");
} else {
  $id = $_SESSION['user_id'];
  // echo $id;
  $query = "SELECT * FROM user where id_user=$id";
  $result = $conn->query($query);
  $data = $result->fetch(PDO::FETCH_ASSOC);
  }
?>
<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="assets/css/galeri5.css" rel="stylesheet">
<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<link rel="icon" href="image/logo.png">

<title>HollyTour</title>
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
              <li class="nav-item active">
                <a class="nav-link" href="galeri-user.php">Gallery <span class="sr-only">(current)</span></a>
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
              <a class="btn btn-outline-success my-2 my-sm-0" href="index.php">Sign Out</a>
            </li>
          </div>
        </nav>
      </header>



      <?php 
            //mengecek apakah proses update dan delete sukses/gagal
            if (@$_GET['status']!==NULL) {
              $status = $_GET['status'];
              if ($status=='ok') {
                echo '<br><br><div class="alert alert-success" role="alert">Booking successfully canceled!</div>';
              }
              elseif($status=='err'){
                echo '<br><br><div class="alert alert-danger" role="alert">Failed to cancel booking</div>';
              }

            }
           ?>

          <h2 style="margin: 60px 0 30px 0;">Booking List</h2>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>Package Name</th>
                  <th>Booking Code</th>
                  <th>Guide Name</th>
                  <th>Bank Number</th>
                  <th>Payment Method</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                  //proses menampilkan data dari database dengan PDO:
                  //siapkan query SQL
                  $query = "SELECT * FROM booking WHERE id_user_fk =$id";
                  //eksekusi query
                  $result = $conn->query($query);

                 ?>

                 <?php while($data = $result->fetch(PDO::FETCH_ASSOC) ): ?>
                  <tr>
                  
                  <?php 
                    $id = $data['id_paket_fk'];
                    $sql = "SELECT * FROM paket WHERE id_paket='$id'";
                    $hasil = $conn->query($sql);
                    while($paket = $hasil->fetch(PDO::FETCH_ASSOC) ){
                      echo '<td>'.$paket['nama_paket'].'</td>';
                   }
                  ?>
                    <td><?php echo $data['kode_booking'];  ?></td>
                    <?php 
                    $id = $data['id_guide_fk'];
                    $sql = "SELECT * FROM guide WHERE id_guide='$id'";
                    $hasil = $conn->query($sql);
                    while($guide = $hasil->fetch(PDO::FETCH_ASSOC) ){
                      echo '<td>'.$guide['nama_guide'].'</td>';
                   }
                  ?>
                    <td><?php echo $data['no_rekening'];  ?></td>
                    <td><?php echo $data['metode_bayar'];  ?></td>
                    <td>
                      <a href="<?php echo "payment.php?id_booking=".$data['id_booking']; ?>" class="btn btn-outline-warning btn-sm">Print Payment</a>
                      &nbsp;&nbsp;
                      <a href="<?php echo "cancel-order.php?id_booking=".$data['id_booking']; ?>" class="btn btn-outline-danger btn-sm">Cancel Book</a>
                    </td>
                  </tr>
                 <?php endwhile ?>
              </tbody>
            </table>
          </div>
        </main>
      </div>
    </div>

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.js"></script>
  </body>
</html>