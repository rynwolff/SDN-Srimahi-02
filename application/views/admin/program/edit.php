<div class="col-lg-6">
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<a href="<?= base_url('admin/Program') ?>" class="btn btn-danger btn-sm">
				<i class="fas fa-arrow-left"></i> BATALKAN
			</a>
		</div>
		<div class="card-body">
			<form method="POST" action="<?= base_url('admin/Program/update/') . $program->id_program ?>" enctype="multipart/form-data">
				<div class="mb-3 text-center">
					<?php if (!empty($program->gambar)): ?>
						<img src="<?= base_url('uploads/program/') . $program->gambar ?>" width="100%" class="img-thumbnail">
					<?php else: ?>
						<small class="text-muted">Tidak ada gambar</small>
					<?php endif; ?>
				</div>

				<div class="form-group">
					<label for="customFile">Ganti Gambar Program</label>
					<div class="custom-file">
						<input type="file" name="file" class="custom-file-input" id="customFile">
						<label class="custom-file-label" for="customFile">Pilih gambar</label>
					</div>
				</div>

				<div class="form-group">
					<label for="nama_program">Nama Program</label>
					<input type="text" class="form-control" name="nama_program" value="<?= $program->nama_program ?>" required>
				</div>

				<div class="form-group">
					<label for="deskripsi">Deskripsi Program</label>
					<textarea class="form-control" name="deskripsi" rows="4" required><?= $program->deskripsi_program ?></textarea>
				</div>

				<div class="form-group">
					<label for="detail_program">Detail Program</label>
					<textarea class="form-control" name="detail_program" rows="6"><?= $program->detail_program ?></textarea>
				</div>
				<button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> UPDATE</button>
			</form>
		</div>
	</div>
</div>
