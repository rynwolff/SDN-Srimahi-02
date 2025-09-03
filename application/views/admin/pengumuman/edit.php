<div class="row">
  <div class="col-lg">
    <div class="card">
      <form method="POST" enctype="multipart/form-data" action="<?= base_url('admin/Pengumuman/update/') . $pengumuman['id_pengumuman'] ?>">
        <div class="card-header">
          <a href="<?= base_url('admin/Pengumuman') ?>" class="btn btn-danger btn-sm">
            <i class="fas fa-window-close fa-fw"></i> BATALKAN
          </a>
        </div>
        <div class="card-body">
          <div class="form-group">
            <label for="n">Judul Pengumuman</label>
            <input required id="n" name="pengumuman_nama" value="<?= $pengumuman['pengumuman_nama'] ?>" class="form-control">
            <?= form_error('pengumuman_nama', '<small class="text-danger">', '</small>') ?>
          </div>

          <div class="form-group">
            <label>Deskripsi Pengumuman</label>
            <textarea required id="ckeditor" name="pengumuman_deskripsi" class="form-control" rows="10"><?= $pengumuman['pengumuman_deskripsi'] ?></textarea>
            <?= form_error('pengumuman_deskripsi', '<small class="text-danger">', '</small>') ?>
          </div>

          <div class="form-group">
            <label>Gambar Pengumuman</label><br>
            <?php if (!empty($pengumuman['pengumuman_gambar'])): ?>
              <img src="<?= base_url('assets/img/pengumuman/' . $pengumuman['pengumuman_gambar']) ?>" alt="gambar" width="200" class="img-thumbnail mb-3">
            <?php else: ?>
              <p class="text-muted">Belum ada gambar</p>
            <?php endif; ?>
            <input type="file" name="pengumuman_gambar" class="form-control-file">
            <input type="hidden" name="gambar_lama" value="<?= $pengumuman['pengumuman_gambar'] ?>">
          </div>

          <div class="form-group">
            <button type="submit" class="btn btn-primary col-md-3">
              <i class="fa fa-paper-plane"></i> SIMPAN PERUBAHAN
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
