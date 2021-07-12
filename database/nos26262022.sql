-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2020 at 04:20 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nos26262022`
--

-- --------------------------------------------------------

--
-- Table structure for table `nba_admin`
--
drop database if exists NOS26262022;
create schema NOS26262022;
use NOS26262022;

CREATE TABLE `nba_admin` (
  `Admin_ID` int(11) NOT NULL,
  `Admin_Email` varchar(40) DEFAULT NULL,
  `Admin_Password` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nba_admin`
--

INSERT INTO `nba_admin` (`Admin_ID`, `Admin_Email`, `Admin_Password`) VALUES
(3, 'kbrown@gmail.com', 'Password12'),
(4, 'newnba@gmail.com', 'Nba1234'),
(5, 'nana@gmail.com', 'Password12'),
(6, 'nana12@gmail.com', 'Password2');

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE `players` (
  `Player_ID` int(11) NOT NULL,
  `Team_ID` tinyint(4) DEFAULT NULL,
  `KitNumber` tinyint(4) DEFAULT NULL,
  `fname` varchar(30) DEFAULT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `position` enum('PG','SG','SF','PF','C') DEFAULT NULL,
  `player_photo` varchar(255) DEFAULT NULL,
  `GP` int(11) NOT NULL,
  `PointsPG` decimal(3,1) DEFAULT NULL,
  `AssistsPG` decimal(3,1) DEFAULT NULL,
  `ReboundsPG` decimal(3,1) DEFAULT NULL,
  `BlocksPG` decimal(2,1) DEFAULT NULL,
  `StealsPG` decimal(2,1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`Player_ID`, `Team_ID`, `KitNumber`, `fname`, `lname`, `position`, `player_photo`, `GP`, `PointsPG`, `AssistsPG`, `ReboundsPG`, `BlocksPG`, `StealsPG`) VALUES
(1, 2, 21, 'Patrick', 'Beverly', 'PG', 'images/bev.png', 6, '3.6', '1.4', '0.8', '0.0', '0.4'),
(2, 2, 13, 'Paul', 'George', 'SF', 'images/pg13.png', 3, '21.5', '3.9', '5.7', '0.4', '1.4'),
(3, 2, 2, 'Kawhi', 'Leonard', 'SF', 'images/klaw.png', 3, '27.1', '4.9', '7.1', '0.6', '1.8'),
(4, 2, 23, 'Lou', 'Williams', 'PG', 'images/lou.png', 3, '18.2', '5.6', '3.1', '0.2', '0.7'),
(5, 2, 40, 'Ivica', 'Zubac', 'C', 'images/zub.png', 3, '8.3', '1.1', '7.5', '0.9', '0.2'),
(6, 2, 9, 'Serge', 'Ibaka', 'C', 'images/ibaka.png', 3, '15.4', '1.4', '8.2', '0.8', '0.5'),
(7, 2, 5, 'Luke', 'Kennard', 'SG', 'images/kenn.png', 3, '15.8', '4.1', '3.5', '0.2', '0.4'),
(8, 2, 1, 'Reggie', 'Jackson', 'PG', 'images/reggie.png', 3, '11.9', '4.1', '3.0', '0.2', '0.4'),
(9, 2, 31, 'Marcus', 'Morris Sr.', 'PF', 'images/marcus.png', 3, '16.7', '1.4', '5.0', '0.5', '0.8'),
(11, 4, 23, 'Lebron', 'James', 'SF', 'images/lebron.png', 2, '25.3', '10.2', '7.8', '0.5', '1.2'),
(12, 4, 1, 'K. ', 'Caldwell-Pope', 'PG', 'images/kent.png', 2, '9.3', '1.6', '2.1', '0.2', '0.8'),
(13, 4, 4, 'Alex', 'Caruso', 'PG', 'images/caruso.png', 2, '5.5', '1.9', '1.9', '0.3', '1.1'),
(14, 4, 3, 'Anthony', 'Davis', 'PF', 'images/ad.png', 2, '26.1', '3.2', '9.3', '2.3', '1.5'),
(15, 4, 0, 'Kyle', 'Kuzma', 'SF', 'images/kuz.png', 2, '12.8', '1.3', '4.5', '0.4', '0.5'),
(16, 4, 88, 'Markieff', 'Morris', 'PF', 'images/kieff.png', 2, '9.7', '1.3', '3.8', '0.3', '0.5'),
(17, 4, 3, 'K.', 'Antetokounmpo', 'SF', 'images/kostas.png', 1, '1.8', '1.1', '1.5', '0.7', '0.7'),
(18, 4, 17, 'Dennis', 'Schroder', 'PG', 'images/schro.png', 2, '18.9', '4.0', '3.6', '0.2', '0.7'),
(19, 4, 5, 'Montrezl', 'Harrell', 'C', 'images/snake.png', 2, '18.6', '1.7', '7.1', '1.1', '0.6'),
(20, 4, 33, 'Marc', 'Gasol', 'C', 'images/marc.png', 2, '7.5', '3.3', '6.3', '0.9', '0.8'),
(21, 6, 3, 'Kelly', 'Oubre Jr.', 'SF', 'images/oubre.png', 2, '18.7', '1.5', '6.4', '0.7', '1.3'),
(22, 6, 5, 'Kevon', 'Looney', 'PF', 'images/Looney.png', 3, '3.1', '1.3', '2.1', '2.1', '2.2'),
(23, 6, 11, 'Klay', 'Thompson', 'SG', 'images/klay.png', 2, '21.5', '2.4', '3.8', '0.6', '1.1'),
(24, 6, 22, 'Andrew', 'Wiggins', 'SF', 'images/wig.png', 2, '21.8', '3.7', '5.1', '1.0', '0.8'),
(25, 6, 60, 'James', 'Wiseman', 'C', 'images/wise.png', 0, '0.0', '0.0', '0.0', '0.0', '0.0'),
(26, 6, 7, 'Eric', 'Paschall', 'PF', 'images/pas.png', 2, '14.0', '2.1', '4.6', '0.2', '0.5'),
(27, 6, 12, 'Ky', 'Bowman', 'SG', 'images/ky.png', 2, '7.4', '2.9', '2.7', '0.2', '1.0'),
(28, 6, 30, 'Stephen', 'Curry', 'PG', 'images/chefcurry.png', 2, '20.8', '6.6', '5.2', '0.4', '1.0'),
(29, 6, 23, 'Draymond', 'Green', 'PF', 'images/dray.png', 2, '8.0', '6.2', '6.2', '0.8', '1.4'),
(30, 5, 3, 'Chris', 'Paul', 'PG', 'images/cp3.png', 2, '17.6', '6.7', '5.0', '0.2', '1.6'),
(31, 5, 22, 'Deandre', 'Ayton', 'C', 'images/ayton.png', 2, '18.2', '1.9', '11.5', '1.5', '0.7'),
(32, 5, 1, 'Devin', 'Booker', 'SG', 'images/booker.png', 2, '26.6', '6.5', '4.2', '0.3', '0.7'),
(33, 5, 22, 'Mikal', 'Bridges', 'SF', 'images/mikal.png', 2, '9.1', '1.8', '4.0', '0.6', '1.4'),
(34, 5, 23, 'Cameron', 'Johnson', 'SF', 'images/cameron.png', 2, '8.8', '1.2', '3.3', '0.4', '0.6'),
(35, 5, 20, 'Dario', 'Saric', 'PF', 'images/saric.png', 2, '10.7', '1.9', '6.2', '0.2', '0.6'),
(36, 5, 15, 'Cameron', 'Payne', 'PG', 'images/payne.png', 2, '10.1', '3.0', '3.9', '0.3', '1.0'),
(37, 5, 8, 'Frank', 'Kaminsky', 'C', 'images/kam.png', 2, '9.7', '1.9', '4.5', '0.3', '0.4'),
(38, 3, 21, 'Hassan', 'Whiteside', 'C', 'images/hassan.png', 3, '15.5', '1.2', '13.5', '2.9', '0.4'),
(39, 3, 5, 'De\'Aaron', 'Fox', 'PG', 'images/fox.png', 3, '21.1', '6.8', '3.8', '0.5', '1.5'),
(40, 3, 35, 'Marvin', 'Bagley III', 'PF', 'images/bagley.png', 3, '14.2', '0.8', '7.5', '0.9', '0.5'),
(41, 3, 40, 'Harrison', 'Barnes', 'SF', 'images/barnes.png', 3, '14.5', '2.2', '4.5', '0.2', '0.6'),
(42, 3, 24, 'Buddy', 'Hield', 'SG', 'images/buddy.png', 3, '19.2', '3.0', '4.6', '0.2', '0.9'),
(43, 3, 33, 'Jabari', 'Parker', 'PF', 'images/jabari.png', 3, '14.0', '1.8', '5.6', '0.4', '1.2'),
(44, 3, 22, 'Richaun', 'Holmes', 'PF', 'images/holmes.png', 3, '12.3', '1.0', '8.1', '1.3', '0.9'),
(45, 3, 88, 'Nemanja', 'Bjelica', 'PF', 'images/nem.png', 3, '11.5', '2.8', '6.4', '0.6', '0.9'),
(48, 2, 89, 'Terance', 'Mann', 'PG', 'images/mann.png', 2, '9.0', '2.0', '1.0', '1.0', '1.0');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `Team_ID` tinyint(4) NOT NULL,
  `TeamName` varchar(15) DEFAULT NULL,
  `RosterSize` tinyint(4) DEFAULT NULL CHECK (`RosterSize` >= 8 and `RosterSize` <= 10),
  `Arena` varchar(30) DEFAULT NULL,
  `Team_Logo` varchar(255) DEFAULT NULL,
  `Head_Coach` varchar(30) DEFAULT NULL,
  `wins` tinyint(4) DEFAULT NULL,
  `losses` tinyint(4) DEFAULT NULL,
  `biglogo` varchar(225) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`Team_ID`, `TeamName`, `RosterSize`, `Arena`, `Team_Logo`, `Head_Coach`, `wins`, `losses`, `biglogo`, `link`) VALUES
