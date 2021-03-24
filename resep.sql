-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Mar 2021 pada 04.54
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resep`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `username` varchar(30) NOT NULL,
  `password` varchar(15) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`username`, `password`, `nama`, `level`) VALUES
('akha01', 'akha', 'Kurnia Bintang Sakha Perdana', 'admin'),
('hans14', 'kick', 'Hans Faris', 'user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu`
--

CREATE TABLE `menu` (
  `id` int(10) NOT NULL,
  `nama_makanan` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `menu`
--

INSERT INTO `menu` (`id`, `nama_makanan`, `deskripsi`, `gambar`) VALUES
(1, 'Sate', '<p>Sate Madura</p>\r\n\r\n<p>Berasal dari Pulau&nbsp;<a href=\"https://id.wikipedia.org/wiki/Madura\">Madura</a>, sebelah utara Pulau Jawa, sate jenis ini adalah yang paling populer di Indonesia. Bahan dagingnya adalah daging ayam atau kambing, dengan bumbu kecap manis dan gula jawa, dicampur bawang putih, bawang goreng, kacang tanah goreng yang sudah dihaluskan, petis, kemiri, dan garam. Sate ayam biasanya dihidangkan dengan bumbu kacang, sementara sate kambing dihidangkan dengan kecap manis ditambah irisan bawang merah.&nbsp;<em>Sate Madura</em>&nbsp;menggunakan irisan daging yang lebih kecil. Dimakan dengan nasi putih, lontong, atau ketupat. Terkadang ditambahi acar irisan bawang, mentimun, dan cabai rawit. Biasanya penjual sate madura berasal dari&nbsp;<a href=\"https://id.wikipedia.org/wiki/Suku_Madura\">suku Madura</a>.</p>\r\n', '811-84-food3.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
