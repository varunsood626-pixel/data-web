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



    .team-img {

        width: 60px;

        height: 60px;

        object-fit: cover;

        border-radius: 8px;

    }



    .edit {

        background-color: #0a5cab;

        color: white;

        border: 1px solid #0a5cab;

        transition: 0.5s;

    }



    .edit:hover {

        border: 1px solid #0a5cab;

        background-color: #fff;

        color: #0a5cab;

    }



    span.badge {

        padding: 8px 10px;

    }

</style>



<?php

// Group members by department

$grouped = [];

if (!empty($members)) {

    foreach ($members as $member) {

        $grouped[$member['department']][] = $member;

    }

}

?>



<div class="container mt-4">

    <div class="card">

        <h4>All Team Members</h4>

        <a href="<?= site_url('team/create') ?>" class="btn btn-custom mb-3">+ Add New</a>



        <?php if (!empty($grouped)): ?>

            <!-- Nav Tabs -->

            <ul class="nav nav-tabs mb-3" id="deptTabs" role="tablist">

                <?php $i = 0; foreach ($grouped as $department => $membersList): ?>

                    <li class="nav-item" role="presentation">

                        <button class="nav-link <?= $i === 0 ? 'active' : '' ?>"

                                id="tab-<?= $i ?>"

                                data-bs-toggle="tab"

                                data-bs-target="#content-<?= $i ?>"

                                type="button"

                                role="tab"

                                aria-controls="content-<?= $i ?>"

                                aria-selected="<?= $i === 0 ? 'true' : 'false' ?>">

                            <?= htmlspecialchars($department, ENT_QUOTES, 'UTF-8') ?>

                        </button>

                    </li>

                <?php $i++; endforeach; ?>

            </ul>



            <!-- Tab Content -->

            <div class="tab-content" id="deptTabContent">

                <?php $i = 0; foreach ($grouped as $department => $membersList): ?>

                    <div class="tab-pane fade <?= $i === 0 ? 'show active' : '' ?>" id="content-<?= $i ?>" role="tabpanel" aria-labelledby="tab-<?= $i ?>">

                        <div class="table-responsive">

                            <table class="table table-bordered table-striped align-middle">

                                <thead>

                                    <tr>

                                        <th>ID</th>

                                        <th>Photo</th>

                                        <th>Name</th>

                                        <th>Designation</th>

                                        <th>Qualifications</th>

                                        <th>Created At</th>

                                        <th>Status</th>

                                        <th>Actions</th>

                                    </tr>

                                </thead>

                                <tbody>

                                    <?php foreach ($membersList as $row): ?>

                                        <tr>

                                            <td><?= $row['id'] ?></td>

                                            <td>

                                                <?php if ($row['image']): ?>

                                                    <img src="<?= base_url('uploads/team/' . $row['image']) ?>" class="team-img" alt="<?= htmlspecialchars($row['name'], ENT_QUOTES, 'UTF-8') ?>">

                                                <?php else: ?>

                                                    <span class="text-muted">No Image</span>

                                                <?php endif; ?>

                                            </td>

                                            <td><?= htmlspecialchars($row['name'], ENT_QUOTES, 'UTF-8') ?></td>

                                            <td><?= htmlspecialchars($row['designation'], ENT_QUOTES, 'UTF-8') ?></td>

                                            <td><?= htmlspecialchars($row['qualification'], ENT_QUOTES, 'UTF-8') ?></td>

                                            <td><?= date('d M Y', strtotime($row['created_at'])) ?></td>

                                            <td>

                                                <span class="badge bg-<?= $row['active'] ? 'success' : 'secondary' ?>">

                                                    <?= $row['active'] ? 'Active' : 'Inactive' ?>

                                                </span>

                                            </td>

                                            <td>

                                                <a href="<?= site_url('team/edit/' . $row['id']) ?>" class="btn edit btn-sm btn-primary">Edit</a>

                                                <a href="<?= site_url('team/delete/' . $row['id']) ?>" onclick="return confirm('Delete this record?')" class="btn btn-sm btn-danger">Delete</a>

                                            </td>

                                        </tr>

                                    <?php endforeach; ?>

                                </tbody>

                            </table>

                        </div>

                    </div>

                <?php $i++; endforeach; ?>

            </div>

        <?php else: ?>

            <p class="text-center">No team members found.</p>

        <?php endif; ?>

    </div>

</div>



<!-- Bootstrap 5 JS (required for tabs) -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

