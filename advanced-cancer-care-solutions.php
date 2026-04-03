123<?php include('include/header.php');

      require_once 'db.php';

      $conn = connect_db();

      $header=select_where($conn,'pages','page','Solutions-screening');

?> 



<script>

  document.addEventListener("DOMContentLoaded", function () {

      // Get the section ID from the URL hash

      const sectionId = window.location.hash.substring(1);

      if (sectionId) {

          const section = document.getElementById(sectionId);

          if (section) {

              // Scroll smoothly to the section after a short delay (to ensure content loads)

              setTimeout(() => {

                  section.scrollIntoView({ behavior: "smooth" });

              }, 500);

          }

      }

  });

</script>



  <!-- Banner Start -->

  <section class="p-0 inner-banner">

    <div class="container">

    <div class="row">

      <div class="col-sm-12">

        <h2 class="mb-2 text-animation"><?php echo $header[0]['content']; ?></h2>

      </div>

    </div>

    </div>

</section>   

<!-- Banner End -->





  <!-- Screening Start -->

  <section class="p-0 solutions-screening" id="solutions-screening">

  <div class="container">

    <div class="row align-items-center justify-content-between">

      <div class="col-lg-5 col-sm-12 text-animation">

        <h4 class="mb-4 text-white italic-heading">Screening</h4>

        <h2 class="text-white mb-5"><span><?php echo $header[1]['content']; ?></span> <?php echo $header[2]['content']; ?></h2>

        <p class="mb-0"><?php echo $header[3]['content']; ?> </p>

        <h2 class="text-white"><span>EasyCheck360<sup>®</sup></h2>

      </div>

      <div class="col-lg-5 col-sm-12 position-relative">

        <div class="right-card">

          <div class="solutions-item">

            <h4 class="mb-3"><?php echo $header[4]['content']; ?></h4>

            <p class="text-justify"><?php echo $header[5]['content']; ?></p>

          </div>

          

      





          <div class="solutions-item">

            <h4 class="mb-3"><?php echo $header[11]['content']; ?></h4>

            <p class="text-justify"><?php echo $header[12]['content']; ?></p>

            <p class="text-justify"><?php echo $header[13]['content']; ?></p>

            <p class="text-justify"><?php echo $header[14]['content']; ?></p>

            <a href="easycheck360.php">KNOW MORE</a>

          </div>

        </div>

      </div>

    </div>

  </div>

