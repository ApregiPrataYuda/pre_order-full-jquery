-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2023 at 10:20 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pre_order`
--

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `supplierID` int(11) NOT NULL,
  `supplierKode` varchar(255) NOT NULL,
  `supplierName` varchar(255) NOT NULL,
  `supplierEmail` varchar(255) NOT NULL,
  `supplierNotelp` varchar(15) NOT NULL,
  `supplierNohp` int(15) NOT NULL,
  `supplierDescription` text NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`supplierID`, `supplierKode`, `supplierName`, `supplierEmail`, `supplierNotelp`, `supplierNohp`, `supplierDescription`, `created`, `updated`) VALUES
(1, 'SP2306230001', 'fgfgfg', 'apregiigig@gmail.com', '90909090', 2147483647, 'as', '2023-06-23 14:40:50', NULL),
(2, 'SP2306230002', 'fgfgfg', 'apregiigig@gmail.com', '90909090', 2147483647, 'LKLLK', '2023-06-23 14:42:18', NULL),
(3, 'SP2306230003', 'tes', 'apregiigig@gmail.com', '90909090', 2147483647, 'FGFGF', '2023-06-23 14:43:10', NULL),
(4, 'SP2306230004', 'tesLKL', 'apregiigig@gmail.com', '90909090', 2147483647, 'LLKLL', '2023-06-23 14:45:41', NULL),
(5, 'SP2306230005', 'tes', 'apregiigig@gmail.com', '90909090', 2147483647, 'yy', '2023-06-23 14:53:21', NULL),
(6, 'SP2306230006', 'tesvv', 'apregiigig@gmail.com', '4343434', 2147483647, 'ffsfsf', '2023-06-23 14:57:42', NULL),
(7, 'SP2306230007', 'fgfgfg', 'apregiigig@gmail.com', '1233456789', 2147483647, 'sdsdsdsd', '2023-06-23 15:01:36', NULL),
(8, 'SP2306230008', 'fgfgfg', 'apregiigig@gmail.com', '90909090', 2147483647, 'sdsd', '2023-06-23 15:01:55', NULL),
(9, 'SP2306230009', 'fgfgfg', 'apregiigig@gmail.com', '1233456789', 2147483647, 'dsds', '2023-06-23 15:09:12', NULL),
(10, 'SP2306230010', 'testoast', 'apregiigig@gmail.com', '90909090', 2147483647, 'sdsds', '2023-06-23 15:10:02', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`supplierID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `supplierID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
