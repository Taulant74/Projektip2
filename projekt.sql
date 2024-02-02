-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2024 at 09:26 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projekt`
--

-- --------------------------------------------------------

--
-- Table structure for table `bwcontenders`
--

CREATE TABLE `bwcontenders` (
  `ID` int(25) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Wins` int(255) NOT NULL,
  `Losses` int(255) NOT NULL,
  `Draws` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bwcontenders`
--

INSERT INTO `bwcontenders` (`ID`, `Name`, `Wins`, `Losses`, `Draws`) VALUES
(1, 'Aljamain Sterling', 23, 4, 0),
(2, 'Merab Dvalishvili', 16, 4, 0),
(3, 'Henry Cejudo', 16, 3, 0),
(4, 'Cory Sandhagen', 17, 4, 0),
(5, 'Petr Yan', 16, 5, 0),
(6, 'Marlon Vera', 21, 8, 1),
(7, 'Song Yadong', 20, 7, 1),
(8, 'Deiveson Figueiredo', 22, 3, 1),
(9, 'Rob Font', 20, 8, 0),
(10, 'Dominic Cruz', 24, 4, 0);

-- --------------------------------------------------------

--
-- Table structure for table `champs`
--

CREATE TABLE `champs` (
  `ID` int(100) NOT NULL,
  `Name` varchar(250) NOT NULL,
  `Wins` int(250) NOT NULL,
  `Losses` int(250) NOT NULL,
  `Draws` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `champs`
--

INSERT INTO `champs` (`ID`, `Name`, `Wins`, `Losses`, `Draws`) VALUES
(1, 'Jon Jones', 27, 1, 0),
(2, 'Alex Pereira', 9, 2, 0),
(3, 'Sean Strickland  ', 28, 5, 0),
(4, 'Leon Edwards', 21, 4, 0),
(5, 'Islam Makachev', 25, 1, 0),
(6, 'Alexander Volkanovski', 26, 3, 0),
(7, 'Sean O Maley', 17, 1, 0),
(8, 'Alexander Pantoja', 26, 5, 0);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Comment` varchar(2000) NOT NULL,
  `ID` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`Name`, `Email`, `Comment`, `ID`) VALUES
('aliabdelaziz', 'ali@facebook.com', 'rrezbegde per ma t fortit', 1),
('op', 'fd@gmail.com', 'jndkc dnfh vjnesnv jnsddknvsnv sdv sjv j sjdncjsdd vjs vk sdj vsj vjs j j sdjv sdjdvjndsxc hjfs vc jsdncvhjvfjdn vbjridkmc nvfnidkc nvfrdmk cnvvnfekdsm xcnjdkmxc\r\nvkjsd cccsvjnsdvjnsvsdjdvnsdk\r\ndskknck', 4);

-- --------------------------------------------------------

--
-- Table structure for table `ftwcontenders`
--

