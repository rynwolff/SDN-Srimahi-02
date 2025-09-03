<!-- Modal Detail Pengumuman -->
<div class="modal fade" id="modal-pengumuman" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title pengumuman-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p class="detail-pengumuman-modal">
            
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal Detail Pengumuman -->


<!-- Modal Detail Agenda -->
<div class="modal fade" id="modal-agenda" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title agenda-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p class="detail-agenda-modal">
            
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal Detail Agenda -->




   <!-- Footer Start -->
<footer class="footer-clean bg-dark text-light pt-5 pb-3">
  <div class="container">
    <div class="row justify-content-between">

      <!-- Column 1 -->
      <div class="col-md-4 col-sm-6 mb-4">
        <h6 class="text-uppercase font-weight-bold">Tentang Sekolah</h6>
        <ul class="list-unstyled">
          <li><a href="<?= base_url('home/about') ?>">Profil</a></li>
          <li><a href="<?= base_url('program') ?>">Program Unggulan</a></li>
          <li><a href="<?= base_url('home') ?>">Visi & Misi</a></li>
        </ul>
      </div>

      <!-- Column 2 -->
      <div class="col-md-4 col-sm-6 mb-4">
        <h6 class="text-uppercase font-weight-bold">Informasi</h6>
        <ul class="list-unstyled">
          <li><a href="<?= base_url('pengumuman') ?>">Pengumuman</a></li>
          <li><a href="<?= base_url('agenda') ?>">Agenda Sekolah</a></li>
          <li><a href="<?= base_url('home/contact') ?>">Hubungi Kami</a></li>
        </ul>
      </div>

      <!-- Column 3 -->
      <div class="col-md-4 text-center mb-4">
        <img src="<?= base_url('assets/img/logo/sd.png') ?>" width="60" alt="Logo Sekolah" class="mb-2">
        <h6 class="mb-1">SDN SRIMAHI 02</h6>
        <small>Jl. Pendidikan No. 02, Srimahi</small>
      </div>
    </div>

    <div class="row border-top pt-3 mt-3 text-center">
      <div class="col-md-6 text-md-left mb-2 mb-md-0">
        <small>&copy; <?= date('Y') ?> SDN Srimahi 02. All rights reserved.</small>
      </div>
      <div class="col-md-6 text-md-right">
        <a href="#" class="text-light mx-2"><i class="fa fa-facebook"></i></a>
        <a href="#" class="text-light mx-2"><i class="fa fa-instagram"></i></a>
        <a href="#" class="text-light mx-2"><i class="fa fa-youtube"></i></a>
        <a href="#" class="text-light mx-2"><i class="fa fa-envelope"></i></a>
      </div>
    </div>
  </div>
</footer>
<!-- Footer End -->

<!-- Tambahkan di <head> -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
.footer-clean {
  background-color: #111;
  color: #ddd;
  font-size: 14px;
}
.footer-clean a {
  color: #ccc;
  text-decoration: none;
}
.footer-clean a:hover {
  color: #fff;
  text-decoration: underline;
}
.footer-clean h6 {
  color: #fff;
  margin-bottom: 15px;
}
.footer-clean ul {
  padding-left: 0;
  list-style: none;
}
.footer-clean ul li {
  margin-bottom: 10px;
}
.footer-clean .fa {
  font-size: 18px;
  transition: color 0.3s;
}
.footer-clean .fa:hover {
  color: #00acee;
}
</style>

    <!-- ##### Footer Area End ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="<?= base_url() ?>assets/templates/frontend/clever/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="<?= base_url() ?>assets/templates/frontend/clever/js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->  
    <script src="<?= base_url() ?>assets/templates/frontend/clever/js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="<?= base_url() ?>assets/templates/frontend/clever/js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="<?= base_url() ?>assets/templates/frontend/clever/js/active.js"></script>
    
<!-- toast flashdata -->
<?php if ($this->session->flashdata('success')): ?>
<div class="success-message"><?= $this->session->flashdata('success') ?></div>
<script type="text/javascript">
    toastr.success($(".success-message"))
</script>
<?php endif; ?>

<?php if ($this->session->flashdata('info')): ?>
<div class="info-message"><?= $this->session->flashdata('info') ?></div>
<script type="text/javascript">
    toastr.info($(".info-message"))
</script>
<?php endif; ?>

<?php if ($this->session->flashdata('warning')): ?>
<div class="warning-message"><?= $this->session->flashdata('warning') ?></div>
<script type="text/javascript">
    toastr.warning($(".warning-message"))
</script>
<?php endif; ?>

<?php if ($this->session->flashdata('error')): ?>
<div class="error-message"><?= $this->session->flashdata('error') ?></div>
<script type="text/javascript">
    toastr.error($(".error-message"))
</script>
<?php endif; ?>

<script type="text/javascript">
    
    $(".detail-pengumuman").click(function() {
        let id_pengumuman = $(this).attr('id')
        $.ajax({
            url: "<?= base_url('Pengumuman/show_pengumuman/') ?>"+id_pengumuman,
            type: "GET",
            dataType: "JSON",
            success:function(response){
                $("#modal-pengumuman").modal("show")
                $(".detail-pengumuman-modal").html(response.pengumuman_deskripsi)
                $(".pengumuman-title").html(response.pengumuman_nama)
            },
            error:function(){
                console.log('Gagal mengambil data')
            }
        })
    });

    $(".detail-agenda").click(function() {
        let id_agenda = $(this).attr('id')
        $.ajax({
            url: "<?= base_url('Agenda/show_agenda/') ?>"+id_agenda,
            type: "GET",
            dataType: "JSON",
            success:function(response){
                $("#modal-agenda").modal("show")
                $(".detail-agenda-modal").html(response.agenda_deskripsi)
                $(".agenda-title").html(response.agenda_nama)
            },
            error:function(){
                console.log('Gagal mengambil data')
            }
        })
    });

</script>
</body>
</html>