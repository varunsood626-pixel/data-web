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
<div class="container mt-4">
    <div class="card">
        <h2 class="mb-4">Edit Publication</h2>
        <form method="post" action="<?= base_url('publications/update/' . $publication->id) ?>">

            <div class="mb-3">
                <label class="form-label">Title <span class="text-danger">*</span></label>
                <input type="text" name="title" class="form-control" value="<?= htmlspecialchars($publication->title) ?>" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Published by</label>
                <textarea name="description" class="form-control" rows="4"><?= htmlspecialchars($publication->description) ?></textarea>
            </div>
            
             <div class="mb-3">
                        <label class="form-label">Publish On</label>
                        <input type="text" name="publishon" class="form-control" value="<?= $publication->publishon ?>" required>
                    </div>

            <div class="mb-3">
                <label class="form-label">Link</label>
                <input type="url" name="link" class="form-control" value="<?= htmlspecialchars($publication->link) ?>">
            </div>

            <div class="mb-3">
                <label class="form-label">Category</label>
                <select name="category" class="form-control">
                    <option value="screening" <?= $publication->category == 'screening' ? 'selected' : '' ?>>Screening</option>
                    <option value="diagnosis" <?= $publication->category == 'diagnosis' ? 'selected' : '' ?>>Diagnosis</option>
                    <option value="therapy_guidance" <?= $publication->category == 'therapy_guidance' ? 'selected' : '' ?>>Therapy Guidance</option>
                    <option value="monitoring" <?= $publication->category == 'monitoring' ? 'selected' : '' ?>>Monitoring</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Status</label>
                <select name="active" class="form-control">
                    <option value="1" <?= $publication->active == 1 ? 'selected' : '' ?>>Active</option>
                    <option value="0" <?= $publication->active == 0 ? 'selected' : '' ?>>Inactive</option>
                </select>
            </div>

            <button type="submit" class="btn btn-custom">Update</button>
            <a href="<?= base_url('publications') ?>" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>

