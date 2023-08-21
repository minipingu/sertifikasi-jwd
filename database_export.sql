-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Agu 2023 pada 17.28
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siswa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `email` varchar(35) NOT NULL,
  `password` varchar(35) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `nama`, `email`, `password`, `foto`, `role`) VALUES
(1, 'Jenny', 'admin@kampuskuaja.ac.id', '1a1dc91c907325c69271ddf0c944bc72', 'https://dev.med.maranatha.edu/wp-content/uploads/2023/03/Dosen-Cindra-Paskaria-02.png', 'Admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `beasiswa`
--

CREATE TABLE `beasiswa` (
  `nama` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `link` varchar(255) NOT NULL,
  `id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `beasiswa`
--

INSERT INTO `beasiswa` (`nama`, `keterangan`, `link`, `id`) VALUES
('Beasiswa Bidikmisi', 'Merupakan bantuan biaya pendidikan bagi calon mahasiswa yang tidak mampu secara ekonomi dan memiliki potensi akademik baik untuk menempuh pendidikan di perguruan tinggi pada program studi unggulan sampai lulus tepat waktu. Beasiswa Bidikmisi diberikan sejak mahasiswa ditetapkan sebagai penerima Bidikmisi di perguruan tinggi.\r\n\r\nUntuk S1 atau Diploma IV beasiswa diberikan hingga 8 semester, D3 maksimal 6 semester, D2 maksimal 4 semester, dan D1 maksimal 2 semester. Selain itu diberikan juga beasiswa untuk program profesi, diantaranya dokter maksimal 4 semester, dokter gigi maksimal 4 semester, dokter hewan maksimal 4 semester, serta Ners dan Apoteker maksimal 4 semester.', 'https://bidikmisi.belmawa.ristekdikti.go.id/', 1),
('Beasiswa KIP Kuliah', 'Program KIP-K atau Program Kartu Indonesia Pintar Kuliah merupakan program bantuan biaya pendidikan dari Pemerintah melalui Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi (Kemdikbudristek) yang bekerjasama dengan berbagai perguruan tinggi baik negeri maupun swasta.\r\n\r\nSalah satu tujuan diadakannya program KIP Kuliah ini yaitu meningkatkan perluasan akses dan kesempatan belajar di Perguruan Tinggi (PT) bagi mahasiswa Warga Negara Indonesia (WNI) yang tidak mampu secara ekonomi.\r\n\r\nKomponen pembiayaan yang disediakan oleh beasiswa KIP Kuliah sangatlah lengkap. Mulai dari biaya pendidikan yang terdiri dari Sumbangan Pokok Pembangunan (SPP), Biaya Kuliah Pokok (BKP), Biaya Kuliah SKS, Biaya Pendaftaran Semester, Iuran Kegiatan Mahasiswa, Biaya Pengenalan Kampus, Biaya Seragam, Biaya Sidang/Ujian Akhir dan juga bantuan biaya hidup berdasarkan perhitungan besaran indeks harga lokal pada masing-masing wilayah Perguruan Tinggi.\r\n\r\nSeluruh fasilitas pembiayaan yang disediakan pemerintah diberikan penuh selama 8 semester baik Semester Ganjil maupun Genap.', 'https://kip-kuliah.kemdikbud.go.id/', 2),
('Beasiswa Peningkatan Prestasi Akademik', 'Beasiswa Peningkatan Prestasi Akademik (PPA), disediakan oleh pemerintah melalui Kementerian Riset, Teknologi, dan Pendidikan Tinggi (Kemenristekdikti). Tujuan diberikannya beasiswa ini dikhususkan bagi mahasiswa yang tengah menjalani kuliah diploma maupun sarjana di perguruan tinggi negeri dan swasta di tanah air.\r\n\r\nSyarat untuk mendaftar beasiswa PPA ini adalah terdaftar sebagai mahasiswa PTN/PTS di Pangkalan Data Perguruan Tinggi (PDPT) dengan kriteria minimal semester II dan maksimal semester IV untuk program Diploma. Sedangkan untuk program Sarjana minimal semester II maksimal semester VI.', 'https://lldikti6.kemdikbud.go.id/beasiswa-dan-bantuan-biaya-bendidikan-bagi-mahasiswa/', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar`
--

CREATE TABLE `daftar` (
  `id` int(6) NOT NULL,
  `nim` int(225) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `email` varchar(255) NOT NULL,
  `handphone` varchar(255) NOT NULL,
  `semester` int(2) NOT NULL,
  `ipk` float NOT NULL,
  `beasiswa` varchar(255) NOT NULL,
  `berkas` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `daftar`
--

INSERT INTO `daftar` (`id`, `nim`, `nama`, `email`, `handphone`, `semester`, `ipk`, `beasiswa`, `berkas`, `status`, `tanggal`) VALUES
(45, 42342345, 'Budi Rahardjo', 'budirahardjo@mahasiswa.kampuskuaja.ac.id', '08123123', 5, 3.5, 'Beasiswa Bidikmisi', '4. freecodecamp web responsive.png', 'belum di verifikasi', 'Senin, 21/08/2023'),
(46, 42342345, 'Budi Rahardjo', 'budirahardjo@mahasiswa.kampuskuaja.ac.id', '0856546234', 5, 3.5, 'Beasiswa KIP Kuliah', '3. ijazah.jpg', 'tolak', 'Senin, 21/08/2023'),
(47, 42342345, 'Budi Rahardjo', 'budirahardjo@mahasiswa.kampuskuaja.ac.id', '084512345', 5, 3.5, 'Beasiswa Peningkatan Prestasi Akademik (PPA)', '4. dicoding Dasar Pemrograman JavaScript.pdf', 'verifikasi', 'Senin, 21/08/2023');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `NIM` int(50) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `ipk` double NOT NULL,
  `semester` int(2) NOT NULL,
  `jurusan` varchar(255) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`NIM`, `nama`, `email`, `password`, `ipk`, `semester`, `jurusan`, `foto`, `role`) VALUES
(42342345, 'Budi Rahardjo', 'budirahardjo@mahasiswa.kampuskuaja.ac.id', '81dc9bdb52d04dc20036dbd8313ed055', 3.5, 5, 'Sistem Informasi', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQHEZrBnqcoEY-1VHBcal-0mERc_v8YQ51Ggw&usqp=CAU', 'Mahasiswa'),
(42342346, 'Udin', 'udin@mahasiswa.kampuskuaja.ac.id', '81dc9bdb52d04dc20036dbd8313ed055', 2.8, 1, 'Manajemen', 'https://presma.uny.ac.id/site-fotopresma?q=N0Q4Nk9nNTh6WFVJQng4PQ==', 'Mahasiswa');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `beasiswa`
--
ALTER TABLE `beasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `daftar`
--
ALTER TABLE `daftar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`NIM`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `beasiswa`
--
ALTER TABLE `beasiswa`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `daftar`
--
ALTER TABLE `daftar`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `NIM` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42342347;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
