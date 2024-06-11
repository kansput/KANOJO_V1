-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Jan 2024 pada 08.55
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kanojo`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `riwayat`
--

CREATE TABLE `riwayat` (
  `id` int(3) NOT NULL,
  `tanggal` date NOT NULL,
  `id_user` int(3) NOT NULL,
  `username_user` varchar(256) NOT NULL,
  `id_talent` int(3) NOT NULL,
  `useraname_talent` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `role`
--

CREATE TABLE `role` (
  `id` int(1) NOT NULL,
  `nama_role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sewa`
--

CREATE TABLE `sewa` (
  `id` int(3) NOT NULL,
  `tanggal` date NOT NULL,
  `durasi` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `talent`
--

CREATE TABLE `talent` (
  `id` int(3) NOT NULL,
  `email` varchar(256) NOT NULL,
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `nama` varchar(256) NOT NULL,
  `nik` int(16) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(256) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `foto_profil` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(3) NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `nama` varchar(256) NOT NULL,
  `nik` int(16) NOT NULL,
  `alamat` varchar(256) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `nama`, `nik`, `alamat`, `jenis_kelamin`, `image`) VALUES
(1, 'gilang@gmail.com', '$2y$10$nHYor5HTSUSat04g8/lLfumkPbSCMbwnHbUXd2slJloDaLykm5Bzy', 'windah basudara', 0, '', '', 'default.jpg'),
(3, 'reza@caricewek.com', '$2y$10$mzISNLzuc3Ze1ly24ooCTuWTHK4/qkw7MvsY8KzrO5FMLffLyUAZe', 'Reza Rabbani Rachim', 30201000, 'Jalan tebet timur ketemu cewek', 'Laki', 'default.jpg'),
(4, 'edo@coba.com', '$2y$10$OVJrFcwnUsUK.4LHhgW7nOPK5dTanHfNKWL5gIp3LQH.obACzLvDe', 'edo putra', 983982993, 'jakarta', 'Laki', 'default.jpg'),
(5, 'reza@hitam.com', '$2y$10$9PCB2pzGctWD4Y94Hjd.e.ntcpFaKbCrSVbuZH.JxjFyKIT40HQe6', 'reza bot', 2147483647, 'jakarta', 'Laki', 'pro1704130789.jpg'),
(6, 'edo@edo.com', '$2y$10$MPhd5OpNAuUG4A/PppKo/eEt2AonezDpIQpxufnKygm4RcfSsqfBq', 'edo pria', 2147483647, 'jakarta', 'Laki-laki', 'pro1703877498.jpg'),
(7, 'kanda@kanda.com', '$2y$10$IUfcq6GW6MZJrCozwE.amOf/Nejk.aijMdnj4jOHRMFoqUYZYicnS', 'aku kanda', 2147483647, 'jalan kenangan', 'Laki-laki', 'stream-05.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `riwayat`
--
ALTER TABLE `riwayat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_talent` (`id_talent`);

--
-- Indeks untuk tabel `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sewa`
--
ALTER TABLE `sewa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `talent`
--
ALTER TABLE `talent`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `riwayat`
--
ALTER TABLE `riwayat`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `role`
--
ALTER TABLE `role`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `sewa`
--
ALTER TABLE `sewa`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `talent`
--
ALTER TABLE `talent`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
