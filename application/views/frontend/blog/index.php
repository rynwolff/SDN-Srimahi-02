<!-- Load Google Fonts Poppins -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

<!-- Load AOS CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">

<section class="section-padding-100" style="font-family: 'Poppins', sans-serif; background-color: #FAFAFA; padding-top: 160px;">
    <div class="container">

        <!-- Blog Categories -->
        <div class="mb-5 text-center">
            <h3 class="fw-bold mb-4" data-aos="fade-down">Kategori Galeri</h3>
            <div class="d-flex flex-wrap justify-content-center" data-aos="fade-up">
                <?php if ($check_blog > 0) : ?>
                    <?php foreach ($kategori_blog as $kategori): ?>
                        <a href="<?= base_url('Blog/kategori/') . $kategori['nama_kategori'] ?>" class="category-btn">
                            <?= $kategori['nama_kategori'] ?>
                        </a>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>

        <!-- Blog List -->
        <div class="row g-4">
            <?php if ($check_blog > 0) : ?>
                <?php foreach ($all_blog as $blog): ?>
                    <?php 
                        $kategori = $this->db->get_where("tbl_kategori_blog",["id_kategori_blog" => $blog["blog_kategori_id"]])->row_array();
                    ?>
                    <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="100">
                        <div class="card h-100 shadow-lg border-0 hover-up rounded-4 overflow-hidden">
                            <div class="position-relative">
                                <img src="<?= base_url('assets/img/blog/') . $blog['blog_thumb']; ?>" 
                                     class="img-fluid" style="object-fit: cover; height: 250px; width: 100%;" alt="Blog Image">
                                <div class="badge-overlay">
                                    <small>
                                        <i class="fa fa-user me-1"></i> <?= $blog['blog_author'] ?> 
                                        | <?= $kategori['nama_kategori'] ?>
                                    </small>
                                </div>
                            </div>
                            <div class="card-body p-4">
                                <a href="<?= base_url('Blog/detail/') . $blog['blog_slug'] ?>" class="text-decoration-none text-dark">
                                    <h5 class="fw-bold mb-3"><?= $blog['blog_title'] ?></h5>
                                </a>
                                <p class="text-muted"><?= substr(strip_tags($blog['blog_isi']), 0, 130) . "..."; ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="col-md-12">
                    <div class="alert alert-warning text-center shadow-sm py-4">
                        <h5 class="fw-bold">Belum Ada Artikel</h5>
                        <p>Konten blog akan segera hadir.</p>
                    </div>
                </div>
            <?php endif; ?>
        </div>

        <!-- Pagination -->
        <div class="mt-5 text-center" data-aos="fade-up" data-aos-delay="200">
            <?= $this->pagination->create_links(); ?>
        </div>

    </div>
</section>

<!-- Custom Style -->
<style>
    body {
        font-family: 'Poppins', sans-serif;
    }
    .hover-up {
        transition: all 0.4s ease;
    }
    .hover-up:hover {
        transform: translateY(-8px);
        box-shadow: 0 10px 30px rgba(0,0,0,0.2);
    }
    .category-btn {
        padding: 12px 30px;
        border-radius: 50px;
        background: linear-gradient(135deg, #4ca1af, #2c3e50);
        color: #fff;
        text-decoration: none;
        font-weight: 500;
        transition: 0.4s ease;
        box-shadow: 0 4px 10px rgba(0,0,0,0.2);
        font-size: 16px;
        margin: 10px;
    }
    .category-btn:hover {
        background: linear-gradient(135deg, #2c3e50, #4ca1af);
        transform: translateY(-4px);
        box-shadow: 0 8px 20px rgba(0,0,0,0.3);
    }
    .badge-overlay {
        position: absolute;
        top: 15px;
        left: 15px;
        background-color: rgba(0,0,0,0.65);
        color: #fff;
        padding: 6px 15px;
        border-radius: 50px;
        font-size: 13px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.3);
    }
</style>

<!-- Load AOS JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
    AOS.init({
        duration: 1200,
        once: true
    });
</script>
<!-- UNIVERSAL BACK TO HOME BUTTON -->

<div style="position: fixed; top: 20px; right: 20px; z-index: 9999; font-family: 'Poppins', sans-serif;">
    <a href="<?= base_url() ?>" 
       style="display: inline-block; background: linear-gradient(135deg, #007bff, #6610f2); color: white; 
              padding: 10px 20px; border-radius: 30px; text-decoration: none; font-weight: 600;
              box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2); transition: 0.3s;">
        <i class="fa fa-home" style="margin-right: 8px;"></i> Kembali ke Home
    </a>
</div>
