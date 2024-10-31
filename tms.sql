-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2024 at 10:35 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tms`
--
CREATE DATABASE IF NOT EXISTS `tms` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `tms`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `UserName` varchar(100) DEFAULT NULL,
  `Name` varchar(250) DEFAULT NULL,
  `EmailId` varchar(250) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `updationDate` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `UserName`, `Name`, `EmailId`, `MobileNumber`, `Password`, `updationDate`) VALUES
(1, 'admin', 'Tshiamo', 'test@gmail.com', 813556089, 'f925916e2754e5e03f75dd58a5733251', '2024-10-18 11:18:49');

-- --------------------------------------------------------

--
-- Table structure for table `tblbooking`
--

CREATE TABLE `tblbooking` (
  `BookingId` int(11) NOT NULL,
  `PackageId` int(11) DEFAULT NULL,
  `UserEmail` varchar(100) DEFAULT NULL,
  `FromDate` varchar(100) DEFAULT NULL,
  `ToDate` varchar(100) DEFAULT NULL,
  `Comment` mediumtext DEFAULT NULL,
  `RegDate` timestamp NULL DEFAULT current_timestamp(),
  `status` int(11) DEFAULT NULL,
  `CancelledBy` varchar(5) DEFAULT NULL,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblenquiry`
--

