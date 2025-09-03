<?php if ($this->session->flashdata('success')): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?= $this->session->flashdata('success') ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>  
    </div>
<?php endif ?>

<div class="card shadow-lg border-0 rounded-lg mb-4">
    <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
        <h5 class="mb-0"><i class="fas fa-users mr-2"></i> Manajemen User</h5>
        <a href="<?= base_url('admin/User/create') ?>" class="btn btn-light btn-sm shadow-sm">
            <i class="fas fa-plus fa-fw"></i> Tambah User
        </a>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table id="dataTable" class="table table-striped table-hover table-bordered">
                <thead class="thead-light text-center">
                    <tr>
                        <th width="5%">No</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th width="15%">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1; foreach ($users as $row): ?>
                        <tr>
                            <td class="text-center"><?= $no++ ?></td>
                            <td><?= $row['username'] ?></td>
                            <td><?= $row['email'] ?></td>
                            <td class="text-center">
                                <a href="<?= base_url('admin/User/edit/').$row['id_user'] ?>" class="btn btn-sm btn-success shadow-sm" title="Edit">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="<?= base_url('admin/User/delete/').$row['id_user'] ?>" class="btn btn-sm btn-danger shadow-sm" onclick="return confirm('Yakin ingin hapus user ini?')" title="Delete">
                                    <i class="fas fa-trash-alt"></i>
                                </a>
                            </td>
                        </tr>  
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <hr class="my-3">
        <a onclick="return confirm('Yakin ingin mengosongkan semua data user?')" 
           href="<?= base_url('admin/User/truncate') ?>" 
           class="btn btn-danger shadow-sm">
           <i class="fas fa-trash fa-fw"></i> Kosongkan Semua Data
        </a>
    </div>
</div>
