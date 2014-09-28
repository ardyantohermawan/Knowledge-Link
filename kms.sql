-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 28, 2014 at 07:14 PM
-- Server version: 5.5.38-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kms`
--

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE IF NOT EXISTS `karyawan` (
  `NIK` varchar(50) NOT NULL,
  `KODE_UNIT_KERJA` varchar(50) NOT NULL,
  `NAMA` varchar(75) DEFAULT NULL,
  `POSCODE` varchar(50) DEFAULT NULL,
  `JABATAN` varchar(75) DEFAULT NULL,
  `POSTITLE` varchar(50) DEFAULT NULL,
  `UNITKERJA` varchar(50) DEFAULT NULL,
  `WORKLOC` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`NIK`),
  KEY `Karyawan_FKIndex1` (`KODE_UNIT_KERJA`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`NIK`, `KODE_UNIT_KERJA`, `NAMA`, `POSCODE`, `JABATAN`, `POSTITLE`, `UNITKERJA`, `WORKLOC`) VALUES
('T535370', '5342A1A', 'FIRMAN FUADI, S.A.', 'AA2310051', '51', 'SP Anlap Manajemen', 'Dep Akuntansi', '3525-00'),
('T535371', '534010A', 'RAMA YUSRON HARBIANSYAH, S.A.', '831500051', '51', 'SP Bang Prosedur', 'Dep Organisasi & Prosedur', '3525-00  '),
('T535372', '535325A', 'ANDY YAZID ALYZZUDDIN, S.E.', '232100051', '51', 'SP Audit Administrasi', 'Dep Audit Administrasi', '3525-00  '),
('T535373', 'A52310', 'GERROLEON FEBULA, S.H.', '82A200051  ', '51', 'SP Perjanjian/Kontrak, Non Litigasi & Korporasi', 'Dep Hukum & Sekretariat', '3525-00  '),
('T535374', 'A21520', 'MEI RINA DEWI ARIANI, S.H.', '82A200051   ', '51', 'SP Perjanjian/Kontrak, Non Litigasi & Korporasi', 'Dep Hukum & Sekretariat', '3525-00  '),
('T535375', 'A12411', 'ICHLAS BUDHI PRATAMA, S.H.', '82A200051', '51', 'SP Perjanjian/Kontrak, Non Litigasi & Korporasi', 'Dep Hukum & Sekretariat', '3525-00  '),
('T535376', '521524A ', 'PASKALINA KUDMAS, S.H.', '82A100051  ', '51', 'SP Perijinan, Adm. Pertanahan & Litigasi', 'Dep Hukum & Sekretariat', '3525-00  '),
('T535377', '535331A', 'HARBARA DIGDAYA HAQ, S.H.', '231100051', '51', 'SP Audit Operasional', 'Dep Audit Operasional', '3525-00  '),
('T535378', '827100', 'RICKY DWI SETYAWAN, S.T.', '573223000', '50', 'Karu Listrik/Instrument Rumdin & Fasum', 'Dep Prasarana Pabrik & Kawasan', '3525-00  '),
('T535379', '524400A', 'R. ADI NUGROHO, S.T.', '581010051', '51', 'SP Dep Pengadaan', 'Dep Pengadaan', '3525-00  '),
('T535380', '641020', 'RIMELDI, S.T.', '581010051', '51', 'SP Dep Pengadaan', 'Dep Pengadaan', '3525-00  '),
('T535381', '632600', 'SHANDY KHARISMA IRIANTO, S.T.', '583325000', '50', 'Karu Instrumen Conveyor FGU Piping', 'Dep Pengelolaan Pelabuhan', '3525-00  '),
('T535382', '525110A', 'HIJRADMA PANDIKA HARDONO, S.T.', 'A71520051           ', '51', 'SP PPRW Sumatera Bagian Selatan', 'Dep Penj. Pupuk Retail Wilayah  II', '3525-00  '),
('T535383', '653500', 'MUHAMMAD CHANDRA BUDIMAN, S.T.', 'A73110051           ', '51', 'SP PPKor Wilayah Sumatera & Jabar', 'Dep Penjualan Pupuk Korporasi', '3525-00  '),
('T535384', '533010A', 'JOKO NUGROHO, S.T.', 'AB2100151         ', '51', 'SP Dep Manajemen Risiko', 'Dep Manajemen Risiko', '3525-00  '),
('T535385', 'A32250    ', 'FATHY WAHYU AL HAFIISH, S.T.', '582351000', '50', 'Karu Gudang Bhn Baku & Brg Dagangan', 'Dep Perencanaan & Gudang Material', '3525-00  '),
('T535386', '521600A', 'ARI PRIMANTARA, S.T.', 'A82250051        ', '51', 'SP Kerjasama Petroganik', 'Dep Pelayanan & Komunikasi Produk', '3525-00  '),
('T535387', '651240', 'ALDY SEFAN REZANALDY, S.Kom.', '552110051', '51', 'SP Sistem Analyst / Programmer', 'Dep Teknologi & Informasi', '3525-00  '),
('T535388', 'A23110    ', 'BUDI SETIAWAN, S.Kom.', '552110051', '51', 'SP Sistem Analyst / Programmer', 'Dep Teknologi & Informasi', '3525-00  '),
('T535389', '824400', 'STEFANUS ARDIAN SATWIKA, S.T.', '681170051', '51', 'SP Uji Produk', 'Dep Proses & Pengelolaan Energi', '3525-00  '),
('T535390', '641530', 'DELFIAN LUTFIANANDA, S.T.', '671B20051         ', '51', 'SP Pengendalian', 'Dep Produksi III', '3525-00  '),
('T535391', '824500', 'HERDY BRAMANTA, S.T.', '571110051', '51', 'SP Eng/PGT/ Estimator Proses', 'Dep Rancang Bangun', '3525-00  '),
('T535392', '641540', 'ALEX ZAINUL FANANI, S.T.', '671B20051          ', '51', 'SP Pengendalian', 'Dep Produksi III', '3525-00  '),
('T535393', '815900', 'RIZZA GHOZALI, S.T.', '662610051', '51', 'SP Perencanaan', 'Dep Produksi  II B', '3525-00  '),
('T535394', '632D10', 'TRIO BUDI AGUS SUSANTO, S. ST.', '682240051', '51', 'SP Shift KK Pabrik III', 'Dep Lingkungan & K3', '3525-00  '),
('T535395', '632600', 'FARID HERADI, S.T.', '583331000', '50', 'Karu Las Pelabuhan', 'Dep Pengelolaan Pelabuhan', '3525-00  '),
('T535396', '231100', 'RIZQI DWI KURNIANTO, S.T.', '683300051', '51', 'SP Inspeksi Teknik Pabrik III', 'Dep Inspeksi Teknik', '3525-00  '),
('T535397', '652300', 'ZAINURI AHMAD, S.T.', '574400051', '51', 'SP Dep Peralatan & Permesinan', 'Dep Peralatan & Permesinan', '3525-00  '),
('T535398', '634700', 'AGUNG ASMORO BAHAR, S.T.', '663B10051         ', '51', 'SP Candal Pemeliharaan II A', 'Dep Pemeliharaan II', '3525-00  '),
('T535399', '232100', 'NURMALA RUSYDI, S.T.', '683300051', '51', 'SP Inspeksi Teknik Pabrik III', 'Dep Inspeksi Teknik', '3525-00  ');

-- --------------------------------------------------------

--
-- Table structure for table `m_akses`
--

CREATE TABLE IF NOT EXISTS `m_akses` (
  `ID_AKSES` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `LEVEL_AKSES` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID_AKSES`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `m_akses`
