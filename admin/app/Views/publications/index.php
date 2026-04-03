<style>
    .card {
        box-shadow: 0 3px 15px rgba(0, 0, 0, 0.125), 0 3px 15px rgba(0, 0, 0, 0.2);
        padding: 20px;
        border-radius: 10px;
        background-color: #fff;
    }

    h2 {
        font-size: 24px;
        font-weight: 600;
        color: #0a5cab;
    }

    .btn-custom {
        background-color: #0a5cab;
        border: 1px solid #0a5cab;
        border-radius: 4px;
        color: #fff;
        transition: 0.5s;
        margin-right: 5px;
        padding: 6px 12px;
        text-decoration: none;
    }

    .btn-custom:hover,
    .btn-custom:focus {
        background-color: #fff;
        border: 1px solid #0a5cab;
        color: #0a5cab;
    }

    .btn-danger {
        padding: 6px 12px;
        color: white;
        background-color: red;
        border: 1px solid red;
        border-radius: 4px;
        text-decoration: none;
    }

    .btn-danger:hover {
        background-color: #d10000;
        border-color: #d10000;
    }

    .table {
        width: 100%;
        margin-top: 20px;
    }

    th {
        background-color: #0a5cab;
        color: white;
        text-align: center;
    }

    td {
        vertical-align: middle;
    }

    .nav-tabs .nav-link.active {
        background-color: #0a5cab;
        color: #fff;
    }

    .nav-tabs .nav-link {
        color: #0a5cab;
        font-weight: 500;
    }
</style>

<?php
$categories = [
    'screening' => 'Screening',
    'diagnosis' => 'Diagnosis',
    'therapy_guidance' => 'Therapy Guidance',
    'monitoring' => 'Monitoring'
];
?>

<div class="container mt-4">
    <div class="card">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2>All Publications</h2>
            <a href="<?= site_url('publications/create') ?>" class="btn-custom">Add New</a>
        </div>

        <!-- Tabs -->
        <ul class="nav nav-tabs" id="pubTab" role="tablist">
            <?php $i = 0; foreach ($categories as $key => $label): ?>
                <li class="nav-item" role="presentation">
                    <button class="nav-link <?= ($i === 0) ? 'active' : '' ?>" id="tab-<?= $i ?>-tab"
                            data-bs-toggle="tab" data-bs-target="#tab-<?= $i ?>" type="button" role="tab"
                            aria-controls="tab-<?= $i ?>" aria-selected="<?= ($i === 0) ? 'true' : 'false' ?>">
                        <?= $label ?>
                    </button>
                </li>
            <?php $i++; endforeach; ?>
        </ul>

        <!-- Tab Content -->
        <div class="tab-content pt-3" id="pubTabContent">
            <?php $i = 0; foreach ($categories as $key => $label): ?>
                <div class="tab-pane fade <?= ($i === 0) ? 'show active' : '' ?>" id="tab-<?= $i ?>" role="tabpanel" aria-labelledby="tab-<?= $i ?>-tab">
                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Title</th>
                            <th>Link</th>
                            <th>Status</th>
                            <th>Publish On</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $hasData = false;
                        foreach ($publications as $row):
                            if (strtolower($row->category) == $key):
                                $hasData = true;
                        ?>
                            <tr>
                                <td><?= htmlspecialchars($row->title) ?></td>
                                <td><a href="<?= htmlspecialchars($row->link) ?>" target="_blank">Read More</a></td>
                                <td><?= $row->active ? 'Active' : 'Inactive' ?></td>
                                <td><?= $row->publishon; ?></td>
                                <td class="d-flex">
                                    <a href="<?= site_url('publications/edit/' . $row->id) ?>" class="btn-custom btn-sm">Edit</a>
                                    <a href="<?= site_url('publications/delete/' . $row->id) ?>" class="btn-danger btn-sm" onclick="return confirm('Delete this publication?')">Delete</a>
                                </td>
                            </tr>
                        <?php
                            endif;
                        endforeach;
                        if (!$hasData): ?>
                            <tr>
                                <td colspan="5" class="text-center">No publications found in this category.</td>
                            </tr>
                        <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            <?php $i++; endforeach; ?>
        </div>
    </div>
</div>
