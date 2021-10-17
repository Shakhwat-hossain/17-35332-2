-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2021 at 02:45 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `Id` int(30) NOT NULL,
  `Productname` varchar(50) CHARACTER SET latin1 NOT NULL,
  `Buyingprice` int(40) NOT NULL,
  `Sellingprice` int(40) NOT NULL,
  `image` text CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`Id`, `Productname`, `Buyingprice`, `Sellingprice`, `image`) VALUES
(2, 'Intel Core I9', 30000, 32000, 'intel core i9.jpg'),
(10, 'Corsair ram 3200Hz 16 GB', 7600, 10000, 'CORSAIR-Vengeance-RGB-Pro-Series-16GB-DDR4-3000MHz-RAM-500x500.jpg'),
(11, 'Corsair ram 3200Hz 16 GB', 36000, 42000, 'CORSAIR-Vengeance-RGB-Pro-Series-16GB-DDR4-3000MHz-RAM-500x500.jpg'),
(12, 'AMD Ryzen 5 3400G Processor with Radeon RX Vega 11', 14000, 16000, '3400g-500x500.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `Id` int(30) NOT NULL,
  `Role` varchar(30) NOT NULL,
  `Name` varchar(50) CHARACTER SET latin1 NOT NULL,
  `Email` varchar(50) CHARACTER SET latin1 NOT NULL,
  `Username` varchar(50) CHARACTER SET latin1 NOT NULL,
  `Password` text NOT NULL,
  `Gender` varchar(30) CHARACTER SET latin1 NOT NULL,
  `DOB` date NOT NULL,
  `photo` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`Id`, `Role`, `Name`, `Email`, `Username`, `Password`, `Gender`, `DOB`, `photo`) VALUES
