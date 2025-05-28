-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2025 at 06:06 AM
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
-- Database: `rethinkevents`
--

-- --------------------------------------------------------

--
-- Table structure for table `campaign`
--

CREATE TABLE `campaign` (
  `campaignId` int(11) NOT NULL,
  `campaignTitle` varchar(255) DEFAULT NULL,
  `campaignSlogan` varchar(255) DEFAULT NULL,
  `campaignMedia` varchar(255) DEFAULT NULL,
  `campaignAction` varchar(255) DEFAULT NULL,
  `campaignCreatedAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `campaignUpdatedAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `campaignIdentify` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `campaign`
--

INSERT INTO `campaign` (`campaignId`, `campaignTitle`, `campaignSlogan`, `campaignMedia`, `campaignAction`, `campaignCreatedAt`, `campaignUpdatedAt`, `campaignIdentify`) VALUES
(2, ' Experience the Power of Events', 'Crafting unforgettable moments with creativity and innovation.', '2a7737cde881f399ae53554b.mp4', 'https://rethinkevents.com.bd/contact-us/', '2025-05-26 07:56:01', '2025-05-28 01:34:13', 'seA7IAAcv3yW0dTf');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `categoryId` int(11) NOT NULL,
  `categoryName` varchar(250) DEFAULT NULL,
  `categoryDescription` varchar(250) DEFAULT NULL,
  `categoryCreatedAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `categoryUpdatedAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `categoryIdentify` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categoryId`, `categoryName`, `categoryDescription`, `categoryCreatedAt`, `categoryUpdatedAt`, `categoryIdentify`) VALUES
(1, 'Corporate Events', NULL, '2025-05-23 19:47:09', '2025-05-23 19:47:09', ''),
(2, 'Entertainment Events', NULL, '2025-05-23 19:47:09', '2025-05-23 19:47:09', ''),
(3, 'Social Events', NULL, '2025-05-23 19:47:09', '2025-05-23 19:47:09', ''),
(4, 'Creative Design Services', NULL, '2025-05-23 19:47:09', '2025-05-23 19:47:09', ''),
(5, 'Sound, Light & Visual Effects', NULL, '2025-05-23 19:47:09', '2025-05-23 19:47:09', ''),
(6, 'Venue Operation & Management', NULL, '2025-05-23 19:47:09', '2025-05-23 19:47:09', ''),
(7, 'Technical Services', NULL, '2025-05-23 19:47:09', '2025-05-23 19:47:09', ''),
(8, 'Interpretation Services', NULL, '2025-05-23 19:47:09', '2025-05-23 19:47:09', '');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `clientId` int(11) NOT NULL,
  `clientName` varchar(250) DEFAULT NULL,
  `clientEmail` varchar(250) DEFAULT NULL,
  `clientMobile` varchar(20) DEFAULT NULL,
  `clientAddress` varchar(1000) DEFAULT NULL,
  `clientImage` varchar(255) DEFAULT NULL,
  `clientReference` varchar(500) DEFAULT NULL,
  `clientCreatedAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `clientUpdatedAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `clientIdentify` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`clientId`, `clientName`, `clientEmail`, `clientMobile`, `clientAddress`, `clientImage`, `clientReference`, `clientCreatedAt`, `clientUpdatedAt`, `clientIdentify`) VALUES
(1, 'Ministry Of Liberation Affairs', '', '', '', 'd320bd459e35d7b7d8f7cf2d.png', '', '2025-05-24 11:53:10', '2025-05-24 11:53:10', 'udyhCSZlMeV6ARXx'),
(2, 'Supreme Court Of Bangladesh', '', '', '', '1f463f421177292ff9048f23.png', '', '2025-05-24 11:53:32', '2025-05-24 11:53:32', 'kflDquLz5yrC1xBm'),
(3, 'Bangladesh Power Development Board', '', '', '', '09f355dd0cea23ec047c406b.png', '', '2025-05-24 11:53:58', '2025-05-24 11:53:58', 'v9I6AiPzTjZeoc54'),
(4, 'Ashuganj Power Distribute LTD', '', '', '', '9c136bf9442cd88fd21fadea.png', '', '2025-05-24 11:54:20', '2025-05-24 11:54:20', 'tzTIQnMU8nG3uHk9'),
(5, 'Food Agricultural Organization ', '', '', '', '5a211393f18aaa27067ac49e.png', '', '2025-05-24 11:54:47', '2025-05-24 11:54:47', '2OCQ7lBxs72Q9uyI'),
(6, 'IFAD', '', '', '', 'f1784117530f697647ac9dc3.png', '', '2025-05-24 11:55:06', '2025-05-24 11:55:06', 'kwdV98D3iBcjQnNU'),
(7, 'IORA', '', '', '', '30eb035d806fb76f934523f8.png', '', '2025-05-24 11:55:24', '2025-05-24 11:55:24', '8jfNezTs0SZESfjL');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `eventId` int(11) NOT NULL,
  `eventTitle` varchar(255) NOT NULL,
  `eventDescription` varchar(500) NOT NULL,
  `eventDate` timestamp NULL DEFAULT NULL,
  `location` varchar(255) NOT NULL,
  `organisedBy` varchar(255) NOT NULL,
  `eventFeatureImage` varchar(255) DEFAULT NULL,
  `eventCreatedAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `eventUpdatedAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `eventIdentify` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`eventId`, `eventTitle`, `eventDescription`, `eventDate`, `location`, `organisedBy`, `eventFeatureImage`, `eventCreatedAt`, `eventUpdatedAt`, `eventIdentify`) VALUES
(2, '12th BI-Annual Meeting of the Committee of Senior Officials (CSO)', '12th bi-annual meeting of the committee of senior officials (cso)', '2025-05-28 01:20:00', 'Hotel Royal Tulip, Cox&#39;s Bazar', 'Ministry of Foreign Affairs', '172864a4d41c853b9b6967b6.jpg', '2025-05-27 16:07:48', '2025-05-28 01:17:57', 'd2b4cd041481488d'),
(3, 'Visit Bangladesh 2022', 'visit bangladesh 2022', '2025-05-28 01:18:00', 'Dhaka to Cox&#39;s Bazar', 'Ministry of Foreign Affairs', 'f79a37fb14ddf6b7081b7597.jpg', '2025-05-27 16:07:48', '2025-05-28 01:19:03', '371f99030df24a9b'),
(4, 'Visit Bangladesh 2022', 'visit bangladesh 2022', '2025-05-28 01:19:00', 'Dhaka to Cox&#39;s Bazar', 'Ministry of Foreign Affairs', 'ffe7cca130a3aedb820a5b04.jpg', '2025-05-27 16:07:48', '2025-05-28 01:19:53', 'a46131aad0aa42f3'),
(5, '22nd Meeting of the IORA Council of Ministers (COM) &#38; 24th Meeting of the IORA Committee of Senior Officials (CSO)', '22nd meeting of the iora council of ministers (com) &#38; 24th meeting of the iora committee of senior officials (cso)', '2025-05-28 01:20:00', 'Hotel InterContinental, Dhaka', 'Ministry of Foreign Affairs', '25491af05c2bd0eaed435d2c.jpg', '2025-05-27 16:07:48', '2025-05-28 01:20:41', 'd5c171ec2faf4ca7'),
(6, 'Ninth Intergovernmental Session of the IOC Regional Committee for the Central Indian Ocean (IOCINDIO-IX)', 'ninth intergovernmental session of the ioc regional committee for the central indian ocean (iocindio-ix)', '2025-05-29 01:22:00', 'Hotel InterContinental, Dhaka', 'Ministry of Foreign Affairs', 'c1cd7bff1f7c4e3cbf559ac4.jpg', '2025-05-27 16:07:48', '2025-05-28 01:22:28', '757e407fb7e54039'),
(7, 'Palm Leaf Scroll Painting Revival Exhibition', 'palm leaf scroll painting revival exhibition', '2025-05-29 01:30:00', 'Bangladesh National Museum', 'Shaheed Colonel Jamil Foundation', '39798b16de1ac7a89a999568.jpg', '2025-05-27 16:07:48', '2025-05-28 01:30:08', 'e14a2b8bc81841b2'),
(8, 'Committee of Senior Officials (CSO) IORA Meeting', 'committee of senior officials (cso) iora meeting', '2025-05-29 01:23:00', 'Hotel Grand Sylhet, Sylhet', 'Ministry of Foreign Affairs', '148af3ee7a5d4bee40c6f838.jpg', '2025-05-27 16:07:48', '2025-05-28 01:23:39', '5d4077ebf7b04271'),
(9, 'CICA Workshop On Ecosystem Restoration in the context of climate and other Vulnerability', 'cica workshop on ecosystem restoration in the context of climate and other vulnerability', '2025-05-31 01:30:00', 'Department of Environment, Agargaon, Dhaka', 'Ministry of Environment, Forest and Climate Change', '7ec2a20fd5a8efa27a6ba607.mp4', '2025-05-27 16:07:48', '2025-05-28 01:30:21', '563647022820483c'),
(10, 'Poila Boishakh 1426', 'poila boishakh 1426', '2025-05-28 01:25:00', 'Padma, Baily Road', 'Ministry of Foreign Affairs', '37fdb850d53c487ec5713035.jpg', '2025-05-27 16:07:48', '2025-05-28 01:25:25', '26a37311cae84085'),
(11, 'Poila Boishakh 1426', 'poila boishakh 1426', '2025-05-28 01:26:00', 'Padma, Baily Road', 'Ministry of Foreign Affairs', 'b1d7d3069859f2221af39fdf.jpg', '2025-05-27 16:07:48', '2025-05-28 01:26:33', '84d9cedc5c614a0c'),
(12, 'Poila Boishakh 1426', 'poila boishakh 1426', '2025-05-28 01:27:00', 'Padma, Baily Road', 'Ministry of Foreign Affairs', '1bfc6220ef6d0f90550931e3.jpg', '2025-05-27 16:07:48', '2025-05-28 01:27:27', 'aafd54efc8284ab4'),
(13, 'Bangladesh Agricultural Investment Forum 2023', 'bangladesh agricultural investment forum 2023', '2025-05-31 01:31:00', 'Hotel InterContinental, Dhaka', 'Food Agricultural Organization (FAO)', '2399bf3467cad554425f15c3.mp4', '2025-05-27 16:07:48', '2025-05-28 01:31:54', '083c51f1236b4d5e'),
(14, 'Bangladesh Agricultural Investment Forum 2023', 'bangladesh agricultural investment forum 2023', '2025-05-31 01:32:00', 'Hotel InterContinental, Dhaka', 'Food Agricultural Organization (FAO)', '9d5b60825ef1a2fa90e1a8c8.mp4', '2025-05-27 16:07:48', '2025-05-28 01:32:09', '194eee5e20d745c4'),
(15, 'Boshakhi Event 1431', 'boshakhi event 1431', '2025-05-31 01:32:00', 'UN Office, Banani, Dhaka', 'Food Agricultural Organization (FAO)', '51e2ddad4e2d457c0bb3ddd0.mp4', '2025-05-27 16:07:48', '2025-05-28 01:32:23', '9bdbfa12c0bf4dc3');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `galleryId` int(11) NOT NULL,
  `galleryMedia` varchar(255) DEFAULT NULL,
  `caption` varchar(255) DEFAULT NULL,
  `eventId` int(11) NOT NULL,
  `galleryCreatedAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `galleryUpdatedAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `galleryIdentify` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`galleryId`, `galleryMedia`, `caption`, `eventId`, `galleryCreatedAt`, `galleryUpdatedAt`, `galleryIdentify`) VALUES
(1, '8f85a4983fdd9e34e9618d1a.jpg', 'abc', 2, '2025-05-28 02:22:41', '2025-05-28 02:22:41', 'QZCFFSbMow1gmSoL'),
(2, '5bb0d202ed72460be92263bd.jpg', '', 2, '2025-05-28 02:27:00', '2025-05-28 02:27:00', 'LyfuBcQT4VyTGeE7');

-- --------------------------------------------------------

--
-- Table structure for table `leads`
--

CREATE TABLE `leads` (
  `leadId` int(11) NOT NULL,
  `clientName` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `notes` varchar(1000) DEFAULT NULL,
  `interestedIn` enum('Events','Printing','Interior','General') DEFAULT NULL,
  `status` enum('new','') DEFAULT NULL,
  `leadCreatedAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `leadUpdatedAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `leadIdentify` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `serviceId` int(11) NOT NULL,
  `serviceTitle` varchar(250) NOT NULL,
  `serviceCategory` int(11) NOT NULL,
  `serviceType` enum('Events','Printing','Interior','General') NOT NULL,
  `description` varchar(1100) NOT NULL,
  `serviceImage` varchar(255) NOT NULL,
  `serviceCreatedAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `serviceUpdatedAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `serviceIdentify` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `settingId` int(11) NOT NULL,
  `settingKey` varchar(250) DEFAULT NULL,
  `settingValue` varchar(250) DEFAULT NULL,
  `settingCreatedAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `settingUpdatedAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `settingIdentify` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `teamId` int(11) NOT NULL,
  `memberName` varchar(250) DEFAULT NULL,
  `designation` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `mobile` varchar(250) DEFAULT NULL,
  `profileImage` varchar(255) DEFAULT NULL,
  `bio` varchar(500) DEFAULT NULL,
  `teamCreatedAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `teamUpdatedAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `teamIdentify` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`teamId`, `memberName`, `designation`, `email`, `mobile`, `profileImage`, `bio`, `teamCreatedAt`, `teamUpdatedAt`, `teamIdentify`) VALUES
(1, 'M A Rahman', 'CEO', 'admin@rethinkevents.com.bd', '0123456789', 'a7cb97d0a855ebb921caaf09.png', 'I am the ceo of rethinkevents', '2025-05-24 01:25:53', '2025-05-24 01:25:53', 'n27tMc17kTmy4B9Y'),
(2, 'Sohail Anwar', 'Director Creative', '', '', 'dac74c3168ed93bb655ee5f8.png', '', '2025-05-24 01:26:35', '2025-05-24 01:26:35', 'i2Q6rw5m3xcPd2ym'),
(3, 'Noor Uddin Faruq Shuvo', '3D Designer &#38; Visualizer', '', '', 'db3e4c7563f7296fb7a0bb0c.png', '', '2025-05-24 01:27:09', '2025-05-24 01:27:09', 'DuiZ6siQSS92dKM0'),
(4, 'MMH Qadir', 'Manager ', '', '', 'e307806befeffbf69919cf04.png', '', '2025-05-24 01:27:50', '2025-05-24 01:27:50', 'zoHCjZOKafWpiPp9'),
(5, 'Rezuoan Mahmud', 'Architect Engineer', '', '', 'ba0a0b6a1e2896c95d55bc1d.png', '', '2025-05-24 01:28:29', '2025-05-24 01:28:29', 'R3qfccxtk6SQenS7'),
(6, 'Junaid Eusuf', 'Scenographer', '', '', 'f80f24c8b6b7cb986ac7f149.png', '', '2025-05-24 01:28:57', '2025-05-24 01:28:57', 'Z38WkuPjZxSl6ghT'),
(7, 'Taoheed ul Islam ', 'Coordinator', '', '', 'ac23ae2ec146c1f8615ad516.png', '', '2025-05-24 01:29:26', '2025-05-24 01:29:26', '96ehGxytk6YJfYGi'),
(8, 'Shuvo Kumar Shill', 'ICT Support', '', '', 'daa85f13010fc56757e00ae9.png', '', '2025-05-24 01:29:55', '2025-05-24 01:29:55', 'Xpufx4nwxfCIz3vS'),
(9, 'Safayat H. Srabon', 'Head of Event', '', '', '414567d0ac730141773202b0.png', '', '2025-05-24 01:30:24', '2025-05-24 01:30:24', 'CnNi289870Q3kgyO'),
(10, 'Abdullah Al Razib', 'Graphics Designer', '', '', '7d3fe68d3c6ac1a220c40c3a.png', '', '2025-05-24 01:30:55', '2025-05-24 01:30:55', 'FMDP0Rl3U3EPBcnB'),
(11, 'Aslam Hoassin', 'Graphics Designer', '', '', 'e910ef358fb775e7f8687ed3.png', '', '2025-05-24 01:31:21', '2025-05-24 01:31:21', 'OifBJPK1veWMhE7S');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `testimonialId` int(11) NOT NULL,
  `clientName` varchar(250) DEFAULT NULL,
  `clientCompany` varchar(250) DEFAULT NULL,
  `testimonialText` varchar(1000) DEFAULT NULL,
  `clientImage` varchar(255) DEFAULT NULL,
  `testimonialCreatedAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `testimonialUpdatedAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `testimonialIdentify` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `userAltName` varchar(50) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `userEmail` varchar(100) DEFAULT NULL,
  `passwordHash` varchar(255) DEFAULT NULL,
  `userRole` enum('admin','client','manager') DEFAULT 'client',
  `permissions` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`permissions`)),
  `lastLoginAt` datetime DEFAULT NULL,
  `createdAt` datetime DEFAULT current_timestamp(),
  `updatedAt` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `userAltName`, `name`, `userEmail`, `passwordHash`, `userRole`, `permissions`, `lastLoginAt`, `createdAt`, `updatedAt`) VALUES
(1, 'admin_ahad', 'Ahad Ul Amin', 'kaiidenaadhil@gmail.com', '$2y$10$LtIV4eNyYfK/aPKuVZM7tudDlGeRaYgbBUP4B4i1b2GbYlo5vD9EC', 'admin', NULL, '2025-05-26 13:20:03', '2025-04-28 12:06:42', '2025-05-26 13:20:03'),
(2, 'client_sara', 'Sara Khan', 'sara@client.com', 'hash_sara', 'client', NULL, NULL, '2025-04-28 12:06:42', '2025-04-28 12:06:42'),
(3, 'manager_ali', 'Ali Hassan', 'ali@agency.com', 'hash_ali', 'manager', NULL, NULL, '2025-04-28 12:06:42', '2025-04-28 12:06:42'),
(4, 'client_maria', 'Maria Lopez', 'maria@client.com', 'hash_maria', 'client', NULL, NULL, '2025-04-28 12:06:42', '2025-04-28 12:06:42'),
(5, 'client_john', 'John Doe', 'john@client.com', 'hash_john', 'client', NULL, NULL, '2025-04-28 12:06:42', '2025-04-28 12:06:42'),
(6, 'client_emily', 'Emily Stone', 'emily@client.com', 'hash_emily', 'client', NULL, NULL, '2025-04-28 12:06:42', '2025-04-28 12:06:42'),
(7, 'admin_david', 'David Warner', 'david@agency.com', 'hash_david', 'admin', NULL, NULL, '2025-04-28 12:06:42', '2025-04-28 12:06:42'),
(8, 'client_zoe', 'Zoe Clark', 'zoe@client.com', 'hash_zoe', 'client', NULL, NULL, '2025-04-28 12:06:42', '2025-04-28 12:06:42'),
(9, 'manager_kamal', 'Kamal Uddin', 'kamal@agency.com', 'hash_kamal', 'manager', NULL, NULL, '2025-04-28 12:06:42', '2025-04-28 12:06:42'),
(10, 'client_ryan', 'Ryan Smith', 'ryan@client.com', 'hash_ryan', 'client', NULL, NULL, '2025-04-28 12:06:42', '2025-04-28 12:06:42'),
(11, 'client_hannah', 'Hannah Green', 'hannah@client.com', 'hash_hannah', 'client', NULL, NULL, '2025-04-28 12:06:42', '2025-04-28 12:06:42'),
(12, 'client_oliver', 'Oliver Twist', 'oliver@client.com', 'hash_oliver', 'client', NULL, NULL, '2025-04-28 12:06:42', '2025-04-28 12:06:42'),
(13, 'client_nora', 'Nora White', 'nora@client.com', 'hash_nora', 'client', NULL, NULL, '2025-04-28 12:06:42', '2025-04-28 12:06:42'),
(14, 'admin_simon', 'Simon Peter', 'simon@agency.com', 'hash_simon', 'admin', NULL, NULL, '2025-04-28 12:06:42', '2025-04-28 12:06:42'),
(15, 'client_lucas', 'Lucas Adams', 'lucas@client.com', 'hash_lucas', 'client', NULL, NULL, '2025-04-28 12:06:42', '2025-04-28 12:06:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `campaign`
--
ALTER TABLE `campaign`
  ADD PRIMARY KEY (`campaignId`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categoryId`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`clientId`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`eventId`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`galleryId`),
  ADD KEY `eventId` (`eventId`);

--
-- Indexes for table `leads`
--
ALTER TABLE `leads`
  ADD PRIMARY KEY (`leadId`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`serviceId`),
  ADD KEY `serviceCategory` (`serviceCategory`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`settingId`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`teamId`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`testimonialId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`),
  ADD UNIQUE KEY `userAltName` (`userAltName`),
  ADD UNIQUE KEY `email` (`userEmail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `campaign`
--
ALTER TABLE `campaign`
  MODIFY `campaignId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `categoryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `clientId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `eventId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `galleryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `leads`
--
ALTER TABLE `leads`
  MODIFY `leadId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `serviceId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `settingId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `teamId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `testimonialId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `galleries`
--
ALTER TABLE `galleries`
  ADD CONSTRAINT `galleries_ibfk_1` FOREIGN KEY (`eventId`) REFERENCES `events` (`eventId`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
