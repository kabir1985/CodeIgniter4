-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2021 at 12:28 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ims_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` bigint(20) NOT NULL,
  `cus_first_name` varchar(50) NOT NULL,
  `cus_last_name` varchar(50) NOT NULL,
  `cus_email` varchar(80) NOT NULL,
  `cus_phone` varchar(50) NOT NULL,
  `cus_address` varchar(200) NOT NULL,
  `cus_tin` varchar(50) NOT NULL,
  `cus_company` varchar(100) NOT NULL,
  `cus_type` varchar(50) NOT NULL,
  `cus_creation_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `cus_first_name`, `cus_last_name`, `cus_email`, `cus_phone`, `cus_address`, `cus_tin`, `cus_company`, `cus_type`, `cus_creation_date`) VALUES
(11, 'ayan11', 'zahin', 'ayan@gmail.com', '01913698854', 'banasree', '33331425875', 'Mia Group', 'special', '0000-00-00 00:00:00'),
(12, 'ayan11', 'zahin', 'ayan@gmail.com', '01913698854', 'banasree', '33331425875', 'abc Group', 'general', '0000-00-00 00:00:00'),
(13, 'motin', 'mia', 'sfs@gmail.com', '01913698854', 'dhaka', '21/02/2021', 'motin&Brothers', 'special', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `customer_group`
--

CREATE TABLE `customer_group` (
  `customer_group_id` bigint(20) NOT NULL,
  `cus_group_name` varchar(80) NOT NULL,
  `cus_due_limit` bigint(20) NOT NULL,
  `discount_percent` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_group`
--

INSERT INTO `customer_group` (`customer_group_id`, `cus_group_name`, `cus_due_limit`, `discount_percent`) VALUES
(1, 'Special Customer', 5000, '5'),
(2, 'General', 2000, '10'),
(3, 'General', 20001, '3');

-- --------------------------------------------------------

--
-- Table structure for table `expense`
--

CREATE TABLE `expense` (
  `expense_id` bigint(20) NOT NULL,
  `expense_ref_no` varchar(150) NOT NULL,
  `expense_category` varchar(100) NOT NULL,
  `expense_sub_category` varchar(100) NOT NULL,
  `expense_what_for` varchar(200) NOT NULL,
  `expense_amount` bigint(100) NOT NULL,
  `expense_note` varchar(200) DEFAULT NULL,
  `expense_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `expense`
--

INSERT INTO `expense` (`expense_id`, `expense_ref_no`, `expense_category`, `expense_sub_category`, `expense_what_for`, `expense_amount`, `expense_note`, `expense_date`) VALUES
(9, 'zyz', '4', '3', 'test', 555, 'test', '06/03/2021'),
(10, 'ref-0014', '4', '3', 'test1', 400, 'test', '06/03/2021');

-- --------------------------------------------------------

--
-- Table structure for table `expense_category`
--

CREATE TABLE `expense_category` (
  `expense_category_id` bigint(20) NOT NULL,
  `expense_category_name` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `expense_category`
--

INSERT INTO `expense_category` (`expense_category_id`, `expense_category_name`) VALUES
(4, 'Khata Purchase'),
(7, 'Family Purpose');

-- --------------------------------------------------------

--
-- Table structure for table `expense_sub_category`
--

CREATE TABLE `expense_sub_category` (
  `expense_sub_category_id` bigint(20) NOT NULL,
  `expense_category_id` bigint(20) NOT NULL,
  `expense_sub_category_name` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `expense_sub_category`
--

INSERT INTO `expense_sub_category` (`expense_sub_category_id`, `expense_category_id`, `expense_sub_category_name`) VALUES
(1, 4, 'Bangla Khata1'),
(3, 7, 'Cloths Purchase');

-- --------------------------------------------------------

--
-- Table structure for table `payment_receive`
--

CREATE TABLE `payment_receive` (
  `payment_id` bigint(20) NOT NULL,
  `bill_no` varchar(100) NOT NULL,
  `total_amount` bigint(20) NOT NULL,
  `received_amount` bigint(20) NOT NULL,
  `balance_amount` bigint(20) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `customer_contact` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product_brand`
--

CREATE TABLE `product_brand` (
  `brand_id` bigint(20) NOT NULL,
  `product_brand_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_brand`
--

INSERT INTO `product_brand` (`brand_id`, `product_brand_name`) VALUES
(15, 'Amanat Shah'),
(16, 'Bata'),
(17, 'La-reve'),
(18, 'Nokia');

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `product_category_id` bigint(20) NOT NULL,
  `category_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`product_category_id`, `category_name`) VALUES
(104, 'Shows'),
(105, 'Cloths1'),
(106, 'Oil1'),
(107, 'Electronics');

-- --------------------------------------------------------

--
-- Table structure for table `product_group`
--

CREATE TABLE `product_group` (
  `product_group_id` bigint(20) NOT NULL,
  `group_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_group`
--

INSERT INTO `product_group` (`product_group_id`, `group_name`) VALUES
(32, 'Women'),
(35, 'Man'),
(36, 'J7Prime');

-- --------------------------------------------------------

--
-- Table structure for table `product_inital_stock`
--

CREATE TABLE `product_inital_stock` (
  `product_id` bigint(20) NOT NULL,
  `product_name` varchar(100) DEFAULT NULL,
  `product_category` varchar(50) DEFAULT NULL,
  `product_brand` varchar(50) DEFAULT NULL,
  `product_group` int(20) NOT NULL,
  `product_unit` varchar(50) DEFAULT NULL,
  `codefor_barcode` varchar(50) DEFAULT NULL,
  `tax_perchantage` varchar(11) NOT NULL,
  `productinitial_quantity` varchar(20) NOT NULL,
  `buying_unit_price` int(11) NOT NULL,
  `selling_unit_price` varchar(50) NOT NULL,
  `alert_quantity` varchar(50) NOT NULL,
  `product_image` varchar(50) DEFAULT NULL,
  `available_stock` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_inital_stock`
--

INSERT INTO `product_inital_stock` (`product_id`, `product_name`, `product_category`, `product_brand`, `product_group`, `product_unit`, `codefor_barcode`, `tax_perchantage`, `productinitial_quantity`, `buying_unit_price`, `selling_unit_price`, `alert_quantity`, `product_image`, `available_stock`) VALUES
(63, 'Soyabin1', '104', '15', 32, '9', '0004', '3', '10', 100, '120', '1', NULL, 0),
(64, 'Lungi', '104', '15', 32, '9', 'x-005', '3', '2', 10, '15', '1', NULL, 0),
(66, 'mobile', '107', '18', 36, '9', 'xserf-005', '18.00', '10', 4000, '4800', '8', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `product_purchase`
--

CREATE TABLE `product_purchase` (
  `purchase_id` bigint(20) NOT NULL,
  `purchase_invoice_id` varchar(100) NOT NULL,
  `supplier_id` varchar(100) NOT NULL,
  `product_id` varchar(100) NOT NULL,
  `unit_price` int(20) NOT NULL,
  `quantity` int(30) NOT NULL,
  `total_price` bigint(100) NOT NULL,
  `purchase_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_purchase`
--

INSERT INTO `product_purchase` (`purchase_id`, `purchase_invoice_id`, `supplier_id`, `product_id`, `unit_price`, `quantity`, `total_price`, `purchase_date`) VALUES
(1, 'PUR2106887CEC', 'Select Supplier', '63', 9, 100, 100, '2021-03-09 02:38:53'),
(2, 'PUR2106887CEC', 'Select Supplier', '64', 9, 10, 100, '2021-03-09 02:38:53'),
(3, 'PUR21068008C1', 'Select Supplier', '63', 9, 100, 100, '2021-03-09 03:21:58'),
(4, 'PUR21068E8450', '2', '63', 9, 100, 100, '2021-03-09 03:25:14'),
(5, 'PUR210689FB56', 'Select Supplier', '64', 9, 10, 100, '2021-03-09 03:26:09'),
(6, 'PUR210684657D', '2', '64', 9, 10, 100, '2021-03-09 03:26:16'),
(7, 'PUR21068DE2B9', '2', '64', 9, 10, 100, '2021-03-09 03:26:44'),
(8, 'PUR2106870E7E', 'Select Supplier', '63', 9, 100, 100, '2021-03-09 03:26:53'),
(9, 'PUR2106870E7E', 'Select Supplier', '64', 9, 10, 100, '2021-03-09 03:26:53'),
(10, 'PUR21068FFA6D', 'Select Supplier', '63', 9, 100, 100, '2021-03-09 03:29:54'),
(11, 'PUR210686F870', '2', '63', 9, 100, 100, '2021-03-09 04:18:58'),
(12, 'PUR210686F870', '2', '64', 9, 10, 100, '2021-03-09 04:18:58');

-- --------------------------------------------------------

--
-- Table structure for table `product_unit`
--

CREATE TABLE `product_unit` (
  `product_unit_id` bigint(20) NOT NULL,
  `product_unit_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_unit`
--

INSERT INTO `product_unit` (`product_unit_id`, `product_unit_name`) VALUES
(9, 'piece'),
(16, 'gram');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `sales_id` int(11) NOT NULL,
  `sales_invoice` varchar(50) NOT NULL,
  `sales_user` int(11) NOT NULL,
  `sales_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `payment_type` varchar(11) NOT NULL,
  `discount` int(50) NOT NULL,
  `others_cost` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`sales_id`, `sales_invoice`, `sales_user`, `sales_date`, `payment_type`, `discount`, `others_cost`) VALUES
(24, 'INV2106621867', 1, '2021-03-06 23:30:04', 'Cash', 0, 0),
(25, 'INV2106614374', 1, '2021-03-06 23:33:47', 'Cash', 0, 0),
(26, 'INV21066F878E', 1, '2021-03-06 23:48:41', 'Cash', 0, 0),
(27, 'INV210669107D', 1, '2021-03-06 23:55:44', 'Cash', 0, 0),
(28, 'INV210665A7B0', 1, '2021-03-06 23:56:06', 'Cash', 0, 0),
(29, 'INV21066E8F40', 1, '2021-03-07 00:38:39', 'Cash', 3, 3),
(30, 'INV210667909A', 1, '2021-03-07 16:55:15', 'Cash', 7, 8),
(31, 'INV21067D806F', 1, '2021-03-07 18:26:08', 'Cash', 0, 0),
(32, 'INV21067C40FC', 1, '2021-03-07 18:26:14', 'Cash', 0, 0),
(33, 'INV2106718B98', 1, '2021-03-07 18:32:59', 'Cash', 0, 0),
(34, 'INV21067DE47B', 1, '2021-03-07 18:42:33', 'Cash', 0, 0),
(35, 'INV210678E55F', 1, '2021-03-07 18:42:58', 'Cash', 0, 0),
(36, 'INV2106710EBC', 1, '2021-03-07 18:44:56', 'Cash', 0, 0),
(37, 'INV2106741756', 1, '2021-03-07 18:49:15', 'Cash', 90, 20),
(38, 'INV2106872D49', 1, '2021-03-08 18:44:51', 'Cash', 2, 2),
(39, 'INV21068DB0F4', 1, '2021-03-08 18:45:00', 'Cash', 0, 0),
(40, 'INV21068AE343', 1, '2021-03-08 22:19:08', 'Cash', 0, 0),
(41, 'INV21069B23BE', 1, '2021-03-09 20:27:22', 'Cash', 8, 8);

-- --------------------------------------------------------

--
-- Table structure for table `sales_details`
--

CREATE TABLE `sales_details` (
  `sales_details_id` int(11) NOT NULL,
  `sales_details_invoice` varchar(50) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `product_quantity_sold` int(11) DEFAULT NULL,
  `unit_price` decimal(11,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sales_details`
--

INSERT INTO `sales_details` (`sales_details_id`, `sales_details_invoice`, `product_id`, `product_quantity_sold`, `unit_price`) VALUES
(20, 'INV2106621867', 63, 10, '120.00'),
(21, 'INV2106614374', 63, 1, '120.00'),
(22, 'INV2106614374', 64, 1, '15.00'),
(23, 'INV21066F878E', 63, 1, '120.00'),
(24, 'INV210669107D', 63, 1, '120.00'),
(25, 'INV210669107D', 64, 1, '15.00'),
(26, 'INV210665A7B0', 63, 1, '120.00'),
(27, 'INV21066E8F40', 63, 3, '120.00'),
(28, 'INV21066E8F40', 64, 3, '15.00'),
(29, 'INV210667909A', 63, 1, '120.00'),
(30, 'INV210667909A', 64, 1, '15.00'),
(31, 'INV21067D806F', 63, 1, '120.00'),
(32, 'INV21067C40FC', 63, 1, '120.00'),
(33, 'INV21067C40FC', 64, 1, '15.00'),
(34, 'INV2106718B98', 63, 1, '120.00'),
(35, 'INV21067DE47B', 63, 1, '120.00'),
(36, 'INV210678E55F', 64, 2, '15.00'),
(37, 'INV210678E55F', 63, 18, '120.00'),
(38, 'INV2106710EBC', 64, 1, '15.00'),
(39, 'INV2106710EBC', 63, 1, '120.00'),
(40, 'INV2106741756', 65, 1, '4500.00'),
(41, 'INV2106872D49', 63, 1, '120.00'),
(42, 'INV2106872D49', 64, 1, '15.00'),
(43, 'INV21068DB0F4', 63, 1, '120.00'),
(44, 'INV21068DB0F4', 64, 1, '15.00'),
(45, 'INV21068AE343', 63, 1, '120.00'),
(46, 'INV21069B23BE', 63, 1, '120.00'),
(47, 'INV21069B23BE', 64, 1, '15.00');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `supplier_id` bigint(20) NOT NULL,
  `supplier_name` varchar(100) NOT NULL,
  `business_name` varchar(100) NOT NULL,
  `contact_number` varchar(50) NOT NULL,
  `supplier_email` varchar(100) NOT NULL,
  `supplier_address` varchar(150) NOT NULL,
  `supplier_entry_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`supplier_id`, `supplier_name`, `business_name`, `contact_number`, `supplier_email`, `supplier_address`, `supplier_entry_date`) VALUES
(2, 'Mahmood', 'BdPoshak.com', '01913691185', 'skabir85@gmail.com', 'Rampura', '21/02/2021'),
(14, 'Imran', 'Imran and company', '012589944', 'imran@gmail.com', 'dhaka', '');

-- --------------------------------------------------------

--
-- Table structure for table `tax`
--

CREATE TABLE `tax` (
  `tax_id` int(11) NOT NULL,
  `tax_name` varchar(80) NOT NULL,
  `tax_percentage` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tax`
--

INSERT INTO `tax` (`tax_id`, `tax_name`, `tax_percentage`) VALUES
(4, 'Vat 5%', '10.00'),
(5, 'Tax 18%', '18.00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `login_id` varchar(80) NOT NULL,
  `login_password` varchar(80) NOT NULL,
  `user_role` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `login_id`, `login_password`, `user_role`) VALUES
(1, 'Mohammad Kabir', 'admin', '123456', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `customer_group`
--
ALTER TABLE `customer_group`
  ADD PRIMARY KEY (`customer_group_id`);

--
-- Indexes for table `expense`
--
ALTER TABLE `expense`
  ADD PRIMARY KEY (`expense_id`);

--
-- Indexes for table `expense_category`
--
ALTER TABLE `expense_category`
  ADD PRIMARY KEY (`expense_category_id`);

--
-- Indexes for table `expense_sub_category`
--
ALTER TABLE `expense_sub_category`
  ADD PRIMARY KEY (`expense_sub_category_id`);

--
-- Indexes for table `payment_receive`
--
ALTER TABLE `payment_receive`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `product_brand`
--
ALTER TABLE `product_brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`product_category_id`);

--
-- Indexes for table `product_group`
--
ALTER TABLE `product_group`
  ADD PRIMARY KEY (`product_group_id`);

--
-- Indexes for table `product_inital_stock`
--
ALTER TABLE `product_inital_stock`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_purchase`
--
ALTER TABLE `product_purchase`
  ADD PRIMARY KEY (`purchase_id`);

--
-- Indexes for table `product_unit`
--
ALTER TABLE `product_unit`
  ADD PRIMARY KEY (`product_unit_id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`sales_id`),
  ADD UNIQUE KEY `sales_invoice` (`sales_invoice`);

--
-- Indexes for table `sales_details`
--
ALTER TABLE `sales_details`
  ADD PRIMARY KEY (`sales_details_id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`supplier_id`);

--
-- Indexes for table `tax`
--
ALTER TABLE `tax`
  ADD PRIMARY KEY (`tax_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `customer_group`
--
ALTER TABLE `customer_group`
  MODIFY `customer_group_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `expense`
--
ALTER TABLE `expense`
  MODIFY `expense_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `expense_category`
--
ALTER TABLE `expense_category`
  MODIFY `expense_category_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `expense_sub_category`
--
ALTER TABLE `expense_sub_category`
  MODIFY `expense_sub_category_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `payment_receive`
--
ALTER TABLE `payment_receive`
  MODIFY `payment_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_brand`
--
ALTER TABLE `product_brand`
  MODIFY `brand_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `product_category_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `product_group`
--
ALTER TABLE `product_group`
  MODIFY `product_group_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `product_inital_stock`
--
ALTER TABLE `product_inital_stock`
  MODIFY `product_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `product_purchase`
--
ALTER TABLE `product_purchase`
  MODIFY `purchase_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `product_unit`
--
ALTER TABLE `product_unit`
  MODIFY `product_unit_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `sales_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `sales_details`
--
ALTER TABLE `sales_details`
  MODIFY `sales_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `supplier_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `tax`
--
ALTER TABLE `tax`
  MODIFY `tax_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
