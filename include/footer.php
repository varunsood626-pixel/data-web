   <?php
    require_once 'db.php';
      $conn = connect_db();
$footer = select_where($conn, 'pages', 'page', 'contact');

   ?>
   <!--Footer Start-->
   <footer class="pb-3">
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-5 col-sm-6">
          <h5 class="mb-3">Contact Details</h5>
          <p class="mb-0">Phone : <?php echo $footer[0]['content']; ?></p>
          <p class="mb-4">Email : <a href="mailto:<?php echo $footer[1]['content']; ?>"><?php echo $footer[1]['content']; ?></a></p>
          <p class="mb-4">Address 1 : <?php echo $footer[2]['content']; ?></p>
          <p class="mb-5">Address 2 : <?php echo $footer[3]['content']; ?></p>
        </div>

        <div class="col-lg-2 col-sm-6 mb-4">
          <h5 class="mb-3">Site Map</h5>
          <ul>
            <li><a href="non-invasive-blood-tests-to-detect-cancer.php">Who We Are</a></li>
            <!-- <li><a href="#">Our Thinking</a></li> -->
            <li><a href="latest-cancer-advancements.php">Latest</a></li>
            <!--<li><a href="latest-global-medical-events.php">Events</a></li>-->
            <li><a href="cancer-care-publications.php">Publications</a></li>
            
            <li><a href="faqs.php">FAQs</a></li>
            <li><a href="contact-us.php">Contact Us</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-sm-6 mb-4 ">
          <h5 class="mb-3">Solutions</h5>
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="advanced-cancer-care-solutions.php#solutions-screening">Screening</a></li>
            <li><a href="advanced-cancer-care-solutions.php#solution-diagnosis">Diagnosis</a></li>
            <li><a href="advanced-cancer-care-solutions.php#therapy-guidance">Therapy Guidance</a></li>
            <li><a href="advanced-cancer-care-solutions.php#monitoring">Monitoring</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-sm-6 mb-4">
          <h5 class="mb-3">Products</h5>
          <ul>
            <li class="sup-top"><a href="easycheck360.php"> EasyCheck360<sup>&reg;</sup></a></li>
            <li><a href="trublood-safe-cost-effective-blood-tests.php">Trublood<sup>™</sup></a></li>
            <li><a href="excta-comprehensive-tumor-analysis.php">Exacta<sup>™</sup></a></li>
            <li><a href="pinaka360.php">Pinaka<sup>™</sup></a></li>
            <li><a href="celldx-targeted-therapy-options.php">Celldx<sup>™</sup></a></li>
            <li><a href="chemo-scale-effective-chemotherapy.php">Chemoscale<sup>™</sup></a></li>
            <li><a href="cancertrack-non-invasive-cancer-monitoring.php">Cancertrack<sup>™</sup></a></li>
            <li><a href="targetmrd360.php">Target-MRD<sup>™</sup></a></li>
          </ul>
        </div>
      </div>
      
                    
      
      <div class="row">
          <div class="col-12">
              <h5 class="mb-3">Got an Enquiry? Contact Us.</h5>
          </div>
      </div>
      
     <form id="footercontactForm" method="POST">
  <div class="row">
    <div class="col-sm-4">
      <div class="mb-3">
        <input type="text" class="form-control" name="name" placeholder="Name">
      </div>
    </div>
    <div class="col-sm-4">
      <div class="mb-3">
        <input type="email" class="form-control" name="email1" placeholder="Email">
      </div>
    </div>
    <div class="col-sm-4">
      <div class="mb-3">
        <input type="tel" class="form-control" name="mobile" placeholder="Mob. No.">
      </div>
    </div>
    <div class="col-sm-12">
      <button id="submitBtn" class="btn btn-primary" type="button">Send</button>
    </div>
  </div>
