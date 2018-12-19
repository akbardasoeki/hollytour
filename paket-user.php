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
    <link href="assets/css/album.css" rel="stylesheet">

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
            <li class="nav-item">
              <a class="nav-link" href="about-user.php">About Us</a>
            </li>
            <li class="nav-item active">
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

      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">All The Packages</h1>
        </div>
      </section>

    <div class="album py-5 bg-light">
      <div class="container">

        <div class="row">
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <img class="card-img-top" style="height: 225px; width: 100%; display: block;" src="image/lombok.jpg" data-holder-rendered="true">
              <div class="card-body">
                <h6>TRIP 3DAY-2NIGHT LOMBOK</h6>
                <p class="card-text">Rp. 999.000/Pax</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-primary" id="myBtn">View</button>
                      <div class="modal fade" id="myModal">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="container marketing">
                              <div class="modal-header">
                                <h2 class="modal-tittle" style="text-align: center;" > <b> PRIVATE TRIP 3D2N LOMBOK HEMAT </b></h2>
                              </div>
                              <br><span class="text-muted">Rp. 999.000/Pax</span>
                              <br>Min. 6 Pax
                              <br>Meeting Point : International Lombok Airport
                              <div class="modal-body">
                                <div class="row featurette">
                                  <div class="col-md-5 order-md-2">
                                    <h2 style="text-align:center;">INCLUDE</h2>
                                    <p class="lead">
                                    <ul>
                                      <li>Transport AC</li>
                                      <li>Penginapan AC</li>
                                      <li>Makan 6X</li>
                                      <li>Air Mineral</li>
                                      <li>Lazybag</li>
                                      <li>Boat</li>
                                      <li>Tiket Masuk Wisata</li>
                                      <li>Local Guide</li>
                                      <li>Asuransi by ACA</li>
                                      <li>Documentation</li>
                                    </ul>
                                    </p>
                                  </div>
                                <div class="col-md-5 order-md-3">
                                  <h2 style="text-align:center;">EXCLUDE</h2>
                                  <p class="lead">
                                    <ul>
                                      <li>Tiket Pesawat</li>
                                      <li>Selain Yang Di Sebutkan Di samping</li>
                                      <li>Kebutuhan Pribadi</li>
                                      <li>Tips Sukarela (seikhlasnya)</li>
                                    </ul>
                                  </p>
                                </div>
                              </div>
                              <div >
                                <h2 style="text-align:center">DESTINASI</h2>
                                <p class="lead">
                                  <ul>
                                    <li>Desa Sade</li>
                                    <li>Pantai Kuta</li>
                                    <li>Pantai Selong Belanak</li>
                                    <li>Tanjung Aan</li>
                                    <li>Bukit Marese</li>
                                    <li>Pantai & Bukit Seger</li>
                                    <li>Gili Nangu, Sudak & Kedis</li>
                                  </ul>
                                </p>
                              </div>
                              </div>
                              <div class="modal-footer">
                              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    <a type="button" href="order.php" class="btn btn-sm btn-outline-primary">Order</a>
                  </div>
                  <small class="text-muted">9 mins</small>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <img class="card-img-top" src="image/1.jpg" data-holder-rendered="true" style="height: 225px; width: 100%; display: block;">
              <div class="card-body">
                  <h6>TRIP 4DAY-3NIGHT LOMBOK & FLIGHT ROUND-TRIP</h6>
                  <p class="card-text">Rp. 2.999.000/Pax</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-primary" id="myBtn2">View</button>
                      <div class="modal fade" id="myModal2">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="container marketing">
                              <div class="modal-header">
                                <h2 class="modal-tittle" style="text-align: center;" > <b> PRIVATE TRIP 4D3N LOMBOK + FLIGHT PP </b></h2>
                              </div>
                              <br><span class="text-muted">Rp. 2.999.000/Pax</span>
                              <br>Min. 6 Pax
                              <br>Meeting Point : International Lombok Airport
                              <div class="modal-body">
                                <div class="row featurette">
                                  <div class="col-md-5 order-md-2">
                                    <h2 style="text-align:center;">INCLUDE</h2>
                                    <p class="lead">
                                    <ul>
                                      <li>Tiket Pesawat PP</li>
                                      <li>Transport AC</li>
                                      <li>Penginapan Bintang 3</li>
                                      <li>Meals B/L/D</li>
                                      <li>Air Mineral</li>
                                      <li>Lazybag</li>
                                      <li>Boat</li>
                                      <li>Tiket Masuk Wisata</li>
                                      <li>Local Guide</li>
                                      <li>Asuransi by ACA</li>
                                      <li>Documentation</li>
                                    </ul>
                                    </p>
                                  </div>
                                <div class="col-md-5 order-md-3">
                                  <h2 style="text-align:center;">EXCLUDE</h2>
                                  <p class="lead">
                                    <ul>
                                      <li>Selain Yang Di Sebutkan Di samping</li>
                                      <li>Kebutuhan Pribadi</li>
                                      <li>Tips Sukarela (seikhlasnya)</li>
                                    </ul>
                                  </p>
                                </div>
                              </div>
                              <div >
                                <h2 style="text-align:center">DESTINASI</h2>
                                <p class="lead">
                                  <ul>
                                    <li>Desa Sade</li>
                                    <li>Pantai Kuta</li>
                                    <li>Pantai Selong Belanak</li>
                                    <li>Tanjung Aan</li>
                                    <li>Bukit Marese</li>
                                    <li>Pantai & Bukit Seger</li>
                                    <li>Gili Nangu, Sudak , Kedis & Tangkong</li>
                                    <li>Taman Pura Narmada</li>
                                    <li>Kota Tua Ampenan</li>
                                    <li>Benang Kelambu</li>
                                    <li>Benang Sekotel</li>
                                    <li>Monkey Forest Suranadi</li>
                                    <li>Dll.</li>
                                  </ul>
                                </p>
                              </div>
                              </div>
                              <div class="modal-footer">
                              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    <a type="button" href="order.php" class="btn btn-sm btn-outline-primary">Order</a>
                  </div>
                  <small class="text-muted">9 mins</small>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <img class="card-img-top" src="image/3.jpg" data-holder-rendered="true" style="height: 225px; width: 100%; display: block;">
              <div class="card-body">
                  <h6>TRIP 4DAY-3NIGHT LOMBOK</h6>
                  <p class="card-text">Rp. 2.150.000/Pax</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-primary" id="myBtn3">View</button>
                      <div class="modal fade" id="myModal3">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="container marketing">
                              <div class="modal-header">
                                <h2 class="modal-tittle" style="text-align: center;" > <b> PRIVATE TRIP 4D3N LOMBOK </b></h2>
                              </div>
                              <br><span class="text-muted">Rp. 2.150.000/Pax</span>
                              <br>Min. 6 Pax
                              <br>Meeting Point : International Lombok Airport
                              <div class="modal-body">
                                <div class="row featurette">
                                  <div class="col-md-5 order-md-2">
                                    <h2 style="text-align:center;">INCLUDE</h2>
                                    <p class="lead">
                                    <ul>
                                      <li>Transport AC</li>
                                      <li>Penginapan Bintang 3</li>
                                      <li>Meals B/L/D</li>
                                      <li>Air Mineral & Snack</li>
                                      <li>Lazybag</li>
                                      <li>Boat</li>
                                      <li>Tiket Masuk Wisata</li>
                                      <li>Local Guide</li>
                                      <li>Asuransi by ACA</li>
                                      <li>Documentation</li>
                                    </ul>
                                    </p>
                                  </div>
                                <div class="col-md-5 order-md-3">
                                  <h2 style="text-align:center;">EXCLUDE</h2>
                                  <p class="lead">
                                    <ul>
                                      <li>Tiket Pesawat</li>
                                      <li>Selain Yang Di Sebutkan Di samping</li>
                                      <li>Kebutuhan Pribadi</li>
                                      <li>Tips Sukarela (seikhlasnya)</li>
                                    </ul>
                                  </p>
                                </div>
                              </div>
                              <div >
                                <h2 style="text-align:center">DESTINASI</h2>
                                <p class="lead">
                                  <ul>
                                    <li>Desa Sade</li>
                                    <li>Pantai Kuta</li>
                                    <li>Pantai Selong Belanak</li>
                                    <li>Tanjung Aan</li>
                                    <li>Bukit Marese</li>
                                    <li>Pantai & Bukit Seger</li>
                                    <li>Gili Nangu, Sudak , Kedis & Tangkong</li>
                                    <li>Taman Pura Narmada</li>
                                    <li>Kota Tua Ampenan</li>
                                    <li>Benang Kelambu</li>
                                    <li>Benang Sekotel</li>
                                    <li>Monkey Forest Suranadi</li>
                                    <li>Dll.</li>
                                  </ul>
                                </p>
                              </div>
                              </div>
                              <div class="modal-footer">
                              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    <a type="button" href="order.php" class="btn btn-sm btn-outline-primary">Order</a>
                  </div>
                  <small class="text-muted">9 mins</small>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <img class="card-img-top" src="image/belitung.jpg" data-holder-rendered="true" style="height: 225px; width: 100%; display: block;">
              <div class="card-body">
                  <h6>TRIP 3DAY-2NIGHT BELITUNG</h6>
                  <p class="card-text">Rp. 2.000.000/Pax</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-primary" id="myBtn4">View</button>
                      <div class="modal fade" id="myModal4">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="container marketing">
                              <div class="modal-header">
                                <h2 class="modal-tittle" style="text-align: center;" > <b> PRIVATE TRIP 3D2N BELITUNG HEMAT </b></h2>
                              </div>
                              <br><span class="text-muted">Rp. 2.000.000/Pax</span>
                              <br>Min. 4 Pax
                              <br>Meeting Point : Tanjung Pandan airport
                              <div class="modal-body">
                                <div class="row featurette">
                                  <div class="col-md-5 order-md-2">
                                    <h2 style="text-align:center;">INCLUDE</h2>
                                    <p class="lead">
                                    <ul>
                                      <li>Transport AC</li>
                                      <li>Hotel Golden Tulip/Setara</li>
                                      <li>Meals B/L/D</li>
                                      <li>Alat Snorkeling & Jaket Pelampung</li>
                                      <li>Tiket Masuk Wisata</li>
                                      <li>Alat Snorkling</li>
                                      <li>Local Guide</li>
                                      <li>Asuransi by ACA</li>
                                      <li>Documentation</li>
                                    </ul>
                                    </p>
                                  </div>
                                <div class="col-md-5 order-md-3">
                                  <h2 style="text-align:center;">EXCLUDE</h2>
                                  <p class="lead">
                                    <ul>
                                      <li>Tiket Pesawat</li>
                                      <li>Selain Yang Di Sebutkan Di samping</li>
                                      <li>Kebutuhan Pribadi</li>
                                      <li>Tips Sukarela (seikhlasnya)</li>
                                    </ul>
                                  </p>
                                </div>
                              </div>
                              <div >
                                <h2 style="text-align:center">DESTINASI</h2>
                                <p class="lead">
                                  <ul>
                                    <li>Sekolah Laskar Pelangi</li>
                                    <li>Museum Andrea Hirata</li>
                                    <li>Rumah Ahok</li>
                                    <li>Tanjung Kalayang</li>
                                    <li>Pulau Batu Garuda</li>
                                    <li>Pulau Batu Berlayar</li>
                                    <li>Pulau Pasir</li>
                                    <li>Pulau Lengkuas</li>
                                    <li>Pulau Kepayang</li>
                                    <li>Rumah Adat Belitung</li>
                                    <li>Danau Kaolin</li>
                                  </ul>
                                </p>
                              </div>
                              </div>
                              <div class="modal-footer">
                              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    <a type="button" href="order.php" class="btn btn-sm btn-outline-primary">Order</a>
                  </div>
                  <small class="text-muted">9 mins</small>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <img class="card-img-top" src="image/komodo.jpg" data-holder-rendered="true" style="height: 225px; width: 100%; display: block;">
              <div class="card-body">
                  <h6>TRIP 3DAY-2NIGHT SAILING KOMODO</h6>
                  <p class="card-text">Rp. 2.500.000/Pax</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-primary" id="myBtn5">View</button>
                      <div class="modal fade" id="myModal5">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="container marketing">
                              <div class="modal-header">
                                <h2 class="modal-tittle" style="text-align: center;" > <b> PRIVATE TRIP 3D2N KOMODO </b></h2>
                              </div>
                              <br><span class="text-muted">Rp. 2.500.000/Pax</span>
                              <br>Tanpa Min Kuota
                              <br>Meeting Point : Komodo Airport
                              <div class="modal-body">
                                <div class="row featurette">
                                  <div class="col-md-5 order-md-2">
                                    <h2 style="text-align:center;">INCLUDE</h2>
                                    <p class="lead">
                                    <ul>
                                      <li>Transport Return</li>
                                      <li>Liove On Board</li>
                                      <li>Meals B/L/D</li>
                                      <li>Air Mineral & Snack</li>
                                      <li>Lazybag</li>
                                      <li>Coffe & Tea</li>
                                      <li>Snorkeling Seat</li>
                                      <li>Boat</li>
                                      <li>Tiket Masuk Wisata</li>
                                      <li>Local Guide</li>
                                      <li>Asuransi by ACA</li>
                                      <li>Documentation</li>
                                    </ul>
                                    </p>
                                  </div>
                                <div class="col-md-5 order-md-3">
                                  <h2 style="text-align:center;">EXCLUDE</h2>
                                  <p class="lead">
                                    <ul>
                                      <li>Tiket Pesawat</li>
                                      <li>Selain Yang Di Sebutkan Di samping</li>
                                      <li>Kebutuhan Pribadi</li>
                                      <li>Tips Sukarela (seikhlasnya)</li>
                                    </ul>
                                  </p>
                                </div>
                              </div>
                              <div >
                                <h2 style="text-align:center">DESTINASI</h2>
                                <p class="lead">
                                  <ul>
                                    <li>Padar</li>
                                    <li>Rinca</li>
                                    <li>Komodo</li>
                                    <li>Pink Beach</li>
                                    <li>Taka Makassar</li>
                                    <li>Bidadari</li>
                                    <li>Kalong</li>
                                    <li>Manta Point</li>
                                    <li>Kelor</li>
                                    <li>Kanawa</li>
                                  </ul>
                                </p>
                              </div>
                              </div>
                              <div class="modal-footer">
                              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    <a type="button" class="btn btn-sm btn-outline-primary">Order</a>
                  </div>
                  <small class="text-muted">9 mins</small>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" src=" " data-holder-rendered="true" style="height: 225px; width: 100%; display: block;">
              <div class="card-body">
                  <h6>Coming Soon</h6>
                  <p class="card-text">-</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <a type="button" href="#" class="btn btn-sm btn-outline-primary">View</a>
                    <a type="button" class="btn btn-sm btn-outline-primary">Order</a>
                  </div>
                  <small class="text-muted">9 mins</small>
                </div>
              </div>
            </div>
          </div>

        <hr class="featurette-divider">

        <!-- /END THE FEATURETTES -->
      </div><!-- /.container -->


      <!-- FOOTER -->
      <footer class="container">
        <p>© 2017-2018 HollyTour Company, Inc.
      </footer>
    </main>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery-3.3.1.slim.min.js.download" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="assets/js/popper.min.js.download"></script>
    <script src="assets/js/bootstrap.min.js.download"></script>
    <script src="assets/js/modal.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="assets/js/holder.min.js.download"></script>


<svg xmlns="http://www.w3.org/2000/svg" width="500" height="500" viewBox="0 0 500 500" preserveAspectRatio="none" style="display: none; visibility: hidden; position: absolute; top: -100%; left: -100%;"><defs><style type="text/css"></style></defs><text x="0" y="25" style="font-weight:bold;font-size:25pt;font-family:Arial, Helvetica, Open Sans, sans-serif">500x500</text></svg></body></html>
