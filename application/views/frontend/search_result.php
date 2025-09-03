<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

<div class="container my-5" style="font-family: 'Poppins', sans-serif;">
    
    <div class="d-flex justify-content-between align-items-center mb-5">
        <h2 class="gradient-text">Hasil Pencarian: "<?= htmlspecialchars($keyword) ?>"</h2>
        <a href="<?= base_url() ?>" class="btn btn-gradient rounded-pill px-4 py-2 shadow">
            <i class="fa fa-home me-2"></i> Kembali
        </a>
    </div>

    <!-- BLOG -->
    <div class="search-section mb-5">
        <h4 class="mb-3">Blog</h4>
        <?php if (!empty($blog_results)): ?>
            <div class="row">
                <?php foreach ($blog_results as $blog): ?>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <img src="<?= base_url('assets/img/blog/' . ($blog['blog_thumb'] ?? 'default.png')) ?>" class="card-img-top" alt="<?= htmlspecialchars($blog['blog_title']) ?>" style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title"><?= htmlspecialchars($blog['blog_title']) ?></h5>
                            <p class="card-text"><?= word_limiter(strip_tags($blog['blog_isi']), 20); ?></p>
                            <a href="<?= base_url('blog/detail/' . $blog['blog_slug']) ?>" class="btn btn-sm btn-gradient rounded-pill">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <p class="text-muted">Tidak ditemukan pada blog.</p>
        <?php endif; ?>
    </div>

    <!-- PROGRAM -->
    <div class="search-section mb-5">
        <h4 class="mb-3">Program</h4>
        <?php if (!empty($program_results)): ?>
            <div class="row">
                <?php foreach ($program_results as $program): ?>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <img src="<?= base_url('uploads/program/' . ($program['gambar'] ?? 'default.png')) ?>" class="card-img-top" alt="<?= htmlspecialchars($program['nama_program']) ?>" style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title"><?= htmlspecialchars($program['nama_program']) ?></h5>
                            <p class="card-text"><?= word_limiter(strip_tags($program['deskripsi_program']), 20); ?></p>
                            <a href="<?= base_url('program/get_detail/' . $program['id_program']) ?>" class="btn btn-sm btn-gradient rounded-pill">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <p class="text-muted">Tidak ditemukan pada program.</p>
        <?php endif; ?>
    </div>

    <!-- AGENDA -->
    <div class="search-section mb-5">
        <h4 class="mb-3">Agenda</h4>
        <?php if (!empty($agenda_results)): ?>
            <div class="row">
                <?php foreach ($agenda_results as $agenda): ?>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title"><?= htmlspecialchars($agenda['agenda_nama']) ?></h5>
                            <p class="card-text"><?= word_limiter(strip_tags($agenda['agenda_deskripsi']), 20); ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <p class="text-muted">Tidak ditemukan pada agenda.</p>
        <?php endif; ?>
    </div>

    <!-- PENGUMUMAN -->
    <div class="search-section mb-5">
        <h4 class="mb-3">Pengumuman</h4>
        <?php if (!empty($pengumuman_results)): ?>
            <div class="row">
                <?php foreach ($pengumuman_results as $pengumuman): ?>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title"><?= htmlspecialchars($pengumuman['pengumuman_nama']) ?></h5>
                            <p class="card-text"><?= word_limiter(strip_tags($pengumuman['pengumuman_deskripsi']), 20); ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <p class="text-muted">Tidak ditemukan pada pengumuman.</p>
        <?php endif; ?>
    </div>

</div>

<style>
.gradient-text {
    background: linear-gradient(135deg, #007bff, #6610f2);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}
.btn-gradient {
    background: linear-gradient(135deg, #007bff, #6610f2);
    color: #fff;
    border: none;
    transition: 0.3s;
}
.btn-gradient:hover {
    background: linear-gradient(135deg, #6610f2, #007bff);
    transform: scale(1.05);
}
.card {
    border-radius: 20px;
}
.card img {
    border-top-left-radius: 20px;
    border-top-right-radius: 20px;
}
</style>
