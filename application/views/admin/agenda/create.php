<div class="row mb-3">
    <div class="col-md-4">
    <form method="POST" action="<?= base_url('admin/Pengumuman/store') ?>" enctype="multipart/form-data">  
        <div class="card">
            <div class="card-header">
                <a href="<?= base_url('admin/Pengumuman') ?>" class="btn btn-danger btn-sm">
                    <i class="fas fa-window-close fa-fw"></i> BATALKAN
                </a>
            </div>
            <div class="card-body">

                <div class="form-group">
                    <label for="n">Judul Pengumuman</label>
                    <input required id="n" name="pengumuman_nama" placeholder="Judul pengumuman" class="form-control">
                    <?= form_error('pengumuman_nama','<small class="text-danger">','</small>') ?>
                </div>

                <div class="form-group">
                    <label for="gambar">Upload Gambar (Opsional)</label>
                    <input type="file" name="pengumuman_gambar" class="form-control-file" accept="image/*">
                    <small class="text-muted">File maks 2MB, format jpg/jpeg/png</small>
                    <?= form_error('pengumuman_gambar','<small class="text-danger">','</small>') ?>
                </div>

            </div>
        </div>
    </div>

    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Deskripsi Pengumuman</div>
            <div class="card-body">
                <div class="form-group">
                    <textarea required id="ckeditor" name="pengumuman_deskripsi" placeholder="Deskripsi pengumuman" class="form-control"></textarea>
                    <?= form_error('pengumuman_deskripsi','<small class="text-danger">','</small>') ?>
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-danger col-md-4 mt-2">
            <i class="fa fa-paper-plane"></i> KIRIM
        </button>
    </form>
    </div>
</div>
