-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 16, 2023 at 09:09 AM
-- Server version: 8.0.30
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `paulroll_netmatters`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int NOT NULL,
  `name` tinytext NOT NULL,
  `company` tinytext NOT NULL,
  `email` tinytext NOT NULL,
  `phone` varchar(12) NOT NULL,
  `subject` tinytext NOT NULL,
  `message` text NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `company`, `email`, `phone`, `subject`, `message`, `datetime`) VALUES
(49, 'Your name', 'Company name', 'email@address.com', '01692000000', 'Subject', 'Message', '2023-01-13 14:53:26'),
(50, 'Jamie cosham', 'Mr jamie cosham', 'j.a.e.cosham@gmail.com', '07723354822', 'Test', 'testtesttesttesttesttesttesttesttesttesttesttest', '2023-01-13 15:33:27'),
(51, 'Name goes here', '', 'foo@bar.xx', '01234543123', 'Sooobject', 'mooosarge', '2023-01-13 18:28:11'),
(52, 'Tamas', 'Varga', 'vargatam@yahoo.com', '07868517308', 'Test', 'This is a test message', '2023-01-15 06:56:15'),
(53, 'Test', '', 'test@test.test', '00000000000', 'Test', '&#38;lt;script&#38;gt;alert(&#38;#39;1&#38;#39;);&#38;lt;/script&#38;gt;', '2023-01-16 07:15:07'),
(54, 'Test', '', 'test@test.test', '00000000000', 'Test', '&#60;script&#62;alert(0)&#60;/script&#62;&#13;&#10;&#39;; EXEC sp_MSForEachTable &#39;DROP TABLE ?&#39;; --&#13;&#10;&#39; OR &#39;1&#39;=&#39;1&#13;&#10;&#39; OR 1=1 -- 1&#13;&#10;1&#39;; DROP TABLE contact -- 1&#13;&#10;1;DROP TABLE contact', '2023-01-16 07:17:37'),
(55, 'Asdasd', '', 'asdasd@asd.com', '07479879607', 'Asdasd', 'asdasd', '2023-01-16 08:38:22'),
(56, 'Mark jason acab', 'Netmatters scsb', 'chiefofstack@gmail.com', '07479879607', 'Test number two', 'This is my second test', '2023-01-16 08:40:46'),
(57, 'Name test', '', 'email@test.xx', '88888888888', '12345 subject with numbers', 'Message', '2023-01-16 09:08:41');

-- --------------------------------------------------------

--
-- Table structure for table `marketing`
--

CREATE TABLE `marketing` (
  `id` int NOT NULL,
  `name` tinytext NOT NULL,
  `email` tinytext NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `marketing`
--

INSERT INTO `marketing` (`id`, `name`, `email`, `datetime`) VALUES
(2, 'Your name', 'email@address.com', '2023-01-13 14:53:26'),
(3, 'Newsletter', 'yet@another.email', '2023-01-13 16:41:30'),
(4, 'Tamas', 'vargatam@yahoo.com', '2023-01-15 06:56:15'),
(5, 'Asdasd', 'asdasd@asd.com', '2023-01-16 08:38:22'),
(6, 'Mark jason acab', 'chiefofstack@gmail.com', '2023-01-16 08:40:46'),
(7, 'Name test', 'email@test.xx', '2023-01-16 09:08:41');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int NOT NULL,
  `title` tinytext NOT NULL,
  `description` text NOT NULL,
  `author` tinytext NOT NULL,
  `date` date NOT NULL,
  `class` varchar(17) NOT NULL,
  `tag` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `author`, `date`, `class`, `tag`) VALUES
(1, 'October Notables 2022', 'Each month, various departments recognise those employees who have excelled in their work and helped Netmatters deliver excellent service to our clients. Our T.R.U.E values are how we started as a company, and we continue to strive to uphold these values as we grow. October was another busy month for Netmatters, with some great contributions from team members along the way.', 'Netmatters', '2022-11-10', 'web-design', 'News'),
(2, 'Tourism & Leisure - Increasing Revenue with a Search Engine Marketing Strategy - Searles Leisure Resort Case Study', 'The Client Searles Leisure Resort, on the beautiful North Norfolk coast, is an award-winning UK holiday resort for families. The client has been welcoming holidaymakers of all ages in Hunstanton for over 85 years, and as multiple times winners of the Norfolk & Suffolk Tourism awards, they are experts at giving the British public what they need: thoroughly enjoyable staycations.', 'Netmatters', '2022-11-03', 'digital-marketing', 'Case Studies'),
(3, 'Business Automation: Take Your Business to the Next Level', 'In this article we explain everything you need to know about business automation, and why your business should be adopting it in 2022.', 'Netmatters', '2022-10-28', 'bespoke-software', 'News');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marketing`
--
ALTER TABLE `marketing`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`(20));

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `marketing`
--
ALTER TABLE `marketing`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