CREATE TABLE `ftwcontenders` (
  `ID` int(25) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Wins` int(255) NOT NULL,
  `Losses` int(255) NOT NULL,
  `Draws` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ftwcontenders`
--

INSERT INTO `ftwcontenders` (`ID`, `Name`, `Wins`, `Losses`, `Draws`) VALUES
(1, 'Max Holloway', 25, 7, 0),
(2, 'Yair Rodriguez', 16, 4, 0),
(3, 'Brian Ortega', 15, 3, 0),
(4, 'Arnold Allen', 19, 2, 0),
(5, 'Ilia Topuria', 14, 0, 0),
(6, 'Josh Emmet', 18, 4, 0),
(7, 'Calvin Kattar', 23, 7, 0),
(8, 'Giga Chikadze', 15, 3, 0),
(9, 'Movsar Evloev', 17, 0, 0),
(10, 'Bryce Mitchell', 16, 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `fwcontenders`
--

CREATE TABLE `fwcontenders` (
  `ID` int(25) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Wins` int(255) NOT NULL,
  `Losses` int(255) NOT NULL,
  `Draws` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fwcontenders`
--

INSERT INTO `fwcontenders` (`ID`, `Name`, `Wins`, `Losses`, `Draws`) VALUES
(1, 'Brandon Moreno', 21, 7, 2),
(2, 'Amir Albazi', 17, 1, 0),
(3, 'Brandon Royval', 15, 6, 0),
(4, 'Kai Kara-France', 24, 11, 0),
(5, 'Matheus Nicolau', 19, 4, 1),
(6, 'Manel Kape', 19, 6, 0),
(7, 'Alex Perez', 24, 7, 0),
(8, 'Matt Schnell', 16, 7, 0),
(9, 'Muhammad Mokaev', 11, 0, 0),
(10, 'Tim Elliot', 20, 13, 0);

-- --------------------------------------------------------

--
-- Table structure for table `hwcontenders`
--

CREATE TABLE `hwcontenders` (
  `ID` int(25) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Wins` int(255) NOT NULL,
  `Losses` int(255) NOT NULL,
  `Draws` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hwcontenders`
--

INSERT INTO `hwcontenders` (`ID`, `Name`, `Wins`, `Losses`, `Draws`) VALUES
(1, 'Tom Aspinal', 14, 3, 0),
(2, 'Ciryl Gane', 12, 2, 0),
(3, 'Sergei Pavlovic', 18, 2, 0),
(4, 'Stipe Miocic', 20, 4, 0),
(5, 'Curtis Blaydes', 17, 4, 0),
(6, 'Alexander Volkov', 37, 10, 0),
(7, 'Jailton Almeida', 20, 2, 0),
(8, 'Sergeri Spivac', 16, 3, 0),
(9, 'Tai Tuivasa', 15, 6, 0),
(10, 'Derrick Lewis', 27, 12, 0);

-- --------------------------------------------------------

--
-- Table structure for table `lhwcontenders`
--

CREATE TABLE `lhwcontenders` (
  `ID` int(25) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Wins` int(255) NOT NULL,
  `Losses` int(255) NOT NULL,
  `Draws` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lhwcontenders`
--

INSERT INTO `lhwcontenders` (`ID`, `Name`, `Wins`, `Losses`, `Draws`) VALUES
(1, 'Jamal Hill', 12, 1, 0),
(2, 'Jiri Prochazka', 29, 4, 1),
(3, 'Magomed Ankalaev', 18, 1, 1),
(4, 'Jan Blachowicz', 29, 10, 1),
(5, 'Nikita Krylov', 30, 9, 0),
(6, 'Johnny Walker', 21, 7, 0),
(7, 'Antony Smith', 37, 18, 0),
(8, 'Volkan Oezdemir', 19, 7, 0),
(9, 'Ryan Spann', 21, 9, 0),
(10, 'Khalil Rountree', 13, 5, 0);

-- --------------------------------------------------------

--
-- Table structure for table `lwcontenders`
--

CREATE TABLE `lwcontenders` (
  `ID` int(25) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Wins` int(255) NOT NULL,
  `Losses` int(255) NOT NULL,
  `Draws` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lwcontenders`
--

INSERT INTO `lwcontenders` (`ID`, `Name`, `Wins`, `Losses`, `Draws`) VALUES
(1, 'Charles Oliverira', 34, 9, 0),
(2, 'Justin Gaethje', 26, 4, 0),
(3, 'Dustin Porier', 29, 8, 0),
(4, 'Arman Tsarukyan', 21, 3, 0),
(5, 'Michael Chandler', 23, 8, 0),
(6, 'Mateutz Gamrot', 23, 2, 0),
(7, 'Beneil Dariush', 22, 6, 1),
(8, 'Rafael Fiziev', 12, 3, 0),
(9, 'Dan Hooker', 23, 12, 0),
(10, 'Jalin Turner', 14, 7, 0);

-- --------------------------------------------------------

--
-- Table structure for table `mwcontenders`
--

CREATE TABLE `mwcontenders` (
  `ID` int(25) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Wins` int(255) NOT NULL,
  `Losses` int(255) NOT NULL,
  `Draws` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mwcontenders`
--

INSERT INTO `mwcontenders` (`ID`, `Name`, `Wins`, `Losses`, `Draws`) VALUES
(1, 'Israel Adesanya', 24, 3, 0),
(2, 'Dricus Duplessis', 20, 2, 0),
(3, 'Robert Whittaker', 25, 7, 0),
(4, 'Jared Cannonier', 17, 6, 0),
(5, 'Marvin Vettori', 19, 7, 1),
(6, 'Paulo Costa', 14, 2, 0),
(7, 'Roman Dolidze', 12, 2, 0),
(8, 'Brendan Allen', 23, 5, 0),
(9, 'Khamzat Chimaev', 13, 0, 0),
(10, 'Jack Hermansson', 23, 8, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Gender` enum('m','f') NOT NULL,
  `Birthdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Name`, `Email`, `Password`, `Gender`, `Birthdate`) VALUES
(1, 'dd', 'hg@gmail.com', '0', 'f', '4444-04-04'),
(3, 'kebab mctapper', 'po@gmail.com', '0', 'm', '2000-09-02'),
(4, 'taulant', 't@gmail.com', '0', 'm', '2000-05-05'),
(59, 'admin', '', 'admin', '', '0000-00-00'),
(60, 'newuser', 'newus@gmail.com', '12345678', 'm', '2005-02-07'),
(62, 'ggggg', 'ggggg@gmail.com', '00000000', 'f', '1997-01-05');

-- --------------------------------------------------------

--
-- Table structure for table `wwcontenders`
--

CREATE TABLE `wwcontenders` (
  `ID` int(25) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Wins` int(255) NOT NULL,
  `Losses` int(255) NOT NULL,
  `Draws` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wwcontenders`
--

INSERT INTO `wwcontenders` (`ID`, `Name`, `Wins`, `Losses`, `Draws`) VALUES
(1, 'Kamaru Usman', 20, 3, 0),
(2, 'Belal Muhammad', 23, 3, 0),
(3, 'Colby Covington', 17, 3, 0),
(4, 'Gilbert Burns', 22, 6, 0),
(5, 'Shavkat Rakhmonov', 17, 0, 0),
(6, 'Stephen Thompson', 17, 6, 1),
(7, 'Geoff Neal', 15, 5, 0),
(8, 'Vicente Luque', 22, 9, 1),
(9, 'Sean Brady', 16, 1, 0),
(10, 'Ian Garry', 13, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bwcontenders`
--
ALTER TABLE `bwcontenders`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `champs`
--
ALTER TABLE `champs`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `ftwcontenders`
--
ALTER TABLE `ftwcontenders`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `fwcontenders`
--
ALTER TABLE `fwcontenders`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `hwcontenders`
--
ALTER TABLE `hwcontenders`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `lhwcontenders`
--
ALTER TABLE `lhwcontenders`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `lwcontenders`
--
ALTER TABLE `lwcontenders`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `mwcontenders`
--
ALTER TABLE `mwcontenders`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `wwcontenders`
--
ALTER TABLE `wwcontenders`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bwcontenders`
--
ALTER TABLE `bwcontenders`
  MODIFY `ID` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `champs`
--
ALTER TABLE `champs`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `ID` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ftwcontenders`
--
ALTER TABLE `ftwcontenders`
  MODIFY `ID` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `fwcontenders`
--
ALTER TABLE `fwcontenders`
  MODIFY `ID` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `hwcontenders`
--
ALTER TABLE `hwcontenders`
  MODIFY `ID` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `lhwcontenders`
--
ALTER TABLE `lhwcontenders`
  MODIFY `ID` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `lwcontenders`
--
ALTER TABLE `lwcontenders`
  MODIFY `ID` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `mwcontenders`
--
ALTER TABLE `mwcontenders`
  MODIFY `ID` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `wwcontenders`
--
ALTER TABLE `wwcontenders`
  MODIFY `ID` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
