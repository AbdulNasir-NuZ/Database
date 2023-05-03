-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 11, 2018 at 05:19 AM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `webtech`
--

-- --------------------------------------------------------

--
-- Table structure for table `bids`
--

CREATE TABLE IF NOT EXISTS `bids` (
  `id` varchar(10) NOT NULL,
  `bid` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bids`
--

INSERT INTO `bids` (`id`, `bid`, `username`, `date`) VALUES
('san1 (5bfc', 550, 'nas@gmail.com', '0000-00-00 00:00:00'),
('nasuu.5bfc', 700, 'vp.sanjeev45@gmail.com', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `title` varchar(50) NOT NULL,
  `username` varchar(40) NOT NULL,
  `artist` varchar(50) NOT NULL,
  `sold` tinyint(1) NOT NULL,
  `path` varchar(50) NOT NULL,
  `min_bid` int(11) NOT NULL,
  `id` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`title`, `username`, `artist`, `sold`, `path`, `min_bid`, `id`) VALUES
('childrens park', 'nas@gmail.com', 'nasir', 0, 'images/nas@gmail.com/u.jpg', 400, 'nasu.j5bfc'),
('glass', 'nas@gmail.com', 'nasir', 0, 'images/nas@gmail.com/uu.jpg', 650, 'nasuu.5bfc'),
('vegitables', 'nas@gmail.com', 'nasir', 0, 'images/nas@gmail.com/uy.jpg', 700, 'nasuy.5bfc'),
('chair', 'vp.sanjeev45@gmail.com', 'san', 0, 'images/vp.sanjeev45@gmail.com/1 (4).jpg', 500, 'san1 (5bfc'),
('eyes', 'vp.sanjeev45@gmail.com', 'san', 0, 'images/vp.sanjeev45@gmail.com/2edmdev.jpg', 500, 'san2ed5bfc'),
('deforestation', 'vp.sanjeev45@gmail.com', 'sanjeev', 0, 'images/vp.sanjeev45@gmail.com/2ev6uzq.jpg', 1500, 'san2ev5bfc'),
('costume', 'vp.sanjeev45@gmail.com', 'san', 0, 'images/vp.sanjeev45@gmail.com/2iw7ma8.jpg', 600, 'san2iw5bfc'),
('nuts', 'vp.sanjeev45@gmail.com', 'sanjeev', 0, 'images/vp.sanjeev45@gmail.com/uyuy.jpg', 1400, 'sanuyu5bfc');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `first_name`, `last_name`, `dob`) VALUES
('san@gmail.com', 'admin', 'sanjeev', 'vp', '1996-01-09'),
('nas@gmail.com', 'user', 'nasir', 'abdul', '1995-08-20'),
('shar@gmail.com', 'shar', 'shareef', 'p', '1997-04-04'),
('', '', '', '', '0000-00-00'),
('vp.sanjeev45@gmail.com', '12345', 'sanjeev', 'vp', '0000-00-00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
