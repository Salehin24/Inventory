-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2019 at 07:07 PM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epos`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cartid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `product_code` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` varchar(255) NOT NULL,
  `customerid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cartid`, `productid`, `product_code`, `product_name`, `product_price`, `customerid`) VALUES
(1, 51, 'PRO-00001', 'Laptop', '26000', 51),
(2, 51, 'PRO-00003', 'Desktop', '26000', 51),
(52, 0, 'PRO-00002', 'Desktop', '28000', 52),
(54, 54, 'PRO-00004', 'Monitor 20\"', '12000', 54);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customerid` int(11) NOT NULL,
  `customer_id` varchar(150) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `district_id` int(11) NOT NULL,
  `customer_address` varchar(255) NOT NULL,
  `customer_contact` varchar(15) NOT NULL,
  `reffer_name` varchar(150) NOT NULL,
  `bill_no` varchar(255) NOT NULL,
  `cartid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customerid`, `customer_id`, `customer_name`, `district_id`, `customer_address`, `customer_contact`, `reffer_name`, `bill_no`, `cartid`) VALUES
(51, 'CID-00001', 'Karim Meya', 1, 'Gopalpur', '01717334435', 'Zahid Hasan', 'Bill-00004', 0),
(52, 'CID-00002', 'Masud Rana', 1, 'Mirpur', '01717343435', 'Kader Hossain', '', 0),
(53, 'CID-00002', 'Abul Kalam', 1, 'Tajpur', '01717456745', 'Manik Meya', '', 0),
(54, 'CID-00002', 'Masud Rana', 1, 'Uttora', '01717343435', 'Kader Hossain', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `id` int(11) NOT NULL,
  `district_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`id`, `district_name`) VALUES
(1, 'Dhaka'),
(2, 'Faridpur'),
(3, 'GaziPur'),
(4, 'Gopalganj'),
(5, 'Kishoreganj'),
(6, 'Madaripur'),
(7, 'Manikganj'),
(8, 'Munshiganj'),
(9, 'Narayanganj'),
(10, 'Narsingdi'),
(11, 'Rajbari'),
(12, 'Shariatpur'),
(13, 'Tangail'),
(14, 'Bagerhat'),
(15, 'Chuadanga'),
(16, 'Jessore'),
(17, 'Jhenaidah'),
(18, 'Khulna'),
(19, 'Kushtia'),
(20, 'Magura'),
(21, 'Meherpur'),
(22, 'Narail'),
(23, 'Satkhira'),
(24, 'Jamalpur'),
(25, 'Mymensingh'),
(26, 'Netrokona'),
(27, 'Sherpur'),
(28, 'Bogra'),
(29, 'Joypurhat'),
(30, 'Naogaon'),
(31, 'Natore'),
(32, 'Chapainawabganj'),
(33, 'Pabna'),
(34, 'Rajshahi'),
(35, 'Sirajganj'),
(36, 'Dinajpur'),
(37, 'Gaibandha'),
(38, 'Kurigram'),
(39, 'Lalmonirhat'),
(40, 'Nilphamari'),
(41, 'Panchagarh'),
(42, 'Rangpur'),
(43, 'Thakurgaon'),
(44, 'Habiganj'),
(45, 'Moulvibazar'),
(46, 'Sunamganj'),
(47, 'Sylhet'),
(48, 'Barguna'),
(49, 'Barisal'),
(50, 'Bhola'),
(51, 'Jhalokati'),
(52, 'Patuakhali'),
(53, 'Pirojpur'),
(54, 'Bandarban'),
(55, 'Brahmanbaria'),
(56, 'Chandpur'),
(57, 'Chittagong'),
(58, 'Comilla'),
(59, 'Cox\'s Bazar'),
(60, 'Feni'),
(61, 'Khagrachhari'),
(62, 'Lakshmipur'),
(63, 'Noakhali'),
(64, 'Rangamati');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `inventoryid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `action` varchar(50) NOT NULL,
  `productid` int(11) NOT NULL,
  `quantity` double NOT NULL,
  `inventory_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`inventoryid`, `userid`, `action`, `productid`, `quantity`, `inventory_date`) VALUES
