-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2025 at 08:58 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sql_code`
--

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran_ekskul`
--

CREATE TABLE `pendaftaran_ekskul` (
  `id` int(11) NOT NULL,
  `id_program` int(11) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `nis` varchar(20) DEFAULT NULL,
  `kelas` varchar(20) DEFAULT NULL,
  `jk` varchar(20) DEFAULT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `nama_ekskul` varchar(100) DEFAULT NULL,
  `tgl_daftar` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pendaftaran_ekskul`
--

INSERT INTO `pendaftaran_ekskul` (`id`, `id_program`, `nama`, `nis`, `kelas`, `jk`, `no_hp`, `alamat`, `nama_ekskul`, `tgl_daftar`) VALUES
(3, 0, 'Lutfi cina', '20299102939', '2a', 'Laki-laki', '0892218937', 'kp.pisang ijo', 'voli', '2025-06-16 16:29:23'),
(4, 0, 'dina', '120129', '2a', 'Laki-laki', '0892218937', 'kp.gabus pucung', 'renang', '2025-06-16 16:46:35'),
(5, 0, 'dina', '120129', '2a', 'Laki-laki', '0892218937', 'kp.gabus pucung', 'renang', '2025-06-16 16:58:31'),
(6, 0, 'dina', '120129', '2a', 'Laki-laki', '0892218937', 'kp.gabus pucung', 'renang', '2025-06-16 17:00:42'),
(7, 0, 'zaki', '20299102939', '2a', 'Laki-laki', '0892328174', 'kp.rawa lumbu', 'voli', '2025-06-17 03:50:46'),
(8, 0, 'zaki', '20299102939', '2b', 'Laki-laki', '0892218937', 'askmkmwdsjn', 'voli', '2025-06-17 03:55:14'),
(9, 0, 'zaki', '120129', '2b', 'Laki-laki', '0892218937', 'kp.makan', 'voli', '2025-06-17 04:05:23'),
(10, 0, 'dina', '120129', '2a', 'Perempuan', '0892218937', 'jijijjjl', 'renang', '2025-06-17 04:09:41'),
(11, 0, 'zaki', '20299102939', '2b', 'Laki-laki', '0892218937', 'bukvvv', 'renang', '2025-06-17 04:11:24'),
(12, 0, 'zaki', '20299102939', '2b', 'Laki-laki', '0892218937', 'bukvvv', 'renang', '2025-06-17 04:12:05'),
(13, 0, 'zaki', '120129', '2b', 'Laki-laki', '0892218937', 'kasjasjsakwjejwdn', 'voli', '2025-06-18 14:14:46'),
(14, 0, 'zaki', '20299102939', '2b', 'Laki-laki', '0892218937', 'kp.zaki', 'voli', '2025-06-18 14:22:49'),
(15, 0, 'zaki', '20299102939', '2b', 'Laki-laki', '0892218937', 'zkabdhjasabs', 'voli', '2025-06-18 14:28:44'),
(16, 0, 'zaki', '20299102939', '2a', 'Perempuan', '0892328174', 'df gusuuisdsdg', 'voli', '2025-06-18 14:34:24'),
(17, 0, 'dina', '120129', '2a', 'Perempuan', '0892218937', 'bhbiobyvypv', 'voli', '2025-06-18 14:37:32'),
(18, 0, 'dina', '120129', '2a', 'Perempuan', '0892218937', 'bhbiobyvypv', 'voli', '2025-06-18 14:42:58'),
(19, 0, 'zaki', '20299102939', '2b', 'Laki-laki', '0892218937', 'akssakdnnjasd', 'voli', '2025-06-18 14:46:18'),
(20, 0, 'zaki', '202331009', '3a', 'Laki-laki', '089128281727', 'kp gabus', 'pramuka', '2025-06-19 13:08:01'),
(21, 0, 'zaki', '202331009', '3a', 'Laki-laki', '089128281727', 'kp gabus', 'pramuka', '2025-06-19 13:17:40'),
(22, 0, 'muhamad rakha ', '15114164', '2a', 'Laki-laki', '09876796786', 'bkjbkj;bb', 'pramuka', '2025-06-20 07:22:13'),
(23, 0, 'muhamad rakha ', '15114164', '2a', 'Laki-laki', '08988567783', 'sukamakmur', 'pramuka', '2025-06-24 21:47:52'),
(24, NULL, 'muhamad rakha ', '15114164', '2a', 'Perempuan', '08988567783', 'ycjjgcjgcgc', 'pramuka', '2025-06-25 02:02:34'),
(25, NULL, 'muhamad rakha ', '15114164', '2a', 'Laki-laki', '08988567783', 'uohohlblblblj', 'pramuka', '2025-06-25 03:30:38');

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE `program` (
  `id_program` int(11) NOT NULL,
  `nama_program` varchar(255) NOT NULL,
  `deskripsi_program` text DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `detail_program` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`id_program`, `nama_program`, `deskripsi_program`, `gambar`, `created_at`, `detail_program`) VALUES
(15, 'Dokter Cilik ', 'UKS atau Dokcil ini adalah ektrakulikuler untuk merawat dan memberikan pertolongan pertama pada pasien', 'dokcil.jpg', '2025-06-25 19:11:47', 'Dokter Cilik Adalah Program Ekskul Yang Paling Banyak Di Minati Perempuan Khususnya yang bercita cita sebagai dokter'),
(16, 'Pramuka', 'Ekstrakulikuler wajib ', 'pramuka1.jpg', '2025-06-25 19:13:06', 'Ekskul wajib bagi anak anak untuk meningkatakan rasa tanggung jawab dan keberanian serta disiplin.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_agenda`
--

CREATE TABLE `tbl_agenda` (
  `id_agenda` int(11) NOT NULL,
  `agenda_nama` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `agenda_mulai` varchar(45) NOT NULL,
  `agenda_selesai` varchar(45) NOT NULL,
  `agenda_waktu` varchar(45) NOT NULL,
  `agenda_deskripsi` text NOT NULL,
  `agenda_tempat` varchar(255) NOT NULL,
  `agenda_keterangan` text NOT NULL,
  `agenda_author` varchar(255) NOT NULL,
  `agenda_gambar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_agenda`
--

INSERT INTO `tbl_agenda` (`id_agenda`, `agenda_nama`, `created_at`, `agenda_mulai`, `agenda_selesai`, `agenda_waktu`, `agenda_deskripsi`, `agenda_tempat`, `agenda_keterangan`, `agenda_author`, `agenda_gambar`) VALUES
(2, 'persami', '2025-06-25 19:15:06', '2025-07-22', '2025-08-01', '10.00 - 23.00', '<p>perkemahan sabtu minggu dari ekskul pramuka</p>\r\n', 'karawang ', 'kemah sabtu minggu ', 'Administrator', '10b252916c5766b0770b8a0031412633.jpeg'),
(3, 'lomba tari', '2025-06-25 19:16:05', '2025-07-04', '2025-07-12', '10.00 - 23.00', '<p>lomba nasinal berupa tari yang diadkan tahunan</p>\r\n', 'Bandung', 'lomba tingkat nasional ', 'Administrator', 'e33aa67b509bb15a6aba743060e91661.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_balasan`
--

CREATE TABLE `tbl_balasan` (
  `id_balasan` int(11) NOT NULL,
  `balasan_nama` varchar(45) NOT NULL,
  `balasan_isi` text NOT NULL,
  `komentar_id` mediumint(9) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_balasan`
--

INSERT INTO `tbl_balasan` (`id_balasan`, `balasan_nama`, `balasan_isi`, `komentar_id`, `created_at`) VALUES
(1, 'Okaeri', 'mantap mantap\r\n', 3, '2021-06-02 09:26:54'),
(2, 'Arnold Raffles', 'Slurd ngab', 4, '2021-07-09 19:16:03'),
(3, 'puki', 'bacot\r\n', 4, '2025-06-18 13:07:52');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_banner`
--

CREATE TABLE `tbl_banner` (
  `id_banner` int(11) NOT NULL,
  `banner_image` varchar(255) DEFAULT NULL,
  `banner_title` varchar(255) DEFAULT NULL,
  `banner_subtitle` varchar(255) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_banner`
--

INSERT INTO `tbl_banner` (`id_banner`, `banner_image`, `banner_title`, `banner_subtitle`, `is_active`) VALUES
(9, 'b1ccd23c39e697ec7829409efbf799e6.jpeg', 'SELAMAT DATANG DI SDN SRIMAHI 02 TAMBUN UTARA', 'Sekolah Penggerak', 1),
(11, '7d354b4606e7f283e75223e4216ea127.jpg', 'SELAMAT DATANG DI SDN SRIMAHI 02 TAMBUN UTARA', 'Sekolah Penggerak', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blog`
--

CREATE TABLE `tbl_blog` (
  `id_blog` mediumint(9) NOT NULL,
  `blog_slug` varchar(255) NOT NULL,
  `blog_author` varchar(255) NOT NULL,
  `blog_title` varchar(255) NOT NULL,
  `blog_isi` text NOT NULL,
  `blog_img` varchar(255) NOT NULL,
  `blog_thumb` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `blog_kategori_id` smallint(6) NOT NULL,
  `user_id` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_blog`
--

INSERT INTO `tbl_blog` (`id_blog`, `blog_slug`, `blog_author`, `blog_title`, `blog_isi`, `blog_img`, `blog_thumb`, `created_at`, `blog_kategori_id`, `user_id`) VALUES
(2, 'lahan-hijau-milik-bersama', 'Administrator', 'Lahan Hijau Milik Bersama', '<p>Lahan hijau sekolah telah berdiri lama dan telah mndapat respon baik dari siswa dan siswi Sdn Srimahi 02.</p>\r\n', '357393e449d5acedd507fe322fc65c3a.jpg', 'ec3689dcaf88191c21a5116c8a4f9319.jpg', '2025-06-25 17:13:24', 1, 58),
(3, 'ruang-kantor-', 'Administrator', 'Ruang kantor ', '<p>Kantor adalah salah satu undur penting dan harus rapih setiap saat.</p>\r\n', '05741b74ffa84e0145df5233b9b5537d.jpg', '20346fa14ff921ad6414de1de8091f8f.jpg', '2025-06-25 17:13:32', 1, 58),
(4, 'fasilitas-kami', 'Administrator', 'Fasilitas kami', '<p>salah satu fasilitas kami</p>\r\n\r\n<p> </p>\r\n', '36f83a8239d5e38b6038be211d7cfa5b.jpeg', 'c61b9f257c24a54cc2b708c0e097058e.jpeg', '2025-06-25 19:16:44', 1, 58);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jurusan`
--

CREATE TABLE `tbl_jurusan` (
  `id_jurusan` tinyint(4) NOT NULL,
  `nama_jurusan` varchar(255) NOT NULL,
  `nama_lain_jurusan` varchar(55) NOT NULL,
  `deskripsi_jurusan` text NOT NULL,
  `img_jurusan` varchar(255) NOT NULL,
  `kategori_jurusan_id` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_jurusan`
--

INSERT INTO `tbl_jurusan` (`id_jurusan`, `nama_jurusan`, `nama_lain_jurusan`, `deskripsi_jurusan`, `img_jurusan`, `kategori_jurusan_id`) VALUES
(1, 'Anisa Listiani,S.Pd', 'Bu Anisa', 'Guru aktif Di SDN Srimahi 02', 'Anisa Listiani,S.Pd(guru).jpg\r\n', 1),
(2, 'Dina Hanifah S,Sos', 'Bu Dina', 'Guru Aktif Sekaligus penanggung Jawab TU Di SDN Srimahi 02', 'Dina Hanifah S,Sos.(guru) .jpg', 1),
(3, 'boher sahara putra', 'Bpk Boher', 'Penjaga Sekolah SDN Srimahi 02', 'boher sahara putra(penjaga sekolah).jpg', 2),
(4, 'Idup Sutrisna, S.Pd', 'Bpk Idup', 'Guru Aktif Di SDN Srimahi 02', 'Idup Sutrisna, S. Pd. (Guru)_.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori_blog`
--

CREATE TABLE `tbl_kategori_blog` (
  `id_kategori_blog` mediumint(9) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_kategori_blog`
--

INSERT INTO `tbl_kategori_blog` (`id_kategori_blog`, `nama_kategori`) VALUES
(1, 'Fasilitas\r\n'),
(2, 'Acara'),
(3, 'Prestasi'),
(4, 'Kegiatan kunjungan'),
(5, 'Kegiatan Akademik');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori_jurusan`
--

CREATE TABLE `tbl_kategori_jurusan` (
  `id_kategori_jurusan` tinyint(4) NOT NULL,
  `nama_kategori_jurusan` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_kategori_jurusan`
--

INSERT INTO `tbl_kategori_jurusan` (`id_kategori_jurusan`, `nama_kategori_jurusan`) VALUES
(1, 'Guru'),
(2, 'Pegawai');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_komentar`
--

CREATE TABLE `tbl_komentar` (
  `id_komentar` bigint(20) NOT NULL,
  `blog_id` varchar(25) NOT NULL,
  `komentar_nama` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `komentar_isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_komentar`
--

INSERT INTO `tbl_komentar` (`id_komentar`, `blog_id`, `komentar_nama`, `created_at`, `komentar_isi`) VALUES
(1, '28', 'Darmawan', '2020-07-11 14:31:15', 'sssssssssssss'),
(2, '33', 'ashiaaap', '2020-07-26 02:31:10', 'asahsasojaojsoasas'),
(3, '34', 'ashiap', '2021-06-02 09:25:43', 'asasasassmd'),
(4, '1', 'okasas', '2021-07-09 19:15:44', 'asasas\r\nasasasasa');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_log_activity`
--

CREATE TABLE `tbl_log_activity` (
  `id_log_activity` int(11) NOT NULL,
  `log_activity_name` varchar(255) DEFAULT NULL,
  `log_activity_user` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_log_activity`
--

INSERT INTO `tbl_log_activity` (`id_log_activity`, `log_activity_name`, `log_activity_user`, `created_at`) VALUES
(20, 'Logout', 'Administrator', '2025-06-20 05:01:12'),
(21, 'Login', 'Administrator', '2025-06-20 05:25:08'),
(22, 'Logout', 'Administrator', '2025-06-20 05:33:37'),
(23, 'Login', 'Administrator', '2025-06-21 20:30:36'),
(24, 'Logout', 'Administrator', '2025-06-21 22:29:19'),
(25, 'Login', 'Administrator', '2025-06-21 22:36:59'),
(26, 'Logout', 'Administrator', '2025-06-21 22:37:35'),
(27, 'Login', 'Administrator', '2025-06-22 09:19:13'),
(28, 'Logout', 'Administrator', '2025-06-22 09:36:48'),
(29, 'Login', 'Administrator', '2025-06-22 09:48:31'),
(30, 'Login', 'Administrator', '2025-06-24 08:57:36'),
(31, 'Logout', 'Administrator', '2025-06-24 09:00:00'),
(32, 'Login', 'Administrator', '2025-06-24 16:21:23'),
(33, 'Logout', 'Administrator', '2025-06-24 16:23:36'),
(34, 'Login', 'Administrator', '2025-06-24 19:19:32'),
(35, 'Logout', 'Administrator', '2025-06-24 23:45:35'),
(36, 'Login', 'Administrator', '2025-06-24 23:55:00'),
(37, 'Login', 'Administrator', '2025-06-25 17:12:57'),
(38, 'Logout', 'Administrator', '2025-06-25 19:07:19'),
(39, 'Login', 'Administrator', '2025-06-25 19:09:08'),
(40, 'Logout', 'Administrator', '2025-06-25 19:19:22'),
(41, 'Logout', 'Administrator', '2025-06-25 20:43:08');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengumuman`
--

CREATE TABLE `tbl_pengumuman` (
  `id_pengumuman` int(11) NOT NULL,
  `pengumuman_nama` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `pengumuman_deskripsi` text NOT NULL,
  `pengumuman_gambar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_pengumuman`
--

INSERT INTO `tbl_pengumuman` (`id_pengumuman`, `pengumuman_nama`, `created_at`, `pengumuman_deskripsi`, `pengumuman_gambar`) VALUES
(1, 'Pembagian Raport ', '2025-06-25 19:20:58', 'pembagian rapot akan diadakan sebentar lagi!!', 'rapot.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` smallint(6) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `reset_token` varchar(255) DEFAULT NULL,
  `role` enum('admin','user') DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `email`, `password`, `date_created`, `reset_token`, `role`) VALUES
(58, 'Administrator', 'admin@gmail.com', '$2y$10$py3PJYhcwRMEZfTtyf2y2uiydzmLG/AGOqoRlJLFzIXos0g2JaJBG', '2025-06-24 08:56:41', '14a739e65bbde951bca7293a25b0f9101ab25a4575662da9d3a1fba456295cf3', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pendaftaran_ekskul`
--
ALTER TABLE `pendaftaran_ekskul`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`id_program`);

--
-- Indexes for table `tbl_agenda`
--
ALTER TABLE `tbl_agenda`
  ADD PRIMARY KEY (`id_agenda`);

--
-- Indexes for table `tbl_balasan`
--
ALTER TABLE `tbl_balasan`
  ADD PRIMARY KEY (`id_balasan`);

--
-- Indexes for table `tbl_banner`
--
ALTER TABLE `tbl_banner`
  ADD PRIMARY KEY (`id_banner`);

--
-- Indexes for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  ADD PRIMARY KEY (`id_blog`);

--
-- Indexes for table `tbl_jurusan`
--
ALTER TABLE `tbl_jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `tbl_kategori_blog`
--
ALTER TABLE `tbl_kategori_blog`
  ADD PRIMARY KEY (`id_kategori_blog`);

--
-- Indexes for table `tbl_kategori_jurusan`
--
ALTER TABLE `tbl_kategori_jurusan`
  ADD PRIMARY KEY (`id_kategori_jurusan`);

--
-- Indexes for table `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indexes for table `tbl_log_activity`
--
ALTER TABLE `tbl_log_activity`
  ADD PRIMARY KEY (`id_log_activity`);

--
-- Indexes for table `tbl_pengumuman`
--
ALTER TABLE `tbl_pengumuman`
  ADD PRIMARY KEY (`id_pengumuman`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pendaftaran_ekskul`
--
ALTER TABLE `pendaftaran_ekskul`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `program`
--
ALTER TABLE `program`
  MODIFY `id_program` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_agenda`
--
ALTER TABLE `tbl_agenda`
  MODIFY `id_agenda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_balasan`
--
ALTER TABLE `tbl_balasan`
  MODIFY `id_balasan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_banner`
--
ALTER TABLE `tbl_banner`
  MODIFY `id_banner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  MODIFY `id_blog` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_jurusan`
--
ALTER TABLE `tbl_jurusan`
  MODIFY `id_jurusan` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_kategori_blog`
--
ALTER TABLE `tbl_kategori_blog`
  MODIFY `id_kategori_blog` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_kategori_jurusan`
--
ALTER TABLE `tbl_kategori_jurusan`
  MODIFY `id_kategori_jurusan` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  MODIFY `id_komentar` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_log_activity`
--
ALTER TABLE `tbl_log_activity`
  MODIFY `id_log_activity` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `tbl_pengumuman`
--
ALTER TABLE `tbl_pengumuman`
  MODIFY `id_pengumuman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
