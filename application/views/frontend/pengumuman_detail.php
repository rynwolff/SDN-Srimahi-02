<!-- Load Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
<!-- Load AOS Animation -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">

<div class="container py-5" style="font-family: 'Poppins', sans-serif;">

    <!-- Header -->
    <div class="text-center mb-5" data-aos="fade-down">
        <h1 class="display-4 fw-bold gradient-text">
            <?= htmlspecialchars($pengumuman['pengumuman_nama'] ?? 'Judul Tidak Ada'); ?>
        </h1>
        <p class="text-secondary fs-5">
            <?= isset($pengumuman['created_at']) ? date('d F Y', strtotime($pengumuman['created_at'])) : ''; ?>
        </p>
        <div class="line mx-auto mb-4"></div>
    </div>

    <!-- Image -->
    <div class="text-center mb-4" data-aos="zoom-in">
        <img src="<?= !empty($pengumuman['pengumuman_gambar']) 
            ? base_url('assets/img/pengumuman/'.$pengumuman['pengumuman_gambar']) 
            : base_url('assets/img/background/hd.jpg') ?>" 
            class="img-fluid rounded shadow-lg" 
            style="max-height: 400px; object-fit: cover;" 
            alt="Gambar Pengumuman">
    </div>

    <!-- Content -->
    <div class="content mx-auto" style="max-width: 800px;" data-aos="fade-up">
    <div class="fs-5 text-justify">
        <?= $pengumuman['pengumuman_deskripsi'] ?? '<i>Belum ada deskripsi.</i>'; ?>
    </div>

    <div class="text-center mt-5">
        <a href="<?= base_url('pengumuman') ?>" class="btn btn-gradient btn-lg rounded-pill px-5 shadow-sm">
            <i class="fa fa-arrow-left me-2"></i> Kembali
        </a>
    </div>
</div>


</div>

<style>
    body { background-color: #FAFAFA; }
    .line {
        width: 80px;
        height: 5px;
        background: linear-gradient(135deg, #007bff, #6610f2);
        border-radius: 50px;
    }
    .gradient-text {
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
    }
</style>

<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>AOS.init({ duration: 1000 });</script>

