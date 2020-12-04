-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2020 at 02:15 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ipl`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `mail` varchar(80) NOT NULL,
  `Product_Id` int(11) NOT NULL,
  `Category_Id` int(11) NOT NULL,
  `Image_Url` varchar(80) NOT NULL,
  `Product_Description` varchar(80) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Product_Name` varchar(80) NOT NULL,
  `Product_Price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`mail`, `Product_Id`, `Category_Id`, `Image_Url`, `Product_Description`, `Quantity`, `Product_Name`, `Product_Price`) VALUES
('jainam.z@somaiya.edu', 1123, 5523, '2_Jersey_CSK_2020.jpg', 'First Copy of Official Team CSK Jersey.', 1, 'CSK Jersey', 5001);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `Id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Inserted_By` varchar(30) NOT NULL,
  `Inserted_At` timestamp NOT NULL DEFAULT current_timestamp(),
  `Updated_By` varchar(30) DEFAULT NULL,
  `Updated_At` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`Id`, `Name`, `Quantity`, `Inserted_By`, `Inserted_At`, `Updated_By`, `Updated_At`) VALUES
(4785, 'Shoes', 20, 'jainam.z@somaiya.edu', '2020-11-09 12:21:35', 'jainam.z@somaiya.edu', '2020-11-22 08:58:16'),
(5200, 'Cap', 25, 'jainam.z@somaiya.edu', '2020-11-15 13:14:22', NULL, NULL),
(5523, 'Jersey', 30, 'jainam.z@somaiya.edu', '2020-11-08 07:12:21', NULL, NULL),
(5590, 'Cricket-Bat', 30, 'jainam.z@somaiya.edu', '2020-11-08 11:38:15', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `Id` int(11) NOT NULL,
  `Name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`Id`, `Name`) VALUES
(1, 'Team1_CSK/1_0_CSK_Team.jpg'),
(2, 'Team1_CSK/1_0_CSK_Team_2.jpg'),
(3, 'Team1_CSK/CSK_1_MS_Dhoni.jpg'),
(4, 'Team1_CSK/CSK_2_Murali_Vijay.jpg'),
(5, 'Team1_CSK/CSK_3_Ravindra_Jadega.jpg'),
(6, 'Team1_CSK/CSK_4_Deepak_Chahar.jpg'),
(7, 'Team1_CSK/CSK_5_Dwayne_Bravo.jpg'),
(8, 'Team1_CSK/CSK_6_Faf_Du_Plesis.jpg'),
(9, 'Team1_CSK/CSK_8_Suresh_Raina.jpg'),
(10, 'Team1_CSK/CSK_9_narayan_Jagadeesan.jpg'),
(11, 'Team1_CSK/CSK_10_Karn_Sharma.jpg'),
(12, 'Team1_CSK/CSK_11_Kedar_Jadhav.jpg'),
(13, 'Team1_CSK/CSK_12_Shane_Watson.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `Id` int(11) NOT NULL,
  `Headline` varchar(100) NOT NULL,
  `NewsContent` text NOT NULL,
  `Author` varchar(20) NOT NULL,
  `Inserted_By` varchar(30) NOT NULL,
  `Inserted_At` timestamp NOT NULL DEFAULT current_timestamp(),
  `Updated_By` varchar(30) DEFAULT NULL,
  `Updated_At` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`Id`, `Headline`, `NewsContent`, `Author`, `Inserted_By`, `Inserted_At`, `Updated_By`, `Updated_At`) VALUES