(11, 1, 'Add Product', 29, 0, '2019-08-17 13:57:19'),
(12, 1, 'Update Quantity', 29, 0, '2019-08-17 13:58:23'),
(13, 1, 'Add Product', 30, 0, '2019-08-17 14:05:09'),
(14, 1, 'Add Product', 31, 0, '2019-08-17 14:07:19'),
(15, 1, 'Add Product', 33, 0, '2019-08-20 01:16:35'),
(16, 1, 'Add Product', 34, 0, '2019-08-20 01:19:15');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `invoice_no` int(11) NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `order_date` date NOT NULL,
  `sub_total` double NOT NULL,
  `gst` double NOT NULL,
  `discount` double NOT NULL,
  `deduct` double NOT NULL,
  `net_total` double NOT NULL,
  `paid` double NOT NULL,
  `due` double NOT NULL,
  `payment_type` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`invoice_no`, `customer_name`, `order_date`, `sub_total`, `gst`, `discount`, `deduct`, `net_total`, `paid`, `due`, `payment_type`) VALUES
(24, 'Rizwan', '0000-00-00', 445000, 80100, 1000, 0, 524100, 445000, 79100, 'Cash'),
(25, 'MMM', '0000-00-00', 60000, 10800, 500, 0, 70300, 70300, 0, 'Cash'),
(26, 'ggg', '0000-00-00', 300000, 54000, 2500, 0, 351500, 351500, 0, 'Cash'),
(27, 'Rdfgacs ', '0000-00-00', 300000, 54000, 54000, 0, 300000, 300000, 0, 'Cash'),
(28, '', '0000-00-00', 300000, 54000, 54000, 0, 300000, 300000, 0, 'Cash'),
(29, 'Rizwan', '2018-11-02', 60000, 10800, 12, 0, 70788, 70788, 0, 'Cash'),
(30, 'I am Cus', '2018-11-02', 65000, 11700, 500, 0, 76200, 76200, 0, 'Cash'),
(31, '', '2018-01-03', 60000, 10800, 0, 0, 70800, 70800, 0, 'Cash'),
(32, 'Arjun', '2018-01-03', 29000, 5220, 55, 0, 34165, 34165, 0, 'Cash'),
(33, '', '2018-01-03', 60000, 10800, 0, 0, 70800, 70800, 0, 'Cash'),
(34, 'Rizwan', '2018-01-03', 94500, 17010, 1500, 0, 110010, 110010, 0, 'Cash'),
(35, 'Rizwan', '2018-01-03', 154000, 27720, 550, 0, 181170, 181170, 0, 'Cash'),
(36, 'Rizwan', '2018-01-03', 154500, 27810, 2500, 0, 179810, 179810, 0, 'Cash'),
(37, 'Tyson', '2018-01-03', 90000, 16200, 25.5, 0, 106174.5, 106174.5, 0, 'Cash'),
(38, 'Rajdhani', '2018-01-03', 89500, 16110, 750.5, 0, 104859.5, 104859.5, 0, 'Cash'),
(39, 'Kapoor & Son', '2018-01-03', 89500, 16110, 25, 0, 105585, 105585, 0, 'Cash'),
(40, 'Ajay', '2018-01-03', 89000, 16020, 0, 0, 105020, 105020, 0, 'Cash'),
(41, 'Jayanta', '2018-01-03', 89000, 16020, 0, 0, 105020, 105020, 0, 'Cash'),
(42, 'Ajay Kant', '2018-01-03', 65500, 11790, 0, 0, 77290, 77290, 0, 'Cash'),
(43, 'Egjdks', '2018-01-03', 125500, 22590, 5000, 0, 143090, 143090, 0, 'Cash'),
(44, 'Tyson', '2018-01-03', 275000, 49500, 4950, 0, 319550, 319550, 0, 'Cash'),
(45, 'Hndksks', '2018-01-03', 59000, 10620, 0, 0, 69620, 69620, 0, 'Cash'),
(46, 'karim', '0000-00-00', 120000, 21600, 10, 0, 141590, 141590, 0, 'Cash'),
(47, 'Mamun', '0000-00-00', 180000, 32400, 20, 0, 212380, 212380, 212380, 'Cash'),
(48, 'karim', '0000-00-00', 1387000, 249660, 12, 0, 1636648, 163660, 1636648, 'Cash');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `order_date` date NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `client_contact` varchar(255) NOT NULL,
  `sub_total` varchar(255) NOT NULL,
  `vat` varchar(255) NOT NULL,
  `total_amount` varchar(255) NOT NULL,
  `discount` varchar(255) NOT NULL,
  `deduct` double NOT NULL,
  `grand_total` varchar(255) NOT NULL,
  `paid` varchar(255) NOT NULL,
  `due` varchar(255) NOT NULL,
  `payment_type` int(11) NOT NULL,
  `payment_status` int(11) NOT NULL,
  `order_status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `order_date`, `client_name`, `client_contact`, `sub_total`, `vat`, `total_amount`, `discount`, `deduct`, `grand_total`, `paid`, `due`, `payment_type`, `payment_status`, `order_status`) VALUES
(1, '2016-07-15', 'John Doe', '9807867564', '2700.00', '351.00', '3051.00', '1000.00', 0, '2051.00', '1000.00', '1051.00', 2, 2, 2),
(2, '2016-07-15', 'John Doe', '9808746573', '3400.00', '442.00', '3842.00', '500.00', 0, '3342.00', '3342', '0', 2, 1, 2),
(3, '2016-07-16', 'John Doe', '9809876758', '3600.00', '468.00', '4068.00', '568.00', 0, '3500.00', '3500', '0', 2, 1, 2),
(4, '2016-08-01', 'Indra', '19208130', '1200.00', '156.00', '1356.00', '1000.00', 0, '356.00', '356', '0.00', 2, 1, 2),
(5, '2016-07-16', 'John Doe', '9808767689', '3600.00', '468.00', '4068.00', '500.00', 0, '3568.00', '3568', '0', 2, 1, 1),
(6, '2019-09-01', 'kabir', '01787222794', '3600.00', '468.00', '4068.00', '10', 0, '4058.00', '4017', '41.00', 2, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `order_item`
--

CREATE TABLE `order_item` (
  `order_item_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL DEFAULT 0,
  `product_id` int(11) NOT NULL DEFAULT 0,
  `quantity` varchar(255) NOT NULL,
  `rate` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `order_item_status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_item`
