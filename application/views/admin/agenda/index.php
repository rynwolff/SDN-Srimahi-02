<?php if ($this->session->flashdata('success')): ?>
    <div class="alert alert-success"><?= $this->session->flashdata('success') ?></div>    
<?php endif ?>

<div class="card">
  <div class="card-header">
    <a href="<?= base_url('admin/Agenda/create') ?>" class="btn btn-primary btn-sm">
      <i class="fas fa-plus fa-fw"></i> TAMBAH DATA
    </a>
  </div>

  <div class="card-body table-responsive">
    <table id="dataTable" class="table table-bordered table-striped">
      <thead class="thead-dark">
        <tr class="text-center">
          <th>No</th>
          <th>Nama Agenda</th>
          <th>Gambar</th>
          <th>Author</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php $no=1; foreach ($agenda as $row): ?>
          <tr class="text-center align-middle">
            <td><?= $no++ ?></td>
            <td><?= $row['agenda_nama'] ?></td>
            <td>
              <?php if (!empty($row['agenda_gambar'])): ?>
                <img src="<?= base_url('assets/img/agenda/').$row['agenda_gambar'] ?>" class="img-thumbnail" width="80">
              <?php else: ?>
                <span class="badge badge-secondary">No Image</span>
              <?php endif; ?>
            </td>
            <td><?= $row['agenda_author'] ?></td>
            <td>
              <a href="<?= base_url('admin/Agenda/edit/').$row['id_agenda'] ?>" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
              <a href="<?= base_url('admin/Agenda/delete/').$row['id_agenda'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?')">
                <i class="fas fa-trash"></i>
              </a>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>

    <a onclick="return confirm('Kosongkan semua data?')" href="<?= base_url('admin/Agenda/truncate') ?>" class="btn btn-danger mt-3">
      <i class="fas fa-trash fa-fw"></i> Kosongkan Semua Data
    </a>
  </div>
</div>
