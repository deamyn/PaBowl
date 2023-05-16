<?php
require 'connector.php';

session_start();
if (isset($_SESSION["login"])) {
    $login_as = $_SESSION["email"];
    $result_login = mysqli_query($conn, "SELECT * FROM user_pabowl WHERE email = '$login_as'");
    $data_login = mysqli_fetch_assoc($result_login);
}

    $sql = "SELECT * FROM pesanan";
    $query = mysqli_query($conn, $sql);

    $result = mysqli_fetch_array($query);

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
    <link href="assets/img/logo-1.png" rel="icon">
    <link href="assets/img/logo-2.png" rel="logo-2.png">

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
            <li><a href="admin.php">Home</a></li>
            <li><a href="admin.php">Pesanan</a></li>
            <li class="dropdown"><a href="#menu"><span>Menu</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                    <li><a href="#menu-best">Best Seller</a></li>
                    <li><a href="#menu-paket">Pa-Bowl</a></li>
                    <li><a href="#menu-alacarte">A la Carte</a></li>
                    <li><a href="#menu-drink">Drink</a></li>
                </ul>
            </li>
            </ul>
        </nav>

        <ul class="list-group list-group-horizontal" style="list-style-type: none; ">
            <!-- <li>
            <a class="btn-beli-sekarang" href="add.php">Add Menu</a>
            </li> -->
            <li>
            <a class="btn-beli-sekarang" href="index.php">Log Out</a>
            </li>
        </ul>

        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

        </div>
    </header><br><br><br><br><br><br>
    <!-- End Header -->

    <div class="product-section">
		<div class="container">
			<div class="row">
                <div class="section-header">
                    <h2>History Order</h2>
                    <p><span>History Order</span></p>
                </div>

                <table class="table table-bordered" style="text-align:center;">
                    <thead>
                        <tr>
                            <th>Tanggal</th>
                            <th>Alamat</th>
                            <th>Pesanan</th>
                            <th>Total Harga</th>
                            <th colspan="2">Status</th>
                        </tr>
                    </thead>

                        <tbody>
                            <tr>
                                <td>06-12-2022</td>
                                <td>Jl. Telkom No. 14</td>
                                <td>Pa-Bowl 1</td>
                                <td>Rp15.000</td>
                                <td>menunggu konfirmasi</td>
                            </tr>
                            <tr>
                                <td>21-08-2022</td>
                                <td>Jln. Griya Tumaritis No.14, Bandung</td>
                                <td>Pa-Bowl Special 2</td>
                                <td>Rp18.000</td>
                                <td>selesai</td>
                            </tr>
                            <tr>
                                <td>19-08-2022</td>
                                <td>Jln. Griya Tumaritis No.14, Bandung</td>
                                <td>Pa-Bowl 2</td>
                                <td>Rp17.000</td>
                                <td>batal</td>
                            </tr>
                        </tbody>
                </table>
			</div>
            <br><br>
		</div>
	</div>

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <div class="container">
        <div class="row gy-3">
            <div class="col-lg-3 col-md-6 d-flex">
            <i class="bi bi-geo-alt icon"></i>
            <div>
                <h4>Alamat</h4>
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
                            <img src="assets/img/dea.png" class="img-fluid" alt="" style="margin: 30px;">
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