</section>

 <!-- Screening End -->



  <!-- Diagnosis Start -->

  <section class="solution-diagnosis" id="solution-diagnosis">

    <div class="container ">

      <div class="row justify-content-between ">

        <div class="col-lg-9 col-12 text-animation">

          <h4 class="mb-4 text-white italic-heading">Diagnosis</h4>

          <h2 class="mb-1 text-white"><?php echo $header[15]['content']; ?></h2>

          <p class="mb-3 text-white text-justify"><?php echo $header[16]['content']; ?> </p>

          <p class="mb-3 text-white text-justify"><?php echo $header[17]['content']; ?> </p>

          <p class="mb-4 text-white text-justify"><?php echo $header[18]['content']; ?> </p>

          

          <h2 class="mb-2 text-white"> <span><?php echo $header[19]['content']; ?></span></h2>

          <ul class="mb-2 text-white ps-4">

            <li><?php echo $header[20]['content']; ?></li>

            <li><?php echo $header[21]['content']; ?></li>

            <li><?php echo $header[22]['content']; ?></li>

            <li><?php echo $header[23]['content']; ?></li>

            <li><?php echo $header[24]['content']; ?></li>

            <li><?php echo $header[25]['content']; ?></li>

            <li><?php echo $header[26]['content']; ?></li>

          </ul>

          <a href="trublood-safe-cost-effective-blood-tests.php" class="text-white text-decoration-none mt-2">KNOW MORE</a>

        </div>

      </div>

    </div>

    <img src="images/blood-based-cancer-biopsy.svg" loading="lazy" class="img-fluid box-left-animation d-none d-md-none d-lg-block" alt="blood-based-cancer-biopsy" width="" height="">

  </section>

  <!-- Diagnosis End -->









  <!-- Therapy Guidance Start -->

  <section class="therapy-guidance" id="therapy-guidance">

    <div class="container">

      <div class="row">

        <div class="col-sm-12 text-animation">

          <h4 class="mb-4 text-white italic-heading ">Therapy Guidance</h4>

          <h2 class="mb-0 text-white"><?php echo $header[27]['content']; ?></h2>

          <h3 class="text-white"><?php echo $header[28]['content']; ?></h3>

        </div>

      </div>

      <div class="row">

        <div class="col-sm-10 col-sm-12">

          <ul class="cards">

            <li class="card1">

                <div class="card-body">

                  <p class="text-white mb-0"><?php echo $header[29]['content']; ?> </p>

                  <h2 class="text-white"><?php echo $header[30]['content']; ?></h2>

                  <p class="text-white text-justify"><?php echo $header[31]['content']; ?></p>



                  <h5 class="text-white mt-4"><?php echo $header[32]['content']; ?></h5>

                  <p class="text-white text-justify"><?php echo $header[33]['content']; ?></p>

                  <p class="text-white text-justify"><?php echo $header[34]['content']; ?></p>

                </div>

            </li>

            <li class="therapy-card">

              <div class="card-body">

                  <h2 class="text-white"><?php echo $header[35]['content']; ?></h2>

                  <p class="text-white text-justify"><?php echo $header[36]['content']; ?> </p>

                  <a href="excta-comprehensive-tumor-analysis.php" class="text-white">KNOW MORE</a>

                </div>

            </li>

           

            <li class="therapy-card">

              <div class="card-body">

                <h2 class="text-white"><?php echo $header[46]['content']; ?></h2>

                <p class="text-white text-justify"><?php echo $header[47]['content']; ?></p>

                <a href="pinaka360.php" class="text-white">KNOW MORE</a>

              </div>

            </li>

            

            <li class="therapy-card">

              <div class="card-body">

                <h2 class="text-white"><?php echo $header[37]['content']; ?></h2>

                <p class="text-white text-justify"><?php echo $header[38]['content']; ?></p>

                <a href="celldx-targeted-therapy-options.php" class="text-white">KNOW MORE</a>

              </div>

            </li>

            <li class="therapy-card">

              <div class="card-body">

                <h2 class="text-white"><?php echo $header[39]['content']; ?></h2>

                <p class="text-white text-justify"><?php echo $header[40]['content']; ?></p>

                <a href="chemo-scale-effective-chemotherapy.php" class="text-white">KNOW MORE</a>

              </div>

            </li>

            

             

          </ul>

        </div>

      </div>

    </div>

  </section>

  <!-- Therapy Guidance  End -->

  



  <section class="solution-monitoring pt-0 pb-0" id="monitoring">

    <div class="factsContainer">

      <div class="factsContainer_sm">

            <img src="images/monitoring-DNA.svg" class="img-fluid lazy" width="4271" height="203" alt="monitoring-DNA" />

            <div class="card-wrapper">

              <div class="fact first-card">

                <h4 class="italic-heading d-md-block d-lg-none mb-4 text-animation">Monitoring</h4>

                <h2 class="text-animation"><?php echo $header[41]['content']; ?></h2>

                <p class="d-none d-md-block d-lg-block">&nbsp;</p>

                  <p class="d-none d-md-block d-lg-block">&nbsp;</p>

                <div class="text-animation">

                  <!-- <p class="mb-0">For a safe, non-invasive <br /> cancer diagnosis, Think of</p>

                  <h2>Cancertrack<sup>™</sup></h2> -->

                  <p class="d-none d-md-block d-lg-block">&nbsp;</p>

                  <p class="d-none d-md-block d-lg-block">&nbsp;</p>

                </div>

              </div>

            </div>



            <!-- <div class="card-wrapper">

              <div class="fact second-card text-animation">

                <img src="images/monitoring-img.png" class="mb-4" />

                <p class=""><span>Cancer is best managed with a proactive treatment plan.</span> Conventional monitoring methods like imaging can take over 3 months to assess treatment effectiveness.</p>

              </div>

            </div> -->

            <div class="card-wrapper">

              <div class="fact second-card text-animation pt-5">

                <!-- <img src="images/monitoring-img.png" class="mb-4" /> -->

                <p class="d-none d-md-block d-lg-block">&nbsp;</p>

                  <p class="mb-0"><?php echo $header[42]['content']; ?></p>

                  <h2><?php echo $header[43]['content']; ?></h2>

              </div>

            </div>



            <div class="card-wrapper">

              <div class="fact second-card text-animation">

                <p><span> <?php echo $header[44]['content']; ?> <br/>

                <a href="cancertrack-non-invasive-cancer-monitoring.php" class="mt-2">KNOW MORE</a>

              </p>

                

                <img src="images/regular-cancer-monitoring.webp" alt="<?php echo $header[45]['content']; ?>" width="350" height="350" loading="lazy" />

              </div>

            </div>

            



 



            <div class="card-wrapper">

              <div class="fact second-card text-animation">

                <img src="images/regular-cancer-monitoring.webp" alt="<?php echo $header[45]['content']; ?>" width="350" height="350" loading="lazy" />

                <p>For even deeper insights, Target-MRD<sup>&trade;</sup> is an advanced blood test designed to detect even the tiniest traces of cancer, known as Molecular Residual Disease (MRD). By combining personalised tumour-informed detection and broad tumour-agnostic profiling, it helps your doctor monitor your health, detect relapse early, and tailor treatment to your unique needs. This test provides ongoing insights to ensure better outcomes and timely care.</p>

                <a href="targetmrd360.php">KNOW MORE</a>

              </div>

            </div>

        

            <div class="card-wrapper">

              <div class="fact second-card text-animation">

                <p>Cancertrack<sup>&trade;</sup> and Target-MRD<sup>&trade;</sup> empower you and your care team with critical tools to stay ahead of cancer and make timely, informed decisions for better management. </p>

                <img src="images/regular-cancer-monitoring.webp" alt="<?php echo $header[45]['content']; ?>" width="350" height="350" loading="lazy" />

              </div>

            </div>

       

            <div class="container dwdw p-0 mobile-hide">

              <div class="row">

                <div class="col-sm-12">

                  <h4 class=" italic-heading">Monitoring</h4>

                </div>

              </div>

            </div>

      </div>

    </div>

</section>















  <?php include('include/footer.php') ?>