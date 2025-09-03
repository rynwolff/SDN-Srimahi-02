<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>

  <!-- Flash Message -->
  <?php if ($this->session->flashdata('pesan_sukses')): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <?= $this->session->flashdata('pesan_sukses'); ?>
      <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
  <?php endif; ?>
  <?php if ($this->session->flashdata('pesan_error')): ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <?= $this->session->flashdata('pesan_error'); ?>
      <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
  <?php endif; ?>

  <!-- Card -->
  <div class="card shadow mb-4">
    <div class="card-header py-3 bg-primary d-flex justify-content-between align-items-center">
      <h6 class="m-0 font-weight-bold text-white">Riwayat Pendaftaran Ekstrakurikuler</h6>
      <?php if (!empty($history)): ?>
      <a href="<?= base_url('admin/pendaftaran_admin/cetak_invoice_rentang/' . $tgl_mulai . '/' . $tgl_selesai) ?>" 
         target="_blank" 
         class="btn btn-light btn-sm">
        <i class="fas fa-print"></i> Cetak
      </a>
      <?php endif; ?>
    </div>

    <div class="card-body">
      <?php if (empty($history)): ?>
        <div class="alert alert-warning text-center">
          Belum ada data pendaftaran ekstrakurikuler.
        </div>
      <?php else: ?>
        <div class="table-responsive">
          <table class="table table-bordered table-hover table-striped" width="100%" cellspacing="0">
            <thead class="thead-dark text-center">
              <tr>
                <th>No</th>
                <th>Nama Siswa</th>
                <th>NIS</th>
                <th>Kelas</th>
                <th>Jenis Kelamin</th>
                <th>No HP</th>
                <th>Alamat</th>
                <th>Ekskul</th>
                <th>Tanggal Daftar</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody class="text-center">
              <?php $no = 1; foreach ($history as $row): ?>
              <tr>
                <td><?= $no++ ?></td>
                <td><?= $row->nama ?></td>
                <td><?= $row->nis ?></td>
                <td><?= $row->kelas ?></td>
                <td><?= $row->jk ?></td>
                <td><?= $row->no_hp ?></td>
                <td><?= $row->alamat ?></td>
                <td><?= $row->nama_ekskul ?></td>
                <td><?= date('d-m-Y H:i', strtotime($row->tgl_daftar)) ?></td>
                <td>
                  <a href="<?= base_url('admin/pendaftaran_admin/delete/' . $row->id) ?>" 
                     class="btn btn-danger btn-sm"
                     onclick="return confirm('Yakin ingin menghapus data ini?')">
                    <i class="fas fa-trash-alt"></i>
                  </a>
                </td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      <?php endif; ?>
    </div>
  </div>
</div>
