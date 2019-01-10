-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2019 at 09:50 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbejurnalibbi`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbljurnal`
--

CREATE TABLE `tbljurnal` (
  `idjurnal` int(11) NOT NULL,
  `judul` text NOT NULL,
  `nim` varchar(11) NOT NULL,
  `jurusan` enum('SI','TI') NOT NULL,
  `tahun` varchar(4) NOT NULL,
  `jumlahhalaman` int(7) NOT NULL,
  `ringkasan` text NOT NULL,
  `iduser` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbljurnal`
--

INSERT INTO `tbljurnal` (`idjurnal`, `judul`, `nim`, `jurusan`, `tahun`, `jumlahhalaman`, `ringkasan`, `iduser`) VALUES
(1, 'Robotik Pembersih Kolam dari RaspberiPi', '1513121479', 'TI', '2017', 210, 'Skripsi Mengenai IOT', 'admin'),
(6, 'adasdsaa', '1513121455', 'SI', '2018', 213, 'asdsadas', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbljurnaldtl`
--

CREATE TABLE `tbljurnaldtl` (
  `idjurnaldetail` int(10) NOT NULL,
  `idjurnal` int(11) NOT NULL,
  `jenis` enum('0','1','2','3','4','5') NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbljurnaldtl`
--

INSERT INTO `tbljurnaldtl` (`idjurnaldetail`, `idjurnal`, `jenis`, `isi`) VALUES
(1, 1, '0', 'adad asdasda sdada sd'),
(2, 1, '1', 'adads adsasd asdadasda dasdasd asda adasda dasd adas d'),
(3, 1, '3', 'adasda asdasd adsasda adasd ');

-- --------------------------------------------------------

--
-- Table structure for table `tblpenulis`
--

CREATE TABLE `tblpenulis` (
  `nim` varchar(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempatlahir` varchar(50) NOT NULL,
  `tanggallahir` date NOT NULL,
  `alamat` text NOT NULL,
  `jurusan` enum('SI','TI') NOT NULL,
  `konsentrasi` enum('MM','ADB','RPL','JK') NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpenulis`
--

INSERT INTO `tblpenulis` (`nim`, `nama`, `tempatlahir`, `tanggallahir`, `alamat`, `jurusan`, `konsentrasi`, `telepon`, `email`) VALUES
('1513121455', 'Kiren Hariharan', 'Wakanda Selatan', '1998-03-21', 'Kampong', 'TI', 'JK', '089xxxx', 'kiren@mail.com'),
('1513121456', 'ADSAD', 'ASD', '2018-12-14', 'ASDASD', 'SI', 'MM', '089XXXX', 'asda@asd.com'),
('1513121457', 'asdadas', 'asdad', '2018-12-07', 'adadsa', 'SI', 'MM', '908xxx', 'asda@ads.com'),
('1513121479', 'Yan Freddrick', 'Medan', '1996-11-28', 'Jl. Karya', 'TI', 'RPL', '081xxxx', 'felix@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `userid` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `status` enum('AKD','MHS','DOS') NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`userid`, `nama`, `alamat`, `telepon`, `email`, `status`, `password`) VALUES
('admin', 'Yan', 'Yasyana Polyana', '061xxxx', 'admin@admin.ac.id', 'AKD', '21232f297a57a5a743894a0e4a801fc3'),
('lapet', 'Freddrick', 'Sekip', '089xxxx', 'asd@asd.co', 'MHS', 'e10adc3949ba59abbe56e057f20f883e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbljurnal`
--
ALTER TABLE `tbljurnal`
  ADD PRIMARY KEY (`idjurnal`);

--
-- Indexes for table `tbljurnaldtl`
--
ALTER TABLE `tbljurnaldtl`
  ADD PRIMARY KEY (`idjurnaldetail`);

--
-- Indexes for table `tblpenulis`
--
ALTER TABLE `tblpenulis`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbljurnal`
--
ALTER TABLE `tbljurnal`
  MODIFY `idjurnal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbljurnaldtl`
--
ALTER TABLE `tbljurnaldtl`
  MODIFY `idjurnaldetail` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
