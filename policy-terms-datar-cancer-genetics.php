<?php include('include/header.php');
      require_once 'db.php';
      $conn = connect_db();
      $header=select_where($conn,'pages','page','policy');
?> 

<section class="terms">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-10 col-12 text-center">
                <span class=" mb-5 mobile-space"><?php echo $header[0]['content']; ?></span>
                <p class=" mb-0 text-justify"><?php echo $header[1]['content']; ?></p>

                <span class=" mt-5 mb-5 mobile-space"><?php echo $header[2]['content']; ?></span>

                <p class=" mb-0 text-justify"><?php echo $header[3]['content']; ?></p>

                <span class=" mt-5 mb-5 mobile-space"><?php echo $header[4]['content']; ?></span>

                <p class=" mb-0 text-justify"><?php echo $header[5]['content']; ?></p>

                <span class=" mt-5 mb-5 mobile-space"><?php echo $header[6]['content']; ?></span>
                <p class=" mb-0 text-justify"><?php echo $header[7]['content']; ?></p>
                
                <span class=" mt-5 mb-5 mobile-space"><?php echo $header[8]['content']; ?></span>
                <p class=" mb-0 text-justify"><?php echo $header[9]['content']; ?></p>

                <!-- <ul class="text-start p-0 credit-point ">
                    <li>(a) comply with legal process, law, regulation or court order;</li>
                    <li>(b) enforce the Terms and Conditions of this agreement;</li>
                    <li>(c) respond to claims that any credit card details violate the rights of third-parties;</li>
                    <li>(d) respond to your requests for customer service.</li>
                </ul> -->

                <span class=" mt-5 mb-5 mobile-space"><?php echo $header[10]['content']; ?></span>

                <p class=" mb-0 text-justify"><?php echo $header[11]['content']; ?></p>

                <span class=" mt-5 mb-5 mobile-space"><?php echo $header[12]['content']; ?></span>
                <p class=" mb-0 text-justify"><?php echo $header[13]['content']; ?></p>


                <span class=" mt-5 mb-5 mobile-space"><?php echo $header[14]['content']; ?></span>
                <p class=" mb-0 text-justify"><?php echo $header[15]['content']; ?></p>

                <span class=" mt-5 mb-5 mobile-space"><?php echo $header[16]['content']; ?></span>
                <p class=" mb-0 text-justify"><?php echo $header[17]['content']; ?></p>

                <span class=" mt-5 mb-5 mobile-space"><?php echo $header[18]['content']; ?></span>
                <p class=" mb-0 text-justify"><?php echo $header[19]['content']; ?></p>

                <span class=" mt-5 mb-5 mobile-space"><?php echo $header[20]['content']; ?></span>
                <ul class="text-start ">
                   <?php echo $header[21]['content']; ?>
                </ul>

                <span class=" mt-5 mb-5 mobile-space"><?php echo $header[22]['content']; ?></span>
                <p class=" mb-0 text-justify"><?php echo $header[23]['content']; ?></p>

                <span class=" mt-5 mb-5 mobile-space"><?php echo $header[24]['content']; ?></span>
                <p class=" mb-0 text-justify"><?php echo $header[25]['content']; ?></p>

                <span class=" mt-5 mb-5 mobile-space"><?php echo $header[26]['content']; ?></span>
                <p class=" mb-0 text-justify"><?php echo $header[27]['content']; ?></p>

                <span class=" mt-5 mb-5 mobile-space"><?php echo $header[28]['content']; ?></span>
                <p class=" mb-0 text-justify"><?php echo $header[29]['content']; ?></p>

                <span class=" mt-5 mb-5 mobile-space"><?php echo $header[30]['content']; ?></span>
                <p class=" mb-0 text-justify"><?php echo $header[31]['content']; ?></p>

                <span class=" mt-5 mb-5 mobile-space"><?php echo $header[32]['content']; ?></span>
                <p class=" mb-0 text-justify"><?php echo $header[33]['content']; ?></p>

                <span class=" mt-5 mb-5 mobile-space"><?php echo $header[34]['content']; ?></span>
                <p class=" mb-0 text-justify"><?php echo $header[35]['content']; ?></p>
            </div>
        </div>
        
    </div>
</section>

<?php include('include/footer.php') ?>