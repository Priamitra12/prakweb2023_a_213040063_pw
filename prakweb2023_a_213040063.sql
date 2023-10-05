-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 05, 2023 at 08:15 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prakweb2023_a_213040063`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id_buku` int NOT NULL,
  `judul` varchar(50) NOT NULL,
  `kategori` varchar(25) NOT NULL,
  `penerbit` varchar(50) NOT NULL,
  `tahun` year NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id_buku`, `judul`, `kategori`, `penerbit`, `tahun`) VALUES
(1, 'Dilan : Dia adalah Dilanku 1990', 'Fiksi', 'Gramedia', 2014),
(2, 'Dilan : Bagian kedua 1991', 'Fiksi', 'Gramedia', 2015),
(3, 'Milea : Suara dari Dilan', 'Fiksi', 'Gramedia', 2016),
(4, 'Ancika : Dia yang bersamaku tahun 1995', 'Fiksi', 'Gramedia', 2021),
(5, 'Si Juki: Diplomasi Vs Pandemi', 'Cerita', 'Gramedia', 2022),
(6, 'Atomic Habits', 'Bantuan diri', 'Gramedia', 2023),
(7, 'Sains Ajaib: Rahasia Alam Semesta', 'Sains', 'Ilmuwan Cerdas', 2021),
(8, 'Bisnis Sukses: Panduan Praktis', 'Bisnis', 'Maju Bersama', 2022),
(9, 'Petualangan Sang Penjelajah', 'komik', 'Pustaka Abadi', 2020),
(10, 'Misteri pulau terasing', 'Komik', 'Gemilang Pustaka', 2019);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id_buku`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
