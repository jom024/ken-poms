-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2024 at 10:19 AM
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
-- Database: `ken_poms`
--

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `client_id` int(11) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `contact_name` varchar(100) NOT NULL,
  `contact_title` varchar(50) DEFAULT NULL,
  `city` varchar(50) NOT NULL,
  `postal_code` varchar(20) NOT NULL,
  `province` varchar(50) NOT NULL,
  `contact_number` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`client_id`, `company_name`, `contact_name`, `contact_title`, `city`, `postal_code`, `province`, `contact_number`) VALUES
(1, 'Mandaue Foam', 'Jane Doe', 'Manager', 'Cebu City', '6000', 'Cebu', '0998767759');

-- --------------------------------------------------------

--
-- Table structure for table `customization_details`
--

CREATE TABLE `customization_details` (
  `customization_id` int(11) NOT NULL,
  `quotation_id` int(11) NOT NULL,
  `customization_details` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customization_details`
--

INSERT INTO `customization_details` (`customization_id`, `quotation_id`, `customization_details`) VALUES
(1, 1, 'Christmas color scheme and design');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employee_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `role` enum('Admin','Staff') NOT NULL,
  `date_employed` date NOT NULL,
  `phone_number` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employee_id`, `first_name`, `last_name`, `role`, `date_employed`, `phone_number`) VALUES
(1, 'Jomar', 'Cunado', 'Admin', '2015-07-01', '09988898737'),
(2, 'January', 'Toledo', 'Admin', '2018-07-11', '09999999999'),
(3, 'Heart ', 'Sumicad', 'Admin', '2018-07-11', '09982827635');

-- --------------------------------------------------------

--
-- Table structure for table `job_order`
--

