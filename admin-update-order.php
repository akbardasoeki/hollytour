<?php 
  //memanggil file conn.php yang berisi koneski ke database
  //dengan include, semua kode dalam file conn.php dapat digunakan pada file index.php
  include ('conn.php'); 

  $status = '';
  //melakukan pengecekan apakah ada variable GET yang dikirim
  if ($_SERVER['REQUEST_METHOD'] === 'GET') {
      if (isset($_GET['id_booking'])) {
          //query SQL
          $id_booking_upd = $_GET['id_booking'];
          $query = $conn->prepare("SELECT * FROM booking WHERE id_booking = :id_booking");
          //binding data
          $query->bindParam(':id_booking',$id_booking_upd);
          //eksekusi query
          $query->execute(); 
      }  
  }

  //melakukan pengecekan apakah ada form yang dipost
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $id_booking = $_POST['id_booking'];
      $id_user_fk = $_POST['id_user_fk'];
      $email = $_POST['email'];
      $id_paket_fk = $_POST['id_paket_fk'];
      $kode_booking = $_POST['kode_booking'];
      $id_guide_fk = $_POST['id_guide_fk'];
      $no_rekening = $_POST['no_rekening'];
      $metode_bayar = $_POST['metode_bayar'];

      //query SQL
      $query = $conn->prepare("UPDATE booking SET id_user_fk=:id_user_fk, email=:email, id_paket_fk=:id_paket_fk, kode_booking=:kode_booking, id_guide_fk=:id_guide_fk, no_rekening=:no_rekening, metode_bayar=:metode_bayar WHERE id_booking=:id_booking"); 

      //binding data
      $query->bindParam(':id_booking',$id_booking);
      $query->bindParam(':id_user_fk',$id_user_fk);
      $query->bindParam(':email',$email);
      $query->bindParam(':id_paket_fk',$id_paket_fk);
      $query->bindParam(':kode_booking',$kode_booking);
      $query->bindParam(':id_guide_fk',$id_guide_fk);
      $query->bindParam(':no_rekening',$no_rekening);
      $query->bindParam(':metode_bayar',$metode_bayar);

      //eksekusi query
      if ($query->execute()) {
        $status = 'ok';
      }
      else{
        $status = 'err';
      }

      //redirect ke halaman lain
      header('Location: admin-order.php?status='.$status);
  }
  

?>


<!DOCTYPE html>
<html>
  <head>
    <title>Booking</title>
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
      <li><a href="admin-guide.php">Guide</a></li>
      <li><a href="admin-pelanggan.php">Customer</a></li>
      <li class="active"><a href="admin-order.php">Booking</a></li>
      <li><a href="index-admin.php">Home</a></li>
    </ul>
    <li><a style="float:right; display:block; padding:14px; background:#337ab7; color:white" href="logout.php">Logout</a></li>
  </div>
</nav>

    <div class="container-fluid">
      <div class="row">
         <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column" style="margin-top:100px;">
               <li class="nav-item">
               <a class="nav-link active" href="<?php echo "admin-order.php"; ?>">Booking List</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="<?php echo "admin-add-order.php"; ?>">Add Booking</a>
                </li>
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          

          <h2 style="margin: 30px 0 30px 0;">Update Booking</h2>
          <form action="admin-update-order.php" method="POST">
          <?php while($data = $query->fetch(PDO::FETCH_ASSOC)):?>
            <div class="form-group">
              <label>Name</label>
              <?php 
                  $id= $data['id_user_fk'];
                  $query = "SELECT * FROM user WHERE id_user=$id";
                  $result = $conn->query($query);
                  $user = $result->fetch(PDO::FETCH_ASSOC);
                  echo '<input type="text" class="form-control" placeholder="email" name="id_user_fk" value="'.$user['name'].'" required="required">';

                ?>
            </div>
            <div class="form-group">
              <label>Email</label>
              <input type="text" class="form-control" placeholder="email" name="email" value="<?php echo $data['email'];  ?>" required="required">
            </div>
            <div class="form-group">
              <label>Packages</label>
              <select class="form-control custom-select" name="id_paket_fk" onchange="bookChoice()">
                <!-- <option value="0" disabled>Choose the package</option> -->
                <?php 
                  $query = "SELECT * FROM paket";
                  $result = $conn->query($query);
                  while($paket = $result->fetch(PDO::FETCH_ASSOC) ){
                    $a = $data['id_paket_fk'];
                    $b = $paket['id_paket'];
                    if($a == $b){
                      echo '<option value="'.$paket['id_paket'].'"selected >'.$paket['nama_paket'].'</option>';
                    }
                    else{
                      echo '<option value="'.$paket['id_paket'].'">'.$paket['nama_paket'].'</option>';
                    }
                }

                ?>
                </select>
            </div>
            <div class="form-group">
              <label>Booking Code</label>
              <input type="text" class="form-control" placeholder="Booking Code" name="kode_booking" value="<?php echo $data['kode_booking'];  ?>" readonly required="required">
            </div>
            <div class="form-group">
              <label>Guide Name</label>
              <select class="form-control custom-select" name="id_guide_fk" onchange="bookChoice()">
                <!-- <option value="0" disabled>Choose the package</option> -->
                <?php 
                  $query = "SELECT * FROM guide";
                  $result = $conn->query($query);
                  while($guide = $result->fetch(PDO::FETCH_ASSOC) ){
                    $a = $data['id_guide_fk'];
                    $b = $guide['id_guide'];
                    if($a == $b){
                      echo '<option value="'.$guide['id_guide'].'"selected >'.$guide['nama_guide'].'</option>';
                    }
                    else{
                      echo '<option value="'.$guide['id_guide'].'">'.$guide['nama_guide'].'</option>';
                    }
                }

                ?>
                </select>
            </div>
            <div class="form-group">
              <label>Bank Number</label>
              <input type="text" class="form-control" placeholder="Bank Number" name="no_rekening" value="<?php echo $data['no_rekening'];  ?>" required="">
            </div>
            <div class="form-group">
              <label>Payment Method</label>
              <select class="form-control custom-select" name="metode_bayar" required="required">
                <option value="BCA" <?php echo $data['metode_bayar']=='BCA' ? "selected" : "" ?>>Bank Central Asia (BCA)</option>
                <option value="BRI" <?php echo $data['metode_bayar']=='BRI' ? "selected" : "" ?>>Bank Rakyat Indonesia (BRI)</option>
                <option value="BNI" <?php echo $data['metode_bayar']=='BNI' ? "selected" : "" ?>>Bank Negara Indonesia (BNI)</option>
                <option value="MANDIRI" <?php echo $data['metode_bayar']=='MANDIRI' ? "selected" : "" ?>>Bank Mandiri</option>
              </select>
            </div>
            <?php endwhile; ?>
            <button type="submit" class="btn btn-primary">Simpan</button>
          </form>
        </main>
      </div>
    </div>

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.js"></script>
  </body>
</html>