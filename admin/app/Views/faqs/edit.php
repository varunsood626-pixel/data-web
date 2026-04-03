<style>
    .card {
        box-shadow: 0 3px 15px rgba(0, 0, 0, 0.125), 0 3px 15px rgba(0, 0, 0, 0.2);
        padding: 20px;
        border-radius: 10px;
        background-color: #fff;
    }

    .form-label {
        font-size: 18px;
        color: #0a5cab;
        font-weight: 500;
    }

    .form-control {
        border: 1px solid #0a5cab;
    }

    .btn {
        width: 100px;
        padding: 6px;
        background: #3b9ce6;
        color: white;
        border: 1px solid #3b9ce6;
    }

    .btn:hover {
        background-color: #318bcc;
        border-color: #318bcc;
    }
</style>

<div class="container">
    <div class="row mt-4">
        <div class="col-sm-8 col-12">
            <div class="card">
                <h2 class="mb-4">Edit FAQ</h2>
                <form method="post">
                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" name="title" class="form-control" value="<?= $faq['title'] ?>" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea name="description" class="form-control" rows="4" required><?= $faq['description'] ?></textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Category</label>
                       <select name="category" class="form-control" required>
                          <option value="">Select Category</option>
                          <option value="1" <?= $faq['category'] == 1 ? 'selected' : '' ?>>EasyCheck360®</option>
                          <option value="2" <?= $faq['category'] == 2 ? 'selected' : '' ?>>Trublood®</option>
                          <option value="3" <?= $faq['category'] == 3 ? 'selected' : '' ?>>Exacta®</option>
                          <option value="4" <?= $faq['category'] == 4 ? 'selected' : '' ?>>Pinaka™</option>
                          <option value="5" <?= $faq['category'] == 5 ? 'selected' : '' ?>>CellDx™</option>
                          <option value="6" <?= $faq['category'] == 6 ? 'selected' : '' ?>>Chemo-Scale™</option>
                          <option value="7" <?= $faq['category'] == 7 ? 'selected' : '' ?>>Cancertrack™</option>
                          <option value="8" <?= $faq['category'] == 8 ? 'selected' : '' ?>>Target-MRD™</option>
                        </select>

                    </div>

                    <div class="mb-3">
                        <label class="form-label">Active</label>
                        <select name="active" class="form-control">
                            <option value="1" <?= $faq['active'] ? 'selected' : '' ?>>Active</option>
                            <option value="0" <?= !$faq['active'] ? 'selected' : '' ?>>Inactive</option>
                        </select>
                    </div>

                    <button type="submit" class="btn">Update</button>
                    <a href="<?= site_url('Faqs') ?>" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
