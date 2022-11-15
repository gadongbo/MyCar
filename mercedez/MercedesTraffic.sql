-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 27, 2022 at 04:29 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `MercedesTraffic`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `full_name`, `user_name`, `password`) VALUES
(74, 'PHÍ ĐỨC DŨNG', 'ducdung@gmail.com', '123a'),
(75, 'asdnmnmn', 'ducdung@gmail.com', '12345'),
(78, 'asdasd', 'ducdung@gmail.comass', '123'),
(79, 'PHÍ ĐỨC DŨNG sdf', 'ggg', '123123');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id_user` int(10) UNSIGNED NOT NULL,
  `vehicles` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id_product` int(10) UNSIGNED NOT NULL,
  `name_product` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `color` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id_product`, `name_product`, `price`, `color`, `image`) VALUES
(22, 'Mercedes-Benz GLC 200', '1.859.000.000', 'blue', 'a4.png'),
(23, 'Mercedes-Benz GLC 200 4MATIC', '2.129.000.000', 'brown', 'a2.png'),
(24, 'Mercedes-Benz GLC 300 4MATIC', '2.569.000.000', 'black', 'a3.png'),
(25, 'Mercedes-Benz GLC 300 4MATIC Coupé', '3.099.000.000', 'black', 'a1.png'),
(26, 'Mercedes-Benz E 200 Exclusive', '2.310.000.000', 'black', 'a5.png'),
(27, 'Mercedes-Benz C 300 AMG', '2,399,000,000', 'red', 'a6.png'),
(28, 'Mercedes-Benz S 450 L', '5.059.000.000', 'white', 'a7.png'),
(29, 'Mercedes-Benz GLS 450 4MATIC', '5.139.000.000', 'white', 'a8.png'),
(30, 'Mercedes-AMG G 63', '10.950.000.000', 'black', 'g63.jpg'),
(31, 'Mercedes-Maybach GLS 600 4MATIC', '11.619.000.000', 'red black', 'maybach.png'),
(34, 'Mercedes-Benz V 250 AMG', '3.445.000.000 VND', 'black', 'v250.jpg'),
(35, 'Mercedes-AMG GT 53 4MATIC+', '6.719.000.000', 'white', 'Mercedes-amg-gt-53-4matic-8.jpg.asset.HBtW3c17wcD60ywNabyKb8N17uD7U6y6hENvmkxzG3Q.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `roolling_fee`
--

CREATE TABLE `roolling_fee` (
  `id_product` int(10) UNSIGNED NOT NULL,
  `vehicles` varchar(50) NOT NULL,
  `license_plates` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `specific_product`
--

CREATE TABLE `specific_product` (
  `id_product` int(10) UNSIGNED NOT NULL,
  `long_product` varchar(50) NOT NULL,
  `width_product` varchar(50) NOT NULL,
  `height` varchar(50) NOT NULL,
  `weight` varchar(50) NOT NULL,
  `engine` varchar(50) NOT NULL,
  `cubic` varchar(50) NOT NULL,
  `max_power` varchar(50) NOT NULL,
  `max_torque` varchar(50) NOT NULL,
  `gear` varchar(50) NOT NULL,
  `wheel_drive` varchar(50) NOT NULL,
  `speed_up` varchar(50) NOT NULL,
  `max_speed` varchar(50) NOT NULL,
  `fuel_type` varchar(50) NOT NULL,
  `fuel_consum_normal` varchar(50) NOT NULL,
  `fuel_consum_city` varchar(50) NOT NULL,
  `fuel_consum_country_side` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `specific_product`
--

INSERT INTO `specific_product` (`id_product`, `long_product`, `width_product`, `height`, `weight`, `engine`, `cubic`, `max_power`, `max_torque`, `gear`, `wheel_drive`, `speed_up`, `max_speed`, `fuel_type`, `fuel_consum_normal`, `fuel_consum_city`, `fuel_consum_country_side`) VALUES
(22, '4670', '1900', '1650', '1750', 'I4', '', '145 kW [197 hp] tại 6100 vòng/phút', '320Nm tại 1650 - 4000 vòng/phút', 'Tự động 9 cấp 9G-TRONIC', '', '7,8s (0 – 100 km/h)', '217 km/h', 'Xăng không chì có chỉ số octane 95 hoặc cao hơn', '8,77', '11,47', '7,18'),
(23, '4670', '1900', '1650', '1850', 'I4', '', '145 kW [197 hp] tại 6100 vòng/phút', '320 Nm tại 1650 - 4000 vòng/phút', 'Tự động 9 cấp 9G-Tronic', '', '7,9s (0 – 100 km/h)', '215 (km/h)', 'Xăng không chì có trị số octane 95 hoặc cao hơn', '10,8 (l/100km)', '13,25 (l/100km)', '9,38 (l/100km)'),
(24, '4670', '1900', '1650', '1900', 'I4', '', '190 kW [258 hp] tại 6100 vòng/phút', '370 Nm tại 1800 - 4000 vòng/phút', 'Tự động 9 cấp 9G-Tronic', '', '6,2s (0 – 100 km/h)', '240 (km/h)', 'Xăng không chì có trị số octane 95 hoặc cao hơn', '10,48 (l/100km)', '12,37 (l/100km)', '9,42 (l/100km)'),
(25, '4750', '1900', '1600', '1800', 'I4', '', '190 kW [258 hp] tại 5800 – 6100 vòng/phút', '370 Nm tại 1800 - 4000 vòng/phút', 'Tự động 9 cấp 9G-Tronic', '', '6,3s (0 – 100 km/h)', '240 (km/h)', 'Xăng không chì có trị số octane 95 hoặc cao hơn', '10,93 (l/100km)', '13,5 (l/100km)', '9,44 (l/100km)'),
(26, '4.930', '1.852', '1.468', '1707', 'I4', '', '145 kW [197 hp] tại 5.500-6.100 vòng/phút', '320 Nm tại 1.650-4.000 vòng/phút', 'Tự động 9 cấp 9G-Tronic', '', '7,4s (0 – 100 km/h)', '240 (km/h)', 'Xăng không chì có trị số octane 95 hoặc cao hơn', '8,83 (l/100km)', '11,67 (l/100km)', '7,18 (l/100km)'),
(27, '4555', '1796', '1434', '1570', 'I4', '', '225 kW [306 hp] tại 5800-6100 vòng/phút', '400 Nm tại 3000 - 4000 vòng/phút', 'Tự động 7 cấp AMG DCT-7G', '', '4,8s (0 – 100 km/h)', '250 (km/h)', 'Xăng không chì có trị số octan 95 hoặc cao hơn', '9,81 (l/100km)', '11,4 (l/100km)', '8,89 (l/100km)'),
(28, '5300', '1937', '1503', '3216', 'I6', '', '270 kW [367 hp] tại 5500 - 6100 vòng/phút', '370 Nm tại 1800 - 4000 vòng/phút', 'Tự động 9 cấp 9G-TRONIC', '', '5,3s (0 – 100 km/h)', '250 (km/h)', 'Xăng không chì có trị số octane 95 hoặc cao hơn', '', '', ''),
(29, '5226', '2030', '1650', '1750', 'I4', '', '145 kW [197 hp] tại 6100 vòng/phút', '370 Nm tại 1800 - 4000 vòng/phút', 'Tự động 9 cấp 9G-Tronic', '', '7,8s (0 – 100 km/h)', '240 (km/h)', 'Xăng không chì có trị số octane 95 hoặc cao hơn', '11,79 (l/100km)', '13,73 (l/100km)', '10,67 (l/100km)'),
(30, '4763', '1855', '1938', '2550', 'V8', '', '430 kW [577 hp] tại 6000 vòng/phút', '850 Nm tại 2500 – 3500 vòng/phút', 'AMG SPEEDSHIFT TCT 9G', '', '4,5s (0 – 100 km/h)', '217 km/h', 'Xăng không chì có trị số octane 95 hoặc cao hơn', '13,1 (l/100km)', '16.5 (l/100km)', '11.1 (l/100km)'),
(31, '5.207', '2.030', '1.850', '2.785', 'V8', '', '145 kW [197 hp] tại 6100 vòng/phút', '370 Nm tại 1800 - 4000 vòng/phút', 'Tự động 9 cấp 9G-Tronic', '', '7,8s (0 – 100 km/h)', '240 (km/h)', 'Xăng không chì có trị số octane 95 hoặc cao hơn', '', '', ''),
(34, '5.370', '1.928', '1.909', '1750', 'I4', '', '155 kW [211 hp] tại 5500 vòng/phút', '350 Nm tại 1200 - 4000 vòng/phút', 'Tự động 7 cấp 7G-TRONIC PLUS', '', '9,4s (0 – 100 km/h)', '210 (km/h)', 'Xăng không chì có trị số octane 95 hoặc cao hơn', '8,77', '11,47', '7,18'),
(35, '5051', '1953', '1451', '2045', 'I6', '', '320 kW [435 hp] tại 6100 vòng/phút', '520 Nm tại 1800 - 5800 vòng/phút', 'Tự động 9 cấp AMG SPEEDSHIFT TCT 9G', '', '4,5 (0-100km/h)', '285 (km/h)', 'Xăng không chì có chỉ số octane 95 hoặc cao hơn', '11,4 (l/100km)', '13,62 (l/100km)', '10,11 (l/100km)');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(10) UNSIGNED NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `favoriteCar` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `user_name`, `phone`, `address`, `favoriteCar`) VALUES
(4, 'ducdung@gmail.coma', '1234567', 'ha noi', NULL),
(5, 'ducdung@gmail.com', '1234567', 'ha noi', NULL),
(6, 'ducdung@gmail.coma', '1234567', '', 'sss'),
(7, 'ducdung@gmail.coma', '', 'sss', 'sss'),
(10, 'ducdung@gmail.com', '1234567', '', 'mec'),
(11, 'dung', '1234567', '', 'mec'),
(12, 'dung', '1234567', '', 'mec'),
(20, 'dung', '1234567', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`);

--
-- Indexes for table `roolling_fee`
--
ALTER TABLE `roolling_fee`
  ADD PRIMARY KEY (`id_product`);

--
-- Indexes for table `specific_product`
--
ALTER TABLE `specific_product`
  ADD PRIMARY KEY (`id_product`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id_user` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `roolling_fee`
--
ALTER TABLE `roolling_fee`
  MODIFY `id_product` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `specific_product`
--
ALTER TABLE `specific_product`
  MODIFY `id_product` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `contact`
--
ALTER TABLE `contact`
  ADD CONSTRAINT `contact_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `roolling_fee`
--
ALTER TABLE `roolling_fee`
  ADD CONSTRAINT `roolling_fee_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `product` (`id_product`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
