-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Mar 2021 pada 06.41
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_laundryci`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_detail_transaksi`
--

CREATE TABLE `tb_detail_transaksi` (
  `id_detail` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `id_paket` int(11) NOT NULL,
  `qty` double NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_member`
--

CREATE TABLE `tb_member` (
  `id_member` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `tlp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_member`
--

INSERT INTO `tb_member` (`id_member`, `nama`, `alamat`, `jenis_kelamin`, `tlp`) VALUES
(1, 'panjul', 'Depok', 'L', '088224920697'),
(4, 'purnomo', 'Depok - Indonesia', 'L', '12345689'),
(5, 'adhi', 'Depok - Indonesia', 'L', '2323232323'),
(6, 'siti', 'Jakarta - Indonesia', 'P', '909090909');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_outlet`
--

CREATE TABLE `tb_outlet` (
  `id_outlet` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `tlp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_outlet`
--

INSERT INTO `tb_outlet` (`id_outlet`, `nama`, `alamat`, `tlp`) VALUES
(6, 'Starbhak Laundry', 'Jakarta', '123456789'),
(7, 'Laundry Clean', 'Bandung', '123456789876'),
(8, 'laundry bersih', 'Depok', '12345689');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_paket`
--

CREATE TABLE `tb_paket` (
  `id_paket` int(11) NOT NULL,
  `id_outlet` int(11) NOT NULL,
  `jenis` enum('kiloan','selimut','bed_cover','kaos','lain') NOT NULL,
  `nama_paket` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `diskon` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_paket`
--

INSERT INTO `tb_paket` (`id_paket`, `id_outlet`, `jenis`, `nama_paket`, `harga`, `diskon`) VALUES
(1, 6, 'kiloan', 'pakaian', 8000, 0),
(2, 6, 'kiloan', '1 kg', 7000, 5),
(3, 7, 'selimut', 'selimut', 100000, 10),
(4, 8, 'kiloan', 'kiloan', 7500, 0),
(5, 8, '', 'jas', 150000, 10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_outlet` int(11) NOT NULL,
  `id_member` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `nama_paket` varchar(20) NOT NULL,
  `tgl_order` date NOT NULL,
  `tgl_bayar` date NOT NULL,
  `qty` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `diskon` double NOT NULL,
  `pajak` int(11) NOT NULL,
  `status` enum('baru','proses','selesai','diambil') NOT NULL,
  `total` int(10) NOT NULL,
  `uang_bayar` int(10) NOT NULL,
  `kembalian` int(10) NOT NULL,
  `status_bayar` enum('dibayar','belum_dibayar') NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`id_transaksi`, `id_outlet`, `id_member`, `keterangan`, `nama_paket`, `tgl_order`, `tgl_bayar`, `qty`, `harga`, `diskon`, `pajak`, `status`, `total`, `uang_bayar`, `kembalian`, `status_bayar`, `id_user`) VALUES
(3, 7, 1, 'panjul - depok', 'kaos', '2021-03-09', '2021-03-09', 0, 7000, 5, 0, 'baru', 7000, 10000, 3000, 'dibayar', 1),
(4, 6, 1, 'panjul - depok', '2', '2021-03-09', '2021-03-09', 1, 7000, 5, 133, 'baru', 6783, 10000, 3217, 'dibayar', 1),
(5, 6, 1, 'panjul - depok', '3', '2021-03-10', '2021-03-10', 0, 100000, 10, 1800, 'baru', 91800, 100000, 8200, 'dibayar', 1),
(10, 6, 4, 'purnomo - Jakarta', '1', '2021-03-11', '2021-03-11', 10, 8000, 0, 1600, 'baru', 81600, 82000, 400, 'dibayar', 1),
(11, 6, 4, 'purno - depok', '1', '2021-03-11', '2021-03-11', 4, 8000, 0, 640, 'proses', 32640, 35000, 2360, 'dibayar', 1),
(12, 6, 1, 'njul - padang', '1', '2021-03-11', '2021-03-11', 2, 8000, 0, 320, 'selesai', 16320, 20000, 3680, 'dibayar', 1),
(13, 8, 1, 'njul - papua', '4', '2021-03-11', '2021-03-11', 1, 7500, 0, 150, 'baru', 7650, 8000, 350, 'dibayar', 4),
(15, 6, 4, 'purnomo - depok', '1', '2021-03-16', '2021-03-16', 1, 8000, 0, 160, 'baru', 8160, 9000, 840, 'dibayar', 1),
(16, 8, 6, 'siti - jakarta', '4', '2021-03-16', '2021-03-16', 1, 7500, 0, 150, 'proses', 7650, 8000, 350, 'dibayar', 4),
(17, 6, 5, 'adhi - medan', '1', '2021-04-16', '2021-04-16', 1, 8000, 0, 160, 'baru', 8160, 10000, 1840, 'dibayar', 1),
(18, 6, 1, 'njul - bandung', '1', '2021-03-16', '2021-03-20', 1, 8000, 0, 160, 'baru', 8160, 0, -8160, 'belum_dibayar', 1),
(19, 6, 4, 'purno - Bali', '2', '2021-03-16', '2021-03-21', 1, 7000, 5, 133, 'baru', 6783, 0, -6783, 'belum_dibayar', 1),
(20, 6, 1, 'njul - padang', '1', '2021-03-16', '2021-03-16', 3, 8000, 0, 160, 'baru', 24160, 25000, 840, 'dibayar', 1),
(21, 6, 6, 'siti - palembang', '1', '2021-03-19', '2021-03-19', 1, 8000, 0, 160, 'baru', 8160, 10000, 1840, 'dibayar', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `password` varchar(100) NOT NULL,
  `id_outlet` int(10) NOT NULL,
  `status` enum('owner','admin','kasir','') NOT NULL,
  `image` varchar(100) NOT NULL,
  `status_login` varchar(10) NOT NULL,
  `last_seen` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `email`, `no_telp`, `password`, `id_outlet`, `status`, `image`, `status_login`, `last_seen`) VALUES
(1, 'julius', 'juliusryan@gmail.com', '02.png', '$2y$10$3lcjIEXILayL8tXCB3Zmf..wiaUhn6Y.UF9ITXJ/z4UrzLMvqFo0G', 6, 'admin', 'lon.png', 'Offline', '2021-03-19 05:37:50'),
(3, 'hadi', 'hadi@gmail.com', '121212121', '$2y$10$4.2lnDPUJ1.Ydvi4Q3Sfee0tQHyBZL/cKdg./LqlYWVYBa5KxMuEy', 7, 'owner', '01.png', 'Offline', '2021-03-19 05:40:57'),
(4, 'panjul', 'contoh@gmail.com', '2345678865', '1234', 8, 'kasir', 'kisspng-flag-of-the-united-kingdom-royalty-free-english-5abd17eb3475e4_0072361115223418672149.jpg', 'Offline', '2021-03-16 04:11:35'),
(5, 'endang', 'test@gmail.com', '121212211', '1234', 7, 'admin', 'download_(1).jpg', 'Offline', '2021-03-12 09:25:06'),
(6, 'aldi', 'aldi@gmail.com', '2323232321', '1234', 7, 'kasir', 'download.jpg', 'Offline', '2021-03-12 10:13:30'),
(7, 'Burhan', 'burhan@gmail.com', '121222121', '1234', 7, 'kasir', 'download_(2).jpg', 'Offline', '2021-03-12 09:25:06'),
(8, 'wildan', 'wildan@gmail.com', '12122121121', '$2y$10$fEfhzBUZFtjfjp5O8s/JsuZLaSqgM13u2sl93uVLWEB0oj9SibpFK', 6, 'owner', 'tb1.png', 'Offline', '2021-03-16 10:12:08'),
(9, 'bogel', 'test@gmail.com', '4123313132', '$2y$10$N2rCXiV2bTy.fA4FY4yS4uP0w0D17q60mkyjwlGlV8pJ40DzEwsI6', 7, 'kasir', 'source.gif', 'Offline', '2021-03-19 05:37:39');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_detail_transaksi`
--
ALTER TABLE `tb_detail_transaksi`
  ADD PRIMARY KEY (`id_detail`),
  ADD KEY `id_transaksi` (`id_transaksi`),
  ADD KEY `id_paket` (`id_paket`);

--
-- Indeks untuk tabel `tb_member`
--
ALTER TABLE `tb_member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indeks untuk tabel `tb_outlet`
--
ALTER TABLE `tb_outlet`
  ADD PRIMARY KEY (`id_outlet`);

--
-- Indeks untuk tabel `tb_paket`
--
ALTER TABLE `tb_paket`
  ADD PRIMARY KEY (`id_paket`),
  ADD KEY `id_outlet` (`id_outlet`);

--
-- Indeks untuk tabel `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_outlet` (`id_outlet`),
  ADD KEY `id_member` (`id_member`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_detail_transaksi`
--
ALTER TABLE `tb_detail_transaksi`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_member`
--
ALTER TABLE `tb_member`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_outlet`
--
ALTER TABLE `tb_outlet`
  MODIFY `id_outlet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tb_paket`
--
ALTER TABLE `tb_paket`
  MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_detail_transaksi`
--
ALTER TABLE `tb_detail_transaksi`
  ADD CONSTRAINT `tb_detail_transaksi_ibfk_1` FOREIGN KEY (`id_transaksi`) REFERENCES `tb_transaksi` (`id_transaksi`),
  ADD CONSTRAINT `tb_detail_transaksi_ibfk_2` FOREIGN KEY (`id_paket`) REFERENCES `tb_paket` (`id_paket`);

--
-- Ketidakleluasaan untuk tabel `tb_paket`
--
ALTER TABLE `tb_paket`
  ADD CONSTRAINT `tb_paket_ibfk_1` FOREIGN KEY (`id_outlet`) REFERENCES `tb_outlet` (`id_outlet`);

--
-- Ketidakleluasaan untuk tabel `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD CONSTRAINT `tb_transaksi_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `tb_transaksi_ibfk_2` FOREIGN KEY (`id_outlet`) REFERENCES `tb_outlet` (`id_outlet`),
  ADD CONSTRAINT `tb_transaksi_ibfk_3` FOREIGN KEY (`id_member`) REFERENCES `tb_member` (`id_member`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
