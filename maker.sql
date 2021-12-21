-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2021 at 04:34 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maker`
--

-- --------------------------------------------------------

--
-- Table structure for table `info_buku`
--

CREATE TABLE `info_buku` (
  `id_buku` int(10) NOT NULL,
  `no_isbn` varchar(30) NOT NULL,
  `nama_buku` varchar(100) NOT NULL,
  `penulis` varchar(100) NOT NULL,
  `penerbit` varchar(100) NOT NULL,
  `tanggal_terbit` varchar(20) NOT NULL,
  `harga_jual` int(5) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `info_buku`
--

INSERT INTO `info_buku` (`id_buku`, `no_isbn`, `nama_buku`, `penulis`, `penerbit`, `tanggal_terbit`, `harga_jual`, `image`) VALUES
(0, '0-671-12805-1', 'Catch 22', 'Joseph Heller', 'Simon & Schuster', '11-10-1961', 200000, 'catch22.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(64) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(32) NOT NULL,
  `hak_akses` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `username`, `password`, `hak_akses`) VALUES
(1, 'Hendri', 'admin', 'admin1', 'Admin'),
(4, 'Erland', 'customer-e', 'customer1', 'Customer'),
(5, 'Lembong', 'customer-j', 'customer2', 'Customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info_buku`
--
ALTER TABLE `info_buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
