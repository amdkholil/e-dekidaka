-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2020 at 05:41 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dekidaka`
--

-- --------------------------------------------------------

--
-- Table structure for table `bm_detail`
--

CREATE TABLE `bm_detail` (
  `id` int(11) NOT NULL,
  `id_prod` int(11) NOT NULL,
  `id_bm` int(11) NOT NULL,
  `jam` time NOT NULL,
  `menit` int(11) NOT NULL,
  `mesin` varchar(255) NOT NULL,
  `detail` text NOT NULL,
  `penanganan` text NOT NULL,
  `pic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bm_detail`
--

INSERT INTO `bm_detail` (`id`, `id_prod`, `id_bm`, `jam`, `menit`, `mesin`, `detail`, `penanganan`, `pic`) VALUES
(1, 2, 1, '00:00:00', 0, '0', '0', '0', '0'),
(2, 2, 1, '11:11:00', 11, '11', '11', '11', '11'),
(3, 2, 7, '10:10:00', -6, 'Mesin', 'Detail BM', 'Penanganan', 'nama');

-- --------------------------------------------------------

--
-- Table structure for table `detail_prod`
--

CREATE TABLE `detail_prod` (
  `id` int(11) NOT NULL,
  `id_prod` int(11) NOT NULL,
  `id_model` int(11) NOT NULL,
  `jam0` time NOT NULL,
  `jam1` time NOT NULL,
  `qty` int(11) NOT NULL,
  `remark` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_prod`
--

INSERT INTO `detail_prod` (`id`, `id_prod`, `id_model`, `jam0`, `jam1`, `qty`, `remark`) VALUES
(1, 2, 1, '07:30:00', '08:00:00', 80, ''),
(2, 2, 1, '08:00:00', '09:00:00', 165, 'lancar euy'),
(4, 3, 2, '10:00:00', '11:01:00', 100, ''),
(5, 9, 2, '07:00:00', '08:00:00', 90, ''),
(6, 9, 3, '08:00:00', '09:00:00', 100, '');

-- --------------------------------------------------------

--
-- Table structure for table `line`
--

CREATE TABLE `line` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kode_bu` varchar(100) NOT NULL,
  `section` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `line`
--

INSERT INTO `line` (`id`, `nama`, `kode_bu`, `section`) VALUES
(1, 'DCM 3', '', ''),
(2, 'DCM 4', '', ''),
(3, 'DCM 5', '', ''),
(4, 'DCM 6', '', ''),
(6, 'DCM 7', '', ''),
(7, 'DCM 8', '', ''),
(8, 'DCM 9', '', ''),
(9, 'Shaft Machining 1', '', ''),
(10, 'Shaft Machining 2', '', ''),
(11, 'Rotor Machining 1', '', ''),
(12, 'Piston 1 Machining', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `model`
--

CREATE TABLE `model` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `part_number` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `model`
--

INSERT INTO `model` (`id`, `nama`, `part_number`) VALUES
(1, 'FH D46T J8-3', '311-123-003'),
(2, 'FH D80N', '311-137-000'),
(3, 'RC 10S15 RZ B', '311-152-000'),
(4, 'FC D80N', '311-110-000');

-- --------------------------------------------------------

--
-- Table structure for table `ng_detail`
--

CREATE TABLE `ng_detail` (
  `id` int(11) NOT NULL,
  `id_prod` int(11) NOT NULL,
  `id_model` int(11) NOT NULL,
  `id_ng` int(11) NOT NULL,
  `jam` time NOT NULL,
  `qty` int(11) NOT NULL,
  `remark` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ng_detail`
--

INSERT INTO `ng_detail` (`id`, `id_prod`, `id_model`, `id_ng`, `jam`, `qty`, `remark`) VALUES
(1, 2, 1, 1, '08:00:00', 1, ''),
(2, 2, 1, 3, '08:05:00', 1, ''),
(3, 2, 1, 4, '23:00:00', 3, '----');

-- --------------------------------------------------------

--
-- Table structure for table `produksi`
--

CREATE TABLE `produksi` (
  `id` int(11) NOT NULL,
  `id_line` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `shift` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produksi`
--

INSERT INTO `produksi` (`id`, `id_line`, `tanggal`, `shift`) VALUES
(1, 9, '2020-01-21', 'm'),
(2, 11, '2020-01-21', 'm'),
(3, 10, '2020-01-21', 'm'),
(4, 7, '2020-01-21', 'm'),
(5, 11, '2020-01-26', 's'),
(6, 11, '2020-01-26', 'm'),
(7, 11, '2020-01-27', 's'),
(8, 11, '2020-01-27', 'm'),
(9, 11, '2020-01-28', 's'),
(10, 10, '2020-01-26', 's'),
(11, 10, '2020-01-26', 's'),
(12, 10, '2020-01-25', 's'),
(13, 10, '2020-01-24', 'm'),
(14, 10, '2020-01-24', 's'),
(15, 1, '2020-01-26', 'm'),
(16, 1, '2020-01-26', 's');

-- --------------------------------------------------------

--
-- Table structure for table `t_bm`
--

CREATE TABLE `t_bm` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t_bm`
--

INSERT INTO `t_bm` (`id`, `nama`, `deskripsi`) VALUES
(1, 'Breakdown', ''),
(2, 'BM', ''),
(4, 'lost time', ''),
(5, 'Setting', ''),
(6, 'Dandory', ''),
(7, 'change tool', '');

-- --------------------------------------------------------

--
-- Table structure for table `t_ng`
--

CREATE TABLE `t_ng` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t_ng`
--

INSERT INTO `t_ng` (`id`, `nama`, `deskripsi`) VALUES
(1, 'Porosity', ''),
(2, 'Dent / damage', ''),
(3, 'Blow hole', ''),
(4, 'Kaziri', ''),
(5, 'gate inside', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bm_detail`
--
ALTER TABLE `bm_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail_prod`
--
ALTER TABLE `detail_prod`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `line`
--
ALTER TABLE `line`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model`
--
ALTER TABLE `model`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ng_detail`
--
ALTER TABLE `ng_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produksi`
--
ALTER TABLE `produksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_bm`
--
ALTER TABLE `t_bm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_ng`
--
ALTER TABLE `t_ng`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bm_detail`
--
ALTER TABLE `bm_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `detail_prod`
--
ALTER TABLE `detail_prod`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `line`
--
ALTER TABLE `line`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `model`
--
ALTER TABLE `model`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ng_detail`
--
ALTER TABLE `ng_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `produksi`
--
ALTER TABLE `produksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `t_bm`
--
ALTER TABLE `t_bm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `t_ng`
--
ALTER TABLE `t_ng`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