(2, 'Clippers', 10, 'Staples Center', 'images/clippers.png', 'Ty Lue', 3, 0, 'images/big-clippers.jpg', 'specificteam.php?id=2'),
(3, 'Kings', 8, 'Golden 1 Center', 'images/kings.png', 'Luke Walton', 0, 3, 'images/big-kings.jpg', 'specificteam.php?id=3'),
(4, 'Lakers', 10, 'Staples Center', 'images/lakers.png', 'Frank Vogel', 2, 0, 'images/big-lakers.png', 'specificteam.php?id=4'),
(5, 'Suns', 8, 'Talking Stick Resort', 'images/suns.png', 'Monty Williams', 0, 2, 'images/big-suns.jpg', 'specificteam.php?id=5'),
(6, 'Warriors', 9, 'Chase Center', 'images/warriors.png', 'Steve Kerr', 1, 1, 'images/big-warriors.jpg', 'specificteam.php?id=6');

-- --------------------------------------------------------

--
-- Table structure for table `teamschedule`
--

CREATE TABLE `teamschedule` (
  `Schedule_ID` int(11) NOT NULL,
  `weeknumber` tinyint(4) DEFAULT NULL,
  `home_team` tinyint(4) DEFAULT NULL,
  `away_team` tinyint(4) DEFAULT NULL,
  `Game_Date` date DEFAULT NULL,
  `Game_Time` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teamschedule`
--

INSERT INTO `teamschedule` (`Schedule_ID`, `weeknumber`, `home_team`, `away_team`, `Game_Date`, `Game_Time`) VALUES
(1, 1, 6, 4, '2020-12-09', '18:30:00'),
(2, 1, 5, 2, '2020-12-11', '18:30:00'),
(3, 2, 3, 5, '2020-12-13', '16:45:00'),
(4, 2, 4, 2, '2020-12-15', '23:15:00'),
(5, 2, 6, 5, '2020-12-16', '21:30:00'),
(6, 2, 3, 4, '2020-12-17', '21:30:00'),
(7, 2, 6, 2, '2020-12-18', '12:45:00'),
(9, 3, 2, 4, '2020-12-21', '21:15:00'),
(10, 3, 6, 5, '2020-12-22', '21:45:00'),
(11, 3, 3, 2, '2020-12-23', '22:15:00'),
(12, 3, 5, 4, '2020-12-25', '20:30:00'),
(13, 4, 6, 4, '2020-12-28', '19:00:00'),
(14, 4, 2, 5, '2020-12-29', '20:45:00'),
(15, 4, 3, 6, '2020-12-30', '20:00:00'),
(16, 4, 4, 5, '2021-01-02', '14:45:00'),
(17, 5, 2, 6, '2021-01-03', '11:30:00'),
(18, 5, 3, 5, '2020-12-08', '13:40:00'),
(19, 5, 4, 2, '2020-12-09', '17:30:00'),
(20, 5, 5, 6, '2020-12-11', '15:45:00'),
(21, 6, 6, 3, '2021-01-18', '20:30:00'),
(22, 6, 5, 2, '2021-01-19', '21:45:00'),
(23, 6, 4, 6, '2021-01-20', '21:10:00'),
(24, 6, 3, 2, '2020-12-24', '18:05:00'),
(25, 7, 4, 5, '2021-01-25', '20:30:00'),
(26, 7, 6, 3, '2021-01-26', '20:45:00'),
(27, 7, 3, 4, '2021-01-28', '19:15:00'),
(28, 7, 2, 5, '2021-01-30', '21:20:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nba_admin`
--
ALTER TABLE `nba_admin`
  ADD PRIMARY KEY (`Admin_ID`);

--
-- Indexes for table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`Player_ID`),
  ADD KEY `Team_ID` (`Team_ID`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`Team_ID`) USING BTREE;

--
-- Indexes for table `teamschedule`
--
ALTER TABLE `teamschedule`
  ADD PRIMARY KEY (`Schedule_ID`),
  ADD KEY `home_team` (`home_team`),
  ADD KEY `away_team` (`away_team`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nba_admin`
--
ALTER TABLE `nba_admin`
  MODIFY `Admin_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `players`
--
ALTER TABLE `players`
  MODIFY `Player_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `Team_ID` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `teamschedule`
--
ALTER TABLE `teamschedule`
  MODIFY `Schedule_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `players`
--
ALTER TABLE `players`
  ADD CONSTRAINT `players_ibfk_1` FOREIGN KEY (`Team_ID`) REFERENCES `team` (`Team_ID`) ON UPDATE CASCADE;

--
-- Constraints for table `teamschedule`
--
ALTER TABLE `teamschedule`
  ADD CONSTRAINT `teamschedule_ibfk_1` FOREIGN KEY (`home_team`) REFERENCES `team` (`Team_ID`),
  ADD CONSTRAINT `teamschedule_ibfk_2` FOREIGN KEY (`away_team`) REFERENCES `team` (`Team_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
