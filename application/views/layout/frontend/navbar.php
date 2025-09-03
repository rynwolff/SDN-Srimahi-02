<header class="premium-navbar">
  <div class="navbar-container">
    <div class="navbar-left">
  <div class="logo-wrapper">
    <a class="nav-brand" href="javascript:void(0);" onclick="handleLogoClick()">
    <img src="<?= base_url('assets/img/logo/sd.png') ?>" width="45" alt="Logo">
</a>

<script>
    let clickCount = 0;

    function handleLogoClick() {
        clickCount++;
        if (clickCount === 3) {
            window.location.href = "<?= base_url('auth/login') ?>"; // Ganti dengan URL login kamu
        }

        // Reset jika tidak diklik lagi dalam 5 detik
        setTimeout(() => {
            clickCount = 0;
        }, 5000);
    }
</script>
  </div>
  <div class="brand-text">
    <span class="brand-title">SDN Srimahi</span>
    <span class="brand-subtitle">02</span>
  </div>
</div>

    <ul class="navbar-menu">
      <li><a href="<?= base_url('Home') ?>" class="<?= $this->uri->segment(1) == 'Home' ? 'active' : '' ?>"><i class="fa fa-home"></i> Home</a></li>
      <li><a href="<?= base_url('Home/about') ?>" class="<?= $this->uri->segment(2) == 'about' ? 'active' : '' ?>"><i class="fa fa-info-circle"></i> About</a></li>
      <li><a href="<?= base_url('Home/contact') ?>" class="<?= $this->uri->segment(2) == 'contact' ? 'active' : '' ?>"><i class="fa fa-phone"></i> Contact</a></li>
      <li><a href="<?= base_url('Blog') ?>" class="<?= $this->uri->segment(1) == 'Blog' ? 'active' : '' ?>"><i class="fa fa-image"></i> Galeri</a></li>
      <li><a href="<?= base_url('Pengumuman') ?>" class="<?= $this->uri->segment(1) == 'Pengumuman' ? 'active' : '' ?>"><i class="fa fa-bullhorn"></i> Pengumuman</a></li>
      <li><a href="<?= base_url('Agenda') ?>" class="<?= $this->uri->segment(1) == 'Agenda' ? 'active' : '' ?>"><i class="fa fa-calendar"></i> Agenda</a></li>
      <li><a href="<?= base_url('Program') ?>" class="<?= $this->uri->segment(1) == 'Program' ? 'active' : '' ?>"><i class="fa fa-book"></i> Program</a></li>
    </ul>
    <div class="navbar-search">
      <form action="<?= base_url('Search') ?>" method="post">
  <input type="text" name="keyword" placeholder="Cari...">
  <?= get_csrf() ?>
  <button type="submit"><i class="fa fa-search"></i></button>
</form>
    </div>
  </div>
</header>
<style>
.premium-navbar {
  background: rgba(255, 255, 255, 0.9);
  backdrop-filter: blur(8px);
  box-shadow: 0 4px 20px rgba(0,0,0,0.2);
  padding: 10px 30px;
  position: fixed;
  width: 100%;
  top: 0;
  z-index: 999;
}

.navbar-container {
  display: flex;
  align-items: center;
  justify-content: space-between;
  flex-wrap: wrap;
}

.navbar-left {
  display: flex;
  align-items: center;
  gap: 15px;
}

.logo {
  width: 50px;
  height: 50px;
  border-radius: 50%;
  box-shadow: 0 4px 10px rgba(0,0,0,0.3);
  transition: transform 0.3s ease;
}

.logo:hover {
  transform: scale(1.1);
}

.brand-text {
  display: flex;
  flex-direction: column;
  font-family: 'Poppins', sans-serif;
}

.brand-title {
  font-size: 20px;
  font-weight: 700;
  color: #222;
  text-shadow: 1px 1px 3px rgba(0,0,0,0.25);
}

.brand-subtitle {
  font-size: 16px;
  font-weight: 600;
  color: #004990;
}

.navbar-menu {
  display: flex;
  align-items: center;
  gap: 20px;
  list-style: none;
  padding-left: 0;
  margin-left: 40px;
}

.navbar-menu li a {
  text-decoration: none;
  color: #333;
  font-weight: 500;
  padding: 8px 14px;
  border-radius: 8px;
  transition: 0.3s ease;
  display: flex;
  align-items: center;
  gap: 8px;
}

.navbar-menu li a:hover {
  background: linear-gradient(135deg, #007bff, #004990);
  color: #fff !important;
  box-shadow: 0 4px 10px rgba(0,0,0,0.2);
}

.navbar-menu li a.active {
  background: rgba(0, 73, 144, 0.1);
  color: #004990 !important;
  font-weight: 600;
  box-shadow: 0 2px 6px rgba(0,0,0,0.1);
}

.navbar-search {
  position: relative;
}

.navbar-search input {
  padding: 8px 40px 8px 15px;
  border-radius: 20px;
  border: none;
  box-shadow: inset 0 0 8px rgba(0,0,0,0.15);
  background: rgba(255,255,255,0.8);
  width: 200px;
}

.navbar-search button {
  position: absolute;
  right: 10px;
  top: 50%;
  transform: translateY(-50%);
  border: none;
  background: none;
  color: #004990;
  font-size: 16px;
  cursor: pointer;
}
.logo-wrapper {
  width: 55px;
  height: 55px;
  background: white;
  border-radius: 50%;
  box-shadow: 0 4px 10px rgba(0,0,0,0.3);
  display: flex;
  align-items: center;
  justify-content: center;
  overflow: hidden;
}

.logo {
  width: 100%;
  height: auto;
  object-fit: contain;
  transition: transform 0.3s ease;
}

.logo:hover {
  transform: scale(1.1);
}

</style>