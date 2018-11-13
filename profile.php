<!DOCTYPE html>
<html>
<head>
<title>Edit</title>
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
          <a class="nav-link" href="about-user.html">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="paket-user.html">Packages</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="galeri-user.html">Gallery</a>
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

	<div class="row">
      <!-- left column -->
      <div class="col-md-4">
        <div class="text-center">
          <img src="//placehold.it/100" class="avatar img-circle" alt="avatar">
          <h6>Upload a photo...</h6>
          
          <input type="file" class="form-control">
        </div>
      </div>
      
      <!-- edit form column -->
      <form action="daftar.php" method="POST">
        <div class="mb-3">
          <label for="name">Name</label>
          <input type="text" class="form-control" name="name" id="name">
        </div>
      <div class="mb-3">
        <label for="username">Username</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text">@</span>
          </div>
          <input type="text" class="form-control" name="username" id="username">
        </div>
      </div>

      <div class="mb-3">
          <label for="telephone">Phone Number</label>
          <input type="text" class="form-control" id="telephone" name="no_telp">
        </div>

      <div class="mb-3">
            <label for="Gender">Gender </label><br />
            <input type="radio" name="jns_kelamin" value="Male"/>Male
            <input type="radio" name="jns_kelamin" value="Female"/>Female
            <br />
          </div>

      <div class="mb-3">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" id="email">
      </div>

      <div class="mb-3">
        <label for="address">Address</label>
        <input type="text" class="form-control" name="address" id="address">
      </div>

      <div class="row">
          <div class="col-md-6 mb-3">
            <label for="Password">Password</label>
            <input type="password" class="form-control" name="password" id="password" value="">
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type="reset" class="btn btn-default" value="Cancel">
              <input type="button" class="btn btn-primary" value="Save Changes">
              <span></span>
            </div>
          </div>
        </form>
      </div>
  </div>
</div>
</body>
</html>