-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Jun 2024 pada 14.06
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lokerku`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admins`
--

CREATE TABLE `admins` (
  `idadmin` int(11) NOT NULL,
  `namaadmin` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `telp` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `level` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `admins`
--

INSERT INTO `admins` (`idadmin`, `namaadmin`, `username`, `email`, `telp`, `password`, `level`) VALUES
(1, 'Yudi Utomo', 'yudiutomo', 'yudiutomo@gmail.com', '089123456789', '1234567', 'admin'),
(2, 'Master Admin', 'masteradmin', 'masteradmin@gmail.com', '088192837365', 'masteradmin', 'master'),
(3, 'lana del', 'lanadel', 'lana@gmail.com', '085446129004', '1234567', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `historysewalokers`
--

CREATE TABLE `historysewalokers` (
  `idhistory` int(11) NOT NULL,
  `idpengguna` int(11) NOT NULL,
  `nomor_loker` varchar(200) NOT NULL,
  `nama_pengguna` varchar(200) NOT NULL,
  `npm` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `waktu_mulai` varchar(200) NOT NULL,
  `waktu_selesai` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL,
  `updated_at` varchar(200) NOT NULL,
  `created_at` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `historysewalokers`
--

INSERT INTO `historysewalokers` (`idhistory`, `idpengguna`, `nomor_loker`, `nama_pengguna`, `npm`, `email`, `waktu_mulai`, `waktu_selesai`, `status`, `updated_at`, `created_at`) VALUES
(1, 1, '001', 'Talia Aprianti', '22082010035', '22082010035@student.upnjatim.ac.id', '08.00', '11.00', 'selesai', '', ''),
(2, 3, '003', 'Risda Rahmawati Harsono', '22082010040', '22082010040@student.upnjatim.ac.id', '13.35', '16.35', 'selesai', '2022-10-20 06:37:25', '2022-10-20 06:37:25'),
(3, 3, '004', 'Risda Rahmawati Harsono', '22082010040', '22082010040@student.upnjatim.ac.id', '13.39', '16.39', 'selesai', '2022-10-20 06:39:49', '2022-10-20 06:39:49'),
(4, 3, '005', 'Risda Rahmawati Harsono', '22082010040', '22082010040@student.upnjatim.ac.id', '13.55', '16.55', 'selesai', '2022-10-20 06:55:36', '2022-10-20 06:55:36'),
(5, 3, '006', 'Risda Aja', '22082010040', '22082010040@student.upnjatim.ac.id', '14.22', '17.22', 'selesai', '2022-10-20 07:22:26', '2022-10-20 07:22:26'),
(6, 3, '007', 'Risda oke', '22082010040', '22082010040@student.upnjatim.ac.id', '15.16', '18.16', 'selesai', '2022-10-20 08:16:05', '2022-10-20 08:16:05'),
(7, 3, '002', 'Risda oke', '22082010040', '22082010040@student.upnjatim.ac.id', '15.16', '18.16', 'selesai', '2022-10-20 08:16:14', '2022-10-20 08:16:14'),
(8, 3, '008', 'Risda oke', '22082010040', '22082010040@student.upnjatim.ac.id', '15.16', '18.16', 'selesai', '2022-10-20 08:16:19', '2022-10-20 08:16:19'),
(9, 4, '002', 'Nanda Kharisma Safitri', '22082010036', '22082010036@student.upnjatim.ac.id', '17.40', '18.40', 'selesai', '2022-10-20 10:33:49', '2022-10-20 10:33:49'),
(10, 2, '011', 'Nurul Izzah', '22082010008', '22082010008@student.upnjatim.ac.id', '18.00', '19.00', 'selesai', '2022-10-20 10:42:22', '2022-10-20 10:42:22'),
(11, 1, '001', 'Talia Aprianti', '22082010035', '22082010035@student.upnjatim.ac.id', '19.23', '22.23', 'selesai', '2022-10-20 12:23:29', '2022-10-20 12:23:29'),
(12, 1, '004', 'Talia Aprianti', '22082010035', '22082010035@student.upnjatim.ac.id', '19.24', '22.24', 'selesai', '2022-10-20 12:24:53', '2022-10-20 12:24:53'),
(13, 1, '004', 'Talia Aprianti', '22082010035', '22082010035@student.upnjatim.ac.id', '19.25', '22.25', 'selesai', '2022-10-20 12:25:18', '2022-10-20 12:25:18'),
(14, 5, '005', 'Muhammad Rizky Fahrizal', '22082010041', '22082010041@student.upnjatim.ac.id', '19.34', '22.34', 'selesai', '2022-10-20 12:34:55', '2022-10-20 12:34:55'),
(15, 1, '003', 'Talia Aprianti', '22082010035', '22082010035@student.upnjatim.ac.id', '09.30', '11.30', 'kosong', '2022-10-21 12:16:18', '2022-10-21 02:10:41'),
(16, 2, '002', 'Nurul Izzah', '22082010008', '22082010008@student.upnjatim.ac.id', '19.30', '20.30', 'kosong', '2022-10-21 12:14:02', '2022-10-21 12:13:35'),
(17, 1, '002', 'Talia Aprianti', '22082010035', '22082010035@student.upnjatim.ac.id', '08.00', '09.30', 'kosong', '2023-02-16 00:53:20', '2023-02-16 00:52:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lokers`
--

CREATE TABLE `lokers` (
  `idloker` int(11) NOT NULL,
  `nomer_loker` varchar(200) NOT NULL,
  `waktu_mulai` varchar(200) NOT NULL,
  `waktu_selesai` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `lokers`
--

INSERT INTO `lokers` (`idloker`, `nomer_loker`, `waktu_mulai`, `waktu_selesai`, `status`) VALUES
(1, '001', '00.00', '00.00', 'tersedia'),
(2, '002', '00.00', '00.00', 'tersedia'),
(3, '003', '00.00', '00.00', 'tersedia'),
(4, '004', '00.00', '00.00', 'tersedia'),
(5, '005', '00.00', '00.00', 'tersedia'),
(6, '006', '00.00', '00.00', 'tersedia'),
(7, '007', '00.00', '00.00', 'tersedia'),
(8, '008', '00.00', '00.00', 'tersedia'),
(9, '009', '00.00', '00.00', 'tersedia'),
(10, '010', '00.00', '00.00', 'tersedia'),
(11, '011', '00.00', '00.00', 'tersedia'),
(12, '012', '00.00', '00.00', 'tersedia'),
(13, '013', '00.00', '00.00', 'tersedia'),
(14, '014', '00.00', '00.00', 'tersedia'),
(15, '015', '00.00', '00.00', 'tersedia'),
(16, '016', '00.00', '00.00', 'tersedia'),
(17, '017', '00.00', '00.00', 'tersedia'),
(18, '018', '00.00', '00.00', 'tersedia'),
(19, '019', '00.00', '00.00', 'tersedia'),
(20, '020', '00.00', '00.00', 'tersedia'),
(21, '021', '00.00', '00.00', 'tersedia'),
(22, '022', '00.00', '00.00', 'tersedia'),
(23, '023', '00.00', '00.00', 'tersedia'),
(24, '024', '00.00', '00.00', 'tersedia'),
(25, '025', '00.00', '00.00', 'tersedia'),
(26, '026', '00.00', '00.00', 'tersedia'),
(27, '027', '00.00', '00.00', 'tersedia'),
(28, '028', '00.00', '00.00', 'tersedia'),
(29, '029', '00.00', '00.00', 'tersedia'),
(30, '030', '00.00', '00.00', 'tersedia'),
(31, '031', '00.00', '00.00', 'tersedia'),
(32, '032', '00.00', '00.00', 'tersedia'),
(33, '033', '00.00', '00.00', 'tersedia'),
(34, '034', '00.00', '00.00', 'tersedia'),
(35, '035', '00.00', '00.00', 'tersedia'),
(36, '036', '00.00', '00.00', 'tersedia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penggunas`
--

CREATE TABLE `penggunas` (
  `idpengguna` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `npm` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `telp` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `penggunas`
--

INSERT INTO `penggunas` (`idpengguna`, `nama`, `npm`, `email`, `telp`, `password`, `status`) VALUES
(1, 'Talia Aprianti', '22082010035', '22082010035@student.upnjatim.ac.id', '+6283849727449', '1234567', 'kosong'),
(2, 'Nurul Izzah', '22082010008', '22082010008@student.upnjatim.ac.id', '+6289522654820', '1234567', 'kosong'),
(3, 'Risda Rahmawati Harsono', '22082010040', '22082010040@student.upnjatim.ac.id', '+62895326442194', '1234567', 'kosong'),
(4, 'Nanda Kharisma Safitri', '22082010036', '22082010036@student.upnjatim.ac.id', '+6287853102149', '1234567', 'kosong'),
(5, 'Muhammad Rizky Fahrizal', '22082010041', '22082010041@student.upnjatim.ac.id', '+6287869987678', '1234567', 'kosong');

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sewalokers`
--

CREATE TABLE `sewalokers` (
  `idsewa` int(11) NOT NULL,
  `idpengguna` int(11) NOT NULL,
  `idloker` int(11) NOT NULL,
  `nama_pengguna` varchar(200) NOT NULL,
  `npm` varchar(200) NOT NULL,
  `nomer_loker` varchar(200) NOT NULL,
  `waktu_mulai` varchar(200) NOT NULL,
  `waktu_selesai` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `sewalokers`
--

INSERT INTO `sewalokers` (`idsewa`, `idpengguna`, `idloker`, `nama_pengguna`, `npm`, `nomer_loker`, `waktu_mulai`, `waktu_selesai`, `status`) VALUES
(1, 1, 1, 'Talia Aprianti', '22082010035', '001', '08.00', '11.00', 'pinjam');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`idadmin`);

--
-- Indeks untuk tabel `historysewalokers`
--
ALTER TABLE `historysewalokers`
  ADD PRIMARY KEY (`idhistory`);

--
-- Indeks untuk tabel `lokers`
--
ALTER TABLE `lokers`
  ADD PRIMARY KEY (`idloker`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `penggunas`
--
ALTER TABLE `penggunas`
  ADD PRIMARY KEY (`idpengguna`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `sewalokers`
--
ALTER TABLE `sewalokers`
  ADD PRIMARY KEY (`idsewa`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admins`
--
ALTER TABLE `admins`
  MODIFY `idadmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `historysewalokers`
--
ALTER TABLE `historysewalokers`
  MODIFY `idhistory` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `lokers`
--
ALTER TABLE `lokers`
  MODIFY `idloker` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `penggunas`
--
ALTER TABLE `penggunas`
  MODIFY `idpengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `sewalokers`
--
ALTER TABLE `sewalokers`
  MODIFY `idsewa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
