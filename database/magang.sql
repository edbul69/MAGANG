-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2021 at 08:08 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `magang_cctv`
--

-- --------------------------------------------------------

--
-- Table structure for table `cctv`
--

CREATE TABLE `cctv` (
  `ip` varchar(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `lokasi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cctv`
--

INSERT INTO `cctv` (`ip`, `nama`, `lokasi`) VALUES
('192.168.1.1', 'Testing3', 'Kleak'),
('8.8.4.4', 'Testing2', 'Malalayang'),
('8.8.8.8', 'Testing', 'Bahu');

-- --------------------------------------------------------

--
-- Table structure for table `detail_cctv`
--

CREATE TABLE `detail_cctv` (
  `id` int(11) NOT NULL,
  `ip` varchar(15) NOT NULL,
  `status` varchar(10) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_cctv`
--

INSERT INTO `detail_cctv` (`id`, `ip`, `status`, `waktu`) VALUES
(20, '8.8.8.8', 'Online', '2021-11-26 06:20:39'),
(21, '8.8.8.8', 'Online', '2021-11-26 06:35:51'),
(22, '8.8.8.8', 'Online', '2021-11-26 06:42:39'),
(23, '192.168.1.1', 'Offline', '2021-11-26 07:02:48'),
(24, '8.8.4.4', 'Online', '2021-11-26 07:05:36');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'Admin', 'admin@mail.com', '$2y$10$0XXcQIBvQXf108CYwKkgSubVeKD3Ynf7iPzyPs.R6YXRQpX/3vK4u', 2, 1, 0),
(4, 'Erick Abraham', 'admin1@gmail.com', '$2y$10$a7uo6t7r35uwUx8nI2B3R.YOXM.RKlO65ZTBxSh.73tlPnS337g9O', 2, 1, 1630336956);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cctv`
--
ALTER TABLE `cctv`
  ADD PRIMARY KEY (`ip`);

--
-- Indexes for table `detail_cctv`
--
ALTER TABLE `detail_cctv`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_cctv`
--
ALTER TABLE `detail_cctv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
