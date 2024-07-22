-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2024 at 07:39 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aplikasi_akademik_mahasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id_dosen` int(11) NOT NULL,
  `nama_dosen` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `telepon` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `khs`
--

CREATE TABLE `khs` (
  `no_khs` int(24) NOT NULL,
  `npm` varchar(13) NOT NULL,
  `kode_matakuliah` varchar(13) NOT NULL,
  `nilai` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `khs`
--

INSERT INTO `khs` (`no_khs`, `npm`, `kode_matakuliah`, `nilai`) VALUES
(1, '217064516074', '22000001103', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `npm` varchar(13) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(64) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `nama_program_studi` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`npm`, `nama`, `password`, `alamat`, `email`, `telepon`, `nama_program_studi`) VALUES
('217064516074', 'faris', '$2y$10$0bZUR7tGQGhlbcDstEDnwulsSdfoavPrcFzvu8bkUAmwJ7s2Aa6La', 'jln. pagujaten no.5', 'farisnabhan@gmail.com', '0812391321', 'Informatika');

-- --------------------------------------------------------

--
-- Table structure for table `matakuliah`
--

CREATE TABLE `matakuliah` (
  `kode_matakuliah` varchar(13) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `sks` int(11) NOT NULL,
  `id_dosen` int(11) DEFAULT NULL,
  `id_program_studi` int(21) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `matakuliah`
--

INSERT INTO `matakuliah` (`kode_matakuliah`, `nama`, `sks`, `id_dosen`, `id_program_studi`) VALUES
('22000001103', 'Pendidikan Kewarganegaraan', 2, NULL, NULL),
('22000001104', 'Bahasa Indonesia', 2, NULL, NULL),
('22000001116', 'Bahasa Inggris', 2, NULL, NULL),
('22080302101', 'Algoritma dan Pemrograman I', 4, NULL, 224),
('22080302103', 'Aljabar Linier', 2, NULL, 224),
('22080302104', 'Kalkulus I', 2, NULL, 224),
('22080302109', 'Pengantar Teknologi Komunikasi dan Informatika', 2, NULL, 224),
('22080302110', 'TIK dan Masyarakat', 3, NULL, 224);

-- --------------------------------------------------------

--
-- Table structure for table `program_studi`
--

CREATE TABLE `program_studi` (
  `id_program_studi` int(21) NOT NULL,
  `nama_program_studi` varchar(64) NOT NULL,
  `fakultas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `program_studi`
--

INSERT INTO `program_studi` (`id_program_studi`, `nama_program_studi`, `fakultas`) VALUES
(224, 'Informatika', 'Fakultas Teknologi Komunikasi dan Informatika\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id_dosen`);

--
-- Indexes for table `khs`
--
ALTER TABLE `khs`
  ADD PRIMARY KEY (`no_khs`),
  ADD UNIQUE KEY `npm` (`npm`),
  ADD KEY `kode_matakuliah` (`kode_matakuliah`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`npm`);

--
-- Indexes for table `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD PRIMARY KEY (`kode_matakuliah`),
  ADD KEY `id_dosen` (`id_dosen`),
  ADD KEY `id_program_studi` (`id_program_studi`);

--
-- Indexes for table `program_studi`
--
ALTER TABLE `program_studi`
  ADD PRIMARY KEY (`id_program_studi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id_dosen` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `khs`
--
ALTER TABLE `khs`
  MODIFY `no_khs` int(24) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `khs`
--
ALTER TABLE `khs`
  ADD CONSTRAINT `khs_ibfk_1` FOREIGN KEY (`npm`) REFERENCES `mahasiswa` (`npm`),
  ADD CONSTRAINT `khs_ibfk_2` FOREIGN KEY (`kode_matakuliah`) REFERENCES `matakuliah` (`kode_matakuliah`);

--
-- Constraints for table `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD CONSTRAINT `fk_matakuliah_program_studi` FOREIGN KEY (`id_program_studi`) REFERENCES `program_studi` (`id_program_studi`),
  ADD CONSTRAINT `matakuliah_ibfk_1` FOREIGN KEY (`id_dosen`) REFERENCES `dosen` (`id_dosen`);

--
-- Constraints for table `program_studi`
--
ALTER TABLE `program_studi`
  ADD CONSTRAINT `program_studi_ibfk_1` FOREIGN KEY (`id_program_studi`) REFERENCES `mahasiswa` (`id_program_studi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
