-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2022 at 08:39 AM
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
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `level` enum('admin','resepsionis') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'Administrator', 'admin', 'admin', 'admin'),
(2, 'Resepsionis', 'resepsionis', 'resepsionis', 'resepsionis');

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas_hotel`
--

CREATE TABLE `fasilitas_hotel` (
  `id_fasilitas_hotel` int(11) NOT NULL,
  `nama_fasilitas_hotel` varchar(100) NOT NULL,
  `foto_fasilitas_hotel` varchar(100) NOT NULL,
  `deskripsi_fasilitas_hotel` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fasilitas_hotel`
--

INSERT INTO `fasilitas_hotel` (`id_fasilitas_hotel`, `nama_fasilitas_hotel`, `foto_fasilitas_hotel`, `deskripsi_fasilitas_hotel`) VALUES
(1, 'Ruang Lobby', 'Ruang Lobby.jpg', 'Merupakan ruang tunggu yang sangat nyaman bagi para tamu\r\nketika akan melakukan cek-in maupun cek-out.'),
(2, 'Kolam Renang', 'Kolam Renang.jpg', 'Fasilitas ini diperuntukkan bagi tamu yang ingin melepas\r\nlelah dan ingin merefresing sejenak untuk menikmati sejuknya air jernih saat berenang.'),
(3, 'Ruang atau Balai Pertemuan', 'Balai_Pertemuan.jpg', 'Bisa dimanfaatkan untuk menggelar acara\r\nbesar seperti resepsi pernikahan, acara seminar ataupun rapat dengan tamu yang lumayan\r\nbanyak.'),
(4, 'Ruang Santai', 'Ruang_Santai.jpg', 'Ruang ini disediakan khusus untuk bersantai atau sekedar\r\nmengisi waktu kosong dengan udara dan almosfir yang sangat mendukung.'),
(5, 'Tempat Olahraga', 'Tempat Olahraga', 'Untuk memfasilitasi tamu yang gemar olahraga agar\r\ntetap bugar dan kesehatannya tetap terjaga meskipun sedang dalam bepergian.');

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas_kamar`
--

CREATE TABLE `fasilitas_kamar` (
  `id_fasilitas_kamar` int(11) NOT NULL,
  `id_kamar` int(11) NOT NULL,
  `nama_fasilitas_kamar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fasilitas_kamar`
--

INSERT INTO `fasilitas_kamar` (`id_fasilitas_kamar`, `id_kamar`, `nama_fasilitas_kamar`) VALUES
(1, 1, 'Wi-Fi Internet gratis'),
(2, 1, 'Kamar mandi'),
(3, 1, 'Ukuran kamar 6 m2'),
(4, 1, 'Memiliki AC'),
(5, 1, 'TV'),
(6, 1, 'Seprai kualitas premium'),
(7, 1, 'Tipe Matras');

-- --------------------------------------------------------

--
-- Table structure for table `kamar`
--

CREATE TABLE `kamar` (
  `id_kamar` int(11) NOT NULL,
  `nama_kamar` varchar(100) NOT NULL,
  `foto_kamar` varchar(100) NOT NULL,
  `jumlah_kamar` int(11) NOT NULL,
  `harga_kamar` int(11) NOT NULL,
  `deskripsi_kamar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kamar`
--

INSERT INTO `kamar` (`id_kamar`, `nama_kamar`, `foto_kamar`, `jumlah_kamar`, `harga_kamar`, `deskripsi_kamar`) VALUES
(1, 'Standar Room', 'Standar Room', 200, 400000, 'Tipe kamar ini biasanya dibanderol dengan harga\r\nyang lebih terjangkau . Jika Anda memesan tipe kamar ini fasilitas yang didapatkan seperti kasur\r\ndengan ukuran 2 queen size atau king size.\r\n\r\nMeskipun begitu untuk fasilitas lainnya sangat\r\nberpengaruh dengan jenis masing-masing hotel sesuai dengan standar hotel bintang 1-5.'),
(2, 'Superior Room', 'Superior Room', 100, 700000, 'Superior room merupakan tipe kamar sedikit\r\nlebih baik daripada tipe Standar Room. Adapun perbedaan yang paling jelas diantara keduanya\r\nadalah interior kamar yang lebih bagus serta view kamar yang ditawarkannya.'),
(3, 'Deluxe Room', 'Deluxe Room', 50, 1500000, 'Tipe kamar ini memiliki ukuran ruangan yang lebih\r\nbesar. Biasanya tersedia beberapa ukuran kasur yang bisa di pilih seperti twin bed atau double bed.\r\nSelain itu dari segi interior dan kamar mandinya tentu saja lebih mewah dari tipe di bawahnya.'),
(4, 'Junior Suite Room', 'Junior Suite Room', 25, 1800000, 'Yang paling jelas dari tipe ini adalah\r\ntersedianya ruang tamu di dalam kamar. Meskipun masih menjadi satu namun ruang tamu tersebut\r\ndibatasi dengan sekat kaca besar atau lemari agar kamar tidurnya tidak terlihat.'),
(5, 'Singel Room', 'Singel Room', 250, 300000, 'Tipe single room merupakan tipe kamar paling umum\r\nyang teridri dari sofa, single bed dan kamar mandi. Untuk ukurannya sendiri tidak terlalu besar\r\nsehingga sangat cocok digunakan oleh para backpacker.');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesanan` int(11) NOT NULL,
  `id_kamar` int(11) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `tanggal_keluar` date NOT NULL,
  `jumlah_kamar_dipesan` int(11) NOT NULL,
  `nama_pemesan` varchar(100) NOT NULL,
  `email_pemesan` varchar(100) NOT NULL,
  `no_hp` varchar(16) NOT NULL,
  `nama_tamu` varchar(100) NOT NULL,
  `status_pemesanan` enum('1','0') NOT NULL,
  `tanggal_pesan` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id_pemesanan`, `id_kamar`, `tanggal_masuk`, `tanggal_keluar`, `jumlah_kamar_dipesan`, `nama_pemesan`, `email_pemesan`, `no_hp`, `nama_tamu`, `status_pemesanan`, `tanggal_pesan`) VALUES
(1, 5, '2022-03-25', '2022-03-31', 1, 'Testing', 'te@tes.com', '082288889999', 'Testing', '0', '0000-00-00 00:00:00'),
(2, 2, '2022-03-25', '2022-03-28', 3, 'Bahrul', 'bahrul123@gmail.com', '0823543543', '\r\nBahrul', '0', '2022-03-25 10:55:36'),
(3, 2, '2022-03-25', '2022-03-28', 3, 'Bahrul', 'bahrul123@gmail.com', '0823543543', '\r\nBahrul', '0', '2022-03-25 10:57:45'),
(4, 2, '2022-03-11', '2022-03-16', 3, 'asdfasd', 'fasdfasdf', '0823543543', '\r\nsdfasd', '0', '2022-03-25 10:59:47'),
(5, 2, '2022-03-11', '2022-03-16', 3, 'asdfasd', 'fasdfasdf', '0823543543', '\r\nsdfasd', '0', '2022-03-25 11:00:06'),
(6, 2, '2022-03-11', '2022-03-16', 3, 'asdfasd', 'fasdfasdf', '0823543543', '\r\nsdfasd', '0', '2022-03-25 11:00:25'),
(7, 2, '2022-03-11', '2022-03-16', 3, 'asdfasd', 'fasdfasdf', '0823543543', '\r\nsdfasd', '0', '2022-03-25 11:01:52'),
(8, 0, '2022-03-25', '2022-03-28', 2, 'Bahrul', 'bahrul123@gmail.com', '', '\r\nBahrul', '0', '2022-03-25 02:07:43'),
(9, 0, '2022-03-25', '2022-03-28', 2, 'Bahrul', 'bahrul123@gmail.com', '', '\r\nBahrul', '0', '2022-03-25 02:07:58'),
(10, 0, '2022-03-25', '2022-03-28', 2, 'Bahrul', 'bahrul123@gmail.com', '', '\r\nBahrul', '0', '2022-03-25 02:09:51'),
(11, 0, '2022-03-25', '2022-03-28', 2, 'Bahrul', 'bahrul123@gmail.com', '0823543543', '\r\nBahrul', '0', '2022-03-25 02:10:05'),
(12, 0, '0000-00-00', '0000-00-00', 0, '', '', '', '\r\n', '0', '2022-03-25 02:31:29'),
(13, 0, '2022-03-25', '2022-03-23', 3, 'Bahrul', 'zaininizar7610@gmail.com', '0823543543', '\r\nBahrul', '0', '2022-03-25 02:32:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fasilitas_hotel`
--
ALTER TABLE `fasilitas_hotel`
  ADD PRIMARY KEY (`id_fasilitas_hotel`);

--
-- Indexes for table `fasilitas_kamar`
--
ALTER TABLE `fasilitas_kamar`
  ADD PRIMARY KEY (`id_fasilitas_kamar`);

--
-- Indexes for table `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`id_kamar`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `fasilitas_hotel`
--
ALTER TABLE `fasilitas_hotel`
  MODIFY `id_fasilitas_hotel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `fasilitas_kamar`
--
ALTER TABLE `fasilitas_kamar`
  MODIFY `id_fasilitas_kamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `kamar`
--
ALTER TABLE `kamar`
  MODIFY `id_kamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
