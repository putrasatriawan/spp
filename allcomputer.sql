-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Des 2020 pada 16.35
-- Versi server: 10.4.16-MariaDB
-- Versi PHP: 7.4.allcomputerallcomputerallcomputercovid19baknusbuysdata_siswa

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `allcomputer`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_brg` int(11) primary,
  `nama_brg` varchar(120) NOT NULL,
  `keterangan` varchar(225) NOT NULL,
  `kategori` varchar(60) NOT NULL,
  `harga` int(11) NOT NULL,
  `diskon` int(11) NOT NULL,
  `stok` int(4) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_barang`
--

INSERT INTO `tb_barang` (`id_brg`, `nama_brg`, `keterangan`, `kategori`, `harga`, `diskon`, `stok`, `gambar`) VALUES
(1, 'MSI', 'MSI GH-CI90', 'Laptop', 8500000, 9000000, 7, 'LAPTOP.jpg'),
(2, 'KOMPUTER', 'MOBO ASUS E325 (FULL AKSESORIS)', 'KOMPUTER', 4500000, 5000000, -4, 'KOMPUTER.jpg'),
(3, 'RAM ', 'KINGSTONE', 'SparePart Komputer ', 350000, 400000, 7, 'RAM.jpg'),
(4, 'VGA ', 'RTX 2080 TI', 'SparePart Komputer ', 25500000, 27687364, 10, 'VGA.jpg'),
(6, 'Keyboard Acer', 'Kayboard Acer E324F', 'SparePart Laptop', 240000, 340000, 19, 'keyboard.jpg'),
(50, 'ROG', 'ROG G55PGO', 'laptop', 34000000, 45000000, 18, 'rog.jpg'),
(69, 'ROG', 'ROG G55PGO', 'sparepart laptop', 34000000, 45000000, 10, 'WhatsApp_Image_2020-12-22_at_14_41_22.jpeg'),
(72, 'ROG', 'ROG G55PGO', 'komputer', 34000000, 45000000, 10, 'WhatsApp_Image_2020-12-22_at_14_41_223.jpeg'),
(73, 'ORG', 'cscdsv', 'komputer', 2423532, 34353, 231, ''),
(74, '', '', 'komputer', 0, 0, 0, ''),
(75, '', '', 'komputer', 0, 0, 0, ''),
(76, 'ROG', 'ROG G55PGO', 'komputer', 34000000, 45000000, 10, ''),
(77, '', '', 'komputer', 0, 0, 0, ''),
(78, '', '', 'komputer', 0, 0, 0, ''),
(79, '', '', 'komputer', 0, 0, 0, ''),
(80, '', '', 'komputer', 0, 0, 0, ''),
(81, '', '', 'komputer', 0, 0, 0, ''),
(82, '', '', 'komputer', 0, 0, 0, ''),
(83, '', '', 'komputer', 0, 0, 0, ''),
(84, '', '', 'komputer', 0, 0, 0, ''),
(85, '', '', 'komputer', 0, 0, 0, ''),
(86, '', '', 'komputer', 0, 0, 0, ''),
(87, '', '', 'komputer', 0, 0, 0, ''),
(88, '', '', 'komputer', 0, 0, 0, ''),
(89, '', '', 'komputer', 0, 0, 0, ''),
(90, '', '', 'komputer', 0, 0, 0, ''),
(91, '', '', 'komputer', 0, 0, 0, ''),
(92, '', '', 'komputer', 0, 0, 0, ''),
(93, '', '', 'komputer', 0, 0, 0, ''),
(94, '', '', 'komputer', 0, 0, 0, ''),
(95, '', '', 'komputer', 0, 0, 0, ''),
(96, '', '', 'komputer', 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_invoice`
--

CREATE TABLE `tb_invoice` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `tgl_pesan` datetime NOT NULL,
  `batas_bayar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_invoice`
--

INSERT INTO `tb_invoice` (`id`, `nama`, `alamat`, `tgl_pesan`, `batas_bayar`) VALUES
(45, 'lorem', 'dsjvndkjsbv', '2020-12-22 12:36:48', '2020-12-23 12:36:48'),
(46, 'Fiqrian Faturachman', 'Kab.bandung Rancaekek Abdi Negara 1 Blok O1 Rt.06 Rw.13', '2020-12-22 13:08:33', '2020-12-23 13:08:33'),
(47, 'fiqrian', 'dsjvndkjsbv', '2020-12-25 15:22:57', '2020-12-26 15:22:57'),
(48, 'fiqrian', 'dsjvndkjsbv', '2020-12-25 15:26:54', '2020-12-26 15:26:54'),
(49, 'fiqrian', 'dsjvndkjsbv', '2020-12-25 15:27:42', '2020-12-26 15:27:42'),
(50, 'Fiqrian', 'Rancaekek', '2020-12-26 10:47:07', '2020-12-27 10:47:07'),
(51, 'Fiqrian', 'Rancaekek', '2020-12-26 10:47:54', '2020-12-27 10:47:54'),
(52, 'fiqrian', 'rancaekek', '2020-12-27 19:29:37', '2020-12-28 19:29:37'),
(53, 'fiqrian', 'rancaekek', '2020-12-27 19:38:34', '2020-12-28 19:38:34'),
(54, 'fiqrian', 'rancaekek', '2020-12-27 19:38:37', '2020-12-28 19:38:37'),
(55, 'fiqrian', 'rancaekek', '2020-12-27 19:39:21', '2020-12-28 19:39:21'),
(56, 'fiqrian', 'sdas', '2020-12-27 19:41:19', '2020-12-28 19:41:19'),
(57, 'fiqrian', 'sdas', '2020-12-27 19:44:17', '2020-12-28 19:44:17'),
(58, 'fiqrian', 'sdas', '2020-12-27 19:58:56', '2020-12-28 19:58:56'),
(59, 'XXXXX', 'bandung ', '2020-12-27 19:59:23', '2020-12-28 19:59:23'),
(60, 'lorem', 'dsjvndkjsbv', '2020-12-27 20:09:18', '2020-12-28 20:09:18'),
(61, 'lorem', 'dsjvndkjsbv', '2020-12-27 20:10:14', '2020-12-28 20:10:14'),
(62, 'lorem', 'dsjvndkjsbv', '2020-12-27 20:10:16', '2020-12-28 20:10:16'),
(63, 'lorem', 'dsjvndkjsbv', '2020-12-27 20:12:23', '2020-12-28 20:12:23'),
(64, 'fiqrian', 'dsjvndkjsbv', '2020-12-27 20:35:56', '2020-12-28 20:35:56'),
(65, 'lorem', 'dsjvndkjsbv', '2020-12-27 20:36:39', '2020-12-28 20:36:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `id` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(100) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `harga` int(10) NOT NULL,
  `pilihan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`id`, `id_invoice`, `id_brg`, `nama_brg`, `jumlah`, `harga`, `pilihan`) VALUES
