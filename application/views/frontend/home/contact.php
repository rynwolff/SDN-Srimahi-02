<!-- File: application/views/contact.php -->
<!-- Font Awesome 5 CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<!-- ##### Header Section ##### -->
<section 
    style="
        background: url('<?= base_url('assets/img/srimahi/sd21.jpg') ?>') center/cover no-repeat; 
        padding: 120px 0; 
        position: relative;
    "
>
    <!-- Overlay -->
    <div 
        style="
            background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)); 
            position: absolute; 
            top: 0; left: 0; right: 0; bottom: 0;
        "
    ></div>

    <!-- Content -->
    <div class="container text-center text-white position-relative">
        <h1 
            class="fw-bold display-4" 
            style="
                color: #fafafa;
                text-shadow: 2px 2px 8px rgba(0,0,0,0.8);
            "
        >
            Kontak Kami
        </h1>

        <p 
            class="lead mt-3" 
            style="
                color: #EEEEEE; 
                text-shadow: 1px 1px 5px rgba(0,0,0,0.7);
                max-width: 700px;
                margin: auto;
            "
        >
            Kami siap membantu Anda mendapatkan informasi pendaftaran, layanan akademik, dan segala kebutuhan seputar sekolah kami.
        </p>
    </div>
</section>

<!-- ##### Quick Info Strip ##### -->
<section class="section-padding-50 my-5" style="background-color: #f8f9fa;">
    <div class="container">
        <div class="section-heading text-center mb-5">
            <h3>Informasi Singkat</h3>
        </div>

        <div class="row text-center justify-content-center g-4">

            <!-- Siswa Aktif -->
            <div class="col-md-3">
                <div class="quick-info-card p-4 shadow-sm rounded-4 bg-white">
                    <div class="icon-circle mb-4 mx-auto">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                    <h6 class="fw-bold mb-1">300+ Siswa Aktif</h6>
                </div>
            </div>

            <!-- Akreditasi -->
            <div class="col-md-3">
                <div class="quick-info-card p-4 shadow-sm rounded-4 bg-white">
                    <div class="icon-circle bg-success mb-4 mx-auto">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <h6 class="fw-bold mb-1">Akreditasi B</h6>
                </div>
            </div>

            <!-- Prestasi -->
            <div class="col-md-3">
                <div class="quick-info-card p-4 shadow-sm rounded-4 bg-white">
                    <div class="icon-circle bg-warning mb-4 mx-auto">
                        <i class="fas fa-award"></i>
                    </div>
                    <h6 class="fw-bold mb-1">Prestasi Sekolah</h6>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- CSS tambahan -->
<style>
.icon-circle {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    background-color: #007bff; /* default biru */
    color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 24px;
}
.icon-circle.bg-success {
    background-color: #28a745;
}
.icon-circle.bg-warning {
    background-color: #ffc107;
}
</style>

<!-- ##### Contact Cards ##### -->
<section <section class="section-padding-50 mb-5" style="background-color: #f8f9fa;">
    <div class="container">
        <div class="section-heading text-center mb-5">
            <h3>Kontak Kami</h3>
        </div>

        <div class="row justify-content-center text-center">

            <!-- Email -->
            <div class="col-md-3 mb-4">
                <div class="p-4 shadow rounded-4 bg-white h-100 contact-card">
                    <div class="icon-wrapper mb-3">
                        <i class="fas fa-envelope-open-text fa-3x text-primary"></i>
                    </div>
                    <h6>Email</h6>
                    <p class="mb-0">srimahi02@sch.id</p>
                </div>
            </div>

            <!-- Lokasi -->
            <div class="col-md-3 mb-4">
                <div class="p-4 shadow rounded-4 bg-white h-100 contact-card">
                    <div class="icon-wrapper mb-3">
                        <i class="fas fa-map-marked-alt fa-3x text-success"></i>
                    </div>
                    <h6>Alamat</h6>
                    <p class="mb-0">Tambun Utara, Jawa Barat</p>
                </div>
            </div>

            <!-- Telepon -->
            <div class="col-md-3 mb-4">
                <div class="p-4 shadow rounded-4 bg-white h-100 contact-card">
                    <div class="icon-wrapper mb-3">
                        <i class="fas fa-phone-volume fa-3x text-warning"></i>
                    </div>
                    <h6>Telepon</h6>
                    <p class="mb-0">(021) 1234 5678</p>
                </div>
            </div>

        </div>
    </div>
</section>


        </div>

        <!-- Google Maps -->
        <div class="map-area shadow rounded-4 overflow-hidden" style="height: 450px;">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.5887246832926!2d107.07721093900376!3d-6.185756693827569!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6989724ac6136f%3A0xe9d13029e2df0af2!2sSDN%20Srimahi%2002!5e0!3m2!1sid!2sid!4v1750876309361!5m2!1sid!2sid"
                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy">
            </iframe>
        </div>
    </div>
</section>

<!-- Floating Email Button -->
<a href="mailto:smkypc@sch.com" 
   style="position:fixed;bottom:20px;right:20px;z-index:9999;">
    <img src="https://img.icons8.com/color/96/000000/apple-mail.png" width="60" />
</a>

<!-- ##### CSS Styling ##### -->
<style>
    .quick-info-card {
        background: linear-gradient(135deg, #ffffff, #f8f9fa);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        padding: 40px 20px;
    }
    .quick-info-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 40px rgba(0,0,0,0.12);
    }
    .icon-circle {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 32px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.15);
    }
    .contact-card {
        background: linear-gradient(145deg, #ffffff, #f8f9fa);
        transition: all 0.3s ease;
        padding: 40px 20px;
    }
    .contact-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 30px rgba(0,0,0,0.15);
    }
</style>
<!-- UNIVERSAL FLOATING BACK TO HOME BUTTON - LEFT BOTTOM -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

<a href="<?= base_url() ?>" 
   style="position: fixed; bottom: 30px; left: 30px; z-index: 9999; background: linear-gradient(135deg, #007bff, #6610f2); 
          color: white; padding: 15px 25px; border-radius: 50px; text-decoration: none; font-family: 'Poppins', sans-serif; 
          font-weight: 600; box-shadow: 0 5px 20px rgba(0, 0, 0, 0.3); transition: 0.3s;">
    <i class="fa fa-home" style="margin-right: 8px;"></i> Home
</a>



