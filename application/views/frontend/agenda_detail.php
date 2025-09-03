<!-- Load Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
<!-- Load AOS Animation -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">

<div class="container py-5" style="font-family: 'Poppins', sans-serif;">

    <!-- Header -->
    <div class="text-center mb-5" data-aos="fade-down">
        <h1 class="display-4 fw-bold gradient-text"><?= htmlspecialchars($agenda['agenda_nama']); ?></h1>
        <p class="text-secondary fs-5">
            <?= date('d F Y', strtotime($agenda['created_at'])) ?>
        </p>
        <div class="line mx-auto mb-4"></div>
    </div>

    <!-- Image -->
    <div class="text-center mb-4" data-aos="zoom-in">
        <img src="<?= !empty($agenda['agenda_gambar']) 
                    ? base_url('assets/img/agenda/'.$agenda['agenda_gambar']) 
                    : base_url('assets/img/background/hd.jpg') ?>" 
            class="img-fluid rounded shadow-lg" 
            style="max-height: 400px; object-fit: cover;" 
            alt="Gambar Agenda">
    </div>

    <!-- Detail Agenda -->
    <div class="mx-auto" style="max-width: 800px;" data-aos="fade-up">
        <table class="table table-borderless fs-5">
            <tr>
                <th>Tanggal Mulai</th>
                <td>: <?= date('d F Y', strtotime($agenda['agenda_mulai'])) ?></td>
            </tr>
            <tr>
                <th>Tanggal Selesai</th>
                <td>: <?= date('d F Y', strtotime($agenda['agenda_selesai'])) ?></td>
            </tr>
            <tr>
                <th>Waktu</th>
                <td>: <?= htmlspecialchars($agenda['agenda_waktu']) ?></td>
            </tr>
            <tr>
                <th>Tempat</th>
                <td>: <?= htmlspecialchars($agenda['agenda_tempat']) ?></td>
            </tr>
            <tr>
                <th>Penanggung Jawab</th>
                <td>: <?= htmlspecialchars($agenda['agenda_author']) ?></td>
            </tr>
            <tr>
                <th>Keterangan</th>
                <td>: <?= nl2br(htmlspecialchars($agenda['agenda_keterangan'])) ?></td>
            </tr>
        </table>

        <!-- Deskripsi -->
        <div class="mt-5">
            <h4 class="mb-3">Deskripsi</h4>
            <?php if (!empty(strip_tags($agenda['agenda_deskripsi']))): ?>
                <div class="fs-5 text-justify"><?= $agenda['agenda_deskripsi'] ?></div>
            <?php else: ?>
                <p class="fs-5 text-muted">Tidak ada deskripsi.</p>
            <?php endif; ?>
        </div>

        <div class="text-center mt-5">
            <a href="<?= base_url('agenda') ?>" class="btn btn-gradient btn-lg rounded-pill px-5 shadow-sm">
                <i class="fa fa-arrow-left me-2"></i> Kembali
            </a>
        </div>
    </div>
</div>

<!-- Styling -->
<style>
    body { background-color: #FAFAFA; }
    .line {
        width: 80px;
        height: 5px;
        background: linear-gradient(135deg, #007bff, #6610f2);
        border-radius: 50px;
    }
    .gradient-text {
        background: linear-gradient(135deg, #007bff, #6610f2);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }
    .btn-gradient {
        background: linear-gradient(135deg, #007bff, #6610f2);
        border: none;
        color: #fff;
        transition: 0.3s;
    }
    .btn-gradient:hover {
        background: linear-gradient(135deg, #6610f2, #007bff);
    }
</style>

<!-- Load AOS Animation JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>AOS.init({ duration: 1000 });</script>
