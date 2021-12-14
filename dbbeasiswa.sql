-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2021 at 08:30 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbbeasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(11) NOT NULL,
  `nmmahasiswa` varchar(500) NOT NULL,
  `alamat` varchar(500) NOT NULL,
  `telp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nmmahasiswa`, `alamat`, `telp`) VALUES
('02', 'agus', 'serpong', '129310293'),
('1151800001', 'abu', 'ciater', '0812345'),
('1151800002', 'kiko', 'tangerang', '0192831'),
('1151800003', 'qorul', 'Pasopati', '911'),
('1151800010', 'nabila', 'tigaraksa', '128124'),
('1151800047', 'jaelani', 'parung', '9021938'),
('1151800048', 'anwar', 'parung', '571824'),
('1151800058', 'joko', 'salak', '911'),
('1312', 'abda', 'parung', '1231241');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `iddaftar` int(11) NOT NULL,
  `tgldaftar` date NOT NULL,
  `tahun` varchar(4) NOT NULL,
  `nim` varchar(11) NOT NULL,
  `pendapatan` int(8) NOT NULL,
  `ipk` decimal(3,2) NOT NULL,
  `saudara` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`iddaftar`, `tgldaftar`, `tahun`, `nim`, `pendapatan`, `ipk`, `saudara`) VALUES
(1, '2021-07-01', '2021', '1151800050', 3000000, '3.30', 3),
(3, '2021-07-09', '2021', '1151800001', 1300000, '2.00', 0),
(4, '2021-07-09', '2021', '1151800058', 1000000, '2.00', 3),
(6, '2021-07-11', '2021', '1151800047', 1000000, '4.00', 3),
(7, '2021-07-11', '2021', '1151800002', 1000, '4.00', 4),
(8, '2021-07-11', '2021', '1151800010', 1000000, '4.00', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`iddaftar`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `iddaftar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
