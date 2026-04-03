<?php
include('include/header.php');
require_once 'db.php';
$conn = connect_db();
$EasyCheck = select_where($conn, 'faqs', 'category', '1');
$trublood = select_where($conn, 'faqs', 'category', '2');
$exacta = select_where($conn, 'faqs', 'category', '3');
$Pinaka = select_where($conn, 'faqs', 'category', '4');
$CellDx = select_where($conn, 'faqs', 'category', '5');
$Chemo_Scale = select_where($conn, 'faqs', 'category', '6');
$Cancertrack = select_where($conn, 'faqs', 'category', '7');
$Target_MRD = select_where($conn, 'faqs', 'category', '8');
?>


<section class="faq">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item"><button class="nav-link active" id="easycheck-tab" data-bs-toggle="tab" data-bs-target="#easycheck" type="button" role="tab">EasyCheck360<sup>®</sup></button></li>
          <li class="nav-item"><button class="nav-link" id="trublood-tab" data-bs-toggle="tab" data-bs-target="#trublood" type="button" role="tab">Trublood<sup>™</sup></button></li>
          <li class="nav-item"><button class="nav-link" id="exacta-tab" data-bs-toggle="tab" data-bs-target="#exacta" type="button" role="tab">Exacta<sup>™</sup></button></li>
          <li class="nav-item"><button class="nav-link" id="pinaka-tab" data-bs-toggle="tab" data-bs-target="#pinaka" type="button" role="tab">Pinaka<sup>™</sup></button></li>
          <li class="nav-item"><button class="nav-link" id="celldx-tab" data-bs-toggle="tab" data-bs-target="#celldx" type="button" role="tab">Celldx<sup>™</sup></button></li>
          <li class="nav-item"><button class="nav-link" id="chemo-tab" data-bs-toggle="tab" data-bs-target="#chemo" type="button" role="tab">Chemoscale<sup>™</sup></button></li>
          <li class="nav-item"><button class="nav-link" id="cancertrack-tab" data-bs-toggle="tab" data-bs-target="#cancertrack" type="button" role="tab">Cancertrack<sup>™</sup></button></li>
          <li class="nav-item"><button class="nav-link" id="targetmrd-tab" data-bs-toggle="tab" data-bs-target="#targetmrd" type="button" role="tab">Target-MRD<sup>™</sup></button></li>
        </ul>

        <div class="tab-content pt-4" id="myTabContent">

          <!-- EasyCheck Tab -->
          <div class="tab-pane fade show active" id="easycheck" role="tabpanel">
            <div class="accordion" id="accordionEasyCheck">
              <?php foreach($EasyCheck as $value): ?>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="heading-easycheck<?= $value['id']; ?>">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-easycheck<?= $value['id']; ?>" aria-expanded="false" aria-controls="collapse-easycheck<?= $value['id']; ?>">
                      <?= $value['title']; ?>
                    </button>
                  </h2>
                  <div id="collapse-easycheck<?= $value['id']; ?>" class="accordion-collapse collapse" aria-labelledby="heading-easycheck<?= $value['id']; ?>" data-bs-parent="#accordionEasyCheck">
                    <div class="accordion-body"><?= $value['description']; ?></div>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
          </div>

          <!-- Trublood Tab -->
          <div class="tab-pane fade" id="trublood" role="tabpanel">
            <div class="accordion" id="accordionTrublood">
              <?php foreach($trublood as $value): ?>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="heading-trublood<?= $value['id']; ?>">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-trublood<?= $value['id']; ?>" aria-expanded="false" aria-controls="collapse-trublood<?= $value['id']; ?>">
                      <?= $value['title']; ?>
                    </button>
                  </h2>
                  <div id="collapse-trublood<?= $value['id']; ?>" class="accordion-collapse collapse" aria-labelledby="heading-trublood<?= $value['id']; ?>" data-bs-parent="#accordionTrublood">
                    <div class="accordion-body"><?= $value['description']; ?></div>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
          </div>

          <!-- Exacta Tab -->
          <div class="tab-pane fade" id="exacta" role="tabpanel">
            <div class="accordion" id="accordionExacta">
              <?php foreach($exacta as $value): ?>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="heading-exacta<?= $value['id']; ?>">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-exacta<?= $value['id']; ?>" aria-expanded="false" aria-controls="collapse-exacta<?= $value['id']; ?>">
                      <?= $value['title']; ?>
                    </button>
                  </h2>
                  <div id="collapse-exacta<?= $value['id']; ?>" class="accordion-collapse collapse" aria-labelledby="heading-exacta<?= $value['id']; ?>" data-bs-parent="#accordionExacta">
                    <div class="accordion-body"><?= $value['description']; ?></div>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
          </div>

          <!-- Pinaka Tab -->
          <div class="tab-pane fade" id="pinaka" role="tabpanel">
            <div class="accordion" id="accordionPinaka">
              <?php foreach($Pinaka as $value): ?>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="heading-pinaka<?= $value['id']; ?>">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-pinaka<?= $value['id']; ?>" aria-expanded="false" aria-controls="collapse-pinaka<?= $value['id']; ?>">
                      <?= $value['title']; ?>
                    </button>
                  </h2>
                  <div id="collapse-pinaka<?= $value['id']; ?>" class="accordion-collapse collapse" aria-labelledby="heading-pinaka<?= $value['id']; ?>" data-bs-parent="#accordionPinaka">
                    <div class="accordion-body"><?= $value['description']; ?></div>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
          </div>

          <!-- CellDx Tab -->
          <div class="tab-pane fade" id="celldx" role="tabpanel">
            <div class="accordion" id="accordionCellDx">
              <?php foreach($CellDx as $value): ?>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="heading-celldx<?= $value['id']; ?>">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-celldx<?= $value['id']; ?>" aria-expanded="false" aria-controls="collapse-celldx<?= $value['id']; ?>">
                      <?= $value['title']; ?>
                    </button>
                  </h2>
                  <div id="collapse-celldx<?= $value['id']; ?>" class="accordion-collapse collapse" aria-labelledby="heading-celldx<?= $value['id']; ?>" data-bs-parent="#accordionCellDx">
                    <div class="accordion-body"><?= $value['description']; ?></div>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
          </div>

          <!-- Chemo Tab -->
          <div class="tab-pane fade" id="chemo" role="tabpanel">
            <div class="accordion" id="accordionChemo">
              <?php foreach($Chemo_Scale as $value): ?>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="heading-chemo<?= $value['id']; ?>">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-chemo<?= $value['id']; ?>" aria-expanded="false" aria-controls="collapse-chemo<?= $value['id']; ?>">
                      <?= $value['title']; ?>
                    </button>
                  </h2>
                  <div id="collapse-chemo<?= $value['id']; ?>" class="accordion-collapse collapse" aria-labelledby="heading-chemo<?= $value['id']; ?>" data-bs-parent="#accordionChemo">
                    <div class="accordion-body"><?= $value['description']; ?></div>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
          </div>

          <!-- Cancertrack Tab -->
          <div class="tab-pane fade" id="cancertrack" role="tabpanel">
            <div class="accordion" id="accordionCancertrack">
              <?php foreach($Cancertrack as $value): ?>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="heading-cancertrack<?= $value['id']; ?>">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-cancertrack<?= $value['id']; ?>" aria-expanded="false" aria-controls="collapse-cancertrack<?= $value['id']; ?>">
                      <?= $value['title']; ?>
                    </button>
                  </h2>
                  <div id="collapse-cancertrack<?= $value['id']; ?>" class="accordion-collapse collapse" aria-labelledby="heading-cancertrack<?= $value['id']; ?>" data-bs-parent="#accordionCancertrack">
                    <div class="accordion-body"><?= $value['description']; ?></div>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
          </div>

          <!-- Target MRD Tab -->
          <div class="tab-pane fade" id="targetmrd" role="tabpanel">
            <div class="accordion" id="accordionTargetMRD">
              <?php foreach($Target_MRD as $value): ?>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="heading-targetmrd<?= $value['id']; ?>">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-targetmrd<?= $value['id']; ?>" aria-expanded="false" aria-controls="collapse-targetmrd<?= $value['id']; ?>">
                      <?= $value['title']; ?>
                    </button>
                  </h2>
                  <div id="collapse-targetmrd<?= $value['id']; ?>" class="accordion-collapse collapse" aria-labelledby="heading-targetmrd<?= $value['id']; ?>" data-bs-parent="#accordionTargetMRD">
                    <div class="accordion-body"><?= $value['description']; ?></div>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>

<?php include('include/footer.php'); ?>
