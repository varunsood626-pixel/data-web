<style>
    .card {
        box-shadow: 0 3px 15px rgba(0, 0, 0, 0.125), 0 3px 15px rgba(0, 0, 0, 0.2);
        padding: 25px;
        border-radius: 10px;
        background-color: #fff;
    }

    .card h4 {
        color: #0a5cab;
        font-weight: 600;
        margin-bottom: 25px;
    }

    .form-label {
        font-weight: 500;
        margin-top: 10px;
    }

    .form-control,
    .form-select {
        border-radius: 5px;
    }

    .btn-custom, .btn-custom:hover {
        background-color: #0a5cab;
        color: white;
        border: 1px solid #0a5cab;
        padding: 6px 12px;
        border-radius: 4px;
    }

    .img-preview {
        width: 80px;
        margin-top: 10px;
        border-radius: 6px;
        box-shadow: 0 2px 6px rgba(0,0,0,0.2);
    }
</style>

<div class="container mt-4">
    <div class="card">
        <h4><?= isset($member) ? 'Edit' : 'Add' ?> Team Member</h4>

        <form method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label class="form-label">Name:</label>
                <input type="text" name="name" value="<?= isset($member) ? $member['name'] : '' ?>" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Designation:</label>
                <input type="text" name="designation" value="<?= isset($member) ? $member['designation'] : '' ?>" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Department:</label>
                <select name="department" class="form-select" required>
                    <option value="Corporate Team" <?= isset($member) && $member['department'] == 'Corporate Team' ? 'selected' : '' ?>>Corporate Team</option>
                    <option value="Core Research Team" <?= isset($member) && $member['department'] == 'Core Research Team' ? 'selected' : '' ?>>Core Research Team</option>
                    <option value="India" <?= isset($member) && $member['department'] == 'India' ? 'selected' : '' ?>>India</option>
                    <option value="International" <?= isset($member) && $member['department'] == 'International' ? 'selected' : '' ?>>International</option>
                    <option value="Lab and Medical Affairs" <?= isset($member) && $member['department'] == 'Lab and Medical Affairs' ? 'selected' : '' ?>>Lab and Medical Affairs</option>
                    <option value="Advisors" <?= isset($member) && $member['department'] == 'Advisors' ? 'selected' : '' ?>>Advisors</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Qualification:</label>
                <textarea name="qualification" class="form-control"><?= isset($member) ? $member['qualification'] : '' ?></textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Image:</label>
                <input type="file" name="image" class="form-control">
                <?php if (isset($member) && $member['image']): ?>
                    <img src="<?= base_url('uploads/team/'.$member['image']) ?>" class="img-preview" alt="Preview">
                <?php endif; ?>
            </div>

            <div class="mb-3">
                <label class="form-label">Active:</label>
                <select name="active" class="form-select">
                    <option value="1" <?= isset($member) && $member['active'] == 1 ? 'selected' : '' ?>>Yes</option>
                    <option value="0" <?= isset($member) && $member['active'] == 0 ? 'selected' : '' ?>>No</option>
                </select>
            </div>

            <button type="submit" class="btn btn-custom mt-3">Save</button>
            <a href="<?= site_url('team') ?>" class="btn btn-custom mt-3">Cancel</a>
        </form>
    </div>
</div>
