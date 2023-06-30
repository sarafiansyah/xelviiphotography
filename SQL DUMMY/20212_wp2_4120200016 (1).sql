-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2022 at 06:53 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `20212_wp2_4120200016`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrators`
--

CREATE TABLE `administrators` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `nama_depan` varchar(255) NOT NULL,
  `nama_belakang` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `join_time` varchar(255) NOT NULL,
  `join_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `administrators`
--

INSERT INTO `administrators` (`id`, `username`, `nama_depan`, `nama_belakang`, `password`, `join_time`, `join_date`) VALUES
(1, 'spradmin', 'Adm. Mahesa', 'Rafiansyah', '$2y$10$xmuLMQ7CmOMIlgHE3DFSoOLe58OlJSTCLo5QRz5WbhNZJruvuZszm', '', ''),
(2, 'spr', 'mahesa', 'Rafiansyah', '$2y$10$utG.aQWVGEzvLvZ4pM3tXORCNZtykwcl/Opja5go5SPaCOJLDeryy', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `camera`
--

CREATE TABLE `camera` (
  `id` int(11) NOT NULL,
  `manufacturer` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `origin` varchar(50) NOT NULL,
  `id_devices` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `camera`
--

INSERT INTO `camera` (`id`, `manufacturer`, `model`, `origin`, `id_devices`) VALUES
(1, 'Canon', '80D', 'Jepang', 1),
(2, 'Nikon', 'D850', 'Jepang', 1),
(3, 'Sony', 'A77', 'Jepang', 1),
(4, 'Samsung', 'S22 Ultra', 'Korea Utara', 2),
(5, 'iPhone', '13', 'California', 2),
(6, 'Vivo', 'X80', 'China', 2),
(7, 'Pentax', 'K1000', 'Jepang', 3),
(8, 'Kodak', 'PIXPRO FZ53-RD', 'New York', 4);

-- --------------------------------------------------------

--
-- Table structure for table `devices`
--

CREATE TABLE `devices` (
  `id` int(11) NOT NULL,
  `device_type` varchar(50) NOT NULL,
  `device_status` varchar(255) NOT NULL,
  `device_year` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `devices`
--

INSERT INTO `devices` (`id`, `device_type`, `device_status`, `device_year`) VALUES
(1, 'DSLR', 'Aktif', 2022),
(2, 'Smartphone', 'Aktif', 2022),
(3, 'Pocket', 'Aktif', 2022),
(4, 'Vintage', 'Aktif', 2022);

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(11) NOT NULL,
  `birthdate` varchar(255) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `sent_time` varchar(255) NOT NULL,
  `sent_date` varchar(255) NOT NULL,
  `messages` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `name`, `email`, `sent_time`, `sent_date`, `messages`) VALUES
(1, 'Saa', 'SAaa', '', '', 'SAaaaa'),
(2, 'Sa', 'Saaaa', '', '', 'fpwepwemjgpwepghnwp'),
(3, 'Sa', 'Sa', '', '', 'Haloo'),
(4, 'Sa', 'Saaaa', '', '', 'Halooooooooooooo'),
(27, 'Mahesa', 'mahesa@gmail.com', '18:23:42 GMT+7', '30/06/2022', 'Ada kesalahan pada Index.'),
(28, 'Sa', '123', '18:25:38 GMT+7', '30/06/2022', '123'),
(43, '123', '123', '18:44:53 GMT+7', '30/06/2022', '123'),
(44, '123', '1123', '18:47:18 GMT+7', '30/06/2022', '123'),
(45, 'Sa', 'saaaa@gmail.com', '22:31:01 GMT+7', '30/06/2022', '123123'),
(46, '321', '321', '22:36:29 GMT+7', '30/06/2022', '321'),
(47, '123', '123', '22:37:23 GMT+7', '30/06/2022', '123'),
(48, '123', '123', '22:37:41 GMT+7', '30/06/2022', '123'),
(49, '321', '321', '22:39:39 GMT+7', '30/06/2022', '321'),
(50, '321', '321', '22:40:14 GMT+7', '30/06/2022', '321'),
(51, 'rg', 'qwd', '22:40:59 GMT+7', '30/06/2022', 'gew');

-- --------------------------------------------------------

--
-- Table structure for table `socialmedia`
--

CREATE TABLE `socialmedia` (
  `id` int(11) NOT NULL,
  `instagram` int(11) NOT NULL,
  `website` int(11) NOT NULL,
  `facebook` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `nama_depan` varchar(255) NOT NULL,
  `nama_belakang` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `join_time` varchar(255) NOT NULL,
  `join_date` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `birthday` varchar(255) NOT NULL,
  `occupancy` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `usr_web` varchar(255) NOT NULL,
  `usr_github` varchar(255) NOT NULL,
  `usr_insta` varchar(255) NOT NULL,
  `usr_twitter` varchar(255) NOT NULL,
  `usr_facebook` varchar(255) NOT NULL,
  `usr_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `nama_depan`, `nama_belakang`, `password`, `join_time`, `join_date`, `email`, `phone`, `birthday`, `occupancy`, `address`, `usr_web`, `usr_github`, `usr_insta`, `usr_twitter`, `usr_facebook`, `usr_img`) VALUES
(2, 'sarafiansyah', 'Mahesa', 'Rafiansyah', '$2y$10$XPAMPbG2hjCLWLpD/s5DAextS/G0MyF.WFv313ClIR02IzmfbDC4O', '17:37:42 GMT+7', '20/06/2022', '', 0, '', '', '', '', '', '', '', '', '1'),
(3, 'admin', 'Mahesa', 'Rafiansyah', '$2y$10$NJD6ADzysN4xgO2G7Msh4OOM8LxltqlLY/gsndG2TwxnRnSD7xmfG', '17:37:42 GMT+7', '20/06/2022', 'mahesarafiansyah@gmail.com', 123123, '2002-05-03', 'XELVII Developer', 'Indonesia', 'mahesa.com', 'sarafiansyah', 'sarafiansyah', 'sarafiansyah123', 'sarafiansyah', '3'),
(4, 'milkhaa', 'Milkha', 'Aprilya', '$2y$10$RgRtp28KeLobRltneZo0hOr70VPnJKeRnc5Soo0hOBXNJekE9AcSW', '17:37:42 GMT+7', '20/06/2022', '', 0, '', '', '', '', '', '', '', '', '1'),
(12, 'michelle', 'Michelle', 'Harris', '$2y$10$7GEYdE8EsDkMksy/lZ8UEeheP.N5DHFSObG9rcWLnQ9hb9xzOz952', '17:37:42 GMT+7', '20/06/2022', '', 0, '', '', '', '', '', '', '', '', '1'),
(13, 'locki', 'Locki', 'Hastur', '$2y$10$8MgHz.uJp6j8KTPn56qvruP9illNA.eOyJOYuP3mrfD9Pp9Ux1b3e', '02:11:15 GMT+7', '26/06/2022', 'lockuhastur', 123, '1/1/1983', 'Businessman', 'Indonesia', '123', '123', '12332', '12323', '1233', '1'),
(14, 'nicki242', 'Nicki', 'Killian', '$2y$10$vzyVjlWaStkw0ohDJ7ywV.h42DpB9szGjyDqJEO292W4dGZQlcPj2', '02:13:12 GMT+7', '26/06/2022', 'Not Set', 0, 'Not Set', 'Not Set', 'Not Set', 'Not Set', 'Not Set', 'Not Set', 'Not Set', '', '1'),
(17, 'xlvi', 'Stephanie', 'Williams', '$2y$10$wBfOfqem6/uRIecnlvu93.wsJwNYquwjoOc1PlZoNH6jChXPnSf1O', '17:34:28 GMT+7', '01/07/2022', 'stephaniewilliams@gmail.com', 123, '1992-01-01', 'Photographer', 'Wolverhampton, GBR', 'Not Set', 'Not Set', 'Not Set', 'Not Set', 'Not Set', '1'),
(19, 'samfred', 'Samantha', '123', '$2y$10$mr2DykSQ1igTwJki4x/PYORvwzV71vyKmsx88pwQdzWVZ.2aGg/rW', '05:57:05 GMT+7', '02/07/2022', 'Not Set', 0, '', 'Not Set', 'Not Set', 'Not Set', 'Not Set', 'Not Set', '22', 'Not Set', '2'),
(20, 'saya', 'saya123', '123', '$2y$10$YDfQafWnE97VL36RVPusXuZE9Ul/ApmioPmnMLdmo/czixrPpJNXO', '20:27:01 GMT+7', '04/07/2022', 'Not Set', 0, 'Not Set', 'Not Set', 'Not Set', 'Not Set', 'Not Set', 'Not Set', 'Not Set', 'Not Set', '1'),
(21, 'sa123123', '123', '123', '$2y$10$3.tTrhfJQTqMJiex7BuGiOiRoFg2fLh9OiQT66VR5N1jGKgYYErry', '21:47:17 GMT+7', '04/07/2022', 'Not Set', 0, 'Not Set', 'Not Set', 'Not Set', 'Not Set', 'Not Set', 'Not Set', 'Not Set', 'Not Set', '1');

-- --------------------------------------------------------

--
-- Table structure for table `users_dp`
--

CREATE TABLE `users_dp` (
  `id` int(11) NOT NULL,
  `dpname` varchar(255) NOT NULL,
  `path_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_dp`
--

INSERT INTO `users_dp` (`id`, `dpname`, `path_name`) VALUES
(1, 'default', 'images/img-dp/00-default.jpg'),
(2, 'female', 'images/img-dp/01-female.png'),
(3, 'male', 'images/img-dp/02-male.png');

-- --------------------------------------------------------

--
-- Table structure for table `users_feedback`
--

CREATE TABLE `users_feedback` (
  `review_id` int(11) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `user_rating` int(1) NOT NULL,
  `user_review` text NOT NULL,
  `datetime` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_feedback`
--

INSERT INTO `users_feedback` (`review_id`, `user_name`, `user_rating`, `user_review`, `datetime`) VALUES
(6, 'John Smith', 4, 'Nice Product, Value for money', 1621935691),
(7, 'Peter Parker', 5, 'Nice Product with Good Feature.', 1621939888),
(8, 'Donna Hubber', 1, 'Worst Product, lost my money.', 1621940010),
(9, 'Mahesa', 4, 'Cool', 1656890252),
(10, 'Ani Badi', 5, 'Keren', 1656922846),
(11, 'Mahesa Rafiansyah', 0, 'Coooll', 1656925066),
(12, 'Mahesa Rafiansyah', 5, 'Coooll', 1656925084),
(13, 'Mahesa Rafiansyah', 5, 'Kereenn', 1656930637),
(14, 'Mahesa Rafiansyah', 4, 'qwd', 1656930827),
(15, 'Mahesa Rafiansyah', 4, '123', 1656930969),
(16, 'Mahesa Rafiansyah', 4, 'awf', 1656931050),
(17, 'Mahesa Rafiansyah', 3, '123', 1656931073),
(18, 'Mahesa Rafiansyah', 4, 'wafe', 1656931117),
(19, 'Mahesa Rafiansyah', 3, '123', 1656931201);

-- --------------------------------------------------------

--
-- Table structure for table `users_img`
--

CREATE TABLE `users_img` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `file_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `img_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users_img`
--

INSERT INTO `users_img` (`id`, `name`, `file_name`, `img_title`) VALUES
(39, 'Deddy Corbuzier', 'uploads/lalo-hernandez-amo081zdjsi-unsplash.jpg', 'Beach Birdview'),
(40, 'Teddy Yuhuuu', 'uploads/vicko-mozara-m82uh_vamhg-unsplash.jpg', 'Pink Duck'),
(41, 'Nathan Septian', 'uploads/jcob-nasyr-67svpjk6q7i-unsplash.jpg', 'Palm Tree'),
(43, 'Yohanes Stefanus', 'uploads/erol-ahmed-mfeeaofactq-unsplash.jpg', 'City and City'),
(44, 'Yohanes Stefanus', 'uploads/dawson-lovell-w_muqtuhwyy-unsplash.jpg', 'City and City'),
(45, 'Mahesa Rafiansyah', 'uploads/matt-jones-9cpajgvb378-unsplash.jpg', 'City');

-- --------------------------------------------------------

--
-- Table structure for table `writers`
--

CREATE TABLE `writers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `web` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `writers`
--

INSERT INTO `writers` (`id`, `name`, `content`, `web`) VALUES
(1, 'Nur Abdillah', 'nurabdillahpanning', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrators`
--
ALTER TABLE `administrators`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `camera`
--
ALTER TABLE `camera`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `devices`
--
ALTER TABLE `devices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_dp`
--
ALTER TABLE `users_dp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_feedback`
--
ALTER TABLE `users_feedback`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `users_img`
--
ALTER TABLE `users_img`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `writers`
--
ALTER TABLE `writers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrators`
--
ALTER TABLE `administrators`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `camera`
--
ALTER TABLE `camera`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `devices`
--
ALTER TABLE `devices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users_dp`
--
ALTER TABLE `users_dp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users_feedback`
--
ALTER TABLE `users_feedback`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users_img`
--
ALTER TABLE `users_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `writers`
--
ALTER TABLE `writers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
