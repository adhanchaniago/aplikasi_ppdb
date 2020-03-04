-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2019 at 03:50 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ppdb-dev`
--

-- --------------------------------------------------------

--
-- Table structure for table `ro_formulir`
--

CREATE TABLE IF NOT EXISTS `ro_formulir` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `nisn` char(10) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama_siswa` enum('Islam','Kristen Katolik','Kristen Protestan','Hindu','Budha') NOT NULL,
  `status_keluarga` enum('Anak kandung','Anak angkat') NOT NULL,
  `alamat_siswa` text NOT NULL,
  `hp_siswa` varchar(12) NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `pendidikan_ayah` enum('Tidak sekolah','SD/MI','SMP/MTs','SMA/SMK/MA','Diploma','S1','S2','S3') NOT NULL,
  `pekerjaan_ayah` enum('Buruh','Tani','Wiraswasta','PNS','Polri/TNI','Perangkat Desa','Nelayan','Lainnya') NOT NULL,
  `penghasilan_ayah` enum('-500rb','500-1jt','1jt-3jt','3jt-5jt','5jt-10jt','10jt+') NOT NULL,
  `hp_ayah` varchar(12) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `pendidikan_ibu` enum('Tidak sekolah','SD/MI','SMP/MTs','SMA/SMK/MA','Diploma','S1','S2','S3') NOT NULL,
  `pekerjaan_ibu` enum('Ibu Rumah Tangga','Buruh','Tani','Wiraswasta','PNS','Polri/TNI','Perangkat Desa','Lainnya') NOT NULL,
  `penghasilan_ibu` enum('-500rb','500-1jt','1jt-3jt','3jt-5jt','5jt-10jt','10jt+') NOT NULL,
  `hp_ibu` varchar(12) NOT NULL,
  `nama_wali` varchar(50) NOT NULL,
  `pendidikan_wali` enum('Tidak sekolah','SD/MI','SMP/MTs','SMA/SMK/MA','Diploma','S1','S2','S3') NOT NULL,
  `pekerjaan_wali` enum('Ibu Rumah Tangga','Buruh','Tani','Wiraswasta','PNS','Polri/TNI','Perangkat Desa','Lainnya') NOT NULL,
  `penghasilan_wali` enum('-500rb','500-1jt','1jt-3jt','3jt-5jt','5jt-10jt','10jt+') NOT NULL,
  `hp_wali` varchar(12) NOT NULL,
  `npsn_sekolah` char(8) NOT NULL,
  `nama_sekolah` varchar(50) NOT NULL,
  `status_sekolah` enum('Negeri','Swasta') NOT NULL,
  `model_ujian_nasional` enum('UNBK','UNKP') NOT NULL,
  `alamat_sekolah` text NOT NULL,
  `tahun_lulus` year(4) NOT NULL,
  `status_pendaftaran` enum('Belum Diverifikasi','Diterima','Tidak Diterima') NOT NULL,
  `tanggal_pendaftaran` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `ro_formulir`
--

