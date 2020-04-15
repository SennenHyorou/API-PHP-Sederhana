-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Apr 2020 pada 15.22
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_api`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbmahasiswa`
--

CREATE TABLE `tbmahasiswa` (
  `npm` char(7) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `prodi` varchar(255) NOT NULL,
  `fakultas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbmahasiswa`
--

INSERT INTO `tbmahasiswa` (`npm`, `nama`, `prodi`, `fakultas`) VALUES
('1731001', 'Agusyanto', 'Sistem Informasi', 'Sistem Komputer'),
('1731002', 'Wiranto Mahendrako', 'Sistem Informasi', 'Sistem Komputer'),
('1731046', 'Chen Indra', 'Sistem Informasi', 'Sistem Komputer');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbmahasiswa`
--
ALTER TABLE `tbmahasiswa`
  ADD PRIMARY KEY (`npm`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
