-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2024 at 09:07 PM
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
-- Database: `landlord`
--

-- --------------------------------------------------------

--
-- Table structure for table `fee`
--

CREATE TABLE `fee` (
  `FeeID` int(11) DEFAULT NULL,
  `householdID` int(11) DEFAULT NULL,
  `amount` decimal(15,2) DEFAULT NULL,
  `due_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `property_id` int(11) NOT NULL,
  `landlord_id` int(11) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `house_number` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `property_type` varchar(255) DEFAULT NULL,
  `beds` int(11) DEFAULT NULL,
  `baths` int(11) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`property_id`, `landlord_id`, `address`, `country`, `city`, `house_number`, `price`, `description`, `property_type`, `beds`, `baths`, `date`) VALUES
(9, 3, '', '', '', 0, 0, '', '', 0, 0, ''),
(10, 3, 'ilembo', 'Tanzania', 'dodoma', 112, 2500, 'house is so cool ', 'House', 6, 7, '2024-08-31');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` enum('landlord','tenant') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `phone`, `password`, `role`) VALUES
(2, 'Jamy', 'wilysovera164@gmail.com', 621951961, '$2y$10$K7gWnG2f5r0V1uK.YmhBvOowbvtIwsrp9mzM76DA7XWWdLkvkFWJC', 'landlord'),
(3, 'Abinery', 'abinerykinwiko@gmail.com', 750670220, '$2y$10$6cVweTaH22IFq5LEk1Hs/um/xxuJj6qx4uxB126KrigGj3JtL/X6W', 'tenant'),
(4, 'mimi mtu', 'mimi@gmail.com', 1234567, '$2y$10$kUUi7ph8KYcXsk6tFnzhB.UBp36UkNE00g6s/7TKOpqD.YYJi8hCW', 'landlord'),
(5, 'mimi mtu', 'mimi@gmail.com', 1234567, '$2y$10$S9g1UQHG.9vEkb3lUPmHc.DBtowZaGERfENF1VdVOdsjuB19Tub2W', 'tenant'),
(6, 'Jamy', 'jamysovera@gmail.com', 621951961, '$2y$10$TtSoOV40vIr41iJVSs9x/eClxa8QOzIOJyzSSJhwu2i7J.KQaNWJC', 'landlord'),
(7, 'wille', 'wille@sovera.com', 621951961, '$2y$10$O7iBtKGrI1pvNviTraXPG.gnSUu85EuxNR6kQHNFrN4luQB7jIsUO', 'landlord'),
(8, 'masaka limbu', 'limbumasaka@gmail.com', 734567823, '$2y$10$MgJpacElTX1mOtM9ANRgiO9xDtql4Os.0w2sWM5LtID51C0CjB86u', 'landlord');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fee`
--
ALTER TABLE `fee`
  ADD KEY `householdID` (`householdID`);

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`property_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `property_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `fee`
--
ALTER TABLE `fee`
  ADD CONSTRAINT `fee_ibfk_1` FOREIGN KEY (`householdID`) REFERENCES `household` (`householdID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
