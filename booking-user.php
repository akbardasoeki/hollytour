<?php 
  //memanggil file conn.php yang berisi koneski ke database
  //dengan include, semua kode dalam file conn.php dapat digunakan pada file index.php
  require 'conn.php';
session_start();

if( !isset($_SESSION['user_id']) ){
	header("Location: login.php");
} else {
  $query = "SELECT * FROM user where id_user='{$_SESSION['user_id']}'";
  $result = $conn->query($query);
  $data = $result->fetch(PDO::FETCH_ASSOC);
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Guide</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- load css boostrap -->
    <link href="assets/css/dashboard.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>

  <body>
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li class="active"><a href="admin-guide.php">Guide</a></li>
      <li><a href="admin-pelanggan.php">Customer</a></li>
      <li><a href="admin-order.php">Booking</a></li>
      <li><a href="index-admin.php">Home</a></li>
    </ul>
    <li><a style="float:right; display:block; padding:14px; background:#337ab7; color:white" href="logout.php">Logout</a></li>
  </div>
</nav>

          <h2 style="margin: 30px 0 30px 0;">Booking List</h2>
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
                  $query = "SELECT * FROM booking";
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