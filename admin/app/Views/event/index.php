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
    .btn-custom{
        margin-right:5px;
    }
    .btn-custom{
        background-color: #0a5cab;
        border: 1px solid #0a5cab;
        padding: 6px 12px;
        border-radius: 4px;
        color: #fff;
            transition: 0.5s;
    }
    
    .btn-custom:hover, .btn-custom:focus{
        background-color: #fff;
        border: 1px solid #0a5cab;
        color:#0a5cab;
    }

    .table th {
        background-color: #f0f8ff;
        color: #0a5cab;
    }

    /*.btn-sm {*/
    /*    padding: 3px 8px;*/
    /*    font-size: 14px;*/
    /*}*/
</style>

<div class="container mt-4">
    <div class="card">
        <h4>All Events</h4>
        <a href="<?= site_url('event/create') ?>" class="btn btn-custom mb-3">+ Add New</a>

        <div class="table-responsive">
            <table class="table table-bordered table-striped align-middle">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Short Title</th>
                        <th>Link</th>
                        <th>Created Date</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($records as $row): ?>
                        <tr>
                            <td><?= $row['id'] ?></td>
                            <td><?= $row['title'] ?></td>
                            <td><?= $row['shorttitle'] ?></td>
                            <td><?= $row['link'] ?></td>
                            <td><?= $row['createdDate'] ?></td>
                            <td>
                                <span class="badge bg-<?= $row['active'] ? 'success' : 'secondary' ?>">
                                    <?= $row['active'] ? 'Active' : 'Inactive' ?>
                                </span>
                            </td>
                            <td class="d-flex">
                                <a href="<?= site_url('event/edit/'.$row['id']) ?>" class="btn btn-sm btn-custom btn-primary">Edit</a>
                                <a href="<?= site_url('event/delete/'.$row['id']) ?>" onclick="return confirm('Delete this record?')" class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    <?php if (empty($records)): ?>
                        <tr>
                            <td colspan="7" class="text-center">No records found.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
