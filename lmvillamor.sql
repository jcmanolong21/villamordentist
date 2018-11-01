-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2018 at 12:52 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lmvillamor`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminform`
--

CREATE TABLE `adminform` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminform`
--

INSERT INTO `adminform` (`admin_id`, `username`, `password`, `level`) VALUES
(1, 'admin', 'lmvillamor', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `mname` varchar(5) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `type` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `username`, `fname`, `lname`, `mname`, `age`, `gender`, `type`, `date`, `status`) VALUES
(36, 'carloz113', 'John Carlo 12', 'Carlo Manolong', 'T', 21, 'Female', 'Pasta', '2018-09-13', 'read'),
(62, 'bata123', 'hey11', 'mehj', 'ye', 21, 'Female', 'Dental Braces', '2018-11-02', 'read'),
(68, 'bata123', 'hey', 'hey', 'hey', 22, 'Female', 'Pasta', '2018-09-26', 'read'),
(69, 'bata123', 'd', 'd', 'd', 2, 'Female', 'Dental Retainers', '2018-01-31', 'read');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `start_event` datetime NOT NULL,
  `end_event` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `start_event`, `end_event`) VALUES
(14, 'hey', '2018-10-02 00:00:00', '2018-10-03 00:00:00'),
(19, 'OPEN', '2018-08-28 00:00:00', '2018-08-29 00:00:00'),
(20, 'OPEN', '2018-09-04 00:00:00', '2018-09-05 00:00:00'),
(21, 'CLOSED', '2018-09-05 00:00:00', '2018-09-06 00:00:00'),
(22, 'CLOSE', '2018-08-29 00:00:00', '2018-08-30 00:00:00'),
(23, 'OPEN', '2018-09-09 00:00:00', '2018-09-10 00:00:00'),
(24, 'open', '2018-09-06 00:00:00', '2018-09-07 00:00:00'),
(25, 'haha', '2018-09-14 06:30:00', '2018-09-14 07:00:00'),
(26, 'BREAK', '2018-09-20 00:30:00', '2018-09-20 01:00:00'),
(27, 'd', '2018-08-30 00:00:00', '2018-08-31 00:00:00'),
(28, 'jeff', '2018-09-24 06:00:00', '2018-09-24 06:30:00'),
(29, 'open', '2018-11-02 00:00:00', '2018-11-03 00:00:00'),
(30, 'close', '2018-11-03 00:00:00', '2018-11-04 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

CREATE TABLE `records` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `bday` date NOT NULL,
  `age` int(11) NOT NULL,
  `sex` varchar(20) NOT NULL,
  `religion` varchar(50) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `nickname` varchar(50) NOT NULL,
  `homeAddress` varchar(100) NOT NULL,
  `homeNo` varchar(50) NOT NULL,
  `occupation1` varchar(50) NOT NULL,
  `officeNo` varchar(50) NOT NULL,
  `faxNo` varchar(50) NOT NULL,
  `dentInsurance` varchar(100) NOT NULL,
  `mobileNo` varchar(50) NOT NULL,
  `effectiveDate` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `parents` varchar(100) NOT NULL,
  `occupation2` varchar(50) NOT NULL,
  `prevDr` varchar(50) NOT NULL,
  `lastVisit` date NOT NULL,
  `physician` varchar(100) NOT NULL,
  `specialty` varchar(50) NOT NULL,
  `officeAddress` varchar(100) NOT NULL,
  `officeNum` varchar(50) NOT NULL,
  `goodHealth` varchar(10) NOT NULL,
  `medTreatment` varchar(10) NOT NULL,
  `medTreatment2` varchar(100) NOT NULL,
  `illness` varchar(10) NOT NULL,
  `illness2` varchar(50) NOT NULL,
  `hospitalized` varchar(10) NOT NULL,
  `hospitalized2` varchar(50) NOT NULL,
  `prescription` varchar(10) NOT NULL,
  `prescription2` varchar(100) NOT NULL,
  `tobacco` varchar(10) NOT NULL,
  `alcohol` varchar(10) NOT NULL,
  `allergic` varchar(10) NOT NULL,
  `opt1` varchar(50) NOT NULL,
  `opt2` varchar(50) NOT NULL,
  `opt3` varchar(50) NOT NULL,
  `opt4` varchar(50) NOT NULL,
  `opt5` varchar(50) NOT NULL,
  `other` varchar(100) NOT NULL,
  `bleedingTime2` varchar(10) NOT NULL,
  `woman1` varchar(5) NOT NULL,
  `woman2` varchar(5) NOT NULL,
  `woman3` varchar(5) NOT NULL,
  `bloodType` varchar(20) NOT NULL,
  `bloodPressure` varchar(20) NOT NULL,
  `disease` varchar(50) NOT NULL,
  `highblood` varchar(50) NOT NULL,
  `heartDisease` varchar(50) NOT NULL,
  `cancerTumors` varchar(50) NOT NULL,
  `lowblood` varchar(50) NOT NULL,
  `heartMurmur` varchar(50) NOT NULL,
  `anemia` varchar(50) NOT NULL,
  `epilepsy` varchar(50) NOT NULL,
  `hepatitis` varchar(50) NOT NULL,
  `angina` varchar(50) NOT NULL,
  `aidsHiv` varchar(50) NOT NULL,
  `rheumatic` varchar(50) NOT NULL,
  `asthma` varchar(50) NOT NULL,
  `std` varchar(50) NOT NULL,
  `hayfever` varchar(50) NOT NULL,
  `emphysema` varchar(50) NOT NULL,
  `stomach` varchar(50) NOT NULL,
  `respiratory` varchar(50) NOT NULL,
  `bleeding` varchar(50) NOT NULL,
  `feinting` varchar(50) NOT NULL,
  `hepatitis2` varchar(50) NOT NULL,
  `bloodDisease` varchar(50) NOT NULL,
  `rapid` varchar(50) NOT NULL,
  `tuberculosis` varchar(50) NOT NULL,
  `headInjuries` varchar(50) NOT NULL,
  `radiation` varchar(50) NOT NULL,
  `swollen` varchar(50) NOT NULL,
  `arthritis` varchar(50) NOT NULL,
  `joint` varchar(50) NOT NULL,
  `kidney` varchar(50) NOT NULL,
  `others` varchar(50) NOT NULL,
  `heartSurgery` varchar(50) NOT NULL,
  `diabetes` varchar(50) NOT NULL,
  `heartAttack` varchar(50) NOT NULL,
  `chest` varchar(50) NOT NULL,
  `thyroid` varchar(50) NOT NULL,
  `stroke` varchar(50) NOT NULL,
  `A55` varchar(10) NOT NULL,
  `A54` varchar(10) NOT NULL,
  `A53` varchar(10) NOT NULL,
  `A52` varchar(10) NOT NULL,
  `A51` varchar(10) NOT NULL,
  `A61` varchar(10) NOT NULL,
  `A62` varchar(10) NOT NULL,
  `A63` varchar(10) NOT NULL,
  `A64` varchar(10) NOT NULL,
  `A65` varchar(10) NOT NULL,
  `B55` varchar(10) NOT NULL,
  `B54` varchar(10) NOT NULL,
  `B53` varchar(10) NOT NULL,
  `B52` varchar(10) NOT NULL,
  `B51` varchar(10) NOT NULL,
  `B61` varchar(10) NOT NULL,
  `B62` varchar(10) NOT NULL,
  `B63` varchar(10) NOT NULL,
  `B64` varchar(10) NOT NULL,
  `B65` varchar(10) NOT NULL,
  `A18` varchar(10) NOT NULL,
  `A17` varchar(10) NOT NULL,
  `A16` varchar(10) NOT NULL,
  `A15` varchar(10) NOT NULL,
  `A14` varchar(10) NOT NULL,
  `A13` varchar(10) NOT NULL,
  `A12` varchar(10) NOT NULL,
  `A11` varchar(10) NOT NULL,
  `A21` varchar(10) NOT NULL,
  `A22` varchar(10) NOT NULL,
  `A23` varchar(10) NOT NULL,
  `A24` varchar(10) NOT NULL,
  `A25` varchar(10) NOT NULL,
  `A26` varchar(10) NOT NULL,
  `A27` varchar(10) NOT NULL,
  `A28` varchar(10) NOT NULL,
  `B18` varchar(10) NOT NULL,
  `B17` varchar(10) NOT NULL,
  `B16` varchar(10) NOT NULL,
  `B15` varchar(10) NOT NULL,
  `B14` varchar(10) NOT NULL,
  `B13` varchar(10) NOT NULL,
  `B12` varchar(10) NOT NULL,
  `B11` varchar(10) NOT NULL,
  `B21` varchar(10) NOT NULL,
  `B22` varchar(10) NOT NULL,
  `B23` varchar(10) NOT NULL,
  `B24` varchar(10) NOT NULL,
  `B25` varchar(10) NOT NULL,
  `B26` varchar(10) NOT NULL,
  `B27` varchar(10) NOT NULL,
  `B28` varchar(10) NOT NULL,
  `A48` varchar(10) NOT NULL,
  `A47` varchar(10) NOT NULL,
  `A46` varchar(10) NOT NULL,
  `A45` varchar(10) NOT NULL,
  `A44` varchar(10) NOT NULL,
  `A43` varchar(10) NOT NULL,
  `A42` varchar(10) NOT NULL,
  `A41` varchar(10) NOT NULL,
  `A31` varchar(10) NOT NULL,
  `A32` varchar(10) NOT NULL,
  `A33` varchar(10) NOT NULL,
  `A34` varchar(10) NOT NULL,
  `A35` varchar(10) NOT NULL,
  `A36` varchar(10) NOT NULL,
  `A37` varchar(10) NOT NULL,
  `A38` varchar(10) NOT NULL,
  `B48` varchar(10) NOT NULL,
  `B47` varchar(10) NOT NULL,
  `B46` varchar(10) NOT NULL,
  `B45` varchar(10) NOT NULL,
  `B44` varchar(10) NOT NULL,
  `B43` varchar(10) NOT NULL,
  `B42` varchar(10) NOT NULL,
  `B41` varchar(10) NOT NULL,
  `B31` varchar(10) NOT NULL,
  `B32` varchar(10) NOT NULL,
  `B33` varchar(10) NOT NULL,
  `B34` varchar(10) NOT NULL,
  `B35` varchar(10) NOT NULL,
  `B36` varchar(10) NOT NULL,
  `B37` varchar(10) NOT NULL,
  `B38` varchar(10) NOT NULL,
  `A85` varchar(10) NOT NULL,
  `A84` varchar(10) NOT NULL,
  `A83` varchar(10) NOT NULL,
  `A82` varchar(10) NOT NULL,
  `A81` varchar(10) NOT NULL,
  `A71` varchar(10) NOT NULL,
  `A72` varchar(10) NOT NULL,
  `A73` varchar(10) NOT NULL,
  `A74` varchar(10) NOT NULL,
  `A75` varchar(10) NOT NULL,
  `B85` varchar(10) NOT NULL,
  `B84` varchar(10) NOT NULL,
  `B83` varchar(10) NOT NULL,
  `B82` varchar(10) NOT NULL,
  `B81` varchar(10) NOT NULL,
  `B71` varchar(10) NOT NULL,
  `B72` varchar(10) NOT NULL,
  `B73` varchar(10) NOT NULL,
  `B74` varchar(10) NOT NULL,
  `B75` varchar(10) NOT NULL,
  `gingivitis` varchar(100) NOT NULL,
  `classMolar` varchar(100) NOT NULL,
  `orthodontic` varchar(100) NOT NULL,
  `clenching` varchar(100) NOT NULL,
  `early` varchar(100) NOT NULL,
  `overjet` varchar(100) NOT NULL,
  `stayplate` varchar(100) NOT NULL,
  `clicking` varchar(100) NOT NULL,
  `moderate` varchar(100) NOT NULL,
  `overite` varchar(100) NOT NULL,
  `others1` varchar(100) NOT NULL,
  `tismus` varchar(100) NOT NULL,
  `others2` varchar(100) NOT NULL,
  `muscleSpasm` varchar(100) NOT NULL,
  `advance` varchar(100) NOT NULL,
  `midline` varchar(100) NOT NULL,
  `crossbite` varchar(100) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `records`
--

INSERT INTO `records` (`id`, `username`, `lname`, `fname`, `mname`, `bday`, `age`, `sex`, `religion`, `nationality`, `nickname`, `homeAddress`, `homeNo`, `occupation1`, `officeNo`, `faxNo`, `dentInsurance`, `mobileNo`, `effectiveDate`, `email`, `parents`, `occupation2`, `prevDr`, `lastVisit`, `physician`, `specialty`, `officeAddress`, `officeNum`, `goodHealth`, `medTreatment`, `medTreatment2`, `illness`, `illness2`, `hospitalized`, `hospitalized2`, `prescription`, `prescription2`, `tobacco`, `alcohol`, `allergic`, `opt1`, `opt2`, `opt3`, `opt4`, `opt5`, `other`, `bleedingTime2`, `woman1`, `woman2`, `woman3`, `bloodType`, `bloodPressure`, `disease`, `highblood`, `heartDisease`, `cancerTumors`, `lowblood`, `heartMurmur`, `anemia`, `epilepsy`, `hepatitis`, `angina`, `aidsHiv`, `rheumatic`, `asthma`, `std`, `hayfever`, `emphysema`, `stomach`, `respiratory`, `bleeding`, `feinting`, `hepatitis2`, `bloodDisease`, `rapid`, `tuberculosis`, `headInjuries`, `radiation`, `swollen`, `arthritis`, `joint`, `kidney`, `others`, `heartSurgery`, `diabetes`, `heartAttack`, `chest`, `thyroid`, `stroke`, `A55`, `A54`, `A53`, `A52`, `A51`, `A61`, `A62`, `A63`, `A64`, `A65`, `B55`, `B54`, `B53`, `B52`, `B51`, `B61`, `B62`, `B63`, `B64`, `B65`, `A18`, `A17`, `A16`, `A15`, `A14`, `A13`, `A12`, `A11`, `A21`, `A22`, `A23`, `A24`, `A25`, `A26`, `A27`, `A28`, `B18`, `B17`, `B16`, `B15`, `B14`, `B13`, `B12`, `B11`, `B21`, `B22`, `B23`, `B24`, `B25`, `B26`, `B27`, `B28`, `A48`, `A47`, `A46`, `A45`, `A44`, `A43`, `A42`, `A41`, `A31`, `A32`, `A33`, `A34`, `A35`, `A36`, `A37`, `A38`, `B48`, `B47`, `B46`, `B45`, `B44`, `B43`, `B42`, `B41`, `B31`, `B32`, `B33`, `B34`, `B35`, `B36`, `B37`, `B38`, `A85`, `A84`, `A83`, `A82`, `A81`, `A71`, `A72`, `A73`, `A74`, `A75`, `B85`, `B84`, `B83`, `B82`, `B81`, `B71`, `B72`, `B73`, `B74`, `B75`, `gingivitis`, `classMolar`, `orthodontic`, `clenching`, `early`, `overjet`, `stayplate`, `clicking`, `moderate`, `overite`, `others1`, `tismus`, `others2`, `muscleSpasm`, `advance`, `midline`, `crossbite`, `created`) VALUES
(285, 'admin', 's', 's', 's', '2018-09-04', 0, 'Male', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', 'Yes', 'Yes', '', 'Yes', '', 'Yes', '', 'Yes', '', 'Yes', 'Yes', 'Yes', 'Local Anesthetic', '', '', '', '', '', '', '', '', '', '', '', 'Yes', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2018-09-29 06:05:52');

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE `schedules` (
  `sched_id` int(11) NOT NULL,
  `day` varchar(20) NOT NULL,
  `time` varchar(20) NOT NULL,
  `slot` varchar(11) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedules`
