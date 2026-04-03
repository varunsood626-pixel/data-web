

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

 .btn-custom, .btn-custom:hover {
    background-color: #0a5cab;
    color: white;
    border: 1px solid #0a5cab;
    padding: 6px 12px;
    border-radius: 4px;
}


    .table th {
        background-color: #f0f8ff;
        color: #0a5cab;
    }

    .btn-sm {
        padding: 3px 8px;
        font-size: 14px;
    }
    .edit{
        background-color: #0a5cab;
        color: white;
        border: 1px solid #0a5cab;
        transition: 0.5s;
    } 
    .edit:hover{
        border: 1px solid #0a5cab;
        background-color: #fff;
        color: #0a5cab;
    }
    span.badge.bg-success {
        padding: 8px 10px;
    }
    a.link-url {
        color: #0a5cab;
    }

</style>

<div class="container mt-4">
    <div class="card">
        <h4>All Test Portfolio Items</h4>
        <a href="<?= site_url('Testportfolio/create') ?>" class="btn btn-custom mb-3">+ Add New</a>

        <div class="table-responsive">
            <table class="table table-bordered table-striped align-middle">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Product</th>
                        <th>Link</th>
                        <th>Status</th>
                        <th>Created At</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($records as $row): ?>
                        <tr>
                            <td><?= $row->id ?></td>
                            <td><?= $row->name ?></td>
                            <td><a href="<?= $row->link ?>" class="link-url" target="_blank"><?= $row->link ?></a></td>
                            <td>
                                <span class="badge bg-<?= $row->active ? 'success' : 'secondary' ?>">
                                    <?= $row->active ? 'Active' : 'Inactive' ?>
                                </span>
                            </td>
                            <td><?= $row->created_at ?></td>
                            <td>
                                <a href="<?= site_url('Testportfolio/edit/'.$row->id) ?>" class="btn btn-sm btn-primary edit">Edit</a>
                                <a href="<?= site_url('Testportfolio/delete/'.$row->id) ?>" onclick="return confirm('Delete this record?')" class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    <?php if (empty($records)): ?>
                        <tr>
                            <td colspan="6" class="text-center">No records found.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
