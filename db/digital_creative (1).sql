-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2018 at 01:25 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `digital_creative`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_album`
--

CREATE TABLE `tbl_album` (
  `album_id` int(11) NOT NULL,
  `album_nama` varchar(50) DEFAULT NULL,
  `album_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `album_pengguna_id` int(11) DEFAULT NULL,
  `album_author` varchar(60) DEFAULT NULL,
  `album_count` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_album`
--

INSERT INTO `tbl_album` (`album_id`, `album_nama`, `album_tanggal`, `album_pengguna_id`, `album_author`, `album_count`) VALUES
(4, 'Beranda_Slider', '2018-10-02 14:26:55', 1, 'Administrator', 4),
(5, 'Tulisan Layanan Beranda', '2018-10-03 06:16:06', 1, 'Administrator', 1),
(6, 'Beranda Foto Layanan', '2018-10-03 06:33:32', 1, 'Administrator', 6),
(7, 'aplikasimobile', '2018-10-03 10:01:08', 1, 'Administrator', 3),
(8, 'website', '2018-10-03 10:01:17', 1, 'Administrator', 1),
(9, 'multimedia', '2018-10-03 10:01:28', 1, 'Administrator', 9),
(10, 'photoproduk', '2018-10-03 10:01:49', 1, 'Administrator', 3),
(11, 'branding', '2018-10-03 10:02:00', 1, 'Administrator', 1),
(12, 'alkena', '2018-10-03 10:04:21', 1, 'Administrator', 3),
(13, 'Header tentang', '2018-10-04 07:51:46', 1, 'Administrator', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_galeri`
--

