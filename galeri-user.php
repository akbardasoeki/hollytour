<?php
require 'conn.php';
session_start();

if(!isset($_SESSION['user_id']) ){
	header("Location: login.php");
}
?>
<!DOCTYPE html>
<html>
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
              <li class="nav-item active">
                <a class="nav-link" href="galeri-user.php">Gallery <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="profile.php">Profile</a>
            </li>
            </ul>
            <li class="form-inline mt-2 mt-md-0">
              <a class="btn btn-outline-success my-2 my-sm-0" href="index.php">Sign Out</a>
            </li>
          </div>
        </nav>
      </header>
<h2 style="text-align:center; padding-bottom: 5%; padding-top: 8%">Photo Gallery</h2>

<div class="row">
  <div class="column">
    <img src="image/galeri/lombok/3.jpg" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="image/galeri/lombok/4.jpg" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="image/galeri/lombok/5.jpg" style="width:100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="image/galeri/lombok/10.jpg" style="width:100%; padding-bottom :10%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
  </div>
  <div class="column">
      <img src="image/galeri/lombok/1.jpg" style="width:100%" onclick="openModal();currentSlide(5)" class="hover-shadow cursor">
    </div>
    <div class="column">
      <img src="image/galeri/lombok/2.jpg" style="width:100%" onclick="openModal();currentSlide(6)" class="hover-shadow cursor">
    </div>
    <div class="column">
      <img src="image/galeri/lombok/7.jpg" style="width:100%" onclick="openModal();currentSlide(7)" class="hover-shadow cursor">
    </div>
    <div class="column">
      <img src="image/galeri/lombok/9.jpg" style="width:100%; padding-bottom :10%" onclick="openModal();currentSlide(8)" class="hover-shadow cursor">
    </div>
    <div class="column">
        <img src="image/galeri/lombok/6.jpg" style="width:100%" onclick="openModal();currentSlide(9)" class="hover-shadow cursor">
      </div>
   <div class="column">
        <img src="image/galeri/lombok/11.jpg" style="width:100%" onclick="openModal();currentSlide(10)" class="hover-shadow cursor">
      </div>
    <div class="column">
        <img src="image/galeri/lombok/12.jpg" style="width:100%" onclick="openModal();currentSlide(11)" class="hover-shadow cursor">
       </div>
    <div class="column">
         <img src="image/galeri/komodo/20.jpg" style="width:100%; padding-bottom: 10%" onclick="openModal();currentSlide(12)" class="hover-shadow cursor">
      </div>
</div>
<div class="row">
    <div class="column">
        <img src="image/galeri/komodo/1.jpg" style="width:100%" onclick="openModal();currentSlide(13)" class="hover-shadow cursor">
     </div>
    <div class="column">
      <img src="image/galeri/komodo/2.jpg" style="width:100%" onclick="openModal();currentSlide(14)" class="hover-shadow cursor">
    </div>
    <div class="column">
      <img src="image/galeri/komodo/3.jpg" style="width:100%" onclick="openModal();currentSlide(15)" class="hover-shadow cursor">
    </div>
    <div class="column">
      <img src="image/galeri/komodo/4.jpg" style="width:100%; padding-bottom: 10%" onclick="openModal();currentSlide(16)" class="hover-shadow cursor">
    </div>
      <div class="column">
        <img src="image/galeri/komodo/9.jpg" style="width:100%" onclick="openModal();currentSlide(17)" class="hover-shadow cursor">
      </div>
      <div class="column">
        <img src="image/galeri/komodo/10.jpg" style="width:100%" onclick="openModal();currentSlide(18)" class="hover-shadow cursor">
      </div>
      <div class="column">
          <img src="image/galeri/komodo/11.jpg" style="width:100%" onclick="openModal();currentSlide(19)" class="hover-shadow cursor">
        </div>
        <div class="column">
          <img src="image/galeri/komodo/12.jpg" style="width:100%; padding-bottom: 10%" onclick="openModal();currentSlide(20)" class="hover-shadow cursor">
        </div>
        <div class="column">
          <img src="image/galeri/komodo/13.jpg" style="width:100%" onclick="openModal();currentSlide(21)" class="hover-shadow cursor">
        </div>
        <div class="column">
            <img src="image/galeri/komodo/14.jpg" style="width:100%" onclick="openModal();currentSlide(22)" class="hover-shadow cursor">
          </div>
          <div class="column">
            <img src="image/galeri/komodo/15.jpg" style="width:100%" onclick="openModal();currentSlide(23)" class="hover-shadow cursor">
          </div>
          <div class="column">
            <img src="image/galeri/komodo/16.jpg" style="width:100%; padding-bottom: 10%" onclick="openModal();currentSlide(24)" class="hover-shadow cursor">
          </div>
          <div class="column">
            <img src="image/galeri/komodo/17.jpg" style="width:100%" onclick="openModal();currentSlide(25)" class="hover-shadow cursor">
          </div>
          <div class="column">
            <img src="image/galeri/komodo/18.jpg" style="width:100%" onclick="openModal();currentSlide(26)" class="hover-shadow cursor">
          </div>
          <div class="column">
            <img src="image/galeri/komodo/19.jpg" style="width:100%" onclick="openModal();currentSlide(27)" class="hover-shadow cursor">
          </div>
          <div class="column">
            <img src="image/galeri/komodo/5.jpg" style="width:100%; padding-bottom: 10%" onclick="openModal();currentSlide(28)" class="hover-shadow cursor">
          </div>
            <div class="column">
              <img src="image/galeri/komodo/21.jpg" style="width:100%" onclick="openModal();currentSlide(29)" class="hover-shadow cursor">
            </div>
            <div class="column">
              <img src="image/galeri/komodo/22.jpg" style="width:100%" onclick="openModal();currentSlide(30)" class="hover-shadow cursor">
            </div>
          <div class="column">
            <img src="image/galeri/komodo/5_1.jpg" style="width:100%" onclick="openModal();currentSlide(31)" class="hover-shadow cursor">
          </div>
          <div class="column">
              <img src="image/galeri/komodo/6.jpg" style="width:100%; padding-bottom: 80%" onclick="openModal();currentSlide(32)" class="hover-shadow cursor">
            </div>
            <div class="column">
              <img src="image/galeri/komodo/7.jpg" style="width:100%" onclick="openModal();currentSlide(33)" class="hover-shadow cursor">
            </div>
