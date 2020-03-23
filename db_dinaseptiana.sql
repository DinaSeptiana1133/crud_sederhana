-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Feb 2020 pada 14.01
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_dinaseptiana`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_10`
--

CREATE TABLE `tb_10` (
  `kode_mapel` varchar(10) NOT NULL,
  `nama_mapel` varchar(30) NOT NULL,
  `jml_jam` int(2) NOT NULL,
  `keterangan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_10`
--

INSERT INTO `tb_10` (`kode_mapel`, `nama_mapel`, `jml_jam`, `keterangan`) VALUES
('BI-01', 'Bahasa Indonesia', 3, '-'),
('MT-01', 'Matematika', 4, '-'),
('PA-01', 'Pendidikan Agama Islam', 3, '-'),
('PA-02', 'Pendidikan Agama Katolik', 3, '-'),
('PA-03', 'Pendidikan Agama Kristen', 3, '-');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_10`
--
ALTER TABLE `tb_10`
  ADD PRIMARY KEY (`kode_mapel`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
