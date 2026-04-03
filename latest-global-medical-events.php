<?php include('include/header.php');
      require_once 'db.php';
      $conn = connect_db();
      $letest=select_where($conn,'event','active','1');      
?>


<section class="conferences p-0">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-7 col-12 text-center">
                <h1 class="text-white mb-3 text-animation">Events</h1>
                <p class="text-white text-animation">Transparency is important to us, and we share our findings with the scientific community. We have presented data at numerous national and international medical meetings in order to disseminate our findings.</p>
            </div>
        </div>
        <div class="row mt-4">
         <?php foreach ($letest as $value){ ?>
            <div class="col-lg-3 col-md-6">
                <div class="card mb-3 box-animation">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $value['title']; ?></h5>
                        <div class="caption">
                            <p class="card-text"><?php echo $value['shorttitle']; ?></p>
                            <a href="<?php echo $value['link']; ?>" target="_blank">KNOW MORE</a>
                        </div>
                    </div>
                </div>
            </div>
         <?php } ?>

        </div>
    </div>
</section>

<?php include('include/footer.php') ?>