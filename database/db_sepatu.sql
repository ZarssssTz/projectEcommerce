-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2023 at 01:03 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sepatu`
--

-- --------------------------------------------------------

--
-- Table structure for table `gambar`
--

CREATE TABLE `gambar` (
  `id_produk` char(6) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gambar`
--

INSERT INTO `gambar` (`id_produk`, `nama`) VALUES
('P00001', '23-05-2023-P000011.png'),
('P00001', '23-05-2023-P000012.png'),
('P00002', '23-05-2023-P000021.png'),
('P00002', '23-05-2023-P000022.png'),
('P00003', '23-05-2023-P000031.png'),
('P00003', '23-05-2023-P000032.png'),
('P00004', '23-05-2023-P000041.png'),
('P00004', '23-05-2023-P000042.png'),
('P00005', '23-05-2023-P000051.png'),
('P00005', '23-05-2023-P000052.png'),
('P00006', '23-05-2023-P000061.png'),
('P00006', '23-05-2023-P000062.png'),
('P00007', '23-05-2023-P000071.png'),
('P00007', '23-05-2023-P000072.png'),
('P00008', '23-05-2023-P000081.png'),
('P00008', '23-05-2023-P000082.png'),
('P00009', '23-05-2023-P000091.png'),
('P00009', '23-05-2023-P000092.png'),
('P00010', '23-05-2023-P000101.png'),
('P00010', '23-05-2023-P000102.png'),
('P00011', '23-05-2023-P000111.png'),
('P00011', '23-05-2023-P000112.png'),
('P00012', '23-05-2023-P000121.png'),
('P00012', '23-05-2023-P000122.png'),
('P00013', '23-05-2023-P000131.png'),
('P00013', '23-05-2023-P000132.png'),
('P00014', '23-05-2023-P000141.png'),
('P00014', '23-05-2023-P000142.png'),
('P00015', '23-05-2023-P000151.png'),
('P00015', '23-05-2023-P000152.png'),
('P00016', '23-05-2023-P000161.png'),
('P00016', '23-05-2023-P000162.png'),
('P00017', '23-05-2023-P000171.png'),
('P00017', '23-05-2023-P000172.png'),
('P00018', '23-05-2023-P000181.png'),
('P00018', '23-05-2023-P000182.png'),
('P00019', '23-05-2023-P000191.png'),
('P00019', '23-05-2023-P000192.png'),
('P00020', '23-05-2023-P000201.png'),
('P00020', '23-05-2023-P000202.png');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` char(6) NOT NULL,
  `nama` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama`) VALUES
