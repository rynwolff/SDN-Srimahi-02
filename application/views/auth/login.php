<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SDN Srimahi 02 - Login</title>

    <!-- Font Awesome -->
    <link href="<?= base_url('assets/templates/backend/sb-admin-2/') ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap" rel="stylesheet">
    <!-- SB Admin -->
    <link href="<?= base_url('assets/templates/backend/sb-admin-2/') ?>css/sb-admin-2.min.css" rel="stylesheet">
    <!-- SweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        body {
            background: url('<?= base_url('assets/img/srimahi/sd1.jpg') ?>') no-repeat center center fixed;
            background-size: cover;
            font-family: 'Nunito', sans-serif;
            position: relative;
            overflow: hidden;
        }

        .overlay {
            position: absolute;
            top: 0; left: 0;
            width: 100%; height: 100%;
            background: rgba(0,0,0,0.5);
            backdrop-filter: blur(10px);
            z-index: 0;
        }

        .login-card {
            background: rgba(255,255,255,0.15);
            backdrop-filter: blur(15px);
            border: 1px solid rgba(255,255,255,0.2);
            border-radius: 20px;
            box-shadow: 0 8px 32px rgba(0,0,0,0.4);
            animation: slideDown 1s ease;
            z-index: 1;
        }

        @keyframes slideDown {
            0% { transform: translateY(-50px); opacity: 0; }
            100% { transform: translateY(0); opacity: 1; }
        }

        .logo {
            width: 100px;
            margin-bottom: 20px;
            animation: fadeIn 2s;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        .form-control-user {
            border-radius: 50rem;
            padding: 1.5rem 1rem;
            font-weight: 500;
        }

        .btn-user {
            border-radius: 50rem;
            padding: 1rem;
            font-weight: bold;
        }

        .show-password {
            position: absolute;
            right: 20px;
            top: 18px;
            cursor: pointer;
            color: #aaa;
        }
        .btn-danger {
    background: linear-gradient(45deg, #e74c3c, #c0392b);
    border: none;
    transition: transform 0.3s, box-shadow 0.3s;
}
.btn-danger:hover {
    transform: scale(1.05);
    box-shadow: 0 4px 15px rgba(0,0,0,0.3);
}

    </style>
</head>

<body>

<div class="overlay"></div>

<div class="container">
    <div class="row justify-content-center align-items-center min-vh-100">
        <div class="col-xl-4 col-lg-5 col-md-7">
            <div class="card login-card p-4">
                <div class="card-body text-center">
                    <img src="<?= base_url('assets/img/logo/sd.png') ?>" class="logo" alt="Logo">
                    <h3 class="text-white font-weight-bold mb-3">Welcome Back!</h3>
                    <p class="text-white-50 mb-4">Silahkan login ke akun Anda</p>

                    <!-- Flashdata Error -->
                    <?php if($this->session->flashdata('error')): ?>
                        <script>
                            document.addEventListener("DOMContentLoaded", function() {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Oops...',
                                    text: '<?= $this->session->flashdata('error'); ?>',
                                    timer: 3000,
                                    showConfirmButton: false
                                });
                            });
                        </script>
                    <?php endif; ?>

                    <form class="user" method="POST" action="<?= base_url('auth/Login/check') ?>">
    <div class="form-group position-relative">
        <input name="email" type="email" class="form-control form-control-user" placeholder="Email" required>
    </div>
    <div class="form-group position-relative">
        <input name="password" type="password" id="password" class="form-control form-control-user" placeholder="Password" required>
        <span class="show-password" onclick="togglePassword()">
            <i class="fas fa-eye" id="icon-eye"></i>
        </span>
    </div>

    <!-- Tombol Login -->
    <button type="submit" class="btn btn-primary btn-user btn-block mb-2">
        <i class="fas fa-sign-in-alt mr-2"></i> Login
    </button>

    <!-- Tombol Cancel -->
    <a href="<?= base_url() ?>" class="btn btn-danger btn-user btn-block">
        <i class="fas fa-home mr-2"></i> Cancel / Kembali ke Home
    </a>

</form>


                    <hr>
                    <div class="text-center">
                        <a class="text-white-50 small" href="<?= base_url('auth/login/forgot') ?>">Lupa Password?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- JS -->
<script src="<?= base_url('assets/templates/backend/sb-admin-2/') ?>vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/templates/backend/sb-admin-2/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('assets/templates/backend/sb-admin-2/') ?>js/sb-admin-2.min.js"></script>

<script>
    function togglePassword() {
        const pass = document.getElementById("password");
        const icon = document.getElementById("icon-eye");
        if (pass.type === "password") {
            pass.type = "text";
            icon.classList.remove("fa-eye");
            icon.classList.add("fa-eye-slash");
        } else {
            pass.type = "password";
            icon.classList.remove("fa-eye-slash");
            icon.classList.add("fa-eye");
        }
    }
</script>

</body>
</html>
