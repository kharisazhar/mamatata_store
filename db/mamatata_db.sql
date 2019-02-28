-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 28, 2019 at 04:42 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

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
('5c77658d40466', 'VINTAGE Storage', 'Rapi itu cantik. Hindarkan meja rias atau meja kerja yg berantakan dengan VINTAGE Storage\r\nRak kosmetik dari bahan kayu ringan. Ada lacinya, juga ada sekat khusus untuk tempat tissue, dilengkapi cermin. Cocok untuk tempat kosmetik dan aksesoris, membantu merapikan meja rias yang berserakan.\r\n\r\nRak kosmetik terbuat dari bahan kayu tebal dan ringan. Dikirim dalam bentuk terbuka berbentuk kepingan untuk mencegah terjadi kerusakan saat proses pengiriman. Mudah dirakit, ada panduan pemasangan di dalam kemasan.\r\nBahan : kayu MDF 3 ML\r\n\r\nsize : 37 x 18.5 x 13.5 cm', 120000, '5c77658d40466.png'),
('5c7765dc457fa', 'STORAGE BOX 66 liters', 'Pusing dengan pakaian yang terlalu banyak sehingga lemari pakaian sudah tidak mampu menampungnya. Atau pusing dengan mainan si kecil yang berserakan dimana-mana?? Gak perlu pusing, ada STORAGE BOX 66 liters frame baja Double Zipper Large Box 66L \r\nDouble zipper large box adalah kotak serbaguna dengan kapasitas 66 Liter, fungsinya untuk tempat menyimpan pakaian atau mainan anak-anak, agar bebas dari debu dan lebih rapi\r\n\r\nUniknya, box ini terdapat 2 pintu, bisa buka dari atas dan samping. Pintu atas cocok untuk mengisi pakaian atau mainan ke dalam box. Pintu depan cocok untuk mengambil pakaian keluar dari box. Sangat Praktis bukan ?? Box dilengkapi 3 pcs rangka dari bahan stainless di bagian dalam box. Dengan rangka stainless ini box bisa berdiri dengan kokoh, gak bakal lemas.\r\n\r\nPada bagian alas box terjahit lapisan papan tipis, kuat untuk menampung pakaian dan mainan. Terdapat pegangan di samping kiri kanan box\r\n\r\nSatu box bisa menampung 40-50 pcs pakaian. Box bisa dilipat saat sedang tidak dipakai\r\n\r\nSangat cocok bagi anda yang sering pindah tempat tinggal. Dengan box ini, anda tidak perlu lagi beli lemari pakaian, irit uang. \r\nMaterial : Oxford tebal\r\n\r\nSize : 50.5 x 40.5 x 32.5 cm', 85000, '5c7765dc457fa.png'),
('5c77661e1ae6d', 'Rak pengering', 'Rak pengering yang inovatif sebagai solusi hemat ruang dan rak pengeringan cepat dan efisien.\r\n\r\nRak pengeringan peralatan dapur Anda setelah habis dicuci. Terbuat dari Silikon Non Slip pada bagian tepi dengan batang rak dari stainless.\r\n\r\nRak seperti penyaring besar dimana air keluar dari sela-sela batang rak. Anda pun dengan mudah dapat mengeringkan buah dan sayur sehabis dicuci atau peralatan dapur. Bisa juga sebagai alat untuk memotong daging, sayuran, buah dan lain-lain.\r\n\r\nRak sangat mudah dibersihkan dan dapat dilipat ketika tidak dipakai sehingga memudahkan penyimpanan.\r\n\r\nMaterial : Stainless steel, Silicone\r\nSize : 37 x 22.5 x 0.9 (cm)', 50000, '5c77661e1ae6d.png'),
('5c77666a64fae', 'Pompa air minum digital', 'Ready \r\nputih \r\nhitam \r\nSpesifikasi : \r\nBahan: ABS + air stainless steel\r\nVoltage: 5V \r\nListrik: 4W \r\nDaya : Port USB\r\nBaterai : Litinium 1200 mAh\r\nSelang : Silikon Foodgrade\r\n\r\nDeskripsi: \r\nPompa air minum digital dirancang khusus untuk kesehatan. \r\nBahan berkualitas tinggi dan desain modern,elegan memungkinkan Anda menikmati air minum yang Bersih dan Aman. \r\nFitur: \r\nBuilt-in baterai isi ulang (cas seperti hp)\r\nCharger type USB \r\nSilikon kelas makanan, ABS BPA Free\r\nKualitas Unggul, Ramah lingkungan\r\nStadard Food Grade\r\nTingkat kebisingan rendah\r\nMemompa sekitar -/+6-8 barel air - galon (19 liter)\r\n\r\nIndikator Lampu Merah : Berhenti bekerja\r\nIndikator Lampu Biru : Baterai terisi penuh\r\n\r\nPack:\r\n1 x Digital Electric Bottle Pump \r\n1 x Stainless steel water let \r\n1 x USB Cable\r\n1 x Hose Silikon \r\n1 x Manual \r\n1 x Retail Box', 95000, '5c77666a64fae.png'),
('5c7766bd8df28', 'Kasur Mobil ', 'penyangga kaki terpisah dengan body kasur\r\n\r\nSering melakukan perjalanan jauh dengan mobil Atau berencana untuk mudik lebaran dengan mobil pribadi Kalau gitu kamu wajib mempersiapkan perlengkapan seperti Kasur Mobil agar perjalananmu dan keluarga jadi lebih nyaman, terutama bagi kamu yang mengajak anak-anak. Kasur Mobil dengan berbagai pilihan ukuran dan bahan bisa kamu temukan lengkap di Tokopedia.\r\n\r\nNah agar tidak ribet membawanya, kamu bisa memilih kasur mobil angin. Jika tidak digunakan, kamu bisa menyimpannya dengan mudah tanpa memakan banyak tempat. Saat ingin menggunakannya, tinggal mengisinya dengan angin menggunakan pompa. Mudah bukan$3 Yuk temukan Kasur Mobil angin ataupun Kasur Mobil berbahan lain di sini, harga terjangkau!\r\n\r\nSpesifikasi:\r\nUkuran: sesuai gambar \r\nBahan : suede nap \r\nBerat. : 3kg\r\nUsed. : Indoor/Outdoor, semua type mobil SUV, MPV, Sedan\r\n\r\nIsi kemasan \r\nProduk yg didapatkan:\r\n- matras (sudah ada block protection ) - pompa elektrik\r\n- 2 Bantal\r\n- repair kit\r\n- carrier bag\r\n\r\n', 350000, '5c7766bd8df28.png');

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
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `f_user_admin`
--

INSERT INTO `f_user_admin` (`id`, `username`, `password`) VALUES
(13, 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(14, 'sdsd', 'cc2bd8f09bb88b5dd20f9b432631b8ca'),
(15, 's', '03c7c0ace395d80182db07ae2c30f034'),
(16, 's', '03c7c0ace395d80182db07ae2c30f034'),
(17, 'ijal', 'be6459a7fd4032689aedd4adad189197'),
(18, 'admin', '21232f297a57a5a743894a0e4a801fc3');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;