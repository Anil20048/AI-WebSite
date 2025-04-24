-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 24, 2025 at 11:40 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `form_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `form_submissions`
--

CREATE TABLE `form_submissions` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `heading1` varchar(255) NOT NULL,
  `message1` text DEFAULT NULL,
  `image1` varchar(500) DEFAULT NULL,
  `submitted_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `form_submissions`
--

INSERT INTO `form_submissions` (`id`, `name`, `heading1`, `message1`, `image1`, `submitted_at`) VALUES
(28, 'OCI Database with PostgreSQL Strengthens Disaster Recovery and Extensibility', 'Secure, Reliable Backup Management', 'Backups are essential for maintaining business continuity, helping ensure that database data is protected and can be restored in case of a failure, accidental deletion, or corruption.\r\n\r\nWith OCI Database with PostgreSQL backup copy, you can copy backups to a secondary region. This helps maintain redundancy by distributing backups to another OCI region, allowing for disaster recovery even if the primary region is unavailable.\r\n\r\nFollow the 3 simple steps below to start using backup copy.\r\n\r\n First, choose a backup and click the “Create backup copy” option in the More Actions menu.', 'uploads/1745315525_back.avif', '2025-04-22 09:52:05'),
(29, 'Firewall, FastConnect, and other security enhancements in the new OCI Core Landing Zone', 'Remote Connectivity Network Enhancements ', 'This new enhancement to the network module enables customers to configure the Core Landing Zone hub-and-spoke topology to create an IPsec VPN for on-premises connectivity. The connection is configured with Libreswan as the customer premises equipment, along with a three-tier VCN and an Exadata VCN, which are peered through the DRG. The DRG is configured to route traffic across all VCNs.\r\n\r\nThe base network module now exposes all the attributes to manage your IPsec tunnels, and you can define any number of IPsec connections (0, 1, or multiple) as well as the IPsec connection definitions.  ', 'uploads/1745315863_sil1.avif', '2025-04-22 09:57:43'),
(30, 'Announcing General Availability of Valkey in OCI Cache', 'Migrating from Redis to Valkey in OCI Cache', 'Valkey maintains API compatibility with Redis OSS, allowing you to migrate your existing Redis applications to Valkey with zero code changes. The smooth transition makes it an appealing option for developers and teams who want to leverage Valkey\'s performance advantages without the hassle of re-architecting their environment.\r\n\r\nYou can start by creating a new cluster with Valkey 7.2 in OCI Cache. And if you have a Redis 7.0 based cluster in OCI Cache you can migrate it to Valkey 7.2 with a simple single-click action, as shown below.', 'uploads/1745315936_upgred.jpeg', '2025-04-22 09:58:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form_submissions`
--
ALTER TABLE `form_submissions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form_submissions`
--
ALTER TABLE `form_submissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
