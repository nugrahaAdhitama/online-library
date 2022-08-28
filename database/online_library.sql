-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Agu 2022 pada 14.26
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
-- Database: `online_library`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `books`
--

CREATE TABLE `books` (
  `book_id` int(11) NOT NULL,
  `title` varchar(512) DEFAULT NULL,
  `author` varchar(256) DEFAULT NULL,
  `publisher` varchar(256) DEFAULT NULL,
  `publish_date` date DEFAULT NULL,
  `location` varchar(16) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `role_id` int(11) NOT NULL,
  `role` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `roles`
--

INSERT INTO `roles` (`role_id`, `role`) VALUES
(1, 'Member'),
(2, 'Administrator');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transactions`
--

CREATE TABLE `transactions` (
  `transaction_id` int(11) NOT NULL,
  `loan_date` date DEFAULT NULL,
  `due_date` date DEFAULT NULL,
  `return_date` date DEFAULT NULL,
  `fine` int(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `user_id` int(255) NOT NULL,
  `role_id` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nomor_anggota` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `telepon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`user_id`, `role_id`, `nama`, `nomor_anggota`, `email`, `password`, `alamat`, `telepon`) VALUES
(1, 1, 'Tes Doang', '960634', 'tes@gmail.com', '$2y$10$YaeCH.I2oeU8bdwd.137JehcUbwk4x0JW9vFoY93yRKoXbs7VSqlC', 'Di rumah', '08123456'),
(2, 1, 'tes 2', '779499', 'tes2@gmail.com', '$2y$10$jUelo0F3CeQiaS8MgrdzIeakwCmb4yaQGaNjNXAEnE4d9hjJ518yW', 'di rumah', '081249102'),
(3, 1, 'tes 2', '214676', 'tes2@gmail.com', '$2y$10$05QPX/h/o8jJS5J8e6s38uQI1tAhOklxolSyPCdVFvdx4yPPa2/lu', 'di rumah', '081249102'),
(4, 1, 'fajsiofjaioj', '345473', 'ifsjafiaji@t.com', '$2y$10$s8Fvyu.otEoKrE0m.ntQg.VdvH6b/ZTGd5hi8HiYNGctfe8BpEslq', 'sjfiajfioajsiof', '248014109'),
(5, 1, 'fiajifjasiofjaio', '779984', 'sajfioajfiosaj@gmail.com', '$2y$10$EmjkLeVXNW/bNRcO5775Fe.PdB4OS964EJv33BAILSYiHc8RVIPO.', 'dasijfiajfioa', '918240918491'),
(6, 1, 'fiasjfiaj', '289733', 'ajfiajfi@gmail.com', '$2y$10$LQHZhpvTmCKNwQMti36OsO50.snGpXGWO2xkHQMbZ9PG.M.4MAQ5y', 'fjsioajfioa', '20149024809'),
(7, 1, 'SHFIOHAIFJAIO', '235694', 'asfjasifjioa@gmail.com', '$2y$10$5kOUBpAM.Ed8VMKL0beYje8V8YEdxwO77MooH5spN5ElauIEJJgf.', 'safijasiofjaoi', '123412'),
(8, 1, 'jwifjiasjfioaji', '964809', 'safjioasjfio@gmail.com', '$2y$10$VDEHM5wBppNAmPJbche6..2yi.W2EYB8MQQEfClxDXPgSEvOHHGBC', 'isajfioajif', '24819048901');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`);

--
-- Indeks untuk tabel `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indeks untuk tabel `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`transaction_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `books`
--
ALTER TABLE `books`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `transactions`
--
ALTER TABLE `transactions`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
