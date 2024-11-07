-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2024 at 09:13 AM
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
-- Database: `laravelten`
--

-- --------------------------------------------------------

--
-- Table structure for table `create_mails`
--

CREATE TABLE `create_mails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mailType` varchar(255) DEFAULT NULL,
  `reciver` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `bodyMassage` varchar(255) DEFAULT NULL,
  `attachment` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `nid` bigint(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` bigint(20) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `companyName` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `districts` varchar(255) DEFAULT NULL,
  `upozila` varchar(255) DEFAULT NULL,
  `post` varchar(255) DEFAULT NULL,
  `zipCode` bigint(20) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `user_id`, `nid`, `email`, `phone`, `password`, `photo`, `companyName`, `country`, `districts`, `upozila`, `post`, `zipCode`, `state`, `created_at`, `updated_at`) VALUES
(1, 'Sohana', 4, 123, 'sohana@gmail.com', 123, '123', 'C:\\fakepath\\couch.png', 'None', 'Bangladesh', 'Khagrachari', 'Ramgarh', 'Ramgarh', 4440, 'Ramgarh', '2024-11-06 21:42:28', '2024-11-06 21:42:28'),
(2, 'Nur', 5, 123, 'nur@gmail.com', 123, '123', 'C:\\fakepath\\spencer-moore-1.jpg', 'None', 'Bangladesh', 'Khagrachari', 'Ramgarh', 'Ramgarh', 4440, 'Ramgarh', '2024-11-06 21:43:41', '2024-11-06 21:43:41');

-- --------------------------------------------------------

--
-- Table structure for table `customer_notes`
--

CREATE TABLE `customer_notes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customerName` varchar(255) DEFAULT NULL,
  `employeeName` varchar(255) DEFAULT NULL,
  `phone` bigint(20) DEFAULT NULL,
  `employeeId` bigint(20) DEFAULT NULL,
  `note` varchar(255) DEFAULT NULL,
  `firstMeet` date DEFAULT NULL,
  `nextMeet` date DEFAULT NULL,
  `attachment` varchar(255) DEFAULT NULL,
  `meetLocation` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer_notes`
--

INSERT INTO `customer_notes` (`id`, `customerName`, `employeeName`, `phone`, `employeeId`, `note`, `firstMeet`, `nextMeet`, `attachment`, `meetLocation`, `created_at`, `updated_at`) VALUES
(1, '1', '1', NULL, NULL, 'None', '2024-11-28', '2024-11-22', '', 'GEC', '2024-11-06 21:44:22', '2024-11-06 21:44:22'),
(2, '1', '2', NULL, NULL, 'None', '2024-11-19', '2024-11-22', '', '7 Days', '2024-11-06 21:46:35', '2024-11-06 21:46:35');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_11_000000_create_roles_table', 1),
(2, '2014_10_12_000000_create_users_table', 1),
(3, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2024_10_03_032237_create_customers_table', 1),
(7, '2024_10_09_071907_create_user_metas_table', 1),
(8, '2024_10_12_141353_create_staff_table', 1),
(9, '2024_10_16_042925_create_projectfiles_table', 1),
(10, '2024_10_24_044154_create_create_mails_table', 1),
(11, '2024_10_26_034600_create_customer_notes_table', 1),
(12, '2024_10_27_041303_create_tasks_table', 1),
(13, '2024_10_28_180600_create_reviews_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projectfiles`
--

CREATE TABLE `projectfiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `projectName` varchar(255) DEFAULT NULL,
  `projectType` varchar(255) NOT NULL,
  `doHoPr` varchar(255) DEFAULT NULL,
  `frontLiAndFrame` varchar(255) DEFAULT NULL,
  `backLib` varchar(255) DEFAULT NULL,
  `frontEndLan` varchar(255) DEFAULT NULL,
  `backLang` varchar(255) DEFAULT NULL,
  `database` varchar(255) DEFAULT NULL,
  `customerNameP` varchar(255) DEFAULT NULL,
  `phone` bigint(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `estimatedBudget` bigint(20) DEFAULT NULL,
  `reciveDate` date DEFAULT NULL,
  `eDuration` bigint(20) DEFAULT NULL,
  `eEndDate` date DEFAULT NULL,
  `projectLeader` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projectfiles`
--

INSERT INTO `projectfiles` (`id`, `projectName`, `projectType`, `doHoPr`, `frontLiAndFrame`, `backLib`, `frontEndLan`, `backLang`, `database`, `customerNameP`, `phone`, `email`, `description`, `estimatedBudget`, `reciveDate`, `eDuration`, `eEndDate`, `projectLeader`, `created_at`, `updated_at`) VALUES
(1, 'Code Crufter', 'Web Application Devolopment', 'Client', 'React', 'Laravel', 'JavaScript', 'PHP', 'mysql', '1', NULL, NULL, 'None', 100, '2024-11-29', 1, '2024-11-21', '1', '2024-11-06 21:47:24', '2024-11-06 21:47:24'),
(2, 'Gallary', 'Web Application Devolopment', 'Client', 'React', 'Laravel', 'JavaScript', 'Ruby', 'postgresql', '2', NULL, NULL, 'None', 500, '2024-11-27', 5, '2024-11-21', '2', '2024-11-06 21:48:55', '2024-11-06 21:48:55');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `massage` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_name` varchar(255) NOT NULL,
  `role_identity` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role_name`, `role_identity`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'superadmin', '2024-11-06 21:32:01', NULL),
(2, 'Admin', 'admin', '2024-11-06 21:32:01', NULL),
(3, 'Staff', 'staff', '2024-11-06 21:32:01', NULL),
(4, 'Customer', 'customer', '2024-11-06 21:32:01', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `nid` bigint(20) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` bigint(20) DEFAULT NULL,
  `joiningDate` date DEFAULT NULL,
  `employeId` bigint(20) DEFAULT NULL,
  `designation` varchar(255) NOT NULL,
  `expart` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `signature` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `districts` varchar(255) NOT NULL,
  `upozila` varchar(255) NOT NULL,
  `post` varchar(255) NOT NULL,
  `zipCode` bigint(20) NOT NULL,
  `state` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `projectId` bigint(20) DEFAULT NULL,
  `employeename_Id` varchar(255) DEFAULT NULL,
  `note` varchar(255) DEFAULT NULL,
  `task` varchar(255) DEFAULT NULL,
  `assignDate` date DEFAULT NULL,
  `finishDate` date DEFAULT NULL,
  `actualDate` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `projectId`, `employeename_Id`, `note`, `task`, `assignDate`, `finishDate`, `actualDate`, `created_at`, `updated_at`) VALUES
(1, 1, '1', 'Do All Dessign Related Work', 'Bootstrap', '2024-11-26', '2024-11-12', '2024-11-07', '2024-11-06 21:49:51', '2024-11-06 21:49:51'),
(2, 1, '2', 'wwwwww', 'none', '2024-11-15', '2024-11-20', '2024-10-28', '2024-11-06 21:55:00', '2024-11-06 21:55:00'),
(3, 1, '4', 'cxv', 'sdfs', '2024-11-08', '2024-11-27', '2024-11-28', '2024-11-06 22:00:56', '2024-11-06 22:00:56'),
(6, 1, '1', 'Do All Backend Work', 'sfsfs', '2024-11-28', '2024-11-27', '2024-11-20', '2024-11-07 00:55:04', '2024-11-07 00:55:04'),
(7, 1, '5', 'fbvdf', 'dgfdg', '2024-11-20', '2024-12-04', '2024-11-14', '2024-11-07 01:02:56', '2024-11-07 01:02:56'),
(8, 1, '3', 'ttttttttt', 'wwwwwww', '2024-11-21', '2024-11-20', '2024-11-19', '2024-11-07 01:03:54', '2024-11-07 01:03:54'),
(9, 1, '4', '11111', '1111111', '2024-11-03', '2024-11-03', '2024-11-03', '2024-11-07 02:12:39', '2024-11-07 02:12:39');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `nid` bigint(20) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` bigint(20) DEFAULT NULL,
  `joiningDate` date DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `expart` varchar(255) DEFAULT NULL,
  `department` varchar(255) DEFAULT NULL,
  `signature` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `districts` varchar(255) DEFAULT NULL,
  `upozila` varchar(255) DEFAULT NULL,
  `post` varchar(255) DEFAULT NULL,
  `zipCode` bigint(20) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `nid`, `dob`, `email`, `phone`, `joiningDate`, `password`, `designation`, `expart`, `department`, `signature`, `photo`, `country`, `districts`, `upozila`, `post`, `zipCode`, `state`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'Md Ramzan Ali', 123, '2024-11-05', 'mdramzanaliisdbr59@gmail.com', 123, '2024-11-21', '$2y$12$M0jily0ps1Tyih.R8UH8e.WalDuJkKLD.D2llBSzp/jpcQPJ/5W/i', 'Super Admin', 'All', NULL, '17309506957603.png', '17309506954536.png', 'Bangladesh', 'Khagrachari', 'R', 'Ramgarh', 4440, 'Ramgarh', NULL, NULL, '2024-11-06 21:38:16', '2024-11-06 21:38:16'),
(2, 2, 'Mukut', 123, '2024-11-28', 'mukut@gmail.com', 123, '2024-10-29', '$2y$12$xLz9MohQQkJoaIwSxVR38ulbknj4n/hUwRU8d6gWXBQPt4Rfl7YEy', 'Customer Exicutive', 'All', NULL, '17309507702131.png', '17309507706372.png', 'Bangladesh', 'Khagrachari', 'Ramgarh', 'Ramgarh', 4440, 'Ramgarh', NULL, NULL, '2024-11-06 21:39:30', '2024-11-06 21:39:30'),
(3, 3, 'Staff', 123, '2024-11-06', 'staff@gmail.com', 123, '2024-11-26', '$2y$12$4ECk1DCNDbwxOMqP59O/be3bog4w7iXJNvzo4j1Kl3rNtBb7v6.ZC', 'Staff', 'Web', NULL, '17309508958620.png', '17309508956880.png', 'Bangladesh', 'Khagrachari', 'Ramgarh', 'Ramgarh', 4440, 'Ramgarh', NULL, NULL, '2024-11-06 21:41:35', '2024-11-06 21:41:35'),
(4, 4, 'Sohana', 123, NULL, 'sohana@gmail.com', 123, NULL, '$2y$12$lYNixIryfJmEEsbPsygujeyEjLJ2YncXsL26om44Qyw8XAejOWPwO', NULL, NULL, NULL, NULL, 'C:\\fakepath\\couch.png', 'Bangladesh', 'Khagrachari', 'Ramgarh', 'Ramgarh', 4440, 'Ramgarh', NULL, NULL, '2024-11-06 21:42:28', '2024-11-06 21:42:28'),
(5, 4, 'Nur', 123, NULL, 'nur@gmail.com', 123, NULL, '$2y$12$clFh0hDTAo7TqEDMuSUarudYQrj5PNCRxiY3j2l6jgRM3BgYzTZR.', NULL, NULL, NULL, NULL, 'C:\\fakepath\\spencer-moore-1.jpg', 'Bangladesh', 'Khagrachari', 'Ramgarh', 'Ramgarh', 4440, 'Ramgarh', NULL, NULL, '2024-11-06 21:43:41', '2024-11-06 21:43:41');

-- --------------------------------------------------------

--
-- Table structure for table `user_metas`
--

CREATE TABLE `user_metas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `nid` bigint(20) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` bigint(20) DEFAULT NULL,
  `joiningDate` date DEFAULT NULL,
  `employeId` bigint(20) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `expart` varchar(255) DEFAULT NULL,
  `department` varchar(255) DEFAULT NULL,
  `signature` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `districts` varchar(255) DEFAULT NULL,
  `upozila` varchar(255) DEFAULT NULL,
  `post` varchar(255) DEFAULT NULL,
  `zipCode` bigint(20) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_metas`
--

INSERT INTO `user_metas` (`id`, `user_id`, `nid`, `dob`, `email`, `phone`, `joiningDate`, `employeId`, `designation`, `expart`, `department`, `signature`, `photo`, `country`, `districts`, `upozila`, `post`, `zipCode`, `state`, `created_at`, `updated_at`) VALUES
(1, 1, 123, '2024-11-05', 'mdramzanaliisdbr59@gmail.com', 123, '2024-11-21', NULL, 'Super Admin', 'All', 'Android App Development', 'D:\\1281518\\Xampp\\tmp\\php4799.tmp', 'D:\\1281518\\Xampp\\tmp\\php4798.tmp', 'Bangladesh', 'Khagrachari', 'R', 'Ramgarh', 4440, 'Ramgarh', '2024-11-06 21:38:16', '2024-11-06 21:38:16'),
(2, 2, 123, '2024-11-28', 'mukut@gmail.com', 123, '2024-10-29', NULL, 'Customer Exicutive', 'All', 'PC App Debolopment', 'D:\\1281518\\Xampp\\tmp\\php6CF0.tmp', 'D:\\1281518\\Xampp\\tmp\\php6CEF.tmp', 'Bangladesh', 'Khagrachari', 'Ramgarh', 'Ramgarh', 4440, 'Ramgarh', '2024-11-06 21:39:30', '2024-11-06 21:39:30'),
(3, 3, 123, '2024-11-06', 'staff@gmail.com', 123, '2024-11-26', NULL, 'Staff', 'Web', 'PC App Debolopment', 'D:\\1281518\\Xampp\\tmp\\php54A2.tmp', 'D:\\1281518\\Xampp\\tmp\\php54A1.tmp', 'Bangladesh', 'Khagrachari', 'Ramgarh', 'Ramgarh', 4440, 'Ramgarh', '2024-11-06 21:41:35', '2024-11-06 21:41:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `create_mails`
--
ALTER TABLE `create_mails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_notes`
--
ALTER TABLE `customer_notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `projectfiles`
--
ALTER TABLE `projectfiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- Indexes for table `user_metas`
--
ALTER TABLE `user_metas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `create_mails`
--
ALTER TABLE `create_mails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customer_notes`
--
ALTER TABLE `customer_notes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projectfiles`
--
ALTER TABLE `projectfiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_metas`
--
ALTER TABLE `user_metas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
