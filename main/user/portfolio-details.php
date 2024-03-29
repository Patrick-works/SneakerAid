<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SHOE CLEANING BRUSH</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../../assets/img/favicon.png" rel="icon">
  <link href="../../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
<link href="../../css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Arsha
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <?php
  include("../../config/connect.php");
    $id = $_GET["id"];
    if (!isset($id)) {
      echo ("<script>location.href='index.php'</script>");
    }elseif(empty($id)){
      echo ("<script>location.href='index.php'</script>");
    }
  ?>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.php">Products</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto " href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
    
         
          <li><a class="getstarted scrollto" href="sign.php">Sign up </a></li>
          
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

  <?php 

$productquery = "SELECT * FROM product WHERE PRO_ID = '$id' ";
$exutequery = mysqli_query($con, $productquery);
if (mysqli_num_rows($exutequery) == 1)
{
    while($row=mysqli_fetch_assoc($exutequery))
    {
      ?>
      

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.php">Home</a></li>
          <li>Product Details</li>
        </ol>
        <h2>
        <?php  
        echo($row["PRO_NAME"]);
      ?>
</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="<?php  
        echo($row["PRO_IMG"]);
      ?>" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Information</h3>
              <p><?php  
        echo($row["PRO_DESC"]);
      ?></p>
              <ul>
                <li><strong>Category</strong>: <?php  
                $cateogry_id = $row["CATEGORY_ID"];
                $query_to_get_cateogry = "SELECT * FROM `pro_category` WHERE CATEGORY_ID = '$cateogry_id' ";
                $exceute_cateogry = mysqli_query($con,$query_to_get_cateogry);
                if(mysqli_num_rows($exceute_cateogry)>0){
                  while($row_of_query = mysqli_fetch_assoc($exceute_cateogry))
                  {
                    echo($row_of_query["TYPE"]);
                  }
                }
      ?></li>
                
                <li><strong>Product Price</strong>: INR <?php  
        echo($row["PRO_PRICE"]);
      ?></li>
                <li><a class="" href="sign.php">BUY NOW</a></li>
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>INSTRUCTIONS</h2>
              <p>
                1. Dip brush into bowl of water</p>
<p>2. Apply generous amount of cleaner to brush</p>
<p>3. Dip brush back into bowl of water</p>
<p>4. Scrub shoes creating foaming action</p>
<p>5. Wipe clean with towel</p>
<p>Repeat steps 1-5 if necessary</p>
<p>6. Air dry</p>
              
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->
    <?php
    }
}
?>
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

   

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>MR.SNEAKER AID</h3>
            <p>
            VegnonVeg Store <br>
              bandra West<br>
              Mumbai-70 <br><br>
              <strong>Phone:</strong> +91 81690505336<br>
              <strong>Email:</strong> kumbharpratik764@gmail.com<br>
            </p>
          </div>

        

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="bookk.php">Book an Appointment</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php">Door Step Service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php">Request a Cleaning Video</a></li>
             
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>WE ARE ON SOCIAL MEDIA PLATFORMS TOO!</p> <p>CHECK US OUT!</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>


  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center bg-black"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../../assets/vendor/aos/aos.js"></script>
  <script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../../assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="../../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../../js/main.js"></script>

</body>

</html>