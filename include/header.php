<?php
$uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$end = array_slice(explode('/', $uri_path), -1)[0];
$page_name = pathinfo($end, PATHINFO_FILENAME);

require_once 'db.php';
$conn1 = connect_db();
$logo = select_where($conn1, 'pages', 'page', 'contact');



$full_path = $_SERVER['PHP_SELF']; // e.g., /my_website/about.php

// To get just the filename:
$page_name1 = basename($full_path); // Output: about.php

$meta = select_where($conn1, 'metatag', 'page', $page_name1);

?>

 

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="./images/favicon.ico">
    
    <?php if($meta[0]['title']){ ?>
    <meta name="title" content="<?php echo $meta[0]['title']; ?>" />
    <?php } ?>
    <?php if($meta[0]['description']){ ?>
    <meta name="description" content="<?php echo $meta[0]['description']; ?>" />
     <?php } ?>
     
     <?php if($meta[0]['keywords']){ ?>
    <meta name="keywords" content="<?php echo $meta[0]['keywords']; ?>" />
     <?php } ?>
     
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://metatags.io/" />
     <?php if($meta[0]['ogtitle']){ ?>
    <meta property="og:title" content="<?php echo $meta[0]['ogtitle']; ?>" />
    <?php } ?>
    <?php if($meta[0]['ogdescription']){ ?>
    <meta property="og:description" content="<?php echo $meta[0]['ogdescription']; ?>" />
    <?php } ?>
     <?php if($meta[0]['ogimage']){ ?>
    <meta property="og:image" content="admin/uploads/<?php echo $meta[0]['ogimage']; ?>" />
     <?php } ?>

    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/swiper.min.css" rel="stylesheet" >
    <link href="css/style.css?v=5" rel="stylesheet" >
    <link href="css/responsive.css?v=56" rel="stylesheet" >

    <title><?php echo $meta[0]['title']; ?></title>
    <script>
    document.addEventListener("DOMContentLoaded", function () {
        // Retrieve the section ID stored before navigation
        const sectionId = sessionStorage.getItem('scrollToSection');

        if (sectionId) {
            const section = document.getElementById(sectionId);
            if (section) {
                // Use a timeout to ensure everything is loaded before scrolling
                setTimeout(() => {
                    section.scrollIntoView({ behavior: "smooth", block: "start" });
                }, 500); // Adjust delay if needed
            }

            // Remove stored section ID after scrolling
            sessionStorage.removeItem('scrollToSection');
        }
    });
</script>

<!-- Add this in your HTML head or before the closing </body> -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

 <script>
  const modal = document.getElementById('trusted-model');
  const video = modal.querySelector('video');

  modal.addEventListener('hidden.bs.modal', () => {
    if (video) {
      video.pause();
    }
  });

  // Optional: Restart video every time modal opens (if needed)
  modal.addEventListener('shown.bs.modal', () => {
    if (video) {
      video.currentTime = 0;
      video.play();
    }
  });
  

