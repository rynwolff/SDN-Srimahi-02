<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Filter Laporan Pendaftaran Ekskul</h1>

    <?php if ($this->session->flashdata('pesan_error')): ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <?= $this->session->flashdata('pesan_error'); ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif; ?>
    <?php if ($this->session->flashdata('pesan_sukses')): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?= $this->session->flashdata('pesan_sukses'); ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif; ?>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Pilih Rentang Tanggal Pendaftaran</h6>
        </div>
        <div class="card-body">
            <form action="<?= base_url('admin/pendaftaran_admin/invoice_filter') ?>" method="post">
                <div class="form-group mb-3">
                    <label for="tgl_mulai">Tanggal Mulai:</label>
                    <input type="date" name="tgl_mulai" id="tgl_mulai" class="form-control" value="<?= set_value('tgl_mulai'); ?>" required>
                    <?= form_error('tgl_mulai', '<div class="text-danger small mt-2">', '</div>'); ?>
                </div>
                <div class="form-group mb-4">
                    <label for="tgl_selesai">Tanggal Selesai:</label>
                    <input type="date" name="tgl_selesai" id="tgl_selesai" class="form-control" value="<?= set_value('tgl_selesai'); ?>" required>
                    <?= form_error('tgl_selesai', '<div class="text-danger small mt-2">', '</div>'); ?>
                </div>
                <button type="submit" class="btn btn-primary">Lihat Laporan</button>
            </form>
        </div>
    </div>
</div>