INSERT INTO `ro_formulir` (`id`, `nisn`, `nama_siswa`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `agama_siswa`, `status_keluarga`, `alamat_siswa`, `hp_siswa`, `nama_ayah`, `pendidikan_ayah`, `pekerjaan_ayah`, `penghasilan_ayah`, `hp_ayah`, `nama_ibu`, `pendidikan_ibu`, `pekerjaan_ibu`, `penghasilan_ibu`, `hp_ibu`, `nama_wali`, `pendidikan_wali`, `pekerjaan_wali`, `penghasilan_wali`, `hp_wali`, `npsn_sekolah`, `nama_sekolah`, `status_sekolah`, `model_ujian_nasional`, `alamat_sekolah`, `tahun_lulus`, `status_pendaftaran`, `tanggal_pendaftaran`) VALUES
(1, '1234567891', 'muh aswar ', 'Laki-laki', 'bullung', '2019-07-02', 'Islam', 'Anak kandung', 'jl asdhfkashfka asjdfhkahsf jkhaskfha kjhsdf', '123123123123', 'asdfasfasfj', 'Tidak sekolah', 'Buruh', '500-1jt', '4543543235', 'asfasfasfa', 'S2', 'Ibu Rumah Tangga', '-500rb', '532523523252', 'asfafasfasfa', 'Tidak sekolah', 'Ibu Rumah Tangga', '-500rb', '523542542452', '35324532', 'afdsafasfa', 'Negeri', 'UNBK', 'sfasfsafasfadsfadsfaf', 2019, 'Belum Diverifikasi', '2019-07-17'),
(3, '3523523523', 'joko utomo', 'Laki-laki', 'safasf safasf', '2019-07-17', 'Islam', 'Anak kandung', 'fsafsfsafdsa dsafsdaf asfas', '634563635463', 'gsdgsgfsdgsdg sdgsdg', 'S3', 'Wiraswasta', '10jt+', '455435344664', 'dfadsffgdsghtghhjuk', 'S1', 'Perangkat Desa', '10jt+', '546365436363', '', '', '', '', '', '63465464', 'asdfdasfsadfa dfsafdsf', 'Negeri', 'UNBK', 'dgsffdsgfd sdgsg dsgdggjhgjhjreslkaffhavmnvbz jfhafhwrewqriywrf hfnvcvcvsr', 2000, 'Belum Diverifikasi', '2019-07-17'),
(4, '5148652464', 'Dmitry moskovic', 'Laki-laki', 'klaten', '1996-07-17', 'Islam', 'Anak kandung', 'pogung lor d1 Mlati Sleman Yogyakarta', '083525426747', 'Vladmir', 'S1', 'Wiraswasta', '5jt-10jt', '081573546784', 'Natasha', 'S1', 'PNS', '1jt-3jt', '082186456656', '', '', '', '', '', '56435776', 'SMP NEGERI 12 JOGJA', 'Negeri', 'UNKP', 'jl pahlawan pagi sleman yogyakarta', 2018, 'Diterima', '2019-07-18'),
(5, '6152930948', 'alice ngatiem', 'Perempuan', 'Yogyakarta', '1996-09-23', 'Islam', 'Anak kandung', 'condong catur mlati sleman yogyakarta', '085442353135', 'argus paino', 'Diploma', 'PNS', '3jt-5jt', '086454135346', 'lolita saja', 'S1', 'Ibu Rumah Tangga', '-500rb', '089713867454', '', '', '', '', '', '97894675', 'SMP TUNAS BANGSA', 'Swasta', 'UNBK', 'jl ditempat bantul yogyakarta', 2019, 'Tidak Diterima', '2019-07-18'),
(6, '2347863538', 'Johnson sudirman', 'Laki-laki', 'Magelang', '1996-02-28', 'Kristen Protestan', 'Anak kandung', 'jalan malam minggu no 32 bantul yogyakarta', '089878674575', 'mikael stalin', 'S1', 'Polri/TNI', '10jt+', '088997867536', 'Meri Austin', 'Diploma', 'Wiraswasta', '500-1jt', '084534543652', '', '', '', '', '', '98978647', 'SMP NEGERI 04 Bantul', 'Negeri', 'UNKP', 'Jl padalarang No 56 bantul Yogyakarta', 2019, 'Belum Diverifikasi', '2019-05-01'),
(7, '5436564656', 'ernesto de lacruz', 'Laki-laki', 'yoyyakarta', '1996-07-09', 'Kristen Katolik', 'Anak kandung', 'jalan pandega marta no 30 mlati sleman yogyakarta', '083465575388', 'panijan', 'S1', 'PNS', '1jt-3jt', '086567243755', 'sulastri', 'S1', 'Ibu Rumah Tangga', '-500rb', '464357648686', '', '', '', '', '', '57643575', 'SMP 31 NEGERI SLEMAN', 'Negeri', 'UNKP', 'jalan palangan no 89 mlati sleman Yogyakarta', 2018, 'Diterima', '2019-07-22'),
(8, '0986786753', 'ice cube', 'Laki-laki', 'detroit', '1996-09-30', 'Islam', 'Anak kandung', 'perumahan rumah jalan kda 17 mlati  sleman yoyakarta', '082176765655', 'oro jackson', 'S2', 'Wiraswasta', '5jt-10jt', '087687576438', 'janete', 'S1', 'Wiraswasta', '1jt-3jt', '089646546576', '', '', '', '', '', '97986874', 'SMP BERKARYA YOGYAKARTA', 'Swasta', 'UNBK', 'jalan gajah mada no 45 mlati sleman yogyakarta', 2018, 'Belum Diverifikasi', '2019-07-23');

-- --------------------------------------------------------

--
-- Table structure for table `ro_identitas_sekolah`
--

