

<style>

    .card {

        box-shadow: 0 3px 15px rgba(var(--bs-body-color-rgb), 0.125), 0 3px 15px rgba(var(--bs-body-color-rgb), 0.2);

        padding: 15px;

    }

    .form-label {

        font-size: 20px;

        color: #0a5cab;

    }



    .form-control {

        border: 1px #0a5cab solid;

    }

    .btn {

        width: 80px;

        padding: 5px;

        background: #0a5cab;

        border: 1px #0a5cab solid;

    }

    .btn:hover {

        background-color: #0a5cab;

        border-color: 1px #0a5cab solid;

    }

    



    textarea.form-control {

    max-height: 150px;

    overflow-y: auto;

}

</style>





<?php

$currentSection = null;

echo '<div class="container">';



foreach ($pages as $value):



    // Check if we are entering a new section

    if ($currentSection !== $value['section_number']) {

        // Close previous section row if needed

        if ($currentSection !== null) {

            echo '</div>'; // close row

        }



        // Start new section

        $currentSection = $value['section_number'];

        echo '<h4 class="mt-4">Section ' . $currentSection . ' </h4>';

        echo '<div class="row">';

    }

?>



    <div class="col-md-4 col-12">

        <form 

            action="<?= base_url('Dashboard/update_page/whoweare'); ?>" 

            method="post" 

            <?= $value['type'] != 1 ? 'enctype="multipart/form-data"' : '' ?>

        >

            <div class="mb-4 card p-3 h-100 d-flex flex-column">

                <label class="form-label">

                    <?= ucfirst($value['section']) ?>

                </label>



                <input type="hidden" name="id" value="<?= $value['id']; ?>" />



                <?php if ($value['type'] == 1): ?>

                    <textarea class="form-control" name="content" rows="4"><?= htmlspecialchars($value['content']); ?></textarea>

                <?php else: ?>

                    <a href="<?= base_url('web-img/' . $value['content']); ?>" target="_blank">Click To View</a>

                    <input type="file" name="pagefile" required class="mt-2" />

                <?php endif; ?>



                <button type="submit" class="btn btn-primary mt-3">Update</button>

            </div>

        </form>

    </div>



<?php endforeach; ?>



<?php

// Close the last open section

echo '</div></div>';

?>



