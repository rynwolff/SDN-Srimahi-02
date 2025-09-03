<div class="col-lg-6">
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<a href="<?= base_url('admin/Program') ?>" class="btn btn-danger btn-sm">
				<i class="fas fa-arrow-left"></i> BATALKAN
			</a>
		</div>
		<div class="card-body">
			<form method="POST" action="<?= base_url('admin/Program/store') ?>" enctype="multipart/form-data">
				<div class="form-group">
					<label for="customFile">Gambar Program</label>
					<div class="custom-file">
						<input required type="file" name="file" class="custom-file-input" id="customFile">
						<label class="custom-file-label" for="customFile">Pilih gambar</label>
					</div>
				</div>

				<div class="form-group">
					<label for="nama_program">Nama Program</label>
					<input type="text" class="form-control" name="nama_program" placeholder="Contoh: Program Unggulan" required>
				</div>

				<div class="form-group">
					<label for="deskripsi_program">Deskripsi Program</label>
					<textarea class="form-control" name="deskripsi_program" rows="4" placeholder="Tuliskan deskripsi program di sini..." required></textarea>
				</div>

				<div class="form-group">
					<label for="detail_program">Detail Program</label>
					<textarea class="form-control" name="detail_program" rows="5" placeholder="Tuliskan detail lengkap program..."></textarea>
				</div>

				<button type="submit" class="btn btn-primary">
					<i class="fas fa-save"></i> SIMPAN
				</button>
			</form>
		</div>
	</div>
</div>
