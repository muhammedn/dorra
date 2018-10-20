-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 14, 2018 at 11:10 AM
-- Server version: 5.7.21
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
-- Database: `editdorra`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`ID`, `cat_name`) VALUES
(2, 'Commercial'),
(3, 'Housing'),
(4, 'Services Sector');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

DROP TABLE IF EXISTS `info`;
CREATE TABLE IF NOT EXISTS `info` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `info_name` varchar(255) NOT NULL,
  `info_desc` varchar(255) NOT NULL,
  `info_image` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`ID`, `info_name`, `info_desc`, `info_image`) VALUES
(8, 'bla bla', 'bla bla bla', '15861_construction.png');

-- --------------------------------------------------------

--
-- Table structure for table `project_c`
--

DROP TABLE IF EXISTS `project_c`;
CREATE TABLE IF NOT EXISTS `project_c` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `p_name` varchar(255) NOT NULL,
  `p_desc` text NOT NULL,
  `add_date` date NOT NULL,
  `location` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `generalp` int(11) NOT NULL,
  `id_cat` int(11) NOT NULL,
  `highlight` varchar(255) NOT NULL,
  `p_image` varchar(255) NOT NULL,
  `p_image2` varchar(255) NOT NULL,
  `p_image3` varchar(255) NOT NULL,
  `p_image4` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `cat_3` (`id_cat`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `project_c`
--

INSERT INTO `project_c` (`ID`, `p_name`, `p_desc`, `add_date`, `location`, `type`, `generalp`, `id_cat`, `highlight`, `p_image`, `p_image2`, `p_image3`, `p_image4`) VALUES
(1, 'Benaa Masr', 'Built according to the main standard designs of Smart Village consists of 7 floors and 2 underground parking basements.', '2018-10-10', 'Egypt', 'Administrative Buildings', 100, 2, 'no', '31432_bena2-masr.jpg', '98533_bena2-masr.jpg', '28126_bena2-masr.jpg', '6166_bena2-masr.jpg'),
(2, 'Green Pyramids', 'Full Turn Key Job in 1991 transforming the old estate of the renowned Actor Youssef Bek Wahby into a Sheraton Royal Gardens, a 5 star luxurious Hotel that is considered an oasis in the middle of Haram area.\r\n\r\n', '2018-10-10', 'Egypt', 'Hotels & Resorts', 100, 2, 'no', '57991_Green-Pyramids1.jpg', '57204_Green-Pyramids1.jpg', '65919_Green-Pyramids1.jpg', '91450_Green-Pyramids1.jpg'),
(3, 'Akkad Tower', '8 Residential Towers for Police Force Projects in Nasr City each comprises of basement and 11 floors.\r\n\r\n', '2018-10-10', 'Egypt', 'Housing', 100, 2, 'no', '87693_akkad-towers.jpg', '71482_akkad-towers.jpg', '21212_akkad-towers.jpg', '63937_akkad-towers.jpg'),
(4, 'Capital Business Park', 'A timeless architectural feat set within the West of Cairo’s most vibrant and demographically growing suburb.\r\n\r\nCapital Business Park has delivered on its promise of providing the corporate community the practicality; space design, grandiosity as well as ambiance demanded for tomorrows business and recreational standards.\r\n\r\nBest practices from a Global stage have been seamlessly adapted to cater to our Local market; from the architectural prowess by the award winning RMJM’s Hazel Wong, to the imported Belgian glass curtain walls that envelope our office buildings, down to the electric mechanical workings and Building Management Systems installed and supervised by the American provider Johnson; any possible detail has been thoroughly supervised, looked upon and asked ‘ what can be better and what is needed’.\r\n\r\nCapital Business Park has set an unprecedented standard to our market, set within a stress free atmosphere of luscious landscaping and ornamentation fused aesthetically amidst a premium retail promenade of celebrated brands and recreational outings.\r\n\r\nOur vision was simple, to create the first exclusive professional business park in Egypt, that may rival the most sophisticated and bespoke business communities in the Middle East region, emphasizing design and schematics tailored to suit the requirements and demands of today’s leading corporations and firms. This has been achieved; we listened to the market and delivered on our promise.', '2018-10-10', 'Egypt', 'Administrative Buildings', 100, 2, 'no', '78452_01-global_031.jpg', '6789_02_zayed_entrance_night_11.jpg', '39643_18_A-115540.jpg', '1652_37_B-114946_03.jpg'),
(5, 'Fibrex Egypt', 'Started in the early 90’s, Fibrex was one of the first companies in Egypt specialized in Glass Fiber Reinforced Concrete (GRC) and Glass Fiber Reinforced Polymers (GRP).  Built with a target to excel over others and capture more than half of the market for this product, state of the art machinery was imported and expatriates were summoned to give a big jump start to this firm.\r\nNow, Fibrex Egypt has 80% market share and has successfully completed the biggest value for a GRC project in the world (Mubarak Academy in New Cairo). More than a prominent building in Cairo now bear façade works from this quality oriented company, some of these important projects are:\r\n•    Mashyakhat El – Azhar\r\n•    Nile City Towers\r\n•    First Residence – Giza', '2018-10-10', 'Egypt', 'Sector Services ', 100, 2, 'no', '48670_Big4dfe756c-6755-4f56-877d-9505ee2d1bbe.jpg', '38761_Big3a335108-db00-42d9-aca3-b7c16c54667e.jpg', '49083_Big6fe32280-cb6a-4448-943c-c06416afe456.jpg', '2967_Big5861e836-5672-4df8-b717-408c62c18db1.jpg'),
(6, 'Ready Mix Beton', 'It is one of the most up-to-date concrete mixing plants in the Middle East. It has been established in partnership with Osman Al Ghandour Company who is one of the concrete experts in the Arab world and is a computer operated station. It produces concrete mixture in conformity with specifications determined by the client. Its capacity is 240 cubic meters per hour, that is about 2000 cubic meters of concrete per day. The concrete is moved and lifted to the project sites by a fleet of mixer units.\r\n\r\n', '2018-10-10', 'Egypt', 'Sector Services', 100, 2, 'no', '64556_Bigcd02bd9a-8e78-4ffe-87e8-27a5ab5d7b42.jpg', '1930_Bigcd02bd9a-8e78-4ffe-87e8-27a5ab5d7b42.jpg', '92604_Bigcd02bd9a-8e78-4ffe-87e8-27a5ab5d7b42.jpg', '89747_Bigcd02bd9a-8e78-4ffe-87e8-27a5ab5d7b42.jpg'),
(7, 'ITA – wood works and joinery factory', 'Fully equipped with state of the art machinery and quality control management systems of wood processing and assembling and finishing.\r\n\r\nState of the art advanced painting unit stations of the highest quality layering and finishing.', '2018-10-10', 'Egypt', 'Sector Services', 100, 2, 'no', '3048_Bigeaab3d7d-2de9-4f22-a862-6170e2726106.jpg', '9681_Big9654d088-2452-4a64-a374-0763e7c66a66.jpg', '69730_Bigdedd06c7-dc4b-4abf-b0e3-e0959667f96a.jpg', '56519_Bigeaab3d7d-2de9-4f22-a862-6170e2726106.jpg'),
(8, 'Al Hosary Mosque', 'Al Hosary Mosque\r\n\r\n', '2018-10-10', 'Egypt', 'Others', 100, 2, 'no', '34116_IMP_-8.jpg', '33119_IMP_-8.jpg', '50167_IMP_-8.jpg', '43638_IMP_-8.jpg'),
(9, 'Central Bank Club', 'Central Bank Club\r\n', '2018-10-10', 'Egypt', 'Others', 100, 2, 'no', '60595_Big9993a8dd-52f3-4400-bf26-2e125be97f4d (1).jpg', '49012_Big9993a8dd-52f3-4400-bf26-2e125be97f4d (1).jpg', '64269_Big9993a8dd-52f3-4400-bf26-2e125be97f4d (1).jpg', '20872_Big9993a8dd-52f3-4400-bf26-2e125be97f4d (1).jpg'),
(10, 'Cairo Waste Water Project', 'CRC constructed 8 km of the 10 km tunnel with 2 vents 3 m x 3 m, of reinforced concrete and is leveled at about 10 m below ground level. The works also included pump station and the crossing works underneath the public services.\r\nThe works included about 3.5 million cubic meters of excavation and earthwork, 160,000 cubic meters of concrete, and 5.5 million of resistant bricks', '2018-10-10', 'Egypt', 'Others', 100, 2, 'no', '50443_98.jpg', '41791_98.jpg', '51383_98.jpg', '95017_98.jpg'),
(11, 'Islamic Educational Center – Ismailia', 'The project occupies 130 acres and comprises an administration building, function room, library building, auditorium lecture hall, computer center, Radio and TV station, retails, a mosque of an outstanding architectural appearance, schools, hotels, swimming-pool, medical center, together with all associated green areas infrastructure.\r\n\r\n', '2018-10-10', 'Egypt', 'Others', 100, 2, 'no', '38705_Islamic-Educational-Center-2.jpg', '89135_Islamic-Educational-Center-1.jpg', '64088_Islamic-Educational-Center-0.jpg', '19883_Islamic-Educational-Center-2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `project_d`
--

DROP TABLE IF EXISTS `project_d`;
CREATE TABLE IF NOT EXISTS `project_d` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `p_name` varchar(255) NOT NULL,
  `p_desc` text NOT NULL,
  `add_date` date NOT NULL,
  `location` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `generalp` int(11) NOT NULL,
  `id_cat` int(11) NOT NULL,
  `highlight` varchar(255) NOT NULL,
  `p_image` varchar(255) NOT NULL,
  `p_image2` varchar(255) NOT NULL,
  `p_image3` varchar(255) NOT NULL,
  `p_image4` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `cat_1` (`id_cat`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `project_d`
--

INSERT INTO `project_d` (`ID`, `p_name`, `p_desc`, `add_date`, `location`, `type`, `generalp`, `id_cat`, `highlight`, `p_image`, `p_image2`, `p_image3`, `p_image4`) VALUES
(1, 'The Courtyard', 'A contemporary state of the art business hub located in the heart of Sheikh Zayed city that will redefine the concept of administrative and commercial venues in Egypt.\r\n\r\nThe Courtyard is located within a premium commercial zone at the Sheikh Zayed city, ', '2018-10-03', 'Egypt', 'Real Estate Investment', 100, 2, 'no', '51072_03-Logo-cam-1024x575.jpg', '16024_17-Retail-A_R5.jpg', '41199_06-Court-D-Entrance_R5.jpg', '42860_Global-A-03-1024x688.jpg'),
(2, 'Al-Boustan Commercial Center Down Town', 'A multi-purpose building comprising 11 storeys; the first 4 storeys comprise a commercial center and parking areas with a capacity of parking 940 cars till the 8th floor in addition to 2 storeys for office facility. The pre-pressed concrete system, manufa', '2018-10-03', 'Egypt', 'Real Estate Investment', 100, 2, 'no', '68464_Bigf04b9217-83b9-485d-af9e-aa5e2ef6fd12.jpg', '99828_Bigf04b9217-83b9-485d-af9e-aa5e2ef6fd12.jpg', '68632_Bigf04b9217-83b9-485d-af9e-aa5e2ef6fd12.jpg', '49680_Bigf04b9217-83b9-485d-af9e-aa5e2ef6fd12.jpg'),
(3, 'Dorra Tower, Mohandesseen', 'A Commercial and administration tower of a ground floor, 4 floor commercial center and 17 storeys of office facility\r\n\r\n', '2018-10-03', 'Egypt', 'Real Estate Investment', 100, 2, 'no', '90813_Bigb6b773d3-b385-40c7-b4aa-d1c799350746-600x523 (1).jpg', '47071_Bigb6b773d3-b385-40c7-b4aa-d1c799350746-600x523 (1).jpg', '6177_Bigb6b773d3-b385-40c7-b4aa-d1c799350746-600x523 (1).jpg', '29615_Bigb6b773d3-b385-40c7-b4aa-d1c799350746-600x523 (1).jpg'),
(4, 'Capital Business Park', 'A timeless architectural feat set within the West of Cairo’s most vibrant and demographically growing suburb.\r\n\r\nCapital Business Park has delivered on its promise of providing the corporate community the practicality; space design, grandiosity as well as', '2018-10-03', 'Egypt', 'Administrative Buildings', 100, 2, 'no', '85778_01-global_031.jpg', '15103_02_zayed_entrance_night_11.jpg', '72253_18_A-115540.jpg', '17037_37_B-114946_03.jpg'),
(5, 'Palma Sharm', 'Palma Sharm', '2018-10-03', 'Egypt', '', 100, 3, 'no', '38052_Big3ecf9d35-bb2c-4ec2-9494-ac95784f3082.jpg', '29061_Big3ecf9d35-bb2c-4ec2-9494-ac95784f3082.jpg', '85518_Big3ecf9d35-bb2c-4ec2-9494-ac95784f3082.jpg', '98697_Big3ecf9d35-bb2c-4ec2-9494-ac95784f3082.jpg'),
(6, 'Al Mostakbal', 'Commercial Components:\r\nMain spine will contain:\r\nPrimary-Secondary School\r\nShopping Mall and retail outlets\r\nG+3 office buildings\r\nLandscaped common areas for recreational usage\r\nMaintenance and service hubs\r\nMosque for community prayers\r\n\r\nTotal area- 2', '2018-10-03', 'Egypt', '', 100, 3, 'no', '27449_Big2c45c445-4221-4ad8-b518-f144565f461c.jpg', '35914_Big2c45c445-4221-4ad8-b518-f144565f461c.jpg', '82466_Big2c45c445-4221-4ad8-b518-f144565f461c.jpg', '27285_Big2c45c445-4221-4ad8-b518-f144565f461c.jpg'),
(8, 'The Villa', 'The Villa\r\n\r\n', '2018-10-03', 'Egypt', '', 100, 3, 'no', '57446_Bigab92ed1c-eb82-423f-91f2-04e4349fb824.jpg', '56949_Bigab92ed1c-eb82-423f-91f2-04e4349fb824.jpg', '79884_Bigab92ed1c-eb82-423f-91f2-04e4349fb824.jpg', '36029_Bigab92ed1c-eb82-423f-91f2-04e4349fb824.jpg'),
(9, 'Greens', 'Greens', '2018-10-03', 'Egypt', '', 100, 3, 'no', '46591_Big0b926aa6-ff32-4c3f-83fe-eb078a855908.jpg', '32063_Big0b926aa6-ff32-4c3f-83fe-eb078a855908.jpg', '11430_Big0b926aa6-ff32-4c3f-83fe-eb078a855908.jpg', '27204_Big0b926aa6-ff32-4c3f-83fe-eb078a855908.jpg'),
(10, 'Zayed Heights', 'Zayed Heights\r\n\r\n', '2018-10-03', 'Egypt', '', 100, 3, 'no', '72633_Bigc81c89b2-2abb-4d75-803b-88d0d6e58327.jpg', '96121_Bigc81c89b2-2abb-4d75-803b-88d0d6e58327.jpg', '57774_Bigc81c89b2-2abb-4d75-803b-88d0d6e58327.jpg', '41828_Bigc81c89b2-2abb-4d75-803b-88d0d6e58327.jpg'),
(11, 'Hadayek Al Mohandessin', 'A Residential Complex located in Sheikh Zaied; 10 minutes from Lebanon Square in Mohandesseen on a total area of 100 fedan. The Project consists of residential villas and buildings with different space areas. The apartments range between 82 sqm and 260 sq', '2018-10-03', 'Egypt', '', 100, 3, 'no', '6119_Biga2c386a9-aec2-47bd-8f20-b6773b9da7aa.jpg', '47955_Biga2c386a9-aec2-47bd-8f20-b6773b9da7aa.jpg', '78960_Biga2c386a9-aec2-47bd-8f20-b6773b9da7aa.jpg', '8452_Biga2c386a9-aec2-47bd-8f20-b6773b9da7aa.jpg'),
(12, 'Town House', 'Zaied 2000 Townhouse project is located in Sheikh Zaied city and consists of 121 villas townhouse model (T) each with area of 260 sqm built on land areas ranging from 275 sqm to 499 sqm. In addition to a limited number of separate villas model (S) each wi', '2018-10-03', 'Egypt', '', 100, 3, 'no', '55425_Big5616ac9c-4162-42f1-953e-8baeae4dc45e.jpg', '62646_Big5616ac9c-4162-42f1-953e-8baeae4dc45e.jpg', '19630_Big5616ac9c-4162-42f1-953e-8baeae4dc45e.jpg', '24323_Big5616ac9c-4162-42f1-953e-8baeae4dc45e.jpg'),
(13, 'Zayed Residence', 'A part of Zaied 2000 project is Zaied Residance, located in Sheikh Zaied it consists of 24 buildings with unique architectural design. The apartments range between 190 sqm and 230 sqm, every building comprises of a ground floor, 4 repetitive floors and el', '2018-10-03', 'Egypt', '', 100, 3, 'no', '48607_Big348ad13b-0846-437c-9f4d-6ede79eb6ba1.jpg', '70220_Big348ad13b-0846-437c-9f4d-6ede79eb6ba1.jpg', '45112_Big348ad13b-0846-437c-9f4d-6ede79eb6ba1.jpg', '37562_Big348ad13b-0846-437c-9f4d-6ede79eb6ba1.jpg'),
(14, 'Zaied 2000', 'Zaied 2000, is one of the CDC projects located in Sheikh Zaied on a total area of 100 fedan. 10 minutes from Lebanon square, the project consists of 107 villas each with a private garden and parking area in addition to the various green areas. The villas ', '2018-10-03', 'Egypt', '', 100, 3, 'no', '54792_Big021d116b-e170-4c24-b7cb-2f7e7fe01dbd (1).jpg', '49248_Bigbcd3d44d-cde7-4f9e-b4f8-492a2ae4ebba.jpg', '70896_Big9ee689b7-098d-482f-92f3-68ac6b3a3d72.jpg', '31418_Big021d116b-e170-4c24-b7cb-2f7e7fe01dbd (1).jpg'),
(15, 'Al Shorouk 2000', 'Owned by the CDC, a member of Dorra Group of Companies, the project is a residential complex built, on a total area of 1,100,000 sqm on the Cairo / Ismailia desert road. The project consists of more than ten different villa models totalling 283 villas. In', '2018-10-03', 'Egypt', '', 100, 3, 'no', '29396_Big36a0865d-5965-4ed1-a328-14c15a8053091.jpg', '44038_Big36a0865d-5965-4ed1-a328-14c15a8053091.jpg', '37078_Big36a0865d-5965-4ed1-a328-14c15a8053091.jpg', '98360_Big36a0865d-5965-4ed1-a328-14c15a8053091.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `project_highlight`
--

DROP TABLE IF EXISTS `project_highlight`;
CREATE TABLE IF NOT EXISTS `project_highlight` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `p_name` varchar(255) NOT NULL,
  `p_desc` text NOT NULL,
  `add_date` date NOT NULL,
  `location` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `generalp` int(11) NOT NULL,
  `id_cat` int(11) NOT NULL,
  `highlight` varchar(255) NOT NULL,
  `p_image` varchar(255) NOT NULL,
  `p_image2` varchar(255) NOT NULL,
  `p_image3` varchar(255) NOT NULL,
  `p_image4` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `project_i`
--

DROP TABLE IF EXISTS `project_i`;
CREATE TABLE IF NOT EXISTS `project_i` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `p_name` varchar(255) NOT NULL,
  `p_desc` text NOT NULL,
  `add_date` date NOT NULL,
  `location` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `generalp` int(11) NOT NULL,
  `id_cat` int(11) NOT NULL,
  `highlight` varchar(255) NOT NULL,
  `p_image` varchar(255) NOT NULL,
  `p_image2` varchar(255) NOT NULL,
  `p_image3` varchar(255) NOT NULL,
  `p_image4` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `cat_2` (`id_cat`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

DROP TABLE IF EXISTS `testimonial`;
CREATE TABLE IF NOT EXISTS `testimonial` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `test_name` varchar(255) NOT NULL,
  `test_position` varchar(255) NOT NULL,
  `test_text` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `UID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `Date` date NOT NULL,
  PRIMARY KEY (`UID`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UID`, `name`, `password`, `email`, `type`, `Date`) VALUES
(2, 'amr', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'devil3mr@gmail.com', 'manager', '2018-08-12'),
(6, 'amr2', 'ff28cccb3dc379d2dbc18d94136fbecc95b58bd0', 'amr_lotfy2012@yahoo.com', 'developments', '2018-09-06'),
(7, 'amrc', 'ff28cccb3dc379d2dbc18d94136fbecc95b58bd0', 'ahmed@ahmed.com', 'contracting', '2018-09-11'),
(8, 'amri', 'ff28cccb3dc379d2dbc18d94136fbecc95b58bd0', 'ahmed@ahmed.com', 'interios', '2018-09-11'),
(9, 'nasser', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'm@m.com', 'developments', '2018-10-10'),
(10, 'nasserc', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'm@m.com', 'contracting', '2018-10-10'),
(11, 'nasseri', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'm@m.com', 'interios', '2018-10-10'),
(13, 'nasserm', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'm@m', 'manager', '2018-10-10');

-- --------------------------------------------------------

--
-- Table structure for table `who`
--

DROP TABLE IF EXISTS `who`;
CREATE TABLE IF NOT EXISTS `who` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `text` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `project_c`
--
ALTER TABLE `project_c`
  ADD CONSTRAINT `cat_3` FOREIGN KEY (`id_cat`) REFERENCES `category` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `project_d`
--
ALTER TABLE `project_d`
  ADD CONSTRAINT `cat_1` FOREIGN KEY (`id_cat`) REFERENCES `category` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `project_i`
--
ALTER TABLE `project_i`
  ADD CONSTRAINT `cat_2` FOREIGN KEY (`id_cat`) REFERENCES `category` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
