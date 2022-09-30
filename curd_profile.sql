-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2022 at 03:40 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `curd_profile`
--

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `img` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `repo` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `name`, `description`, `img`, `url`, `repo`, `created_at`) VALUES
(1, 'html', 'this course is very helpful for you. the course focuses on developing', '1.jpg', 'https://www.facebook.com/muhamed.wael.505', 'https://github.com/Mhmdwael', '2022-09-29 10:23:04'),
(2, 'css', 'this course is very helpful for you. the course focuses on developing', '2.jpg', 'https://www.facebook.com/muhamed.wael.505', 'https://github.com/Mhmdwael', '2022-09-29 10:23:04'),
(3, 'sql', 'this course is very helpful for you. the course focuses on developing', '3.jpg', 'https://www.facebook.com/muhamed.wael.505', 'https://github.com/Mhmdwael', '2022-09-29 10:23:04'),
(4, 'nodejs', 'this course is very helpful for you. the course focuses on developing', '4.jpg', 'https://www.facebook.com/muhamed.wael.505', 'https://github.com/Mhmdwael', '2022-09-29 10:23:04'),
(5, 'php', 'this course is very helpful for you. the course focuses on developing', '5.jpg', 'https://www.facebook.com/muhamed.wael.505', 'https://github.com/Mhmdwael', '2022-09-29 10:23:04'),
(6, 'js', 'this course is very helpful for you. the course focuses on developing', '6.jpg', 'https://www.facebook.com/muhamed.wael.505', 'https://github.com/Mhmdwael', '2022-09-29 10:23:04'),
(7, 'laravel', 'this course is very helpful for you. the course focuses on developing', '7.jpg', 'https://www.facebook.com/muhamed.wael.505', 'https://github.com/Mhmdwael', '2022-09-29 10:23:04'),
(8, 'bootstrap', 'this course is very helpful for you. the course focuses on developing', '8.jpg', 'https://www.facebook.com/muhamed.wael.505', 'https://github.com/Mhmdwael', '2022-09-29 10:23:04'),
(9, 'typescript', 'this course is very helpful for you. the course focuses on developing', '9.jpg', 'https://www.facebook.com/muhamed.wael.505', 'https://github.com/Mhmdwael', '2022-09-29 10:23:04'),
(10, 'c++', 'this course is very helpful for you. the course focuses on developing', '10.jpg', 'https://www.facebook.com/muhamed.wael.505', 'https://github.com/Mhmdwael', '2022-09-29 10:23:04'),
(11, 'python', 'this course is very helpful for you. the course focuses on developing', '11.jpg', 'https://www.facebook.com/muhamed.wael.505', 'https://github.com/Mhmdwael', '2022-09-29 10:23:04'),
(12, 'angular', 'this course is very helpful for you. the course focuses on developing', '12.jpg', 'https://www.facebook.com/muhamed.wael.505', 'https://github.com/Mhmdwael', '2022-09-29 10:23:04'),
(13, 'react', 'this course is very helpful for you. the course focuses on developing', '13.jpg', 'https://www.facebook.com/muhamed.wael.505', 'https://github.com/Mhmdwael', '2022-09-29 10:23:04'),
(14, 'java', 'this course is very helpful for you. the course focuses on developing', '14.jpg', 'https://www.facebook.com/muhamed.wael.505', 'https://github.com/Mhmdwael', '2022-09-29 10:23:04'),
(15, 'django', 'this course is very helpful for you. the course focuses on developing', '15.jpg', 'https://www.facebook.com/muhamed.wael.505', 'https://github.com/Mhmdwael', '2022-09-29 10:23:04'),
(16, 'ui/ux', 'this course is very helpful for you. the course focuses on developing', '16.jpg', 'https://www.facebook.com/muhamed.wael.505', 'https://github.com/Mhmdwael', '2022-09-29 10:23:04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', '$2y$10$rWxnBOKRDpe.mK/BhiPs..7RS/jVljpSL7O6JIioPwg3aIHWmXacG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
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
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
