-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 14, 2020 at 02:24 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tubes_193040087`
--

-- --------------------------------------------------------

--
-- Table structure for table `buah`
--

CREATE TABLE IF NOT EXISTS `buah` (
  `No` int(11) NOT NULL AUTO_INCREMENT,
  `Foto` varchar(100) NOT NULL,
  `Nama Buah` varchar(100) NOT NULL,
  `Vitamin` varchar(100) NOT NULL,
  `Manfaat` varchar(100) NOT NULL,
  `Harga` varchar(100) NOT NULL,
  PRIMARY KEY (`No`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `buah`
--

INSERT INTO `buah` (`No`, `Foto`, `Nama Buah`, `Vitamin`, `Manfaat`, `Harga`) VALUES
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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
