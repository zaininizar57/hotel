-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2022 at 08:24 AM
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
(11, 0, '2022-03-25', '2022-03-28', 2, 'Bahrul', 'bahrul123@gmail.com', '0823543543', '\r\nBahrul', '0', '2022-03-25 02:10:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
