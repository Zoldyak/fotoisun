-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 02 Jun 2019 pada 09.55
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
  `keterangan` text NOT NULL,
  `status_terbaca_photographer` varchar(20) NOT NULL DEFAULT 'belum terbaca',
  `status_terbaca_admin` varchar(20) NOT NULL DEFAULT 'belum terbaca',
  `status_persetujuan_terbaca_oleh_custumor` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `booking`
--

INSERT INTO `booking` (`id_booking`, `username`, `id_paket`, `photograper`, `tanggal_booking`, `tipe_foto`, `persetujuan`, `status_booking`, `jenis_pembayaran`, `lokasi_foto`, `keterangan`, `status_terbaca_photographer`, `status_terbaca_admin`, `status_persetujuan_terbaca_oleh_custumor`) VALUES
(4, 'firman.akun2@gmail.com', 1, 'Dhesyani putri', '2019-06-02', 'Wedding', 'Disetujui', 'baru', 'Transfer', 'BOOM', 'tidak ada transaksi baru', 'sudah terbaca', 'belum terbaca', 'sudah terbaca');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_inbox`
--

CREATE TABLE IF NOT EXISTS `detail_inbox` (
`id_detail_inbox` int(11) NOT NULL,
  `id_list_inbox` int(11) NOT NULL,
  `pesan` text NOT NULL,
  `status_terbaca` varchar(15) NOT NULL,
  `tanggal_pesan` datetime NOT NULL,
  `status_pengirim` int(11) NOT NULL,
  `status_terbaca_custumer` varchar(15) NOT NULL,
  `status_terbaca_photographer` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB AUTO_INCREMENT=88 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `galleri`
--

INSERT INTO `galleri` (`id_galleri`, `username`, `lokasi`, `jenis_foto`, `kategori_lokasi`, `foto`) VALUES
(1, 'dhesyani@gmail.com', 'Pulau Merah', 'Pre-wedding', 'Pantai', 'pantai31.jpeg'),
(2, 'dhesyani@gmail.com', 'test fot', 'Pre-wedding', 'Gunung', 'Lighthouse.jpg'),
(11, 'iniemailpalsu@yanx.project.com', 'Hotel Dialoog P', 'Pre-wedding', 'Pantai', 'prewed_nanda_hayun-_hotel_dialoog_22.jpg'),
(12, 'iniemailpalsu@yanx.project.com', 'Hotel Dialoog P', 'Pre-wedding', 'Pantai', 'prewed_nanda_hayun-_hotel_dialoog_3.jpg'),
(13, 'iniemailpalsu@yanx.project.com', 'Hotel Dialoog B', 'Pre-wedding', 'Pantai', 'prewed_nanda_hayun-_hotel_dialoog_4.jpg'),
(16, 'iniemailpalsu@yanx.project.com', 'Baluran party ', 'Pre-wedding', 'Gunung', '52117006_564874903991147_7779470584079270029_n.jpg'),
(18, 'iniemailpalsu@yanx.project.com', 'Baluran sweat m', 'Pre-wedding', 'Gunung', '50905713_366870330709925_7311051832725755503_n.jpg'),
(26, 'iniemailpalsu@sevenskybwi.com', 'Rumah', 'Pre-wedding', 'Kota', 'dewi_arya_-_prewedding_22.jpg'),
(27, 'iniemailpalsu@sevenskybwi.com', 'rumah arya', 'Pre-wedding', 'Kota', 'dewi_arya_-_prewedding.jpg'),
(28, 'iniemailpalsu@sevenskybwi.com', 'wedding gedung', 'Wedding', 'Kota', 'prewedding_-_hadi-irma.jpg'),
(29, 'iniemailpalsu@sevenskybwi.com', 'wedding home', 'Wedding', 'Kota', 'Wedding_home_-_anggri_huda_52.jpg'),
(30, 'iniemailpalsu@sevenskybwi.com', 'wedding home 2', 'Wedding', 'Kota', 'Wedding_home_-_anggri_huda_32.jpg'),
(31, 'iniemailpalsu@adam.alfis.com', 'tm sritanjung', 'Pre-wedding', 'Kota', 'preweddding_session_fero_-_shinta_-_taman_sritanjung_2.jpg'),
(32, 'iniemailpalsu@adam.alfis.com', 'taman sritanjun', 'Wedding', 'Kota', 'preweddding_session_fero_-_shinta_-_taman_sritanjung_3.jpg'),
(33, 'iniemailpalsu@adam.alfis.com', 'taman sritanjun', 'Wedding', 'Kota', 'preweddding_session_fero_-_shinta_-_taman_sritanjung_4.jpg'),
(34, 'iniemailpalsu@adam.alfis.com', 'Hotel Santika', 'Pre-wedding', 'Kota', 'prewedding_erwin_-_adita.jpg'),
(35, 'iniemailpalsu@adam.alfis.com', 'Hotel Santika', 'Pre-wedding', 'Kota', 'preweding_ika-doni_home.jpg'),
(36, 'iniemailpalsu@adam.alfis.com', 'gedung party', 'Wedding', 'Kota', 'wedding_party_jennie_-_filza_2.jpg'),
(37, 'iniemailpalsu@adam.alfis.com', 'gedung party', 'Wedding', 'Kota', 'wedding_party_jennie_-_filza_3.jpg'),
(38, 'iniemailpalsu@adam.alfis.com', 'gedung party', 'Wedding', 'Kota', 'wedding_party_jennie_-_filza.jpg'),
(39, 'iniemailpalsu@adam.alfis.com', 'gedung party', 'Wedding', 'Kota', 'preweding_ika-doni_home_2.jpg'),
(40, 'iniemailpalsu@pilar.photo.com', 'Jawatan ', 'Pre-wedding', 'Kota', '8d436a61ef164688825c5734d4ff9fdf.jpg'),
(41, 'iniemailpalsu@pilar.photo.com', 'gedung party', 'Wedding', 'Kota', '3ee305d9f0854faedc4520f6b15a2307.jpg'),
(42, 'iniemailpalsu@pilar.photo.com', 'gedung party', 'Wedding', 'Kota', '4a9a019feb8167a88b482900195f1b49.jpg'),
(43, 'iniemailpalsu@pilar.photo.com', 'gedung party', 'Wedding', 'Kota', '8d0a6b3d09ebd4bfed1944542c9fb8a6.jpg'),
(44, 'iniemailpalsu@pello.photo.com', 'Rumah Bali', 'Wedding', 'Kota', '8be8f7b22ddb1a4784acfb94abafd836.jpg'),
(45, 'iniemailpalsu@pello.photo.com', 'Rumah Bali ', 'Wedding', 'Kota', '3c2040f0295eccdc899e5f629ab5216f.jpg'),
(46, 'iniemailpalsu@pello.photo.com', 'Pantai Villa So', 'Wedding', 'Pantai', '9ddf61b357cf547de1c04d065cb87531.jpg'),
(47, 'iniemailpalsu@pello.photo.com', 'Bukit kawah wur', 'Pre-wedding', 'Gunung', 'kawahwurung.jpg'),
(48, 'iniemailpalsu@pello.photo.com', 'gedung party', 'Wedding', 'Kota', '01f254fb83a47c78b38f9bc4435536f0.jpg'),
(49, 'iniemailpalsu@pello.photo.com', 'Baluran Prewedd', 'Pre-wedding', 'Gunung', '1f17eec732f7c0d626a4d915af922a9f.jpg'),
(50, 'iniemailpalsu@pello.photo.com', 'gedung party', 'Wedding', 'Kota', '9be444ac53d2825d1536a83d0aaeb15d.jpg'),
(51, 'iniemailpalsu@pello.photo.com', 'Kawah Wurung', 'Pre-wedding', 'Gunung', '9de184ab9bf94211735f95e35b155ed6.jpg'),
(52, 'iniemailpalsu@pello.photo.com', 'gedung party', 'Wedding', 'Gunung', '8b33fc99db4d12f978cbb36a76b5336c.jpg'),
(53, 'iniemailpalsu@kemonphoto.com', 'home', 'Wedding', 'Kota', '7d33ee3427b27e534decf8c35d00e247.jpg'),
(54, 'iniemailpalsu@kemonphoto.com', 'Jawatan ', 'Pre-wedding', 'Kota', '5a6570669e9a6baf4f1e66e2d0b7101e.jpg'),
(55, 'iniemailpalsu@kemonphoto.com', 'Rumah', 'Wedding', 'Kota', 'FB_IMG_15529554989724272.jpg'),
(56, 'iniemailpalsu@kemonphoto.com', 'Jawatan ', 'Pre-wedding', 'Kota', '7e63c6d14e3fa39680f22486e46e0adb.jpg'),
(57, 'iniemailpalsu@kemonphoto.com', 'gedung party', 'Wedding', 'Kota', '05e97ba53fc5dfd3a0cea305b770ddb6.jpg'),
(58, 'iniemailpalsu@kemonphoto.com', 'rumah', 'Wedding', 'Kota', 'e674757279344c58ed09fbdd10b01fb1.jpg'),
(59, 'iniemailpalsu@aditya.pradana.com', 'Baluran romatic', 'Pre-wedding', 'Gunung', 'Prewedding_in_baluran_-_dewi_-_indra.jpg'),
(60, 'iniemailpalsu@aditya.pradana.com', 'Pantai Bama', 'Pre-wedding', 'Pantai', 'Prewedding_pantai_bama-_edi-dita.jpg'),
(61, 'iniemailpalsu@aditya.pradana.com', 'Prewedding Pant', 'Pre-wedding', 'Pantai', 'Prewedding_pantai_cacalan_-_eko-ayu.jpg'),
(62, 'iniemailpalsu@aditya.pradana.com', 'Home Stay Umyah', 'Pre-wedding', 'Kota', 'Prewedding_home_-_bayu_-_eka.jpg'),
(63, 'iniemailpalsu@aditya.pradana.com', 'home', 'Pre-wedding', 'Kota', 'Prewedding_tari-dani.jpg'),
(64, 'iniemailpalsu@aditya.pradana.com', 'gedung party', 'Wedding', 'Kota', 'Wedding_engagentment_-_adit-shinta.jpg'),
(65, 'iniemailpalsu@aditya.pradana.com', 'Pantai Weding I', 'Pre-wedding', 'Pantai', 'Prewedding_pantai_wedi_ireng_-_edo_-_anisa.jpg'),
(66, 'iniemailpalsu@atmaja.com', 'gedung party', 'Wedding', 'Kota', 'ccfba19125b57b16856195ba90e169ac.jpg'),
(67, 'iniemailpalsu@atmaja.com', 'gedung party 2', 'Wedding', 'Kota', 'ebced87e20e51695cb65f7d1afe75165.jpg'),
(68, 'iniemailpalsu@atmaja.com', 'gedung party', 'Wedding', 'Kota', '3621c755404602dc270240e7495ad703.jpg'),
(69, 'iniemailpalsu@atmaja.com', 'gedung party', 'Wedding', 'Gunung', 'ab873619690af9ee62af9969b122c36c.jpg'),
(70, 'iniemailpalsu@atmaja.com', 'home', 'Wedding', 'Kota', '7bf20c73597a010756afa2fff1a559ab.jpg'),
(71, 'iniemailpalsu@atmaja.com', 'home ', 'Wedding', 'Kota', '5d521e5c8b465cffd52a4e2bb34cb0d5.jpg'),
(72, 'iniemailpalsu@atmaja.com', 'Home', 'Wedding', 'Kota', '5ef33c5686ee413235011d67f1a53f2e.jpg'),
(73, 'iniemailpalsu@bimansphotography.com', 'home', 'Wedding', 'Kota', '29087368_179202382722118_8808683212030083072_n.jpg'),
(74, 'iniemailpalsu@bimansphotography.com', 'home', 'Wedding', 'Kota', '29090160_212458439334241_8519183363804758016_n.jpg'),
(75, 'iniemailpalsu@bimansphotography.com', 'Kota Tua Banyuw', 'Pre-wedding', 'Kota', '54511751_127746258339711_8772553917174724579_n.jpg'),
(76, 'iniemailpalsu@bimansphotography.com', 'Pantai solong', 'Pre-wedding', 'Pantai', '54447036_276619249936942_5625175009049247290_n.jpg'),
(77, 'iniemailpalsu@bimansphotography.com', 'gedung party', 'Wedding', 'Kota', '56205206_153196399046989_23118364075317071_n.jpg'),
(78, 'iniemailpalsu@bimansphotography.com', 'gedung party', 'Wedding', 'Kota', '50746298_522044228282095_6454291193381669028_n.jpg'),
(79, 'iniemailpalsu@bimansphotography.com', 'gedung party', 'Wedding', 'Kota', '49798913_437297393475873_1480901831190137075_n.jpg'),
(80, 'iniemailpalsu@topan.com', 'Kebun Buah Naga', 'Pre-wedding', 'Kota', '1e6da92acc25c1263f5f2b42ff4eae2d.jpg'),
(81, 'iniemailpalsu@topan.com', 'Kebun Buah Naga', 'Pre-wedding', 'Kota', 'sas.jpg'),
(82, 'iniemailpalsu@topan.com', 'Pantai Bama', 'Pre-wedding', 'Pantai', '57259569f459e8057be43dc131a5c3cc.jpg'),
(83, 'iniemailpalsu@topan.com', 'EL Royal Banyuw', 'Wedding', 'Kota', '1ada5601006c5d550ea6c85515fd63ea.jpg'),
(84, 'iniemailpalsu@topan.com', 'Pulau Merah Ban', 'Pre-wedding', 'Kota', '59444393_355823271953410_2334838102412900874_n.jpg'),
(85, 'iniemailpalsu@topan.com', 'pantai bangsrin', 'Pre-wedding', 'Pantai', '691ae7893fdc0c136d3cd0b5f06db633.jpg'),
(86, 'iniemailpalsu@topan.com', 'Baluran ', 'Pre-wedding', 'Gunung', 'c734353fb5acd725add2ff5b4aa641a2.jpg'),
(87, 'iniemailpalsu@topan.com', 'Jawatan', 'Pre-wedding', 'Kota', '58409070_430567524169270_7703496614744063909_n.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE IF NOT EXISTS `komentar` (
`id_komenter` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `photographer` varchar(40) NOT NULL,
  `komentar` text NOT NULL,
  `rating` int(11) NOT NULL,
  `tanggal_komen` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `komentar`
--

INSERT INTO `komentar` (`id_komenter`, `username`, `photographer`, `komentar`, `rating`, `tanggal_komen`) VALUES
(1, 'firman.akun2@gmail.com', 'dhesyani@gmail.com', 'bagus', 4, '2019-05-30 23:35:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `list_inbox`
--

CREATE TABLE IF NOT EXISTS `list_inbox` (
`id_list_inbox` int(11) NOT NULL,
  `custumer` varchar(100) NOT NULL,
  `photographer` varchar(100) NOT NULL,
  `status_terbaca_custumer` varchar(15) NOT NULL,
  `status_terbaca_photographer` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `list_inbox`
--

INSERT INTO `list_inbox` (`id_list_inbox`, `custumer`, `photographer`, `status_terbaca_custumer`, `status_terbaca_photographer`) VALUES
(1, 'firman.akun2@gmail.com', 'dhesyani@gmail.com', 'terbaca', 'terbaca');

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
  `keterangan` text,
  `status_transaksi_terbaca_admin` varchar(20) NOT NULL DEFAULT 'belum terbaca',
  `status_konfirmasi_transaksi_terbaca_customer` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_booking`, `tanggal_transaksi`, `jumlah_transaksi`, `foto_transaksi`, `status`, `keterangan`, `status_transaksi_terbaca_admin`, `status_konfirmasi_transaksi_terbaca_customer`) VALUES
