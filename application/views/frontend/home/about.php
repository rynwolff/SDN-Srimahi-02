<!-- Load Google Fonts Poppins -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

<!-- Load AOS CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">

<!-- Header Section -->
<section 
    style="background: url('<?= base_url('assets/img/srimahi/sd27.jpg') ?>') center/cover no-repeat; 
    padding: 140px 0; 
    position: relative; 
    background-attachment: local;
    font-family: 'Poppins', sans-serif;">
    <div style="background: rgba(0,0,0,0.4); position:absolute; top:0; left:0; right:0; bottom:0;"></div>
    <div class="container text-center position-relative">
        <h1 class="fw-bold display-4" 
            style="color: #FAFAFA; text-shadow: 2px 2px 6px rgba(0,0,0,0.8);" 
            data-aos="fade-down">
            Tentang Kami
        </h1>
        <p class="lead mt-3" 
            style="color: #FAFAFA; text-shadow: 1px 1px 3px rgba(0,0,0,0.7);" 
            data-aos="fade-up">
            Menjadi Lembaga Pendidikan Yang Membentuk Generasi Muda Yang Berakhlak Mulia Serta Berpengetahuan Luas.
        </p>
    </div>
</section>

<!-- Profil Sekolah -->
<section class="section-padding-100" style="background-color: #FAFAFA; font-family: 'Poppins', sans-serif;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 mb-4" data-aos="fade-right">
                <img src="<?= base_url('assets/img/srimahi/baeng.jpg') ?>" class="img-fluid rounded-4 shadow-lg" alt="Tentang Kami">
            </div>
            <div class="col-md-6" data-aos="fade-left">
                <h4 class="fw-bold mb-3">Profil Sekolah</h4>
                <p class="text-muted">
                    SDN Srimahi 02 hadir Sebagai Sekolah dasar yang bisa menjadi landasan dasar pendidikan anak. 
                </p>
                <p class="text-muted">
                    Kami memiliki tenaga pengajar profesional, fasilitas modern, serta kurikulum yang dirancang untuk memenuhi kebutuhan dasar anak seperti Baca Tulis Hitung.
                </p>
                <p class="text-muted">
                    Bersama Kami Para Orang Tua Tidak Perlu Khawatir Akan Pendidikan Anak.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Visi Misi -->
<section class="section-padding-100" style="background-color: #FFFFFF; font-family: 'Poppins', sans-serif;">
    <div class="container">
        <div class="text-center mb-5">
            <h3 class="fw-bold text-primary" data-aos="zoom-in">Visi & Misi</h3>
        </div>
        <div class="row text-center g-4">
            <div class="col-md-4" data-aos="zoom-in" data-aos-delay="100">
                <div class="p-4 rounded-4 shadow-sm bg-light hover-up h-100">
                    <i class="fa fa-star fa-3x text-warning mb-3"></i>
                    <h5>Visi</h5>
                    <p class="text-muted">Menjadi sekolah kejuruan yang unggul, inovatif, dan berkarakter.</p>
                </div>
            </div>
            <div class="col-md-4" data-aos="zoom-in" data-aos-delay="200">
                <div class="p-4 rounded-4 shadow-sm bg-light hover-up h-100">
                    <i class="fa fa-bullseye fa-3x text-danger mb-3"></i>
                    <h5>Misi 1</h5>
                    <p class="text-muted">Menyelenggarakan pendidikan berkualitas sesuai kebutuhan sebagai bekal di masa depan.</p>
                </div>
            </div>
            <div class="col-md-4" data-aos="zoom-in" data-aos-delay="300">
                <div class="p-4 rounded-4 shadow-sm bg-light hover-up h-100">
                    <i class="fa fa-heartbeat fa-3x text-success mb-3"></i>
                    <h5>Misi 2</h5>
                    <p class="text-muted">Mengembangkan karakter siswa agar berakhlak mulia, mandiri, kreatif, dan kompeten.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!---

<section class="section-padding-100" style="background-color: #FAFAFA; font-family: 'Poppins', sans-serif;">
    <div class="container">
        <div class="text-center mb-5">
            <h3 class="fw-bold text-primary" data-aos="fade-up">Keunggulan Kami</h3>
        </div>
        <div class="row text-center g-4">
            <div class="col-md-3" data-aos="fade-up" data-aos-delay="100">
                <div class="p-4 rounded-4 shadow-sm bg-white hover-up h-100">
                    <i class="fa fa-laptop-code fa-3x text-primary mb-3"></i>
                    <h6>Teknologi Terbaru</h6>
                    <p class="text-muted small">Laboratorium & workshop berbasis industri 4.0 modern.</p>
                </div>
            </div>
            <div class="col-md-3" data-aos="fade-up" data-aos-delay="200">
                <div class="p-4 rounded-4 shadow-sm bg-white hover-up h-100">
                    <i class="fa fa-briefcase fa-3x text-warning mb-3"></i>
                    <h6>Link Industri</h6>
                    <p class="text-muted small">Kemitraan langsung dengan perusahaan ternama nasional.</p>
                </div>
            </div>
            <div class="col-md-3" data-aos="fade-up" data-aos-delay="300">
                <div class="p-4 rounded-4 shadow-sm bg-white hover-up h-100">
                    <i class="fa fa-certificate fa-3x text-success mb-3"></i>
                    <h6>Sertifikasi Kompetensi</h6>
                    <p class="text-muted small">Standar sertifikasi kompetensi profesi bagi lulusan.</p>
                </div>
            </div>
            <div class="col-md-3" data-aos="fade-up" data-aos-delay="400">
                <div class="p-4 rounded-4 shadow-sm bg-white hover-up h-100">
                    <i class="fa fa-globe fa-3x text-danger mb-3"></i>
                    <h6>Go Global</h6>
                    <p class="text-muted small">Peluang magang & kerjasama internasional.</p>
                </div>
            </div>
        </div>
    </div>
</section> --->

<!-- Custom Style -->
<style>
    body {
        font-family: 'Poppins', sans-serif;
    }
    .hover-up {
        transition: all 0.4s ease;
    }
    .hover-up:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0,0,0,0.15);
    }
</style>

<!-- AOS Animation -->
<<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
    AOS.init({
        duration: 1200,
        once: true
    });
</script>

<!-- UNIVERSAL FLOATING BACK TO HOME BUTTON -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

<a href="<?= base_url() ?>" 
   style="position: fixed; bottom: 30px; right: 30px; z-index: 9999; background: linear-gradient(135deg, #007bff, #6610f2); 
          color: white; padding: 15px 25px; border-radius: 50px; text-decoration: none; font-family: 'Poppins', sans-serif; 
          font-weight: 600; box-shadow: 0 5px 20px rgba(0, 0, 0, 0.3); transition: 0.3s;">
    <i class="fa fa-home" style="margin-right: 8px;"></i> Home
</a>
