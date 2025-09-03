<?php if ($this->session->flashdata('success')): ?>
	<div class="alert alert-success alert-dismissible fade show" role="alert">
		<?= $this->session->flashdata('success') ?>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
<?php endif ?>

<div class="card shadow mb-4">
	<div class="card-header py-3 d-flex justify-content-between">
		<h6 class="m-0 font-weight-bold text-primary">Data Program</h6>
		<a href="<?= base_url('admin/Program/create') ?>" class="btn btn-primary btn-sm">
			<i class="fas fa-plus"></i> TAMBAH PROGRAM
		</a>
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<table id="dataTable" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>No</th>
						<th>Gambar</th>
						<th>Nama Program</th>
						<th>Deskripsi</th>
						<th>Detail</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1; foreach ($programs as $row): ?>
					<tr>
						<td><?= $no++ ?></td>
						<td>
							<?php if (!empty($row->gambar)): ?>
								<img src="<?= base_url('uploads/program/') . $row->gambar ?>" width="80" class="img-thumbnail">
							<?php else: ?>
								<small class="text-muted">Tidak ada gambar</small>
							<?php endif ?>
						</td>
						<td><?= $row->nama_program ?></td>
						<td><?= !empty($row->deskripsi_program) ? character_limiter(strip_tags($row->deskripsi_program), 50) : '-' ?></td>
						<td><?= !empty($row->detail_program) ? character_limiter(strip_tags($row->detail_program), 50) : '-' ?></td>
						<td>
							<a href="<?= base_url('admin/Program/edit/') . $row->id_program ?>" class="btn btn-sm btn-primary">
								<i class="fas fa-edit"></i>
							</a>
							<a href="<?= base_url('admin/Program/delete/') . $row->id_program ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?')">
								<i class="fas fa-trash"></i>
							</a>
						</td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
		<a href="<?= base_url('admin/Program/truncate') ?>" onclick="return confirm('Yakin ingin menghapus semua data?')" class="btn btn-danger mt-2">
			<i class="fas fa-trash"></i> Kosongkan Semua Data
		</a>
	</div>
</div>
