-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: May 14, 2023 at 02:24 PM
-- Server version: 8.0.32
-- PHP Version: 8.1.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sightsDB`
--

-- --------------------------------------------------------

--
-- Table structure for table `sights`
--

CREATE TABLE `sights` (
  `id` int NOT NULL,
  `place_name` varchar(30) NOT NULL,
  `place_location` varchar(60) NOT NULL,
  `place_description` varchar(200) NOT NULL,
  `img` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `sights`
--

INSERT INTO `sights` (`id`, `place_name`, `place_location`, `place_description`, `img`) VALUES
(2, 'Linnanmäki', 'Tivolikuja 1, 00510 Helsinki', 'Linnanmäki is an amusement park in Helsinki, Finland. It was opened on 27 May 1950 and is owned by the non-profit Children\'s Day Foundation, which operates the park in order to raise funds for Finnish', 'https://kerranelamassa.fi/wp-content/uploads/2019/09/suomi-helsinki-linnanmaki.jpg'),
(3, 'Helsinki Cathedral', 'Unioninkatu 29, 00170 Helsinki', 'Helsinki Cathedral is the Finnish Evangelical Lutheran cathedral of the Diocese of Helsinki, located in the neighborhood of Kruununhaka in the centre of Helsinki, Finland, at the Senate Square.', 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/36/Helsinki_July_2013-27a.jpg/500px-Helsinki_July_2013-27a.jpg'),
(5, 'Suomenlinna', 'Suomenlinna', 'Suomenlinna is an 18th-century sea fortress and nature area with centuries-old artillery and defensive walls, spread across 6 linked islands.', 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/ff/Suomenlinna_aerial_2.jpg/500px-Suomenlinna_aerial_2.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sights`
--
ALTER TABLE `sights`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sights`
--
ALTER TABLE `sights`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
