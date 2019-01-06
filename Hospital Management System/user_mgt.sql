-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2019 at 08:46 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.1.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_mgt`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(8) NOT NULL,
  `ausername` varchar(30) NOT NULL,
  `apassword` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `ausername`, `apassword`) VALUES
(1, '700001', '12');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` varchar(30) NOT NULL,
  `aid` int(10) NOT NULL,
  `event` varchar(200) NOT NULL,
  `importance` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `aid`, `event`, `importance`, `date`) VALUES
('thor', 1, 'sdasdsd dasdada fada', 'High', '12/3/2014'),
('loki', 3, 'The Diary\'s condition is not good.', 'Moderate', '2/3/2005'),
('razu', 8, 'valo na', 'High', '2/3/2005'),
('thor', 9, 'test', 'Moderate', '15-5-17');

-- --------------------------------------------------------

--
-- Table structure for table `doctoranalysis`
--

CREATE TABLE `doctoranalysis` (
  `id` int(11) NOT NULL,
  `dusername` varchar(30) NOT NULL,
  `nofp` int(7) NOT NULL DEFAULT '0',
  `parcent` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctoranalysis`
--

INSERT INTO `doctoranalysis` (`id`, `dusername`, `nofp`, `parcent`) VALUES
(1, '500001', 2, ''),
(2, '500002', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `doctorpatient`
--

CREATE TABLE `doctorpatient` (
  `id` int(8) NOT NULL,
  `did` int(8) NOT NULL,
  `pid` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctorpatient`
--

INSERT INTO `doctorpatient` (`id`, `did`, `pid`) VALUES
(1, 500001, 1),
(2, 500001, 2),
(3, 500002, 3);

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `did` int(8) NOT NULL,
  `dname` varchar(30) NOT NULL,
  `dusername` varchar(20) NOT NULL,
  `dpassword` varchar(20) NOT NULL,
  `dphone` varchar(11) NOT NULL,
  `daddress` varchar(50) NOT NULL,
  `dtype` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`did`, `dname`, `dusername`, `dpassword`, `dphone`, `daddress`, `dtype`) VALUES
(1, 'Kamal', '500001', '11', '018275', 'Razarbag, Dhaka', 'Cardiologist'),
(2, 'Dr. Imam', '500002', '666', '456541', 'Hatirjhil, Rampura', 'Nurologist');

-- --------------------------------------------------------

--
-- Table structure for table `lastdates`
--

CREATE TABLE `lastdates` (
  `id` varchar(30) NOT NULL,
  `lastdate` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lastdates`
--

INSERT INTO `lastdates` (`id`, `lastdate`) VALUES
('thor', '15-5-17');

-- --------------------------------------------------------

--
-- Table structure for table `patientcount`
--

CREATE TABLE `patientcount` (
  `id` int(8) NOT NULL,
  `tpatient` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patientcount`
--

INSERT INTO `patientcount` (`id`, `tpatient`) VALUES
(1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` int(11) NOT NULL,
  `pname` varchar(30) NOT NULL,
  `paddress` varchar(50) NOT NULL,
  `pphone` int(11) NOT NULL,
  `pdoctor` varchar(100) NOT NULL,
  `bill` int(10) DEFAULT NULL,
  `paystatus` varchar(10) DEFAULT NULL,
  `pdiseases` varchar(50) DEFAULT NULL,
  `prescription` varchar(200) DEFAULT NULL,
  `proom` int(8) DEFAULT NULL,
  `dname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `pname`, `paddress`, `pphone`, `pdoctor`, `bill`, `paystatus`, `pdiseases`, `prescription`, `proom`, `dname`) VALUES
(1, 'Rifat', 'Mirpur 1, hatirpul', 156465, '500001', NULL, NULL, NULL, 'Osudh Khao', 1, 'Amzad Ali'),
(2, 'raisul', 'kuratoli, aiub', 15646578, '500001', NULL, NULL, 'Vision', 'ss', 30, 'Amzad Ali'),
(3, 'M Akan', 'ffd dfwefw', 313413, '500001', NULL, NULL, NULL, NULL, 1, 'Galib vai');

-- --------------------------------------------------------

--
-- Table structure for table `receptionists`
--

CREATE TABLE `receptionists` (
  `id` int(11) NOT NULL,
  `rusername` varchar(20) NOT NULL,
  `rpassword` varchar(30) NOT NULL,
  `rphone` int(11) NOT NULL,
  `raddress` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `receptionists`
--

INSERT INTO `receptionists` (`id`, `rusername`, `rpassword`, `rphone`, `raddress`) VALUES
(1, '1001', '1', 1827235623, 'Housing Dhaka');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `rid` int(11) NOT NULL,
  `pid` int(8) NOT NULL DEFAULT '0',
  `rname` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`rid`, `pid`, `rname`) VALUES
(1, 1, NULL),
(4, 0, NULL),
(6, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `supervisors`
--

CREATE TABLE `supervisors` (
  `id` int(11) NOT NULL,
  `sname` varchar(30) NOT NULL,
  `susername` varchar(30) NOT NULL,
  `spassword` varchar(30) NOT NULL,
  `sphone` varchar(11) NOT NULL,
  `saddress` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supervisors`
--

INSERT INTO `supervisors` (`id`, `sname`, `susername`, `spassword`, `sphone`, `saddress`) VALUES
(1, 'Alam Azhar', '600001', '2', '2132', 'nikunjo 2');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'thor', '1'),
(2, 'loki', '2'),
(3, 'galib', '3'),
(4, 'razu', '4'),
(5, 'test', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `doctoranalysis`
--
ALTER TABLE `doctoranalysis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctorpatient`
--
ALTER TABLE `doctorpatient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`did`,`dusername`);

--
-- Indexes for table `patientcount`
--
ALTER TABLE `patientcount`
  ADD PRIMARY KEY (`tpatient`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `receptionists`
--
ALTER TABLE `receptionists`
  ADD PRIMARY KEY (`id`,`rusername`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`rid`,`pid`) USING BTREE;

--
-- Indexes for table `supervisors`
--
ALTER TABLE `supervisors`
  ADD PRIMARY KEY (`id`,`susername`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `aid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `doctoranalysis`
--
ALTER TABLE `doctoranalysis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `doctorpatient`
--
ALTER TABLE `doctorpatient`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `did` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `patientcount`
--
ALTER TABLE `patientcount`
  MODIFY `tpatient` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `receptionists`
--
ALTER TABLE `receptionists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `supervisors`
--
ALTER TABLE `supervisors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
