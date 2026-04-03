<style>
    .card {
        box-shadow: 0 3px 15px rgba(0, 0, 0, 0.125), 0 3px 15px rgba(0, 0, 0, 0.2);
        padding: 20px;
        border-radius: 10px;
        background-color: #fff;
    }

    .card h4 {
        color: #0a5cab;
        font-weight: 600;
        margin-bottom: 20px;
    }

    .btn-custom, .btn-custom:hover, .btn-custom:focus {
        background-color: #0a5cab;
        border: 1px solid #0a5cab;
        padding: 6px 12px;
        border-radius: 4px;
        color: #fff;
    }
    
</style>

<div class="container mt-4">
    <div class="card">
        <h4><?= isset($record) ? 'Edit' : 'Add' ?> Test Portfolio</h4>
        <form method="post">
            <div class="mb-3">
                <label>Name:</label>
                <input type="text" name="name" class="form-control" value="<?= isset($record) ? $record->name : '' ?>" required>
            </div>

            <div class="mb-3">
                <label>Slug (used in URL):</label>
                <input type="text" name="slug" class="form-control" value="<?= isset($record) ? $record->slug : '' ?>" required>
            </div>

            <div class="mb-3">
                <label>Description:</label>
                <textarea name="description" class="form-control" rows="4" required><?= isset($record) ? $record->description : '' ?></textarea>
            </div>

            <div class="mb-3">
                <label>Link:</label>
                <input type="text" name="link" class="form-control" value="<?= isset($record) ? $record->link : '' ?>" required>
            </div>

            <div class="mb-3">
                <label>Status:</label>
                <select name="active" class="form-control">
                    <option value="1" <?= isset($record) && $record->active == 1 ? 'selected' : '' ?>>Active</option>
                    <option value="0" <?= isset($record) && $record->active == 0 ? 'selected' : '' ?>>Inactive</option>
                </select>
            </div>

            <button type="submit" class="btn btn-custom">Save</button>
            <a href="<?= site_url('Testportfolio') ?>" class="btn btn-custom">Cancel</a>
        </form>
    </div>
</div>
