-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 09, 2018 at 12:15 PM
-- Server version: 5.6.38
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thirumal_travels`
--

-- --------------------------------------------------------

--
-- Table structure for table `airport_taxi`
--

CREATE TABLE `airport_taxi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `seating` varchar(255) NOT NULL,
  `two_way` varchar(255) NOT NULL,
  `city_airport` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `view_order` int(11) NOT NULL DEFAULT '10',
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `airport_taxi`
--

INSERT INTO `airport_taxi` (`id`, `title`, `description`, `seating`, `two_way`, `city_airport`, `image`, `view_order`, `date_added`, `date_modified`) VALUES
(2, 'Mini Bus', 'City Pickup: Km and time will starts and ends at customer pickup point.&lt;br&gt;Airport Pickup: Km and time will starts and ends at our office (Hsr Layout).&lt;br&gt;Driver batta will be charged extra if the driver on duty before 6 am or after 10 pm.&lt;br&gt;Parking, Tolls, and state entry tax will be charged extra as per actual.\r\nMinimum Passengers are allowed as per Government rule.', '21', '5500', '4500', '1519714133.jpg', 4, '2018-02-27 06:48:53', '2018-03-28 11:15:02'),
(3, 'Tata Indica Ac', 'City Pickup: Km and time will starts and ends at customer pickup point.\r\nAirport Pickup: Km and time will starts and ends at our office (Hsr Layout).\r\nDriver batta will be charged extra if the driver on duty before 6 am or after 10 pm.\r\nParking, Tolls, and state entry tax will be charged extra as per actual.\r\nMinimum Passengers are allowed as per Government rule.', '14', '1400', '1000', 'tata_ac.jpg', 2, '2018-03-16 10:38:47', '2018-03-28 11:14:30'),
(4, 'Sedan', 'City Pickup: Km and time will starts and ends at customer pickup point.\r\nAirport Pickup: Km and time will starts and ends at our office (Hsr Layout).\r\nDriver batta will be charged extra if the driver on duty before 6 am or after 10 pm.\r\nParking, Tolls, and state entry tax will be charged extra as per actual.\r\nMinimum Passengers are allowed as per Government rule.', '4', '1600', '1200', 'etios.jpg', 1, '2018-03-16 10:38:47', '2018-03-28 11:14:44'),
(5, 'Toyota Innova Ac', 'City Pickup: Km and time will starts and ends at customer pickup point.\r\nAirport Pickup: Km and time will starts and ends at our office (Hsr Layout).\r\nDriver batta will be charged extra if the driver on duty before 6 am or after 10 pm.\r\nParking, Tolls, and state entry tax will be charged extra as per actual.\r\nMinimum Passengers are allowed as per Government rule.', '7', '2200', '1800', 'innovaac.jpg', 3, '2018-03-16 10:38:47', '2018-03-28 11:14:55'),
(6, 'Tempo Traveller', 'City Pickup: Km and time will starts and ends at customer pickup point.\r\nAirport Pickup: Km and time will starts and ends at our office (Hsr Layout).\r\nDriver batta will be charged extra if the driver on duty before 6 am or after 10 pm.\r\nParking, Tolls, and state entry tax will be charged extra as per actual.\r\nMinimum Passengers are allowed as per Government rule.', '12', '3200', '2600', 'TemopoTraveller.jpg', 4, '2018-03-16 10:38:47', '2018-03-28 11:14:59');

-- --------------------------------------------------------

--
-- Table structure for table `bangalore_areas`
--

CREATE TABLE `bangalore_areas` (
  `id` bigint(20) NOT NULL,
  `areasName` varchar(500) NOT NULL,
  `area_url` varchar(255) NOT NULL,
  `city_id` varchar(255) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bangalore_areas`
--

INSERT INTO `bangalore_areas` (`id`, `areasName`, `area_url`, `city_id`) VALUES
(1, 'Abbigere', 'Abbigere', '1'),
(2, 'Adugodi', 'Adugodi', '1'),
(3, 'AECS Layout', 'AECS-Layout', '1'),
(4, 'AECS Layout-A Block', 'AECS-Layout-A-Block', '1'),
(5, 'AECS Layout-B Block', 'AECS-Layout-B-Block', '1'),
(6, 'AECS Layout-C Block', 'AECS-Layout-C-Block', '1'),
(7, 'AECS Layout-D Block', 'AECS-Layout-D-Block', '1'),
(8, 'Agrahara Dasarahalli', 'Agrahara-Dasarahalli', '1'),
(9, 'Airport Area', 'Airport-Area', '1'),
(10, 'Airport Road', 'Airport-Road', '1'),
(11, 'Akshaya Nagar', 'Akshaya-Nagar', '1'),
(12, 'Amruthahalli', 'Amruthahalli', '1'),
(13, 'Anekal', 'Anekal', '1'),
(14, 'Anjanapura', 'Anjanapura', '1'),
(15, 'Anjanapura 10th Block', 'Anjanapura-10th-Block', '1'),
(16, 'Anjanapura 11th Block', 'Anjanapura-11th-Block', '1'),
(17, 'Anjanapura 1st Block', 'Anjanapura-1st-Block', '1'),
(18, 'Anjanapura 2nd Block', 'Anjanapura-2nd-Block', '1'),
(19, 'Anjanapura 3rd Block', 'Anjanapura-3rd-Block', '1'),
(20, 'Anjanapura 4th Block', 'Anjanapura-4th-Block', '1'),
(21, 'Anjanapura 5th Block', 'Anjanapura-5th-Block', '1'),
(22, 'Anjanapura 6th Block', 'Anjanapura-6th-Block', '1'),
(23, 'Anjanapura 7th Block', 'Anjanapura-7th-Block', '1'),
(24, 'Anjanapura 8th Block', 'Anjanapura-8th-Block', '1'),
(25, 'Anjanapura 9th Block', 'Anjanapura-9th-Block', '1'),
(26, 'Arakere', 'Arakere', '1'),
(27, 'Ashwath Nagar', 'Ashwath-Nagar', '1'),
(28, 'Attibele', 'Attibele', '1'),
(29, 'Attibele Industrial Area', 'Attibele-Industrial-Area', '1'),
(30, 'Austin Town', 'Austin-Town', '1'),
(31, 'Avenue Road', 'Avenue-Road', '1'),
(32, 'Babusapalya', 'Babusapalya', '1'),
(33, 'Bagalur', 'Bagalur', '1'),
(34, 'Balepet', 'Balepet', '1'),
(35, 'Banashankari', 'Banashankari', '1'),
(36, 'Banashankari Stage I', 'Banashankari-Stage-I', '1'),
(37, 'Banashankari Stage II', 'Banashankari-Stage-II', '1'),
(38, 'Banashankari Stage III', 'Banashankari-Stage-III', '1'),
(39, 'Banaswadi', 'Banaswadi', '1'),
(40, 'Bandepalya', 'Bandepalya', '1'),
(41, 'Banganpalya', 'Banganpalya', '1'),
(42, 'Bannerghatta Road', 'Bannerghatta-Road', '1'),
(43, 'Basavanagar', 'Basavanagar', '1'),
(44, 'Basavanagudi', 'Basavanagudi', '1'),
(45, 'Basaveshwaranagar', 'Basaveshwaranagar', '1'),
(46, 'Begur', 'Begur', '1'),
(47, 'Begur Road', 'Begur-Road', '1'),
(48, 'Bel Road', 'Bel-Road', '1'),
(49, 'Bellandur', 'Bellandur', '1'),
(50, 'Bellary Road', 'Bellary-Road', '1'),
(51, 'Benson Town', 'Benson-Town', '1'),
(52, 'Bhuvaneshwari Nagar', 'Bhuvaneshwari-Nagar', '1'),
(53, 'Bidadi Industrial Area', 'Bidadi-Industrial-Area', '1'),
(54, 'Bilekahalli', 'Bilekahalli', '1'),
(55, 'Bommanahalli', 'Bommanahalli', '1'),
(56, 'Bommasandra', 'Bommasandra', '1'),
(57, 'Bommasandra Industrial Area', 'Bommasandra-Industrial-Area', '1'),
(58, 'Bommasandra Jigani Link Road', 'Bommasandra-Jigani-Link-Road', '1'),
(59, 'Bommasandra Village', 'Bommasandra-Village', '1'),
(60, 'Brigade Road', 'Brigade-Road', '1'),
(61, 'Brooke Field', 'Brooke-Field', '1'),
(62, 'BTM Layout', 'BTM-Layout', '1'),
(63, 'BTM Layout I stage', 'BTM-Layout-I-stage', '1'),
(64, 'BTM Layout II stage', 'BTM-Layout-II-stage', '1'),
(65, 'BTM Layout III stage', 'BTM-Layout-III-stage', '1'),
(66, 'BTM Layout IV stage', 'BTM-Layout-IV-stage', '1'),
(67, 'Bvk Iyengar Road', 'Bvk-Iyengar-Road', '1'),
(68, 'Byatarayanapura', 'Byatarayanapura', '1'),
(69, 'C Thimma Reddy Layout', 'C-Thimma-Reddy-Layout', '1'),
(70, 'CV Raman Nagar', 'CV-Raman-Nagar', '1'),
(71, 'Cambridge Layout', 'Cambridge-Layout', '1'),
(72, 'Central Silk Board', 'Central-Silk-Board', '1'),
(73, 'Chamarajpet', 'Chamarajpet', '1'),
(74, 'Chambal River', 'Chambal-River', '1'),
(75, 'Chandapur', 'Chandapur', '1'),
(76, 'Chandra Layout', 'Chandra-Layout', '1'),
(77, 'Channasandra', 'Channasandra', '1'),
(78, 'Chelekere', 'Chelekere', '1'),
(79, 'Chickpet', 'Chickpet', '1'),
(80, 'Chikka Mavalli', 'Chikka-Mavalli', '1'),
(81, 'Chikkaballapur', 'Chikkaballapur', '1'),
(82, 'Chikkajala', 'Chikkajala', '1'),
(83, 'Chikkalasandra', 'Chikkalasandra', '1'),
(84, 'Cookes Town', 'Cookes-Town', '1'),
(85, 'Cottonpet', 'Cottonpet', '1'),
(86, 'Cox Town', 'Cox-Town', '1'),
(87, 'Cubbon Road', 'Cubbon-Road', '1'),
(88, 'Cunningham Road', 'Cunningham-Road', '1'),
(89, 'Defence Colony', 'Defence-Colony', '1'),
(90, 'Devanahalli', 'Devanahalli', '1'),
(91, 'Devarabisanahalli', 'Devarabisanahalli', '1'),
(92, 'Devarachikkana Halli', 'Devarachikkana-Halli', '1'),
(93, 'Dickenson Road', 'Dickenson-Road', '1'),
(94, 'Dodda Banaswadi', 'Dodda-Banaswadi', '1'),
(95, 'Dodda Bommasandra', 'Dodda-Bommasandra', '1'),
(96, 'Dodda Mavalli', 'Dodda-Mavalli', '1'),
(97, 'Doddaballapur', 'Doddaballapur', '1'),
(98, 'Doddaballapur Road', 'Doddaballapur-Road', '1'),
(99, 'Doddakannahalli', 'Doddakannahalli', '1'),
(100, 'Doddakannelli', 'Doddakannelli', '1'),
(101, 'Doddanekundi', 'Doddanekundi', '1'),
(102, 'Dollars Colony', 'Dollars-Colony', '1'),
(103, 'Domlur', 'Domlur', '1'),
(104, 'Domlur Stage 1', 'Domlur-Stage-1', '1'),
(105, 'Domluru Stage 2', 'Domluru-Stage-2', '1'),
(106, 'Dooravani Nagar', 'Dooravani-Nagar', '1'),
(107, 'Ejipura', 'Ejipura', '1'),
(108, 'Electronic City', 'Electronic-City', '1'),
(109, 'Electronic City Phase I', 'Electronic-City-Phase-I', '1'),
(110, 'Electronic City Phase II', 'Electronic-City-Phase-II', '1'),
(111, 'Fraser Town', 'Fraser-Town', '1'),
(112, 'GM Palya', 'GM-Palya', '1'),
(113, 'Gandhi Nagar', 'Gandhi-Nagar', '1'),
(114, 'Ganganagar', 'Ganganagar', '1'),
(115, 'Garudachrpalya', 'Garudachrpalya', '1'),
(116, 'Gottigere', 'Gottigere', '1'),
(117, 'Govindaraj nagar', 'Govindaraj-nagar', '1'),
(118, 'Guttahalli', 'Guttahalli', '1'),
(119, 'HAL II Stage', 'HAL-II-Stage', '1'),
(120, 'Hanumanth Nagar', 'Hanumanth-Nagar', '1'),
(121, 'Harlur', 'Harlur', '1'),
(122, 'HBR Layout', 'HBR-Layout', '1'),
(123, 'HBR Layout 1st Block', 'HBR-Layout-1st-Block', '1'),
(124, 'HBR Layout 2nd Block', 'HBR-Layout-2nd-Block', '1'),
(125, 'HBR Layout 3rd Block', 'HBR-Layout-3rd-Block', '1'),
(126, 'HBR Layout 4th Block', 'HBR-Layout-4th-Block', '1'),
(127, 'HBR Layout 5th Block', 'HBR-Layout-5th-Block', '1'),
(128, 'Hebbal', 'Hebbal', '1'),
(129, 'Hebbal Kempapura', 'Hebbal-Kempapura', '1'),
(130, 'Hegde Nagar', 'Hegde-Nagar', '1'),
(131, 'Hegganahalli', 'Hegganahalli', '1'),
(132, 'Hennur', 'Hennur', '1'),
(133, 'Hennur Road', 'Hennur-Road', '1'),
(134, 'Hesaraghatta', 'Hesaraghatta', '1'),
(135, 'Hesaraghatta Main Road', 'Hesaraghatta-Main-Road', '1'),
(136, 'HMT Layout', 'HMT-Layout', '1'),
(137, 'HMT Layout 1st Block', 'HMT-Layout-1st-Block', '1'),
(138, 'HMT Layout 2nd Block', 'HMT-Layout-2nd-Block', '1'),
(139, 'HMT Layout 3rd Block', 'HMT-Layout-3rd-Block', '1'),
(140, 'HMT Layout 4th Block', 'HMT-Layout-4th-Block', '1'),
(141, 'HMT Layout 5th Block', 'HMT-Layout-5th-Block', '1'),
(142, 'HMT Layout 6th Block', 'HMT-Layout-6th-Block', '1'),
(143, 'HMT Layout 7th Block', 'HMT-Layout-7th-Block', '1'),
(144, 'Hoodi Industrial Area', 'Hoodi-Industrial-Area', '1'),
(145, 'Hoodi Village', 'Hoodi-Village', '1'),
(146, 'Horamavu', 'Horamavu', '1'),
(147, 'Hosakerehalli', 'Hosakerehalli', '1'),
(148, 'Hoskote', 'Hoskote', '1'),
(149, 'Hosur Road', 'Hosur-Road', '1'),
(150, 'HRBR Layout', 'HRBR-Layout', '1'),
(151, 'HRBR Layout 1st Block', 'HRBR-Layout-1st-Block', '1'),
(152, 'HRBR Layout 2nd Block', 'HRBR-Layout-2nd-Block', '1'),
(153, 'HRBR Layout 3rd Block', 'HRBR-Layout-3rd-Block', '1'),
(154, 'HSR Layout', 'HSR-Layout', '1'),
(155, 'HSR Layout Sector 1', 'HSR-Layout-Sector-1', '1'),
(156, 'HSR Layout Sector 2', 'HSR-Layout-Sector-2', '1'),
(157, 'HSR Layout Sector 3', 'HSR-Layout-Sector-3', '1'),
(158, 'HSR Layout Sector 4', 'HSR-Layout-Sector-4', '1'),
(159, 'HSR Layout Sector 5', 'HSR-Layout-Sector-5', '1'),
(160, 'HSR Layout Sector 6', 'HSR-Layout-Sector-6', '1'),
(161, 'HSR Layout Sector 7', 'HSR-Layout-Sector-7', '1'),
(162, 'Hulimavu', 'Hulimavu', '1'),
(163, 'Huskur', 'Huskur', '1'),
(164, 'Indira Nagar', 'Indira-Nagar', '1'),
(165, 'Indira Nagar I Stage', 'Indira-Nagar-I-Stage', '1'),
(166, 'Indira Nagar II Stage', 'Indira-Nagar-II-Stage', '1'),
(167, 'Indira Nagar III Stage', 'Indira-Nagar-III-Stage', '1'),
(168, 'Indraprastha', 'Indraprastha', '1'),
(169, 'ISRO Layout', 'ISRO-Layout', '1'),
(170, 'ITPL', 'ITPL', '1'),
(171, 'Ittamadu', 'Ittamadu', '1'),
(172, 'Jagjivan Ram Nagar', 'Jagjivan-Ram-Nagar', '1'),
(173, 'Jakkasandra Extension', 'Jakkasandra-Extension', '1'),
(174, 'Jakkur', 'Jakkur', '1'),
(175, 'Jalahalli', 'Jalahalli', '1'),
(176, 'Jalakanteshwara Pura', 'Jalakanteshwara-Pura', '1'),
(177, 'Jaraganahalli', 'Jaraganahalli', '1'),
(178, 'Jaya Nagar 1st Block', 'Jaya-Nagar-1st-Block', '1'),
(179, 'Jaya Nagar 2nd Block', 'Jaya-Nagar-2nd-Block', '1'),
(180, 'Jaya Nagar 3rd Block', 'Jaya-Nagar-3rd-Block', '1'),
(181, 'Jaya Nagar 4th Block', 'Jaya-Nagar-4th-Block', '1'),
(182, 'Jaya Nagar 5th Block', 'Jaya-Nagar-5th-Block', '1'),
(183, 'Jaya Nagar 6th Block', 'Jaya-Nagar-6th-Block', '1'),
(184, 'Jaya Nagar 7th Block', 'Jaya-Nagar-7th-Block', '1'),
(185, 'Jaya Nagar 8th Block', 'Jaya-Nagar-8th-Block', '1'),
(186, 'Jaya Nagar 9th Block', 'Jaya-Nagar-9th-Block', '1'),
(187, 'Jayanagar', 'Jayanagar', '1'),
(188, 'Jayanagar 4th Block', 'Jayanagar-4th-Block', '1'),
(189, 'Jeevan Bima Nagar', 'Jeevan-Bima-Nagar', '1'),
(190, 'Jigani Industrial Area', 'Jigani-Industrial-Area', '1'),
(191, 'JJR Nagar', 'JJR-Nagar', '1'),
(192, 'JP Nagar', 'JP-Nagar', '1'),
(193, 'JP Nagar 1st Phase', 'JP-Nagar-1st-Phase', '1'),
(194, 'JP Nagar 2nd Phase', 'JP-Nagar-2nd-Phase', '1'),
(195, 'JP Nagar 3rd Phase', 'JP-Nagar-3rd-Phase', '1'),
(196, 'JP Nagar 4th Phase', 'JP-Nagar-4th-Phase', '1'),
(197, 'JP Nagar 5th Phase', 'JP-Nagar-5th-Phase', '1'),
(198, 'JP Nagar 6th Phase', 'JP-Nagar-6th-Phase', '1'),
(199, 'JP Nagar 7th Phase', 'JP-Nagar-7th-Phase', '1'),
(200, 'JP Nagar 8th Phase', 'JP-Nagar-8th-Phase', '1'),
(201, 'JP Nagar 9th Phase', 'JP-Nagar-9th-Phase', '1'),
(202, 'Kadubeesanahalli', 'Kadubeesanahalli', '1'),
(203, 'Kaggadasapura', 'Kaggadasapura', '1'),
(204, 'Kaikondrahalli', 'Kaikondrahalli', '1'),
(205, 'Kalyan Nagar', 'Kalyan-Nagar', '1'),
(206, 'Kamakshipalya Indl Area-kamakshipalya', 'Kamakshipalya-Indl-Area-kamakshipalya', '1'),
(207, 'Kamaraj Road', 'Kamaraj-Road', '1'),
(208, 'Kammanahalli', 'Kammanahalli', '1'),
(209, 'Kanaka Nagar', 'Kanaka-Nagar', '1'),
(210, 'Kanakapura Road', 'Kanakapura-Road', '1'),
(211, 'Kasavanahalli', 'Kasavanahalli', '1'),
(212, 'Kasturi Nagar', 'Kasturi-Nagar', '1'),
(213, 'Kengeri', 'Kengeri', '1'),
(214, 'Kodigehalli', 'Kodigehalli', '1'),
(215, 'Konanakunte', 'Konanakunte', '1'),
(216, 'Koramangala', 'Koramangala', '1'),
(217, 'Koramangala 1st Block', 'Koramangala-1st-Block', '1'),
(218, 'Koramangala 2nd Block', 'Koramangala-2nd-Block', '1'),
(219, 'Koramangala 3rd Block', 'Koramangala-3rd-Block', '1'),
(220, 'Koramangala 4th Block', 'Koramangala-4th-Block', '1'),
(221, 'Koramangala 5th Block', 'Koramangala-5th-Block', '1'),
(222, 'Koramangala 6th Block', 'Koramangala-6th-Block', '1'),
(223, 'Koramangala 7th Block', 'Koramangala-7th-Block', '1'),
(224, 'Koramangala 8th Block', 'Koramangala-8th-Block', '1'),
(225, 'KR Market', 'KR-Market', '1'),
(226, 'KR Puram', 'KR-Puram', '1'),
(227, 'KR Puram 1st Block', 'KR-Puram-1st-Block', '1'),
(228, 'KR Puram 2nd Block', 'KR-Puram-2nd-Block', '1'),
(229, 'KR Puram 3rd Block', 'KR-Puram-3rd-Block', '1'),
(230, 'Kudlu Gate', 'Kudlu-Gate', '1'),
(231, 'Kumaraswamy Layout', 'Kumaraswamy-Layout', '1'),
(232, 'Kumaraswamy Layout I Stage', 'Kumaraswamy-Layout-I-Stage', '1'),
(233, 'Kumaraswamy Layout II Stage', 'Kumaraswamy-Layout-II-Stage', '1'),
(234, 'Kundalahalli', 'Kundalahalli', '1'),
(235, 'Kushalnagar', 'Kushalnagar', '1'),
(236, 'Laggere', 'Laggere', '1'),
(237, 'Lalbagh', 'Lalbagh', '1'),
(238, 'Langford Town', 'Langford-Town', '1'),
(239, 'Lavelle Road', 'Lavelle-Road', '1'),
(240, 'Madiwala', 'Madiwala', '1'),
(241, 'Magadi Road', 'Magadi-Road', '1'),
(242, 'Mahadevapura', 'Mahadevapura', '1'),
(243, 'Mahadevapura Phase I', 'Mahadevapura-Phase-I', '1'),
(244, 'Mahalakshmipuram Layout', 'Mahalakshmipuram-Layout', '1'),
(245, 'Majestic', 'Majestic', '1'),
(246, 'Mallesh Palaya', 'Mallesh-Palaya', '1'),
(247, 'Malleshwaram', 'Malleshwaram', '1'),
(248, 'Manek Chowk', 'Manek-Chowk', '1'),
(249, 'Manjunatha Nagar', 'Manjunatha-Nagar', '1'),
(250, 'Marathahalli', 'Marathahalli', '1'),
(251, 'Mariappanapalya', 'Mariappanapalya', '1'),
(252, 'Maruthi Nagar', 'Maruthi-Nagar', '1'),
(253, 'Maruthi Seva Nagar', 'Maruthi-Seva-Nagar', '1'),
(254, 'Mathikere', 'Mathikere', '1'),
(255, 'MG Road', 'MG-Road', '1'),
(256, 'Millers Road', 'Millers-Road', '1'),
(257, 'Minerva Circle', 'Minerva-Circle', '1'),
(258, 'Mothinagar', 'Mothinagar', '1'),
(259, 'Munekollal', 'Munekollal', '1'),
(260, 'Murugeshpalya', 'Murugeshpalya', '1'),
(261, 'Muthyala Nagar', 'Muthyala-Nagar', '1'),
(262, 'Mylasandra', 'Mylasandra', '1'),
(263, 'Mysore Road', 'Mysore-Road', '1'),
(264, 'NR Colony', 'NR-Colony', '1'),
(265, 'NR Road', 'NR-Road', '1'),
(266, 'Nagadevanahalli', 'Nagadevanahalli', '1'),
(267, 'Naganathapura', 'Naganathapura', '1'),
(268, 'Nagarbhavi', 'Nagarbhavi', '1'),
(269, 'Nagarbhavi 1st Stage', 'Nagarbhavi-1st-Stage', '1'),
(270, 'Nagarbhavi 2nd Stage', 'Nagarbhavi-2nd-Stage', '1'),
(271, 'Nagasandra', 'Nagasandra', '1'),
(272, 'Nagavara Palya', 'Nagavara-Palya', '1'),
(273, 'Nagawara', 'Nagawara', '1'),
(274, 'Nalagadderanahalli-peenya Industrial Area', 'Nalagadderanahalli-peenya-Industrial-Area', '1'),
(275, 'Nandhini Layout', 'Nandhini-Layout', '1'),
(276, 'Nandi Hills', 'Nandi-Hills', '1'),
(277, 'Narayanapura', 'Narayanapura', '1'),
(278, 'Nelamangala', 'Nelamangala', '1'),
(279, 'New BEL Road', 'New-BEL-Road', '1'),
(280, 'Old Airport Road', 'Old-Airport-Road', '1'),
(281, 'Old Madras Road', 'Old-Madras-Road', '1'),
(282, 'OMBR Layout', 'OMBR-Layout', '1'),
(283, 'Outer Ring Road', 'Outer-Ring-Road', '1'),
(284, 'PS Lane', 'PS-Lane', '1'),
(285, 'Padmanabhanagar', 'Padmanabhanagar', '1'),
(286, 'Pai Layout', 'Pai-Layout', '1'),
(287, 'Palace Guttahalli', 'Palace-Guttahalli', '1'),
(288, 'Palace Road', 'Palace-Road', '1'),
(289, 'Peenya', 'Peenya', '1'),
(290, 'Peenya 1st stage', 'Peenya-1st-stage', '1'),
(291, 'Peenya 2nd stage', 'Peenya-2nd-stage', '1'),
(292, 'Peenya 3rd stage', 'Peenya-3rd-stage', '1'),
(293, 'Peenya Industrial Area', 'Peenya-Industrial-Area', '1'),
(294, 'Prashanth Nagar', 'Prashanth-Nagar', '1'),
(295, 'Pulukeshi Nagar', 'Pulukeshi-Nagar', '1'),
(296, 'Queens Road', 'Queens-Road', '1'),
(297, 'R K Layout', 'R-K-Layout', '1'),
(298, 'Raj Bhavan', 'Raj-Bhavan', '1'),
(299, 'Raj Mahal Vilas 2nd Stage', 'Raj-Mahal-Vilas-2nd-Stage', '1'),
(300, 'Rajaji Nagar 1st Block', 'Rajaji-Nagar-1st-Block', '1'),
(301, 'Rajaji Nagar 2nd Block', 'Rajaji-Nagar-2nd-Block', '1'),
(302, 'Rajaji Nagar 3rd Block', 'Rajaji-Nagar-3rd-Block', '1'),
(303, 'Rajaji Nagar 4th Block', 'Rajaji-Nagar-4th-Block', '1'),
(304, 'Rajaji Nagar 5th Block', 'Rajaji-Nagar-5th-Block', '1'),
(305, 'Rajaji Nagar 6th Block', 'Rajaji-Nagar-6th-Block', '1'),
(306, 'Rajajinagar', 'Rajajinagar', '1'),
(307, 'Rajanukunte', 'Rajanukunte', '1'),
(308, 'Rajarajeshwari Nagar', 'Rajarajeshwari-Nagar', '1'),
(309, 'Ramagondonahalli', 'Ramagondonahalli', '1'),
(310, 'Ramamurthy Nagar', 'Ramamurthy-Nagar', '1'),
(311, 'Ramaswamy Palya', 'Ramaswamy-Palya', '1'),
(312, 'RBI Layout', 'RBI-Layout', '1'),
(313, 'Rest House Road', 'Rest-House-Road', '1'),
(314, 'Richards Town', 'Richards-Town', '1'),
(315, 'Richmond Road', 'Richmond-Road', '1'),
(316, 'RMV Extension Stage', 'RMV-Extension-Stage', '1'),
(317, 'RMV Extension stage II', 'RMV-Extension-stage-II', '1'),
(318, 'RT Nagar', 'RT-Nagar', '1'),
(319, 'RT Nagar Block I', 'RT-Nagar-Block-I', '1'),
(320, 'RT Nagar Block II', 'RT-Nagar-Block-II', '1'),
(321, 'Rupena Agrahara', 'Rupena-Agrahara', '1'),
(322, 'SP Road', 'SP-Road', '1'),
(323, 'Sadaramangala', 'Sadaramangala', '1'),
(324, 'Sahakar Nagar', 'Sahakar-Nagar', '1'),
(325, 'Sahakar Nagar A Block', 'Sahakar-Nagar-A-Block', '1'),
(326, 'Sahakar Nagar B Block', 'Sahakar-Nagar-B-Block', '1'),
(327, 'Sahakar Nagar C Block', 'Sahakar-Nagar-C-Block', '1'),
(328, 'Sahakar Nagar D Block', 'Sahakar-Nagar-D-Block', '1'),
(329, 'Sampangiramnagar', 'Sampangiramnagar', '1'),
(330, 'Sanjay Nagar', 'Sanjay-Nagar', '1'),
(331, 'Sarakki Main Road', 'Sarakki-Main-Road', '1'),
(332, 'Sarjapur', 'Sarjapur', '1'),
(333, 'Sarjapur Road', 'Sarjapur-Road', '1'),
(334, 'Seshadri Road', 'Seshadri-Road', '1'),
(335, 'Seshadripuram', 'Seshadripuram', '1'),
(336, 'Shanti Nagar', 'Shanti-Nagar', '1'),
(337, 'Shastri Nagar', 'Shastri-Nagar', '1'),
(338, 'Shivaji Nagar', 'Shivaji-Nagar', '1'),
(339, 'Silkboard', 'Silkboard', '1'),
(340, 'Silver Jubilee Park Road', 'Silver-Jubilee-Park-Road', '1'),
(341, 'Singasandra', 'Singasandra', '1'),
(342, 'Srinagar', 'Srinagar', '1'),
(343, 'Srirampura', 'Srirampura', '1'),
(344, 'Sudhama Nagar', 'Sudhama-Nagar', '1'),
(345, 'Sultanpalya', 'Sultanpalya', '1'),
(346, 'T Dasarahalli', 'T-Dasarahalli', '1'),
(347, 'TASKER TOWN', 'TASKER-TOWN', '1'),
(348, 'Tavarekere', 'Tavarekere', '1'),
(349, 'Teachers Colony', 'Teachers-Colony', '1'),
(350, 'Thanisandra', 'Thanisandra', '1'),
(351, 'Thanisandra Phase II', 'Thanisandra-Phase-II', '1'),
(352, 'Tharagupet', 'Tharagupet', '1'),
(353, 'Thippasandra', 'Thippasandra', '1'),
(354, 'Thippasandra I Block', 'Thippasandra-I-Block', '1'),
(355, 'Thyagaraj Nagar', 'Thyagaraj-Nagar', '1'),
(356, 'Thyagaraja Nagar', 'Thyagaraja-Nagar', '1'),
(357, 'Tilak Nagar', 'Tilak-Nagar', '1'),
(358, 'Tumkur Road', 'Tumkur-Road', '1'),
(359, 'Ulsoor', 'Ulsoor', '1'),
(360, 'Uttarahalli', 'Uttarahalli', '1'),
(361, 'Uttarahalli Hobli', 'Uttarahalli-Hobli', '1'),
(362, 'Vaiyyalikaval', 'Vaiyyalikaval', '1'),
(363, 'Vannarpet', 'Vannarpet', '1'),
(364, 'Varthur', 'Varthur', '1'),
(365, 'Vasanth Nagar', 'Vasanth-Nagar', '1'),
(366, 'Veerabhadra Nagar', 'Veerabhadra-Nagar', '1'),
(367, 'Venkateshpuram', 'Venkateshpuram', '1'),
(368, 'Vidyanagar', 'Vidyanagar', '1'),
(369, 'Vidyaranyapura', 'Vidyaranyapura', '1'),
(370, 'Vigyan Nagar', 'Vigyan-Nagar', '1'),
(371, 'Vijaya Bank Layout', 'Vijaya-Bank-Layout', '1'),
(372, 'Vijayanagar', 'Vijayanagar', '1'),
(373, 'Vijayanagar Stage I', 'Vijayanagar-Stage-I', '1'),
(374, 'Vijayanagar Stage II', 'Vijayanagar-Stage-II', '1'),
(375, 'Vishwaneedam', 'Vishwaneedam', '1'),
(376, 'Vivek Nagar', 'Vivek-Nagar', '1'),
(377, 'Vivekananda Nagar-pee', 'Vivekananda-Nagar-pee', '1'),
(378, 'Vyalikaval', 'Vyalikaval', '1'),
(379, 'Whitefield', 'Whitefield', '1'),
(380, 'Whitefield Phase 1 Stage', 'Whitefield-Phase-1-Stage', '1'),
(381, 'Whitefield Phase 2 Stage', 'Whitefield-Phase-2-Stage', '1'),
(382, 'Wilson Garden', 'Wilson-Garden', '1'),
(383, 'Yelachenahalli', 'Yelachenahalli', '1'),
(384, 'Yelahanka', 'Yelahanka', '1'),
(385, 'Yelahanka 4th Stage', 'Yelahanka-4th-Stage', '1'),
(386, 'Yelahanka 5th Stage', 'Yelahanka-5th-Stage', '1'),
(387, 'Yellanahalli', 'Yellanahalli', '1'),
(388, 'Yemlur', 'Yemlur', '1'),
(389, 'Yeshwantpur', 'Yeshwantpur', '1'),
(390, 'Srinivasanagar', 'Srinivasanagar', '1'),
(391, 'KH Road', 'KH-Road', '1'),
(392, 'Kadugondanahalli', 'Kadugondanahalli', '1'),
(393, 'Tanney Road', 'Tanney-Road', '1'),
(394, 'Commercial Street', 'Commercial-Street', '1'),
(395, 'Girinagar', 'Girinagar', '1'),
(396, 'Sunkadakatte', 'Sunkadakatte', '1'),
(397, 'JC Nagar', 'JC-Nagar', '1'),
(398, 'Amruthnagar', 'Amruthnagar', '1'),
(399, 'Andra Layout', 'Andra-Layout', '1'),
(400, 'Ashoknagar', 'Ashoknagar', '1'),
(401, 'Kadugodi', 'Kadugodi', '1'),
(402, 'Jigani', 'Jigani', '1'),
(403, 'Dasanapura Hobli', 'Dasanapura-Hobli', '1'),
(404, 'Inner Ring Road', 'Inner-Ring-Road', '1'),
(405, 'Thubarahalli', 'Thubarahalli', '1'),
(406, 'Anjana Nagar', 'Anjana-Nagar', '1'),
(407, 'Chunchukatta', 'Chunchukatta', '1'),
(408, 'Kacharakanahalli', 'Kacharakanahalli', '1'),
(409, 'Prakash Nagar', 'Prakash-Nagar', '1'),
(410, 'Annasandrapalya,', 'Annasandrapalya,', '1'),
(411, 'Lingarajapuram', 'Lingarajapuram', '1'),
(412, 'M.S. Nagar', 'M.S.-Nagar', '1'),
(413, 'R.S.Palya', 'R.S.Palya', '1'),
(414, 'Gayathri Nagar', 'Gayathri-Nagar', '1'),
(416, 'Gorgunte Palya', 'Gorgunte-Palya', '1'),
(417, 'S.G. Palya', 'S.G.-Palya', '1'),
(418, 'Kalasi Palya', 'Kalasi-Palya', '1'),
(419, 'Cholara Palya', 'Cholara-Palya', '1'),
(420, 'Ullal', 'Ullal', '1'),
(421, 'Mavalli', 'Mavalli', '1'),
(422, 'Chikkabanavara', 'Chikkabanavara', '1'),
(423, 'Vishweshwarayya Layout', 'Vishweshwarayya-Layout', '1'),
(424, 'Thambuchetty Palya', 'Thambuchetty-Palya', '1'),
(425, 'Tc Palya Main Road', 'Tc-Palya-Main-Road', '1'),
(426, 'Tc Palya Gate', 'Tc-Palya-Gate', '1'),
(427, 'Garvebhavipalya', 'Garvebhavipalya', '1'),
(428, 'KHB colony', 'KHB-colony', '1'),
(429, 'Hebbagodi', 'Hebbagodi', '1'),
(430, 'Chikkabanaswadi', 'Chikkabanaswadi', '1'),
(431, 'Narasimharaja Road', 'Narasimharaja-Road', '1'),
(432, 'Victoria Layout', 'Victoria-Layout', '1'),
(434, 'Kanur post', 'Kanur-post', '1'),
(435, 'Devaiah Park', 'Devaiah-Park', '1'),
(436, 'MEI LAYOUT', 'MEI-LAYOUT', '1'),
(437, 'Padarayanapura', 'Padarayanapura', '1'),
(439, 'Church Street Road', 'Church-Street-Road', '1'),
(440, 'TCM Royan Road', 'TCM-Royan-Road', '1'),
(441, 'Kamakshipalya', 'Kamakshipalya', '1'),
(442, 'avalahalli', 'avalahalli', '1'),
(443, 'nayandahalli', 'nayandahalli', '1'),
(444, 'Agara', 'Agara', '1'),
(445, 'Chamundinagar', 'Chamundinagar', '1'),
(446, 'Gavipuram Extension', 'Gavipuram-Extension', '1'),
(447, 'Anepalya', 'Anepalya', '1'),
(448, 'Andrahalli', 'Andrahalli', '1'),
(449, 'Ashok Nagar', 'Ashok-Nagar', '1'),
(450, 'Lakkasandhra', 'Lakkasandhra', '1'),
(451, 'Malathahalli', 'Malathahalli', '1'),
(452, 'RameshNagar', 'RameshNagar', '1'),
(453, 'Vibhuthipura Extension', 'Vibhuthipura-Extension', '1'),
(454, 'Anand nagar', 'Anand-nagar', '1'),
(455, 'Dodpete', 'Dodpete', '1'),
(456, 'Muneshwara', 'Muneshwara', '1'),
(457, 'LB Shastri Nagar', 'LB-Shastri-Nagar', '1'),
(458, 'Deepanjali Nagar', 'Deepanjali-Nagar', '1'),
(459, 'Akkipet', 'Akkipet', '1'),
(460, 'Sankey Road', 'Sankey-Road', '1'),
(461, 'Subramanyapura', 'Subramanyapura', '1'),
(462, 'K R Colony', 'K-R-Colony', '1'),
(463, 'K N Extention', 'K-N-Extention', '1'),
(464, 'Devasandra', 'Devasandra', '1'),
(465, 'KR Puram Bus stop Road', 'KR-Puram-Bus-stop-Road', '1'),
(466, 'srinivasa nagar', 'srinivasa-nagar', '1'),
(467, 'BH Road', 'BH-Road', '1'),
(468, 'Doddajala', 'Doddajala', '1'),
(469, 'S.C. Road', 'S.C.-Road', '1'),
(470, 'Bob Colony', 'Bob-Colony', '1'),
(471, 'Lakshminarayanapura', 'Lakshminarayanapura', '1'),
(472, 'Shankar Nagar', 'Shankar-Nagar', '1'),
(473, 'Kurubarahalli', 'Kurubarahalli', '1'),
(474, 'Neelasandhra', 'Neelasandhra', '1'),
(475, 'dasarahalli', 'dasarahalli', '1'),
(476, 'Magrath road', 'Magrath-road', '1'),
(477, 'Marks Road', 'Marks-Road', '1'),
(478, 'Kamalanagar', 'Kamalanagar', '1'),
(479, 'annapurneshwari nagar', 'annapurneshwari-nagar', '1'),
(480, 'udhay nagar', 'udhay-nagar', '1'),
(481, 'Kaval Byrasandhra', 'Kaval-Byrasandhra', '1'),
(483, 'Balaji Nagar', 'Balaji-Nagar', '1'),
(484, 'Bapuji Nagar', 'Bapuji-Nagar', '1'),
(485, 'Mahadeshwara nagar', 'Mahadeshwara-nagar', '1'),
(486, 'Devarajeevanahalli', 'Devarajeevanahalli', '1'),
(487, 'V V Puram', 'V-V-Puram', '1'),
(488, 'BSA Road', 'BSA-Road', '1'),
(489, 'kothanur', 'kothanur', '1'),
(490, 'Tinfactory', 'Tinfactory', '1'),
(491, 'Virgo Nagar', 'Virgo-Nagar', '1'),
(494, 'Someswara Nagar', 'Someswara-Nagar', '1'),
(495, 'hongasandhra', 'hongasandhra', '1'),
(496, 'H Siddaiah Road', 'H-Siddaiah-Road', '1'),
(497, 'Dinnur', 'Dinnur', '1'),
(498, 'Bikasipalya', 'Bikasipalya', '1'),
(499, 'Kempegowda', 'Kempegowda', '1'),
(500, 'Assaye Road', 'Assaye-Road', '1'),
(501, 'Jayamahal Extension', 'Jayamahal-Extension', '1'),
(502, 'Kodichikkanahalli Main Road', 'Kodichikkanahalli-Main-Road', '1'),
(504, 'Gokula', 'Gokula', '1'),
(505, 'Kumbarpet', 'Kumbarpet', '1'),
(506, 'Vishwapriya layout', 'Vishwapriya-layout', '1'),
(507, 'Sadduguntepalya', 'Sadduguntepalya', '1'),
(508, 'Ramachandrapuram', 'Ramachandrapuram', '1'),
(509, 'Thimmai Road', 'Thimmai-Road', '1'),
(510, 'MKK Road', 'MKK-Road', '1'),
(511, 'Rose Garden', 'Rose-Garden', '1'),
(512, 'Bharath Nagar', 'Bharath-Nagar', '1'),
(513, 'Jnana Bharathi Campus', 'Jnana-Bharathi-Campus', '1'),
(514, 'Kalkere', 'Kalkere', '1'),
(515, 'KB Nagar', 'KB-Nagar', '1'),
(516, 'Infantry Road,', 'Infantry-Road,', '1'),
(517, 'BSKS bus stop', 'BSKS-bus-stop', '1'),
(518, 'Konthanur', 'Konthanur', '1'),
(519, 'Gangondanahalli', 'Gangondanahalli', '1'),
(520, 'Kadugondana Halli', 'Kadugondana-Halli', '1'),
(521, 'Devarajeevana Halli', 'Devarajeevana-Halli', '1'),
(522, 'Chinnayanpalya', 'Chinnayanpalya', '1'),
(523, 'Lady Curzon Road', 'Lady-Curzon-Road', '1'),
(525, 'BEML Layout', 'BEML-Layout', '1'),
(526, 'MS Palya', 'MS-Palya', '1'),
(527, 'Nagarathpet', 'Nagarathpet', '1'),
(528, 'Subramanya Pura', 'Subramanya-Pura', '1'),
(531, 'Chikkabavavara', 'Chikkabavavara', '1'),
(532, 'Manyata Tech Park', 'manyata-tech-park', '1');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `country_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `name`, `slug`, `country_id`, `state_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Bangalore', 'bangalore', 1, 1, 1, '2015-08-07', '2015-08-07 09:58:20');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `message` text NOT NULL,
  `ip` varchar(40) NOT NULL DEFAULT '',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `message`, `ip`, `created_at`, `updated_at`) VALUES
(1, 'Rajakumar gg', 'rjkumar856@ggg.cc', 9092310791, 'atesting asdsa asdsad Message!', '', '2017-11-28 07:21:07', '2017-11-28 07:21:07'),
(16, 'Rajkumar A', 'rjkumar856@gmail.com', 9092310791, 'Testing', '180.151.35.7', '2018-04-03 06:56:37', '2018-04-03 06:56:37');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `name`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'India', 'india', 1, '2015-08-07', '2015-08-07 09:56:34');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry_details`
--

CREATE TABLE `enquiry_details` (
  `e_id` int(11) UNSIGNED NOT NULL,
  `e_tour` varchar(255) NOT NULL,
  `e_name` varchar(255) NOT NULL,
  `e_email` varchar(225) NOT NULL,
  `e_mobile` bigint(10) NOT NULL,
  `e_pickup_city` varchar(225) NOT NULL,
  `e_date` date NOT NULL,
  `e_pickup_time` time(2) NOT NULL,
  `e_vehicle` varchar(255) NOT NULL,
  `e_seat` int(12) NOT NULL,
  `e_days` int(12) NOT NULL,
  `e_tour_details` varchar(255) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ip` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `guest_blog`
--

CREATE TABLE `guest_blog` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cust_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(510) NOT NULL,
  `description` text NOT NULL,
  `slug` varchar(510) NOT NULL,
  `status` set('1','2') NOT NULL DEFAULT '2',
  `ip` varchar(40) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guest_blog`
--

INSERT INTO `guest_blog` (`id`, `cust_id`, `title`, `description`, `slug`, `status`, `ip`, `date_added`, `date_modified`) VALUES
(1, 1, 'UPSC civil services prelims exam 2018', '<p>The<strong>&nbsp;</strong>civil services preliminary exam is just six months away and aspirants must be fully engrossed in covering the vast syllabus of the same. Before moving further, all the aspirants here are recommended to keep the syllabus handy and get a thorough knowledge about what UPSC exactly looks for.</p>\r\n<p><strong>Syllabus</strong></p>\r\n<p><img class=\"alignnone wp-image-5024033 size-full\" src=\"https://i2.wp.com/images.indianexpress.com/2018/01/syllabus-e1515917114681.jpg\" alt=\"\" width=\"759\" height=\"470\"></p>\r\n<p><strong>Trend analysis of past 4 years question papers</strong></p>\r\n<p><img class=\"alignnone wp-image-5024035 \" src=\"https://i2.wp.com/images.indianexpress.com/2018/01/trends-e1515917310430.jpg\" alt=\"\" width=\"684\" height=\"427\"></p>\r\n<p>So if we look at the trend of past 4 years, the maximum number of questions were asked from geography, agriculture and environment, but every question for each topic or subject was directly or indirectly related to current affairs. Therefore, current affairs are extremely important which you cannot at all afford to miss while preparing for prelims. But if you analyze the questions deeply, you will find the elements of core concepts too. So to get clarity, previous year question papers evaluation is advisable.</p>\r\n<p>Along with previous year question papers, enrolling for test series is an important part of the preparation process. Currently almost every IAS academy is offering prelims test series, so choose the best one and enroll yourself.<br>\r\nNow, moving further, let’s discuss some topics which are of immense importance and should not be missed in any case.</p>\r\n<p><strong>Polity</strong></p>\r\n<p>Polity is an important topic for all 3 stages of civil services exam. In fact, the importance of the subject increases when one gets into the service. Polity should be covered with a blend of current affairs. Simply put, topics like new schemes initiated by the government, recent changes or developments in constitution, amendments and bills are important for polity which can be covered from current affairs sources.</p>\r\n<p><strong>Apart from this, the other topics which should be covered are:</strong></p>\r\n<p>— Judiciary</p>\r\n<p>— NITI Aayog</p>\r\n<p>— Panchayati Raj and PESA 1996</p>\r\n<p>— Different committees of parliament</p>\r\n<p>— Distribution of powers between union and states</p>\r\n<p>— Indian Membership in Regional Establishments</p>\r\n<p>— Parliament and State Legislature</p>\r\n<p>— President, Prime Minister, Council of Ministers, Speaker, Governor, CAG and attorney general</p>\r\n<p>— Forest Rights ACT 2006</p>\r\n<p>— Passing of bills (ordinary and money)</p>\r\n<p>— Different parliamentary proceedings</p>\r\n<p>— Non-proliferation treaty and MTCR</p>\r\n<p>— Directive principles and fundamental duties</p>\r\n<p><strong>Economics</strong></p>\r\n<p>Economic is one of the most dynamic parts of UPSC syllabus and should be covered from the sources of current affairs. The facts and figures change almost every day. First of all, the basic concepts need to be cleared; aspirants must have conceptual clarity as to what matters the most in economics. If we pick up the analysis of past 1 year, lots of economic changes occurred in this past 1 year; so having the knowledge of current affairs is very important to prepare economics part.</p>\r\n<p><strong>Apart from this, the topics which should be covered are:</strong></p>\r\n<p>— Depreciation and appreciation</p>\r\n<p>— Fiscal deficit and upcoming budget</p>\r\n<p>— Taxes and reforms</p>\r\n<p>— National schemes and programmes</p>\r\n<p>— Basic terms like growth rate, national income- GDP, GVA etc.,</p>\r\n<p>— FDI, FII and recent changes in these field</p>\r\n<p>— Question based on economic survey, convertibility of rupee, monetary policy and its measures (CRR/SLR)</p>\r\n<p>— Finance Commission and recent recommendations</p>\r\n<p>— Unemployment and poverty in India</p>\r\n<p>— Supply and demand of money</p>\r\n<p>— Demonetization</p>\r\n<p>— Banking systems and based III</p>\r\n<p>— Inflation rates</p>\r\n<p>— Demographic transition.</p>\r\n<p><strong>History</strong></p>\r\n<p>Looking at the trend of past few years, the ratio of questions from history portion is sloping downward. But this doesn’t mean that history is an unimportant subject, as UPSC wants candidates to have decent knowledge on the subject. Modern Indian history, culture and medieval periods are important to study.</p>\r\n<p><strong>Apart from this, the other topic which should be covered are:</strong></p>\r\n<p>— Occupational caste</p>\r\n<p>— Tribe and nomad</p>\r\n<p>— Rock-cut monuments</p>\r\n<p>— Governor generals and viceroys</p>\r\n<p>— Medieval dictionary</p>\r\n<p>— Freedom struggle and important movements</p>\r\n<p>— Ancient times taxation and administration</p>\r\n<p>— Land reforms and revenue system</p>\r\n<p>— Important dynasties in medieval India.</p>\r\n<p>— Geography and environment</p>\r\n<p>For the coverage of geography portion, candidates must have a basic clarity about the universe, earth, phenomena, etc. UPSC syllabus covers both Indian and world geography. Along with basic conceptual clarity, candidates also need to stay updated with recent updates; therefore current affairs knowledge again is of utmost importance.</p>\r\n<p><strong>The topics which should be covered are:</strong></p>\r\n<p>— Floods, earthquakes and cyclones</p>\r\n<p>— Temperature and precipitation</p>\r\n<p>— Location of countries between seas</p>\r\n<p>— Ocean currents</p>\r\n<p>— Climatic conditions in different regions</p>\r\n<p>— Westerlies, National highways and other infrastructure</p>\r\n<p>— Different types of soil, their conservation methods</p>\r\n<p>— National parks, wetlands, wildlife sanctuaries and biosphere reserves</p>\r\n<p>— Atmosphere</p>\r\n<p>— Natural vegetation</p>\r\n<p>— Flora and fauna</p>\r\n<p>— Rivers in India and their protection</p>\r\n<p>— Geographical region and regions</p>\r\n<p>— National Green tribunal, La Nina and El Nino</p>\r\n<p>— Environment and Agriculture</p>\r\n<p>Significant number of questions are asked from environment and agriculture in UPSC preliminary exam. Fundamentals concepts of the subject must be cleared in aspirants’ mind. Aspirants must have a fair knowledge about what all initiatives are being taken up globally for the protection, conservation and preservation of the environment; and for this having current affairs knowledge is also requisite.</p>\r\n<p>Besides, the other topics which should be covered are:</p>\r\n<p>— Eco- friendly technologies</p>\r\n<p>— Agriculture, crops, drainage and irrigation</p>\r\n<p>— International treaties, organisation and meeting on environment</p>\r\n<p>— International reports and list</p>\r\n<p>— Recent government reports on environment</p>\r\n<p>— National schemes for agriculture, irrigation</p>\r\n<p><strong>Science</strong></p>\r\n<p align=\"JUSTIFY\">For the coverage of science syllabus, students are not required to get very deep knowledge about the subject, as UPSC only checks the knowledge of candidates on current happenings in the science world. The Hindu and Indian express and some other source of current affairs would suffice the purpose.</p>\r\n<p align=\"JUSTIFY\">Apart from this, the topics which should be covered are:</p>\r\n<p align=\"JUSTIFY\">— Government schemes and initiative related to public health</p>\r\n<p align=\"JUSTIFY\">— Genetics (DNA Stem Cells)</p>\r\n<p align=\"JUSTIFY\">— Medicine and public health</p>\r\n<p align=\"JUSTIFY\">— Food and chemical</p>\r\n<p align=\"JUSTIFY\">— Gravitation</p>\r\n<p align=\"JUSTIFY\">— Plant and animal classification</p>\r\n<p align=\"JUSTIFY\">— Light and matter</p>\r\n<p align=\"JUSTIFY\">— Bt – Crops, nanotechnology, communication technology</p>\r\n<p align=\"JUSTIFY\">— Renewable sources of energy and eco-friendly technology</p>\r\n<p align=\"JUSTIFY\">— Nuclear energy, Work and energy</p>\r\n<p align=\"JUSTIFY\">— Missiles, space crafts and satellites</p>\r\n<p align=\"JUSTIFY\">— ICT, diseases and causes</p>', 'upsc-civil-services-prelims-exam-2018', '1', '', '2018-01-17 12:34:56', '2018-02-02 11:27:24'),
(2, 3, 'Today’s important articles/news in various newspapers (4th January)', '<p><strong>Dear aspirants, following are the links of various articles taken from various newspapers. Click the link to read further. To get notification, follow the blog. Thank you</strong></p>\r\n<p>1.&nbsp;<a href=\"http://www.thehindu.com/todays-paper/tp-opinion/understanding-bhima-koregaon/article22363075.ece\" target=\"_blank\" rel=\"noopener\">Understanding Bhima Koregaon</a></p>\r\n<p>Bhima Koregaon in Pune, Maharashtra, the seat of unrest now, is a tiny village, but is associated with an extraordinary phase of Maratha history. Two hundred years ago, on January 1, 1818, a few hundred Mahar soldiers of the East India Company, led by the British, defeated the massive Peshwa army, led by Peshwa Bajirao II, in Koregaon.</p>\r\n<p>2.&nbsp;<a href=\"http://www.thehindu.com/todays-paper/tp-opinion/citizen-count/article22363068.ece\" target=\"_blank\" rel=\"noopener\">Citizen count</a></p>\r\n<p>The draft of Assam’s National Register of Citizens is a first step, but it opens up concerns.</p>\r\n<p>3.&nbsp;<a href=\"http://www.thehindu.com/todays-paper/tp-opinion/money-talks/article22363069.ece\" target=\"_blank\" rel=\"noopener\">Money talks</a></p>\r\n<p>That the U.S. will continue to withhold $255 million in Foreign Military Financing to Pakistan this year suggests it is prepared to downgrade its ties with Pakistan further in an effort to hold it to account on terrorism.</p>\r\n<p>4.&nbsp;<a href=\"http://www.thehindu.com/todays-paper/tp-opinion/towards-a-genomics-revolution/article22363073.ece\" target=\"_blank\" rel=\"noopener\">Towards a genomics revolution</a></p>\r\n<p>India has the scientific resources for genetic research — all it needs is the vision at the national level to leverage them.</p>\r\n<p>5.&nbsp;<a href=\"http://www.livemint.com/Opinion/m0NpwpzyJ0t44JX7lcpguM/Agri-price-volatility.html\" target=\"_blank\" rel=\"noopener\">Agri price volatility</a></p>\r\n<p>Policy should focus on reducing volatility by allowing futures trading and encouraging investment in cold-storage facilities, along with a national market for agriculture.</p>\r\n<p><b>Thank you aspirants. To help us, Like and share us on your social media page and follow us.</b></p>', 'todays-important-articles-news-in-various-newspapers-4th-january', '1', '', '2018-01-17 12:34:56', '2018-02-01 06:40:24'),
(5, 3, 'UPSC Civil Services (prelims) 2018 exam notification issued today: Check details at upsc.gov.in', '&lt;!DOCTYPE html>\r\n&lt;html&gt;\r\n&lt;head&gt;\r\n&lt;/head&gt;\r\n&lt;body&gt;\r\n<p>By- <span xss=removed><span xss=removed>TOI-Online</span></span><span xss=removed> | </span><span xss=removed>Updated: Feb 7, 2018, 17:26 IST</span></p>\r\n<p><span xss=removed><img src=\"http://img01.ibnlive.in/ibnlive/uploads/2017/09/upsc-875.jpg\" alt=\"\" width=\"875\" height=\"583\"></span></p>\r\n<p><span xss=removed>The Union Public Service Commission (UPSC) today issued exam notification for the Civil Services Examination 2018 on it official website - upsc.gov.in.</span><br xss=removed><span xss=removed>Candidates must note that they can apply only till March 6, 2018 (last date). Aspirants need to keep in mind that only Civil Services (Preliminary) Examination applications are invited. The tentative date for preliminary examination is June 3, 2018.</span><br xss=removed><br xss=removed><span xss=removed>Steps to check </span><a class=\"key_underline\" href=\"https://timesofindia.indiatimes.com/topic/UPSC-notification\">UPSC notification</a><span xss=removed> 2018:</span><br xss=removed><br xss=removed><span xss=removed>1) Open the official portal of the commission - www.upsc.gov.in</span><br xss=removed><span xss=removed>2) Check out the \'Examination\' section on the page.</span><br xss=removed><span xss=removed>3) Now open the Civil Services Preliminary (CSP) Examination 2018.</span><br xss=removed><span xss=removed>4) Save the notification for future reference.</span><br xss=removed><br xss=removed><span xss=removed>Some important instructions to keep in mind</span><br xss=removed><br xss=removed><span xss=removed>1) Candidates must make sure to read the UPSC Civil Services notification properly before applying for the exam.</span><br xss=removed><span xss=removed>2) Once the form is submitted, no changes will be allowed. So be attentive while filling the form.</span><br xss=removed><span xss=removed>3) The form is available in two English and Hindi languages but can be filled in English language only.</span></p>\r\n<p><span xss=removed>4) The form is divided into two sections, in PART 1, candidates will have to provide basic information about themselves and in PART 2 there will be Payment details, selection of examination centre, uploading of Photograph and Signature and agreeing to declaration.</span></p>\r\n<div class=\"last7brdiv\" xss=removed> </div>\r\n<p><br xss=removed><span xss=removed>5) Application fee can be paid online through SBI net banking or by cash via SBI bank challan or through credit card/debit card.</span></p>\r\n<div class=\"last6brdiv\" xss=removed> </div>\r\n<p> </p>\r\n<div class=\"last5brdiv\" xss=removed> </div>\r\n<p><br xss=removed><span xss=removed>Those who qualify the prelims will be eligible for Civil Services (Main) Examination which is organised in two rounds. The first one being Preliminary (objective type) and the other Civil Services (Main) Examination (written and interview).</span></p>\r\n<p><span xss=removed>The civil services exams are conducted every year by the commission and those interested in applying for the same must have Bachelor\'s degree from a recognised university.<a title=\"UPSC Civil Services (prelims) 2018 \" href=\"https://timesofindia.indiatimes.com/home/education/news/upsc-civil-services-prelims-2018-exam-notification-issued-today-check-details-at-upsc-gov-in/articleshow/62821325.cms\" target=\"_blank\" rel=\"noopener\">https://timesofindia.indiatimes.com/home/education/news/upsc-civil-services-prelims-2018-exam-notification-issued-today-check-details-at-upsc-gov-in/articleshow/62821325.cms</a></span></p>\r\n<div class=\"last8brdiv\" xss=removed>\r\n<div class=\"sponsor_block clearfix loaded\" xss=removed>\r\n<ul id=\"129146-628213251\" class=\"colombiatracked\" xss=removed data-skew=\"0\" data-ad-size=\"[0,370]\" data-expansion-size=\"[0,480]\" data-adwidth=\"640\" data-adheight=\"360\" data-loop=\"0\" data-cb=\"processCtnAds\" data-callback=\"sponsorAdSuccess\" data-position=\"628213251\" data-slot=\"129146\" data-autoplay=\"false\" data-native-vid-tmpl=\"ctn_belly_vid\" data-native-tmpl=\"ctn_midarticle\" data-desc-len=\"90\">\r\n<li xss=removed> </li>\r\n</ul>\r\n</div>\r\n</div>\r\n&lt;/body&gt;\r\n&lt;/html&gt;', 'upsc-civil-services-prelims-2018-exam-notification-issued-today-check-details-at-upscgovin', '1', '49.205.220.187', '2018-02-07 17:41:19', '2018-02-07 17:42:27');

-- --------------------------------------------------------

--
-- Table structure for table `honey_moon`
--

CREATE TABLE `honey_moon` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `no_of_days` varchar(225) NOT NULL,
  `deluxe` varchar(255) NOT NULL,
  `luxury` varchar(225) NOT NULL,
  `star` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `honey_moon`
--

INSERT INTO `honey_moon` (`id`, `title`, `description`, `no_of_days`, `deluxe`, `luxury`, `star`, `image`, `date_added`, `date_modified`) VALUES
(1, 'MYSORE', 'Day 01 : Depart. 6.30 a.m. to Srirangapatana visit Sri Ranganatha Swamy Temple, Tippu Fort, Gumbuz, Water Gate, Ruins of Tippu Palace, Jumma Masjid E-Alam, Place where Dead body of Tippu Sultan found.&lt;br&gt;Mysore : St. Philominas Roman Catholic Church, Chamundi Hills, Nandi, Mysore Maharaja Palace, Museum, &amp; Brindavan Gardens with Musical Fountain.. Depart. to Bangalore.', '1 Day', '850', 'NA', 'NA', '1522734893.jpg', '2018-03-19 06:22:16', '2018-04-03 05:54:53'),
(2, 'MYSORE-OOTY', 'Day 01 : Depart. 6.30 a.m. to Srirangapatana visit Sri Ranganatha Swamy Temple, Tippu Fort, Gumbuz, Water Gate, Ruins of Tippu Palace, Jumma Masjid E-Alam, Place where Dead body of Tippu Sultan found.Mysore : St. Philominas Roman Catholic Church, Chamundi Hills, Nandi, Mysore Maharaja Palace, Museum, &amp; Brindavan Gardens with Musical Fountain. NIGHT HALT.&lt;br&gt;Day 02 : Morning Depart to ooty, visit Bandipur National wildlife sanctuary Ooty Botonical Garden, Ooty Lake,.&lt;br&gt;Day 03 : ARR BANGALORE&lt;br&gt;PACKAGE INCLUDES: Package includes Transportation Bangalore to Mysore by 35seater Air Bus , Sight seeing Mysore - Ooty - Mysore by mini bus &amp; Mysore to Banglore by 35 Seater air bus &amp; Accommodation (Guide and Entrance Fees extra).', '1 NIGHT/2 DAYS', '1650', '2100', '2600', '1521440649.jpg', '2018-03-19 06:24:09', '2018-03-19 06:24:09'),
(3, 'MYSORE-OOTY-COONOOR', 'Day 01 : Depart. 6.30 a.m. to Srirangapatana visit Sri Ranganatha Swamy Temple, Tippu Fort, Gumbuz, Water Gate, Ruins of Tippu Palace, Jumma Masjid E-Alam, Place where Dead body of Tippu Sultan found.Mysore : St. Philominas Roman Catholic Church, Chamundi Hills, Nandi, Mysore Maharaja Palace, Museum, &amp; Brindavan Gardens with Musical Fountain. NIGHT HALT.&lt;br&gt;Day 02 : Morning Depart to ooty, visit Bandipur National wildlife sanctuary Ooty Botonical Garden, Ooty Lake, NIGHT HALT&lt;br&gt;Day 03 : Morning check out of hotel, Depart. 9.00 a.m. to Coonoor sight seeing, visit Sims park Dolphins Nose &amp; Lambs Rock. Doddabetta (8648 ft. above sea level) telescope House , evening Depart to Bangalore.&lt;br&gt;Day 04 : ARR BANGALORE&lt;br&gt;PACKAGE INCLUDES: Package includes Transportation Bangalore to Mysore 35 seater Air Bus , Sight seeing Mysore - Ooty â€“ Coonoor by mini bus ,Ooty to Bangalore by Ksrtc Rajahamsa bus &amp; Accommodation (Guide and Entrance Fees extra).', '2 NIGHTS/3 DAYS', '2500', '3200', '4500', '1521440756.jpg', '2018-03-19 06:25:56', '2018-03-19 06:25:56'),
(4, 'MYSORE-OOTY-KODAI', 'Day 01 : Depart. 6.30 a.m. to Srirangapatana visit Sri Ranganatha Swamy Temple, Tippu Fort, Gumbuz, Water Gate, Ruins of Tippu Palace, Jumma Masjid E-Alam, Place where Dead body of Tippu Sultan found.Mysore : St. Philominas Roman Catholic Church, Chamundi Hills, Nandi, Mysore Maharaja Palace, Museum, &amp; Brindavan Gardens with Musical Fountain. NIGHT HALT.&lt;br&gt;Day 02 : Morning Depart to ooty, visit Bandipur National wildlife sanctuary Ooty Botonical Garden, Ooty Lake, NIGHT HALT&lt;br&gt;Day 03 : Morning check out of hotel, Depart to Kodai ,Eve Arr Kodai Check in Hotel NIGHT HALT&lt;br&gt;Day 04 : Check out Depart to Kodai Sight Seeing, visit Pillar Rock, Green valley lake, Solar Physical Observatory, Bryants park, evening Depart to Bangalore.&lt;br&gt;Day 05 : ARR BANGALORE&lt;br&gt;PACKAGE INCLUDES: Package includes Transportation Bangalore to Mysore 35 seater Air Bus , Sight seeing Mysore - Ooty â€“ Kodai by mini bus &amp; Kodai to Bangalore by 35 seater Air bus &amp; Accommodation (Guide and Entrance Fees extra).', '3 NIGHTS/4 DAYS', '3800', '5400', '6500', '1521441124.jpg', '2018-03-19 06:32:04', '2018-03-19 06:32:04'),
(5, 'MYSORE-OOTY-COONOOR-KODAI', 'Day 01 : Depart. 6.30 a.m. to Srirangapatana visit Sri Ranganatha Swamy Temple, Tippu Fort, Gumbuz, Water Gate, Ruins of Tippu Palace, Jumma Masjid E-Alam, Place where Dead body of Tippu Sultan found.Mysore : St. Philominas Roman Catholic Church, Chamundi Hills, Nandi, Mysore Maharaja Palace, Museum, &amp; Brindavan Gardens with Musical Fountain. NIGHT HALT.&lt;br&gt;Day 02 : Morning Depart to ooty, visit Bandipur National wildlife sanctuary Ooty Botonical Garden, Ooty Lake, NIGHT HALT&lt;br&gt;Day 03 : Depart. 9.00 a.m. to Coonoor sight seeing, visit Sims park Dolphins Nose &amp; Lambs Rock. Doddabetta (8648 ft. above sea level) telescope House NIGHT HALT&lt;br&gt;Day 04 : Morning check out of hotel, Depart to Kodai ,Eve Arr Kodai Check in Hotel NIGHT HALT&lt;br&gt;Day 05 : Check out Depart to Kodai Sight Seeing, visit Pillar Rock, Green valley lake, Solar Physical Observatory, Bryants park, evening Depart to Bangalore.&lt;br&gt;Day 06 : ARR BANGALORE&lt;br&gt;PACKAGE INCLUDES: Package includes Transportation Bangalore to Mysore 35 seater Air Bus , Sight seeing Mysore - Ooty â€“ Kodai by mini bus &amp; Kodai to Bangalore by 35 seater Air bus &amp; Accommodation (Guide and Entrance Fees extra).', '4 NIGHTS/5 DAYS', '4500', '6500', '8000', '1521441241.jpg', '2018-03-19 06:34:01', '2018-03-19 06:34:01'),
(6, 'MYSORE-OOTY-COONOOR-KODAI-MADURI-RAMESHWARAM-KANAYAKUMARI', 'Day 01 : Depart. 6.30 a.m. to Srirangapatana visit Sri Ranganatha Swamy Temple, Tippu Fort, Gumbuz, Water Gate, Ruins of Tippu Palace, Jumma Masjid E-Alam, Place where Dead body of Tippu Sultan found.Mysore : St. Philominas Roman Catholic Church, Chamundi Hills, Nandi, Mysore Maharaja Palace, Museum, &amp; Brindavan Gardens with Musical Fountain. NIGHT HALT.&lt;br&gt;Day 02 : Morning Depart to ooty, visit Bandipur National wildlife sanctuary Ooty Botonical Garden, Ooty Lake, NIGHT HALT&lt;br&gt;Day 03 : Depart. 9.00 a.m. to Coonoor sight seeing, visit Sims park Dolphins Nose &amp; Lambs Rock. Doddabetta (8648 ft. above sea level) telescope House NIGHT HALT&lt;br&gt;Day 04 : Morning check out of hotel, Depart to Kodai ,Eve Arr Kodai Check in Hotel NIGHT HALT&lt;br&gt;Day 05 : Check out Depart to Kodai Sight Seeing, visit Pillar Rock, Green valley lake, Solar Physical Observatory, Bryants park, evening Depart to Madurai.&lt;br&gt;Day 06 : Noon Depart to Maduri Sight Seeing visit Madurai Meenakshi Temple, Choknadhar Templetemple, Alagar templ, lord Muruga temple and night at Madurai. NIGHT HALT&lt;br&gt;Day 07 : Check Out Depart Rameshwaram visit Hanumam temple (24ft)Pamban Bridge, Navapanigriham, kasha Viswanath Temple, 24 Undalas, Ram parvath, Sita Parvath, Hanuman Parvath, Vishnu temple Back Maduri,Depart to Kanyakumari NIGHT HALT&lt;br&gt;Day 08 : Morning Check Out Departart to Kanyakumari , visit sunrise temple, Triveni Sangam, Devi kumara Amman Temple, Gandhi Mantapam, Kamrajmani Mantapam, Vivekananda Rock, Tiruvalluer statue(133ft)SusunderamTemple Back Maduri Depart To Bangalore NIGHT DEPART&lt;br&gt;Day 09 : ARR BANGALORE&lt;br&gt;PACKAGE INCLUDES: Package includes Transportation Bangalore to Mysore 35 seater Air Bus , Sight seeing By Mysore - Ooty â€“ Coonoor-Kodai-Maduri-Rameshwaram-kanayakumari by mini bus , Maduri to Bangalore by 35 seater Air bus &amp; Accommodation (Guide and Entrance Fees extra)', '7 NIGHTS/8 DAYS', '7400', '9800', '14200', '1521441386.jpg', '2018-03-19 06:36:26', '2018-03-19 06:36:26'),
(7, 'OOTY-COONOOR-FILMICHAKKAR', 'Day 01 : Depart to Ooty Night Depart&lt;br&gt;Day 02 : Arr Ooty Check In hotel Free Day Night halt&lt;br&gt;Day 03 : Depart To Ooty &amp; Coonoor Sight Seeing visit Sims park Dolphins Nose &amp; Lambs Rock. Doddabetta (8648 ft. above sea level) telescope House Ooty Botonical Garden, Ooty Lake. NIGHT HALT&lt;br&gt;Day 04 : Check Out Depart To Filmichakkar Sight Seeing EVE DEPART TO BANGALORE&lt;br&gt;Day 05 : ARR BANGALORE&lt;br&gt;PACKAGE INCLUDES: Transportaion by Bangalore-Ooty-Bangalore 35 seater K S R T C RAJAHAMSA Bus, Sight seeing by minibus &amp; Accommondation (Guide and Entrans Fees extra).', '2 NIGHTS/3 DAYS', '2600', '3500', '4500', '1521441512.jpg', '2018-03-19 06:38:32', '2018-03-19 06:38:32'),
(8, 'OOTY-COONOOR-KODAI-MADURI-RAMESHWARAM-KANAYAKUMARI', 'Day 01 : Depart to Ooty NIGHT DEPART&lt;br&gt;Day 02 : Arr Ooty Check in Hotel Free Day NIGHT HALT&lt;br&gt;Day 03 : Depart. 9.00 a.m. to Ooty &amp; Coonoor sight seeing, visit Sims park Dolphins Nose &amp; Lambs Rock. Doddabetta (8648 ft. above sea level) telescope House Ooty Botonical Garden, Ooty Lake. NIGHT HALT&lt;br&gt;Day 04 : Morning check out of hotel, Depart to Kodai ,Eve Arr Kodai Check in Hotel NIGHT HALT&lt;br&gt;Day 05 : Check out Depart to Kodai Sight Seeing, visit Pillar Rock, Green valley lake, Solar Physical Observatory, Bryants park, evening Departart MADURI NIGHT HALT&lt;br&gt;Day 06 : Noon Depart to Maduri Sight Seeing visit Madurai Meenakshi Temple, Choknadhar Templetemple, Alagar templ, lord Muruga temple and night at Madurai. NIGHT HALT&lt;br&gt;Day 07 : Check Out Depart Rameshwaram visit Hanumam temple (24ft)Pamban Bridge, Navapanigriham, kasha Viswanath Temple, 24 Undalas, Ram parvath, Sita Parvath, Hanuman Parvath, Vishnu temple Back Maduri,Depart to Kanyakumari NIGHT HALT&lt;br&gt;Day 08 : Morning Check Out Departart to Kanyakumari , visit sunrise temple, Triveni Sangam, Devi kumara Amman Temple, Gandhi Mantapam, Kamrajmani Mantapam, Vivekananda Rock, Tiruvalluer statue(133ft)SusunderamTemple Back Maduri Depart To Bangalore NIGHT DEPART&lt;br&gt;Day 09 : ARR BANGALORE&lt;br&gt;PACKAGE INCLUDES: Transportation by Bangalore to Ooty 35 seater Air Bus, Sight seeing By Ooty â€“ Coonoor-Kodai-Maduri-Rameshwaram-kanayakumari by mini bus, Maduri to Bangalore by 35 seater Air bus &amp; Accommondation. (Guide and Entrance Fees extra)', '6 NIGHTS/7 DAYS', '6700', '8900', '12900', '1521441654.jpg', '2018-03-19 06:40:54', '2018-03-19 06:40:54'),
(9, 'MADURAI-RAMESHWARAM', 'Day 01 : Depart to Madurai NIGHT DEPART&lt;br&gt;Day 02 : Arr Madurai Check in Hotel, Depart 1.00 p.m to visit Madurai Meenakshi Temple, Choknadhar Templetemple, Alagar templ, lord Muruga temple NIGHT HALT&lt;br&gt;Day 03 : Check Out Depart Rameshwaram visit Hanumam temple (24ft)Pamban Bridge, Navapanigriham, kasha Viswanath Temple, 24 Undalas, Ram parvath, Sita Parvath, Hanuman Parvath, Vishnu temple Back Maduri,Depart to Bangalore NIGHT DEPART&lt;br&gt;PACKAGE INCLUDES: Transportation by Bangalore to Madurai 35 seater Air Bus , Sight seeing Maduri-Rameshwaram -Maduri by mini bus, Maduri to Bangalore by 35 seater Air bus &amp; Accommondation. (Guide and Entrance Fees extra)', '1 NIGHT/2 DAYS', '2200', '3000', '3800', '1521441820.jpg', '2018-03-19 06:43:40', '2018-03-19 06:43:40'),
(10, 'MADURAI-RAMESHWARAM-KANYAKUMARI', 'Day 01 : Depart to Madurai NIGHT DEPART&lt;br&gt;Day 02 : Arr Madurai Check in Hotel, Depart 1.00 p.m to visit Madurai Meenakshi Temple, Choknadhar Templetemple, Alagar templ, lord Muruga temple NIGHT HALT&lt;br&gt;Day 03 : Check Out Depart Rameshwaram visit Hanumam temple (24ft)Pamban Bridge, Navapanigriham, kasha Viswanath Temple, 24 Undalas, Ram parvath, Sita Parvath, Hanuman Parvath, Vishnu temple Back Maduri,Depart to Kanniyakumari NIGHT DEPART&lt;br&gt;Day 04 : Morning Check Out Departart to Kanyakumari , visit sunrise temple, Triveni Sangam, Devi kumara Amman Temple, Gandhi Mantapam, Kamrajmani Mantapam, Vivekananda Rock, Tiruvalluer statue(133ft)SusunderamTemple Back Maduri Depart To Bangalore NIGHT DEPART&lt;br&gt;Day 05 : ARR BANGALORE&lt;br&gt;PACKAGE INCLUDES: Transportation by Bangalore to Madurai 35 seater Air Bus, Sight seeing Maduri-Rameshwaram-kanayakumari-Maduri by mini bus , Maduri to Bangalore by 35 seater Air bus &amp; Accommondation. (Guide and Entrance Fees extra)', '2 NIGHTS/3 DAYS', '3300', '5000', '6500', '1521441943.jpg', '2018-03-19 06:45:43', '2018-03-19 06:45:43'),
(11, 'MADURAI-RAMESHWARAM-KANYAKUMARI', 'Day 01 : Depart to Madurai NIGHT DEPART&lt;br&gt;Day 02 : Arr Madurai Check in Hotel, Depart 1.00 p.m to visit Madurai Meenakshi Temple, Choknadhar Templetemple, Alagar templ, lord Muruga temple NIGHT HALT&lt;br&gt;Day 03 : Check Out Depart Rameshwaram visit Hanumam temple (24ft)Pamban Bridge, Navapanigriham, kasha Viswanath Temple, 24 Undalas, Ram parvath, Sita Parvath, Hanuman Parvath, Vishnu temple NIGHT HALT&lt;br&gt;Day 04 : Check out Depart to Rameshwaram to Kanyakumari NIGHT HALT&lt;br&gt;Day 05 : Morning Check Out Departart to Kanyakumari , visit sunrise temple, Triveni Sangam, Devi kumara Amman Temple, Gandhi Mantapam, Kamrajmani Mantapam, Vivekananda Rock, Tiruvalluer statue(133ft)SusunderamTemple Back Maduri Depart To Bangalore NIGHT DEPART&lt;br&gt;Day 06 : ARR BANGALORE&lt;br&gt;PACKAGE INCLUDES: Transportation by Bangalore to Madurai 35 seater Air Bus, Sight seeing Maduri-Rameshwaram-kanayakumari-Maduri by mini bus , Maduri to Bangalore by 35 seater Air bus &amp; Accommondation. (Guide and Entrance Fees extra)', '3 NIGHTS/4 DAYS', '4200', '5800', '7000', '1521442067.jpg', '2018-03-19 06:47:47', '2018-03-19 06:47:47'),
(12, 'MADURAI-KODAI-RAMESHWARAM-KANYAKUMARI', 'Day 01 : Depart to Madurai NIGHT DEPART&lt;br&gt;Day 02 : Arr Madurai Check in Hotel, Depart 1.00 p.m to visit Madurai Meenakshi Temple, Choknadhar Templetemple, Alagar templ, lord Muruga temple NIGHT HALT&lt;br&gt;Day 03 : Check Out Depart Rameshwaram visit Hanumam temple (24ft)Pamban Bridge, Navapanigriham, kasha Viswanath Temple, 24 Undalas, Ram parvath, Sita Parvath, Hanuman Parvath, Vishnu temple NIGHT HALT&lt;br&gt;Day 04 : Check out Depart to Rameshwaram to Kanyakumari NIGHT HALT&lt;br&gt;Day 05 : Morning Check Out Departart to Kanyakumari , visit sunrise temple, Triveni Sangam, Devi kumara Amman Temple, Gandhi Mantapam, Kamrajmani Mantapam, Vivekananda Rock, Tiruvalluer statue(133ft)SusunderamTemple Back Maduri Depart To Bangalore NIGHT DEPART&lt;br&gt;Day 06 : ARR BANGALORE&lt;br&gt;PACKAGE INCLUDES: Transportation by Bangalore to Madurai 35 seater Air Bus, Sight seeing Maduri-Rameshwaram-kanayakumari-Maduri by mini bus , Maduri to Bangalore by 35 seater Air bus &amp; Accommondation. (Guide and Entrance Fees extra)', '3 NIGHTS/4 DAYS', '4200', '5800', '7000', '1521442183.jpg', '2018-03-19 06:49:43', '2018-03-19 06:49:43'),
(13, 'PONDICHERY', 'Day 01 : Dep. 9.00 p.m. to Pondichery NIGHT DEPART&lt;br&gt;Day 02 : Arrival Pondichery morning check in hotel free Day NIGHT HALT&lt;br&gt;Day 03 : Check out Depart to Pondicherry sight seeing, visit sri Aurobindo Ashram, Auroville Beach, Tree House- Chunnambar Beach, Munnukula Temple, Bharathi Park. Night Depart to Bangalore. NIGHT DEPART&lt;br&gt;PACKAGE INCLUDES: Transportation by Volvo / Non A/c (Subject to Availability) Sight Seeing by Individual Car (A/c Accommodation).', '1 NIGHT/2 DAYS', '3500', '4100', '5500', '1521442258.jpg', '2018-03-19 06:50:58', '2018-03-19 06:50:58'),
(14, 'PONDICHERY-MAHABALIPURAM', 'Day 01 : Dep. 9.00 p.m. to Pondichery NIGHT DEPART&lt;br&gt;Day 02 : Arrival Pondichery morning check in hotel free Day NIGHT HALT&lt;br&gt;Day 03 : Check out Depart to Pondicherry sight seeing, visit sri Aurobindo Ashram, Auroville Beach, Tree House- Chunnambar Beach, Munnukula Temple, Bharathi Park. Night Depart to Bangalore. NIGHT DEPART&lt;br&gt;PACKAGE INCLUDES: Transportation by Volvo / Non A/c (Subject to Availability) Sight Seeing by Individual Car (A/c Accommodation).', '1 NIGHT/2 DAYS', '4500', '5000', '6000', '1521442364.jpg', '2018-03-19 06:52:44', '2018-03-19 06:52:44'),
(15, 'GOA', 'Day 01 : Depart to Goa NIGHT DEPART&lt;br&gt;Day 02 : Arr Goa, check in Hotel Free Day Night Halt&lt;br&gt;Day 03 : Depart to South Goa sight seeing visit, Harbour Point, Bogmalo Beach, Old Goa Church, Shree Mangusesh Temple, Shre Shantadurga Temple, Colva Beach, and Evening Boat Cruise Night Halt&lt;br&gt;Day 04 : Check out Hotel, North Goa Soght seeing visit, River Cruise, Calagute Beaches, fort Aguda, Light House point, Guada Beach, Vagaotor Beach, Anjuna Beach and night Depart to Bangalore. NIGHT DEPART.&lt;br&gt;PACKAGE INCLUDES: Transportation by Multi Axle Volvo / Volvo Bus, sight seeing by Mini Bus, Boat Cruise Ticket &amp; Accommodation (Guide &amp; Entrance Fees Extra)', '2 NIGHTS / 3 DAYS', '5000', '6200', '8500', '1521442445.jpg', '2018-03-19 06:54:05', '2018-03-19 06:54:05'),
(16, 'GOA', 'Day 01 : Depart to Goa NIGHT DEPART&lt;br&gt;Day 02 : Arr Goa, check in Hotel Free Day Night Halt&lt;br&gt;Day 03 : Depart to South Goa sight seeing visit, Harbour Point, Bogmalo Beach, Old Goa Church, Shree Mangusesh Temple, Shre Shantadurga Temple, Colva Beach, and Evening Boat Cruise Night Halt&lt;br&gt;Day 04 : Free Day Night Halt&lt;br&gt;Day 05 : Check out Hotel, North Goa Soght seeing visit, River Cruise, Calagute Beaches, fort Aguda, Light House point, Guada Beach, Vagaotor Beach, Anjuna Beach and night Depart to Bangalore. NIGHT DEPART.&lt;br&gt;PACKAGE INCLUDES: Transportation by Multi Axle Volvo / Volvo Bus, sight seeing by Mini Bus, Boat Cruise Ticket &amp; Accommodation (Guide &amp; Entrance Fees Extra)', '3 NIGHTS / 4 DAYS', '5800', '7000', '9300', '1521442540.jpg', '2018-03-19 06:55:40', '2018-03-19 06:55:40'),
(17, 'MUNNAR', 'Day 01 : Depart to Munnar Night Depart&lt;br&gt;Day 02 : Arr Munnar Chick in Hotel Free Day Night Halt&lt;br&gt;Day 03 : Dep to Munnar sightseeing, visit Mettupatti Dam, Breeding Farm,Echo point, Kundala Dam. Night Halt&lt;br&gt;Day 04 : Half day Sight Seeing &amp; Noon Depart to Bengalore NOON DEPART.&lt;br&gt;PACKAGE INCLUDES: Transportation by Sleeper / Seater Hi tech Bus,Sight seeing by individual Car &amp; Accommodation (Entrance Fees Extra).', '2 NIGHTS / 3 DAYS', '4000', '5200', '7000', '1521442637.jpg', '2018-03-19 06:57:17', '2018-03-19 06:57:17'),
(18, 'MUNNAR-THEKKADY', 'Day 01 : Depart to Munnar Night Depart&lt;br&gt;Day 02 : Arr Munnar Chick in Hotel Free Day Night Halt&lt;br&gt;Day 03 : Dep to Munnar sightseeing, visit Mettupatti Dam, Breeding Farm,Echo point, Kundala Dam. Night Halt&lt;br&gt;Day 04 : Check out Depart Munnar To Thekkady sight seeing Visit, wild life Sanctuary known for its Abundant Flora and Fauna, boat ride at periyar Lake. Night Halt&lt;br&gt;Day 04 : Check out Depart Munnar To Thekkady sight seeing Visit, wild life Sanctuary known for its Abundant Flora and Fauna, boat ride at periyar Lake. Night Halt&lt;br&gt;Day 05 : Check Out dep to Munnar, Eve Depart to Bengalore Eve DEPART.&lt;br&gt;PACKAGE INCLUDES: Transportation by Sleeper / Seater Hi tech Bus, Munnar - Thekkady by Car, sight seeing by car &amp; Accommodation (Entrance Fees Extra)', '3 NIGHTS/4 DAYS', '5800', '7300', '9500', '1521442807.jpg', '2018-03-19 07:00:07', '2018-03-19 07:00:07'),
(19, 'MUNNAR-THEKKADY-ALLEPPY-COCHIN', 'Day 01 : Depart to Munnar Night Depart&lt;br&gt;Day 02 : Arr Munnar Chick in Hotel Free Day Night Halt&lt;br&gt;Day 03 : Dep to Munnar sightseeing, visit Mettupatti Dam, Breeding Farm,Echo point, Kundala Dam. Night Halt&lt;br&gt;Day 04 : Check out Depart Munnar To Thekkady sight seeing Visit, wildlife Sanctuary known for its Abundant Flora and Fauna, boat ride at periyar Lake. Night Halt&lt;br&gt;Day 05 : Dep to Alleppy by car Arr at Noon Check in House Boat Visit Interior of Alleppy. Ancient Churches, Tiny Islands of Alleppey Night Halt&lt;br&gt;Day 06 : Morning Check out House Boat proceed to Cochin by Car visit Harbour house,cherai Beach etc and Depart To Bangalore. EVE Depart&lt;br&gt;PACKAGE INCLUDES: Transportation by Sleeper / Seater by Hi tech Bus , Munnar-Thekkady-Alleppy-Cochin by Car. sight seeing by car, Lunch - Breakfast - Dinner provided in house boat, Cochin to BLR by Multi axle/ Volvo &amp; Accommodation (Entrance Fees Extra)', '4 NIGHTS/5 DAYS', '11300', '12900', '15800', '1521442934.jpg', '2018-03-19 07:02:14', '2018-03-19 07:02:14'),
(20, 'MUNNAR-THEKKADY -ALLEPPY -KOVALAM', 'Day 01 : Depart to Munnar Night Depart&lt;br&gt;Day 02 : Arr Munnar Chick in Hotel Free Day Night Halt&lt;br&gt;Day 03 : Dep to Munnar sightseeing, visit Mettupatti Dam, Breeding Farm,Echo point, Kundala Dam. Night Halt&lt;br&gt;Day 04 : Check out Depart Munnar To Thekkady sight seeing Visit, wild life Sanctuary known for its Abundant Flora and Fauna, boat ride at periyar Lake. Night Halt&lt;br&gt;Day 05 : Dep to Alleppy by car Arr at Noon Check in House Boat Visit Interior of Alleppy. Ancient Churches, Tiny Islands of Alleppey Night Halt&lt;br&gt;Day 06 : Check out House Boat Dep to Kovalam NIGHT HALT&lt;br&gt;Day 07 : Check out Hotel and Kovalam sight seeing visit, kovalam Beach and Depart to Bangalore. Night Depart&lt;br&gt;PACKAGE INCLUDES: Transportation by Sleeper / Seater by Hi tech Bus , Munnar-Thekkady-Alleppy-Kovalam by Car. sight seeing by car, Lunch - Breakfast - Dinner provided in house boat, Trivandram to BLR by Multi axle/ Volvo &amp; Accommodation (Entrance Fees Extra)', '5 NIGHTS/6 DAYS', '13800', '15500', '17900', '1521443077.jpg', '2018-03-19 07:04:37', '2018-03-19 07:04:37'),
(21, 'KODAI - MUNNAR', 'Day 01 : Depart to to Kodai Night Depart&lt;br&gt;Day 02 : Arr Kodai morning check in Hotel after fresh up Depart to Kodai sight seeing visit, Pillar Roack, Green Valley Lake, Silver Cascade, Bryants park. Night Halt&lt;br&gt;Day 03 : Depart to Munnar Arr. Noon check in Hotel Night Halt&lt;br&gt;Day 04 : Depart to Munnar sight seeing visit, visit Mettupatti Dam, indo swiss cattle, Breeding Farm, Echo point, Kundala Dam, same day night Depart to Bengalore. . Night Depart.&lt;br&gt;PACKAGE INCLUDES: Transportation BLR to Kodai by 35 Seater Bus. All Sight seeing by Car, Kodai to Munnar by car, Munnar - BLR by Sleeper / Seater &amp; Accommodation (Guide &amp; Entrance Fees Extra)', '2 NIGHTS/3 DAYS', '5500', '6500', '8200', '1521443176.jpg', '2018-03-19 07:06:16', '2018-03-19 07:06:16'),
(22, 'KODAI - MUNNAR', 'Day 01 : Depart to to Kodai Night Depart&lt;br&gt;Day 02 : Arr Kodai morning check in Hotel after fresh up Depart to Kodai sight seeing visit, Pillar Roack, Green Valley Lake, Silver Cascade, Bryants park. Night Halt&lt;br&gt;Day 03 : Depart to Munnar Arr. Noon check in Hotel Night Halt&lt;br&gt;Day 04 : Depart to Munnar sight seeing visit, visit Mettupatti Dam, indo swiss cattle, Breeding Farm, Echo point, Kundala Dam, same day night Depart to Bengalore. . Night Depart.&lt;br&gt;Day 05 : Free Day and Noon Depart to Bengalore Night Depart&lt;br&gt;PACKAGE INCLUDES: Transportation BLR to Kodai by 35 Seater Bus. All Sight seeing by Car, Kodai to Munnar by car, Munnar - BLR by Sleeper / Seater &amp; Accommodation (Guide &amp; Entrance Fees Extra)', '3 NIGHTS/4 DAYS', '6200', '7500', '9600', '1521443292.jpg', '2018-03-19 07:08:12', '2018-03-19 07:08:12'),
(23, 'KODAI &ndash; MUNNAR-ALLEPPY-COCHIN', 'Day 01 : Depart to to Kodai Night Depart&lt;br&gt;Day 02 : Arr Kodai morning check in Hotel after fresh up Depart to Kodai sight seeing visit, Pillar Roack, Green Valley Lake, Silver Cascade, Bryants park. Night Halt&lt;br&gt;Day 03 : Depart to Munnar Arr. Noon check in Hotel Night Halt&lt;br&gt;Day 04 : Depart to Munnar sight seeing visit, visit Mettupatti Dam, indo swiss cattle, Breeding Farm, Echo point, Kundala Dam, same day night Depart to Bengalore. . Night Depart.&lt;br&gt;Day 05 : Morning Depart to Alleppy Check in Noon to house boat, visit Tiny Islands, Villages, Churches, etc., Night Halt&lt;br&gt;Day 06 : Morning Check out House Boat proceed to Cochin by Car visit Harbour house,cherai Beach etc and Depart To Bangalore. Eve DEP&lt;br&gt;PACKAGE INCLUDES: Transportation BLR to Kodai by 35 Seater Bus. All Sight seeing by Car, Kodai - Munnar â€“ Alleppy-Cochin by car, Lunch - Breakfast - Dinner provided in House Boat, Cochin to BLR by Multi axle/Volvo &amp; Accommodation (Guide &amp; Entrance Fees Extra)', '5 NIGHTS/6 DAYS', '11900', '13800', '15800', '1521443979.jpg', '2018-03-19 07:19:39', '2018-03-29 13:22:21'),
(24, 'KODAI &ndash; MUNNAR-ALLEPPY-KOVALAM', 'Day 01 : Depart to to Kodai Night Depart&lt;br&gt;Day 02 : Arr Kodai morning check in Hotel after fresh up Depart to Kodai sight seeing visit, Pillar Roack, Green Valley Lake, Silver Cascade, Bryants park. Night Halt&lt;br&gt;Day 03 : Depart to Munnar Arr. Noon check in Hotel Night Halt&lt;br&gt;Day 04 : Depart to Munnar sight seeing visit, visit Mettupatti Dam, indo swiss cattle, Breeding Farm, Echo point, Kundala Dam, same day night Depart to Bengalore. . Night Depart.&lt;br&gt;Day 05 : Morning Depart to Alleppy Check in Noon to house boat, visit Tiny Islands, Villages, Churches, etc., Night Halt&lt;br&gt;Day 06 : Morning Check out House Boat proceed to Cochin by Car visit Harbour house,cherai Beach etc and Depart To Bangalore. Eve DEP&lt;br&gt;Day 07 : Check out Dep Kovalam sight seeing visit, kovalam Beach and Depart to Bangalore. . Night Depart&lt;br&gt;PACKAGE INCLUDES: Transportation BLR to Kodai by 35 Seater Bus. All Sight seeing by Car, Kodai - Munnar â€“ Alleppy-Kovalam by car, Lunch - Breakfast - Dinner provided in House Boat, Trivandram to BLR by Multi axle/Volvo &amp; Accommodation (Guide &amp; Entrance Fees Extra)', '5 NIGHTS/6 DAYS', '14500', '15900', '18200', '1521444819.jpg', '2018-03-19 07:33:39', '2018-03-19 07:33:39'),
(25, 'OOTY- KODAI - MUNNAR', 'Day 01 : Depart to Ooty Night Depart&lt;br&gt;Day 02 : Arr Ooty Check in hotel, Depart To Ooty &amp; Coonoor Sight Seeing visit Sims park Dolphins Nose &amp; Lambs Rock. Doddabetta (8648 ft. above sea level) telescope House Ooty Botonical Garden, Ooty Lake. Night halt&lt;br&gt;Day 03 : Check out Depart to kodai, Eve Arr kodai Night halt&lt;br&gt;Day 04 : Check out Depart. to Kodai sight seeing visit Pillar Rock, Green valley lake, Solar Physical Observatory, Bryants park. Night Halt&lt;br&gt;Day 05 : Depart to Munnar Arr. Noon check in Hotel Night Halt&lt;br&gt;Day 06 : Depart to Munnar sight seeing visit, visit Mettupatti Dam, indo swiss cattle, Breeding Farm, Echo point, Kundala Dam. Night Halt&lt;br&gt;Day 07 : Free Day and Noon Depart to Bengalore Night Depart&lt;br&gt;PACKAGE INCLUDES: Transportation Bangalore - Ooty by 35 seater bus. Ooty - Kodia Sight Seeing by mini bus, Kodai - Munnar by car, Munnar Sight Seeing by cab Munnar - Bangalore Sleeper/Seater &amp; Accommodation (Guide and Entrance Fees extra)', '5 NIGHTS/6 DAYS', '7500', '9900', '13900', '1521445006.jpg', '2018-03-19 07:36:46', '2018-03-19 07:36:46'),
(26, 'OOTY- KODAI &ndash; MUNNAR-ALLEPPY-COCHIN', 'Day 01 : Depart to Ooty Night Depart&lt;br&gt;&lt;br&gt;Day 02 : Arr Ooty Check in hotel, Depart To Ooty &amp; Coonoor Sight Seeing visit Sims park Dolphins Nose &amp; Lambs Rock. Doddabetta (8648 ft. above sea level) telescope House Ooty Botonical Garden, Ooty Lake. Night halt&lt;br&gt;Day 03 : Check out Depart to kodai, Eve Arr kodai Night halt&lt;br&gt;Day 04 : Check out Depart. to Kodai sight seeing visit Pillar Rock, Green valley lake, Solar Physical Observatory, Bryants park. Night Halt&lt;br&gt;Day 05 : Depart to Munnar Arr. Noon check in Hotel Night Halt&lt;br&gt;Day 06 : Depart to Munnar sight seeing visit, visit Mettupatti Dam, indo swiss cattle, Breeding Farm, Echo point, Kundala Dam. Night Halt&lt;br&gt;Day 07 : Morning Depart to Alleppy Check in Noon to house boat, visit Tiny Islands, Villages, Churches, etc., Night Halt&lt;br&gt;Day 08 : Morning Check out House Boat proceed to Cochin by Car visit Harbour house,cherai Beach etc and Depart To Bangalore. Eve DEP&lt;br&gt;PACKAGE INCLUDES: Transportation BLR to Ooty by 35 Seater Bus. All Sight seeing by Car, Ooty to Kodai By Mini Bus, Lunch - Breakfast - Dinner provided in House Boat, Kodai - Munnar â€“ Alleppy-Cochin by car Cochin to BLR by Multi axle Volvo &amp; Accommodation (Guide &amp; Entrance Fees Extra)', '6 NIGHTS/7 DAYS', '13500', '15500', '18600', '1521445140.jpg', '2018-03-19 07:39:00', '2018-03-19 07:39:00'),
(27, 'OOTY- KODAI &ndash; MUNNAR-ALLEPPY-COCHIN', 'Day 01 : Depart to Ooty Night Depart&lt;br&gt;Day 02 : Arr Ooty Check in hotel, Depart To Ooty &amp; Coonoor Sight Seeing visit Sims park Dolphins Nose &amp; Lambs Rock. Doddabetta (8648 ft. above sea level) telescope House Ooty Botonical Garden, Ooty Lake. Night halt&lt;br&gt;Day 03 : Free day. NIGHT HALT&lt;br&gt;Day 04 : Check out Depart to kodai, Eve Arr kodai Night halt&lt;br&gt;Day 05 : Check out Depart. to Kodai sight seeing visit Pillar Rock, Green valley lake, Solar Physical Observatory, Bryants park. Night Halt&lt;br&gt;Day 06 : Depart to Munnar Arr. Noon check in Hotel Night Halt&lt;br&gt;Day 07 : Depart to Munnar sight seeing visit, visit Mettupatti Dam, indo swiss cattle, Breeding Farm, Echo point, Kundala Dam. Night Halt&lt;br&gt;Day 08 : Morning Depart to Alleppy Check in Noon to house boat, visit Tiny Islands, Villages, Churches, etc., Night Halt&lt;br&gt;Day 09 : Morning Check out House Boat proceed to Cochin by Car visit Harbour house,cherai Beach etc and Depart To Bangalore. Eve DEP&lt;br&gt;PACKAGE INCLUDES: Transportation BLR to Ooty by 35 Seater Bus. All Sight seeing by Car, Ooty to Kodai By Mini Bus, Lunch - Breakfast - Dinner provided in House Boat, Kodai - Munnar â€“ Alleppy-Cochin by car Cochin to BLR by Multi axle Volvo &amp; Accommodation (Guide &amp; Entrance Fees Extra)', '7 NIGHTS/8 DAYS', '13900', '16500', '22000', '1521445282.jpg', '2018-03-19 07:41:22', '2018-03-19 07:41:22'),
(28, 'ALLEPPY-COCHIN', 'Day 01 : Depart to Alleppy NIGHT DEPART&lt;br&gt;Day 02 : Morning Arr in Alleppy, after Refresh Noon Check in to house boat, visit Tiny Islands, Villages, Churches, etc., Night Halt&lt;br&gt;Day 03 : Morning Check out House Boat proceed to Cochin by Car visit Harbour house,cherai Beach etc and Depart To Bangalore. Eve DEP&lt;br&gt;PACKAGE INCLUDES: Transportation Bangalore-Alleppy &amp; Cochi-bangalore by Multi axle / Volvo Bus, Lunch - Breakfast - Dinner provided in House Boat, Alleppy to Cochin by cab &amp; sight seeing &amp; House boat Stay. (Guide &amp; Entrance Fees Extra)', '1 NIGHT/2 DAYS', '6500', 'NA', 'NA', '1521445367.jpg', '2018-03-19 07:42:47', '2018-03-19 07:42:47'),
(29, 'ALLEPPY-KOVALAM', 'Day 01 : Depart to Alleppy NIGHT DEPART&lt;br&gt;Day 02 : Morning Arr in Alleppy, after Refresh Noon Check in to house boat, visit Tiny Islands, Villages, Churches, etc., Night Halt&lt;br&gt;Day 03 : Morning check out from house Boat, Proceed to Kovalam, Night Halt&lt;br&gt;Day 04 : Morning check out from house Boat, Proceed to Kovalam, Night Halt&lt;br&gt;PACKAGE INCLUDES: Kovalam sight seeing visit, kovalam Beach and Depart to Bangalore. . Night Depart', '2 NIGHT/3 DAYS', 'NA', '9500', '11800', '1521445454.jpg', '2018-03-19 07:44:14', '2018-03-19 07:44:14'),
(30, 'MUNNAR-ALLEPPY-COCHIN', 'Day 01 : Depart to Munnar NIGHT DEPART&lt;br&gt;Day 02 : Morning Arr at Munnar Check in Hotel, after refresh Munnar sight seeing visit, visit Mettupatti Dam, indo swiss cattle, Breeding Farm, Echo point, Kundala Dam. . Night Halt&lt;br&gt;Day 03 : Morning Arr in Alleppy, after Refresh Noon Check in to house boat, visit Tiny Islands, Villages, Churches, etc., Night Halt&lt;br&gt;Day 04 : Morning Check out House Boat proceed to Cochin by Car visit Harbour house,cherai Beach etc and Depart To Bangalore. Eve DEP&lt;br&gt;PACKAGE INCLUDES: Transportation Bangalore-Alleppy &amp; Cochi-bangalore by Multi axle / Volvo Bus, Lunch - Breakfast - Dinner provided in House Boat, Alleppy to Cochin by cab &amp; sight seeing &amp; House boat Stay. (Guide &amp; Entrance Fees Extra)', '2 NIGHT/3 DAYS', '7900', '8900', '10200', '1521445598.jpg', '2018-03-19 07:46:38', '2018-03-19 07:46:38'),
(31, 'MUNNAR-ALLEPPY-COCHIN', 'Day 01 : Depart to Munnar NIGHT DEPART&lt;br&gt;Day 02 : Morning Arr Check in Hotel, FREE DAY. Night Halt&lt;br&gt;Day 03 : Morning Arr at Munnar Check in Hotel, after refresh Munnar sight seeing visit, visit Mettupatti Dam, indo swiss cattle, Breeding Farm, Echo point, Kundala Dam. . Night Halt&lt;br&gt;Day 04 : Morning Depart to Alleppy, Noon Check in to House boat, visit Tiny Islands, Villages, Churches, etc.,&lt;br&gt;Day 05 : Morning Check out House Boat proceed to Cochin by Car visit Harbour house,cherai Beach etc and Depart To Bangalore. Eve DEP&lt;br&gt;PACKAGE INCLUDES: BLR - Munnar by Sleeper / Seater, Cochin to Bangalore by multi axle/Volvo Bus ,All sight seeing by Car, Munnar â€“ Alleppy-cochin by Car, B/F, Lunch, Dinner Provided at Boat House, &amp; Accommodation (Guide &amp; Entrance Fees Extra)', '3 NIGHT/4 DAYS', '8800', '9900', '11800', '1521445767.jpg', '2018-03-19 07:49:27', '2018-03-19 07:49:27'),
(32, 'MUNNAR-ALLEPPY-KOVALAM', 'Day 01 : Depart to Munnar NIGHT DEPART&lt;br&gt;Day 02 : Morning Arr Check in Hotel, FREE DAY. Night Halt&lt;br&gt;Day 03 : Morning Arr at Munnar Check in Hotel, after refresh Munnar sight seeing visit, visit Mettupatti Dam, indo swiss cattle, Breeding Farm, Echo point, Kundala Dam. . Night Halt&lt;br&gt;Day 04 : Morning Depart to Alleppy, Noon Check in to House boat, visit Tiny Islands, Villages, Churches, etc.,&lt;br&gt;Day 05 : Kovalam sight seeing visit, kovalam Beach and Depart to Bangalore. . Night Depart&lt;br&gt;PACKAGE INCLUDES: BLR - Munnar by Sleeper / Seater / Trivandram -Bangalore by Multi axle / Volvo Bus, All sight seeing by Car, Munnar â€“ Alleppy- Kovalam by Car, B/F, Lunch, Dinner Provided at Boat House &amp; Accommodation (Guide &amp; Entrance Fees Extra)', '3 NIGHTS/4 DAYS', '11100', '13900', '16900', '1521446048.jpg', '2018-03-19 07:54:08', '2018-03-19 07:54:08'),
(33, 'COCHIN-ALLEPPY-KUMARAKOM', 'Day 01 : Depart to Cochin Night Depart&lt;br&gt;Day 02 : Morning Arr at Cochin, check in Hotel, after fresh up Cochin sight seeing by Motor boat visit, Chinese Fishing net, Harbor House, Santa Cruise, Basillica Church, Dutch Palace, Cheria Beach, Fort etc,.. NIGHT HALT&lt;br&gt;Day 03 : Morning Depart to Alleppy, Noon Check in to House boat, visit Tiny Islands, Villages, Churches, etc., Night Halt&lt;br&gt;Day 04 : Morning check out from house Boat, proceed to Kumarakom by car visit, Bird Sancturary, Wood Museum etc., &amp; Dep to Alleppy / Cochin same night Depart to Bangalore. Night Depart&lt;br&gt;PACKAGE INCLUDES: BLR - Cochin by Multi axle/Vvolvo, All sight seeing by Car, Cochin â€“ Alleppy-Kumarakom by Car, B/F, Lunch, Dinner Provided at Boat House, Cochin to Bangalore by Multi axle/ Volvo Bus &amp; Accommodation (Guide &amp; Entrance Fees Extra)', '2 NIGHTS/3 DAYS', '8500', '9800', '11100', '1521446138.jpg', '2018-03-19 07:55:38', '2018-03-19 07:55:38'),
(34, 'COCHIN-CHERAI BEACH-VEEGALAND', 'Day 01 : Depart to Cochin Night Depart&lt;br&gt;Day 02 : Morning Arr at Cochin, check in Hotel, after fresh up Cochin sight seeing by Motor boat visit, Chinese Fishing net, Harbor House, Santa Cruise, Basillica Church, Dutch Palace, Cheria Beach, Fort etc,.. NIGHT HALT&lt;br&gt;Day 03 : Full day visit Cheria Beach NIGHT HALT&lt;br&gt;Day 04 : Morning sight seeing of Veegaland, can Enjoy Water and Dry Games in Veegaland, &amp; night Depart to Bangolore. NIGHT DEPART&lt;br&gt;PACKAGE INCLUDES: Traveling by Multi axle / Volvo, sight seeing by Car&amp; Accomodation (Entrance Fees Extra)', '2 NIGHTS/3 DAYS', '6500', '7500', '8400', '1521446223.jpg', '2018-03-19 07:57:03', '2018-03-19 07:57:03'),
(35, 'KOVALAM-VARKALA', 'Day 01 : Depart to Trivendrum NIGHT DEPART&lt;br&gt;Day 02 : Morning Arr Check in Hotel after fresh up Kovalam sight seeing visit, Kovalam Beach. NIGHT HALT&lt;br&gt;Day 03 : Full day Visit, Varkala Beach and Night Depart to Bangalore. . NIGHT DEPART&lt;br&gt;PACKAGE INCLUDES: Traveling by Multi axle / Volvo, sight seeing by Car and Accomodation (Entrance Fees Extra)', '1 NIGHT/2 DAYS', '6500', '7800', '8800', '1521446302.jpg', '2018-03-19 07:58:22', '2018-03-19 07:58:22'),
(36, 'KOVALAM-KANYAKUMARI', 'Day 01 : Depart to Trivendrum NIGHT DEPART&lt;br&gt;Day 02 : Morning Arr Check in Hotel after fresh up Kovalam sight seeing visit, Kovalam Beach. NIGHT HALT&lt;br&gt;Day 03 : Morning Depart to Kanyakumari, Noon check in Hotel after fresh up proceed to Sight seeing NIGHT HALT&lt;br&gt;Day 04 : Check Out Depart To Visit Sunrise and Proceed To Trivandram With sight seeing And Eve Depart to Bangalore EVE DEPART&lt;br&gt;PACKAGE INCLUDES: Traveling by Multi axle / Volvo bus, sight seeing by Car and Accomodation.(Entrance Fees Extra)', '2 NIGHTS/3 DAYS', '6500', '7600', '9600', '1521446392.jpg', '2018-03-19 07:59:52', '2018-03-19 07:59:52'),
(37, 'ALLEPPY-KOVALAM-KANYAKUMARI', 'Day 01 : Depart to Alleppy NIGHT DEPART&lt;br&gt;Day 02 : Arrival morning check in Hotel for refresh Check in 11.00 a.m. to house boat, visit Tiny Islands, Villages, Churches, etc., NIGHT HALT&lt;br&gt;Day 03 : Dep. 10.00 a.m. Check out from House Boat Depart Kovalam Arr. check in Hotel NIGHT HALT&lt;br&gt;Day 04 : Check Out Depart to Visit Kovalam Sight Seeing ,eve Proceed to Kanyakumari After Sun Set Check In Hotel NIGHT HALT&lt;br&gt;Day 05 : Check Out Depart To Visit Sunrise and Proceed To Trivandram With sight seeing And Eve Depart to Bangalore EVE DEPART&lt;br&gt;PACKAGE INCLUDES: Traveling by Multi axle / Volvo bus, sight seeing by Car and Accomodation.(Entrance Fees Extra) . Night Depart', '3 NIGHTS/4 DAYS', '9900', '11800', '13900', '1521446542.jpg', '2018-03-19 08:02:22', '2018-03-19 08:02:22'),
(38, 'YAANA-GOKARNA OM BEACH', 'Day 01 : Dep. to Sirsi NIGHT DEP&lt;br&gt;Day 02 : Morning arrival check in hotel 10-00 a.m. proceed to visit Yaana (trekking), Murudeshwara, Edugunji, Apsarakonda etc. NIGHT HALT&lt;br&gt;Day 03 : Check out proceed to visit Gokarna, Om Beach, Bada and Karwar beach NIGHT DEPART&lt;br&gt;PACKAGE INCLUDES: BLR to Sirsi Transporation by 2+2 hi-tech Air Bus, Accomodation in Deluxe Hotel, sight seeing by individual Car, Karwar - BLR by Hi-tech Bus (Guide &amp; Entrance Fees Extra)', '1 NIGHT/2 DAYS', '4800', 'NA', 'NA', '1521446623.jpg', '2018-03-19 08:03:43', '2018-03-19 08:03:43'),
(39, 'JOG FALLS-MAGOD FALLS', 'Day 01 : Dep. to Sirsi NIGHT DEP&lt;br&gt;Day 02 : Morning arrival check in hotel 10-00 a.m. proceed to visit Jog Falls, Sharavati Back Waters, etc. NIGHT HALT&lt;br&gt;Day 03 : Check out proceed to visit Uncalli Falls, Magod Falls NIGHT DEPART&lt;br&gt;PACKAGE INCLUDES: Transportation by 2+2 Hi -tech Air Bus Accomondation in Deluxe Hotel, Sight seeing by Individual car.', '1 NIGHT/2 DAYS', '4500', 'NA', 'NA', '1521446696.jpg', '2018-03-19 08:04:56', '2018-03-19 08:04:56'),
(40, 'HYDERABAD-RAMOJI FILM CITY', 'Day 01 : Dep. 9.00 p.m. to Hyderabad NIGHT DEP&lt;br&gt;Day 02 : Arr. Morning check in hotel Dep. 9.00 a.m. to Ramoji Film City evening 5.30p.m. Back to Hyderabad. NIGHT HALT&lt;br&gt;Day 03 : After check out Dep. 8.30 a.m. to Hyderabad sight seeing visit Birla Temple, Zoo Park, Charminar Mecca Masjid, NTR Garden, Salarjung Museum 8.00 p.m. Dep. to Bangalore. NIGHT DEPART&lt;br&gt;PACKAGE INCLUDES: Transportation by Multi Axle Volvo bus sight-seeing by Non a/c bus &amp; Accommodation (Guide &amp; Entrance Fees Extra)', '1 NIGHT/2 DAYS', '3900', '4500', '5500', '1521446775.jpg', '2018-03-19 08:06:15', '2018-03-19 08:06:15'),
(41, 'COORG (SOUTH KASHMIR)', 'Day 01 : Depart to Coorg NIGHT DEP&lt;br&gt;Day 02 : Arr. 5.30 a.m. check in Hotel Dep. 10.00 a.m. visit full day tour to Nisarga Dhama, Harangi Dam, Dubare Forest, Golden Temple NIGHT HALT&lt;br&gt;Day 03 : Check out Dep. to Tala Cauvery, Bhagamandala, Raja Seat, Fort, Raja Tomb, Abbey Falls, Omkareshwara Temple, Golf Course, Back to Hotel to get Fresh. 10.00 p.m. Dep. to Bangalore NIGHT DEPART&lt;br&gt;PACKAGE INCLUDES: Transportation byBangalore-Coorg-Bangalore 35 seater bus, Accomodation in Home Stays &amp; Two days Sight seeing by individual Car. (Guide &amp; Entrance Fees Extra)', '1 NIGHT/2 DAYS', '3500', '4000', 'NA', '1521446868.jpg', '2018-03-19 08:07:48', '2018-03-19 08:07:48'),
(42, 'COORG (SOUTH KASHMIR)', 'Day 01 : Depart to Coorg NIGHT DEP&lt;br&gt;Day 02 : Arr. 5.30 a.m. check in Hotel Free Day NIGHT HALT&lt;br&gt;Day 03 : Arr. 5.30 a.m. check in Hotel Dep. 10.00 a.m. visit full day tour to Nisarga Dhama, Harangi Dam, Dubare Forest, Golden Temple NIGHT HALT&lt;br&gt;Day 04 : Check out Dep. to Tala Cauvery, Bhagamandala, Raja Seat, Fort, Raja Tomb, Abbey Falls, Omkareshwara Temple, Golf Course, Back to Hotel to get Fresh. 10.00 p.m. Dep. to Bangalore NIGHT DEPART&lt;br&gt;PACKAGE INCLUDES: Transportation byBangalore-Coorg-Bangalore 35 seater bus, Accomodation in Home Stays &amp; Two days Sight seeing by individual Car. (Guide &amp; Entrance Fees Extra)', '2 NIGHTS/3 DAYS', '3500', '4000', 'NA', '1521446962.jpg', '2018-03-19 08:09:22', '2018-03-19 08:09:22'),
(43, 'SOUTH COORG &amp; NORTH COORG', 'Day 01 : Dep. 10.00 p.m. to North Coorg NIGHT DEP&lt;br&gt;Day 02 : Arr Coorg Check in Hotel Dep. to Tala Cauvery, Bhagamandala, Raja Seat, Fort, Raja Tomb, Abbey Falls, Omkareshwara Temple, Golf Course Stay at home Stay NIGHT HALT&lt;br&gt;Day 03 : On the way visit Nisarga Dhama, Harangi Dam, Dubare Forest, Golden Temple and reach South Coorg Stay at Home Stay NIGHT HALT&lt;br&gt;Day 04 : Check out Visit Iruppu Falls &amp; Nagarahole wild life sanctuary by Jeep (Jungle Safari) NIGHT DEPART&lt;br&gt;PACKAGE INCLUDES: Transportation by Bangalore-Coorg-Bangalore 35 seater bus, Accomodation in Home Stays &amp; Three days Sight seeing by individual Car. (Guide &amp; Entrance Fees Extra)', '2 NIGHTS/3 DAYS', '5700', '6600', 'NA', '1521447066.jpg', '2018-03-19 08:11:06', '2018-03-19 08:11:06'),
(44, 'OOTY-COONOOR', 'Day 01 : Depart to Ooty NIGHT DEP&lt;br&gt;Day 02 : Arr Ooty Check In hotel Free Day NIGHT HALT&lt;br&gt;Day 03 : Check Out Depart To Ooty &amp; Coonoor Sight Seeing visit Sims park Dolphins Nose &amp; Lambs Rock. Doddabetta (8648 ft. above sea level) telescope House Ooty Botonical Garden, Ooty Lake Back To hotel Depart TO Bangalore NIGHT DEPART&lt;br&gt;PACKAGE INCLUDES: Transportation byBangalore-Coorg-Bangalore 35 seater bus, Accomodation in Home Stays &amp; Two days Sight seeing by individual Car. (Guide &amp; Entrance Fees Extra)', '1 NIGHT/2 DAYS', '3500', '4000', 'NA', '1521447161.jpg', '2018-03-19 08:12:41', '2018-03-19 08:12:41'),
(45, 'OOTY-KODAI', 'Day 01 : Depart to Ooty NIGHT DEP&lt;br&gt;Day 02 : Arr Ooty Check in hotel, Depart To Ooty &amp; Coonoor Sight Seeing visit Sims park Dolphins Nose &amp; Lambs Rock. Doddabetta (8648 ft. above sea level) telescope House Ooty Botonical Garden, Ooty Lake. NIGHT HALT&lt;br&gt;Day 03 : Check out Depart to kodai, eve Arr kodai NIGHT DEPART&lt;br&gt;Day 04 : Check out Depart. to Kodai sight seeing visit Pillar Rock, Green valley lake, Solar Physical Observatory, Bryants park, Depart. to Bangalore EVE DEPART TO BANGALOR&lt;br&gt;Day 05 : Arr Bangalore&lt;br&gt;PACKAGE INCLUDES: Transportaion by Bangalore-Ooty,Kodai-Bangalore 35 seater air bus, Ooty-Kodai by Mini Bus ,All Sight Seeing By Mini Bus &amp; Accommondation (Guide and Entrans Fees extra).', '2 NIGHTS/3 DAYS', '3700', '4500', '6000', '1521447254.jpg', '2018-03-19 08:14:14', '2018-03-19 08:14:14'),
(46, 'OOTY-KODAI', 'Day 01 : Depart to Ooty NIGHT DEP&lt;br&gt;Day 02 : Arr Ooty Check In hotel Free Day NIGHT HALT&lt;br&gt;Day 03 : Depart To Ooty &amp; Coonoor Sight Seeing visit Sims park Dolphins Nose &amp; Lambs Rock. Doddabetta (8648 ft. above sea level) telescope House Ooty Botonical Garden, Ooty Lake. Night halt NIGHT HALT&lt;br&gt;Day 04 : Check out Depart to kodai, eve Arr kodai NIGHT DEPART&lt;br&gt;Day 05 : Free Day NIGHT HALT&lt;br&gt;Day 06 : Check out Depart. to Kodai sight seeing visit Pillar Rock, Green valley lake, Solar Physical Observatory, Bryants park, Depart. to Bangalore EVE DEPART TO BANGALOR&lt;br&gt;Day 07 : Arr Bangalore&lt;br&gt;PACKAGE INCLUDES: Transportaion by Bangalore-Ooty,Kodai-Bangalore 35 seater air bus, Ooty-Kodai by Mini Bus ,All Sight Seeing By Mini Bus &amp; Accommondation (Guide and Entrans Fees extra).', '4 NIGHTS/5 DAYS', '4700', '6000', '8000', '1521447356.jpg', '2018-03-19 08:15:56', '2018-03-19 08:15:56'),
(47, 'KODAIKANAL', 'Day 01 : Depart to Bangalore to Kodaikenal NIGHT DEP&lt;br&gt;Day 02 : Arr to Kodaikenal Check in Hotel Free Day NIGHT HALT&lt;br&gt;Day 03 : Check out Departs to Kodaikenal Visit Pillar Rock, Green valley lake, Solar Physical Observatory, Bryants park, Depart. to Bangalore EVE DEPART TO BANGALOR&lt;br&gt;Day 04 : Arr Bangalore&lt;br&gt;PACKAGE INCLUDES: Transportaion by Bangalore-Kodai- Bangalore by 35 seater bus, Sight seeing by minibus &amp; Accommondation. (Guide and Entrans Fees extra)', '1 NIGHT/2 DAYS', '2500', '3300', '4000', '1521447444.jpg', '2018-03-19 08:17:24', '2018-03-19 08:17:24'),
(48, 'KODAIKANAL', 'Day 01 : Depart to Bangalore to Kodaikenal NIGHT DEP&lt;br&gt;Day 02 : Arr to Kodaikenal Check in Hotel Free Day NIGHT HALT&lt;br&gt;Day 03 : Check out Departs to Kodaikenal Visit Pillar Rock, Green valley lake, Solar Physical Observatory, Bryants park, Depart. to Bangalore NIGHT HALT&lt;br&gt;Day 04 : After check out Dep. 10.00 a.m. to Jungle Treking by Jeep EVE DEPART TO BANGALOR&lt;br&gt;PACKAGE INCLUDES: Transportaion by Bangalore-Kodai- Bangalore by 35 seater bus, Sight seeing by minibus &amp; Accommondation. (Guide and Entrans Fees extra).', '2 NIGHTS/3 DAYS', '3300', '3800', '5800', '1521447553.jpg', '2018-03-19 08:19:13', '2018-03-19 08:19:13');

-- --------------------------------------------------------

--
-- Table structure for table `local_taxi`
--

CREATE TABLE `local_taxi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `seating` varchar(255) NOT NULL DEFAULT '',
  `driver_allowance` varchar(255) NOT NULL DEFAULT '',
  `every40hours` varchar(255) NOT NULL,
  `every80hours` varchar(255) NOT NULL,
  `extra_hours` varchar(255) NOT NULL,
  `extra_kms` varchar(255) NOT NULL,
  `view_order` int(11) NOT NULL DEFAULT '10',
  `image` varchar(255) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `local_taxi`
--

INSERT INTO `local_taxi` (`id`, `title`, `description`, `seating`, `driver_allowance`, `every40hours`, `every80hours`, `extra_hours`, `extra_kms`, `view_order`, `image`, `date_added`, `date_modified`) VALUES
(1, 'Mercedes-Benz', 'City Pickup: Km and time will starts and ends at customer pickup point.&lt;br&gt;Pickup: Km and time will starts and ends at our office (Hsr Layout).&lt;br&gt;Driver batta will be charged extra if the driver on duty before 6 am or after 10 pm. Parking, Tolls, and state entry tax will be charged extra as per actual.\r\nMinimum Passengers are allowed as per Government rule.', '4', '300', 'NA', '7500', '750', '75', 1, 'benz.jpg', '2018-02-27 05:47:29', '2018-03-28 12:40:02'),
(2, 'Sedan', 'City Pickup: Km and time will starts and ends at customer pickup point.&lt;br&gt;Pickup: Km and time will starts and ends at our office (Hsr Layout).&lt;br&gt;Driver batta will be charged extra if the driver on duty before 6 am or after 10 pm. Parking, Tolls, and state entry tax will be charged extra as per actual.\r\nMinimum Passengers are allowed as per Government rule.', '4', '300', '800', '1400', '140', '12', 2, 'xcent.jpg', '2018-03-17 05:19:11', '2018-03-28 12:40:11'),
(3, 'Toyota Innova Ac', 'City Pickup: Km and time will starts and ends at customer pickup point.&lt;br&gt;Pickup: Km and time will starts and ends at our office (Hsr Layout).&lt;br&gt;Driver batta will be charged extra if the driver on duty before 6 am or after 10 pm. Parking, Tolls, and state entry tax will be charged extra as per actual.\r\nMinimum Passengers are allowed as per Government rule.', '7', '300', 'NA', '1800', '175', '13', 3, 'innovaac.jpg', '2018-03-17 05:46:53', '2018-03-28 12:40:14'),
(4, 'Toyota Innova Crysta Ac', 'City Pickup: Km and time will starts and ends at customer pickup point.&lt;br&gt;Pickup: Km and time will starts and ends at our office (Hsr Layout).&lt;br&gt;Driver batta will be charged extra if the driver on duty before 6 am or after 10 pm. Parking, Tolls, and state entry tax will be charged extra as per actual.\r\nMinimum Passengers are allowed as per Government rule.', '7', '300', 'NA', '2200', '200', '15', 4, 'crysta.jpg', '2018-03-17 05:49:31', '2018-03-28 12:40:16'),
(5, 'Tempo Traveller Non Ac', 'City Pickup: Km and time will starts and ends at customer pickup point.&lt;br&gt;Pickup: Km and time will starts and ends at our office (Hsr Layout).&lt;br&gt;Driver batta will be charged extra if the driver on duty before 6 am or after 10 pm. Parking, Tolls, and state entry tax will be charged extra as per actual.\r\nMinimum Passengers are allowed as per Government rule.', '12', '300', 'NA', '2500', '200', '15', 5, 'TemopoTraveller.jpg', '2018-03-17 05:51:14', '2018-03-28 12:40:19'),
(6, 'Tempo Traveller Ac', 'City Pickup: Km and time will starts and ends at customer pickup point.&lt;br&gt;Pickup: Km and time will starts and ends at our office (Hsr Layout).&lt;br&gt;Driver batta will be charged extra if the driver on duty before 6 am or after 10 pm. Parking, Tolls, and state entry tax will be charged extra as per actual.\r\nMinimum Passengers are allowed as per Government rule.', '12', '300', 'NA', '2800', '250', '16', 6, 'tempo_traveler_ac.jpg', '2018-03-17 05:53:04', '2018-03-28 12:40:21'),
(7, 'Mini Bus', 'City Pickup: Km and time will starts and ends at customer pickup point.&lt;br&gt;Pickup: Km and time will starts and ends at our office (Hsr Layout).&lt;br&gt;Driver batta will be charged extra if the driver on duty before 6 am or after 10 pm. Parking, Tolls, and state entry tax will be charged extra as per actual.\r\nMinimum Passengers are allowed as per Government rule.', '21', '300', 'NA', '4500', '400', '25', 7, 'mini_bus.jpg', '2018-03-17 05:54:50', '2018-03-28 12:40:23'),
(8, 'Audi', 'City Pickup: Km and time will starts and ends at customer pickup point.&lt;br&gt;Pickup: Km and time will starts and ends at our office (Hsr Layout).&lt;br&gt;Driver batta will be charged extra if the driver on duty before 6 am or after 10 pm. Parking, Tolls, and state entry tax will be charged extra as per actual.\r\nMinimum Passengers are allowed as per Government rule.', '4', '300', 'NA', '8500', '850', '85', 8, 'audi.jpg', '2018-03-17 05:56:12', '2018-03-28 12:40:26');

-- --------------------------------------------------------

--
-- Table structure for table `local_tour`
--

CREATE TABLE `local_tour` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `no_of_people` varchar(225) NOT NULL,
  `rate_per_people` varchar(255) NOT NULL,
  `km_limit` varchar(225) NOT NULL,
  `no_of_days` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `view_order` int(11) NOT NULL DEFAULT '10',
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `local_tour`
--

INSERT INTO `local_tour` (`id`, `title`, `description`, `no_of_people`, `rate_per_people`, `km_limit`, `no_of_days`, `image`, `view_order`, `date_added`, `date_modified`) VALUES
(1, 'Bangalore Sightseeing', 'Inclusions: Travel in private selected cab, Driver allowance (6.00 AM to 10.00 PM), Parking and tolls, Fuel.<br>\r\nExclusions: Entry Tickets at sightseeing, Food, Guide.<br>\r\nBooking: 10% booking advance<br>\r\nPickup & Drop: Office to office', '4', '500', '80', '1', 'blr.jpg', 1, '2018-03-16 11:44:22', '2018-03-28 11:32:13'),
(2, 'Nandi Hills', 'Inclusions: Travel in private selected cab, Driver allowance (6.00 AM to 10.00 PM), Parking and tolls, Fuel.<br>\r\nExclusions: Entry Tickets at sightseeing, Food, Guide.<br>\r\nBooking: 10% booking advance<br>\r\nPickup & Drop: Office to office', '4', '625', '160', '1', 'nandi.jpg', 2, '2018-03-16 11:44:22', '2018-03-28 11:32:17'),
(3, 'Mysore - Srirangapatna', 'Inclusions: Travel in private selected cab, Driver allowance (6.00 AM to 10.00 PM), Parking and tolls, Fuel.<br>\r\nExclusions: Entry Tickets at sightseeing, Food, Guide.<br>\r\nBooking: 10% booking advance<br>\r\nPickup & Drop: Office to office', '4', '1100', '380', '1', 'mysore.jpg', 3, '2018-03-16 12:23:01', '2018-03-28 11:32:19'),
(4, 'Antharagange - Bangaru Tirupati', 'Inclusions: Travel in private selected cab, Driver allowance (6.00 AM to 10.00 PM), Parking and tolls, Fuel.<br>\r\nExclusions: Entry Tickets at sightseeing, Food, Guide.<br>\r\nBooking: 10% booking advance<br>\r\nPickup & Drop: Office to office', '4', '800', '300', '1', 'bangaru.jpg', 4, '2018-03-16 12:23:01', '2018-03-28 11:32:21'),
(5, 'Vellore', 'Inclusions: Travel in private selected cab, Driver allowance (6.00 AM to 10.00 PM), Parking and tolls, Fuel.<br>\r\nExclusions: Entry Tickets at sightseeing, Food, Guide.<br>\r\nBooking: 10% booking advance<br>\r\nPickup & Drop: Office to office', '4', '1500', '500', '1', 'vellore.jpg', 5, '2018-03-16 12:23:01', '2018-03-28 11:32:24'),
(6, 'Shivanasamudra - Talakadu - Somanathapura', 'Inclusions: Travel in private selected cab, Driver allowance (6.00 AM to 10.00 PM), Parking and tolls, Fuel.<br>\r\nExclusions: Entry Tickets at sightseeing, Food, Guide.<br>\r\nBooking: 10% booking advance<br>\r\nPickup & Drop: Office to office', '4', '1000', '350', '1', 'shivanasamudra.jpg', 6, '2018-03-16 12:23:01', '2018-03-28 11:32:27'),
(7, 'Shravanabelagola - Belur - Halebid', 'Inclusions: Travel in private selected cab, Driver allowance (6.00 AM to 10.00 PM), Parking and tolls, Fuel.<br>\r\nExclusions: Entry Tickets at sightseeing, Food, Guide.<br>\r\nBooking: 10% booking advance<br>\r\nPickup & Drop: Office to office', '4', '1750', '600', '1', 'beluru.jpg', 7, '2018-03-16 12:23:01', '2018-03-28 11:32:30'),
(8, 'Hogenakkal Falls', 'Inclusions: Travel in private selected cab, Driver allowance (6.00 AM to 10.00 PM), Parking and tolls, Fuel.<br>\r\nExclusions: Entry Tickets at sightseeing, Food, Guide.<br>\r\nBooking: 10% booking advance<br>\r\nPickup & Drop: Office to office', '4', '1125', '350', '1', 'hogenikkal.jpg', 8, '2018-03-16 12:23:01', '2018-03-28 11:32:34'),
(9, 'Puttaparthi', 'Inclusions: Travel in private selected cab, Driver allowance (6.00 AM to 10.00 PM), Parking and tolls, Fuel.<br>\r\nExclusions: Entry Tickets at sightseeing, Food, Guide.<br>\r\nBooking: 10% booking advance<br>\r\nPickup & Drop: Office to office', '4', '1500', '500', '1', 'Puttaparthi.jpg', 9, '2018-03-16 12:23:01', '2018-03-28 11:32:36'),
(10, 'Ghati Subramanya - Lepakshi', 'Inclusions: Travel in private selected cab, Driver allowance (6.00 AM to 10.00 PM), Parking and tolls, Fuel.<br>\r\nExclusions: Entry Tickets at sightseeing, Food, Guide.<br>\r\nBooking: 10% booking advance<br>\r\nPickup & Drop: Office to office\r\n', '4', '1500', '500', '1', 'ghati.jpg', 10, '2018-03-16 12:23:01', '2018-03-28 07:56:19'),
(11, 'Big Banyan Tree - Savandutga', 'Inclusions: Travel in private selected cab, Driver allowance (6.00 AM to 10.00 PM), Parking and tolls, Fuel.<br>\r\nExclusions: Entry Tickets at sightseeing, Food, Guide.<br>\r\nBooking: 10% booking advance<br>\r\nPickup & Drop: Office to office', '4', '1500', '500', '1', 'big_banyan.jpg', 11, '2018-03-16 12:23:01', '2018-03-28 11:32:42'),
(12, 'Horsley Hills', 'Inclusions: Travel in private selected cab, Driver allowance (6.00 AM to 10.00 PM), Parking and tolls, Fuel.<br>\r\nExclusions: Entry Tickets at sightseeing, Food, Guide.<br>\r\nBooking: 10% booking advance<br>\r\nPickup & Drop: Office to office', '4', '1500', '500', '1', 'horsely.jpg', 12, '2018-03-16 12:23:01', '2018-03-28 11:32:45');

-- --------------------------------------------------------

--
-- Table structure for table `north_india`
--

CREATE TABLE `north_india` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `no_of_days` varchar(225) NOT NULL,
  `deluxe` varchar(255) NOT NULL,
  `luxury` varchar(225) NOT NULL,
  `star` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `north_india`
--

INSERT INTO `north_india` (`id`, `title`, `description`, `no_of_days`, `deluxe`, `luxury`, `star`, `image`, `date_added`, `date_modified`) VALUES
(4, 'GOA', 'Day 01 : Depart to Goa NIGHT DEPART&lt;br&gt;Day 02 : Arr Goa, check in Hotel Free Day Night Halt&lt;br&gt;Day 03 : Depart to South Goa sight seeing visit, Harbour Point, Bogmalo Beach, Old Goa Church, Shree Mangusesh Temple, Shre Shantadurga Temple, Colva Beach, and Evening Boat Cruise Night Halt&lt;br&gt;Day 04 : Check out Hotel, North Goa Soght seeing visit, River Cruise, Calagute Beaches, fort Aguda, Light House point, Guada Beach, Vagaotor Beach, Anjuna Beach and night Depart to Bangalore. NIGHT DEPART.&lt;br&gt;PACKAGE INCLUDES: Transportation by Multi Axle Volvo / Volvo Bus, sight seeing by Mini Bus, Boat Cruise Ticket &amp; Accommodation (Guide &amp; Entrance Fees Extra)', '2 NIGHTS / 3 DAYS', '5000', '6200', '8500', '1522734722.jpg', '2018-03-17 07:22:51', '2018-04-03 05:52:02'),
(5, 'GOA', 'Day 01 : Depart to Goa NIGHT DEPART&lt;br&gt;Day 02 : Arr Goa, check in Hotel Free Day Night Halt&lt;br&gt;Day 03 : Depart to South Goa sight seeing visit, Harbour Point, Bogmalo Beach, Old Goa Church, Shree Mangusesh Temple, Shre Shantadurga Temple, Colva Beach, and Evening Boat Cruise Night Halt&lt;br&gt;Day 04 : Free Day Night Halt&lt;br&gt;Day 05 : Check out Hotel, North Goa Soght seeing visit, River Cruise, Calagute Beaches, fort Aguda, Light House point, Guada Beach, Vagaotor Beach, Anjuna Beach and night Depart to Bangalore. NIGHT DEPART.&lt;br&gt;PACKAGE INCLUDES: Transportation by Multi Axle Volvo / Volvo Bus, sight seeing by Mini Bus, Boat Cruise Ticket &amp; Accommodation (Guide &amp; Entrance Fees Extra)', '3 NIGHTS / 4 DAYS', '5800', '7000', '9300', '1522734730.jpg', '2018-03-17 07:24:44', '2018-04-03 05:52:10');

-- --------------------------------------------------------

--
-- Table structure for table `other_information`
--

CREATE TABLE `other_information` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `email_id` varchar(225) NOT NULL,
  `car` varchar(255) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ip` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `outstation_one_way_trip`
--

CREATE TABLE `outstation_one_way_trip` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `seating` varchar(255) NOT NULL,
  `rate` varchar(255) NOT NULL,
  `driver_allowance` varchar(255) NOT NULL,
  `min_km_per_day` varchar(255) NOT NULL,
  `view_order` int(11) NOT NULL DEFAULT '10',
  `image` varchar(255) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `outstation_one_way_trip`
--

INSERT INTO `outstation_one_way_trip` (`id`, `title`, `description`, `seating`, `rate`, `driver_allowance`, `min_km_per_day`, `view_order`, `image`, `date_added`, `date_modified`) VALUES
(1, 'Sedan', 'Distance and time will start at customer pickup point and end at the drop point.\r\nDriver Charges will be extra if the driver on duty before 6 am or after 10 pm.\r\nDay means Calender day.\r\nState entry tax, Parking, and tolls will be charged extra.\r\nBooking: 10% booking advance\r\nPickup & Drop: Office to office\r\n', '4', '18', '300', '300', 1, 'etios.jpg', '2018-03-16 08:34:27', '2018-03-20 07:11:27'),
(2, 'Toyota Innova Ac', 'Distance and time will start at customer pickup point and end at the drop point.\r\nDriver Charges will be extra if the driver on duty before 6 am or after 10 pm.\r\nDay means Calender day.\r\nState entry tax, Parking, and tolls will be charged extra.\r\nBooking: 10% booking advance\r\nPickup & Drop: Office to office\r\n', '6', '22', '300', '300', 2, 'innovaac.jpg', '2018-03-16 09:44:53', '2018-03-20 07:11:30'),
(3, 'Toyota Innova Crysta Ac', 'Distance and time will start at customer pickup point and end at the drop point.\r\nDriver Charges will be extra if the driver on duty before 6 am or after 10 pm.\r\nDay means Calender day.\r\nState entry tax, Parking, and tolls will be charged extra.\r\nBooking: 10% booking advance\r\nPickup & Drop: Office to office', '7', '24', '300', '300', 3, 'crysta.jpg', '2018-03-16 09:44:53', '2018-03-20 07:11:35'),
(4, 'Tempo Traveller Non Ac', 'Distance and time will start at customer pickup point and end at the drop point.\r\nDriver Charges will be extra if the driver on duty before 6 am or after 10 pm.\r\nDay means Calender day.\r\nState entry tax, Parking, and tolls will be charged extra.\r\nBooking: 10% booking advance\r\nPickup & Drop: Office to office\r\n\r\n', '12', '25', '300', '300', 4, 'TemopoTraveller.jpg', '2018-03-16 09:44:53', '2018-03-20 07:11:38'),
(5, 'Tempo Traveller Ac', 'Distance and time will start at customer pickup point and end at the drop point.\r\nDriver Charges will be extra if the driver on duty before 6 am or after 10 pm.\r\nDay means Calender day.\r\nState entry tax, Parking, and tolls will be charged extra.\r\nBooking: 10% booking advance\r\nPickup & Drop: Office to office\r\n', '12', '28', '300', '300', 5, 'tempo_traveler_ac.jpg', '2018-03-16 09:44:53', '2018-03-20 07:11:40'),
(6, 'Mini Bus (21 + 1) Non AC', 'Distance and time will start at customer pickup point and end at the drop point.\r\nDriver Charges will be extra if the driver on duty before 6 am or after 10 pm.\r\nDay means Calender day.\r\nState entry tax, Parking, and tolls will be charged extra.\r\nBooking: 10% booking advance\r\nPickup & Drop: Office to office\r\n\r\n', '21', '45', '450', '300', 6, 'mini_bus.jpg', '2018-03-16 09:44:53', '2018-03-20 07:11:43'),
(7, 'Mini Bus (21 + 1) AC', 'Distance and time will start at customer pickup point and end at the drop point.\r\nDriver Charges will be extra if the driver on duty before 6 am or after 10 pm.\r\nDay means Calender day.\r\nState entry tax, Parking, and tolls will be charged extra.\r\nBooking: 10% booking advance\r\nPickup & Drop: Office to office', '21', '45', '450', '300', 7, 'mini_bus.jpg', '2018-03-16 09:44:53', '2018-03-20 07:11:46'),
(8, 'Audi', 'Distance and time will start at customer pickup point and end at the drop point.\r\nDriver Charges will be extra if the driver on duty before 6 am or after 10 pm.\r\nDay means Calender day.\r\nState entry tax, Parking, and tolls will be charged extra.\r\nBooking: 10% booking advance\r\nPickup & Drop: Office to office', '4', '60', '300', '300', 8, 'audi.jpg', '2018-03-16 09:44:53', '2018-03-20 07:11:48'),
(9, 'Mercedes-Benz', 'Distance and time will start at customer pickup point and end at the drop point.\r\nDriver Charges will be extra if the driver on duty before 6 am or after 10 pm.\r\nDay means Calender day.\r\nState entry tax, Parking, and tolls will be charged extra.\r\nBooking: 10% booking advance\r\nPickup & Drop: Office to office', '4', '45', '300', '300', 9, 'benz.jpg', '2018-03-16 09:44:53', '2018-03-20 07:11:51');

-- --------------------------------------------------------

--
-- Table structure for table `outstation_round_trip`
--

CREATE TABLE `outstation_round_trip` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `seating` varchar(255) NOT NULL,
  `rate` varchar(255) NOT NULL,
  `driver_allowance` varchar(255) NOT NULL,
  `min_km_per_day` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `view_order` int(10) UNSIGNED NOT NULL DEFAULT '10',
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `outstation_round_trip`
--

INSERT INTO `outstation_round_trip` (`id`, `title`, `description`, `seating`, `rate`, `driver_allowance`, `min_km_per_day`, `image`, `view_order`, `date_added`, `date_modified`) VALUES
(1, 'Tempo Traveller Non Ac', 'Distance and time will start at customer pickup point and end at the drop point.\r\nDay means Calender day.State entry tax, Parking, and tolls will be charged extra.\r\nBooking: 10% booking advance\r\nPickup & Drop: Office to office\r\n', '12', '13.00', '300', '300', 'tempo_traveler_ac.jpg', 10, '2018-03-12 18:30:00', '2018-03-28 09:19:44'),
(2, 'Tempo Traveller Ac', 'Distance and time will start at customer pickup point and end at the drop point.\r\nDriver Charges will be extra if the driver on duty before 6 am or after 10 pm.\r\nDay means Calender day.\r\nState entry tax, Parking, and tolls will be charged extra.\r\nBooking: 10% booking advance\r\nPickup & Drop: Office to office', '12', '15.00', '300', '300', 'tempo_traveler_ac.jpg', 11, '2018-03-12 18:30:00', '2018-03-28 09:19:48'),
(3, 'Mini Bus (21 + 1) Non-AC', 'Distance and time will start at customer pickup point and end at the drop point.\r\nDriver Charges will be extra if the driver on duty before 6 am or after 10 pm.\r\nDay means Calender day.\r\nState entry tax, Parking, and tolls will be charged extra.\r\nBooking: 10% booking advance\r\nPickup & Drop: Office to office', '21', '20.00', '450', '300', 'mini_bus.jpg', 12, '2018-03-12 18:30:00', '2018-03-28 09:19:54'),
(4, 'Mini Bus (21 + 1) AC', 'Distance and time will start at customer pickup point and end at the drop point.\r\nDriver Charges will be extra if the driver on duty before 6 am or after 10 pm.\r\nDay means Calender day.\r\nBooking: 10% booking advance\r\nPickup & Drop: Office to office', '21', '25.00', '450', '300', 'mini_bus.jpg', 13, '2018-03-12 18:30:00', '2018-03-28 09:19:58'),
(5, 'Mini Bus (30 + 1) Non-AC', 'Distance and time will start at customer pickup point and end at the drop point.\r\nDriver Charges will be extra if the driver on duty before 6 am or after 10 pm.\r\nDay means Calender day.\r\nState entry tax, Parking, and tolls will be charged extra.\r\nBooking: 10% booking advance\r\nPickup & Drop: Office to office', '30', '24.00', '500', '300', '30-seater-rental.jpg', 14, '2018-03-12 18:30:00', '2018-03-28 09:20:01'),
(6, 'Mini Bus (30 + 1) AC', 'Distance and time will start at customer pickup point and end at the drop point.\r\nDriver Charges will be extra if the driver on duty before 6 am or after 10 pm.\r\nDay means Calender day.\r\nState entry tax, Parking, and tolls will be charged extra.\r\nBooking: 10% booking advance\r\nPickup & Drop: Office to office', '30', '28.00', '500', '300', '30-seater-rental.jpg', 15, '2018-03-12 18:30:00', '2018-03-28 09:20:04'),
(7, 'Audi', 'Distance and time will start at customer pickup point and end at the drop point.\r\nDriver Charges will be extra if the driver on duty before 6 am or after 10 pm.\r\nDay means Calender day.\r\nState entry tax, Parking, and tolls will be charged extra.\r\nBooking: 10% booking advance\r\nPickup & Drop: Office to office', '4', '85.00', '300', '300', 'audi.jpg', 9, '2018-03-12 18:30:00', '2018-03-28 09:20:07'),
(8, 'Mercedes-Benz', 'Distance and time will start at customer pickup point and end at the drop point.\r\nDriver Charges will be extra if the driver on duty before 6 am or after 10 pm.\r\nDay means Calender day.\r\nState entry tax, Parking, and tolls will be charged extra.\r\nBooking: 10% booking advance\r\nPickup & Drop: Office to office', '4', '75.00', '300', '300', 'benz.jpg', 8, '2018-03-12 18:30:00', '2018-03-28 09:20:11'),
(9, 'Toyota Innova Crysta Ac', 'Distance and time will start at customer pickup point and end at the drop point.\r\nDriver Charges will be extra if the driver on duty before 6 am or after 10 pm.\r\nDay means Calender day.\r\nState entry tax, Parking, and tolls will be charged extra.\r\nBooking:10% booking advance\r\nPickup & Drop:Office to office', ' 7', '13.00', '300', '300', 'crysta.jpg', 7, '2018-03-12 18:30:00', '2018-03-28 09:20:15'),
(10, 'Toyota Innova Ac', 'Distance and time will start at customer pickup point and end at the drop point.\r\nDriver Charges will be extra if the driver on duty before 6 am or after 10 pm.\r\nDay means Calender day.\r\nState entry tax, Parking, and tolls will be charged extra.\r\nBooking: 10% booking advance\r\nPickup & Drop: Office to office\r\n', '7', '12.00', '300', '300', 'innovaac.jpg', 6, '2018-03-12 18:30:00', '2018-03-28 09:20:18'),
(11, 'Xcent Ac', 'Distance and time will start at customer pickup point and end at the drop point.\r\nDriver Charges will be extra if the driver on duty before 6 am or after 10 pm.\r\nDay means Calender day.\r\nState entry tax, Parking, and tolls will be charged extra.\r\nBooking: 10% booking advance\r\nPickup & Drop: Office to office', '4', '10.00', '300', '300', 'xcent.jpg', 5, '2018-03-12 18:30:00', '2018-03-28 09:20:21'),
(12, 'Swift Dzire', 'Distance and time will start at customer pickup point and end at the drop point.\r\nDriver Charges will be extra if the driver on duty before 6 am or after 10 pm.\r\nDay means Calender day.\r\nState entry tax, Parking, and tolls will be charged extra.\r\nBooking: 10% booking advance\r\nPickup & Drop: Office to office', '4', '9.50', '300', '300', 'dzire.jpg', 4, '2018-03-12 18:30:00', '2018-03-28 09:20:24'),
(13, 'Toyota Etios', 'Distance and time will start at customer pickup point and end at the drop point.\r\nDriver Charges will be extra if the driver on duty before 6 am or after 10 pm.\r\nDay means Calender day.\r\nState entry tax, Parking, and tolls will be charged extra.\r\nBooking: 10% booking advance\r\nPickup & Drop: Office to office', '4', '9.50', '300', '300', 'etios.jpg', 3, '2018-03-12 18:30:00', '2018-03-28 09:20:26'),
(14, 'Tata Indica Ac', 'Distance and time will start at customer pickup point and end at the drop point.\r\nDriver Charges will be extra if the driver on duty before 6 am or after 10 pm.\r\nDay means Calender day.\r\nState entry tax, Parking, and tolls will be charged extra.\r\nBooking: 10% booking advance\r\nPickup & Drop: Office to office', '4', '8.50', '300', '300', 'tata_ac.jpg', 2, '2018-03-12 18:30:00', '2018-03-28 09:20:29'),
(15, 'Tata Indica Non Ac', 'Distance and time will start at customer pickup point and end at the drop point.\r\nDriver Charges will be extra if the driver on duty before 6 am or after 10 pm.\r\nDay means Calender day.\r\nState entry tax, Parking, and tolls will be charged extra.\r\nBooking: 10% booking advance\r\nPickup & Drop: Office to office', '4', '7.50', '300', '300', 'tata.jpg', 1, '2018-03-13 13:17:46', '2018-03-28 09:20:32');

-- --------------------------------------------------------

--
-- Table structure for table `payment_sucess`
--

CREATE TABLE `payment_sucess` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mihpayid` varchar(255) NOT NULL DEFAULT '',
  `mode` varchar(255) NOT NULL DEFAULT '',
  `status` varchar(255) NOT NULL DEFAULT '',
  `txnid` varchar(255) NOT NULL DEFAULT '',
  `amount` varchar(255) NOT NULL DEFAULT '',
  `addedon` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `productinfo` varchar(255) NOT NULL DEFAULT '',
  `firstname` varchar(255) NOT NULL DEFAULT '',
  `lastname` varchar(255) NOT NULL DEFAULT '',
  `address1` varchar(255) NOT NULL DEFAULT '',
  `address2` varchar(255) NOT NULL DEFAULT '',
  `email` varchar(255) NOT NULL DEFAULT '',
  `phone` varchar(255) NOT NULL DEFAULT '',
  `udf1` varchar(255) NOT NULL DEFAULT '',
  `udf2` varchar(255) NOT NULL DEFAULT '',
  `udf3` varchar(255) NOT NULL DEFAULT '',
  `udf4` varchar(255) NOT NULL DEFAULT '',
  `udf5` varchar(255) DEFAULT '',
  `hash` varchar(255) NOT NULL DEFAULT '',
  `PG_TYPE` varchar(255) NOT NULL DEFAULT '',
  `bank_ref_num` varchar(255) NOT NULL DEFAULT '',
  `bankcode` varchar(255) NOT NULL DEFAULT '',
  `payment_request` text NOT NULL,
  `ip_address` varchar(40) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment_sucess`
--

INSERT INTO `payment_sucess` (`id`, `mihpayid`, `mode`, `status`, `txnid`, `amount`, `addedon`, `productinfo`, `firstname`, `lastname`, `address1`, `address2`, `email`, `phone`, `udf1`, `udf2`, `udf3`, `udf4`, `udf5`, `hash`, `PG_TYPE`, `bank_ref_num`, `bankcode`, `payment_request`, `ip_address`, `date_added`, `date_modified`) VALUES
(1, '6842761963', 'DC', 'success', '0584c96545fefe608201', '1.0', '2018-03-19 11:41:10', 'Tata Indica Non AcOutstation (Roundtrip)', 'Rajkumar', '', 'Bangalore', 'A', 'info@thirumalatravels.com', '9092310791', 'A', 'Andra Layout', '15', 'Online Payment', '', 'a10136e59facbef96fbc51e425b8dd7747c24355efe30e9e330c23c8eb45d2b8b2491c450252bc657427cb38fa4d243b2a7a04633ffb305b51dfbacb66a1080d', 'HDFCPG', '9548423111780780', 'MAST', '{\"mihpayid\":\"6842761963\",\"mode\":\"DC\",\"status\":\"success\",\"unmappedstatus\":\"captured\",\"key\":\"JSO3cwSw\",\"txnid\":\"0584c96545fefe608201\",\"amount\":\"1.0\",\"addedon\":\"2018-03-19 17:11:10\",\"productinfo\":\"Tata Indica Non AcOutstation (Roundtrip)\",\"firstname\":\"Rajkumar\",\"lastname\":\"\",\"address1\":\"Bangalore\",\"address2\":\"A\",\"city\":\"\",\"state\":\"\",\"country\":\"\",\"zipcode\":\"\",\"email\":\"info@thirumalatravels.com\",\"phone\":\"9092310791\",\"udf1\":\"A\",\"udf2\":\"Andra Layout\",\"udf3\":\"15\",\"udf4\":\"Online Payment\",\"udf5\":\"\",\"udf6\":\"\",\"udf7\":\"\",\"udf8\":\"\",\"udf9\":\"\",\"udf10\":\"\",\"hash\":\"a10136e59facbef96fbc51e425b8dd7747c24355efe30e9e330c23c8eb45d2b8b2491c450252bc657427cb38fa4d243b2a7a04633ffb305b51dfbacb66a1080d\",\"field1\":\"807800156818\",\"field2\":\"980760\",\"field3\":\"9548423111780780\",\"field4\":\"9548423111780780\",\"field5\":\"\",\"field6\":\"\",\"field7\":\"00\",\"field8\":\"\",\"field9\":\"SUCCESS\",\"PG_TYPE\":\"HDFCPG\",\"encryptedPaymentId\":\"3D752EE5565E1AA3A70224D17740823C\",\"bank_ref_num\":\"9548423111780780\",\"bankcode\":\"MAST\",\"error\":\"E000\",\"error_Message\":\"No Error\",\"name_on_card\":\"RAJAKUMAR A\",\"cardnum\":\"533114XXXXXX3125\",\"cardhash\":\"This field is no longer supported in postback params.\",\"amount_split\":\"{\\\"PAYU\\\":\\\"1.0\\\"}\",\"payuMoneyId\":\"183215211\",\"discount\":\"0.00\",\"net_amount_debit\":\"1\"}', '180.151.35.7', '2018-03-19 12:59:50', '2018-03-19 12:59:50'),
(4, '6850497301', 'NB', 'success', '37105b44c3cc849d41e1', '137.0', '2018-03-22 13:57:29', 'Tata Indica Non AcOutstation (Roundtrip)', 'm', '', 'NEAR GNANASRISTI SCHOOL', 'HSR Layout', 'thirumalatours@gmail.com', '9845369848', 'ramakrishna', 'HSR Layout', '15', 'Online Payment', '', '221b697677157b692b56506f6fe0c6176849f6bfc8f179455cff0f5ab10ae69a0bd87687257a0e30c5aa67d417e38b267c52f15acaedcd026b3b29a547b9e2a0', 'SBINB', 'CH78482090', 'SBIB', '{\"mihpayid\":\"6850497301\",\"mode\":\"NB\",\"status\":\"success\",\"unmappedstatus\":\"captured\",\"key\":\"JSO3cwSw\",\"txnid\":\"37105b44c3cc849d41e1\",\"amount\":\"137.0\",\"addedon\":\"2018-03-22 19:27:29\",\"productinfo\":\"Tata Indica Non AcOutstation (Roundtrip)\",\"firstname\":\"m\",\"lastname\":\"\",\"address1\":\"NEAR GNANASRISTI SCHOOL\",\"address2\":\"HSR Layout\",\"city\":\"\",\"state\":\"\",\"country\":\"\",\"zipcode\":\"\",\"email\":\"thirumalatours@gmail.com\",\"phone\":\"9845369848\",\"udf1\":\"ramakrishna\",\"udf2\":\"HSR Layout\",\"udf3\":\"15\",\"udf4\":\"Online Payment\",\"udf5\":\"\",\"udf6\":\"\",\"udf7\":\"\",\"udf8\":\"\",\"udf9\":\"\",\"udf10\":\"\",\"hash\":\"221b697677157b692b56506f6fe0c6176849f6bfc8f179455cff0f5ab10ae69a0bd87687257a0e30c5aa67d417e38b267c52f15acaedcd026b3b29a547b9e2a0\",\"field1\":\"\",\"field2\":\"\",\"field3\":\"\",\"field4\":\"\",\"field5\":\"\",\"field6\":\"\",\"field7\":\"\",\"field8\":\"Transaction Completed Successfully\",\"field9\":\"Paid\",\"PG_TYPE\":\"SBINB\",\"encryptedPaymentId\":\"87CE49C2D26F962A7C2F1AD0C03D2325\",\"bank_ref_num\":\"CH78482090\",\"bankcode\":\"SBIB\",\"error\":\"E000\",\"error_Message\":\"No Error\",\"amount_split\":\"{\\\"PAYU\\\":\\\"137.0\\\"}\",\"payuMoneyId\":\"183668755\",\"discount\":\"0.00\",\"net_amount_debit\":\"137\"}', '117.200.105.71', '2018-03-22 13:59:23', '2018-03-22 13:59:23'),
(5, '6850497301', 'NB', 'success', '37105b44c3cc849d41e1', '137.0', '2018-03-22 13:57:29', 'Tata Indica Non AcOutstation (Roundtrip)', 'm', '', 'NEAR GNANASRISTI SCHOOL', 'HSR Layout', 'thirumalatours@gmail.com', '9845369848', 'ramakrishna', 'HSR Layout', '15', 'Online Payment', '', '221b697677157b692b56506f6fe0c6176849f6bfc8f179455cff0f5ab10ae69a0bd87687257a0e30c5aa67d417e38b267c52f15acaedcd026b3b29a547b9e2a0', 'SBINB', 'CH78482090', 'SBIB', '{\"mihpayid\":\"6850497301\",\"mode\":\"NB\",\"status\":\"success\",\"unmappedstatus\":\"captured\",\"key\":\"JSO3cwSw\",\"txnid\":\"37105b44c3cc849d41e1\",\"amount\":\"137.0\",\"addedon\":\"2018-03-22 19:27:29\",\"productinfo\":\"Tata Indica Non AcOutstation (Roundtrip)\",\"firstname\":\"m\",\"lastname\":\"\",\"address1\":\"NEAR GNANASRISTI SCHOOL\",\"address2\":\"HSR Layout\",\"city\":\"\",\"state\":\"\",\"country\":\"\",\"zipcode\":\"\",\"email\":\"thirumalatours@gmail.com\",\"phone\":\"9845369848\",\"udf1\":\"ramakrishna\",\"udf2\":\"HSR Layout\",\"udf3\":\"15\",\"udf4\":\"Online Payment\",\"udf5\":\"\",\"udf6\":\"\",\"udf7\":\"\",\"udf8\":\"\",\"udf9\":\"\",\"udf10\":\"\",\"hash\":\"221b697677157b692b56506f6fe0c6176849f6bfc8f179455cff0f5ab10ae69a0bd87687257a0e30c5aa67d417e38b267c52f15acaedcd026b3b29a547b9e2a0\",\"field1\":\"\",\"field2\":\"\",\"field3\":\"\",\"field4\":\"\",\"field5\":\"\",\"field6\":\"\",\"field7\":\"\",\"field8\":\"Transaction Completed Successfully\",\"field9\":\"Paid\",\"PG_TYPE\":\"SBINB\",\"encryptedPaymentId\":\"87CE49C2D26F962A7C2F1AD0C03D2325\",\"bank_ref_num\":\"CH78482090\",\"bankcode\":\"SBIB\",\"error\":\"E000\",\"error_Message\":\"No Error\",\"amount_split\":\"{\\\"PAYU\\\":\\\"137.0\\\"}\",\"payuMoneyId\":\"183668755\",\"discount\":\"0.00\",\"net_amount_debit\":\"137\"}', '117.200.105.71', '2018-03-22 13:59:49', '2018-03-22 13:59:49'),
(6, '6850497301', 'NB', 'success', '37105b44c3cc849d41e1', '137.0', '2018-03-22 13:57:29', 'Tata Indica Non AcOutstation (Roundtrip)', 'm', '', 'NEAR GNANASRISTI SCHOOL', 'HSR Layout', 'thirumalatours@gmail.com', '9845369848', 'ramakrishna', 'HSR Layout', '15', 'Online Payment', '', '221b697677157b692b56506f6fe0c6176849f6bfc8f179455cff0f5ab10ae69a0bd87687257a0e30c5aa67d417e38b267c52f15acaedcd026b3b29a547b9e2a0', 'SBINB', 'CH78482090', 'SBIB', '{\"mihpayid\":\"6850497301\",\"mode\":\"NB\",\"status\":\"success\",\"unmappedstatus\":\"captured\",\"key\":\"JSO3cwSw\",\"txnid\":\"37105b44c3cc849d41e1\",\"amount\":\"137.0\",\"addedon\":\"2018-03-22 19:27:29\",\"productinfo\":\"Tata Indica Non AcOutstation (Roundtrip)\",\"firstname\":\"m\",\"lastname\":\"\",\"address1\":\"NEAR GNANASRISTI SCHOOL\",\"address2\":\"HSR Layout\",\"city\":\"\",\"state\":\"\",\"country\":\"\",\"zipcode\":\"\",\"email\":\"thirumalatours@gmail.com\",\"phone\":\"9845369848\",\"udf1\":\"ramakrishna\",\"udf2\":\"HSR Layout\",\"udf3\":\"15\",\"udf4\":\"Online Payment\",\"udf5\":\"\",\"udf6\":\"\",\"udf7\":\"\",\"udf8\":\"\",\"udf9\":\"\",\"udf10\":\"\",\"hash\":\"221b697677157b692b56506f6fe0c6176849f6bfc8f179455cff0f5ab10ae69a0bd87687257a0e30c5aa67d417e38b267c52f15acaedcd026b3b29a547b9e2a0\",\"field1\":\"\",\"field2\":\"\",\"field3\":\"\",\"field4\":\"\",\"field5\":\"\",\"field6\":\"\",\"field7\":\"\",\"field8\":\"Transaction Completed Successfully\",\"field9\":\"Paid\",\"PG_TYPE\":\"SBINB\",\"encryptedPaymentId\":\"87CE49C2D26F962A7C2F1AD0C03D2325\",\"bank_ref_num\":\"CH78482090\",\"bankcode\":\"SBIB\",\"error\":\"E000\",\"error_Message\":\"No Error\",\"amount_split\":\"{\\\"PAYU\\\":\\\"137.0\\\"}\",\"payuMoneyId\":\"183668755\",\"discount\":\"0.00\",\"net_amount_debit\":\"137\"}', '117.200.105.71', '2018-03-22 13:59:53', '2018-03-22 13:59:53'),
(7, '6850497301', 'NB', 'success', '37105b44c3cc849d41e1', '137.0', '2018-03-22 13:57:29', 'Tata Indica Non AcOutstation (Roundtrip)', 'm', '', 'NEAR GNANASRISTI SCHOOL', 'HSR Layout', 'thirumalatours@gmail.com', '9845369848', 'ramakrishna', 'HSR Layout', '15', 'Online Payment', '', '221b697677157b692b56506f6fe0c6176849f6bfc8f179455cff0f5ab10ae69a0bd87687257a0e30c5aa67d417e38b267c52f15acaedcd026b3b29a547b9e2a0', 'SBINB', 'CH78482090', 'SBIB', '{\"mihpayid\":\"6850497301\",\"mode\":\"NB\",\"status\":\"success\",\"unmappedstatus\":\"captured\",\"key\":\"JSO3cwSw\",\"txnid\":\"37105b44c3cc849d41e1\",\"amount\":\"137.0\",\"addedon\":\"2018-03-22 19:27:29\",\"productinfo\":\"Tata Indica Non AcOutstation (Roundtrip)\",\"firstname\":\"m\",\"lastname\":\"\",\"address1\":\"NEAR GNANASRISTI SCHOOL\",\"address2\":\"HSR Layout\",\"city\":\"\",\"state\":\"\",\"country\":\"\",\"zipcode\":\"\",\"email\":\"thirumalatours@gmail.com\",\"phone\":\"9845369848\",\"udf1\":\"ramakrishna\",\"udf2\":\"HSR Layout\",\"udf3\":\"15\",\"udf4\":\"Online Payment\",\"udf5\":\"\",\"udf6\":\"\",\"udf7\":\"\",\"udf8\":\"\",\"udf9\":\"\",\"udf10\":\"\",\"hash\":\"221b697677157b692b56506f6fe0c6176849f6bfc8f179455cff0f5ab10ae69a0bd87687257a0e30c5aa67d417e38b267c52f15acaedcd026b3b29a547b9e2a0\",\"field1\":\"\",\"field2\":\"\",\"field3\":\"\",\"field4\":\"\",\"field5\":\"\",\"field6\":\"\",\"field7\":\"\",\"field8\":\"Transaction Completed Successfully\",\"field9\":\"Paid\",\"PG_TYPE\":\"SBINB\",\"encryptedPaymentId\":\"87CE49C2D26F962A7C2F1AD0C03D2325\",\"bank_ref_num\":\"CH78482090\",\"bankcode\":\"SBIB\",\"error\":\"E000\",\"error_Message\":\"No Error\",\"amount_split\":\"{\\\"PAYU\\\":\\\"137.0\\\"}\",\"payuMoneyId\":\"183668755\",\"discount\":\"0.00\",\"net_amount_debit\":\"137\"}', '117.200.105.71', '2018-03-22 14:00:28', '2018-03-22 14:00:28'),
(8, '6862106113', 'NB', 'success', '80f7696b2eec2a8cb4da', '270.0', '2018-03-27 08:30:42', 'Tata Indica Non AcOutstation (Roundtrip)', 'm', '', 'hsr layout', 'HSR Layout', 'thirumalatours@gmail.com', '9845369848', 'ramakrishna', 'HSR Layout', '15', 'Online Payment', '', '76bee772e018b8f0f0fcf52f08f52fa90460b1b222d394d9095325bb2a3310ccd3dedead2b81bff2d836becdb62083c1956d98cf9e20d07841a20c9fa1c6d64f', 'SBINB', 'CH78806373', 'SBIB', '{\"mihpayid\":\"6862106113\",\"mode\":\"NB\",\"status\":\"success\",\"unmappedstatus\":\"captured\",\"key\":\"JSO3cwSw\",\"txnid\":\"80f7696b2eec2a8cb4da\",\"amount\":\"270.0\",\"addedon\":\"2018-03-27 14:00:42\",\"productinfo\":\"Tata Indica Non AcOutstation (Roundtrip)\",\"firstname\":\"m\",\"lastname\":\"\",\"address1\":\"hsr layout\",\"address2\":\"HSR Layout\",\"city\":\"\",\"state\":\"\",\"country\":\"\",\"zipcode\":\"\",\"email\":\"thirumalatours@gmail.com\",\"phone\":\"9845369848\",\"udf1\":\"ramakrishna\",\"udf2\":\"HSR Layout\",\"udf3\":\"15\",\"udf4\":\"Online Payment\",\"udf5\":\"\",\"udf6\":\"\",\"udf7\":\"\",\"udf8\":\"\",\"udf9\":\"\",\"udf10\":\"\",\"hash\":\"76bee772e018b8f0f0fcf52f08f52fa90460b1b222d394d9095325bb2a3310ccd3dedead2b81bff2d836becdb62083c1956d98cf9e20d07841a20c9fa1c6d64f\",\"field1\":\"\",\"field2\":\"\",\"field3\":\"\",\"field4\":\"\",\"field5\":\"\",\"field6\":\"\",\"field7\":\"\",\"field8\":\"Transaction Completed Successfully\",\"field9\":\"Paid\",\"PG_TYPE\":\"SBINB\",\"encryptedPaymentId\":\"1AAE3F2B1BD16F182C4DDA1DBC349746\",\"bank_ref_num\":\"CH78806373\",\"bankcode\":\"SBIB\",\"error\":\"E000\",\"error_Message\":\"No Error\",\"amount_split\":\"{\\\"PAYU\\\":\\\"270.0\\\"}\",\"payuMoneyId\":\"184227203\",\"discount\":\"0.00\",\"net_amount_debit\":\"270\"}', '117.200.98.20', '2018-03-27 08:31:25', '2018-03-27 08:31:25'),
(9, '6862106113', 'NB', 'success', '80f7696b2eec2a8cb4da', '270.0', '2018-03-27 08:30:42', 'Tata Indica Non AcOutstation (Roundtrip)', 'm', '', 'hsr layout', 'HSR Layout', 'thirumalatours@gmail.com', '9845369848', 'ramakrishna', 'HSR Layout', '15', 'Online Payment', '', '76bee772e018b8f0f0fcf52f08f52fa90460b1b222d394d9095325bb2a3310ccd3dedead2b81bff2d836becdb62083c1956d98cf9e20d07841a20c9fa1c6d64f', 'SBINB', 'CH78806373', 'SBIB', '{\"mihpayid\":\"6862106113\",\"mode\":\"NB\",\"status\":\"success\",\"unmappedstatus\":\"captured\",\"key\":\"JSO3cwSw\",\"txnid\":\"80f7696b2eec2a8cb4da\",\"amount\":\"270.0\",\"addedon\":\"2018-03-27 14:00:42\",\"productinfo\":\"Tata Indica Non AcOutstation (Roundtrip)\",\"firstname\":\"m\",\"lastname\":\"\",\"address1\":\"hsr layout\",\"address2\":\"HSR Layout\",\"city\":\"\",\"state\":\"\",\"country\":\"\",\"zipcode\":\"\",\"email\":\"thirumalatours@gmail.com\",\"phone\":\"9845369848\",\"udf1\":\"ramakrishna\",\"udf2\":\"HSR Layout\",\"udf3\":\"15\",\"udf4\":\"Online Payment\",\"udf5\":\"\",\"udf6\":\"\",\"udf7\":\"\",\"udf8\":\"\",\"udf9\":\"\",\"udf10\":\"\",\"hash\":\"76bee772e018b8f0f0fcf52f08f52fa90460b1b222d394d9095325bb2a3310ccd3dedead2b81bff2d836becdb62083c1956d98cf9e20d07841a20c9fa1c6d64f\",\"field1\":\"\",\"field2\":\"\",\"field3\":\"\",\"field4\":\"\",\"field5\":\"\",\"field6\":\"\",\"field7\":\"\",\"field8\":\"Transaction Completed Successfully\",\"field9\":\"Paid\",\"PG_TYPE\":\"SBINB\",\"encryptedPaymentId\":\"1AAE3F2B1BD16F182C4DDA1DBC349746\",\"bank_ref_num\":\"CH78806373\",\"bankcode\":\"SBIB\",\"error\":\"E000\",\"error_Message\":\"No Error\",\"amount_split\":\"{\\\"PAYU\\\":\\\"270.0\\\"}\",\"payuMoneyId\":\"184227203\",\"discount\":\"0.00\",\"net_amount_debit\":\"270\"}', '117.200.98.20', '2018-03-27 08:31:36', '2018-03-27 08:31:36'),
(10, '6862106113', 'NB', 'success', '80f7696b2eec2a8cb4da', '270.0', '2018-03-27 08:30:42', 'Tata Indica Non AcOutstation (Roundtrip)', 'm', '', 'hsr layout', 'HSR Layout', 'thirumalatours@gmail.com', '9845369848', 'ramakrishna', 'HSR Layout', '15', 'Online Payment', '', '76bee772e018b8f0f0fcf52f08f52fa90460b1b222d394d9095325bb2a3310ccd3dedead2b81bff2d836becdb62083c1956d98cf9e20d07841a20c9fa1c6d64f', 'SBINB', 'CH78806373', 'SBIB', '{\"mihpayid\":\"6862106113\",\"mode\":\"NB\",\"status\":\"success\",\"unmappedstatus\":\"captured\",\"key\":\"JSO3cwSw\",\"txnid\":\"80f7696b2eec2a8cb4da\",\"amount\":\"270.0\",\"addedon\":\"2018-03-27 14:00:42\",\"productinfo\":\"Tata Indica Non AcOutstation (Roundtrip)\",\"firstname\":\"m\",\"lastname\":\"\",\"address1\":\"hsr layout\",\"address2\":\"HSR Layout\",\"city\":\"\",\"state\":\"\",\"country\":\"\",\"zipcode\":\"\",\"email\":\"thirumalatours@gmail.com\",\"phone\":\"9845369848\",\"udf1\":\"ramakrishna\",\"udf2\":\"HSR Layout\",\"udf3\":\"15\",\"udf4\":\"Online Payment\",\"udf5\":\"\",\"udf6\":\"\",\"udf7\":\"\",\"udf8\":\"\",\"udf9\":\"\",\"udf10\":\"\",\"hash\":\"76bee772e018b8f0f0fcf52f08f52fa90460b1b222d394d9095325bb2a3310ccd3dedead2b81bff2d836becdb62083c1956d98cf9e20d07841a20c9fa1c6d64f\",\"field1\":\"\",\"field2\":\"\",\"field3\":\"\",\"field4\":\"\",\"field5\":\"\",\"field6\":\"\",\"field7\":\"\",\"field8\":\"Transaction Completed Successfully\",\"field9\":\"Paid\",\"PG_TYPE\":\"SBINB\",\"encryptedPaymentId\":\"1AAE3F2B1BD16F182C4DDA1DBC349746\",\"bank_ref_num\":\"CH78806373\",\"bankcode\":\"SBIB\",\"error\":\"E000\",\"error_Message\":\"No Error\",\"amount_split\":\"{\\\"PAYU\\\":\\\"270.0\\\"}\",\"payuMoneyId\":\"184227203\",\"discount\":\"0.00\",\"net_amount_debit\":\"270\"}', '117.200.98.20', '2018-03-27 08:32:06', '2018-03-27 08:32:06'),
(11, '6862106113', 'NB', 'success', '80f7696b2eec2a8cb4da', '270.0', '2018-03-27 08:30:42', 'Tata Indica Non AcOutstation (Roundtrip)', 'm', '', 'hsr layout', 'HSR Layout', 'thirumalatours@gmail.com', '9845369848', 'ramakrishna', 'HSR Layout', '15', 'Online Payment', '', '76bee772e018b8f0f0fcf52f08f52fa90460b1b222d394d9095325bb2a3310ccd3dedead2b81bff2d836becdb62083c1956d98cf9e20d07841a20c9fa1c6d64f', 'SBINB', 'CH78806373', 'SBIB', '{\"mihpayid\":\"6862106113\",\"mode\":\"NB\",\"status\":\"success\",\"unmappedstatus\":\"captured\",\"key\":\"JSO3cwSw\",\"txnid\":\"80f7696b2eec2a8cb4da\",\"amount\":\"270.0\",\"addedon\":\"2018-03-27 14:00:42\",\"productinfo\":\"Tata Indica Non AcOutstation (Roundtrip)\",\"firstname\":\"m\",\"lastname\":\"\",\"address1\":\"hsr layout\",\"address2\":\"HSR Layout\",\"city\":\"\",\"state\":\"\",\"country\":\"\",\"zipcode\":\"\",\"email\":\"thirumalatours@gmail.com\",\"phone\":\"9845369848\",\"udf1\":\"ramakrishna\",\"udf2\":\"HSR Layout\",\"udf3\":\"15\",\"udf4\":\"Online Payment\",\"udf5\":\"\",\"udf6\":\"\",\"udf7\":\"\",\"udf8\":\"\",\"udf9\":\"\",\"udf10\":\"\",\"hash\":\"76bee772e018b8f0f0fcf52f08f52fa90460b1b222d394d9095325bb2a3310ccd3dedead2b81bff2d836becdb62083c1956d98cf9e20d07841a20c9fa1c6d64f\",\"field1\":\"\",\"field2\":\"\",\"field3\":\"\",\"field4\":\"\",\"field5\":\"\",\"field6\":\"\",\"field7\":\"\",\"field8\":\"Transaction Completed Successfully\",\"field9\":\"Paid\",\"PG_TYPE\":\"SBINB\",\"encryptedPaymentId\":\"1AAE3F2B1BD16F182C4DDA1DBC349746\",\"bank_ref_num\":\"CH78806373\",\"bankcode\":\"SBIB\",\"error\":\"E000\",\"error_Message\":\"No Error\",\"amount_split\":\"{\\\"PAYU\\\":\\\"270.0\\\"}\",\"payuMoneyId\":\"184227203\",\"discount\":\"0.00\",\"net_amount_debit\":\"270\"}', '117.200.98.20', '2018-03-27 08:35:54', '2018-03-27 08:35:54'),
(12, '6877939115', 'CC', 'success', '25b3731f85af62dda65b', '1.0', '2018-04-02 11:06:43', 'Tata Indica Non AcOutstation (Roundtrip)', 'Rajkumar A', '', 'sdsasa asdsads', 'AECS Layout-A Block', 'rjkumar856@gmail.com', '9092310791', 'A', 'AECS Layout-A Block', '15', 'Online Payment', '', '9b30e27577b47e9568df5f3510e0dc16533a2adf5ec19c19dd28fa950f13e0fa15923e57a71bef0cef561830c6d0d3447e71f51b618d0f1afee2967a1e1374e8', 'HDFCPG', '8867356361680920', 'CC', '{\"mihpayid\":\"6877939115\",\"mode\":\"CC\",\"status\":\"success\",\"unmappedstatus\":\"captured\",\"key\":\"JSO3cwSw\",\"txnid\":\"25b3731f85af62dda65b\",\"amount\":\"1.0\",\"addedon\":\"2018-04-02 16:36:43\",\"productinfo\":\"Tata Indica Non AcOutstation (Roundtrip)\",\"firstname\":\"Rajkumar A\",\"lastname\":\"\",\"address1\":\"sdsasa asdsads\",\"address2\":\"AECS Layout-A Block\",\"city\":\"\",\"state\":\"\",\"country\":\"\",\"zipcode\":\"\",\"email\":\"rjkumar856@gmail.com\",\"phone\":\"9092310791\",\"udf1\":\"A\",\"udf2\":\"AECS Layout-A Block\",\"udf3\":\"15\",\"udf4\":\"Online Payment\",\"udf5\":\"\",\"udf6\":\"\",\"udf7\":\"\",\"udf8\":\"\",\"udf9\":\"\",\"udf10\":\"\",\"hash\":\"9b30e27577b47e9568df5f3510e0dc16533a2adf5ec19c19dd28fa950f13e0fa15923e57a71bef0cef561830c6d0d3447e71f51b618d0f1afee2967a1e1374e8\",\"field1\":\"809200223394\",\"field2\":\"021768\",\"field3\":\"8867356361680920\",\"field4\":\"8867356361680920\",\"field5\":\"\",\"field6\":\"\",\"field7\":\"00\",\"field8\":\"\",\"field9\":\"SUCCESS\",\"PG_TYPE\":\"HDFCPG\",\"encryptedPaymentId\":\"04B4895964C1CD2E9A38F6966E3D3624\",\"bank_ref_num\":\"8867356361680920\",\"bankcode\":\"CC\",\"error\":\"E000\",\"error_Message\":\"No Error\",\"cardToken\":\"13e6dc5b4b1935a51bd86\",\"name_on_card\":\"Rajakumar A\",\"cardnum\":\"524181XXXXXX7137\",\"cardhash\":\"This field is no longer supported in postback params.\",\"card_merchant_param\":\"1\",\"amount_split\":\"{\\\"PAYU\\\":\\\"1.0\\\"}\",\"payuMoneyId\":\"185043469\",\"discount\":\"0.00\",\"net_amount_debit\":\"1\"}', '180.151.35.7', '2018-04-02 11:07:10', '2018-04-02 11:07:10'),
(13, '6877939115', 'CC', 'success', '25b3731f85af62dda65b', '1.0', '2018-04-02 11:06:43', 'Tata Indica Non AcOutstation (Roundtrip)', 'Rajkumar A', '', 'sdsasa asdsads', 'AECS Layout-A Block', 'rjkumar856@gmail.com', '9092310791', 'A', 'AECS Layout-A Block', '15', 'Online Payment', '', '9b30e27577b47e9568df5f3510e0dc16533a2adf5ec19c19dd28fa950f13e0fa15923e57a71bef0cef561830c6d0d3447e71f51b618d0f1afee2967a1e1374e8', 'HDFCPG', '8867356361680920', 'CC', '{\"mihpayid\":\"6877939115\",\"mode\":\"CC\",\"status\":\"success\",\"unmappedstatus\":\"captured\",\"key\":\"JSO3cwSw\",\"txnid\":\"25b3731f85af62dda65b\",\"amount\":\"1.0\",\"addedon\":\"2018-04-02 16:36:43\",\"productinfo\":\"Tata Indica Non AcOutstation (Roundtrip)\",\"firstname\":\"Rajkumar A\",\"lastname\":\"\",\"address1\":\"sdsasa asdsads\",\"address2\":\"AECS Layout-A Block\",\"city\":\"\",\"state\":\"\",\"country\":\"\",\"zipcode\":\"\",\"email\":\"rjkumar856@gmail.com\",\"phone\":\"9092310791\",\"udf1\":\"A\",\"udf2\":\"AECS Layout-A Block\",\"udf3\":\"15\",\"udf4\":\"Online Payment\",\"udf5\":\"\",\"udf6\":\"\",\"udf7\":\"\",\"udf8\":\"\",\"udf9\":\"\",\"udf10\":\"\",\"hash\":\"9b30e27577b47e9568df5f3510e0dc16533a2adf5ec19c19dd28fa950f13e0fa15923e57a71bef0cef561830c6d0d3447e71f51b618d0f1afee2967a1e1374e8\",\"field1\":\"809200223394\",\"field2\":\"021768\",\"field3\":\"8867356361680920\",\"field4\":\"8867356361680920\",\"field5\":\"\",\"field6\":\"\",\"field7\":\"00\",\"field8\":\"\",\"field9\":\"SUCCESS\",\"PG_TYPE\":\"HDFCPG\",\"encryptedPaymentId\":\"04B4895964C1CD2E9A38F6966E3D3624\",\"bank_ref_num\":\"8867356361680920\",\"bankcode\":\"CC\",\"error\":\"E000\",\"error_Message\":\"No Error\",\"cardToken\":\"13e6dc5b4b1935a51bd86\",\"name_on_card\":\"Rajakumar A\",\"cardnum\":\"524181XXXXXX7137\",\"cardhash\":\"This field is no longer supported in postback params.\",\"card_merchant_param\":\"1\",\"amount_split\":\"{\\\"PAYU\\\":\\\"1.0\\\"}\",\"payuMoneyId\":\"185043469\",\"discount\":\"0.00\",\"net_amount_debit\":\"1\"}', '180.151.35.7', '2018-04-02 11:09:31', '2018-04-02 11:09:31'),
(14, '6877939115', 'CC', 'success', '25b3731f85af62dda65b', '1.0', '2018-04-02 11:06:43', 'Tata Indica Non AcOutstation (Roundtrip)', 'Rajkumar A', '', 'sdsasa asdsads', 'AECS Layout-A Block', 'rjkumar856@gmail.com', '9092310791', 'A', 'AECS Layout-A Block', '15', 'Online Payment', '', '9b30e27577b47e9568df5f3510e0dc16533a2adf5ec19c19dd28fa950f13e0fa15923e57a71bef0cef561830c6d0d3447e71f51b618d0f1afee2967a1e1374e8', 'HDFCPG', '8867356361680920', 'CC', '{\"mihpayid\":\"6877939115\",\"mode\":\"CC\",\"status\":\"success\",\"unmappedstatus\":\"captured\",\"key\":\"JSO3cwSw\",\"txnid\":\"25b3731f85af62dda65b\",\"amount\":\"1.0\",\"addedon\":\"2018-04-02 16:36:43\",\"productinfo\":\"Tata Indica Non AcOutstation (Roundtrip)\",\"firstname\":\"Rajkumar A\",\"lastname\":\"\",\"address1\":\"sdsasa asdsads\",\"address2\":\"AECS Layout-A Block\",\"city\":\"\",\"state\":\"\",\"country\":\"\",\"zipcode\":\"\",\"email\":\"rjkumar856@gmail.com\",\"phone\":\"9092310791\",\"udf1\":\"A\",\"udf2\":\"AECS Layout-A Block\",\"udf3\":\"15\",\"udf4\":\"Online Payment\",\"udf5\":\"\",\"udf6\":\"\",\"udf7\":\"\",\"udf8\":\"\",\"udf9\":\"\",\"udf10\":\"\",\"hash\":\"9b30e27577b47e9568df5f3510e0dc16533a2adf5ec19c19dd28fa950f13e0fa15923e57a71bef0cef561830c6d0d3447e71f51b618d0f1afee2967a1e1374e8\",\"field1\":\"809200223394\",\"field2\":\"021768\",\"field3\":\"8867356361680920\",\"field4\":\"8867356361680920\",\"field5\":\"\",\"field6\":\"\",\"field7\":\"00\",\"field8\":\"\",\"field9\":\"SUCCESS\",\"PG_TYPE\":\"HDFCPG\",\"encryptedPaymentId\":\"04B4895964C1CD2E9A38F6966E3D3624\",\"bank_ref_num\":\"8867356361680920\",\"bankcode\":\"CC\",\"error\":\"E000\",\"error_Message\":\"No Error\",\"cardToken\":\"13e6dc5b4b1935a51bd86\",\"name_on_card\":\"Rajakumar A\",\"cardnum\":\"524181XXXXXX7137\",\"cardhash\":\"This field is no longer supported in postback params.\",\"card_merchant_param\":\"1\",\"amount_split\":\"{\\\"PAYU\\\":\\\"1.0\\\"}\",\"payuMoneyId\":\"185043469\",\"discount\":\"0.00\",\"net_amount_debit\":\"1\"}', '180.151.35.7', '2018-04-02 11:09:34', '2018-04-02 11:09:34'),
(15, '6877939115', 'CC', 'success', '25b3731f85af62dda65b', '1.0', '2018-04-02 11:06:43', 'Tata Indica Non AcOutstation (Roundtrip)', 'Rajkumar A', '', 'sdsasa asdsads', 'AECS Layout-A Block', 'rjkumar856@gmail.com', '9092310791', 'A', 'AECS Layout-A Block', '15', 'Online Payment', '', '9b30e27577b47e9568df5f3510e0dc16533a2adf5ec19c19dd28fa950f13e0fa15923e57a71bef0cef561830c6d0d3447e71f51b618d0f1afee2967a1e1374e8', 'HDFCPG', '8867356361680920', 'CC', '{\"mihpayid\":\"6877939115\",\"mode\":\"CC\",\"status\":\"success\",\"unmappedstatus\":\"captured\",\"key\":\"JSO3cwSw\",\"txnid\":\"25b3731f85af62dda65b\",\"amount\":\"1.0\",\"addedon\":\"2018-04-02 16:36:43\",\"productinfo\":\"Tata Indica Non AcOutstation (Roundtrip)\",\"firstname\":\"Rajkumar A\",\"lastname\":\"\",\"address1\":\"sdsasa asdsads\",\"address2\":\"AECS Layout-A Block\",\"city\":\"\",\"state\":\"\",\"country\":\"\",\"zipcode\":\"\",\"email\":\"rjkumar856@gmail.com\",\"phone\":\"9092310791\",\"udf1\":\"A\",\"udf2\":\"AECS Layout-A Block\",\"udf3\":\"15\",\"udf4\":\"Online Payment\",\"udf5\":\"\",\"udf6\":\"\",\"udf7\":\"\",\"udf8\":\"\",\"udf9\":\"\",\"udf10\":\"\",\"hash\":\"9b30e27577b47e9568df5f3510e0dc16533a2adf5ec19c19dd28fa950f13e0fa15923e57a71bef0cef561830c6d0d3447e71f51b618d0f1afee2967a1e1374e8\",\"field1\":\"809200223394\",\"field2\":\"021768\",\"field3\":\"8867356361680920\",\"field4\":\"8867356361680920\",\"field5\":\"\",\"field6\":\"\",\"field7\":\"00\",\"field8\":\"\",\"field9\":\"SUCCESS\",\"PG_TYPE\":\"HDFCPG\",\"encryptedPaymentId\":\"04B4895964C1CD2E9A38F6966E3D3624\",\"bank_ref_num\":\"8867356361680920\",\"bankcode\":\"CC\",\"error\":\"E000\",\"error_Message\":\"No Error\",\"cardToken\":\"13e6dc5b4b1935a51bd86\",\"name_on_card\":\"Rajakumar A\",\"cardnum\":\"524181XXXXXX7137\",\"cardhash\":\"This field is no longer supported in postback params.\",\"card_merchant_param\":\"1\",\"amount_split\":\"{\\\"PAYU\\\":\\\"1.0\\\"}\",\"payuMoneyId\":\"185043469\",\"discount\":\"0.00\",\"net_amount_debit\":\"1\"}', '180.151.35.7', '2018-04-02 11:10:49', '2018-04-02 11:10:49'),
(16, '6877939115', 'CC', 'success', '25b3731f85af62dda65b', '1.0', '2018-04-02 11:06:43', 'Tata Indica Non AcOutstation (Roundtrip)', 'Rajkumar A', '', 'sdsasa asdsads', 'AECS Layout-A Block', 'rjkumar856@gmail.com', '9092310791', 'A', 'AECS Layout-A Block', '15', 'Online Payment', '', '9b30e27577b47e9568df5f3510e0dc16533a2adf5ec19c19dd28fa950f13e0fa15923e57a71bef0cef561830c6d0d3447e71f51b618d0f1afee2967a1e1374e8', 'HDFCPG', '8867356361680920', 'CC', '{\"mihpayid\":\"6877939115\",\"mode\":\"CC\",\"status\":\"success\",\"unmappedstatus\":\"captured\",\"key\":\"JSO3cwSw\",\"txnid\":\"25b3731f85af62dda65b\",\"amount\":\"1.0\",\"addedon\":\"2018-04-02 16:36:43\",\"productinfo\":\"Tata Indica Non AcOutstation (Roundtrip)\",\"firstname\":\"Rajkumar A\",\"lastname\":\"\",\"address1\":\"sdsasa asdsads\",\"address2\":\"AECS Layout-A Block\",\"city\":\"\",\"state\":\"\",\"country\":\"\",\"zipcode\":\"\",\"email\":\"rjkumar856@gmail.com\",\"phone\":\"9092310791\",\"udf1\":\"A\",\"udf2\":\"AECS Layout-A Block\",\"udf3\":\"15\",\"udf4\":\"Online Payment\",\"udf5\":\"\",\"udf6\":\"\",\"udf7\":\"\",\"udf8\":\"\",\"udf9\":\"\",\"udf10\":\"\",\"hash\":\"9b30e27577b47e9568df5f3510e0dc16533a2adf5ec19c19dd28fa950f13e0fa15923e57a71bef0cef561830c6d0d3447e71f51b618d0f1afee2967a1e1374e8\",\"field1\":\"809200223394\",\"field2\":\"021768\",\"field3\":\"8867356361680920\",\"field4\":\"8867356361680920\",\"field5\":\"\",\"field6\":\"\",\"field7\":\"00\",\"field8\":\"\",\"field9\":\"SUCCESS\",\"PG_TYPE\":\"HDFCPG\",\"encryptedPaymentId\":\"04B4895964C1CD2E9A38F6966E3D3624\",\"bank_ref_num\":\"8867356361680920\",\"bankcode\":\"CC\",\"error\":\"E000\",\"error_Message\":\"No Error\",\"cardToken\":\"13e6dc5b4b1935a51bd86\",\"name_on_card\":\"Rajakumar A\",\"cardnum\":\"524181XXXXXX7137\",\"cardhash\":\"This field is no longer supported in postback params.\",\"card_merchant_param\":\"1\",\"amount_split\":\"{\\\"PAYU\\\":\\\"1.0\\\"}\",\"payuMoneyId\":\"185043469\",\"discount\":\"0.00\",\"net_amount_debit\":\"1\"}', '180.151.35.7', '2018-04-02 11:14:30', '2018-04-02 11:14:30'),
(17, '6877939115', 'CC', 'success', '25b3731f85af62dda65b', '1.0', '2018-04-02 11:06:43', 'Tata Indica Non AcOutstation (Roundtrip)', 'Rajkumar A', '', 'sdsasa asdsads', 'AECS Layout-A Block', 'rjkumar856@gmail.com', '9092310791', 'A', 'AECS Layout-A Block', '15', 'Online Payment', '', '9b30e27577b47e9568df5f3510e0dc16533a2adf5ec19c19dd28fa950f13e0fa15923e57a71bef0cef561830c6d0d3447e71f51b618d0f1afee2967a1e1374e8', 'HDFCPG', '8867356361680920', 'CC', '{\"mihpayid\":\"6877939115\",\"mode\":\"CC\",\"status\":\"success\",\"unmappedstatus\":\"captured\",\"key\":\"JSO3cwSw\",\"txnid\":\"25b3731f85af62dda65b\",\"amount\":\"1.0\",\"addedon\":\"2018-04-02 16:36:43\",\"productinfo\":\"Tata Indica Non AcOutstation (Roundtrip)\",\"firstname\":\"Rajkumar A\",\"lastname\":\"\",\"address1\":\"sdsasa asdsads\",\"address2\":\"AECS Layout-A Block\",\"city\":\"\",\"state\":\"\",\"country\":\"\",\"zipcode\":\"\",\"email\":\"rjkumar856@gmail.com\",\"phone\":\"9092310791\",\"udf1\":\"A\",\"udf2\":\"AECS Layout-A Block\",\"udf3\":\"15\",\"udf4\":\"Online Payment\",\"udf5\":\"\",\"udf6\":\"\",\"udf7\":\"\",\"udf8\":\"\",\"udf9\":\"\",\"udf10\":\"\",\"hash\":\"9b30e27577b47e9568df5f3510e0dc16533a2adf5ec19c19dd28fa950f13e0fa15923e57a71bef0cef561830c6d0d3447e71f51b618d0f1afee2967a1e1374e8\",\"field1\":\"809200223394\",\"field2\":\"021768\",\"field3\":\"8867356361680920\",\"field4\":\"8867356361680920\",\"field5\":\"\",\"field6\":\"\",\"field7\":\"00\",\"field8\":\"\",\"field9\":\"SUCCESS\",\"PG_TYPE\":\"HDFCPG\",\"encryptedPaymentId\":\"04B4895964C1CD2E9A38F6966E3D3624\",\"bank_ref_num\":\"8867356361680920\",\"bankcode\":\"CC\",\"error\":\"E000\",\"error_Message\":\"No Error\",\"cardToken\":\"13e6dc5b4b1935a51bd86\",\"name_on_card\":\"Rajakumar A\",\"cardnum\":\"524181XXXXXX7137\",\"cardhash\":\"This field is no longer supported in postback params.\",\"card_merchant_param\":\"1\",\"amount_split\":\"{\\\"PAYU\\\":\\\"1.0\\\"}\",\"payuMoneyId\":\"185043469\",\"discount\":\"0.00\",\"net_amount_debit\":\"1\"}', '180.151.35.7', '2018-04-02 11:16:18', '2018-04-02 11:16:18'),
(18, '6877939115', 'CC', 'success', '25b3731f85af62dda65b', '1.0', '2018-04-02 11:06:43', 'Tata Indica Non AcOutstation (Roundtrip)', 'Rajkumar A', '', 'sdsasa asdsads', 'AECS Layout-A Block', 'rjkumar856@gmail.com', '9092310791', 'A', 'AECS Layout-A Block', '15', 'Online Payment', '', '9b30e27577b47e9568df5f3510e0dc16533a2adf5ec19c19dd28fa950f13e0fa15923e57a71bef0cef561830c6d0d3447e71f51b618d0f1afee2967a1e1374e8', 'HDFCPG', '8867356361680920', 'CC', '{\"mihpayid\":\"6877939115\",\"mode\":\"CC\",\"status\":\"success\",\"unmappedstatus\":\"captured\",\"key\":\"JSO3cwSw\",\"txnid\":\"25b3731f85af62dda65b\",\"amount\":\"1.0\",\"addedon\":\"2018-04-02 16:36:43\",\"productinfo\":\"Tata Indica Non AcOutstation (Roundtrip)\",\"firstname\":\"Rajkumar A\",\"lastname\":\"\",\"address1\":\"sdsasa asdsads\",\"address2\":\"AECS Layout-A Block\",\"city\":\"\",\"state\":\"\",\"country\":\"\",\"zipcode\":\"\",\"email\":\"rjkumar856@gmail.com\",\"phone\":\"9092310791\",\"udf1\":\"A\",\"udf2\":\"AECS Layout-A Block\",\"udf3\":\"15\",\"udf4\":\"Online Payment\",\"udf5\":\"\",\"udf6\":\"\",\"udf7\":\"\",\"udf8\":\"\",\"udf9\":\"\",\"udf10\":\"\",\"hash\":\"9b30e27577b47e9568df5f3510e0dc16533a2adf5ec19c19dd28fa950f13e0fa15923e57a71bef0cef561830c6d0d3447e71f51b618d0f1afee2967a1e1374e8\",\"field1\":\"809200223394\",\"field2\":\"021768\",\"field3\":\"8867356361680920\",\"field4\":\"8867356361680920\",\"field5\":\"\",\"field6\":\"\",\"field7\":\"00\",\"field8\":\"\",\"field9\":\"SUCCESS\",\"PG_TYPE\":\"HDFCPG\",\"encryptedPaymentId\":\"04B4895964C1CD2E9A38F6966E3D3624\",\"bank_ref_num\":\"8867356361680920\",\"bankcode\":\"CC\",\"error\":\"E000\",\"error_Message\":\"No Error\",\"cardToken\":\"13e6dc5b4b1935a51bd86\",\"name_on_card\":\"Rajakumar A\",\"cardnum\":\"524181XXXXXX7137\",\"cardhash\":\"This field is no longer supported in postback params.\",\"card_merchant_param\":\"1\",\"amount_split\":\"{\\\"PAYU\\\":\\\"1.0\\\"}\",\"payuMoneyId\":\"185043469\",\"discount\":\"0.00\",\"net_amount_debit\":\"1\"}', '180.151.35.7', '2018-04-02 11:16:23', '2018-04-02 11:16:23'),
(19, '6877939115', 'CC', 'success', '25b3731f85af62dda65b', '1.0', '2018-04-02 11:06:43', 'Tata Indica Non AcOutstation (Roundtrip)', 'Rajkumar A', '', 'sdsasa asdsads', 'AECS Layout-A Block', 'rjkumar856@gmail.com', '9092310791', 'A', 'AECS Layout-A Block', '15', 'Online Payment', '', '9b30e27577b47e9568df5f3510e0dc16533a2adf5ec19c19dd28fa950f13e0fa15923e57a71bef0cef561830c6d0d3447e71f51b618d0f1afee2967a1e1374e8', 'HDFCPG', '8867356361680920', 'CC', '{\"mihpayid\":\"6877939115\",\"mode\":\"CC\",\"status\":\"success\",\"unmappedstatus\":\"captured\",\"key\":\"JSO3cwSw\",\"txnid\":\"25b3731f85af62dda65b\",\"amount\":\"1.0\",\"addedon\":\"2018-04-02 16:36:43\",\"productinfo\":\"Tata Indica Non AcOutstation (Roundtrip)\",\"firstname\":\"Rajkumar A\",\"lastname\":\"\",\"address1\":\"sdsasa asdsads\",\"address2\":\"AECS Layout-A Block\",\"city\":\"\",\"state\":\"\",\"country\":\"\",\"zipcode\":\"\",\"email\":\"rjkumar856@gmail.com\",\"phone\":\"9092310791\",\"udf1\":\"A\",\"udf2\":\"AECS Layout-A Block\",\"udf3\":\"15\",\"udf4\":\"Online Payment\",\"udf5\":\"\",\"udf6\":\"\",\"udf7\":\"\",\"udf8\":\"\",\"udf9\":\"\",\"udf10\":\"\",\"hash\":\"9b30e27577b47e9568df5f3510e0dc16533a2adf5ec19c19dd28fa950f13e0fa15923e57a71bef0cef561830c6d0d3447e71f51b618d0f1afee2967a1e1374e8\",\"field1\":\"809200223394\",\"field2\":\"021768\",\"field3\":\"8867356361680920\",\"field4\":\"8867356361680920\",\"field5\":\"\",\"field6\":\"\",\"field7\":\"00\",\"field8\":\"\",\"field9\":\"SUCCESS\",\"PG_TYPE\":\"HDFCPG\",\"encryptedPaymentId\":\"04B4895964C1CD2E9A38F6966E3D3624\",\"bank_ref_num\":\"8867356361680920\",\"bankcode\":\"CC\",\"error\":\"E000\",\"error_Message\":\"No Error\",\"cardToken\":\"13e6dc5b4b1935a51bd86\",\"name_on_card\":\"Rajakumar A\",\"cardnum\":\"524181XXXXXX7137\",\"cardhash\":\"This field is no longer supported in postback params.\",\"card_merchant_param\":\"1\",\"amount_split\":\"{\\\"PAYU\\\":\\\"1.0\\\"}\",\"payuMoneyId\":\"185043469\",\"discount\":\"0.00\",\"net_amount_debit\":\"1\"}', '180.151.35.7', '2018-04-02 11:32:24', '2018-04-02 11:32:24'),
(20, '6877939115', 'CC', 'success', '25b3731f85af62dda65b', '1.0', '2018-04-02 11:06:43', 'Tata Indica Non AcOutstation (Roundtrip)', 'Rajkumar A', '', 'sdsasa asdsads', 'AECS Layout-A Block', 'rjkumar856@gmail.com', '9092310791', 'A', 'AECS Layout-A Block', '15', 'Online Payment', '', '9b30e27577b47e9568df5f3510e0dc16533a2adf5ec19c19dd28fa950f13e0fa15923e57a71bef0cef561830c6d0d3447e71f51b618d0f1afee2967a1e1374e8', 'HDFCPG', '8867356361680920', 'CC', '{\"mihpayid\":\"6877939115\",\"mode\":\"CC\",\"status\":\"success\",\"unmappedstatus\":\"captured\",\"key\":\"JSO3cwSw\",\"txnid\":\"25b3731f85af62dda65b\",\"amount\":\"1.0\",\"addedon\":\"2018-04-02 16:36:43\",\"productinfo\":\"Tata Indica Non AcOutstation (Roundtrip)\",\"firstname\":\"Rajkumar A\",\"lastname\":\"\",\"address1\":\"sdsasa asdsads\",\"address2\":\"AECS Layout-A Block\",\"city\":\"\",\"state\":\"\",\"country\":\"\",\"zipcode\":\"\",\"email\":\"rjkumar856@gmail.com\",\"phone\":\"9092310791\",\"udf1\":\"A\",\"udf2\":\"AECS Layout-A Block\",\"udf3\":\"15\",\"udf4\":\"Online Payment\",\"udf5\":\"\",\"udf6\":\"\",\"udf7\":\"\",\"udf8\":\"\",\"udf9\":\"\",\"udf10\":\"\",\"hash\":\"9b30e27577b47e9568df5f3510e0dc16533a2adf5ec19c19dd28fa950f13e0fa15923e57a71bef0cef561830c6d0d3447e71f51b618d0f1afee2967a1e1374e8\",\"field1\":\"809200223394\",\"field2\":\"021768\",\"field3\":\"8867356361680920\",\"field4\":\"8867356361680920\",\"field5\":\"\",\"field6\":\"\",\"field7\":\"00\",\"field8\":\"\",\"field9\":\"SUCCESS\",\"PG_TYPE\":\"HDFCPG\",\"encryptedPaymentId\":\"04B4895964C1CD2E9A38F6966E3D3624\",\"bank_ref_num\":\"8867356361680920\",\"bankcode\":\"CC\",\"error\":\"E000\",\"error_Message\":\"No Error\",\"cardToken\":\"13e6dc5b4b1935a51bd86\",\"name_on_card\":\"Rajakumar A\",\"cardnum\":\"524181XXXXXX7137\",\"cardhash\":\"This field is no longer supported in postback params.\",\"card_merchant_param\":\"1\",\"amount_split\":\"{\\\"PAYU\\\":\\\"1.0\\\"}\",\"payuMoneyId\":\"185043469\",\"discount\":\"0.00\",\"net_amount_debit\":\"1\"}', '180.151.35.7', '2018-04-02 11:33:49', '2018-04-02 11:33:49'),
(21, '6877939115', 'CC', 'success', '25b3731f85af62dda65b', '1.0', '2018-04-02 11:06:43', 'Tata Indica Non AcOutstation (Roundtrip)', 'Rajkumar A', '', 'sdsasa asdsads', 'AECS Layout-A Block', 'rjkumar856@gmail.com', '9092310791', 'A', 'AECS Layout-A Block', '15', 'Online Payment', '', '9b30e27577b47e9568df5f3510e0dc16533a2adf5ec19c19dd28fa950f13e0fa15923e57a71bef0cef561830c6d0d3447e71f51b618d0f1afee2967a1e1374e8', 'HDFCPG', '8867356361680920', 'CC', '{\"mihpayid\":\"6877939115\",\"mode\":\"CC\",\"status\":\"success\",\"unmappedstatus\":\"captured\",\"key\":\"JSO3cwSw\",\"txnid\":\"25b3731f85af62dda65b\",\"amount\":\"1.0\",\"addedon\":\"2018-04-02 16:36:43\",\"productinfo\":\"Tata Indica Non AcOutstation (Roundtrip)\",\"firstname\":\"Rajkumar A\",\"lastname\":\"\",\"address1\":\"sdsasa asdsads\",\"address2\":\"AECS Layout-A Block\",\"city\":\"\",\"state\":\"\",\"country\":\"\",\"zipcode\":\"\",\"email\":\"rjkumar856@gmail.com\",\"phone\":\"9092310791\",\"udf1\":\"A\",\"udf2\":\"AECS Layout-A Block\",\"udf3\":\"15\",\"udf4\":\"Online Payment\",\"udf5\":\"\",\"udf6\":\"\",\"udf7\":\"\",\"udf8\":\"\",\"udf9\":\"\",\"udf10\":\"\",\"hash\":\"9b30e27577b47e9568df5f3510e0dc16533a2adf5ec19c19dd28fa950f13e0fa15923e57a71bef0cef561830c6d0d3447e71f51b618d0f1afee2967a1e1374e8\",\"field1\":\"809200223394\",\"field2\":\"021768\",\"field3\":\"8867356361680920\",\"field4\":\"8867356361680920\",\"field5\":\"\",\"field6\":\"\",\"field7\":\"00\",\"field8\":\"\",\"field9\":\"SUCCESS\",\"PG_TYPE\":\"HDFCPG\",\"encryptedPaymentId\":\"04B4895964C1CD2E9A38F6966E3D3624\",\"bank_ref_num\":\"8867356361680920\",\"bankcode\":\"CC\",\"error\":\"E000\",\"error_Message\":\"No Error\",\"cardToken\":\"13e6dc5b4b1935a51bd86\",\"name_on_card\":\"Rajakumar A\",\"cardnum\":\"524181XXXXXX7137\",\"cardhash\":\"This field is no longer supported in postback params.\",\"card_merchant_param\":\"1\",\"amount_split\":\"{\\\"PAYU\\\":\\\"1.0\\\"}\",\"payuMoneyId\":\"185043469\",\"discount\":\"0.00\",\"net_amount_debit\":\"1\"}', '180.151.35.7', '2018-04-02 11:35:02', '2018-04-02 11:35:02'),
(22, '6877939115', 'CC', 'success', '25b3731f85af62dda65b', '1.0', '2018-04-02 11:06:43', 'Tata Indica Non AcOutstation (Roundtrip)', 'Rajkumar A', '', 'sdsasa asdsads', 'AECS Layout-A Block', 'rjkumar856@gmail.com', '9092310791', 'A', 'AECS Layout-A Block', '15', 'Online Payment', '', '9b30e27577b47e9568df5f3510e0dc16533a2adf5ec19c19dd28fa950f13e0fa15923e57a71bef0cef561830c6d0d3447e71f51b618d0f1afee2967a1e1374e8', 'HDFCPG', '8867356361680920', 'CC', '{\"mihpayid\":\"6877939115\",\"mode\":\"CC\",\"status\":\"success\",\"unmappedstatus\":\"captured\",\"key\":\"JSO3cwSw\",\"txnid\":\"25b3731f85af62dda65b\",\"amount\":\"1.0\",\"addedon\":\"2018-04-02 16:36:43\",\"productinfo\":\"Tata Indica Non AcOutstation (Roundtrip)\",\"firstname\":\"Rajkumar A\",\"lastname\":\"\",\"address1\":\"sdsasa asdsads\",\"address2\":\"AECS Layout-A Block\",\"city\":\"\",\"state\":\"\",\"country\":\"\",\"zipcode\":\"\",\"email\":\"rjkumar856@gmail.com\",\"phone\":\"9092310791\",\"udf1\":\"A\",\"udf2\":\"AECS Layout-A Block\",\"udf3\":\"15\",\"udf4\":\"Online Payment\",\"udf5\":\"\",\"udf6\":\"\",\"udf7\":\"\",\"udf8\":\"\",\"udf9\":\"\",\"udf10\":\"\",\"hash\":\"9b30e27577b47e9568df5f3510e0dc16533a2adf5ec19c19dd28fa950f13e0fa15923e57a71bef0cef561830c6d0d3447e71f51b618d0f1afee2967a1e1374e8\",\"field1\":\"809200223394\",\"field2\":\"021768\",\"field3\":\"8867356361680920\",\"field4\":\"8867356361680920\",\"field5\":\"\",\"field6\":\"\",\"field7\":\"00\",\"field8\":\"\",\"field9\":\"SUCCESS\",\"PG_TYPE\":\"HDFCPG\",\"encryptedPaymentId\":\"04B4895964C1CD2E9A38F6966E3D3624\",\"bank_ref_num\":\"8867356361680920\",\"bankcode\":\"CC\",\"error\":\"E000\",\"error_Message\":\"No Error\",\"cardToken\":\"13e6dc5b4b1935a51bd86\",\"name_on_card\":\"Rajakumar A\",\"cardnum\":\"524181XXXXXX7137\",\"cardhash\":\"This field is no longer supported in postback params.\",\"card_merchant_param\":\"1\",\"amount_split\":\"{\\\"PAYU\\\":\\\"1.0\\\"}\",\"payuMoneyId\":\"185043469\",\"discount\":\"0.00\",\"net_amount_debit\":\"1\"}', '180.151.35.7', '2018-04-02 11:36:04', '2018-04-02 11:36:04'),
(23, '6877939115', 'CC', 'success', '25b3731f85af62dda65b', '1.0', '2018-04-02 11:06:43', 'Tata Indica Non AcOutstation (Roundtrip)', 'Rajkumar A', '', 'sdsasa asdsads', 'AECS Layout-A Block', 'rjkumar856@gmail.com', '9092310791', 'A', 'AECS Layout-A Block', '15', 'Online Payment', '', '9b30e27577b47e9568df5f3510e0dc16533a2adf5ec19c19dd28fa950f13e0fa15923e57a71bef0cef561830c6d0d3447e71f51b618d0f1afee2967a1e1374e8', 'HDFCPG', '8867356361680920', 'CC', '{\"mihpayid\":\"6877939115\",\"mode\":\"CC\",\"status\":\"success\",\"unmappedstatus\":\"captured\",\"key\":\"JSO3cwSw\",\"txnid\":\"25b3731f85af62dda65b\",\"amount\":\"1.0\",\"addedon\":\"2018-04-02 16:36:43\",\"productinfo\":\"Tata Indica Non AcOutstation (Roundtrip)\",\"firstname\":\"Rajkumar A\",\"lastname\":\"\",\"address1\":\"sdsasa asdsads\",\"address2\":\"AECS Layout-A Block\",\"city\":\"\",\"state\":\"\",\"country\":\"\",\"zipcode\":\"\",\"email\":\"rjkumar856@gmail.com\",\"phone\":\"9092310791\",\"udf1\":\"A\",\"udf2\":\"AECS Layout-A Block\",\"udf3\":\"15\",\"udf4\":\"Online Payment\",\"udf5\":\"\",\"udf6\":\"\",\"udf7\":\"\",\"udf8\":\"\",\"udf9\":\"\",\"udf10\":\"\",\"hash\":\"9b30e27577b47e9568df5f3510e0dc16533a2adf5ec19c19dd28fa950f13e0fa15923e57a71bef0cef561830c6d0d3447e71f51b618d0f1afee2967a1e1374e8\",\"field1\":\"809200223394\",\"field2\":\"021768\",\"field3\":\"8867356361680920\",\"field4\":\"8867356361680920\",\"field5\":\"\",\"field6\":\"\",\"field7\":\"00\",\"field8\":\"\",\"field9\":\"SUCCESS\",\"PG_TYPE\":\"HDFCPG\",\"encryptedPaymentId\":\"04B4895964C1CD2E9A38F6966E3D3624\",\"bank_ref_num\":\"8867356361680920\",\"bankcode\":\"CC\",\"error\":\"E000\",\"error_Message\":\"No Error\",\"cardToken\":\"13e6dc5b4b1935a51bd86\",\"name_on_card\":\"Rajakumar A\",\"cardnum\":\"524181XXXXXX7137\",\"cardhash\":\"This field is no longer supported in postback params.\",\"card_merchant_param\":\"1\",\"amount_split\":\"{\\\"PAYU\\\":\\\"1.0\\\"}\",\"payuMoneyId\":\"185043469\",\"discount\":\"0.00\",\"net_amount_debit\":\"1\"}', '180.151.35.7', '2018-04-02 11:41:52', '2018-04-02 11:41:52'),
(24, '6877939115', 'CC', 'success', '25b3731f85af62dda65b', '1.0', '2018-04-02 11:06:43', 'Tata Indica Non AcOutstation (Roundtrip)', 'Rajkumar A', '', 'sdsasa asdsads', 'AECS Layout-A Block', 'rjkumar856@gmail.com', '9092310791', 'A', 'AECS Layout-A Block', '15', 'Online Payment', '', '9b30e27577b47e9568df5f3510e0dc16533a2adf5ec19c19dd28fa950f13e0fa15923e57a71bef0cef561830c6d0d3447e71f51b618d0f1afee2967a1e1374e8', 'HDFCPG', '8867356361680920', 'CC', '{\"mihpayid\":\"6877939115\",\"mode\":\"CC\",\"status\":\"success\",\"unmappedstatus\":\"captured\",\"key\":\"JSO3cwSw\",\"txnid\":\"25b3731f85af62dda65b\",\"amount\":\"1.0\",\"addedon\":\"2018-04-02 16:36:43\",\"productinfo\":\"Tata Indica Non AcOutstation (Roundtrip)\",\"firstname\":\"Rajkumar A\",\"lastname\":\"\",\"address1\":\"sdsasa asdsads\",\"address2\":\"AECS Layout-A Block\",\"city\":\"\",\"state\":\"\",\"country\":\"\",\"zipcode\":\"\",\"email\":\"rjkumar856@gmail.com\",\"phone\":\"9092310791\",\"udf1\":\"A\",\"udf2\":\"AECS Layout-A Block\",\"udf3\":\"15\",\"udf4\":\"Online Payment\",\"udf5\":\"\",\"udf6\":\"\",\"udf7\":\"\",\"udf8\":\"\",\"udf9\":\"\",\"udf10\":\"\",\"hash\":\"9b30e27577b47e9568df5f3510e0dc16533a2adf5ec19c19dd28fa950f13e0fa15923e57a71bef0cef561830c6d0d3447e71f51b618d0f1afee2967a1e1374e8\",\"field1\":\"809200223394\",\"field2\":\"021768\",\"field3\":\"8867356361680920\",\"field4\":\"8867356361680920\",\"field5\":\"\",\"field6\":\"\",\"field7\":\"00\",\"field8\":\"\",\"field9\":\"SUCCESS\",\"PG_TYPE\":\"HDFCPG\",\"encryptedPaymentId\":\"04B4895964C1CD2E9A38F6966E3D3624\",\"bank_ref_num\":\"8867356361680920\",\"bankcode\":\"CC\",\"error\":\"E000\",\"error_Message\":\"No Error\",\"cardToken\":\"13e6dc5b4b1935a51bd86\",\"name_on_card\":\"Rajakumar A\",\"cardnum\":\"524181XXXXXX7137\",\"cardhash\":\"This field is no longer supported in postback params.\",\"card_merchant_param\":\"1\",\"amount_split\":\"{\\\"PAYU\\\":\\\"1.0\\\"}\",\"payuMoneyId\":\"185043469\",\"discount\":\"0.00\",\"net_amount_debit\":\"1\"}', '180.151.35.7', '2018-04-02 11:43:14', '2018-04-02 11:43:14'),
(25, '6877939115', 'CC', 'success', '25b3731f85af62dda65b', '1.0', '2018-04-02 11:06:43', 'Tata Indica Non AcOutstation (Roundtrip)', 'Rajkumar A', '', 'sdsasa asdsads', 'AECS Layout-A Block', 'rjkumar856@gmail.com', '9092310791', 'A', 'AECS Layout-A Block', '15', 'Online Payment', '', '9b30e27577b47e9568df5f3510e0dc16533a2adf5ec19c19dd28fa950f13e0fa15923e57a71bef0cef561830c6d0d3447e71f51b618d0f1afee2967a1e1374e8', 'HDFCPG', '8867356361680920', 'CC', '{\"mihpayid\":\"6877939115\",\"mode\":\"CC\",\"status\":\"success\",\"unmappedstatus\":\"captured\",\"key\":\"JSO3cwSw\",\"txnid\":\"25b3731f85af62dda65b\",\"amount\":\"1.0\",\"addedon\":\"2018-04-02 16:36:43\",\"productinfo\":\"Tata Indica Non AcOutstation (Roundtrip)\",\"firstname\":\"Rajkumar A\",\"lastname\":\"\",\"address1\":\"sdsasa asdsads\",\"address2\":\"AECS Layout-A Block\",\"city\":\"\",\"state\":\"\",\"country\":\"\",\"zipcode\":\"\",\"email\":\"rjkumar856@gmail.com\",\"phone\":\"9092310791\",\"udf1\":\"A\",\"udf2\":\"AECS Layout-A Block\",\"udf3\":\"15\",\"udf4\":\"Online Payment\",\"udf5\":\"\",\"udf6\":\"\",\"udf7\":\"\",\"udf8\":\"\",\"udf9\":\"\",\"udf10\":\"\",\"hash\":\"9b30e27577b47e9568df5f3510e0dc16533a2adf5ec19c19dd28fa950f13e0fa15923e57a71bef0cef561830c6d0d3447e71f51b618d0f1afee2967a1e1374e8\",\"field1\":\"809200223394\",\"field2\":\"021768\",\"field3\":\"8867356361680920\",\"field4\":\"8867356361680920\",\"field5\":\"\",\"field6\":\"\",\"field7\":\"00\",\"field8\":\"\",\"field9\":\"SUCCESS\",\"PG_TYPE\":\"HDFCPG\",\"encryptedPaymentId\":\"04B4895964C1CD2E9A38F6966E3D3624\",\"bank_ref_num\":\"8867356361680920\",\"bankcode\":\"CC\",\"error\":\"E000\",\"error_Message\":\"No Error\",\"cardToken\":\"13e6dc5b4b1935a51bd86\",\"name_on_card\":\"Rajakumar A\",\"cardnum\":\"524181XXXXXX7137\",\"cardhash\":\"This field is no longer supported in postback params.\",\"card_merchant_param\":\"1\",\"amount_split\":\"{\\\"PAYU\\\":\\\"1.0\\\"}\",\"payuMoneyId\":\"185043469\",\"discount\":\"0.00\",\"net_amount_debit\":\"1\"}', '180.151.35.7', '2018-04-02 11:51:53', '2018-04-02 11:51:53'),
(26, '6877939115', 'CC', 'success', '25b3731f85af62dda65b', '1.0', '2018-04-02 11:06:43', 'Tata Indica Non AcOutstation (Roundtrip)', 'Rajkumar A', '', 'sdsasa asdsads', 'AECS Layout-A Block', 'rjkumar856@gmail.com', '9092310791', 'A', 'AECS Layout-A Block', '15', 'Online Payment', '', '9b30e27577b47e9568df5f3510e0dc16533a2adf5ec19c19dd28fa950f13e0fa15923e57a71bef0cef561830c6d0d3447e71f51b618d0f1afee2967a1e1374e8', 'HDFCPG', '8867356361680920', 'CC', '{\"mihpayid\":\"6877939115\",\"mode\":\"CC\",\"status\":\"success\",\"unmappedstatus\":\"captured\",\"key\":\"JSO3cwSw\",\"txnid\":\"25b3731f85af62dda65b\",\"amount\":\"1.0\",\"addedon\":\"2018-04-02 16:36:43\",\"productinfo\":\"Tata Indica Non AcOutstation (Roundtrip)\",\"firstname\":\"Rajkumar A\",\"lastname\":\"\",\"address1\":\"sdsasa asdsads\",\"address2\":\"AECS Layout-A Block\",\"city\":\"\",\"state\":\"\",\"country\":\"\",\"zipcode\":\"\",\"email\":\"rjkumar856@gmail.com\",\"phone\":\"9092310791\",\"udf1\":\"A\",\"udf2\":\"AECS Layout-A Block\",\"udf3\":\"15\",\"udf4\":\"Online Payment\",\"udf5\":\"\",\"udf6\":\"\",\"udf7\":\"\",\"udf8\":\"\",\"udf9\":\"\",\"udf10\":\"\",\"hash\":\"9b30e27577b47e9568df5f3510e0dc16533a2adf5ec19c19dd28fa950f13e0fa15923e57a71bef0cef561830c6d0d3447e71f51b618d0f1afee2967a1e1374e8\",\"field1\":\"809200223394\",\"field2\":\"021768\",\"field3\":\"8867356361680920\",\"field4\":\"8867356361680920\",\"field5\":\"\",\"field6\":\"\",\"field7\":\"00\",\"field8\":\"\",\"field9\":\"SUCCESS\",\"PG_TYPE\":\"HDFCPG\",\"encryptedPaymentId\":\"04B4895964C1CD2E9A38F6966E3D3624\",\"bank_ref_num\":\"8867356361680920\",\"bankcode\":\"CC\",\"error\":\"E000\",\"error_Message\":\"No Error\",\"cardToken\":\"13e6dc5b4b1935a51bd86\",\"name_on_card\":\"Rajakumar A\",\"cardnum\":\"524181XXXXXX7137\",\"cardhash\":\"This field is no longer supported in postback params.\",\"card_merchant_param\":\"1\",\"amount_split\":\"{\\\"PAYU\\\":\\\"1.0\\\"}\",\"payuMoneyId\":\"185043469\",\"discount\":\"0.00\",\"net_amount_debit\":\"1\"}', '180.151.35.7', '2018-04-02 11:57:49', '2018-04-02 11:57:49');
INSERT INTO `payment_sucess` (`id`, `mihpayid`, `mode`, `status`, `txnid`, `amount`, `addedon`, `productinfo`, `firstname`, `lastname`, `address1`, `address2`, `email`, `phone`, `udf1`, `udf2`, `udf3`, `udf4`, `udf5`, `hash`, `PG_TYPE`, `bank_ref_num`, `bankcode`, `payment_request`, `ip_address`, `date_added`, `date_modified`) VALUES
(27, '6877939115', 'CC', 'success', '25b3731f85af62dda65b', '1.0', '2018-04-02 11:06:43', 'Tata Indica Non AcOutstation (Roundtrip)', 'Rajkumar A', '', 'sdsasa asdsads', 'AECS Layout-A Block', 'rjkumar856@gmail.com', '9092310791', 'A', 'AECS Layout-A Block', '15', 'Online Payment', '', '9b30e27577b47e9568df5f3510e0dc16533a2adf5ec19c19dd28fa950f13e0fa15923e57a71bef0cef561830c6d0d3447e71f51b618d0f1afee2967a1e1374e8', 'HDFCPG', '8867356361680920', 'CC', '{\"mihpayid\":\"6877939115\",\"mode\":\"CC\",\"status\":\"success\",\"unmappedstatus\":\"captured\",\"key\":\"JSO3cwSw\",\"txnid\":\"25b3731f85af62dda65b\",\"amount\":\"1.0\",\"addedon\":\"2018-04-02 16:36:43\",\"productinfo\":\"Tata Indica Non AcOutstation (Roundtrip)\",\"firstname\":\"Rajkumar A\",\"lastname\":\"\",\"address1\":\"sdsasa asdsads\",\"address2\":\"AECS Layout-A Block\",\"city\":\"\",\"state\":\"\",\"country\":\"\",\"zipcode\":\"\",\"email\":\"rjkumar856@gmail.com\",\"phone\":\"9092310791\",\"udf1\":\"A\",\"udf2\":\"AECS Layout-A Block\",\"udf3\":\"15\",\"udf4\":\"Online Payment\",\"udf5\":\"\",\"udf6\":\"\",\"udf7\":\"\",\"udf8\":\"\",\"udf9\":\"\",\"udf10\":\"\",\"hash\":\"9b30e27577b47e9568df5f3510e0dc16533a2adf5ec19c19dd28fa950f13e0fa15923e57a71bef0cef561830c6d0d3447e71f51b618d0f1afee2967a1e1374e8\",\"field1\":\"809200223394\",\"field2\":\"021768\",\"field3\":\"8867356361680920\",\"field4\":\"8867356361680920\",\"field5\":\"\",\"field6\":\"\",\"field7\":\"00\",\"field8\":\"\",\"field9\":\"SUCCESS\",\"PG_TYPE\":\"HDFCPG\",\"encryptedPaymentId\":\"04B4895964C1CD2E9A38F6966E3D3624\",\"bank_ref_num\":\"8867356361680920\",\"bankcode\":\"CC\",\"error\":\"E000\",\"error_Message\":\"No Error\",\"cardToken\":\"13e6dc5b4b1935a51bd86\",\"name_on_card\":\"Rajakumar A\",\"cardnum\":\"524181XXXXXX7137\",\"cardhash\":\"This field is no longer supported in postback params.\",\"card_merchant_param\":\"1\",\"amount_split\":\"{\\\"PAYU\\\":\\\"1.0\\\"}\",\"payuMoneyId\":\"185043469\",\"discount\":\"0.00\",\"net_amount_debit\":\"1\"}', '180.151.35.7', '2018-04-02 11:58:25', '2018-04-02 11:58:25'),
(28, '6878139067', 'CC', 'success', 'b09c7aa6184b4143b69d', '1.0', '2018-04-02 12:34:01', 'Mini Bus (21   1) Non AC - Outstation (Roundtrip)', 'Rajkumar', '', 'Rajkumar', 'Amruthnagar', 'rjkumar856@gmail.com', '9092310791', 'A', 'Amruthnagar', '6', 'Online Payment', '', 'c4926eee6c309bdc79bb7a5a3595cc81556cc96a49e24a6b5d8c688e70bcc80f947d92e4f03da095d472ce25df11d22140101182518520a064f8782ca4b49368', 'HDFCPG', '573590041880920', 'CC', '{\"mihpayid\":\"6878139067\",\"mode\":\"CC\",\"status\":\"success\",\"unmappedstatus\":\"captured\",\"key\":\"JSO3cwSw\",\"txnid\":\"b09c7aa6184b4143b69d\",\"amount\":\"1.0\",\"addedon\":\"2018-04-02 18:04:01\",\"productinfo\":\"Mini Bus (21   1) Non AC - Outstation (Roundtrip)\",\"firstname\":\"Rajkumar\",\"lastname\":\"\",\"address1\":\"Rajkumar\",\"address2\":\"Amruthnagar\",\"city\":\"\",\"state\":\"\",\"country\":\"\",\"zipcode\":\"\",\"email\":\"rjkumar856@gmail.com\",\"phone\":\"9092310791\",\"udf1\":\"A\",\"udf2\":\"Amruthnagar\",\"udf3\":\"6\",\"udf4\":\"Online Payment\",\"udf5\":\"\",\"udf6\":\"\",\"udf7\":\"\",\"udf8\":\"\",\"udf9\":\"\",\"udf10\":\"\",\"hash\":\"c4926eee6c309bdc79bb7a5a3595cc81556cc96a49e24a6b5d8c688e70bcc80f947d92e4f03da095d472ce25df11d22140101182518520a064f8782ca4b49368\",\"field1\":\"809240135285\",\"field2\":\"027805\",\"field3\":\"573590041880920\",\"field4\":\"573590041880920\",\"field5\":\"\",\"field6\":\"\",\"field7\":\"00\",\"field8\":\"\",\"field9\":\"SUCCESS\",\"PG_TYPE\":\"HDFCPG\",\"encryptedPaymentId\":\"B5F0F43DF18E718FDA1028BEE8C4A60E\",\"bank_ref_num\":\"573590041880920\",\"bankcode\":\"CC\",\"error\":\"E000\",\"error_Message\":\"No Error\",\"cardToken\":\"13e6dc5b4b1935a51bd86\",\"name_on_card\":\"Rajakumar A\",\"cardnum\":\"524181XXXXXX7137\",\"cardhash\":\"This field is no longer supported in postback params.\",\"amount_split\":\"{\\\"PAYU\\\":\\\"1.0\\\"}\",\"payuMoneyId\":\"185056071\",\"discount\":\"0.00\",\"net_amount_debit\":\"1\"}', '180.151.35.7', '2018-04-02 12:34:30', '2018-04-02 12:34:30'),
(29, '6878139067', 'CC', 'success', 'b09c7aa6184b4143b69d', '1.0', '2018-04-02 12:34:01', 'Mini Bus (21   1) Non AC - Outstation (Roundtrip)', 'Rajkumar', '', 'Rajkumar', 'Amruthnagar', 'rjkumar856@gmail.com', '9092310791', 'A', 'Amruthnagar', '6', 'Online Payment', '', 'c4926eee6c309bdc79bb7a5a3595cc81556cc96a49e24a6b5d8c688e70bcc80f947d92e4f03da095d472ce25df11d22140101182518520a064f8782ca4b49368', 'HDFCPG', '573590041880920', 'CC', '{\"mihpayid\":\"6878139067\",\"mode\":\"CC\",\"status\":\"success\",\"unmappedstatus\":\"captured\",\"key\":\"JSO3cwSw\",\"txnid\":\"b09c7aa6184b4143b69d\",\"amount\":\"1.0\",\"addedon\":\"2018-04-02 18:04:01\",\"productinfo\":\"Mini Bus (21   1) Non AC - Outstation (Roundtrip)\",\"firstname\":\"Rajkumar\",\"lastname\":\"\",\"address1\":\"Rajkumar\",\"address2\":\"Amruthnagar\",\"city\":\"\",\"state\":\"\",\"country\":\"\",\"zipcode\":\"\",\"email\":\"rjkumar856@gmail.com\",\"phone\":\"9092310791\",\"udf1\":\"A\",\"udf2\":\"Amruthnagar\",\"udf3\":\"6\",\"udf4\":\"Online Payment\",\"udf5\":\"\",\"udf6\":\"\",\"udf7\":\"\",\"udf8\":\"\",\"udf9\":\"\",\"udf10\":\"\",\"hash\":\"c4926eee6c309bdc79bb7a5a3595cc81556cc96a49e24a6b5d8c688e70bcc80f947d92e4f03da095d472ce25df11d22140101182518520a064f8782ca4b49368\",\"field1\":\"809240135285\",\"field2\":\"027805\",\"field3\":\"573590041880920\",\"field4\":\"573590041880920\",\"field5\":\"\",\"field6\":\"\",\"field7\":\"00\",\"field8\":\"\",\"field9\":\"SUCCESS\",\"PG_TYPE\":\"HDFCPG\",\"encryptedPaymentId\":\"B5F0F43DF18E718FDA1028BEE8C4A60E\",\"bank_ref_num\":\"573590041880920\",\"bankcode\":\"CC\",\"error\":\"E000\",\"error_Message\":\"No Error\",\"cardToken\":\"13e6dc5b4b1935a51bd86\",\"name_on_card\":\"Rajakumar A\",\"cardnum\":\"524181XXXXXX7137\",\"cardhash\":\"This field is no longer supported in postback params.\",\"amount_split\":\"{\\\"PAYU\\\":\\\"1.0\\\"}\",\"payuMoneyId\":\"185056071\",\"discount\":\"0.00\",\"net_amount_debit\":\"1\"}', '180.151.35.7', '2018-04-02 12:38:48', '2018-04-02 12:38:48'),
(30, '6878139067', 'CC', 'success', 'b09c7aa6184b4143b69d', '1.0', '2018-04-02 12:34:01', 'Mini Bus (21   1) Non AC - Outstation (Roundtrip)', 'Rajkumar', '', 'Rajkumar', 'Amruthnagar', 'rjkumar856@gmail.com', '9092310791', 'A', 'Amruthnagar', '6', 'Online Payment', '', 'c4926eee6c309bdc79bb7a5a3595cc81556cc96a49e24a6b5d8c688e70bcc80f947d92e4f03da095d472ce25df11d22140101182518520a064f8782ca4b49368', 'HDFCPG', '573590041880920', 'CC', '{\"mihpayid\":\"6878139067\",\"mode\":\"CC\",\"status\":\"success\",\"unmappedstatus\":\"captured\",\"key\":\"JSO3cwSw\",\"txnid\":\"b09c7aa6184b4143b69d\",\"amount\":\"1.0\",\"addedon\":\"2018-04-02 18:04:01\",\"productinfo\":\"Mini Bus (21   1) Non AC - Outstation (Roundtrip)\",\"firstname\":\"Rajkumar\",\"lastname\":\"\",\"address1\":\"Rajkumar\",\"address2\":\"Amruthnagar\",\"city\":\"\",\"state\":\"\",\"country\":\"\",\"zipcode\":\"\",\"email\":\"rjkumar856@gmail.com\",\"phone\":\"9092310791\",\"udf1\":\"A\",\"udf2\":\"Amruthnagar\",\"udf3\":\"6\",\"udf4\":\"Online Payment\",\"udf5\":\"\",\"udf6\":\"\",\"udf7\":\"\",\"udf8\":\"\",\"udf9\":\"\",\"udf10\":\"\",\"hash\":\"c4926eee6c309bdc79bb7a5a3595cc81556cc96a49e24a6b5d8c688e70bcc80f947d92e4f03da095d472ce25df11d22140101182518520a064f8782ca4b49368\",\"field1\":\"809240135285\",\"field2\":\"027805\",\"field3\":\"573590041880920\",\"field4\":\"573590041880920\",\"field5\":\"\",\"field6\":\"\",\"field7\":\"00\",\"field8\":\"\",\"field9\":\"SUCCESS\",\"PG_TYPE\":\"HDFCPG\",\"encryptedPaymentId\":\"B5F0F43DF18E718FDA1028BEE8C4A60E\",\"bank_ref_num\":\"573590041880920\",\"bankcode\":\"CC\",\"error\":\"E000\",\"error_Message\":\"No Error\",\"cardToken\":\"13e6dc5b4b1935a51bd86\",\"name_on_card\":\"Rajakumar A\",\"cardnum\":\"524181XXXXXX7137\",\"cardhash\":\"This field is no longer supported in postback params.\",\"amount_split\":\"{\\\"PAYU\\\":\\\"1.0\\\"}\",\"payuMoneyId\":\"185056071\",\"discount\":\"0.00\",\"net_amount_debit\":\"1\"}', '180.151.35.7', '2018-04-02 12:41:14', '2018-04-02 12:41:14'),
(31, '6878139067', 'CC', 'success', 'b09c7aa6184b4143b69d', '1.0', '2018-04-02 12:34:01', 'Mini Bus (21   1) Non AC - Outstation (Roundtrip)', 'Rajkumar', '', 'Rajkumar', 'Amruthnagar', 'rjkumar856@gmail.com', '9092310791', 'A', 'Amruthnagar', '6', 'Online Payment', '', 'c4926eee6c309bdc79bb7a5a3595cc81556cc96a49e24a6b5d8c688e70bcc80f947d92e4f03da095d472ce25df11d22140101182518520a064f8782ca4b49368', 'HDFCPG', '573590041880920', 'CC', '{\"mihpayid\":\"6878139067\",\"mode\":\"CC\",\"status\":\"success\",\"unmappedstatus\":\"captured\",\"key\":\"JSO3cwSw\",\"txnid\":\"b09c7aa6184b4143b69d\",\"amount\":\"1.0\",\"addedon\":\"2018-04-02 18:04:01\",\"productinfo\":\"Mini Bus (21   1) Non AC - Outstation (Roundtrip)\",\"firstname\":\"Rajkumar\",\"lastname\":\"\",\"address1\":\"Rajkumar\",\"address2\":\"Amruthnagar\",\"city\":\"\",\"state\":\"\",\"country\":\"\",\"zipcode\":\"\",\"email\":\"rjkumar856@gmail.com\",\"phone\":\"9092310791\",\"udf1\":\"A\",\"udf2\":\"Amruthnagar\",\"udf3\":\"6\",\"udf4\":\"Online Payment\",\"udf5\":\"\",\"udf6\":\"\",\"udf7\":\"\",\"udf8\":\"\",\"udf9\":\"\",\"udf10\":\"\",\"hash\":\"c4926eee6c309bdc79bb7a5a3595cc81556cc96a49e24a6b5d8c688e70bcc80f947d92e4f03da095d472ce25df11d22140101182518520a064f8782ca4b49368\",\"field1\":\"809240135285\",\"field2\":\"027805\",\"field3\":\"573590041880920\",\"field4\":\"573590041880920\",\"field5\":\"\",\"field6\":\"\",\"field7\":\"00\",\"field8\":\"\",\"field9\":\"SUCCESS\",\"PG_TYPE\":\"HDFCPG\",\"encryptedPaymentId\":\"B5F0F43DF18E718FDA1028BEE8C4A60E\",\"bank_ref_num\":\"573590041880920\",\"bankcode\":\"CC\",\"error\":\"E000\",\"error_Message\":\"No Error\",\"cardToken\":\"13e6dc5b4b1935a51bd86\",\"name_on_card\":\"Rajakumar A\",\"cardnum\":\"524181XXXXXX7137\",\"cardhash\":\"This field is no longer supported in postback params.\",\"amount_split\":\"{\\\"PAYU\\\":\\\"1.0\\\"}\",\"payuMoneyId\":\"185056071\",\"discount\":\"0.00\",\"net_amount_debit\":\"1\"}', '180.151.35.7', '2018-04-02 12:48:47', '2018-04-02 12:48:47'),
(32, '6878230641', 'CC', 'success', 'e77d9eec62bbdb8fed29', '1.0', '2018-04-02 13:12:31', 'Sedan - Local Taxi (4hours/40Kms)', 'Rajkumar', '', 'uyiyui', 'Agara', 'rjkumar856@gmail.com', '9092310791', 'A', 'Agara', '2', 'Online Payment', '', 'adc644771890d16c8ad0a22a7f4861195fe67a22aac8c21ea59a1d08ddcf9867fcdd90e3bc6dbd90b63651fee813deb6f4f9158614c3ed330ac3ed0489b24115', 'HDFCPG', '437775421880920', 'CC', '{\"mihpayid\":\"6878230641\",\"mode\":\"CC\",\"status\":\"success\",\"unmappedstatus\":\"captured\",\"key\":\"JSO3cwSw\",\"txnid\":\"e77d9eec62bbdb8fed29\",\"amount\":\"1.0\",\"addedon\":\"2018-04-02 18:42:31\",\"productinfo\":\"Sedan - Local Taxi (4hours\\/40Kms)\",\"firstname\":\"Rajkumar\",\"lastname\":\"\",\"address1\":\"uyiyui\",\"address2\":\"Agara\",\"city\":\"\",\"state\":\"\",\"country\":\"\",\"zipcode\":\"\",\"email\":\"rjkumar856@gmail.com\",\"phone\":\"9092310791\",\"udf1\":\"A\",\"udf2\":\"Agara\",\"udf3\":\"2\",\"udf4\":\"Online Payment\",\"udf5\":\"\",\"udf6\":\"\",\"udf7\":\"\",\"udf8\":\"\",\"udf9\":\"\",\"udf10\":\"\",\"hash\":\"adc644771890d16c8ad0a22a7f4861195fe67a22aac8c21ea59a1d08ddcf9867fcdd90e3bc6dbd90b63651fee813deb6f4f9158614c3ed330ac3ed0489b24115\",\"field1\":\"809240151935\",\"field2\":\"083033\",\"field3\":\"437775421880920\",\"field4\":\"437775421880920\",\"field5\":\"\",\"field6\":\"\",\"field7\":\"00\",\"field8\":\"\",\"field9\":\"SUCCESS\",\"PG_TYPE\":\"HDFCPG\",\"encryptedPaymentId\":\"9F2EE5DF0143775DE31B4DE1CB9C293C\",\"bank_ref_num\":\"437775421880920\",\"bankcode\":\"CC\",\"error\":\"E000\",\"error_Message\":\"No Error\",\"cardToken\":\"13e6dc5b4b1935a51bd86\",\"name_on_card\":\"Rajakumar A\",\"cardnum\":\"524181XXXXXX7137\",\"cardhash\":\"This field is no longer supported in postback params.\",\"amount_split\":\"{\\\"PAYU\\\":\\\"1.0\\\"}\",\"payuMoneyId\":\"185060698\",\"discount\":\"0.00\",\"net_amount_debit\":\"1\"}', '180.151.35.7', '2018-04-02 13:12:51', '2018-04-02 13:12:51'),
(33, '6878230641', 'CC', 'success', 'e77d9eec62bbdb8fed29', '1.0', '2018-04-02 13:12:31', 'Sedan - Local Taxi (4hours/40Kms)', 'Rajkumar', '', 'uyiyui', 'Agara', 'rjkumar856@gmail.com', '9092310791', 'A', 'Agara', '2', 'Online Payment', '', 'adc644771890d16c8ad0a22a7f4861195fe67a22aac8c21ea59a1d08ddcf9867fcdd90e3bc6dbd90b63651fee813deb6f4f9158614c3ed330ac3ed0489b24115', 'HDFCPG', '437775421880920', 'CC', '{\"mihpayid\":\"6878230641\",\"mode\":\"CC\",\"status\":\"success\",\"unmappedstatus\":\"captured\",\"key\":\"JSO3cwSw\",\"txnid\":\"e77d9eec62bbdb8fed29\",\"amount\":\"1.0\",\"addedon\":\"2018-04-02 18:42:31\",\"productinfo\":\"Sedan - Local Taxi (4hours\\/40Kms)\",\"firstname\":\"Rajkumar\",\"lastname\":\"\",\"address1\":\"uyiyui\",\"address2\":\"Agara\",\"city\":\"\",\"state\":\"\",\"country\":\"\",\"zipcode\":\"\",\"email\":\"rjkumar856@gmail.com\",\"phone\":\"9092310791\",\"udf1\":\"A\",\"udf2\":\"Agara\",\"udf3\":\"2\",\"udf4\":\"Online Payment\",\"udf5\":\"\",\"udf6\":\"\",\"udf7\":\"\",\"udf8\":\"\",\"udf9\":\"\",\"udf10\":\"\",\"hash\":\"adc644771890d16c8ad0a22a7f4861195fe67a22aac8c21ea59a1d08ddcf9867fcdd90e3bc6dbd90b63651fee813deb6f4f9158614c3ed330ac3ed0489b24115\",\"field1\":\"809240151935\",\"field2\":\"083033\",\"field3\":\"437775421880920\",\"field4\":\"437775421880920\",\"field5\":\"\",\"field6\":\"\",\"field7\":\"00\",\"field8\":\"\",\"field9\":\"SUCCESS\",\"PG_TYPE\":\"HDFCPG\",\"encryptedPaymentId\":\"9F2EE5DF0143775DE31B4DE1CB9C293C\",\"bank_ref_num\":\"437775421880920\",\"bankcode\":\"CC\",\"error\":\"E000\",\"error_Message\":\"No Error\",\"cardToken\":\"13e6dc5b4b1935a51bd86\",\"name_on_card\":\"Rajakumar A\",\"cardnum\":\"524181XXXXXX7137\",\"cardhash\":\"This field is no longer supported in postback params.\",\"amount_split\":\"{\\\"PAYU\\\":\\\"1.0\\\"}\",\"payuMoneyId\":\"185060698\",\"discount\":\"0.00\",\"net_amount_debit\":\"1\"}', '180.151.35.7', '2018-04-02 13:16:00', '2018-04-02 13:16:00'),
(34, '6878230641', 'CC', 'success', 'e77d9eec62bbdb8fed29', '1.0', '2018-04-02 13:12:31', 'Sedan - Local Taxi (4hours/40Kms)', 'Rajkumar', '', 'uyiyui', 'Agara', 'rjkumar856@gmail.com', '9092310791', 'A', 'Agara', '2', 'Online Payment', '', 'adc644771890d16c8ad0a22a7f4861195fe67a22aac8c21ea59a1d08ddcf9867fcdd90e3bc6dbd90b63651fee813deb6f4f9158614c3ed330ac3ed0489b24115', 'HDFCPG', '437775421880920', 'CC', '{\"mihpayid\":\"6878230641\",\"mode\":\"CC\",\"status\":\"success\",\"unmappedstatus\":\"captured\",\"key\":\"JSO3cwSw\",\"txnid\":\"e77d9eec62bbdb8fed29\",\"amount\":\"1.0\",\"addedon\":\"2018-04-02 18:42:31\",\"productinfo\":\"Sedan - Local Taxi (4hours\\/40Kms)\",\"firstname\":\"Rajkumar\",\"lastname\":\"\",\"address1\":\"uyiyui\",\"address2\":\"Agara\",\"city\":\"\",\"state\":\"\",\"country\":\"\",\"zipcode\":\"\",\"email\":\"rjkumar856@gmail.com\",\"phone\":\"9092310791\",\"udf1\":\"A\",\"udf2\":\"Agara\",\"udf3\":\"2\",\"udf4\":\"Online Payment\",\"udf5\":\"\",\"udf6\":\"\",\"udf7\":\"\",\"udf8\":\"\",\"udf9\":\"\",\"udf10\":\"\",\"hash\":\"adc644771890d16c8ad0a22a7f4861195fe67a22aac8c21ea59a1d08ddcf9867fcdd90e3bc6dbd90b63651fee813deb6f4f9158614c3ed330ac3ed0489b24115\",\"field1\":\"809240151935\",\"field2\":\"083033\",\"field3\":\"437775421880920\",\"field4\":\"437775421880920\",\"field5\":\"\",\"field6\":\"\",\"field7\":\"00\",\"field8\":\"\",\"field9\":\"SUCCESS\",\"PG_TYPE\":\"HDFCPG\",\"encryptedPaymentId\":\"9F2EE5DF0143775DE31B4DE1CB9C293C\",\"bank_ref_num\":\"437775421880920\",\"bankcode\":\"CC\",\"error\":\"E000\",\"error_Message\":\"No Error\",\"cardToken\":\"13e6dc5b4b1935a51bd86\",\"name_on_card\":\"Rajakumar A\",\"cardnum\":\"524181XXXXXX7137\",\"cardhash\":\"This field is no longer supported in postback params.\",\"amount_split\":\"{\\\"PAYU\\\":\\\"1.0\\\"}\",\"payuMoneyId\":\"185060698\",\"discount\":\"0.00\",\"net_amount_debit\":\"1\"}', '180.151.35.7', '2018-04-02 13:17:36', '2018-04-02 13:17:36'),
(35, '6878230641', 'CC', 'success', 'e77d9eec62bbdb8fed29', '1.0', '2018-04-02 13:12:31', 'Sedan - Local Taxi (4hours/40Kms)', 'Rajkumar', '', 'uyiyui', 'Agara', 'rjkumar856@gmail.com', '9092310791', 'A', 'Agara', '2', 'Online Payment', '', 'adc644771890d16c8ad0a22a7f4861195fe67a22aac8c21ea59a1d08ddcf9867fcdd90e3bc6dbd90b63651fee813deb6f4f9158614c3ed330ac3ed0489b24115', 'HDFCPG', '437775421880920', 'CC', '{\"mihpayid\":\"6878230641\",\"mode\":\"CC\",\"status\":\"success\",\"unmappedstatus\":\"captured\",\"key\":\"JSO3cwSw\",\"txnid\":\"e77d9eec62bbdb8fed29\",\"amount\":\"1.0\",\"addedon\":\"2018-04-02 18:42:31\",\"productinfo\":\"Sedan - Local Taxi (4hours\\/40Kms)\",\"firstname\":\"Rajkumar\",\"lastname\":\"\",\"address1\":\"uyiyui\",\"address2\":\"Agara\",\"city\":\"\",\"state\":\"\",\"country\":\"\",\"zipcode\":\"\",\"email\":\"rjkumar856@gmail.com\",\"phone\":\"9092310791\",\"udf1\":\"A\",\"udf2\":\"Agara\",\"udf3\":\"2\",\"udf4\":\"Online Payment\",\"udf5\":\"\",\"udf6\":\"\",\"udf7\":\"\",\"udf8\":\"\",\"udf9\":\"\",\"udf10\":\"\",\"hash\":\"adc644771890d16c8ad0a22a7f4861195fe67a22aac8c21ea59a1d08ddcf9867fcdd90e3bc6dbd90b63651fee813deb6f4f9158614c3ed330ac3ed0489b24115\",\"field1\":\"809240151935\",\"field2\":\"083033\",\"field3\":\"437775421880920\",\"field4\":\"437775421880920\",\"field5\":\"\",\"field6\":\"\",\"field7\":\"00\",\"field8\":\"\",\"field9\":\"SUCCESS\",\"PG_TYPE\":\"HDFCPG\",\"encryptedPaymentId\":\"9F2EE5DF0143775DE31B4DE1CB9C293C\",\"bank_ref_num\":\"437775421880920\",\"bankcode\":\"CC\",\"error\":\"E000\",\"error_Message\":\"No Error\",\"cardToken\":\"13e6dc5b4b1935a51bd86\",\"name_on_card\":\"Rajakumar A\",\"cardnum\":\"524181XXXXXX7137\",\"cardhash\":\"This field is no longer supported in postback params.\",\"amount_split\":\"{\\\"PAYU\\\":\\\"1.0\\\"}\",\"payuMoneyId\":\"185060698\",\"discount\":\"0.00\",\"net_amount_debit\":\"1\"}', '180.151.35.7', '2018-04-02 13:18:36', '2018-04-02 13:18:36'),
(36, '6878230641', 'CC', 'success', 'e77d9eec62bbdb8fed29', '1.0', '2018-04-02 13:12:31', 'Sedan - Local Taxi (4hours/40Kms)', 'Rajkumar', '', 'uyiyui', 'Agara', 'rjkumar856@gmail.com', '9092310791', 'A', 'Agara', '2', 'Online Payment', '', 'adc644771890d16c8ad0a22a7f4861195fe67a22aac8c21ea59a1d08ddcf9867fcdd90e3bc6dbd90b63651fee813deb6f4f9158614c3ed330ac3ed0489b24115', 'HDFCPG', '437775421880920', 'CC', '{\"mihpayid\":\"6878230641\",\"mode\":\"CC\",\"status\":\"success\",\"unmappedstatus\":\"captured\",\"key\":\"JSO3cwSw\",\"txnid\":\"e77d9eec62bbdb8fed29\",\"amount\":\"1.0\",\"addedon\":\"2018-04-02 18:42:31\",\"productinfo\":\"Sedan - Local Taxi (4hours\\/40Kms)\",\"firstname\":\"Rajkumar\",\"lastname\":\"\",\"address1\":\"uyiyui\",\"address2\":\"Agara\",\"city\":\"\",\"state\":\"\",\"country\":\"\",\"zipcode\":\"\",\"email\":\"rjkumar856@gmail.com\",\"phone\":\"9092310791\",\"udf1\":\"A\",\"udf2\":\"Agara\",\"udf3\":\"2\",\"udf4\":\"Online Payment\",\"udf5\":\"\",\"udf6\":\"\",\"udf7\":\"\",\"udf8\":\"\",\"udf9\":\"\",\"udf10\":\"\",\"hash\":\"adc644771890d16c8ad0a22a7f4861195fe67a22aac8c21ea59a1d08ddcf9867fcdd90e3bc6dbd90b63651fee813deb6f4f9158614c3ed330ac3ed0489b24115\",\"field1\":\"809240151935\",\"field2\":\"083033\",\"field3\":\"437775421880920\",\"field4\":\"437775421880920\",\"field5\":\"\",\"field6\":\"\",\"field7\":\"00\",\"field8\":\"\",\"field9\":\"SUCCESS\",\"PG_TYPE\":\"HDFCPG\",\"encryptedPaymentId\":\"9F2EE5DF0143775DE31B4DE1CB9C293C\",\"bank_ref_num\":\"437775421880920\",\"bankcode\":\"CC\",\"error\":\"E000\",\"error_Message\":\"No Error\",\"cardToken\":\"13e6dc5b4b1935a51bd86\",\"name_on_card\":\"Rajakumar A\",\"cardnum\":\"524181XXXXXX7137\",\"cardhash\":\"This field is no longer supported in postback params.\",\"amount_split\":\"{\\\"PAYU\\\":\\\"1.0\\\"}\",\"payuMoneyId\":\"185060698\",\"discount\":\"0.00\",\"net_amount_debit\":\"1\"}', '180.151.35.7', '2018-04-02 13:21:31', '2018-04-02 13:21:31'),
(37, '6878230641', 'CC', 'success', 'e77d9eec62bbdb8fed29', '1.0', '2018-04-02 13:12:31', 'Sedan - Local Taxi (4hours/40Kms)', 'Rajkumar', '', 'uyiyui', 'Agara', 'rjkumar856@gmail.com', '9092310791', 'A', 'Agara', '2', 'Online Payment', '', 'adc644771890d16c8ad0a22a7f4861195fe67a22aac8c21ea59a1d08ddcf9867fcdd90e3bc6dbd90b63651fee813deb6f4f9158614c3ed330ac3ed0489b24115', 'HDFCPG', '437775421880920', 'CC', '{\"mihpayid\":\"6878230641\",\"mode\":\"CC\",\"status\":\"success\",\"unmappedstatus\":\"captured\",\"key\":\"JSO3cwSw\",\"txnid\":\"e77d9eec62bbdb8fed29\",\"amount\":\"1.0\",\"addedon\":\"2018-04-02 18:42:31\",\"productinfo\":\"Sedan - Local Taxi (4hours\\/40Kms)\",\"firstname\":\"Rajkumar\",\"lastname\":\"\",\"address1\":\"uyiyui\",\"address2\":\"Agara\",\"city\":\"\",\"state\":\"\",\"country\":\"\",\"zipcode\":\"\",\"email\":\"rjkumar856@gmail.com\",\"phone\":\"9092310791\",\"udf1\":\"A\",\"udf2\":\"Agara\",\"udf3\":\"2\",\"udf4\":\"Online Payment\",\"udf5\":\"\",\"udf6\":\"\",\"udf7\":\"\",\"udf8\":\"\",\"udf9\":\"\",\"udf10\":\"\",\"hash\":\"adc644771890d16c8ad0a22a7f4861195fe67a22aac8c21ea59a1d08ddcf9867fcdd90e3bc6dbd90b63651fee813deb6f4f9158614c3ed330ac3ed0489b24115\",\"field1\":\"809240151935\",\"field2\":\"083033\",\"field3\":\"437775421880920\",\"field4\":\"437775421880920\",\"field5\":\"\",\"field6\":\"\",\"field7\":\"00\",\"field8\":\"\",\"field9\":\"SUCCESS\",\"PG_TYPE\":\"HDFCPG\",\"encryptedPaymentId\":\"9F2EE5DF0143775DE31B4DE1CB9C293C\",\"bank_ref_num\":\"437775421880920\",\"bankcode\":\"CC\",\"error\":\"E000\",\"error_Message\":\"No Error\",\"cardToken\":\"13e6dc5b4b1935a51bd86\",\"name_on_card\":\"Rajakumar A\",\"cardnum\":\"524181XXXXXX7137\",\"cardhash\":\"This field is no longer supported in postback params.\",\"amount_split\":\"{\\\"PAYU\\\":\\\"1.0\\\"}\",\"payuMoneyId\":\"185060698\",\"discount\":\"0.00\",\"net_amount_debit\":\"1\"}', '180.151.35.7', '2018-04-02 13:25:52', '2018-04-02 13:25:52'),
(38, '6878230641', 'CC', 'success', 'e77d9eec62bbdb8fed29', '1.0', '2018-04-02 13:12:31', 'Sedan - Local Taxi (4hours/40Kms)', 'Rajkumar', '', 'uyiyui', 'Agara', 'rjkumar856@gmail.com', '9092310791', 'A', 'Agara', '2', 'Online Payment', '', 'adc644771890d16c8ad0a22a7f4861195fe67a22aac8c21ea59a1d08ddcf9867fcdd90e3bc6dbd90b63651fee813deb6f4f9158614c3ed330ac3ed0489b24115', 'HDFCPG', '437775421880920', 'CC', '{\"mihpayid\":\"6878230641\",\"mode\":\"CC\",\"status\":\"success\",\"unmappedstatus\":\"captured\",\"key\":\"JSO3cwSw\",\"txnid\":\"e77d9eec62bbdb8fed29\",\"amount\":\"1.0\",\"addedon\":\"2018-04-02 18:42:31\",\"productinfo\":\"Sedan - Local Taxi (4hours\\/40Kms)\",\"firstname\":\"Rajkumar\",\"lastname\":\"\",\"address1\":\"uyiyui\",\"address2\":\"Agara\",\"city\":\"\",\"state\":\"\",\"country\":\"\",\"zipcode\":\"\",\"email\":\"rjkumar856@gmail.com\",\"phone\":\"9092310791\",\"udf1\":\"A\",\"udf2\":\"Agara\",\"udf3\":\"2\",\"udf4\":\"Online Payment\",\"udf5\":\"\",\"udf6\":\"\",\"udf7\":\"\",\"udf8\":\"\",\"udf9\":\"\",\"udf10\":\"\",\"hash\":\"adc644771890d16c8ad0a22a7f4861195fe67a22aac8c21ea59a1d08ddcf9867fcdd90e3bc6dbd90b63651fee813deb6f4f9158614c3ed330ac3ed0489b24115\",\"field1\":\"809240151935\",\"field2\":\"083033\",\"field3\":\"437775421880920\",\"field4\":\"437775421880920\",\"field5\":\"\",\"field6\":\"\",\"field7\":\"00\",\"field8\":\"\",\"field9\":\"SUCCESS\",\"PG_TYPE\":\"HDFCPG\",\"encryptedPaymentId\":\"9F2EE5DF0143775DE31B4DE1CB9C293C\",\"bank_ref_num\":\"437775421880920\",\"bankcode\":\"CC\",\"error\":\"E000\",\"error_Message\":\"No Error\",\"cardToken\":\"13e6dc5b4b1935a51bd86\",\"name_on_card\":\"Rajakumar A\",\"cardnum\":\"524181XXXXXX7137\",\"cardhash\":\"This field is no longer supported in postback params.\",\"amount_split\":\"{\\\"PAYU\\\":\\\"1.0\\\"}\",\"payuMoneyId\":\"185060698\",\"discount\":\"0.00\",\"net_amount_debit\":\"1\"}', '180.151.35.7', '2018-04-02 13:31:58', '2018-04-02 13:31:58'),
(39, '6878230641', 'CC', 'success', 'e77d9eec62bbdb8fed29', '1.0', '2018-04-02 13:12:31', 'Sedan - Local Taxi (4hours/40Kms)', 'Rajkumar', '', 'uyiyui', 'Agara', 'rjkumar856@gmail.com', '9092310791', 'A', 'Agara', '2', 'Online Payment', '', 'adc644771890d16c8ad0a22a7f4861195fe67a22aac8c21ea59a1d08ddcf9867fcdd90e3bc6dbd90b63651fee813deb6f4f9158614c3ed330ac3ed0489b24115', 'HDFCPG', '437775421880920', 'CC', '{\"mihpayid\":\"6878230641\",\"mode\":\"CC\",\"status\":\"success\",\"unmappedstatus\":\"captured\",\"key\":\"JSO3cwSw\",\"txnid\":\"e77d9eec62bbdb8fed29\",\"amount\":\"1.0\",\"addedon\":\"2018-04-02 18:42:31\",\"productinfo\":\"Sedan - Local Taxi (4hours\\/40Kms)\",\"firstname\":\"Rajkumar\",\"lastname\":\"\",\"address1\":\"uyiyui\",\"address2\":\"Agara\",\"city\":\"\",\"state\":\"\",\"country\":\"\",\"zipcode\":\"\",\"email\":\"rjkumar856@gmail.com\",\"phone\":\"9092310791\",\"udf1\":\"A\",\"udf2\":\"Agara\",\"udf3\":\"2\",\"udf4\":\"Online Payment\",\"udf5\":\"\",\"udf6\":\"\",\"udf7\":\"\",\"udf8\":\"\",\"udf9\":\"\",\"udf10\":\"\",\"hash\":\"adc644771890d16c8ad0a22a7f4861195fe67a22aac8c21ea59a1d08ddcf9867fcdd90e3bc6dbd90b63651fee813deb6f4f9158614c3ed330ac3ed0489b24115\",\"field1\":\"809240151935\",\"field2\":\"083033\",\"field3\":\"437775421880920\",\"field4\":\"437775421880920\",\"field5\":\"\",\"field6\":\"\",\"field7\":\"00\",\"field8\":\"\",\"field9\":\"SUCCESS\",\"PG_TYPE\":\"HDFCPG\",\"encryptedPaymentId\":\"9F2EE5DF0143775DE31B4DE1CB9C293C\",\"bank_ref_num\":\"437775421880920\",\"bankcode\":\"CC\",\"error\":\"E000\",\"error_Message\":\"No Error\",\"cardToken\":\"13e6dc5b4b1935a51bd86\",\"name_on_card\":\"Rajakumar A\",\"cardnum\":\"524181XXXXXX7137\",\"cardhash\":\"This field is no longer supported in postback params.\",\"amount_split\":\"{\\\"PAYU\\\":\\\"1.0\\\"}\",\"payuMoneyId\":\"185060698\",\"discount\":\"0.00\",\"net_amount_debit\":\"1\"}', '180.151.35.7', '2018-04-02 13:32:57', '2018-04-02 13:32:57'),
(40, '6899145235', 'CC', 'success', '991bf61d585a6d4b6a50', '1.0', '2018-04-09 11:13:03', 'Tata Indica Non Ac - Outstation (Roundtrip)', 'RajkumaR', '', 'Doddathoguru', 'Electronic City Phase I', 'rjkumar856@gmail.com', '9092310791', 'A', 'Electronic City Phase I', '15', 'Online Payment', '', '6292641e9ad2c53a855f88e25b13d143d6d9dc7b1229cc9ccf4a20122513b078716ccc02b6e2a895f4ffc9ad82948dc0e9a616d5c21826842e8da3eebaf50e8e', 'HDFCPG', '6434583431680990', 'CC', '{\"mihpayid\":\"6899145235\",\"mode\":\"CC\",\"status\":\"success\",\"unmappedstatus\":\"captured\",\"key\":\"JSO3cwSw\",\"txnid\":\"991bf61d585a6d4b6a50\",\"amount\":\"1.0\",\"addedon\":\"2018-04-09 16:43:03\",\"productinfo\":\"Tata Indica Non Ac - Outstation (Roundtrip)\",\"firstname\":\"RajkumaR\",\"lastname\":\"\",\"address1\":\"Doddathoguru\",\"address2\":\"Electronic City Phase I\",\"city\":\"\",\"state\":\"\",\"country\":\"\",\"zipcode\":\"\",\"email\":\"rjkumar856@gmail.com\",\"phone\":\"9092310791\",\"udf1\":\"A\",\"udf2\":\"Electronic City Phase I\",\"udf3\":\"15\",\"udf4\":\"Online Payment\",\"udf5\":\"\",\"udf6\":\"\",\"udf7\":\"\",\"udf8\":\"\",\"udf9\":\"\",\"udf10\":\"\",\"hash\":\"6292641e9ad2c53a855f88e25b13d143d6d9dc7b1229cc9ccf4a20122513b078716ccc02b6e2a895f4ffc9ad82948dc0e9a616d5c21826842e8da3eebaf50e8e\",\"field1\":\"809960345941\",\"field2\":\"053793\",\"field3\":\"6434583431680990\",\"field4\":\"6434583431680990\",\"field5\":\"\",\"field6\":\"\",\"field7\":\"00\",\"field8\":\"\",\"field9\":\"SUCCESS\",\"PG_TYPE\":\"HDFCPG\",\"encryptedPaymentId\":\"2E3DE8D6290377A9FB0CD76D477E748F\",\"bank_ref_num\":\"6434583431680990\",\"bankcode\":\"CC\",\"error\":\"E000\",\"error_Message\":\"No Error\",\"cardToken\":\"13e6dc5b4b1935a51bd86\",\"name_on_card\":\"Rajakumar A\",\"cardnum\":\"524181XXXXXX7137\",\"cardhash\":\"This field is no longer supported in postback params.\",\"amount_split\":\"{\\\"PAYU\\\":\\\"1.0\\\"}\",\"payuMoneyId\":\"186036147\",\"discount\":\"0.00\",\"net_amount_debit\":\"1\"}', '180.151.35.7', '2018-04-09 11:13:38', '2018-04-09 11:13:38'),
(41, '6899172895', 'CC', 'success', '00baa2e2614d7c1fabd7', '1.0', '2018-04-09 11:24:23', 'Tata Indica Non Ac - Outstation (Roundtrip)', 'Rajkumar', '', 'Ecity', 'Airport Road', 'rjkumar856@gmail.com', '9092310791', 'A', 'Airport Road', '15', 'Online Payment', '', 'ec6b168413fdd3245efbc7b549765f9f52eede3b785921679e877c87cb1254ddb1ee2ff682b67637e7c653def68e526be2ce508ab79c48e49274a72a9ceac85c', 'HDFCPG', '8181917541680990', 'CC', '{\"mihpayid\":\"6899172895\",\"mode\":\"CC\",\"status\":\"success\",\"unmappedstatus\":\"captured\",\"key\":\"JSO3cwSw\",\"txnid\":\"00baa2e2614d7c1fabd7\",\"amount\":\"1.0\",\"addedon\":\"2018-04-09 16:54:23\",\"productinfo\":\"Tata Indica Non Ac - Outstation (Roundtrip)\",\"firstname\":\"Rajkumar\",\"lastname\":\"\",\"address1\":\"Ecity\",\"address2\":\"Airport Road\",\"city\":\"\",\"state\":\"\",\"country\":\"\",\"zipcode\":\"\",\"email\":\"rjkumar856@gmail.com\",\"phone\":\"9092310791\",\"udf1\":\"A\",\"udf2\":\"Airport Road\",\"udf3\":\"15\",\"udf4\":\"Online Payment\",\"udf5\":\"\",\"udf6\":\"\",\"udf7\":\"\",\"udf8\":\"\",\"udf9\":\"\",\"udf10\":\"\",\"hash\":\"ec6b168413fdd3245efbc7b549765f9f52eede3b785921679e877c87cb1254ddb1ee2ff682b67637e7c653def68e526be2ce508ab79c48e49274a72a9ceac85c\",\"field1\":\"809940256773\",\"field2\":\"067000\",\"field3\":\"8181917541680990\",\"field4\":\"8181917541680990\",\"field5\":\"\",\"field6\":\"\",\"field7\":\"00\",\"field8\":\"\",\"field9\":\"SUCCESS\",\"PG_TYPE\":\"HDFCPG\",\"encryptedPaymentId\":\"E2E8B1245A5BC83EC58F7283AA2F303C\",\"bank_ref_num\":\"8181917541680990\",\"bankcode\":\"CC\",\"error\":\"E000\",\"error_Message\":\"No Error\",\"cardToken\":\"13e6dc5b4b1935a51bd86\",\"name_on_card\":\"Rajakumar A\",\"cardnum\":\"524181XXXXXX7137\",\"cardhash\":\"This field is no longer supported in postback params.\",\"amount_split\":\"{\\\"PAYU\\\":\\\"1.0\\\"}\",\"payuMoneyId\":\"186038094\",\"discount\":\"0.00\",\"net_amount_debit\":\"1\"}', '180.151.35.7', '2018-04-09 11:24:47', '2018-04-09 11:24:47'),
(42, '6899275721', 'CC', 'success', 'f2b018403ecbc6176873', '1.0', '2018-04-09 12:05:22', 'Sedan - Outstation (Roundtrip)', 'Rajkumar', '', 'Ecity', 'Amruthahalli', 'rjkumar856@gmail.com', '9092310791', 'A', 'Amruthahalli', '1', 'Online Payment', '', 'ab914e7a55955ca22c5252da2e472ac2d5a207cb885ef5a17c2b3a0b0a4fd3383b76bfc10f09a45cb146bbc949ea0c59c62f63809a39e493ee91afd6258945a3', 'HDFCPG', '8288484351780990', 'CC', '{\"mihpayid\":\"6899275721\",\"mode\":\"CC\",\"status\":\"success\",\"unmappedstatus\":\"captured\",\"key\":\"JSO3cwSw\",\"txnid\":\"f2b018403ecbc6176873\",\"amount\":\"1.0\",\"addedon\":\"2018-04-09 17:35:22\",\"productinfo\":\"Sedan - Outstation (Roundtrip)\",\"firstname\":\"Rajkumar\",\"lastname\":\"\",\"address1\":\"Ecity\",\"address2\":\"Amruthahalli\",\"city\":\"\",\"state\":\"\",\"country\":\"\",\"zipcode\":\"\",\"email\":\"rjkumar856@gmail.com\",\"phone\":\"9092310791\",\"udf1\":\"A\",\"udf2\":\"Amruthahalli\",\"udf3\":\"1\",\"udf4\":\"Online Payment\",\"udf5\":\"\",\"udf6\":\"\",\"udf7\":\"\",\"udf8\":\"\",\"udf9\":\"\",\"udf10\":\"\",\"hash\":\"ab914e7a55955ca22c5252da2e472ac2d5a207cb885ef5a17c2b3a0b0a4fd3383b76bfc10f09a45cb146bbc949ea0c59c62f63809a39e493ee91afd6258945a3\",\"field1\":\"809960355528\",\"field2\":\"017810\",\"field3\":\"8288484351780990\",\"field4\":\"8288484351780990\",\"field5\":\"\",\"field6\":\"\",\"field7\":\"00\",\"field8\":\"\",\"field9\":\"SUCCESS\",\"PG_TYPE\":\"HDFCPG\",\"encryptedPaymentId\":\"3564E20EC61FE7F4BA6262D9FC175A23\",\"bank_ref_num\":\"8288484351780990\",\"bankcode\":\"CC\",\"error\":\"E000\",\"error_Message\":\"No Error\",\"cardToken\":\"13e6dc5b4b1935a51bd86\",\"name_on_card\":\"Rajakumar A\",\"cardnum\":\"524181XXXXXX7137\",\"cardhash\":\"This field is no longer supported in postback params.\",\"amount_split\":\"{\\\"PAYU\\\":\\\"1.0\\\"}\",\"payuMoneyId\":\"186045393\",\"discount\":\"0.00\",\"net_amount_debit\":\"1\"}', '180.151.35.7', '2018-04-09 12:05:42', '2018-04-09 12:05:42'),
(43, '6899275721', 'CC', 'success', 'f2b018403ecbc6176873', '1.0', '2018-04-09 12:05:22', 'Sedan - Outstation (Roundtrip)', 'Rajkumar', '', 'Ecity', 'Amruthahalli', 'rjkumar856@gmail.com', '9092310791', 'A', 'Amruthahalli', '1', 'Online Payment', '', 'ab914e7a55955ca22c5252da2e472ac2d5a207cb885ef5a17c2b3a0b0a4fd3383b76bfc10f09a45cb146bbc949ea0c59c62f63809a39e493ee91afd6258945a3', 'HDFCPG', '8288484351780990', 'CC', '{\"mihpayid\":\"6899275721\",\"mode\":\"CC\",\"status\":\"success\",\"unmappedstatus\":\"captured\",\"key\":\"JSO3cwSw\",\"txnid\":\"f2b018403ecbc6176873\",\"amount\":\"1.0\",\"addedon\":\"2018-04-09 17:35:22\",\"productinfo\":\"Sedan - Outstation (Roundtrip)\",\"firstname\":\"Rajkumar\",\"lastname\":\"\",\"address1\":\"Ecity\",\"address2\":\"Amruthahalli\",\"city\":\"\",\"state\":\"\",\"country\":\"\",\"zipcode\":\"\",\"email\":\"rjkumar856@gmail.com\",\"phone\":\"9092310791\",\"udf1\":\"A\",\"udf2\":\"Amruthahalli\",\"udf3\":\"1\",\"udf4\":\"Online Payment\",\"udf5\":\"\",\"udf6\":\"\",\"udf7\":\"\",\"udf8\":\"\",\"udf9\":\"\",\"udf10\":\"\",\"hash\":\"ab914e7a55955ca22c5252da2e472ac2d5a207cb885ef5a17c2b3a0b0a4fd3383b76bfc10f09a45cb146bbc949ea0c59c62f63809a39e493ee91afd6258945a3\",\"field1\":\"809960355528\",\"field2\":\"017810\",\"field3\":\"8288484351780990\",\"field4\":\"8288484351780990\",\"field5\":\"\",\"field6\":\"\",\"field7\":\"00\",\"field8\":\"\",\"field9\":\"SUCCESS\",\"PG_TYPE\":\"HDFCPG\",\"encryptedPaymentId\":\"3564E20EC61FE7F4BA6262D9FC175A23\",\"bank_ref_num\":\"8288484351780990\",\"bankcode\":\"CC\",\"error\":\"E000\",\"error_Message\":\"No Error\",\"cardToken\":\"13e6dc5b4b1935a51bd86\",\"name_on_card\":\"Rajakumar A\",\"cardnum\":\"524181XXXXXX7137\",\"cardhash\":\"This field is no longer supported in postback params.\",\"amount_split\":\"{\\\"PAYU\\\":\\\"1.0\\\"}\",\"payuMoneyId\":\"186045393\",\"discount\":\"0.00\",\"net_amount_debit\":\"1\"}', '180.151.35.7', '2018-04-09 12:12:11', '2018-04-09 12:12:11');

-- --------------------------------------------------------

--
-- Table structure for table `pickup_time`
--

CREATE TABLE `pickup_time` (
  `id` int(11) NOT NULL,
  `d_time` varchar(150) NOT NULL,
  `v_time` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pilgrimage_pack`
--

CREATE TABLE `pilgrimage_pack` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `no_of_days` varchar(225) NOT NULL,
  `fare` varchar(255) NOT NULL,
  `image` varchar(225) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pilgrimage_pack`
--

INSERT INTO `pilgrimage_pack` (`id`, `title`, `description`, `no_of_days`, `fare`, `image`, `date_added`, `date_modified`) VALUES
(3, 'Thirumala', 'Day 01 : Depart to Thirumala NOON DEPART&lt;br&gt;Day 02 : Arrival to Thirumala, Depart to Balaji Darshan. Night Halt&lt;br&gt;PACKAGE INCLUDES: BLR - Thirumala - BLR by Multi Axle Volvo/ Volvo/ non sleeper(subject to availability)', '1 NIGHT/2 DAYS', '1800', '1522735124.jpg', '2018-03-17 07:28:10', '2018-04-03 05:58:44'),
(4, 'SHIRADI SAI DARSHAN', 'Day 01 : Depart to Shiradi NOON DEPART&lt;br&gt;Day 02 : Arr to Shiradi Check in Hotel , Depart to Sai Darshan, Samadi Mandir, Gursman,Lendibsg, Dwarakamai, Chawdi, Hanuman Mandir, Ganesh Mandir, SHanimandir, Mahalaspati Temple. Night Halt&lt;br&gt;Day 03 : Check Out Proced to Shani Singanapur visit Temple of lord SHANIDEV, Sakuri Samadi of Upasani Maharaj &amp; Godavari Mata Renuka Matha temple (Glass Temple) Back to Shiradi NOON DEPART&lt;br&gt;Day 04: Arr in Bangalore&lt;br&gt;PACKAGE INCLUDES: BLR - SHIRDI - BLR by Multi Axle Volvo/ Volvo/ non sleeper(subject to availability), Shani Singanapur Sight Seeing by Car &amp; Accommodation', '1 NIGHT/2 DAYS', '4999', '1521271817.jpg', '2018-03-17 07:30:17', '2018-03-17 07:30:17'),
(5, 'SHIRADI SAI DARSHAN &ndash;NASIK-SHANI SINGANAPUR', 'Day 01 : Depart to Shiradi NOON DEPART&lt;br&gt;Day 02 : Arr to Shiradi Check in Hotel , Depart to Sai Darshan, Samadi Mandir, Gursman,Lendibsg, Dwarakamai, Chawdi, Hanuman Mandir, Ganesh Mandir, SHanimandir, Mahalaspati Temple. Night Halt&lt;br&gt;Day 03 : Depart to Nasik sight seeing by cab, visit Dep. 9.00 a.m. to Nasik, Visit Mukthidhaama, Tryambakeshwar, Panchavati, Kalaran, Goraram, Seetagupta, Shiva Mandir, Kapaleshwar Mandir, Kapila, Godavari Sangam Back to Shirdi NIGHT HALT&lt;br&gt;Day 04 : Check Out Proced to Shani Singanapur visit Temple of lord SHANIDEV, Sakuri Samadi of Upasani Maharaj &amp; Godavari Mata Renuka Matha temple (Glass Temple) Back to Shiradi NOON DEPART&lt;br&gt;Day 05: Arr in Bangalore&lt;br&gt;PACKAGE INCLUDES: BLR - SHIRDI - BLR by Multi Axle Volvo/ Volvo/ non sleeper(subject to availability), Shani Singanapur ,Nasik Sight Seeing by Car &amp; Accommodation', '2 NIGHTS/3 DAYS', '6500', '1521272038.jpg', '2018-03-17 07:33:58', '2018-03-17 07:33:58'),
(6, 'SHIRADI &ndash;NASIK-AURANGABAD-ELLORA', 'Day 01 : Depart to Shiradi NOON DEPART&lt;br&gt;Day 02 : Arr to Shiradi Check in Hotel , Depart to Sai Darshan, Samadi Mandir, Gursman,Lendibsg, Dwarakamai, Chawdi, Hanuman Mandir, Ganesh Mandir, SHanimandir, Mahalaspati Temple. Night Halt&lt;br&gt;Day 03 : Depart to Nasik sight seeing by cab, visit Dep. 9.00 a.m. to Nasik, Visit Mukthidhaama, Tryambakeshwar, Panchavati, Kalaran, Goraram, Seetagupta, Shiva Mandir, Kapaleshwar Mandir, Kapila, Godavari Sangam Back to Shirdi NIGHT HALT&lt;br&gt;Day 04 : Dep. 6.30 a.m. to Aurangabad, Visit Ghrushneswar Temple, Ellora Caves, Daulatabad Fort, (Passing) Bhadra Maruti (Glass temple), Bibi-Ka-Makbara (Mini Taj Mahal), Pawan Chakki NIGHT HALT&lt;br&gt;Day 05 : Check Out Proced to Shani Singanapur visit Temple of lord SHANIDEV, Sakuri Samadi of Upasani Maharaj &amp; Godavari Mata Renuka Matha temple (Glass Temple) Back to Shiradi NOON DEPART&lt;br&gt;Day 06: Arr in Bangalore&lt;br&gt;PACKAGE INCLUDES: BLR - SHIRDI - BLR by Multi Axle Volvo/ Volvo/ non sleeper(subject to availability), Shani Singanapur ,Nasik ,Aurangabad,Ellora Sight Seeing by Car &amp; Accommodation', '3 NIGHTS/4 DAYS', '8000', '1521272171.jpg', '2018-03-17 07:36:11', '2018-03-17 07:36:11');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `door_no` varchar(255) NOT NULL DEFAULT '',
  `address_1` varchar(255) NOT NULL,
  `address_2` varchar(255) NOT NULL,
  `zip_code` varchar(11) NOT NULL DEFAULT '',
  `city_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `avatar` varchar(100) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `user_id`, `door_no`, `address_1`, `address_2`, `zip_code`, `city_id`, `state_id`, `country_id`, `avatar`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, '579', 'Electronics City', 'Doddathoguru', '560100', 1, 1, 1, '', 1, '2018-01-11 08:00:58', '2018-01-11 08:00:58'),
(2, 2, '579', 'HSR Layout', 'Mangamanapalaya', '560068', 1, 1, 1, '', 1, '2018-01-11 08:00:58', '2018-01-11 08:00:58');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) UNSIGNED NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(225) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `password` varchar(225) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ip` varchar(12) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `fname`, `lname`, `email`, `mobile`, `password`, `date_added`, `ip`) VALUES
(1, 'Mayank', 'Bisht', 'mayankbisht.com@gmail.com', 9740788638, '12345', '2018-03-13 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `request_airport_taxi`
--

CREATE TABLE `request_airport_taxi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pickup_location` varchar(255) NOT NULL,
  `drop_location` varchar(255) NOT NULL,
  `start_date` varchar(50) NOT NULL,
  `pickup_time` varchar(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `car_type` varchar(255) NOT NULL,
  `total_amount` varchar(255) NOT NULL,
  `amount_paid` varchar(255) NOT NULL,
  `ip` varchar(40) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request_airport_taxi`
--

INSERT INTO `request_airport_taxi` (`id`, `pickup_location`, `drop_location`, `start_date`, `pickup_time`, `name`, `mobile`, `email`, `car_type`, `total_amount`, `amount_paid`, `ip`, `date_added`) VALUES
(1, 'Bangalore', 'salem', '02/27/2018', '09:00:00 am', 'Rajkumar A', '9092310791', 'rjkumar856@gmail.com', '3', '', '', '103.6.159.88', '2018-02-27 08:23:37'),
(5, 'Bangalore', 'Bangalore', '04/02/2018', '12:30:00 am', 'Rajkumar', '9092310791', 'rjkumar856@gmail.com', '2', '1100', '1.0', '180.151.35.7', '2018-04-02 13:25:52');

-- --------------------------------------------------------

--
-- Table structure for table `request_enquiry`
--

CREATE TABLE `request_enquiry` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `subject` varchar(50) NOT NULL DEFAULT '',
  `city` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `ip` varchar(255) NOT NULL DEFAULT '',
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request_enquiry`
--

INSERT INTO `request_enquiry` (`id`, `name`, `email`, `mobile`, `subject`, `city`, `message`, `ip`, `date_added`, `date_modified`) VALUES
(1, 'Rajakumar', 'rjkumar856@gmail.com', '9092310791', 'Foundation Course', 'nil', 'Testing', '27.7.136.251', '2018-01-19 10:16:32', '2018-01-19 10:16:32'),
(2, 'Rajakumar', 'rjkumar856@gmail.com', '9092310791', 'Prelims Cum Mains Course', 'nil', 'Testing', '27.7.136.251', '2018-01-19 10:19:41', '2018-01-19 10:19:41'),
(3, 'Rajakumar', 'rjkumar856@gmail.com', '9092310791', 'Prelims Cum Mains Course', 'nil', 'Testing sdasd', '27.7.136.251', '2018-01-19 10:41:18', '2018-01-19 10:41:18'),
(4, 'ASHY RODRIGS', 'ashyrodrigs08@gmail.com', '8289946274', 'Foundation Course', 'TRIVANDRUM', 'Sir/ Madam\r\n                    I\'m doing MA English at Pondicherry University. My final year exams will be completed only in the month of May. So will I be able to join after the second week of May if I get admission there? I also would like to know the fee details.', '14.139.183.114', '2018-02-24 05:40:18', '2018-02-24 05:40:18'),
(5, 'ASHY RODRIGS', 'ashyrodrigs08@gmail.com', '8289946274', 'Foundation Course', 'TRIVANDRUM', 'Sir/ Madam\r\n                    I\'m doing MA English at Pondicherry University. My final year exams will be completed only in the month of May. So will I be able to join after the second week of May if I get admission there? I also would like to know the fee details.', '14.139.183.114', '2018-02-24 05:40:19', '2018-02-24 05:40:19'),
(6, 'ASHY RODRIGS', 'ashyrodrigs08@gmail.com', '8289946274', 'Foundation Course', 'TRIVANDRUM', 'Sir/ Madam\r\n                    I\'m doing MA English at Pondicherry University. My final year exams will be completed only in the month of May. So will I be able to join after the second week of May if I get admission there? I also would like to know the fee details.', '14.139.183.114', '2018-02-24 05:40:32', '2018-02-24 05:40:32'),
(7, 'ASHY RODRIGS', 'ashyrodrigs08@gmail.com', '8289946274', 'Foundation Course', 'TRIVANDRUM', 'Sir/ Madam\r\n                    I\'m doing MA English at Pondicherry University. My final year exams will be completed only in the month of May. So will I be able to join after the second week of May if I get admission there? I also would like to know the fee details.', '14.139.183.114', '2018-02-24 05:40:33', '2018-02-24 05:40:33');

-- --------------------------------------------------------

--
-- Table structure for table `request_honeymoon_package`
--

CREATE TABLE `request_honeymoon_package` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `package_id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `message` text NOT NULL,
  `ip` varchar(20) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request_honeymoon_package`
--

INSERT INTO `request_honeymoon_package` (`id`, `package_id`, `name`, `email`, `mobile`, `message`, `ip`, `date_added`, `date_modified`) VALUES
(3, 2, 'assets', 'rjkumar856@gmail.com', 9092310791, 'dfgdfg', '180.151.35.7', '2018-04-02 10:58:20', '2018-04-02 10:58:20');

-- --------------------------------------------------------

--
-- Table structure for table `request_localtaxi_eight`
--

CREATE TABLE `request_localtaxi_eight` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pickup_location` varchar(255) NOT NULL,
  `start_date` varchar(50) NOT NULL,
  `pickup_time` varchar(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `car_type` varchar(255) NOT NULL,
  `total_amount` varchar(255) NOT NULL,
  `amount_paid` varchar(255) NOT NULL,
  `ip` varchar(40) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request_localtaxi_eight`
--

INSERT INTO `request_localtaxi_eight` (`id`, `pickup_location`, `start_date`, `pickup_time`, `name`, `mobile`, `email`, `car_type`, `total_amount`, `amount_paid`, `ip`, `date_added`) VALUES
(5, 'Bangalore', '04/02/2018', '12:30:00 am', 'Rajkumar', '9092310791', 'rjkumar856@gmail.com', '2', '1100', '1.0', '180.151.35.7', '2018-04-02 13:21:31');

-- --------------------------------------------------------

--
-- Table structure for table `request_localtaxi_four`
--

CREATE TABLE `request_localtaxi_four` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pickup_location` varchar(255) NOT NULL,
  `start_date` varchar(50) NOT NULL,
  `pickup_time` varchar(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `car_type` varchar(255) NOT NULL,
  `total_amount` varchar(255) NOT NULL,
  `amount_paid` varchar(255) NOT NULL,
  `ip` varchar(40) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request_localtaxi_four`
--

INSERT INTO `request_localtaxi_four` (`id`, `pickup_location`, `start_date`, `pickup_time`, `name`, `mobile`, `email`, `car_type`, `total_amount`, `amount_paid`, `ip`, `date_added`) VALUES
(4, 'Bangalore', '04/02/2018', '12:30:00 am', 'Rajkumar', '9092310791', 'rjkumar856@gmail.com', '2', '1100', '1.0', '180.151.35.7', '2018-04-02 13:17:36');

-- --------------------------------------------------------

--
-- Table structure for table `request_north_package`
--

CREATE TABLE `request_north_package` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `package_id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `message` text NOT NULL,
  `ip` varchar(40) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request_north_package`
--

INSERT INTO `request_north_package` (`id`, `package_id`, `name`, `email`, `mobile`, `message`, `ip`, `date_added`, `date_modified`) VALUES
(1, 5, 'Sabriesh', 'sabriesh@yahoo.com', 9087654321, 'intercity taxi not available 9:30PM', '', '2018-03-19 11:59:00', '2018-04-03 07:46:04');

-- --------------------------------------------------------

--
-- Table structure for table `request_outstation_oneway`
--

CREATE TABLE `request_outstation_oneway` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pickup_location` varchar(255) NOT NULL,
  `drop_location` varchar(255) NOT NULL,
  `start_date` varchar(50) NOT NULL,
  `pickup_time` varchar(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `car_type` varchar(255) NOT NULL,
  `total_amount` varchar(255) NOT NULL,
  `amount_paid` varchar(255) NOT NULL,
  `ip` varchar(40) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request_outstation_oneway`
--

INSERT INTO `request_outstation_oneway` (`id`, `pickup_location`, `drop_location`, `start_date`, `pickup_time`, `name`, `mobile`, `email`, `car_type`, `total_amount`, `amount_paid`, `ip`, `date_added`) VALUES
(4, 'Bangalore', 'Salem, Tamil Nadu, India', '04/02/2018', '06:30:00 am', 'Rajkumar', '9092310791', 'rjkumar856@gmail.com', '6', '', '', '180.151.35.7', '2018-04-02 12:41:14'),
(5, 'Bangalore', 'Salem, Tamil Nadu, India', '04/02/2018', '06:30:00 am', 'Rajkumar', '9092310791', 'rjkumar856@gmail.com', '6', '9360', '936.0', '180.151.35.7', '2018-04-02 12:48:47'),
(6, 'Bangalore', 'Salem, Tamil Nadu, India', '04/09/2018', '04:00:00 am', 'Rajkumar', '9092310791', 'rjkumar856@gmail.com', '1', '3864', '1.0', '180.151.35.7', '2018-04-09 12:05:42'),
(7, 'Bangalore', 'Salem, Tamil Nadu, India', '04/09/2018', '04:00:00 am', 'Rajkumar', '9092310791', 'rjkumar856@gmail.com', '1', '3864', '1.0', '180.151.35.7', '2018-04-09 12:12:11');

-- --------------------------------------------------------

--
-- Table structure for table `request_outstation_round`
--

CREATE TABLE `request_outstation_round` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pickup_location` varchar(255) NOT NULL,
  `drop_location` varchar(255) NOT NULL,
  `start_date` varchar(50) NOT NULL,
  `pickup_time` varchar(50) NOT NULL,
  `return_date` varchar(50) NOT NULL,
  `return_time` varchar(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `car_type` varchar(255) NOT NULL,
  `total_amount` varchar(255) NOT NULL,
  `amount_paid` varchar(255) NOT NULL,
  `ip` varchar(40) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request_outstation_round`
--

INSERT INTO `request_outstation_round` (`id`, `pickup_location`, `drop_location`, `start_date`, `pickup_time`, `return_date`, `return_time`, `name`, `mobile`, `email`, `car_type`, `total_amount`, `amount_paid`, `ip`, `date_added`) VALUES
(1, 'Bangalore', 'salem', '02/27/2018', '09:00:00 am', '02/28/2018', '09:00:00 am', 'Rajkumar A', '9092310791', 'rjkumar856@gmail.com', '1', '', '', '103.6.159.88', '2018-02-27 08:23:37'),
(4, 'hsr layout', 'mysore', '03/06/2018', '06:00:00 am', '03/06/2018', '10:00:00 pm', 'm ramakrishna', '9845761402', 'ramakrishna147@gmail.com', '2', '', '', '61.3.33.54', '2018-03-05 05:53:45'),
(10, 'bangalore', 'bidar', '03/18/2018', '09:00:00 am', '03/24/2018', '09:00:00 am', 'ravindra', '8317483220', 'ravindra.billa88@gmail.com', '3', '', '', '157.49.185.19', '2018-03-14 18:41:21'),
(12, 'Ramnagar', 'haryana', '03/09/2018', '09:00:00 am', '03/06/2018', '08:30:00 am', 'Mayank Bisht', '9740788638', 'mayankbisht.com@gmail.com', '4', '', '', '49.205.220.187', '2018-03-14 19:00:45'),
(14, 'Bangalore', 'Salem, Tamil Nadu, India', '04/09/2018', '09:00:00 am', '04/11/2018', '06:30:00 am', 'Rajkumar', '9092310791', 'rjkumar856@gmail.com', '15', '3870', '1.0', '180.151.35.7', '2018-04-09 11:24:47');

-- --------------------------------------------------------

--
-- Table structure for table `request_pilgrimage_package`
--

CREATE TABLE `request_pilgrimage_package` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `package_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `message` text NOT NULL,
  `ip` varchar(20) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request_pilgrimage_package`
--

INSERT INTO `request_pilgrimage_package` (`id`, `package_id`, `name`, `email`, `mobile`, `message`, `ip`, `date_added`, `date_modified`) VALUES
(2, 4, 'fghgf', 'rjkumar856@gmail.com', 9092310791, 'hfghfg', '180.151.35.7', '2018-04-02 10:59:39', '2018-04-02 10:59:39');

-- --------------------------------------------------------

--
-- Table structure for table `request_south_package`
--

CREATE TABLE `request_south_package` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `package_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `message` text NOT NULL,
  `ip` varchar(40) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request_south_package`
--

INSERT INTO `request_south_package` (`id`, `package_id`, `name`, `email`, `mobile`, `message`, `ip`, `date_added`, `date_modified`) VALUES
(1, 6, 'Rajkumar', 'rajkumar@gmail.com', 9087654321, 'intercity taxi', '', '2018-03-19 11:52:30', '2018-04-03 07:44:09'),
(10, 9, 'common', 'rjkumar856@gmail.com', 9092310791, 'asdasd', '180.151.35.7', '2018-04-03 07:06:46', '2018-04-03 07:06:46');

-- --------------------------------------------------------

--
-- Table structure for table `request_subscription`
--

CREATE TABLE `request_subscription` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL DEFAULT '',
  `email` varchar(255) NOT NULL,
  `newsletter` set('Yes','No','') NOT NULL,
  `ip` varchar(255) NOT NULL DEFAULT '',
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request_subscription`
--

INSERT INTO `request_subscription` (`id`, `name`, `email`, `newsletter`, `ip`, `date_added`, `date_modified`) VALUES
(1, '', 'rajkumar@gmail.com', 'Yes', '27.7.136.251', '2018-01-19 08:09:07', '2018-01-19 08:09:07'),
(2, '', 'rajkumar@gmail.com', 'Yes', '27.7.136.251', '2018-01-20 05:39:14', '2018-01-20 05:39:14'),
(3, '', 'mayankbisht.com@gmail.com', 'Yes', '27.7.136.251', '2018-01-22 10:32:20', '2018-01-22 10:32:20'),
(4, '', 'mayankbisht.com@gmail.com', 'Yes', '27.7.136.251', '2018-01-22 10:32:35', '2018-01-22 10:32:35'),
(5, '', 'mayankbisht.com@gmail.com', 'Yes', '27.7.136.251', '2018-01-22 10:32:35', '2018-01-22 10:32:35'),
(6, '', 'mayankbisht.com@gmail.com', 'Yes', '27.7.136.251', '2018-01-22 10:32:35', '2018-01-22 10:32:35'),
(7, '', 'harishkolla13@gmail.com', 'Yes', '88.75.142.70', '2018-02-08 15:26:12', '2018-02-08 15:26:12'),
(8, '', 'harishkolla13@gmail.com', 'Yes', '88.75.142.70', '2018-02-08 15:26:13', '2018-02-08 15:26:13'),
(9, '', 'harishkolla13@gmail.com', 'Yes', '88.75.142.70', '2018-02-08 15:26:14', '2018-02-08 15:26:14'),
(10, '', 'harishkolla13@gmail.com', 'Yes', '88.75.142.70', '2018-02-08 15:26:15', '2018-02-08 15:26:15'),
(11, '', 'harishkolla13@gmail.com', 'Yes', '88.75.142.70', '2018-02-08 15:26:15', '2018-02-08 15:26:15'),
(12, '', 'emailid.com@gmail.com', 'Yes', '49.205.220.187', '2018-02-14 05:38:40', '2018-02-14 05:38:40');

-- --------------------------------------------------------

--
-- Table structure for table `request_tour_package`
--

CREATE TABLE `request_tour_package` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pickup_location` varchar(255) NOT NULL,
  `total_member` varchar(255) NOT NULL,
  `start_date` varchar(50) NOT NULL,
  `pickup_time` varchar(50) NOT NULL,
  `package` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `car_type` varchar(255) NOT NULL,
  `total_amount` varchar(255) NOT NULL,
  `amount_paid` varchar(255) NOT NULL,
  `ip` varchar(40) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request_tour_package`
--

INSERT INTO `request_tour_package` (`id`, `pickup_location`, `total_member`, `start_date`, `pickup_time`, `package`, `name`, `mobile`, `email`, `car_type`, `total_amount`, `amount_paid`, `ip`, `date_added`) VALUES
(3, 'bangalore', '2', '02/27/2018', '06:00:00 am', 'Nandi Hills', 'Rajkumar A', '9092310791', 'rjkumar856@gmail.com', '3', '', '', '103.6.159.88', '2018-02-27 13:13:04'),
(4, 'Bangalore', '3', '04/02/2018', '12:30:00 am', 'Sedan', 'Rajkumar', '9092310791', 'rjkumar856@gmail.com', '2', '1100', '1.0', '180.151.35.7', '2018-04-02 13:32:57');

-- --------------------------------------------------------

--
-- Table structure for table `south_india`
--

CREATE TABLE `south_india` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `no_of_days` varchar(225) NOT NULL,
  `deluxe` varchar(255) NOT NULL,
  `luxury` varchar(255) NOT NULL,
  `star` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `south_india`
--

INSERT INTO `south_india` (`id`, `title`, `description`, `no_of_days`, `deluxe`, `luxury`, `star`, `image`, `date_added`, `date_modified`) VALUES
(6, 'MYSORE', 'Day 01 : Depart. 6.30 a.m. to Srirangapatana visit Sri Ranganatha Swamy Temple, Tippu Fort, Gumbuz, Water Gate, Ruins of Tippu Palace, Jumma Masjid E-Alam, Place where Dead body of Tippu Sultan found.<br>Mysore : St. Philominas Roman Catholic Church, Chamundi Hills, Nandi, Mysore Maharaja Palace, Museum, &amp; Brindavan Gardens with Musical Fountain.. Depart. to Bangalore.', '1 Day', '850', 'NA', 'NA', '1521269243.jpg', '2018-03-17 06:47:23', '2018-03-29 13:09:48'),
(7, 'MYSORE-OOTY', 'Day 01 : Depart. 6.30 a.m. to Srirangapatana visit Sri Ranganatha Swamy Temple, Tippu Fort, Gumbuz, Water Gate, Ruins of Tippu Palace, Jumma Masjid E-Alam, Place where Dead body of Tippu Sultan found.Mysore : St. Philominas Roman Catholic Church, Chamundi Hills, Nandi, Mysore Maharaja Palace, Museum, &amp; Brindavan Gardens with Musical Fountain. NIGHT HALT.&lt;br&gt;Day 02 : Morning Depart to ooty, visit Bandipur National wildlife sanctuary Ooty Botonical Garden, Ooty Lake,.&lt;br&gt;Day 03 : ARR BANGALORE&lt;br&gt;PACKAGE INCLUDES: Package includes Transportation Bangalore to Mysore by 35seater Air Bus , Sight seeing Mysore - Ooty - Mysore by mini bus &amp; Mysore to Banglore by 35 Seater air bus &amp; Accommodation (Guide and Entrance Fees extra).', '1 NIGHT/2 DAYS', '1650', '2100', '2600', '1521270544.jpg', '2018-03-17 07:09:04', '2018-03-17 07:09:04'),
(8, 'MYSORE-OOTY-COONOOR', 'Day 01 : Depart. 6.30 a.m. to Srirangapatana visit Sri Ranganatha Swamy Temple, Tippu Fort, Gumbuz, Water Gate, Ruins of Tippu Palace, Jumma Masjid E-Alam, Place where Dead body of Tippu Sultan found.Mysore : St. Philominas Roman Catholic Church, Chamundi Hills, Nandi, Mysore Maharaja Palace, Museum, &amp; Brindavan Gardens with Musical Fountain. NIGHT HALT.&lt;br&gt;\r\nDay 03 : Morning check out of hotel, Depart. 9.00 a.m. to Coonoor sight seeing, visit Sims park Dolphins Nose &amp; Lambs Rock. Doddabetta (8648 ft. above sea level) telescope House , evening Depart to Bangalore.&lt;br&gt;Day 04 : ARR BANGALORE&lt;br&gt;PACKAGE INCLUDES: Package includes Transportation Bangalore to Mysore 35 seater Air Bus , Sight seeing Mysore - Ooty â€“ Coonoor by mini bus ,Ooty to Bangalore by Ksrtc Rajahamsa bus &amp; Accommodation (Guide and Entrance Fees extra).', '2 NIGHTS/3 DAYS', '2500', '3200', '4500', '1521270690.jpg', '2018-03-17 07:11:30', '2018-03-17 07:11:30'),
(9, 'MYSORE-OOTY-KODAI', 'Day 01 : Depart. 6.30 a.m. to Srirangapatana visit Sri Ranganatha Swamy Temple, Tippu Fort, Gumbuz, Water Gate, Ruins of Tippu Palace, Jumma Masjid E-Alam, Place where Dead body of Tippu Sultan found.Mysore : St. Philominas Roman Catholic Church, Chamundi Hills, Nandi, Mysore Maharaja Palace, Museum, &amp; Brindavan Gardens with Musical Fountain. NIGHT HALT.&lt;br&gt;Day 02 : Morning Depart to ooty, visit Bandipur National wildlife sanctuary Ooty Botonical Garden, Ooty Lake, NIGHT HALT&lt;br&gt;Day 03 : Morning check out of hotel, Depart to Kodai ,Eve Arr Kodai Check in Hotel NIGHT HALT&lt;br&gt;Day 04 : Check out Depart to Kodai Sight Seeing, visit Pillar Rock, Green valley lake, Solar Physical Observatory, Bryants park, evening Depart to Bangalore.&lt;br&gt;Day 05 : ARR BANGALORE&lt;br&gt;PACKAGE INCLUDES: Package includes Transportation Bangalore to Mysore 35 seater Air Bus , Sight seeing Mysore - Ooty â€“ Kodai by mini bus &amp; Kodai to Bangalore by 35 seater Air bus &amp; Accommodation (Guide and Entrance Fees extra).', '3 NIGHTS/4 DAYS', '3800', '5400', '6500', '1521270820.jpg', '2018-03-17 07:13:40', '2018-03-17 07:13:40'),
(10, 'MYSORE-OOTY-COONOOR-KODAI', 'Day 01 : Depart. 6.30 a.m. to Srirangapatana visit Sri Ranganatha Swamy Temple, Tippu Fort, Gumbuz, Water Gate, Ruins of Tippu Palace, Jumma Masjid E-Alam, Place where Dead body of Tippu Sultan found.Mysore : St. Philominas Roman Catholic Church, Chamundi Hills, Nandi, Mysore Maharaja Palace, Museum, &amp; Brindavan Gardens with Musical Fountain. NIGHT HALT.&lt;br&gt;Day 02 : Morning Depart to ooty, visit Bandipur National wildlife sanctuary Ooty Botonical Garden, Ooty Lake, NIGHT HALT&lt;br&gt;Day 03 : Depart. 9.00 a.m. to Coonoor sight seeing, visit Sims park Dolphins Nose &amp; Lambs Rock. Doddabetta (8648 ft. above sea level) telescope House NIGHT HALT&lt;br&gt;Day 04 : Morning check out of hotel, Depart to Kodai ,Eve Arr Kodai Check in Hotel NIGHT HALT&lt;br&gt;Day 05 : Check out Depart to Kodai Sight Seeing, visit Pillar Rock, Green valley lake, Solar Physical Observatory, Bryants park, evening Depart to Bangalore.&lt;br&gt;Day 06 : ARR BANGALORE&lt;br&gt;PACKAGE INCLUDES: Package includes Transportation Bangalore to Mysore 35 seater Air Bus , Sight seeing Mysore - Ooty â€“ Kodai by mini bus &amp; Kodai to Bangalore by 35 seater Air bus &amp; Accommodation (Guide and Entrance Fees extra).', '4 NIGHTS/5 DAYS', '4500', '6500', '8000', '1521270978.jpg', '2018-03-17 07:16:18', '2018-03-17 07:16:18'),
(11, 'MYSORE-OOTY-COONOOR-KODAI-MADURI-RAMESHWARAM-KANAYAKUMARI', 'Day 01 : Depart. 6.30 a.m. to Srirangapatana visit Sri Ranganatha Swamy Temple, Tippu Fort, Gumbuz, Water Gate, Ruins of Tippu Palace, Jumma Masjid E-Alam, Place where Dead body of Tippu Sultan found.Mysore : St. Philominas Roman Catholic Church, Chamundi Hills, Nandi, Mysore Maharaja Palace, Museum, &amp; Brindavan Gardens with Musical Fountain. NIGHT HALT.&lt;br&gt;Day 02 : Morning Depart to ooty, visit Bandipur National wildlife sanctuary Ooty Botonical Garden, Ooty Lake, NIGHT HALT&lt;br&gt;Day 03 : Depart. 9.00 a.m. to Coonoor sight seeing, visit Sims park Dolphins Nose &amp; Lambs Rock. Doddabetta (8648 ft. above sea level) telescope House NIGHT HALT&lt;br&gt;Day 04 : Morning check out of hotel, Depart to Kodai ,Eve Arr Kodai Check in Hotel NIGHT HALT&lt;br&gt;Day 05 : Check out Depart to Kodai Sight Seeing, visit Pillar Rock, Green valley lake, Solar Physical Observatory, Bryants park, evening Depart to Madurai.&lt;br&gt;Day 06 : Noon Depart to Maduri Sight Seeing visit Madurai Meenakshi Temple, Choknadhar Templetemple, Alagar templ, lord Muruga temple and night at Madurai. NIGHT HALT&lt;br&gt;Day 07 : Check Out Depart Rameshwaram visit Hanumam temple (24ft)Pamban Bridge, Navapanigriham, kasha Viswanath Temple, 24 Undalas, Ram parvath, Sita Parvath, Hanuman Parvath, Vishnu temple Back Maduri,Depart to Kanyakumari NIGHT HALT&lt;br&gt;Day 08 : Morning Check Out Departart to Kanyakumari , visit sunrise temple, Triveni Sangam, Devi kumara Amman Temple, Gandhi Mantapam, Kamrajmani Mantapam, Vivekananda Rock, Tiruvalluer statue(133ft)SusunderamTemple Back Maduri Depart To Bangalore NIGHT DEPART&lt;br&gt;Day 09 : ARR BANGALORE&lt;br&gt;PACKAGE INCLUDES: Package includes Transportation Bangalore to Mysore 35 seater Air Bus , Sight seeing By Mysore - Ooty â€“ Coonoor-Kodai-Maduri-Rameshwaram-kanayakumari by mini bus , Maduri to Bangalore by 35 seater Air bus &amp; Accommodation (Guide and Entrance Fees extra)', '7 NIGHTS/8 DAYS', '7400', '9800', '14200', '1521271163.jpg', '2018-03-17 07:19:23', '2018-03-17 07:19:23'),
(12, 'OOTY-COONOOR-FILMICHAKKAR', 'Day 01 : Depart to Ooty Night Depart&lt;br&gt;Day 02 : Arr Ooty Check In hotel Free Day Night halt&lt;br&gt;Day 03 : Depart To Ooty &amp; Coonoor Sight Seeing visit Sims park Dolphins Nose &amp; Lambs Rock. Doddabetta (8648 ft. above sea level) telescope House Ooty Botonical Garden, Ooty Lake. NIGHT HALT&lt;br&gt;Day 04 : Check Out Depart To Filmichakkar Sight Seeing EVE DEPART TO BANGALORE&lt;br&gt;Day 05 : ARR BANGALORE&lt;br&gt;PACKAGE INCLUDES: Transportaion by Bangalore-Ooty-Bangalore 35 seater K S R T C RAJAHAMSA Bus, Sight seeing by minibus &amp; Accommondation (Guide and Entrans Fees extra).', '2 NIGHTS/3 DAYS', '2600', '3500', '4500', '1521272373.jpg', '2018-03-17 07:39:33', '2018-03-17 07:39:33'),
(13, 'OOTY-COONOOR-KODAI-MADURI-RAMESHWARAM-KANAYAKUMARI', 'Day 01 : Depart to Ooty NIGHT DEPART&lt;br&gt;Day 02 : Arr Ooty Check in Hotel Free Day NIGHT HALT&lt;br&gt;Day 03 : Depart. 9.00 a.m. to Ooty &amp; Coonoor sight seeing, visit Sims park Dolphins Nose &amp; Lambs Rock. Doddabetta (8648 ft. above sea level) telescope House Ooty Botonical Garden, Ooty Lake. NIGHT HALT&lt;br&gt;Day 04 : Morning check out of hotel, Depart to Kodai ,Eve Arr Kodai Check in Hotel NIGHT HALT&lt;br&gt;Day 05 : Check out Depart to Kodai Sight Seeing, visit Pillar Rock, Green valley lake, Solar Physical Observatory, Bryants park, evening Departart MADURI NIGHT HALT\r\nDay&lt;br&gt;06 : Noon Depart to Maduri Sight Seeing visit Madurai Meenakshi Temple, Choknadhar Templetemple, Alagar templ, lord Muruga temple and night at Madurai. NIGHT HALT\r\nDay &lt;br&gt;07 : Check Out Depart Rameshwaram visit Hanumam temple (24ft)Pamban Bridge, Navapanigriham, kasha Viswanath Temple, 24 Undalas, Ram parvath, Sita Parvath, Hanuman Parvath, Vishnu temple Back Maduri,Depart to Kanyakumari NIGHT HALT&lt;br&gt;Day 08 : Morning Check Out Departart to Kanyakumari , visit sunrise temple, Triveni Sangam, Devi kumara Amman Temple, Gandhi Mantapam, Kamrajmani Mantapam, Vivekananda Rock, Tiruvalluer statue(133ft)SusunderamTemple Back Maduri Depart To Bangalore NIGHT DEPART\r\nDay&lt;br&gt;09 : ARR BANGALORE&lt;br&gt;PACKAGE INCLUDES: Transportation by Bangalore to Ooty 35 seater Air Bus, Sight seeing By Ooty â€“ Coonoor-Kodai-Maduri-Rameshwaram-kanayakumari by mini bus, Maduri to Bangalore by 35 seater Air bus &amp; Accommondation. (Guide and Entrance Fees extra)', '6 NIGHTS/7 DAYS', '6700', '8900', '12900', '1521272750.jpg', '2018-03-17 07:45:50', '2018-03-17 07:45:50'),
(14, 'MADURAI-RAMESHWARAM', 'Day 01 : Depart to Madurai NIGHT DEPART&lt;br&gt;Day 02 : Arr Madurai Check in Hotel, Depart 1.00 p.m to visit Madurai Meenakshi Temple, Choknadhar Templetemple, Alagar templ, lord Muruga temple NIGHT HALT&lt;br&gt;Day 03 : Check Out Depart Rameshwaram visit Hanumam temple (24ft)Pamban Bridge, Navapanigriham, kasha Viswanath Temple, 24 Undalas, Ram parvath, Sita Parvath, Hanuman Parvath, Vishnu temple Back Maduri,Depart to Bangalore NIGHT DEPART&lt;br&gt;PACKAGE INCLUDES: Transportation by Bangalore to Madurai 35 seater Air Bus , Sight seeing Maduri-Rameshwaram -Maduri by mini bus, Maduri to Bangalore by 35 seater Air bus &amp; Accommondation. (Guide and Entrance Fees extra)', '1 NIGHT/2 DAYS', '2200', '3000', '3800', '1521272873.jpg', '2018-03-17 07:47:53', '2018-03-17 07:47:53'),
(15, 'MADURAI-RAMESHWARAM-KANYAKUMARI', 'Day 01 : Depart to Madurai NIGHT DEPART&lt;br&gt;Day 02 : Arr Madurai Check in Hotel, Depart 1.00 p.m to visit Madurai Meenakshi Temple, Choknadhar Templetemple, Alagar templ, lord Muruga temple NIGHT HALT&lt;br&gt;Day 03 : Check Out Depart Rameshwaram visit Hanumam temple (24ft)Pamban Bridge, Navapanigriham, kasha Viswanath Temple, 24 Undalas, Ram parvath, Sita Parvath, Hanuman Parvath, Vishnu temple Back Maduri,Depart to Kanniyakumari NIGHT DEPART&lt;br&gt;Day 04 : Morning Check Out Departart to Kanyakumari , visit sunrise temple, Triveni Sangam, Devi kumara Amman Temple, Gandhi Mantapam, Kamrajmani Mantapam, Vivekananda Rock, Tiruvalluer statue(133ft)SusunderamTemple Back Maduri Depart To Bangalore NIGHT DEPART&lt;br&gt;Day 05 : ARR BANGALORE&lt;br&gt;PACKAGE INCLUDES: Transportation by Bangalore to Madurai 35 seater Air Bus, Sight seeing Maduri-Rameshwaram-kanayakumari-Maduri by mini bus , Maduri to Bangalore by 35 seater Air bus &amp; Accommondation. (Guide and Entrance Fees extra)', '2 NIGHTS/3 DAYS', '3300', '5000', '6500', '1521273022.jpg', '2018-03-17 07:50:22', '2018-03-17 07:50:22'),
(16, 'MADURAI-RAMESHWARAM-KANYAKUMARI', 'Day 01 : Depart to Madurai NIGHT DEPART&lt;br&gt;Day 02 : Arr Madurai Check in Hotel, Depart 1.00 p.m to visit Madurai Meenakshi Temple, Choknadhar Templetemple, Alagar templ, lord Muruga temple NIGHT HALT&lt;br&gt;Day 03 : Check Out Depart Rameshwaram visit Hanumam temple (24ft)Pamban Bridge, Navapanigriham, kasha Viswanath Temple, 24 Undalas, Ram parvath, Sita Parvath, Hanuman Parvath, Vishnu temple NIGHT HALT &lt;br&gt;Day 04 : Check out Depart to Rameshwaram to Kanyakumari NIGHT HALT&lt;br&gt;Day 05 : Morning Check Out Departart to Kanyakumari , visit sunrise temple, Triveni Sangam, Devi kumara Amman Temple, Gandhi Mantapam, Kamrajmani Mantapam, Vivekananda Rock, Tiruvalluer statue(133ft)SusunderamTemple Back Maduri Depart To Bangalore NIGHT DEPART&lt;br&gt;Day 06 : ARR BANGALORE&lt;br&gt;PACKAGE INCLUDES: Transportation by Bangalore to Madurai 35 seater Air Bus, Sight seeing Maduri-Rameshwaram-kanayakumari-Maduri by mini bus , Maduri to Bangalore by 35 seater Air bus &amp; Accommondation. (Guide and Entrance Fees extra)', '3 NIGHTS/4 DAYS', '4200', '5800', '7000', '1521273378.jpg', '2018-03-17 07:56:18', '2018-03-17 07:56:18'),
(17, 'MADURAI-KODAI-RAMESHWARAM-KANYAKUMARI', 'Day 01 : Depart to Madurai NIGHT DEPART&lt;br&gt;Day 02 : Arr Madurai Check in Hotel, Depart 1.00 p.m to visit Madurai Meenakshi Temple, Choknadhar Templetemple, Alagar templ, lord Muruga temple NIGHT HALT&lt;br&gt;Day 03 : Check Out Depart Rameshwaram visit Hanumam temple (24ft)Pamban Bridge, Navapanigriham, kasha Viswanath Temple, 24 Undalas, Ram parvath, Sita Parvath, Hanuman Parvath, Vishnu temple NIGHT HALT&lt;br&gt;Day 04 : Check out Depart to Rameshwaram to Kanyakumari NIGHT HALT&lt;br&gt;Day 05 : Morning Check Out Departart to Kanyakumari , visit sunrise temple, Triveni Sangam, Devi kumara Amman Temple, Gandhi Mantapam, Kamrajmani Mantapam, Vivekananda Rock, Tiruvalluer statue(133ft)SusunderamTemple Back Maduri Depart To Bangalore NIGHT DEPART&lt;br&gt;Day 06 : ARR BANGALORE&lt;br&gt;PACKAGE INCLUDES: Transportation by Bangalore to Madurai 35 seater Air Bus, Sight seeing Maduri-Rameshwaram-kanayakumari-Maduri by mini bus , Maduri to Bangalore by 35 seater Air bus &amp; Accommondation. (Guide and Entrance Fees extra)', '3 NIGHTS/4 DAYS', '4200', '5800', '7000', '1521273575.jpg', '2018-03-17 07:59:35', '2018-03-17 07:59:35'),
(18, 'PONDICHERY', 'Day 01 : Dep. 9.00 p.m. to Pondichery NIGHT DEPART&lt;br&gt;Day 02 : Arrival Pondichery morning check in hotel free Day NIGHT HALT&lt;br&gt;Day 03 : Check out Depart to Pondicherry sight seeing, visit sri Aurobindo Ashram, Auroville Beach, Tree House- Chunnambar Beach, Munnukula Temple, Bharathi Park. Night Depart to Bangalore. NIGHT DEPART&lt;br&gt;PACKAGE INCLUDES: Transportation by Volvo / Non A/c (Subject to Availability) Sight Seeing by Individual Car (A/c Accommodation).', '1 NIGHT/2 DAYS', '3500', '4100', '5500', '1521273673.jpg', '2018-03-17 08:01:13', '2018-03-17 08:01:13'),
(19, 'PONDICHERY-MAHABALIPURAM', 'Day 01 : Dep. 9.00 p.m. to Pondichery NIGHT DEPART&lt;br&gt;Day 02 : Arrival Pondichery morning check in hotel free Day NIGHT HALT&lt;br&gt;Day 03 : Check out Depart to Pondicherry sight seeing, visit sri Aurobindo Ashram, Auroville Beach, Tree House- Chunnambar Beach, Munnukula Temple, Bharathi Park. Night Depart to Bangalore. NIGHT DEPART&lt;br&gt;PACKAGE INCLUDES: Transportation by Volvo / Non A/c (Subject to Availability) Sight Seeing by Individual Car (A/c Accommodation).', '1 NIGHT/2 DAYS', '4500', '5000', '6000', '1521273782.jpg', '2018-03-17 08:03:02', '2018-03-17 08:03:02'),
(20, 'GOA', 'Day 01 : Depart to Goa NIGHT DEPART&lt;br&gt;Day 02 : Arr Goa, check in Hotel Free Day Night Halt&lt;br&gt;Day 03 : Depart to South Goa sight seeing visit, Harbour Point, Bogmalo Beach, Old Goa Church, Shree Mangusesh Temple, Shre Shantadurga Temple, Colva Beach, and Evening Boat Cruise Night Halt&lt;br&gt;Day 04 : Check out Hotel, North Goa Soght seeing visit, River Cruise, Calagute Beaches, fort Aguda, Light House point, Guada Beach, Vagaotor Beach, Anjuna Beach and night Depart to Bangalore. NIGHT DEPART.&lt;br&gt;PACKAGE INCLUDES: Transportation by Multi Axle Volvo / Volvo Bus, sight seeing by Mini Bus, Boat Cruise Ticket &amp; Accommodation (Guide &amp; Entrance Fees Extra)', '2 NIGHTS / 3 DAYS', '5000', '6200', '8500', '1521273986.jpg', '2018-03-17 08:06:26', '2018-03-17 08:06:26'),
(21, 'GOA', 'Day 01 : Depart to Goa NIGHT DEPART&lt;br&gt;Day 02 : Arr Goa, check in Hotel Free Day Night Halt&lt;br&gt;Day 03 : Depart to South Goa sight seeing visit, Harbour Point, Bogmalo Beach, Old Goa Church, Shree Mangusesh Temple, Shre Shantadurga Temple, Colva Beach, and Evening Boat Cruise Night Halt&lt;br&gt;Day 04 : Free Day Night Halt&lt;br&gt;Day 05 : Check out Hotel, North Goa Soght seeing visit, River Cruise, Calagute Beaches, fort Aguda, Light House point, Guada Beach, Vagaotor Beach, Anjuna Beach and night Depart to Bangalore. NIGHT DEPART.&lt;br&gt;PACKAGE INCLUDES: Transportation by Multi Axle Volvo / Volvo Bus, sight seeing by Mini Bus, Boat Cruise Ticket &amp; Accommodation (Guide &amp; Entrance Fees Extra)', '3 NIGHTS / 4 DAYS', '5800', '7000', '9300', '1521274103.jpg', '2018-03-17 08:08:23', '2018-03-17 08:08:23'),
(22, 'MUNNAR', 'Day 01 : Depart to Munnar Night Depart&lt;br&gt;Day 02 : Arr Munnar Chick in Hotel Free Day Night Halt&lt;br&gt;Day 03 : Dep to Munnar sightseeing, visit Mettupatti Dam, Breeding Farm,Echo point, Kundala Dam. Night Halt&lt;br&gt;Day 04 : Half day Sight Seeing &amp; Noon Depart to Bengalore NOON DEPART.&lt;br&gt;PACKAGE INCLUDES: Transportation by Sleeper / Seater Hi tech Bus,Sight seeing by individual Car &amp; Accommodation (Entrance Fees Extra).', '2 NIGHTS / 3 DAYS', '4000', '5200', '7000', '1521274216.jpg', '2018-03-17 08:10:16', '2018-03-17 08:10:16'),
(23, 'MUNNAR-THEKKADY', 'Day 01 : Depart to Munnar Night Depart&lt;br&gt;Day 02 : Arr Munnar Chick in Hotel Free Day Night Halt&lt;br&gt;Day 03 : Dep to Munnar sightseeing, visit Mettupatti Dam, Breeding Farm,Echo point, Kundala Dam. Night Halt&lt;br&gt;Day 04 : Check out Depart Munnar To Thekkady sight seeing Visit, wild life Sanctuary known for its Abundant Flora and Fauna, boat ride at periyar Lake. Night Halt&lt;br&gt;Day 05 : Check Out dep to Munnar, Eve Depart to Bengalore Eve DEPART.&lt;br&gt;PACKAGE INCLUDES: Transportation by Sleeper / Seater Hi tech Bus, Munnar - Thekkady by Car, sight seeing by car &amp; Accommodation (Entrance Fees Extra)', '3 NIGHTS/4 DAYS', '5800', '7300', '9500', '1521274332.jpg', '2018-03-17 08:12:12', '2018-03-17 08:12:12'),
(24, 'MUNNAR-THEKKADY-ALLEPPY-COCHIN', 'Day 01 : Depart to Munnar Night Depart&lt;br&gt;Day 02 : Arr Munnar Chick in Hotel Free Day Night Halt&lt;br&gt;Day 03 : Dep to Munnar sightseeing, visit Mettupatti Dam, Breeding Farm,Echo point, Kundala Dam. Night Halt&lt;br&gt;Day 04 : Check out Depart Munnar To Thekkady sight seeing Visit, wild life Sanctuary known for its Abundant Flora and Fauna, boat ride at periyar Lake. Night Halt&lt;br&gt;Day 05 : Dep to Alleppy by car Arr at Noon Check in House Boat Visit Interior of Alleppy. Ancient Churches, Tiny Islands of Alleppey Night Halt&lt;br&gt;Day 06 : Morning Check out House Boat proceed to Cochin by Car visit Harbour house,cherai Beach etc and Depart To Bangalore. EVE Depart&lt;br&gt;PACKAGE INCLUDES: Transportation by Sleeper / Seater by Hi tech Bus , Munnar-Thekkady-Alleppy-Cochin by Car. sight seeing by car, Lunch - Breakfast - Dinner provided in house boat, Cochin to BLR by Multi axle/ Volvo &amp; Accommodation (Entrance Fees Extra)', '4 NIGHTS/5 DAYS', '11300', '12900', '15800', '1521274608.jpg', '2018-03-17 08:16:48', '2018-03-17 08:16:48'),
(25, 'MUNNAR-THEKKADY -ALLEPPY -KOVALAM', 'Day 01 : Depart to Munnar Night Depart&lt;br&gt;Day 02 : Arr Munnar Chick in Hotel Free Day Night Halt&lt;br&gt;Day 03 : Dep to Munnar sightseeing, visit Mettupatti Dam, Breeding Farm,Echo point, Kundala Dam. Night Halt&lt;br&gt;Day 04 : Check out Depart Munnar To Thekkady sight seeing Visit, wild life Sanctuary known for its Abundant Flora and Fauna, boat ride at periyar Lake. Night Halt&lt;br&gt;Day 05 : Dep to Alleppy by car Arr at Noon Check in House Boat Visit Interior of Alleppy. Ancient Churches, Tiny Islands of Alleppey Night Halt&lt;br&gt;Day 06 : Check out House Boat Dep to Kovalam NIGHT HALT&lt;br&gt;Day 07 : Check out Hotel and Kovalam sight seeing visit, kovalam Beach and Depart to Bangalore. Night Depart&lt;br&gt;PACKAGE INCLUDES: Transportation by Sleeper / Seater by Hi tech Bus , Munnar-Thekkady-Alleppy-Kovalam by Car. sight seeing by car, Lunch - Breakfast - Dinner provided in house boat, Trivandram to BLR by Multi axle/ Volvo &amp; Accommodation (Entrance Fees Extra)', '5 NIGHTS/6 DAYS', '13800', '15500', '17900', '1521274768.jpg', '2018-03-17 08:19:28', '2018-03-17 08:19:28'),
(26, 'KODAI - MUNNAR', 'Day 01 : Depart to to Kodai Night Depart&lt;br&gt;Day 02 : Arr Kodai morning check in Hotel after fresh up Depart to Kodai sight seeing visit, Pillar Roack, Green Valley Lake, Silver Cascade, Bryants park. Night Halt&lt;br&gt;Day 03 : Depart to Munnar Arr. Noon check in Hotel Night Halt&lt;br&gt;Day 04 : Depart to Munnar sight seeing visit, visit Mettupatti Dam, indo swiss cattle, Breeding Farm, Echo point, Kundala Dam, same day night Depart to Bengalore. . Night Depart.&lt;br&gt;PACKAGE INCLUDES: Transportation BLR to Kodai by 35 Seater Bus. All Sight seeing by Car, Kodai to Munnar by car, Munnar - BLR by Sleeper / Seater &amp; Accommodation (Guide &amp; Entrance Fees Extra)', '2 NIGHTS/3 DAYS', '5500', '6500', '8200', '1521275028.jpg', '2018-03-17 08:23:48', '2018-03-17 08:23:48'),
(27, 'KODAI - MUNNAR', 'Day 01 : Depart to to Kodai Night Depart&lt;br&gt;Day 02 : Arr Kodai morning check in Hotel after fresh up Depart to Kodai sight seeing visit, Pillar Roack, Green Valley Lake, Silver Cascade, Bryants park. Night Halt&lt;br&gt;Day 03 : Depart to Munnar Arr. Noon check in Hotel Night Halt&lt;br&gt;Day 04 : Depart to Munnar sight seeing visit, visit Mettupatti Dam, indo swiss cattle, Breeding Farm, Echo point, Kundala Dam, same day night Depart to Bangalore. . Night Depart.&lt;br&gt;Day 05 : Free Day and Noon Depart to Bengalore Night Depart&lt;br&gt;PACKAGE INCLUDES: Transportation BLR to Kodai by 35 Seater Bus. All Sight seeing by Car, Kodai to Munnar by car, Munnar - BLR by Sleeper / Seater &amp; Accommodation (Guide &amp; Entrance Fees Extra)', '3 NIGHTS/4 DAYS', '6200', '7500', '9600', '1521275158.jpg', '2018-03-17 08:25:58', '2018-03-17 08:25:58'),
(28, 'KODAI &ndash; MUNNAR-ALLEPPY-COCHIN', 'Day 01 : Depart to to Kodai Night Depart&lt;br&gt;Day 02 : Arr Kodai morning check in Hotel after fresh up Depart to Kodai sight seeing visit, Pillar Roack, Green Valley Lake, Silver Cascade, Bryants park. Night Halt&lt;br&gt;Day 03 : Depart to Munnar Arr. Noon check in Hotel Night Halt&lt;br&gt;Day 04 : Depart to Munnar sight seeing visit, visit Mettupatti Dam, indo swiss cattle, Breeding Farm, Echo point, Kundala Dam, same day night Depart to Bengalore. . Night Depart.&lt;br&gt;Day 05 : Morning Depart to Alleppy Check in Noon to house boat, visit Tiny Islands, Villages, Churches, etc., Night Halt&lt;br&gt;Day 06 : Morning Check out House Boat proceed to Cochin by Car visit Harbour house,cherai Beach etc and Depart To Bangalore. Eve DEP&lt;br&gt;PACKAGE INCLUDES: Transportation BLR to Kodai by 35 Seater Bus. All Sight seeing by Car, Kodai - Munnar â€“ Alleppy-Cochin by car, Lunch - Breakfast - Dinner provided in House Boat, Cochin to BLR by Multi axle/Volvo &amp; Accommodation (Guide &amp; Entrance Fees Extra)', '4 NIGHTS/5 DAYS', '11900', '13800', '15800', '1521275293.jpg', '2018-03-17 08:28:13', '2018-03-17 08:28:13'),
(29, 'KODAI &ndash; MUNNAR-ALLEPPY-KOVALAM', 'Day 01 : Depart to to Kodai Night Depart&lt;br&gt;Day 02 : Arr Kodai morning check in Hotel after fresh up Depart to Kodai sight seeing visit, Pillar Roack, Green Valley Lake, Silver Cascade, Bryants park. Night Halt&lt;br&gt;Day 03 : Depart to Munnar Arr. Noon check in Hotel Night Halt&lt;br&gt;Day 04 : Depart to Munnar sight seeing visit, visit Mettupatti Dam, indo swiss cattle, Breeding Farm, Echo point, Kundala Dam, same day night Depart to Bengalore. . Night Depart.&lt;br&gt;Day 05 : Morning Depart to Alleppy Check in Noon to house boat, visit Tiny Islands, Villages, Churches, etc., Night Halt&lt;br&gt;Day 06 : Morning Check out House Boat proceed to Cochin by Car visit Harbour house,cherai Beach etc and Depart To Bangalore. Eve DEP&lt;br&gt;Day 07 : Check out Dep Kovalam sight seeing visit, kovalam Beach and Depart to Bangalore. . Night Depart&lt;br&gt;PACKAGE INCLUDES: Transportation BLR to Kodai by 35 Seater Bus. All Sight seeing by Car, Kodai - Munnar â€“ Alleppy-Kovalam by car, Lunch - Breakfast - Dinner provided in House Boat, Trivandram to BLR by Multi axle/Volvo &amp; Accommodation (Guide &amp; Entrance Fees Extra)', '5 NIGHTS/6 DAYS', '14500', '15900', '18200', '1521277979.jpg', '2018-03-17 09:12:59', '2018-03-17 09:12:59'),
(30, 'OOTY- KODAI - MUNNAR', 'Day 01 : Depart to Ooty Night Depart&lt;br&gt;Day 02 : Arr Ooty Check in hotel, Depart To Ooty &amp; Coonoor Sight Seeing visit Sims park Dolphins Nose &amp; Lambs Rock. Doddabetta (8648 ft. above sea level) telescope House Ooty Botonical Garden, Ooty Lake. Night halt&lt;br&gt;Day 03 : Check out Depart to kodai, Eve Arr kodai Night halt&lt;br&gt;Day 04 : Check out Depart. to Kodai sight seeing visit Pillar Rock, Green valley lake, Solar Physical Observatory, Bryants park. Night Halt&lt;br&gt;Day 05 : Depart to Munnar Arr. Noon check in Hotel Night Halt&lt;br&gt;Day 06 : Depart to Munnar sight seeing visit, visit Mettupatti Dam, indo swiss cattle, Breeding Farm, Echo point, Kundala Dam. Night Halt&lt;br&gt;Day 07 : Free Day and Noon Depart to Bengalore Night Depart&lt;br&gt;PACKAGE INCLUDES: Transportation Bangalore - Ooty by 35 seater bus. Ooty - Kodia Sight Seeing by mini bus, Kodai - Munnar by car, Munnar Sight Seeing by cab Munnar - Bangalore Sleeper/Seater &amp; Accommodation (Guide and Entrance Fees extra)', '5 NIGHTS/6 DAYS', '7500', '9900', '13900', '1521278113.jpg', '2018-03-17 09:15:13', '2018-03-17 09:15:13'),
(31, 'OOTY- KODAI &ndash; MUNNAR-ALLEPPY-COCHIN', 'Day 01 : Depart to Ooty Night Depart&lt;br&gt;Day 02 : Arr Ooty Check in hotel, Depart To Ooty &amp; Coonoor Sight Seeing visit Sims park Dolphins Nose &amp; Lambs Rock. Doddabetta (8648 ft. above sea level) telescope House Ooty Botonical Garden, Ooty Lake. Night halt&lt;br&gt;Day 03 : Check out Depart to kodai, Eve Arr kodai Night halt&lt;br&gt;Day 04 : Check out Depart. to Kodai sight seeing visit Pillar Rock, Green valley lake, Solar Physical Observatory, Bryants park. Night Halt&lt;br&gt;Day 05 : Depart to Munnar Arr. Noon check in Hotel Night Halt&lt;br&gt;Day 06 : Depart to Munnar sight seeing visit, visit Mettupatti Dam, indo swiss cattle, Breeding Farm, Echo point, Kundala Dam. Night Halt&lt;br&gt;Day 07 : Morning Depart to Alleppy Check in Noon to house boat, visit Tiny Islands, Villages, Churches, etc., Night Halt&lt;br&gt;Day 08 : Morning Check out House Boat proceed to Cochin by Car visit Harbour house,cherai Beach etc and Depart To Bangalore. Eve DEP&lt;br&gt;PACKAGE INCLUDES: Transportation BLR to Ooty by 35 Seater Bus. All Sight seeing by Car, Ooty to Kodai By Mini Bus, Lunch - Breakfast - Dinner provided in House Boat, Kodai - Munnar â€“ Alleppy-Cochin by car Cochin to BLR by Multi axle Volvo &amp; Accommodation (Guide &amp; Entrance Fees Extra)', '6 NIGHTS/7 DAYS', '13500', '15500', '18600', '1521278290.jpg', '2018-03-17 09:18:10', '2018-03-17 09:18:10'),
(32, 'OOTY- KODAI &ndash; MUNNAR-ALLEPPY-COCHIN', 'Day 01 : Depart to Ooty Night Depart&lt;br&gt;Day 02 : Arr Ooty Check in hotel, Depart To Ooty &amp; Coonoor Sight Seeing visit Sims park Dolphins Nose &amp; Lambs Rock. Doddabetta (8648 ft. above sea level) telescope House Ooty Botonical Garden, Ooty Lake. Night halt&lt;br&gt;Day 03 : Free day. NIGHT HALT&lt;br&gt;Day 04 : Check out Depart to kodai, Eve Arr kodai Night halt&lt;br&gt;Day 05 : Check out Depart. to Kodai sight seeing visit Pillar Rock, Green valley lake, Solar Physical Observatory, Bryants park. Night Halt&lt;br&gt;Day 06 : Depart to Munnar Arr. Noon check in Hotel Night Halt&lt;br&gt;Day 07 : Depart to Munnar sight seeing visit, visit Mettupatti Dam, indo swiss cattle, Breeding Farm, Echo point, Kundala Dam. Night Halt&lt;br&gt;Day 08 : Morning Depart to Alleppy Check in Noon to house boat, visit Tiny Islands, Villages, Churches, etc., Night Halt&lt;br&gt;Day 09 : Morning Check out House Boat proceed to Cochin by Car visit Harbour house,cherai Beach etc and Depart To Bangalore. Eve DEP&lt;br&gt;PACKAGE INCLUDES: Transportation BLR to Ooty by 35 Seater Bus. All Sight seeing by Car, Ooty to Kodai By Mini Bus, Lunch - Breakfast - Dinner provided in House Boat, Kodai - Munnar â€“ Alleppy-Cochin by car Cochin to BLR by Multi axle Volvo &amp; Accommodation (Guide &amp; Entrance Fees Extra)', '7 NIGHTS/8 DAYS', '13900', '16500', '22000', '1521278465.jpg', '2018-03-17 09:21:05', '2018-03-17 09:21:05'),
(33, 'ALLEPPY-COCHIN', 'Day 01 : Depart to Alleppy NIGHT DEPART&lt;br&gt;Day 02 : Morning Arr in Alleppy, after Refresh Noon Check in to house boat, visit Tiny Islands, Villages, Churches, etc., Night Halt&lt;br&gt;Day 03 : Morning Check out House Boat proceed to Cochin by Car visit Harbour house,cherai Beach etc and Depart To Bangalore. Eve DEP&lt;br&gt;PACKAGE INCLUDES: Transportation Bangalore-Alleppy &amp; Cochi-bangalore by Multi axle / Volvo Bus, Lunch - Breakfast - Dinner provided in House Boat, Alleppy to Cochin by cab &amp; sight seeing &amp; House boat Stay. (Guide &amp; Entrance Fees Extra)', '1 NIGHT/2 DAYS', '6500', 'NA', 'NA', '1521278625.jpg', '2018-03-17 09:23:45', '2018-03-17 09:23:45'),
(34, 'ALLEPPY-KOVALAM', 'Day 01 : Depart to Alleppy NIGHT DEPART&lt;br&gt;Day 02 : Morning Arr in Alleppy, after Refresh Noon Check in to house boat, visit Tiny Islands, Villages, Churches, etc., Night Halt&lt;br&gt;Day 03 : Morning check out from house Boat, Proceed to Kovalam, Night Halt&lt;br&gt;Day 04 : Morning check out from house Boat, Proceed to Kovalam, Night Halt&lt;br&gt;PACKAGE INCLUDES: Kovalam sight seeing visit, kovalam Beach and Depart to Bangalore. . Night Depart', '2 NIGHT/3 DAYS', 'NA', '9500', '11800', '1521278868.jpg', '2018-03-17 09:27:48', '2018-03-17 09:27:48'),
(35, 'MUNNAR-ALLEPPY-COCHIN', 'Day 01 : Depart to Munnar NIGHT DEPART&lt;br&gt;Day 02 : Morning Arr at Munnar Check in Hotel, after refresh Munnar sight seeing visit, visit Mettupatti Dam, indo swiss cattle, Breeding Farm, Echo point, Kundala Dam. . Night Halt&lt;br&gt;Day 03 : Morning Arr in Alleppy, after Refresh Noon Check in to house boat, visit Tiny Islands, Villages, Churches, etc., Night Halt&lt;br&gt;Day 04 : Morning Check out House Boat proceed to Cochin by Car visit Harbour house,cherai Beach etc and Depart To Bangalore. Eve DEP&lt;br&gt;PACKAGE INCLUDES: Transportation Bangalore-Alleppy &amp; Cochi-bangalore by Multi axle / Volvo Bus, Lunch - Breakfast - Dinner provided in House Boat, Alleppy to Cochin by cab &amp; sight seeing &amp; House boat Stay. (Guide &amp; Entrance Fees Extra)', '2 NIGHT/3 DAYS', '7900', '8900', '10200', '1521279002.jpg', '2018-03-17 09:30:02', '2018-03-17 09:30:02'),
(36, 'MUNNAR-ALLEPPY-COCHIN', 'Day 01 : Depart to Munnar NIGHT DEPART&lt;br&gt;Day 02 : Morning Arr Check in Hotel, FREE DAY. Night Halt&lt;br&gt;Day 03 : Morning Arr at Munnar Check in Hotel, after refresh Munnar sight seeing visit, visit Mettupatti Dam, indo swiss cattle, Breeding Farm, Echo point, Kundala Dam. . Night Halt&lt;br&gt;Day 04 : Morning Depart to Alleppy, Noon Check in to House boat, visit Tiny Islands, Villages, Churches, etc.,&lt;br&gt;Day 05 : Morning Check out House Boat proceed to Cochin by Car visit Harbour house,cherai Beach etc and Depart To Bangalore. Eve DEP&lt;br&gt;PACKAGE INCLUDES: BLR - Munnar by Sleeper / Seater, Cochin to Bangalore by multi axle/Volvo Bus ,All sight seeing by Car, Munnar â€“ Alleppy-cochin by Car, B/F, Lunch, Dinner Provided at Boat House, &amp; Accommodation (Guide &amp; Entrance Fees Extra)', '3 NIGHT/4 DAYS', '8800', '9900', '11800', '1521279184.jpg', '2018-03-17 09:33:04', '2018-03-17 09:33:04'),
(37, 'MUNNAR-ALLEPPY-KOVALAM', 'Day 01 : Depart to Munnar NIGHT DEPART&lt;br&gt;Day 02 : Morning Arr Check in Hotel, FREE DAY. Night Halt&lt;br&gt;Day 03 : Morning Arr at Munnar Check in Hotel, after refresh Munnar sight seeing visit, visit Mettupatti Dam, indo swiss cattle, Breeding Farm, Echo point, Kundala Dam. . Night Halt&lt;br&gt;Day 04 : Morning Depart to Alleppy, Noon Check in to House boat, visit Tiny Islands, Villages, Churches, etc.,&lt;br&gt;Day 05 : Kovalam sight seeing visit, kovalam Beach and Depart to Bangalore. . Night Depart&lt;br&gt;PACKAGE INCLUDES: BLR - Munnar by Sleeper / Seater / Trivandram -Bangalore by Multi axle / Volvo Bus, All sight seeing by Car, Munnar â€“ Alleppy- Kovalam by Car, B/F, Lunch, Dinner Provided at Boat House &amp; Accommodation (Guide &amp; Entrance Fees Extra)', '3 NIGHTS/4 DAYS', '11100', '13900', '16900', '1521279332.jpg', '2018-03-17 09:35:32', '2018-03-17 09:35:32'),
(38, 'COCHIN-ALLEPPY-KUMARAKOM', 'Day 01 : Depart to Cochin Night Depart&lt;br&gt;Day 02 : Morning Arr at Cochin, check in Hotel, after fresh up Cochin sight seeing by Motor boat visit, Chinese Fishing net, Harbor House, Santa Cruise, Basillica Church, Dutch Palace, Cheria Beach, Fort etc,.. NIGHT HALT&lt;br&gt;Day 03 : Morning Depart to Alleppy, Noon Check in to House boat, visit Tiny Islands, Villages, Churches, etc., Night Halt&lt;br&gt;Day 04 : Morning check out from house Boat, proceed to Kumarakom by car visit, Bird Sancturary, Wood Museum etc., &amp; Dep to Alleppy / Cochin same night Depart to Bangalore. Night Depart&lt;br&gt;PACKAGE INCLUDES: BLR - Cochin by Multi axle/Vvolvo, All sight seeing by Car, Cochin â€“ Alleppy-Kumarakom by Car, B/F, Lunch, Dinner Provided at Boat House, Cochin to Bangalore by Multi axle/ Volvo Bus &amp; Accommodation (Guide &amp; Entrance Fees Extra)', '2 NIGHTS/3 DAYS', '8500', '9800', '11100', '1521279453.jpg', '2018-03-17 09:37:33', '2018-03-17 09:37:33'),
(39, 'COCHIN-CHERAI BEACH-VEEGALAND', 'Day 01 : Depart to Cochin Night Depart&lt;br&gt;Day 02 : Morning Arr at Cochin, check in Hotel, after fresh up Cochin sight seeing by Motor boat visit, Chinese Fishing net, Harbor House, Santa Cruise, Basillica Church, Dutch Palace, Cheria Beach, Fort etc,.. NIGHT HALT&lt;br&gt;Day 03 : Full day visit Cheria Beach NIGHT HALT&lt;br&gt;Day 04 : Morning sight seeing of Veegaland, can Enjoy Water and Dry Games in Veegaland, &amp; night Depart to Bangolore. NIGHT DEPART&lt;br&gt;PACKAGE INCLUDES: Traveling by Multi axle / Volvo, sight seeing by Car&amp; Accomodation (Entrance Fees Extra)', '2 NIGHTS/3 DAYS', '6500', '7500', '8400', '1521279560.jpg', '2018-03-17 09:39:20', '2018-03-17 09:39:20'),
(40, 'KOVALAM-VARKALA', 'Day 01 : Depart to Trivendrum NIGHT DEPART&lt;br&gt;Day 02 : Morning Arr Check in Hotel after fresh up Kovalam sight seeing visit, Kovalam Beach. NIGHT HALT&lt;br&gt;Day 03 : Full day Visit, Varkala Beach and Night Depart to Bangalore. . NIGHT DEPART&lt;br&gt;PACKAGE INCLUDES: Traveling by Multi axle / Volvo, sight seeing by Car and Accomodation (Entrance Fees Extra)', '1 NIGHT/2 DAYS', '6500', '7800', '8800', '1521279644.jpg', '2018-03-17 09:40:44', '2018-03-17 09:40:44'),
(41, 'KOVALAM-KANYAKUMARI', 'Day 01 : Depart to Trivendrum NIGHT DEPART&lt;br&gt;Day 02 : Morning Arr Check in Hotel after fresh up Kovalam sight seeing visit, Kovalam Beach. NIGHT HALT&lt;br&gt;Day 03 : Morning Depart to Kanyakumari, Noon check in Hotel after fresh up proceed to Sight seeing NIGHT HALT&lt;br&gt;Day 04 : Check Out Depart To Visit Sunrise and Proceed To Trivandram With sight seeing And Eve Depart to Bangalore EVE DEPART&lt;br&gt;PACKAGE INCLUDES: Traveling by Multi axle / Volvo bus, sight seeing by Car and Accomodation.(Entrance Fees Extra)', '2 NIGHTS/3 DAYS', '6500', '7600', '9600', '1521279750.jpg', '2018-03-17 09:42:30', '2018-03-17 09:42:30'),
(42, 'ALLEPPY-KOVALAM-KANYAKUMARI', 'Day 01 : Depart to Alleppy NIGHT DEPART&lt;br&gt;Day 02 : Arrival morning check in Hotel for refresh Check in 11.00 a.m. to house boat, visit Tiny Islands, Villages, Churches, etc., NIGHT HALT&lt;br&gt;Day 03 : Dep. 10.00 a.m. Check out from House Boat Depart Kovalam Arr. check in Hotel NIGHT HALT&lt;br&gt;Day 04 : Check Out Depart to Visit Kovalam Sight Seeing ,eve Proceed to Kanyakumari After Sun Set Check In Hotel NIGHT HALT&lt;br&gt;Day 05 : Check Out Depart To Visit Sunrise and Proceed To Trivandram With sight seeing And Eve Depart to Bangalore EVE DEPART&lt;br&gt;PACKAGE INCLUDES: Traveling by Multi axle / Volvo bus, sight seeing by Car and Accomodation.(Entrance Fees Extra) . Night Depart', '3 NIGHTS/4 DAYS', '9900', '11800', '13900', '1521279900.jpg', '2018-03-17 09:45:00', '2018-03-17 09:45:00'),
(43, 'YAANA-GOKARNA OM BEACH', 'Day 01 : Dep. to Sirsi NIGHT DEP&lt;br&gt;Day 02 : Morning arrival check in hotel 10-00 a.m. proceed to visit Yaana (trekking), Murudeshwara, Edugunji, Apsarakonda etc. NIGHT HALT&lt;br&gt;Day 03 : Check out proceed to visit Gokarna, Om Beach, Bada and Karwar beach NIGHT DEPART&lt;br&gt;PACKAGE INCLUDES: BLR to Sirsi Transporation by 2+2 hi-tech Air Bus, Accomodation in Deluxe Hotel, sight seeing by individual Car, Karwar - BLR by Hi-tech Bus (Guide &amp; Entrance Fees Extra)', '1 NIGHT/2 DAYS', '4800', 'NA', 'NA', '1521280000.jpg', '2018-03-17 09:46:40', '2018-03-17 09:46:40'),
(44, 'JOG FALLS-MAGOD FALLS', 'Day 01 : Dep. to Sirsi NIGHT DEP&lt;br&gt;Day 02 : Morning arrival check in hotel 10-00 a.m. proceed to visit Jog Falls, Sharavati Back Waters, etc. NIGHT HALT&lt;br&gt;Day 03 : Check out proceed to visit Uncalli Falls, Magod Falls NIGHT DEPART&lt;br&gt;PACKAGE INCLUDES: Transportation by 2+2 Hi -tech Air Bus Accomondation in Deluxe Hotel, Sight seeing by Individual car.', '1 NIGHT/2 DAYS', '4500', 'NA', 'NA', '1521280201.jpg', '2018-03-17 09:50:01', '2018-03-17 09:50:01'),
(45, 'HYDERABAD-RAMOJI FILM CITY', 'Day 01 : Dep. 9.00 p.m. to Hyderabad NIGHT DEP&lt;br&gt;Day 02 : Arr. Morning check in hotel Dep. 9.00 a.m. to Ramoji Film City evening 5.30p.m. Back to Hyderabad. NIGHT HALT&lt;br&gt;Day 03 : After check out Dep. 8.30 a.m. to Hyderabad sight seeing visit Birla Temple, Zoo Park, Charminar Mecca Masjid, NTR Garden, Salarjung Museum 8.00 p.m. Dep. to Bangalore. NIGHT DEPART&lt;br&gt;PACKAGE INCLUDES: Transportation by Multi Axle Volvo bus sight-seeing by Non a/c bus &amp; Accommodation (Guide &amp; Entrance Fees Extra)', '1 NIGHT/2 DAYS', '3900', '4500', '5500', '1521280641.jpg', '2018-03-17 09:57:21', '2018-03-17 09:57:21'),
(46, 'COORG (SOUTH KASHMIR)', 'Day 01 : Depart to Coorg NIGHT DEP&lt;br&gt;Day 02 : Arr. 5.30 a.m. check in Hotel Dep. 10.00 a.m. visit full day tour to Nisarga Dhama, Harangi Dam, Dubare Forest, Golden Temple NIGHT HALT&lt;br&gt;Day 03 : Check out Dep. to Tala Cauvery, Bhagamandala, Raja Seat, Fort, Raja Tomb, Abbey Falls, Omkareshwara Temple, Golf Course, Back to Hotel to get Fresh. 10.00 p.m. Dep. to Bangalore NIGHT DEPART&lt;br&gt;PACKAGE INCLUDES: Transportation byBangalore-Coorg-Bangalore 35 seater bus, Accomodation in Home Stays &amp; Two days Sight seeing by individual Car. (Guide &amp; Entrance Fees Extra)', '1 NIGHT/2 DAYS', '3500', '4000', 'NA', '1521280761.jpg', '2018-03-17 09:59:21', '2018-03-17 09:59:21'),
(47, 'COORG (SOUTH KASHMIR)', 'Day 01 : Depart to Coorg NIGHT DEP&lt;br&gt;Day 02 : Arr. 5.30 a.m. check in Hotel Free Day NIGHT HALT&lt;br&gt;Day 03 : Arr. 5.30 a.m. check in Hotel Dep. 10.00 a.m. visit full day tour to Nisarga Dhama, Harangi Dam, Dubare Forest, Golden Temple NIGHT HALT&lt;br&gt;Day 04 : Check out Dep. to Tala Cauvery, Bhagamandala, Raja Seat, Fort, Raja Tomb, Abbey Falls, Omkareshwara Temple, Golf Course, Back to Hotel to get Fresh. 10.00 p.m. Dep. to Bangalore NIGHT DEPART&lt;br&gt;PACKAGE INCLUDES: Transportation byBangalore-Coorg-Bangalore 35 seater bus, Accomodation in Home Stays &amp; Two days Sight seeing by individual Car. (Guide &amp; Entrance Fees Extra)', '2 NIGHTS/3 DAYS', '3500', '4000', 'NA', '1521280871.jpg', '2018-03-17 10:01:11', '2018-03-17 10:01:11'),
(48, 'SOUTH COORG &amp; NORTH COORG', 'Day 01 : Dep. 10.00 p.m. to North Coorg NIGHT DEP&lt;br&gt;Day 02 : Arr Coorg Check in Hotel Dep. to Tala Cauvery, Bhagamandala, Raja Seat, Fort, Raja Tomb, Abbey Falls, Omkareshwara Temple, Golf Course Stay at home Stay NIGHT HALT&lt;br&gt;Day 03 : On the way visit Nisarga Dhama, Harangi Dam, Dubare Forest, Golden Temple and reach South Coorg Stay at Home Stay NIGHT HALT&lt;br&gt;Day 04 : Check out Visit Iruppu Falls &amp; Nagarahole wild life sanctuary by Jeep (Jungle Safari) NIGHT DEPART&lt;br&gt;PACKAGE INCLUDES: Transportation by Bangalore-Coorg-Bangalore 35 seater bus, Accomodation in Home Stays &amp; Three days Sight seeing by individual Car. (Guide &amp; Entrance Fees Extra)', '2 NIGHTS/3 DAYS', '5700', '6600', 'NA', '1521280984.jpg', '2018-03-17 10:03:04', '2018-03-17 10:03:04'),
(49, 'OOTY-COONOOR', 'Day 01 : Depart to Ooty NIGHT DEP&lt;br&gt;Day 02 : Arr Ooty Check In hotel Free Day NIGHT HALT&lt;br&gt;Day 03 : Check Out Depart To Ooty &amp; Coonoor Sight Seeing visit Sims park Dolphins Nose &amp; Lambs Rock. Doddabetta (8648 ft. above sea level) telescope House Ooty Botonical Garden, Ooty Lake Back To hotel Depart TO Bangalore NIGHT DEPART&lt;br&gt;PACKAGE INCLUDES: Transportation byBangalore-Coorg-Bangalore 35 seater bus, Accomodation in Home Stays &amp; Two days Sight seeing by individual Car. (Guide &amp; Entrance Fees Extra)', '1 NIGHT/2 DAYS', '3500', '4000', 'NA', '1521281087.jpg', '2018-03-17 10:04:47', '2018-03-17 10:04:47'),
(50, 'OOTY-KODAI', 'Day 01 : Depart to Ooty NIGHT DEP&lt;br&gt;Day 02 : Arr Ooty Check in hotel, Depart To Ooty &amp; Coonoor Sight Seeing visit Sims park Dolphins Nose &amp; Lambs Rock. Doddabetta (8648 ft. above sea level) telescope House Ooty Botonical Garden, Ooty Lake. NIGHT HALT&lt;br&gt;Day 03 : Check out Depart to kodai, eve Arr kodai NIGHT DEPART&lt;br&gt;Day 04 : Check out Depart. to Kodai sight seeing visit Pillar Rock, Green valley lake, Solar Physical Observatory, Bryants park, Depart. to Bangalore EVE DEPART TO BANGALOR&lt;br&gt;Day 05 : Arr Bangalore&lt;br&gt;PACKAGE INCLUDES: Transportaion by Bangalore-Ooty,Kodai-Bangalore 35 seater air bus, Ooty-Kodai by Mini Bus ,All Sight Seeing By Mini Bus &amp; Accommondation (Guide and Entrans Fees extra).', '2 NIGHTS/3 DAYS', '3700', '4500', '6000', '1521281212.jpg', '2018-03-17 10:06:52', '2018-03-17 10:06:52'),
(51, 'OOTY-KODAI', 'Day 01 : Depart to Ooty NIGHT DEP&lt;br&gt;Day 02 : Arr Ooty Check In hotel Free Day NIGHT HALT&lt;br&gt;Day 03 : Depart To Ooty &amp; Coonoor Sight Seeing visit Sims park Dolphins Nose &amp; Lambs Rock. Doddabetta (8648 ft. above sea level) telescope House Ooty Botonical Garden, Ooty Lake. Night halt NIGHT HALT&lt;br&gt;Day 04 : Check out Depart to kodai, eve Arr kodai NIGHT DEPART&lt;br&gt;Day 05 : Free Day NIGHT HALT&lt;br&gt;Day 06 : Check out Depart. to Kodai sight seeing visit Pillar Rock, Green valley lake, Solar Physical Observatory, Bryants park, Depart. to Bangalore EVE DEPART TO BANGALOR&lt;br&gt;Day 07 : Arr Bangalore&lt;br&gt;PACKAGE INCLUDES: Transportaion by Bangalore-Ooty,Kodai-Bangalore 35 seater air bus, Ooty-Kodai by Mini Bus ,All Sight Seeing By Mini Bus &amp; Accommondation (Guide and Entrans Fees extra).', '4 NIGHTS/5 DAYS', '4700', '6000', '8000', '1521281339.jpg', '2018-03-17 10:08:59', '2018-03-17 10:08:59'),
(52, 'KODAIKANAL', 'Day 01 : Depart to Bangalore to Kodaikenal NIGHT DEP&lt;br&gt;Day 02 : Arr to Kodaikenal Check in Hotel Free Day NIGHT HALT&lt;br&gt;Day 03 : Check out Departs to Kodaikenal Visit Pillar Rock, Green valley lake, Solar Physical Observatory, Bryants park, Depart. to Bangalore EVE DEPART TO BANGALOR&lt;br&gt;Day 04 : Arr Bangalore&lt;br&gt;PACKAGE INCLUDES: Transportaion by Bangalore-Kodai- Bangalore by 35 seater bus, Sight seeing by minibus &amp; Accommondation. (Guide and Entrans Fees extra)', '1 NIGHT/2 DAYS', '2500', '3300', '4000', '1522734559.jpg', '2018-03-17 10:10:35', '2018-04-03 05:49:19'),
(53, 'KODAIKANAL', 'Day 01 : Depart to Bangalore to Kodaikenal NIGHT DEP&lt;br&gt;Day 02 : Arr to Kodaikenal Check in Hotel Free Day NIGHT HALT&lt;br&gt;Day 03 : Check out Departs to Kodaikenal Visit Pillar Rock, Green valley lake, Solar Physical Observatory, Bryants park, Depart. to Bangalore NIGHT HALT&lt;br&gt;Day 04 : After check out Dep. 10.00 a.m. to Jungle Treking by Jeep EVE DEPART TO BANGALOR&lt;br&gt;PACKAGE INCLUDES: Transportaion by Bangalore-Kodai- Bangalore by 35 seater bus, Sight seeing by minibus &amp; Accommondation. (Guide and Entrans Fees extra).', '2 NIGHTS/3 DAYS', '3300', '3800', '5500', '1522734517.jpg', '2018-03-17 10:12:23', '2018-04-03 05:48:37');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `country_id` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`id`, `name`, `slug`, `country_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Karnataka', 'karnataka', 1, 1, '2015-08-07', '2015-08-07 09:57:13');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin_customers`
--

CREATE TABLE `tbl_admin_customers` (
  `id` int(20) NOT NULL,
  `cusFname` varchar(255) NOT NULL,
  `cusLname` varchar(255) NOT NULL,
  `cusEmail` varchar(255) NOT NULL,
  `cusPassword` varchar(255) NOT NULL,
  `cusStatus` set('Y','N') NOT NULL DEFAULT 'Y',
  `cusPhone` varchar(20) NOT NULL,
  `cusDob` varchar(20) NOT NULL DEFAULT '',
  `cusAddress1` text,
  `cusAddress2` text,
  `cusCity` varchar(255) NOT NULL DEFAULT '',
  `cusState` varchar(255) NOT NULL DEFAULT '',
  `cusCountry` varchar(255) NOT NULL DEFAULT 'India',
  `cusPincode` varchar(20) NOT NULL DEFAULT '',
  `cusCode` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT '',
  `cusCreatedtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin_customers`
--

INSERT INTO `tbl_admin_customers` (`id`, `cusFname`, `cusLname`, `cusEmail`, `cusPassword`, `cusStatus`, `cusPhone`, `cusDob`, `cusAddress1`, `cusAddress2`, `cusCity`, `cusState`, `cusCountry`, `cusPincode`, `cusCode`, `role`, `cusCreatedtime`, `date_modified`) VALUES
(3, 'Rajakumar', '', 'rjkumar856@gmail.com', '202cb962ac59075b964b07152d234b70', 'Y', '9092310791', '', 'HSR Layout', NULL, 'Bangalore', 'Karnataka', 'India', '', 'a5fe7d97f020c27df0ece4bd40108c73', '1', '2017-12-12 12:32:56', '2018-02-01 07:13:41'),
(5, 'admin', '', 'info@thirumalatravels.com', '202cb962ac59075b964b07152d234b70', 'Y', '9845369848', '', 'HSR Layout', NULL, 'Bangalore', 'Karnataka', 'India', '', '15227389459', '1', '2018-04-03 07:02:25', '2018-04-03 07:02:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `airport_taxi`
--
ALTER TABLE `airport_taxi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bangalore_areas`
--
ALTER TABLE `bangalore_areas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `area_url` (`area_url`),
  ADD KEY `id` (`id`),
  ADD KEY `id_2` (`id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`),
  ADD KEY `country_id` (`country_id`,`state_id`),
  ADD KEY `state_id` (`state_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiry_details`
--
ALTER TABLE `enquiry_details`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `guest_blog`
--
ALTER TABLE `guest_blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `honey_moon`
--
ALTER TABLE `honey_moon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `local_taxi`
--
ALTER TABLE `local_taxi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `local_tour`
--
ALTER TABLE `local_tour`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `north_india`
--
ALTER TABLE `north_india`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `other_information`
--
ALTER TABLE `other_information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `outstation_one_way_trip`
--
ALTER TABLE `outstation_one_way_trip`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `outstation_round_trip`
--
ALTER TABLE `outstation_round_trip`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_sucess`
--
ALTER TABLE `payment_sucess`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pickup_time`
--
ALTER TABLE `pickup_time`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pilgrimage_pack`
--
ALTER TABLE `pilgrimage_pack`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`,`city_id`,`state_id`,`country_id`),
  ADD KEY `city_id` (`city_id`),
  ADD KEY `state_id` (`state_id`),
  ADD KEY `avatar` (`avatar`),
  ADD KEY `country_id` (`country_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request_airport_taxi`
--
ALTER TABLE `request_airport_taxi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request_enquiry`
--
ALTER TABLE `request_enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request_honeymoon_package`
--
ALTER TABLE `request_honeymoon_package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request_localtaxi_eight`
--
ALTER TABLE `request_localtaxi_eight`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request_localtaxi_four`
--
ALTER TABLE `request_localtaxi_four`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request_north_package`
--
ALTER TABLE `request_north_package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request_outstation_oneway`
--
ALTER TABLE `request_outstation_oneway`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request_outstation_round`
--
ALTER TABLE `request_outstation_round`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request_pilgrimage_package`
--
ALTER TABLE `request_pilgrimage_package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request_south_package`
--
ALTER TABLE `request_south_package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request_subscription`
--
ALTER TABLE `request_subscription`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request_tour_package`
--
ALTER TABLE `request_tour_package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `south_india`
--
ALTER TABLE `south_india`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`id`),
  ADD KEY `country_id` (`country_id`),
  ADD KEY `country_id_2` (`country_id`);

--
-- Indexes for table `tbl_admin_customers`
--
ALTER TABLE `tbl_admin_customers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `airport_taxi`
--
ALTER TABLE `airport_taxi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `bangalore_areas`
--
ALTER TABLE `bangalore_areas`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=533;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `enquiry_details`
--
ALTER TABLE `enquiry_details`
  MODIFY `e_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `guest_blog`
--
ALTER TABLE `guest_blog`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `honey_moon`
--
ALTER TABLE `honey_moon`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `local_taxi`
--
ALTER TABLE `local_taxi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `local_tour`
--
ALTER TABLE `local_tour`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `north_india`
--
ALTER TABLE `north_india`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `other_information`
--
ALTER TABLE `other_information`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `outstation_one_way_trip`
--
ALTER TABLE `outstation_one_way_trip`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `outstation_round_trip`
--
ALTER TABLE `outstation_round_trip`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `payment_sucess`
--
ALTER TABLE `payment_sucess`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `pickup_time`
--
ALTER TABLE `pickup_time`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pilgrimage_pack`
--
ALTER TABLE `pilgrimage_pack`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `request_airport_taxi`
--
ALTER TABLE `request_airport_taxi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `request_enquiry`
--
ALTER TABLE `request_enquiry`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `request_honeymoon_package`
--
ALTER TABLE `request_honeymoon_package`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `request_localtaxi_eight`
--
ALTER TABLE `request_localtaxi_eight`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `request_localtaxi_four`
--
ALTER TABLE `request_localtaxi_four`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `request_north_package`
--
ALTER TABLE `request_north_package`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `request_outstation_oneway`
--
ALTER TABLE `request_outstation_oneway`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `request_outstation_round`
--
ALTER TABLE `request_outstation_round`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `request_pilgrimage_package`
--
ALTER TABLE `request_pilgrimage_package`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `request_south_package`
--
ALTER TABLE `request_south_package`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `request_subscription`
--
ALTER TABLE `request_subscription`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `request_tour_package`
--
ALTER TABLE `request_tour_package`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `south_india`
--
ALTER TABLE `south_india`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_admin_customers`
--
ALTER TABLE `tbl_admin_customers`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
