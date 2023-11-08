-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2023 at 10:33 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kampus_merdeka`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `first_name`, `last_name`, `email`, `phone`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Gracio', 'Pamungkas', 'gracio@eduwork.com', '089687476161', 'JL. RE Martadinata Kav III No 322A Desa Ancaran, Kecamatan Kuningan Kab Kuningan', '2023-03-31 11:58:55', '2023-11-08 08:08:37'),
(2, 'Muhammad', 'Ridwan', 'ridwan@eduwork.com', '089687476262', 'Jl Margorejo Indah Bl B/107Margorejo,Surabaya,Winocolo,,Indonesia', '2023-03-31 11:58:55', '2023-11-08 08:08:37'),
(4, 'Atika', 'Citra', 'atika@eduwork.com', '089687476464', 'JL Perak Barat No. 22560165,Surabaya,,22560,Indonesia', '2023-03-31 11:58:55', '2023-11-08 08:08:37'),
(5, 'Joko', 'Widodo', 'jokowidodo@gmail.com', '082169683507', 'Jl. Solo', '2023-11-08 09:17:51', '2023-11-08 09:17:51'),
(6, 'Ajeng', 'Kartini', 'kartini@gmail.com', '0892827312', 'JL. Boyolali no 39', '2023-05-10 12:46:04', '2023-11-08 08:08:37'),
(9, 'Siswo', 'Handoko', 'handoko@sinbad.co.id', '089687476161', 'Jl. Jeruk Purut no 22, Jakarta Selatan', '2023-05-10 12:52:28', '2023-11-08 08:08:37'),
(13, 'Sukoco', 'Sundari', 'sukoco@gmail.com', '089728264123', 'JL Kenangan no 9', '2023-05-17 14:28:59', '2023-11-08 08:08:37'),
(15, 'Jajang', 'Muhammad', 'mjajang@gmail.com', '089736251235', 'Jl. Pegangsaan timur no 22, Jakarta Selatan', '2023-05-17 14:33:44', '2023-11-08 08:08:37'),
(17, 'Andian ', 'Bramlie', 'andianbramlie@gmail.com', '081395853657', 'Graha Mansion No. 12 A', '2023-11-07 18:39:23', '2023-11-08 08:08:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
