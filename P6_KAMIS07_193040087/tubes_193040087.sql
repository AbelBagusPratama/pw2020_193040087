-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2020 at 02:43 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes_193040087`
--

-- --------------------------------------------------------

--
-- Table structure for table `buah`
--

CREATE TABLE `buah` (
  `id` int(11) NOT NULL,
  `Foto` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `Vitamin` varchar(100) NOT NULL,
  `Manfaat` varchar(100) NOT NULL,
  `Harga` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buah`
--

INSERT INTO `buah` (`id`, `Foto`, `nama`, `Vitamin`, `Manfaat`, `Harga`) VALUES
(1, 'tomat.jpg', 'Tomat', 'A,B1 dan C', 'Usus Buntu', 'Rp10.000'),
(2, 'pepaya.jpg', 'Pepaya', 'C dan Provitamin A', 'Melancarkan pencernaan', 'Rp12.500'),
(3, 'pisang.jpg', 'Pisang', 'A,B1,B2', 'Mengurangi asam lambung', 'Rp17.500'),
(4, 'mangga.jpg', 'Mangga', 'A,E,C', 'Menghilangkan bau badan', 'Rp15.500'),
(5, 'strawberry.jpg', 'Strawberry', 'A,B1,B dan C', 'Gangguan kesehatan pada kandung kemih', 'Rp23.000'),
(6, 'apel.jpg', 'Apel', 'A,B,C', 'Menurunkan kolestrol', 'Rp20.000'),
(7, 'jeruk.jpg', 'Jeruk', 'A,B1,B2 dan C', 'Mengobati sariawan', 'Rp17.000'),
(8, 'pear.jpg', 'Pear', 'C dan Provitamin A', 'Menurunkan panas', 'Rp21.000'),
(9, 'jambu.jpg', 'Jambu Merah', 'C', 'Melancarkan peredaran darah', 'Rp16.000'),
(10, 'nanas.jpg', 'Nanas', 'B dan C', 'Menyembuhkan luka', 'Rp14.500');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buah`
--
ALTER TABLE `buah`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buah`
--
ALTER TABLE `buah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