</form>

      <!-- <div class="row">
        
        <div class="col-lg-6">
          <h5 class="mb-4">Get in Touch</h5>
          <form>
            <div class="mb-3">
              <input type="text" class="form-control" id="exampleInputtext" placeholder="Name" >
            </div>
            
            <div class="mb-3">
              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" >
            </div>

            <div class="mb-3">
              <input type="number" class="form-control" id="exampleInputNumber" placeholder="Mob. No." >
            </div>
            <button type="submit" class="btn btn-primary">Send</button>
          </form>
        </div>
        <div class="col-lg-6 align-self-end">
          <ul class="d-flex justify-content-end social">
            <li>
              <a href="#">
                <svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M31.2677 4.68985C19.58 -5.69473 0.917858 2.26486 0.0158743 17.8193C-0.0285897 18.6031 0.0508103 19.4093 0.0158743 20.1931L0.435106 22.9988C1.95959 30.245 7.7145 36.0419 14.905 37.5775L17.6903 37.9998H20.0469C36.7114 36.9985 43.9019 15.903 31.2741 4.68665L31.2677 4.68985ZM24.2742 20.0268C24.2392 20.1835 24.0741 20.5418 23.8962 20.5418H20.3836V30.1746C20.3836 30.1938 20.1612 30.421 20.1136 30.4433C19.9389 30.5233 16.9503 30.5425 16.5978 30.4945C16.4803 30.4785 16.2008 30.3794 16.2008 30.2674V20.545H13.4885C13.3138 20.545 13.1232 20.2219 13.0946 20.046C12.9962 19.4253 13.0248 17.5762 13.0851 16.9108C13.1073 16.6548 13.2852 16.1526 13.5774 16.1526H16.2008C16.2961 14.8473 16.0706 13.3597 16.2008 12.0736C16.3977 10.1061 17.6935 8.34013 19.5991 7.79307C20.5614 7.51794 22.9974 7.40277 23.9756 7.55313C24.3536 7.61071 24.5028 7.87305 24.5505 8.22816C24.6235 8.76242 24.614 10.0869 24.56 10.6403C24.5473 10.7811 24.4425 11.2066 24.3599 11.2898C24.0233 11.6289 21.6222 11.0658 20.7869 11.9488C20.6567 12.0864 20.3772 12.627 20.3772 12.7902V16.1526H24.1567C24.4203 16.1526 24.6553 16.6452 24.6489 16.9108C24.6299 17.5986 24.4234 19.3677 24.2678 20.03L24.2742 20.0268Z" fill=""/>
                  </svg>
              </a>
            </li>
            <li>
              <a href="#">
                <svg width="39" height="38" viewBox="0 0 39 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M33.0662 5.57645C21.6294 -5.98223 1.80167 1.60946 0.861577 17.8102C0.817113 18.594 0.896513 19.4002 0.861577 20.184C0.975913 20.6127 0.960033 21.0989 1.02038 21.5468C2.10975 29.9383 8.8651 36.7206 17.183 37.8339C17.6245 37.8915 18.1104 37.8787 18.536 37.9939H20.8926C36.9378 37.0469 44.4935 17.1223 33.0694 5.57645H33.0662ZM24.0908 30.1271L18.2978 21.6428L18.1263 21.518L10.7612 30.1271H8.88416L17.3387 20.2224L8.88416 7.79349H15.252L20.9212 16.0282L27.991 7.79349H29.7949L21.7755 17.3175L30.5318 30.1271H24.0877H24.0908Z" fill=""/>
                  <path d="M11.4629 9.27783L25.0466 28.7929H27.8828C27.7939 28.5242 27.5874 28.265 27.4286 28.0283C23.1792 21.7131 18.6883 15.5514 14.3721 9.28103H11.4629V9.27783Z" fill=""/>
                  </svg>
              </a>
            </li>
            <li>
              <a href="#">
                <svg width="39" height="38" viewBox="0 0 39 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M5.53747 6.66052C-4.62255 18.2992 3.16182 36.8097 18.3939 37.7087C19.1593 37.7535 19.9502 37.6767 20.7188 37.7087L22.6212 37.4687C30.5834 36.1443 36.9354 29.5603 37.9962 21.4984C38.0534 21.0601 38.0407 20.577 38.1518 20.1547V17.8129C37.1895 1.25709 16.4947 -5.89311 5.53747 6.66052ZM30.2372 22.4613C30.0467 27.5832 28.0934 29.5475 23.0086 29.7395C20.8204 29.8227 18.2891 29.8227 16.1008 29.7395C11.0097 29.5475 9.06283 27.5864 8.87227 22.4613C8.7897 20.2603 8.7897 17.7073 8.87227 15.5063C9.05966 10.4996 10.8986 8.47446 15.9071 8.25372C18.1621 8.15454 20.7537 8.14495 23.0086 8.22813C28.0934 8.42008 30.0467 10.378 30.2372 15.5063C30.3198 17.7073 30.3198 20.2603 30.2372 22.4613Z" fill=""/>
                  <path d="M23.8082 10.2022C22.4266 10.1254 20.7942 10.1478 19.3967 10.151C15.4077 10.1574 11.1296 9.44716 10.8342 14.7002C10.7453 16.3126 10.8342 18.0018 10.8406 19.6014C10.8628 23.5364 10.1546 27.4714 15.3029 27.7625C16.8781 27.8521 18.536 27.7625 20.0986 27.7561C24.0051 27.7337 27.9878 28.4696 28.2768 23.2645C28.3626 21.7033 28.2768 20.0557 28.2705 18.5105C28.2482 14.5531 29.0105 10.4965 23.8082 10.2022ZM24.8213 20.5196C23.6589 24.7457 18.1454 25.8814 15.3441 22.5287C12.6509 19.3039 14.5628 13.9932 18.7393 13.5165C22.7442 13.0623 25.9139 16.543 24.8213 20.5164V20.5196ZM25.9425 14.3355C24.8404 15.0585 23.4747 13.7405 24.1417 12.5952C24.2973 12.3296 24.6784 12.0321 24.9833 11.9809C26.422 11.7378 27.1207 13.5645 25.9425 14.3355Z" fill=""/>
                  <path d="M19.1044 15.4201C14.5913 15.9672 15.2392 22.9606 19.8825 22.5671C24.5481 22.1736 23.9161 14.8378 19.1044 15.4201Z" fill=""/>
                  </svg>
              </a>
            </li>
            <li>
              <a href="#">
                <svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M37.985 17.8289C37.8738 17.4066 37.8865 16.9267 37.8294 16.4853C36.7845 8.42329 30.4102 1.82336 22.4607 0.508494L20.5583 0.268555H18.3065C2.45509 1.15793 -5.06568 20.7978 6.20595 32.2189C17.522 43.6848 37.0544 36.1283 37.985 20.0971C38.0295 19.3485 37.9532 18.5775 37.985 17.8289ZM28.619 21.0857C28.4284 23.2835 28.1775 25.0559 25.6685 25.5038C22.7815 26.0189 18.4653 25.9229 15.5116 25.7309C13.6664 25.6126 11.0525 25.5454 10.4967 23.3187C9.9441 21.1081 9.9441 16.8884 10.4967 14.6777C10.8048 13.4428 11.945 12.7166 13.1328 12.5055C15.0956 12.16 17.2584 12.2815 19.2339 12.1376L22.1145 12.1919C24.1599 12.4511 27.6408 12.0416 28.3046 14.6617C28.7556 16.4469 28.7746 19.2398 28.6158 21.0793L28.619 21.0857Z" fill=""/>
                  <path d="M17.1465 22.5862L22.9554 18.9647L17.1465 15.4136V22.5862Z" fill=""/>
                  </svg>
              </a>
            </li>
          </ul>
        </div>
      </div> -->

      <div class="row justify-content-center text-center">
        <!-- <div class="col-sm-12 position-relative">
          <hr>
          <span>Accreditations and Certifications</span>
        </div>

        <div class="col-sm-6 mt-4 mb-3">
          <img src="images/footer-img.png" class="img-fluid" alt="" width="" height="" />
        </div> -->
        <div class="col-lg-12 ">
          <ul class="d-flex justify-content-center mb-3 social">
            <li>
              <a href="https://www.facebook.com/datarcancergenetics" target="_blank" aria-label="facebook">
                <svg width="38" height="38" alt="datar-facebook-page" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M31.2677 4.68985C19.58 -5.69473 0.917858 2.26486 0.0158743 17.8193C-0.0285897 18.6031 0.0508103 19.4093 0.0158743 20.1931L0.435106 22.9988C1.95959 30.245 7.7145 36.0419 14.905 37.5775L17.6903 37.9998H20.0469C36.7114 36.9985 43.9019 15.903 31.2741 4.68665L31.2677 4.68985ZM24.2742 20.0268C24.2392 20.1835 24.0741 20.5418 23.8962 20.5418H20.3836V30.1746C20.3836 30.1938 20.1612 30.421 20.1136 30.4433C19.9389 30.5233 16.9503 30.5425 16.5978 30.4945C16.4803 30.4785 16.2008 30.3794 16.2008 30.2674V20.545H13.4885C13.3138 20.545 13.1232 20.2219 13.0946 20.046C12.9962 19.4253 13.0248 17.5762 13.0851 16.9108C13.1073 16.6548 13.2852 16.1526 13.5774 16.1526H16.2008C16.2961 14.8473 16.0706 13.3597 16.2008 12.0736C16.3977 10.1061 17.6935 8.34013 19.5991 7.79307C20.5614 7.51794 22.9974 7.40277 23.9756 7.55313C24.3536 7.61071 24.5028 7.87305 24.5505 8.22816C24.6235 8.76242 24.614 10.0869 24.56 10.6403C24.5473 10.7811 24.4425 11.2066 24.3599 11.2898C24.0233 11.6289 21.6222 11.0658 20.7869 11.9488C20.6567 12.0864 20.3772 12.627 20.3772 12.7902V16.1526H24.1567C24.4203 16.1526 24.6553 16.6452 24.6489 16.9108C24.6299 17.5986 24.4234 19.3677 24.2678 20.03L24.2742 20.0268Z" fill=""/>
                  </svg>
              </a>
            </li>
            <li>
              <a href="https://x.com/i/flow/login?redirect_after_login=%2FDatarCancer" target="_blank" aria-label="x">
                <svg width="39" height="38" alt="datar-x" viewBox="0 0 39 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M33.0662 5.57645C21.6294 -5.98223 1.80167 1.60946 0.861577 17.8102C0.817113 18.594 0.896513 19.4002 0.861577 20.184C0.975913 20.6127 0.960033 21.0989 1.02038 21.5468C2.10975 29.9383 8.8651 36.7206 17.183 37.8339C17.6245 37.8915 18.1104 37.8787 18.536 37.9939H20.8926C36.9378 37.0469 44.4935 17.1223 33.0694 5.57645H33.0662ZM24.0908 30.1271L18.2978 21.6428L18.1263 21.518L10.7612 30.1271H8.88416L17.3387 20.2224L8.88416 7.79349H15.252L20.9212 16.0282L27.991 7.79349H29.7949L21.7755 17.3175L30.5318 30.1271H24.0877H24.0908Z" fill=""/>
                  <path d="M11.4629 9.27783L25.0466 28.7929H27.8828C27.7939 28.5242 27.5874 28.265 27.4286 28.0283C23.1792 21.7131 18.6883 15.5514 14.3721 9.28103H11.4629V9.27783Z" fill=""/>
                  </svg>
              </a>
            </li>
            <li>
              <a href="https://www.instagram.com/datar_cancer_genetics/?hl=en" target="_blank" aria-label="instagram">
                <svg width="39" height="38" alt="datar-instagram" viewBox="0 0 39 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M5.53747 6.66052C-4.62255 18.2992 3.16182 36.8097 18.3939 37.7087C19.1593 37.7535 19.9502 37.6767 20.7188 37.7087L22.6212 37.4687C30.5834 36.1443 36.9354 29.5603 37.9962 21.4984C38.0534 21.0601 38.0407 20.577 38.1518 20.1547V17.8129C37.1895 1.25709 16.4947 -5.89311 5.53747 6.66052ZM30.2372 22.4613C30.0467 27.5832 28.0934 29.5475 23.0086 29.7395C20.8204 29.8227 18.2891 29.8227 16.1008 29.7395C11.0097 29.5475 9.06283 27.5864 8.87227 22.4613C8.7897 20.2603 8.7897 17.7073 8.87227 15.5063C9.05966 10.4996 10.8986 8.47446 15.9071 8.25372C18.1621 8.15454 20.7537 8.14495 23.0086 8.22813C28.0934 8.42008 30.0467 10.378 30.2372 15.5063C30.3198 17.7073 30.3198 20.2603 30.2372 22.4613Z" fill=""/>
                  <path d="M23.8082 10.2022C22.4266 10.1254 20.7942 10.1478 19.3967 10.151C15.4077 10.1574 11.1296 9.44716 10.8342 14.7002C10.7453 16.3126 10.8342 18.0018 10.8406 19.6014C10.8628 23.5364 10.1546 27.4714 15.3029 27.7625C16.8781 27.8521 18.536 27.7625 20.0986 27.7561C24.0051 27.7337 27.9878 28.4696 28.2768 23.2645C28.3626 21.7033 28.2768 20.0557 28.2705 18.5105C28.2482 14.5531 29.0105 10.4965 23.8082 10.2022ZM24.8213 20.5196C23.6589 24.7457 18.1454 25.8814 15.3441 22.5287C12.6509 19.3039 14.5628 13.9932 18.7393 13.5165C22.7442 13.0623 25.9139 16.543 24.8213 20.5164V20.5196ZM25.9425 14.3355C24.8404 15.0585 23.4747 13.7405 24.1417 12.5952C24.2973 12.3296 24.6784 12.0321 24.9833 11.9809C26.422 11.7378 27.1207 13.5645 25.9425 14.3355Z" fill=""/>
                  <path d="M19.1044 15.4201C14.5913 15.9672 15.2392 22.9606 19.8825 22.5671C24.5481 22.1736 23.9161 14.8378 19.1044 15.4201Z" fill=""/>
                  </svg>
              </a>
            </li>
            <li>
              <a href="https://www.youtube.com/@DatarCancerGenetics" target="_blank" aria-label="youtube">
                <svg width="38" height="38" alt="datar-youtube" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M37.985 17.8289C37.8738 17.4066 37.8865 16.9267 37.8294 16.4853C36.7845 8.42329 30.4102 1.82336 22.4607 0.508494L20.5583 0.268555H18.3065C2.45509 1.15793 -5.06568 20.7978 6.20595 32.2189C17.522 43.6848 37.0544 36.1283 37.985 20.0971C38.0295 19.3485 37.9532 18.5775 37.985 17.8289ZM28.619 21.0857C28.4284 23.2835 28.1775 25.0559 25.6685 25.5038C22.7815 26.0189 18.4653 25.9229 15.5116 25.7309C13.6664 25.6126 11.0525 25.5454 10.4967 23.3187C9.9441 21.1081 9.9441 16.8884 10.4967 14.6777C10.8048 13.4428 11.945 12.7166 13.1328 12.5055C15.0956 12.16 17.2584 12.2815 19.2339 12.1376L22.1145 12.1919C24.1599 12.4511 27.6408 12.0416 28.3046 14.6617C28.7556 16.4469 28.7746 19.2398 28.6158 21.0793L28.619 21.0857Z" fill=""/>
                  <path d="M17.1465 22.5862L22.9554 18.9647L17.1465 15.4136V22.5862Z" fill=""/>
                  </svg>
              </a>
            </li>
          </ul>
        </div>

        <div class="col-sm-12 accreditations">
          <p>To see our accredited scope, please follow the links for <a href="https://www.ukas.com/download-schedule/22238/Medical/" target="_blank">UKAS schedule of accreditation.</a> </p>
          <p class="mb-0 pb-0"><?php echo date('Y'); ?> © Datar Cancer Genetics.</p>
          <p>All Rights Reserved. The information on this site is not intended for audiences in the US and India.</p>
          <hr>
        </div>

        <div class="col-sm-10 col-lg-10 col-12">
          <ul class="d-flex justify-content-between flex-wrap terms">
            <li><a href="policy-terms-datar-cancer-genetics.php">Terms of Use</a></li>
            <li><a href="privacy-policy-datar-cancer-genetics.php">Privacy Policy</a></li>
            <li><a href="cookies-policy-datar-cancer-genetics.php">Cookies Policy</a></li>
            <li><a href="secure-data-datar-cancer-genetics.php">Data Protection</a></li>
            <li><a href="information-security-management-system-policy.php">Information Security Management System Policy</a></li>
          </ul>
        </div>
      </div>


    </div>
  </footer>
  <!--Footer End-->

  
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/swiper.min.js"></script>
  <script src="js/gsap.min.js" ></script>
  <script src="js/ScrollTrigger.min.js"></script>
  <script src="js/jquery.drawsvg.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="js/lazyload.min.js"></script>
  
 <script src="https://cdn.jsdelivr.net/jquery.validation/1.19.5/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>



 <script>
