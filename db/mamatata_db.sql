-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 18, 2019 at 05:42 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mamatata_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `f_products`
--

CREATE TABLE `f_products` (
  `product_id` varchar(255) NOT NULL,
  `product_name` varchar(60) NOT NULL,
  `product_description` text NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `f_products`
--

INSERT INTO `f_products` (`product_id`, `product_name`, `product_description`, `product_price`, `product_image`) VALUES
('5bf630ccd2cf7', 'Jas Hujan Anak', 'Jas hujan anak model terbaru, ada ruang ranselnya loh... Anak-anak sering merasa kesempitan memakai jas hujan karena jas hujan sering kali dipakai menutupi tas ransel yang isinya tebal sehingga jas hujan jadi terasa sempit di badan. Jika tidak dipakai menutupi tas ransel, ranselnya jadi basah, buku-buku juga ikut basah, bingung kan? \r\nGak perlu bingung, ada jas hujan anak dengan ruang ransel. ', 95000, '5bf630ccd2cf7.png'),
('5bf631000a8ac', 'Rain Boot', 'Masalah kaki basah karena karena sepatu kehujanan dan basah mungkin sering dianggap sepele. Namun sebaiknya masalah ini tidak dibiarkan begitu saja. Sebab kaki yang basah di dalam sepatu bisa memicu penyakit.\r\n\r\nMenurut pakar bidang kesehatan, sepatu basah selain bikin lembab dan bau, juga bisa mengakibatkan dermatitis', 145000, '5bf631000a8ac.png'),
('5bf6312b883f1', 'Drawer Store ', 'Made from plastic.\r\nExpandable cutlery tray. \r\nFine, locking adjustment for a perfect fit. \r\nFits a variety of drawer sizes. \r\nUtensil area for knives or larger kitchen tools.\r\nHandy moveable storage dish for smaller items. \r\nHand wash recommended. \r\nColour: White with green lining.\r\nDimensions: 36 x 28cm. \r\nDimensions when expanded: 36 x 48cm. \r\nHappy Shopping,', 175000, '5bf6312b883f1.png'),
('5bf6315484da6', 'Sendok Penakar ', 'Anda cukup menggesernya sesuai dengan keinginan. Sangat memudahkan pekerjaan Anda dalam menakar komposisi makanan atau minuman Anda. ', 25000, '5bf6315484da6.png'),
('5bf63196e83b0', 'Rak Sepatu/Hijab', 'Rak sepatu bisa untuk rak hijab. Muat 60 kerudung', 80000, '5bf63196e83b0.png'),
('5bf631f345053', 'Rak Bumbu Dapur ', '3 Susun Rak Bumbu Dapur Serbaguna dgn gantungan dan tempat sendok\r\n\r\nkemasan. : packing kardus\r\nmaterial : plastik pp + pipa2 stainless steel', 130000, '5bf631f345053.png');

-- --------------------------------------------------------

--
-- Table structure for table `f_user`
--

CREATE TABLE `f_user` (
  `user_id` int(100) NOT NULL,
  `user_name` varchar(60) NOT NULL,
  `user_full_name` varchar(120) NOT NULL,
  `user_email` varchar(90) NOT NULL,
  `user_password` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `f_user_admin`
--

CREATE TABLE `f_user_admin` (
  `id` int(100) NOT NULL,
  `username` varchar(24) NOT NULL,
  `password` varchar(16) NOT NULL,
  `level` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `f_products`
--
ALTER TABLE `f_products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `f_user`
--
ALTER TABLE `f_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `f_user_admin`
--
ALTER TABLE `f_user_admin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `f_user`
--
ALTER TABLE `f_user`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `f_user_admin`
--
ALTER TABLE `f_user_admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
