<!-- Load Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

<div class="container py-5" style="font-family: 'Poppins', sans-serif;">
    <!-- Judul -->
    <div class="text-center mb-5" data-aos="fade-down">
        <h1 class="fw-bold display-4 gradient-text"><?= htmlspecialchars($program['nama_program']); ?></h1>
        <div class="line mx-auto mb-4"></div>
    </div>

    <!-- Gambar -->
    <div class="text-center mb-5" data-aos="zoom-in">
        <img src="<?= base_url('uploads/program/' . ($program['gambar'] ?? 'default.png')) ?>" 
             class="img-fluid rounded-4 shadow-lg border" 
             style="max-height: 450px; object-fit: cover;" alt="<?= htmlspecialchars($program['nama_program']) ?>">
    </div>

    <!-- Konten Deskripsi -->
    <div class="mx-auto" style="max-width: 850px;">
        <div class="mb-5" data-aos="fade-up">
            <h4 class="fw-semibold mb-3 gradient-subtitle"><i class="fa fa-info-circle me-2"></i> Deskripsi Program</h4>
            <p class="fs-5 text-justify text-muted"><?= nl2br(htmlspecialchars($program['deskripsi_program'] ?? 'Tidak ada deskripsi.')); ?></p>
        </div>

        <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
            <h4 class="fw-semibold mb-3 gradient-subtitle"><i class="fa fa-list-alt me-2"></i> Detail Kegiatan</h4>
            <p class="fs-5 text-justify text-muted"><?= nl2br(htmlspecialchars($program['detail_program'] ?? 'Tidak ada detail tambahan.')); ?></p>
        </div>

        <!-- Tombol Kembali -->
        <div class="text-center mt-5" data-aos="fade-up" data-aos-delay="200">
            <a href="<?= base_url('program') ?>" class="btn btn-gradient btn-lg rounded-pill px-5 shadow-sm">
                <i class="fa fa-arrow-left me-2"></i> Kembali ke Daftar Program
            </a>
        </div>
    </div>
</div>

<!-- Style -->
<style>
    body { background-color: #FAFAFA; }
    .line { width: 80px; height: 5px; background: linear-gradient(135deg, #007bff, #6610f2); border-radius: 20px; }
    .gradient-text {
        background: linear-gradient(135deg, #007bff, #6610f2);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }
    .gradient-subtitle {
        background: linear-gradient(135deg, #007bff, #6610f2);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }
    .btn-gradient {
        background: linear-gradient(135deg, #007bff, #6610f2);
        border: none;
        color: #fff;
        transition: 0.3s;
    }
    .btn-gradient:hover {
        background: linear-gradient(135deg, #6610f2, #007bff);
        transform: scale(1.05);
    }
</style>

<!-- Load AOS Animation (opsional) -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>AOS.init({ duration: 1000 });</script>