(5, 'Admin', 'Arabi', 'mursalinarabi@gmail.com', 'Mursalin', '@1December', '', '0000-00-00', '17_n.jpg'),
(9, 'Admin', 'Arisha', 'Arisha@gmail.com', 'Arisha', '@December', 'female', '2020-01-01', 'maxresdefault.jpg'),
(10, 'Manager', 'Arisha', '', '', '', 'male', '0000-00-00', ''),
(11, 'Manager', 'Arabi arabi', '', '', '', 'male', '0000-00-00', ''),
(12, 'Admin', 'Arabi', '', '', '', 'male', '0000-00-00', ''),
(13, 'Admin', '1', '', '', '', 'male', '0000-00-00', ''),
(14, 'Admin', 'Arabi $', '', '', '', 'male', '0000-00-00', ''),
(15, 'Admin', 'Arabi $', '', '', '', 'male', '0000-00-00', ''),
(16, 'Admin', '', '', '', '', 'male', '0000-00-00', ''),
(18, 'Admin', '', '', '', '', 'male', '0000-00-00', ''),
(19, 'Admin', '', '', '', '', 'male', '0000-00-00', '67783119_429487710992035_8162258645065662464_n.jpg'),
(20, 'Admin', 'Arisha Arisha', 'Arisha@gmail.com', 'Arisha', '@1December', 'female', '1996-01-01', ''),
(21, 'Admin', 'Arisha Arisha', 'Arisha@gmail.com', 'Arisha', '@3December', 'female', '1996-01-01', ''),
(22, 'Manager', 'Arabi Arabi', 'shakhwat2016@gmail.com', 'Arabi Mursalin', '@1December', 'male', '1998-09-08', 'dp2.jpg'),
(23, 'Admin', '', '', '', '', 'male', '0000-00-00', ''),
(24, 'Admin', '', '', '', '', 'female', '0000-00-00', ''),
(25, 'Admin', '', '', '', '', 'female', '0000-00-00', ''),
(26, 'Admin', 'Arisha', '', '', '', 'female', '0000-00-00', ''),
(27, 'Admin', 'Arisha', '', '', '', 'female', '0000-00-00', ''),
(29, 'Manager', '', '', '', '', 'female', '0000-00-00', ''),
(30, 'Manager', '', '', '', '', 'female', '0000-00-00', ''),
(31, 'Manager', 'Arabi', 'mursalinarabi@gmail.com', '', '1234', 'on', '1997-01-01', ''),
(32, 'Manager', 'Arabi', '', '', '', 'on', '1998-08-02', ''),
(33, 'Manager', '', '', '', '', 'male', '0000-00-00', ''),
(34, 'Manager', 'Arisha', 'Arisha@gmail.com', '', '', 'female', '0000-00-00', '42278872_1823202761110071_750776728770576384_n.jpg'),
(35, 'Manager', 'Arabi arabi', 'mursalinarabi@gmail.com', '', '@1December', 'male', '1999-01-02', '25152079_164661004141375_1978685370133060636_n.jpg'),
(36, 'Manager', 'Arabi', 'mursalinarabi@gmail.com', '', '', 'male', '0000-00-00', '90800104_530096094591766_890454034513657856_n (1).jpg'),
(38, 'Admin', 'Arabi', 'shakhwat2016@gmail.com', '', '@3December', 'male', '2000-01-01', ''),
(39, 'Admin', '', '', 'arabi arabi', '@1December', 'male', '0000-00-00', ''),
(41, 'Admin', '', '', '', '12345', 'male', '0000-00-00', ''),
(42, 'Admin', 'Arabi', '', '', '@3December', 'male', '0000-00-00', 'dp2.jpg'),
(43, 'Admin', 'Arisha', '', '', 'female', 'female', '0000-00-00', 'maxresdefault.jpg'),
(45, 'Admin', 'Arabi $', '', '', '', 'male', '0000-00-00', ''),
(46, 'Admin', 'Arisha @', '', '', '', 'female', '0000-00-00', ''),
(47, 'Manager', 'Arabi $', 'Arisha@gmail.com', '', '', 'male', '0000-00-00', ''),
(48, 'Manager', 'Arabi $', 'mursalinarabi@gmail.com', '', '', 'male', '0000-00-00', ''),
(49, 'Manager', 'Arabi $', 'mursalinarabi@gmail.com', '', '', 'male', '0000-00-00', ''),
(50, 'Manager', 'Arabi', 'mursalinarabi@gmail.com', '', '', 'male', '0000-00-00', ''),
(51, 'Manager', 'Arabi $', 'mursalinarabi@gmail.com', '', '', 'male', '0000-00-00', ''),
(52, 'Admin', 'Arisha', 'Arisha@gmail.com', '', '', 'male', '0000-00-00', ''),
(53, 'Admin', 'Faiza', 'faiza@gmail.com', 'faiza', '@1December', 'female', '2005-01-01', 'maxresdefault.jpg'),
(54, 'Manager', 'Arabi', 'Arisha@gmail.com', '', '', 'female', '0000-00-00', ''),
(55, 'Manager', 'Arisha', 'Arisha@gmail.com', '', '', 'male', '0000-00-00', ''),
(56, 'Manager', 'Arisha @', 'Arisha@gmail.com', '', '', 'male', '0000-00-00', ''),
(57, 'Manager', 'Arisha @', 'Arisha@gmail.com', '', '', 'male', '0000-00-00', ''),
(58, 'Manager', '', 'Arisha@gmail.com', '', '', 'male', '0000-00-00', ''),
(59, '', '', '', '', '', 'male', '0000-00-00', ''),
(60, 'Manager', '', 'Arisha@gmail.com', '', '', 'female', '0000-00-00', ''),
(61, 'Manager', '', 'Arisha@gmail.com', '', '', 'female', '0000-00-00', ''),
(62, 'Admin', '', 'Arisha@gmail.com', '', '', 'male', '0000-00-00', ''),
(63, 'Manager', '', '', '', '', 'male', '0000-00-00', ''),
(64, '', '', '', '', '', 'male', '0000-00-00', ''),
(65, '', '', '', '', '', 'male', '0000-00-00', ''),
(66, '', '', '', '', '', 'male', '0000-00-00', ''),
(67, '', '', '', '', '', 'male', '0000-00-00', ''),
(68, '', '', '', '', '', 'male', '0000-00-00', ''),
(69, '', '', '', '', '', 'male', '0000-00-00', ''),
(70, '', '', '', '', '', 'male', '0000-00-00', ''),
(71, '', '', '', '', '', 'female', '0000-00-00', ''),
(72, '', '', '', '', '', 'female', '0000-00-00', ''),
(73, '', 'Arisha Arisha', 'Arisha@gmail.com', '', '', 'female', '0000-00-00', ''),
(74, '', '', '', '', '', 'other', '0000-00-00', ''),
(75, 'Admin', 'MD. Shakhwat Hossain', 'shakhwat2016@gmail.com', 'Shakhwat', '@1December', 'male', '1996-04-12', 'dp2.jpg'),
(76, 'role', 'Arabi arabi', 'mursalinarabi@gmail.com', 'Arabi', '@4December', 'male', '1998-02-02', ''),
(77, 'Manager', 'Arabi arabi', 'mursalinarabi@gmail.com', 'Arabi', '@4December', 'male', '1998-02-02', '25152079_164661004141375_1978685370133060636_n.jpg'),
(78, 'Admin', 'Arisha Arisha', 'mursalinarabi@gmail.com', 'Arabi', '@4December', 'male', '1111-01-01', 'maxresdefault.jpg'),
(79, 'Manager', 'Arisha Arisha', 'Arisha@gmail.com', 'Arpi', '@1December', 'female', '2000-01-03', 'maxresdefault.jpg'),
(80, 'Admin', '', 'mursalinarabi@gmail.com', 'Arabi', '@4December', 'male', '1999-12-08', '90800104_530096094591766_890454034513657856_n (1).jpg'),
(81, 'Admin', '', '', 'Arabi', '@4December', 'female', '0000-00-00', ''),
(82, 'Manager', 'Ibrahim Shuvo', 'Ibrahim@gmail.com', 'Ibrahim', '@8December', 'female', '2000-09-12', '67783119_429487710992035_8162258645065662464_n.jpg'),
(83, 'Admin', '', '', '', '', 'female', '0000-00-00', ''),
(84, 'Manager', '', '', 'Arabi', '@4December', 'male', '0000-00-00', ''),
(85, 'Manager', '', '', '', '', 'female', '0000-00-00', ''),
(86, 'Manager', '', '', '', '', 'female', '0000-00-00', ''),
(87, 'Admin', 'Arisha', '', '', '', 'female', '0000-00-00', ''),
(88, 'Manager', 'Arisha', '', '', '', 'female', '0000-00-00', ''),
(89, 'Manager', 'Arisha', '', '', '', 'male', '0000-00-00', ''),
(90, 'Manager', 'Arisha', '', '', '', 'female', '0000-00-00', ''),
(91, 'Manager', '', '', '', '', 'female', '0000-00-00', ''),
(92, 'Manager', '', '', '', '', 'female', '0000-00-00', ''),
(93, 'Admin', '', '', '', '', 'female', '0000-00-00', ''),
(94, 'Admin', '', '', '', '', 'male', '0000-00-00', ''),
(95, 'Admin', 'Arisha', 'Arisha@gmail.com', 'Arisha', '@1December', 'male', '0000-00-00', ''),
(96, 'Manager', '', '', '', '', 'male', '0000-00-00', ''),
(97, 'Admin', '', '', '', '', 'male', '0000-00-00', ''),
(98, 'Manager', '', '', '', '', 'male', '0000-00-00', ''),
(99, 'Manager', 'Arisha', '', '', '', 'male', '0000-00-00', ''),
(100, 'Manager', '', '', '', '', 'male', '0000-00-00', ''),
(101, 'Manager', '', '', '', '', 'female', '0000-00-00', ''),
(102, 'Admin', '', '', '', '', 'male', '0000-00-00', ''),
(103, 'Manager', '', '', '', '', 'male', '0000-00-00', ''),
(104, 'Manager', '', '', '', '', 'male', '0000-00-00', ''),
(105, 'Manager', '', '', '', '', 'male', '0000-00-00', ''),
(106, 'Admin', '', 'mursalinarabi@gmail.com', 'Arabi', '@4December', 'male', '2000-01-02', 'maxresdefault.jpg'),
(107, 'Admin', 'Ibrahim', 'Ibrahim@gmail.com', 'Ibrahim', '@1December', 'male', '1999-01-01', '67783119_429487710992035_8162258645065662464_n.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `Id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `Id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
