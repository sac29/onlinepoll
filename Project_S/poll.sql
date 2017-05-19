-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2015 at 06:12 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `poll`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin` varchar(40) NOT NULL,
  `pass` varchar(40) NOT NULL,
  PRIMARY KEY (`admin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin`, `pass`) VALUES
('deepak', 'deep'),
('mohit', 'crypt'),
('sachin', 'sachin$29');

-- --------------------------------------------------------

--
-- Table structure for table `registration_tab`
--

CREATE TABLE IF NOT EXISTS `registration_tab` (
  `Name` varchar(50) NOT NULL,
  `Age` int(2) NOT NULL,
  `Gender` varchar(7) NOT NULL,
  `State` varchar(25) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Pincode` int(6) NOT NULL,
  `Phone` varchar(10) NOT NULL,
  PRIMARY KEY (`Phone`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration_tab`
--

INSERT INTO `registration_tab` (`Name`, `Age`, `Gender`, `State`, `City`, `Pincode`, `Phone`) VALUES
('', 0, '', '', '', 0, ''),
('suneel yadav', 20, 'male', 'Uttar Pradesh', 'etawah', 206001, '123456746'),
('Suji Ke Parathe', 19, 'female', 'Uttar Pradesh', 'gorakpur', 3423, '127642'),
('sachin', 45, 'male', 'Gujrat', 'uyewt', 226012, '2376342'),
('Mohit', 23, 'female', 'Uttar Pradesh', 'kohima', 226012, '26371232'),
('suneel yadav', 20, 'male', 'Uttar Pradesh', 'etawah', 206001, '37394765'),
('suneel', 23, 'female', 'Nagaland', 'etawah', 346578, '423487645'),
('Ashu', 34, 'male', 'Assam', 'Banglore', 226012, '4344'),
('Amit', 52, 'female', 'Sikkam', 'Lucknow', 346578, '4344432879'),
('Meena', 34, 'female', 'Assam', 'Lucknow', 226012, '4344453'),
('Ashish', 56, 'male', 'Andhra Pradesh', 'Aligarh', 435498, '4344543'),
('Mohit', 89, 'male', 'Nagaland', 'Panaji', 67576, '46576'),
('raju', 78, 'male', 'Nagaland', 'Panaji', 435498, '46757'),
('sachin', 45, 'male', 'Manipur', 'Aligarh', 435498, '467746345'),
('deepak', 55, 'male', 'Nagaland', 'Panaji', 226054, '5465'),
('Swati', 66, 'female', 'Andhra Pradesh', 'kohima', 226054, '548767'),
('raju', 45, 'male', 'Goa', 'Lucknow', 435498, '5657'),
('suneel', 22, 'male', 'Goa', 'Hahras', 226017, '5661'),
('sachin', 45, 'male', 'Goa', 'kohima', 226054, '5667898'),
('shalini', 18, 'female', 'Jharkhand', 'Panaji', 226054, '5757'),
('Vishal kashyap', 88, 'male', 'Jharkhand', 'Panaji', 226054, '5767'),
('Mohit', 45, 'male', 'Uttar Pradesh', 'Lucknow', 346578, '634764796'),
('Amit', 19, 'male', 'Nagaland', 'Aligarh', 67576, '679348'),
('Mohit', 23, 'male', 'Uttar Pradesh', 'Lucknow', 346578, '68734647'),
('Meena', 66, 'female', 'Sikkim', 'Panaji', 435498, '72389'),
('sachin', 23, 'male', 'Uttar Pradesh', 'Lucknow', 226012, '7332424512'),
('awnnnnnnnn', 45, 'female', 'Uttar Pradesh', 'Bulandsheher', 420171, '7776'),
('dfads', 66, 'female', 'Jharkhand', 'Aligarh', 226012, '827362345'),
('Mohit', 67, 'male', 'Jharkhand', 'Ranchi', 346578, '8574929149'),
('Mohit', 23, 'male', 'Uttar Pradesh', 'kohima', 435498, '8739431'),
('sachin', 23, 'male', 'Nagaland', 'Aligarh', 226017, '89735'),
('suneel yadav', 20, 'male', 'Uttar Pradesh', 'etawah', 206001, '91928374'),
('gandu', 18, 'male', 'Assam', 'Panaji', 435498, '9867541232');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE IF NOT EXISTS `result` (
  `Person` varchar(40) NOT NULL,
  `Male` int(100) DEFAULT NULL,
  `Female` int(100) DEFAULT NULL,
  `Andhra_Pradesh` int(50) DEFAULT NULL,
  `Arunachal_Pradesh` int(50) DEFAULT NULL,
  `Assam` int(50) DEFAULT NULL,
  `Bihar` int(50) DEFAULT NULL,
  `Chhattisgarh` int(50) DEFAULT NULL,
  `Goa` int(50) DEFAULT NULL,
  `Gujrat` int(50) DEFAULT NULL,
  `Haryana` int(50) DEFAULT NULL,
  `Himachal_Pradesh` int(50) DEFAULT NULL,
  `Jammu_and_Kashmir` int(50) DEFAULT NULL,
  `Jharkhand` int(50) DEFAULT NULL,
  `Karnataka` int(50) DEFAULT NULL,
  `Kerala` int(50) DEFAULT NULL,
  `Madhya_Pradesh` int(50) DEFAULT NULL,
  `Maharashtra` int(50) DEFAULT NULL,
  `Manipur` int(50) DEFAULT NULL,
  `Meghalaya` int(50) DEFAULT NULL,
  `Mizoram` int(50) DEFAULT NULL,
  `Nagaland` int(50) DEFAULT NULL,
  `Orissa` int(50) DEFAULT NULL,
  `Punjab` int(50) DEFAULT NULL,
  `Rajasthan` int(50) DEFAULT NULL,
  `Sikkam` int(50) DEFAULT NULL,
  `Tamil_Nadu` int(50) DEFAULT NULL,
  `Telangana` int(50) DEFAULT NULL,
  `Tripura` int(50) DEFAULT NULL,
  `Uttar_Pradesh` int(50) DEFAULT NULL,
  `Uttarakhand` int(50) DEFAULT NULL,
  `West_Bengal` int(50) DEFAULT NULL,
  `A18_35` int(50) DEFAULT NULL,
  `A36_60` int(50) DEFAULT NULL,
  `60_above` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`Person`, `Male`, `Female`, `Andhra_Pradesh`, `Arunachal_Pradesh`, `Assam`, `Bihar`, `Chhattisgarh`, `Goa`, `Gujrat`, `Haryana`, `Himachal_Pradesh`, `Jammu_and_Kashmir`, `Jharkhand`, `Karnataka`, `Kerala`, `Madhya_Pradesh`, `Maharashtra`, `Manipur`, `Meghalaya`, `Mizoram`, `Nagaland`, `Orissa`, `Punjab`, `Rajasthan`, `Sikkam`, `Tamil_Nadu`, `Telangana`, `Tripura`, `Uttar_Pradesh`, `Uttarakhand`, `West_Bengal`, `A18_35`, `A36_60`, `60_above`) VALUES
('Narendra Modi', 2, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 1, 2, 1),
('Rahul Gandhi', 5, 1, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 3, 1, 2),
('Arvind Kejriwal', 4, 1, 1, 0, 0, 0, 0, 2, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 2, 1),
('Priyanka Gandhi', 3, 1, 1, 0, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 2, 1, 1),
('Akhilesh Yadav', 3, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 2, 1, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
