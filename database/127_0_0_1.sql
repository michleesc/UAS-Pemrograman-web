-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Jul 2022 pada 07.43
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbpekerja`
--
CREATE DATABASE IF NOT EXISTS `dbpekerja` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `dbpekerja`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbsupport`
--

CREATE TABLE `tbsupport` (
  `NIK` int(200) NOT NULL,
  `Nama` varchar(2000) NOT NULL,
  `Kota` varchar(200) NOT NULL,
  `Nohp` int(200) NOT NULL,
  `Email` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbsupport`
--

INSERT INTO `tbsupport` (`NIK`, `Nama`, `Kota`, `Nohp`, `Email`) VALUES
(31710321, 'Jefri', 'Jakarta', 2147483647, 'jefri@gmail.com'),
(31710322, 'Joni', 'Palembang', 628122307, 'Joni@gmail.com'),
(31710324, 'Michlee Septian', 'Jakarta', 62881749, 'michlee.septian.c@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbsupport`
--
ALTER TABLE `tbsupport`
  ADD PRIMARY KEY (`NIK`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
