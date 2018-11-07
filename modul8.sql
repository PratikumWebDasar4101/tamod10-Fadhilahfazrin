-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Nov 2018 pada 16.32
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `modul8`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(10) NOT NULL,
  `nama_depan` varchar(25) NOT NULL,
  `nama_belakang` varchar(25) NOT NULL,
  `kelas` text NOT NULL,
  `hobi` text NOT NULL,
  `genre_film` text NOT NULL,
  `wisata` text NOT NULL,
  `ttl` date NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama_depan`, `nama_belakang`, `kelas`, `hobi`, `genre_film`, `wisata`, `ttl`, `email`) VALUES
('670117003', 'Zuhal', 'Raismin', 'D3MI-40-04', 'Menyanyi, Menulis, Melukis', 'Horror, Adventure', 'Yogyakarta', '2018-09-06', 'zuhalr@gmail.com'),
('670117004', 'Rainul', 'Yanuar', 'D3MI-40-01', 'Merindu, Menyanyi, Menulis', 'Horror, Romance, Action', 'Lombok, Bali', '2018-06-13', 'rainuly@gmail.com'),
('670117008', 'Raiswar', 'Yansa', 'D3MI-40-01', 'Menyanyi, Menulis', 'Horror', 'Yogyakarta, Bali', '2017-12-14', 'raiswar5@gmail.com'),
('670117009', 'Fadhilah', 'Fazrin', 'D3MI-40-02', 'Merindu, Menyanyi', 'Comedy, Romance', 'Bandung, Lombok', '2018-02-06', 'dil@gmail.com'),
('670227990', 'Shafira', 'Sundari', 'D3MI-40-02', 'Merindu, Melukis', 'Adventure, Fantasy', 'Bandung, Lombok, Bali', '2018-10-02', 'shafira@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(20) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('Fazrin', '12345');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
