-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2022 at 10:07 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bsms_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `category_list`
--

CREATE TABLE `category_list` (
  `category_id` int(30) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `delete_flag` tinyint(1) NOT NULL DEFAULT 0,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `date_updated` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category_list`
--

INSERT INTO `category_list` (`category_id`, `name`, `description`, `status`, `delete_flag`, `date_created`, `date_updated`) VALUES
(1, 'Baked Classics', 'Timeless breakfast and snacktime favorites', 1, 0, '2022-02-14 09:16:23', '2022-05-01 14:12:50'),
(2, 'Baked Savories', 'Flavorful and filling buns', 1, 0, '2022-02-14 09:19:04', '2022-05-01 14:15:07'),
(3, 'Baked Goodies', 'Baked with love', 1, 0, '2022-02-14 09:19:11', '2022-05-01 14:15:33'),
(4, 'Baked Sweets', 'Sweet alternatives to the classics', 1, 0, '2022-02-14 09:19:18', '2022-05-01 14:16:20'),
(5, 'Baked Loaves', 'Versatile Bread loaves, a fixture in every snacks or banquet.', 1, 0, '2022-02-14 09:19:24', '2022-05-01 14:17:41'),
(6, 'Pastries', 'Comforting baker\'s confectionary', 1, 0, '2022-02-14 09:19:30', '2022-05-01 14:18:40'),
(7, 'Snack Cakes', 'Treats that complete every celebration', 1, 0, '2022-02-14 09:19:37', '2022-05-01 14:19:26'),
(8, 'Non-bread', 'Non - bread products', 1, 0, '2022-02-14 09:19:43', '2022-05-01 14:20:01');

-- --------------------------------------------------------

--
-- Table structure for table `product_list`
--

CREATE TABLE `product_list` (
  `product_id` int(30) NOT NULL,
  `product_code` text NOT NULL,
  `category_id` int(30) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `price` double NOT NULL DEFAULT 0,
  `alert_restock` double NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `delete_flag` tinyint(1) NOT NULL DEFAULT 0,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `date_updated` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_list`
--

INSERT INTO `product_list` (`product_id`, `product_code`, `category_id`, `name`, `description`, `price`, `alert_restock`, `status`, `delete_flag`, `date_created`, `date_updated`) VALUES
(1, '23141506', 1, 'Pandesal', 'Pandesal is a popular yeast-raised bread in the Philippines. Individual loaves are shaped by rolling the dough into long logs (bastón, Spanish for \"stick\") which are rolled in fine bread crumbs. These are then portioned, allowed to rise, and baked.', 10, 20, 1, 0, '2022-02-14 09:42:00', '2022-05-01 03:23:24'),
(2, '123456', 2, 'Ensaymada', 'Ensaymada is a Filipino sweet pastry. This is said to be a variation of the Ensaimades, a similar bread that uses pork lard as an ingredient that originated in Majorca (the largest island of Spain).', 15, 20, 1, 0, '2022-02-14 09:42:00', '2022-05-01 03:28:00'),
(3, '231415', 2, 'Monay', 'Monay, also known as pan de monja, is a dense bread roll from the Philippines made with all-purpose flour, milk, and salt. It has a characteristic shape, with an indentation down the middle dividing the bread into two round halves. It is a common humble fare, usually eaten for merienda with cheese or dipped in hot drinks.', 45, 50, 1, 0, '2022-02-14 09:42:00', '2022-05-01 03:35:20'),
(4, '123654789', 3, 'Spanish Bread', 'It is a yeasted bread that is rolled into a log enclosing within a sugary and buttery filling. They are then rolled in breadcrumbs before baking.  It is very common to find them in \'panaderia\' or local bakeries. Normally enjoyed as an afternoon snack.', 20, 30, 1, 0, '2022-02-14 09:42:00', '2022-05-01 03:42:59'),
(5, '987545', 3, 'Pan de Coco', 'Pan de Coco with a soft, fluffy bun and perfectly sweetened coconut filling is perfect as a snack or dessert. This coconut bread is fantastic with coffee or tea and is sure to be a family favorite.', 50, 30, 1, 0, '2022-02-14 09:46:59', '2022-05-01 14:08:49'),
(6, '5489879', 6, 'Pianono', 'Pianono with soft, pillowy sponge cake and sweetened margarine filling is the perfect accompaniment to coffee or tea. This Filipino-style jelly roll is delicious for breakfast or midday snacks!', 50, 0, 1, 1, '2022-02-14 09:47:22', '2022-05-01 14:09:53');

-- --------------------------------------------------------

--
-- Table structure for table `stock_list`
--

CREATE TABLE `stock_list` (
  `stock_id` int(30) NOT NULL,
  `product_id` int(30) NOT NULL,
  `quantity` double NOT NULL DEFAULT 0,
  `expiry_date` datetime NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stock_list`
--

INSERT INTO `stock_list` (`stock_id`, `product_id`, `quantity`, `expiry_date`, `date_added`) VALUES
(1, 1, 20, '2022-02-17 00:00:00', '2022-02-14 02:04:29'),
(2, 2, 200, '2022-02-18 00:00:00', '2022-02-14 02:05:18'),
(3, 3, 350, '2022-02-18 00:00:00', '2022-02-14 02:05:33'),
(4, 4, 500, '2022-02-25 00:00:00', '2022-02-14 02:05:45'),
(5, 5, 100, '2022-02-18 00:00:00', '2022-02-14 02:06:48'),
(6, 1, 2, '2022-09-21 00:00:00', '2022-05-01 06:10:47'),
(7, 1, 0, '0000-00-00 00:00:00', '2022-05-01 06:10:49');

-- --------------------------------------------------------

--
-- Table structure for table `transaction_items`
--

CREATE TABLE `transaction_items` (
  `transaction_id` int(30) NOT NULL,
  `product_id` int(30) NOT NULL,
  `quantity` double NOT NULL DEFAULT 0,
  `price` double NOT NULL DEFAULT 0,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction_items`
--

INSERT INTO `transaction_items` (`transaction_id`, `product_id`, `quantity`, `price`, `date_added`) VALUES
(1, 1, 4, 10, '2022-02-14 02:12:39'),
(1, 2, 2, 15, '2022-02-14 02:12:39'),
(1, 4, 2, 20, '2022-02-14 02:12:39'),
(1, 3, 1, 45, '2022-02-14 02:12:39'),
(1, 5, 1, 50, '2022-02-14 02:12:39'),
(2, 5, 20, 50, '2022-02-14 02:14:41'),
(4, 3, 1, 45, '2022-02-14 02:38:38'),
(4, 5, 1, 50, '2022-02-14 02:38:38'),
(4, 2, 2, 15, '2022-02-14 02:38:38'),
(5, 2, 1, 15, '2022-02-14 02:57:53'),
(5, 5, 1, 50, '2022-02-14 02:57:53'),
(5, 1, 2, 10, '2022-02-14 02:57:53'),
(6, 3, 1, 45, '2022-05-01 06:27:21'),
(6, 1, 1, 10, '2022-05-01 06:27:21');

-- --------------------------------------------------------

--
-- Table structure for table `transaction_list`
--

CREATE TABLE `transaction_list` (
  `transaction_id` int(30) NOT NULL,
  `receipt_no` text NOT NULL,
  `total` double NOT NULL DEFAULT 0,
  `tendered_amount` double NOT NULL DEFAULT 0,
  `change` double NOT NULL DEFAULT 0,
  `user_id` int(30) DEFAULT 1,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction_list`
--

INSERT INTO `transaction_list` (`transaction_id`, `receipt_no`, `total`, `tendered_amount`, `change`, `user_id`, `date_added`) VALUES
(1, '1644804759', 205, 300, 95, 1, '2022-02-14 02:12:39'),
(2, '1644804881', 1000, 1000, 0, 1, '2022-02-14 02:14:41'),
(4, '1644806318', 125, 150, 25, NULL, '2022-02-14 02:38:38'),
(5, '1644807473', 85, 100, 15, 2, '2022-02-14 02:57:53'),
(6, '1651386441', 55, 100, 45, 1, '2022-05-01 06:27:21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'gianleria', 'pass'),
(2, 'gianleria', 'pass');

-- --------------------------------------------------------

--
-- Table structure for table `user_list`
--

CREATE TABLE `user_list` (
  `user_id` int(30) NOT NULL,
  `fullname` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `type` int(30) NOT NULL DEFAULT 1,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_list`
--

INSERT INTO `user_list` (`user_id`, `fullname`, `username`, `password`, `type`, `status`, `date_created`) VALUES
(1, 'Administrator', 'admin', '0192023a7bbd73250516f069df18b500', 1, 1, '2022-02-14 00:44:30'),
(2, 'Gian Andrei Leria', 'gableria', 'cd74fae0a3adf459f73bbf187607ccea', 1, 1, '2022-02-14 02:29:23'),
(3, 'Carlo S. Mangali', 'csmangali2', '0c4635c5af0f173c26b0d85b6c9b398b', 1, 1, '2022-02-14 02:29:58'),
(5, '', 'giann', 'giann', 1, 1, '2022-05-01 07:45:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category_list`
--
ALTER TABLE `category_list`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `product_list`
--
ALTER TABLE `product_list`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `stock_list`
--
ALTER TABLE `stock_list`
  ADD PRIMARY KEY (`stock_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `transaction_items`
--
ALTER TABLE `transaction_items`
  ADD KEY `product_id` (`product_id`),
  ADD KEY `transaction_id` (`transaction_id`);

--
-- Indexes for table `transaction_list`
--
ALTER TABLE `transaction_list`
  ADD PRIMARY KEY (`transaction_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_list`
--
ALTER TABLE `user_list`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category_list`
--
ALTER TABLE `category_list`
  MODIFY `category_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `product_list`
--
ALTER TABLE `product_list`
  MODIFY `product_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `stock_list`
--
ALTER TABLE `stock_list`
  MODIFY `stock_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `transaction_list`
--
ALTER TABLE `transaction_list`
  MODIFY `transaction_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_list`
--
ALTER TABLE `user_list`
  MODIFY `user_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product_list`
--
ALTER TABLE `product_list`
  ADD CONSTRAINT `product_list_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category_list` (`category_id`) ON DELETE CASCADE;

--
-- Constraints for table `stock_list`
--
ALTER TABLE `stock_list`
  ADD CONSTRAINT `stock_list_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product_list` (`product_id`) ON DELETE CASCADE;

--
-- Constraints for table `transaction_items`
--
ALTER TABLE `transaction_items`
  ADD CONSTRAINT `transaction_items_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product_list` (`product_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `transaction_items_ibfk_2` FOREIGN KEY (`transaction_id`) REFERENCES `transaction_list` (`transaction_id`) ON DELETE CASCADE;

--
-- Constraints for table `transaction_list`
--
ALTER TABLE `transaction_list`
  ADD CONSTRAINT `transaction_list_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_list` (`user_id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
