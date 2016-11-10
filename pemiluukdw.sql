-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 24 Nov 2015 pada 08.37
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pemiluukdw`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id_admin` int(2) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `calon`
--

CREATE TABLE IF NOT EXISTS `calon` (
`id_calon` int(2) NOT NULL,
  `lk_dipilih` varchar(15) NOT NULL,
  `ketua` varchar(25) NOT NULL,
  `wakil` varchar(25) NOT NULL,
  `nama_gabungan` varchar(15) NOT NULL,
  `cp` varchar(20) NOT NULL,
  `pengalaman_organisasi` varchar(100) NOT NULL,
  `visi` varchar(150) NOT NULL,
  `misi` varchar(150) NOT NULL,
  `motivasi` varchar(150) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `no_urut` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil_pemilu`
--

CREATE TABLE IF NOT EXISTS `hasil_pemilu` (
`id` int(2) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `pilihan` int(2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(2) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `nim` varchar(8) NOT NULL,
  `pilihan` int(2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `calon`
--
ALTER TABLE `calon`
 ADD PRIMARY KEY (`id_calon`), ADD UNIQUE KEY `no_urut` (`no_urut`);

--
-- Indexes for table `hasil_pemilu`
--
ALTER TABLE `hasil_pemilu`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id_admin` int(2) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `calon`
--
ALTER TABLE `calon`
MODIFY `id_calon` int(2) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hasil_pemilu`
--
ALTER TABLE `hasil_pemilu`
MODIFY `id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
