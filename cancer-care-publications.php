123<?php 

include('include/header.php');

require_once 'db.php';

$conn = connect_db();



// Fetch all active publications

$results = select_where($conn, 'publications', 'active', '1', 'ORDER BY publishon DESC');



// Group by category

$grouped = [];

foreach ($results as $pub) {

    $grouped[$pub['category']][] = $pub;

}



// Define tab names

$tabs = [

    'screening' => 'SCREENING',

    'diagnosis' => 'DIAGNOSIS',

    'therapy_guidance' => 'THERAPY GUIDANCE',

    'monitoring' => 'MONITORING'

];

?>



<section class="faq publication-page">

    <div class="container">

        <div class="row justify-content-center mb-3">

            <div class="col-sm-7 col-12 text-center">

                <p>Explore peer-reviewed research by Datar Cancer Genetics on cancer screening, diagnosis, therapy guidance, and monitoring solutions.</p>

            </div>

        </div>

        <div class="row">

            <div class="col-sm-12">

                <!-- Nav Tabs -->

                <ul class="nav nav-tabs" id="myTab" role="tablist">

                    <?php $first = true; foreach ($tabs as $key => $label): ?>

                        <li class="nav-item" role="presentation">

                            <button class="nav-link <?= $first ? 'active' : '' ?>" id="<?= $key ?>-tab"

                                data-bs-toggle="tab" data-bs-target="#<?= $key ?>" type="button" role="tab"

                                aria-controls="<?= $key ?>" aria-selected="<?= $first ? 'true' : 'false' ?>">

                                <?= $label ?>

                            </button>

                        </li>

                    <?php $first = false; endforeach; ?>

                </ul>



                <hr>



                <!-- Tab Content -->

                <div class="tab-content" id="myTabContent">

                    <?php $first = true; foreach ($tabs as $key => $label): ?>

                        <div class="tab-pane fade <?= $first ? 'show active' : '' ?>" id="<?= $key ?>" role="tabpanel" aria-labelledby="<?= $key ?>-tab">

                            <div class="row justify-content-center pt-4">

                                <?php if (!empty($grouped[$key])): ?>

                                    <?php foreach ($grouped[$key] as $pub): ?>

                                        <div class="col-lg-4 col-sm-6">

                                            <div class="publication-box mb-4">

                                                <h3 class="mb-4"><?= $pub['title'] ?></h3>

                                                <p class="mb-0">Published By: <?= $pub['description'] ?></p> 

                                                <p class="">Published Year: <?= $pub['publishon'] ?></p>

                                                <a href="<?= $pub['link'] ?>" target="_blank">Read More</a>

                                            </div>

                                        </div>

                                    <?php endforeach; ?>

                                <?php else: ?>

                                    <div class="col-12 text-center">

                                        <p>No publications found in this category.</p>

                                    </div>

                                <?php endif; ?>

                            </div>

                        </div>

                    <?php $first = false; endforeach; ?>

                </div>

            </div>

        </div>

    </div>

</section>





<?php include('include/footer.php') ?>
