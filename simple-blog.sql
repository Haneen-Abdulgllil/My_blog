-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2022 at 08:07 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simple-blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) NOT NULL,
  `title` varchar(50) NOT NULL,
  `img` text NOT NULL,
  `body` text NOT NULL,
  `author` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `img`, `body`, `author`, `created_at`) VALUES
(46, 'Who Is BTS? Everything to Know About the K-Pop Boy', '85eaC3.jpg', 'BTS came together in 2013 and took their name from the Korean expression Bangtan Sonyeondan, which translates to Bulletproof Boy Scouts. In 2017, they announced, for English speakers, their acronym would be changing to stand for \"Beyond the Scene.\"\r\nBorn in Seoul, South Korea on September 12, 1994, RM\'s full Korean name is Kim Nam Joon. Fluent in both English and Korean, RM has said he learned English while watching CNN, BBC, and old episodes of the TV show Friends, according to a 2018 interview with the Chicago Tribune. Nam Joon\'s stage name originally stood for \"Rap Monster\" but in 2017 he told his fans that he wanted to go by \"RM\" because he felt it was \"more in accordance with the music Iâ€™m aiming for.\" RM is the leader of BTS.\r\nKim Seok Jin, who goes by the stage name Jin, is the oldest member of BTS. Born on December 4, 1992, the singer and songwriter was originally an aspiring actor who got recruited by a boy-band casting agent in South Korea, according to Rolling Stone.\r\nLike RM, Suga is one of the rappers in BTS. Born on March 9, 1993 as Min Yoon Gi, Rolling Stone describes him as \"the most contemplative of the group.\" In addition to rapping, Suga is a prolific songwriter and producer who has collaborated with other artists as well as released solo mixtapes under the alias Agust D.\r\nBorn on February 18, 1994, BTS member Jung Ho Seok goes by the stage name J-Hope. He is the third rapper of the group, and is particularly known for his dance skills, frequently helping other BTS members with their choreography.\r\nVocalist Park Ji Min was born on October 13, 1995. Like J-Hope, Jimin is known for his dance moves, having studied contemporary dance while he was in school.\r\nA singer with a lower vocal range, Kim Tae Hyung is one of the younger BTS members, having been born on December 30, 1995. In addition to his work with BTS, V made his acting debut in 2016 by appearing in the star-studded Korean drama Hwarang: The Poet Warrior Youth.\r\nBorn on September 1, 1997, Jeon Jung Kook is the youngest of the group and was just 15 when he joined BTS. In 2017, four years into BTS\'s debut as a boy band, Jungkook graduated from high school. The young vocalist has worked on several solo songs, including his 2018 track \"Euphoria,\" which was featured on the soundtrack for HBO\'s Euphoria season one finale.\r\n\r\n', 'Haneen', '2022-03-23 06:19:56');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'Haneen', 'haneenabdulglil2018@yahoo.com', 'e10adc3949ba59abbe56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
