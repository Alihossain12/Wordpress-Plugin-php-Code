-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2025 at 05:48 AM
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
-- Database: `book_manage`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `book_name` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL,
  `isbn` int(11) NOT NULL,
  `publisher` varchar(255) NOT NULL,
  `publish_date` date NOT NULL,
  `category` varchar(255) NOT NULL,
  `language` varchar(255) NOT NULL,
  `pages` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `cover_image_url` varchar(255) NOT NULL,
  `status` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `book_name`, `author`, `isbn`, `publisher`, `publish_date`, `category`, `language`, `pages`, `description`, `cover_image_url`, `status`) VALUES
(13, 'Farrah Rowe', 'Minus similique eos', 34, 'Quidem voluptatem U', '2016-04-12', '1', 'Distinctio Et atque', 20, 'Atque autem ea repre', 'uploads/688252_777854_03_front_comping.jpg', 0),
(14, 'Cruz Higgins', 'Tempor consequatur ', 0, 'Sint nostrud officia', '2013-02-23', '5', 'Ut pariatur Dolorib', 50, 'Ad dolor est cumque', 'uploads/satisfaction_1477623.png', 0),
(15, 'Cruz Higgins', 'Tempor consequatur ', 0, 'Sint nostrud officia', '2013-02-23', '5', 'Ut pariatur Dolorib', 50, 'Ad dolor est cumque', 'https://unsplash.com/s/photos/image', 0),
(16, 'Ali', 'Repudiandae sit tem', 0, 'Quisquam est sit sit', '2000-06-07', '6', 'Et aperiam reprehend', 79, 'A labore sunt iste', '', 0),
(18, 'Pearl Roberts', 'Ut et asperiores nos', 0, 'Rerum amet aut et q', '2017-12-01', '1', 'Irure porro omnis qu', 51, 'Esse culpa rerum di', 'uploads/f0e4eeca627ac9a31d1b1eb128b03e46-cc_ft_960.jpg', 0),
(19, 'Chloe Crosby', 'Itaque quae iure nis', 0, 'Dolores numquam numq', '2024-08-01', '5', 'Doloribus commodo in', 92, 'Officia voluptatem e', 'uploads/PHOTO-2025-05-27-18-39-10.jpg', 0),
(20, 'Catherine Hall', 'Fugiat id magna ea e', 0, 'Laborum Debitis qui', '2016-12-12', '2', 'Asperiores voluptate', 25, 'Consectetur consequa', 'uploads/e5310a32-5fb7-40e5-a7b5-ee1fc7903c39.png', 1),
(21, 'Quentin Walter', 'Aute vel neque conse', 0, 'Voluptate voluptatum', '1998-06-10', '5', 'Iusto officia pariat', 91, 'Qui vitae ut impedit', 'uploads/e5310a32-5fb7-40e5-a7b5-ee1fc7903c39.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Model'),
(2, 'Model'),
(3, 'Lee Wall'),
(4, 'Lee Wall'),
(5, 'MacKensie Bowen'),
(6, 'Lee Wall'),
(7, 'Pioneer DDJ-1000SRT Controller');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