(4869, 'IPL 2020 TO BE PLAYED FROM 19TH SEPTEMBER TO 10TH NOVEMBER 2020', 'The Indian Premier League Governing Council (IPL GC) met today via video-conference to decide on the issues concerning the IPL 2020 edition. Taking note of the prevailing COVID-19 situation in India, the IPL GC decided to stage the tournament in the United Arab Emirates (UAE) and the matches will be played in Dubai, Sharjah and Abu Dhabi subject to necessary clearances from the Government of India.\r\n\r\nIPL 2020 will be played from 19th September and the final will be played on 10th November 2020. The 53-day tournament will witness 10-afternoon matches starting at 15:30 IST while the evening matches will start at 19:30 IST.\r\n\r\nThe Governing Council also discussed the comprehensive Standard Operating Procedures (SOPs), which will be finalised and published in due course, including the agencies to execute and deliver a bio-secure environment for safe and successful conduct of IPL 2020 Season.', 'JAY SHAH, H\'Sec-BCCI', 'jainam.z@somaiya.edu', '2020-11-10 09:55:01', NULL, NULL),
(4870, 'kjhgt', 'jhgtjh thgfthgf thgf hrgef jmhg trr thgf thg fjhgrfjmhgf jhgf yjhgh jhg hg', 'hg rhg htgf', 'jainam.z@somaiya.edu', '2020-11-10 18:02:37', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Product_Id` int(11) NOT NULL,
  `Image_URL` text NOT NULL,
  `Category_Id` int(11) NOT NULL,
  `Product_Name` varchar(50) NOT NULL,
  `Product_Description` text NOT NULL,
  `Product_Price` float NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Inserted_At` timestamp NOT NULL DEFAULT current_timestamp(),
  `Inserted_By` varchar(30) DEFAULT NULL,
  `Updated_At` timestamp NULL DEFAULT NULL,
  `Updated_By` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Product_Id`, `Image_URL`, `Category_Id`, `Product_Name`, `Product_Description`, `Product_Price`, `Quantity`, `Inserted_At`, `Inserted_By`, `Updated_At`, `Updated_By`) VALUES
(1111, '0_0_0_Follow@twitter.jpg', 5590, ';lhjgfgh,.jhgf', 'k,jffgk, gjgfjfhgfb yhghgf', 1, 10, '2020-11-22 09:15:35', 'jainam.z@somaiya.edu', NULL, NULL),
(1123, '2_Jersey_CSK_2020.jpg', 5523, 'CSK Jersey', 'First Copy of Official Team CSK Jersey.', 5001, 100, '2020-11-09 12:11:50', 'jainam.z@somaiya.edu', '2020-11-21 07:14:18', 'dev.vora@somaiya.edu'),
(1124, '1_Jersey_MI_2020.webp', 5523, 'MI Jersey', 'First Copy of Official Team Mi Jersey.', 5003, 10, '2020-11-15 15:27:43', 'jainam.z@somaiya.edu', '2020-11-22 08:58:37', 'jainam.z@somaiya.edu');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `Id` int(11) NOT NULL,
  `Team1` varchar(5) NOT NULL,
  `Team2` varchar(5) NOT NULL,
  `Match_Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`Id`, `Team1`, `Team2`, `Match_Date`) VALUES
(1, 'MI', 'CSK', '2020-09-19'),
(2, 'DC', 'KXIP', '2020-09-20');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `gender` text NOT NULL,
  `dob` date NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `favteam` text NOT NULL,
  `user` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`fname`, `lname`, `gender`, `dob`, `mobile`, `mail`, `address`, `pass`, `favteam`, `user`) VALUES
('Dev', 'Vora', 'Male', '1999-08-03', '9930321166', 'dev.vora@somaiya.edu', 'Ghatkopar', '$2y$10$EGFYj7e/lH/iWXAIPgmtT.jqFVgQQ9G2DGHjcMt3qFMpzTgwl9Sna', 'Mumbai Indians', 'Admin'),
('Jainam', 'Zobaliya', 'Male', '2000-05-25', '8657161579', 'jainam.z@somaiya.edu', 'Bhayander', '$2y$10$5kKXcYPqBz5pnQTD2o/JSun6NbHW/9XCLPMmgM1TAEpjUVBT05OxS', 'Mumbai Indians', 'Admin'),
('john', 'doe', 'Male', '1995-08-12', '1234567895', 'johndoe@somaiya.edu', 'Nagpur', '$2y$10$TEQgWles5F.eKjIhZBdcou62N0gll5w/TOiSkSoHGR1yLFPZRZX0O', 'Royal Challengers Bangalore', 'User'),
('Milly', 'Mehta', 'Female', '2001-08-10', '9658745968', 'millymehta@somaiya.edu', 'Dombivali', '$2y$10$y4dQUx4ZZTQexccVqhMsUO2iEgY0z3/chXis/KIXVdU8DCWwe70rG', 'Kolakata Knight Riders', 'User');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `mail` varchar(80) NOT NULL,
  `Product_Name` varchar(80) NOT NULL,
  `Category_Id` int(11) NOT NULL,
  `Image_Url` varchar(80) NOT NULL,
  `Product_Description` text NOT NULL,
  `Product_Id` int(11) NOT NULL,
  `Product_Price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`Product_Id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Category_Inserted_By_User` (`Inserted_By`),
  ADD KEY `Category_Updated_By_User` (`Updated_By`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Product_Id`),
  ADD KEY `Category_Id` (`Category_Id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`mail`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`Product_Id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `category`
--
ALTER TABLE `category`
  ADD CONSTRAINT `Category_Inserted_By_User` FOREIGN KEY (`Inserted_By`) REFERENCES `signup` (`mail`) ON UPDATE NO ACTION,
  ADD CONSTRAINT `Category_Updated_By_User` FOREIGN KEY (`Updated_By`) REFERENCES `signup` (`mail`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
