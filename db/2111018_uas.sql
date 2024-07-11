-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2024 at 09:27 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `2111018_uas`
--

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `title` varchar(200) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `client` varchar(255) NOT NULL,
  `tgl` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `gambar`, `deskripsi`, `title`, `kategori`, `client`, `tgl`) VALUES
(3, 'image-240710-a1d0384b79.png', 'tikus biasanya berada di dalam tanah seperti pada gambar di atas', 'tikus', 'hewan', 'kucing', '2024-07-11'),
(4, 'image-240710-22da63bf11.png', 'this is example one of my design', 'e-perpus', 'Design Logo', 'walisongo', '2024-07-11'),
(6, 'image-240710-113228f648.jpg', 'nasi kotak ini rasanya enak bangettt\r\n', 'nasi kotak', 'Makanan', 'wandhe Qta', '2024-07-11'),
(7, 'image-240711-c2ec7fb177.jpg', 'rumah digunakan untuk blablablablablablablbalbalblaba', 'rumah joglo', 'home', 'sidowangi', '2023-08-09'),
(8, 'image-240711-5730c01ce2.jpg', 'Mendokumentasi PEMILU serentak 2024 untuk beberapa desa', 'Dokumentasi Pemilu', 'Dokumentasi', 'Pemerintah', '2024-03-20');

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE `profil` (
  `id_profil` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `skill` varchar(255) NOT NULL,
  `ttl` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `phone` char(20) NOT NULL,
  `alamat` text NOT NULL,
  `umur` int(11) NOT NULL,
  `degree` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `freelancer` enum('bersedia','tidak bersedia') NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`id_profil`, `nama`, `skill`, `ttl`, `website`, `phone`, `alamat`, `umur`, `degree`, `email`, `freelancer`, `deskripsi`, `foto`) VALUES
(1, 'Ulin Nuha', 'Professional <span class=\'underlight\'>Photographer</span> & <span class=\'underlight\'>Designer</span>', '17 Agustus 1945', 'www.webcontoh.com', '+628577167672', 'Kajoran, Magelang', 21, 'Master', 'ulinnuha123@gmail.com', 'bersedia', 'Saya merupakan lulusan jurusan Multimedia dari SMK Ma`arif Walisongo Kajoran. Bergulat di bidang itu membuat saya memiliki kemampuan yang cukup matang dalam hal fotografi maupun videografi. Selain itu, saya juga memiliki kemampuan dalam bidang desain grafis.\r\n<br><br>\r\n            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi eius amet dolor veritatis excepturi? Accusantium, quia voluptates! Reprehenderit optio dicta asperiores hic porro eius iure, ipsa sapiente quos eligendi nihil obcaecati facere autem! Harum pariatur similique ullam. Architecto corporis libero doloremque eaque ipsa aspernatur dolore iusto, inventore vero minus. Repudiandae!\r\n', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `profil`
--
ALTER TABLE `profil`
  MODIFY `id_profil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
