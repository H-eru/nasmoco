-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Jul 2019 pada 05.51
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nmc`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_adm` int(5) NOT NULL,
  `user` varchar(15) NOT NULL,
  `pass` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_adm`, `user`, `pass`) VALUES
(1, 'admin', '6980e7ae09b0abaae675f91bafbec464'),
(2, 'admin', '0192023a7bbd73250516f069df18b500'),
(3, 'admin', 'c93ccd78b2076528346216b3b2f701e6');

-- --------------------------------------------------------

--
-- Struktur dari tabel `service`
--

CREATE TABLE `service` (
  `id_customer` int(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `no_pol` varchar(10) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `tgl` date NOT NULL,
  `status` varchar(10) NOT NULL,
  `cbg` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `service`
--

INSERT INTO `service` (`id_customer`, `nama`, `no_pol`, `no_hp`, `tgl`, `status`, `cbg`) VALUES
(2, 'Dino', 'H-1234-ACD', '0215', '2019-10-10', 'Selesai', 'Gadjah Mada'),
(3, 'Deno', 'H-1234-AC', '02163', '2019-12-13', 'Booking', 'Gadjah Mada'),
(5, 'b', 'b', 'b', '2130-12-31', 'Antri', 'Ngaliyan'),
(8, 'asd', 'asd', '1221', '1009-01-01', 'Selesai', 'Majapahit'),
(10, 'didi', 'H-1222-AN', '02163', '2001-01-10', 'Servis', 'Gadjah Mada'),
(13, 'aaa', 'H-1234-AB', '123456', '2019-02-28', 'Selesai', 'Majapahit'),
(14, 'a', 'H-1235-AE', '12345567', '2018-11-14', 'Servis', 'Majapahit'),
(15, 'b', 'H-1235-AW', '123455678', '2018-11-14', 'Antri', 'Majapahit'),
(16, 'c', 'H-1235-AC', '123455679', '2018-04-11', 'Servis', 'Majapahit'),
(17, 'd', 'H-1235-AF', '123455676', '2018-11-14', 'Servis', 'Majapahit'),
(18, 'e', 'H-1235-AH', '12345567', '2018-12-14', 'Servis', 'Majapahit'),
(19, 'f', 'H-1235-AI', '12345567', '2017-12-11', 'Servis', 'Majapahit'),
(20, 'g', 'H-1235-AL', '12345567', '2018-12-12', 'Antri', 'Majapahit'),
(21, 'agus', 'h-4545-a', '08888821', '2019-06-18', 'Antri', 'Pemuda'),
(22, 'agas', 'h-4689-b', '098532145', '2019-06-17', 'Servis', 'Siliwangi'),
(23, 'hasa', 'h-1000-c', '098654284', '2019-06-18', 'Antri', 'Gombel'),
(24, 'jas', 'h-2984-g', '09742847651', '2019-06-19', 'Servis', 'Kaligawe');

-- --------------------------------------------------------

--
-- Struktur dari tabel `staff`
--

CREATE TABLE `staff` (
  `id_staff` int(5) NOT NULL,
  `nama_staff` varchar(30) NOT NULL,
  `user_staff` varchar(15) NOT NULL,
  `pw_staff` varchar(225) NOT NULL,
  `cabang` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `staff`
--

INSERT INTO `staff` (`id_staff`, `nama_staff`, `user_staff`, `pw_staff`, `cabang`) VALUES
(76, 'nasmoco1', 'mjp', '91566bf33986d88ec33b79b7797e58e2', 'Majapahit'),
(79, 'nasmoco siliwangi', 'swg', '193721fa695368aa13c19bf919f25314', 'Siliwangi'),
(80, 'nasmoco pemuda', 'pmd', 'c13b001e849f3cdb4197476d89c2b47f', 'Pemuda'),
(81, 'nasmoco kaligawe', 'kw', '048685d96262085442a1d5bb4a14bc3b', 'Kaligawe'),
(82, 'nasmoco gombel', 'gb', '7885444af42e4b30c518c5be17c8850b', 'Gombel');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_adm`);

--
-- Indeks untuk tabel `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indeks untuk tabel `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id_staff`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_adm` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `service`
--
ALTER TABLE `service`
  MODIFY `id_customer` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `staff`
--
ALTER TABLE `staff`
  MODIFY `id_staff` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
