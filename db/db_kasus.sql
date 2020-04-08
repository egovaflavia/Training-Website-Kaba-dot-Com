-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Jul 2019 pada 06.01
-- Versi server: 10.3.16-MariaDB
-- Versi PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kasus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(30) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `level` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `nama_admin`, `username`, `password`, `level`) VALUES
(1, 'Admin', 'Admin', 'Admin', 'Admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_berita`
--

CREATE TABLE `tbl_berita` (
  `id_berita` int(11) NOT NULL,
  `id_kategori` int(11) DEFAULT NULL,
  `id_penulis` int(11) DEFAULT NULL,
  `judul_berita` varchar(50) DEFAULT NULL,
  `foto_berita` text DEFAULT NULL,
  `isi_berita` text DEFAULT NULL,
  `tgl` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_berita`
--

INSERT INTO `tbl_berita` (`id_berita`, `id_kategori`, `id_penulis`, `judul_berita`, `foto_berita`, `isi_berita`, `tgl`) VALUES
(1, 2, 1, 'Penghinaan Terhadap Ulaman', 'Sampel_1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum in odio commodo, vehicula tortor eu, blandit nibh. Pellentesque laoreet mauris sed felis fringilla rutrum et id nunc. Cras non pretium turpis. Nullam', '2019-07-01'),
(2, 1, 3, 'Buka Puasa Bareng Panti Jompo', 'Sampel_2.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum in odio commodo, vehicula tortor eu, blandit nibh. Pellentesque laoreet mauris sed felis fringilla rutrum et id nunc. Cras non pretium turpis. Nullam', '2019-07-02'),
(3, 3, 1, 'Tahan Hingga 4 Jam', 'Sampel_3.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum in odio commodo, vehicula tortor eu, blandit nibh. Pellentesque laoreet mauris sed felis fringilla rutrum et id nunc. Cras non pretium turpis. Nullam', '2019-07-03'),
(4, 5, 6, 'Lowongan PNS Akhir Tahun Di Batasi', 'Sampel_4.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum in odio commodo, vehicula tortor eu, blandit nibh. Pellentesque laoreet mauris sed felis fringilla rutrum et id nunc. Cras non pretium turpis. Nullam', '2019-07-04'),
(5, 6, 8, 'Cipatakan Lapangan Kerja Dengan Cara Sendiri', 'Sampel_5.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum in odio commodo, vehicula tortor eu, blandit nibh. Pellentesque laoreet mauris sed felis fringilla rutrum et id nunc. Cras non pretium turpis. Nullam', '2019-07-05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_galeri`
--

CREATE TABLE `tbl_galeri` (
  `id_galeri` int(11) NOT NULL,
  `judul` varchar(30) DEFAULT NULL,
  `foto` text DEFAULT NULL,
  `tgl` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_galeri`
--

INSERT INTO `tbl_galeri` (`id_galeri`, `judul`, `foto`, `tgl`) VALUES
(1, 'Belajar PHP', '2.png', '2019-07-01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `id_kategori` int(11) NOT NULL,
  `judul_kategori` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`id_kategori`, `judul_kategori`) VALUES
(1, 'Teknologi'),
(2, 'Sport'),
(3, 'Kriminal'),
(5, 'Hiburan'),
(6, 'Politik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_komentar`
--

CREATE TABLE `tbl_komentar` (
  `id_komentar` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `pekerjaan` varchar(30) NOT NULL,
  `komentar` text NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_komentar`
--

INSERT INTO `tbl_komentar` (`id_komentar`, `nama`, `pekerjaan`, `komentar`, `foto`) VALUES
(1, 'Egova Riva Gustino', 'Programmer', 'Pilihan beritanya bagus dan mendidik, ga perlu lagi deh liat tv tiap hari', '3.png'),
(2, 'Adela Fitra Irona', 'Ibu Rumah Tangga', 'Berita yang di sajikan terupdate, mudah di akses dimana-mana', '1.png'),
(3, 'Rafi Api', 'Web Caliak-Caliak', 'Bagus sih tapi ada ga bagus nya jg sih', 'Wajah_2.jpg'),
(7, 'Fahri Yaldi', 'Programmer', 'Nice Job', 'Avatar_3.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_penulis`
--

CREATE TABLE `tbl_penulis` (
  `id_penulis` int(11) NOT NULL,
  `nama_penulis` varchar(30) DEFAULT NULL,
  `jenis` varchar(30) DEFAULT NULL,
  `foto` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_penulis`
--

INSERT INTO `tbl_penulis` (`id_penulis`, `nama_penulis`, `jenis`, `foto`) VALUES
(1, 'Egova', 'Paper', 'Avatar_1.jpg'),
(3, 'Adela', 'Paper', 'Avatar_6.png'),
(6, 'Gempi', 'Paper', 'Avatar_3.png'),
(8, 'Fitra', 'Paper', 'Avatar_4.png'),
(9, 'Irona', 'Paper', 'Avatar_5.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `tbl_berita`
--
ALTER TABLE `tbl_berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indeks untuk tabel `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indeks untuk tabel `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indeks untuk tabel `tbl_penulis`
--
ALTER TABLE `tbl_penulis`
  ADD PRIMARY KEY (`id_penulis`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_berita`
--
ALTER TABLE `tbl_berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tbl_penulis`
--
ALTER TABLE `tbl_penulis`
  MODIFY `id_penulis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
