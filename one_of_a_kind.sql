-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 02, 2016 at 02:20 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `one_of_a_kind`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `image`, `message`, `created_at`, `updated_at`) VALUES
(1, '', '', '', '', '', '2016-04-14 12:26:48', '2016-04-14 12:26:48'),
(2, 'Alice', 'Alice', 'testing', 'download.jpeg', 'Testing', '2016-04-14 20:17:34', '2016-04-14 20:17:34'),
(3, 'Tigger', 'Tigger', 'hello', '', 'I like this.', '2016-04-17 22:15:50', '2016-04-17 22:15:50'),
(4, 'Tigger', 'Tigger', 'hello', '', 'I like this.', '2016-04-17 22:16:49', '2016-04-17 22:16:49'),
(5, 'Testing', 'Testing', 'ddd', '', 'Nice to meet you.', '2016-04-17 22:17:29', '2016-04-17 22:17:29'),
(6, 'Testing', 'Testing', 'ddd', '', 'Nice to meet you.', '2016-04-17 22:18:18', '2016-04-17 22:18:18'),
(7, 'Testing', 'Testing', 'ddd', '', 'Nice to meet you.', '2016-04-17 22:18:21', '2016-04-17 22:18:21'),
(8, 'Testing', 'Testing', 'ddd', '', 'Nice to meet you.', '2016-04-17 22:19:38', '2016-04-17 22:19:38'),
(9, 'Thank', 'Thank', 'very', '/private/var/folders/v7/ds5vn8', 'much', '2016-04-17 22:21:53', '2016-04-17 22:21:53'),
(10, 'Thank', 'Thank', 'very', '/private/var/folders/v7/ds5vn8', 'much', '2016-04-17 22:23:21', '2016-04-17 22:23:21'),
(11, 'Thank', 'Thank', 'very', '/private/var/folders/v7/ds5vn8', 'much', '2016-04-17 22:24:39', '2016-04-17 22:24:39'),
(12, 'Thank', 'Thank', 'very', '/private/var/folders/v7/ds5vn8', 'much', '2016-04-17 22:27:39', '2016-04-17 22:27:39'),
(13, 'Tiigee', 'Tiigee', 'Hello', '', 'dddd', '2016-04-19 20:59:58', '2016-04-19 20:59:58'),
(14, 'Testing', 'Testing', 'testing', '', 'Message', '2016-04-24 18:01:40', '2016-04-24 18:01:40'),
(15, 'Hello', 'Hello', 'This is  a test.', '', 'This is a test.', '2016-04-26 16:45:31', '2016-04-26 16:45:31'),
(16, 'Testing', 'Testing', 'testing', '/private/var/folders/v7/ds5vn8', 'This is a test.', '2016-04-27 12:37:15', '2016-04-27 12:37:15'),
(17, 'Hello', 'Hello', 'ttt', '/private/var/folders/v7/ds5vn8', 'Hlelo', '2016-04-27 12:40:52', '2016-04-27 12:40:52'),
(18, 'Hh', 'Hh', 'hhhhh', '/private/var/folders/v7/ds5vn8', 'ddd', '2016-04-27 12:41:25', '2016-04-27 12:41:25'),
(19, 'GD', 'GD', 'gd', '/private/var/folders/v7/ds5vn8', 'gd', '2016-04-27 12:44:07', '2016-04-27 12:44:07'),
(20, 'GD', 'GD', 'gd', '20.jpg', 'gd', '2016-04-27 12:44:21', '2016-04-27 12:44:21'),
(21, 'dg', 'dg', 'dg', '', 'dg', '2016-04-27 12:46:25', '2016-04-27 12:46:25'),
(22, 'ty', 'ty', 'tytytyty', '', 'tytyty', '2016-04-27 12:48:51', '2016-04-27 12:48:51'),
(23, 'alice', 'alice', 'hello', '.jpg', '<script>alert(''hack'')</script>', '2016-04-28 21:36:47', '2016-04-28 21:36:47');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_04_12_041637_create_products_table', 2),
('2016_04_12_045915_create_contact_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('testinguse.aw@gmail.com', '12cb776523ac5aa1f92fe0721ccea83a0651694c7e34f31bc9659ea7054bdb05', '2016-04-14 13:45:28');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `object_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `price` decimal(5,2) NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `object_name`, `price`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Comb', '20.00', 'Maecenas eros vitae nonummy, ipsum arcu porttitor commodo, rutrum suspendisse neque hendrerit egestas tellus nullam, lacus aliquam nam nec dui sit etiam. Nunc parturient, ultricies quisque maecenas lobortis arcu urna, aenean cras pede, sed proin bibendum.', '1.jpg', '2016-04-19 14:46:12', '2016-04-26 13:20:33'),
(3, 'Key Ring', '10.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '3.jpg', '2016-04-19 14:58:24', '2016-04-19 14:58:24');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `role` enum('admin','user') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'testinguse.aw@gmail.com', '$2y$10$zspOCoJoemcPDxzaVqAuhen/gyf0T44MwL2xcvxJZEYN8/Nl0C2Ya', 'admin', 's1OS4q9N5mxcI5j4AGaZWDl4yuyo5ldYaqFshSwKS0ZMGSWEQ3rwJqNxZGgW', '2016-04-10 14:13:40', '2016-04-28 16:56:16'),
(2, 'alice', 'alice.wu.nz@gmail.com', '$2y$10$d4HMR5hs3hj/6vJpjxfN.eBDX0qTga8pHpPhsTS3SdrjDzHGfLrX6', 'user', '1oJhDmziVfRSxbuBvduTzhtBYznyw6crcGh4aYwuLiC7uqTS3XqzwfcxfVyo', '2016-04-10 14:14:53', '2016-04-10 14:41:35'),
(3, 'tigger', 'tigger@mail.com', '$2y$10$QMYwyju.IbOuZuphFGQbeueV8jZRuMCws4CT0xzB.6RTuLUxiS9Mm', 'user', 'FCCAr5A26QeH0C8oUjsXuadOBwEyvG4rrm8YtDrXYiln8OSmoysnzGCDMTtQ', '2016-04-10 15:14:53', '2016-04-18 14:28:25'),
(4, 'Jon', 'jon@mail.com', '$2y$10$Mt07fGN9GP7uYbEjnoK3AuKYv0WirX7Nbd3lW8GWqD9TxWTCMAequ', 'user', 'NkrhrlQXawZsuDYu4i537Uj9cD59x1jaTpvXbY4iggHDKqV0XRRXZrYmM0C9', '2016-04-11 17:14:16', '2016-04-11 17:14:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_object_name_unique` (`object_name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
