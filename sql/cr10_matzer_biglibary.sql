-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2020 at 04:39 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cr10_matzer_biglibary`
--
CREATE DATABASE IF NOT EXISTS `cr10_matzer_biglibary` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `cr10_matzer_biglibary`;

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `author_id` int(11) NOT NULL,
  `first_name` varchar(30) DEFAULT NULL,
  `last_name` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`author_id`, `first_name`, `last_name`) VALUES
(1, 'Haruki', 'Murakami'),
(2, 'Thomas', 'Erikson'),
(3, 'Garry', 'Kasparov'),
(4, 'Marie', 'Kondo'),
(5, 'Yuji', 'Terajima'),
(6, 'Jeffrey', ' McDonald Chandor'),
(7, 'Adam', 'McKay');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `media_id` int(11) NOT NULL,
  `media_title` varchar(100) DEFAULT NULL,
  `media_img` varchar(200) DEFAULT NULL,
  `media_isbn` int(11) DEFAULT NULL,
  `media_description` varchar(100) DEFAULT NULL,
  `media_publish_date` date DEFAULT NULL,
  `media_type` varchar(10) DEFAULT NULL,
  `media_available` varchar(20) DEFAULT NULL,
  `fk_author_id` int(11) DEFAULT NULL,
  `fk_publisher_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`media_id`, `media_title`, `media_img`, `media_isbn`, `media_description`, `media_publish_date`, `media_type`, `media_available`, `fk_author_id`, `fk_publisher_id`) VALUES
(1, '1q84', 'https://miro.medium.com/focal/1200/1200/48/38/1*ABSOquiAkx1zxGEHxHqvVA.jpeg', 97818465, 'A love story, a mystery, a fantasy, a novel of self-discovery, a dystopia to rival George Orwell\'s—1', '2010-10-10', 'book', 'yes', 1, 1),
(2, 'Surrounded by Idiots', 'https://images2.medimops.eu/product/ac1bb6/M01785042181-large.jpg', 2147483647, 'Thomas Erikson is a Swedish behavioral expert, active lecturer', '2019-07-30', 'Book', 'yes', 2, 3),
(3, 'Deep Thinking', 'https://images2.medimops.eu/product/95f0b0/M01473653517-large.jpg', 2147483647, 'In May 1997, the world watched as Garry Kasparov, the greatest chess player in the world, was defeat', '2018-04-05', 'book', 'no', 3, 4),
(5, 'The Life-Changing Manga of Tidying Up', 'https://d1w7fb2mkkr3kw.cloudfront.net/assets/images/book/lrg/9780/3995/9780399580536.jpg', 978039958, 'From the #1 New York Times bestselling author and star of Netflix\'s Tidying Up with Marie Kondo, thi', '0000-00-00', 'manga', 'yes', 4, 3),
(6, 'Ace of the Diamond', 'https://i.pinimg.com/originals/9b/29/3b/9b293bf0a71f5efd2c43312f8ee47b0a.png', 12354689, 'Eijun Sawamura had his heart set on the middle-school national baseball championships. But his team ', '2017-07-13', 'manga', 'yes', 5, 5),
(7, 'The Wind-Up Bird Chronicle', 'https://i.pinimg.com/originals/0a/59/3a/0a593a70dc0a464488b179406b2edc49.jpg', 679775439, 'In a Tokyo suburb, a young man named Toru Okada searches for his wife’s missing cat—and then for his', '1998-07-01', 'book', 'no', 1, 1),
(8, 'Hard-Boiled Wonderland', 'https://i2.wp.com/smithsonianapa.org/bookdragon/wp-content/uploads/sites/10/2012/01/Hard-Boiled-Wonderland-and-the-End-of-the-World.jpg?fit=325%2C500', 679743464, 'Across two parallel narratives, Murakami draws readers into a mind-bending universe in which Lauren ', '1993-03-02', 'book', 'yes', 1, 1),
(9, 'Margin Call', 'https://upload.wikimedia.org/wikipedia/en/6/62/Margin_Call.jpg', 0, 'A finance company\'s management division head working on a major project is fired. His protege attemp', '2011-07-10', 'dvd', 'reserved', 6, 6),
(10, 'The Big Short', 'https://upload.wikimedia.org/wikipedia/en/thumb/1/16/The_Big_Short_%282015_film_poster%29.png/220px-The_Big_Short_%282015_film_poster%29.png', 0, 'In the mid-2000s, a few finance experts observe the instability in the US housing market and predict', '2015-12-11', 'dvd', 'reserved', 7, 7),
(11, 'Norwegian Wood', 'https://prodimage.images-bn.com/pimages/9789897416279_p0_v1_s1200x630.jpg', 375704027, 'Toru, a serious young college student in Tokyo, is devoted to Naoko, a beautiful and introspective y', '0200-07-12', 'book', 'reserved', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `publisher`
--

CREATE TABLE `publisher` (
  `publisher_id` int(11) NOT NULL,
  `publisher_name` varchar(30) DEFAULT NULL,
  `publisher_adress` varchar(100) DEFAULT NULL,
  `publisher_size` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `publisher`
--

INSERT INTO `publisher` (`publisher_id`, `publisher_name`, `publisher_adress`, `publisher_size`) VALUES
(1, 'Shinchosha Publishing', '71 Yaraicho Shinjuku-Ku, 162-0', 'small'),
(3, 'Vermilion', '20 Vauxhall Bridge Rd, London, SW1V 2SA, UK', 'small'),
(4, 'John Murray', 'Carmelite House, 50 Victoria Embankment, London EC4Y 0DZ', 'big'),
(5, 'Kodansha', 'Tokyo', 'small'),
(6, 'Before the Door Pictures', '1138 Hyperion Ave. , Los Angeles, CA 90029', 'medium'),
(7, 'Regency Enterprises', 'West Hollywood, California', 'medium');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`author_id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`media_id`),
  ADD KEY `fk_author_id` (`fk_author_id`),
  ADD KEY `fk_publisher_id` (`fk_publisher_id`);

--
-- Indexes for table `publisher`
--
ALTER TABLE `publisher`
  ADD PRIMARY KEY (`publisher_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `author_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `media_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `publisher`
--
ALTER TABLE `publisher`
  MODIFY `publisher_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `media`
--
ALTER TABLE `media`
  ADD CONSTRAINT `media_ibfk_1` FOREIGN KEY (`fk_author_id`) REFERENCES `author` (`author_id`),
  ADD CONSTRAINT `media_ibfk_2` FOREIGN KEY (`fk_publisher_id`) REFERENCES `publisher` (`publisher_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
