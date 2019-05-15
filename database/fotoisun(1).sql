-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 16 Mei 2019 pada 00.10
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
-- Struktur dari tabel `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
`id_booking` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `id_paket` int(11) NOT NULL,
  `photograper` varchar(50) NOT NULL,
  `tanggal_booking` date NOT NULL,
  `tipe_foto` varchar(15) NOT NULL,
  `persetujuan` varchar(100) NOT NULL,
  `status_booking` varchar(10) NOT NULL,
  `jenis_pembayaran` varchar(15) NOT NULL,
  `lokasi_foto` text NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `booking`
--

INSERT INTO `booking` (`id_booking`, `username`, `id_paket`, `photograper`, `tanggal_booking`, `tipe_foto`, `persetujuan`, `status_booking`, `jenis_pembayaran`, `lokasi_foto`, `keterangan`) VALUES
(2, 'firman.akun2@gmail.com', 1, 'Dhesyani putri', '2019-05-16', 'Pre-wedding', 'Disetujui', 'baru', 'Transfer', 'Baluran', 'saya setuju');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galleri`
--

CREATE TABLE IF NOT EXISTS `galleri` (
`id_galleri` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `lokasi` varchar(15) NOT NULL,
  `jenis_foto` varchar(15) NOT NULL,
  `kategori_lokasi` varchar(15) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `galleri`
--

INSERT INTO `galleri` (`id_galleri`, `username`, `lokasi`, `jenis_foto`, `kategori_lokasi`, `foto`) VALUES
(1, 'dhesyani@gmail.com', 'Pulau Merah', 'Pre-wedding', 'Pantai', 'pantai31.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `paket_foto`
--

CREATE TABLE IF NOT EXISTS `paket_foto` (
`id_paket` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `nama_paket` varchar(15) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `paket_foto`
--

INSERT INTO `paket_foto` (`id_paket`, `username`, `nama_paket`, `harga`) VALUES
(1, 'dhesyani@gmail.com', 'Foto dan album', 5000000),
(2, 'dhesyani@gmail.com', 'b', 1500);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
`id_transaksi` int(11) NOT NULL,
  `id_booking` int(11) NOT NULL,
  `tanggal_transaksi` date NOT NULL,
  `jumlah_transaksi` int(11) NOT NULL,
  `foto_transaksi` varchar(40) NOT NULL,
  `status` varchar(50) NOT NULL,
  `keterangan` text
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_booking`, `tanggal_transaksi`, `jumlah_transaksi`, `foto_transaksi`, `status`, `keterangan`) VALUES
(1, 2, '2019-05-15', 2500000, 'Desert.jpg', 'Berhasil', 'transaksi berhasil'),
(3, 2, '2019-05-16', 2500000, 'Hydrangeas.jpg', 'Berhasil', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(40) NOT NULL,
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
('firman.akun2@gmail.com', '25f9e794323b453885f5181f1b624d0b', 'Firman Satriya ', '2345678765', 'aa', 'phographer22.jpg', NULL, NULL, NULL, 3, 'Aktif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
 ADD PRIMARY KEY (`id_booking`), ADD KEY `booking_ibfk_1` (`username`), ADD KEY `booking_ibfk_2` (`id_paket`);

--
-- Indexes for table `galleri`
--
ALTER TABLE `galleri`
 ADD PRIMARY KEY (`id_galleri`), ADD KEY `galleri_ibfk_1` (`username`);

--
-- Indexes for table `paket_foto`
--
ALTER TABLE `paket_foto`
 ADD PRIMARY KEY (`id_paket`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
 ADD PRIMARY KEY (`id_transaksi`), ADD KEY `transaksi_ibfk_1` (`id_booking`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
MODIFY `id_booking` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `galleri`
--
ALTER TABLE `galleri`
MODIFY `id_galleri` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `paket_foto`
--
ALTER TABLE `paket_foto`
MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `booking`
--
ALTER TABLE `booking`
ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`username`) REFERENCES `user` (`username`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`id_paket`) REFERENCES `paket_foto` (`id_paket`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_booking`) REFERENCES `booking` (`id_booking`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
