-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 18 Jun 2019 pada 22.43
-- Versi Server: 5.5.27
-- Versi PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `db_pendaftaran`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_detail_pendaftar`
--

CREATE TABLE IF NOT EXISTS `tb_detail_pendaftar` (
  `id_pendaftar` int(11) NOT NULL AUTO_INCREMENT,
  `no_pendaftar` int(11) NOT NULL,
  `id_nilai` int(11) NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  `status` enum('mencukupi','tidak_mencukupi','','') NOT NULL,
  PRIMARY KEY (`id_pendaftar`),
  KEY `status` (`status`),
  KEY `no_pendaftar` (`no_pendaftar`),
  KEY `no_pendaftar_2` (`no_pendaftar`),
  KEY `id_jurusan` (`id_jurusan`),
  KEY `id_nilai` (`id_nilai`),
  KEY `id_nilai_2` (`id_nilai`),
  KEY `id_jurusan_2` (`id_jurusan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_informasi`
--

CREATE TABLE IF NOT EXISTS `tb_informasi` (
  `id_informasi` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(20) NOT NULL,
  `detail_informasi` varchar(15) NOT NULL,
  `id_admin` int(15) NOT NULL,
  PRIMARY KEY (`id_informasi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jurusan`
--

CREATE TABLE IF NOT EXISTS `tb_jurusan` (
  `id_jurusan` int(11) NOT NULL AUTO_INCREMENT,
  `no_pendaftar` int(11) NOT NULL,
  `pilihan_1` enum('teknik_sepeda_motor','busana_butik','akutansi','') NOT NULL,
  `pilihan_2` enum('teknik_sepeda_motor','busana_butik','akutansi','') NOT NULL,
  PRIMARY KEY (`id_jurusan`),
  UNIQUE KEY `no_pendaftar` (`no_pendaftar`),
  KEY `no_pendaftar_2` (`no_pendaftar`),
  KEY `no_pendaftar_3` (`no_pendaftar`),
  KEY `no_pendaftar_4` (`no_pendaftar`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_login`
--

CREATE TABLE IF NOT EXISTS `tb_login` (
  `id_admin` int(15) NOT NULL AUTO_INCREMENT,
  `nama_admin` varchar(15) NOT NULL,
  `password` varchar(50) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_nilai_ujian`
--

CREATE TABLE IF NOT EXISTS `tb_nilai_ujian` (
  `id_nilai` int(15) NOT NULL AUTO_INCREMENT,
  `no_pendaftar` int(15) NOT NULL,
  `nilai_ipa` double NOT NULL,
  `nilai_matematika` double NOT NULL,
  `nilai_bhs_indo` double NOT NULL,
  `nilai_bhs_ing` double NOT NULL,
  `berkas` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_nilai`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pendaftar`
--

CREATE TABLE IF NOT EXISTS `tb_pendaftar` (
  `no_pendaftar` int(15) NOT NULL AUTO_INCREMENT,
  `nisn` int(15) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `tempat_lahir` varchar(25) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `agama` enum('Islam','kristen','','') NOT NULL,
  `nama_ayah` varchar(25) NOT NULL,
  `nama_ibu` varchar(25) NOT NULL,
  `pekerjaan_ayah` enum('Wiraswasta','karyawan','Pns','ibu_rumah_tangga') NOT NULL,
  `pekerjaan_ibu` enum('Wiraswasta','karyawan','Pns','') NOT NULL,
  `alamat_ortu` text NOT NULL,
  `no_telp` int(13) NOT NULL,
  PRIMARY KEY (`no_pendaftar`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengumuman`
--

CREATE TABLE IF NOT EXISTS `tb_pengumuman` (
  `id_pengumuman` int(11) NOT NULL,
  `no_pendaftar` int(11) NOT NULL,
  `id_pendaftar` int(11) NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  `keterangan` enum('diterima','tidak_diterima','','') NOT NULL,
  KEY `no_pendaftar` (`no_pendaftar`),
  KEY `id_pendaftar` (`id_pendaftar`),
  KEY `id_jurusan` (`id_jurusan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_sekolah`
--

CREATE TABLE IF NOT EXISTS `tb_sekolah` (
  `npsn` int(11) NOT NULL AUTO_INCREMENT,
  `nama_asal_sekolah` int(11) NOT NULL,
  `status_sekolah` int(11) NOT NULL,
  `model_ujian` int(11) NOT NULL,
  `alamat_sekolah` int(11) NOT NULL,
  `tahun_lulus` int(11) NOT NULL,
  `no_pendaftar` int(11) NOT NULL,
  PRIMARY KEY (`npsn`),
  UNIQUE KEY `no_pendaftar` (`no_pendaftar`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_detail_pendaftar`
--
ALTER TABLE `tb_detail_pendaftar`
  ADD CONSTRAINT `tb_detail_pendaftar_ibfk_1` FOREIGN KEY (`no_pendaftar`) REFERENCES `tb_detail_pendaftar` (`no_pendaftar`);

--
-- Ketidakleluasaan untuk tabel `tb_jurusan`
--
ALTER TABLE `tb_jurusan`
  ADD CONSTRAINT `tb_jurusan_ibfk_2` FOREIGN KEY (`no_pendaftar`) REFERENCES `tb_jurusan` (`id_jurusan`);

--
-- Ketidakleluasaan untuk tabel `tb_pendaftar`
--
ALTER TABLE `tb_pendaftar`
  ADD CONSTRAINT `tb_pendaftar_ibfk_2` FOREIGN KEY (`no_pendaftar`) REFERENCES `tb_nilai_ujian` (`id_nilai`);

--
-- Ketidakleluasaan untuk tabel `tb_pengumuman`
--
ALTER TABLE `tb_pengumuman`
  ADD CONSTRAINT `tb_pengumuman_ibfk_1` FOREIGN KEY (`id_pendaftar`) REFERENCES `tb_detail_pendaftar` (`id_pendaftar`);

--
-- Ketidakleluasaan untuk tabel `tb_sekolah`
--
ALTER TABLE `tb_sekolah`
  ADD CONSTRAINT `tb_sekolah_ibfk_1` FOREIGN KEY (`no_pendaftar`) REFERENCES `tb_pendaftar` (`no_pendaftar`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
