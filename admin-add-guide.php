  <?php 
  //memanggil file conn.php yang berisi koneski ke database
  //dengan include, semua kode dalam file conn.php dapat digunakan pada file index.php
  include ('conn.php'); 

  $status = '';
  //melakukan pengecekan apakah ada form yang dipost
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $kode_guide = $_POST['kode_guide'];
      $nama_guide = $_POST['nama_guide'];
      $jns_kelamin_guide = $_POST['jns_kelamin_guide'];
      $no_telp_guide = $_POST['no_telp_guide'];
      $address_guide = $_POST['address_guide'];
      $umur_guide = $_POST['umur_guide'];
      
      //query with PDO
      $query = $conn->prepare("INSERT INTO guide (kode_guide, nama_guide, jns_kelamin_guide, no_telp_guide, address_guide, umur_guide) VALUES(:kode_guide, :nama_guide, :jns_kelamin_guide, :no_telp_guide, :address_guide, :umur_guide)"); 

      //binding data
      $query->bindParam(':kode_guide',$kode_guide);
      $query->bindParam(':nama_guide',$nama_guide);
      $query->bindParam(':jns_kelamin_guide',$jns_kelamin_guide);
      $query->bindParam(':no_telp_guide',$no_telp_guide);
      $query->bindParam(':address_guide',$address_guide);
      $query->bindParam(':umur_guide',$umur_guide);

      //eksekusi query
      if ($query->execute()) {
        $status = 'ok';
      }
      else{
        $status = 'err';
      }
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

    <div class="container-fluid">
      <div class="row">
         <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column" style="margin-top:100px;">
               <li class="nav-item">
                <a class="nav-link" href="<?php echo "admin-guide.php"; ?>">Guide List</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="<?php echo "admin-add-guide.php"; ?>">Add Guide</a>
              </li>
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          
          <?php 
              if ($status=='ok') {
                echo '<br><br><div class="alert alert-success" role="alert">New guide added!</div>';
              }
              elseif($status=='err'){
                echo '<br><br><div class="alert alert-danger" role="alert">Failed Added!</div>';
              }
           ?>

          <h2 style="margin: 30px 0 30px 0;">Add Guide</h2>
          <form action="admin-add-guide.php" method="POST">
          <div class="form-group">
              <label>Guide Code</label>
              <input type="text" class="form-control" name="kode_guide" required="required">
            </div>
            <div class="form-group">
              <label>Name</label>
              <input type="text" class="form-control" placeholder="name" name="nama_guide" required="required">
            </div>
            <div class="form-group">
              <label>Gender</label>
              <select class="form-control custom-select" name="jns_kelamin_guide" required="required">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
              </select>
            </div>
            <div class="form-group">
              <label>Phone Number</label>
              <input type="text" class="form-control" placeholder="08xxxxxxxx" name="no_telp_guide" required="required">
            </div>
            <div class="form-group">
              <label>Address</label>
              <textarea class="form-control" name="address_guide" required="required"></textarea>
            </div>
            <div class="form-group">
              <label>Age</label>
              <input type="number" class="form-control" placeholder="Age" name="umur_guide" required="required">
            </div>
            
            <button type="submit" class="btn btn-primary">Save</button>
          </form>
        </main>
      </div>
    </div>

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.js"></script>
  </body>
</html>