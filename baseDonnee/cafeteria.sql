-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2016 at 03:15 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cafeteria`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `login` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `admin`
--

TRUNCATE TABLE `admin`;
--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`login`, `password`, `nom`) VALUES
('giovanni', 'giovanni05', 'giovanni');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `nomutilisateur` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `client`
--

TRUNCATE TABLE `client`;
--
-- Dumping data for table `client`
--

INSERT INTO `client` (`nom`, `prenom`, `nomutilisateur`, `password`) VALUES
('giovanni', 'camilien', 'lilgio95', 'giovanni5'),
('rafael', 'wow', 'wow1', 'lol95');

-- --------------------------------------------------------

--
-- Table structure for table `sugestion`
--

CREATE TABLE `sugestion` (
  `nom` varchar(50) NOT NULL,
  `soumission` date NOT NULL,
  `ingredient` longtext NOT NULL,
  `etapes` longtext NOT NULL,
  `type` varchar(50) NOT NULL,
  `photo` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `sugestion`
--

TRUNCATE TABLE `sugestion`;
--
-- Dumping data for table `sugestion`
--

INSERT INTO `sugestion` (`nom`, `soumission`, `ingredient`, `etapes`, `type`, `photo`) VALUES
('tarte', '2016-08-03', 'farine ,oeauf', 'cuiree,manger', 'image/jpeg', 'img/download.jpg'),
('b', '2016-08-09', 'vzvxzvxzv', 'xvzvzxv', 'zxvzxv', 'img/download.jpg'),
('b', '2016-08-09', 'vzvxzvxzv', 'xvzvzxv', '', 'img/download.jpg'),
('dadad', '2016-08-08', 'asdasda', 'adsadas', 'dadasd', 'img/download.jpg'),
('dadad', '2016-08-08', 'asdasda', 'adsadas', '', 'img/download.jpg'),
('fsfsfsf', '2016-08-03', 'sfsfsfs', 'sfsfs', 'sfdfs', 'img/download.jpg'),
('fsfsfsf', '2016-08-03', 'sfsfsfs', 'sfsfs', 'sfdfs', 'img/download.jpg'),
('fsfsfsf', '2016-08-03', 'sfsfsfs', 'sfsfs', 'sfdfs', 'img/download.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`login`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`nomutilisateur`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