(1, 4, '2019-06-02', 2500000, 'Tulips1.jpg', 'Berhasil', 'Ada transaksi Baru', 'sudah terbaca', 'sudah terbaca');

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
('firman.akun2@gmail.com', '25f9e794323b453885f5181f1b624d0b', 'Firman Satriya ', '2345678765', 'aa', 'phographer22.jpg', NULL, NULL, NULL, 3, 'Aktif'),
('firman.akun3@gmail.com', '25f9e794323b453885f5181f1b624d0b', 'Satriya', '34431', 'Jl.ikan mainan', 'phographer12.jpg', 'Dhesyani', 'Dhesyani', 'Dhesyani', 2, 'Aktif'),
('iniemailpalsu@adam.alfis.com', '25f9e794323b453885f5181f1b624d0b', 'Adam Alfis', '081336712220', 'Genteng-banyuwangi', 'foto_profil_adam.jpg', 'Oppa Adam', '-', 'Adam_Alfis', 2, 'Aktif'),
('iniemailpalsu@aditya.pradana.com', '25f9e794323b453885f5181f1b624d0b', 'Aditya Pradana', '081336565086', 'Singojuruh ', 'Foto_profil2.jpg', 'Aditya Pradana', '-', 'Aditya_Pradana', 2, 'Aktif'),
('iniemailpalsu@atmaja.com', '25f9e794323b453885f5181f1b624d0b', 'Atmaja_Photogra', '+6281239307388', 'Desa Aliyan ', 'foto_profil.jpg', 'AtmajaPhotograp', '-', 'Atmaja_Photogra', 2, 'Aktif'),
('iniemailpalsu@bimansphotography.com', '25f9e794323b453885f5181f1b624d0b', 'bimansphotograp', '087755891121', 'JL.teratai,Loji #Banyuwangi (barat smpn 1 glagah bwi)', 'mas_biman.jpg', 'Bimansphotograp', '-', 'Bimansphotograp', 2, 'Aktif'),
('iniemailpalsu@kemonphoto.com', '25f9e794323b453885f5181f1b624d0b', 'KemonPhoto', ' +62 878-6490-5', 'Songgon', 'kemon1.jpg', 'Agis Akmal', '-', 'Kemonphoto', 2, 'Aktif'),
('iniemailpalsu@pello.photo.com', '25f9e794323b453885f5181f1b624d0b', 'Pello Photo', '081252444408', 'Banyuwangi Kota ', 'foto_profile.jpg', 'Pello Photo', '-', 'PelloPhoto', 2, 'Aktif'),
('iniemailpalsu@pilar.photo.com', '25f9e794323b453885f5181f1b624d0b', 'Pillar_Studio', '085336273115', 'Blimbingsari', 'asa.jpg', 'Pillar photo', '-', 'Pillar_Studio', 2, 'Aktif'),
('iniemailpalsu@sevenskybwi.com', '25f9e794323b453885f5181f1b624d0b', 'SevenskyBwi', '085212105575', 'Jln Kali klatak Perum Smantan Banyuwangi', 'sevensky1.jpg', 'sevenskybanyuwa', '-', 'sevenskybanyuwa', 2, 'Aktif'),
('iniemailpalsu@topan.com', '25f9e794323b453885f5181f1b624d0b', 'Topan Pamungkas', '087838377906', 'Balak - songgon ', 'foto_profil1.jpg', 'Topan Pamungkas', '-', ' topan_restu_pa', 2, 'Aktif'),
('iniemailpalsu@yanx.project.com', '25f9e794323b453885f5181f1b624d0b', 'Yanx.project', '083847509497', 'Jln Lurah Mui Dusun Sidomulyo Rogojampi 68462', 'Logo_pemilik3.jpg', 'Albertus Yoga', 'alyoga12', 'yanx.project', 2, 'Aktif'),
('yanx.project@gmail.com', '25f9e794323b453885f5181f1b624d0b', 'Yanx.project', '083847509497', 'Rogojampi ', 'Logo_pemilik.jpg', NULL, NULL, NULL, 3, 'Aktif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
 ADD PRIMARY KEY (`id_booking`), ADD KEY `booking_ibfk_1` (`username`), ADD KEY `booking_ibfk_2` (`id_paket`);

--
-- Indexes for table `detail_inbox`
--
ALTER TABLE `detail_inbox`
 ADD PRIMARY KEY (`id_detail_inbox`);

--
-- Indexes for table `galleri`
--
ALTER TABLE `galleri`
 ADD PRIMARY KEY (`id_galleri`), ADD KEY `galleri_ibfk_1` (`username`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
 ADD PRIMARY KEY (`id_komenter`);

--
-- Indexes for table `list_inbox`
--
ALTER TABLE `list_inbox`
 ADD PRIMARY KEY (`id_list_inbox`);

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
MODIFY `id_booking` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `detail_inbox`
--
ALTER TABLE `detail_inbox`
MODIFY `id_detail_inbox` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `galleri`
--
ALTER TABLE `galleri`
MODIFY `id_galleri` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=88;
--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
MODIFY `id_komenter` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `list_inbox`
--
ALTER TABLE `list_inbox`
MODIFY `id_list_inbox` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `paket_foto`
--
ALTER TABLE `paket_foto`
MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
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
