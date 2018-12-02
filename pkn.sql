-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 01, 2018 at 07:32 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pkn`
--

-- --------------------------------------------------------

--
-- Table structure for table `db_bahagian`
--

DROP TABLE IF EXISTS `db_bahagian`;
CREATE TABLE IF NOT EXISTS `db_bahagian` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `flag` tinyint(4) NOT NULL,
  `id_pejabat` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_bahagian`
--

INSERT INTO `db_bahagian` (`id`, `nama`, `flag`, `id_pejabat`) VALUES
(1, 'TIADA', 0, 1),
(2, 'TIADA', 0, 2),
(3, 'BAHAGIAN PENGURUSAN KEWANGAN', 0, 2),
(4, 'BAHAGIAN KHIDMAT PENGURUSAN', 0, 2),
(5, 'BAHAGIAN PERKHIDMATAN DAN OPERASI PERAKAUNAN', 0, 3),
(6, 'BAHAGIAN PENGURUSAN DANA DAN TERIMAAN', 0, 3),
(7, 'BAHAGIAN PERAKAUNAN KOS DAN ASET', 0, 3),
(8, 'TIADA', 0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `db_gred`
--

DROP TABLE IF EXISTS `db_gred`;
CREATE TABLE IF NOT EXISTS `db_gred` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `susunan` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_gred`
--

INSERT INTO `db_gred` (`id`, `nama`, `susunan`) VALUES
(1, 'JUSA A', 1),
(2, 'JUSA B', 2),
(3, 'JUSA C', 3),
(4, 'M54', 4),
(5, 'WA54', 4),
(6, 'M52', 5),
(7, 'WA48', 6),
(8, 'F44', 7),
(9, 'M44', 7),
(10, 'WA44', 7),
(11, 'F41', 8),
(12, 'WA41', 8),
(13, 'W36', 9),
(14, 'FA32', 10),
(15, 'FA32', 10),
(16, 'N32', 10),
(17, 'W32', 10),
(18, 'FA29', 11),
(19, 'N29', 11),
(20, 'W29 (KUP)', 11),
(21, 'W26', 12),
(22, 'N22', 13),
(23, 'N22 (KUP)', 13),
(24, 'W22', 13),
(25, 'W22 (KUP)', 13),
(26, 'FT19', 14),
(27, 'N19', 14),
(28, 'W19', 14),
(29, 'H11', 15),
(30, 'N11', 15);

-- --------------------------------------------------------

--
-- Table structure for table `db_jawatan`
--

DROP TABLE IF EXISTS `db_jawatan`;
CREATE TABLE IF NOT EXISTS `db_jawatan` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_jawatan`
--

INSERT INTO `db_jawatan` (`id`, `nama`) VALUES
(1, 'Akauntan'),
(2, 'Juruteknik Komputer'),
(3, 'Pegawai Tadbir dan Diplomatik'),
(4, 'Pegawai Teknologi Maklumat'),
(5, 'Pemandu Kenderaan'),
(6, 'Pembantu Akauntan'),
(7, 'Pembantu Operasi'),
(8, 'Pembantu Tadbir (Kewangan)'),
(9, 'Pembantu Tadbir (P/O)'),
(10, 'Pembantu Tadbir (Perkeranian/Operasi)'),
(11, 'Penolong Akauntan'),
(12, 'Penolong Pegawai Tadbir'),
(13, 'Penolong Pegawai Teknologi Maklumat'),
(14, 'Setiausaha Pejabat');

-- --------------------------------------------------------

--
-- Table structure for table `db_kenderaan`
--

DROP TABLE IF EXISTS `db_kenderaan`;
CREATE TABLE IF NOT EXISTS `db_kenderaan` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `nama_pemohon` char(12) NOT NULL,
  `unit` tinyint(4) NOT NULL,
  `tujuan` varchar(100) NOT NULL,
  `bil_penumpang` tinyint(4) NOT NULL,
  `tarikh_bertolak` date NOT NULL,
  `tarikh_kembali` date NOT NULL,
  `waktu_bertolak` tinyint(4) NOT NULL,
  `waktu_kembali` tinyint(4) NOT NULL,
  `status_mohon` tinyint(4) NOT NULL,
  `tarikh_dari` date NOT NULL,
  `tarikh_hingga` date NOT NULL,
  `waktu_dari` tinyint(4) NOT NULL,
  `waktu_hingga` tinyint(4) NOT NULL,
  `tarikh_mohon` date NOT NULL,
  `nama_pemandu` tinyint(4) NOT NULL DEFAULT '0',
  `no_kenderaan` tinyint(4) NOT NULL DEFAULT '0',
  `butiran` varchar(100) DEFAULT NULL,
  `no_permohonan` smallint(6) NOT NULL DEFAULT '0',
  `pic_status` char(12) DEFAULT NULL,
  `tarikh_status` date DEFAULT NULL,
  `tstamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `pejabat` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_kenderaan`
--

INSERT INTO `db_kenderaan` (`id`, `nama_pemohon`, `unit`, `tujuan`, `bil_penumpang`, `tarikh_bertolak`, `tarikh_kembali`, `waktu_bertolak`, `waktu_kembali`, `status_mohon`, `tarikh_dari`, `tarikh_hingga`, `waktu_dari`, `waktu_hingga`, `tarikh_mohon`, `nama_pemandu`, `no_kenderaan`, `butiran`, `no_permohonan`, `pic_status`, `tarikh_status`, `tstamp`, `pejabat`) VALUES
(1, '740709086176', 2, 'IPOH', 2, '2018-03-01', '2018-03-01', 1, 4, 4, '2018-03-01', '2018-03-01', 1, 4, '2018-03-01', 6, 1, '', 1, '701001085731', '2018-03-01', '2018-03-01 07:07:56', 2);

-- --------------------------------------------------------

--
-- Table structure for table `db_no_kenderaan`
--

DROP TABLE IF EXISTS `db_no_kenderaan`;
CREATE TABLE IF NOT EXISTS `db_no_kenderaan` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `flag` tinyint(4) NOT NULL,
  `pejabat` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_no_kenderaan`
--

INSERT INTO `db_no_kenderaan` (`id`, `nama`, `flag`, `pejabat`) VALUES
(1, 'ABC 1234', 0, 0),
(2, 'AKU 1305', 0, 0),
(3, 'wa0990 ioio rgrtre', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `db_pejabat`
--

DROP TABLE IF EXISTS `db_pejabat`;
CREATE TABLE IF NOT EXISTS `db_pejabat` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `flag` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_pejabat`
--

INSERT INTO `db_pejabat` (`id`, `nama`, `flag`) VALUES
(1, 'PEGAWAI KEWANGAN NEGERI', 0),
(2, 'PEJABAT KEWANGAN NEGERI', 0),
(3, 'PEJABAT BENDAHARI NEGERI', 0);

-- --------------------------------------------------------

--
-- Table structure for table `db_pemandu`
--

DROP TABLE IF EXISTS `db_pemandu`;
CREATE TABLE IF NOT EXISTS `db_pemandu` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `no_kp` char(12) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `flag` tinyint(4) NOT NULL,
  `pejabat` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_pemandu`
--

INSERT INTO `db_pemandu` (`id`, `no_kp`, `nama`, `flag`, `pejabat`) VALUES
(1, '860721386135', 'Mohd Fuad bin Nordin', 0, 1),
(2, '770611085105', 'Sivamany a/l Krishnan', 0, 2),
(3, '830605085207', 'Hassanul Bulkhiah bin Mahayuddin', 0, 3),
(4, '787878', 'abc', 1, 0),
(5, '645645645', 'frg', 1, 0),
(6, '760831086119', 'FAAIB JAAFAR', 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `db_unit`
--

DROP TABLE IF EXISTS `db_unit`;
CREATE TABLE IF NOT EXISTS `db_unit` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `flag` tinyint(4) NOT NULL,
  `id_bahagian` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_unit`
--

INSERT INTO `db_unit` (`id`, `nama`, `flag`, `id_bahagian`) VALUES
(1, 'TIADA', 0, 1),
(2, 'TIADA', 0, 2),
(3, 'TIADA', 0, 3),
(4, 'UNIT BAJET DAN PINJAMAN', 0, 3),
(5, 'UNIT PELABURAN', 0, 3),
(6, 'UNIT PEROLEHAN DAN PENGURUSAN ASET', 0, 3),
(7, 'UNIT HASIL', 0, 3),
(8, 'UNIT PENTADBIRAN DAN PENGURUSAN SUMBER MANUSIA', 0, 4),
(9, 'UNIT PENGURUSAN KEWANGAN DAN PEMANTAUAN AUDIT', 0, 4),
(10, 'UNIT KOMPUTER', 0, 4),
(11, 'UNIT PENGURUSAN DATA', 0, 4),
(12, 'TIADA', 0, 8),
(13, 'TIADA', 0, 5),
(14, 'UNIT AKAUN', 0, 5),
(15, 'UNIT BAYARAN', 0, 5),
(16, 'UNIT EMOLUMEN', 0, 5),
(17, 'UNIT PERUNDINGAN, NAZIRAN LATIHAN PERAKAUNAN', 0, 5),
(18, 'UNIT AUDIT TUNAI DAN PELUPUSAN DOKUMEN KEWANGAN', 0, 5),
(19, 'TIADA', 0, 6),
(20, 'UNIT DANA DAN TERIMAAN', 0, 6),
(21, 'UNIT DUTI', 0, 6),
(22, 'TIADA', 0, 7),
(23, 'UNIT ANALISA KEWANGAN DAN PERAKAUNAN KOS', 0, 7),
(24, 'UNIT PERAKAUNAN ASET DAN SUMBER', 0, 7);

-- --------------------------------------------------------

--
-- Table structure for table `stok_category`
--

DROP TABLE IF EXISTS `stok_category`;
CREATE TABLE IF NOT EXISTS `stok_category` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stok_category`
--

INSERT INTO `stok_category` (`id`, `name`) VALUES
(1, 'ALAT TULIS'),
(2, 'BEKALAN PEJABAT'),
(3, 'BAHAN PERCETAKAN'),
(4, 'DOKUMEN CETAKAN TERKAWAL'),
(5, 'ALAT TULIS KOMPUTER'),
(6, 'BAHAN & ALAT PENCUCIAN'),
(7, 'BEKALAN MAKANAN');

-- --------------------------------------------------------

--
-- Table structure for table `stok_item`
--

DROP TABLE IF EXISTS `stok_item`;
CREATE TABLE IF NOT EXISTS `stok_item` (
  `id` smallint(4) NOT NULL AUTO_INCREMENT,
  `id_category` tinyint(4) NOT NULL,
  `name` varchar(100) NOT NULL,
  `pics` varchar(50) NOT NULL,
  `kod_kawalan` smallint(6) NOT NULL,
  `kod_barang` varchar(10) NOT NULL,
  `description` varchar(100) NOT NULL,
  `publish` char(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=230 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stok_item`
--

INSERT INTO `stok_item` (`id`, `id_category`, `name`, `pics`, `kod_kawalan`, `kod_barang`, `description`, `publish`) VALUES
(1, 1, 'PENSIL', 'a1001.jpg', 1, 'A1/001', '', 'Y'),
(2, 1, 'BALL PEN (MERAH)', 'a2001.jpg', 2, 'A2/001', '', 'Y'),
(3, 1, 'BALL PEN( HITAM)', 'a2002.jpg', 3, 'A2/002', '', 'Y'),
(4, 1, 'BALL PEN (BIRU)', 'a2003.jpg', 4, 'A2/003', '', 'Y'),
(5, 1, 'BALL PEN (UNGU)', 'a2004.jpg', 5, 'A2/004', '', 'Y'),
(6, 1, 'EXPERT GEL PEN (HITAM)', 'a3001.jpg', 6, 'A3/001', '', 'Y'),
(7, 1, 'PILOT BALL LINER (HITAM)', 'a4001.jpg', 7, 'A4/001', '', 'Y'),
(8, 1, 'PEN PILOT G-2 - 0.5mm (HITAM)', 'a5001.jpg', 8, 'A5/001', '', 'Y'),
(9, 1, 'PEN PILOT G-2 - 0.7mm (HITAM)', 'a5002.jpg', 207, 'A5/002', '', 'Y'),
(10, 1, 'PEN PILOT G-3 - 1.0 mm (HITAM)', 'a5002.jpg', 9, 'A5/002', '', 'Y'),
(11, 1, 'PEN PILOT G.3 (RED)', 'a5003.jpg', 10, 'A5/003', '', 'Y'),
(12, 1, 'REFILL PILOT G.2 - 1.0mm (HITAM)', 'a6001.jpg', 11, 'A6/001', '', 'Y'),
(13, 1, 'REFILL PILOT G.2 - 0.5mm (HITAM)', 'image0.jpg', 12, 'A6/002', '', 'Y'),
(14, 1, 'REFILL PILOT G.2 - 0.7mm (HITAM)', 'image0.jpg', 13, 'A6/003', '', 'Y'),
(15, 1, 'REFILL PILOT G.3 - 1.0mm (HITAM)', 'image0.jpg', 14, 'A6/004', '', 'Y'),
(16, 1, 'MARKER PEN - WHITEBOARD', 'a7001.jpg', 15, 'A7/001', '', 'Y'),
(17, 1, 'MARKER PEN - PERMANENT', 'a7002.jpg', 16, 'A7/002', '', 'Y'),
(18, 1, 'PEN KAUNTER', 'a8001.jpg', 17, 'A8/001', '', 'Y'),
(19, 1, 'HIGLIGTERPEN', 'a9001.jpg', 18, 'A9/001', '', 'Y'),
(20, 1, 'LIQUID PAPER', 'a10001.jpg', 19, 'A10/001', '', 'Y'),
(21, 1, 'GETAH PEMADAM PENSIL', 'a11001.jpg', 20, 'A11/001', '', 'Y'),
(22, 1, 'PEMBARIS PANJANG', 'image0.jpg', 21, 'A12/001', '', 'Y'),
(23, 1, 'PEMBARIS PENDEK', 'image0.jpg', 22, 'A12/002', '', 'Y'),
(24, 1, 'PISAU', 'a13001.jpg', 23, 'A13/001', '', 'Y'),
(25, 1, 'GUNTING', 'a14001.jpg', 24, 'A14/001', '', 'Y'),
(26, 1, 'STAPLER KECIL', 'a15001.jpg', 25, 'A15/001', '', 'Y'),
(27, 1, 'STAPLER BESAR', 'a15002.jpg', 26, 'A15/002', '', 'Y'),
(28, 1, 'STAPLER REMOVER', 'a16001.jpg', 27, 'A16/001', '', 'Y'),
(29, 1, 'DAWAI KOKOT NO.3', 'a17001.jpg', 28, 'A17/001', '', 'Y'),
(30, 1, 'DAWAI KOKOT NO.10', 'a17002.jpg', 29, 'A17/002', '', 'Y'),
(31, 1, 'CALCULATOR - 12 DIGITS', 'a18001.jpg', 30, 'A18/001', '', 'Y'),
(32, 1, 'ONE HOLE PUNCHER', 'a19001.jpg', 31, 'A19/001', '', 'Y'),
(33, 1, 'TWO HOLE PUNCHER', 'a19002.jpg', 32, 'A19/002', '', 'Y'),
(34, 1, 'DATE STAMP', 'a20001.jpg', 33, 'A20/001', '', 'Y'),
(35, 1, 'STAMP PAD (MERAH)', 'a21001.jpg', 34, 'A21/001', '', 'Y'),
(36, 1, 'STAMP PAD (BIRU)', 'a21002.jpg', 35, 'A21/002', '', 'Y'),
(37, 1, 'STAMP PAD (HITAM)', 'a21003.jpg', 36, 'A21/003', '', 'Y'),
(38, 1, 'REFILL STAMP PAD (BIRU)', 'a22001.jpg', 37, 'A22/001', '', 'Y'),
(39, 1, 'REFILL STAMP PAD (MERAH)', 'a22002.jpg', 208, 'A22/002', '', 'Y'),
(40, 1, 'REFILL MARKER PEN', 'a23001.jpg', 38, 'A23/001', '', 'Y'),
(41, 1, 'PAPER CLIP - PENGUIN', 'a24001.jpg', 39, 'A24/001', '', 'Y'),
(42, 1, 'PAPER CLIP50mm - PENGUIN', 'a24002.jpg', 40, 'A24/002', '', 'Y'),
(43, 1, 'BINDER CLIPS (25MM)', 'a25001.jpg', 41, 'A25/001', '', 'Y'),
(44, 1, 'BINDER CLIPS (32MM)', 'a25002.jpg', 42, 'A25/002', '', 'Y'),
(45, 1, 'BINDER CLIPS (41MM)', 'a25003.jpg', 43, 'A25/003', '', 'Y'),
(46, 1, 'BINDER CLIPS (51MM)', 'a25004.jpg', 44, 'A25/004', '', 'Y'),
(47, 1, 'TALI HIJAU (5T)', 'a26001.jpg', 45, 'A26/001', '', 'Y'),
(48, 1, 'TALI HIJAU (7T)', 'a26002.jpg', 46, 'A26/002', '', 'Y'),
(49, 1, 'TALI HIJAU (10T)', 'a26003.jpg', 47, 'A26/003', '', 'Y'),
(50, 1, 'TALI PUTIH (COTTON TAPE)', 'a27001.jpg', 48, 'A27/001', '', 'Y'),
(51, 1, 'TALI BENANG', 'a28002.jpg', 49, 'A28/002', '', 'Y'),
(52, 1, 'GETAH KECIL', 'a29001.jpg', 50, 'A29/001', '', 'Y'),
(53, 1, 'GETAH BESAR', 'a29002.jpg', 51, 'A29/002', '', 'Y'),
(54, 1, 'WHITE BOARD ERASE', 'a30001.jpg', 52, 'A30/001', '', 'Y'),
(55, 1, 'PIN TEKAN', 'a31001.jpg', 53, 'A31/001', '', 'Y'),
(56, 1, 'MAGNETIC WHITE BOARD', 'image0.jpg', 54, 'A32/001', '', 'Y'),
(57, 1, 'STICKY TAG NOTE (WARNA)', 'a33001.jpg', 55, 'A33/001', '', 'Y'),
(58, 1, 'STICK-IT NOTE KUNING', 'a34001.jpg', 56, 'A34/001', '', 'Y'),
(59, 1, 'MEMO PAD', 'a35001.jpg', 57, 'A35/001', '', 'Y'),
(60, 1, 'SHORTHAND BOOK', 'a36001.jpg', 58, 'A36/001', '', 'Y'),
(61, 1, 'FOOLSCAPE BOOK ', 'image0.jpg', 59, 'A37/001', '', 'Y'),
(62, 1, 'FOOLSCAPE BOOK (PANJANG)', 'image0.jpg', 60, 'A37/002', '', 'Y'),
(63, 1, 'INDEX DIVIDER', 'image0.jpg', 61, 'A38/001', '', 'Y'),
(64, 1, 'CONSTRUCTION PAPER', 'image0.jpg', 62, 'A39/001', '', 'Y'),
(65, 1, 'CONQUEROR PAPER A4 100gsm - CREAM (WALES) ', 'image0.jpg', 63, 'A40/001', '', 'Y'),
(66, 1, 'FANCY CARD - 160gsm - PUTIH ', 'image0.jpg', 64, 'A41/001', '', 'Y'),
(67, 1, 'FANCY CARD - 160gsm - LIGHT PINK', 'image0.jpg', 209, 'A41/001/1', '', 'Y'),
(68, 1, 'FANCY CARD - 160gsm - LIGHT YELLOW ', 'image0.jpg', 210, 'A41/001/2', '', 'Y'),
(69, 1, 'FANCY CARD - 160gsm - LIGHT PEACH ', 'image0.jpg', 211, 'A41/001/3', '', 'Y'),
(70, 1, 'FANCY CARD - 160gsm - DARK ORANGE ', 'image0.jpg', 212, 'A41/001/4', '', 'Y'),
(71, 1, 'FANCY CARD - 230gsm - LIGHT PINK ', 'image0.jpg', 65, 'A41/002', '', 'Y'),
(72, 1, 'FANCY CARD - 230gsm - LIGHT GREEN ', 'image0.jpg', 213, 'A41/003', '', 'Y'),
(73, 1, 'FANCY CARD - 230gsm - LIGHT BROWN ', 'image0.jpg', 214, 'A41/004', '', 'Y'),
(74, 1, 'FANCY CARD - 230gsm - LIGHT GREY ', 'image0.jpg', 215, 'A41/005', '', 'Y'),
(75, 1, 'KERTAS STICKER WARNA A4 - LIGHT BLUE', 'image0.jpg', 66, 'A42/001', '', 'Y'),
(76, 1, 'KERTAS STICKER A4 - PUTIH ', 'image0.jpg', 67, 'A42/002', '', 'Y'),
(77, 1, 'KERTAS STICKER WARNA A4 - DARK BLUE ', 'image0.jpg', 216, 'A42/003', '', 'Y'),
(78, 1, 'KERTAS STICKER WARNA A4 - FLUORESCENT PURPLE', 'image0.jpg', 217, 'A42/004', '', 'Y'),
(79, 1, 'KERTAS STICKER WARNA A4 - FLUORESCENT YELLOW', 'image0.jpg', 218, 'A42/005', '', 'Y'),
(80, 1, 'KERTAS STICKER WARNA A4 - FLUORESCENT PINK', 'image0.jpg', 219, 'A42/006', '', 'Y'),
(81, 1, 'KERTAS WARNA A4 - 80gsm - LIGHT BLUE', 'image0.jpg', 68, 'A43/001', '', 'Y'),
(82, 1, 'KERTAS WARNA A4 - 80gsm - LIGHT PINK', 'image0.jpg', 220, 'A43/002', '', 'Y'),
(83, 1, 'KERTAS WARNA A4 - 80gsm - LIGHT YELLOW', 'image0.jpg', 221, 'A43/004', '', 'Y'),
(84, 1, 'KERTAS WARNA A4 - 80gsm - LIGHT PEACH', 'image0.jpg', 222, 'A43/005', '', 'Y'),
(85, 1, 'KERTAS WARNA A4 - 80gsm - LIGHT CREAM', 'image0.jpg', 223, 'A43/006', '', 'Y'),
(86, 1, 'KERTAS WARNA A4 - 80gsm - LIGHT GREEN', 'image0.jpg', 224, 'A43/007', '', 'Y'),
(87, 1, 'KERTAS WARNA A4 - 80gsm - LIGHT PURPLE', 'image0.jpg', 225, 'A43/008', '', 'Y'),
(88, 1, 'KERTAS WARNA A4 - 80gsm - DARK ORANGE', 'image0.jpg', 226, 'A43/009', '', 'Y'),
(89, 1, 'KERTAS WARNA A4 - 80gsm - DARK GOLD', 'image0.jpg', 227, 'A43/010', '', 'Y'),
(90, 1, 'KERTAS WARNA A4 - 80gsm - FLUORESCENT PINK', 'image0.jpg', 228, 'A43/011', '', 'Y'),
(91, 1, 'KERTAS WARNA A4 - 80gsm - FLUORESCENT GREEN', 'image0.jpg', 229, 'A43/012', '', 'Y'),
(92, 1, 'KERTAS PUTIH A4 - 80gsm', 'image0.jpg', 69, 'A44/001', '', 'Y'),
(93, 1, 'KERTAS PUTIH A3 - 80gsm', 'image0.jpg', 70, 'A45/001', '', 'Y'),
(94, 1, 'BUKU NOTA PKN', 'image0.jpg', 71, 'A46/001', '', 'Y'),
(95, 1, 'SARUNG SIJIL - A4', 'image0.jpg', 72, 'A47/001', '', 'Y'),
(96, 1, 'SAMPUL SURAT JABATAN - C6 WALLET PUTIH', 'image0.jpg', 73, 'A48/001', '', 'Y'),
(97, 1, 'SAMPUL SURAT JABATAN - DL SAKU PUTIH - 1/3 A4', 'image0.jpg', 74, 'A48/002', '', 'Y'),
(98, 1, 'SAMPUL SURAT JABATAN - DL SAKU PUTIH - 1/3 A4 - BERTINGKAP', 'image0.jpg', 75, 'A48/003', '', 'Y'),
(99, 1, 'SAMPUL SURAT JABATAN - C5 SAKU PUTIH - 1/2 A4', 'image0.jpg', 76, 'A48/004', '', 'Y'),
(100, 1, 'SAMPUL SURAT JABATAN - C5 SAKU PUTIH - 1/2 A4 - BERTINGKAP', 'image0.jpg', 77, 'A48/005', '', 'Y'),
(101, 1, 'SAMPUL SURAT JABATAN - C4 SAKU PUTIH - A4', 'image0.jpg', 78, 'A48/006', '', 'Y'),
(102, 2, 'GAM (CAIR)', 'b1001.jpg', 201, 'B1/001', '', 'Y'),
(103, 2, 'GAM (STICK)', 'b1002.jpg', 79, 'B1/002', '', 'Y'),
(104, 2, 'GAM BOTOL BESAR', 'b1003.jpg', 80, 'B1/003', '', 'Y'),
(105, 2, 'TALI PASS ID CARD (LANYARD)', 'b2001.jpg', 81, 'B2/001', '', 'Y'),
(106, 2, 'ID CARD BADGE', 'b2002.jpg', 82, 'B2/002', '', 'Y'),
(107, 2, 'LOCENG KAUNTER', 'b3001.jpg', 83, 'B3/001', '', 'Y'),
(108, 2, 'PENYELAK MUKA SURAT', 'b4001.jpg', 84, 'B4/001', '', 'Y'),
(109, 2, 'BATERI - C', 'b5001.jpg', 85, 'B5/001', '', 'Y'),
(110, 2, 'BATERI - AA', 'b5002.jpg', 86, 'B5/002', '', 'Y'),
(111, 2, 'BATERI - AAA', 'b5003.jpg', 87, 'B5/003', '', 'Y'),
(112, 2, 'MASKING TAPE - 24mm', 'b6001.jpg', 88, 'B6/001', '', 'Y'),
(113, 2, 'MASKING TAPE - 48mm', 'b6002.jpg', 89, 'B6/002', '', 'Y'),
(114, 2, 'BINDING TAPE - 24mm', 'b7001.jpg', 90, 'B7/001', '', 'Y'),
(115, 2, 'BINDING TAPE - 36mm', 'b7002.jpg', 91, 'B7/002', '', 'Y'),
(116, 2, 'BINDING TAPE - 48mm', 'b7003.jpg', 92, 'B7/003', '', 'Y'),
(117, 2, 'DOUBLE SIDE TAPE', 'b8001.jpg', 93, 'B8/001', '', 'Y'),
(118, 2, 'DOUBLE SIDE TAPE - 24mm ', 'b8002.jpg', 94, 'B8/002', '', 'Y'),
(119, 2, 'LOYTAPE - 18mm', 'b9001.jpg', 95, 'B9/001', '', 'Y'),
(120, 2, 'LOYTAPE - 24mm', 'b9002.jpg', 96, 'B9/002', '', 'Y'),
(121, 2, 'LOYTAPE - 48mm', 'b9003.jpg', 97, 'B9/003', '', 'Y'),
(122, 2, '3 WAY PLUG', 'b10001.jpg', 98, 'B10/001', '', 'Y'),
(123, 2, 'PENYAMBUNG WAYAR (3 GANG)', 'b11001.jpg', 99, 'B11/001', '', 'Y'),
(124, 2, '3 TIER TRAY DOKUMEN', 'b12001.jpg', 100, 'B12/001', '', 'Y'),
(125, 2, 'RAK CAP', 'image0.jpg', 101, 'B13/001', '', 'Y'),
(126, 2, 'PRINTRONIC RIBBON', 'image0.jpg', 102, 'B14/001', '', 'Y'),
(127, 2, 'CORAL PRINT RIBBON', 'image0.jpg', 103, 'B14/002', '', 'Y'),
(128, 2, 'PEWANGI SEMBURAN', 'b15001.jpg', 104, 'B15/001', '', 'Y'),
(129, 2, 'PEWANGAI KENDERAAN', 'b15002.jpg', 105, 'B15/002', '', 'Y'),
(130, 2, 'TISU KOTAK', 'b16001.jpg', 106, 'B16/001', '', 'Y'),
(131, 2, 'TISU PANTRY', 'image0.jpg', 107, 'B16/002', '', 'Y'),
(132, 2, 'DOCUMENT CASE A4 - 20mm ', 'image0.jpg', 108, 'B17/001', '', 'Y'),
(133, 2, 'DOCUMENT CASE A4 - 40mm', 'b17002.jpg', 109, 'B17/002', '', 'Y'),
(134, 2, 'FAIL TRANSPARENT - A4', 'b18001.jpg', 110, 'B18/001', '', 'Y'),
(135, 2, 'KOMPUTER FAIL (RESIT)', 'image0.jpg', 111, 'B19/001', '', 'Y'),
(136, 2, 'KOMPUTER FAIL (FLIMSI)', 'image0.jpg', 112, 'B19/002', '', 'Y'),
(137, 2, 'ARCH LEVERFILE(1/2) A4', 'image0.jpg', 113, 'B20/001', '', 'Y'),
(138, 2, 'ARCH LEVERFILE A4', 'image0.jpg', 114, 'B20/002', '', 'Y'),
(139, 2, 'RING FILE PUTIH A4 - 25mm', 'b21001.jpg', 115, 'B21/001', '', 'Y'),
(140, 2, 'RING FILE PUTIH A4 - 40mm', 'b21002.jpg', 116, 'B21/002', '', 'Y'),
(141, 2, 'RING FILE PUTIH A4 - 50mm', 'b21003.jpg', 117, 'B21/003', '', 'Y'),
(142, 2, 'FAIL POKET JABATAN - A4', 'image0.jpg', 119, 'B22/002', '', 'Y'),
(143, 2, 'FAIL POKET MANILA - A4', 'image0.jpg', 120, 'B22/003', '', 'Y'),
(144, 2, 'BEG KERTAS JABATAN ', 'image0.jpg', 121, 'B23/001', '', 'Y'),
(145, 2, 'BEG NON WOVEN JABATAN', 'image0.jpg', 122, 'B24/001', '', 'Y'),
(146, 2, 'PENIMBANG', 'b25001.jpg', 202, 'B25/001', '', 'Y'),
(147, 2, 'TRANSISTOR MEGAPHONE', 'b26001.jpg', 203, 'B26/001', '', 'Y'),
(148, 2, 'BENDERA \'MALAYSIA\'', 'b27001.jpg', 205, 'B27/001', '', 'Y'),
(149, 2, 'BENDERA \'PERAK\'', 'image0.jpg', 206, 'B28/001', '', 'Y'),
(150, 3, 'BINDING RING - 6mm', 'c1001.jpg', 123, 'C1/001', '', 'Y'),
(151, 3, 'BINDING RING - 8mm', 'c1002.jpg', 124, 'C1/002', '', 'Y'),
(152, 3, 'BINDING RING - 10mm', 'c1003.jpg', 125, 'C1/003', '', 'Y'),
(153, 3, 'BINDING RING - 14mm', 'c1004.jpg', 126, 'C1/004', '', 'Y'),
(154, 3, 'BINDING RING - 16mm', 'c1005.jpg', 127, 'C1/005', '', 'Y'),
(155, 3, 'BINDING RING - 18mm', 'c1006.jpg', 128, 'C1/006', '', 'Y'),
(156, 3, 'BINDING RING - 20mm', 'c1007.jpg', 129, 'C1/007', '', 'Y'),
(157, 3, 'BINDING RING - 22mm', 'c1008.jpg', 130, 'C1/008', '', 'Y'),
(158, 3, 'BINDING RING - 25mm', 'c1009.jpg', 131, 'C1/009', '', 'Y'),
(159, 3, 'BINDING RING - 28mm', 'c1010.jpg', 132, 'C1/010', '', 'Y'),
(160, 3, 'BINDING RING - 32mm', 'c1011.jpg', 133, 'C1/011', '', 'Y'),
(161, 3, 'BINDING RING - 38mm', 'c1012.jpg', 134, 'C1/012', '', 'Y'),
(162, 3, 'BINDING RING - 45mm', 'c1013.jpg', 135, 'C1/013', '', 'Y'),
(163, 3, 'BINDING RING - 50mm', 'c1014.jpg', 136, 'C1/014', '', 'Y'),
(164, 3, 'BINDING PLASTIC COVER - A4', 'c2001.jpg', 137, 'C2/001', '', 'Y'),
(165, 3, 'LAMINATING FILM - A4', 'c3001.jpg', 138, 'C3/001', '', 'Y'),
(166, 4, 'LABEL SEGERA - AM 99D', 'image0.jpg', 139, 'D1/001', '', 'Y'),
(167, 4, 'DAFTAR PEMERIKSAAN MENGEJUT - AM 28', 'd2001.jpg', 140, 'D2/001', '', 'Y'),
(168, 4, 'PENYATA PEMUNGUT (BERPENIGA) ', 'image0.jpg', 141, 'D3/001', '', 'Y'),
(169, 4, 'PENYATA BORANG HASIL DIKAWAL - KEW 68', 'd4001.jpg', 142, 'D4/001', '', 'Y'),
(170, 4, 'BUKU LOG KENDERAAN - AM 362', 'd5001.jpg', 143, 'D5/001', '', 'Y'),
(171, 4, 'BUKU LOG DESPATCH - AM 109', 'd6001.jpg', 144, 'D6/001', '', 'Y'),
(172, 4, 'KEPALA SURAT RASMI A4', 'image0.jpg', 145, 'D7/001', '', 'Y'),
(173, 4, 'KERTAS MINIT - AM 6', 'd8001.jpg', 146, 'D8/001', '', 'Y'),
(174, 4, 'SAMPUL KECIL - AM 435A', 'image0.jpg', 147, 'D9/001', '', 'Y'),
(175, 4, 'FAIL PUTIH - AM 435', 'd10001.jpg', 148, 'D10/001', '', 'Y'),
(176, 4, 'KERTAS BERKOMPUTER FLIMSI - 1PLY', 'image0.jpg', 149, 'D11/001', '', 'Y'),
(177, 4, 'KERTAS BERKOMPUTER FLIMSI - 2PLY', 'image0.jpg', 150, 'D11/002', '', 'Y'),
(178, 4, 'KERTAS BERKOMPUTER FLIMSI - 3PLY', 'image0.jpg', 151, 'D11/003', '', 'Y'),
(179, 4, 'RESIT RASMI BERKOMPUTER ', 'image0.jpg', 152, 'D12/001', '', 'Y'),
(180, 5, 'PEN DRIVE', 'image0.jpg', 153, 'E1/001', '', 'Y'),
(181, 5, 'CD', 'e2001.jpg', 154, 'E2/001', '', 'Y'),
(182, 5, 'DISKET', 'image0.jpg', 155, 'E3/001', '', 'Y'),
(183, 5, 'MOUSE KOMPUTER', 'image0.jpg', 156, 'E4/001', '', 'Y'),
(184, 5, 'GLOSSY STICKER (DIGITAL)', 'e5001.jpg', 157, 'E5/001', '', 'Y'),
(185, 5, 'HP CE505A- 05A ', 'e6001.jpg', 158, 'E6/001', '', 'Y'),
(186, 5, 'HP Q2612A - 12A', 'e7001.jpg', 159, 'E7/001', '', 'Y'),
(187, 5, 'HP C4129X- 29X', 'e8001.jpg', 160, 'E8/001', '', 'Y'),
(188, 5, 'HP CF230A- 30A ', 'image0.jpg', 230, 'E29/001', '', 'Y'),
(189, 5, 'HP CB435A- 35A', 'e9001.jpg', 161, 'E9/001', '', 'Y'),
(190, 5, 'HP Q5949A- 49A ', 'e10001.jpg', 162, 'E10/001', '', 'Y'),
(191, 5, 'HP CE255A- 55A', 'e11001.jpg', 163, 'E11/001', '', 'Y'),
(192, 5, 'HP CE278A- 78A', 'e12001.jpg', 164, 'E12/001', '', 'Y'),
(193, 5, 'HP CF279A- 79A', 'e13001.jpg', 165, 'E13/001', '', 'Y'),
(194, 5, 'HP CF280A- 80A ', 'e14001.jpg', 166, 'E14/001', '', 'Y'),
(195, 5, 'HP CF283A- 83A ', 'e15001.jpg', 167, 'E15/001', '', 'Y'),
(196, 5, 'HP CE285A- 85A', 'e16001.jpg', 168, 'E16/001', '', 'Y'),
(197, 5, 'HP CF350A- 130A (B) ', 'image0.jpg', 169, 'E17/001', '', 'Y'),
(198, 5, 'HP CF351A- 130A (C) ', 'image0.jpg', 170, 'E17/002', '', 'Y'),
(199, 5, 'HP CF352A- 130A (Y) ', 'image0.jpg', 171, 'E17/003', '', 'Y'),
(200, 5, 'HP CF353A- 130A (M) ', 'image0.jpg', 172, 'E17/004', '', 'Y'),
(201, 5, 'HP CF400A - 201A (B) ', 'image0.jpg', 173, 'E18/001', '', 'Y'),
(202, 5, 'HP CF401A - 201A (C) ', 'image0.jpg', 174, 'E18/002', '', 'Y'),
(203, 5, 'HP CF402A - 201A (Y) ', 'image0.jpg', 175, 'E18/003', '', 'Y'),
(204, 5, 'HP CF403A - 201A (M)', 'image0.jpg', 176, 'E18/004', '', 'Y'),
(205, 5, 'HP CE410A - 305A (B) ', 'image0.jpg', 177, 'E19/001', '', 'Y'),
(206, 5, 'HP CE411A - 305A (C) ', 'image0.jpg', 178, 'E19/002', '', 'Y'),
(207, 5, 'HP CE412A - 305A (Y)', 'image0.jpg', 179, 'E19/003', '', 'Y'),
(208, 5, 'HP CE413A - 305A (M) ', 'image0.jpg', 180, 'E19/004', '', 'Y'),
(209, 5, 'HP CC530A - 304A (B)', 'image0.jpg', 181, 'E20/001', '', 'Y'),
(210, 5, 'HP CC531A - 304A (C)', 'image0.jpg', 182, 'E20/002', '', 'Y'),
(211, 5, 'HP CC532A - 304A (Y) ', 'image0.jpg', 183, 'E20/003', '', 'Y'),
(212, 5, 'HP CC533A - 304A (M) ', 'image0.jpg', 184, 'E20/004', '', 'Y'),
(213, 5, 'HP CE740A - 307A (B)', 'e21001.jpg', 185, 'E21/001', '', 'Y'),
(214, 5, 'HP CE741A - 307A (C)', 'e21002.jpg', 186, 'E21/002', '', 'Y'),
(215, 5, 'HP CE742A - 307A (Y) ', 'e21003.jpg', 187, 'E21/003', '', 'Y'),
(216, 5, 'HP CE743A - 307A (M) ', 'e21004.jpg', 188, 'E21/004', '', 'Y'),
(217, 5, 'CANON EP-22 ', 'e22001.jpg', 189, 'E22/001', '', 'Y'),
(218, 5, 'CANON FX-3', 'e23001.jpg', 190, 'E23/001', '', 'Y'),
(219, 5, 'CANON 337', 'e24001.jpg', 191, 'E24/001', '', 'Y'),
(220, 5, 'CANON 328 ', 'e25001.jpg', 192, 'E25/001', '', 'Y'),
(221, 5, 'PANASONIC KX-FA83E', 'e26001.jpg', 193, 'E26/001', '', 'Y'),
(222, 5, 'PANASONIC KX-FAT411E', 'e27001.jpg', 194, 'E27/001', '', 'Y'),
(223, 5, 'EPSON EPL-5900', 'e28001.jpg', 204, 'E28/001', '', 'Y'),
(224, 6, 'SPAN PENCUCI KERETA', 'image0.jpg', 195, 'F1/001', '', 'Y'),
(225, 6, 'TUALA PENGELAP', 'f2001.jpg', 196, 'F2/001', '', 'Y'),
(226, 6, 'PENGILAT TAYAR KERETA', 'f3001.jpg', 197, 'F3/001', '', 'Y'),
(227, 6, 'SYAMPOO KERETA', 'f4001.jpg', 198, 'F4/001', '', 'Y'),
(228, 7, 'AIR MINERAL BOTOL - 500ml', 'image0.jpg', 199, 'G1/001', '', 'Y'),
(229, 7, 'AIR MINERAL CUP - 230ml', 'image0.jpg', 200, 'G2/001', '', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `stok_item_detail`
--

DROP TABLE IF EXISTS `stok_item_detail`;
CREATE TABLE IF NOT EXISTS `stok_item_detail` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `item_date` date NOT NULL,
  `id_item` tinyint(4) NOT NULL,
  `quantity` smallint(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stok_item_detail`
--

INSERT INTO `stok_item_detail` (`id`, `item_date`, `id_item`, `quantity`) VALUES
(1, '2018-02-01', 1, 100),
(2, '2018-02-01', 102, 50);

-- --------------------------------------------------------

--
-- Table structure for table `stok_order`
--

DROP TABLE IF EXISTS `stok_order`;
CREATE TABLE IF NOT EXISTS `stok_order` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `userid` char(12) NOT NULL,
  `jawatan` tinyint(4) NOT NULL,
  `unit` tinyint(4) NOT NULL,
  `order_date` date NOT NULL,
  `purpose` varchar(300) NOT NULL,
  `status` varchar(10) NOT NULL,
  `flag` tinyint(4) NOT NULL,
  `tstamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `no_permohonan` smallint(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stok_order`
--

INSERT INTO `stok_order` (`id`, `userid`, `jawatan`, `unit`, `order_date`, `purpose`, `status`, `flag`, `tstamp`, `no_permohonan`) VALUES
(1, '123456', 2, 1, '2018-02-01', '', 'Approved', 0, '2018-02-06 05:49:09', 0),
(2, '701001085731', 4, 10, '2018-02-08', 'ddd', 'Approved', 0, '2018-02-08 02:41:48', 0),
(3, '701001085731', 4, 10, '2018-02-08', 'ewewqewq', 'Cancel', 0, '2018-02-08 03:01:53', 0),
(4, '740709086176', 0, 0, '2018-02-15', '', 'New', 0, '2018-02-15 05:40:58', 1),
(5, '740709086176', 0, 0, '2018-02-15', '', 'New', 0, '2018-02-15 05:41:20', 2),
(6, '123456', 4, 10, '2018-02-28', '', 'New', 0, '2018-02-28 03:43:06', 3),
(7, '790122085110', 0, 0, '2018-02-28', '3', 'New', 0, '2018-02-28 05:01:41', 4),
(8, '123456', 4, 10, '2018-03-01', 'ok', 'Approved', 0, '2018-03-01 03:55:50', 5);

-- --------------------------------------------------------

--
-- Table structure for table `stok_order_detail`
--

DROP TABLE IF EXISTS `stok_order_detail`;
CREATE TABLE IF NOT EXISTS `stok_order_detail` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `id_item` tinyint(4) NOT NULL,
  `requested_quantity` smallint(6) NOT NULL,
  `approved_quantity` smallint(6) NOT NULL DEFAULT '0',
  `id_order` smallint(6) NOT NULL DEFAULT '0',
  `userid` char(12) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stok_order_detail`
--

INSERT INTO `stok_order_detail` (`id`, `id_item`, `requested_quantity`, `approved_quantity`, `id_order`, `userid`) VALUES
(1, 1, 1, 1, 1, '123456'),
(2, 102, 4, 4, 1, '123456'),
(3, 1, 8, 8, 2, '701001085731'),
(4, 1, 2, 0, 3, '701001085731'),
(5, 1, 1, 0, 4, '740709086176'),
(6, 1, 3, 0, 5, '740709086176'),
(7, 1, 3, 0, 6, '123456'),
(8, 1, 1, 0, 7, '790122085110'),
(9, 1, 5, 4, 8, '123456');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jam`
--

DROP TABLE IF EXISTS `tb_jam`;
CREATE TABLE IF NOT EXISTS `tb_jam` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `masa_12` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jam`
--

INSERT INTO `tb_jam` (`id`, `masa_12`) VALUES
(1, '1:00 PAGI'),
(2, '2:00 PAGI'),
(3, '3:00 PAGI'),
(4, '4:00 PAGI'),
(5, '5:00 PAGI'),
(6, '6:00 PAGI'),
(7, '7:00 PAGI'),
(8, '8:00 PAGI'),
(9, '9:00 PAGI'),
(10, '10:00 PAGI'),
(11, '11:00 PAGI'),
(12, '12:00 TENGAH HARI'),
(13, '1:00 PETANG'),
(14, '2:00 PETANG'),
(15, '3:00 PETANG'),
(16, '4:00 PETANG'),
(17, '5:00 PETANG'),
(18, '6:00 PETANG'),
(19, '7:00 MALAM'),
(20, '8:00 MALAM'),
(21, '9:00 MALAM'),
(22, '10:00 MALAM'),
(23, '11:00 MALAM'),
(24, '12:00 MALAM');

-- --------------------------------------------------------

--
-- Table structure for table `tb_member`
--

DROP TABLE IF EXISTS `tb_member`;
CREATE TABLE IF NOT EXISTS `tb_member` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL DEFAULT '',
  `userid` char(12) NOT NULL,
  `password` varchar(20) NOT NULL DEFAULT '',
  `jawatan` tinyint(4) NOT NULL,
  `gred` tinyint(4) NOT NULL,
  `bahagian` tinyint(4) NOT NULL,
  `unit` tinyint(4) NOT NULL,
  `access_level` tinyint(1) NOT NULL,
  `flag` tinyint(4) NOT NULL,
  `t_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `pejabat` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=91 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_member`
--

INSERT INTO `tb_member` (`id`, `nama`, `userid`, `password`, `jawatan`, `gred`, `bahagian`, `unit`, `access_level`, `flag`, `t_stamp`, `pejabat`) VALUES
(1, 'Super Admin', '123456', '123', 1, 1, 3, 4, 1, 0, '2018-03-01 05:08:52', 2),
(2, 'Dato\' Haji Mohd Gazali bin Jalal', '581009015523', '123456', 1, 1, 1, 1, 3, 0, '2018-03-01 06:07:55', 1),
(3, 'Ainul Mardhiah binti Abdul Halilah', '870226085756', '123456', 14, 19, 1, 1, 3, 0, '2018-02-24 02:17:26', 1),
(4, 'Emillia Rosnizar binti Ahmad Hanipiah', '740709086176', '123456', 3, 4, 2, 2, 3, 0, '2018-03-01 06:08:53', 2),
(5, 'Julhanis binti Mohamed Johari', '820401085038', '123456', 14, 19, 2, 2, 3, 0, '2018-02-24 02:18:03', 2),
(6, 'YM Tengku Siliawati binti Tengku Salim', '740417115326', '123456', 3, 6, 3, 3, 3, 0, '2018-02-24 01:56:51', 2),
(7, 'Minha Julabidin bin Ismail', '830809085559', '123456', 3, 9, 3, 4, 3, 0, '2018-02-24 02:06:33', 2),
(8, 'Ahmad Kamil bin Mohamad Ghazali', '610119085215', '123456', 8, 21, 3, 4, 3, 0, '2018-02-24 02:26:14', 2),
(9, 'Norhayati binti Zulkifli', '840408085522', '123456', 11, 20, 3, 4, 3, 0, '2018-02-24 02:36:39', 2),
(10, 'Abdul Latif bin Ismail', '840510085967', '123456', 8, 25, 3, 4, 3, 0, '2018-02-24 02:56:52', 2),
(11, 'Nazrul bin Busu', '771227086095', '123456', 7, 30, 3, 4, 3, 0, '2018-02-24 03:32:31', 2),
(12, 'Datin Rozita bt Aminuddin', '800702085690', '123456', 1, 7, 3, 5, 3, 0, '2018-02-24 01:58:12', 2),
(13, 'Nor Suraiya binti Ahmad Zawawi', '681126085166', '123456', 11, 20, 3, 5, 3, 0, '2018-02-24 02:25:27', 2),
(14, 'Suharni binti Hussein', '800126075098', '123456', 11, 20, 3, 5, 3, 0, '2018-02-24 03:24:43', 2),
(15, 'Nadia binti Zul@Zulkifli', '850613085256', '123456', 6, 28, 3, 5, 3, 0, '2018-02-24 03:25:21', 2),
(16, 'Mohd Noorsyafizal bin Che Lan @ Ahmad', '830621086269', '123456', 3, 9, 3, 6, 3, 0, '2018-02-24 02:04:40', 2),
(17, 'Hasnida binti Abd. Hamid', '700813085038', '123456', 8, 24, 3, 6, 3, 0, '2018-02-24 02:32:21', 2),
(18, 'Intan Suriawati binti Abdullah', '680310085444', '123456', 8, 25, 3, 6, 3, 0, '2018-02-24 02:55:33', 2),
(19, 'Nur Amalia binti Roslan', '890817086118', '123456', 8, 28, 3, 6, 3, 0, '2018-02-24 03:20:33', 2),
(20, 'Noor Hafizah binti Abdul Hamid', '850504085070', '123456', 8, 28, 3, 6, 3, 0, '2018-02-24 02:57:40', 2),
(21, 'Kwan Suk Lee', '870814085656', '123456', 10, 27, 3, 6, 3, 0, '2018-02-24 03:28:13', 2),
(22, 'Muhammad Zubir bin Tajudin', '640709105121', '123456', 7, 30, 3, 6, 3, 0, '2018-02-24 03:31:52', 2),
(23, 'Suriati binti Shahar', '741213715180', '123456', 3, 9, 3, 7, 3, 0, '2018-02-24 02:05:45', 2),
(24, 'Muhamad Radzi bin Zainal', '840704085893', '123456', 11, 20, 3, 7, 3, 0, '2018-02-24 02:46:04', 2),
(25, 'Nurliyana binti Othman', '881003086050', '123456', 11, 20, 3, 7, 3, 0, '2018-02-24 02:37:40', 2),
(26, 'Noraini binti Shukaisi', '610610087392', '123456', 8, 24, 3, 7, 3, 0, '2018-02-24 02:31:15', 2),
(27, 'Jamilah binti Omar', '781217085696', '123456', 12, 16, 4, 8, 3, 0, '2018-02-24 01:48:39', 2),
(28, 'Jaspal Kaur a/p Lal Singh', '790122085110', '123456', 10, 22, 4, 8, 3, 0, '2018-02-24 01:37:09', 2),
(29, 'Muhamad Faiz bin Md Isa', '841218085577', '123456', 11, 20, 4, 8, 3, 0, '2018-02-24 02:47:09', 2),
(30, 'Norfazlah binti Yunus', '681223086048', '123456', 10, 23, 4, 8, 3, 0, '2018-02-24 01:49:44', 2),
(31, 'Mariam binti Ramli', '710909085680', '123456', 10, 23, 4, 8, 3, 0, '2018-02-24 02:53:13', 2),
(32, 'Meor Husain bin Aziz', '680721085035', '123456', 7, 30, 4, 8, 3, 0, '2018-02-24 03:28:46', 2),
(33, 'Badrul bin Baharudin', '731113085899', '123456', 7, 30, 4, 8, 3, 0, '2018-02-24 03:30:10', 2),
(34, 'Mohd Fuad bin Nordin', '860721386135', '123456', 5, 29, 4, 8, 3, 0, '2018-02-24 03:32:55', 2),
(35, 'Sivamany a/l Krishnan', '770611085105', '123456', 5, 29, 4, 8, 3, 0, '2018-02-24 03:33:19', 2),
(36, 'Hassanul Bulkhiah bin Mahayuddin', '830605085207', '123456', 0, 0, 3, 8, 3, 0, '2018-02-06 05:49:09', 2),
(37, 'Faizol Amir bin Mohd Azraie', '770718036047', '123456', 11, 17, 4, 9, 3, 0, '2018-02-24 02:11:36', 2),
(38, 'Norfazhilah binti Yang Hapizi', '800607086222', '123456', 8, 28, 4, 9, 3, 0, '2018-02-24 03:14:23', 2),
(39, 'Abdul Hadi bin Hamidun', '800131085151', '123456', 8, 28, 4, 9, 3, 0, '2018-02-24 03:23:01', 2),
(40, 'Ahmad Nazmi bin Nadzari', '701001085731', '123456', 4, 8, 4, 10, 3, 0, '2018-02-23 08:46:31', 2),
(41, 'Shamsol Anuar bin Huri', '721108086169', '123456', 13, 14, 4, 10, 3, 0, '2018-02-24 02:12:39', 2),
(42, 'Mohd Kamaruddin bin Azmi', '790804085767', '123456', 13, 18, 4, 10, 3, 0, '2018-02-24 02:14:52', 2),
(43, 'Muhammad Hambali bin Zainudin', '920907086335', '123456', 2, 26, 4, 10, 3, 0, '2018-02-24 03:35:54', 2),
(44, 'Mohd Samsul Nizam bin Abdul Ghani', '701030086397', '123456', 10, 27, 4, 11, 3, 0, '2018-02-24 03:27:10', 2),
(45, 'Fuziah binti Derasa', '601101035194', '123456', 1, 3, 8, 12, 3, 0, '2018-02-24 01:55:28', 3),
(46, 'Zailena Noor binti Zaibidin', '751112086134', '123456', 14, 19, 8, 12, 3, 0, '2018-02-24 02:16:30', 3),
(47, 'Noor Hafidzah binti Hassan', '781210115338', '123456', 1, 7, 5, 13, 3, 0, '2018-02-24 02:01:59', 3),
(48, 'Rohaiza binti Haji Ramli', '690320086802', '123456', 11, 13, 5, 14, 3, 0, '2018-02-24 02:10:36', 3),
(49, 'Junaida binti Ibrahim', '870120085790', '123456', 11, 20, 5, 14, 3, 0, '2018-02-24 02:49:47', 3),
(50, 'Nurul Khairunnisa binti Abd. Rani', '870731025594', '123456', 11, 20, 5, 14, 3, 0, '2018-02-24 02:42:51', 3),
(51, 'Surya binti Zainal Abidin', '800308086134', '123456', 6, 25, 5, 14, 3, 0, '2018-02-24 03:05:45', 3),
(52, 'Norhamidah binti Mohd Dooa', '790628085900', '123456', 11, 20, 5, 15, 3, 0, '2018-02-24 03:44:45', 3),
(53, 'Arfanizah binti Umar', '780520085766', '123456', 8, 25, 5, 15, 3, 0, '2018-02-24 02:56:20', 3),
(54, 'Noorazreen binti Ramli', '850426085736', '123456', 8, 28, 5, 15, 3, 0, '2018-02-24 03:19:38', 3),
(55, 'Nur Athirah binti Harun', '870426085590', '123456', 6, 28, 5, 15, 3, 0, '2018-02-24 03:26:25', 3),
(56, 'Mior Ibrahim bin Abdul Hamid', '660922085957', '123456', 7, 30, 5, 15, 3, 0, '2018-02-24 03:29:34', 3),
(57, 'Salbiah binti Ghazali', '850205085070', '123456', 0, 0, 5, 16, 3, 1, '2018-02-21 01:33:59', 3),
(58, 'Nursuhada binti Pak Wanteh', '880304085444', '123456', 11, 20, 5, 16, 3, 0, '2018-02-24 02:45:06', 3),
(59, 'Khadijah binti Dahalan', '620301085608', '123456', 8, 25, 5, 16, 3, 0, '2018-02-24 02:54:50', 3),
(60, 'Nur Atiqah binti Azizi', '810227086270', '123456', 8, 25, 5, 16, 3, 0, '2018-02-24 03:04:32', 3),
(61, 'Khamsiah binti Abdul Majid', '630701085446', '123456', 11, 13, 5, 17, 3, 0, '2018-02-24 02:09:48', 3),
(62, 'Mohd Hairul Shahril bin Jaafar', '810329015211', '123456', 6, 24, 5, 17, 3, 0, '2018-02-24 02:28:16', 3),
(63, 'Norizah binti Ismail', '620101086438', '123456', 8, 24, 5, 17, 3, 0, '2018-02-24 02:33:29', 3),
(64, 'Nuranissakila binti Abdul Hadi', '870202085444', '123456', 11, 20, 5, 17, 3, 0, '2018-02-24 02:48:55', 3),
(65, 'Nurrul Shahida binti Mohd Salleh', '840126085428', '123456', 11, 20, 6, 17, 3, 0, '2018-02-24 02:52:23', 3),
(66, 'Azah binti Haji Saadi', '600503086088', '123456', 8, 25, 5, 17, 3, 0, '2018-02-24 02:54:06', 3),
(67, 'Ros Maya binti Pandak Jamaluddin', '781219085454', '123456', 8, 25, 5, 17, 3, 0, '2018-02-24 02:59:12', 3),
(68, 'Radiah binti Baharudin', '611213105184', '123456', 8, 24, 5, 18, 3, 0, '2018-02-24 02:29:09', 3),
(69, 'Norizzatul Hasliza binti Rohizat', '850130085542', '123456', 11, 20, 5, 18, 3, 0, '2018-02-24 02:43:42', 3),
(70, 'Noor Aishah binti Sulaiman', '790415086408', '123456', 8, 28, 5, 18, 3, 0, '2018-02-24 03:09:34', 3),
(71, 'Mohammad Azizi bin Azmi', '880429086731', '123456', 8, 28, 5, 18, 3, 0, '2018-02-24 03:23:59', 3),
(72, 'Sarah binti Saari', '841021086488', '123456', 8, 28, 5, 18, 3, 0, '2018-02-24 03:18:12', 3),
(73, 'Sharifah Nor Iman binti Syed Zainal Rasidi', '840213145230', '123456', 1, 10, 6, 19, 3, 0, '2018-02-24 02:07:40', 3),
(74, 'Suhaila binti Suhaimi', '770314086646', '123456', 8, 24, 6, 20, 3, 0, '2018-02-24 02:30:32', 3),
(75, 'Saidatul Nur binti Annuarusadat', '860114085576', '123456', 11, 20, 6, 20, 3, 0, '2018-02-24 02:41:32', 3),
(76, 'Suzana binti Harun Rashid', '810805085334', '123456', 11, 20, 5, 20, 3, 0, '2018-02-24 02:40:33', 3),
(77, 'Nur Izzati binti Suhaimi', '851007086480', '123456', 8, 28, 6, 20, 3, 0, '2018-02-24 03:11:36', 3),
(78, 'Nurul Wahida binti Mohd Noordin', '890330085770', '123456', 8, 28, 6, 20, 3, 0, '2018-02-24 03:16:56', 3),
(79, 'Premkumar a/l Sukumar', '850922086607', '123456', 11, 20, 6, 21, 3, 0, '2018-02-24 02:47:55', 3),
(80, 'Mohd Hafiz bin Ahmad Tajuddin', '831225085453', '123456', 7, 30, 6, 21, 3, 0, '2018-02-24 03:30:53', 3),
(81, 'Noor Fadzilah binti Hashim', '830822086150', '123456', 1, 12, 7, 22, 3, 0, '2018-02-24 02:08:37', 3),
(82, 'Sakinah binti Ibrahim', '810203085708', '123456', 11, 20, 7, 23, 3, 0, '2018-02-24 02:35:52', 3),
(83, 'Aiza Nizam bin Ropie', '820614125013', '123456', 8, 28, 7, 23, 3, 0, '2018-02-24 03:21:32', 3),
(84, 'Norfahiza binti Mohammad', '880821086496', '123456', 11, 20, 7, 24, 3, 0, '2018-02-24 02:51:01', 3),
(85, 'Mohd Shahir bin Mohamad Hashim', '850927086307', '123456', 8, 28, 7, 24, 3, 0, '2018-02-24 03:22:31', 3),
(86, 'Khairul Shamsul bin Md Ramli', '741116105719', '123456', 11, 20, 5, 16, 3, 0, '2018-02-24 02:24:04', 3),
(87, 'Sabarina binti Hashim', '781203085492', '123456', 8, 24, 6, 20, 3, 0, '2018-02-24 02:34:55', 3),
(88, 'Khairul Amir bin Zulkafli', '831108085067', '123456', 5, 29, 4, 8, 3, 0, '2018-02-24 03:34:37', 2),
(89, 'Mohd Fadilli bin Ghazali', '870526086275', '123456', 5, 29, 4, 8, 3, 0, '2018-02-24 03:35:27', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_order`
--

DROP TABLE IF EXISTS `tb_order`;
CREATE TABLE IF NOT EXISTS `tb_order` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `code` varchar(10) NOT NULL,
  `name` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_order`
--

INSERT INTO `tb_order` (`id`, `code`, `name`) VALUES
(1, 'New', 'Baru'),
(2, 'Approved', 'Lulus'),
(3, 'Disapprove', 'Tidak Lulus'),
(4, 'Cancel', 'Batal');

-- --------------------------------------------------------

--
-- Table structure for table `tb_status_kenderaan`
--

DROP TABLE IF EXISTS `tb_status_kenderaan`;
CREATE TABLE IF NOT EXISTS `tb_status_kenderaan` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_status_kenderaan`
--

INSERT INTO `tb_status_kenderaan` (`id`, `nama`) VALUES
(1, 'BARU'),
(2, 'TOLAK'),
(3, 'KIV'),
(4, 'LULUS'),
(5, 'BATAL'),
(6, 'SELESAI');

-- --------------------------------------------------------

--
-- Table structure for table `tb_yn`
--

DROP TABLE IF EXISTS `tb_yn`;
CREATE TABLE IF NOT EXISTS `tb_yn` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `kod` varchar(1) NOT NULL,
  `nama` varchar(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_yn`
--

INSERT INTO `tb_yn` (`id`, `kod`, `nama`) VALUES
(1, 'Y', 'Ya'),
(2, 'N', 'Tidak');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