</div>

<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      <div class="numbertext">1 / 33</div>
      <img src="image/galeri/lombok/3.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 33</div>
      <img src="image/galeri/lombok/4.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">3 / 33</div>
      <img src="image/galeri/lombok/5.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">4 / 33</div>
      <img src="image/galeri/lombok/10.jpg" style="width:100%">
    </div>
    <div class="mySlides">
        <div class="numbertext">5 / 33</div>
        <img src="image/galeri/lombok/1.jpg" style="width:100%">
      </div>

      <div class="mySlides">
        <div class="numbertext">6 / 33</div>
        <img src="image/galeri/lombok/2.jpg" style="width:100%">
      </div>

      <div class="mySlides">
        <div class="numbertext">7 / 33</div>
        <img src="image/galeri/lombok/7.jpg" style="width:100%">
      </div>

      <div class="mySlides">
        <div class="numbertext">8 / 33</div>
        <img src="image/galeri/lombok/9.jpg" style="width:100%">
      </div>
      <div class="mySlides">
          <div class="numbertext">9 / 33</div>
          <img src="image/galeri/lombok/6.jpg" style="width:100%">
        </div>

        <div class="mySlides">
          <div class="numbertext">10 / 33</div>
          <img src="image/galeri/lombok/11.jpg" style="width:100%">
        </div>

        <div class="mySlides">
          <div class="numbertext">11 / 33</div>
          <img src="image/galeri/lombok/12.jpg" style="width:100%">
        </div>
        <div class="mySlides">
      <div class="numbertext">12 / 33</div>
      <img src="image/galeri/komodo/20.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">13 / 33</div>
      <img src="image/galeri/komodo/1.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">14 / 33</div>
      <img src="image/galeri/komodo/2.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">15 / 33</div>
      <img src="image/galeri/komodo/3.jpg" style="width:100%">
    </div>
    <div class="mySlides">
        <div class="numbertext">16 / 33</div>
        <img src="image/galeri/komodo/4.jpg" style="width:100%">
      </div>

      <div class="mySlides">
        <div class="numbertext">17 / 33</div>
        <img src="image/galeri/komodo/9.jpg" style="width:100%">
      </div>

      <div class="mySlides">
        <div class="numbertext">18 / 33</div>
        <img src="image/galeri/komodo/10.jpg" style="width:100%">
      </div>

      <div class="mySlides">
        <div class="numbertext">19 / 33</div>
        <img src="image/galeri/komodo/11.jpg" style="width:100%">
      </div>
      <div class="mySlides">
          <div class="numbertext">20 / 33</div>
          <img src="image/galeri/komodo/12.jpg" style="width:100%">
        </div>

        <div class="mySlides">
          <div class="numbertext">21 / 33</div>
          <img src="image/galeri/komodo/13.jpg" style="width:100%">
        </div>

        <div class="mySlides">
          <div class="numbertext">22 / 33</div>
          <img src="image/galeri/komodo/14.jpg" style="width:100%">
        </div>
        <div class="mySlides">
            <div class="numbertext">23 / 33</div>
            <img src="image/galeri/komodo/15.jpg" style="width:100%">
          </div>

          <div class="mySlides">
            <div class="numbertext">24 / 33</div>
            <img src="image/galeri/komodo/16.jpg" style="width:100%">
          </div>

          <div class="mySlides">
            <div class="numbertext">25 / 33</div>
            <img src="image/galeri/komodo/17.jpg" style="width:100%">
          </div>

          <div class="mySlides">
            <div class="numbertext">26 / 33</div>
            <img src="image/galeri/komodo/18.jpg" style="width:100%">
          </div>
          <div class="mySlides">
              <div class="numbertext">27 / 33</div>
              <img src="image/galeri/komodo/19.jpg" style="width:100%">
            </div>

            <div class="mySlides">
              <div class="numbertext">28 / 33</div>
              <img src="image/galeri/komodo/5.jpg" style="width:100%">
            </div>

            <div class="mySlides">
              <div class="numbertext">29 / 33</div>
              <img src="image/galeri/komodo/21.jpg" style="width:100%">
            </div>

            <div class="mySlides">
              <div class="numbertext">30 / 33</div>
              <img src="image/galeri/komodo/22.jpg" style="width:100%">
            </div>
            <div class="mySlides">
                <div class="numbertext">31 / 33</div>
                <img src="image/galeri/komodo/5_1.jpg" style="width:100%">
              </div>

              <div class="mySlides">
                <div class="numbertext">32 / 33</div>
                <img src="image/galeri/komodo/6.jpg" style="width:100%">
              </div>

              <div class="mySlides">
                <div class="numbertext">33 / 33</div>
                <img src="image/galeri/komodo/7.jpg" style="width:100%">
              </div>

    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <div class="caption-container">
      <p id="caption"></p>
    </div>
  </div>
</div>

<script src="assets/js/galeri5.js"></script>

</body>
</html>
