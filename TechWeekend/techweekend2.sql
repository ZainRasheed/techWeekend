-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2018 at 06:49 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `techweekend2`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(30) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `cid` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` varchar(255) NOT NULL,
  `answer` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`cid`, `name`, `email`, `subject`, `message`, `answer`) VALUES
(1, 'zain', 'rasheedulla96@fmail.com', 'test', 'testing', 'ok'),
(2, 'xain', 'xain@xain.com', 'test2', 'testing testing', '---ignored---'),
(3, 'Sanjana', 'sanjana@fametronix.in', 'xyz', 'xyz', 'xyz');

-- --------------------------------------------------------

--
-- Table structure for table `fusion`
--

CREATE TABLE `fusion` (
  `fid` int(30) NOT NULL,
  `imgpath` varchar(255) DEFAULT NULL,
  `para` text,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fusion`
--

INSERT INTO `fusion` (`fid`, `imgpath`, `para`, `type`) VALUES
(3, 'go.png', 'Tech Weekend is here', 'aboutbrief'),
(8, 'untitled.png', NULL, 'gallery'),
(11, 'IMG_7462.JPG', NULL, 'gallery'),
(12, 'wood.jpeg', NULL, 'gallery'),
(22, 'IMG_7462.JPG', NULL, 'gallery'),
(24, 'PIXECT-20181018010210.jpg', NULL, 'gallery'),
(25, 'headbg.jpg', NULL, 'gallery'),
(32, 'Logo.png', 'It\'s happening', 'banner'),
(34, NULL, 'Tech weekend is one of the best Hands-on workshop inclusive of Key Notes. It is a place to Learn, Explore the most advanced, updated technology and Connect with the various companies and a place to prsent your own work and projects. The wait ends here! Teck weekend 2018', 'about'),
(35, 'download.png', 'Most diverse developer conference The crucial part of distinction is to keep increasing your horizons Ã¢â‚¬â€œ to learn new things, talk to new people and explore. Begin your survey with us, as we offer you 20+ technologies and over 30 hands-on workshops across engineering and medical streams of technological development.', 'blog'),
(37, 'images.jpg', 'Experts straight from the industry-of-tech It is known fact that technology is advancing at an unparalleled pace. Interact with the techies who push the boundaries and pay attention as they discuss the path to the future. With professionals you will fall short on time as they mesmerize you.', 'blog');

-- --------------------------------------------------------

--
-- Table structure for table `keynote`
--

