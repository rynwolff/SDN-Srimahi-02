<!-- Load Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

<div class="container py-5" style="font-family: 'Poppins', sans-serif;">
    <?php if ($check_agenda > 0): ?>
        <div class="section-heading text-center mb-5">
            <h3><?= $title; ?></h3>
            <div class="line mx-auto my-3"></div>
        </div>
    <?php endif; ?>

    <div class="row">
        <?php if ($check_agenda > 0): ?>
            <?php foreach ($all_agenda as $agenda): ?>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="single-upcoming-events shadow">
                        <div class="events-thumb">
                            <?php if (!empty($agenda['agenda_gambar'])): ?>
                                <img src="<?= base_url('assets/img/agenda/' . $agenda['agenda_gambar']) ?>" alt="<?= $agenda['agenda_nama'] ?>">
                            <?php else: ?>
                                <img src="<?= base_url('assets/img/background/hd.jpg') ?>" alt="Default Image">
                            <?php endif; ?>
                            <div class="event-date">
                                <?= date('d/m/Y', strtotime($agenda['agenda_mulai'])) ?> - <?= date('d/m/Y', strtotime($agenda['agenda_selesai'])) ?>
                            </div>
                            <div class="event-title">
                                <?= htmlspecialchars($agenda['agenda_nama']) ?>
                            </div>
                        </div>
                        <div class="date-fee d-flex justify-content-between align-items-center">
                            <div>
                                <p class="mb-0"><i class="fa fa-map-pin"></i> <?= htmlspecialchars($agenda['agenda_tempat']) ?></p>
                            </div>
                            <a href="<?= base_url('agenda/detail/'.$agenda['id_agenda']) ?>" class="btn btn-gradient btn-sm rounded-pill shadow-sm px-4 py-2">
                                <i class="fa fa-info-circle me-1"></i> Detail
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <div class="col-12 text-center">
                <div class="alert alert-danger">Belum ada agenda tersedia.</div>
            </div>
        <?php endif; ?>
    </div>

    <div class="text-center mt-5">
        <?= $this->pagination->create_links() ?>
    </div>
</div>

<!-- Styling -->
<style>
body {
    font-family: 'Poppins', sans-serif;
    background: #f9f9f9;
}
.line {
    width: 80px;
    height: 5px;
    background: linear-gradient(135deg, #007bff, #6610f2);
    border-radius: 50px;
}
.single-upcoming-events {
    background: #fff;
    border-radius: 20px;
    overflow: hidden;
    transition: 0.4s;
    height: 100%;
}
.single-upcoming-events:hover {
    transform: translateY(-8px);
    box-shadow: 0 12px 30px rgba(0,0,0,0.2);
}
.events-thumb {
    position: relative;
    width: 100%;
    height: 220px;
    overflow: hidden;
}
.events-thumb img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: 0.4s;
}
.single-upcoming-events:hover img {
    transform: scale(1.05);
}
.event-date {
    position: absolute;
    top: 15px;
    left: 15px;
    background: linear-gradient(135deg, #007bff, #6610f2);
    color: #fff;
    padding: 8px 18px;
    border-radius: 50px;
    font-size: 0.8rem;
    font-weight: 600;
    box-shadow: 0 3px 8px rgba(0,0,0,0.3);
}
.event-title {
    position: absolute;
    bottom: 0;
    width: 100%;
    background: rgba(0,0,0,0.6);
    color: #fff;
    padding: 12px 16px;
    font-size: 1.1rem;
    font-weight: 600;
    text-align: center;
}
.date-fee {
    padding: 16px 20px;
    border-top: 1px solid #eee;
    background-color: #fafafa;
}
.btn-gradient {
    background: linear-gradient(135deg, #007bff, #6610f2);
    border: none;
    color: #fff;
    transition: 0.3s;
}
.btn-gradient:hover {
    background: linear-gradient(135deg, #6610f2, #007bff);
    transform: scale(1.05);
}
</style>

<!-- UNIVERSAL FLOATING BACK TO HOME BUTTON -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

<a href="<?= base_url() ?>" 
   style="position: fixed; bottom: 30px; right: 30px; z-index: 9999; background: linear-gradient(135deg, #007bff, #6610f2); 
          color: white; padding: 15px 25px; border-radius: 50px; text-decoration: none; font-family: 'Poppins', sans-serif; 
          font-weight: 600; box-shadow: 0 5px 20px rgba(0, 0, 0, 0.3); transition: 0.3s;">
    <i class="fa fa-home" style="margin-right: 8px;"></i> Home
</a>