CREATE TABLE `job_order` (
  `job_order_num` int(11) NOT NULL,
  `quotation_id` int(11) DEFAULT NULL,
  `product_name` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `job_price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `job_order`
--

INSERT INTO `job_order` (`job_order_num`, `quotation_id`, `product_name`, `description`, `job_price`) VALUES
(1, 1, 'Advertising tarpaulin', 'Mandaue Foam Advertisement for Christmas Sale ', 20000.00);

-- --------------------------------------------------------

--
-- Table structure for table `mode_of_payment`
--

CREATE TABLE `mode_of_payment` (
  `payment_mode_id` int(11) NOT NULL,
  `mode_name` varchar(50) NOT NULL,
  `details` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mode_of_payment`
--

INSERT INTO `mode_of_payment` (`payment_mode_id`, `mode_name`, `details`) VALUES
(1, 'Cash', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mode_of_receiving`
--

CREATE TABLE `mode_of_receiving` (
  `modeofreceiving_id` int(11) NOT NULL,
  `type` enum('Pick up','Delivery','','') NOT NULL,
  `delivery_date` date DEFAULT NULL,
  `pickup_date` date DEFAULT NULL,
  `receiver_name` varchar(100) NOT NULL,
  `delivery_address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mode_of_receiving`
--

INSERT INTO `mode_of_receiving` (`modeofreceiving_id`, `type`, `delivery_date`, `pickup_date`, `receiver_name`, `delivery_address`) VALUES
(1, 'Delivery', '2024-07-01', NULL, 'John Doe', 'Mandaue Foam, Banilad');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `order_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `modeofreceiving_id` int(11) NOT NULL,
  `total_price` decimal(10,2) NOT NULL,
  `order_date` date NOT NULL,
  `order_status` enum('Pending','Completed','','') NOT NULL,
  `fulfillment_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`order_id`, `client_id`, `modeofreceiving_id`, `total_price`, `order_date`, `order_status`, `fulfillment_date`) VALUES
(1, 1, 1, 50000.00, '2024-06-29', 'Completed', '2024-07-01');

-- --------------------------------------------------------

--
-- Table structure for table `order_item`
--

CREATE TABLE `order_item` (
  `order_id` int(11) NOT NULL,
  `job_order_num` int(11) NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `subtotal` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_item`
--

INSERT INTO `order_item` (`order_id`, `job_order_num`, `quantity`, `subtotal`) VALUES
(1, 1, 1, 30000.00);

-- --------------------------------------------------------

--
-- Table structure for table `particular`
--

CREATE TABLE `particular` (
  `particular_id` int(11) NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `particular_name` varchar(100) NOT NULL,
  `dimensions` varchar(50) DEFAULT NULL,
  `date_purchased` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `particular`
--

INSERT INTO `particular` (`particular_id`, `supplier_id`, `particular_name`, `dimensions`, `date_purchased`) VALUES
(1, 1, 'Tarpaulin', '7 x 10 inches', '2024-06-25'),
(2, 2, 'Ink', NULL, '2024-06-08');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `payment_mode_id` int(11) NOT NULL,
  `payment_status` enum('Paid','Not yet paid','','') NOT NULL,
  `payment_date` date NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `payment_type` enum('Downpayment','Installation','Final','Delivery') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `order_id`, `payment_mode_id`, `payment_status`, `payment_date`, `amount`, `payment_type`) VALUES
(1, 1, 1, 'Paid', '2024-06-29', 50000.00, 'Final');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `user_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(60) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`user_id`, `employee_id`, `username`, `password`, `email`) VALUES
(1, 1, 'jcunado', '$2y$10$.yw9BXp9DsBd8', 'jcunado@gmail.com'),
(2, 2, 'janjan', '$2y$10$qA1H8ke0xu7wF', 'januarytol@gmail.com'),
(3, 3, 'hsumicad', '$2y$10$r0Zp/4C7MVB886vwa/5zU.C8xFEXTHYGqFcy38J2E4DGqMkwUK1LW', 'heart123@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `quotation`
--

CREATE TABLE `quotation` (
  `quotation_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `quotation_date` date NOT NULL,
  `grand_total_price` decimal(10,2) NOT NULL,
  `discount` decimal(5,2) DEFAULT NULL,
  `valid_until` date DEFAULT NULL,
  `approval_status` enum('Completed','Pending','','') NOT NULL DEFAULT 'Pending',
  `installation_option` tinyint(1) NOT NULL,
  `installation_fee` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quotation`
--

INSERT INTO `quotation` (`quotation_id`, `client_id`, `quotation_date`, `grand_total_price`, `discount`, `valid_until`, `approval_status`, `installation_option`, `installation_fee`) VALUES
(1, 1, '2024-06-30', 50000.00, NULL, '2024-07-29', 'Completed', 1, 3000.00);

-- --------------------------------------------------------

--
-- Table structure for table `quotation_particular`
--

CREATE TABLE `quotation_particular` (
  `quotation_id` int(11) NOT NULL,
  `particular_id` int(11) NOT NULL,
  `particular_quantity` int(11) DEFAULT NULL,
  `unit_price` decimal(10,2) DEFAULT NULL,
  `total` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quotation_particular`
--

INSERT INTO `quotation_particular` (`quotation_id`, `particular_id`, `particular_quantity`, `unit_price`, `total`) VALUES
(1, 1, 30, 1000.00, 30000.00);

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `supplier_id` int(11) NOT NULL,
  `supplier_name` varchar(100) DEFAULT NULL,
  `contact_number` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`supplier_id`, `supplier_name`, `contact_number`) VALUES
(1, 'Cahilog', 988735467),
(2, 'ecotank', 987652728);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `customization_details`
--
ALTER TABLE `customization_details`
  ADD PRIMARY KEY (`customization_id`),
  ADD KEY `PKFK` (`quotation_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employee_id`);

--
-- Indexes for table `job_order`
--
ALTER TABLE `job_order`
  ADD PRIMARY KEY (`job_order_num`),
  ADD KEY `JobOrder_pkfk` (`quotation_id`);

--
-- Indexes for table `mode_of_payment`
--
ALTER TABLE `mode_of_payment`
  ADD PRIMARY KEY (`payment_mode_id`);

--
-- Indexes for table `mode_of_receiving`
--
ALTER TABLE `mode_of_receiving`
  ADD PRIMARY KEY (`modeofreceiving_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `client_id` (`client_id`),
  ADD KEY `modeofreceiving_id` (`modeofreceiving_id`);

--
-- Indexes for table `order_item`
--
ALTER TABLE `order_item`
  ADD PRIMARY KEY (`order_id`,`job_order_num`),
  ADD KEY `FK_job_order_num` (`job_order_num`);

--
-- Indexes for table `particular`
--
ALTER TABLE `particular`
  ADD PRIMARY KEY (`particular_id`),
  ADD KEY `supplier_id` (`supplier_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `payment_mode_id` (`payment_mode_id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `employee_id` (`employee_id`);

--
-- Indexes for table `quotation`
--
ALTER TABLE `quotation`
  ADD PRIMARY KEY (`quotation_id`),
  ADD KEY `client_id` (`client_id`);

--
-- Indexes for table `quotation_particular`
--
ALTER TABLE `quotation_particular`
  ADD PRIMARY KEY (`quotation_id`,`particular_id`),
  ADD KEY `FK_particular_id` (`particular_id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`supplier_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customization_details`
--
ALTER TABLE `customization_details`
  MODIFY `customization_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `job_order`
--
ALTER TABLE `job_order`
  MODIFY `job_order_num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mode_of_payment`
--
ALTER TABLE `mode_of_payment`
  MODIFY `payment_mode_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mode_of_receiving`
--
ALTER TABLE `mode_of_receiving`
  MODIFY `modeofreceiving_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `particular`
--
ALTER TABLE `particular`
  MODIFY `particular_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `quotation`
--
ALTER TABLE `quotation`
  MODIFY `quotation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `supplier_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customization_details`
--
ALTER TABLE `customization_details`
  ADD CONSTRAINT `PKFK` FOREIGN KEY (`quotation_id`) REFERENCES `quotation` (`quotation_id`);

--
-- Constraints for table `job_order`
--
ALTER TABLE `job_order`
  ADD CONSTRAINT `JobOrder_pkfk` FOREIGN KEY (`quotation_id`) REFERENCES `quotation` (`quotation_id`);

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `client` (`client_id`),
  ADD CONSTRAINT `order_ibfk_2` FOREIGN KEY (`modeofreceiving_id`) REFERENCES `mode_of_receiving` (`modeofreceiving_id`);

--
-- Constraints for table `order_item`
--
ALTER TABLE `order_item`
  ADD CONSTRAINT `FK_job_order_num` FOREIGN KEY (`job_order_num`) REFERENCES `job_order` (`job_order_num`),
  ADD CONSTRAINT `FK_order_id` FOREIGN KEY (`order_id`) REFERENCES `order` (`order_id`);

--
-- Constraints for table `particular`
--
ALTER TABLE `particular`
  ADD CONSTRAINT `particular_ibfk_1` FOREIGN KEY (`supplier_id`) REFERENCES `supplier` (`supplier_id`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `order` (`order_id`),
  ADD CONSTRAINT `payment_ibfk_2` FOREIGN KEY (`payment_mode_id`) REFERENCES `mode_of_payment` (`payment_mode_id`);

--
-- Constraints for table `profile`
--
ALTER TABLE `profile`
  ADD CONSTRAINT `profile_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`employee_id`);

--
-- Constraints for table `quotation`
--
ALTER TABLE `quotation`
  ADD CONSTRAINT `quotation_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `client` (`client_id`);

--
-- Constraints for table `quotation_particular`
--
ALTER TABLE `quotation_particular`
  ADD CONSTRAINT `FK_particular_id` FOREIGN KEY (`particular_id`) REFERENCES `particular` (`particular_id`),
  ADD CONSTRAINT `FK_quotation_id` FOREIGN KEY (`quotation_id`) REFERENCES `quotation` (`quotation_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
