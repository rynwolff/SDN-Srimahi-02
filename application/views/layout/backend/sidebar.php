<ul class="navbar-nav sidebar sidebar-dark accordion shadow-lg" id="accordionSidebar" 
    style="background: linear-gradient(135deg, #2c3e50, #4ca1af); font-family: 'Poppins', sans-serif;">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center py-3" href="<?= base_url('admin/Dashboard') ?>">
        <div class="sidebar-brand-icon bg-white rounded-circle shadow-sm p-2">
            <i class="fas fa-school text-primary"></i>
        </div>
        <div class="sidebar-brand-text mx-3 font-weight-bold">Menu</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Dashboard -->
    <li class="nav-item <?= $this->uri->segment(2) == 'Dashboard' ? 'active' : '' ?>">
        <a class="nav-link" href="<?= base_url('admin/Dashboard') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading text-white-50">
        Menu
    </div>

    <!-- Master Data -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-database"></i>
            <span>Master Data</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded shadow-sm">
                <a class="collapse-item" href="<?= base_url('admin/User') ?>">Pengguna</a>
                <a class="collapse-item" href="<?= base_url('admin/Agenda') ?>">Agenda</a>
                <a class="collapse-item" href="<?= base_url('admin/Blog') ?>">Galeri</a>
                <a class="collapse-item" href="<?= base_url('admin/Pengumuman') ?>">Pengumuman</a>
                <a class="collapse-item" href="<?= base_url('admin/Banner') ?>">Banner</a>
                <a class="collapse-item" href="<?= base_url('admin/Program') ?>">Program</a>
                <a class="collapse-item" href="<?= base_url('admin/Pendaftaran_admin') ?>">Riwayat Pendaftaran</a>
            </div>
        </div>
    </li>

    <!-- Profile -->
    <li class="nav-item <?= $this->uri->segment(2) == 'Profile' ? 'active' : '' ?>">
        <a class="nav-link" href="<?= base_url('admin/Profile') ?>">
            <i class="fas fa-fw fa-user-circle"></i>
            <span>Profile</span>
        </a>
    </li>

    <!-- Change Password -->
    <li class="nav-item <?= $this->uri->segment(2) == 'Change_Password' ? 'active' : '' ?>">
        <a class="nav-link" href="<?= base_url('admin/Change_Password') ?>">
            <i class="fas fa-fw fa-key"></i>
            <span>Ubah Password</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0 shadow-sm" id="sidebarToggle"></button>
    </div>

</ul>
