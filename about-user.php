<?php
require 'conn.php';
session_start();

if(!isset($_SESSION['user_id']) ){
	header("Location: login.php");
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
    <link href="assets/css/aboutus.css" rel="stylesheet">
    <link href="form.css" rel="stylesheet"  >

  </head>
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
            <li class="nav-item active">
              <a class="nav-link" href="about-user.php">About Us <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="paket-user.php">Packages</a>
            </li>
						<li class="nav-item">
              <a class="nav-link" href="term&condition-user.php">Term & Conditions</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="galeri-user.php">Gallery</a>
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

    <main role="main">

      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0"></li>
          <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item">
            <img class="first-slide" src="image/1.jpg" alt="First slide">
            <div class="container">
              <div class="carousel-caption text-left">
                <h1>WELCOME TO HOLLYTOUR</h1>
                <p>We provide holiday packages that fit with your wallet!</p>
                <p><a class="btn btn-lg btn-primary" href="daftar.html" role="button">Sign up today</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item active">
            <img class="second-slide" src="image/2.jpg" alt="Second slide">
            <div class="container">
              <div class="carousel-caption">
                <h1>WELCOME TO HOLLYTOUR</h1>
                <p>We provide holiday packages that fit with your wallet!</p>
                <p><a class="btn btn-lg btn-primary" href="paket.html" role="button">See the packages!</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="third-slide" src="image/3.jpg" alt="Third slide">
            <div class="container">
              <div class="carousel-caption text-right">
                <h1>WELCOME TO HOLLYTOUR</h1>
                <p>We provide holiday packages that fit with your wallet!</p>
                <p><a class="btn btn-lg btn-primary" href="galeri.html" role="button">Browse gallery</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </body>

      <!--body -->
      <body>
        <header>
        <div id="content" class="about">
          <p class="about">
        <center><h1> A B O U T   U S <br>
        _____________________________</h1></center><br><br>
      <justify><h4>  &emsp; Hollytour.id is a company engaged in tourism. The vision of our company is to show Indonesia's natural beauty to foreign and domestic tourists. Because a lot of Indonesians themselves have often gone abroad, but have not recognized the natural beauty of their own country. For this reason hollytour.id stands and is ready to show them all the natural beauty and cultural diversity that exist in this Indonesian land.
        <br><br><br><br><br></h4>
      </justify>
    </div>
  </header>

    <div class="ket1">
      <p class="ket1">
        <style>
          .ket1{
            color: #1E90FF;
            font-style: oblique;
            background-color: #1291;
            margin-left: auto;
            width: 95%;
          }
        </style>
            <h2>  KENAPA HARUS LIBURAN DI INDONESIA ? <br>
              __________________________________________________________________ </H2><br><br>
              <h5> &emsp; Masih pada diem di rumah aja nih?? Kapan mau jalan-jalan nya?? Mumpung masih muda, nyesel dikemudian hari rasanya kalo kita sekarang gak cepet-cepet packing barang bawaan dan jelajahi Indonesia. Kapan lagi waktu seru-seruan bareng temen-temen bakal berulang? Mumpung masih muda banyak punya waktu dan tenaga, perbanyaklah jalan-jalan atau traveling. Kegiatan ini membuat kalian keluar dari rumah dan melihat dunia yang luas. Disamping itu, dengan pergi ketempat-tempat baru, banyak sekali pelajaran yang akan kalian dapatkan terutama ketika kalian memperhatikan serta berinteraksi dengan orang-orang baru di setiap daerah yang berbeda. <br><br>
                <br><br>
                &emsp; Apakah kalian masih meragukan keindahan wisata alam Indonesia? Atau kalian cukup puas dan terhibur dengan fasilitas kalian yang udah serba canggih? Sekali waktu, penting juga bagi kita berinteraksi dengan alam, bersatu dan merasakan keindahannya. Dengan demikian, kita akan menyadari betapa alam telah memberikan segala sesuatu yang kita butuhkan. Ditambah lagi Negara kita yang kaya akan keindahan alam dan budayanya yang membuat kita bebas memilih ratusan bahkan ribuan tempat tujuan wisata. Indonesia sendiri memiliki beberapa tempat wisata andalan yang wajib buat kita kunjungi. Salah satunya adalah Raja Ampat, Pulau Komodo, Lombok, Pulau Bali, dan masih banyak lagi.<br><br>
              </h5>
                <br><br>
                </p>
                  </div>

            <div class="container">
      <div style="text-align:center">
    <h2>Contact Us</h2>
    <p>leave us a message:</p>
  </div>
  <div class="row">
    <div class="column">
      <iframe width="550" height="500" src="https://www.youtube.com/embed/uYkjBuwv1Y0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    </div>
    <div class="column">
      <form action="//submit.form" id="ContactUs100" method="post" onsubmit="return ValidateForm(this);">
      <script type="text/javascript">
      function ValidateForm(frm) {
      if (frm.Name.value == "") { alert('Name is required.'); frm.Name.focus(); return false; }
      if (frm.FromEmailAddress.value == "") { alert('Email address is required.'); frm.FromEmailAddress.focus(); return false; }
      if (frm.FromEmailAddress.value.indexOf("@") < 1 || frm.FromEmailAddress.value.indexOf(".") < 1) { alert('Please enter a valid email address.'); frm.FromEmailAddress.focus(); return false; }
      if (frm.Comments.value == "") { alert('Please enter comments or questions.'); frm.Comments.focus(); return false; }
      return true; }
      </script>
      <table style="width:500px;border:0;" cellpadding="8" cellspacing="0">
      <tr> <td>
      <label for="Name">Your Name*:</label>
      </td> <td>
      <input name="Name" type="text" maxlength="60" style="width:250px;" />
      </td> </tr> <tr> <td>
      <label for="PhoneNumber">Phone number:</label>
      </td> <td>
      <input name="PhoneNumber" type="text" maxlength="43" style="width:250px;" />
      </td> </tr> <tr> <td>
      <label for="FromEmailAddress">Email address*:</label>
      </td> <td>
      <input name="FromEmailAddress" type="text" maxlength="90" style="width:250px;" />
      </td> </tr> <tr> <td>
      <label for="Comments">Comments*:</label>
      </td> <td>
      <textarea name="Comments" rows="7" cols="40" style="width:350px;"></textarea>
      </td> </tr> <tr> <td>
      * - required fields
      </td> <td>
      <div style="float:right"><a href="https://www.100forms.com" id="lnk100" title="form to email">``````</a></div>
      <input name="skip_Submit" type="submit" value="Send" />
      <script src="https://www.100forms.com/js/FORMKEY:JTRCFPE2QNB6/SEND:agusprayogi.if@gmail.com" type="text/javascript"></script>
      </td> </tr>
      </table>
      </form>

    </div>
  </div>
</div>


<link rel="stylesheet" href="assets/css/contactus.css">
<button class="open-button" onclick="openForm()">Contact Us!</button>
<div class="form-popup" id="myForm">
  <form action="/action_page.php" class="form-container">
    <h1>Contact Us!</h1>

    <label for="email"><b>Email</b></label>
    <h6> hollytour.id@gmail.com </h6>
    <label for="instagram"><b>Instagram</b></label>
    <h6> hollytour.id </h6>
    <label for="whatsapp"><b>Whatsapp</b></label>
    <h6> 0857 3175 8030 </h6>
    <input type="password" placeholder="" name="psw" required>

    <button type="submit" class="btn cancel" onclick="closeForm()">Hide</button>
  </form>
  <script>
  function openForm() {
      document.getElementById("myForm").style.display = "block";
  }

  function closeForm() {
      document.getElementById("myForm").style.display = "none";
  }
  </script>

</div>


      <!-- FOOTER -->
      <footer class="container">
        <center>
        <p>© 2017-2018 HollyTour Company, Inc.
        </center>
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


<svg xmlns="http://www.w3.org/2000/svg" width="500" height="500" viewBox="0 0 500 500" preserveAspectRatio="none" style="display: none; visibility: hidden; position: absolute; top: -100%; left: -100%;"><defs><style type="text/css"></style></defs><text x="0" y="25" style="font-weight:bold;font-size:25pt;font-family:Arial, Helvetica, Open Sans, sans-serif">500x500</text></svg></body></html>