(1, 1, 1, 'MSI', 1, 8500000, ''),
(2, 1, 2, 'KOMPUTER', 1, 4500000, ''),
(3, 1, 3, 'RAM ', 1, 350000, ''),
(4, 2, 1, 'MSI', 1, 8500000, ''),
(5, 2, 2, 'KOMPUTER', 1, 4500000, ''),
(6, 2, 3, 'RAM ', 1, 350000, ''),
(7, 3, 1, 'MSI', 6, 8500000, ''),
(8, 3, 3, 'RAM ', 1, 350000, ''),
(9, 4, 1, 'MSI', 2, 8500000, ''),
(10, 5, 3, 'RAM ', 1, 350000, ''),
(11, 6, 3, 'RAM ', 1, 350000, ''),
(12, 6, 2, 'KOMPUTER', 1, 4500000, ''),
(13, 7, 2, 'KOMPUTER', 1, 4500000, ''),
(14, 8, 2, 'KOMPUTER', 1, 4500000, ''),
(15, 9, 1, 'MSI', 1, 8500000, ''),
(16, 10, 1, 'MSI', 1, 8500000, ''),
(17, 11, 2, 'KOMPUTER', 1, 4500000, ''),
(18, 12, 1, 'MSI', 1, 8500000, ''),
(19, 13, 1, 'MSI', 1, 8500000, ''),
(20, 14, 1, 'MSI', 1, 8500000, ''),
(21, 15, 6, 'Keyboard Acer', 1, 240000, ''),
(22, 16, 1, 'MSI', 1, 8500000, ''),
(23, 17, 1, 'MSI', 1, 8500000, ''),
(24, 19, 1, 'MSI', 1, 8500000, ''),
(25, 29, 1, 'MSI', 1, 8500000, ''),
(26, 39, 2, 'KOMPUTER', 1, 4500000, ''),
(27, 42, 2, 'KOMPUTER', 1, 4500000, ''),
(28, 43, 2, 'KOMPUTER', 1, 4500000, ''),
(29, 43, 3, 'RAM ', 1, 350000, ''),
(30, 44, 2, 'KOMPUTER', 1, 4500000, ''),
(31, 45, 1, 'MSI', 1, 8500000, ''),
(32, 46, 50, 'ROG', 2, 34000000, ''),
(33, 47, 2, 'KOMPUTER', 1, 4500000, ''),
(34, 50, 2, 'KOMPUTER', 1, 4500000, ''),
(35, 52, 2, 'KOMPUTER', 1, 4500000, ''),
(36, 56, 1, 'MSI', 1, 8500000, ''),
(37, 59, 2, 'KOMPUTER', 1, 4500000, ''),
(38, 60, 1, 'MSI', 1, 8500000, ''),
(39, 64, 2, 'KOMPUTER', 1, 4500000, ''),
(40, 65, 2, 'KOMPUTER', 1, 4500000, '');