--

INSERT INTO `order_item` (`order_item_id`, `order_id`, `product_id`, `quantity`, `rate`, `total`, `order_item_status`) VALUES
(1, 1, 1, '1', '1500', '1500.00', 2),
(2, 1, 2, '1', '1200', '1200.00', 2),
(3, 2, 3, '2', '1200', '2400.00', 2),
(4, 2, 4, '1', '1000', '1000.00', 2),
(5, 3, 5, '2', '1200', '2400.00', 2),
(6, 3, 6, '1', '1200', '1200.00', 2),
(7, 4, 5, '1', '1200', '1200.00', 2),
(8, 5, 7, '2', '1200', '2400.00', 1),
(9, 5, 8, '1', '1200', '1200.00', 1),
(10, 6, 7, '1', '1200', '1200.00', 1),
(11, 6, 8, '1', '1200', '1200.00', 1),
(12, 6, 7, '1', '1200', '1200.00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productid` int(11) NOT NULL,
  `customerid` int(11) NOT NULL,
  `product_code` varchar(255) NOT NULL,
  `brand_name` varchar(150) NOT NULL,
  `product_name` varchar(150) NOT NULL,
  `pack_size` int(150) NOT NULL,
  `product_qty` int(11) NOT NULL,
  `unit` varchar(150) NOT NULL,
  `ex_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productid`, `customerid`, `product_code`, `brand_name`, `product_name`, `pack_size`, `product_qty`, `unit`, `ex_date`) VALUES
(49, 0, 'PRO-HFF', 'DELL', 'Laptop', 5, 0, '78', '2019-08-21'),
(50, 0, 'PRO-00002', 'HP', 'Laptop', 5, 0, 'Piece', '2019-08-21'),
(52, 0, 'PRO-00004', 'SAMSUNG', 'Monitor 20\"', 10, 0, 'Piece', '2019-08-21'),
(53, 0, 'PRO-00005', 'JVCO', '40\" Smart TV', 6, 0, 'Piece', '2019-08-21'),
(54, 0, 'PRO-00006', 'PROLINK', 'UPS', 20, 0, 'Piece', '2019-08-21'),
(56, 0, 'PRO-00008', 'APPLE', 'Ipad Mini', 4, 0, 'Piece', '2019-08-21'),
(57, 0, 'PRO-00009', 'ADATA', '32GB Flash Drive', 100, 0, 'Piece', '2019-08-22'),
(58, 0, 'PRO-000010', 'Transend', '16GB SD Card', 100, 0, 'Piece', '2019-08-22'),
(64, 0, 'PRO-000013', 'Coka Cola', 'Drink', 77, 0, '12', '2019-08-21'),
(67, 0, 'vf', 'df', 'sd', 0, 0, '', '0000-00-00'),
(73, 0, 'PRO-000012', 'Asser', 'Desktop', 25, 0, 'Piece', '2019-09-03');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `salesid` int(11) NOT NULL,
  `customerid` int(11) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_code` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `bill_no` varchar(255) NOT NULL,
  `customer_contact` varchar(255) NOT NULL,
  `reff_name` varchar(255) NOT NULL,
  `sales_total` double NOT NULL,
  `sales_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`salesid`, `customerid`, `customer_name`, `customer_code`, `address`, `bill_no`, `customer_contact`, `reff_name`, `sales_total`, `sales_date`) VALUES
