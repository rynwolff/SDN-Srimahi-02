<?php if ($this->session->flashdata('success')): ?>
  <div class="alert alert-success"><?= $this->session->flashdata('success') ?></div>
<?php endif; ?>

<div class="card">
  <div class="card-header">
    <a href="<?= base_url('admin/Pengumuman/create') ?>" class="btn btn-primary btn-sm">
      <i class="fas fa-plus fa-fw"></i> TAMBAH DATA
    </a>
  </div>

  <div class="card-body table-responsive">
    <table id="dataTable" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>No</th>
          <th>Judul Pengumuman</th>
          <th>Deskripsi</th>
          <th>Gambar</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php $no = 1; foreach ($pengumuman as $row): ?>
          <tr>
            <td><?= $no++ ?></td>
            <td><?= $row['pengumuman_nama'] ?></td>
            <td><?= word_limiter(strip_tags($row['pengumuman_deskripsi']), 10) ?></td>
            <td>
               <?php if (!empty($row['pengumuman_gambar'])): ?>
                  <img src="<?= base_url('assets/img/pengumuman/' . $row['pengumuman_gambar']) ?>" width="80" style="border-radius: 8px; object-fit: cover; height: 60px;">
                      <?php else: ?>
                  <span class="text-muted">-</span>
                <?php endif; ?>
            </td>

            <td>
              <a href="<?= base_url('admin/Pengumuman/edit/' . $row['id_pengumuman']) ?>" class="btn btn-primary btn-sm">
                <i class="fas fa-edit"></i>
              </a>
              <a href="<?= base_url('admin/Pengumuman/delete/' . $row['id_pengumuman']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau hapus?')">
                <i class="fas fa-trash"></i>
              </a>
            </td>
          </tr>  
        <?php endforeach; ?>
      </tbody>
    </table>

    <a onclick="return confirm('Yakin ingin mengosongkan semua data?')" href="<?= base_url('admin/Pengumuman/truncate') ?>" class="btn btn-danger">
      <i class="fas fa-trash-alt"></i> Kosongkan Data
    </a>
  </div>
</div>