CREATE TABLE `tbl_galeri` (
  `galeri_id` int(11) NOT NULL,
  `galeri_judul` varchar(60) DEFAULT NULL,
  `galeri_deskripsi` varchar(400) DEFAULT NULL,
  `galeri_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `galeri_gambar` varchar(40) DEFAULT NULL,
  `galeri_album_id` int(11) DEFAULT NULL,
  `galeri_pengguna_id` int(11) DEFAULT NULL,
  `galeri_author` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_galeri`
--

INSERT INTO `tbl_galeri` (`galeri_id`, `galeri_judul`, `galeri_deskripsi`, `galeri_tanggal`, `galeri_gambar`, `galeri_album_id`, `galeri_pengguna_id`, `galeri_author`) VALUES
(16, 'Tingkatkan Usaha Anda Melalui Media Digital', 'Kami siap memenuhi kebutuhan Digital & menggapai tujuan usaha anda', '2018-10-02 14:52:49', 'sliderawal.jpg', 4, 1, 'Administrator'),
(17, 'Foto Produk Dengan Kualitas Terbaik', 'Lebih menarik, Kualitas bagus, dan Cepat', '2018-10-02 14:57:01', 'sliderphotoproduk.jpg', 4, 1, 'Administrator'),
(18, 'Desain Segala Kebutuhan Promosi Anda', 'Tingkatkan harga jual produk anda sekarang juga :D', '2018-10-02 14:58:09', 'design.jpg', 4, 1, 'Administrator'),
(19, 'Pembuatan Website Untuk Usaha Anda', 'Tarik minat customer dengan website anda', '2018-10-02 15:02:14', 'sliderwebsite.jpg', 4, 1, 'Administrator'),
(20, 'Layanan Kami', 'Kami memberikan pelayanan terbaik dalam media digital sesuai dengan kebutuhan klien atau partner untuk menghasilkan keuntungan usaha dan mempermudah prosesnya. Menyusun dan merancang strategi digital promosi maupun marketing serta membangun interaksi yang dilihat dan dirasakan orang.', '2018-10-03 06:16:54', 'AAEA1.jpg', 5, 1, 'Administrator'),
(21, 'Aplikasi Mobile', '', '2018-10-03 06:44:06', 'Aplikasi-Mobile.jpg', 6, 1, 'Administrator'),
(22, 'Website', '', '2018-10-03 06:44:58', 'Website.jpg', 6, 1, 'Administrator'),
(23, 'Multimedia', '', '2018-10-03 06:45:39', 'Multimedia.jpg', 6, 1, 'Administrator'),
(24, 'Konsultasi IT', '', '2018-10-03 06:47:06', 'Konsultasi.jpg', 6, 1, 'Administrator'),
(25, 'Branding', '', '2018-10-03 06:47:37', 'Branding.jpg', 6, 1, 'Administrator'),
(26, 'Kursus Pemrograman', '', '2018-10-03 06:48:48', 'AAEA.jpg', 6, 1, 'Administrator'),
(27, 'alkena', '', '2018-10-03 10:05:26', 'alkena1.jpg', 12, 1, 'Administrator'),
(28, 'alkena', '', '2018-10-03 10:05:26', 'alkena2.jpg', 12, 1, 'Administrator'),
(29, 'alkena', '', '2018-10-03 10:05:27', 'alkena3.jpg', 12, 1, 'Administrator'),
(30, 'P1', '', '2018-10-03 10:40:02', 'bca-1.jpg', 10, 1, 'Administrator'),
(31, 'P1', '', '2018-10-03 10:40:02', 'cover.jpg', 10, 1, 'Administrator'),
(32, 'P1', '', '2018-10-03 10:40:02', 'cover-portofolio.jpg', 10, 1, 'Administrator'),
(33, 'branding', '', '2018-10-03 10:41:34', 'warung-soto-aku.jpg', 11, 1, 'Administrator'),
(35, 'multimedia 1', '', '2018-10-03 10:43:34', 'cover1.jpg', 9, 1, 'Administrator'),
(37, 'multimedia 2', '', '2018-10-03 10:47:10', 'brosur.jpg', 9, 1, 'Administrator'),
(38, 'multimedia 2', '', '2018-10-03 10:47:10', 'brosur2.jpg', 9, 1, 'Administrator'),
(39, 'multimedia 2', '', '2018-10-03 10:47:10', 'brosur3.jpg', 9, 1, 'Administrator'),
(40, 'multimedia 2', '', '2018-10-03 10:47:10', 'brosur4.jpg', 9, 1, 'Administrator'),
(41, 'multimedia 2', '', '2018-10-03 10:47:10', 'cover-portofolio1.jpg', 9, 1, 'Administrator'),
(42, 'multimedia 2', '', '2018-10-03 10:47:11', 'design1.jpg', 9, 1, 'Administrator'),
(43, 'multimedia 3', '', '2018-10-03 10:47:47', 'cover2.jpg', 9, 1, 'Administrator'),
(45, 'hipmi', '', '2018-10-03 10:49:17', 'cover4.jpg', 9, 1, 'Administrator'),
(46, 'w1', '', '2018-10-03 10:50:28', 'cover3.jpg', 8, 1, 'Administrator'),
(47, 'am1', '', '2018-10-03 10:50:57', 'pln.jpg', 7, 1, 'Administrator'),
(48, 'am1', '', '2018-10-03 10:50:57', 'pln-2.jpg', 7, 1, 'Administrator'),
(49, 'am1', '', '2018-10-03 10:50:57', 'pln-3.jpg', 7, 1, 'Administrator'),
(50, 'Hallo! Kami adalah Perusahaan IT Palembang ', '" We Mix Your Idea With Our Digital Creativity "', '2018-10-04 07:54:01', 'sliderawal1.jpg', 13, 1, 'Administrator');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_inbox`
--

CREATE TABLE `tbl_inbox` (
  `inbox_id` int(11) NOT NULL,
  `inbox_nama` varchar(40) DEFAULT NULL,
  `inbox_email` varchar(60) DEFAULT NULL,
  `inbox_kontak` varchar(20) DEFAULT NULL,
  `inbox_pesan` text,
  `inbox_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `inbox_status` int(11) DEFAULT '1' COMMENT '1=Belum dilihat, 0=Telah dilihat'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `kategori_id` int(11) NOT NULL,
  `kategori_nama` varchar(30) DEFAULT NULL,
  `kategori_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`kategori_id`, `kategori_nama`, `kategori_tanggal`) VALUES
(27, 'Multimedia', '2018-10-03 07:44:49'),
(28, 'Website', '2018-10-03 07:45:00'),
(29, 'Mobile', '2018-10-03 07:45:18'),
(30, 'Posting', '2018-10-09 07:27:03');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori_tentang`
--

CREATE TABLE `tbl_kategori_tentang` (
  `kategori_tentang_id` int(11) NOT NULL,
  `kategori_tentang_nama` varchar(200) DEFAULT NULL,
  `kategori_tentang_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kategori_tentang`
--

INSERT INTO `tbl_kategori_tentang` (`kategori_tentang_id`, `kategori_tentang_nama`, `kategori_tentang_tanggal`) VALUES
(1, 'Profile', '2018-10-05 06:18:05'),
(2, 'Quote', '2018-10-05 12:47:07'),
(3, 'get in touch', '2018-10-05 13:05:17'),
(4, 'Footer', '2018-10-05 13:30:24');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengguna`
--

CREATE TABLE `tbl_pengguna` (
  `pengguna_id` int(11) NOT NULL,
  `pengguna_nama` varchar(50) DEFAULT NULL,
  `pengguna_moto` varchar(100) DEFAULT NULL,
  `pengguna_jenkel` varchar(2) DEFAULT NULL,
  `pengguna_username` varchar(30) DEFAULT NULL,
  `pengguna_password` varchar(35) DEFAULT NULL,
  `pengguna_tentang` text,
  `pengguna_email` varchar(50) DEFAULT NULL,
  `pengguna_nohp` varchar(20) DEFAULT NULL,
  `pengguna_facebook` varchar(35) DEFAULT NULL,
  `pengguna_twitter` varchar(35) DEFAULT NULL,
  `pengguna_linkdin` varchar(35) DEFAULT NULL,
  `pengguna_google_plus` varchar(35) DEFAULT NULL,
  `pengguna_status` int(2) DEFAULT '1',
  `pengguna_level` varchar(3) DEFAULT NULL,
  `pengguna_register` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `pengguna_photo` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pengguna`
--

INSERT INTO `tbl_pengguna` (`pengguna_id`, `pengguna_nama`, `pengguna_moto`, `pengguna_jenkel`, `pengguna_username`, `pengguna_password`, `pengguna_tentang`, `pengguna_email`, `pengguna_nohp`, `pengguna_facebook`, `pengguna_twitter`, `pengguna_linkdin`, `pengguna_google_plus`, `pengguna_status`, `pengguna_level`, `pengguna_register`, `pengguna_photo`) VALUES
(1, 'Administrator', 'Just do it', 'L', 'admin', 'e10adc3949ba59abbe56e057f20f883e', '', 'fikrifiver97@gmail.com', '081277159401', 'facebook.com/m_fikri_setiadi', 'twitter.com/fiver_fiver', '', '', 1, '1', '2016-09-03 06:07:55', '74eec6ad37550cc12fe8fa83d46878af.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengunjung`
--

CREATE TABLE `tbl_pengunjung` (
  `pengunjung_id` int(11) NOT NULL,
  `pengunjung_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `pengunjung_ip` varchar(40) DEFAULT NULL,
  `pengunjung_perangkat` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pengunjung`
--

INSERT INTO `tbl_pengunjung` (`pengunjung_id`, `pengunjung_tanggal`, `pengunjung_ip`, `pengunjung_perangkat`) VALUES
(977, '2018-09-24 08:30:27', '::1', 'Chrome'),
(978, '2018-10-01 08:30:27', '::1', 'Chrome'),
(979, '2018-10-02 11:32:22', '::1', 'Chrome'),
(980, '2018-10-03 05:29:41', '::1', 'Chrome'),
(981, '2018-10-04 05:31:44', '::1', 'Chrome'),
(982, '2018-10-05 05:50:13', '::1', 'Chrome'),
(983, '2018-10-07 12:18:59', '::1', 'Chrome'),
(984, '2018-10-09 06:52:18', '::1', 'Chrome');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_post_rating`
--

CREATE TABLE `tbl_post_rating` (
  `rate_id` int(11) NOT NULL,
  `rate_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `rate_ip` varchar(40) DEFAULT NULL,
  `rate_point` int(11) DEFAULT NULL,
  `rate_tulisan_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_post_views`
--

CREATE TABLE `tbl_post_views` (
  `views_id` int(11) NOT NULL,
  `views_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `views_ip` varchar(40) DEFAULT NULL,
  `views_tulisan_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tentang`
--

CREATE TABLE `tbl_tentang` (
  `tentang_id` int(11) NOT NULL,
  `tentang_nama` varchar(100) DEFAULT NULL,
  `tentang_jabatan` varchar(200) DEFAULT NULL,
  `tentang_bijak` varchar(600) DEFAULT NULL,
  `tentang_gambar` varchar(150) DEFAULT NULL,
  `tentang_tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `link_option_1` varchar(200) DEFAULT NULL,
  `link_option_2` varchar(200) DEFAULT NULL,
  `tentang_kategori_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_tentang`
--

INSERT INTO `tbl_tentang` (`tentang_id`, `tentang_nama`, `tentang_jabatan`, `tentang_bijak`, `tentang_gambar`, `tentang_tanggal`, `link_option_1`, `link_option_2`, `tentang_kategori_id`) VALUES
(4, 'Malian', 'CEO', 'you you you', 'kak-zek.jpg', '2018-10-05 06:43:55', 'https://www.facebook.com', 'https://www.facebook.com', 1),
(5, 'Malian', 'CEO', 'you you you', 'bang-tomi.jpg', '2018-10-05 06:45:30', 'https://www.facebook.com', 'https://www.facebook.com', 1),
(6, 'Digital Creative', 'We Mix Your Idea With Our Digital Creativity', 'Headquartered in Palembang, Digital Creative provided IT services for your business needs. We craft software that align with your overall digital strategy. Our goal is to help you achieve your goals in both short and long term. We focus on your goals, your ideas, your needs, your problems, your successes, your constraints, your team, and most importantly your targeted audience. We see ourselves as your allies, ready to do whatever it takes to help you make informed decisions and wise investments in digital, in order to advance your cause.', 'sliderawal2.jpg', '2018-10-05 12:48:34', 'Our mission is mixing your idea with digital creativity to reach your business goal. Our vision is to be recognized as the best software house in Palembang and help the city road to be Palembang Emas.', '', 2),
(7, 'get in touch', ' Jl. Utama, Demang Lebar Daun', 'Tidak menemukan jawaban atas pertanyaan Anda di kami? Ingin menyarankan kerjasama dengan kami? Kirimkan pertanyaan Anda, dan kami akan merespon pertanyaan Anda secepatnya dalam waktu 24 jam!', '1.jpg', '2018-10-05 13:06:36', '0811 7199 210 ', 'admin@digitalcreative.web.id', 0),
(8, 'get in touch', ' Jl. Utama, Demang Lebar Daun', 'Tidak menemukan jawaban atas pertanyaan Anda di kami? Ingin menyarankan kerjasama dengan kami? Kirimkan pertanyaan Anda, dan kami akan merespon pertanyaan Anda secepatnya dalam waktu 24 jam!', '11.jpg', '2018-10-05 13:11:03', '0811 7199 210 ', 'admin@digitalcreative.web.id', 3),
(9, 'admin@digitalcreative.web.id', '0811 7199 210 ', 'Jl. Utama, Demang Lebar Daun, Komplek Demang Ningrat Blok D no D4, Ilir Barat I, Palembang, Sumatera Selatan 30138 ', '100.jpeg', '2018-10-05 13:33:47', 'https://www.facebook.com/Digital-Creative-1215092261929408/', 'https://www.instagram.com/digital_creative/', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tulisan`
--

CREATE TABLE `tbl_tulisan` (
  `tulisan_id` int(11) NOT NULL,
  `tulisan_judul` varchar(200) DEFAULT NULL,
  `tulisan_isi` text,
  `tulisan_harga` varchar(40) DEFAULT NULL,
  `tulisan_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `tulisan_kategori_id` int(11) DEFAULT NULL,
  `tulisan_kategori_nama` varchar(30) DEFAULT NULL,
  `tulisan_album_id` int(11) DEFAULT NULL,
  `tulisan_album_nama` varchar(30) DEFAULT NULL,
  `tulisan_views` int(11) DEFAULT '0',
  `tulisan_gambar` varchar(40) DEFAULT NULL,
  `tulisan_pengguna_id` int(11) DEFAULT NULL,
  `tulisan_author` varchar(40) DEFAULT NULL,
  `tulisan_img_slider` int(2) NOT NULL DEFAULT '0',
  `tulisan_slug` varchar(250) DEFAULT NULL,
  `tulisan_rating` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_tulisan`
--

INSERT INTO `tbl_tulisan` (`tulisan_id`, `tulisan_judul`, `tulisan_isi`, `tulisan_harga`, `tulisan_tanggal`, `tulisan_kategori_id`, `tulisan_kategori_nama`, `tulisan_album_id`, `tulisan_album_nama`, `tulisan_views`, `tulisan_gambar`, `tulisan_pengguna_id`, `tulisan_author`, `tulisan_img_slider`, `tulisan_slug`, `tulisan_rating`) VALUES
(3, 'Album Kenangan (Alkena)', '<p>Setelah bertahun-tahun berlalu. Album kenangan itulah yang berbicara mengenai diri kami, kelas kami dan ke-muda-an kami. Buku ber-cover tebal itu menjadi penghubung kami, antara yang satu dengan yang lain, yang paling penting, menjadi penghubung setiap individu kami dengan sekolah tercinta...</p>', NULL, '2018-10-03 07:48:36', 27, 'Multimedia', 0, '', 0, 'alkena.jpg', 1, 'Administrator', 0, 'album-kenangan-alkena', 0),
(4, 'Pendaftaran Peserta Didik Baru (PPDB) Online', '<p>Sebuah sistem yang dirancang untuk melakukan otomasi seleksi penerimaan siswa baru (PPDB), mulai dari proses pendaftaran,proses seleksi hingga pengumuman hasil seleksi, yang dilakukan secara online dan berbasis waktu nyata (realtime).</p>', NULL, '2018-10-03 07:49:31', 28, 'Website', 0, '', 0, 'ppdb.jpg', 1, 'Administrator', 0, 'pendaftaran-peserta-didik-baru-ppdb-online', 0),
(5, 'POS (Point Of Sale)', '<p>Sebuah sistem yang digunakan untuk mendata transaksi penjualan,  stok/inventori barang, dan mengetahui laporan penjualan serta profit dalam membantu pengelola bisnis</p>', NULL, '2018-10-03 07:50:47', 29, 'Mobile', 0, '', 0, 'POS2.jpg', 1, 'Administrator', 0, 'pos-point-of-sale', 0),
(6, 'Alkena ', '<p>dasda</p>', NULL, '2018-10-09 07:28:24', 30, 'Posting', 12, 'alkena', 0, 'alkena21.jpg', 1, 'Administrator', 0, 'alkena-', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_album`
--
ALTER TABLE `tbl_album`
  ADD PRIMARY KEY (`album_id`),
  ADD KEY `album_pengguna_id` (`album_pengguna_id`);

--
-- Indexes for table `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  ADD PRIMARY KEY (`galeri_id`),
  ADD KEY `galeri_album_id` (`galeri_album_id`),
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
-- Indexes for table `tbl_kategori_tentang`
--
ALTER TABLE `tbl_kategori_tentang`
  ADD PRIMARY KEY (`kategori_tentang_id`);

--
-- Indexes for table `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  ADD PRIMARY KEY (`pengguna_id`);

--
-- Indexes for table `tbl_pengunjung`
--
ALTER TABLE `tbl_pengunjung`
  ADD PRIMARY KEY (`pengunjung_id`);

--
-- Indexes for table `tbl_post_rating`
--
ALTER TABLE `tbl_post_rating`
  ADD PRIMARY KEY (`rate_id`);

--
-- Indexes for table `tbl_post_views`
--
ALTER TABLE `tbl_post_views`
  ADD PRIMARY KEY (`views_id`);

--
-- Indexes for table `tbl_tentang`
--
ALTER TABLE `tbl_tentang`
  ADD PRIMARY KEY (`tentang_id`);

--
-- Indexes for table `tbl_tulisan`
--
ALTER TABLE `tbl_tulisan`
  ADD PRIMARY KEY (`tulisan_id`),
  ADD KEY `tulisan_kategori_id` (`tulisan_kategori_id`),
  ADD KEY `tulisan_pengguna_id` (`tulisan_pengguna_id`),
  ADD KEY `tulisan_album_id` (`tulisan_album_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_album`
--
ALTER TABLE `tbl_album`
  MODIFY `album_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  MODIFY `galeri_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `tbl_inbox`
--
ALTER TABLE `tbl_inbox`
  MODIFY `inbox_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `tbl_kategori_tentang`
--
ALTER TABLE `tbl_kategori_tentang`
  MODIFY `kategori_tentang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  MODIFY `pengguna_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_pengunjung`
--
ALTER TABLE `tbl_pengunjung`
  MODIFY `pengunjung_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=985;
--
-- AUTO_INCREMENT for table `tbl_post_rating`
--
ALTER TABLE `tbl_post_rating`
  MODIFY `rate_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_post_views`
--
ALTER TABLE `tbl_post_views`
  MODIFY `views_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_tentang`
--
ALTER TABLE `tbl_tentang`
  MODIFY `tentang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tbl_tulisan`
--
ALTER TABLE `tbl_tulisan`
  MODIFY `tulisan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
