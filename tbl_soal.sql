-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 14 Des 2018 pada 12.23
-- Versi Server: 5.5.27
-- Versi PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `db_kuis`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_soal`
--

CREATE TABLE IF NOT EXISTS `tbl_soal` (
  `id_soal` int(5) NOT NULL AUTO_INCREMENT,
  `soal` text NOT NULL,
  `a` varchar(30) NOT NULL,
  `b` varchar(30) NOT NULL,
  `c` varchar(30) NOT NULL,
  `d` varchar(30) NOT NULL,
  `knc_jawaban` varchar(30) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `aktif` enum('Y','N') NOT NULL DEFAULT 'Y',
  PRIMARY KEY (`id_soal`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data untuk tabel `tbl_soal`
--

INSERT INTO `tbl_soal` (`id_soal`, `soal`, `a`, `b`, `c`, `d`, `knc_jawaban`, `gambar`, `tanggal`, `aktif`) VALUES
(1, 'Apa nama hewan pemakan danging?', 'herbovora', 'karnivora', 'omnivora', 'semua benar', 'b', '', '0000-00-00', 'Y'),
(2, 'Siapa nama presiden pertama di Indonesia?', 'soekarno', 'soeharto', 'B.J. Habibie', 'Megawati soekarno putri', 'a', '', '0000-00-00', 'Y'),
(3, 'contoh dari hardware adalah, kecuali....', 'mouse', 'pc', 'monitor', 'microsoft word', 'd', '', '0000-00-00', 'Y'),
(4, 'garis terdiri dari?', 'bidang', 'titik', 'garis lurus', 'semua salah', 'b', '', '0000-00-00', 'Y'),
(5, '3! adalah....', '9', '8', '7', '6', 'd', '', '0000-00-00', 'Y');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
