-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 15 Sep 2015 pada 03.28
-- Versi Server: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `databasesaw`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(10) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `hak_akses` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `hak_akses`) VALUES
(1, 'admin', 'admin', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbcalon`
--

CREATE TABLE IF NOT EXISTS `tbcalon` (
`idCalon` int(3) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `jabatan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbmatrik`
--

CREATE TABLE IF NOT EXISTS `tbmatrik` (
`idMatrik` int(3) NOT NULL,
  `idCalon` int(3) NOT NULL,
  `Kriteria1` varchar(10) NOT NULL,
  `Kriteria2` varchar(10) NOT NULL,
  `Kriteria3` varchar(10) NOT NULL,
  `Kriteria4` varchar(10) NOT NULL,
  `Kriteria5` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbcalon`
--
ALTER TABLE `tbcalon`
 ADD PRIMARY KEY (`idCalon`);

--
-- Indexes for table `tbmatrik`
--
ALTER TABLE `tbmatrik`
 ADD PRIMARY KEY (`idMatrik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbcalon`
--
ALTER TABLE `tbcalon`
MODIFY `idCalon` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbmatrik`
--
ALTER TABLE `tbmatrik`
MODIFY `idMatrik` int(3) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
