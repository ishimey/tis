-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2025 at 01:22 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tourism`
--

-- --------------------------------------------------------

--
-- Table structure for table `attractions`
--

CREATE TABLE `attractions` (
  `attractionID` int(11) NOT NULL,
  `destinationID` int(11) DEFAULT NULL,
  `name` text DEFAULT NULL,
  `description` text NOT NULL,
  `imageURL` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `attractions`
--

INSERT INTO `attractions` (`attractionID`, `destinationID`, `name`, `description`, `imageURL`) VALUES
(5, 1, 'Narayani River', 'gyfshdvcygsd', 'aws');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(11) NOT NULL,
  `city_name` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `city_name`, `created_at`) VALUES
(1, 'Chitwan', '2025-12-12 02:24:33'),
(2, 'Kathmandu', '2025-12-12 02:25:06'),
(3, 'Pokhara', '2025-12-12 02:28:35'),
(5, 'lumbini', '2025-12-12 02:33:06');

-- --------------------------------------------------------

--
-- Table structure for table `destination`
--

CREATE TABLE `destination` (
  `destinationID` int(11) NOT NULL,
  `destination` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `imageURL` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `destination`
--

INSERT INTO `destination` (`destinationID`, `destination`, `description`, `imageURL`) VALUES
(1, 'Chitwan', 'Chitwan is one of Nepal’s most popular tourist destinations, best known for Chitwan National Park, a UNESCO World Heritage Site. Located in the southern Terai region, it is famous for its rich wildlife, including one-horned rhinoceroses, Bengal tigers, elephants, and diverse bird species. Chitwan also offers jungle safaris, canoeing, and a chance to experience Tharu culture, making it an ideal place for nature and adventure lovers.', 'public/1.png'),
(2, 'himalayas', 'The Himalayas are a majestic mountain range stretching across northern Nepal, home to the world’s highest peaks, including Mount Everest. Renowned for their breathtaking landscapes, snow-capped mountains, and deep valleys, the Himalayas attract trekkers, mountaineers, and nature lovers from around the globe. They also hold great cultural and spiritual significance, with ancient monasteries and unique mountain communities nestled among the peaks.', 'public/2.png'),
(3, 'lumbini', 'Lumbini is a sacred historical site in southern Nepal, renowned as the birthplace of Lord Buddha. Recognized as a UNESCO World Heritage Site, it attracts pilgrims and tourists from around the world. Lumbini is known for its peaceful environment, ancient monasteries, the Maya Devi Temple, and beautiful gardens, making it an important center for spirituality, meditation, and cultural heritage.', 'public/3.png'),
(4, 'pokhara', 'Pokhara is one of Nepal’s most beautiful tourist cities, famous for its stunning natural scenery and serene atmosphere. Nestled beside Phewa Lake and surrounded by the Annapurna mountain range, it offers breathtaking views, adventure activities like paragliding and trekking, and popular attractions such as Davis Falls and the World Peace Pagoda. Pokhara is a perfect destination for both relaxation and adventure.', 'public/4.png');

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`id`, `city_id`, `name`, `description`, `image`, `created_at`) VALUES
(1, 1, 'CMT Resort', 'Luxury Hotel in Chitwan with proper facility and hospitality.', 'CMT.jpg', '2025-12-12 02:46:45'),
(6, 2, 'Everest Hotel', 'Luxury Hotel in Kathmandu with perfect hospitality.', 'everest.jpg', '2025-12-12 03:12:35'),
(7, 3, 'Bar Peepal Resort Pokhara', 'Scenic luxury resort with modern rooms and great mountain panoramas', 'barpeepal.jpg', '2025-12-12 03:14:34'),
(8, 5, 'Lumbini Five Elements Hotels', 'Highly rated hotel near the temple area with comfortable rooms and good service', 'limbini.jpg', '2025-12-12 03:16:25'),
(9, 5, 'Lumbini Five Elements Hotels', 'Highly rated hotel near the temple area with comfortable rooms and good service', 'limbini.jpg', '2025-12-12 03:16:52');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(11) NOT NULL,
  `username` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `password` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `username`, `email`, `password`) VALUES
(1, 'sumit', 'sumit@proton.me', '7225ff71e8821b24fd72b4c8fda95b9a'),
(2, 'ishim', 'ishimey90@gmail.com', '$2y$10$oH.iL6xdJGr2y4Da62.d/eMBCvYEpARHU44PMHcK.GwcKHv3fM4ZS'),
(3, 'isi', 'ishimghimire1@gmail.com', '$2y$10$VeCg6sM/dafujsRch/twvOnHytTCLQ5hFGgs9i.h6jG.ywuMLstIa'),
(4, 'id', 'gdt@gmail.com', '$2y$10$GnIjz1W1UFNpLvdP5AmDDOCOzNARBplKmgV2kj6mve6YXj.cI25e.'),
(5, 'tg', 'tg@gmail.com', '$2y$10$u5guhD8TWJMCQLRwNX0xnOc.zjIy4O6MrLW9r6nppp6QfLhH4eEVC'),
(6, 'iyi', 'jh@gmail.com', '$2y$10$62VKfcTB7IyOgO4KNZqa2udzZBoiv6K/Vv8FuKrOjXwwxJLGk.TQG'),
(7, 'tyu', 'jhsg@gg.com', '$2y$10$lFjULJY0EGyZZFWQ.HNHleT3QJAiGCNH1hP0h.ncMg59aBl94bZb2'),
(8, 'hg', 're@fg.com', '$2y$10$MabAktMndEGjUO5CCODGFepr.NyofXhrK0bNxrtHJgPN9mCzsW02y'),
(9, 'uj', 'er@fg.com', '$2y$10$shOImJbJMe3neJ/czY4pjeP5uML1Ww/18c/f/duIgA41hw.khdYaO'),
(10, 'yuh', 'gh@gh.com', '$2y$10$rWxinIIIy9i2HYkFGmXoQenDyKqcnyfnNAZse8DiqFp0nwJTLhYF2'),
(11, 'yt', 'yu@rt.com', '$2y$10$TnapBipx6LWLvYZCk/nSfea4i14.hfjJ25RFxg6rMQFk/5arRr5su');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attractions`
--
ALTER TABLE `attractions`
  ADD PRIMARY KEY (`attractionID`),
  ADD KEY `fk_destinationID` (`destinationID`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destination`
--
ALTER TABLE `destination`
  ADD PRIMARY KEY (`destinationID`);

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`id`),
  ADD KEY `city_id` (`city_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`),
  ADD UNIQUE KEY `email` (`email`) USING HASH;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attractions`
--
ALTER TABLE `attractions`
  MODIFY `attractionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `destination`
--
ALTER TABLE `destination`
  MODIFY `destinationID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attractions`
--
ALTER TABLE `attractions`
  ADD CONSTRAINT `fk_destinationID` FOREIGN KEY (`destinationID`) REFERENCES `destination` (`destinationID`);

--
-- Constraints for table `hotels`
--
ALTER TABLE `hotels`
  ADD CONSTRAINT `hotels_ibfk_1` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
s