<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cetak Laporan Pendaftaran Ekskul</title>
    <link href="<?= base_url('assets/css/sb-admin-2.min.css') ?>" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        .header {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .header img {
            width: 100px;
            height: auto;
            margin-right: 20px;
        }

        .header .text {
            text-align: center;
            flex-grow: 1;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 1rem;
            font-size: 14px;
        }

        th, td {
            padding: .5rem;
            border: 1px solid #dee2e6;
            text-align: left;
        }

        thead th {
            background-color: #343a40;
            color: white;
        }

        .signature {
            width: 100%;
            display: flex;
            justify-content: flex-end;
            margin-top: 60px;
        }

        .signature .content {
            text-align: center;
        }

        @media print {
            .no-print {
                display: none;
            }
        }
    </style>
</head>
<body onload="setTimeout(function(){window.print();}, 500);">

<div class="header">
    <img src="<?= base_url('assets/img/logo/sd.png') ?>" alt="Logo Sekolah">
    <div class="text">
        <h4>Laporan Pendaftaran Ekstrakurikuler</h4>
        <p><?= date('d-m-Y', strtotime($tgl_mulai)) ?> s.d <?= date('d-m-Y', strtotime($tgl_selesai)) ?></p>
    </div>
</div>

<?php if (!empty($history)): ?>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIS</th>
                <th>Kelas</th>
                <th>JK</th>
                <th>HP</th>
                <th>Alamat</th>
                <th>Ekskul</th>
                <th>Tanggal Daftar</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; foreach ($history as $row): ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $row->nama ?></td>
                <td><?= $row->nis ?></td>
                <td><?= $row->kelas ?></td>
                <td><?= $row->jk ?></td>
                <td><?= $row->no_hp ?></td>
                <td><?= $row->alamat ?></td>
                <td><?= $row->nama_ekskul ?></td>
                <td><?= date('d-m-Y H:i', strtotime($row->tgl_daftar)) ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php else: ?>
    <p class="text-muted text-center">Tidak ada data pendaftaran ditemukan untuk rentang tanggal ini.</p>
<?php endif; ?>

<p class="text-right mt-5">Dicetak oleh sistem pada: <?= date('d-m-Y H:i:s'); ?></p>

<!-- Tanda Tangan Pembina -->
<div class="signature">
    <div class="content">
        <p>Mengetahui,</p>
        <p>Pembina Ekstrakurikuler</p>
        <br><br><br>
        <p><u>....................................</u></p>
        <p>NIP: ....................................</p>
    </div>
</div>

</body>
</html>