--

INSERT INTO `m_akses` (`ID_AKSES`, `LEVEL_AKSES`) VALUES
(1, 'Super Administrator'),
(2, 'Administrator'),
(3, 'Karyawan'),
(4, 'Sekretaris');

-- --------------------------------------------------------

--
-- Table structure for table `m_group`
--

CREATE TABLE IF NOT EXISTS `m_group` (
  `ID_GROUP` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `PARENT_ID_GROUP` int(10) unsigned DEFAULT NULL,
  `LEVEL_GROUP` int(10) unsigned DEFAULT NULL,
  `NAMA_GROUP` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID_GROUP`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

--
-- Dumping data for table `m_group`
--

INSERT INTO `m_group` (`ID_GROUP`, `PARENT_ID_GROUP`, `LEVEL_GROUP`, `NAMA_GROUP`) VALUES
(1, 0, 1, 'BID. PEMASARAN'),
(2, 0, 1, 'BID. KEUANGAN'),
(3, 0, 1, 'BID. PRODUKSI'),
(4, 0, 1, 'BID. PEMELIHARAAN'),
(5, 0, 1, 'BID. TEKNIK, PENGEMBANGAN, PENGADAAN, DAN RISET'),
(6, 0, 1, 'BID. CORPORATE SECRETARY'),
(7, 0, 1, 'BID. SDM & UMUM'),
(8, 0, 1, 'BID. AUDIT'),
(9, 1, 2, 'PEMASARAN'),
(10, 1, 2, 'DISTRIBUSI'),
(11, 2, 2, 'KEUANGAN'),
(12, 2, 2, 'AKUNTANSI'),
(13, 2, 2, 'ANGGARAN'),
(14, 3, 2, 'PRODUKSI'),
(15, 3, 2, 'PROSES'),
(16, 3, 2, 'LAB DAN PENGELOLAAN ENERGI'),
(17, 3, 2, 'LK3'),
(18, 4, 2, 'PEMELIHARAAN PABRIK'),
(19, 4, 2, 'MEKANIK'),
(20, 4, 2, 'INSTRUMENT'),
(21, 4, 2, 'LISTRIK'),
(22, 4, 2, 'BENGKEL'),
(23, 4, 2, 'INSPEKSI'),
(24, 5, 2, 'RANCANG BANGUN'),
(25, 5, 2, 'JASA TEKNIK DAN KONSTRUKSI'),
(26, 5, 2, 'MANUFAKTUR / PERBENGKELAN'),
(27, 5, 2, 'PENGEMBANGAN'),
(28, 5, 2, 'TEKNOLOGI DAN INFORMASI'),
(29, 5, 2, 'PENGADAAN'),
(30, 5, 2, 'PENGELOLAAN PELABUHAN'),
(31, 5, 2, 'PENGELOLAAN PRASARANA DAN KAWASAN'),
(32, 5, 2, 'RISET'),
(33, 6, 2, 'KESEKRETARIATAN DAN HUKUM'),
(34, 6, 2, 'HUBUNGAN MASYARAKAT'),
(35, 6, 2, 'PERWAKILAN JAKARTA'),
(36, 6, 2, 'KEMITRAAN DAN BINA LINGKUNGAN'),
(37, 7, 2, 'PERSONALIA'),
(38, 7, 2, 'ORGANISASI & PROSEDUR'),
(39, 7, 2, 'PENDIDIKAN DAN PELATIHAN'),
(40, 7, 2, 'PELAYANAN UMUM'),
(41, 7, 2, 'KEAMANAN'),
(42, 8, 2, 'AUDIT INTERN'),
(43, 99, 2, 'UMUM/PENUNJANG');

-- --------------------------------------------------------

--
-- Table structure for table `m_group_komentar`
--

CREATE TABLE IF NOT EXISTS `m_group_komentar` (
  `ID_Group_Komentar` int(11) NOT NULL AUTO_INCREMENT,
  `ID_Group_Status` int(11) NOT NULL,
  `ID_user` int(11) NOT NULL,
  `KOMENTAR` varchar(200) NOT NULL,
  `Create_Date` datetime NOT NULL,
  `Last_Date` datetime NOT NULL,
  PRIMARY KEY (`ID_Group_Komentar`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `m_group_status`
--

CREATE TABLE IF NOT EXISTS `m_group_status` (
  `ID_Group_Status` int(11) NOT NULL AUTO_INCREMENT,
  `ID_GROUP` int(11) NOT NULL,
  `ID_User` int(11) NOT NULL,
  `User_status` varchar(200) NOT NULL,
  `Create_Date` datetime NOT NULL,
  `Last_Date` datetime NOT NULL,
  PRIMARY KEY (`ID_Group_Status`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `m_group_status`
--

INSERT INTO `m_group_status` (`ID_Group_Status`, `ID_GROUP`, `ID_User`, `User_status`, `Create_Date`, `Last_Date`) VALUES
(1, 42, 1, 'wow', '2014-09-28 16:57:00', '2014-09-28 16:57:00'),
(2, 9, 1, 'beuh', '2014-09-28 17:08:39', '2014-09-28 17:08:39');

-- --------------------------------------------------------

--
-- Table structure for table `m_komentar`
--

CREATE TABLE IF NOT EXISTS `m_komentar` (
  `ID_Komentar` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ID_Status` int(10) unsigned NOT NULL,
  `ID_user` int(10) NOT NULL,
  `KOMENTAR` varchar(50) DEFAULT NULL,
  `Create_Date` timestamp NULL DEFAULT NULL,
  `Last_Date` datetime DEFAULT NULL,
  PRIMARY KEY (`ID_Komentar`,`ID_Status`),
  KEY `M_KOMENTAR_FKIndex1` (`ID_Status`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `m_komentar`
--

INSERT INTO `m_komentar` (`ID_Komentar`, `ID_Status`, `ID_user`, `KOMENTAR`, `Create_Date`, `Last_Date`) VALUES
(1, 1, 2, 'bagus', '2014-08-23 17:00:00', '2014-08-24 00:00:00'),
(2, 1, 2, 'bagus2', '2014-08-23 17:00:00', '2014-08-24 00:00:00'),
(3, 1, 2, 'bagus3', '2014-08-23 17:00:00', '2014-08-24 00:00:00'),
(4, 1, 2, 'bagus4', '2014-08-23 17:00:00', '2014-08-24 00:00:00'),
(5, 1, 2, 'bagus5', '2014-08-23 17:00:00', '2014-08-24 00:00:00'),
(6, 1, 2, 'bagus6', '2014-08-23 17:00:00', '2014-08-24 00:00:00'),
(7, 2, 1, 'Biasa aja bagusnya', '2014-08-23 17:00:00', '2014-08-24 00:00:00'),
(8, 2, 1, 'Biasa aja bagusnya', '2014-08-23 17:00:00', '2014-08-24 00:00:00'),
(9, 2, 1, 'Biasa aja bagusnya', '2014-08-23 17:00:00', '2014-08-24 00:00:00'),
(10, 2, 1, 'Biasa aja bagusnya', '2014-08-23 17:00:00', '2014-08-24 00:00:00'),
(11, 2, 1, 'Biasa aja bagusnya', '2014-08-23 17:00:00', '2014-08-24 00:00:00'),
(12, 2, 1, 'Biasa aja bagusnya', '2014-08-23 17:00:00', '2014-08-24 00:00:00'),
(13, 2, 1, 'Biasa aja bagusnya', '2014-08-23 17:00:00', '2014-08-24 00:00:00'),
(14, 2, 1, 'Biasa aja bagusnya', '2014-08-23 17:00:00', '2014-08-24 00:00:00'),
(15, 2, 1, 'Biasa aja bagusnya', '2014-08-23 17:00:00', '2014-08-24 00:00:00'),
(16, 2, 1, 'Biasa aja bagusnya', '2014-08-23 17:00:00', '2014-08-24 00:00:00'),
(17, 2, 1, 'Biasa aja bagusnya', '2014-08-23 17:00:00', '2014-08-24 00:00:00'),
(18, 2, 1, 'Biasa aja bagusnya', '2014-08-23 17:00:00', '2014-08-24 00:00:00'),
(19, 2, 1, 'Biasa aja bagusnya', '2014-08-23 17:00:00', '2014-08-24 00:00:00'),
(20, 2, 1, 'Biasa aja bagusnya', '2014-08-23 17:00:00', '2014-08-24 00:00:00'),
(21, 2, 1, 'Biasa aja bagusnya', '2014-08-23 17:00:00', '2014-08-24 00:00:00'),
(22, 2, 1, 'Biasa aja bagusnya', '2014-08-23 17:00:00', '2014-08-24 00:00:00'),
(23, 5, 1, 'Coba dulu komentarnya', '2014-08-24 08:33:08', '2014-08-24 15:33:08'),
(24, 5, 1, 'Keren bro..', '2014-08-24 08:40:56', '2014-08-24 15:40:56'),
(25, 5, 1, 'sipp lah', '2014-08-24 08:41:07', '2014-08-24 15:41:07'),
(26, 2, 1, 'biasa bro', '2014-08-24 09:00:52', '2014-08-24 16:00:52'),
(27, 3, 1, 'wew', '2014-08-24 09:43:26', '2014-08-24 16:43:26');

-- --------------------------------------------------------

--
-- Table structure for table `m_status`
--

CREATE TABLE IF NOT EXISTS `m_status` (
  `ID_Status` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ID_user` int(10) unsigned NOT NULL,
  `User_status` varchar(50) DEFAULT NULL,
  `Create_Date` timestamp NULL DEFAULT NULL,
  `Last_Date` datetime DEFAULT NULL,
  PRIMARY KEY (`ID_Status`),
  KEY `M_STATUS_FKIndex1` (`ID_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `m_status`
--

INSERT INTO `m_status` (`ID_Status`, `ID_user`, `User_status`, `Create_Date`, `Last_Date`) VALUES
(1, 1, 'Ini status percobaan pertama', '2014-08-23 17:00:00', '2014-08-24 00:00:00'),
(2, 1, 'Ini status percobaan kedua', '2014-08-23 17:00:00', '2014-08-24 00:00:00'),
(3, 1, 'Ini status percobaan ketiga', '2014-08-23 17:00:00', '2014-08-24 00:00:00'),
(4, 1, 'Ini status percobaan ketiga', '2014-08-23 17:00:00', '2014-08-24 00:00:00'),
(5, 1, 'Ini status percobaan keempat', '2014-08-23 17:00:00', '2014-08-24 00:00:00'),
(6, 2, 'Ini status pertama saya', '2014-08-24 14:07:02', '2014-08-24 21:07:02');

-- --------------------------------------------------------

--
-- Table structure for table `m_unit_kerja`
--

CREATE TABLE IF NOT EXISTS `m_unit_kerja` (
  `KODE_UNIT_KERJA` varchar(15) NOT NULL,
  `CONTENT_UNIT_KERJA` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`KODE_UNIT_KERJA`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_unit_kerja`
--

INSERT INTO `m_unit_kerja` (`KODE_UNIT_KERJA`, `CONTENT_UNIT_KERJA`) VALUES
('231100', 'Staf Audit Operasional'),
('232100', 'Staf Audit Administrasi'),
('514110A   ', 'Staf Sistem Analyst / Pro'),
('521524A ', 'Ru Listrik/Instrument Rum'),
('521600A', 'Staf Dep Prasarana Pabrik'),
('524400A', 'Staf Dep. Peralatan & Per'),
('525110A', 'Staf Eng/PGT/Estimator Pr'),
('533010A', 'Staf Dep Pengadaan'),
('534010A', 'Staf Dep Perencanaan & Gu'),
('5342A1A', 'Ru Gudang Bhn Baku & Brg '),
('535010A   ', 'Staf Dep Pengelolaan Pela'),
('535325A', 'Ru Instrumen Conveyor FGU'),
('535331A', 'Ru Las Pelabuhan'),
('632600', 'Staf Dp. Har II'),
('632D10', 'Staf Candal Pemeliharaan '),
('634610', 'Staf. Perencanaan'),
('634700', 'Staf Dep Produksi II B'),
('641020', 'Staf Dep Produksi III'),
('641530', 'Staf Perencanaan & Pengan'),
('641540', 'Staf Pengendalian'),
('651240', 'Staf Shift KK Pabrik III'),
('652300', 'Staf Inspeksi Teknik Pabr'),
('653170', 'Staf Uji Produk'),
('653500', 'Staf Evaluasi Proses'),
('815610', 'Staf Sisdur'),
('815900', 'Staf Pengembangan Prosedu'),
('824400', 'Staf Perijinan, Adm. Pert'),
('824500', 'Staf P-janjian/Kntrak, No'),
('827100', 'Staf Pengelolaan Anak Per'),
('832010', 'Staf Dep Manajemen Risiko'),
('A12411', 'Ru Perencanaan Distribusi'),
('A21520', 'Staf  PPRW Sumatera Bagia'),
('A23110    ', 'Staf PPKor Wilayah Sumate'),
('A32250    ', 'Staf Kerjasama Petroganik'),
('A52310', 'Staf Anlap Manajemen');

-- --------------------------------------------------------

--
-- Table structure for table `m_user`
--

CREATE TABLE IF NOT EXISTS `m_user` (
  `ID_user` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `NIK` varchar(50) NOT NULL,
  `KODE_UNIT_KERJA` int(10) unsigned NOT NULL,
  `ID_GROUP` int(10) unsigned NOT NULL,
  `ID_AKSES` int(10) unsigned NOT NULL,
  `USERNAME` varchar(50) DEFAULT NULL,
  `PASSWORD_USER` varchar(50) DEFAULT NULL,
  `GAMBAR_PROFIL` varchar(200) DEFAULT NULL,
  `GAMBAR_PROFIL_KECIL` varchar(200) DEFAULT NULL,
  `ARRAY_TEMAN` varchar(75) DEFAULT NULL,
  `PERMINTAAN_TEMAN` int(10) unsigned DEFAULT NULL,
  `IS_AKTIF` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`ID_user`,`NIK`,`KODE_UNIT_KERJA`,`ID_GROUP`,`ID_AKSES`),
  KEY `User_2_FKIndex1` (`NIK`,`KODE_UNIT_KERJA`),
  KEY `M_USER_FKIndex2` (`ID_GROUP`),
  KEY `M_USER_FKIndex3` (`ID_AKSES`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `m_user`
--

INSERT INTO `m_user` (`ID_user`, `NIK`, `KODE_UNIT_KERJA`, `ID_GROUP`, `ID_AKSES`, `USERNAME`, `PASSWORD_USER`, `GAMBAR_PROFIL`, `GAMBAR_PROFIL_KECIL`, `ARRAY_TEMAN`, `PERMINTAAN_TEMAN`, `IS_AKTIF`) VALUES
(1, 'T535370', 231100, 1, 1, 'T535370', '62379f894d4b64aa287812a606d2adffe6ce3be7', 'users/login-img27.jpg', 'users/login-img27_thumb.jpg', NULL, NULL, NULL),
(2, 'T535371', 231100, 1, 2, 'T535371', '264391b3ed2f071da74ac5dde89effc5f841bff8', 'users/', 'users/', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pendidikan`
--

CREATE TABLE IF NOT EXISTS `pendidikan` (
  `ID_pendidikan` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `NIK` varchar(50) NOT NULL,
  `KODE_UNIT_KERJA` varchar(50) NOT NULL,
  `EDUCATION_LEVEL_NO` varchar(50) DEFAULT NULL,
  `EDUCATION_LEVEL_NAME` varchar(50) DEFAULT NULL,
  `EDUCATION_FIELD_NO` varchar(50) DEFAULT NULL,
  `EDUCATION_FIELD_NAME` varchar(50) DEFAULT NULL,
  `LOCATION` varchar(50) DEFAULT NULL,
  `START_YEAR` varchar(50) DEFAULT NULL,
  `END_YEAR` varchar(50) DEFAULT NULL,
  `G_P_A` varchar(50) DEFAULT NULL,
  `ACHIEVEMENT` varchar(50) DEFAULT NULL,
  `REMARK` varchar(50) DEFAULT NULL,
  `EDU_INSTITUTION_SEQ_NO` varchar(50) DEFAULT NULL,
  `EDU_INSTITUTION_NAME` varchar(50) DEFAULT NULL,
  `EDUCATION_LVL_RECEIVED` varchar(50) DEFAULT NULL,
  `PREFERED_EDUCATION` varchar(50) DEFAULT NULL,
  `ROWVERSION` varchar(50) DEFAULT NULL,
  `ANIK_BARU` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID_pendidikan`,`NIK`,`KODE_UNIT_KERJA`),
  KEY `Pendidikan_FKIndex1` (`NIK`,`KODE_UNIT_KERJA`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pengalaman_kerja`
--

CREATE TABLE IF NOT EXISTS `pengalaman_kerja` (
  `ID_pengalaman_kerja` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `NIK` varchar(50) NOT NULL,
  `KODE_UNIT_KERJA` varchar(50) NOT NULL,
  `NO_SK` varchar(50) DEFAULT NULL,
  `TGL_SK` date DEFAULT NULL,
  `MA_TMT` varchar(50) DEFAULT NULL,
  `MKT_GOL` varchar(50) DEFAULT NULL,
  `MKB_GOL` varchar(50) DEFAULT NULL,
  `KODE_UPDATE` varchar(50) DEFAULT NULL,
  `NM_JBT` varchar(50) DEFAULT NULL,
  `NM_PL` varchar(50) DEFAULT NULL,
  `NM_RU` varchar(50) DEFAULT NULL,
  `NM_SI` varchar(50) DEFAULT NULL,
  `NM_BAG` varchar(50) DEFAULT NULL,
  `NM_DEP` varchar(50) DEFAULT NULL,
  `NM_KOM` varchar(50) DEFAULT NULL,
  `NM_DIR` varchar(50) DEFAULT NULL,
  `KETERANGAN` varchar(50) DEFAULT NULL,
  `TIMESTAMP` datetime DEFAULT NULL,
  PRIMARY KEY (`ID_pengalaman_kerja`,`NIK`,`KODE_UNIT_KERJA`),
  KEY `Pengalaman_Kerja_FKIndex1` (`NIK`,`KODE_UNIT_KERJA`),
  KEY `Pengalaman_Kerja_FKIndex2` (`KODE_UNIT_KERJA`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `permintaan_group`
--

CREATE TABLE IF NOT EXISTS `permintaan_group` (
  `ID_permintaan` int(11) NOT NULL AUTO_INCREMENT,
  `ID_GROUP` int(11) NOT NULL,
  `ID_user` int(11) NOT NULL,
  `Create_Date` datetime NOT NULL,
  `Last_Date` datetime NOT NULL,
  PRIMARY KEY (`ID_permintaan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `permintaan_group`
--

INSERT INTO `permintaan_group` (`ID_permintaan`, `ID_GROUP`, `ID_user`, `Create_Date`, `Last_Date`) VALUES
(1, 9, 1, '2014-09-28 18:31:17', '2014-09-28 18:31:17'),
(2, 10, 1, '2014-09-28 18:42:06', '2014-09-28 18:42:06'),
(3, 14, 1, '2014-09-28 18:42:48', '2014-09-28 18:42:48');

-- --------------------------------------------------------

--
-- Table structure for table `permintaan_teman`
--

CREATE TABLE IF NOT EXISTS `permintaan_teman` (
  `ID_user` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ID_User_Request` varchar(50) NOT NULL,
  `ID_User_Received` varchar(50) DEFAULT NULL,
  `Create_Date` timestamp NULL DEFAULT NULL,
  `Last_Update` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`ID_user`),
  KEY `Permintaan_Teman_FKIndex1` (`ID_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE IF NOT EXISTS `pesan` (
  `ID_Pesan` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ID_user` int(10) unsigned NOT NULL,
  `Pesan` varchar(200) DEFAULT NULL,
  `Tgl` timestamp NULL DEFAULT NULL,
  `Subject` varchar(100) DEFAULT NULL,
  `ID_Pengirim` int(10) unsigned DEFAULT NULL,
  `ID_Penerima` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`ID_Pesan`),
  KEY `Pesan_FKIndex1` (`ID_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `training`
--

CREATE TABLE IF NOT EXISTS `training` (
  `ID_training` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `NIK` varchar(50) NOT NULL,
  `KODE_UNIT_KERJA` varchar(50) NOT NULL,
  `TRAINING_EVENT_ID` varchar(50) DEFAULT NULL,
  `COURSE_ID` varchar(50) DEFAULT NULL,
  `NAMA_TRAINING` varchar(50) DEFAULT NULL,
  `TOPIK` varchar(50) DEFAULT NULL,
  `DURASI` varchar(50) DEFAULT NULL,
  `START_DATE` date DEFAULT NULL,
  `END_DATE` date DEFAULT NULL,
  `TEMPAT` varchar(50) DEFAULT NULL,
  `PENYELENGGARA` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID_training`,`NIK`,`KODE_UNIT_KERJA`),
  KEY `Training_FKIndex1` (`NIK`,`KODE_UNIT_KERJA`),
  KEY `Training_FKIndex2` (`KODE_UNIT_KERJA`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `training`
--

INSERT INTO `training` (`ID_training`, `NIK`, `KODE_UNIT_KERJA`, `TRAINING_EVENT_ID`, `COURSE_ID`, `NAMA_TRAINING`, `TOPIK`, `DURASI`, `START_DATE`, `END_DATE`, `TEMPAT`, `PENYELENGGARA`) VALUES
(1, 'T535370', '231100', 'A4080000-1', 'A4080001', 'ANALISA VIBRASI', 'INVESTASI ALAT VIBRATION ANALYZER & SPM', '14', '2014-01-29', '2014-01-30', 'GRESIK', 'PT Semen Gresik'),
(2, 'T535372', '535325A', 'A7010000-1', 'A7010001', 'KOMPETENSI', 'PELATIHAN PENYUSUNAN MATERI UJI KOMPETENSI', '32', '2014-02-18', '2014-02-21', 'GRESIK', 'BNSP (BADAN NASIONAL SERTIFIKASI PROFESI)'),
(3, 'T535377', '535331A', '2030000-5', '2030002', 'KOMPETENSI', 'WORKSHOP PENYUSUNAN MATERI UJI KOMPETENSI', '32', '2014-01-27', '2014-01-30', 'GRESIK', 'BNSP (BADAN NASIONAL SERTIFIKASI PROFESI)'),
(4, 'T535376', '521524A ', '2280000-75', '2280056', 'SISTEM MANAJEMEN KUALITAS', 'SHARING KNOWLEDGE SIP3', '35', '2013-12-16', '2013-12-20', 'GRESIK', 'DIKLAT PETROKIMIA GRESIK'),
(5, 'T535375', 'A12411', '5030000-24', '5030026', 'PENELITIAN DAN UJI APLIKASI PRODUK', 'SAMPLING PUPUK PETROGANIK', '14', '2013-11-11', '2013-11-12', 'GRESIK', 'DIKLAT PETROKIMIA GRESIK'),
(6, 'T535374', 'A21520', 'A7010000', 'A7010001', 'KOMPETENSI', 'PELATIHAN PENYUSUNAN MATERI UJI KOMPETENSI', '32', '2014-02-10', '2014-02-13', 'GRESIK', 'BNSP (BADAN NASIONAL SERTIFIKASI PROFESI)'),
(7, 'T535373', 'A52310', '4100000-12', '4100015', 'PENGELOLAAN RESIKO', 'ASSESOR INTERNAL RISK MATURITY LEVEL ASSESMENT', '21', '2013-12-18', '2013-12-20', 'MALANG', 'BPKP PROPINSI JAWA TIMUR'),
(8, 'T535399', '232100', '1060000-64', '1060051', 'SERTIFIKASI', 'PELATIHAN & SERTIFIKASI ISO 31000 STANDAR INTERNAT', '43', '2013-09-30', '2013-10-05', 'Bandung', 'CENTER FOR RISK MANAGEMENT STUDIES (CRMS)'),
(9, 'T535396', '231100', '4070000-20', '4070015', 'MANAJEMEN KEUANGAN', 'FINANCE FOR NON FINANCE', '14', '2013-02-18', '2013-02-19', 'GRESIK', 'LPPM UBAYA'),
(10, 'T535394', '632D10', '1010000-51', '1010009', 'PENGAWASAN ( AUDIT INTERN )', 'MENULIS LAPORAN INTERNAL AUDIT YANG EFEKTIF', '14', '2013-10-03', '2013-10-04', 'Jakarta', 'YAYASAN PENDIDIKAN INTERNAL AUDIT'),
(11, 'T535384', '533010A', '', '', '', '', '', '0000-00-00', '0000-00-00', '', ''),
(12, 'T535371', '534010A', '', '', '', '', '', '0000-00-00', '0000-00-00', '', ''),
(13, 'T535386', '521600A', '', '', '', '', '', '0000-00-00', '0000-00-00', '', ''),
(14, 'T535398', '634700', '', '', '', '', '', '0000-00-00', '0000-00-00', '', ''),
(15, 'T535380', '641020', '', '', '', '', '', '0000-00-00', '0000-00-00', '', ''),
(16, 'T535379', '524400A', '', '', '', '', '', '0000-00-00', '0000-00-00', '', ''),
(17, 'T535395', '632600', '', '', '', '', '', '0000-00-00', '0000-00-00', '', ''),
(18, 'T535381', '632600', '', '', '', '', '', '0000-00-00', '0000-00-00', '', ''),
(19, 'T535382', '525110A', '', '', '', '', '', '0000-00-00', '0000-00-00', '', ''),
(20, 'T535383', '653500', '', '', '', '', '', '0000-00-00', '0000-00-00', '', ''),
(21, 'T535397', '652300', '', '', '', '', '', '0000-00-00', '0000-00-00', '', ''),
(22, 'T535385', 'A32250    ', '', '', '', '', '', '0000-00-00', '0000-00-00', '', ''),
(23, 'T535378', '827100', '', '', '', '', '', '0000-00-00', '0000-00-00', '', ''),
(24, 'T535393', '815900', '', '', '', '', '', '0000-00-00', '0000-00-00', '', ''),
(25, 'T535392', '641540', '', '', '', '', '', '0000-00-00', '0000-00-00', '', ''),
(26, 'T535390', '641530', '', '', '', '', '', '0000-00-00', '0000-00-00', '', ''),
(27, 'T535389', '824400', '', '', '', '', '', '0000-00-00', '0000-00-00', '', ''),
(28, 'T535391', '824500', '', '', '', '', '', '0000-00-00', '0000-00-00', '', ''),
(29, 'T535388', 'A23110    ', '', '', '', '', '', '0000-00-00', '0000-00-00', '', ''),
(30, 'T535387', '651240', '', '', '', '', '', '0000-00-00', '0000-00-00', '', ''),
(31, '', '815610', '', '', '', '', '', '0000-00-00', '0000-00-00', '', ''),
(32, '', '514110A   ', '', '', '', '', '', '0000-00-00', '0000-00-00', '', ''),
(33, '', '653170', '', '', '', '', '', '0000-00-00', '0000-00-00', '', ''),
(34, '', '634610', '', '', '', '', '', '0000-00-00', '0000-00-00', '', ''),
(35, '', '832010', '', '', '', '', '', '0000-00-00', '0000-00-00', '', ''),
(36, '', '535010A   ', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_album`
--

CREATE TABLE IF NOT EXISTS `user_album` (
  `ID_User_Album` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ID_user` int(10) unsigned NOT NULL,
  `Nama_Foto` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID_User_Album`,`ID_user`),
  KEY `USER_ALBUM_FKIndex1` (`ID_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
