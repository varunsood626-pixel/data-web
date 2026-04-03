<?php include('include/header.php');
require_once 'db.php';
$conn = connect_db();
$header=select_where($conn,'pages','page','cookiespolicy');

?>  

<section class="terms">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-10 col-12 text-center">
            <p class="mb-0 text-justify"><?php echo $header[0]['content']; ?></p>

            <span class="mt-5 mb-5 mobile-space"><?php echo $header[1]['content']; ?></span>
            
            <p class="text-justify mb-0"><?php echo $header[2]['content']; ?></p>

            <span class="mt-5 mb-5 mobile-space"><?php echo $header[3]['content']; ?></span>

            <p class="text-justify mb-0"><?php echo $header[4]['content']; ?></p>

            <span class="mt-5 mb-5 mobile-space"><?php echo $header[5]['content']; ?></span>

            <p class="text-justify mb-0"><?php echo $header[6]['content']; ?></p>

            </div>
        </div>
        
    </div>
</section>

<?php include('include/footer.php') ?>