--

INSERT INTO `schedules` (`sched_id`, `day`, `time`, `slot`, `status`) VALUES
(1, 'Monday', '8 AM - 5 PM', '0/10', 'open'),
(2, 'Tuesday', '10 AM - 4 PM', '0/10', 'open'),
(3, 'Wednesday', '1 PM - 5 PM', '0/5', 'open'),
(4, 'Thursday', '8 AM - 4 PM', '0/15', 'open'),
(5, 'Friday', '9 AM - 5 PM', '0/20', 'open'),
(6, 'Saturday', '8 AM - 6 PM', '0/20', 'open'),
(7, 'Sunday', '----', '----', 'closed');

-- --------------------------------------------------------

--
-- Table structure for table `t_records`
--

CREATE TABLE `t_records` (
  `t_id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `t_date` date DEFAULT NULL,
  `toothNo` varchar(50) DEFAULT NULL,
  `t_procedure` varchar(100) DEFAULT NULL,
  `dentists` varchar(100) DEFAULT NULL,
  `amountCharged` varchar(100) DEFAULT NULL,
  `amountPaid` varchar(100) DEFAULT NULL,
  `balance` varchar(100) DEFAULT NULL,
  `t_date2` date NOT NULL,
  `toothNo2` varchar(100) NOT NULL,
  `t_procedure2` varchar(100) NOT NULL,
  `dentists2` varchar(100) NOT NULL,
  `amountCharged2` varchar(100) NOT NULL,
  `amountPaid2` varchar(100) NOT NULL,
  `balance2` varchar(100) NOT NULL,
  `t_date3` date NOT NULL,
  `toothNo3` varchar(100) NOT NULL,
  `t_procedure3` varchar(100) NOT NULL,
  `dentists3` varchar(100) NOT NULL,
  `amountCharged3` varchar(100) NOT NULL,
  `amountPaid3` varchar(100) NOT NULL,
  `balance3` varchar(100) NOT NULL,
  `t_date4` date NOT NULL,
  `toothNo4` varchar(100) NOT NULL,
  `t_procedure4` varchar(100) NOT NULL,
  `dentists4` varchar(100) NOT NULL,
  `amountCharged4` varchar(100) NOT NULL,
  `amountPaid4` varchar(100) NOT NULL,
  `balance4` varchar(100) NOT NULL,
  `t_date5` date NOT NULL,
  `toothNo5` varchar(100) NOT NULL,
  `t_procedure5` varchar(100) NOT NULL,
  `dentists5` varchar(100) NOT NULL,
  `amountCharged5` varchar(100) NOT NULL,
  `amountPaid5` varchar(100) NOT NULL,
  `balance5` varchar(100) NOT NULL,
  `t_date6` date NOT NULL,
  `toothNo6` varchar(100) NOT NULL,
  `t_procedure6` varchar(100) NOT NULL,
  `dentists6` varchar(100) NOT NULL,
  `amountCharged6` varchar(100) NOT NULL,
  `amountPaid6` varchar(100) NOT NULL,
  `balance6` varchar(100) NOT NULL,
  `t_date7` date NOT NULL,
  `toothNo7` varchar(100) NOT NULL,
  `t_procedure7` varchar(100) NOT NULL,
  `dentists7` varchar(100) NOT NULL,
  `amountCharged7` varchar(100) NOT NULL,
  `amountPaid7` varchar(100) NOT NULL,
  `balance7` varchar(100) NOT NULL,
  `t_date8` date NOT NULL,
  `toothNo8` varchar(100) NOT NULL,
  `t_procedure8` varchar(100) NOT NULL,
  `dentists8` varchar(100) NOT NULL,
  `amountCharged8` varchar(100) NOT NULL,
  `amountPaid8` varchar(100) NOT NULL,
  `balance8` varchar(100) NOT NULL,
  `t_date9` date NOT NULL,
  `toothNo9` varchar(100) NOT NULL,
  `t_procedure9` varchar(100) NOT NULL,
  `dentists9` varchar(100) NOT NULL,
  `amountCharged9` varchar(100) NOT NULL,
  `amountPaid9` varchar(100) NOT NULL,
  `balance9` varchar(100) NOT NULL,
  `t_date10` date NOT NULL,
  `toothNo10` varchar(100) NOT NULL,
  `t_procedure10` varchar(100) NOT NULL,
  `dentists10` varchar(100) NOT NULL,
  `amountCharged10` varchar(100) NOT NULL,
  `amountPaid10` varchar(100) NOT NULL,
  `balance10` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password1` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `level` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `fname`, `lname`, `contact`, `username`, `password1`, `date`, `level`) VALUES
(1, 'Eugine123', 'Tan', '099999', 'bata123', 'thea123', '2018-09-14 04:33:26', 'user'),
(15, 'Hyoudou', 'Issei', '213123123', 'issei123', '123456', '2018-08-19 17:28:07', 'user'),
(16, 'jeff', 'pogi', '1234', 'jeffyb', '123456', '2018-09-23 18:18:14', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminform`
--
ALTER TABLE `adminform`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `records`
--
ALTER TABLE `records`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`sched_id`);

--
-- Indexes for table `t_records`
--
ALTER TABLE `t_records`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminform`
--
ALTER TABLE `adminform`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `records`
--
ALTER TABLE `records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=286;

--
-- AUTO_INCREMENT for table `schedules`
--
ALTER TABLE `schedules`
  MODIFY `sched_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `t_records`
--
ALTER TABLE `t_records`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
