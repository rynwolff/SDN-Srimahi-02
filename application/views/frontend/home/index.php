
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Poppins:wght@400;500&display=swap" rel="stylesheet">

<style>
.hero-area {
    position: relative !important;
    width: 100% !important;
    height: 100vh !important;
    background: url('<?= base_url('assets/img/banner/').set_banner()->banner_image ?>') no-repeat center center/cover !important;
}

.hero-overlay {
    position: absolute !important;
    top: 0; left: 0; right: 0; bottom: 0;
    background: linear-gradient(to bottom, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.9) 100%) !important;
    z-index: 1 !important;
}

.hero-content {
    position: relative !important;
    z-index: 2 !important;
    height: 100% !important;
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    flex-direction: column !important;
    text-align: center !important;
    padding: 0 20px !important;
}

.hero-title-premium {
    font-family: 'Poppins', serif !important;
    font-size: 60px !important;
    font-weight: 700 !important;
    color: #fff !important;
    margin-bottom: 20px !important;
    opacity: 0;
    transform: translateY(20px);
    animation: fadeUp 1.5s forwards ease-out;
    letter-spacing: 1px !important;
}

.hero-subtitle-premium {
    font-family: 'Poppins', sans-serif !important;
    font-size: 20px !important;
    font-weight: 400 !important;
    color: #ddd !important;
    max-width: 800px !important;
    opacity: 0;
    transform: translateY(20px);
    animation: fadeUp 1.5s forwards ease-out;
    animation-delay: 0.5s;
}

