<!doctype html>
<html lang="en">

<?php
include('config.php');
?>

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/main1.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="js/spy.min.js"></script>
  <title>Nasmoco</title>
</head>

<body>
  <?php require_once 'staff_process.php'; ?>
  <span class="position-absolute trigger">
    <!-- hidden trigger to apply 'stuck' styles --></span>
  <nav class="navbar navbar-expand-sm sticky-top navbar-dark">
    <div class="container">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar1">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbar1">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link active text-dark" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="cari.html">Cabang Service</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="search.php">Pencarian</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="about.php">About us</a>
          </li>
        </ul>
      </div>
    </div>
    <!--container end-->
  </nav>
  <img src="images/nmc.png" style="width: 100%">
  <!--Section-2-->
  <br>

  <!-- Footer -->
  <footer class="page-footer font-small blue-grey lighten-5" style="background-color: #e8edea;">

    <div style="background-color: #21d192;">
      <div class="container">

        <!-- Grid row-->
        <div class="row py-4 d-flex align-items-center">

          <!-- Grid column -->
          <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
            <h6 class="mb-0">Get connected with us on social networks!</h6>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-6 col-lg-7 text-center text-md-right">

            <!-- Facebook -->
            <a class="fb-ic">
              <i class="fab fa-facebook-f mr-4"> </i>
            </a>
            <!-- Twitter -->
            <a class="tw-ic">
              <i class="fab fa-twitter white-text mr-4"> </i>
            </a>
            <!-- Google +-->
            <a class="gplus-ic">
              <i class="fab fa-google-plus-g white-text mr-4"> </i>
            </a>
            <!--Linkedin -->
            <a class="li-ic">
              <i class="fab fa-linkedin-in white-text mr-4"> </i>
            </a>
            <!--Instagram-->
            <a class="ins-ic">
              <i class="fab fa-instagram white-text"> </i>
            </a>

          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row-->

      </div>
    </div>

    <!-- Footer Links -->
    <div class="container text-center text-md-left mt-5">

      <!-- Grid row -->
      <div class="row mt-2 dark-grey-text mb-2">

        <!-- Grid column -->
        <div class="col-md-4 col-lg-4 col-xl-4">

          <!-- Content -->
          <h6 class="text-uppercase font-weight-bold">Company name</h6>
          <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>PT. New Ratna Motor</p>
          <p>Nasmoco</p>

        </div>
        <!-- Grid column -->

        <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mb-md-0 mb-4">
          <h6 class="text-uppercase font-weight-bold">Contact Us</h6>
          <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>
            <a href="https://www.facebook.com/Nasmoco" target="_blank" class="fb-ic">
              <i class="fab fa-facebook-f"></i>&nbsp; Facebook
            </a>
          </p>
          <!-- Twitter -->
          <p>
            <a href="https://twitter.com/NASMOCOworld" target="_blank" class="tw-ic">
              <i class="fab fa-twitter white-text"> </i>&nbsp; Twitter
            </a>
          </p>
          <!--Instagram-->
          <p>
            <a href="https://www.instagram.com/nasmoco_world/" target="_blank" class="ins-ic">
              <i class="fab fa-instagram white-text"> </i>&nbsp; Instagram
            </a>
          </p>

        </div>

        <!-- Grid column -->
        <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mb-md-0 mb-4">

          <!-- Links -->
          <h6 class="text-uppercase font-weight-bold">Contact</h6>
          <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>
            <i class="fas fa-home mr-3"></i>Semarang, Setos Mall lt.4</p>
          <p>
            <i class="fas fa-envelope mr-3"></i> business@nasmoco.com</p>
          <p>
            <i class="fas fa-phone mr-3"></i>(024)8661005</p>
          <p>
            <i class="fas fa-print mr-3"></i>(024)8661004</p>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center text-black-50 py-3" style="background-color: #9cafa3;">© 2019 Copyright: Udinus Kerja Praktek
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js"></script>
  <script src="js/animate.js"></script>
  <script src="js/custom.js"></script>
  <script>
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
      event.preventDefault();
      $(this).ekkoLightbox();
    });
  </script>
</body>

</html>