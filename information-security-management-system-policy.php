<?php include('include/header.php');
      require_once 'db.php';
      $conn = connect_db();
      $header=select_where($conn,'pages','page','information-security-management-system-policy');

?> 

<section class="terms">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-10 col-12 text-center">

            <span class="mt-5 mb-5 mobile-space"><?php echo $header[0]['content']; ?></span>
            <?php for ($i=1; $i < 8; $i++) { ?>
                
            <p class="text-justify mb-3"><?php echo $header[0+$i]['content']; ?></p>
               
          <?php  } ?>

            </div>
        </div>
        
    </div>
</section>

<?php include('include/footer.php') ?>