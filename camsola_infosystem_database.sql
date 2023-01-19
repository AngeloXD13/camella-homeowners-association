-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2023 at 10:16 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `camsola_infosystem_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `t1_adminusers`
--

CREATE TABLE `t1_adminusers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `t1_adminusers`
--

INSERT INTO `t1_adminusers` (`id`, `username`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$10$Rs7HN/kEgFqvtu28SAKypOrgQhfjn4QweN3xf7wT5bxPkH0uOcb4i', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t2_boardofdirector`
--

CREATE TABLE `t2_boardofdirector` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hoa_id` bigint(20) UNSIGNED DEFAULT NULL,
  `username` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `middleinitial` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(320) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phonenumber` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tag` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remarks` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bod_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `t2_boardofdirector`
--

INSERT INTO `t2_boardofdirector` (`id`, `hoa_id`, `username`, `firstname`, `middleinitial`, `lastname`, `email`, `phonenumber`, `password`, `position`, `tag`, `remarks`, `bod_image`, `created_at`, `updated_at`) VALUES
(1, NULL, 'iskothepusa', 'Isko', 'B', 'Dionisio', 'isko@gmail.com', '09123456781', '$2y$10$7rnw9sH32lCD6ZziR1qtnu3Jzzdxq4QXSDwDaQUPeNoNmSO8kAO/i', 'PROGRAMMER', 'Active', 'PUSA', '/images/pusa.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t3_boardofdirector_role`
--

CREATE TABLE `t3_boardofdirector_role` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `director_id` bigint(20) UNSIGNED NOT NULL,
  `m_announcements` int(11) NOT NULL DEFAULT 0,
  `m_hoaMembers` int(11) NOT NULL DEFAULT 0,
  `m_infos` int(11) NOT NULL DEFAULT 0,
  `m_complaints` int(11) NOT NULL DEFAULT 0,
  `m_requests` int(11) NOT NULL DEFAULT 0,
  `m_gallery` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `t3_boardofdirector_role`
--

INSERT INTO `t3_boardofdirector_role` (`id`, `director_id`, `m_announcements`, `m_hoaMembers`, `m_infos`, `m_complaints`, `m_requests`, `m_gallery`, `created_at`, `updated_at`) VALUES
(1, 1, 0, 0, 0, 0, 0, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t4_announcements`
--

CREATE TABLE `t4_announcements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subject` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `director_id` bigint(20) UNSIGNED DEFAULT NULL,
  `severity` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tag` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `t4_announcements`
--

INSERT INTO `t4_announcements` (`id`, `subject`, `description`, `director_id`, `severity`, `tag`, `status`, `created_at`, `updated_at`) VALUES
(14, 'Complaints about Pets', 'TO:  OUR VALUED HOMEOWNERS,\r\n\r\nGood day!\r\n\r\nConsidering the recent increase in the number of complaints concerning the stray dogs and cats inside the Subdivision, we encourage every pet owner in our community to abide the Board Resolution No. 2018-02 (Resolution Adopting Subdivision Rules and Regulations for Camella Solamente Homeowners’ Association, Inc.) the pertinent provisions of which read as follows:\r\n\r\nPETS\r\n1.      All Homeowners / Tenants / Occupants with pets should apply and register with the Administration Office for a permit to keep their pets in their respective units.  Pets shall be limited to small house broken animals.  For each unit, pets should not be more than two (2) dogs and/or one (1) cat, a reasonable number of birds and aquarium fish.  For pet dogs and cat, there must be proof that these have received at least anti-rabies and distemper shots, and such shots must be administered annually for as long as the pets stay in their owner’s unit.\r\n2.      Pets should be kept within the confines of the owner’s unit.  They are not permitted in the common areas and facilities.  Whenever taken out of the unit, pets must be secured with a leash.\r\n3.      The owners of pets should be held responsible for any injury, which may be caused by their pets to any person or property.\r\n4.      The owners of pets should be responsible for cleaning dirt or spoilage caused by their pets in the common areas and facilities.\r\n5.      The Homeowners’ Association should have the discretion to prohibit the retention in any unit of any pet, which he finds to be potentially dangerous, or a nuisance to the subdivision residents.\r\n6.      Barking dogs should be controlled by the animal’s owner.  Complaints received by the Property Manager regarding a barking dog could result in removal of the dog at the owner’s expense.\r\n7.      No Pets of Non-Resident Homeowners shall be allowed within the subdivision.\r\n8.    Pets roaming around the subdivision shall be considered as strayed and shall be impounded.  The impounded pet shall be contained without food and drinks.  Owners failing to claim their pets within three (3) days shall lose the rest to the City Pound Office.  An amount of Php 300.00 shall be fined to the owner payable to the Homeowner’s Association if claimed within three (3) days.  After three (3) days, charges will be depending on the City Pound Office.\r\n\r\nIn accordance with the provisions of Board Resolution No. 2018-02 quoted above:\r\n1.      Pets must be appropriately vaccinated and should be kept inside their cage, or confines of the owner’s property to prevent injury to other people. Keep your pet on leash unless whenever taken out of their cage or your property’s fence.\r\n2.      Pick up after your pets. Always carry litter bag with you on walks to clean your pets’ mess immediately. Let us keep our neighbourhood clean.\r\n3.      Keep your dog from barking excessively. Constant barking often signifies boredom. If your dog’s a barker, try to determine the cause. Barking dogs must be controllable by the owner.\r\n\r\nPets are family. Let’s all be responsible pet owners.\r\nThank you and God bless.', 1, 'high', 'public', 'active', '2022-11-28 02:40:03', '2022-11-28 02:40:03'),
(15, 'Volleyball Tournament', 'Final Registration', 1, 'high', 'public', 'active', '2022-11-28 03:04:08', '2022-11-28 03:04:08'),
(16, 'Christmas League Bastketball', '', 1, 'high', 'public', 'active', '2022-11-28 03:06:51', '2022-11-28 03:06:51'),
(17, 'Basketball Rules And Regulation', '', 1, 'high', 'public', 'active', '2022-11-28 03:08:06', '2022-11-28 03:08:06'),
(18, 'Creating annoouncements', 'details', 1, 'high', 'public', 'active', '2022-12-01 19:33:32', '2022-12-01 19:33:32'),
(19, 'testing subject 2', 'description', 1, 'high', 'public', 'active', '2022-12-01 19:58:55', '2022-12-01 19:58:55');

-- --------------------------------------------------------

--
-- Table structure for table `t5_announcements_file`
--

CREATE TABLE `t5_announcements_file` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `announcement_id` bigint(20) UNSIGNED NOT NULL,
  `type` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `filedirectory` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tag` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remarks` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `t5_announcements_file`
--

INSERT INTO `t5_announcements_file` (`id`, `announcement_id`, `type`, `title`, `filename`, `filedirectory`, `tag`, `status`, `remarks`, `created_at`, `updated_at`) VALUES
(9, 15, 'image/jpeg', '317101747_1138633293714163_5769012042623624542_n.jpg', 'announcement_15_0_1669633448.jpeg', 'annoucement_images', 'maximized', NULL, NULL, '2022-11-28 03:04:08', '2022-11-28 03:04:08'),
(10, 15, 'image/jpeg', '316826653_495903735840234_9218747835681938159_n.jpg', 'announcement_15_1_1669633448.jpeg', 'annoucement_images', 'maximized', NULL, NULL, '2022-11-28 03:04:08', '2022-11-28 03:04:08'),
(11, 16, 'image/jpeg', '317017134_1135689463973461_8985390448298665301_n.jpg', 'announcement_16_0_1669633611.jpeg', 'annoucement_images', 'maximized', NULL, NULL, '2022-11-28 03:06:51', '2022-11-28 03:06:51'),
(12, 16, 'image/jpeg', '317129023_1247883595941287_9218345908735809359_n (1).jpg', 'announcement_16_1_1669633611.jpeg', 'annoucement_images', 'maximized', NULL, NULL, '2022-11-28 03:06:51', '2022-11-28 03:06:51'),
(13, 16, 'image/jpeg', '316855240_4038708583020441_2042511022962241985_n (1).jpg', 'announcement_16_2_1669633611.jpeg', 'annoucement_images', 'maximized', NULL, NULL, '2022-11-28 03:06:51', '2022-11-28 03:06:51'),
(14, 16, 'image/jpeg', '316161997_1022237872065458_8594613192314318162_n.jpg', 'announcement_16_3_1669633611.jpeg', 'annoucement_images', 'maximized', NULL, NULL, '2022-11-28 03:06:51', '2022-11-28 03:06:51'),
(15, 17, 'image/jpeg', '316965890_1156683345235356_1846892445091625673_n.jpg', 'announcement_17_0_1669633686.jpeg', 'annoucement_images', 'maximized', NULL, NULL, '2022-11-28 03:08:07', '2022-11-28 03:08:07'),
(16, 18, 'image/png', 'Camsola HOA Info System Blueprint - ERD (1).png', 'announcement_18_0_1669952012.png', 'annoucement_images', 'maximized', NULL, NULL, '2022-12-01 19:33:32', '2022-12-01 19:33:32'),
(17, 19, 'image/jpeg', '317101747_1138633293714163_5769012042623624542_n.jpg', 'announcement_19_0_1669953535.jpeg', 'annoucement_images', 'maximized', NULL, NULL, '2022-12-01 19:58:55', '2022-12-01 19:58:55');

-- --------------------------------------------------------

--
-- Table structure for table `t6_information_category`
--

CREATE TABLE `t6_information_category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `t6_information_category`
--

INSERT INTO `t6_information_category` (`id`, `title`, `tag`, `status`, `parameters`) VALUES
(1, 'BOD Members', 'public', 'active', ''),
(2, 'Committee', 'public', 'active', ''),
(3, 'Hoa Management Personel', 'public', 'active', ''),
(4, 'Service and Amenities', 'public', 'active', ''),
(5, 'Projects', 'public', 'active', ''),
(6, 'Vicinity_Map', 'public', 'active', ''),
(7, 'Gallery', 'public', 'active', ''),
(8, 'Forms', 'public', 'active', '');

-- --------------------------------------------------------

--
-- Table structure for table `t7_information_content`
--

CREATE TABLE `t7_information_content` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `i_catergory_id` bigint(20) UNSIGNED DEFAULT NULL,
  `heading1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `heading2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `heading3` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `heading4` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `heading5` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tag` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remarks` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `t7_information_content`
--

INSERT INTO `t7_information_content` (`id`, `i_catergory_id`, `heading1`, `heading2`, `heading3`, `heading4`, `heading5`, `tag`, `status`, `remarks`, `created_at`, `updated_at`) VALUES
(1, 1, 'Angelo Dionisio', 'Lead Programmer', 'angelo.dionisio09@gmail.com', '09284968761', '', NULL, NULL, NULL, '2022-11-20 23:25:38', '2022-11-28 01:45:11'),
(2, 1, 'Jovet Catapang', 'Project Leader', '20-00818@g.batstate-u.edu.ph', '09123456789', '', NULL, NULL, NULL, '2022-11-21 01:05:22', '2022-11-21 01:05:22'),
(3, 1, 'Jasmin Encarnacion', 'Project Designer', '20-08148@g.batstate-u.edu.ph', '09123456789', '', NULL, NULL, NULL, '2022-11-21 01:07:03', '2022-11-21 01:07:03'),
(4, 1, 'Ruzel Alvaira', 'Project Documentator', '20-05353@g.batstate-u.edu.ph', '09123456789', '', NULL, NULL, NULL, '2022-11-21 01:08:13', '2022-11-21 01:08:13'),
(5, 1, 'Charlene Eugenio Maderazo', 'Project Analyst', '20-02697@g.batstate-u.edu.ph', '09123456789', '', NULL, NULL, NULL, '2022-11-21 01:09:40', '2022-11-21 01:09:40'),
(6, 1, 'Jasmil Rose Guban', 'Project Programmer Assistant', '20-05731@g.batstate-u.edu.ph', '09123456789', '', NULL, NULL, NULL, '2022-11-21 01:11:43', '2022-11-28 01:44:04'),
(8, 2, 'AUDIT & INVENTORY', 'MADEL CRUZ\r\nGIL BRYAN ONG', '', '', '', NULL, NULL, NULL, '2022-11-22 00:28:54', '2022-11-28 03:11:27'),
(9, 2, 'DEVELOPMENT & SERVICES', 'BERNA TARGA\r\nEDELWEISS DE CASTRO\r\nMARY SOR BATIANCILA', '', '', '', NULL, NULL, NULL, '2022-11-28 03:12:36', '2022-11-28 03:12:36'),
(10, 2, 'FINANCIAL MANAGEMENT', 'JAMIE LIMBO\r\nARVIN ILAGAN', '', '', '', NULL, NULL, NULL, '2022-11-28 03:13:06', '2022-11-28 03:13:06'),
(12, 2, 'MAINTENANCE COMMITTEE', 'RIZZA ORACIO\r\nAMPHY SUYANG\r\nNELMARIO PASAHOL\r\nLYDIA CALINGASAN\r\nMARIAN REMO\r\nAMILIA SARDUA\r\nGRACE DACANAY', '', '', '', NULL, NULL, NULL, '2022-11-28 03:14:21', '2022-11-28 03:14:21'),
(13, 2, 'PEACE & ORDER COMMITTEE', 'SAMUEL CALLADO\r\nJAY CASTILLO\r\nLUCKY R. ADARIO\r\nWILLIAM VITUG', '', '', '', NULL, NULL, NULL, '2022-11-28 03:14:48', '2022-11-28 03:14:48');

-- --------------------------------------------------------

--
-- Table structure for table `t8_information_file`
--

CREATE TABLE `t8_information_file` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `i_content_id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `filedirectory` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remarks` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `t8_information_file`
--

INSERT INTO `t8_information_file` (`id`, `i_content_id`, `type`, `title`, `filename`, `filedirectory`, `tag`, `status`, `remarks`, `created_at`, `updated_at`) VALUES
(1, 1, 'image/jpeg', '72685288_488029455260934_1180820834772582400_n (2).jpg', 'information_1_0_1669015538.jpeg', 'information_images', NULL, NULL, NULL, '2022-11-20 23:25:38', '2022-11-20 23:25:38'),
(2, 2, 'image/jpeg', 'jovetpic.jpg', 'information_2_0_1669021522.jpeg', 'information_images', NULL, NULL, NULL, '2022-11-21 01:05:22', '2022-11-21 01:05:22'),
(3, 3, 'image/jpeg', 'jasminpic.jpg', 'information_3_0_1669021623.jpeg', 'information_images', NULL, NULL, NULL, '2022-11-21 01:07:03', '2022-11-21 01:07:03'),
(4, 4, 'image/jpeg', 'ruzelpic.jpg', 'information_4_0_1669021693.jpeg', 'information_images', NULL, NULL, NULL, '2022-11-21 01:08:13', '2022-11-21 01:08:13'),
(5, 5, 'image/jpeg', 'charlenepic.jpg', 'information_5_0_1669021780.jpeg', 'information_images', NULL, NULL, NULL, '2022-11-21 01:09:40', '2022-11-21 01:09:40'),
(6, 6, 'image/jpeg', 'jasmilpic.jpg', 'information_6_0_1669021903.jpeg', 'information_images', NULL, NULL, NULL, '2022-11-21 01:11:43', '2022-11-21 01:11:43');

-- --------------------------------------------------------

--
-- Table structure for table `t9_hoamember`
--

CREATE TABLE `t9_hoamember` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `FirstName` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `LastName` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(320) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PhoneNumber` int(11) DEFAULT NULL,
  `Password` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tag` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Status` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Remarks` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t10_hoamember_personalinfo`
--

CREATE TABLE `t10_hoamember_personalinfo` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hoa_id` bigint(20) UNSIGNED NOT NULL,
  `Status` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Remarks` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t11_hoamember_files`
--

CREATE TABLE `t11_hoamember_files` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hoa_id` bigint(20) UNSIGNED NOT NULL,
  `Type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Filename` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `FileDirectory` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `DateUploaded` datetime NOT NULL,
  `Tag` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Status` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Remarks` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t12_complaints_thread`
--

CREATE TABLE `t12_complaints_thread` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Subject` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `DatePosted` datetime NOT NULL,
  `hoa_id` bigint(20) UNSIGNED NOT NULL,
  `Severity` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tag` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t13_complaints_message`
--

CREATE TABLE `t13_complaints_message` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `c_thread_id` bigint(20) UNSIGNED NOT NULL,
  `Send_Date` datetime NOT NULL,
  `Body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `hoa_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t14_complaints_thread_participant`
--

CREATE TABLE `t14_complaints_thread_participant` (
  `c_thread_id` bigint(20) UNSIGNED NOT NULL,
  `hoa_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t15_complaints_files`
--

CREATE TABLE `t15_complaints_files` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `c_message_id` bigint(20) UNSIGNED NOT NULL,
  `Type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Filename` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `FileDirectory` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `DateUploaded` datetime NOT NULL,
  `Tag` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Remarks` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t16_request`
--

CREATE TABLE `t16_request` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hoa_id` bigint(20) UNSIGNED NOT NULL,
  `Type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Subject` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Body` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Heading1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Heading2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Heading3` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Heading4` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Heading5` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DatePosted` datetime NOT NULL,
  `Tag` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Remarks` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t17_request_reply`
--

CREATE TABLE `t17_request_reply` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `req_id` bigint(20) UNSIGNED NOT NULL,
  `Date` datetime NOT NULL,
  `Message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `director_id` bigint(20) UNSIGNED NOT NULL,
  `Tag` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Remarks` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t18_request_files`
--

CREATE TABLE `t18_request_files` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `req_id` bigint(20) UNSIGNED NOT NULL,
  `Type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Filename` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `FileDirectory` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `DateUploaded` datetime NOT NULL,
  `Tag` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Remarks` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t1_adminusers`
--
ALTER TABLE `t1_adminusers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t2_boardofdirector`
--
ALTER TABLE `t2_boardofdirector`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phonenumber` (`phonenumber`),
  ADD KEY `t2_boardofdirector_ibfk_1` (`hoa_id`);

--
-- Indexes for table `t3_boardofdirector_role`
--
ALTER TABLE `t3_boardofdirector_role`
  ADD PRIMARY KEY (`id`),
  ADD KEY `t3_boardofdirector_role_ibfk_1` (`director_id`);

--
-- Indexes for table `t4_announcements`
--
ALTER TABLE `t4_announcements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `t4_announcements_ibfk_1` (`director_id`);

--
-- Indexes for table `t5_announcements_file`
--
ALTER TABLE `t5_announcements_file`
  ADD PRIMARY KEY (`id`),
  ADD KEY `t5_announcements_file_ibfk_1` (`announcement_id`);

--
-- Indexes for table `t6_information_category`
--
ALTER TABLE `t6_information_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t7_information_content`
--
ALTER TABLE `t7_information_content`
  ADD PRIMARY KEY (`id`),
  ADD KEY `t7_information_content_ibfk_1` (`i_catergory_id`);

--
-- Indexes for table `t8_information_file`
--
ALTER TABLE `t8_information_file`
  ADD PRIMARY KEY (`id`),
  ADD KEY `t8_information_file_ibfk_1` (`i_content_id`);

--
-- Indexes for table `t9_hoamember`
--
ALTER TABLE `t9_hoamember`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`Email`),
  ADD UNIQUE KEY `phonenumber` (`PhoneNumber`);

--
-- Indexes for table `t10_hoamember_personalinfo`
--
ALTER TABLE `t10_hoamember_personalinfo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `t10_hoamember_personalinfo_hoa_id_foreign` (`hoa_id`);

--
-- Indexes for table `t11_hoamember_files`
--
ALTER TABLE `t11_hoamember_files`
  ADD PRIMARY KEY (`id`),
  ADD KEY `t11_hoamember_files_ibfk_1` (`hoa_id`);

--
-- Indexes for table `t12_complaints_thread`
--
ALTER TABLE `t12_complaints_thread`
  ADD PRIMARY KEY (`id`),
  ADD KEY `t12_complaints_thread_ibfk_1` (`hoa_id`);

--
-- Indexes for table `t13_complaints_message`
--
ALTER TABLE `t13_complaints_message`
  ADD PRIMARY KEY (`id`),
  ADD KEY `t13_complaints_message_ibfk_1` (`c_thread_id`),
  ADD KEY `t13_complaints_message_ibfk_2` (`hoa_id`);

--
-- Indexes for table `t14_complaints_thread_participant`
--
ALTER TABLE `t14_complaints_thread_participant`
  ADD KEY `t14_complaints_thread_participant_ibfk_1` (`c_thread_id`),
  ADD KEY `t14_complaints_thread_participant_ibfk_2` (`hoa_id`);

--
-- Indexes for table `t15_complaints_files`
--
ALTER TABLE `t15_complaints_files`
  ADD PRIMARY KEY (`id`),
  ADD KEY `t15_complaints_files_ibfk_1` (`c_message_id`);

--
-- Indexes for table `t16_request`
--
ALTER TABLE `t16_request`
  ADD PRIMARY KEY (`id`),
  ADD KEY `t16_request_ibfk_1` (`hoa_id`);

--
-- Indexes for table `t17_request_reply`
--
ALTER TABLE `t17_request_reply`
  ADD PRIMARY KEY (`id`),
  ADD KEY `t17_request_reply_ibfk_1` (`req_id`),
  ADD KEY `t17_request_reply_director_id_foreign` (`director_id`);

--
-- Indexes for table `t18_request_files`
--
ALTER TABLE `t18_request_files`
  ADD PRIMARY KEY (`id`),
  ADD KEY `t18_request_files_ibfk_1` (`req_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t1_adminusers`
--
ALTER TABLE `t1_adminusers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `t2_boardofdirector`
--
ALTER TABLE `t2_boardofdirector`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `t3_boardofdirector_role`
--
ALTER TABLE `t3_boardofdirector_role`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `t4_announcements`
--
ALTER TABLE `t4_announcements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `t5_announcements_file`
--
ALTER TABLE `t5_announcements_file`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `t6_information_category`
--
ALTER TABLE `t6_information_category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `t7_information_content`
--
ALTER TABLE `t7_information_content`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `t8_information_file`
--
ALTER TABLE `t8_information_file`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `t9_hoamember`
--
ALTER TABLE `t9_hoamember`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t10_hoamember_personalinfo`
--
ALTER TABLE `t10_hoamember_personalinfo`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t11_hoamember_files`
--
ALTER TABLE `t11_hoamember_files`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t12_complaints_thread`
--
ALTER TABLE `t12_complaints_thread`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t13_complaints_message`
--
ALTER TABLE `t13_complaints_message`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t15_complaints_files`
--
ALTER TABLE `t15_complaints_files`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t16_request`
--
ALTER TABLE `t16_request`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t17_request_reply`
--
ALTER TABLE `t17_request_reply`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t18_request_files`
--
ALTER TABLE `t18_request_files`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `t2_boardofdirector`
--
ALTER TABLE `t2_boardofdirector`
  ADD CONSTRAINT `t2_boardofdirector_ibfk_1` FOREIGN KEY (`hoa_id`) REFERENCES `t9_hoamember` (`id`);

--
-- Constraints for table `t3_boardofdirector_role`
--
ALTER TABLE `t3_boardofdirector_role`
  ADD CONSTRAINT `t3_boardofdirector_role_ibfk_1` FOREIGN KEY (`director_id`) REFERENCES `t2_boardofdirector` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `t4_announcements`
--
ALTER TABLE `t4_announcements`
  ADD CONSTRAINT `t4_announcements_ibfk_1` FOREIGN KEY (`director_id`) REFERENCES `t2_boardofdirector` (`id`);

--
-- Constraints for table `t5_announcements_file`
--
ALTER TABLE `t5_announcements_file`
  ADD CONSTRAINT `t5_announcements_file_ibfk_1` FOREIGN KEY (`announcement_id`) REFERENCES `t4_announcements` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `t7_information_content`
--
ALTER TABLE `t7_information_content`
  ADD CONSTRAINT `t7_information_content_ibfk_1` FOREIGN KEY (`i_catergory_id`) REFERENCES `t6_information_category` (`id`) ON DELETE NO ACTION;

--
-- Constraints for table `t8_information_file`
--
ALTER TABLE `t8_information_file`
  ADD CONSTRAINT `t8_information_file_ibfk_1` FOREIGN KEY (`i_content_id`) REFERENCES `t7_information_content` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `t10_hoamember_personalinfo`
--
ALTER TABLE `t10_hoamember_personalinfo`
  ADD CONSTRAINT `t10_hoamember_personalinfo_hoa_id_foreign` FOREIGN KEY (`hoa_id`) REFERENCES `t9_hoamember` (`id`);

--
-- Constraints for table `t11_hoamember_files`
--
ALTER TABLE `t11_hoamember_files`
  ADD CONSTRAINT `t11_hoamember_files_ibfk_1` FOREIGN KEY (`hoa_id`) REFERENCES `t9_hoamember` (`id`);

--
-- Constraints for table `t12_complaints_thread`
--
ALTER TABLE `t12_complaints_thread`
  ADD CONSTRAINT `t12_complaints_thread_ibfk_1` FOREIGN KEY (`hoa_id`) REFERENCES `t9_hoamember` (`id`);

--
-- Constraints for table `t13_complaints_message`
--
ALTER TABLE `t13_complaints_message`
  ADD CONSTRAINT `t13_complaints_message_ibfk_1` FOREIGN KEY (`c_thread_id`) REFERENCES `t12_complaints_thread` (`id`),
  ADD CONSTRAINT `t13_complaints_message_ibfk_2` FOREIGN KEY (`hoa_id`) REFERENCES `t9_hoamember` (`id`);

--
-- Constraints for table `t14_complaints_thread_participant`
--
ALTER TABLE `t14_complaints_thread_participant`
  ADD CONSTRAINT `t14_complaints_thread_participant_ibfk_1` FOREIGN KEY (`c_thread_id`) REFERENCES `t12_complaints_thread` (`id`),
  ADD CONSTRAINT `t14_complaints_thread_participant_ibfk_2` FOREIGN KEY (`hoa_id`) REFERENCES `t9_hoamember` (`id`);

--
-- Constraints for table `t15_complaints_files`
--
ALTER TABLE `t15_complaints_files`
  ADD CONSTRAINT `t15_complaints_files_ibfk_1` FOREIGN KEY (`c_message_id`) REFERENCES `t13_complaints_message` (`id`);

--
-- Constraints for table `t16_request`
--
ALTER TABLE `t16_request`
  ADD CONSTRAINT `t16_request_ibfk_1` FOREIGN KEY (`hoa_id`) REFERENCES `t9_hoamember` (`id`);

--
-- Constraints for table `t17_request_reply`
--
ALTER TABLE `t17_request_reply`
  ADD CONSTRAINT `t17_request_reply_director_id_foreign` FOREIGN KEY (`director_id`) REFERENCES `t2_boardofdirector` (`id`),
  ADD CONSTRAINT `t17_request_reply_ibfk_1` FOREIGN KEY (`req_id`) REFERENCES `t16_request` (`id`);

--
-- Constraints for table `t18_request_files`
--
ALTER TABLE `t18_request_files`
  ADD CONSTRAINT `t18_request_files_ibfk_1` FOREIGN KEY (`req_id`) REFERENCES `t16_request` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
