<?php

require 'conn.php';
session_start();

if( !isset($_SESSION['user_id']) ){
	header("Location: login.php");
} else {
  $query = "SELECT * FROM user where id_user='{$_SESSION['user_id']}'";
  $result = $conn->query($query);
  $data = $result->fetch(PDO::FETCH_ASSOC);
  }

  if(isset($_POST['username'])){
    $name = $_POST['name'];
    $username = $_POST['username'];
    $no_telp = $_POST['no_telp'];
    $jns_kelamin = $_POST['jns_kelamin'];
    $email = $_POST['email'];
    $address = $_POST['address'];

    $query = "UPDATE user set name='{$name}', username='{$username}', no_telp='{$no_telp}', jns_kelamin='{$jns_kelamin}', email='{$email}', address='{$address}' WHERE id_user='{$_SESSION['user_id']}'";
    $result = $conn->prepare($query);
    if($result->execute()){
      echo "<script>alert('Update Berhasil')</script>";
    } else {
      echo "<script>alert('gagal')</script>";
    }
    $query = "SELECT * FROM user where id_user='{$_SESSION['user_id']}'";
    $result = $conn->query($query);
    $data = $result->fetch(PDO::FETCH_ASSOC);
  }


?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="">
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="assets/css/style-user.css">
    <link rel="icon" href="image/logo.png">

    <title>HollyTour</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/carousel.css" rel="stylesheet">
</head>

<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="index-user.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about-user.php">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="paket-user.php">Packages</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="galeri-user.php">Gallery</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="profile.php">Profile</a>
        </li>
      </ul>
      <li class="form-inline mt-2 mt-md-0">
        <a class="btn btn-outline-success my-2 my-sm-0" href="index.php">Sign Out</a>
      </li>
    </div>
  </nav>
</header>

<body>
<div class="container">
    <h1 style="text-align:center; margin-top:20px">Profile</h1>

  	<hr>

	<div class="" style="width:60% !important" >
    <div></div>
      <!-- edit form column -->
      <form action="profile.php" method="POST">
        <div class="mb-3 ">
          <label for="name">Name</label>
          <input type="text" class="form-control" name="name" id="name" value="<?php echo $data['name'];  ?>">
        </div>

      <div class="mb-3">
        <label for="username">Username</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text">@</span>
          </div>
          <input type="text" class="form-control" name="username" id="username" value="<?php echo $data['username'];  ?>">
        </div>
      </div>

      <div class="mb-3">
          <label for="telephone">Phone Number</label>
          <input type="text" class="form-control" id="telephone" name="no_telp" value="<?php echo $data['no_telp'];  ?>">
        </div>

      <div class="mb-3">
            <label for="Gender">Gender </label><br />
            <input type="radio" name="jns_kelamin" value="Male" <?php if($data['jns_kelamin'] == 'Male'){ echo 'checked'; } ?>/>Male
            <input type="radio" name="jns_kelamin" value="Female" <?php if($data['jns_kelamin'] == 'Female'){ echo 'checked'; } ?>/>Female
            <br />
          </div>

      <div class="mb-3">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" id="email" value="<?php echo $data['email'];  ?>">
      </div>

      <div class="mb-3">
        <label for="address">Address</label>
        <input type="text" class="form-control" name="address" id="address" value="<?php echo $data['address'];  ?>">
      </div>

      <div class="row">
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-12">
              <button style="display:inline-block" type="submit" class="btn btn-primary">Save Changes</button>
              <span></span>
            </div>
          </div>
      </div>
      </form>
  </div>
</div>
</body>
</html>