$(document).ready(function () {

  // Function to validate individual fields
  function validateField(field) {
    let value = field.val().trim();
    let name = field.attr('name');
    field.next('.error-msg').remove(); // remove existing error message

    if (name === 'name') {
      if (value === '') {
        field.after('<div class="error-msg" style="color:red;">Please enter your name</div>');
        return false;
      } else {
        let nameRegex = /^[a-zA-Z\s]{2,50}$/;
        if (!nameRegex.test(value)) {
          field.after('<div class="error-msg" style="color:red;">Only letters and spaces (2–50 characters) allowed</div>');
          return false;
        }
      }
    }

    if (name === 'email1') {
      if (value === '') {
        field.after('<div class="error-msg" style="color:red;">Please enter your email</div>');
        return false;
      } else {
        let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(value)) {
          field.after('<div class="error-msg" style="color:red;">Please enter a valid email</div>');
          return false;
        }
      }
    }

    if (name === 'mobile') {
      if (value === '') {
        field.after('<div class="error-msg" style="color:red;">Please enter your mobile number</div>');
        return false;
      } else {
        let mobileRegex = /^\d{10}$/;
        if (!mobileRegex.test(value)) {
          field.after('<div class="error-msg" style="color:red;">Please enter a valid 10-digit mobile number</div>');
          return false;
        }
      }
    }

    return true;
  }

  // Live validation
  $('input[name="name"], input[name="email1"], input[name="mobile"]').on('input', function () {
    validateField($(this));
  });

  // Submit button click
  $('#submitBtn').click(function () {
    $('.error-msg').remove();

    let isNameValid = validateField($('input[name="name"]'));
    let isEmailValid = validateField($('input[name="email1"]'));
    let isMobileValid = validateField($('input[name="mobile"]'));

    if (isNameValid && isEmailValid && isMobileValid) {
      const formData = new FormData(document.getElementById("footercontactForm"));

      Swal.fire({
        title: 'Submitting...',
        allowOutsideClick: false,
        didOpen: () => {
          Swal.showLoading();
        }
      });

      fetch("submit.php", {
        method: "POST",
        body: formData
      })
      .then(res => res.text())
      .then(data => {
        Swal.fire({
          icon: "success",
          title: "Success",
          text: data
        });
        $("#footercontactForm")[0].reset();
      })
      .catch(err => {
        Swal.fire({
          icon: "error",
          title: "Error",
          text: "Form submission failed."
        });
        console.error(err);
      });
    }
  });
});
</script>



<script>
  document.addEventListener('DOMContentLoaded', function () {
    const hash = window.location.hash;

    if (hash) {
      // Prevent scroll jump caused by hash
      const originalScroll = window.scrollY;

      // Remove hash to avoid auto-scroll by browser
      history.replaceState(null, null, window.location.pathname);

      // Activate the tab manually
      const tabTrigger = document.querySelector(`button[data-bs-target="${hash}"]`);
      if (tabTrigger) {
        const tab = new bootstrap.Tab(tabTrigger);
        tab.show();

        // Scroll to top AFTER small delay
        setTimeout(() => {
          window.scrollTo({ top: 0, behavior: 'smooth' });

          // Restore hash (optional)
          history.replaceState(null, null, hash);
        }, 100); // Delay ensures tab is activated first
      }
    }
  });
</script>




  </body>
</html>