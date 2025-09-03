<div class="row">
  <div class="col-lg">
    <div class="card">
      <div class="card-header">
        <a href="<?= base_url('admin/Pengumuman') ?>" class="btn btn-danger btn-sm">
          <i class="fas fa-window-close fa-fw"></i> BATALKAN
        </a>
      </div>
      <div class="card-body">
        <form method="POST" action="<?= base_url('admin/Pengumuman/store') ?>" enctype="multipart/form-data">
          <div class="row">
            <div class="col-lg-8">
              <div class="form-group">
                <label for="deskripsi">Isi Pengumuman</label>
                <textarea required="" id="ckeditor" name="pengumuman_deskripsi" class="form-control" rows="10"></textarea>
              </div>
            </div>  
            <div class="col-lg-4">
              <div class="form-group">
                <label for="judul">Judul Pengumuman</label>
                <input required name="pengumuman_nama" id="judul" class="form-control" placeholder="Masukkan judul pengumuman">
              </div>

              <div class="form-group">
                <label for="gambar">Gambar Pengumuman</label>
                <div class="custom-file mb-3">
                  <input type="file" name="pengumuman_gambar" class="custom-file-input" id="customFile">
                  <label class="custom-file-label" for="customFile">Pilih gambar</label>
                </div>
              </div>

              <div class="form-group">
                <button type="submit" class="btn btn-primary col-md-4">
                  <i class="fa fa-paper-plane"></i> SIMPAN
                </button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
