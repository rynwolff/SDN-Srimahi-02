<div class="container-fluid">
  <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>
  <p>Laporan dari <strong><?= date('d-m-Y', strtotime($tgl_mulai)) ?></strong> sampai <strong><?= date('d-m-Y', strtotime($tgl_selesai)) ?></strong></p>

  <a href="<?= base_url("admin/pendaftaran_admin/cetak_invoice_rentang/$tgl_mulai/$tgl_selesai") ?>" class="btn btn-info btn-sm mb-3" target="_blank">
    <i class="fas fa-print"></i> Cetak Invoice
  </a>

  <div class="card shadow mb-4">
    <div class="card-body">
      <?php if (!empty($history)): ?>
        <div class="table-responsive">
          <table class="table table-bordered table-striped">
            <thead class="thead-dark text-center">
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIS</th>
                <th>Kelas</th>
                <th>Ekskul</th>
                <th>Tanggal Daftar</th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1; foreach ($history as $row): ?>
              <tr>
                <td><?= $no++ ?></td>
                <td><?= $row->nama ?></td>
                <td><?= $row->nis ?></td>
                <td><?= $row->kelas ?></td>
                <td><?= $row->nama_ekskul ?></td>
                <td><?= date('d-m-Y', strtotime($row->tgl_daftar)) ?></td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      <?php else: ?>
        <div class="alert alert-warning text-center">Tidak ada data untuk tanggal tersebut.</div>
      <?php endif; ?>
    </div>
  </div>
</div>