CREATE TABLE `keynote` (
  `kid` int(30) NOT NULL,
  `spkid` int(30) NOT NULL,
  `title` varchar(255) NOT NULL,
  `stime` varchar(255) NOT NULL,
  `etime` varchar(255) NOT NULL,
  `vid` int(30) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keynote`
--

INSERT INTO `keynote` (`kid`, `spkid`, `title`, `stime`, `etime`, `vid`, `type`) VALUES
(1, 1, 'Debate', '06:03', '06:03', 1, 'keynotes'),
(2, 2, 'Debate', '06:03', '06:03', 1, 'keynotes'),
(3, 2, 'Hello', '18:13', '18:14', 1, 'workshop'),
(4, 1, 'Why Immersive tech need AI', '06:04', '06:20', 1, 'keynotes'),
(5, 2, 'Interactive design with ADOBE', '18:15', '19:00', 1, 'Workshop'),
(6, 7, 'Interactive design with ADOBE', '18:15', '19:00', 1, 'Workshop'),
(7, 1, 'Codifying Design', '19:00', '22:00', 1, 'workshop');

-- --------------------------------------------------------

--
-- Table structure for table `mix`
--

CREATE TABLE `mix` (
  `sid` int(30) NOT NULL,
  `imgpath` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mix`
--

INSERT INTO `mix` (`sid`, `imgpath`, `name`, `contact`, `email`, `link`, `type`) VALUES
(1, 'rex_logo.png', 'Rex Cyber Solutions', '9874563214', 'yup@xyz.com', 'https://www.google.com/', 'sponsors'),
(2, 'famelogo.png', 'Fame Technologies', '9874563214', 'fame@gmail.com', 'https://www.google.com/', 'partners'),
(3, 'go.png', 'Google', '9874563215', 'sanj@gmail.com', 'https://www.google.com/', 'partners'),
(4, 'sjcc.jpg', 'SJCC', '9874562145', 'ragi@gmail.com', 'https://www.facebook.com/', 'sponsors'),
(5, 'download.jpg', 'test', '7894561320', 'rasheedulla97@gmail.com', 'test.com', 'sponsors'),
(8, 'images.jpg', 'test', '7894561230', 'rash@mail.com', 'www.seethis.com', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `rid` int(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `org` varchar(255) DEFAULT NULL,
  `contact` bigint(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`rid`, `name`, `org`, `contact`, `email`) VALUES
(1, 'xain', 'XING', 1234567890, 'rasheedulla97@gmail.com'),
(2, 'qqq', 'qqq', 2315648790, 'a@f.m'),
(3, 'qwe', 'qazxswedc', 1234567890, 'qwe@qwe.qwe'),
(4, 'rasheed', 'ABinBev', 1234567890, 'zani@gmail.com'),
(5, 'Sanjana', 'xyz', 98745621321, 'sanjana@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`id`, `name`) VALUES
(2, 'partners'),
(3, 'sponsors'),
(1, 'test');

-- --------------------------------------------------------

--
-- Table structure for table `speakers`
--

CREATE TABLE `speakers` (
  `spkid` int(30) NOT NULL,
  `name` varchar(255) NOT NULL,
  `desig` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `imgpath` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `speakers`
--

INSERT INTO `speakers` (`spkid`, `name`, `desig`, `company`, `link`, `imgpath`) VALUES
(1, 'Nelson Vasanth J', 'Founder & CEO', 'Fame Technologies', 'https://www.linkedin.com/in/nelson-vasanth-j-769827105/', 'nelson.jpg'),
(2, 'Anand BR', 'Co-founder & CSO', 'Ecoprosus India Private Limited', 'https://www.linkedin.com/in/anandbr', 'anand.jpg'),
(6, 'Karthikeyan', 'Director of engineering', 'Walmart', 'https://www.linkedin.com/in/karthikkumaraguru/', 'karthikeyan.jpg'),
(7, 'Rex', 'Designation', 'XYZ company', 'https://www.linkedin.com/in/rex-aantonny-298b8b59/', 'rex.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `techday`
--

CREATE TABLE `techday` (
  `tid` int(30) NOT NULL,
  `sdate` varchar(255) NOT NULL,
  `edate` varchar(255) NOT NULL,
  `stime` varchar(255) NOT NULL,
  `etime` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `latitude` decimal(10,8) NOT NULL,
  `longitude` decimal(11,8) NOT NULL,
  `imgpath` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `techday`
--

INSERT INTO `techday` (`tid`, `sdate`, `edate`, `stime`, `etime`, `address`, `latitude`, `longitude`, `imgpath`, `location`) VALUES
(2, '2019-12-14', '2019-12-15', '10:30', '18:30', '1/2, Swami Vivekananda Road Opp. Taj Viventa, Trinity Circle, Ulsoor, Bengaluru, Karnataka 560001', '12.97360000', '77.62030200', 'mg.jpg', '1 MG MALL');

-- --------------------------------------------------------

--
-- Table structure for table `venue`
--

CREATE TABLE `venue` (
  `vid` int(30) NOT NULL,
  `audi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `venue`
--

INSERT INTO `venue` (`vid`, `audi`) VALUES
(1, 'Venue 1');

-- --------------------------------------------------------

--
-- Table structure for table `workshop`
--

CREATE TABLE `workshop` (
  `wid` int(30) NOT NULL,
  `des` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `org` varchar(255) DEFAULT NULL,
  `topic` varchar(255) NOT NULL,
  `time` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `status` int(2) DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `workshop`
--

INSERT INTO `workshop` (`wid`, `des`, `name`, `contact`, `email`, `org`, `topic`, `time`, `date`, `status`) VALUES
(2, 'qweqwewqeqwe', 'xain', '798462130', 'rasheedulla97@gmail.com', 'asdzxc', 'qwe', '00:12', '2018-11-08', 0),
(3, 'kjhgfd', 'Sanjana', '9964808104', 'sanjana@fametronix.com', 'xyz', 'xzy', '04:34', '2018-11-20', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `fusion`
--
ALTER TABLE `fusion`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `keynote`
--
ALTER TABLE `keynote`
  ADD PRIMARY KEY (`kid`),
  ADD KEY `vid` (`vid`),
  ADD KEY `spkid` (`spkid`);

--
-- Indexes for table `mix`
--
ALTER TABLE `mix`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `speakers`
--
ALTER TABLE `speakers`
  ADD PRIMARY KEY (`spkid`);

--
-- Indexes for table `techday`
--
ALTER TABLE `techday`
  ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `venue`
--
ALTER TABLE `venue`
  ADD PRIMARY KEY (`vid`);

--
-- Indexes for table `workshop`
--
ALTER TABLE `workshop`
  ADD PRIMARY KEY (`wid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `cid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `fusion`
--
ALTER TABLE `fusion`
  MODIFY `fid` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `keynote`
--
ALTER TABLE `keynote`
  MODIFY `kid` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `mix`
--
ALTER TABLE `mix`
  MODIFY `sid` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `rid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `speakers`
--
ALTER TABLE `speakers`
  MODIFY `spkid` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `techday`
--
ALTER TABLE `techday`
  MODIFY `tid` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `venue`
--
ALTER TABLE `venue`
  MODIFY `vid` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `workshop`
--
ALTER TABLE `workshop`
  MODIFY `wid` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `keynote`
--
ALTER TABLE `keynote`
  ADD CONSTRAINT `keynote_ibfk_1` FOREIGN KEY (`vid`) REFERENCES `venue` (`vid`),
  ADD CONSTRAINT `keynote_ibfk_2` FOREIGN KEY (`spkid`) REFERENCES `speakers` (`spkid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