CREATE TABLE IF NOT EXISTS `ro_identitas_sekolah` (
  `id` int(2) NOT NULL,
  `nama_sekolah` varchar(30) NOT NULL,
  `alamat_sekolah` varchar(50) NOT NULL,
  `telephone_sekolah` char(12) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ro_identitas_sekolah`
--

INSERT INTO `ro_identitas_sekolah` (`id`, `nama_sekolah`, `alamat_sekolah`, `telephone_sekolah`) VALUES
(1, 'SMKN MUHAMMADIYAH BERBAH', 'Jln. Krikilan Tegaltirto Berbah Sleman Yogyakarta', '081332291107');

-- --------------------------------------------------------

--
-- Table structure for table `ro_informasi`
--

CREATE TABLE IF NOT EXISTS `ro_informasi` (
  `id_informasi` int(3) NOT NULL AUTO_INCREMENT,
  `judul` text NOT NULL,
  `detail_informasi` text NOT NULL,
  `id` int(2) NOT NULL,
  PRIMARY KEY (`id_informasi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `ro_informasi`
--

INSERT INTO `ro_informasi` (`id_informasi`, `judul`, `detail_informasi`, `id`) VALUES
(1, 'Pogung Esport Go Intenasional', 'Dalam perkembangan esport saat daya saing pro player sangat kompetitif, tidak terkecuali untuk tim esportnya. nah dari itu pogung esport mulai menjalin kerja sama dengan tim lain diluar negeri. kerjama sama itu juga untuk membangun relasi bisnis dalam olahrga esport.', 0),
(2, 'di coba ', 'semoga gg', 0),
(3, 'malam ini dingin', 'is this the real life is this fantasy\r\ncaught the landside no escape from reality\r\nopen your eyes look up to sky and see', 0),
(4, 'belum ada? masa si !no click bait!', 'informsai dari kegiatan kegiatan di sekolah belum ada. ', 0),
(5, 'grebek smk muhammadiyah berbah', 'fanta halilintar ke SMK Muhammadiyah utuk menanyai outfit yang di pake anak anak SMK Muhammadiyah.', 0),
(6, 'demo 1', 'demo 1 tanggal 22 juli', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ro_jurusan`
--

CREATE TABLE IF NOT EXISTS `ro_jurusan` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `nisn` char(10) NOT NULL,
  `jurusan_1` enum('teknik sepeda motor','busana butik','akutansi') NOT NULL,
  `jurusan_2` enum('teknik sepeda motor','busana butik','akutansi','') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `ro_jurusan`
--

INSERT INTO `ro_jurusan` (`id`, `nisn`, `jurusan_1`, `jurusan_2`) VALUES
(1, '3344455555', 'teknik sepeda motor', 'teknik sepeda motor'),
(2, '3523523523', 'busana butik', 'akutansi'),
(3, '5148652464', 'teknik sepeda motor', 'akutansi'),
(4, '6152930948', 'busana butik', 'akutansi'),
(5, '2347863538', 'akutansi', 'teknik sepeda motor'),
(6, '5436564656', 'teknik sepeda motor', 'busana butik'),
(7, '0986786753', 'busana butik', 'teknik sepeda motor');

-- --------------------------------------------------------

--
-- Table structure for table `ro_nilai_un`
--

CREATE TABLE IF NOT EXISTS `ro_nilai_un` (
  `id` int(13) NOT NULL AUTO_INCREMENT,
  `nisn` char(10) NOT NULL,
  `nama_siswa` varchar(30) NOT NULL,
  `ipa` char(2) NOT NULL,
  `matematika` char(2) NOT NULL,
  `bahasa_indonesia` char(2) NOT NULL,
  `bahasa_ingris` char(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `ro_nilai_un`
--

INSERT INTO `ro_nilai_un` (`id`, `nisn`, `nama_siswa`, `ipa`, `matematika`, `bahasa_indonesia`, `bahasa_ingris`) VALUES
(1, '3344455555', 'joko utomo', '20', '90', '20', '10'),
(2, '3523523523', 'joko utomo', '20', '90', '10', '30'),
(3, '5148652464', 'Dmitry moskovic', '80', '75', '60', '80'),
(4, '6152930948', 'alice ngatiem', '79', '40', '60', '40'),
(5, '2347863538', 'Johnson sudirman', '80', '79', '70', '79'),
(6, '5436564656', 'ernesto de lacruz', '80', '80', '80', '80'),
(7, '0986786753', 'ice cube', '70', '70', '90', '90');

-- --------------------------------------------------------

--
-- Table structure for table `ro_pengaturandaftar`
--

CREATE TABLE IF NOT EXISTS `ro_pengaturandaftar` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `setdaftar` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `ro_pengaturandaftar`
--

INSERT INTO `ro_pengaturandaftar` (`id`, `setdaftar`) VALUES
(1, 'Buka');

-- --------------------------------------------------------

--
-- Table structure for table `ro_pengaturanpengumuman`
--

CREATE TABLE IF NOT EXISTS `ro_pengaturanpengumuman` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `setpengumuman` varchar(7) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `ro_pengaturanpengumuman`
--

INSERT INTO `ro_pengaturanpengumuman` (`id`, `setpengumuman`) VALUES
(1, 'Buka');

-- --------------------------------------------------------

--
-- Table structure for table `ro_user`
--

CREATE TABLE IF NOT EXISTS `ro_user` (
  `id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `level` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ro_user`
--

INSERT INTO `ro_user` (`id`, `username`, `password`, `nama`, `email`, `level`) VALUES
(2, 'joko', '9ba0009aa81e794e628a04b51eaf7d7f', 'joko', 'joko', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
