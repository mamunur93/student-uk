-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2021 at 06:36 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uk_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_06_30_154237_create_students_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `citizenship` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namechange` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `passportnumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marital` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skype` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `englishlevel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `score` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `written` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reading` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `spoken` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `listen` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `heightleveledu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gradingscheme` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gradeoutof` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `edulevel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sscinst` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sscyear` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sscgroup` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sscresult` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hscinst` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hscyear` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hscgroup` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hscresult` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `countryins` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `institute` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `primarylanguage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attendedfrom` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attendedto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `degreeaward` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instituteaddress` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inscountry` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instzip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `insttown` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `refused` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passport` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cv` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ref1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ref2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ssccer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ssctrans` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hsccer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hsctrns` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sop` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sign` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photos` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `otherstrns` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `otherscer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `user` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `fname`, `lname`, `birth`, `lang`, `citizenship`, `namechange`, `passportnumber`, `dob`, `gender`, `marital`, `skype`, `address`, `city`, `country`, `state`, `post`, `mobile`, `email`, `englishlevel`, `score`, `written`, `reading`, `spoken`, `listen`, `heightleveledu`, `gradingscheme`, `gradeoutof`, `edulevel`, `sscinst`, `sscyear`, `sscgroup`, `sscresult`, `hscinst`, `hscyear`, `hscgroup`, `hscresult`, `countryins`, `institute`, `primarylanguage`, `attendedfrom`, `attendedto`, `degreeaward`, `instituteaddress`, `inscountry`, `instzip`, `insttown`, `refused`, `passport`, `cv`, `ref1`, `ref2`, `ssccer`, `ssctrans`, `hsccer`, `hsctrns`, `sop`, `sign`, `photos`, `otherstrns`, `otherscer`, `status`, `created_at`, `user`, `updated_at`) VALUES
(1, 'tasnin', 'khan Tasnin', '0000-00-00', 'tasnin', 'BS', 'no', '123123', '2021-07-14', 'male', 'Single', NULL, 'Holy Heaven Flat – 2D (2nd Floor), Plot -1/3, Block-A, Mohammadpur Housing Estate,Asadgate (Beside Sonar Bangla Petrol Pump)', 'Dhaka', 'AW', 'Dhaka', '1207', '+8809666777124', 'info@glocalgroup.biz', 'Do not have', NULL, NULL, NULL, NULL, NULL, 'a', 'a', 'a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'No', 'main-logo.png', '20210726071938.23621662_1497246700371184_1103828667558962016_n.jpg', '20210726072005.28958741_10215608235700969_2435056846910783488_n.jpg', '20210726072033.25348760_411327015966518_3811586186900775093_n.jpg', '20210726071952.37608798_2561520364073596_3990037429871443968_n.jpg', '20210726072018.25348760_411327015966518_3811586186900775093_n.jpg', '20210726072147.48080604_2693003930925238_6263998149522620416_n.jpg', '20210726072147.48080604_2693003930925238_6263998149522620416_n.jpg', '20210726080055.25348760_411327015966518_3811586186900775093_n.jpg', '20210726072119.48080604_2693003930925238_6263998149522620416_n.jpg', 'web.jpg', '20210726080105.53618339_10156112117106220_1353956013060915200_n.jpg', '20210726080003.23621662_1497246700371184_1103828667558962016_n.jpg', 'Document Require', '2021-07-14 00:39:40', '2', '2021-07-26 02:01:05'),
(2, 'Md.', 'rahaman', '0000-00-00', 'bangla', 'BS', 'no', '123123', '2021-07-15', 'male', 'Single', NULL, 'House 26 (3rd floor) Road 8,Nikunja-2, khillhet', 'Dhaka', 'BD', 'Dhaka', '1207', '+8809666777124', 'info@glocalgroup.biz', 'Do not have', NULL, NULL, NULL, NULL, NULL, 'a', 'a', 'a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'No', '20210714130410.jpg', 'C:\\xampp\\tmp\\phpDFEC.tmp', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Congratulation', '2021-07-14 07:04:10', '2', '2021-07-25 23:48:08'),
(3, 'Md.', 'rahaman', 'AF', 'bangla', 'BD', 'yes', '123123', '2021-07-27', 'male', 'Single', 'asdfsa', 'House 26 (3rd floor) Road 8,Nikunja-2, khillhet', 'Dhaka', 'BD', 'Dhaka', '1207', '+8809666777124', 'info@glocalgroup.biz', 'Do not have', NULL, NULL, NULL, NULL, NULL, 'SSC', 'a', 'a', NULL, 'Nai', '2009', 'Science', '5', 'Not', '2011', 'science', '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'No', '20210726160443.23621662_1497246700371184_1103828667558962016_n.jpg', '20210726160443.25348760_411327015966518_3811586186900775093_n.jpg', '20210726160443.25445953_1700726529986293_1438772509380895116_n.jpg', '20210726160443.27337215_1568977006531486_6417225887122862456_n.jpg', '20210726160443.47504595_10205428044817044_5538927512983175168_n.jpg', '20210726160443.37608798_2561520364073596_3990037429871443968_n.jpg', '20210726160443.47504595_10205428044817044_5538927512983175168_n.jpg', '20210726160443.48080604_2693003930925238_6263998149522620416_n.jpg', '20210726160443.47504595_10205428044817044_5538927512983175168_n.jpg', '20210726160443.27337215_1568977006531486_6417225887122862456_n.jpg', '20210726160443.28958741_10215608235700969_2435056846910783488_n.jpg', '20210726160443.53618339_10156112117106220_1353956013060915200_n.jpg', '20210726160443.27541042_1563880360374484_8187995999818245435_n.jpg', NULL, '2021-07-26 10:04:43', '3', '2021-07-26 10:04:43');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` tinyint(1) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mamunur Rahaman', 'mamunur93@gmail.com', 1, NULL, '$2y$10$k0iOF1DTzpeeeQ.vPT1ZCukQGz/ZuWe63yVOigG.BxKXuUnaFPXV6', NULL, '2021-07-13 12:38:21', '2021-07-14 00:06:02'),
(2, 'Glocal Power Limited', 'agent@agent.com', 2, NULL, '$2y$10$9dqrdCbkS2x5d9N5r13VNuu8cKs3aZlDL28kY8Nvocu2yNManVvS2', NULL, '2021-07-14 01:39:43', '2021-07-14 01:39:43'),
(3, 'author', 'author@author.com', 3, NULL, '$2y$10$sGQy./ox.UAXVgnhRZWPqeYF.5VhYmdVQpcKqr2I9vXVt3HVASOym', NULL, '2021-07-26 02:10:41', '2021-07-26 02:10:41');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
