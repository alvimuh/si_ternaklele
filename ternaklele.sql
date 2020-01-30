-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Jan 2020 pada 05.05
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ternaklele`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bibit`
--

CREATE TABLE `bibit` (
  `kode_bibit` varchar(5) NOT NULL,
  `tgl_penebaran_bibit` date NOT NULL,
  `jenis_bibit` varchar(30) NOT NULL,
  `jumlah_bibit` int(5) NOT NULL,
  `no_kolam` int(2) NOT NULL,
  `status_panen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bibit`
--

INSERT INTO `bibit` (`kode_bibit`, `tgl_penebaran_bibit`, `jenis_bibit`, `jumlah_bibit`, `no_kolam`, `status_panen`) VALUES
('B0003', '2020-01-26', 'Lele Jumbo', 100, 3, 0),
('B0011', '2020-01-01', 'Lele Jumbo', 90, 11, 1),
('B0012', '2020-01-30', 'Lele Jawa', 90, 12, 0),
('B0101', '2020-01-19', 'Lele Sangkuriang', 80, 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `tanggal_jadwal` date NOT NULL,
  `tipe_jadwal` enum('Pemberian Pakan','Pemberian Nutrisi','Pembersihan Kolam') NOT NULL,
  `status` enum('Sudah','Belum') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `tanggal_jadwal`, `tipe_jadwal`, `status`) VALUES
(1, '2020-01-19', 'Pemberian Pakan', 'Belum'),
(2, '2020-01-20', 'Pemberian Pakan', 'Belum'),
(3, '2020-01-21', 'Pemberian Pakan', 'Belum'),
(4, '2020-01-22', 'Pemberian Pakan', 'Belum'),
(5, '2020-01-23', 'Pemberian Pakan', 'Belum'),
(6, '2020-01-24', 'Pemberian Pakan', 'Belum'),
(7, '2020-01-26', 'Pembersihan Kolam', 'Sudah'),
(8, '2020-01-26', 'Pemberian Nutrisi', 'Belum'),
(9, '2020-01-29', 'Pemberian Nutrisi', 'Belum');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nutrisi`
--

CREATE TABLE `nutrisi` (
  `kode_nutrisi` varchar(5) NOT NULL,
  `jenis_nutrisi` varchar(10) NOT NULL,
  `nama_nutrisi` varchar(25) NOT NULL,
  `jumlah_nutrisi` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nutrisi`
--

INSERT INTO `nutrisi` (`kode_nutrisi`, `jenis_nutrisi`, `nama_nutrisi`, `jumlah_nutrisi`) VALUES
('N01', 'Bibit', 'Amin Liquid', 3000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pakan`
--

CREATE TABLE `pakan` (
  `kode_pakan` varchar(5) NOT NULL,
  `jenis_pakan` varchar(10) NOT NULL,
  `nama_pakan` varchar(25) NOT NULL,
  `jumlah_pakan` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pakan`
--

INSERT INTO `pakan` (`kode_pakan`, `jenis_pakan`, `nama_pakan`, `jumlah_pakan`) VALUES
('B04', 'Dewasa', 'PF 128', 100000),
('P01', 'Bibit', 'Cacing Sutra', 500000),
('P02', 'Bibit', 'UB Hight Grit', 100000),
('PF 12', 'Dewasa', 'Karagil Halus', 900000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `panen`
--

CREATE TABLE `panen` (
  `kode_panen` int(5) NOT NULL,
  `kode_bibit` varchar(10) NOT NULL,
  `tgl_panen` date NOT NULL,
  `bobot_ikan` int(5) NOT NULL,
  `jml_panen` int(11) NOT NULL,
  `jml_mati` int(11) NOT NULL,
  `jml_kerdil` int(11) NOT NULL,
  `jml_berjamur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `panen`
--

INSERT INTO `panen` (`kode_panen`, `kode_bibit`, `tgl_panen`, `bobot_ikan`, `jml_panen`, `jml_mati`, `jml_kerdil`, `jml_berjamur`) VALUES
(1, 'B0011', '2020-01-30', 300, 90, 5, 12, 5),
(2, 'B0101', '2020-01-25', 3000000, 75, 1, 3, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemberian_nutrisi`
--

CREATE TABLE `pemberian_nutrisi` (
  `kode_pemberian_nutrisi` int(11) NOT NULL,
  `kode_bibit` varchar(5) NOT NULL,
  `tanggal_jam_pemberian` datetime NOT NULL,
  `kode_nutrisi` varchar(10) NOT NULL,
  `qty_nutrisi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemberian_pakan`
--

CREATE TABLE `pemberian_pakan` (
  `kode_pemberian_pakan` int(11) NOT NULL,
  `kode_bibit` varchar(5) NOT NULL,
  `waktu_pemberian` varchar(10) NOT NULL,
  `tanggal_jam_pemberian` datetime NOT NULL,
  `kode_pakan` varchar(10) NOT NULL,
  `qty_pakan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`username`, `password`, `role`) VALUES
('admin', 'admin', 'admin'),
('user', 'user', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bibit`
--
ALTER TABLE `bibit`
  ADD PRIMARY KEY (`kode_bibit`);

--
-- Indeks untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indeks untuk tabel `nutrisi`
--
ALTER TABLE `nutrisi`
  ADD PRIMARY KEY (`kode_nutrisi`);

--
-- Indeks untuk tabel `pakan`
--
ALTER TABLE `pakan`
  ADD PRIMARY KEY (`kode_pakan`);

--
-- Indeks untuk tabel `panen`
--
ALTER TABLE `panen`
  ADD PRIMARY KEY (`kode_panen`);

--
-- Indeks untuk tabel `pemberian_nutrisi`
--
ALTER TABLE `pemberian_nutrisi`
  ADD PRIMARY KEY (`kode_pemberian_nutrisi`);

--
-- Indeks untuk tabel `pemberian_pakan`
--
ALTER TABLE `pemberian_pakan`
  ADD PRIMARY KEY (`kode_pemberian_pakan`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `panen`
--
ALTER TABLE `panen`
  MODIFY `kode_panen` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pemberian_nutrisi`
--
ALTER TABLE `pemberian_nutrisi`
  MODIFY `kode_pemberian_nutrisi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pemberian_pakan`
--
ALTER TABLE `pemberian_pakan`
  MODIFY `kode_pemberian_pakan` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
