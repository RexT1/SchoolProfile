-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2023 at 08:19 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smpypmii`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_about`
--

CREATE TABLE `tbl_about` (
  `about_id` int(11) NOT NULL,
  `about_sambutan` text DEFAULT NULL,
  `about_visi` text DEFAULT NULL,
  `about_misi` text DEFAULT NULL,
  `about_pengguna_id` int(11) DEFAULT NULL,
  `about_author` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_about`
--

INSERT INTO `tbl_about` (`about_id`, `about_sambutan`, `about_visi`, `about_misi`, `about_pengguna_id`, `about_author`) VALUES
(1, '<p>Assalamualaikum Warahmatullahi Wabarakatuh,<br />\r\nPuji syukur kehadirat Allah SWT, Tuhan Yang Maha Kuasa, atas limpahan Nikmat Taufik dan HidayahNya. Selamat datang di website SMP YPMII Jakarta yang hadir untuk warga SMP YPMII Jakarta dan masyarakat umum yang ingin mendapat informasi seputar program, layanan dan kegiatan di SMP YPMII Jakarta. Perkembangan teknologi informasi yang begitu pesat dan cepat menuntut dunia pendidikan untuk selalu update terhadap informasi baru mengenai suatu hal atau peristiwa. Sekolah mempunyai andil besar terhadap publik service, dituntut untuk selalu siap terhadap perkembangan keadaan dan perkembangan teknologi informasi. Oleh karena itu perlu dimanifestasikan melalui pelayanan informasi kepada masyarakat, khususnya pelayanan terhadap peserta didik yang dijabarkan dalam bentuk pengelolaan website SMP YPMII Jakarta. Adanya web sekolah saat ini dipandang sangat urgen dan sinkron dengan era perkembangan revolusi industri 4.0 yang membutuhkan akses informasi cepat, akurat, efektif dan efisien sebagai penggerak partisipasi seluruh warga sekolah dan pemangku kepentingan (stakeholders), sumber informasi, mendukung program, mewujudkan harmoni antar sesama warga sekolah, membuka kran komunikasi, media promosi dan publikasi keunggulan sekolah kepada masyarakat serta ajang silaturahmi dengan berbagai pihak demi kemajuan sekolah. Semoga website sekolah ini dapat menjadi wahana sumber informasi publik kepada masyarakat luas tentang perkembangan SMP YPMII Jakarta, menjadi wahana pengembangan diri baik bagi pendidik, tenaga kependidikan maupun peserta didik, juga sebagai sarana komunikasi warga sekolah orang tua dan juga alumni maupun masyarakat luas sehingga diharapkan dapat menjadi sebuah sinergi guna membentuk sekolah yang kondusif guna perbaikan mutu pendidikan.<br />\r\nWassalamualaikum Warahmatullahi Wabarakatuh.</p>\r\n\r\n<p><br />\r\nKepala SMP YPMII,</p>\r\n\r\n<p>Muh. Fanar ,SH</p>\r\n', 'Berbasis iman dan taqwa dan mengedepankan dalam bidang akademik dan berdasarkan Pancasila dan UUD 1945.', '<p>1. Memberi layanan belajar yang efektif, efisien dan kondusif.</p>\r\n\r\n<p>2. Mengembangkan sikap kerja keras dan tekun.</p>\r\n\r\n<p>3. Menyelenggarakan dan menyiapkan peserta didik yang mandiri, produktif dan terampil.</p>\r\n\r\n<p>4. Mendorong peserta didik melaksanakan perintah agama melalui pendekatan ibadah.</p>\r\n', 1, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_agenda`
--

CREATE TABLE `tbl_agenda` (
  `agenda_id` int(11) NOT NULL,
  `agenda_nama` varchar(200) DEFAULT NULL,
  `agenda_tanggal` timestamp NULL DEFAULT current_timestamp(),
  `agenda_deskripsi` text DEFAULT NULL,
  `agenda_mulai` date DEFAULT NULL,
  `agenda_selesai` date DEFAULT NULL,
  `agenda_tempat` varchar(90) DEFAULT NULL,
  `agenda_waktu` varchar(30) DEFAULT NULL,
  `agenda_keterangan` varchar(200) DEFAULT NULL,
  `agenda_pengguna_id` int(11) DEFAULT NULL,
  `agenda_author` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_agenda`
--

INSERT INTO `tbl_agenda` (`agenda_id`, `agenda_nama`, `agenda_tanggal`, `agenda_deskripsi`, `agenda_mulai`, `agenda_selesai`, `agenda_tempat`, `agenda_waktu`, `agenda_keterangan`, `agenda_pengguna_id`, `agenda_author`) VALUES
(2, 'Peresmian dan Launching Website Perdana SMP YPMII Jakarta', '2023-07-17 16:05:24', 'SMP YPMII Jakarta telah meresmikan peresmian dan Launching  Website http://smpypmii-jkt.sch.id oleh Kepala Sekolah, Bapak Muh. Fanar S.H yang bertempat di Ruang Guru sekolah SMP YPMII. Dengan bangga, kepala sekolah menyampaikan bahwa dengan adanya Website sekolah ini akan menjadikan informasi-informasi yang bisa dengan mudah diakses, dilihat, dan diketahui oleh orang banyak dan layanannya untuk menampung aspirasi dari masyarakat, baik pertanyaan, saran, maupun masukan, serta untuk meningkatkan pelayanan dalam rangka kelengkapan informasi publik, sehingga pelayanan kedepannya dapat dilakukan secara efektif dan optimal. Harapannya website ini akan memperkuat hubungan antara sekolah dan orangtua serta memberikan pengalaman browsing yang menyenangkan dan akses informasi yang lebih efisien bagi seluruh stakeholder pendidikan. Acara peresmian dan peluncuran website ini menjadi langkah awal dalam membangun komunitas edukasi yang semakin kuat dan berdaya saing bagi generasi penerus bangsa.', '2023-08-03', '2023-08-03', 'Jakarta', '10.00 - 12.00', 'Peresmian dan Launching Website Perdana SMP YPMII Jakarta', 1, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_galeri`
--

CREATE TABLE `tbl_galeri` (
  `galeri_id` int(11) NOT NULL,
  `galeri_judul` varchar(60) DEFAULT NULL,
  `galeri_tanggal` timestamp NULL DEFAULT current_timestamp(),
  `galeri_gambar` varchar(40) DEFAULT NULL,
  `galeri_pengguna_id` int(11) DEFAULT NULL,
  `galeri_author` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_galeri`
--

INSERT INTO `tbl_galeri` (`galeri_id`, `galeri_judul`, `galeri_tanggal`, `galeri_gambar`, `galeri_pengguna_id`, `galeri_author`) VALUES
(1, 'Ekstrakurikuler Futsal', '2023-07-16 06:26:06', 'b980a35a73d3a00eca3f539172736779.png', 1, 'Admin'),
(2, 'Ekstrakurikuler Pramuka', '2023-07-16 06:26:29', '806576aa4abc16c6b6c669bb9d671d1c.png', 1, 'Admin'),
(3, 'Kegiatan Lab Komputer', '2023-07-16 06:37:12', '2aa9c9672a8aacd77a5892c11e52e6ac.png', 1, 'Admin'),
(4, 'Kegiatan LDKS', '2023-07-16 06:37:26', 'bd91300a59d4f7131907f5368d5848c1.png', 1, 'Admin'),
(5, 'Sholat Dhuha Berjamaah', '2023-07-16 07:46:49', 'c6375309e241195a6d6a4118c1b86711.png', 1, 'Admin'),
(6, 'Sholat Berjamaah', '2023-07-16 07:47:17', 'a673d79af693393a1144fa21b80fc1c6.png', 1, 'Admin'),
(7, 'Kegiatan MPLS', '2023-07-28 16:39:17', '473d3a78c7a87bd6b4c24c2d648d9897.png', 1, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_inbox`
--

CREATE TABLE `tbl_inbox` (
  `inbox_id` int(11) NOT NULL,
  `inbox_nama` varchar(40) DEFAULT NULL,
  `inbox_email` varchar(60) DEFAULT NULL,
  `inbox_kontak` varchar(20) DEFAULT NULL,
  `inbox_pesan` text DEFAULT NULL,
  `inbox_tanggal` timestamp NULL DEFAULT current_timestamp(),
  `inbox_status` int(11) DEFAULT 1 COMMENT '1=Belum dilihat, 0=Telah dilihat'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_inbox`
--

INSERT INTO `tbl_inbox` (`inbox_id`, `inbox_nama`, `inbox_email`, `inbox_kontak`, `inbox_pesan`, `inbox_tanggal`, `inbox_status`) VALUES
(1, 'Aqmal', 'admin@admin.sch.id', '12345678', 'Test', '2023-07-25 10:04:09', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `kategori_id` int(11) NOT NULL,
  `kategori_nama` varchar(30) DEFAULT NULL,
  `kategori_tanggal` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`kategori_id`, `kategori_nama`, `kategori_tanggal`) VALUES
(1, 'Pendidikan', '2023-07-16 08:15:31'),
(2, 'Ekstrakurikuler', '2023-07-16 08:15:47'),
(3, 'Kegiatan Sekolah', '2023-07-16 08:16:07');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_komentar`
--

CREATE TABLE `tbl_komentar` (
  `komentar_id` int(11) NOT NULL,
  `komentar_nama` varchar(30) DEFAULT NULL,
  `komentar_email` varchar(50) DEFAULT NULL,
  `komentar_isi` varchar(120) DEFAULT NULL,
  `komentar_tanggal` timestamp NULL DEFAULT current_timestamp(),
  `komentar_status` varchar(2) DEFAULT NULL,
  `komentar_tulisan_id` int(11) DEFAULT NULL,
  `komentar_pengguna_id` int(11) DEFAULT NULL,
  `komentar_parent` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_komentar`
--

INSERT INTO `tbl_komentar` (`komentar_id`, `komentar_nama`, `komentar_email`, `komentar_isi`, `komentar_tanggal`, `komentar_status`, `komentar_tulisan_id`, `komentar_pengguna_id`, `komentar_parent`) VALUES
(1, 'Aqmal', 'aqmal@a.id', ' Tes', '2023-07-21 09:22:11', '1', 1, NULL, 0),
(4, 'Aqmal', 'aqmal.idris01@gmail.com', 'Apakah masih bisa mendaftar?', '2023-08-04 03:50:46', '1', 1, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengguna`
--

CREATE TABLE `tbl_pengguna` (
  `pengguna_id` int(11) NOT NULL,
  `pengguna_nama` varchar(50) DEFAULT NULL,
  `pengguna_jenkel` varchar(2) DEFAULT NULL,
  `pengguna_username` varchar(30) DEFAULT NULL,
  `pengguna_password` varchar(35) DEFAULT NULL,
  `pengguna_email` varchar(50) DEFAULT NULL,
  `pengguna_nohp` varchar(20) DEFAULT NULL,
  `pengguna_status` int(2) DEFAULT 1,
  `pengguna_level` varchar(3) DEFAULT NULL,
  `pengguna_register` timestamp NULL DEFAULT current_timestamp(),
  `pengguna_photo` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pengguna`
--

INSERT INTO `tbl_pengguna` (`pengguna_id`, `pengguna_nama`, `pengguna_jenkel`, `pengguna_username`, `pengguna_password`, `pengguna_email`, `pengguna_nohp`, `pengguna_status`, `pengguna_level`, `pengguna_register`, `pengguna_photo`) VALUES
(1, 'Admin', 'L', 'admin', '0196708f83ab4744d9c30c9a799b5bd8', 'smpypmii@gmail.com', '089695447715', 1, '1', '2023-07-10 09:57:17', 'c121dab82e91dd2da78047a14c0699ec.png'),
(2, 'Aqmal', 'L', 'aqmal', '202cb962ac59075b964b07152d234b70', 'aqmal.idris01@gmail.com', '081389003636', 1, '1', '2023-07-10 09:58:37', 'e224368a205ffec1b91bf66e4a6bc2b3.jpg'),
(3, 'Muh. Fanar', 'L', 'kepsek', '202cb962ac59075b964b07152d234b70', 'admin@admin.sch.id', '0812345678', 1, '2', '2023-07-11 08:30:03', '7065d0a7e493e918a56c6b98d4b40775.jpg'),
(4, 'Guru', 'L', 'guru', '202cb962ac59075b964b07152d234b70', 'admin@admin.sch.id', '0812345678', 1, '2', '2023-07-11 10:14:37', '38151e7544d418d86d1ba412ad8eeefa.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengumuman`
--

CREATE TABLE `tbl_pengumuman` (
  `pengumuman_id` int(11) NOT NULL,
  `pengumuman_judul` varchar(150) DEFAULT NULL,
  `pengumuman_deskripsi` text DEFAULT NULL,
  `pengumuman_tanggal` timestamp NULL DEFAULT current_timestamp(),
  `pengumuman_pengguna_id` int(11) DEFAULT NULL,
  `pengumuman_author` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pengumuman`
--

INSERT INTO `tbl_pengumuman` (`pengumuman_id`, `pengumuman_judul`, `pengumuman_deskripsi`, `pengumuman_tanggal`, `pengumuman_pengguna_id`, `pengumuman_author`) VALUES
(2, 'Peresmian dan Launching Website Perdana SMP YPMII Jakarta', 'SMP YPMII Jakarta telah meresmikan peresmian dan Launching  Website smpypmii-jkt.sch.id oleh Kepala Sekolah, Bapak Muh. Fanar ,SH yang bertempat di Ruang Guru sekolah SMP YPMII. Dengan bangga, kepala sekolah menyampaikan bahwa dengan adanya Website sekolah ini akan menjadikan informasi-informasi yang bisa dengan mudah diakses, dilihat, dan diketahui oleh orang banyak dan layanannya untuk menampung aspirasi dari masyarakat, baik pertanyaan, saran, maupun masukan, serta untuk meningkatkan pelayanan dalam rangka kelengkapan informasi publik, sehingga pelayanan kedepannya dapat dilakukan secara efektif dan optimal. Harapannya website ini akan memperkuat hubungan antara sekolah dan orangtua serta memberikan pengalaman browsing yang menyenangkan dan akses informasi yang lebih efisien bagi seluruh stakeholder pendidikan. Acara peresmian dan peluncuran website ini menjadi langkah awal dalam membangun komunitas edukasi yang semakin kuat dan berdaya saing bagi generasi penerus bangsa.', '2023-08-03 01:04:43', 1, 'Aqmal');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengunjung`
--

CREATE TABLE `tbl_pengunjung` (
  `pengunjung_id` int(11) NOT NULL,
  `pengunjung_tanggal` timestamp NULL DEFAULT current_timestamp(),
  `pengunjung_ip` varchar(40) DEFAULT NULL,
  `pengunjung_perangkat` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pengunjung`
--

INSERT INTO `tbl_pengunjung` (`pengunjung_id`, `pengunjung_tanggal`, `pengunjung_ip`, `pengunjung_perangkat`) VALUES
(1, '2023-07-10 09:50:46', '::1', 'Chrome'),
(2, '2023-07-11 11:44:49', '::1', 'Chrome'),
(3, '2023-07-14 14:46:35', '::1', 'Chrome'),
(4, '2023-07-16 05:28:23', '::1', 'Chrome'),
(5, '2023-07-17 07:33:57', '::1', 'Chrome'),
(6, '2023-07-17 15:54:09', '127.0.0.1', 'Firefox'),
(7, '2023-07-18 04:24:33', '::1', 'Chrome'),
(8, '2023-07-19 07:00:01', '::1', 'Chrome'),
(9, '2023-07-21 03:17:19', '::1', 'Chrome'),
(10, '2023-07-22 09:15:27', '::1', 'Chrome'),
(11, '2023-07-24 02:20:55', '::1', 'Chrome'),
(12, '2023-07-24 02:34:01', '127.0.0.1', 'Firefox'),
(13, '2023-07-25 07:08:26', '::1', 'Chrome'),
(14, '2023-07-26 09:38:39', '::1', 'Chrome'),
(15, '2023-07-26 17:03:49', '::1', 'Chrome'),
(16, '2023-07-28 08:25:40', '::1', 'Chrome'),
(17, '2023-07-28 17:00:49', '::1', 'Chrome'),
(18, '2023-07-30 11:14:47', '::1', 'Chrome'),
(19, '2023-07-31 16:37:38', '::1', 'Chrome'),
(20, '2023-08-01 17:04:51', '::1', 'Chrome'),
(21, '2023-08-02 17:15:45', '::1', 'Chrome'),
(22, '2023-08-04 03:26:26', '::1', 'Chrome'),
(23, '2023-08-07 18:16:24', '::1', 'Chrome');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slider`
--

CREATE TABLE `tbl_slider` (
  `slider_id` int(11) NOT NULL,
  `slider_judul` varchar(60) CHARACTER SET latin1 DEFAULT NULL,
  `slider_tanggal` timestamp NULL DEFAULT current_timestamp(),
  `slider_gambar` varchar(40) CHARACTER SET latin1 DEFAULT NULL,
  `slider_pengguna_id` int(11) DEFAULT NULL,
  `slider_author` varchar(60) CHARACTER SET latin1 DEFAULT NULL,
  `slider_status` enum('On','Off') CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_slider`
--

INSERT INTO `tbl_slider` (`slider_id`, `slider_judul`, `slider_tanggal`, `slider_gambar`, `slider_pengguna_id`, `slider_author`, `slider_status`) VALUES
(1, 'Guru', '2023-07-18 12:56:11', '6a476c9013759dfade54d076719749ee.jpg', 1, 'Admin', 'On'),
(2, 'Gedung Sekolah', '2023-07-18 13:23:22', '301ed611fa24b35c7d85ebf7be3be988.png', 1, 'Admin', 'On'),
(3, 'Kegiatan MPLS', '2023-07-21 08:02:55', '51ceee80dd489550e2a448065c27be03.png', 1, 'Admin', 'On');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tulisan`
--

CREATE TABLE `tbl_tulisan` (
  `tulisan_id` int(11) NOT NULL,
  `tulisan_judul` varchar(100) DEFAULT NULL,
  `tulisan_isi` text DEFAULT NULL,
  `tulisan_tanggal` timestamp NULL DEFAULT current_timestamp(),
  `tulisan_kategori_id` int(11) DEFAULT NULL,
  `tulisan_kategori_nama` varchar(30) DEFAULT NULL,
  `tulisan_views` int(11) DEFAULT 0,
  `tulisan_gambar` varchar(40) DEFAULT NULL,
  `tulisan_pengguna_id` int(11) DEFAULT NULL,
  `tulisan_author` varchar(40) DEFAULT NULL,
  `tulisan_slug` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_tulisan`
--

INSERT INTO `tbl_tulisan` (`tulisan_id`, `tulisan_judul`, `tulisan_isi`, `tulisan_tanggal`, `tulisan_kategori_id`, `tulisan_kategori_nama`, `tulisan_views`, `tulisan_gambar`, `tulisan_pengguna_id`, `tulisan_author`, `tulisan_slug`) VALUES
(1, 'Menerima Peserta Didik Baru Tahun Pelajaran 2023-2024', '<p>Penerimaan Peserta Didik Baru PPDB Tahun 2023/2024</p>\r\n\r\n<p>Mulai Pendaftaran:<br />\r\nApril - Juli 2023<br />\r\nJam:&nbsp; 08.00 s/d 15.00 WIB</p>\r\n\r\n<p>Tempat Pendaftaran<br />\r\nDaftar langsung ke SMP YPMII<br />\r\nAlamat:&nbsp;Jl. Masjid II No.17, RT.4/RW.4, Rw. Bunga, Kecamatan Jatinegara, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13350</p>\r\n\r\n<p>Hubungi Panitia PPDB:</p>\r\n\r\n<ol>\r\n	<li>Dewi Kurnia : 0877-7300-7456</li>\r\n	<li>Nurfajrina : 0857-1118-5582&nbsp;</li>\r\n	<li>Abdul Rahman : 0813-1992-0817</li>\r\n</ol>\r\n', '2023-07-16 08:25:21', 1, 'Pendidikan', 23, 'cf69314486f86069010636a51e9b903d.png', 1, 'Admin', 'menerima-peserta-didik-baru-tahun-pelajaran-2023-2024'),
(2, 'Kegiatan Belajar Lab Komputer', '<p>Menelusuri dunia teknologi di balik layar!<br />\r\nNikmati momen seru dan informatif dalam Kegiatan Belajar Lab Komputer kami. Bersama para ahli di bidangnya, siswa-siswi&nbsp;kami akan mengeksplorasi penggunaan komputer, dan teknologi terkini. Mari berpetualang bersama menuju masa depan digital yang cerdas dan penuh prestasi!&nbsp;</p>\r\n', '2023-07-25 03:28:25', 3, 'Kegiatan Sekolah', 25, 'd91c826b203a305e86325b699d8370b8.png', 1, 'Admin', 'kegiatan-belajar-lab-komputer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_about`
--
ALTER TABLE `tbl_about`
  ADD PRIMARY KEY (`about_id`),
  ADD KEY `about_pengguna_id` (`about_pengguna_id`);

--
-- Indexes for table `tbl_agenda`
--
ALTER TABLE `tbl_agenda`
  ADD PRIMARY KEY (`agenda_id`),
  ADD KEY `agenda_pengguna_id` (`agenda_pengguna_id`);

--
-- Indexes for table `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  ADD PRIMARY KEY (`galeri_id`),
  ADD KEY `galeri_pengguna_id` (`galeri_pengguna_id`);

--
-- Indexes for table `tbl_inbox`
--
ALTER TABLE `tbl_inbox`
  ADD PRIMARY KEY (`inbox_id`);

--
-- Indexes for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indexes for table `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  ADD PRIMARY KEY (`komentar_id`),
  ADD KEY `komentar_tulisan_id` (`komentar_tulisan_id`),
  ADD KEY `komentar_pengguna_id` (`komentar_pengguna_id`);

--
-- Indexes for table `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  ADD PRIMARY KEY (`pengguna_id`);

--
-- Indexes for table `tbl_pengumuman`
--
ALTER TABLE `tbl_pengumuman`
  ADD PRIMARY KEY (`pengumuman_id`),
  ADD KEY `pengumuman_pengguna_id` (`pengumuman_pengguna_id`);

--
-- Indexes for table `tbl_pengunjung`
--
ALTER TABLE `tbl_pengunjung`
  ADD PRIMARY KEY (`pengunjung_id`);

--
-- Indexes for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  ADD PRIMARY KEY (`slider_id`),
  ADD KEY `slider_pengguna_id` (`slider_pengguna_id`);

--
-- Indexes for table `tbl_tulisan`
--
ALTER TABLE `tbl_tulisan`
  ADD PRIMARY KEY (`tulisan_id`),
  ADD KEY `tulisan_kategori_id` (`tulisan_kategori_id`),
  ADD KEY `tulisan_pengguna_id` (`tulisan_pengguna_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_about`
--
ALTER TABLE `tbl_about`
  MODIFY `about_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_agenda`
--
ALTER TABLE `tbl_agenda`
  MODIFY `agenda_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  MODIFY `galeri_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_inbox`
--
ALTER TABLE `tbl_inbox`
  MODIFY `inbox_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  MODIFY `komentar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  MODIFY `pengguna_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_pengumuman`
--
ALTER TABLE `tbl_pengumuman`
  MODIFY `pengumuman_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_pengunjung`
--
ALTER TABLE `tbl_pengunjung`
  MODIFY `pengunjung_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_tulisan`
--
ALTER TABLE `tbl_tulisan`
  MODIFY `tulisan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_about`
--
ALTER TABLE `tbl_about`
  ADD CONSTRAINT `tbl_about_about_pengguna_id_foreign` FOREIGN KEY (`about_pengguna_id`) REFERENCES `tbl_pengguna` (`pengguna_id`) ON DELETE CASCADE;

--
-- Constraints for table `tbl_agenda`
--
ALTER TABLE `tbl_agenda`
  ADD CONSTRAINT `tbl_agenda_agenda_pengguna_id_foreign` FOREIGN KEY (`agenda_pengguna_id`) REFERENCES `tbl_pengguna` (`pengguna_id`);

--
-- Constraints for table `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  ADD CONSTRAINT `tbl_galeri_galeri_pengguna_id_foreign` FOREIGN KEY (`galeri_pengguna_id`) REFERENCES `tbl_pengguna` (`pengguna_id`) ON DELETE CASCADE;

--
-- Constraints for table `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  ADD CONSTRAINT `tbl_komentar_komentar_pengguna_id_foreign` FOREIGN KEY (`komentar_pengguna_id`) REFERENCES `tbl_pengguna` (`pengguna_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tbl_komentar_komentar_tulisan_id_foreign` FOREIGN KEY (`komentar_tulisan_id`) REFERENCES `tbl_tulisan` (`tulisan_id`) ON DELETE CASCADE;

--
-- Constraints for table `tbl_pengumuman`
--
ALTER TABLE `tbl_pengumuman`
  ADD CONSTRAINT `tbl_pengumuman_pengumuman_pengguna_id_foreign` FOREIGN KEY (`pengumuman_pengguna_id`) REFERENCES `tbl_pengguna` (`pengguna_id`) ON DELETE CASCADE;

--
-- Constraints for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  ADD CONSTRAINT `tbl_slider_slider_pengguna_id_foreign` FOREIGN KEY (`slider_pengguna_id`) REFERENCES `tbl_pengguna` (`pengguna_id`) ON DELETE CASCADE;

--
-- Constraints for table `tbl_tulisan`
--
ALTER TABLE `tbl_tulisan`
  ADD CONSTRAINT `tbl_tulisan_tulisan_kategori_id_foreign` FOREIGN KEY (`tulisan_kategori_id`) REFERENCES `tbl_kategori` (`kategori_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tbl_tulisan_tulisan_pengguna_id_foreign` FOREIGN KEY (`tulisan_pengguna_id`) REFERENCES `tbl_pengguna` (`pengguna_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
