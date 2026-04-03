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
        <div class="col-sm-6 col-12">
            <div class="card">
                <form method="post" action="<?php echo base_url('letest/edit/'.$letest['id']); ?>" >
                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" name="title" class="form-control" value="<?= $letest['title'] ?>" required>
                    </div>
                     <div class="mb-3">
                        <label class="form-label">Line 2</label>
                        <input type="text" name="line_2" class="form-control" placeholder="Line 2" value="<?= $letest['line_2'] ?>" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Short Title</label>
                        <input type="text" name="shorttitle" class="form-control" value="<?= $letest['shorttitle'] ?>" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Date</label>
                        <input type="text" name="date" class="form-control" value="<?= $letest['date'] ?>" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Link</label>
                        <input type="text" name="link" class="form-control" value="<?= $letest['link'] ?>" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Active Status</label>
                        <select name="active" class="form-control" required>
                            <option value="1" <?= $letest['active'] ? 'selected' : '' ?>>Active</option>
                            <option value="0" <?= !$letest['active'] ? 'selected' : '' ?>>Inactive</option>
                        </select>
                    </div>

                    <button type="submit" class="btn">Update</button>
                    <a href="<?= site_url('dashboard/latest_cancer_advancements') ?>" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
