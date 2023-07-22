-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2020 at 06:17 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `khoyapaya`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment_master`
--

CREATE TABLE `appointment_master` (
  `A_id` int(11) NOT NULL,
  `U_id` int(11) NOT NULL,
  `C_id` int(11) NOT NULL,
  `Adoption_Date` datetime NOT NULL DEFAULT current_timestamp(),
  `Status` tinyint(1) NOT NULL DEFAULT 0,
  `Is_active` tinyint(1) NOT NULL DEFAULT 1,
  `D_insert` datetime NOT NULL DEFAULT current_timestamp(),
  `D_update` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment_master`
--

INSERT INTO `appointment_master` (`A_id`, `U_id`, `C_id`, `Adoption_Date`, `Status`, `Is_active`, `D_insert`, `D_update`) VALUES
(8, 1, 10, '2020-01-05 23:16:12', 0, 1, '2020-01-05 23:16:12', '2020-01-05 23:16:12'),
(12, 5, 2, '2020-01-16 23:38:18', 0, 1, '2020-01-16 23:38:18', '2020-01-16 23:38:18'),
(13, 5, 6, '2020-01-26 13:54:49', 0, 1, '2020-01-26 13:54:49', '2020-01-26 13:54:49');

-- --------------------------------------------------------

--
-- Table structure for table `child_master`
--