</script>
  </head>
  <body class="<?php echo $page_name;?>">
    
    <!--<section class="trusted-head">-->
    <!--    <h3 class="text-white">Trusted Second Opinion Partner - Cromwell Hospital</h3>-->
    <!--    <div class="d-flex">-->
    <!--        <a href="javascript:void(0);" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#trusted-model">Second Opinion</a>-->
    <!--        <a href="latest-cancer-advancements.php" class="btn btn-primary">Press</a>-->
    <!--    </div>-->
    <!--</section>-->
    
    <!--<div class="modal trusted-model" id="trusted-model" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">-->
    <!--  <div class="modal-dialog modal-dialog-centered">-->
    <!--    <div class="modal-content">-->
    <!--      <div class="modal-body p-0">-->
    <!--        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>-->
    <!--        <video playsinline controls autoplay muted loop controlslist="nodownload" poster="images/DCG-and-Cromwell.png">-->
    <!--          <source src="images/datar-videos/WhatsApp-Video-2023-10-20-at-16.41.41-1.mp4" type="video/mp4">-->
    <!--          <source src="images/datar-videos/WhatsApp-Video-2023-10-20-at-16.41.41-1.ogg" type="video/ogg">-->
    <!--        </video>-->
    <!--      </div>-->
    <!--      <div class="modal-footer">-->
    <!--        <h2>Get second <br /> opinion now</h2>-->
    <!--        <div class="">-->
    <!--            <p class="mb-2 text-white">Please contact on:</p>-->
    <!--            <a href="tel:+4402074605586" class="text-white">+44 (0)20 7460 5586</a>-->
    <!--            <a href="mailto:pc@cromwellhospital.com" class="text-white mb-3">pc@cromwellhospital.com</a>-->
    <!--            <a href="contact-us.php" class="btn btn-primary">Contact Us</a>-->
                
    <!--        </div>-->
    <!--      </div>-->
    <!--    </div>-->
    <!--  </div>-->
    <!--</div>-->
    
    <!--Header Start-->

    <header>
      <nav class="navbar navbar-expand-lg navbar-dark ">
        <div class="container">
          <a class="navbar-brand"  href="index.php">
            <img src="admin/web-img/<?php echo $logo[4]['content']; ?>"  alt="datar-cancer-genetics-logo" width="213" height="48" class="img-fluid lazy" />
          </a>

          <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button> -->

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="burger">
              <span></span>
            </div>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
              
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Solutions
                </a>
                <ul class="dropdown-menu">
                <li>
                    <a class="dropdown-item" href="advanced-cancer-care-solutions.php#solutions-screening" onclick="navigateToSection(event, 'solutions-screening')">
                        Screening
                    </a>
                </li>
                <li><a class="dropdown-item" href="advanced-cancer-care-solutions.php#solution-diagnosis" onclick="navigateToSection(event, 'solution-diagnosis')">Diagnosis</a></li>
                <li><a class="dropdown-item" href="advanced-cancer-care-solutions.php#therapy-guidance" onclick="navigateToSection(event, 'therapy-guidance')">Therapy Guidance</a></li>
                <li><a class="dropdown-item" href="advanced-cancer-care-solutions.php#monitoring" onclick="navigateToSection(event, 'monitoring')">Monitoring</a></li>
                </ul>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Products
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="easycheck360.php">EasyCheck360<sup>®</sup></a></li>
                    <li><a class="dropdown-item" href="trublood-safe-cost-effective-blood-tests.php">Trublood<sup>TM</sup></a></li>
                    <li><a class="dropdown-item" href="excta-comprehensive-tumor-analysis.php">Exacta<sup>TM</sup></a></li>
                    <li><a class="dropdown-item" href="pinaka360.php">Pinaka<sup>TM</sup></a></li>
                    <li><a class="dropdown-item" href="celldx-targeted-therapy-options.php">Celldx<sup>TM</sup></a></li>
                    <li><a class="dropdown-item" href="chemo-scale-effective-chemotherapy.php">Chemoscale<sup>TM</sup></a></li>
                    <li><a class="dropdown-item" href="cancertrack-non-invasive-cancer-monitoring.php">Cancertrack<sup>TM</sup></a></li>
                    <li><a class="dropdown-item" href="targetmrd360.php">Target-MRD<sup>TM</sup></a></li>
                </ul>
              </li>

              <li class="nav-item">
                <a href="non-invasive-blood-tests-to-detect-cancer.php" class="nav-link">Who We Are</a>
              </li>
              <li class="nav-item">
                <a href="latest-cancer-advancements.php" class="nav-link">Latest</a>
              </li>
              <!--<li class="nav-item">-->
              <!--  <a href="latest-global-medical-events.php" class="nav-link">Events</a>-->
              <!--</li>-->
             
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!--Header End-->
    