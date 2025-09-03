<!-- Tambahkan di <head> untuk font premium -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

<style>
.navbar-custom {
    background: linear-gradient(135deg, #2c3e50, #4ca1af) !important;
    padding: 10px 30px !important;
    font-family: 'Poppins', sans-serif !important;
    box-shadow: 0 4px 12px rgba(0,0,0,0.15) !important;
}

.navbar-custom .navbar-brand {
    font-weight: 600 !important;
    font-size: 22px !important;
    color: #fff !important;
}

.navbar-custom .nav-link {
    color: #fff !important;
    margin-left: 20px !important;
    transition: 0.3s !important;
}

.navbar-custom .nav-link:hover {
    color: #f1c40f !important;
}

.navbar-custom .dropdown-menu {
    border: none !important;
    box-shadow: 0 4px 8px rgba(0,0,0,0.15) !important;
}

.navbar-custom .dropdown-item:hover {
    background-color: #f1f1f1 !important;
}

.profile-img {
    width: 40px !important;
    height: 40px !important;
    border-radius: 50% !important;
    object-fit: cover !important;
}
</style>

<nav class="navbar navbar-expand-lg navbar-custom">
  <a class="navbar-brand" href="<?= base_url() ?>">SDN Sriamur 02</a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
    <span class="navbar-toggler-icon"><i class="fa fa-bars text-white"></i></span>
  </button>

  <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
    <ul class="navbar-nav align-items-center">

      <li class="nav-item">
        <a class="nav-link" href="<?= base_url() ?>">Beranda</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/Profile') ?>">Profil</a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown">
          <img class="profile-img" src="<?= base_url('assets/templates/backend/sb-admin-2/img/undraw_profile.svg') ?>" alt="Profile">
          <?= user()->username ?>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="<?= base_url() ?>">
            <i class="fas fa-home fa-sm fa-fw mr-2 text-gray-400"></i> Website
          </a>
          <a class="dropdown-item" href="<?= base_url('admin/Profile') ?>">
            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i> Profile
          </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> Logout
          </a>
        </div>
      </li>

    </ul>
  </div>
</nav>
