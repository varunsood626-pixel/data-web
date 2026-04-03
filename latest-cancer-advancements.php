<?php include('include/header.php');
      require_once 'db.php';
      $conn = connect_db();
      $letest=select_where($conn,'letest','active','1');      
?>

<section class="latest-press">
    <div class="container">
    <?php foreach ($letest as $value){ ?>
        <div class="row justify-content-center mb-2">
            <div class="col-lg-6 col-sm-10 col-12 text-center position-relative">
                <h2 class="mb-3"><?php echo $value['title']; ?></h2>
                <p><?php echo $value['line_2']; ?>
                </p>
                <p><?php echo $value['date']; ?><span><?php echo $value['shorttitle']; ?></span> </p>
                <a class="stretched-link" href="<?php echo $value['link']; ?>" target="_blank">Read More</a>
                <hr class="mt-4">
            </div>
        </div>
    <?php } ?>
       
        
    </div>
</section>

<?php include('include/footer.php') ?>