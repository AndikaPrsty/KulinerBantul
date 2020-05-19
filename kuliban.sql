-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2020 at 04:42 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kuliban`
--

-- --------------------------------------------------------

--
-- Table structure for table `gambar`
--

CREATE TABLE `gambar` (
  `id_gambar` varchar(40) NOT NULL,
  `id_post` varchar(40) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `image_ref` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gambar`
--

INSERT INTO `gambar` (`id_gambar`, `id_post`, `gambar`, `image_ref`) VALUES
('img1589769395', 'pst1589769327', 'https://firebasestorage.googleapis.com/v0/b/kuliner-bantul.appspot.com/o/img%2Fpost%2Ftempat-kuliner%2F1589769360477.jpg?alt=media&token=a3ea3160-820d-4ee6-b04e-e463a7103618', '/img/post/tempat-kuliner/1589769360473.jpg'),
('img1589769396', 'pst1589769327', 'https://firebasestorage.googleapis.com/v0/b/kuliner-bantul.appspot.com/o/img%2Fpost%2Ftempat-kuliner%2F1589769360473.jpg?alt=media&token=34d363aa-225d-4d08-93c0-fc4217c191a4', '/img/post/tempat-kuliner/1589769360477.jpg'),
('img1589769714', 'pst1589769544', 'https://firebasestorage.googleapis.com/v0/b/kuliner-bantul.appspot.com/o/img%2Fpost%2Fevent-kuliner%2F1589769705152.jpg?alt=media&token=80a80bf6-56a2-4e23-8805-5471e30f8bab', '/img/post/event-kuliner/1589769705152.jpg'),
('img1589769715', 'pst1589769544', 'https://firebasestorage.googleapis.com/v0/b/kuliner-bantul.appspot.com/o/img%2Fpost%2Fevent-kuliner%2F1589769705156.PNG?alt=media&token=cfb8d5a3-f393-42ea-8d43-ea1c819b20d6', '/img/post/event-kuliner/1589769705156.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_post`
--

CREATE TABLE `jenis_post` (
  `id_jenis_post` varchar(40) NOT NULL,
  `jenis_post` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis_post`
--

INSERT INTO `jenis_post` (`id_jenis_post`, `jenis_post`) VALUES
('evt1587608520', 'Event'),
('klr1587608474', 'Tempat Kuliner');

-- --------------------------------------------------------

--
-- Table structure for table `maps`
--

CREATE TABLE `maps` (
  `id_map` varchar(40) NOT NULL,
  `id_post` varchar(40) NOT NULL,
  `latitude` varchar(50) NOT NULL,
  `longitude` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `maps`
--

INSERT INTO `maps` (`id_map`, `id_post`, `latitude`, `longitude`) VALUES
('map1589769397', 'pst1589769327', '-7.887836005760962', '110.32744740551537'),
('map1589769715', 'pst1589769544', '-7.888048552235762', '110.32814454408455');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id_post` varchar(40) NOT NULL,
  `id_user` varchar(50) NOT NULL,
  `id_jenis_post` varchar(40) NOT NULL,
  `judul_post` varchar(250) NOT NULL,
  `alamat` varchar(300) NOT NULL,
  `konten` varchar(4000) NOT NULL,
  `jam_buka` varchar(30) DEFAULT NULL,
  `tanggal` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id_post`, `id_user`, `id_jenis_post`, `judul_post`, `alamat`, `konten`, `jam_buka`, `tanggal`) VALUES
('pst1589769327', 'usr1589769299', 'klr1587608474', 'Ayam Goreng Jawa Mbah Cemplung', 'askldjaslkdjaslkdj', 'alksjdalksjdlaksjd', '08:00 - 19:00', NULL),
('pst1589769544', 'usr1589769299', 'evt1587608520', 'askldjaslkdjaslkdj', 'askldjaslkdjaslkdj', 'klsajdlksdjalskdjlaskjd', NULL, '2020-02-20');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id_role` varchar(40) NOT NULL,
  `nama_role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id_role`, `nama_role`) VALUES
('adm1587565941', 'admin'),
('mbr1587565962', 'member');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` varchar(30) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `image` varchar(400) NOT NULL,
  `tanggal_lahir` varchar(50) NOT NULL,
  `telp` varchar(20) NOT NULL,
  `id_role` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `tanggal_daftar` varchar(50) NOT NULL,
  `ip_address` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `email`, `password`, `image`, `tanggal_lahir`, `telp`, `id_role`, `username`, `tanggal_daftar`, `ip_address`) VALUES
('usr1587606477', 'Andika Prasetya', 'andikaandika866@gmail.com', '$2y$10$Wk693gGhb9Lsqv2SwbtcOerZsz9FNoE5a5piO8AV2yx0.fGUNaj.W', 'https://firebasestorage.googleapis.com/v0/b/kuliner-bantul.appspot.com/o/user%2Fprofile%2Fdefault.jpg?alt=media&token=d9b82102-4eed-451d-8c89-23cd5692364d', '929829600', '089650941725', 'adm1587565941', 'andika1587606477', '1587606477', '0'),
('usr1587606716', 'Andika Prasetya', 'andika12182546@bsi.ac.id', '$2y$10$KQ7.xife3zA9fUWQc5zQi.ACs3hujFSQHbus49SXJLR.rcAhrtrFO', 'https://firebasestorage.googleapis.com/v0/b/kuliner-bantul.appspot.com/o/user%2Fprofile%2Fdefault.jpg?alt=media&token=d6795d04-06b2-4d6e-abd6-51bf9b294001', '929829600', '089650941725', 'adm1587565941', 'andika1587606716', '1587606716', '0'),
('usr1589769299', 'Andika Prasetya', 'andika@email.com', '$2y$10$SmoTpmO2wR92cwnkHlo.V.chbSRasU7AOZF9NJ6axSwqfdhvyV0Dm', 'https://firebasestorage.googleapis.com/v0/b/kuliner-bantul.appspot.com/o/user%2Fprofile%2FCapturasd.PNG?alt=media&token=7edd81a1-20cc-448a-a23d-bdade39f83f6', '929829600', '089913123123', 'adm1587565941', 'andika1589769299', '1589769299', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`id_gambar`);

--
-- Indexes for table `jenis_post`
--
ALTER TABLE `jenis_post`
  ADD PRIMARY KEY (`id_jenis_post`);

--
-- Indexes for table `maps`
--
ALTER TABLE `maps`
  ADD PRIMARY KEY (`id_map`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id_post`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
