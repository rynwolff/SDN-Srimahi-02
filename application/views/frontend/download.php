<!-- ##### Regular Page Area Start ##### -->
<div class="regular-page-area section-padding-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
<!-- ##### Agenda ##### -->
<section class="upcoming-events">
    <div class="container">

        <?php if ($check_files>0): ?>
        <div class="row">
            <div class="col-12">
                <div class="section-heading">
                    <h3><?= $title; ?></h3>
                </div>
            </div>
        </div>
        <?php endif; ?>

        <div class="row">
            <?php if ($check_files>0) : ?>
            <!-- Single Upcoming Events -->
            <?php foreach ($all_files as $file): ?>
            <?php 
                $file_author = $this->db->get_where("tbl_user",["id_user" => $file["user_id"]])->row_array();
             ?>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="single-upcoming-events mb-50 wow fadeInUp" data-wow-delay="250ms">
                    <!-- Events Thumb -->
                    <div class="events-thumb">
                        <img src="<?= base_url() ?>assets/img/background/download.png" alt="">
                        <h6 class="event-date">UPLOAD AT <?= date('d/m/Y',strtotime($file['created_at'])) ?>
                        </h6>
                        <h4 class="event-title text-light"><?= $file['file_title'] ?></h4>
                    </div>
                    <!-- Date & Fee -->
                    <div class="date-fee d-flex justify-content-between">
                        <div class="date">
                            <p><i class="fa fa-clock"></i> UPLOAD BY : <?= $file_author['username'] ?></p>
                        </div>
                        <div class="events-fee">
                            <a href="<?= base_url('Download/').$file['file_name'] ?>" id="<?= $file['id_file'] ?>" class="free fa fa-download"></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
            <?php else: ?>
            <div class="col-md-12 mb-5">
                    <div class="alert alert-danger" role="alert">
                      <h4 class="alert-heading"><?= $title; ?> Kosong</h4>
                      <p></p>
                      <hr>
                      <p class="mb-0">
                          Tidak Ada <?= $title; ?>
                      </p>
                    </div>
                </div>    
            <?php endif; ?>
            <!-- Single Blog Area -->
            <div class="col-md-12 text-center mb-5">
                <?= $this->pagination->create_links() ?>
            </div>    
        </div>
    </div>
</section>
<!-- ##### Agenda ##### -->
            </div>
        </div>
    </div>
</div>
<!-- ##### Regular Page Area End ##### -->
<!-- UNIVERSAL FLOATING BACK TO HOME BUTTON -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

<a href="<?= base_url() ?>" 
   style="position: fixed; bottom: 30px; right: 30px; z-index: 9999; background: linear-gradient(135deg, #007bff, #6610f2); 
          color: white; padding: 15px 25px; border-radius: 50px; text-decoration: none; font-family: 'Poppins', sans-serif; 
          font-weight: 600; box-shadow: 0 5px 20px rgba(0, 0, 0, 0.3); transition: 0.3s;">
    <i class="fa fa-home" style="margin-right: 8px;"></i> Home
</a>

