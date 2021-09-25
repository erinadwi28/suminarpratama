-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Sep 2021 pada 05.22
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.2.24

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
(34, 'Bebas Visa Kunjungan untuk 169 Negara, Tidak Efektif buat Wisata', 'inimu.com--wallpaper-for-icon-realistic-04a.jpg', 'https://travel.detik.com/travel-news/d-5679586/bebas-visa-kunjungan-untuk-169-negara-tidak-efektif-buat-wisata?_ga=2.24834110.529308995.1631786552-amp'),
(35, 'Imigrasi Tolak 62 WNA Masuk RI Selama PPKM', 'berita2.jpeg', 'https://news.detik.com/berita/d-5667090/imigrasi-tolak-62-wna-masuk-ri-selama-ppkm?_ga=2.221387676.529308995.1631786552-amp-SUuSXy9Ldj0C_0utiPsIwQ'),
(36, 'Imigrasi Benarkan Pejabatnya Ditangkap Polisi Terkait Sabu di Hotel Makassar', 'berita3.jpg', 'https://news.detik.com/berita/d-5710100/imigrasi-benarkan-pejabatnya-ditangkap-polisi-terkait-sabu-di-hotel-makassar?_ga=2.6124019.1736025466.16318442'),
(37, 'Urus Paspor Cuma Bisa Walk-In dan untuk Kondisi Mendesak', 'berita4.jpeg', 'https://news.detik.com/berita/d-5660383/urus-paspor-cuma-bisa-walk-in-dan-untuk-kondisi-mendesak?_ga=2.199513966.1736025466.1631844281-84151454.163184'),
(38, 'Dirjen Imigrasi Se-ASEAN Gelar Pertemuan Virtual, Ini Bahasannya', 'berita5.jpeg', 'https://news.detik.com/berita/d-5700562/dirjen-imigrasi-se-asean-gelar-pertemuan-virtual-ini-bahasannya?_ga=2.170217952.1736025466.1631844281-84151454'),
(39, 'Seluruh Layanan Paspor di Kantor Imigrasi dan Online Seluruh Layanan Paspor di Kantor Imigrasi dan Online Tutup Selama PPKM', 'berita6.jpg', 'https://travel.kompas.com/read/2021/08/18/151400127/seluruh-layanan-paspor-di-kantor-imigrasi-dan-online-tutup-selama-ppkm'),
(40, 'Pemerintah Larang WNA-TKA Masuki Indonesia Saat PPKM, Hanya 5 Kategori Ini Dibolehkan', 'berita7.jpg', 'https://nasional.kompas.com/read/2021/08/09/13075511/pemerintah-larang-wna-tka-masuki-indonesia-saat-ppkm-hanya-5-kategori-ini'),
(41, '34 WN China Masuk Bandara Soekarno-Hatta Saat PPKM Level 4, Imigrasi: Sudah Penuhi Aturan Satgas', 'berita8.jpg', 'https://nasional.kompas.com/read/2021/08/08/13240531/34-wn-china-masuk-bandara-soekarno-hatta-saat-ppkm-level-4-imigrasi-sudah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_informasi`
--

CREATE TABLE `tb_informasi` (
  `id_informasi` int(10) UNSIGNED NOT NULL,
  `nama_dokumen` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `persyaratan` text NOT NULL,
  `prosedur` text NOT NULL,
  `gambar` varchar(100) NOT NULL DEFAULT 'placeholder.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_informasi`
--

INSERT INTO `tb_informasi` (`id_informasi`, `nama_dokumen`, `deskripsi`, `persyaratan`, `prosedur`, `gambar`) VALUES
(1, 'ITAS', 'ITAS atau KITAS adalah kartu izin tinggal terbatas yang diberikan kepada warga negara asing (WNA) dengan jangka waktu 2tahun dan dapat diperpanjang hingga 6 tahun.', '1. Surat permohonan ITAS baru.\r\n2. Surat jaminan bermatrai.\r\n3. Fotokopi KTP penjamin.\r\n4. Surat keterangan domisili orang asing dari kelurahan dan kecamatan.\r\n5. Pas foto 3x4 sebanyak 2 lembar(background merah).\r\n6. Mengisi Formulir PERDIM.\r\n7. Teleks Visa.\r\n8. Print out notifikasi pendaftaran ITAS online.\r\n9. Asli dan fotokopi Paspor dan ITAS.\r\n10. surat vaksin.', '1. \r\n2. ', 'informasi-210925-1bc78af74b.jpg'),
(2, 'LAPOR LAHIR', 'Dalam Pasal 27 UU 24/2013 Disebutkan:\r\n1. Setiap kelahiran wajib dilaporkan oleh Penduduk kepada Instansi Pelaksana setempat paling lambat 60 (enam puluh) hari sejak kelahiran.\r\nPenjelasan: \r\nPelaporan kelahiran oleh Penduduk dilaksanakan di Instansi Pelaksana tempat Penduduk berdomisili. Penulisan tempat lahir di dalam Akta Kelahiran tetap menunjuk pada tempat terjadinya kelahiran.\r\n2. Berdasarkan laporan sebagaimana dimaksud pada ayat (1), Pejabat Pencatatan Sipil mencatat pada Register Akta Kelahiran dan menerbitkan Kutipan Akta Kelahiran.\r\nPenjelasan:\r\nPenerbitan Kutipan Akta Kelahiran tanpa dipungut biaya sebagaimana diatur dalam Peraturan Perundang-undangan. ', '1. Formulir pengajuan Lapor Lahir.\r\n2. Surat Permohonan Lapor Lahir; (cap perusahaan)/ (bermaterai bila sponsor keluarga).\r\n3. KTP sponsor (fotokopi).\r\n4. Surat Kuasa bermaterai (jika dikuasakan).\r\n5. KTP yang dikuasakan (copy).\r\n6. Paspor Asing (asli dan copy jika sudah memiliki).\r\n7. Paspor Ibu (asli dan copy).\r\n8. KITAS Online kedua orangtua (copy).\r\n9. Untuk sponsor Ibu WNI, KTP WNI dan Kartu Keluarga WNI (copy).\r\n10. Akte Lahir Anak (asli dari CAPIL dan copy).\r\n11. Melampirkan Surat Keterangan Lahir dari Rumah Sakit (copy).</p>', '1.\r\n2. ', 'informasi-210925-6a0e8c3d3d.jpg'),
(3, 'EPO', 'EPO – Exit Permit Only adalah izin untuk meninggalkan Indonesia dan tidak kembali lagi. Biasanya Tenaga Kerja Asing (TKA) sudah habis masa kontrak kerjanya dengan perusahaan tempat dia bekerja. EPO dapat diurus di Kantor Imigrasi tempat KITAS TKA tersebut diterbitkan.', '1. Formulir.\r\n2. Paspor, KITAS asli dan Fotokopi.\r\n3. Surat Sponsor dan KTP Sponsor.\r\n4. Tiket Pulang.\r\n5. Surat Pernyataan Bermaterai.\r\n6. Surat Nikah dan KK (Sponsor suami/istri).\r\n7. IMTA, RPTKA, DPKK (Sponsor Perusahaan).', '1.\r\n2.\r\n', 'informasi-210925-22a2fc0116.jpg'),
(4, 'ERP', 'ERP (Exit Re-Entry Permit) adalah ', '1. Surat permohonan dari penjamin maupun sponsor.\r\n2. Surat kuasa (jika pemohon dikuasakan).\r\n3. Foto copy (Paspor, Kitas dan Kitab & Cap keberangkatan terakhir).\r\n4. Perdim 27.\r\n5. Foto copy penjamin atau sponsor.\r\n6. Untuk pengikut TKA (suami/istri/anak) melampirakan foto copy dokumen TKA.\r\n7. Untuk pejamin perorangan (istri/suami/orangtua) melpirkan KK atau akta nikah penjamin.', '1.\r\n2.\r\n', 'informasi-210925-a572f3bd6a.jpg'),
(5, 'LAPOR NIKAH', 'Lapor Nikah adalah ', '1. Formulir.\r\n2. Paspor, KITAS asli dan Fotokopi.\r\n3. Fotokopi nikah dari capil.\r\n4. KTP, KK sponsor.\r\n5. Surat permohonan, Lapor Nikah bermaterai.', '1. \r\n2.\r\n', 'informasi-210925-bf9f4c2ae5.jpg'),
(6, 'PASPOR', 'Paspor adalah dokumen resmi yang dikeluarkan oleh pejabat yang berwenang disuatu negara yang memuat identitas pemeganya dan berlaku untuk melakukan perjalanan antar negara.', '1. E-KTP.\r\n2. Kartu Keluarga.\r\n3. Akta Kelahiran, buku nikah atau ijazah.\r\n4. Bagi yang telah berganti nama: surat penetapan ganti nama.', '1. Masuk ke https://antrian.imigrasi.go.id/ atau melalui aplikasi Layanan Paspor Online.\r\n2. Buat akun baru menggunakan atau masuk dengan akun yang sudah ada.\r\n3. Pilih kantor imigrasi dan kedatngan.\r\n4. Simpan atau cetak barcode antrian.', 'informasi-210925-e06cc88320.jpeg');

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
(3, 'Lapor Nikah', ''),
(9, 'r', 'pic.jpg');

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
-- Indeks untuk tabel `tb_informasi`
--
ALTER TABLE `tb_informasi`
  ADD PRIMARY KEY (`id_informasi`);

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
-- AUTO_INCREMENT untuk tabel `tb_informasi`
--
ALTER TABLE `tb_informasi`
  MODIFY `id_informasi` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_layanan`
--
ALTER TABLE `tb_layanan`
  MODIFY `id_layanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
