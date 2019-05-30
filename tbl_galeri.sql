-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Bulan Mei 2019 pada 10.54
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
(5, 'Ekspor Impor Provinsi DKI Jakarta 2016', 'Ekspor Impor Provinsi DKI Jakarta 2016', '2019-05-20 01:07:39', 'info-grafis32.jpg', 1, 1, 'Administrator', ''),
(6, 'Bidang Perizinan dan Kelembagaan', 'Bidang Perizinan dan Kelembagaan', '2019-05-30 06:46:02', '1001.jpeg', 2, 1, 'Administrator', ''),
(7, 'Bidang Pemberdayaan dan Koperasi', 'Bidang Pemberdayaan dan Koperasi', '2019-05-30 06:46:30', 'bca-11.jpg', 2, 1, 'Administrator', ''),
(8, 'Bidang Pengawasan dan Pemeriksaan', 'Bidang Pengawasan dan Pemeriksaan', '2019-05-30 06:47:03', 'Branding1.jpg', 2, 1, 'Administrator', ''),
(9, 'Bidang Pemberdayaan Usaha Kecil', 'Bidang Pemberdayaan Usaha Kecil', '2019-05-30 06:47:25', 'brosur1.jpg', 2, 1, 'Administrator', ''),
(10, 'Bidang Perizinan dan Kelembagaan', 'Bidang Perizinan dan Kelembagaan', '2019-05-30 06:54:30', 'info-grafis22.jpg', 6, 1, 'Administrator', ''),
(11, 'Bidang Pemberdayaan dan Koperasi', 'Bidang Pemberdayaan dan Koperasi', '2019-05-30 06:55:00', 'info-grafis12.jpg', 3, 1, 'Administrator', ''),
(12, 'Bidang Pemberdayaan Usaha Kecil', 'Bidang Pemberdayaan Usaha Kecil', '2019-05-30 06:55:25', 'info-grafis2.png', 4, 1, 'Administrator', ''),
(13, 'Bidang Pengawasan dan Pemeriksaan', 'Bidang Pengawasan dan Pemeriksaan', '2019-05-30 06:55:54', 'info-grafis31.jpg', 5, 1, 'Administrator', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  ADD PRIMARY KEY (`galeri_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  MODIFY `galeri_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
