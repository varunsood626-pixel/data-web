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
                <h4 class="mb-3">Edit Event</h4>
                <form method="post" action="<?= base_url('event/edit/' . $event['id']) ?>">
                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" name="title" class="form-control" value="<?= $event['title'] ?>" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Short Title</label>
                        <input type="text" name="shorttitle" class="form-control" value="<?= $event['shorttitle'] ?>" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Link</label>
                        <textarea name="link" class="form-control" rows="4" required><?= $event['link'] ?></textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Active Status</label>
                        <select name="active" class="form-control" required>
                            <option value="1" <?= $event['active'] ? 'selected' : '' ?>>Active</option>
                            <option value="0" <?= !$event['active'] ? 'selected' : '' ?>>Inactive</option>
                        </select>
                    </div>

                    <button type="submit" class="btn">Update</button>
                    <a href="<?= site_url('event') ?>" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
