-- phpMyAdmin SQL Dump
-- version 3.4.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 10, 2017 at 06:58 AM
-- Server version: 5.5.20
-- PHP Version: 5.3.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `online_voting`
--

-- --------------------------------------------------------

--
-- Table structure for table `apply_voting`
--

CREATE TABLE IF NOT EXISTS `apply_voting` (
  `ward_no` varchar(200) NOT NULL,
  `adhar` varchar(11) NOT NULL,
  `candidate_name` varchar(500) NOT NULL,
  `party_name` varchar(500) NOT NULL,
  `result` varchar(200) NOT NULL,
  `eid` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apply_voting`
--

INSERT INTO `apply_voting` (`ward_no`, `adhar`, `candidate_name`, `party_name`, `result`, `eid`) VALUES
('13', '2147483647', 'AMARNATH', 'BJP', 'voted', '246');

-- --------------------------------------------------------

--
-- Table structure for table `candidate_info`
--

CREATE TABLE IF NOT EXISTS `candidate_info` (
  `name` varchar(250) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(20) NOT NULL,
  `address` varchar(250) NOT NULL,
  `ward_no` varchar(250) NOT NULL,
  `constituency` varchar(250) NOT NULL,
  `qualification` varchar(250) NOT NULL,
  `email_id` varchar(200) NOT NULL,
  `aadhar_no` int(100) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `party_symbol` varchar(200) NOT NULL,
  `party_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidate_info`
--

INSERT INTO `candidate_info` (`name`, `dob`, `gender`, `address`, `ward_no`, `constituency`, `qualification`, `email_id`, `aadhar_no`, `photo`, `party_symbol`, `party_name`) VALUES
('AMARNATH', '1996-02-12', 'MALE', 'SHIVAPURI COLONY, NEAR BAGALKOT PETROL PUMP, PB ROAD, DHARAWAD', '05', 'NTTF', 'DIPLOMA', 'amarnathswami1@gmail.com', 2147483647, '20160812_124137.jpg', 'bjp_symbol.jpg', 'BJP'),
('', '0000-00-00', '', '', '', '', '', '', 0, '', '', ''),
('RAHUL', '0000-00-00', 'radio', 'SILVER ORCHARD', 'DIPLOMA', 'DHARWAD-W', '', 'rahulshhangal@gmail.com', 12345678, '20160808_143231.jpg', '20160808_143242.jpg', ''),
('rahul', '2017-04-02', 'MALE', 'SILVER ORCHARD', '05', 'NTTF', '', 'rahulshhangal@gmail.com', 12345671, '', '', ''),
('rahul', '2017-04-02', 'MALE', 'SILVER ORCHARD', '05', 'NTTF', '', 'rahulshhangal@gmail.com', 12345671, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `type` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `type`) VALUES
('246', '123', 'VOTER'),
('admin', '123', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `poll_details`
--

CREATE TABLE IF NOT EXISTS `poll_details` (
  `voting_date` date NOT NULL,
  `voting_time` varchar(200) NOT NULL,
  `result_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `name` varchar(250) NOT NULL,
  `gender` varchar(250) NOT NULL,
  `adhar` int(250) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `election_id` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`name`, `gender`, `adhar`, `contact`, `election_id`) VALUES
('RAHUL', 'MALE', 246, '246', '246');

-- --------------------------------------------------------

--
-- Table structure for table `verification`
--

CREATE TABLE IF NOT EXISTS `verification` (
  `election_id` varchar(40) NOT NULL,
  `vcode` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `verification`
--

INSERT INTO `verification` (`election_id`, `vcode`) VALUES
('neha@gmail.com', '25759'),
('neh', '28200'),
('neha@gmail.com', '18241'),
('amar@gmail.com', '25491'),
('', '437'),
('', '16527'),
('kk', '23574'),
('kk', '6551'),
('amar@gmail.com', '11400'),
('246', '26123'),
('246', '20889'),
('246', '3166'),
('246', '31976'),
('246', '13580'),
('246', '4202'),
('246', '5624'),
('246', '24998'),
('246', '18742'),
('246', '6564'),
('246', '32660'),
('246', '7481'),
('246', '32638'),
('246', '23775'),
('246', '11564'),
('246', '10346'),
('246', '21493'),
('246', '5514'),
('246', '28152'),
('246', '4817'),
('246', '28696'),
('246', '24886'),
('246', '21257'),
('246', '2829'),
('246', '31036'),
('246', '26650'),
('246', '24846'),
('246', '18223'),
('246', '20796'),
('246', '10006'),
('246', '23172'),
('246', '10800'),
('246', '18089'),
('246', '17454'),
('246', '10231'),
('246', '30308'),
('246', '2361'),
('246', '23281'),
('246', '4301'),
('246', '19842'),
('246', '6855'),
('246', '14580'),
('246', '5911'),
('246', '19186'),
('246', '24354'),
('246', '3952');

-- --------------------------------------------------------

--
-- Table structure for table `voter_info`
--

CREATE TABLE IF NOT EXISTS `voter_info` (
  `name` varchar(200) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `qualification` varchar(200) NOT NULL,
  `constituency` varchar(200) NOT NULL,
  `ward_no` int(200) NOT NULL,
  `email_id` varchar(200) NOT NULL,
  `aadhar_no` varchar(250) NOT NULL,
  `election_id` varchar(20) NOT NULL,
  `contact` int(200) NOT NULL,
  `photo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voter_info`
--

INSERT INTO `voter_info` (`name`, `dob`, `gender`, `address`, `qualification`, `constituency`, `ward_no`, `email_id`, `aadhar_no`, `election_id`, `contact`, `photo`) VALUES
('RAHUL', '1996-04-02', 'radio', 'SILVER ORCHARD', 'DIPLOMA', 'DHARWAD-W', 13, 'rahulshhangal@gmail.com', '246', '246', 246, '20160727_115924.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `vote_verify`
--

CREATE TABLE IF NOT EXISTS `vote_verify` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vcode` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `vote_verify`
--

INSERT INTO `vote_verify` (`id`, `vcode`) VALUES
(1, '21510'),
(2, '23155'),
(3, '19143'),
(4, '19310'),
(5, '23801'),
(6, '32540');

-- --------------------------------------------------------

--
-- Table structure for table `ward_details`
--

CREATE TABLE IF NOT EXISTS `ward_details` (
  `constituency` varchar(200) NOT NULL,
  `ward_no` int(200) NOT NULL,
  `zone_name` varchar(500) NOT NULL,
  `ward_office_address` varchar(1000) NOT NULL,
  `no_of_male_population` int(200) NOT NULL,
  `no_of_female_population` int(200) NOT NULL,
  `total_population` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ward_details`
--

INSERT INTO `ward_details` (`constituency`, `ward_no`, `zone_name`, `ward_office_address`, `no_of_male_population`, `no_of_female_population`, `total_population`) VALUES
('DHARWAD-W', 13, 'NTTF', 'SILVER ORCHARD', 1000, 800, 1800),
('RAHUL', 2, 'MALMADDI', 'SAPTAPUR,DHARWAD', 1000, 800, 1800),
('', 0, '', '', 0, 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
