-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2024 at 08:15 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `corememories`
--

-- --------------------------------------------------------

--
-- Table structure for table `islandcontents`
--

CREATE TABLE `islandcontents` (
  `islandContentID` int(4) NOT NULL,
  `islandOfPersonalityID` int(4) NOT NULL,
  `image` varchar(50) DEFAULT NULL,
  `content` varchar(300) NOT NULL,
  `color` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `islandcontents`
--

INSERT INTO `islandcontents` (`islandContentID`, `islandOfPersonalityID`, `image`, `content`, `color`) VALUES
(1, 1, 'basketball.png', 'Basketball is one of my favorite pastimes, and I have many memories of playing this game with my friends. I enjoy meeting new people and making friends through basketball, which is one of the reasons I love it. It’s also a great way to bond with my friends, cousins, and others during our free time.', '#740938'),
(2, 1, 'volleyball.png', 'I have cherished memories in volleyball because my brother taught me how to play and is the reason I love the sport. One of my best memories is winning the championship in our barangay volleyball league.', '#AF1740'),
(3, 1, 'badminton.png', 'Badminton is memorable for me because, when I was in elementary school, I represented my school in a competition with other schools. It was my first time competing, and although I didn’t win the championship, it was a great experience that helped build my confidence.', '#CC2B52'),
(4, 2, 'agape.png', 'This photo is memorable because it captures the celebration of my childhood friend passing an exam he had been preparing for a long time. Additionally, it brought us closer as friends since we rarely saw each other before. This place is also our favorite spot to visit when we want to bond.', '#8B5DFF'),
(5, 2, 'driver.png', 'This photo is one of my favorites because it was taken on my brother\'s graduation day. That day was the moment we had all been eagerly waiting for, as it represented the fruits of his hard work and dedication to learning. I also witnessed the true joy of my parents, who were so proud to see their so', '#6A42C2'),
(6, 2, 'sunset.png', 'This photo is the one I treasure the most because it holds many memories of this place. Most importantly, it reminds me of my grandfather, who taught me so much about life and was my inspiration through everything I faced. This place was his workplace as a farmer, where we often bonded, and where I ', '#563A9C'),
(7, 3, 'yellow.png', 'When I was young, I immediately fell in love with dancing and started participating in school contests. This photo was taken when I was in high school, just before our performance began. Even though we didn’t win that day, we were happy because we gave our best performance and showcased our talent.', '#15B392'),
(8, 3, 'xmas.png', 'This photo is memorable because I had the chance to perform with my friend, and it allowed me to get to know him better. Since that day, we’ve often talked about our lives, and through dancing, I’ve made even more friends.', '#54C392'),
(9, 3, 'sing.png', 'At first, I didn’t like singing because I didn’t see any talent in myself. However, when I sang for the first time, my grandma was pleased, and her encouragement inspired me to learn how to sing. Singing became memorable to me because of my grandma.', '#9EDF9C'),
(10, 4, 'internet.png', 'The internet is memorable to me because it has taught me so much and allowed me to meet many friends. It often helps me when I’m struggling with my studies and also serves as my source of entertainment when I’m bored.', '#3ABEF9'),
(11, 4, 'languages.png', 'Programming languages are memorable to me because they have been the foundation of my coding journey. Without them, I wouldn’t have learned the basics needed to improve my coding skills. They also serve as a guide, helping me determine the path I want to pursue after graduation.', '#3572EF'),
(12, 4, 'web.png', 'This project is the most memorable because I learned so much while working on it. I will treasure all the memories, including the knowledge I gained from our professor, who provided me with valuable insights that I can use in the future.', '#050C9C');

-- --------------------------------------------------------

--
-- Table structure for table `islandsofpersonality`
--

CREATE TABLE `islandsofpersonality` (
  `islandOfPersonalityID` int(4) NOT NULL,
  `name` varchar(40) NOT NULL,
  `shortDescription` varchar(300) DEFAULT NULL,
  `longDescription` varchar(900) DEFAULT NULL,
  `color` varchar(10) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `islandsofpersonality`
--

INSERT INTO `islandsofpersonality` (`islandOfPersonalityID`, `name`, `shortDescription`, `longDescription`, `color`, `image`, `status`) VALUES
(1, 'ISLAND OF SPORTS', NULL, 'Welcome to the Island of Sports, where adventure meets paradise! Get ready to dive into thrilling activities and unforgettable experiences in a land dedicated to fun, fitness, and excitement.', '#9C220F', 'sports.png', NULL),
(2, 'ISLAND OF PHOTOGRAPHY', NULL, 'Welcome to the Island of Photography, where every scene is a picture-perfect masterpiece. Capture stunning landscapes, vibrant culture, and unforgettable moments in this paradise for visual storytellers!', '#AA6FBF', 'photography.png', NULL),
(3, 'ISLAND OF ENTERTAINMENT', NULL, 'Welcome to the Island of Entertainment, where music and dance bring every moment to life! Immerse yourself in a vibrant world of performances, rhythms, and joy, perfect for celebrating creativity and fun.', '#8ab852', 'entertainment.png', NULL),
(4, 'ISLAND OF TECHNOLOGY', NULL, 'Welcome to the Island of Tech Universe, where innovation and imagination collide! Dive into a world of cutting-edge gadgets, futuristic designs, and endless opportunities to explore the wonders of technology.', '#004b90', 'tech.png', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `islandcontents`
--
ALTER TABLE `islandcontents`
  ADD PRIMARY KEY (`islandContentID`);

--
-- Indexes for table `islandsofpersonality`
--
ALTER TABLE `islandsofpersonality`
  ADD PRIMARY KEY (`islandOfPersonalityID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `islandcontents`
--
ALTER TABLE `islandcontents`
  MODIFY `islandContentID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `islandsofpersonality`
--
ALTER TABLE `islandsofpersonality`
  MODIFY `islandOfPersonalityID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
