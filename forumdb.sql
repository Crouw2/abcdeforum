-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2018 at 08:11 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `forumdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `voornaam` varchar(15) NOT NULL,
  `achternaam` varchar(15) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `wachtwoord` varchar(100) NOT NULL,
  `reg_key` varchar(100) NOT NULL,
  `reg_bevestig` varchar(5) NOT NULL,
  `pc_key` varchar(100) NOT NULL,
  `pc_active` varchar(4) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `voornaam`, `achternaam`, `username`, `email`, `wachtwoord`, `reg_key`, `reg_bevestig`, `pc_key`, `pc_active`, `role`) VALUES
(1, 'Mike', 'Mike', 'Mike', 'mike@hotmail.com', 'toor', '', 'ja', '', 'nee', 'member'),
(2, 'mike', 'mike', 'mike', 'mike', '8074144299c572869a31c1cd2e19e4b025254b64ce39ccb32aa4ccc264548785', '', 'nee', '', 'nee', 'member'),
(3, 'sjekkel', 'sjek', 'b', 'boschipper3@gmail.com', 'e2f6db47331940ec60b54ce93afef4625228582599c6c54e5ac5226822b70201', '', 'nee', '', 'nee', 'member'),
(4, 'Mjark', 'koster', 'mjark420', 'mjark@hotmail.com', '73a524eec726dc74fb62843d135c208370cda8783814272c76949fb1af586951', '', 'nee', '', 'nee', 'member'),
(5, 'Hoi', 'hoi', 'hoi', 'hoi', '', '', 'nee', '', 'nee', 'member'),
(6, 'Moi', 'moi', 'moi', 'moi', '05129985e0518844fd39f59971cf3557d7173d7198d6f7a524e9c2927c3aafb5', '', 'nee', '', 'nee', 'member'),
(7, 'Robin', 'Robin', 'robin123', 'robin@hotmail.com', '73a524eec726dc74fb62843d135c208370cda8783814272c76949fb1af586951', '', 'nee', '', 'nee', 'member'),
(8, 'Hoo', 'hoo', 'hoo', 'hoo@hotmail.com', '73a524eec726dc74fb62843d135c208370cda8783814272c76949fb1af586951', '', 'ja', '', 'nee', 'member'),
(9, 'hj', 'hj', 'hj', 'hj', 'xx', '', 'nee', '', 'nee', 'member'),
(10, 'Robin', 'Robin', 'robin', 'robin', 'test123', '', 'nee', '', 'nee', 'member'),
(11, 'm', 'm', 'm', 'm', 'mike', '', 'nee', '', 'nee', 'member'),
(12, 'Robin', 'Robin', 'Admin', 'fdskjf@hh.nl', '0dc5220d934cacd6121ea9976f5789377431e8415bbc1ed4c227becc198dc235', '', 'ja', '', 'nee', 'member'),
(13, 'Hoi', 'aa', 'aaaa', 'aa.@aa.nl', '0dc5220d934cacd6121ea9976f5789377431e8415bbc1ed4c227becc198dc235', '', 'ja', '', 'nee', 'member'),
(14, 'Admin', 'mike', 'Admin', 'admin@hotmail.com', 'fdc78bd545601c73eb50dc91973ddb986c6557154f6ea713158db119a329e400', '', 'ja', '', 'nee', 'admin'),
(15, 'miker', 'miker', 'miker', 'miker', 'test', '', 'ja', '', 'nee', 'member'),
(16, 'test', 'test', 'test', 'test123@hotmail.com', 'fdc78bd545601c73eb50dc91973ddb986c6557154f6ea713158db119a329e400', '', 'ja', '', 'nee', 'member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
