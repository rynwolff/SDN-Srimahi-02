<div class="row mb-3">
    <div class="col-md-4">
    <form method="POST" action="<?= base_url('admin/Agenda/update/').$agenda['id_agenda'] ?>" enctype="multipart/form-data">  
        <div class="card">
            <div class="card-header">
                <a href="<?= base_url('admin/Agenda') ?>" class="btn btn-danger btn-sm">
                    <i class="fas fa-window-close fa-fw"></i> BATALKAN
                </a>
            </div>
            <div class="card-body">

                <div class="form-group">
                    <label for="n">Nama Agenda</label>
                    <input required id="n" placeholder="Nama agenda" name="agenda_nama" value="<?= $agenda['agenda_nama'] ?>" class="form-control">
                    <?= form_error('agenda_nama','<small class="text-danger">','</small>') ?>
                </div>

                <div class="form-group">
                    <label for="m">Mulai</label>
                    <input required id="m" type="date" name="agenda_mulai" value="<?= $agenda['agenda_mulai'] ?>" class="form-control">
                    <?= form_error('agenda_mulai','<small class="text-danger">','</small>') ?>
                </div>

                <div class="form-group">
                    <label for="s">Selesai</label>
                    <input required id="s" type="date" name="agenda_selesai" value="<?= $agenda['agenda_selesai'] ?>" class="form-control">
                    <?= form_error('agenda_selesai','<small class="text-danger">','</small>') ?>
                </div>

                <div class="form-group">
                    <label for="w">Waktu</label>
                    <input id="w" name="agenda_waktu" value="<?= $agenda['agenda_waktu'] ?>" placeholder="Contoh: 10.00-12.30 WIB" class="form-control">
                    <small class="text-muted">Kosongkan Jika tidak akan mencantumkan Waktu</small>
                    <?= form_error('agenda_waktu','<small class="text-danger">','</small>') ?>
                </div>

                <div class="form-group">
                    <label for="t">Tempat</label>
                    <input required id="t" name="agenda_tempat" value="<?= $agenda['agenda_tempat'] ?>" placeholder="Tempat" class="form-control">
                    <?= form_error('agenda_tempat','<small class="text-danger">','</small>') ?>
                </div>

                <div class="form-group">
                    <label for="">Keterangan</label>
                    <textarea required name="agenda_keterangan" placeholder="Keterangan" class="form-control"><?= $agenda['agenda_keterangan'] ?></textarea>
                    <?= form_error('agenda_keterangan','<small class="text-danger">','</small>') ?>
                </div>

                <div class="form-group">
                    <label for="gambar">Gambar Agenda</label><br>
                    <?php if (!empty($agenda['agenda_gambar'])): ?>
                        <img src="<?= base_url('assets/img/agenda/').$agenda['agenda_gambar'] ?>" class="img-thumbnail mb-2" width="200">
                    <?php else: ?>
                        <p><em>Belum ada gambar.</em></p>
                    <?php endif; ?>
                    <input type="file" name="agenda_gambar" class="form-control-file" accept="image/*">
                    <small class="text-muted">Biarkan kosong jika tidak ingin mengubah gambar</small>
                    <?= form_error('agenda_gambar','<small class="text-danger">','</small>') ?>
                </div>

            </div>
        </div>
    </div>

    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Deskripsi</div>
            <div class="card-body">
                <div class="form-group">
                    <textarea required id="ckeditor" name="agenda_deskripsi" class="form-control"><?= $agenda['agenda_deskripsi'] ?></textarea>
                    <?= form_error('agenda_deskripsi','<small class="text-danger">','</small>') ?>
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-danger col-md-4 mt-2">
            <i class="fa fa-paper-plane"></i> KIRIM
        </button>
    </form>
    </div>
</div>
