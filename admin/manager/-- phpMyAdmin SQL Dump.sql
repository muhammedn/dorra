-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Sep 12, 2018 at 03:03 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `dorra`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `ID` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`ID`, `cat_name`) VALUES
(1, 'new category');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `ID` int(11) NOT NULL,
  `info_name` varchar(255) NOT NULL,
  `info_desc` varchar(255) NOT NULL,
  `info_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`ID`, `info_name`, `info_desc`, `info_image`) VALUES
(7, 'dasfg', 'wwwsssss', '40062128_168733393972512_2267018764010651648_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `project_c`
--

CREATE TABLE `project_c` (
  `ID` int(11) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `p_desc` varchar(255) NOT NULL,
  `add_date` date NOT NULL,
  `location` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `generalp` int(11) NOT NULL,
  `id_cat` int(11) NOT NULL,
  `highlight` varchar(255) NOT NULL,
  `p_image` varchar(255) NOT NULL,
  `p_image2` varchar(255) NOT NULL,
  `p_image3` varchar(255) NOT NULL,
  `p_image4` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `project_d`
--

CREATE TABLE `project_d` (
  `ID` int(11) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `p_desc` varchar(255) NOT NULL,
  `add_date` date NOT NULL,
  `location` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `generalp` int(11) NOT NULL,
  `id_cat` int(11) NOT NULL,
  `highlight` varchar(255) NOT NULL,
  `p_image` varchar(255) NOT NULL,
  `p_image2` varchar(255) NOT NULL,
  `p_image3` varchar(255) NOT NULL,
  `p_image4` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `project_d`
--

INSERT INTO `project_d` (`ID`, `p_name`, `p_desc`, `add_date`, `location`, `type`, `generalp`, `id_cat`, `highlight`, `p_image`, `p_image2`, `p_image3`, `p_image4`) VALUES
(1, 'first project', 'first projectfirst projectfirst projectfirst projectfirst project', '2018-09-12', 'egypt', 'real estate', 80, 1, 'no', '35722_40444577_255191338461715_839007992824201216_n.png', '44227_40444577_255191338461715_839007992824201216_n.png', '58577_40444577_255191338461715_839007992824201216_n.png', '97218_40444577_255191338461715_839007992824201216_n.png');

-- --------------------------------------------------------

--
-- Table structure for table `project_highlight`
--

CREATE TABLE `project_highlight` (
  `ID` int(11) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `p_desc` varchar(255) NOT NULL,
  `add_date` date NOT NULL,
  `location` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `generalp` int(11) NOT NULL,
  `highlight` varchar(255) NOT NULL,
  `p_image` varchar(255) NOT NULL,
  `p_image2` varchar(255) NOT NULL,
  `p_image3` varchar(255) NOT NULL,
  `p_image4` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `project_highlight`
--

INSERT INTO `project_highlight` (`ID`, `p_name`, `p_desc`, `add_date`, `location`, `type`, `generalp`, `highlight`, `p_image`, `p_image2`, `p_image3`, `p_image4`) VALUES
(3, 'first project', ' Second one  Second one  Second one ', '2018-09-02', 'egypt', '', 0, 'yes', '25317_1.jpg', '34769_40560590_1098539753642919_8837372841948086272_n.jpg', '40560590_1098539753642919_8837372841948086272_n.jpg', '88596_40560590_1098539753642919_8837372841948086272_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `project_i`
--

CREATE TABLE `project_i` (
  `ID` int(11) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `p_desc` varchar(255) NOT NULL,
  `add_date` date NOT NULL,
  `location` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `generalp` int(11) NOT NULL,
  `id_cat` int(11) NOT NULL,
  `highlight` varchar(255) NOT NULL,
  `p_image` varchar(255) NOT NULL,
  `p_image2` varchar(255) NOT NULL,
  `p_image3` varchar(255) NOT NULL,
  `p_image4` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `ID` int(11) NOT NULL,
  `test_name` varchar(255) NOT NULL,
  `test_position` varchar(255) NOT NULL,
  `test_text` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`ID`, `test_name`, `test_position`, `test_text`) VALUES
(1, 'amr lotfy', 'Web Developer', 'my name is amr lotfy'),
(3, 'dfffcsss', 'sadasdas', 'ccssssd');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UID`, `name`, `password`, `email`, `type`, `Date`) VALUES
(2, 'amr', 'b2ee60370ad57d9bc3877e9024c507ab99303a64', 'devil3mr@gmail.com', 'super', '2018-08-12'),
(6, 'amr2', 'ff28cccb3dc379d2dbc18d94136fbecc95b58bd0', 'amr_lotfy2012@yahoo.com', 'developments', '2018-09-06'),
(7, 'amrc', 'ff28cccb3dc379d2dbc18d94136fbecc95b58bd0', 'ahmed@ahmed.com', 'contracting', '2018-09-11'),
(8, 'amri', 'ff28cccb3dc379d2dbc18d94136fbecc95b58bd0', 'ahmed@ahmed.com', 'interios', '2018-09-11');

-- --------------------------------------------------------

--
-- Table structure for table `who`
--

CREATE TABLE `who` (
  `ID` int(11) NOT NULL,
  `text` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `project_c`
--
ALTER TABLE `project_c`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `cat_3` (`id_cat`);

--
-- Indexes for table `project_d`
--
ALTER TABLE `project_d`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `cat_1` (`id_cat`);

--
-- Indexes for table `project_highlight`
--
ALTER TABLE `project_highlight`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `project_i`
--
ALTER TABLE `project_i`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `cat_2` (`id_cat`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UID`);

--
-- Indexes for table `who`
--
ALTER TABLE `who`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `project_c`
--
ALTER TABLE `project_c`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `project_d`
--
ALTER TABLE `project_d`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `project_highlight`
--
ALTER TABLE `project_highlight`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `project_i`
--
ALTER TABLE `project_i`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `who`
--
ALTER TABLE `who`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
