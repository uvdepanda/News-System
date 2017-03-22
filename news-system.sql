-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 07, 2015 at 08:50 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `news-system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('rat', 'rat'),
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `cms`
--

CREATE TABLE IF NOT EXISTS `cms` (
  `keyid` int(11) NOT NULL AUTO_INCREMENT,
  `headline` varchar(255) DEFAULT NULL,
  `date` date NOT NULL,
  `author` varchar(255) NOT NULL,
  `news` text,
  PRIMARY KEY (`keyid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=123 ;

--
-- Dumping data for table `cms`
--

INSERT INTO `cms` (`keyid`, `headline`, `date`, `author`, `news`) VALUES
(117, 'Russian plane crash: Too soon to know cause - Egypt', '2015-11-07', 'John Trovalta', 'The Egyptian head of the international team investigating the Russian Metrojet plane crash in Sinai has said it is too early to say what caused it.'),
(119, 'Australia v New Zealand: Johnson & Starc make Kiwis struggle', '2015-11-20', 'Marine Lieber', 'Usman Khawaja top-scored with 174 as the hosts declared on 556-4, before the Kiwis faltered from 102-1 to 157-5.\r\n\r\nJohnson removed experienced duo Brendon McCullum and Ross Taylor cheaply to leave the visitors trailing by 399.\r\n\r\nEarlier, New Zealand pace bowler Tim Southee was forced off the field with an irritated disc in his back.'),
(120, 'The Horror Movie', '2015-11-21', 'Nina Biber', 'The makers of the Paranormal Activity films may be too embarrassed to use numbers in their titles any more, but the latest instalment, Paranormal Activity: Ghost Dimension, is the sixth in the series â€“ and that means that there have been six whole films in which the characters just happen to use video cameras to record the spooky goings-on in their respective haunted houses.'),
(122, 'The Indian film about beef that turned controversial', '2015-11-21', 'Rahul', 'Reetika Revathy Subramanian says she is still in "shock" because of the "completely avoidable" controversy over the film.Reetika Revathy Subramanian says she is still in "shock" because of the "completely avoidable" controversy over the film.Reetika Revathy Subramanian says she is still in "shock" because of the "completely avoidable" controversy over the film.\r\n\r\n\r\n\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
