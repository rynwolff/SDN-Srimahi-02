<!-- Load Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
<!-- Load AOS Animation -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">

<div class="regular-page-area section-padding-100" style="background-color: #f8f9fa; font-family: 'Poppins', sans-serif;">
    <div class="container">

        <!-- Header -->
        <div class="row mb-5" data-aos="fade-down">
            <div class="col-12 text-center">
                <h1 class="display-4 fw-bold gradient-text">PENGUMUMAN TERBARU</h1>
                <p class="lead text-secondary">Informasi penting terbaru dari sekolah kami</p>
                <div class="mx-auto my-3 line"></div>
            </div>
        </div>

        <div class="row g-4">
            <?php if (!empty($pengumuman)) : ?>
                <?php foreach ($pengumuman as $row): ?>
                    <div class="col-12 col-md-6 col-lg-4" data-aos="zoom-in">
                        <div class="custom-card position-relative h-100">
                            <div class="custom-card-img" 
                                style="background-image: url('<?= !empty($row['pengumuman_gambar']) 
                                    ? base_url('assets/img/pengumuman/'.$row['pengumuman_gambar']) 
                                    : base_url('assets/img/background/hd.jpg') ?>');">
                                <div class="custom-date-badge">
                                    <?= date('d M Y', strtotime($row['created_at'])) ?>
                                </div>
                            </div>
                            <div class="custom-card-body">
                                <h5 class="fw-bold"><?= htmlspecialchars($row['pengumuman_nama']) ?></h5>
                                <a href="<?= base_url('Pengumuman/detail/'.$row['id_pengumuman']) ?>" class="custom-btn">Detail</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="col-md-12 mb-5">
                    <div class="alert alert-warning shadow-sm text-center">
                        <h4><?= $title; ?> Kosong</h4>
                        <p>Belum ada pengumuman yang tersedia.</p>
                    </div>
                </div>
            <?php endif; ?>
        </div>

        <div class="col-md-12 text-center mt-4" data-aos="fade-up">
            <?= $this->pagination->create_links() ?>
        </div>

    </div>
</div>

<style>
body { background-color: #f8f9fa; }
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
.custom-card {
    background: rgba(255, 255, 255, 0.85);
    backdrop-filter: blur(10px);
    border-radius: 30px;
    box-shadow: 0 8px 20px rgba(0,0,0,0.1);
    overflow: hidden;
    transition: all 0.4s ease;
}
.custom-card:hover {
    transform: translateY(-12px) scale(1.03);
    box-shadow: 0 20px 40px rgba(0,0,0,0.2);
}
.custom-card-img {
    height: 240px;
    background-size: cover;
    background-position: center;
    position: relative;
}
.custom-date-badge {
    position: absolute;
    top: 20px;
    left: 20px;
    background: linear-gradient(135deg, #007bff, #6610f2);
    color: #fff;
    padding: 10px 20px;
    border-radius: 50px;
    font-weight: 600;
    font-size: 0.9rem;
    box-shadow: 0 2px 8px rgba(0,0,0,0.3);
}
.custom-card-body {
    padding: 25px;
    text-align: center;
}
.custom-btn {
    display: inline-block;
    margin-top: 20px;
    padding: 12px 30px;
    background: linear-gradient(135deg, #007bff, #6610f2);
    color: #fff;
    border-radius: 50px;
    font-weight: 500;
    text-decoration: none;
    transition: background 0.3s, transform 0.3s;
}
.custom-btn:hover {
    background: linear-gradient(135deg, #6610f2, #007bff);
    transform: scale(1.05);
}
</style>

<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>AOS.init({ duration: 1000 });</script>
<!-- UNIVERSAL FLOATING BACK TO HOME BUTTON -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

<a href="<?= base_url() ?>" 
   style="position: fixed; bottom: 30px; right: 30px; z-index: 9999; background: linear-gradient(135deg, #007bff, #6610f2); 
          color: white; padding: 15px 25px; border-radius: 50px; text-decoration: none; font-family: 'Poppins', sans-serif; 
          font-weight: 600; box-shadow: 0 5px 20px rgba(0, 0, 0, 0.3); transition: 0.3s;">
    <i class="fa fa-home" style="margin-right: 8px;"></i> Home
</a>