@keyframes fadeUp {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@media (max-width: 768px) {
    .hero-title-premium { font-size: 36px !important; }
    .hero-subtitle-premium { font-size: 16px !important; }
}
</style>
<style>
    .sambutan-area {
        background: linear-gradient(to right, #f2f2f2, #ffffff) !important;
        padding: 100px 0 !important;
    }

    .sambutan-text {
        font-size: 18px !important;
        color: #333 !important;
        line-height: 1.8!important;
    }
/* Tambahkan di <style> */

.visi-misi-area {
    background: linear-gradient(to bottom, #061539, #173F81, #44B0F0);
    padding: 100px 20px;
    color: #fff;
    position: relative;
    overflow: hidden;
}

.title-section {
    font-family: 'Poppins', sans-serif;
    font-size: 36px;
    font-weight: 700;
    color: #fff;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.7), 0 0 10px rgba(255,255,255,0.3);
}

.sub-title {
    font-size: 26px;
    font-weight: 600;
    margin-bottom: 20px;
    color: #fff;
    text-shadow: 1px 1px 3px rgba(0,0,0,0.5);
}

.visi-text, .misi-list li {
    font-family: 'Open Sans', sans-serif;
    font-size: 18px;
    color: #fff;
    text-shadow: 1px 1px 3px rgba(0,0,0,0.5);
}

.misi-list {
    list-style-type: disc;
    padding-left: 20px;
}

/* Pengumuman Style Premium */

/* Pengumuman Style Premium */

.pengumuman-area {
    background: linear-gradient(to bottom, #061539, #173F81, #44B0F0);
    padding: 100px 20px;
    color: #fff;
    position: relative;
    overflow: hidden;
}

.section-heading h3 {
    font-family: 'Poppins', sans-serif;
    font-size: 36px;
    font-weight: 700;
    color: #fff;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.7), 0 0 10px rgba(255,255,255,0.3);
}

.single-upcoming-events {
    background: rgba(255, 255, 255, 0.1);
    border-radius: 15px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.5);
    overflow: hidden;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.single-upcoming-events:hover {
    transform: translateY(-10px);
    box-shadow: 0 6px 20px rgba(0,0,0,0.6);
}

.events-thumb img {
    width: 100%;
    height: 200px;
    object-fit: cover;
    opacity: 0.9;
    transition: opacity 0.3s ease;
}

.events-thumb img:hover {
    opacity: 1;
}

.event-title {
    font-weight: 700;
    font-size: 22px;
    color: #fff;
    text-shadow: 1px 1px 3px rgba(0,0,0,0.7);
}

.date p {
    color: #ddd;
    font-size: 14px;
}
.events-fee a {
    color: #00ffff;
    font-weight: 600;
}


</style>

<!-- ##### Hero Area Start ##### -->
<section class="hero-area">
    <div class="hero-overlay"></div>
    <div class="hero-content">
        <h2 class="hero-title-premium"><?= set_banner()->banner_title ?></h2>
        <p class="hero-subtitle-premium"><?= set_banner()->banner_subtitle ?></p>
    </div>
</section>
<section class="py-5" style="background: #f1f3f5;">
    <div class="container d-flex justify-content-center align-items-center">
        <div class="p-5 text-center shadow" 
            style="
                background: #f1f3f5;
                border-radius: 20px;
                box-shadow: 10px 10px 20px #d1d9e6, -10px -10px 20px #ffffff;
                max-width: 800px;"
            data-aos="zoom-in" data-aos-duration="1000">

            <img src="<?= base_url('assets/img/background/in.png"') ?>" alt="Logo Sekolah" style="width: 120px; margin-bottom: 20px;">

            <h2 class="fw-bold mb-3 text-dark">Selamat Datang di SDN Srimahi 02</h2>
            <p class="lead text-muted mb-4"><em>Gali Potensi Raih Prestasi</em></p>
            <div class="text-secondary small"><cite>Semangat Membangun Generasi Unggul & Berakhlak Mulia</cite></div>
        </div>
    </div>
</section>

<!-- AOS Library -->
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init();
</script>

 <!-- ##### Sambutan Kepala Sekolah ##### -->
<section id="sambutan" class="sambutan-area py-5">
    <div class="container">
        <div class="section-heading text-center mb-5">
            <h3>Sambutan Kepala Sekolah</h3>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4 text-center mb-4">
                <img src="<?= base_url('assets/img/srimahi/Rahayu, S. Pd. SD. MM. (Kepsek)_.jpg'); ?>" alt="Kepala Sekolah" class="img-fluid rounded-circle shadow" style="max-width: 200px;">
                <h5 class="mt-3 mb-0"><strong>Rahayu ,S.Pd.SD.MM</strong></h5>
                <small>Kepala Sekolah</small>
            </div>
            <div class="col-md-8">
                <div class="sambutan-text">
                    <p>Assalamualaikum Wr. Wb.</p>
                    <p>Selamat datang di website resmi <strong>SDN Srimahi 02</strong>. Kami berkomitmen memberikan pendidikan berkualitas dan pengembangan karakter bagi seluruh peserta didik kami. Semoga website ini dapat menjadi sarana informasi dan komunikasi antara sekolah, siswa, dan orang tua.</p>
                    <p>Wassalamualaikum Wr. Wb.</p>
                    <p><strong>- Kepala Sekolah</strong></p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ##### Visi Misi Sekolah ##### -->
<section id="visimisi" class="visi-misi-area">
    <div class="container">
        <div class="section-heading text-center mb-5">
            <h3 class="title-section">Visi & Misi</h3>
        </div>
        <div class="row">
            <div class="col-md-6 mb-4">
                <h4 class="sub-title">Visi</h4>
                <p class="visi-text">
                    “Mencetak generasi mandiri, kreatif, inovatif berwawasan pengetahuan, berkarakter Profil Pelajar Pancasila dan Berakhlak Mulia.”
                </p>
            </div>
            <div class="col-md-6 mb-4">
                <h4 class="sub-title">Misi</h4>
                <ul class="misi-list">
                    <li>Mewujudkan kesadaran berdisiplin dan bertanggung jawab</li>
                    <li>Mewujudkan pelaksanaan pembelajaran yang efektif</li>
                    <li>Membiasakan budaya senyum, sapa, salam, sopan, santun (5s).</li>
                    <li>Membudayakan nilai karakter Profil Pelajar Pancasila dalam setiap mata pelajaran serta disetiap kegiatan sekolah.</li>
                    <li>Mencetak generasi yang unggul dan Berakhlak Mulia.</li>
                    <li>Penerapan Projek Penguatan Profil Pelajar Pancasila dalam mengamati memikirkan solusi terhadap masalah di lingkungan siswa.</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<?php if ($check_jurusan>0) : ?>
<!-- ##### Jurusan ##### -->
<section class="best-tutors-area section-padding-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading">
                    <h3>Tenaga Pengajar</h3>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="tutors-slide owl-carousel wow fadeInUp" data-wow-delay="250ms">
                    
                    <?php foreach ($all_jurusan as $jurusan): ?>
                        <!-- Single Tutors Slide -->
                        <div class="single-tutors-slides">
                            <!-- Tutor Thumbnail -->
                            <div class="tutor-thumbnail">
                                <img src="<?= base_url('assets/img/srimahi/').$jurusan['img_jurusan'] ?>" alt="">
                            </div>
                            <!-- Tutor Information -->
                            <div class="tutor-information">
                                <h5><?= strtoupper($jurusan['nama_jurusan']) ?></h5>
                                <span>#<?= strtoupper($jurusan['nama_kategori_jurusan']) ?></span>
                                <p><?= $jurusan['deskripsi_jurusan'] ?></p>
                                
                            </div>
                        </div>    
                    <?php endforeach; ?>
                    
                </div>
            
            </div>
        </div>
    </div>
</section>
<!-- ##### Jurusan ##### -->
<?php endif; ?>


<?php if ($check_pengumuman>0) : ?>
<!-- ##### Pengumuman ##### -->
 <section class="pengumuman-area">
    <div class="container">
        <div class="section-heading text-center mb-5">
            <h3>Pengumuman Sekolah</h3>
        </div>

        <div class="row">

            <!-- Loop data pengumuman -->
            <?php foreach ($new_pengumuman as $pengumuman): ?>
                <div class="col-12 col-md-6 col-lg-4 mb-4">
                    <div class="single-upcoming-events">
                        <div class="events-thumb">
                            <img 
                                src="<?= !empty($pengumuman['pengumuman_gambar']) 
                                    ? base_url('assets/img/pengumuman/'.$pengumuman['pengumuman_gambar']) 
                                            : base_url('assets/img/background/hd.jpg') ?>" 
                                    alt="<?= $pengumuman['pengumuman_nama'] ?>"
                                style="width: 100%; height: 200px; object-fit: cover; border-radius: 8px;">
                            </div>
                        <div class="p-4">
                            <h4 class="event-title"><?= $pengumuman['pengumuman_nama'] ?></h4>
                            <div class="date d-flex justify-content-between mt-3">
                                <p><i class="fa fa-clock"></i> <?= date('d/m/Y',strtotime($pengumuman['created_at'])) ?></p>
                                <div class="events-fee mt-3 text-end">
                                    <a href="<?= base_url('Pengumuman/detail/'.$pengumuman['id_pengumuman']) ?>" 
                                        class="btn btn-sm btn-gradient rounded-pill px-4 shadow-sm">
                                        <i class="fa fa-info-circle me-2"></i> Detail
                                     </a>
                                </div>

<style>
.btn-gradient {
    background: linear-gradient(135deg, #007bff, #6610f2);
    color: #fff;
    border: none;
    transition: 0.3s ease;
}
.btn-gradient:hover {
    background: linear-gradient(135deg, #6610f2, #007bff);
    transform: scale(1.05);
}
</style>

                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

            <?php if ($check_pengumuman>3): ?>
            <div class="col-md-12 text-center mt-4">
                <a href="<?= base_url('pengumuman') ?>" class="btn btn-light btn-lg">Lihat Semua Pengumuman</a>
            </div>    
            <?php endif; ?>

        </div>
    </div>
</section>

<!-- ##### Pengumuman ##### -->
<?php endif; ?>


<?php if ($check_agenda>0): ?>
<!-- ##### Agenda ##### -->
<!-- ##### Agenda ##### -->
<section class="upcoming-events section-padding-100-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading">
                    <h3>Agenda Mendatang</h3>
                </div>
            </div>
        </div>

        <div class="row">

            <?php foreach ($new_agenda as $agenda): ?>
            <!-- Single Upcoming Events -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="single-upcoming-events mb-50 wow fadeInUp" data-wow-delay="250ms">
                    <!-- Events Thumb -->
                    <div class="events-thumb">
                        <img src="<?= base_url('assets/img/agenda/'.$agenda['agenda_gambar']) ?>" alt="<?= $agenda['agenda_nama'] ?>">
                        <h6 class="event-date"><?= date('d/m/Y',strtotime($agenda['agenda_mulai'])) ?> SD 
                            <?= date('d/m/Y',strtotime($agenda['agenda_selesai'])) ?>
                        </h6>
                        <h4 class="event-title text-light"><?= $agenda['agenda_nama'] ?></h4>
                    </div>
                    <!-- Date & Fee -->
                    <div class="date-fee d-flex justify-content-between">
                        <div class="date">
                            <p><i class="fa fa-map-pin"></i> <?= $agenda['agenda_tempat'] ?></p>
                        </div>
                        <div class="events-fee">
                            <a href="agenda" id="<?= $agenda['id_agenda'] ?>" class="free detail-agenda">Detail</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
            
            <?php if ($check_agenda>3): ?>
            <div class="col-md-12 text-center mb-5">
                <a href="<?= base_url('agenda') ?>" class="btn btn-primary">LIHAT SEMUA AGENDA</a>
            </div>    
            <?php endif; ?>
        </div>
    </div>
</section>
<!-- ##### Agenda ##### -->

<!-- ##### Agenda ##### -->
<?php endif; ?>


<?php if ($check_blog>0): ?>
<!-- ##### Blog Area ##### -->
<section class="blog-area section-padding-100-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading">
                    <h3>Artikel Terbaru</h3>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Single Blog Area -->
            
                <?php foreach ($new_blogs as $blog): ?>
                <?php 
                $get_kategori_blog = $this->db->get_where("tbl_kategori_blog",["id_kategori_blog" => $blog['blog_kategori_id']])->row_array();
                ?>
                <div class="col-12 col-md-6">
                    <div class="single-blog-area mb-100 wow fadeInUp" data-wow-delay="250ms">
                        <img src="<?= base_url('assets/img/blog/').$blog['blog_thumb'] ?>" alt="">
                        <!-- Blog Content -->
                        <div class="blog-content">
                            <a href="<?= base_url('Blog/detail/').$blog['blog_slug']; ?>" class="blog-headline">
                                <h4><?= $blog['blog_title'] ?></h4>
                            </a>
                            <div class="meta d-flex align-items-center">
                                <a href="#"><?= $blog['blog_author'] ?></a>
                                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                <a href="<?= base_url('Blog/kategori/').$get_kategori_blog['nama_kategori'] ?>"><?= $get_kategori_blog['nama_kategori'] ?></a>
                            </div>
                                <p><?= substr($blog['blog_isi'], 0,100)."..." ?></p> 
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            
            <?php if ($check_blog>2): ?>
            <!-- Single Blog Area -->
            <div class="col-md-12 text-center mb-5">
                <a href="<?= base_url('Blog') ?>" class="btn btn-primary">LIHAT ARTIKEL LAINYA</a>
            </div>    
            <?php endif; ?>
        </div>
    </div>
</section>
<!-- ##### Blog Area End ##### -->
<?php endif;  ?>  