-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2022 at 08:17 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
--
-- Database: `hotel`
--
-- --------------------------------------------------------
--
-- Table structure for table `admin`
--
CREATE TABLE IF NOT EXISTS `admin` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `nama` varchar(100) NOT NULL,
 `username` varchar(50) NOT NULL,
 `password` varchar(200) NOT NULL,
 `level` enum('admin','resepsionis') NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;
--
-- Dumping data for table `admin`
--
INSERT INTO `admin` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'Administrator', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(2, 'Resepsionis', 'resepsionis', '3aeff485f68b360d076de3d73f9247ad', 'resepsionis');
-- --------------------------------------------------------
--
-- Table structure for table `fasilitas_hotel`
--
CREATE TABLE IF NOT EXISTS `fasilitas_hotel` (
 `id_fasilitas_hotel` int(11) NOT NULL AUTO_INCREMENT,
 `nama_fasilitas_hotel` varchar(100) NOT NULL,
 `foto_fasilitas_hotel` varchar(100) NOT NULL,
 `deskripsi_fasilitas_hotel` text NOT NULL,
 PRIMARY KEY (`id_fasilitas_hotel`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;
--
-- Dumping data for table `fasilitas_hotel`
--
INSERT INTO `fasilitas_hotel` (`id_fasilitas_hotel`, `nama_fasilitas_hotel`, `foto_fasilitas_hotel`,
`deskripsi_fasilitas_hotel`) VALUES
(1, 'Ruang Lobby', 'lobi_hotel.jpg', 'Merupakan ruang tunggu yang sangat nyaman bagi para tamu
ketika akan melakukan cek-in maupun cek-out.'),
(2, 'Kolam Renang', 'kolam_renang.jpg', 'Fasilitas ini diperuntukkan bagi tamu yang ingin melepas
lelah dan ingin merefresing sejenak untuk menikmati sejuknya air jernih saat berenang.'),
(3, 'Ruang atau Balai Pertemuan', 'balai_pertemuan.jpg', 'Bisa dimanfaatkan untuk menggelar acara
besar seperti resepsi pernikahan, acara seminar ataupun rapat dengan tamu yang lumayan
banyak.'),
(4, 'Ruang Santai', 'ruang_santai.jpg', 'Ruang ini disediakan khusus untuk bersantai atau sekedar
mengisi waktu kosong dengan udara dan almosfir yang sangat mendukung.'),
(5, 'Tempat Olahraga', 'olah_raga.jpg', 'Untuk memfasilitasi tamu yang gemar olahraga agar tetap
bugar dan kesehatannya tetap terjaga meskipun sedang dalam bepergian.'),
(6, 'Gratis Sarapan Pagi', 'sarapan.jpg', 'Sarapan di hotel bisa memudahkan tamu pada pagi hari
sebelum beraktivitas. Tamu cukup ke restoran, lalu makan dan siap beraktivitas setelah itu.'),
(7, 'Restoran', 'restoran.jpg', 'Untuk kenyamanan tamu kami, Hotel Hebat menyediakan restoran
untuk dapat menikmati ragam menu lokal dan internasional kami dengan suasana yang hangat dan
ramah'),
(8, 'Pelayanan 24 Jam', 'resepsionis.jpg', 'Pelayanan 24 jam Ini tentunya akan mempermudah para
tamu kami untuk bisa tetap memanfaatkan fasilitas hotel walaupun datang tengah malam
sekalipun.');
-- --------------------------------------------------------
--
-- Table structure for table `fasilitas_kamar`
--
CREATE TABLE IF NOT EXISTS `fasilitas_kamar` (
 `id_fasilitas_kamar` int(11) NOT NULL AUTO_INCREMENT,
 `id_kamar` int(11) NOT NULL,
 `nama_fasilitas_kamar` varchar(100) NOT NULL,
 PRIMARY KEY (`id_fasilitas_kamar`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;
--
-- Dumping data for table `fasilitas_kamar`
--
INSERT INTO `fasilitas_kamar` (`id_fasilitas_kamar`, `id_kamar`, `nama_fasilitas_kamar`) VALUES
(1, 1, 'Wi-Fi Internet gratis'),
(2, 1, 'Kamar mandi'),
(3, 1, 'Ukuran kamar 6 m2'),
(4, 1, 'Memiliki AC'),
(5, 1, 'TV Digital'),
(6, 1, 'Seprai kualitas premium'),
(7, 1, 'Tipe Matras');
-- --------------------------------------------------------
--
-- Table structure for table `kamar`
--
CREATE TABLE IF NOT EXISTS `kamar` (
 `id_kamar` int(11) NOT NULL AUTO_INCREMENT,
 `nama_kamar` varchar(100) NOT NULL,
 `foto_kamar` varchar(100) NOT NULL,
 `jumlah_kamar` int(11) NOT NULL,
 `harga_kamar` int(11) NOT NULL,
 `deskripsi_kamar` text NOT NULL,
 PRIMARY KEY (`id_kamar`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;
--
-- Dumping data for table `kamar`
--
INSERT INTO `kamar` (`id_kamar`, `nama_kamar`, `foto_kamar`, `jumlah_kamar`, `harga_kamar`,
`deskripsi_kamar`) VALUES
(1, 'Standar Room', 'kamar_standar.jpg', 200, 400000, 'Tipe kamar ini biasanya dibanderol dengan
harga yang lebih terjangkau . Jika Anda memesan tipe kamar ini fasilitas yang didapatkan seperti
kasur dengan ukuran 2 queen size atau king size.\n\nMeskipun begitu untuk fasilitas lainnya sangat
berpengaruh dengan jenis masing-masing hotel sesuai dengan standar hotel bintang 1-5.'),
(2, 'Suite Room', 'kamar_suite.jpg', 100, 700000, 'Superior room merupakan tipe kamar sedikit lebih
baik daripada tipe Standar Room. Adapun perbedaan yang paling jelas diantara keduanya adalah
interior kamar yang lebih bagus serta view kamar yang ditawarkannya.'),
(3, 'Deluxe Room', 'kamar_deluxe.jpg', 50, 1500000, 'Tipe kamar ini memiliki ukuran ruangan yang
lebih besar. Biasanya tersedia beberapa ukuran kasur yang bisa di pilih seperti twin bed atau double
bed. Selain itu dari segi interior dan kamar mandinya tentu saja lebih mewah dari tipe di
bawahnya.'),
(4, 'Junior Suite Room', 'junior_suite.jpg', 25, 1800000, 'Yang paling jelas dari tipe ini adalah
tersedianya ruang tamu di dalam kamar. Meskipun masih menjadi satu namun ruang tamu tersebut
dibatasi dengan sekat kaca besar atau lemari agar kamar tidurnya tidak terlihat.'),
(5, 'Singel Room', 'single_room.jpg', 250, 300000, 'Tipe single room merupakan tipe kamar paling
umum yang teridri dari sofa, single bed dan kamar mandi. Untuk ukurannya sendiri tidak terlalu
besar sehingga sangat cocok digunakan oleh para backpacker.'),
(6, ' Family Room', 'kamar_family.jpg', 20, 1000000, 'Seperti namanya, kamar yang satu ini
diperuntukan bagi keluarga atau teman-teman.Umumnya, kamar ini memiliki satu kasur besar
berukuran king size serta satu kasur berukuran lebih kecil.Selain ukuran kamarnya yang lebih luas
dari tipe kamar lain, family room juga menyediakan fasilitas yang cukup lengkap.');
-- --------------------------------------------------------
--
-- Table structure for table `pemesanan`
--
CREATE TABLE IF NOT EXISTS `pemesanan` (
 `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT,
 `id_kamar` int(11) NOT NULL,
 `tanggal_masuk` date NOT NULL,
 `tanggal_keluar` date NOT NULL,
 `jumlah_kamar_dipesan` int(11) NOT NULL,
 `nama_pemesan` varchar(100) NOT NULL,
 `email_pemesan` varchar(100) NOT NULL,
 `no_hp` varchar(16) NOT NULL,
 `nama_tamu` varchar(100) NOT NULL,
 `status_pemesanan` enum('1','0') NOT NULL,
 `tanggal_pesan` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
 PRIMARY KEY (`id_pemesanan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;
--
-- Dumping data for table `pemesanan`
--
INSERT INTO `pemesanan` (`id_pemesanan`, `id_kamar`, `tanggal_masuk`, `tanggal_keluar`,
`jumlah_kamar_dipesan`, `nama_pemesan`, `email_pemesan`, `no_hp`, `nama_tamu`,
`status_pemesanan`, `tanggal_pesan`) VALUES
(1, 5, '2022-03-25', '2022-03-31', 1, 'Testing', 'te@tes.com', '082288889999', 'Testing', '0', '2022-03-
24 10:02:45'),
(2, 1, '2022-03-28', '2022-03-31', 3, 'Andi Hakim', 'andi@gmail.com', '082288287099', 'Andi Hakim',
'0', '2022-03-27 12:37:52');
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */; 
