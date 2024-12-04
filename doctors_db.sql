-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2024 at 01:43 PM
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
-- Database: `doctors_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `message` text NOT NULL,
  `subscribed` tinyint(1) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `specialty` varchar(100) NOT NULL,
  `diseases` text NOT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `name`, `specialty`, `diseases`, `phone`, `email`) VALUES
(1, 'Dr. Ahmed Khan', 'Cardiologist', 'Heart Disease, High Blood Pressure, Stroke, Angina, Arrhythmia', NULL, NULL),
(2, 'Dr. Fatima Ali', 'Dermatologist', 'Acne, Psoriasis, Eczema, Skin Cancer, Allergies', NULL, NULL),
(3, 'Dr. Bilal Shah', 'Neurologist', 'Alzheimer\'s, Parkinson\'s, Epilepsy, Migraines, Multiple Sclerosis', NULL, NULL),
(4, 'Dr. Ayesha Tariq', 'Pediatrician', 'Asthma, Allergies, Fever, Infections, Growth and Development issues', NULL, NULL),
(5, 'Dr. Imran Iqbal', 'Orthopedic Surgeon', 'Arthritis, Sports Injuries, Fractures, Back Pain, Joint Replacement', NULL, NULL),
(6, 'Dr. Ahmed Khan', 'Cardiologist', 'Heart Disease, High Blood Pressure, Stroke, Angina, Arrhythmia', NULL, NULL),
(7, 'Dr. Fatima Ali', 'Dermatologist', 'Acne, Psoriasis, Eczema, Skin Cancer, Allergies', NULL, NULL),
(8, 'Dr. Bilal Shah', 'Neurologist', 'Alzheimer\'s, Parkinson\'s, Epilepsy, Migraines, Multiple Sclerosis', NULL, NULL),
(9, 'Dr. Ayesha Tariq', 'Pediatrician', 'Asthma, Allergies, Fever, Infections, Growth and Development issues', NULL, NULL),
(10, 'Dr. Imran Iqbal', 'Orthopedic Surgeon', 'Arthritis, Sports Injuries, Fractures, Back Pain, Joint Replacement', NULL, NULL),
(11, 'Dr. Ahmed Khan', 'Cardiologist', 'Heart Disease, High Blood Pressure, Stroke, Angina, Arrhythmia', '123-456-7890', 'ahmed.khan@hospital.com'),
(12, 'Dr. Fatima Ali', 'Dermatologist', 'Acne, Psoriasis, Eczema, Skin Cancer, Allergies', '123-456-7891', 'fatima.ali@clinic.com'),
(13, 'Dr. Ahmed Khan', 'Cardiologist', 'Heart Disease, High Blood Pressure, Stroke, Angina, Arrhythmia', '123-456-7890', 'ahmed.khan@hospital.com'),
(14, 'Dr. Fatima Ali', 'Dermatologist', 'Acne, Psoriasis, Eczema, Skin Cancer, Allergies', '123-456-7891', 'fatima.ali@clinic.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `password`, `created_at`) VALUES
(1, 'Asjad Rizvi', 'asjad@gmail.com', '$2y$10$ODDaNJK8Dru5rIAdBD4oEOETl8rlmK0jwp6tc1qx620YhVf2glZpS', '2024-12-04 11:26:19'),
(2, 'Talha Ahmer', 'talha@gmail.com', '$2y$10$Acb1xbwGHeBGqkbQBn1Waeko0a.QWJdfutbpLgRRKhUnP4bKdTQm.', '2024-12-04 11:26:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