CREATE TABLE `child_master` (
  `C_id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `DOB` date NOT NULL,
  `Age` int(5) NOT NULL,
  `About_Child` varchar(200) NOT NULL,
  `Profile_Img` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `child_master`
--

INSERT INTO `child_master` (`C_id`, `Name`, `DOB`, `Age`, `About_Child`, `Profile_Img`) VALUES
(1, 'Ajay', '2018-06-08', 1, 'Child is too brilliant in studies...', '1.jpg'),
(2, 'Deep', '2019-12-01', 1, 'dhgsghujhjuj876348726348712364dsuybe9gfuisf934w3jhggdiubergidugufgggsjd  d fgldkhf sdkjfhskdhflk3452345 3535h 3jh g3kj gjhd gfhjgf hjsdf gkj gfkjh dfjh dkfj skdgfsjfg sjdf sjd fksd fkjh sdgf sdjfg sd ', '2.jpg'),
(3, 'Chintan', '2019-12-26', 7, 'hgfghjvhhjh', '3.jpg'),
(4, 'Ayush', '2019-02-19', 2, 'gfjg', '4.jpg'),
(5, 'Harsh', '2019-12-07', 4, 'hgbjgb hjkv  jk fjh', '5.jpg'),
(6, 'Krish', '2019-12-24', 3, ' k vhjsd s gdjhsdg kjh', '6.jpg'),
(7, 'Smit', '2019-12-07', 3, 'fcu vyiubku', '7.jpg'),
(8, 'Aziz', '2019-12-20', 9, 'hgjhgjh gjgkhgjhg kj jhg', '8.jpg'),
(9, 'Brijraj', '2019-12-11', 4, 'yuiop[ojhgfchj', '9.jpg'),
(10, 'Prince', '2019-12-04', 5, 'fhjgfkugv gj', '10.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `city_master`
--

CREATE TABLE `city_master` (
  `City_Id` int(11) NOT NULL,
  `Cname` varchar(50) DEFAULT NULL,
  `State_Id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city_master`
--

INSERT INTO `city_master` (`City_Id`, `Cname`, `State_Id`) VALUES
(1, 'Alipur', 1),
(2, 'Andaman Island', 1),
(3, 'Anderson Island', 1),
(4, 'Arainj-Laka-Punga', 1),
(5, 'Austinabad', 1),
(6, 'Bamboo Flat', 1),
(7, 'Barren Island', 1),
(8, 'Beadonabad', 1),
(9, 'Betapur', 1),
(10, 'Bindraban', 1),
(11, 'Bonington', 1),
(12, 'Brookesabad', 1),
(13, 'Cadell Point', 1),
(14, 'Calicut', 1),
(15, 'Chetamale', 1),
(16, 'Cinque Islands', 1),
(17, 'Defence Island', 1),
(18, 'Digilpur', 1),
(19, 'Dolyganj', 1),
(20, 'Flat Island', 1),
(21, 'Geinyale', 1),
(22, 'Great Coco Island', 1),
(23, 'Haddo', 1),
(24, 'Havelock Island', 1),
(25, 'Henry Lawrence Island', 1),
(26, 'Herbertabad', 1),
(27, 'Hobdaypur', 1),
(28, 'Ilichar', 1),
(29, 'Ingoie', 1),
(30, 'Inteview Island', 1),
(31, 'Jangli Ghat', 1),
(32, 'Jhon Lawrence Island', 1),
(33, 'Karen', 1),
(34, 'Kartara', 1),
(35, 'KYD Islannd', 1),
(36, 'Landfall Island', 1),
(37, 'Little Andmand', 1),
(38, 'Little Coco Island', 1),
(39, 'Long Island', 1),
(40, 'Maimyo', 1),
(41, 'Malappuram', 1),
(42, 'Manglutan', 1),
(43, 'Manpur', 1),
(44, 'Mitha Khari', 1),
(45, 'Neill Island', 1),
(46, 'Nicobar Island', 1),
(47, 'North Brother Island', 1),
(48, 'North Passage Island', 1),
(49, 'North Sentinel Island', 1),
(50, 'Nothen Reef Island', 1),
(51, 'Outram Island', 1),
(52, 'Pahlagaon', 1),
(53, 'Palalankwe', 1),
(54, 'Passage Island', 1),
(55, 'Phaiapong', 1),
(56, 'Phoenix Island', 1),
(57, 'Port Blair', 1),
(58, 'Preparis Island', 1),
(59, 'Protheroepur', 1),
(60, 'Rangachang', 1),
(61, 'Rongat', 1),
(62, 'Rutland Island', 1),
(63, 'Sabari', 1),
(64, 'Saddle Peak', 1),
(65, 'Shadipur', 1),
(66, 'Smith Island', 1),
(67, 'Sound Island', 1),
(68, 'South Sentinel Island', 1),
(69, 'Spike Island', 1),
(70, 'Tarmugli Island', 1),
(71, 'Taylerabad', 1),
(72, 'Titaije', 1),
(73, 'Toibalawe', 1),
(74, 'Tusonabad', 1),
(75, 'West Island', 1),
(76, 'Wimberleyganj', 1),
(77, 'Yadita', 1),
(78, 'Adilabad', 2),
(79, 'Anantapur', 2),
(80, 'Chittoor', 2),
(81, 'Cuddapah', 2),
(82, 'East Godavari', 2),
(83, 'Guntur', 2),
(84, 'Hyderabad', 2),
(85, 'Karimnagar', 2),
(86, 'Khammam', 2),
(87, 'Krishna', 2),
(88, 'Kurnool', 2),
(89, 'Mahabubnagar', 2),
(90, 'Medak', 2),
(91, 'Nalgonda', 2),
(92, 'Nellore', 2),
(93, 'Nizamabad', 2),
(94, 'Prakasam', 2),
(95, 'Rangareddy', 2),
(96, 'Srikakulam', 2),
(97, 'Visakhapatnam', 2),
(98, 'Vizianagaram', 2),
(99, 'Warangal', 2),
(100, 'West Godavari', 2),
(101, 'Anjaw', 3),
(102, 'Changlang', 3),
(103, 'Dibang Valley', 3),
(104, 'East Kameng', 3),
(105, 'East Siang', 3),
(106, 'Itanagar', 3),
(107, 'Kurung Kumey', 3),
(108, 'Lohit', 3),
(109, 'Lower Dibang Valley', 3),
(110, 'Lower Subansiri', 3),
(111, 'Papum Pare', 3),
(112, 'Tawang', 3),
(113, 'Tirap', 3),
(114, 'Upper Siang', 3),
(115, 'Upper Subansiri', 3),
(116, 'West Kameng', 3),
(117, 'West Siang', 3),
(118, 'Barpeta', 4),
(119, 'Bongaigaon', 4),
(120, 'Cachar', 4),
(121, 'Darrang', 4),
(122, 'Dhemaji', 4),
(123, 'Dhubri', 4),
(124, 'Dibrugarh', 4),
(125, 'Goalpara', 4),
(126, 'Golaghat', 4),
(127, 'Guwahati', 4),
(128, 'Hailakandi', 4),
(129, 'Jorhat', 4),
(130, 'Kamrup', 4),
(131, 'Karbi Anglong', 4),
(132, 'Karimganj', 4),
(133, 'Kokrajhar', 4),
(134, 'Lakhimpur', 4),
(135, 'Marigaon', 4),
(136, 'Nagaon', 4),
(137, 'Nalbari', 4),
(138, 'North Cachar Hills', 4),
(139, 'Silchar', 4),
(140, 'Sivasagar', 4),
(141, 'Sonitpur', 4),
(142, 'Tinsukia', 4),
(143, 'Udalguri', 4),
(144, 'Araria', 5),
(145, 'Aurangabad', 5),
(146, 'Banka', 5),
(147, 'Begusarai', 5),
(148, 'Bhagalpur', 5),
(149, 'Bhojpur', 5),
(150, 'Buxar', 5),
(151, 'Darbhanga', 5),
(152, 'East Champaran', 5),
(153, 'Gaya', 5),
(154, 'Gopalganj', 5),
(155, 'Jamshedpur', 5),
(156, 'Jamui', 5),
(157, 'Jehanabad', 5),
(158, 'Kaimur Bhabua', 5),
(159, 'Katihar', 5),
(160, 'Khagaria', 5),
(161, 'Kishanganj', 5),
(162, 'Lakhisarai', 5),
(163, 'Madhepura', 5),
(164, 'Madhubani', 5),
(165, 'Munger', 5),
(166, 'Muzaffarpur', 5),
(167, 'Nalanda', 5),
(168, 'Nawada', 5),
(169, 'Patna', 5),
(170, 'Purnia', 5),
(171, 'Rohtas', 5),
(172, 'Saharsa', 5),
(173, 'Samastipur', 5),
(174, 'Saran', 5),
(175, 'Sheikhpura', 5),
(176, 'Sheohar', 5),
(177, 'Sitamarhi', 5),
(178, 'Siwan', 5),
(179, 'Supaul', 5),
(180, 'Vaishali', 5),
(181, 'West Champaran', 5),
(182, 'Chandigarh', 6),
(183, 'Mani Marja', 6),
(184, 'Bastar', 7),
(185, 'Bhilai', 7),
(186, 'Bijapur', 7),
(187, 'Bilaspur', 7),
(188, 'Dhamtari', 7),
(189, 'Durg', 7),
(190, 'Janjgir-Champa', 7),
(191, 'Jashpur', 7),
(192, 'Kabirdham-Kawardha', 7),
(193, 'Korba', 7),
(194, 'Korea', 7),
(195, 'Mahasamund', 7),
(196, 'Narayanpur', 7),
(197, 'Norh Bastar-Kanker', 7),
(198, 'Raigarh', 7),
(199, 'Raipur', 7),
(200, 'Rajnandgaon', 7),
(201, 'South Bastar-Dantewada', 7),
(202, 'Surguja', 7),
(203, 'Amal', 8),
(204, 'Amli', 8),
(205, 'Bedpa', 8),
(206, 'Chikhli', 8),
(207, 'Dadra & Nagar Haveli', 8),
(208, 'Dahikhed', 8),
(209, 'Dolara', 8),
(210, 'Galonda', 8),
(211, 'Kanadi', 8),
(212, 'Karchond', 8),
(213, 'Khadoli', 8),
(214, 'Kharadpada', 8),
(215, 'Kherabari', 8),
(216, 'Kherdi', 8),
(217, 'Kothar', 8),
(218, 'Luari', 8),
(219, 'Mashat', 8),
(220, 'Rakholi', 8),
(221, 'Rudana', 8),
(222, 'Saili', 8),
(223, 'Sili', 8),
(224, 'Silvassa', 8),
(225, 'Sindavni', 8),
(226, 'Udva', 8),
(227, 'Umbarkoi', 8),
(228, 'Vansda', 8),
(229, 'Vasona', 8),
(230, 'Velugam', 8),
(231, 'Brancavare', 9),
(232, 'Dagasi', 9),
(233, 'Daman', 9),
(234, 'Diu', 9),
(235, 'Magarvara', 9),
(236, 'Nagwa', 9),
(237, 'Pariali', 9),
(238, 'Passo Covo', 9),
(239, 'Central Delhi', 10),
(240, 'East Delhi', 10),
(241, 'New Delhi', 10),
(242, 'North Delhi', 10),
(243, 'North East Delhi', 10),
(244, 'North West Delhi', 10),
(245, 'Old Delhi', 10),
(246, 'South Delhi', 10),
(247, 'South West Delhi', 10),
(248, 'West Delhi', 10),
(249, 'Canacona', 11),
(250, 'Candolim', 11),
(251, 'Chinchinim', 11),
(252, 'Cortalim', 11),
(253, 'Goa', 11),
(254, 'Jua', 11),
(255, 'Madgaon', 11),
(256, 'Mahem', 11),
(257, 'Mapuca', 11),
(258, 'Marmagao', 11),
(259, 'Panji', 11),
(260, 'Ponda', 11),
(261, 'Sanvordem', 11),
(262, 'Terekhol', 11),
(263, 'Ahmedabad', 12),
(264, 'Amreli', 12),
(265, 'Anand', 12),
(266, 'Banaskantha', 12),
(267, 'Baroda', 12),
(268, 'Bharuch', 12),
(269, 'Bhavnagar', 12),
(270, 'Dahod', 12),
(271, 'Dang', 12),
(272, 'Dwarka', 12),
(273, 'Gandhinagar', 12),
(274, 'Jamnagar', 12),
(275, 'Junagadh', 12),
(276, 'Kheda', 12),
(277, 'Kutch', 12),
(278, 'Mehsana', 12),
(279, 'Nadiad', 12),
(280, 'Narmada', 12),
(281, 'Navsari', 12),
(282, 'Panchmahals', 12),
(283, 'Patan', 12),
(284, 'Porbandar', 12),
(285, 'Rajkot', 12),
(286, 'Sabarkantha', 12),
(287, 'Surat', 12),
(288, 'Surendranagar', 12),
(289, 'Vadodara', 12),
(290, 'Valsad', 12),
(291, 'Vapi', 12),
(292, 'Ambala', 13),
(293, 'Bhiwani', 13),
(294, 'Faridabad', 13),
(295, 'Fatehabad', 13),
(296, 'Gurgaon', 13),
(297, 'Hisar', 13),
(298, 'Jhajjar', 13),
(299, 'Jind', 13),
(300, 'Kaithal', 13),
(301, 'Karnal', 13),
(302, 'Kurukshetra', 13),
(303, 'Mahendragarh', 13),
(304, 'Mewat', 13),
(305, 'Panchkula', 13),
(306, 'Panipat', 13),
(307, 'Rewari', 13),
(308, 'Rohtak', 13),
(309, 'Sirsa', 13),
(310, 'Sonipat', 13),
(311, 'Yamunanagar', 13),
(312, 'Bilaspur', 14),
(313, 'Chamba', 14),
(314, 'Dalhousie', 14),
(315, 'Hamirpur', 14),
(316, 'Kangra', 14),
(317, 'Kinnaur', 14),
(318, 'Kullu', 14),
(319, 'Lahaul & Spiti', 14),
(320, 'Mandi', 14),
(321, 'Shimla', 14),
(322, 'Sirmaur', 14),
(323, 'Solan', 14),
(324, 'Una', 14),
(325, 'Anantnag', 15),
(326, 'Baramulla', 15),
(327, 'Budgam', 15),
(328, 'Doda', 15),
(329, 'Jammu', 15),
(330, 'Kargil', 15),
(331, 'Kathua', 15),
(332, 'Kupwara', 15),
(333, 'Leh', 15),
(334, 'Poonch', 15),
(335, 'Pulwama', 15),
(336, 'Rajauri', 15),
(337, 'Srinagar', 15),
(338, 'Udhampur', 15),
(339, 'Bokaro', 16),
(340, 'Chatra', 16),
(341, 'Deoghar', 16),
(342, 'Dhanbad', 16),
(343, 'Dumka', 16),
(344, 'East Singhbhum', 16),
(345, 'Garhwa', 16),
(346, 'Giridih', 16),
(347, 'Godda', 16),
(348, 'Gumla', 16),
(349, 'Hazaribag', 16),
(350, 'Jamtara', 16),
(351, 'Koderma', 16),
(352, 'Latehar', 16),
(353, 'Lohardaga', 16),
(354, 'Pakur', 16),
(355, 'Palamu', 16),
(356, 'Ranchi', 16),
(357, 'Sahibganj', 16),
(358, 'Seraikela', 16),
(359, 'Simdega', 16),
(360, 'West Singhbhum', 16),
(361, 'Bagalkot', 17),
(362, 'Bangalore', 17),
(363, 'Bangalore Rural', 17),
(364, 'Belgaum', 17),
(365, 'Bellary', 17),
(366, 'Bhatkal', 17),
(367, 'Bidar', 17),
(368, 'Bijapur', 17),
(369, 'Chamrajnagar', 17),
(370, 'Chickmagalur', 17),
(371, 'Chikballapur', 17),
(372, 'Chitradurga', 17),
(373, 'Dakshina Kannada', 17),
(374, 'Davanagere', 17),
(375, 'Dharwad', 17),
(376, 'Gadag', 17),
(377, 'Gulbarga', 17),
(378, 'Hampi', 17),
(379, 'Hassan', 17),
(380, 'Haveri', 17),
(381, 'Hospet', 17),
(382, 'Karwar', 17),
(383, 'Kodagu', 17),
(384, 'Kolar', 17),
(385, 'Koppal', 17),
(386, 'Madikeri', 17),
(387, 'Mandya', 17),
(388, 'Mangalore', 17),
(389, 'Manipal', 17),
(390, 'Mysore', 17),
(391, 'Raichur', 17),
(392, 'Shimoga', 17),
(393, 'Sirsi', 17),
(394, 'Sringeri', 17),
(395, 'Srirangapatna', 17),
(396, 'Tumkur', 17),
(397, 'Udupi', 17),
(398, 'Uttara Kannada', 17),
(399, 'Alappuzha', 18),
(400, 'Alleppey', 18),
(401, 'Alwaye', 18),
(402, 'Ernakulam', 18),
(403, 'Idukki', 18),
(404, 'Kannur', 18),
(405, 'Kasargod', 18),
(406, 'Kochi', 18),
(407, 'Kollam', 18),
(408, 'Kottayam', 18),
(409, 'Kovalam', 18),
(410, 'Kozhikode', 18),
(411, 'Malappuram', 18),
(412, 'Palakkad', 18),
(413, 'Pathanamthitta', 18),
(414, 'Perumbavoor', 18),
(415, 'Thiruvananthapuram', 18),
(416, 'Thrissur', 18),
(417, 'Trichur', 18),
(418, 'Trivandrum', 18),
(419, 'Wayanad', 18),
(420, 'Agatti Island', 19),
(421, 'Bingaram Island', 19),
(422, 'Bitra Island', 19),
(423, 'Chetlat Island', 19),
(424, 'Kadmat Island', 19),
(425, 'Kalpeni Island', 19),
(426, 'Kavaratti Island', 19),
(427, 'Kiltan Island', 19),
(428, 'Lakshadweep Sea', 19),
(429, 'Minicoy Island', 19),
(430, 'North Island', 19),
(431, 'South Island', 19),
(432, 'Anuppur', 20),
(433, 'Ashoknagar', 20),
(434, 'Balaghat', 20),
(435, 'Barwani', 20),
(436, 'Betul', 20),
(437, 'Bhind', 20),
(438, 'Bhopal', 20),
(439, 'Burhanpur', 20),
(440, 'Chhatarpur', 20),
(441, 'Chhindwara', 20),
(442, 'Damoh', 20),
(443, 'Datia', 20),
(444, 'Dewas', 20),
(445, 'Dhar', 20),
(446, 'Dindori', 20),
(447, 'Guna', 20),
(448, 'Gwalior', 20),
(449, 'Harda', 20),
(450, 'Hoshangabad', 20),
(451, 'Indore', 20),
(452, 'Jabalpur', 20),
(453, 'Jagdalpur', 20),
(454, 'Jhabua', 20),
(455, 'Katni', 20),
(456, 'Khandwa', 20),
(457, 'Khargone', 20),
(458, 'Mandla', 20),
(459, 'Mandsaur', 20),
(460, 'Morena', 20),
(461, 'Narsinghpur', 20),
(462, 'Neemuch', 20),
(463, 'Panna', 20),
(464, 'Raisen', 20),
(465, 'Rajgarh', 20),
(466, 'Ratlam', 20),
(467, 'Rewa', 20),
(468, 'Sagar', 20),
(469, 'Satna', 20),
(470, 'Sehore', 20),
(471, 'Seoni', 20),
(472, 'Shahdol', 20),
(473, 'Shajapur', 20),
(474, 'Sheopur', 20),
(475, 'Shivpuri', 20),
(476, 'Sidhi', 20),
(477, 'Tikamgarh', 20),
(478, 'Ujjain', 20),
(479, 'Umaria', 20),
(480, 'Vidisha', 20),
(481, 'Ahmednagar', 21),
(482, 'Akola', 21),
(483, 'Amravati', 21),
(484, 'Aurangabad', 21),
(485, 'Beed', 21),
(486, 'Bhandara', 21),
(487, 'Buldhana', 21),
(488, 'Chandrapur', 21),
(489, 'Dhule', 21),
(490, 'Gadchiroli', 21),
(491, 'Gondia', 21),
(492, 'Hingoli', 21),
(493, 'Jalgaon', 21),
(494, 'Jalna', 21),
(495, 'Kolhapur', 21),
(496, 'Latur', 21),
(497, 'Mahabaleshwar', 21),
(498, 'Mumbai', 21),
(499, 'Mumbai City', 21),
(500, 'Mumbai Suburban', 21),
(501, 'Nagpur', 21),
(502, 'Nanded', 21),
(503, 'Nandurbar', 21),
(504, 'Nashik', 21),
(505, 'Osmanabad', 21),
(506, 'Parbhani', 21),
(507, 'Pune', 21),
(508, 'Raigad', 21),
(509, 'Ratnagiri', 21),
(510, 'Sangli', 21),
(511, 'Satara', 21),
(512, 'Sholapur', 21),
(513, 'Sindhudurg', 21),
(514, 'Thane', 21),
(515, 'Wardha', 21),
(516, 'Washim', 21),
(517, 'Yavatmal', 21),
(518, 'Bishnupur', 22),
(519, 'Chandel', 22),
(520, 'Churachandpur', 22),
(521, 'Imphal East', 22),
(522, 'Imphal West', 22),
(523, 'Senapati', 22),
(524, 'Tamenglong', 22),
(525, 'Thoubal', 22),
(526, 'Ukhrul', 22),
(527, 'East Garo Hills', 23),
(528, 'East Khasi Hills', 23),
(529, 'Jaintia Hills', 23),
(530, 'Ri Bhoi', 23),
(531, 'Shillong', 23),
(532, 'South Garo Hills', 23),
(533, 'West Garo Hills', 23),
(534, 'West Khasi Hills', 23),
(535, 'Aizawl', 24),
(536, 'Champhai', 24),
(537, 'Kolasib', 24),
(538, 'Lawngtlai', 24),
(539, 'Lunglei', 24),
(540, 'Mamit', 24),
(541, 'Saiha', 24),
(542, 'Serchhip', 24),
(543, 'Dimapur', 25),
(544, 'Kohima', 25),
(545, 'Mokokchung', 25),
(546, 'Mon', 25),
(547, 'Phek', 25),
(548, 'Tuensang', 25),
(549, 'Wokha', 25),
(550, 'Zunheboto', 25),
(551, 'Angul', 26),
(552, 'Balangir', 26),
(553, 'Balasore', 26),
(554, 'Baleswar', 26),
(555, 'Bargarh', 26),
(556, 'Berhampur', 26),
(557, 'Bhadrak', 26),
(558, 'Bhubaneswar', 26),
(559, 'Boudh', 26),
(560, 'Cuttack', 26),
(561, 'Deogarh', 26),
(562, 'Dhenkanal', 26),
(563, 'Gajapati', 26),
(564, 'Ganjam', 26),
(565, 'Jagatsinghapur', 26),
(566, 'Jajpur', 26),
(567, 'Jharsuguda', 26),
(568, 'Kalahandi', 26),
(569, 'Kandhamal', 26),
(570, 'Kendrapara', 26),
(571, 'Kendujhar', 26),
(572, 'Khordha', 26),
(573, 'Koraput', 26),
(574, 'Malkangiri', 26),
(575, 'Mayurbhanj', 26),
(576, 'Nabarangapur', 26),
(577, 'Nayagarh', 26),
(578, 'Nuapada', 26),
(579, 'Puri', 26),
(580, 'Rayagada', 26),
(581, 'Rourkela', 26),
(582, 'Sambalpur', 26),
(583, 'Subarnapur', 26),
(584, 'Sundergarh', 26),
(585, 'Bahur', 27),
(586, 'Karaikal', 27),
(587, 'Mahe', 27),
(588, 'Pondicherry', 27),
(589, 'Purnankuppam', 27),
(590, 'Valudavur', 27),
(591, 'Villianur', 27),
(592, 'Yanam', 27),
(593, 'Amritsar', 28),
(594, 'Barnala', 28),
(595, 'Bathinda', 28),
(596, 'Faridkot', 28),
(597, 'Fatehgarh Sahib', 28),
(598, 'Ferozepur', 28),
(599, 'Gurdaspur', 28),
(600, 'Hoshiarpur', 28),
(601, 'Jalandhar', 28),
(602, 'Kapurthala', 28),
(603, 'Ludhiana', 28),
(604, 'Mansa', 28),
(605, 'Moga', 28),
(606, 'Muktsar', 28),
(607, 'Nawanshahr', 28),
(608, 'Pathankot', 28),
(609, 'Patiala', 28),
(610, 'Rupnagar', 28),
(611, 'Sangrur', 28),
(612, 'SAS Nagar', 28),
(613, 'Tarn Taran', 28),
(614, 'Ajmer', 29),
(615, 'Alwar', 29),
(616, 'Banswara', 29),
(617, 'Baran', 29),
(618, 'Barmer', 29),
(619, 'Bharatpur', 29),
(620, 'Bhilwara', 29),
(621, 'Bikaner', 29),
(622, 'Bundi', 29),
(623, 'Chittorgarh', 29),
(624, 'Churu', 29),
(625, 'Dausa', 29),
(626, 'Dholpur', 29),
(627, 'Dungarpur', 29),
(628, 'Hanumangarh', 29),
(629, 'Jaipur', 29),
(630, 'Jaisalmer', 29),
(631, 'Jalore', 29),
(632, 'Jhalawar', 29),
(633, 'Jhunjhunu', 29),
(634, 'Jodhpur', 29),
(635, 'Karauli', 29),
(636, 'Kota', 29),
(637, 'Nagaur', 29),
(638, 'Pali', 29),
(639, 'Pilani', 29),
(640, 'Rajsamand', 29),
(641, 'Sawai Madhopur', 29),
(642, 'Sikar', 29),
(643, 'Sirohi', 29),
(644, 'Sri Ganganagar', 29),
(645, 'Tonk', 29),
(646, 'Udaipur', 29),
(647, 'Barmiak', 30),
(648, 'Be', 30),
(649, 'Bhurtuk', 30),
(650, 'Chhubakha', 30),
(651, 'Chidam', 30),
(652, 'Chubha', 30),
(653, 'Chumikteng', 30),
(654, 'Dentam', 30),
(655, 'Dikchu', 30),
(656, 'Dzongri', 30),
(657, 'Gangtok', 30),
(658, 'Gauzing', 30),
(659, 'Gyalshing', 30),
(660, 'Hema', 30),
(661, 'Kerung', 30),
(662, 'Lachen', 30),
(663, 'Lachung', 30),
(664, 'Lema', 30),
(665, 'Lingtam', 30),
(666, 'Lungthu', 30),
(667, 'Mangan', 30),
(668, 'Namchi', 30),
(669, 'Namthang', 30),
(670, 'Nanga', 30),
(671, 'Nantang', 30),
(672, 'Naya Bazar', 30),
(673, 'Padamachen', 30),
(674, 'Pakhyong', 30),
(675, 'Pemayangtse', 30),
(676, 'Phensang', 30),
(677, 'Rangli', 30),
(678, 'Rinchingpong', 30),
(679, 'Sakyong', 30),
(680, 'Samdong', 30),
(681, 'Singtam', 30),
(682, 'Siniolchu', 30),
(683, 'Sombari', 30),
(684, 'Soreng', 30),
(685, 'Sosing', 30),
(686, 'Tekhug', 30),
(687, 'Temi', 30),
(688, 'Tsetang', 30),
(689, 'Tsomgo', 30),
(690, 'Tumlong', 30),
(691, 'Yangang', 30),
(692, 'Yumtang', 30),
(693, 'Chennai', 31),
(694, 'Chidambaram', 31),
(695, 'Chingleput', 31),
(696, 'Coimbatore', 31),
(697, 'Courtallam', 31),
(698, 'Cuddalore', 31),
(699, 'Dharmapuri', 31),
(700, 'Dindigul', 31),
(701, 'Erode', 31),
(702, 'Hosur', 31),
(703, 'Kanchipuram', 31),
(704, 'Kanyakumari', 31),
(705, 'Karaikudi', 31),
(706, 'Karur', 31),
(707, 'Kodaikanal', 31),
(708, 'Kovilpatti', 31),
(709, 'Krishnagiri', 31),
(710, 'Kumbakonam', 31),
(711, 'Madurai', 31),
(712, 'Mayiladuthurai', 31),
(713, 'Nagapattinam', 31),
(714, 'Nagarcoil', 31),
(715, 'Namakkal', 31),
(716, 'Neyveli', 31),
(717, 'Nilgiris', 31),
(718, 'Ooty', 31),
(719, 'Palani', 31),
(720, 'Perambalur', 31),
(721, 'Pollachi', 31),
(722, 'Pudukkottai', 31),
(723, 'Rajapalayam', 31),
(724, 'Ramanathapuram', 31),
(725, 'Salem', 31),
(726, 'Sivaganga', 31),
(727, 'Sivakasi', 31),
(728, 'Thanjavur', 31),
(729, 'Theni', 31),
(730, 'Thoothukudi', 31),
(731, 'Tiruchirappalli', 31),
(732, 'Tirunelveli', 31),
(733, 'Tirupur', 31),
(734, 'Tiruvallur', 31),
(735, 'Tiruvannamalai', 31),
(736, 'Tiruvarur', 31),
(737, 'Trichy', 31),
(738, 'Tuticorin', 31),
(739, 'Vellore', 31),
(740, 'Villupuram', 31),
(741, 'Virudhunagar', 31),
(742, 'Yercaud', 31),
(743, 'Agartala', 32),
(744, 'Ambasa', 32),
(745, 'Bampurbari', 32),
(746, 'Belonia', 32),
(747, 'Dhalai', 32),
(748, 'Dharam Nagar', 32),
(749, 'Kailashahar', 32),
(750, 'Kamal Krishnabari', 32),
(751, 'Khopaiyapara', 32),
(752, 'Khowai', 32),
(753, 'Phuldungsei', 32),
(754, 'Radha Kishore Pur', 32),
(755, 'Tripura', 32);

-- --------------------------------------------------------

--
-- Table structure for table `contact_master`
--

CREATE TABLE `contact_master` (
  `Co_Id` int(11) NOT NULL,
  `Id` int(11) NOT NULL,
  `User` tinyint(2) NOT NULL,
  `Subject` varchar(200) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `D_insert` datetime NOT NULL DEFAULT current_timestamp(),
  `D_update` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_master`
--

INSERT INTO `contact_master` (`Co_Id`, `Id`, `User`, `Subject`, `Description`, `D_insert`, `D_update`) VALUES
(1, 1, 1, 'Try', 'fjhn dkjfgdfjkjghdfkjh ', '2020-01-16 23:17:44', '2020-01-16 23:17:44'),
(2, 3, 2, 'Try', 'hello how are ypur', '2020-01-16 23:39:17', '2020-01-16 23:39:17');

-- --------------------------------------------------------

--
-- Table structure for table `crudoperation`
--

CREATE TABLE `crudoperation` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` bigint(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `crudoperation`
--

INSERT INTO `crudoperation` (`id`, `firstname`, `lastname`, `email`, `phone`) VALUES
(2, 'ajay', 'pandya', 'ajay', 9913210492);

-- --------------------------------------------------------

--
-- Table structure for table `donation_master`
--

CREATE TABLE `donation_master` (
  `D_Id` int(11) NOT NULL,
  `Fname` varchar(50) NOT NULL,
  `Lname` varchar(50) NOT NULL,
  `Email_Id` varchar(100) NOT NULL,
  `Mobile_No` bigint(15) NOT NULL,
  `Donation_Amount` bigint(10) NOT NULL,
  `Card_no` bigint(15) NOT NULL,
  `expire_DM` varchar(50) NOT NULL,
  `D_insert` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event_image_master`
--

CREATE TABLE `event_image_master` (
  `Id` int(11) NOT NULL,
  `E_id` int(11) NOT NULL,
  `Image` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event_image_master`
--

INSERT INTO `event_image_master` (`Id`, `E_id`, `Image`) VALUES
(1, 1, 'ajay.jpg'),
(2, 1, 'ajay2.jpg'),
(3, 2, 'kjfhgskjdf.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `event_master`
--

CREATE TABLE `event_master` (
  `E_id` int(11) NOT NULL,
  `Ename` varchar(100) NOT NULL,
  `About_Event` varchar(800) NOT NULL,
  `IsActive` tinyint(1) NOT NULL DEFAULT 1,
  `D_insert` datetime NOT NULL DEFAULT current_timestamp(),
  `D_update` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event_master`
--

INSERT INTO `event_master` (`E_id`, `Ename`, `About_Event`, `IsActive`, `D_insert`, `D_update`) VALUES
(1, 'ajaja', 'jhgfhgfhgfhgf hgfhfdhg hgfhgfjhfhgf hgfj hgfhg', 1, '2020-01-07 12:15:21', '2020-01-07 12:15:21'),
(2, 'hjdfdh', 'gsdmbvsdgbjdksjhd gfksdjgfskdjhfgkdhgksjdfhgskdfhgsjdhgf ksjhfg', 1, '2020-01-07 12:15:21', '2020-01-07 12:15:21');

-- --------------------------------------------------------

--
-- Table structure for table `otp_master`
--

CREATE TABLE `otp_master` (
  `Id` int(11) NOT NULL,
  `U_Id` int(11) NOT NULL,
  `OTP` varchar(100) NOT NULL,
  `Using` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `otp_master`
--

INSERT INTO `otp_master` (`Id`, `U_Id`, `OTP`, `Using`) VALUES
(1, 1, '649531', 'Email'),
(2, 1, '378309', 'Email'),
(3, 1, '581462', 'Email');

-- --------------------------------------------------------

--
-- Table structure for table `regi`
--

CREATE TABLE `regi` (
  `uid` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `img` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regi`
--

INSERT INTO `regi` (`uid`, `name`, `email`, `img`) VALUES
(1, 'AJay', 'ajay@gmail.com', NULL),
(2, 'AJay', 'ajay@gmail.com', NULL),
(3, 'AJay', 'ajay@gmail.com', 'images/3_AJay.jpg'),
(4, 'AJay', 'ajay@gmail.com', 'images/4_AJay.jpg'),
(5, 'AJay', 'ajay@gmail.com', 'images/5_AJay.jpg'),
(6, 'AJay', 'ajay@gmail.com', 'images/6_AJay.jpg'),
(7, 'AJay', 'ajay@gmail.com', 'images/7_AJay.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `U_id` int(11) NOT NULL,
  `Full_Name` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Email_Id` varchar(100) NOT NULL,
  `Mobile_No` bigint(15) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Income` int(10) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `State_Id` int(11) NOT NULL,
  `City_Id` int(11) NOT NULL,
  `Security_Id` int(11) NOT NULL,
  `Answer` varchar(150) NOT NULL,
  `Profile_Img` varchar(200) NOT NULL,
  `Acc_Type` tinyint(1) NOT NULL DEFAULT 1,
  `Isactive` tinyint(1) NOT NULL DEFAULT 1,
  `D_Insert` date NOT NULL DEFAULT current_timestamp(),
  `D_Update` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`U_id`, `Full_Name`, `Password`, `Email_Id`, `Mobile_No`, `Gender`, `Income`, `Address`, `State_Id`, `City_Id`, `Security_Id`, `Answer`, `Profile_Img`, `Acc_Type`, `Isactive`, `D_Insert`, `D_Update`) VALUES
(1, 'Ajay Pandya', '1c58a446a63e719d7b90156a8998ccc461609ed7', 'ajaypandya8602@gmail.com', 9374071072, 'Male', 10000, 'Rohitvas, Near mahakali temple, Adalaj', 12, 273, 7, 'DietFood', 'img_all/1_Ajay Pandya.jpg', 1, 1, '2019-12-17', '2019-12-17'),
(3, 'Ajay Lodha', '895fa4f313a865a485916279c05707638545077b', 'lodhaajay692@gmail.com', 7202070296, 'Male', 200000, 'Sarangpur', 12, 273, 8, 'Ahmedabad', 'img_all/3_Ajay Lodha.jpg', 1, 1, '2019-12-17', '2019-12-17'),
(5, 'Ajay Pandya', '69e453b1dafd2a5bf0f97cf177f4deeb1af55a0e', 'ajaypandya123@gmail.com', 1234567890, 'Male', 87648, 'adalaj ', 12, 273, 15, 'adalaj', 'img_all/5_Ajay Pandya.jpg', 1, 1, '2019-12-29', '2019-12-29'),
(7, 'Harsh', '26d86210c5008e37e4c941ff6820ecc6034fb21f', 'harsh@gmail.com', 123456789, 'Male', 675765, 'jhgdfjhd\r\nsdf\r\nasd\r\nfas\r\ndf', 12, 278, 3, 'sdfasdf', 'img_all/7_Harsh.jpg', 1, 1, '2020-02-29', '2020-02-29'),
(10, 'ajay', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin@gmail.com', 123456789, 'Male', 10000, 'RCTI', 12, 263, 9, 'tret', 'img_all/1_Ajay Pandya.jpg', 0, 1, '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `security_question`
--

CREATE TABLE `security_question` (
  `Security_Id` int(11) NOT NULL,
  `question` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `security_question`
--

INSERT INTO `security_question` (`Security_Id`, `question`) VALUES
(1, 'What Is your favorite book?'),
(2, 'What is the name of the road you grew up on?'),
(3, 'What is your mother`s maiden name?'),
(4, 'What was the name of your first/current/favorite pet?'),
(5, 'What was the first company that you worked for?'),
(6, 'Where did you go to high school/college?'),
(7, 'What is your favorite food?'),
(8, 'What city were you born in?'),
(9, 'Where is your favorite place to vacation?'),
(10, 'Who was your favorite teacher in school?'),
(11, 'Which phone number do you remember most from your childhood?'),
(12, 'What was your favorite place to visit as a child?'),
(13, 'Who is your favorite actor, musician, or artist?'),
(14, 'what In city were you born?'),
(15, 'What is the name of your first school?'),
(16, 'What is your favorite movie?'),
(17, 'What is your favorite color?'),
(18, 'What is your father`s middle name?'),
(19, 'What is the name of your favorite childhood friend?'),
(20, 'What was your childhood nickname?'),
(21, 'What was your favorite food as a child?'),
(22, 'What was the name of the hospital where you were born?');

-- --------------------------------------------------------

--
-- Table structure for table `state_master`
--

CREATE TABLE `state_master` (
  `State_Id` int(11) NOT NULL,
  `Sname` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state_master`
--

INSERT INTO `state_master` (`State_Id`, `Sname`) VALUES
(1, 'Andaman'),
(2, 'Andhra Pradesh'),
(3, 'Arunachal Pradesh'),
(4, 'Assam'),
(5, 'Bihar'),
(6, 'Chandigarh'),
(7, 'Chhattisgarh'),
(8, 'Dadra & Nagar Haveli'),
(9, 'Daman & Diu'),
(10, 'Delhi'),
(11, 'Goa'),
(12, 'Gujarat'),
(13, 'Haryana'),
(14, 'Himachal Pradesh'),
(15, 'Jammu & Kashmir'),
(16, 'Jharkhand'),
(17, 'Karnataka'),
(18, 'Kerala'),
(19, 'Lakshadweep'),
(20, 'Madhya Pradesh'),
(21, 'Maharashtra'),
(22, 'Manipur'),
(23, 'Meghalaya'),
(24, 'Mizoram'),
(25, 'Nagaland'),
(26, 'Orissa'),
(27, 'Pondicherry'),
(28, 'Punjab'),
(29, 'Rajasthan'),
(30, 'Sikkim'),
(31, 'Tamil Nadu'),
(32, 'Tripura'),
(33, 'Uttar Pradesh'),
(34, 'Uttaranchal'),
(35, 'West Bengal');

-- --------------------------------------------------------

--
-- Table structure for table `volunteer_master`
--

CREATE TABLE `volunteer_master` (
  `V_Id` int(11) NOT NULL,
  `Full_Name` varchar(100) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Email_Id` varchar(100) NOT NULL,
  `Mobile_No` bigint(15) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `Security_Id` int(11) NOT NULL,
  `Answer` varchar(100) NOT NULL,
  `Profile_Img` varchar(150) NOT NULL,
  `IsActive` tinyint(1) NOT NULL DEFAULT 1,
  `D_insert` datetime NOT NULL DEFAULT current_timestamp(),
  `D_update` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `volunteer_master`
--

INSERT INTO `volunteer_master` (`V_Id`, `Full_Name`, `Password`, `Email_Id`, `Mobile_No`, `Gender`, `Address`, `Security_Id`, `Answer`, `Profile_Img`, `IsActive`, `D_insert`, `D_update`) VALUES
(3, 'AjayPandya', '69e453b1dafd2a5bf0f97cf177f4deeb1af55a0e', 'ajaypandya123@gmail.com', 1234567890, 'Male', 'Adalaj', 15, 'Adalaj School', 'img_all/volunteer/3_AjayPandya.jpg', 1, '2020-01-16 23:33:59', '2020-01-16 23:33:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment_master`
--
ALTER TABLE `appointment_master`
  ADD PRIMARY KEY (`A_id`),
  ADD KEY `Appointment_master_U_id` (`U_id`),
  ADD KEY `Appointment_master_C_id` (`C_id`);

--
-- Indexes for table `child_master`
--
ALTER TABLE `child_master`
  ADD PRIMARY KEY (`C_id`);

--
-- Indexes for table `city_master`
--
ALTER TABLE `city_master`
  ADD PRIMARY KEY (`City_Id`);

--
-- Indexes for table `contact_master`
--
ALTER TABLE `contact_master`
  ADD PRIMARY KEY (`Co_Id`);

--
-- Indexes for table `crudoperation`
--
ALTER TABLE `crudoperation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donation_master`
--
ALTER TABLE `donation_master`
  ADD PRIMARY KEY (`D_Id`);

--
-- Indexes for table `event_image_master`
--
ALTER TABLE `event_image_master`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `event_master`
--
ALTER TABLE `event_master`
  ADD PRIMARY KEY (`E_id`);

--
-- Indexes for table `otp_master`
--
ALTER TABLE `otp_master`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `regi`
--
ALTER TABLE `regi`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`U_id`),
  ADD KEY `registration_state` (`State_Id`),
  ADD KEY `registration_city` (`City_Id`),
  ADD KEY `registration_security_question` (`Security_Id`);

--
-- Indexes for table `security_question`
--
ALTER TABLE `security_question`
  ADD PRIMARY KEY (`Security_Id`);

--
-- Indexes for table `state_master`
--
ALTER TABLE `state_master`
  ADD PRIMARY KEY (`State_Id`);

--
-- Indexes for table `volunteer_master`
--
ALTER TABLE `volunteer_master`
  ADD PRIMARY KEY (`V_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment_master`
--
ALTER TABLE `appointment_master`
  MODIFY `A_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `child_master`
--
ALTER TABLE `child_master`
  MODIFY `C_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `city_master`
--
ALTER TABLE `city_master`
  MODIFY `City_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=756;

--
-- AUTO_INCREMENT for table `contact_master`
--
ALTER TABLE `contact_master`
  MODIFY `Co_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `crudoperation`
--
ALTER TABLE `crudoperation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `donation_master`
--
ALTER TABLE `donation_master`
  MODIFY `D_Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `event_image_master`
--
ALTER TABLE `event_image_master`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `event_master`
--
ALTER TABLE `event_master`
  MODIFY `E_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `otp_master`
--
ALTER TABLE `otp_master`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `regi`
--
ALTER TABLE `regi`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `U_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `security_question`
--
ALTER TABLE `security_question`
  MODIFY `Security_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `volunteer_master`
--
ALTER TABLE `volunteer_master`
  MODIFY `V_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointment_master`
--
ALTER TABLE `appointment_master`
  ADD CONSTRAINT `Appointment_master_C_id` FOREIGN KEY (`C_id`) REFERENCES `child_master` (`C_Id`),
  ADD CONSTRAINT `Appointment_master_U_id` FOREIGN KEY (`U_id`) REFERENCES `registration` (`U_id`);

--
-- Constraints for table `registration`
--
ALTER TABLE `registration`
  ADD CONSTRAINT `registration_city` FOREIGN KEY (`City_Id`) REFERENCES `city_master` (`City_Id`),
  ADD CONSTRAINT `registration_security_question` FOREIGN KEY (`Security_Id`) REFERENCES `security_question` (`Security_Id`),
  ADD CONSTRAINT `registration_state` FOREIGN KEY (`State_Id`) REFERENCES `state_master` (`State_Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
