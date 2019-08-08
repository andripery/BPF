-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 08, 2019 at 04:13 PM
-- Server version: 8.0.17
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bpf`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id_blog` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `tanggal` varchar(10) NOT NULL,
  `bulan` varchar(10) NOT NULL,
  `judul` varchar(300) NOT NULL,
  `deskripsi` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id_blog`, `gambar`, `tanggal`, `bulan`, `judul`, `deskripsi`) VALUES
(1, '2.jpg', '15', 'Jan', 'Mengelola Penghasilan dengan Prinsip 10 – 20 – 30 – 40', '10 Persen untuk Kebaikan Berapapun penghasilan anda, besar ataupun kecil, upayakanlah untuk selalu berbuat kebaikan. Definisi berbuat kebaikan itu amat luas, tidak terbatas hanya pada memberikan donasi di tempat ibadah, tapi juga hal lain seperti berbakti kepada orang tua dan memberikan bantuan seca'),
(3, '1.jpg', '20', 'Juli', 'Tips Manajemen Keuangan Sederhana untuk Kehidupan Sejahtera', '1. Belajar Kontrol Diri Jika Anda beruntung, orang tua Anda mengajarkan Anda keterampilan ini ketika Anda masih kecil. Jika tidak, ingatlah bahwa semakin cepat Anda mempelajari kemampuan menunda kepuasan, semakin cepat Anda akan merasa mudah mengatur keuangan Anda. Meskipun Anda dapat dengan mudah m'),
(4, '3.jpg', '1 ', 'Agustus', '15 Kebiasaan Mengatur Keuangan Pribadi yang Bisa Bikin Masa Depan Cerah', '1. Melacak pendapatan dan pengeluaran  Seringkali kita nggak peduli dengan pengeluaran kita. Kemana saja gaji sebulan kita pergi? Melacak pendapatan dan pengeluaran bisa dilakukan dengan membuat pembukuan sederhana. Kalau nggak mau repot bisa pakai  aplikasi pengatur keuangan di smartphone-mu. 2. Me');

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id_kontak` int(11) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pesan` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id_kontak`, `subject`, `nama`, `email`, `pesan`) VALUES
(1, 'Judul', 'Alpery', 'alpery@gmail.com', 'Test');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id_login` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_login`, `username`, `password`) VALUES
(2, 'jef', '123'),
(3, 'username', 'username'),
(4, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id_blog`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id_blog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id_kontak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
