-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 10, 2023 at 10:56 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Carsell`
--

-- --------------------------------------------------------

--
-- Table structure for table `Car_Registration`
--

DROP TABLE IF EXISTS `Car_Registration`;
CREATE TABLE IF NOT EXISTS `Car_Registration` (
  `ID` int(5) NOT NULL AUTO_INCREMENT,
  `SellerId` int(5) NOT NULL,
  `Make` varchar(50) NOT NULL,
  `Model` varchar(50) NOT NULL,
  `Year` date NOT NULL,
  `Milage` varchar(5) NOT NULL,
  `Location` varchar(50) NOT NULL,
  `Price` float NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Car_Registration`
--

INSERT INTO `Car_Registration` (`ID`, `SellerId`, `Make`, `Model`, `Year`, `Milage`, `Location`, `Price`) VALUES
(3, 3, 'BMW', 'C200-BMW', '2023-10-11', '15', 'Pacific Highway', 120000),
(4, 7, 'Nepal', 'C400RT', '2023-10-01', '15', 'Australia', 82215500);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
