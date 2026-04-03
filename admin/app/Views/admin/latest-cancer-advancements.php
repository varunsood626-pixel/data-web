<style>
    .card {
        box-shadow: 0 3px 15px rgba(10, 92, 171, 0.125), 0 3px 15px rgba(10, 92, 171, 0.2);
        padding: 15px;
        border-radius: 8px;
        background-color: #fff;
    }
    .form-label {
        font-size: 20px;
        color: #0a5cab;
    }
    .form-control {
        border: 1px #0a5cab solid;
    }
    .btn {
        width: 80px;
        padding: 5px;
        background: #0a5cab;
        border: 1px #0a5cab solid;
        color: white;
        text-decoration: none;
        display: inline-block;
        text-align: center;
        border-radius: 4px;
        font-weight: 500;
    }
    .btn:hover {
        background: #0a5cab;
        border: 1px #0a5cab solid;
        color: white;
    }
   

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 15px;
    }
    th, td {
        border: 1px solid #0a5cab;
        padding: 10px;
        text-align: left;
    }
    th {
        background-color: #0a5cab;
        color: white;
    }
    a.action-link {
        margin-right: 10px;
        color: #3b9ce6;
        font-weight: 600;
        text-decoration: none;
    }
    a.action-link:hover {
        text-decoration: underline;
        color: #318bcc;
    }
    h1 {
        color: #0a5cab;
        margin-bottom: 15px;
    }
    
     .btn-custom {
            background-color: #0a5cab;
            border: 1px solid #0a5cab;
            padding: 6px 12px;
            border-radius: 4px;
            color: #fff;
            transition: 0.5s;
                text-decoration: none;
        }
    .btn-custom:hover, .btn-custom:focus {
        background-color: #fff;
        border: 1px solid #0a5cab;
        color: #0a5cab;
    }
    a.btn-danger {
        background: #dc3545;
        padding: 7px 10px;
        border-radius: 3px;
        color: #fff;
        text-decoration: none;
    }
    
</style>

<div class="container">
    <div class="row mt-4">
        <div class="col-sm-12 mb-4">
            <h1>Latest Cancer Advancements</h1>
        <a href="<?= base_url('letest/create') ?>" class="btn">Add New</a>
        </div>
        

        <div class="card">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Active</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($letests as $row): ?>
                    <tr>
                        <td><?= htmlspecialchars($row['id']) ?></td>
                        <td><?= htmlspecialchars($row['title']) ?></td>
                        <td><?= $row['active'] ? 'Active' : 'Inactive' ?></td>
                        <td>
                            <a href="<?= base_url('letest/edit/'.$row['id']) ?>" class="btn-custom">Edit</a>
                            <a href="<?= base_url('letest/delete/'.$row['id']) ?>" onclick="return confirm('Delete this?')" class="btn-danger">Delete</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                    <?php if(empty($letests)): ?>
                    <tr>
                        <td colspan="4" style="text-align:center;">No records found.</td>
                    </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
