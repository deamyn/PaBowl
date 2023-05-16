<?
require 'connector.php';

session_start();
if (isset($_SESSION["login"])) {
  $login_as = $_SESSION["email"];
  $result_login = mysqli_query($conn, "SELECT * FROM admin_pabowl WHERE email = '$login_as'");
  $data_login = mysqli_fetch_assoc($result_login);
}

$query = "SELECT * FROM pesanan";
$result = mysqli_query($conn, $query);
$jumlah = mysqli_fetch_array($result);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pa-Bowl.</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="./img/logo-1.png" rel="icon">
  <link href="./img/logo-2.png" rel="logo-2.png">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="assets\img\logo-2.png" alt="logo-pabowl" width="200" height="150">
        <!-- <h1>Pa-Bowl<span>.</span></h1> -->
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="#home">Home</a></li>
          <li class="dropdown"><a href="#menu"><span>Menu</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="#menu-best">Best Seller</a></li>
              <li><a href="#menu-paket">Pa-Bowl</a></li>
              <li><a href="#menu-alacarte">A la Carte</a></li>
              <li><a href="#menu-drink">Drink</a></li>
            </ul>
          </li>
          <!-- <li><a href="#pesanan">Pesanan</a></li> -->
        </ul>
      </nav><!-- .navbar -->

      <ul class="list-group list-group-horizontal" style="list-style-type: none; ">
        <li>
          <a class="btn-beli-sekarang" href="pesanan.php">Pesanan</a>
        </li>
        <li>
          <a class="btn-beli-sekarang" href="add.php">Add Menu</a>
        </li>
        <li>
          <a class="btn-beli-sekarang" href="index.php">Log Out</a>
        </li>
      </ul>
      <!-- <a class="btn-lihat-pesanan" href="index.php">Log Out</a> -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->

  <section id="home" class="home d-flex align-items-center section-bg">
    <div class="container">
      <div class="row justify-content-between gy-5">
        <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
          <h2 data-aos="fade-up">Enjoy Your Delicious<br><b>Nasi Padang!</b></h2>
          <p data-aos="fade-up" data-aos-delay="100">Nasi Padang pake kertas minyak? Dah biasa!<br>Cobain nih Nasi Padang Ricebowl!!!</p>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            <a href="#pesanan" class="btn-pesanan">Lihat Pesanan</a>
          </div>
        </div>
        <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
          <img src="assets/img/home-img.png" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="300">
        </div>
      </div>
    </div>
  </section>
  <!-- End home Section -->

  <section id="menu" class="menu">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Our Menu</h2>
          <p>Check Our <span>Pa-Bowl Menu</span></p>
        </div>

        <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">

          <li class="nav-item">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#menu-best">
              <h4>Best Seller</h4>
            </a>
          </li><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-paket">
              <h4>Pa-Bowl</h4>
            </a><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-alacarte">
              <h4>A la Carte</h4>
            </a>
          </li><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-drink">
              <h4>Drink</h4>
            </a>
          </li><!-- End tab nav item -->

        </ul>

        <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

          <div class="tab-pane fade active show" id="menu-best">

            <div class="tab-header text-center">
              <p>Menu</p>
              <h3>Best Seller</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/item-menu-1.png" class="glightbox"><img src="assets/img/menu/item-menu-1.png" class="menu-img img-fluid" alt=""></a>
                <h4>Pa-Bowl Special 1</h4>
                <p class="ingredients">
                  Nasi, Ayam Pop, Telur Dadar, Daun Singkong, Kuah Gulai, Kuah Rendang, Sambal Ijo, Sambal Merah
                </p>
                <p class="price">
                  Rp18.000
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/item-menu-2.png" class="glightbox"><img src="assets/img/menu/item-menu-2.png" class="menu-img img-fluid" alt=""></a>
                <h4>Pa-Bowl Special 2</h4>
                <p class="ingredients">
                  Nasi, Teri Balado, Ayam Sambal Ijo, Oseng Tempe, Daun Singkong, Kuah Gulai
                </p>
                <p class="price">
                  Rp18.000
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/item-menu-3.png" class="glightbox"><img src="assets/img/menu/item-menu-3.png" class="menu-img img-fluid" alt=""></a>
                <h4>Pa-Bowl Special 3</h4>
                <p class="ingredients">
                  Nasi, Ayam Gulai, Kikil Balado, Terong Balado, Daun Singkong, Sambal Ijo, Kuah Gulai, Keripik
                </p>
                <p class="price">
                  Rp16.000
                </p>
              </div><!-- Menu Item -->

            </div>
          </div><!-- End Starter Menu Content -->

          <div class="tab-pane fade" id="menu-paket">

            <div class="tab-header text-center">
              <p>Menu</p>
              <h3>Pa-Bowl</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/item-menu-1.png" class="glightbox"><img src="assets/img/menu/item-menu-1.png" class="menu-img img-fluid" alt=""></a>
                <h4>Pa-Bowl Special 1</h4>
                <p class="ingredients">
                  Nasi, Ayam Pop, Telur Dadar, Daun Singkong, Kuah Gulai, Kuah Rendang, Sambal Ijo, Sambal Merah
                </p>
                <p class="price">
                  Rp18.000
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/item-menu-2.png" class="glightbox"><img src="assets/img/menu/item-menu-2.png" class="menu-img img-fluid" alt=""></a>
                <h4>Pa-Bowl Special 2</h4>
                <p class="ingredients">
                  Nasi, Teri Balado, Ayam Sambal Ijo, Oseng Tempe, Daun Singkong, Kuah Gulai
                </p>
                <p class="price">
                  Rp18.000
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/item-menu-3.png" class="glightbox"><img src="assets/img/menu/item-menu-3.png" class="menu-img img-fluid" alt=""></a>
                <h4>Pa-Bowl Special 3</h4>
                <p class="ingredients">
                  Nasi, Ayam Gulai, Kikil Balado, Terong Balado, Daun Singkong, Sambal Ijo, Kuah Gulai, Keripik
                </p>
                <p class="price">
                  Rp16.000
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/item-menu-4.png" class="glightbox"><img src="assets/img/menu/item-menu-4.png" class="menu-img img-fluid" alt=""></a>
                <h4>Pa-Bowl 1</h4>
                <p class="ingredients">
                  Nasi, Ayam Gulai, Sayur Nangka, Daun Singkong, Sambal Ijo, Sambal Merah, Kuah Gulai, Keripik Balado
                </p>
                <p class="price">
                  Rp15.000
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/item-menu-5.png" class="glightbox"><img src="assets/img/menu/item-menu-5.png" class="menu-img img-fluid" alt=""></a>
                <h4>Pa-Bowl 2</h4>
                <p class="ingredients">
                  Nasi, Rendang, Mendoan, Tomat, Kuah Gulai, Peyek Kacang
                </p>
                <p class="price">
                  Rp17.000
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/item-menu-6.png" class="glightbox"><img src="assets/img/menu/item-menu-6.png" class="menu-img img-fluid" alt=""></a>
                <h4>Pa-Bowl 3</h4>
                <p class="ingredients">
                  Nasi, Ayam Gulai, Telur Dadar, Udang Saos Padang, Sayur Nangka, Daun Singkong, Kuah Gulai, Keripik
                </p>
                <p class="price">
                  Rp20.000
                </p>
              </div><!-- Menu Item -->

            </div>
          </div><!-- End paket Menu Content -->

          <div class="tab-pane fade" id="menu-alacarte">

            <div class="tab-header text-center">
              <p>Menu</p>
              <h3>A la Carte</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                <a href="assets\img\menu\alacarte\nasi.png" class="glightbox"><img src="assets\img\menu\alacarte\nasi.png" class="menu-img img-fluid" alt=""></a>
                <h4>Nasi</h4>

                <p class="price">
                  Rp5.000
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets\img\menu\alacarte\ayam-gulai.png" class="glightbox"><img src="assets\img\menu\alacarte\ayam-gulai.png" class="menu-img img-fluid" alt=""></a>
                <h4>Ayam Gulai</h4>

                <p class="price">
                  Rp8.000
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets\img\menu\alacarte\ayam-pop.png" class="glightbox"><img src="assets\img\menu\alacarte\ayam-pop.png" class="menu-img img-fluid" alt=""></a>
                <h4>Ayam Pop</h4>

                <p class="price">
                  Rp8.000
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets\img\menu\alacarte\rendang.png" class="glightbox"><img src="assets\img\menu\alacarte\rendang.png" class="menu-img img-fluid" alt=""></a>
                <h4>Rendang</h4>

                <p class="price">
                  Rp10.000
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets\img\menu\alacarte\udang-saos-padang.png" class="glightbox"><img src="assets\img\menu\alacarte\udang-saos-padang.png" class="menu-img img-fluid" alt=""></a>
                <h4>Udang Saos Padang</h4>

                <p class="price">
                  Rp10.000
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets\img\menu\alacarte\telur-dadar.png" class="glightbox"><img src="assets\img\menu\alacarte\telur-dadar.png" class="menu-img img-fluid" alt=""></a>
                <h4>Telur Dadar</h4>

                <p class="price">
                  Rp6.000
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets\img\menu\alacarte\kerupuk-kulit.png" class="glightbox"><img src="assets\img\menu\alacarte\kerupuk-kulit.png" class="menu-img img-fluid" alt=""></a>
                <h4>Kerupuk Kulit</h4>

                <p class="price">
                  Rp3.000
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets\img\menu\alacarte\kerupuk-udang.png" class="glightbox"><img src="assets\img\menu\alacarte\kerupuk-udang.png" class="menu-img img-fluid" alt=""></a>
                <h4>Kerupuk Udang</h4>

                <p class="price">
                  Rp3.000
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets\img\menu\alacarte\kerupuk-putih.png" class="glightbox"><img src="assets\img\menu\alacarte\kerupuk-putih.png" class="menu-img img-fluid" alt=""></a>
                <h4>Kerupuk Putih</h4>

                <p class="price">
                  Rp2.000
                </p>
              </div><!-- Menu Item -->

            </div>
          </div><!-- End alacarte Menu Content -->

          <div class="tab-pane fade" id="menu-drink">

            <div class="tab-header text-center">
              <p>Menu</p>
              <h3>Drink</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/es-teh.png" class="glightbox"><img src="assets/img/menu/es-teh.png" class="menu-img img-fluid" alt=""></a>
                <h4>Es Teh</h4>

                <p class="price">
                  Rp4.000
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/es-jeruk.png" class="glightbox"><img src="assets/img/menu/es-jeruk.png" class="menu-img img-fluid" alt=""></a>
                <h4>Es Jeruk</h4>

                <p class="price">
                  Rp5.000
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/air-mineral.png" class="glightbox"><img src="assets/img/menu/air-mineral.png" class="menu-img img-fluid" alt=""></a>
                <h4>Air Mineral</h4>

                <p class="price">
                  Rp4.000
                </p>
              </div><!-- Menu Item -->

            </div>
          </div><!-- End Drink Menu Content -->

        </div>

      </div>
    </section><!-- End Menu Section -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-3">
        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-geo-alt icon"></i>
          <div>
            <h4>Address</h4>
            <p>
              Obama Residence<br>
              Gg. PGA, Bandung<br>
            </p>
          </div>

        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-telephone icon"></i>
          <div>
            <h4>Order Pa-Bowl</h4>
            <p>
              <strong>Phone:</strong> 0821 5222 5659<br>
              <strong>Email:</strong> pabowl2022@gmail.com<br>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-clock icon"></i>
          <div>
            <h4>Opening Hours</h4>
            <p>
              <strong>Mon-Sat:</strong> 08.00 AM - 21.00 PM;
              <br>
              <strong>Sunday:</strong> Closed
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Follow Us</h4>
          <div class="social-links d-flex">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="https://instagram.com/deamayana" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="https://linkedin/in/deamayana" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Pa-Bowl</span></strong>. All Rights Reserved
      </div>
      <br>
      <!-- <div class="credits">
          Designed by <a href="https://instagram.com/deamayana">Demitria Mayana A</a>
      </div> -->

      <div class="credits">
        Designed by
        <button type="button" class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#copyrightModal">
          Demitria Mayana A
          </button>

          <div class="modal fade" id="copyrightModal" tabindex="-1" aria-labelledby="copyrightModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h1 class="modal-title fs-5" id="copyrightModalLabel" style="color: black;">
                          Designed by Demitria Mayana A
                          </h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body" style="color: black;">
                          <img src="./img/dea.png" class="img-fluid" alt="" style="margin: 30px;">
                          <br>
                          <p>Nama Lengkap : Demitria Mayana A</p>
                          <p>NIM : 1202201005</p>
                          <p>Kelas : SI-44-02</p>
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      </div>
                  </div>
              </div>
          </div>
    </div>

    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>