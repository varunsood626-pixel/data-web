<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header -->
  <section class="content-header">
    <div class="container-fluid">
      <h1>Footer Form Submissions</h1>
    </div>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="card shadow-sm">
        <div class="card-header bg-dark text-white">
          <h3 class="card-title">Leads / Contact Form Data</h3>
        </div>

        <div class="card-body table-responsive p-0">
          <table class="table table-hover table-bordered text-nowrap">
            <thead class="table-secondary">
              <tr>
                <th>#</th>
                <th>Full Name</th>
                
                
                <th>Email</th>
                <th>Phone</th>
            
                <th>Submitted At</th>
              </tr>
            </thead>
            <tbody>
              <?php
             

              foreach ($contact_us as $key => $contact): ?>
                <tr>
                  <td><?= $key + 1; ?></td>
                  <td><?= htmlspecialchars($contact['name']); ?></td>
                 
                  <td><?= $contact['email'] ?: '<span class="text-muted">N/A</span>'; ?></td>
                  <td><?= htmlspecialchars($contact['mobile']); ?></td>
                 
                  <td><?= date('d M Y, h:i A', strtotime($contact['submitted_at'])); ?></td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
    </div>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