(1, 2, '', '', '', '', '', '', 34, '2017-09-16 16:23:38'),
(2, 2, '', '', '', '', '', '', 18, '2017-09-16 16:25:28'),
(3, 2, '', '', '', '', '', '', 6, '2017-09-16 16:27:31'),
(4, 2, '', '', '', '', '', '', 1014244, '2017-09-16 16:44:01'),
(5, 2, '', '', '', '', '', '', 9588, '2017-09-18 09:06:29'),
(6, 2, '', '', '', '', '', '', 88779, '2017-09-18 09:08:42'),
(7, 2, '', '', '', '', '', '', 15579, '2017-09-18 09:09:34'),
(8, 2, '', '', '', '', '', '', 112361, '2017-09-18 09:32:00'),
(9, 2, '', '', '', '', '', '', 7990, '2017-09-18 09:34:29'),
(10, 2, '', '', '', '', '', '', 18370, '2017-09-18 11:09:21');

-- --------------------------------------------------------

--
-- Table structure for table `sales_detail`
--

CREATE TABLE `sales_detail` (
  `sales_detailid` int(11) NOT NULL,
  `salesid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `sales_qty` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales_detail`
--

INSERT INTO `sales_detail` (`sales_detailid`, `salesid`, `productid`, `sales_qty`) VALUES
(1, 2, 1, 12),
(2, 2, 2, 10),
(3, 3, 3, 11),
(4, 4, 2, 50),
(5, 4, 1, 106),
(6, 4, 5, 1000),
(7, 5, 2, 12),
(8, 6, 5, 101),
(9, 7, 1, 10),
(10, 7, 3, 11),
(11, 8, 4, 10),
(12, 8, 20, 10),
(13, 8, 1, 99),
(14, 8, 2, 20),
(15, 9, 2, 10),
(16, 10, 2, 10),
(17, 10, 3, 12),
(18, 10, 4, 8);

-- --------------------------------------------------------

--
-- Table structure for table `sales_report`
--

CREATE TABLE `sales_report` (
  `saleid` int(11) NOT NULL,
  `bill_reff` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `customer_code` varchar(255) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_contact` varchar(15) NOT NULL,
  `address` varchar(255) NOT NULL,
  `product_code` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `pack_size` varchar(255) NOT NULL,
  `unit` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` double NOT NULL,
  `reffer_name` varchar(255) NOT NULL,
  `bill_total` varchar(255) NOT NULL,
  `receive_amount` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `remark` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales_report`
--

INSERT INTO `sales_report` (`saleid`, `bill_reff`, `date`, `customer_code`, `customer_name`, `customer_contact`, `address`, `product_code`, `product_name`, `pack_size`, `unit`, `qty`, `price`, `reffer_name`, `bill_total`, `receive_amount`, `status`, `remark`) VALUES
(1, 'BILL-00001', '2019-08-01', 'CID-00004', 'Karim Meya', '01717334435', 'Dhaka', 'PRO-00002', 'Laptop', '10', 0, 2, 28000, 'Zahid Hasan', '22000', '22000', 'paid', 'vjjghkgkj'),
(3, 'Bill-00002', '2019-08-01', 'CID-00002', 'Kamrul Hasan', '01717334435', 'Mirpur', 'PRO-00003', 'Laptop', '12', 1, 1, 28000, 'Karim', '28000', '28000', '1', 'tdfjfk');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `access` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `username`, `password`, `access`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cartid`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customerid`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`inventoryid`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`invoice_no`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_item`
--
ALTER TABLE `order_item`
  ADD PRIMARY KEY (`order_item_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productid`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`salesid`);

--
-- Indexes for table `sales_detail`
--
ALTER TABLE `sales_detail`
  ADD PRIMARY KEY (`sales_detailid`);

--
-- Indexes for table `sales_report`
--
ALTER TABLE `sales_report`
  ADD PRIMARY KEY (`saleid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cartid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customerid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `inventoryid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `invoice_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `order_item`
--
ALTER TABLE `order_item`
  MODIFY `order_item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `salesid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sales_detail`
--
ALTER TABLE `sales_detail`
  MODIFY `sales_detailid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `sales_report`
--
ALTER TABLE `sales_report`
  MODIFY `saleid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
