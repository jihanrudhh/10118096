-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Aug 19, 2020 at 02:04 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `akademik`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_admin`
--

CREATE TABLE `t_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_admin`
--

INSERT INTO `t_admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `t_dosen`
--

CREATE TABLE `t_dosen` (
  `nip` int(11) NOT NULL,
  `nama_dosen` varchar(255) DEFAULT NULL,
  `tempat` varchar(255) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `no_telepon` text DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t_fakultas`
--

CREATE TABLE `t_fakultas` (
  `kode_fakultas` varchar(10) NOT NULL,
  `nama_fakultas` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t_jurusan`
--

CREATE TABLE `t_jurusan` (
  `kode_jurusan` int(11) NOT NULL,
  `nama_jurusan` varchar(255) NOT NULL,
  `kode_fakultas` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t_mahasiswa`
--

CREATE TABLE `t_mahasiswa` (
  `id` int(11) NOT NULL,
  `nim` int(11) NOT NULL,
  `nama_mahasiswa` varchar(225) DEFAULT NULL,
  `tempat` varchar(225) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` varchar(225) DEFAULT NULL,
  `alamat` varchar(225) DEFAULT NULL,
  `no_telepon` text DEFAULT NULL,
  `email` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_mahasiswa`
--

INSERT INTO `t_mahasiswa` (`id`, `nim`, `nama_mahasiswa`, `tempat`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `no_telepon`, `email`) VALUES
(1, 10118092, 'Olgaidah', 'Palembang', '2000-09-03', 'Perempuan', 'Dago Bawah', '089678234561', 'olga@gmail.com'),
(2, 10118093, 'Muhamad Viery Rafsanjani ', 'Jakarta', '2000-08-05', 'Laki-Laki', 'Cicalengka Indah', '089767896543', 'vivi@gmail.com'),
(3, 10118094, 'Muhammad Aji Pamungkas', 'Bandung', '2000-08-12', 'Laki-Laki', 'Kopo Indah', '08967543218', 'aji@gmail.com'),
(4, 10118095, 'Hafidz Rahman', 'Bandung', '2000-08-16', 'Laki-Laki', 'Merpati House', '081280670123', 'ha@gmail.com'),
(5, 10118096, 'Alifah Jihan Raudhah  ', 'Bandung', '2000-07-17', 'Perempuan', 'Tubagus Ismail Bawah', '081280670181', 'ja@gmail.com'),
(6, 10118097, 'Mukhlis Nuryadi ', 'Bandung', '2000-09-22', 'Laki-Laki', 'Dago Bawah ', '089290129832', 'lis@gmail.com'),
(7, 10118098, 'Aldi Julfiansyah 	', 'Bandung', '2000-08-05', 'Laki-Laki', 'Tubagus ismail bawah', '089237465589', 'aldi@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `t_matakuliah`
--

CREATE TABLE `t_matakuliah` (
  `kode_matakuliah` varchar(10) NOT NULL,
  `nama_matakuliah` varchar(255) DEFAULT NULL,
  `sks` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t_perkuliahan`
--

CREATE TABLE `t_perkuliahan` (
  `nim` int(11) NOT NULL,
  `nip` int(11) DEFAULT NULL,
  `kode_matakuliah` varchar(255) DEFAULT NULL,
  `jam` datetime DEFAULT NULL,
  `ruang_perkuliahan` varchar(10) DEFAULT NULL,
  `semester` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_admin`
--
ALTER TABLE `t_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_dosen`
--
ALTER TABLE `t_dosen`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `t_fakultas`
--
ALTER TABLE `t_fakultas`
  ADD PRIMARY KEY (`kode_fakultas`);

--
-- Indexes for table `t_jurusan`
--
ALTER TABLE `t_jurusan`
  ADD PRIMARY KEY (`kode_jurusan`);

--
-- Indexes for table `t_mahasiswa`
--
ALTER TABLE `t_mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_matakuliah`
--
ALTER TABLE `t_matakuliah`
  ADD PRIMARY KEY (`kode_matakuliah`);

--
-- Indexes for table `t_perkuliahan`
--
ALTER TABLE `t_perkuliahan`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
