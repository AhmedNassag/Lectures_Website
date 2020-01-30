-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2020 at 03:28 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lectures`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` longtext NOT NULL,
  `subtitle` varchar(100) NOT NULL,
  `subdescription` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `title`, `description`, `subtitle`, `subdescription`) VALUES
(1, 'About Us', 'An About Us page helps your company make a good first impression, and is critical for building customer trust and loyalty. An About Us page should make sure to cover basic information about the store and its founders, explain the company is purpose and how it differs from the competition, and encourage discussion and interaction. Here are some free templates, samples, and example About Us pages to help your ecommerce store stand out from the crowd.When it comes to personalizing your online store, nothing is more effective than an About Us page. This is a quick summary of your company is history and purpose, and should provide a clear overview of the company is brand story. A great About Us page can help tell your brand story, establish customer loyalty, and turn your bland ecommerce store into an well-loved brand icon. Most importantly, it will give your customers a reason to shop from your brand.In this post, we will give you three different ways to create a professional about us page for your online store, blog, or other website - use our about us page generator, use the fill-in-the-blank about us template below, or create your own custom page using the about us examples within this article.', 'We Are Happy To Work With You', 'if you decide to make any work that you need so we are sure that you can not find any team better than us to trust them and be calm because you know that we will do best thing for you');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` longtext NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `title`, `description`, `address`, `email`, `link`, `phone`) VALUES
(1, 'Contact Us', 'Contact us pages. Everyone has them, needs them, but are you really paying attention to the strategy behind them?\r\n						It is true is not it? One of the most valuable pages on your website is usually an afterthought.\r\n						It is one of those things that has to be there, but often enough, you throw the necessary information on and leave it at that.\r\n						What a waste!\r\n						The page name itself is a call-to-action; Treat it with some respect.\r\n						Contact us pages are often the go-to for a new visitor on a mission. It is where they go when they have a question and truly want to speak to an individual at your organization.\r\n						They exist to serve the user with the purpose of providing the user with information on how they can get in touch with you.\r\n						The goal of every contact us page is to convert by clearly and effectively presenting the method(s) of getting in touch with a company as quickly as possible.\r\n						Here are a few best practices that you should keep in mind when putting together your next contact us page.', 'Helwan,Egypt', 'ahmednassag@gmail.com', 'https://www.facebook.com/ahmednassag', '01016856433');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_id` int(100) NOT NULL,
  `year_id` int(100) NOT NULL,
  `course_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `year_id`, `course_name`) VALUES
(1, 1, 'Math'),
(2, 1, 'Chemistry'),
(3, 1, 'Physics'),
(4, 1, 'Programming'),
(5, 2, 'Algebra'),
(6, 2, 'Atomic Physics'),
(7, 2, 'Electromagnetic'),
(8, 2, 'Electron Optics'),
(9, 2, 'Introduction Of Computer Science'),
(10, 2, 'Introduction Of Programming'),
(11, 2, 'Mathematical Analysis'),
(12, 2, 'Thermodynamics'),
(13, 3, 'Algorithm'),
(14, 3, 'Complex Analysis'),
(15, 3, 'Computer Architecture'),
(16, 3, 'Data Structure'),
(17, 3, 'Operating System'),
(18, 3, 'Order Of Statistics'),
(19, 3, 'Probability And Statistics'),
(20, 3, 'Programming'),
(21, 3, 'Time Series'),
(22, 4, 'Compiler'),
(23, 4, 'Image Processing'),
(24, 4, 'Network'),
(25, 4, 'Numerical Analysis'),
(26, 4, 'Regression Analysis'),
(27, 4, 'Sampling Basics & Experimental Design'),
(28, 4, 'Theory Of Computation');

-- --------------------------------------------------------

--
-- Table structure for table `materials`
--

CREATE TABLE `materials` (
  `material_id` int(100) NOT NULL,
  `course_id` int(100) NOT NULL,
  `lec_num` varchar(100) NOT NULL,
  `content` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `materials`
--

INSERT INTO `materials` (`material_id`, `course_id`, `lec_num`, `content`) VALUES
(1, 5, 'lec 1', 'Abo Trika.jpg'),
(6, 6, 'lec 1', 'Ahly Logo.jpg'),
(7, 7, 'lec 1', 'IMG-20160923-WA0000.jpg'),
(8, 8, 'lec 1', 'IMG-20160923-WA0001.jpg'),
(9, 9, 'lec 1', 'IMG-20160923-WA0002.jpg'),
(10, 10, 'lec 1', 'IMG-20160923-WA0003.jpg'),
(11, 11, 'lec 1', 'IMG-20160923-WA0004.jpg'),
(12, 12, 'lec 1', 'IMG-20160923-WA0006.jpg'),
(13, 13, 'lec 1', 'IMG-20160923-WA0007.jpg'),
(14, 14, 'lec 1', 'IMG-20160923-WA0008.jpg'),
(15, 15, 'lec 1', 'IMG-20160923-WA0009.jpg'),
(16, 16, 'lec 1', 'IMG-20160923-WA0010.jpg'),
(17, 17, 'lec 1', 'IMG-20160923-WA0011.jpg'),
(18, 18, 'lec 1', 'IMG-20161215-WA0031.jpg'),
(19, 19, 'lec 1', 'IMG-20161215-WA0032.jpg'),
(20, 20, 'lec 1', 'IMG-20161215-WA0033.jpg'),
(21, 21, 'lec 1', 'IMG-20161215-WA0034.jpg'),
(22, 23, '', 'IMG-20161215-WA0036.jpg'),
(23, 22, 'lec 1', 'IMG-20161215-WA0045.jpg'),
(24, 24, 'lec 1', 'IMG-20161215-WA0041.jpg'),
(25, 25, 'lec 1', 'IMG-20161215-WA0037.jpg'),
(26, 26, 'lec 1', 'IMG-20161215-WA0052.jpg'),
(27, 27, 'lec 1', 'IMG-20161215-WA0050.jpg'),
(28, 28, 'lec 1', 'IMG-20161215-WA0047.jpg'),
(29, 5, 'lec 2', 'IMG-20161215-WA0046.jpg'),
(30, 1, 'lec 2', 'Ù†2.pdf'),
(31, 2, 'lec 1', 'Ù„Ù…Ø§ ØªØ´ÙˆÙ Ø¬Ø¯ÙˆÙ„ Ø§Ù„ÙØ§ÙŠÙ†Ø§Ù„ Ù†Ø²Ù„.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `usertype` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `fname`, `lname`, `email`, `password`, `usertype`) VALUES
(1, 'Ahmed', 'Nabil', 'ahmednassag@gmail.com', '0101685643320111993', 'admin'),
(2, 'Marwa', 'Ahmed', 'marwaahmed@gmail.com', '181993', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `years`
--

CREATE TABLE `years` (
  `year_id` int(100) NOT NULL,
  `year_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `years`
--

INSERT INTO `years` (`year_id`, `year_name`) VALUES
(1, 'First'),
(2, 'Second'),
(3, 'Third'),
(4, 'Forth');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `materials`
--
ALTER TABLE `materials`
  ADD PRIMARY KEY (`material_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `years`
--
ALTER TABLE `years`
  ADD PRIMARY KEY (`year_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `course_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `materials`
--
ALTER TABLE `materials`
  MODIFY `material_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `years`
--
ALTER TABLE `years`
  MODIFY `year_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