CREATE TABLE `tblenquiry` (
  `id` int(11) NOT NULL,
  `FullName` varchar(100) DEFAULT NULL,
  `EmailId` varchar(100) DEFAULT NULL,
  `MobileNumber` char(10) DEFAULT NULL,
  `Subject` varchar(100) DEFAULT NULL,
  `Description` mediumtext DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp(),
  `Status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblenquiry`
--

INSERT INTO `tblenquiry` (`id`, `FullName`, `EmailId`, `MobileNumber`, `Subject`, `Description`, `PostingDate`, `Status`) VALUES
(6, 'Tshiamo Matiza', 'tmatiza19@gmail.com', '0813556089', 'I will donate R100,000', 'I would like to donate R100 000, as I see good in the website', '2024-10-20 01:12:01', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblissues`
--

CREATE TABLE `tblissues` (
  `id` int(11) NOT NULL,
  `UserEmail` varchar(100) DEFAULT NULL,
  `Issue` varchar(100) DEFAULT NULL,
  `Description` mediumtext DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp(),
  `AdminRemark` mediumtext DEFAULT NULL,
  `AdminremarkDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblpages`
--

CREATE TABLE `tblpages` (
  `id` int(11) NOT NULL,
  `type` varchar(255) DEFAULT '',
  `detail` longtext DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblpages`
--

INSERT INTO `tblpages` (`id`, `type`, `detail`) VALUES
(1, 'terms', '																														<p align=\"justify\"><span style=\"color: rgb(153, 0, 0); font-size: small; font-weight: 700;\">Do not use foul language</span></p>\r\n										\r\n										\r\n										'),
(2, 'privacy', '<div style=\"text-align: justify;\"><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">Relax you are on in good hands thanks to AWS services</span></div>'),
(3, 'aboutus', '										<div><span style=\"color: rgb(0, 0, 0); font-family: Georgia; font-size: 15px; text-align: justify; font-weight: bold;\">Welcome to Tourism Management System!!!</span></div><span style=\"font-family: &quot;courier new&quot;;\"><span style=\"color: rgb(0, 0, 0); font-size: 15px; text-align: justify;\">Since then, our courteous and committed team members have always ensured a pleasant and enjoyable tour for the clients. This arduous effort has enabled TMS to be recognized as a dependable Travel Solutions provider with three offices Delhi.</span><span style=\"color: rgb(80, 80, 80); font-size: 13px;\">&nbsp;We have got packages to suit the discerning traveler\'s budget and savor. Book your dream vacation online. Supported quality and proposals of our travel consultants, we have a tendency to welcome you to decide on from holidays packages and customize them according to your plan.</span></span>\r\n										'),
(11, 'contact', '																														<span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Code 404, Tshwane Leadership and Management Academy, 012-232-4432</span>');

-- --------------------------------------------------------

--
-- Table structure for table `tbltourpackages`
--

CREATE TABLE `tbltourpackages` (
  `PackageId` int(11) NOT NULL,
  `PackageName` varchar(200) DEFAULT NULL,
  `PackageType` varchar(150) DEFAULT NULL,
  `PackageLocation` varchar(100) DEFAULT NULL,
  `PackagePrice` int(11) DEFAULT NULL,
  `PackageFetures` varchar(255) DEFAULT NULL,
  `PackageDetails` mediumtext DEFAULT NULL,
  `PackageImage` varchar(100) DEFAULT NULL,
  `Creationdate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `GoogleStreet` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbltourpackages`
--

INSERT INTO `tbltourpackages` (`PackageId`, `PackageName`, `PackageType`, `PackageLocation`, `PackagePrice`, `PackageFetures`, `PackageDetails`, `PackageImage`, `Creationdate`, `UpdationDate`, `GoogleStreet`) VALUES
(1, 'Union Buildings ', 'Group Package', 'Government Ave, Pretoria, 0002', 60, 'Guided tour of the Union Buildings – Round-trip transport from your hotel – Explore terraced gardens and monuments – Capture stunning views of Pretoria – Learn about South Africa’s history – Perfect for a day of sightseeing and photography', 'The Union Buildings in Pretoria are a key symbol of South Africa\'s government and history. Completed in 1913, they house the offices of the President and feature grand architecture blending Italian Renaissance and Cape Dutch styles. Set atop Meintjieskop Hill, they offer stunning views and lush terraced gardens, including the famous statue of Nelson Mandela. A popular tourist attraction, the Union Buildings are a serene spot to explore South Africa\'s political history and enjoy beautiful surroundings.', 'Union Buildings.png', '2024-07-15 05:21:58', '2024-10-26 12:23:38', 'https://www.google.com/maps/embed?pb=!4v1729945343390!6m8!1m7!1sCAoSLEFGMVFpcFBySWh5NU9sOUp1Q0JiVVZZemtGT3VrWUhmUXg3eTJOY1dTOWR2!2m2!1d-25.74223722517642!2d28.21147175718065!3f11.879823943647864!4f4.278931331935581!5f0.7820865974627469'),
(2, 'Lion and Safari Park', 'Family Package', 'R512 Pelindaba Rd, Broederstroom, 0240', 120, 'Guided game drives through Lion and Safari Park – See lions, cheetahs, zebras, and more – Experience up-close animal encounters – Feed giraffes and walk with lions – Enjoy family-friendly facilities, picnic spots, and a kids’ zone', 'The Lion and Safari Park, located just outside Johannesburg, South Africa, offers visitors an unforgettable wildlife experience. The park is home to a wide variety of animals, including lions, cheetahs, hyenas, giraffes, and zebras. Visitors can enjoy close-up encounters with these magnificent creatures through guided game drives or self-drives. For a more interactive experience, guests can walk with lions, feed giraffes, or take part in cheetah encounters. The park also features a fun kids\' zone, a restaurant, and picnic spots, making it a great destination for families and nature lovers. It’s the perfect blend of adventure and education, offering a safe environment to learn about African wildlife conservation.', 'Lion and Safari Park.jpg', '2024-07-15 05:21:58', '2024-10-26 12:14:02', 'https://www.google.com/maps/embed?pb=!4v1729944406087!6m8!1m7!1sCAoSLEFGMVFpcE1mSklYQ2hEQzFBZEc0cDNSZmNWTWZxaVZsMXJ3cVhjUkQwMmFS!2m2!1d-25.83356891419412!2d27.88766902750128!3f181.70869519937196!4f10.79192062256513!5f0.7820865974627469'),
(3, 'Pretoria Art Museum', 'Couple Package, Family Package', 'Wessels St, Arcadia, Pretoria, 0007', 120, 'Guided tour of the Pretoria Art Museum – Explore collections of South African art – View works by Pierneef, Irma Stern, and more – Enjoy temporary exhibitions and contemporary pieces – Perfect for art lovers and cultural explorers', 'The Pretoria Art Museum is a cultural gem in the heart of the city, offering visitors a rich collection of South African art from the 19th century to the present. Established in 1964, the museum showcases a variety of art forms including paintings, sculptures, ceramics, and textiles. The permanent collection features renowned South African artists such as Pierneef, Irma Stern, and Gerard Sekoto, while temporary exhibitions highlight contemporary and international works. Visitors can explore diverse artistic movements and themes, making it an educational and enriching experience for art enthusiasts. Located in Arcadia, the museum is surrounded by tranquil gardens, offering a peaceful environment to appreciate both art and nature.', 'Pretoria Art Museum.jpg', '2024-07-15 05:21:58', '2024-10-26 12:15:05', 'https://www.google.com/maps/embed?pb=!4v1729944778541!6m8!1m7!1s01mYDW2kv9n0CBW2VDgPXA!2m2!1d-25.74757982040809!2d28.2139810533941!3f182.71652011480816!4f-3.228998784042318!5f0.7820865974627469'),
(4, 'Freedom Park Heritage Site & Museum', 'Family Package', 'koch st &, 7th Ave, Salvokop, Pretoria, 0002', 90, 'Guided tour of Freedom Park – Round-trip transport from your hotel – Explore the Wall of Names and Eternal Flame – Discover South Africa’s rich heritage through museum exhibits – Enjoy panoramic city views and serene gardens – Ideal for history and cultur', 'Freedom Park Heritage Site & Museum in Pretoria is a profound cultural and historical destination that commemorates South Africa\'s struggle for freedom. Built on Salvokop Hill, it offers stunning views of the capital city. The park is a symbol of remembrance and reconciliation, honoring the country’s heroes and telling the story of its diverse heritage.\r\n\r\nKey attractions include the Wall of Names, inscribed with the names of those who sacrificed their lives in South Africa\'s liberation, and the Eternal Flame, representing the undying spirit of the nation’s heroes. The museum\'s exhibits highlight South Africa’s rich history, from pre-colonial times through to democracy. Visitors can explore peaceful gardens, water features, and sacred spaces designed for reflection, making it both an educational and deeply moving experience.', 'Freedom Park Heritage Site & Museum.png', '2024-07-15 05:21:58', '2024-10-26 12:19:44', 'https://www.google.com/maps/embed?pb=!4v1729945116731!6m8!1m7!1stMVh18MKLXaEQy1NZxoACA!2m2!1d-25.7643852809252!2d28.18649496480831!3f153.1292337118859!4f-3.176106867357518!5f0.7820865974627469'),
(5, 'Acrobranch Pretoria North', 'Family', 'Freedom Acrobranch Pretoria North', 250, 'Exciting treetop obstacle courses at Freedom Acrobranch – Multiple difficulty levels – Zip lines, high ropes, and Ebalance beams – Expert guidance for all ages – Perfect for families, thrill-seekers, and team-building – Set in beautiful Pretoria North', 'Freedom Acrobranch Pretoria North is an exciting outdoor adventure park offering treetop experiences designed for all ages. Set in the beautiful natural surroundings of Pretoria North, it features a variety of aerial obstacle courses that include zip lines, balance beams, and high ropes. These courses are categorized by difficulty, making it ideal for families, thrill-seekers, and team-building groups. Whether you’re a beginner or a seasoned adventurer, Freedom Acrobranch offers a safe and fun environment to test your limits while enjoying the beauty of nature. Expert instructors guide you throughout, ensuring both safety and an unforgettable experience. It’s perfect for adventure lovers looking for a fun day outdoors with activities that challenge both mind and body.', 'Acrobranch Pretoria North.jpg', '2024-07-15 05:21:58', '2024-10-26 12:27:49', 'https://www.google.com/maps/embed?pb=!4v1729945617370!6m8!1m7!1sCAoSLEFGMVFpcE1tZExoTjlKSHM0c2hMRzFiY1ZKTlFYdXhkYm5VS3E5UlFKRWNv!2m2!1d-25.57960916828755!2d28.19366583375794!3f58.956461835634954!4f-5.883519366951774!5f0.7820865974627469');

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `id` int(11) NOT NULL,
  `FullName` varchar(100) DEFAULT NULL,
  `MobileNumber` char(10) DEFAULT NULL,
  `EmailId` varchar(70) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `RegDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`id`, `FullName`, `MobileNumber`, `EmailId`, `Password`, `RegDate`, `UpdationDate`) VALUES
(5, 'Test', '1987894654', 'test@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2024-10-18 06:33:20', '2024-10-20 00:36:45'),
(12, 'Tshiamo Matiza', '0813556089', 'tshiamo@gmail.com', '202cb962ac59075b964b07152d234b70', '2024-10-18 19:49:04', NULL),
(13, 'Zenzo Matiza', '0813556089', 'vgp19@gmail.com', '202cb962ac59075b964b07152d234b70', '2024-10-20 00:31:35', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblbooking`
--
ALTER TABLE `tblbooking`
  ADD PRIMARY KEY (`BookingId`);

--
-- Indexes for table `tblenquiry`
--
ALTER TABLE `tblenquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblissues`
--
ALTER TABLE `tblissues`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblpages`
--
ALTER TABLE `tblpages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbltourpackages`
--
ALTER TABLE `tbltourpackages`
  ADD PRIMARY KEY (`PackageId`);

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `EmailId` (`EmailId`),
  ADD KEY `EmailId_2` (`EmailId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblbooking`
--
ALTER TABLE `tblbooking`
  MODIFY `BookingId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tblenquiry`
--
ALTER TABLE `tblenquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tblissues`
--
ALTER TABLE `tblissues`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tblpages`
--
ALTER TABLE `tblpages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbltourpackages`
--
ALTER TABLE `tbltourpackages`
  MODIFY `PackageId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
