<?php if ($this->session->flashdata('success')): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?= $this->session->flashdata('success') ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>  
    </div>
<?php endif ?>

<div class="row">

    <!-- Card Profil -->
    <div class="col-lg-6 mb-4">
        <div class="card shadow-lg border-0 rounded-lg">
            <div class="card-header bg-primary text-white font-weight-bold">
                <i class="fas fa-user-circle mr-2"></i> Profil Anda
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" readonly value="<?= user()->username ?>" class="form-control bg-light">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" readonly value="<?= user()->email ?>" class="form-control bg-light">
                </div>
            </div>
        </div>
    </div>

    <!-- Card Edit Profil -->
    <div class="col-lg-6 mb-4">
        <div class="card shadow-lg border-0 rounded-lg">
            <div class="card-header bg-success text-white font-weight-bold">
                <i class="fas fa-edit mr-2"></i> Edit Profil
            </div>
            <div class="card-body">
                <form method="POST" action="<?= base_url('admin/Profile/update') ?>">
                    <div class="form-group">
                        <label for="username">Username Baru</label>
                        <input type="text" name="username" value="<?= user()->username ?>" id="username" class="form-control">
                    </div>
                    <div class="form-group text-right">
                        <button type="submit" class="btn btn-success btn-lg shadow-sm">
                            <i class="fas fa-save fa-fw"></i> Simpan Perubahan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>   

</div>
