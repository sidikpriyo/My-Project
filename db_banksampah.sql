-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Mar 2021 pada 12.20
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_banksampah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku_tabungan`
--

CREATE TABLE `buku_tabungan` (
  `id_tabungan` int(11) NOT NULL,
  `no_induk` bigint(20) NOT NULL,
  `nama` varchar(20) DEFAULT NULL,
  `alamat` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `buku_tabungan`
--

INSERT INTO `buku_tabungan` (`id_tabungan`, `no_induk`, `nama`, `alamat`) VALUES
(1, 1, 'sidik', 'bandongan'),
(2, 2, NULL, NULL),
(3, 0, 'Sidik', 'Bandongan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_diri`
--

CREATE TABLE `data_diri` (
  `no_induk` int(10) NOT NULL,
  `id_status` int(10) NOT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `alamat` varchar(45) DEFAULT NULL,
  `no_hp` varchar(12) DEFAULT NULL,
  `foto` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `data_diri`
--

INSERT INTO `data_diri` (`no_induk`, `id_status`, `nama`, `alamat`, `no_hp`, `foto`) VALUES
(1, 1, 'Sidik Priyo Utomo', 'Bandongan', '081392500904', ''),
(2, 2, 'Dio Laksmana Sakti', 'Bandongan', '081392500904', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nota_setor`
--

CREATE TABLE `nota_setor` (
  `id_nota` int(11) NOT NULL,
  `tanggal_nota` date DEFAULT NULL,
  `total_setor` double DEFAULT NULL,
  `no_induk` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `nota_setor`
--

INSERT INTO `nota_setor` (`id_nota`, `tanggal_nota`, `total_setor`, `no_induk`) VALUES
(1, '2020-07-13', 1500, 1),
(2, '2020-07-13', 1500, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penarikan`
--

CREATE TABLE `penarikan` (
  `id_penarikan` int(11) NOT NULL,
  `no_induk` int(11) NOT NULL,
  `tanggal_penarikan` date NOT NULL,
  `total_penarikan` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sampah`
--

CREATE TABLE `sampah` (
  `id_sampah` int(11) NOT NULL,
  `nm_sampah` varchar(45) DEFAULT NULL,
  `hrg_nasabah` bigint(20) DEFAULT NULL,
  `foto` varchar(500) NOT NULL,
  `hrg_pengurus` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `sampah`
--

INSERT INTO `sampah` (`id_sampah`, `nm_sampah`, `hrg_nasabah`, `foto`, `hrg_pengurus`) VALUES
(1, 'Kardus', NULL, '', 1000),
(2, 'Plastik', NULL, '', 500);

-- --------------------------------------------------------

--
-- Struktur dari tabel `status`
--

CREATE TABLE `status` (
  `id_status` int(2) NOT NULL,
  `nm_status` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `status`
--

INSERT INTO `status` (`id_status`, `nm_status`) VALUES
(1, 'Pengurus'),
(2, 'Nasabah'),
(3, 'super_user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` varchar(2) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(8) DEFAULT NULL,
  `id_status` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`, `id_status`) VALUES
('U1', 'admin', '12345', 3);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku_tabungan`
--
ALTER TABLE `buku_tabungan`
  ADD PRIMARY KEY (`id_tabungan`);

--
-- Indeks untuk tabel `data_diri`
--
ALTER TABLE `data_diri`
  ADD PRIMARY KEY (`no_induk`),
  ADD KEY `fk_data_diri_status_idx` (`id_status`);

--
-- Indeks untuk tabel `nota_setor`
--
ALTER TABLE `nota_setor`
  ADD PRIMARY KEY (`id_nota`),
  ADD KEY `fk_nota_setor_data_diri1_idx` (`no_induk`);

--
-- Indeks untuk tabel `penarikan`
--
ALTER TABLE `penarikan`
  ADD PRIMARY KEY (`id_penarikan`);

--
-- Indeks untuk tabel `sampah`
--
ALTER TABLE `sampah`
  ADD PRIMARY KEY (`id_sampah`);

--
-- Indeks untuk tabel `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_status`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_status` (`id_status`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `buku_tabungan`
--
ALTER TABLE `buku_tabungan`
  MODIFY `id_tabungan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `nota_setor`
--
ALTER TABLE `nota_setor`
  MODIFY `id_nota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `penarikan`
--
ALTER TABLE `penarikan`
  MODIFY `id_penarikan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `sampah`
--
ALTER TABLE `sampah`
  MODIFY `id_sampah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD CONSTRAINT `tb_user_ibfk_1` FOREIGN KEY (`id_status`) REFERENCES `status` (`id_status`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
