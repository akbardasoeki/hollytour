<?php 
  //memanggil file conn.php yang berisi koneski ke database
  //dengan include, semua kode dalam file conn.php dapat digunakan pada file index.php
  include ('conn.php'); 

  $status = '';
  //melakukan pengecekan apakah ada form yang dipost
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $name = $_POST['name'];
      $username = $_POST['username'];
      $no_telp = $_POST['no_telp'];
      $jns_kelamin = $_POST['jns_kelamin'];
      $email = $_POST['email'];
      $address = $_POST['address'];
      $password = $_POST['password'];
      $role= $_POST['role'];
      
      //query with PDO
      $query = $conn->prepare("INSERT INTO user (name, username, no_telp, jns_kelamin, email, address, password, role) VALUES(:name, :username, :no_telp, :jns_kelamin, :email, :address, :password, :role)"); 

      //binding data
      $query->bindParam(':name',$name);
      $query->bindParam(':username',$username);
      $query->bindParam(':no_telp',$no_telp);
      $query->bindParam(':jns_kelamin',$jns_kelamin);
      $query->bindParam(':email',$email);
      $query->bindParam(':address',$address);
      $query->bindParam(':password', password_hash($_POST['password'], PASSWORD_BCRYPT));
      $query->bindParam(':role',$role);

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
    <title>Customer</title>
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
      <li><a href="admin-order.php">Booking</a></li>
      <li class="active"><a href="admin-pelanggan.php">Customer</a></li>
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
                <a class="nav-link" href="<?php echo "admin-pelanggan.php"; ?>">Customer List</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="<?php echo "admin-add-pelanggan.php"; ?>">Add Customer</a>
              </li>
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          
          <?php 
              if ($status=='ok') {
                echo '<br><br><div class="alert alert-success" role="alert">New customer added!</div>';
              }
              elseif($status=='err'){
                echo '<br><br><div class="alert alert-danger" role="alert">Failed added!</div>';
              }
           ?>

          <h2 style="margin: 30px 0 30px 0;">Add Customer</h2>
          <form action="admin-add-pelanggan.php" method="POST">
            
            <div class="form-group">
              <label>Name</label>
              <input type="text" class="form-control" placeholder="Name" name="name" required="required">
            </div>
            <div class="form-group">
              <label>Username</label>
              <input type="text" class="form-control" placeholder="Username" name="username" required="required">
            </div>
            <div class="form-group">
              <label>Phone Number</label>
              <input type="text" class="form-control" placeholder="08xxxxxxxxx" name="no_telp" required="">
            </div>
            <div class="form-group">
              <label>Gender</label>
              <input type="radio" name="jns_kelamin" value="Male"/>Male
              <input type="radio" name="jns_kelamin" value="Female"/>Female
            </div>
            <div class="form-group">
              <label>Email</label>
              <input type="text" class="form-control" placeholder="Email" name="email" required="required">
            </div>
            <div class="form-group">
              <label>Address</label>
              <input type="text" class="form-control" placeholder="Address" name="address" required="required">
            </div>
            <div class="form-group">
              <label>Role</label>
              <input type="radio" name="role" value="User"/>User
              <input type="radio" name="role" value="Admin"/>Admin
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