('K00001', 'Sneakers'),
('K00002', 'Wedges'),
('K00003', 'Flat Shoes'),
('K00004', 'Slip On');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` char(6) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `id_kategori` char(6) NOT NULL,
  `harga` int(11) NOT NULL,
  `deskripsi` varchar(225) NOT NULL,
  `status` enum('Tersedia','Terjual') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `nama`, `id_kategori`, `harga`, `deskripsi`, `status`) VALUES
('P00001', 'NAH FLEXKNIT V3.0 MERAH TERBAKAR', 'K00001', 275000, 'FlexKnit V3.0 Burning Red - Sepatu dengan kualitas dan pengawasan standar global. Hadir dengan warna merah eksklusif untuk para jiwa muda yang membara.', 'Tersedia'),
('P00002', 'NAH AUDACITY-II BLACK WHITE', 'K00001', 412000, 'The Fresh Look of Audacity!\nHave the audacity to achieve your dreams with a fresh new style.\nEmbrace a fresh new look and feel like the best version of your self. ', 'Tersedia'),
('P00003', 'NAH PARAGON DARK OLIVE', 'K00001', 389000, 'Sepatu ini memiliki karakter yang cocok untuk digunakan oleh semua orang dimanapun dan kapanpun. Jangan kaget jika sepatu ini selalu muncul di spot yang tidak biasa saja. Karena sepatu ini selalu diletakkan dengan cara yang t', 'Tersedia'),
('P00004', 'NAH AUDACITY-II BONE WHITE', 'K00001', 412000, 'The Fresh Look of Audacity!\r\nHave the audacity to achieve your dreams with a fresh new style.\r\nEmbrace a fresh new look and feel like the best version of your self. ', 'Tersedia'),
('P00005', 'NAH PERCIKAN KERING PASIR PUTIH', 'K00001', 580000, 'Skateboarding adalah ritual harian Anda, membawa Anda dari kehangatan tempat tidur hingga bergoyang di jalanan saat Anda mencari petualangan dan tujuan baru. Biarkan SPARK membantu Anda menaklukkan ketakutan Anda. Traksi di b', 'Tersedia'),
('P00006', 'Rockport Delanie Piece Sling Women\'s Wedges', 'K00002', 1199000, 'We have a design crush and itâ€™s on the Delanie. A platform sandal style is taken to the next level with a textured fabric wrap and pin perforations on the front strap. Add truTECH shock-absorbing foam to the footbed and ext', 'Tersedia'),
('P00007', 'INPACA Gillian Summer Wedges', 'K00002', 279300, 'Inspired by blue skies and sunshine, this Gillian peep-toe wedge sandals are a suitcase essential. Made with ankle straps design, soft PVC upper , and set on a plaited raffia wedge heel, these contemporary sandals are the per', 'Tersedia'),
('P00008', 'H&M Wedge-heeled espadrilles', 'K00002', 479900, 'Wedge-heeled, open espadrilles in imitation leather with a braided foot strap and an adjustable ankle strap with a metal buckle. Satin linings and imitation leather insoles. Heel 7 cm.', 'Tersedia'),
('P00009', 'Guess Surry Rhinestone Mesh Wedges', 'K00002', 719550, '- Open toe sandal wedges with embellish detail\n- Textile upper\n- Synthetic insole\n- Synthetic outsole\n- Open toe\n- Slip on style\n', 'Tersedia'),
('P00010', 'JAVA SEVEN SANDAL WEDGES WANITA [RHT 250]', 'K00002', 150400, 'SANDAL WEDGES WANITA dari JAVA SEVEN:\r\n- Warna: KREM\r\n- Bahan: SYNTETIC\r\n- Nyaman di pakai\r\n- Permukaan Tertutup\r\n- Rubber Sol\r\n- Bisa Di pakai untuk santai dan Untuk Bepergian Keluar Rumah', 'Tersedia'),
('P00011', 'Rockport Women\'s Shoes TM Lillie Loafer- Black LTH', 'K00003', 1129200, 'Sleek, modern, and versatile, you’ll love what the Lillie has to offer. Total Motion’s advanced comfort and a lightweight, supportive sole make these the shoes you’ll reach for on busy days. Super-soft materials enhance the l', 'Tersedia'),
('P00012', 'Bally Ladyes Flat Shoes Black', 'K00003', 5600000, 'The Ladye driver shoe boasts a laid back sensibility perfect for a woman\'s off-duty look. Its black grained leather exterior boasts a raised metal logo on the side underscored by the iconic Trainspotting Stripe across the fro', 'Tersedia'),
('P00013', 'Fransisca Renaldy Flat Shoes Anak Perempuan Klasik', 'K00003', 195900, '- Flat shoes anak perempuan klasik dengan model pita\r\n- Lining dalam lembut & nyaman\r\n- Padded insole untuk kenyamanan\r\n- Outsole TPR anti slip', 'Tersedia'),
('P00014', 'Beauty Shoes 1176 Flat Brown', 'K00003', 99000, '- Sepatu flat type ballet dengan model yang chic\n- Bahan lining dan outsole berkualitas\n- Hand-made product\n- Cocok untuk acara kasual mau pun semi formal\n- Nyaman dipakai', 'Tersedia'),
('P00015', 'ALDO Tozi Slingback Flats', 'K00003', 1049250, '- Solid shade slingback flats with decorative buckle\r\n- Synthetic upper\r\n- Synthetic insole\r\n- Rubber outsole\r\n- Pin buckle fastening\r\n- Pointed toe\r\n- This ultra-flexible style is designed with flex technology for added comf', 'Tersedia'),
('P00016', 'Kaninna Shoes New Sunny', 'K00004', 331550, '- Slip on sneakers dengan statement snake skin details\n- Warna Black\n- Upper PU leather\n- Insole Pylon foam with Jersey\n- Outsole TPR\n- Slip on\n- Round toe\n- tinggi depan / belakang 2 cm / 3.5 cm', 'Tersedia'),
('P00017', 'Beauty Shoes 1205 Slip On Black', 'K00004', 289000, '- Sepatu flat dengan model slip on yang elegan\r\n- Bahan utama synthetic leather\r\n- Bahan lining dan outsole import berkualitas\r\n- Hand-made product\r\n- Nyaman dipakai', 'Tersedia'),
('P00018', 'VANS Classic Slip-On', 'K00004', 1186550, '- Slip on bernuansa mono tone untuk gaya old-skool\r\n- Warna hijau tua\r\n- Upper kanvas dan suede\r\n- Insole tekstil\r\n- Rubber outsole\r\n- Round toe\r\n- Produk unisex', 'Tersedia'),
('P00019', 'London Rag Kain Beige Horse-bit Loafer', 'K00004', 1476299, 'This solid colored loafer is a classic combination of low heel design & buckle detail for rich finish.\r\n- Metal detail\r\n- Slip-on style\r\n- Round toe\r\n- Low heel\r\n- Solid colored\r\n- Outer material: Faux Suede\r\n- Lining materia', 'Tersedia'),
('P00020', 'London Rag Plaid Loafer', 'K00004', 1033409, 'This plaid loafer is a classic combination of low heel design & buckle detail for rich finish.\r\n- Metal detail\r\n- Slip-on style\r\n- Round toe\r\n- Low heel\r\n- Outer material: Fabric\r\n- Lining material: Faux Leather\r\n- OutSole: S', 'Tersedia');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gambar`
--
ALTER TABLE `gambar`
  ADD KEY `id_produk` (`id_produk`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `gambar`
--
ALTER TABLE `gambar`
  ADD CONSTRAINT `gambar_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id`);

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
