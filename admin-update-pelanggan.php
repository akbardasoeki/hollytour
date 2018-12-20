<?php 
  //memanggil file conn.php yang berisi koneski ke database
  //dengan include, semua kode dalam file conn.php dapat digunakan pada file index.php
  include ('conn.php'); 

  $status = '';
  //melakukan pengecekan apakah ada variable GET yang dikirim
  if ($_SERVER['REQUEST_METHOD'] === 'GET') {
      if (isset($_GET['id_user'])) {
          //query SQL
          $id_user_upd = $_GET['id_user'];
          $query = $conn->prepare("SELECT * FROM user WHERE id_user = :id_user");
          //binding data
          $query->bindParam(':id_user',$id_user_upd);
          //eksekusi query
          $query->execute(); 
      }  
  }

  //melakukan pengecekan apakah ada form yang dipost
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $id_user = $_GET['id_user'];
      $name = $_POST['name'];
      $username = $_POST['username'];
      $no_telp = $_POST['no_telp'];
      $jns_kelamin = $_POST['jns_kelamin'];
      $email = $_POST['email'];
      $address = $_POST['address'];
      $role = $_POST['role'];

      echo $id_user.' ';
      echo $name.' ';
      echo $username.' ';
      echo $no_telp.' ';
      echo $jns_kelamin.' ';
      echo $email.' ';
      echo $address.' ';
      echo $role;
      
      //query SQL
      $queryne = $conn->prepare("UPDATE user SET name=:name, username=:username, no_telp=:no_telp, jns_kelamin=:jns_kelamin, email=:email, role=:role, address=:address WHERE id_user=$id_user"); 

      //binding data
      // $query->bindParam(':id_user',$id_user);
      $queryne->bindParam(':name',$name);
      $queryne->bindParam(':username',$username);
      $queryne->bindParam(':no_telp',$no_telp);
      $queryne->bindParam(':jns_kelamin',$jns_kelamin);
      $queryne->bindParam(':email',$email);
      $queryne->bindParam(':address',$address);
      $queryne->bindParam(':role',$role);

      //eksekusi query
      if ($queryne->execute()) {
        $status = 'ok';
      }
      else{
        $status = 'err';
      }

      //redirect ke halaman lain
      header('Location: admin-pelanggan.php?status='.$status);
  }
  

?>


<!DOCTYPE html>
<html>
  <head>
    <title>Customer</title>
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
               <a class="nav-link active" href="<?php echo "admin-pelanggan.php"; ?>">Customer List</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="<?php echo "admin-add-pelanggan.php"; ?>">Add Customer</a>
                </li>
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          

          <h2 style="margin: 30px 0 30px 0;">Update Customer</h2>
          <form action="?id_user=<?php echo @$_GET['id_user']; ?>" method="POST">
            <?php while($data = $query->fetch(PDO::FETCH_ASSOC)): ?>
            <div class="form-group">
              <!-- <label>ID Guide</label> -->
              <input type="hidden" class="form-control" name="id_user" value="<?php echo $data['id_user'];  ?>" readonly required="required">
            </div>
            <div class="form-group">
              <label>Name</label>
              <input type="text" class="form-control" placeholder="Name" name="name" value="<?php echo $data['name'];  ?>" required="required">
            </div>
            <div class="form-group">
              <label>Username</label>
              <input type="text" class="form-control" placeholder="Username" name="username" value="<?php echo $data['username'];  ?>" required="required">
            </div>
            <div class="form-group">
              <label>Phone Number</label>
              <input type="text" class="form-control" placeholder="Phone Number" name="no_telp" value="<?php echo $data['no_telp'];  ?>" required="">
            </div>
            <div class="form-group">
              <label>Gender</label>
              <select class="form-control custom-select" name="jns_kelamin" required="required">
                <option value="">Choose one</option>
                <option value="Male" <?php if($data['jns_kelamin'] == "Male"){ echo "selected"; } ?>>Male</option>
                <option value="Female" <?php if($data['jns_kelamin'] == "Female"){ echo "selected"; } ?>>Female</option>
              </select>
            </div>
            <div class="form-group">
              <label>Email</label>
              <input type="text" class="form-control" placeholder="Email" name="email" value="<?php echo $data['email'];  ?>" required="required">
            </div>
            <div class="form-group">
              <label>Address</label>
              <textarea class="form-control" name="address" required="required"><?php echo $data['address'];  ?></textarea>
            </div>
            <div class="form-group">
              <label>Role</label>
              <select class="form-control custom-select" name="role" required="required">
                <option value="">Choose one</option>
                <option value="user" <?php if($data['role'] == "user"){ echo "selected"; } ?>>User</option>
                <option value="admin" <?php if($data['role'] == "admin"){ echo "selected"; } ?>>Admin</option>
              </select>
            </div>
            <?php endwhile; ?>
            <button type="submit" name="update" class="btn btn-primary">Save</button>
          </form>
        </main>
      </div>
    </div>

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.js"></script>
  </body>
</html>