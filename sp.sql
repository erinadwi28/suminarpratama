-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Sep 2021 pada 05.36
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_berita`
--

CREATE TABLE `tb_berita` (
  `id_berita` int(11) NOT NULL,
  `keterangan` varchar(150) NOT NULL,
  `gambar_berita` text NOT NULL,
  `link` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_berita`
--

INSERT INTO `tb_berita` (`id_berita`, `keterangan`, `gambar_berita`, `link`) VALUES
(34, 'Bebas Visa Kunjungan untuk 169 Negara, Tidak Efektif buat Wisata', 'berita1.jpg', 'https://travel.detik.com/travel-news/d-5679586/bebas-visa-kunjungan-untuk-169-negara-tidak-efektif-buat-wisata?_ga=2.24834110.529308995.1631786552-amp'),
(35, 'Imigrasi Tolak 62 WNA Masuk RI Selama PPKM', 'berita2.jpeg', 'https://news.detik.com/berita/d-5667090/imigrasi-tolak-62-wna-masuk-ri-selama-ppkm?_ga=2.221387676.529308995.1631786552-amp-SUuSXy9Ldj0C_0utiPsIwQ'),
(36, 'Imigrasi Benarkan Pejabatnya Ditangkap Polisi Terkait Sabu di Hotel Makassar', 'berita3.jpg', 'https://news.detik.com/berita/d-5710100/imigrasi-benarkan-pejabatnya-ditangkap-polisi-terkait-sabu-di-hotel-makassar?_ga=2.6124019.1736025466.16318442'),
(37, 'Urus Paspor Cuma Bisa Walk-In dan untuk Kondisi Mendesak', 'berita4.jpeg', 'https://news.detik.com/berita/d-5660383/urus-paspor-cuma-bisa-walk-in-dan-untuk-kondisi-mendesak?_ga=2.199513966.1736025466.1631844281-84151454.163184'),
(38, 'Dirjen Imigrasi Se-ASEAN Gelar Pertemuan Virtual, Ini Bahasannya', 'berita5.jpeg', 'https://news.detik.com/berita/d-5700562/dirjen-imigrasi-se-asean-gelar-pertemuan-virtual-ini-bahasannya?_ga=2.170217952.1736025466.1631844281-84151454'),
(39, 'Seluruh Layanan Paspor di Kantor Imigrasi dan Online Seluruh Layanan Paspor di Kantor Imigrasi dan Online Tutup Selama PPKM', 'berita6.jpg', 'https://travel.kompas.com/read/2021/08/18/151400127/seluruh-layanan-paspor-di-kantor-imigrasi-dan-online-tutup-selama-ppkm'),
(40, 'Pemerintah Larang WNA-TKA Masuki Indonesia Saat PPKM, Hanya 5 Kategori Ini Dibolehkan', 'berita7.jpg', 'https://nasional.kompas.com/read/2021/08/09/13075511/pemerintah-larang-wna-tka-masuki-indonesia-saat-ppkm-hanya-5-kategori-ini'),
(41, '34 WN China Masuk Bandara Soekarno-Hatta Saat PPKM Level 4, Imigrasi: Sudah Penuhi Aturan Satgas', 'berita8.jpg', 'https://nasional.kompas.com/read/2021/08/08/13240531/34-wn-china-masuk-bandara-soekarno-hatta-saat-ppkm-level-4-imigrasi-sudah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_layanan`
--

CREATE TABLE `tb_layanan` (
  `id_layanan` int(11) NOT NULL,
  `judul_layanan` varchar(50) NOT NULL,
  `gambar_layanan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_layanan`
--

INSERT INTO `tb_layanan` (`id_layanan`, `judul_layanan`, `gambar_layanan`) VALUES
(1, 'ITAS', 'ITAS.jpg'),
(2, 'KITAS', 'KITAS.jpg'),
(3, 'Lapor Nikah', 'lapor nikah.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(300) NOT NULL,
  `role_id` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `username`, `email`, `password`, `role_id`) VALUES
(1, 'albertus yoga ', 'albertusyg', 'albertusyoga@amikom.ac.id', '1234', 1),
(2, 'guntur', 'gunturs_', 'guntur@gmail.com', '1234', 1),
(4, 'shedy', 'shedy1', 'shedy@gmail.com', '1234', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indeks untuk tabel `tb_layanan`
--
ALTER TABLE `tb_layanan`
  ADD PRIMARY KEY (`id_layanan`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_berita`
--
ALTER TABLE `tb_berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT untuk tabel `tb_layanan`
--
ALTER TABLE `tb_layanan`
  MODIFY `id_layanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
