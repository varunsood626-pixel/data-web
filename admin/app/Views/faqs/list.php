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
    .btn-custom{
        margin-right: 5px;
    }
    
    .btn {
        padding: 6px 12px;
    }
    
    .btn-custom{
        background-color: #0a5cab;
        border: 1px solid #0a5cab;
        border-radius: 4px;
        color: #fff;
            transition: 0.5s;
    }
    
    .btn-custom:hover, .btn-custom:focus{
        background-color: #fff;
        border: 1px solid #0a5cab;
        color:#0a5cab;
    }

    /*.btn-sm {*/
    /*    padding: 5px 10px;*/
    /*    font-size: 13px;*/
    /*    border-radius: 4px;*/
    /*}*/

    

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

<div class="container mt-4">
    <div class="card">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2>All FAQs</h2>
            <a href="<?= site_url('faqs/create') ?>" class="btn btn-success">Add New</a>
        </div>

        <?php
       $categories = [
            1 => 'EasyCheck360®',
            2 => 'Trublood®',
            3 => 'Exacta®',
            4 => 'Pinaka™',
            5 => 'CellDx™',
            6 => 'Chemo-Scale™',
            7 => 'Cancertrack™',
            8 => 'Target-MRD™'
        ];
        ?>

        <!-- Tabs -->
        <ul class="nav nav-tabs" id="faqTab" role="tablist">
            <?php foreach ($categories as $key => $label): ?>
                <li class="nav-item" role="presentation">
                    <button class="nav-link <?= ($key === 1) ? 'active' : '' ?>" id="tab-<?= $key ?>-tab"
                            data-bs-toggle="tab" data-bs-target="#tab-<?= $key ?>" type="button" role="tab">
                        <?= $label ?>
                    </button>
                </li>
            <?php endforeach; ?>
        </ul>

        <!-- Tab Content -->
        <div class="tab-content pt-3" id="faqTabContent">
            <?php foreach ($categories as $key => $label): ?>
                <div class="tab-pane fade <?= ($key === 1) ? 'show active' : '' ?>" id="tab-<?= $key ?>" role="tabpanel">
                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Created</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($faqs as $row): ?>
                            <?php if ($row['category'] == $key): ?>
                                <tr>
                                    <td><?= $row['id'] ?></td>
                                    <td><?= $row['title'] ?></td>
                                    <td><?= $row['description'] ?></td>
                                    <td><?= $row['active'] ? 'Active' : 'Inactive' ?></td>
                                    <td><?= $row['datetime'] ?></td>
                                    <td class="d-flex">
                                        <a href="<?= site_url('faqs/edit/' . $row['id']) ?>" class="btn btn-sm btn-custom btn-primary">Edit</a>
                                        <a href="<?= site_url('faqs/delete/' . $row['id']) ?>" onclick="return confirm('Delete this FAQ?')" class="btn btn-sm btn-danger">Delete</a>
                                    </td>
                                </tr>
                            <?php endif; ?>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
