<!-- Load Google Fonts Poppins -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
<!-- Load AOS Animation -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">

<div class="container py-5" style="font-family: 'Poppins', sans-serif;">
    <!-- Header -->
    <div class="text-center mb-5" data-aos="fade-down">
        <h1 class="fw-bold display-4 gradient-text">PROGRAM EKSKUL SEKOLAH</h1>
        <p class="text-muted fs-5">Pilihan Ekstrakurikuler Terbaik Untuk Mengembangkan Bakat Siswa</p>
        <div class="line mb-3 mx-auto"></div>
    </div>

    <!-- Program Cards -->
    <div class="row">
        <?php foreach ($programs as $row): ?>
            <div class="col-md-4 mb-4" data-aos="zoom-in" data-aos-delay="200">
                <div class="card h-100 shadow-lg border-0 rounded-4 overflow-hidden program-card">
                    <div class="image-wrapper">
                        <img src="<?= base_url('uploads/program/' . ($row['gambar'] ?? 'default.png')) ?>" 
                             class="card-img-top img-fluid" 
                             alt="<?= $row['nama_program'] ?>" 
                             style="object-fit: cover; height: 250px;">
                    </div>
                    <div class="card-body bg-white">
                        <h5 class="card-title fw-semibold text-dark"><?= $row['nama_program'] ?></h5>
                        <p class="card-text text-muted">
                            <?= character_limiter(strip_tags($row['deskripsi_program'] ?? ''), 120, '...'); ?>
                        </p>

                        <a href="<?= base_url('Program/detail/'.$row['id_program']) ?>" 
                           class="btn btn-gradient btn-sm w-100 rounded-pill mt-3 shadow-sm">
                            <i class="fa fa-info-circle me-1"></i> Lihat Detail
                        </a>

                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>

    <!-- Pagination -->
    <div class="mt-4 text-center" data-aos="fade-up">
        <?= $this->pagination->create_links(); ?>
    </div>
</div>

<!-- Form Pendaftaran -->
<div class="container py-5" id="formPendaftaranSection">
    <div class="text-center mb-5" data-aos="fade-down">
        <h2 class="fw-bold display-5 gradient-text">Pendaftaran Ekstrakurikuler</h2>
        <p class="text-muted">Isi form berikut untuk mendaftarkan diri mengikuti program ekskul</p>
        <div class="line mb-3 mx-auto"></div>
    </div>

    <form action="<?= base_url('Pendaftaran_ekskul/daftar') ?>" method="POST">
        <div class="row g-3">
            <div class="col-md-6">
                <label>Nama Siswa</label>
                <input type="text" name="nama" class="form-control rounded-3 shadow-sm" required>
            </div>
            <div class="col-md-6">
                <label>NIS</label>
                <input type="text" name="nis" class="form-control rounded-3 shadow-sm" required>
            </div>
            <div class="col-md-6">
                <label>Kelas</label>
                <input type="text" name="kelas" class="form-control rounded-3 shadow-sm" required>
            </div>
            <div class="col-md-6">
                <label>Jenis Kelamin</label>
                <select name="jk" class="form-control rounded-3 shadow-sm" required>
                    <option value="">-- Pilih --</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="col-md-6">
                <label>No HP</label>
                <input type="text" name="no_hp" class="form-control rounded-3 shadow-sm" required>
            </div>
            <div class="col-md-6">
                <label>Alamat</label>
                <textarea name="alamat" class="form-control rounded-3 shadow-sm" rows="3" required></textarea>
            </div>
            <div class="col-md-12">
                <label>Ekskul yang Diikuti</label>
                <input type="text" name="nama_ekskul" class="form-control rounded-3 shadow-sm" required>
            </div>
            <div class="col-md-12 text-center">
                <button type="submit" class="btn btn-gradient px-5 py-2 mt-4 rounded-pill shadow">Daftar Sekarang</button>
            </div>
        </div>
    </form>
</div>

<style>
    body { background-color: #FAFAFA; }
    .program-card { transition: 0.5s; }
    .program-card:hover { transform: translateY(-10px) scale(1.02); box-shadow: 0 25px 45px rgba(0,0,0,0.15); }
    .image-wrapper { border-top-left-radius: 1rem; border-top-right-radius: 1rem; overflow: hidden; }
    .line { width: 80px; height: 5px; background: linear-gradient(135deg, #007bff, #6610f2); border-radius: 20px; }
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
        transform: scale(1.05);
    }
</style>

<!-- Load AOS Animation JS -->
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
