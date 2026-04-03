<?php include('include/header.php');
      require_once 'db.php';
      $conn = connect_db();
      $header=select_where($conn,'pages','page','whoweare');
      $CorporateTeam=select_where($conn,'team_members','department','Corporate Team');
      $MedicalAffairs=select_where($conn,'team_members','department','Core Research Team');
      $India=select_where($conn,'team_members','department','India');
      $International=select_where($conn,'team_members','department','International');
      $Lab=select_where($conn,'team_members','department','Lab and Medical Affairs');
      $Advisors=select_where($conn,'team_members','department','Advisors');

      $testportfolio=select_where($conn,'test_portfolio','active','1');

      function getAltFromImageName($imagePath) {
    // Extract filename from path
    $filename = pathinfo($imagePath, PATHINFO_FILENAME);
    
    // Replace dashes/underscores with spaces, capitalize words
    $altText = ucwords(str_replace(['-', '_'], ' ', $filename));
    
    return $altText;
}
?>


        <!-- Product Start-->
        <section class="product-sec pt-0 pb-0 who-we">
          <div id="product-scoll">
            <div class="video-container box">
                
                <div class="hidden-mobile">
                  <img src="admin/web-img/<?php echo $header[5]['content']; ?>" class="img-fluid lazy" alt="<?php echo $header[19]['content']; ?>" width="1920" height="900">
                </div>
                <div class="hidden-Desktop">
                  <img src="admin/web-img/<?php echo $header[18]['content']; ?>" class="img-fluid lazy" alt="<?php echo $header[20]['content']; ?>" width="420" height="750">
                </div>
              
              
            </div>
     
            <!-- Horizontal Scroll Wrapper -->
            <div class="horizontal-scoll-wrapper">
              <div class="product-horizontal">
                <div class="card-wrapper">
                  <div class="card">
                    <h1 class="mb-3 text-animation"><?php echo $header[0]['content']; ?></h1>
                  </div>
                </div>
                <div class="card-wrapper">
                  <div class="card">
                    <h2 class="mb-3"><?php echo $header[1]['content']; ?></h2>
                    <p class="text-justify"><?php echo $header[2]['content']; ?></p>
                  </div>
                </div>
                <div class="card-wrapper">
                  <div class="card">
                    <h2 class="mb-3"><?php echo $header[3]['content']; ?></h2>
                    <p class=""><?php echo $header[4]['content']; ?></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
         <!-- Product Start-->


         <!-- Our Thinking Start -->
         <section class="our-thinking">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8 col-12 our-box">
                <h2 class="text-black text-center mb-5 text-animation"><?php echo $header[6]['content']; ?></h2>
                <p class="text-black text-center text-animation"><?php echo $header[7]['content']; ?></p>
                <p class="text-black text-center text-animation"><?php echo $header[8]['content']; ?></p>
              </div>
            </div>
          </div>
        </section>
       <!-- Our Thinking End -->


         <!-- Our Journey Start -->
         <section class="cancer-care ">
          <div class="container">
            <div class="row justify-content-center position-relative">
              <div class="col-lg-7 col-12 text-center pb-5">
                <p class="text-animation"><?php echo $header[9]['content']; ?> </p>
              </div>
              <div class="blood-test">
                <img src="images/journey-milestones.svg" class="img-fluid lazy" alt="journey-milestones" width="251" height="1445" />
              </div>
              
              <div class="col-lg-9 col-sm-6">  
                <div class="box-care screening text-end box-left-animation">
                  <h2><?php echo $header[10]['content']; ?></h2>
                  <p><?php echo $header[11]['content']; ?></p>
                </div>
              </div>
              <div class="col-lg-9 col-sm-6 d-flex justify-content-end">
                <div class="box-care therapy text-start box-right-animation">
                  <h4><?php echo $header[12]['content']; ?></h4>
                  <p><?php echo $header[13]['content']; ?></p>
                </div>
              </div>
              <div class="col-lg-9 col-sm-6">
                <div class="box-care diagnosis text-end box-left-animation">
                  <h4><?php echo $header[14]['content']; ?></h4>
                  <p><?php echo $header[15]['content']; ?></p>
                </div>
              </div>
              <div class="col-lg-9 col-sm-6 d-flex justify-content-end">
                <div class="box-care monitoring text-start box-right-animation">
                  <h4><?php echo $header[16]['content']; ?></h4>
                  <p><?php echo $header[17]['content']; ?></p>
                </div>
              </div>
            </div>
          </div>
         </section>
         <!-- Our Journey End -->
         
         <!-- Team Team Start -->
          <section class="team">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-sm-12 text-center mb-5">
                  <h2 class="text-animation">Corporate Team</h2>
                </div>

                <?php foreach($CorporateTeam as $value){ if($value['active']==1){ ?>
                <div class="col-lg-3 col-md-4 mb-4 box-animation">
                  <img src="admin/uploads/team/<?php echo $value['image']; ?>" class="img-fluid lazy" alt="<?php echo getAltFromImageName($value['image']); ?>" width="400" height="500" />
                  <h3 class="mt-3"><?php echo $value['name']; ?></h3>
                  <p><?php echo $value['designation']; ?> <br /> [<?php echo $value['qualification']; ?>]</p>
                </div>
                <?php } }?>
                

                <div class="col-sm-12 text-center mt-4 mb-5">
                  <h2 class="text-animation">Core Research Team</h2>
                </div>

               <?php foreach($MedicalAffairs as $value){ if($value['active']==1){ ?>
                <div class="col-lg-3 col-md-4 mb-4 box-animation">
                  <img src="admin/uploads/team/<?php echo $value['image']; ?>" class="img-fluid lazy" alt="<?php echo getAltFromImageName($value['image']); ?>" width="400" height="500" />
                  <h3 class="mt-3"><?php echo $value['name']; ?></h3>
                  <p><?php echo $value['designation']; ?> <br /> [<?php echo $value['qualification']; ?>]</p>
                </div>
                <?php } }?>
                
                
                
                <div class="col-sm-12 text-center mt-4 mb-5">
                  <h2 class="text-animation">Clinical Support</h2>
                </div>

                <div class="row justify-content-center">
                    
                    <?php foreach($India as $value){ if($value['active']==1){ ?>
                    <div class="col-lg-3 col-md-4 mb-4 box-animation">
                        <div class="col-sm-12 text-center">
                         <h4 class="text-animation mb-3">India</h4>
                        </div>
                      <img src="admin/uploads/team/<?php echo $value['image']; ?>" class="img-fluid lazy" alt="<?php echo getAltFromImageName($value['image']); ?>" width="400" height="500" />
                      <h3 class="mt-3"><?php echo $value['name']; ?></h3>
                      <p><?php echo $value['designation']; ?> <br /> [<?php echo $value['qualification']; ?>]</p>
                    </div>
                    <?php } }?>
                    
                    <?php foreach($International as $value){ if($value['active']==1){ ?>
                    <div class="col-lg-3 col-md-4 mb-4 box-animation">
                        <div class="col-sm-12 text-center">
                         <h4 class="text-animation mb-3">International</h4>
                        </div>
                      <img src="admin/uploads/team/<?php echo $value['image']; ?>" class="img-fluid lazy" alt="<?php echo getAltFromImageName($value['image']); ?>" width="400" height="500" />
                      <h3 class="mt-3"><?php echo $value['name']; ?></h3>
                      <p><?php echo $value['designation']; ?> <br /> [<?php echo $value['qualification']; ?>]</p>
                    </div>
                    <?php } }?>
                </div>
                
                
                <!--<div class="row justify-content-center">-->
                <!--    <?php foreach($International as $value){ if($value['active']==1){ ?>-->
                <!--    <div class="col-lg-3 col-md-4 mb-4 box-animation">-->
                <!--        <div class="col-sm-12 text-center">-->
                <!--         <h4 class="text-animation mb-3">International</h4>-->
                <!--        </div>-->
                <!--      <img src="admin/uploads/team/<?php echo $value['image']; ?>" class="img-fluid lazy" alt="<?php echo getAltFromImageName($value['image']); ?>" width="400" height="500" />-->
                <!--      <h3 class="mt-3"><?php echo $value['name']; ?></h3>-->
                <!--      <p><?php echo $value['designation']; ?> <br /> [<?php echo $value['qualification']; ?>]</p>-->
                <!--    </div>-->
                <!--    <?php } }?>-->
                <!--</div>-->

              
               <div class="row justify-content-center">
                    <div class="col-sm-12 text-center">
                     <h4 class="text-animation mb-3">Lab and Medical Affairs</h4>
                    </div>
                    <?php foreach($Lab as $value){ if($value['active']==1){ ?>
                    <div class="col-lg-3 col-md-4 mb-4 box-animation">
                      <img src="admin/uploads/team/<?php echo $value['image']; ?>" class="img-fluid lazy" alt="<?php echo getAltFromImageName($value['image']); ?>" width="400" height="500" />
                      <h3 class="mt-3"><?php echo $value['name']; ?></h3>
                      <p><?php echo $value['designation']; ?> <br /> [<?php echo $value['qualification']; ?>]</p>
                    </div>
                    <?php } }?>
                </div>

                
                
                
                
                
                
                
                

                <div class="col-sm-12 text-center mt-4 mb-5">
                  <h2 class="text-animation">Advisors</h2>
                </div>

                <?php foreach($Advisors as $value){ if($value['active']==1){ ?>
                <div class="col-lg-3 col-md-4 mb-4 box-animation">
                  <img src="admin/uploads/team/<?php echo $value['image']; ?>" class="img-fluid lazy" alt="<?php echo getAltFromImageName($value['image']); ?>" width="400" height="500" />
                  <h3 class="mt-3"><?php echo $value['name']; ?></h3>
                  <p><?php echo $value['designation']; ?> <br /> [<?php echo $value['qualification']; ?>]</p>
                </div>
                <?php } }?>

              </div>
            </div>
          </section>
         <!-- Team Team End -->

         <!--Our Test Portfolio Start-->
         <section class="our-thinking test-portfolio">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8 col-sm-12 our-box">
                <h2 class="text-black text-center mb-4 text-animation">Our Test Portfolio</h2>
                <p class="text-black text-center text-animation">To fulfill our vision, we have developed a range of non-invasive blood tests that provide personalised insights to guide cancer treatment, helping doctors make informed decisions tailored to each patient.</p>
              </div>
            </div>

            <div class="row pt-3">
              <div class="col-sm-12">
                <div class="swiper-container test-portfolio-slider">

                  <div class="swiper-wrapper">
                    <?php foreach ($testportfolio as $item): ?>
                        <div class="swiper-slide">
                            <h2 class="mb-3"><?= $item['name'] ?></h2>
                            <p class="text-justify"><?= $item['description'] ?></p>
                            <div class="caption">
                                <a href="<?= $item['link']; ?>">KNOW MORE</a>
                            </div>
                        </div>
                    <?php endforeach ?>


                  </div>
          
                  <!-- If we need navigation buttons -->
                  <div class="slider__pagination"></div>
              </div>
              <div class="row justify-content-center mt-4"> 
                  <div class="col-lg-8 col-sm-12 our-box">
                    <p class="text-black text-center text-animation">Our tests may be able to enhance your chances to win the battle against cancer through a smart combination of therapy guidance derived using multi-analyte analysis of the cancer cells. </p>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
        </section>
         <!--Our Test Portfolio End-->

    
        <?php include('include/footer.php') ?>