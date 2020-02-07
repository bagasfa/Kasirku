-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Feb 2020 pada 12.09
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kasirku`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `harga_jual` varchar(100) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `id_kategori`, `stok`, `harga_jual`, `date_added`) VALUES
(14, 'Kopi Espresso', 24, 92, '13000', '2019-05-08 15:33:58'),
(15, 'Kopi Luwak Original', 24, 15, '100000', '2019-05-08 14:46:12'),
(16, 'Kopi Asri', 24, 93, '10000', '2019-05-08 14:47:19'),
(17, 'Kopi Arabica', 24, 40, '14000', '2019-05-07 11:49:29'),
(18, 'Kopi Torabika Cappucino', 24, 195, '5000', '2019-05-08 14:45:11'),
(19, 'Kopi Robusta', 24, 48, '13000', '2019-05-08 14:44:15'),
(20, 'Americano Coffe', 24, 29, '15000', '2019-05-08 14:44:50'),
(21, 'Kopi Liberika', 24, 39, '10000', '2019-05-08 04:28:09'),
(22, 'Kopi Ekselsa', 24, 50, '12000', '2019-05-07 11:53:05'),
(23, 'Taro Milk', 24, 93, '10000', '2019-05-08 14:46:19'),
(24, 'Green Tea', 24, 95, '10000', '2019-05-08 14:47:32'),
(25, 'Strawberry Milk', 24, 93, '10000', '2019-05-08 14:47:26'),
(26, 'Mie Sedap All Variant', 14, 199, '6000', '2019-05-08 14:41:12'),
(27, 'Indomie All Standart Variant', 14, 195, '7000', '2019-05-08 14:47:04'),
(28, 'Spicy Wings Ala Carte (4Pcs)', 14, 14, '15000', '2019-05-08 14:42:39'),
(29, 'Spicy Wings + Rice', 14, 11, '13000', '2019-05-08 14:42:03'),
(30, 'Nasi Goreng Standart Edition', 14, 20, '10000', '2019-05-08 14:27:59'),
(31, 'Nasi Goreng Epic Edition', 14, 19, '13000', '2019-05-08 14:48:38'),
(32, 'Nasi Goreng Legendary Edition', 14, 9, '20000', '2019-05-08 14:48:45'),
(33, 'Dadar Gulung Thanos Color', 17, 18, '5000', '2019-05-08 14:48:52'),
(34, 'Mochi Local Pride', 17, 18, '5000', '2019-05-08 14:46:05'),
(35, 'Pudding Anti Missqueen', 17, 20, '4000', '2019-05-08 14:31:53'),
(36, 'Bubur Ketan Black', 17, 20, '7000', '2019-05-08 14:32:34'),
(37, 'Kacang HypeAbis', 16, 47, '2000', '2019-05-08 14:47:49'),
(38, 'Tella Crispy', 16, 20, '3000', '2019-05-08 14:33:34'),
(39, 'Keripik Bubur Tapi Boong', 16, 19, '4000', '2019-05-08 14:47:55'),
(40, 'Keripik Hulk', 16, 19, '3000', '2019-05-08 14:48:32'),
(41, 'Infinity Crackers', 16, 19, '4000', '2019-05-08 14:48:01'),
(42, 'Kopi Tubruk', 24, 98, '12000', '2019-05-08 14:48:24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8_unicode_ci NOT NULL,
  `queue` text COLLATE utf8_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kasir`
--

