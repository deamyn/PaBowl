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
        <img src="./assets/img/logo-2.png" alt="logo-pabowl" width="200" height="150">
        <!-- <h1>Pa-Bowl<span>.</span></h1> -->
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="#home">Home</a></li>
          <li><a href="#about">About</a></li>
          <li class="dropdown"><a href="#menu"><span>Menu</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="#menu-best">Best Seller</a></li>
              <li><a href="#menu-paket">Pa-Bowl</a></li>
              <li><a href="#menu-alacarte">A la Carte</a></li>
              <li><a href="#menu-drink">Drink</a></li>
            </ul>
          </li>
          <li><a href="#catering">Catering</a></li>
          <li><a href="#chefs">Chefs</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>

      </nav><!-- .navbar -->

      <a class="cart" href="cart.php" style="font-size: 30px;"><i class="bi bi-cart2"></i></a>
      <a class="history" href="history.php" style="font-size: 30px;"><i class="bi bi-clock-history"></i></a>
      <a class="btn-beli-sekarang" href="index.php">Log Out</a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->

  <section id="cart" class="cart d-flex align-items-center section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-header" style="padding-top: 40px;">
        <h2>Cart</h2>
        <p><span>Cart</span></p>
      </div>

      <div class="untree_co-section before-footer-section">
        <div class="container">
          <div class="row mb-5">
            <form class="col-md-12" method="post">
              <div class="site-blocks-table">
                <table class="table">
                  <thead>
                    <tr>
                      <th class="pesanan">Pesanan</th>
                      <th></th>
                      <th class="jumlah">Jumlah</th>
                      <th class="harga">Harga</th>
                    </tr>
                  </thead>
                  <tbody>
                    <!-- <tr>
                      <td class="pesanan">
                        <img src="./assets/img/menu/item-menu-2.png" alt="Image" class="img-fluid" width="150px">
                      </td>
                      <td class="d-flex align-items-center">Pa-Bowl Special 2</td>
                      <td>
                        <div class="input-group mb-3 d-flex align-items-center quantity-container" style="max-width: 120px;">
                          <div class="input-group-prepend">
                            <button class="btn btn-outline-black decrease" type="button">&minus;</button>
                          </div>
                          <input type="text" class="form-control text-center quantity-amount" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                          <div class="input-group-append">
                            <button class="btn btn-outline-black increase" type="button">&plus;</button>
                          </div>
                        </div>

                      </td>
                      <td>Rp18.000</td>
                      <td><i class="bi bi-trash3"></i></td>
                    </tr> -->

                    <!-- <tr>
                      <td class="pesanan">
                        <img src="./assets/img/menu/alacarte/kerupuk-kulit.png" alt="Image" class="img-fluid" width="150px">
                      </td>
                      <td class="d-flex align-items-center">Kerupuk Kulit</td>
                      <td>
                        <div class="input-group mb-3 d-flex align-items-center quantity-container" style="max-width: 120px;">
                          <div class="input-group-prepend">
                            <button class="btn btn-outline-black decrease" type="button">&minus;</button>
                          </div>
                          <input type="text" class="form-control text-center quantity-amount" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                          <div class="input-group-append">
                            <button class="btn btn-outline-black increase" type="button">&plus;</button>
                          </div>
                        </div>

                      </td>
                      <td>Rp3.000</td>
                      <td><i class="bi bi-trash3"></i></td>
                    </tr> -->

                    <tr>
                      <td class="pesanan">
                        <img src="./assets/img/menu/item-menu-2.png" alt="Image" class="img-fluid" width="150px">
                      </td>
                      <td class="d-flex align-items-center">Pa-Bowl 1</td>
                      <td>
                        <div class="input-group mb-3 d-flex align-items-center quantity-container" style="max-width: 120px;">
                          <div class="input-group-prepend">
                            <button class="btn btn-outline-black decrease" type="button">&minus;</button>
                          </div>
                          <input type="text" class="form-control text-center quantity-amount" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                          <div class="input-group-append">
                            <button class="btn btn-outline-black increase" type="button">&plus;</button>
                          </div>
                        </div>

                      </td>
                      <td>Rp15.000</td>
                      <td><i class="bi bi-trash3"></i></td>
                    </tr>


                  </tbody>
                </table>
              </div>
            </form>
          </div>

            <div class="col-md-6 pl-5">
              <div class="row justify-content-end">
                <div class="col-md-7">
                  <div class="row">
                    <div class="col-md-12 text-right border-bottom mb-5">
                      <h3 class="text-black h4 text-uppercase">Cart Totals</h3>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <div class="col-md-6">
                      <span class="text-black">Subtotal</span>
                    </div>
                    <div class="col-md-6 text-right">
                      <strong class="text-black">Rp15.000</strong>
                    </div>
                  </div>
                  <div class="row mb-5">
                    <div class="col-md-6">
                      <span class="text-black">Total</span>
                    </div>
                    <div class="col-md-6 text-right">
                      <strong class="text-black">Rp15.000</strong>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12">
                      <button class="btn btn-black btn-lg py-3 btn-dark" style="width: 150px; height: 70px;" onclick="window.location='checkout.php'">Checkout</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Contact</h2>
          <p>Need Help? <span>Contact Us</span></p>
        </div>

        <div class="mb-3">
          <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.3031663770657!2d107.63171951468996!3d-6.973514194962138!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e9b202e722ad%3A0xe4ba772c34ea0d73!2sObama%20Residence!5e0!3m2!1sid!2sid!4v1667323708807!5m2!1sid!2sid" frameborder="0" allowfullscreen></iframe>
        </div><!-- End Google Maps -->

        <div class="row gy-4">

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-map flex-shrink-0"></i>
              <div>
                <h3>Our Address</h3>
                <p>Obama Residence, Gg. PGA, Bandung</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center">
              <i class="icon bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Us</h3>
                <p>pabowl2022@gmail.com</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Call Us</h3>
                <p>0821 5222 5659</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-share flex-shrink-0"></i>
              <div>
                <h3>Opening Hours</h3>
                <div><strong>Mon-Sat:</strong> 08.00 AM - 21.00 PM;
                  <br>
                  <strong>Sunday:</strong> Closed
                </div>
              </div>
            </div>
          </div><!-- End Info Item -->

        </div>

        <form action="forms/contact.php" method="post" role="form" class="php-email-form p-3 p-md-4">
          <div class="row">
            <div class="col-xl-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
            </div>
            <div class="col-xl-6 form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
            </div>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
          </div>
          <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Send Message</button></div>
        </form>
        <!--End Contact Form -->

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

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