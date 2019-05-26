-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Bulan Mei 2019 pada 11.57
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_diskumdag`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_album`
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
-- Dumping data untuk tabel `tbl_album`
--

INSERT INTO `tbl_album` (`album_id`, `album_nama`, `album_tanggal`, `album_pengguna_id`, `album_author`, `album_count`) VALUES
(1, 'slider', '2019-05-20 08:41:10', 1, 'Administrator', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_album_pengumuman`
--

CREATE TABLE `tbl_album_pengumuman` (
  `album_id` int(11) NOT NULL,
  `album_tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `album_kategori_id` int(11) NOT NULL,
  `album_nama` varchar(60) NOT NULL,
  `album_gambar` varchar(60) NOT NULL,
  `tulisan_pengguna_id` int(11) NOT NULL,
  `author` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_album_pengumuman`
--

INSERT INTO `tbl_album_pengumuman` (`album_id`, `album_tanggal`, `album_kategori_id`, `album_nama`, `album_gambar`, `tulisan_pengguna_id`, `author`) VALUES
(1, '2019-05-24 09:47:22', 1, 'Hasil Seleksi Penerimaan Pengadaan PJLP Keamanan di Sudin KU', 'pengumuman211.jpg', 1, 'Administrator'),
(2, '2019-05-24 09:47:46', 1, 'Hasil Seleksi Penerimaan Pengadaan PJLP Keamanan di Sudin KU', 'pengumuman112.jpg', 1, 'Administrator'),
(3, '2019-05-25 06:05:35', 2, 'Pengumuman Hasil Seleksi Administrasi PJLP Keamanan di Lingk', '20052019141600-0001-670x1024.jpg', 1, 'Administrator'),
(4, '2019-05-25 06:06:02', 2, 'Pengumuman Hasil Seleksi Administrasi PJLP Keamanan di Lingk', '20052019141600-0002-670x1024.jpg', 1, 'Administrator'),
(5, '2019-05-25 10:40:05', 3, 'Pengumuman Penerimaan PJLP Keamanan di Lingkungan Lokasi Bin', 'Pengumumanpjlp1.jpg', 1, 'Administrator'),
(6, '2019-05-25 10:40:36', 3, 'Pengumuman Penerimaan PJLP Keamanan di Lingkungan Lokasi Bin', 'Pengumumanpjlp2.jpg', 1, 'Administrator'),
(7, '2019-05-25 10:41:01', 3, 'Pengumuman Penerimaan PJLP Keamanan di Lingkungan Lokasi Bin', 'Pengumumanpjlp3.jpg', 1, 'Administrator'),
(8, '2019-05-25 10:43:58', 4, 'Pengumuman Penerimaan PJLP Pendamping Pengembangan Kewirausa', 'pjlp2019.jpg', 1, 'Administrator'),
(9, '2019-05-25 10:44:19', 4, 'Pengumuman Penerimaan PJLP Pendamping Pengembangan Kewirausa', 'pjlp20192.jpg', 1, 'Administrator'),
(10, '2019-05-25 10:44:43', 4, 'Pengumuman Penerimaan PJLP Pendamping Pengembangan Kewirausa', 'pjlp20193.jpg', 1, 'Administrator');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_galeri`
--

CREATE TABLE `tbl_galeri` (
  `galeri_id` int(11) NOT NULL,
  `galeri_judul` varchar(80) DEFAULT NULL,
  `galeri_deskripsi` varchar(2000) DEFAULT NULL,
  `galeri_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `galeri_gambar` varchar(40) DEFAULT NULL,
  `galeri_album_id` int(11) DEFAULT NULL,
  `galeri_pengguna_id` int(11) DEFAULT NULL,
  `galeri_author` varchar(60) DEFAULT NULL,
  `galeri_slug` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_galeri`
--

INSERT INTO `tbl_galeri` (`galeri_id`, `galeri_judul`, `galeri_deskripsi`, `galeri_tanggal`, `galeri_gambar`, `galeri_album_id`, `galeri_pengguna_id`, `galeri_author`, `galeri_slug`) VALUES
(1, 'APBD 2018 Dinas KUKMP', 'APBD 2018 Dinas KUKMP', '2019-05-20 00:55:18', 'info-grafis1.png', 1, 1, 'Administrator', 'APBD2018DinasKUKMP'),
(2, 'PASAR TERTIB UKUR DKI JAKARTA', 'PASAR TERTIB UKUR DKI JAKARTA', '2019-05-20 01:05:27', 'info-grafis11.jpg', 1, 1, 'Administrator', 'PASARTERTIBUKURDKIJAKARTA'),
(3, 'Konsep OK OCE (Pewira Usaha Baru)', 'Konsep OK OCE (Pewira Usaha Baru)', '2019-05-20 01:06:01', 'OK-OCE-copy1.jpg', 1, 1, 'Administrator', 'KonsepOKOCEPewiraUsahaBaru'),
(4, 'RPP Transaksi Perdagangan E-Comemerce', 'RPP Transaksi Perdagangan E-Comemerce', '2019-05-20 01:06:33', 'info-grafis21.jpg', 1, 1, 'Administrator', ''),
(5, 'Ekspor Impor Provinsi DKI Jakarta 2016', 'Ekspor Impor Provinsi DKI Jakarta 2016', '2019-05-20 01:07:39', 'info-grafis32.jpg', 1, 1, 'Administrator', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_inbox`
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

--
-- Dumping data untuk tabel `tbl_inbox`
--

INSERT INTO `tbl_inbox` (`inbox_id`, `inbox_nama`, `inbox_email`, `inbox_kontak`, `inbox_pesan`, `inbox_tanggal`, `inbox_status`) VALUES
(1, 'FUAD WAHID', 'kabarifuad@gmail.com', NULL, '', '2019-05-26 09:09:28', 1),
(2, 'FUAD WAHID', 'kabarifuad@gmail.com', NULL, '', '2019-05-26 09:13:48', 1),
(3, 'FUAD WAHID', 'kabarifuad@gmail.com', NULL, '', '2019-05-26 09:14:08', 1),
(4, 'FUAD WAHID', 'kabarifuad@gmail.com', NULL, '', '2019-05-26 09:14:11', 1),
(5, 'FUAD WAHID', 'kabarifuad@gmail.com', NULL, '', '2019-05-26 09:16:36', 1),
(6, 'FUAD WAHID', 'kabarifuad@gmail.com', NULL, '', '2019-05-26 09:16:49', 1),
(7, 'FUAD WAHID', 'kabarifuad@gmail.com', NULL, '', '2019-05-26 09:16:58', 1),
(8, 'FUAD WAHID', 'kabarifuad@gmail.com', NULL, '', '2019-05-26 09:17:07', 1),
(9, 'FUAD WAHID', 'kabarifuad@gmail.com', NULL, '', '2019-05-26 09:17:33', 1),
(10, 'FUAD WAHID', 'kabarifuad@gmail.com', NULL, '', '2019-05-26 09:17:44', 1),
(11, 'FUAD WAHID', 'kabarifuad@gmail.com', NULL, '', '2019-05-26 09:18:23', 1),
(12, 'FUAD WAHID', 'kabarifuad@gmail.com', NULL, '', '2019-05-26 09:19:13', 1),
(13, 'FUAD WAHID', 'kabarifuad@gmail.com', NULL, '', '2019-05-26 09:19:46', 1),
(14, 'FUAD WAHID', 'kabarifuad@gmail.com', NULL, '', '2019-05-26 09:20:10', 1),
(15, '', '', NULL, '', '2019-05-26 09:20:29', 1),
(16, '', '', NULL, '', '2019-05-26 09:20:33', 1),
(17, '', '', NULL, '', '2019-05-26 09:20:41', 1),
(18, '', '', NULL, '', '2019-05-26 09:20:44', 1),
(19, '', '', NULL, '', '2019-05-26 09:22:51', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `kategori_id` int(11) NOT NULL,
  `kategori_nama` varchar(30) DEFAULT NULL,
  `kategori_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`kategori_id`, `kategori_nama`, `kategori_tanggal`) VALUES
(1, 'Home', '2019-05-20 05:53:30'),
(2, 'Slider', '2019-05-20 06:07:25'),
(3, 'Pengumuan', '2019-05-20 09:20:25'),
(4, 'Berita', '2019-05-21 04:51:28'),
(5, 'Vidio', '2019-05-21 07:07:54'),
(6, 'visi', '2019-05-21 10:56:49'),
(7, 'Stuktur Organisasi', '2019-05-21 13:29:11'),
(8, 'Tugas Pokok', '2019-05-21 13:30:49'),
(9, 'Pejabat DInas', '2019-05-21 13:36:05'),
(10, 'Pelayanan Koperasi', '2019-05-22 00:02:41'),
(11, 'Pelayanan perdagangan', '2019-05-22 07:34:39'),
(12, 'Pelaynan_metrologi', '2019-05-22 07:55:21'),
(13, 'Pelaynan_metrologi_1', '2019-05-22 08:21:52'),
(14, 'Berita UKM', '2019-05-25 23:36:08'),
(15, 'Berita Koperasi', '2019-05-25 23:36:20'),
(16, 'Berita Perdagangan', '2019-05-25 23:36:39'),
(17, 'Wasdal PK', '2019-05-25 23:36:50'),
(18, 'Berita UPM', '2019-05-25 23:37:00'),
(19, 'Berita KUKMP', '2019-05-25 23:37:14'),
(20, 'Berita UPK PPUKMP Pulogadung ', '2019-05-25 23:37:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kategori_tentang`
--

CREATE TABLE `tbl_kategori_tentang` (
  `kategori_tentang_id` int(11) NOT NULL,
  `kategori_tentang_nama` varchar(200) DEFAULT NULL,
  `kategori_tentang_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pengguna`
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
-- Dumping data untuk tabel `tbl_pengguna`
--

INSERT INTO `tbl_pengguna` (`pengguna_id`, `pengguna_nama`, `pengguna_moto`, `pengguna_jenkel`, `pengguna_username`, `pengguna_password`, `pengguna_tentang`, `pengguna_email`, `pengguna_nohp`, `pengguna_facebook`, `pengguna_twitter`, `pengguna_linkdin`, `pengguna_google_plus`, `pengguna_status`, `pengguna_level`, `pengguna_register`, `pengguna_photo`) VALUES
(1, 'Administrator', 'Just do it', 'L', 'admin', '21232f297a57a5a743894a0e4a801fc3', '', 'fikrifiver97@gmail.com', '081277159401', 'facebook.com/m_fikri_setiadi', 'twitter.com/fiver_fiver', '', '', 1, '1', '2016-09-03 06:07:55', '74eec6ad37550cc12fe8fa83d46878af.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pengumuman`
--

CREATE TABLE `tbl_pengumuman` (
  `tulisan_id` int(11) NOT NULL,
  `tanggal_pengumuman` date NOT NULL,
  `tulisan_judul` varchar(200) DEFAULT NULL,
  `tulisan_isi` text,
  `tulisan_harga` varchar(40) DEFAULT NULL,
  `tulisan_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `tulisan_views` int(11) DEFAULT '0',
  `tulisan_gambar` varchar(40) DEFAULT NULL,
  `tulisan_pengguna_id` int(11) DEFAULT NULL,
  `tulisan_author` varchar(40) DEFAULT NULL,
  `tulisan_img_slider` int(2) NOT NULL DEFAULT '0',
  `tulisan_slug` text,
  `tulisan_rating` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pengumuman`
--

INSERT INTO `tbl_pengumuman` (`tulisan_id`, `tanggal_pengumuman`, `tulisan_judul`, `tulisan_isi`, `tulisan_harga`, `tulisan_tanggal`, `tulisan_views`, `tulisan_gambar`, `tulisan_pengguna_id`, `tulisan_author`, `tulisan_img_slider`, `tulisan_slug`, `tulisan_rating`) VALUES
(1, '2019-05-23', 'Hasil Seleksi Penerimaan Pengadaan PJLP Keamanan di Sudin KUKMP Kota Administrasi Jakarta Timur Tahun Anggaran 2019', 'Content Web', NULL, '2019-05-24 09:46:21', 0, NULL, 1, 'Administrator', 0, 'hasilseleksipenerimaanpengadaanpjlpkeamanandisudinkukmpkotaadministrasijakartatimurtahunanggaran2019', 0),
(2, '2019-05-20', 'Pengumuman Hasil Seleksi Administrasi PJLP Keamanan di Lingkungan Lokbin Wilayah Kota Administrasi Jakarta Timur', 'Content Web', NULL, '2019-05-25 05:53:07', 0, NULL, 1, 'Administrator', 0, 'pengumumanhasilseleksiadministrasipjlpkeamanandilingkunganlokbinwilayahkotaadministrasijakartatimur', 0),
(3, '2019-05-10', 'Pengumuman Penerimaan PJLP Keamanan di Lingkungan Lokasi Binaa  (Lokbin) Wilayah Kota Administrasi Jakarta Timur', 'Content Web', NULL, '2019-05-25 05:55:19', 0, NULL, 1, 'Administrator', 0, 'pengumumanpenerimaanpjlpkeamanandilingkunganlokasibinaalokbinwilayahkotaadministrasijakartatimur', 0),
(4, '2019-02-20', 'Pengumuman Penerimaan PJLP Pendamping Pengembangan Kewirausahaan Terpadu (PKT) Tingkat Kecamatan Sudin KUKMP Kota Administrasi Jakarta Selatan Tahun Anggaran 2019', 'Content Web', NULL, '2019-05-25 05:56:06', 0, NULL, 1, 'Administrator', 0, 'pengumumanpenerimaanpjlppendampingpengembangankewirausahaanterpadupkttingkatkecamatansudinkukmpkotaadministrasijakartaselatantahunanggaran2019', 0),
(5, '2019-01-25', 'Pengumuman Penerimaan PJLP Keamanan DInas Kopersai, UKM serta Perdagangan Prov. DKI Jakarta', 'Content Web', NULL, '2019-05-25 05:57:14', 0, NULL, 1, 'Administrator', 0, 'pengumumanpenerimaanpjlpkeamanandinaskopersaiukmsertaperdaganganprovdkijakarta', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pengunjung`
--

CREATE TABLE `tbl_pengunjung` (
  `pengunjung_id` int(11) NOT NULL,
  `pengunjung_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `pengunjung_ip` varchar(40) DEFAULT NULL,
  `pengunjung_perangkat` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pengunjung`
--

INSERT INTO `tbl_pengunjung` (`pengunjung_id`, `pengunjung_tanggal`, `pengunjung_ip`, `pengunjung_perangkat`) VALUES
(977, '2018-09-24 08:30:27', '::1', 'Chrome'),
(978, '2018-10-01 08:30:27', '::1', 'Chrome'),
(979, '2018-10-02 11:32:22', '::1', 'Chrome'),
(980, '2018-10-03 05:29:41', '::1', 'Chrome'),
(981, '2018-10-04 05:31:44', '::1', 'Chrome'),
(982, '2018-10-05 05:50:13', '::1', 'Chrome'),
(983, '2018-10-07 12:18:59', '::1', 'Chrome'),
(984, '2018-10-09 06:52:18', '::1', 'Chrome'),
(985, '2019-04-16 12:38:32', '::1', 'Chrome'),
(986, '2019-04-18 03:51:06', '::1', 'Chrome'),
(987, '2019-04-20 06:27:25', '::1', 'Chrome'),
(988, '2019-04-24 11:12:08', '::1', 'Chrome'),
(989, '2019-04-24 17:17:31', '::1', 'Chrome'),
(990, '2019-05-02 10:57:03', '::1', 'Chrome'),
(991, '2019-05-20 05:29:03', '::1', 'Chrome'),
(992, '2019-05-21 04:42:18', '::1', 'Chrome'),
(993, '2019-05-21 23:53:47', '::1', 'Chrome'),
(994, '2019-05-23 03:55:00', '::1', 'Chrome'),
(995, '2019-05-23 23:22:13', '::1', 'Chrome'),
(996, '2019-05-25 05:48:30', '::1', 'Chrome'),
(997, '2019-05-25 17:06:10', '::1', 'Chrome');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_post_rating`
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
-- Struktur dari tabel `tbl_post_views`
--

CREATE TABLE `tbl_post_views` (
  `views_id` int(11) NOT NULL,
  `views_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `views_ip` varchar(40) DEFAULT NULL,
  `views_tulisan_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_tentang`
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

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_tulisan`
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
-- Dumping data untuk tabel `tbl_tulisan`
--

INSERT INTO `tbl_tulisan` (`tulisan_id`, `tulisan_judul`, `tulisan_isi`, `tulisan_harga`, `tulisan_tanggal`, `tulisan_kategori_id`, `tulisan_kategori_nama`, `tulisan_album_id`, `tulisan_album_nama`, `tulisan_views`, `tulisan_gambar`, `tulisan_pengguna_id`, `tulisan_author`, `tulisan_img_slider`, `tulisan_slug`, `tulisan_rating`) VALUES
(1, 'Dinas Koperasi UKM serta Perdagangan Provinsi Sumatera Selatan', '<p>Hello Summernote</p>', NULL, '2019-05-20 05:59:07', 1, 'Home', 0, '', 0, 'LOGO_KOTA_PALEMBANG.png', 1, 'Administrator', 0, 'dinas-koperasi-ukm-serta-perdagangan-provinsi-sumatera-selatan', 0),
(2, 'Slider', '<p>Hello Summernote</p>', NULL, '2019-05-20 08:44:14', 2, 'Slider', 0, '', 0, 'PicsArt_1486559545259-1.jpg', 1, 'Administrator', 0, 'slider', 0),
(3, 'slider', '<p>Hello Summernote</p>', NULL, '2019-05-20 08:45:45', 2, 'Slider', 0, '', 0, 'JAKARTA.png', 1, 'Administrator', 0, 'slider', 0),
(4, 'Pengumuman', '<p>Pengumuman Hasil Seleksi Administrasi PJLP Keamanan di Lingkungan Lokbin Wilayah Kota Administrasi Jakarta Timur</p>', NULL, '2019-05-20 09:25:42', 3, 'Pengumuan', 0, '', 0, 'workshoptraining.jpeg', 1, 'Administrator', 0, 'pengumuman', 0),
(5, 'Pengumuman', '<p>Pengumuman Penerimaan PJLP Keamanan di Lingkungan Lokasi Binaan (Lokbin) di Wilayah Kota Administrasi Jakarta Timur</p>', NULL, '2019-05-20 09:27:23', 3, 'Pengumuan', 0, '', 0, 'workshoptraining-min.jpeg', 1, 'Administrator', 0, 'pengumuman', 0),
(6, 'Pengawas Makanan Takjil di Loksem JP 34', '<p><span style=\"font-size: 13.3px;\">Dinas KUKMP Provinsi DKI Jakarta, melalui Bidang Pengawasan, Pengendalian, dan Perlindungan Konsumen melakukan pengawasan terpadu terhadap makanan ta’jil di Loksem JP 34, Kramat, Jakarta Pusat pada Kamis (9/5/2019).</span></p><p><span style=\"font-size: 13.3px;\"><br></span></p><p><span style=\"font-size: 13.3px;\">Pengawasan makanan ta’jil yang mengandung bahan berbahaya ini dilakukan uji langsung bersama Tim Labkesda.</span></p><p><span style=\"font-size: 13.3px;\"><br></span></p><p><span style=\"font-size: 13.3px;\">Kegiatan dilakukan dengan pengambilan 18 sampel seperti, kerupuk, tahu, lauk pauk, nasi kapau, dan sejumlah kue untuk diuji dengan metode rapid test. Dari hasil pemeriksaan tidak ditemukan jajanan yang mengandung zat atau bahan berbahaya, semua aman konsumsi.</span></p>', NULL, '2019-05-21 04:55:02', 4, 'Berita', 0, '', 0, 'berita1.jpeg', 1, 'Administrator', 0, 'pengawas-makanan-takjil-di-loksem-jp-34', 0),
(7, 'Pengawasan Makanan dan Minuman Berbahaya di Roxy Mas', '<p style=\"margin-bottom: 10px; color: rgb(113, 115, 118); font-family: Lato, sans-serif; font-size: 14px;\">Dinas KUKMP Provinsi DKI Jakarta, melalui Bidang Pengawasan, Pengendalian, dan Perlindungan Konsumen melakukan pengawasan terpadu terhadap barang beredar produk makanan dan minuman pada bulan suci Ramadan di Swalayan Hari-Hari, Roxy Mas, Jakarta pada Selasa (7/5/2019).</p><p style=\"margin-bottom: 10px; color: rgb(113, 115, 118); font-family: Lato, sans-serif; font-size: 14px;\">Pengawasan ini dilakukan bersama Kementrian Perdagangan RI, Korwas Polda Metro Jaya, Dinas Perindustrian dan Energi, Biro Perekonomian dan Labkesda DKI Jakarta.</p><p style=\"margin-bottom: 10px; color: rgb(113, 115, 118); font-family: Lato, sans-serif; font-size: 14px;\">Hasilnya, dari pengawasan dan pengujian langsung bersama tim labkesda terhadap tahu, bakso, otak-otak, kerupuk tempe dan kerupuk kemplang, keseluruhan tidak terdapat kandungan bahan berbahaya.</p><p style=\"margin-bottom: 10px; color: rgb(113, 115, 118); font-family: Lato, sans-serif; font-size: 14px;\">Namun, ditemukan produk kerupuk putih keriting yang tidak tercantum tanda kadaluarsa. Kemudian, adanya kemasan rusak atau penyok pada produk makanan kaleng. Dari temuan ini, produk-produk tersebut langsung diturunkan dari display untuk tidak dijual belikan kembali.</p><p style=\"margin-bottom: 10px; color: rgb(113, 115, 118); font-family: Lato, sans-serif; font-size: 14px;\">Adapun pengawasan terhadap parsel dengan diambil beberapa sampel, hasilnya tidak ditemukan hal-hal berbahaya.</p>', NULL, '2019-05-21 04:58:03', 4, 'Berita', 0, '', 0, 'berita2.jpeg', 1, 'Administrator', 0, 'pengawasan-makanan-dan-minuman-berbahaya-di-roxy-mas', 0),
(8, 'Dinas KUKMP DKI Jakarta Gelar Kegiatan Gerakan Konsumen Cerdas', '<p style=\"margin-bottom: 10px; color: rgb(113, 115, 118); font-family: Lato, sans-serif; font-size: 14px;\">Dinas KUKMP Provinsi DKI Jakarta, melalui Bidang Pengawasan, Pengendalian, dan Perlindungan Konsumen melakukan pengawasan terpadu terhadap makanan ta’jil di Loksem JP 34, Kramat, Jakarta Pusat pada Kamis (9/5/2019).</p><p style=\"margin-bottom: 10px; color: rgb(113, 115, 118); font-family: Lato, sans-serif; font-size: 14px;\">Pengawasan makanan ta’jil yang mengandung bahan berbahaya ini dilakukan uji langsung bersama Tim Labkesda.</p><p style=\"margin-bottom: 10px; color: rgb(113, 115, 118); font-family: Lato, sans-serif; font-size: 14px;\">Kegiatan dilakukan dengan pengambilan 18 sampel seperti, kerupuk, tahu, lauk pauk, nasi kapau, dan sejumlah kue untuk diuji dengan metode rapid test. Dari hasil pemeriksaan tidak ditemukan jajanan yang mengandung zat atau bahan berbahaya, semua aman konsumsi.</p>', NULL, '2019-05-21 05:25:28', 4, 'Berita', 0, '', 0, 'berita3.jpg', 1, 'Administrator', 0, 'dinas-kukmp-dki-jakarta-gelar-kegiatan-gerakan-konsumen-cerdas', 0),
(9, 'Dinas KUKMP Berkolaborasi dengan IPB Guna Peningkatan UKM Jakarta', '<p style=\"margin-bottom: 10px; color: rgb(113, 115, 118); font-family: Lato, sans-serif; font-size: 14px;\">Dinas Koperasi, UKM serta Perdagangan Provinsi DKI Jakarta melakukan penandatanganan Perjanjian Kerjasama dengan Direktorat Bidang Kerjasama dan Sistem Informasi Institut Pertanian Bogor pada Selasa (10/4/2019) di Balai Kota, Jakarta.</p><p style=\"margin-bottom: 10px; color: rgb(113, 115, 118); font-family: Lato, sans-serif; font-size: 14px;\">Adapun tujuan perjanjian ini adalah sebagai landasan dalam rangka pelaksanaan kerjasama penyediaan narasumber untuk pelaksanaan kegiatan bimbingan teknis, pendidikan dan pelatihan serta kajian pemberdayaan koperasi usaha kecil dan menengah serta perdagangan.</p>', NULL, '2019-05-21 05:27:07', 4, 'Berita', 0, '', 0, 'berita4.jpeg', 1, 'Administrator', 0, 'dinas-kukmp-berkolaborasi-dengan-ipb-guna-peningkatan-ukm-jakarta', 0),
(10, 'Pengumuman Penerimaan PJLP Pendamping Pengembangan Kewirausahaan Terpadu (PKT) Tingkat Kecamatan Sudin KUKMP Kota Administrasi Jakarta Selatan Tahun Anggaran 2019', '<p>Pegumuman Penerimaan PJLP Pendamping Pengembangan Kewirausahaan Terpadu (PKT) Tingkat Kecamatan Sudim KUKMP kota Administrasi Jakarta Selatan Tahun Anggaran 2019</p>', NULL, '2019-05-21 07:02:07', 3, 'Pengumuan', 0, '', 0, 'CC-min.png', 1, 'Administrator', 0, 'pengumuman-penerimaan-pjlp-pendamping-pengembangan-kewirausahaan-terpadu-pkt-tingkat-kecamatan-sudin-kukmp-kota-administrasi-jakarta-selatan-tahun-anggaran-2019', 0),
(11, 'PENDAFTARAN 7 PAS OK OCE', '<p><span style=\"color: rgb(34, 34, 34); font-family: Consolas, &quot;Lucida Console&quot;, &quot;Courier New&quot;, monospace; font-size: 12px; white-space: pre-wrap;\">https://www.youtube.com/embed/62pC_WhOnAk?controls=0&amp;rel=0&amp;disablekb=1&amp;showinfo=0&amp;modestbranding=0&amp;html5=1&amp;iv_load_policy=3&amp;autoplay=0&amp;end=0&amp;loop=0&amp;playsinline=0&amp;start=0&amp;nocookie=false&amp;enablejsapi=1&amp;origin=https%3A%2F%2Fdiskumdagdki.jakarta.go.id&amp;widgetid=6</span><br></p>', NULL, '2019-05-21 07:11:40', 5, 'Vidio', 0, '', 0, 'DIGITALDESIGN-min.png', 1, 'Administrator', 0, 'pendaftaran-7-pas-ok-oce', 0),
(12, 'JCH', '<p><span style=\"color: rgb(34, 34, 34); font-family: Consolas, &quot;Lucida Console&quot;, &quot;Courier New&quot;, monospace; font-size: 12px; white-space: pre-wrap;\">https://www.youtube.com/embed/uEGHsxdRbkE?controls=0&amp;rel=0&amp;disablekb=1&amp;showinfo=0&amp;modestbranding=0&amp;html5=1&amp;iv_load_policy=3&amp;autoplay=0&amp;end=0&amp;loop=0&amp;playsinline=0&amp;start=0&amp;nocookie=false&amp;enablejsapi=1&amp;origin=https%3A%2F%2Fdiskumdagdki.jakarta.go.id&amp;widgetid=5</span><br></p>', NULL, '2019-05-21 07:12:36', 5, 'Vidio', 0, '', 0, 'CC-min1.png', 1, 'Administrator', 0, 'jch', 0),
(14, 'Visi', 'Terwujudnya kemandirian Koperasi, Usaha, Mikro Kecil dan Menengah dan Perdagangan yang tangguh dan kuat dalam persaingan global serta tertatanya usaha mikro yang mendorong terwujudnya Jakarta Baru yang nyaman dan sejahtera untuk semua', NULL, '2019-05-21 10:58:13', 6, 'visi', 0, '', 0, 'visi', 1, 'Administrator', 0, '', 0),
(15, 'MISI', '<ul style=\"margin-bottom: 10px; padding-left: 20px; color: rgb(113, 115, 118); font-family: Lato, sans-serif; font-size: 14px;\"><li style=\"padding-top: 2px; padding-bottom: 2px;\">Mendorong berkembangnya Koperasi, UMKM dan Perdagangan yang sehat dan dinamis.</li><li style=\"padding-top: 2px; padding-bottom: 2px;\">Menumbuhkan iklim usaha yang kondusif bagi pengembangan usaha koperasi dan UMKM dan perdagangan di DKI Jakarta.</li><li style=\"padding-top: 2px; padding-bottom: 2px;\">Meningkatkan produktivitas, daya saing dan kemandirian koperasi dan UMKM dan perdagangan dalam rangka persaingan global.</li><li style=\"padding-top: 2px; padding-bottom: 2px;\">Memberikan pelayanan publik yang berkualitas, cepat, tepat, transparan dan akuntabel.</li><li style=\"padding-top: 2px; padding-bottom: 2px;\">Melakukan pemantauan dan pengawasan ketersediaan, distribusi, harga, standart mutu barang dan jasa yang beredar di DKI Jakarta dalam rangka perlindungan konsumen.</li><li style=\"padding-top: 2px; padding-bottom: 2px;\">Melakukan pengawasan, pemeriksaan dan pengujian secara berkala terhadap standart peralatan dan perlengkapannya.</li></ul>', NULL, '2019-05-21 11:13:00', 6, 'visi', 0, '', 0, 'misi', 1, 'Administrator', 0, '', 0),
(16, 'Struktur Organisasi', '<p>Hello Summernote</p>', NULL, '2019-05-21 13:29:57', 7, 'Stuktur Organisasi', 0, '', 0, 'struktur-663x1024.png', 1, 'Administrator', 0, 'struktur-organisasi', 0),
(17, 'TUGAS POKOK', '<p><span style=\"color: rgb(113, 115, 118); font-family: Lato, sans-serif; font-size: 14px;\">Dinas Koperasi, Usaha Kecil dan Menengah serta Perdagangan mempunyai tugas melaksanakan pembangunan, pengembangan dan pembinaan koperasi serta usaha mikro, kecil dan menengah, serta perdagangan</span><br></p>', NULL, '2019-05-21 13:31:52', 8, 'Tugas Pokok', 0, '', 0, 'tugas-pokok', 1, 'Administrator', 0, '', 0),
(18, 'FUNGSI', 'Dinas Koperasi, Usaha Kecil dan Menengah serta Perdagangan&nbsp;menyelenggarakan fungsi :<br>a. penyusunan rencana strategis dan rencana kerja dan anggaran Dinas KUKM serta Perdagangan;<br>b. pelaksanaan rencana strategis dan dokumen pelaksanaan anggaran Dinas KUKM serta Perdagangan;<br>c. penyusunan kebijakan, pedoman dan standar teknis pembangunan, pengembangan dan pembinaan koperasi, usaha mikro, kecil dan menengah serta perdagangan;<br>d. melaksanakan pembangunan, pengembangan, pembinaan, perlindungan koperasi, usaha mikro, kecil dan menengah serta perdagangan;<br>e. fasilitasi pengembangan kemitraan antara koperasi, usaha mikro dan usaha kecil dengan usaha menengah serta usaha besar;<br>f. pengelolaan fasilitasi perlindungan, pembinaan dan pengembangan usaha mikro, kecil dan menengah serta perdagangan;<br>g. pengembangan dan penyelenggaraan pemasaran dan promosi, koperasi, usaha mikro, usaha kecil, usaha menengah, serta perdagangan;<br>h. pemantauan dan pengawasan ketersediaan, distribusi, harga, standar dan mutu barang dan jasa, serta perlindungan konsumen;<br>i. pembinaan kemetrologian, pengawasan, pemeriksaan, dan pengujian alat ukur, takar, timbang dan perlengkapannya, serta barang dalam keadaan terbungkus;&nbsp;<br>j. pengawasan dan pengendalian ijin di bidang koperasi, usaha mikro, kecil dan menengah, serta perdagangan;<br>k. penyediaan, penatausahaan, pengelolaan, pemeliharaan dan perawatan prasarana dan sarana kerja di bidang koperasi, usaha mikro, kecil dan menengah, serta perdagangan;<br>1. pemantauan, pengendalian dan evaluasi pelaksanaan kebijakan dan kegiatan perpasaran;<br>m. pemungutan, penatausahaan, penyetoran, pelaporan, dan pertanggungjawaban penerimaan retribusi di bidang koperasi, usaha mikro, kecil dan menengah, serta perdagangan;<br>n. pemberian dukungan teknis kepada masyarakat dan perangkat daerah di bidang koperasi, usaha mikro, kecil dan menengah, serta perdagangan;<br>o. pembinaan dan pengembangan sumber daya manusia pengelola koperasi, usaha mikro, kecil dan menengah, serta perdagangan;<br>p. penegakan peraturan perundang-undangan di bidang koperasi, usaha mikro, kecil dan menengah, serta perdagangan;<br>q. pengelolaan kepegawaian, keuangan, dan barang Dinas KUKM serta Perdagangan;<br>r. pengelolaan ketatausahaan dan kerumahtanggaan Dinas KUKM serta Perdagangan;<br>s. pengelolaan kearsipan, data dan informasi Dinas KUKM serta Perdagangan; dan<br>t. pelaporan, dan pertanggungjawaban pelaksanaan tugas dan fungsi Dinas KUKM serta Perdagangan.(Sumber :&nbsp;<a href=\"https://diskumdagdki.jakarta.go.id/wp-content/uploads/2017/08/PERGUB_NO.266_TAHUN_.2016_.pdf\" style=\"color: rgb(113, 115, 118); text-decoration-line: underline;\">Peraturan Gubernur DKI Jakarta Nomor 266 Tahun 2016</a>&nbsp;Tentang Organisasi dan Tata Kerja Dinas Koperasi, Usaha Kecil dan Menengah serta Perdagangan)', NULL, '2019-05-21 13:35:00', 8, 'Tugas Pokok', 0, '', 0, 'fungsi', 1, 'Administrator', 0, '', 0),
(19, 'Pejabat Dinas KUKMP', '<p>Hello Summernote</p>', NULL, '2019-05-21 13:36:36', 9, 'Pejabat DInas', 0, '', 0, 'BAGAN-DINAS-KUMKMP-16-12-16-fix.png', 1, 'Administrator', 0, 'pejabat-dinas-kukmp', 0),
(20, 'Pembinaan dan Pemberdayaan Koperasi', '<p>Hello Summernote</p>', NULL, '2019-05-22 00:06:48', 10, 'Pelayanan Koperasi', 0, '', 0, 'pelayanan1.png', 1, 'Administrator', 0, 'pembinaan-dan-pemberdayaan-koperasi', 0),
(21, 'Pembinaan dan Pemberdayaan UKM', '<p>Hello Summernote</p>', NULL, '2019-05-22 03:30:49', 10, 'Pelayanan Koperasi', 0, '', 0, 'pelayanan11.png', 1, 'Administrator', 0, 'pembinaan-dan-pemberdayaan-ukm', 0),
(23, 'Pelayanan Perdagangan', '<p><br></p>', NULL, '2019-05-22 07:35:52', 11, 'Pelayanan perdagangan', 0, '', 0, 'pelayanan_perdagangan.jpeg', 1, 'Administrator', 0, 'pelayanan-perdagangan', 0),
(24, 'Pelayanan Perdagangan', '<div id=\"pl-640\" class=\"panel-layout\"><div id=\"pg-640-1\" class=\"panel-grid panel-no-style\" style=\"display: flex; flex-wrap: nowrap; justify-content: space-between;\"><div id=\"pgc-640-1-0\" class=\"panel-grid-cell\" style=\"width: calc(100% - 0px);\"><div id=\"panel-640-1-0-0\" class=\"so-panel widget widget_sow-editor panel-first-child panel-last-child\" data-index=\"0\" style=\"margin: 0px; zoom: 1;\"><div class=\"so-widget-sow-editor so-widget-sow-editor-base\"><div class=\"siteorigin-widget-tinymce textwidget\"><p style=\"margin-bottom: 10px;\">Pelayanan Perdagangan Dinas KUKMP Provinsi DKI Jakarta :</p><ol style=\"margin-bottom: 10px;\"><li style=\"padding-top: 2px; padding-bottom: 2px;\">Pelayanan E-SKA</li><li style=\"padding-top: 2px; padding-bottom: 2px;\">Pelayanan Pameran Perdagangan pada Koperasi-UKM Binaan</li><li style=\"padding-top: 2px; padding-bottom: 2px;\">Pengawasan Perdagangan Barang dan Jasa</li></ol></div></div></div></div></div></div>', NULL, '2019-05-22 07:36:32', 11, 'Pelayanan perdagangan', 0, '', 0, 'pelayanan-perdagangan', 1, 'Administrator', 0, '', 0),
(25, 'Pelayanan Metrologi', '<p style=\"margin-bottom: 10px; color: rgb(113, 115, 118); font-family: Lato, sans-serif; font-size: 14px;\">Visi :<br>Terwujudnya tertib ukur disegala bidang guna melindungi kepentingan umum, yang pada&nbsp;<br>gilirannya akan memperkuat daya saing produk Indonesia di pasar global.</p><p style=\"margin-bottom: 10px; color: rgb(113, 115, 118); font-family: Lato, sans-serif; font-size: 14px;\">Misi :<br>• Mengembangkan sistem Metrologi Legal<br>• Menjamin mutu pelayanan tera dan tera ulang alat Ukur, Takar, Timbang dan Perlengkapannya (UTTP).<br>• Mendorong masyarakat untuk mau peduli terhadap tertib ukur</p><p style=\"margin-bottom: 10px; color: rgb(113, 115, 118); font-family: Lato, sans-serif; font-size: 14px;\">Tugas Pokok :<br>Melaksanakan tera / tera ulang UTTP, kegiatan pengujian dan kalibrasi serta pengelolaan<br>standar ukuran dan laboratorium kemetrologian berdasarkan perundang-undangan yang<br>berlaku.</p>', NULL, '2019-05-22 07:56:59', 12, 'Pelaynan_metrologi', 0, '', 0, 'logo-metro.png', 1, 'Administrator', 0, 'pelayanan-metrologi', 0),
(26, 'Alur Pelayanan Metrologi', '<p>Hello Summernote</p>', NULL, '2019-05-22 08:18:46', 13, 'Pelaynan_metrologi_1', 0, '', 0, 'flow-char-metro.png', 1, 'Administrator', 0, 'alur-pelayanan-metrologi', 0),
(27, 'Alur Pelayanan Metrologi', '<p>Hello Summernote</p>', NULL, '2019-05-22 08:19:10', 13, 'Pelaynan_metrologi_1', 0, '', 0, 'flow-char-metro-1.png', 1, 'Administrator', 0, 'alur-pelayanan-metrologi', 0),
(28, 'Peserta AMMY Mengunjungi JCH', '<p><span style=\"color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">Peserta ASEAN Ministerial Meeting On Youth (AMMY) Tahun 2017 mengunjungi Jakarta Creative Hub (JCH) pada hari Selasa, 18 Juli 2017. AMMY merupakan pertemuan tingkat menteri bidang kepemudaan negara ASEAN yang diikuti oleh para Menteri Pemuda dari negara-negara ASEAN dan 3 negara mitra yaitu Jepang, Korea Selatan dan Tiongkok.</span><br></p>', NULL, '2019-05-25 23:40:43', 14, 'Berita UKM', 0, '', 0, 'ukm12.jpg', 1, 'Administrator', 0, 'peserta-ammy-mengunjungi-jch', 0),
(29, 'Kegiatan Kemah Bela Negara Angkatan V', '<p style=\"margin-bottom: 10px; color: rgb(113, 115, 118); font-family: Lato, sans-serif; font-size: 14px;\">Badan Kesatuan Bangsa dan Politik bekerja sama dengan Dinas Koperasi, UKM serta Perdangan (KUKMP) Provinsi DKI Jakarta menyelenggarakan kegiatan Kemah Bela Negara Angakatan V pada Senin (18/3/2019) di Graha Widjaya, Cipayung, Bogor.</p><p style=\"margin-bottom: 10px; color: rgb(113, 115, 118); font-family: Lato, sans-serif; font-size: 14px;\">Kegiatan tersebut diikuti oleh 30 anggota koperasi mahasiswa Universitas Negeri Jakarta. Hal yang penting diajarkan dalam bela negara ini adalah mengenal sejarah perjuangan bangsa.</p><p style=\"margin-bottom: 10px; color: rgb(113, 115, 118); font-family: Lato, sans-serif; font-size: 14px;\">Tujuan bela negara ini diantaranya adalah untuk mempertahankan kelangsungan hidup bangsa dan negara, melestarikan budaya, menjalankan nilai-nilai Pancasila dan UUD 1945, serta menjaga identitas dan integritas bangsa/negara.</p><p style=\"margin-bottom: 10px; color: rgb(113, 115, 118); font-family: Lato, sans-serif; font-size: 14px;\">Pendekatan pelatihan bela negara dengan mengasah kemampuan otak bisa dirancang sebagai materi awal dalam pelatihan pendahuluan bela negara, khususnya untuk pelajar dan mahasiswa. Sehingga, para pelajar dan mahasiswa akan rela mengasah kemampuan fisik karena kesadaran ideologis yang kuat dalam&nbsp;bela negara.</p><p style=\"margin-bottom: 10px; color: rgb(113, 115, 118); font-family: Lato, sans-serif; font-size: 14px;\">Kegiatan ini berlangsung selama tiga hari yaitu dari Senin, 18 Maret hingga Rabu, 20 Maret 2019.</p>', NULL, '2019-05-25 23:48:21', 15, 'Berita Koperasi', 0, '', 0, 'koperasi12.jpg', 1, 'Administrator', 0, 'kegiatan-kemah-bela-negara-angkatan-v', 0),
(30, 'Mengenal Cara Ekspor-Impor Bagi Pemula', '<p style=\"margin-bottom: 10px; color: rgb(113, 115, 118); font-family: Lato, sans-serif; font-size: 14px;\">Acara pengenalan perihal Ekspor-Impor itu dihelat di Jakarta Creative HUB, Jakarta Pusat, Rabu (27/9/17).</p><p style=\"margin-bottom: 10px; color: rgb(113, 115, 118); font-family: Lato, sans-serif; font-size: 14px;\">Acara tersebut untuk mengembangkan potensi produk lokal domisi Jakarta untuk bisa go international.</p><p style=\"margin-bottom: 10px; color: rgb(113, 115, 118); font-family: Lato, sans-serif; font-size: 14px;\">Hadir dalam pelatihan tersebut (kiri-kanan) Ketua Bidang Perdagangan dan Perindustrian Himpunan Pengusaha Muda Indonesia Jakarta Raya (Hipmi Jaya) Eric Indra Kurniawan, Sekretaris Dinas Koperasi UKM serta Perdagangan Provinsi DKI Jakarta Jhonson Siregar, Dinas Koperasi UKM serta Perdagangan Provinsi DKI Jakarta Badja Raja Siregar dan Ketua Panitia Jaya Coaching Ratna Sari.</p><p style=\"margin-bottom: 10px; color: rgb(113, 115, 118); font-family: Lato, sans-serif; font-size: 14px;\">Diharapkan para pelaku UMKM itu bisa mulai mengembangkan penyebaran jualannya hingga go internasional.</p>', NULL, '2019-05-25 23:50:48', 16, 'Berita Perdagangan', 0, '', 0, 'dagang2.jpg', 1, 'Administrator', 0, 'mengenal-cara-ekspor-impor-bagi-pemula', 0),
(31, 'Pengawasan Produk SNI Wajib di Hari Hari Pasar Swalayan ITC Roxy Mas', '<p style=\"margin-bottom: 10px; color: rgb(113, 115, 118); font-family: Lato, sans-serif; font-size: 14px;\">Dinas KUKMP Provinsi DKI Jakarta, melalui Bidang Pengawasan, Pengendalian, dan Perlindungan Konsumen melakukan pengawasan di Hari Hari Pasar Swalayan, ITC Roxy Mas, Jakarta Pusat pada Senin (18/2/2019). Kegiatan ini dilakukan dalam rangka memberikan perlindungan konsumen serta pengawasan kepatuhan pelaku usaha terhadap ketentuan produk SNI wajib.</p><p style=\"margin-bottom: 10px; color: rgb(113, 115, 118); font-family: Lato, sans-serif; font-size: 14px;\">Hasil dari pengawasan ini ditemukan sejumlah produk SNI yang secara label belum sesuai dengan Peraturan Menteri Perdagangan Republik Indonesia Nomor 73 Tahun 2015. Selain itu, ditemukan juga produk kompor gas dua tungku yang secara kasat mata tidak berlabel SNI. Temuan lainnya adalah terdapat produk kipas angin mini yang tidak dilengkapi dengan buku petunjuk manual, dan kartu garansi (MKG). Dari temuan ini, akan ditindak lanjuti dengan mengundang langsung pelaku usaha agar datang ke Dinas KUKMP untuk melakukan klarifikasi.</p>', NULL, '2019-05-25 23:51:51', 17, 'Wasdal PK', 0, '', 0, 'pk12.png', 1, 'Administrator', 0, 'pengawasan-produk-sni-wajib-di-hari-hari-pasar-swalayan-itc-roxy-mas', 0),
(32, 'Penghargaan Pasar Tertib Ukur DKI Jakarta serta Penyerahan Pos Ukur Ulang oleh Kemendag Tahun 2017', '<p style=\"margin-bottom: 10px; color: rgb(113, 115, 118); font-family: Lato, sans-serif; font-size: 14px;\">Pemerintah Provinsi DKI Jakarta menargetkan sebanyak 10 pasar mendapat predikat Pasar Tertib Ukur 2017 dari Kementerian Perdagangan RI. Empat pasar yang meraih predikat tersebut.</p><p style=\"margin-bottom: 10px; color: rgb(113, 115, 118); font-family: Lato, sans-serif; font-size: 14px;\">&nbsp;</p><blockquote class=\"bj-quote uk-margin-left\" style=\"padding: 10px 20px; margin-bottom: 20px; font-size: 17.5px; border-left: 5px solid rgb(238, 238, 238); color: rgb(113, 115, 118); font-family: Lato, sans-serif;\"><p style=\"margin-bottom: 0px;\">” Sudah empat pasar mendapat penghargaan. Yakni, Pasar Mandiri Kelapa Gading, Manggis, Pondok Indah dan Cibubur”</p></blockquote><p style=\"margin-bottom: 10px; color: rgb(113, 115, 118); font-family: Lato, sans-serif; font-size: 14px;\">Kepala Dinas Koperasi, Usaha Kecil Menengah dan Perdagangan (KUKMP) DKI Jakarta, Bapak Irwandi mengatakan, penghargaan Pasar Tertib Ukur merupakan apresiasi terhadap hasil pengukuran timbangan para pedagang di pasar sesuai dengan berat barang yang ditimbang.</p><p style=\"margin-bottom: 10px; color: rgb(113, 115, 118); font-family: Lato, sans-serif; font-size: 14px;\">Selama ini Unit Pelaksana Teknis (UPT) Metrologi Dinas KUKMP DKI Jakarta rutin melakukan pemeriksaan tera/tera ulang timbangan para pedagang di seluruh pasar. Terutama terhadap 153 pasar yang dikelola PD Pasar Jaya.</p><p style=\"margin-bottom: 10px; color: rgb(113, 115, 118); font-family: Lato, sans-serif; font-size: 14px;\">Selain mendapat sertifikat, Pihak Kementerian Perdagangan memberikan hadiah timbangan ukur (Pos Ukur Ulang) kepada pasar peraih penghargaan [29/9]</p><p style=\"margin-bottom: 10px; color: rgb(113, 115, 118); font-family: Lato, sans-serif; font-size: 14px;\">Diharapkan, penghargaan dan hadiah uang diberikan dapat memotivasi pedagang di pasar lainnya.</p>', NULL, '2019-05-25 23:53:24', 18, 'Berita UPM', 0, '', 0, 'upm2.jpeg', 1, 'Administrator', 0, 'penghargaan-pasar-tertib-ukur-dki-jakarta-serta-penyerahan-pos-ukur-ulang-oleh-kemendag-tahun-2017', 0),
(33, 'Pelatihan Kompetensi Bagi Juru Buku Koperasi', '<p style=\"margin-bottom: 10px; color: rgb(113, 115, 118); font-family: Lato, sans-serif; font-size: 14px;\">Pusat Diklat Koperasi, UKM serta Perdangan (KUKMP) Provinsi DKI Jakarta menyelenggarakan pelatihan kompetensi bagi juru buku koperasi pada Senin (26/3/2019) di Hotel Ambhara, Jakarta Selatan.</p><p style=\"margin-bottom: 10px; color: rgb(113, 115, 118); font-family: Lato, sans-serif; font-size: 14px;\">Kegiatan tesebut menghadirkan narasumber dari Lembaga Sertifikasi Profesi (LSP) Perkoperasian Indonesia. Pelatihan ini diikuti sebanyak 190 orang dari koperasi yang direkrut dari 5 wilayah Administrasi.</p><p style=\"margin-bottom: 10px; color: rgb(113, 115, 118); font-family: Lato, sans-serif; font-size: 14px;\">Tujuan dilaksanakannya kegiatan ini adalah untuk meningkatkan kualitas serta keterampilan juru buku koperasi dalam mengolah usaha koperasi. Selain itu, pelatihan ini juga dapat meningkatkan kinerja juru buku koperasi berdasarkan Standar Kompetensi Kerja Nasional Indonesia (SKKNI).</p><p style=\"margin-bottom: 10px; color: rgb(113, 115, 118); font-family: Lato, sans-serif; font-size: 14px;\">Pelatihan ini dilaksanakan selama empat hari, terhitung mulai dari Senin hingga Kamis, 28 Maret 2019.</p>', NULL, '2019-05-25 23:54:37', 19, 'Berita KUKMP', 0, '', 0, 'PPUKMP2.jpg', 1, 'Administrator', 0, 'pelatihan-kompetensi-bagi-juru-buku-koperasi', 0),
(34, 'Menerima Kunjungan Kerja Komisi B di UPK PPUKMP Pulogadung', '<p style=\"margin-bottom: 10px; color: rgb(113, 115, 118); font-family: Lato, sans-serif; font-size: 14px;\">Sekretaris Komisi B DPRD DKI, Darrusalam mengatakan, kunjungan kerja ini digelar dengan tujuan menghidupkan kembali marwah Perkampungan Industri Kecil (PIK) di kawasan tersebut.</p><p style=\"margin-bottom: 10px; color: rgb(113, 115, 118); font-family: Lato, sans-serif; font-size: 14px;\">“Laporannya PIK ini sudah tidak lagi menjadi bagian dari ikon Jakarta. Produksi, perawatan dan pembinaan untuk UKM-nya lemah,” ujarnya di Gedung DPRD DKI, Senin (9/10).</p><p style=\"margin-bottom: 10px; color: rgb(113, 115, 118); font-family: Lato, sans-serif; font-size: 14px;\">Menurut Darrusalam, dalam rapat rapat ini diketahui UPK PPUKMP Pulogadung nyatanya mengalami sejumlah kendala. Antara lain minimnya anggaran pendukung untuk mengembangkan sentra bisnis dan akses masuk ke kawasan PIK Pulogadung.</p><p style=\"margin-bottom: 10px; color: rgb(113, 115, 118); font-family: Lato, sans-serif; font-size: 14px;\">“Kita harap dari rapat ini marwah PIK Pulogadung bisa kembali lagi dalam melakukan pembinaan UKM-UKM yang ada di sana. Sehingga kawasan itu mampu menjadi sentra bisnis kedua setelah Tanah Abang,” ucapnya.</p><p style=\"margin-bottom: 10px; color: rgb(113, 115, 118); font-family: Lato, sans-serif; font-size: 14px;\">Sementara itu, Sekretaris Dinas KUKMP, Jhonson M. Siregar menjelaskan, selain terkendala pendanaan dan akses masuk, stigma di masyarakat untuk menggunakan barang bermerk juga menjadi hambatan pelaku usaha di PIK mengembangkan usaha.</p><p style=\"margin-bottom: 10px; color: rgb(113, 115, 118); font-family: Lato, sans-serif; font-size: 14px;\">“Untuk program kerja ke depan, kami akan jelaskan master plan yang sudah kami buat,”</p>', NULL, '2019-05-25 23:55:32', 20, 'Berita UPK PPUKMP Pulogadung ', 0, '', 0, 'kukmp3.jpeg', 1, 'Administrator', 0, 'menerima-kunjungan-kerja-komisi-b-di-upk-ppukmp-pulogadung', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_album`
--
ALTER TABLE `tbl_album`
  ADD PRIMARY KEY (`album_id`),
  ADD KEY `album_pengguna_id` (`album_pengguna_id`);

--
-- Indeks untuk tabel `tbl_album_pengumuman`
--
ALTER TABLE `tbl_album_pengumuman`
  ADD PRIMARY KEY (`album_id`),
  ADD KEY `tulisan_pengguna_id` (`tulisan_pengguna_id`),
  ADD KEY `tbl_album_pengumuman_ibfk_1` (`album_kategori_id`);

--
-- Indeks untuk tabel `tbl_inbox`
--
ALTER TABLE `tbl_inbox`
  ADD PRIMARY KEY (`inbox_id`);

--
-- Indeks untuk tabel `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indeks untuk tabel `tbl_kategori_tentang`
--
ALTER TABLE `tbl_kategori_tentang`
  ADD PRIMARY KEY (`kategori_tentang_id`);

--
-- Indeks untuk tabel `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  ADD PRIMARY KEY (`pengguna_id`);

--
-- Indeks untuk tabel `tbl_pengumuman`
--
ALTER TABLE `tbl_pengumuman`
  ADD PRIMARY KEY (`tulisan_id`),
  ADD KEY `tulisan_pengguna_id` (`tulisan_pengguna_id`);

--
-- Indeks untuk tabel `tbl_pengunjung`
--
ALTER TABLE `tbl_pengunjung`
  ADD PRIMARY KEY (`pengunjung_id`);

--
-- Indeks untuk tabel `tbl_post_rating`
--
ALTER TABLE `tbl_post_rating`
  ADD PRIMARY KEY (`rate_id`);

--
-- Indeks untuk tabel `tbl_post_views`
--
ALTER TABLE `tbl_post_views`
  ADD PRIMARY KEY (`views_id`);

--
-- Indeks untuk tabel `tbl_tentang`
--
ALTER TABLE `tbl_tentang`
  ADD PRIMARY KEY (`tentang_id`);

--
-- Indeks untuk tabel `tbl_tulisan`
--
ALTER TABLE `tbl_tulisan`
  ADD PRIMARY KEY (`tulisan_id`),
  ADD KEY `tulisan_kategori_id` (`tulisan_kategori_id`),
  ADD KEY `tulisan_pengguna_id` (`tulisan_pengguna_id`),
  ADD KEY `tulisan_album_id` (`tulisan_album_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_album`
--
ALTER TABLE `tbl_album`
  MODIFY `album_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_album_pengumuman`
--
ALTER TABLE `tbl_album_pengumuman`
  MODIFY `album_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tbl_inbox`
--
ALTER TABLE `tbl_inbox`
  MODIFY `inbox_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `tbl_kategori_tentang`
--
ALTER TABLE `tbl_kategori_tentang`
  MODIFY `kategori_tentang_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  MODIFY `pengguna_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_pengumuman`
--
ALTER TABLE `tbl_pengumuman`
  MODIFY `tulisan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_pengunjung`
--
ALTER TABLE `tbl_pengunjung`
  MODIFY `pengunjung_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=998;

--
-- AUTO_INCREMENT untuk tabel `tbl_post_rating`
--
ALTER TABLE `tbl_post_rating`
  MODIFY `rate_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_post_views`
--
ALTER TABLE `tbl_post_views`
  MODIFY `views_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_tentang`
--
ALTER TABLE `tbl_tentang`
  MODIFY `tentang_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_tulisan`
--
ALTER TABLE `tbl_tulisan`
  MODIFY `tulisan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbl_album_pengumuman`
--
ALTER TABLE `tbl_album_pengumuman`
  ADD CONSTRAINT `tbl_album_pengumuman_ibfk_1` FOREIGN KEY (`album_kategori_id`) REFERENCES `tbl_pengumuman` (`tulisan_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
