<?php
include('include/header.php');
require_once 'db.php';
$conn = connect_db();
$trucheck = select_where($conn, 'faqs', 'category', '1');
$trublood = select_where($conn, 'faqs', 'category', '2');
$exacta = select_where($conn, 'faqs', 'category', '3');
$chemo = select_where($conn, 'faqs', 'category', '4');
$cancertrack = select_where($conn, 'faqs', 'category', '5');
?>

<section class="faq">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">

        <!-- Tabs -->
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <?php $i = 0; foreach ($categories as $id => $name): ?>
            <?php
              $slug = strtolower(str_replace(['®', '™', ' '], ['', '', ''], $name)); // Clean ID
            ?>
            <li class="nav-item">
              <button class="nav-link <?= $i === 0 ? 'active' : '' ?>" id="<?= $slug ?>-tab" data-bs-toggle="tab" data-bs-target="#<?= $slug ?>" type="button" role="tab">
                <?= $name ?>
              </button>
            </li>
          <?php $i++; endforeach; ?>
        </ul>

        <!-- Tab Content -->
        <div class="tab-content pt-4" id="myTabContent">
          <?php $i = 0; foreach ($categories as $id => $name): ?>
            <?php
              $slug = strtolower(str_replace(['®', '™', ' '], ['', '', ''], $name));
              $faqs = $faqData[$id] ?? [];
            ?>
            <div class="tab-pane fade <?= $i === 0 ? 'show active' : '' ?>" id="<?= $slug ?>" role="tabpanel">
              <div class="accordion" id="accordion-<?= $slug ?>">
                <?php if (!empty($faqs)): ?>
                  <?php foreach ($faqs as $faq): ?>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="heading-<?= $slug . $faq['id']; ?>">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-<?= $slug . $faq['id']; ?>" aria-expanded="false" aria-controls="collapse-<?= $slug . $faq['id']; ?>">
                          <?= htmlspecialchars($faq['title']) ?>
                        </button>
                      </h2>
                      <div id="collapse-<?= $slug . $faq['id']; ?>" class="accordion-collapse collapse" aria-labelledby="heading-<?= $slug . $faq['id']; ?>" data-bs-parent="#accordion-<?= $slug ?>">
                        <div class="accordion-body"><?= nl2br(htmlspecialchars($faq['description'])) ?></div>
                      </div>
                    </div>
                  <?php endforeach; ?>
                <?php else: ?>
                  <p>No FAQs available for <?= $name ?>.</p>
                <?php endif; ?>
              </div>
            </div>
          <?php $i++; endforeach; ?>
        </div>

      </div>
    </div>
  </div>
</section>


<?php include('include/footer.php'); ?>
