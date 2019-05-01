-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 01 Mei 2019 pada 19.37
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fotoisun`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `galleri`
--

CREATE TABLE IF NOT EXISTS `galleri` (
`id_galleri` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `lokasi` varchar(15) NOT NULL,
  `jenis_foto` varchar(15) NOT NULL,
  `kategori_lokasi` varchar(15) NOT NULL,
  `foto` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `galleri`
--

INSERT INTO `galleri` (`id_galleri`, `username`, `lokasi`, `jenis_foto`, `kategori_lokasi`, `foto`) VALUES
(1, 'dhesyani@gmail.com', 'Pulau Merah', 'Pre-wedding', 'Pantai', 'pantai31.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(20) NOT NULL,
  `password` varchar(40) NOT NULL,
  `nama_lengkap` varchar(15) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `alamat_lengkap` text NOT NULL,
  `foto` varchar(25) NOT NULL,
  `facebook` varchar(15) DEFAULT NULL,
  `twitter` varchar(15) DEFAULT NULL,
  `instagram` varchar(15) DEFAULT NULL,
  `level` int(11) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `password`, `nama_lengkap`, `no_hp`, `alamat_lengkap`, `foto`, `facebook`, `twitter`, `instagram`, `level`, `status`) VALUES
('admin@admin.com', '25f9e794323b453885f5181f1b624d0b', 'admin', '3443', '343434', 'phographer11.jpg', NULL, NULL, NULL, 1, 'Aktif'),
('dhesyani@gmail.com', '25f9e794323b453885f5181f1b624d0b', 'Dhesyani putri', '34431', 'Jl.ikan mainan', 'phographer12.jpg', 'Dhesyani', 'Dhesyani', 'Dhesyani', 2, 'Aktif'),
('firman.akun2@gmail.c', '25f9e794323b453885f5181f1b624d0b', 'Firman Satriya ', '2345678765', 'zzz', 'photographer-1000x6053.jp', NULL, NULL, NULL, 3, 'Tidak Aktif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `galleri`
--
ALTER TABLE `galleri`
 ADD PRIMARY KEY (`id_galleri`), ADD KEY `galleri_ibfk_1` (`username`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `galleri`
--
ALTER TABLE `galleri`
MODIFY `id_galleri` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
