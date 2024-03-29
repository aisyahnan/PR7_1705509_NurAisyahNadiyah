-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2019 at 05:13 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kereta_join`
--

-- --------------------------------------------------------

--
-- Table structure for table `gerbong`
--

CREATE TABLE `gerbong` (
  `kd_gerbong` char(7) NOT NULL,
  `kd_kereta` char(7) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gerbong`
--

INSERT INTO `gerbong` (`kd_gerbong`, `kd_kereta`, `nama`) VALUES
('GRB0001', 'KRT0002', 'A01'),
('GRB0002', 'KRT0002', 'B01'),
('GRB0003', 'KRT0003', 'C01');

-- --------------------------------------------------------

--
-- Table structure for table `kursi`
--

CREATE TABLE `kursi` (
  `kd_kursi` char(7) NOT NULL,
  `kd_gerbong` char(7) NOT NULL,
  `kd_kereta` char(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kursi`
--

INSERT INTO `kursi` (`kd_kursi`, `kd_gerbong`, `kd_kereta`) VALUES
('KRS0001', 'GRB0001', 'KRT0001'),
('KRS0002', 'GRB0001', 'KRT0001');

-- --------------------------------------------------------

--
-- Table structure for table `lokomotif`
--

CREATE TABLE `lokomotif` (
  `kd_kereta` char(7) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lokomotif`
--

INSERT INTO `lokomotif` (`kd_kereta`, `nama`) VALUES
('KRT0001', 'Argo Wilis'),
('KRT0002', 'MALABAR'),
('KRT0003', 'KURTOJOYO');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gerbong`
--
ALTER TABLE `gerbong`
  ADD PRIMARY KEY (`kd_gerbong`),
  ADD KEY `fk_gerbong_kereta` (`kd_kereta`);

--
-- Indexes for table `kursi`
--
ALTER TABLE `kursi`
  ADD PRIMARY KEY (`kd_kursi`),
  ADD KEY `fk_kursi_gerbong` (`kd_gerbong`),
  ADD KEY `fk_kursi_kereta` (`kd_kereta`);

--
-- Indexes for table `lokomotif`
--
ALTER TABLE `lokomotif`
  ADD PRIMARY KEY (`kd_kereta`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `gerbong`
--
ALTER TABLE `gerbong`
  ADD CONSTRAINT `fk_gerbong_kereta` FOREIGN KEY (`kd_kereta`) REFERENCES `lokomotif` (`kd_kereta`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kursi`
--
ALTER TABLE `kursi`
  ADD CONSTRAINT `fk_kursi_gerbong` FOREIGN KEY (`kd_gerbong`) REFERENCES `gerbong` (`kd_gerbong`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_kursi_kereta` FOREIGN KEY (`kd_kereta`) REFERENCES `lokomotif` (`kd_kereta`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
