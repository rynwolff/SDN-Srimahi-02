<?php if ($this->session->flashdata('success')): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?= $this->session->flashdata('success') ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>  
    </div>
<?php endif ?>

<!-- Top Summary Cards -->
<div class="row">

    <!-- Pengguna -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-0 shadow-lg rounded-lg">
            <div class="card-body d-flex align-items-center justify-content-between">
                <div>
                    <h6 class="text-primary text-uppercase mb-1 font-weight-bold">Pengguna</h6>
                    <h3 class="font-weight-bold text-dark"><?= count_data('tbl_user') ?></h3>
                </div>
                <div class="text-right">
                    <i class="fas fa-users fa-3x text-primary opacity-25"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Artikel -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-0 shadow-lg rounded-lg">
            <div class="card-body d-flex align-items-center justify-content-between">
                <div>
                    <h6 class="text-success text-uppercase mb-1 font-weight-bold">Artikel</h6>
                    <h3 class="font-weight-bold text-dark"><?= count_data('tbl_blog') ?></h3>
                </div>
                <div class="text-right">
                    <i class="fas fa-list fa-3x text-success opacity-25"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Agenda -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-0 shadow-lg rounded-lg">
            <div class="card-body d-flex align-items-center justify-content-between">
                <div>
                    <h6 class="text-info text-uppercase mb-1 font-weight-bold">Agenda</h6>
                    <h3 class="font-weight-bold text-dark"><?= count_data('tbl_blog') ?></h3>
                </div>
                <div class="text-right">
                    <i class="fas fa-clipboard-list fa-3x text-info opacity-25"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Pengumuman -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-0 shadow-lg rounded-lg">
            <div class="card-body d-flex align-items-center justify-content-between">
                <div>
                    <h6 class="text-warning text-uppercase mb-1 font-weight-bold">Pengumuman</h6>
                    <h3 class="font-weight-bold text-dark"><?= count_data('tbl_pengumuman') ?></h3>
                </div>
                <div class="text-right">
                    <i class="fas fa-info fa-3x text-warning opacity-25"></i>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Log Activity Table -->
<div class="row mt-4">
    <div class="col-lg">
        <div class="card shadow-lg border-0 rounded-lg">
            <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Log Activity</h5>
                <a href="<?= base_url('admin/Dashboard/truncate_log_activity') ?>" 
                   onclick="return confirm('Yakin Hapus?')" 
                   class="btn btn-sm btn-danger shadow-sm">
                   <i class="fas fa-trash fa-fw"></i> Bersihkan Log
                </a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="dataTable" class="table table-striped table-hover table-bordered">
                      <thead class="thead-light">
                      <tr class="text-center">
                        <th>No</th>
                        <th>Activity</th>
                        <th>User</th>
                        <th>Waktu</th>
                      </tr>
                      </thead>
                      <tbody>
                        <?php $no=1; foreach (get_all_log_activity() as $row): ?>
                          <tr>
                            <td class="text-center"><?= $no++ ?></td>
                            <td><?= $row['log_activity_name'] ?></td>
                            <td><?= $row['log_activity_user'] ?></td>
                            <td class="text-center"><?= $row['created_at'] ?></td>
                          </tr>  
                        <?php endforeach; ?>
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>  
</div>