CREATE TABLE `kasir` (
  `id_kasir` int(11) NOT NULL,
  `nama_kasir` varchar(100) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `foto` varchar(200) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kasir`
--

INSERT INTO `kasir` (`id_kasir`, `nama_kasir`, `jenis_kelamin`, `foto`, `date_added`) VALUES
(1, 'Nopal Fakhrian', 'L', 'nopal.jpg', '2020-02-06 15:18:43'),
(4, 'Boi', 'P', 'php8ACD.tmp.png', '2020-02-06 17:11:00'),
(5, 'Billy', 'L', 'php2BA4.tmp.png', '2020-02-07 07:41:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(14, 'Makanan'),
(16, 'Snack'),
(17, 'Dessert'),
(24, 'Minuman'),
(28, 'Beer');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sub_transaksi`
--

CREATE TABLE `sub_transaksi` (
  `id_subtransaksi` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `jumlah_beli` int(11) NOT NULL,
  `total_harga` varchar(20) NOT NULL,
  `no_invoice` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sub_transaksi`
--

INSERT INTO `sub_transaksi` (`id_subtransaksi`, `id_barang`, `id_transaksi`, `jumlah_beli`, `total_harga`, `no_invoice`) VALUES
(23, 15, 17, 1, '100000', '07/AF/2/19/03/20/21'),
(24, 16, 17, 2, '20000', '07/AF/2/19/03/20/21'),
(25, 21, 18, 1, '10000', '08/AF/2/19/06/28/25'),
(26, 15, 18, 2, '200000', '08/AF/2/19/06/28/25'),
(27, 15, 19, 1, '100000', '08/AF/3/19/06/51/56'),
(28, 14, 19, 3, '39000', '08/AF/3/19/06/51/56'),
(29, 16, 20, 1, '10000', '08/AF/4/19/04/18/18'),
(30, 24, 20, 2, '20000', '08/AF/4/19/04/18/18'),
(31, 14, 20, 1, '13000', '08/AF/4/19/04/18/18'),
(32, 16, 21, 2, '20000', '08/AF/4/19/04/23/06'),
(33, 18, 21, 3, '15000', '08/AF/4/19/04/23/06'),
(34, 23, 21, 2, '20000', '08/AF/4/19/04/23/06'),
(35, 26, 22, 1, '6000', '08/AF/6/19/04/41/42'),
(36, 24, 22, 2, '20000', '08/AF/6/19/04/41/42'),
(38, 25, 23, 4, '40000', '08/AF/6/19/04/42/17'),
(39, 29, 23, 4, '52000', '08/AF/6/19/04/42/17'),
(40, 28, 24, 1, '15000', '08/AF/6/19/04/43/00'),
(42, 14, 25, 1, '13000', '08/AF/6/19/04/43/27'),
(43, 14, 26, 1, '13000', '08/AF/5/19/04/44/59'),
(44, 16, 26, 1, '10000', '08/AF/5/19/04/44/59'),
(45, 19, 26, 2, '26000', '08/AF/5/19/04/44/59'),
(46, 23, 26, 1, '10000', '08/AF/5/19/04/44/59'),
(47, 25, 26, 2, '20000', '08/AF/5/19/04/44/59'),
(48, 20, 26, 1, '15000', '08/AF/5/19/04/44/59'),
(49, 18, 27, 2, '10000', '08/AF/5/19/04/45/55'),
(50, 23, 27, 3, '30000', '08/AF/5/19/04/45/55'),
(51, 34, 28, 2, '10000', '08/AF/5/19/04/46/30'),
(52, 15, 28, 1, '100000', '08/AF/5/19/04/46/30'),
(53, 23, 28, 1, '10000', '08/AF/5/19/04/46/30'),
(54, 27, 29, 5, '35000', '08/AF/7/19/04/48/12'),
(55, 14, 29, 2, '26000', '08/AF/7/19/04/48/12'),
(56, 16, 29, 1, '10000', '08/AF/7/19/04/48/12'),
(57, 25, 29, 1, '10000', '08/AF/7/19/04/48/12'),
(58, 24, 29, 1, '10000', '08/AF/7/19/04/48/12'),
(59, 37, 29, 3, '6000', '08/AF/7/19/04/48/12'),
(60, 39, 29, 1, '4000', '08/AF/7/19/04/48/12'),
(61, 41, 29, 1, '4000', '08/AF/7/19/04/48/12'),
(62, 42, 30, 2, '24000', '08/AF/7/19/04/49/10'),
(63, 40, 30, 1, '3000', '08/AF/7/19/04/49/10'),
(64, 31, 30, 1, '13000', '08/AF/7/19/04/49/10'),
(65, 32, 30, 1, '20000', '08/AF/7/19/04/49/10'),
(66, 33, 30, 2, '10000', '08/AF/7/19/04/49/10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tempo`
--

CREATE TABLE `tempo` (
  `id_subtransaksi` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `jumlah_beli` int(11) NOT NULL,
  `total_harga` varchar(20) NOT NULL,
  `trx` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `tgl_transaksi` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `kode_kasir` int(11) NOT NULL,
  `total_bayar` varchar(20) NOT NULL,
  `no_invoice` varchar(20) NOT NULL,
  `nama_pembeli` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `tgl_transaksi`, `kode_kasir`, `total_bayar`, `no_invoice`, `nama_pembeli`) VALUES
(17, '2019-05-07 13:20:21', 2, '120000', '07/AF/2/19/03/20/21', 'Terresa Garden'),
(18, '2019-05-08 04:28:25', 2, '210000', '08/AF/2/19/06/28/25', 'Bilkuy'),
(19, '2019-05-08 04:51:56', 3, '139000', '08/AF/3/19/06/51/56', 'anton'),
(20, '2019-05-08 14:18:18', 4, '43000', '08/AF/4/19/04/18/18', 'Ratna Johanson'),
(21, '2019-05-08 14:23:06', 4, '55000', '08/AF/4/19/04/23/06', 'Rehan Suhendro'),
(22, '2019-05-08 14:41:42', 6, '71000', '08/AF/6/19/04/41/42', 'Irwan Saputra'),
(23, '2019-05-08 14:42:17', 6, '92000', '08/AF/6/19/04/42/17', 'Sherly Stevani'),
(24, '2019-05-08 14:43:00', 6, '60000', '08/AF/6/19/04/43/00', 'Nabila Chavia'),
(25, '2019-05-08 14:43:27', 6, '13000', '08/AF/6/19/04/43/27', 'Firyal Riyanti Bolly'),
(26, '2019-05-08 14:44:59', 5, '94000', '08/AF/5/19/04/44/59', 'BEM Vokasi'),
(27, '2019-05-08 14:45:55', 5, '40000', '08/AF/5/19/04/45/55', 'Bo Sandy'),
(28, '2019-05-08 14:46:30', 5, '120000', '08/AF/5/19/04/46/30', 'Mas Paijo'),
(29, '2019-05-08 14:48:12', 7, '105000', '08/AF/7/19/04/48/12', 'Kiki Anastasya'),
(30, '2019-05-08 14:49:10', 7, '70000', '08/AF/7/19/04/49/10', 'Dita Cans');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `status` int(11) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `status`, `date_created`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 1, '2017-12-12 00:44:45'),
(2, 'bagasfa', '9c73845b642142ff85d9a41a67785fc7b5bf9ab5', 2, '2017-12-17 09:52:27'),
(3, 'dani', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 2, '2017-12-21 10:07:51'),
(4, 'helmi', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 2, '2018-01-13 15:53:48'),
(5, 'sinopal', 'a518a9c59292a534b34fee1dc70b12ff908adbc9', 2, '2019-05-08 14:39:04'),
(6, 'msvbolly', '9444b1b8a7b993209d2b5c77f826876abf05e9c1', 2, '2019-05-08 14:39:41'),
(7, 'baharsky', 'd685749be867261597cc2a69af830e44768c1946', 2, '2019-05-08 14:40:33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kasir`
--
ALTER TABLE `kasir`
  ADD PRIMARY KEY (`id_kasir`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `sub_transaksi`
--
ALTER TABLE `sub_transaksi`
  ADD PRIMARY KEY (`id_subtransaksi`),
  ADD KEY `id_barang` (`id_barang`),
  ADD KEY `id_transaksi` (`id_transaksi`);

--
-- Indeks untuk tabel `tempo`
--
ALTER TABLE `tempo`
  ADD PRIMARY KEY (`id_subtransaksi`),
  ADD KEY `id_barang` (`id_barang`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `kode_kasir` (`kode_kasir`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kasir`
--
ALTER TABLE `kasir`
  MODIFY `id_kasir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `sub_transaksi`
--
ALTER TABLE `sub_transaksi`
  MODIFY `id_subtransaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT untuk tabel `tempo`
--
ALTER TABLE `tempo`
  MODIFY `id_subtransaksi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `sub_transaksi`
--
ALTER TABLE `sub_transaksi`
  ADD CONSTRAINT `sub_transaksi_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sub_transaksi_ibfk_2` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi` (`id_transaksi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tempo`
--
ALTER TABLE `tempo`
  ADD CONSTRAINT `tempo_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`kode_kasir`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
