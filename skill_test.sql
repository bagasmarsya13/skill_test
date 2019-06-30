-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Jun 2019 pada 19.58
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skill_test`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jabatan`
--

CREATE TABLE `jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `nama_jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jabatan`
--

INSERT INTO `jabatan` (`id_jabatan`, `nama_jabatan`) VALUES
(1, 'Pegawai'),
(2, 'Manager'),
(3, 'CEO'),
(4, 'CTO'),
(5, 'CFO'),
(6, 'Marketing'),
(7, 'Operating Officer'),
(8, 'IT Officer'),
(9, 'DBA'),
(10, 'Security Engineer'),
(11, 'System Analist'),
(12, 'QA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id_login` varchar(15) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `level` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id_login`, `username`, `password`, `level`) VALUES
('001', 'hr', 'hr', 'HR'),
('002', 'manager', 'manager', 'Manager');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `NIP` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nama`, `NIP`, `alamat`, `jabatan`) VALUES
(1, 'Deni supriadi', '1111020', 'Cimahi', 'Manager'),
(2, 'Syahrul Gunawan', '1115687', 'Buah Batu', 'CEO'),
(3, 'Marva Anaya', '1111896', 'Dayeuhkolot', 'CTO'),
(4, 'Dwi Ismanto', '1111032', 'Pasirkaliki', 'CFO'),
(5, 'Yuma Andhika', '1111032', 'Tegalega', 'Marketing'),
(6, 'Septian Agisya', '11114747', 'Parompong', 'Operating Officer'),
(7, 'Asep Deni Rahman', '111045', 'Pasteur', 'IT Officer'),
(8, 'Devan Nugraha', '1111787', 'Padalarang', 'DBA'),
(9, 'Anne kilimanjalo', '11114752', 'Rancabali', 'Security Engineer'),
(10, 'Asep backtrack', '1111201', 'Cipageran', 'QA'),
(11, 'Natasha tangoop', '1111454', 'Pagarsih', 'Pegawai'),
(12, 'Eddy simaramara', '1114547', 'Kelenteng', 'Pegawai');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
