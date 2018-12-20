<?php 
  //memanggil file conn.php yang berisi koneski ke database
  //dengan include, semua kode dalam file conn.php dapat digunakan pada file index.php
  include ('conn.php'); 
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
      <li><a href="admin-order.php">Booking</a></li>
      <li><a href="admin-pelanggan.php">Customer</a></li>
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
                <a class="nav-link active" href="<?php echo "admin-guide.php"; ?>">Guide List</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo "admin-add-guide.php"; ?>">Add Guide</a>
              </li>
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <?php 
            //mengecek apakah proses update dan delete sukses/gagal
            if (@$_GET['status']!==NULL) {
              $status = $_GET['status'];
              if ($status=='ok') {
                echo '<br><br><div class="alert alert-success" role="alert">Guide list updated</div>';
              }
              elseif($status=='err'){
                echo '<br><br><div class="alert alert-danger" role="alert">Guide list failed to update</div>';
              }

            }
           ?>
          <h2 style="margin: 30px 0 30px 0;">Guide List</h2>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>Guide Code</th>
                  <th>Guide Name</th>
                  <th>Gender</th>
                  <th>Phone Number</th>
                  <th>Address</th>
                  <th>Age</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                  //proses menampilkan data dari database dengan PDO:
                  //siapkan query SQL
                  $query = "SELECT * FROM guide";
                  //eksekusi query
                  $result = $conn->query($query);

                 ?>

                 <?php while($data = $result->fetch(PDO::FETCH_ASSOC) ): ?>
                  <tr>
                    <td><?php echo $data['kode_guide'];  ?></td>
                    <td><?php echo $data['nama_guide'];  ?></td>
                    <td><?php echo $data['jns_kelamin_guide'];  ?></td>
                    <td><?php echo $data['no_telp_guide'];  ?></td>
                    <td><?php echo $data['address_guide'];  ?></td>
                    <td><?php echo $data['umur_guide'];  ?></td>
                    <td>
                      <a href="<?php echo "admin-update-guide.php?id_guide=".$data['id_guide']; ?>" class="btn btn-outline-warning btn-sm"> Update</a>
                      &nbsp;&nbsp;
                      <a href="<?php echo "admin-delete-guide.php?id_guide=".$data['id_guide']; ?>" class="btn btn-outline-danger btn-sm"> Delete</a>
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