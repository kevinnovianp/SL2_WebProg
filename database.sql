-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Apr 2022 pada 14.37
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aplikasi_pengelolaan_keuangan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(6) NOT NULL,
  `namaDepan` varchar(15) NOT NULL,
  `namaTengah` varchar(15) NOT NULL,
  `namaBelakang` varchar(15) NOT NULL,
  `tempatLahir` varchar(15) NOT NULL,
  `tglLahir` date NOT NULL,
  `nik` char(16) NOT NULL,
  `wargaNegara` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `noHP` char(12) NOT NULL,
  `alamat` text NOT NULL,
  `kodePos` varchar(6) NOT NULL,
  `fotoProfil` longblob NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `namaDepan`, `namaTengah`, `namaBelakang`, `tempatLahir`, `tglLahir`, `nik`, `wargaNegara`, `email`, `noHP`, `alamat`, `kodePos`, `fotoProfil`, `username`, `password`) VALUES
INSERT INTO `user` (`id`, `namaDepan`, `namaTengah`, `namaBelakang`, `tempatLahir`, `tglLahir`, `nik`, `wargaNegara`, `email`, `noHP`, `alamat`, `kodePos`, `fotoProfil`, `username`, `password`) VALUES

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;