<style>
    .card {
        box-shadow: 0 3px 15px rgba(0, 0, 0, 0.125), 0 3px 15px rgba(0, 0, 0, 0.2);
        padding: 20px;
        border-radius: 10px;
        background-color: #fff;
    }

    .btn {
        padding: 6px 12px;
        background: #3b9ce6;
        color: white;
        border: 1px solid #3b9ce6;
        text-decoration: none;
        border-radius: 4px;
        font-size: 14px;
    }

    .btn:hover {
        background-color: #318bcc;
        border-color: #318bcc;
    }

    .table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    .table th, .table td {
        border: 1px solid #ddd;
        padding: 10px;
        text-align: left;
    }

    .table th {
        background-color: #f4f8fb;
        color: #0a5cab;
        font-weight: 600;
    }

    .action-links a {
        margin-right: 8px;
        color: #0a5cab;
        font-weight: 500;
        text-decoration: none;
    }

    .action-links a:hover {
        text-decoration: underline;
    }
</style>

<div class="container">
    <div class="row mt-4">
        <div class="col-12">
            <div class="card">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4>Meta Tags</h4>
                    <a href="<?= base_url('meta_tags/create') ?>" class="btn">Add New</a>
                </div>

                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <!--<th>Title</th>-->
                            <th>Page</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($meta_tags)): ?>
                            <?php foreach ($meta_tags as $tag): ?>
                                <tr>
                                    <td><?= $tag->id ?></td>
                                    <!--<td><?= $tag->title ?></td>-->
                                    <td><?= $tag->page ?></td>
                                    <td class="action-links">
                                        <a href="<?= base_url('meta_tags/edit/'.$tag->id) ?>">Edit</a>
                                        <a href="<?= base_url('meta_tags/delete/'.$tag->id) ?>" onclick="return confirm('Delete this?')">Delete</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr><td colspan="4">No meta tags found.</td></tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
