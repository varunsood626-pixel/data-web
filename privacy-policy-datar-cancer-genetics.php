<?php include('include/header.php');
require_once 'db.php';
$conn = connect_db();
$header=select_where($conn,'pages','page','privacypolicy');
// echo "<pre>";print_r();
?> 

<section class="terms">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-10 col-12 text-center">

            <span class=" mb-5 mobile-space"><?php echo $header[0]['content']; ?></span>
            
            <p class=" text-justify mb-0"><?php echo $header[1]['content']; ?></p>
          
           

            <span class=" mt-5 mb-5 mobile-space"><?php echo $header[2]['content']; ?></span>
            <?php echo $header[3]['content']; ?>
          
            
            <span class=" mt-5 mb-5 mobile-space"><?php echo $header[4]['content']; ?></span>
            <p class=" text-justify mb-0"><?php echo $header[5]['content']; ?></p>
            
            <span class=" mt-5 mb-5 mobile-space"><?php echo $header[6]['content']; ?></span>
            <p class=" text-justify mb-0"><?php echo $header[7]['content']; ?></p>

            <span class=" mt-5 mb-5 mobile-space"><?php echo $header[8]['content']; ?></span>
            <p class=" text-justify mb-0"><?php echo $header[9]['content']; ?></p>

            <span class=" mt-5 mb-5 mobile-space"><?php echo $header[10]['content']; ?></span>
            <p class=" text-justify mb-0"><?php echo $header[11]['content']; ?></p>

            <span class=" mt-5 mb-5 mobile-space"><?php echo $header[12]['content']; ?></span>
            <p class=" text-justify mb-0"><?php echo $header[13]['content']; ?></p>

            <span class=" mt-5 mb-5 mobile-space"><?php echo $header[14]['content']; ?></span>
            <?php echo $header[15]['content']; ?>

            <span class=" mt-5 mb-5 mobile-space"><?php echo $header[16]['content']; ?></span>
            <p class=" text-justify mb-0"><?php echo $header[17]['content']; ?></p>

            <span class=" mt-5 mb-5 mobile-space"><?php echo $header[18]['content']; ?></span>
            <p class=" text-justify mb-0"><?php echo $header[19]['content']; ?></p>
            
            
            <span class=" mt-5 mb-5 mobile-space"><?php echo $header[20]['content']; ?></span>
            <p class=" text-justify mb-0"><?php echo $header[21]['content']; ?></p>
            </div>
        </div>
        
    </div>
</section>

<?php include('include/footer.php') ?>