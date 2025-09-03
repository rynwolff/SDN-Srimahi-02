<style>
.back-button {
  display: inline-block !important;
  background-image: linear-gradient(135deg, #4ce3f7, #0400ff) !important;
  color: white !important;
  padding: 12px 24px !important;
  font-size: 16px !important;
  font-weight: 600 !important;
  border: none !important;
  border-radius: 30px !important;
  text-decoration: none !important;
  box-shadow: 0 5px 15px rgba(0, 132, 255, 0.4) !important;
  transition: all 0.3s ease !important;
  cursor: pointer !important;
}

.back-button:hover {
  transform: translateY(-2px) !important;
  box-shadow: 0 8px 20px rgba(0, 132, 255, 0.6) !important;
  background-position: right center !important;
}

.back-container {
  text-align: right !important;
  margin-bottom: 30px !important;
}
</style>




<!-- ##### Blog Area Start ##### -->
    <section class="blog-area blog-page section-padding-100">
        <div class="container-fluid">
        <div class="row">
        <div class="col-12">
    <div class="back-container">
        <a href="<?= base_url('Blog') ?>" class="back-button">Kembali</a>
    </div>

    <div class="section-heading">
    <h3>Kategori <?= $nama_kategori; ?></h3>
    </div>
    </div>
        </div>
        <div class="row">
            <?php foreach ($list_blog_kategori as $blog): ?>

            <!-- <?php 
                $kategori = $this->db->get_where("tbl_kategori_blog",["id_kategori_blog" => $blog["blog_kategori_id"]])->row_array();
             ?> -->
                <!-- Single Blog Area -->
            <div class="col-12 col-lg-6">
                <div class="single-blog-area mb-100 wow fadeInUp" data-wow-delay="500ms">
                    <img src="<?= base_url('assets/img/blog/').$blog['blog_thumb']; ?>" alt="">
                    <!-- Blog Content -->
                    <div class="blog-content">
                        <a href="<?= base_url('blog/detail/').$blog['blog_slug'] ?>" class="blog-headline">
                            <h4><?= $blog['blog_title'] ?></h4>
                        </a>
                        <div class="meta d-flex align-items-center">
                            <a href="#"><?= $blog['blog_author'] ?></a>
                            <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                            <a href="<?= base_url('blog/kategori/').$kategori['nama_kategori'] ?>"><?= $kategori['nama_kategori'] ?></a>
                        </div>
                            <p><?= substr($blog['blog_isi'], 0,100); ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="load-more text-center mt-100 wow fadeInUp" data-wow-delay="1000ms">
                    <?= $this->pagination->create_links(); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Blog Area End ##### -->