--
-- Trigger `tb_pesanan`
--
DELIMITER $$
CREATE TRIGGER `pesanan_penjualan` AFTER INSERT ON `tb_pesanan` FOR EACH ROW BEGIN
UPDATE tb_barang SET stok = stok-NEW.jumlah
WHERE id_brg = NEW.id_brg;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_servis`
--

CREATE TABLE `tb_servis` (
  `jenis_elektronik` varchar(100) NOT NULL,
  `riwayat_rusak` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role_id` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `username`, `password`, `role_id`) VALUES
(1, 'admin', 'admin', 'admin', 1),
(2, 'fiqrian', 'fiqri', 'fiqri', 2),
(3, 'LORD', 'lord', 'lord', 2),
(4, 'fiqrian', 'fiqrian', 'fiqrian', 2),
(5, 'putra', 'putra', 'putra', 2),
(6, 'akun', 'akun', 'akun', 2),
(7, 'nama', 'nama', 'nama', 2),
(8, 'fiqrian', 'fiqrian', 'fiqrian', 2),
(9, 'fiqrian', 'fiqrian', 'asu', 2),
(10, 'fiqrian', 'ggg', 'ggg', 2),
(11, 'lorem', 'lorem', 'lorem', 2),
(12, 'daftar', 'daftar', 'daftar', 2),
(13, 'anda', 'anda', 'anda', 2),
(14, 'fiqrian', 'admin', 'admin', 2),
(15, 'xxx', 'xxx', 'xxx', 2),
(16, 'XXXXX', 'xxx', 'xxx', 2),
(17, 'sudah', 'sudah', 'sudah', 2),
(18, 'XXXXX', 'XXXXX', 'XXXX', 2),
(19, 'fiqrian', 'fiqrian', 'fiqrian', 2),
(20, 'fiqrian', 'fiqrian', 'fiqrian', 2),
(21, 'fiqrian', 'fiqrian', 'fiqrian', 2),
(22, 'fiqrian', 'fiqrian', 'fiqrian', 2),
(23, 'fiqrian', 'fiqrian', 'fiqrian', 2),
(24, 'fiqrian', 'fiqrian', 'fiqrian', 2),
(25, 'fiqrian', 'fiqrian', 'fiqrian', 2),
(26, 'fiqrian', 'fiqrian', 'fiqrian', 2),
(27, 'fiqrian', 'fiqrian', 'fiqrian', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_brg`);

--
-- Indeks untuk tabel `tb_invoice`
--
ALTER TABLE `tb_invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_brg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT untuk tabel `tb_invoice`
--
ALTER TABLE `tb_invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT untuk tabel `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
