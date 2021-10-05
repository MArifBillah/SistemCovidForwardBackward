-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2021 at 09:14 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistemcovid`
--

-- --------------------------------------------------------

--
-- Table structure for table `covid`
--

CREATE TABLE `covid` (
  `kode` int(11) NOT NULL,
  `nama_varian` varchar(255) NOT NULL,
  `nama_gejala` varchar(255) NOT NULL,
  `codename` varchar(255) NOT NULL,
  `pertanyaan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `covid`
--

INSERT INTO `covid` (`kode`, `nama_varian`, `nama_gejala`, `codename`, `pertanyaan`) VALUES
(1, 'Varian awal SARS-CoV-19', 'Sakit tenggorokan', 'tenggorokan', 'Apakah anda mengalami sakit tenggorokan?'),
(2, 'Varian awal SARS-CoV-19', 'Demam', 'demam', 'Apakah suhu tubuh anda sama atau lebih tinggi dari 37.5 derajat celsius?'),
(3, 'Varian awal SARS-CoV-19', 'Batuk', 'batuk', 'Apakah anda mengalami batuk-batuk?'),
(4, 'Varian awal SARS-CoV-19', 'Hilang Rasa', 'rasa', 'Apakah anda tidak dapat merasakan rasa makanan?'),
(5, 'Varian awal SARS-CoV-19', 'Nyeri otot', 'otot', 'Apakah anda mengalami rasa sakit pada otot tubuh?'),
(6, 'Varian awal SARS-CoV-19', 'Diare', 'diare', 'Apakah anda mengalami diare?'),
(7, 'Varian awal SARS-CoV-19', 'Mual', 'mual', NULL),
(8, 'Varian awal SARS-CoV-19', 'Muntah', 'muntah', 'Apakah anda mengalami muntah?'),
(9, 'Varian awal SARS-CoV-19', 'Pusing', 'pusing', 'Apakah anda mengalami pusing?'),
(10, 'Varian Alpha', 'Sakit tenggorokan', 'tenggorokan', 'Apakah anda mengalami sakit tenggorokan?'),
(11, 'Varian Alpha', 'Batuk berlendir', 'batuk_lendir', 'Apakah batuk anda disertai lendir?'),
(12, 'Varian Alpha', 'Batuk', 'batuk', 'Apakah anda mengalami batuk-batuk?'),
(13, 'Varian Alpha', 'Hilang Rasa', 'rasa', 'Apakah anda tidak dapat merasakan rasa makanan?'),
(14, 'Varian Alpha', 'Nyeri otot', 'otot', 'Apakah anda mengalami rasa sakit pada otot tubuh?'),
(15, 'Varian Alpha', 'Sesak napas', 'napas', 'Apakah anda mengalami kesulitan bernapas?'),
(16, 'Varian Alpha', 'Sulit berpikir jernih', 'jernih', 'Apakah anda mengalami kesulitan untuk berpikit jernih?'),
(17, 'Varian Alpha', 'Pusing', 'pusing', 'Apakah anda mengalami pusing?'),
(18, 'Varian Alpha', 'Malaise', 'malaise', NULL),
(19, 'Varian Alpha', 'Hilang indera penciuman', 'cium', 'Apakah anda tidak dapat mencium aroma?'),
(20, 'Varian Alpha', 'Kelelahan', 'lelah', 'Apakah anda selalu merasa kelelahan walau sedang beristirahat?'),
(21, 'Varian Alpha', 'Mual', 'mual', NULL),
(22, 'Varian Alpha', 'hidung berlendir', 'hidung_lendir', 'Apakah hidung anda mengeluarkan lendir?'),
(23, 'Varian Alpha', 'Muntah', 'muntah', 'Apakah anda mengalami muntah?'),
(24, 'Varian Beta', 'Sakit tenggorokan', 'tenggorokan', 'Apakah anda mengalami sakit tenggorokan?'),
(25, 'Varian Beta', 'Demam', 'demam', 'Apakah suhu tubuh anda sama atau lebih tinggi dari 37.5 derajat celsius?'),
(26, 'Varian Beta', 'Sakit kepala', 'kepala', 'Apakah anda merasakan sakit kepala?'),
(27, 'Varian Beta', 'Hilang indera penciuman', 'cium', 'Apakah anda tidak dapat mencium aroma?'),
(28, 'Varian Beta', 'Sakit perut', 'perut', 'Apakah anda merasakan sensasi tidak nyaman pada bagian perut?'),
(29, 'Varian Beta', 'Diare', 'diare', 'Apakah anda mengalami diare?'),
(30, 'Varian Delta', 'Sakit tenggorokan', 'tenggorokan', 'Apakah anda mengalami sakit tenggorokan?'),
(31, 'Varian Delta', 'Demam', 'demam', 'Apakah suhu tubuh anda sama atau lebih tinggi dari 37.5 derajat celsius?'),
(32, 'Varian Delta', 'Sakit kepala', 'kepala', 'Apakah anda merasakan sakit kepala?'),
(33, 'Varian Delta', 'Gangguan pendengaran', 'pendengaran', 'Apakah anda tiba-tiba mengalami kesulitan dalam mendengar?'),
(34, 'Varian Delta', 'Sakit perut', 'perut', 'Apakah anda merasakan sensasi tidak nyaman pada bagian perut?'),
(35, 'Varian Delta', 'Nyeri sendi', 'sendi', 'Apakah anda mengalami rasa sakit pada bagian sendi?'),
(36, 'Varian Delta', 'Batuk', 'batuk', 'Apakah anda mengalami batuk-batuk?'),
(37, 'Varian Delta', 'Hilang selera makan', 'makan', 'Apakah anda tidak memiliki nafsu makan?'),
(38, 'Varian Delta', 'Mual', 'mual', NULL),
(39, 'Varian Delta', 'Flu parah', 'flu', NULL),
(40, 'Varian Delta', 'Muntah', 'muntah', 'Apakah anda mengalami muntah?'),
(41, 'Varian Delta', 'Pusing', 'pusing', 'Apakah anda mengalami pusing?'),
(42, 'Varian Delta', 'Kelelahan', 'lelah', 'Apakah anda selalu merasa kelelahan walau sedang beristirahat?'),
(43, 'Varian Delta', 'Nyeri otot', 'otot', 'Apakah anda mengalami rasa sakit pada otot tubuh?'),
(44, 'Varian Delta', 'Diare', 'diare', 'Apakah anda mengalami diare?'),
(45, 'Flu-like tanpa demam', 'Sakit tenggorokan', 'tenggorokan', 'Apakah anda mengalami sakit tenggorokan?'),
(46, 'Flu-like tanpa demam', 'Demam', 'demam', 'Apakah suhu tubuh anda sama atau lebih tinggi dari 37.5 derajat celsius?'),
(47, 'Flu-like tanpa demam', 'Sakit kepala', 'kepala', 'Apakah anda merasakan sakit kepala?'),
(48, 'Flu-like tanpa demam', 'Hilang indera penciuman', 'cium', 'Apakah anda tidak dapat mencium aroma?'),
(49, 'Flu-like tanpa demam', 'Nyeri otot', 'otot', 'Apakah anda mengalami rasa sakit pada otot tubuh?'),
(50, 'Flu-like tanpa demam', 'Batuk', 'batuk', 'Apakah anda mengalami batuk-batuk?'),
(51, 'Flu-like dengan demam', 'Sakit tenggorokan', 'tenggorokan', 'Apakah anda mengalami sakit tenggorokan?'),
(52, 'Flu-like dengan demam', 'Demam', 'demam', 'Apakah suhu tubuh anda sama atau lebih tinggi dari 37.5 derajat celsius?'),
(53, 'Flu-like dengan demam', 'Sakit kepala', 'kepala', 'Apakah anda merasakan sakit kepala?'),
(54, 'Flu-like dengan demam', 'Hilang indera penciuman', 'cium', 'Apakah anda tidak dapat mencium aroma?'),
(55, 'Flu-like dengan demam', 'Hilang selera makan', 'makan', 'Apakah anda tidak memiliki nafsu makan?'),
(56, 'Flu-like dengan demam', 'Batuk', 'batuk', 'Apakah anda mengalami batuk-batuk?'),
(57, 'Gastrointestinal', 'Sakit tenggorokan', 'tenggorokan', 'Apakah anda mengalami sakit tenggorokan?'),
(58, 'Gastrointestinal', 'Demam', 'demam', 'Apakah suhu tubuh anda sama atau lebih tinggi dari 37.5 derajat celsius?'),
(59, 'Gastrointestinal', 'Sakit kepala', 'kepala', 'Apakah anda merasakan sakit kepala?'),
(60, 'Gastrointestinal', 'Hilang indera penciuman', 'cium', 'Apakah anda tidak dapat mencium aroma?'),
(61, 'Gastrointestinal', 'Hilang selera makan', 'makan', 'Apakah anda tidak memiliki nafsu makan?'),
(62, 'Gastrointestinal', 'Batuk', 'batuk', 'Apakah anda mengalami batuk-batuk?'),
(63, 'Gastrointestinal', 'Diare', 'diare', 'Apakah anda mengalami diare?'),
(64, 'Tipe parah tingkat satu', 'Demam', 'demam', 'Apakah suhu tubuh anda sama atau lebih tinggi dari 37.5 derajat celsius?'),
(65, 'Tipe parah tingkat satu', 'Sakit kepala', 'kepala', 'Apakah anda merasakan sakit kepala?'),
(66, 'Tipe parah tingkat satu', 'Hilang indera penciuman', 'cium', 'Apakah anda tidak dapat mencium aroma?'),
(67, 'Tipe parah tingkat satu', 'Batuk', 'batuk', 'Apakah anda mengalami batuk-batuk?'),
(68, 'Tipe parah tingkat satu', 'Kelelahan', 'lelah', 'Apakah anda selalu merasa kelelahan walau sedang beristirahat?'),
(69, 'Tipe parah tingkat dua', 'Sakit tenggorokan', 'tenggorokan', 'Apakah anda mengalami sakit tenggorokan?'),
(70, 'Tipe parah tingkat dua', 'Demam', 'demam', 'Apakah suhu tubuh anda sama atau lebih tinggi dari 37.5 derajat celsius?'),
(71, 'Tipe parah tingkat dua', 'Sakit kepala', 'kepala', 'Apakah anda merasakan sakit kepala?'),
(72, 'Tipe parah tingkat dua', 'Hilang indera penciuman', 'cium', 'Apakah anda tidak dapat mencium aroma?'),
(73, 'Tipe parah tingkat dua', 'Nyeri otot', 'otot', 'Apakah anda mengalami rasa sakit pada otot tubuh?'),
(74, 'Tipe parah tingkat dua', 'Batuk', 'batuk', 'Apakah anda mengalami batuk-batuk?'),
(75, 'Tipe parah tingkat dua', 'Kelelahan', 'lelah', 'Apakah anda selalu merasa kelelahan walau sedang beristirahat?'),
(76, 'Tipe parah tingkat dua', 'Hilang selera makan', 'makan', 'Apakah anda tidak memiliki nafsu makan?'),
(77, 'Tipe parah tingkat dua', 'Sulit berpikir jernih', 'jernih', 'Apakah anda mengalami kesulitan untuk berpikit jernih?'),
(78, 'Tipe parah tingkat dua', 'Masalah Ingatan', 'ingatan', 'Apakah anda mengalami kesulitan dalam mengingat?'),
(79, 'Tipe parah tingkat tiga', 'Sakit tenggorokan', 'tenggorokan', 'Apakah anda mengalami sakit tenggorokan?'),
(80, 'Tipe parah tingkat tiga', 'Demam', 'demam', 'Apakah suhu tubuh anda sama atau lebih tinggi dari 37.5 derajat celsius?'),
(81, 'Tipe parah tingkat tiga', 'Sakit kepala', 'kepala', 'Apakah anda merasakan sakit kepala?'),
(82, 'Tipe parah tingkat tiga', 'Hilang indera penciuman', 'cium', 'Apakah anda tidak dapat mencium aroma?'),
(83, 'Tipe parah tingkat tiga', 'Nyeri otot', 'otot', 'Apakah anda mengalami rasa sakit pada otot tubuh?'),
(84, 'Tipe parah tingkat tiga', 'Batuk', 'batuk', 'Apakah anda mengalami batuk-batuk?'),
(85, 'Tipe parah tingkat tiga', 'Kelelahan', 'lelah', 'Apakah anda selalu merasa kelelahan walau sedang beristirahat?'),
(86, 'Tipe parah tingkat tiga', 'Hilang selera makan', 'makan', 'Apakah anda tidak memiliki nafsu makan?'),
(87, 'Tipe parah tingkat tiga', 'Diare', 'diare', 'Apakah anda mengalami diare?'),
(88, 'Tipe parah tingkat tiga', 'Sulit berpikir jernih', 'jernih', 'Apakah anda mengalami kesulitan untuk berpikit jernih?'),
(89, 'Tipe parah tingkat tiga', 'Masalah Ingatan', 'ingatan', 'Apakah anda mengalami kesulitan dalam mengingat?'),
(90, 'Tipe parah tingkat tiga', 'Sesak napas', 'napas', 'Apakah anda mengalami kesulitan bernapas?'),
(91, 'Tipe parah tingkat tiga', 'Pembiruan', 'biru', 'Apakah kuku, kulit serta selaput lendir anda berwarna kebiruan?');

-- --------------------------------------------------------

--
-- Table structure for table `gejala`
--

CREATE TABLE `gejala` (
  `kode_gejala` int(11) NOT NULL,
  `nama_gejala` varchar(200) NOT NULL,
  `codename` varchar(100) DEFAULT NULL,
  `pertanyaan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gejala`
--

INSERT INTO `gejala` (`kode_gejala`, `nama_gejala`, `codename`, `pertanyaan`) VALUES
(1, 'Sakit tenggorokan', 'tenggorokan', 'Apakah anda mengalami sakit tenggorokan?'),
(2, 'Flu parah', 'flu', NULL),
(3, 'Sakit kepala', 'kepala', 'Apakah anda merasakan sakit kepala?'),
(4, 'Demam', 'demam', 'Apakah suhu tubuh anda sama atau lebih tinggi dari 37.5 derajat celsius?'),
(5, 'Batuk', 'batuk', 'Apakah anda mengalami batuk-batuk?'),
(6, 'Sakit perut', 'perut', 'Apakah anda merasakan sensasi tidak nyaman pada bagian perut?'),
(7, 'Muntah', 'muntah', ' Apakah anda mengalami muntah?'),
(8, 'Mual', 'mual', NULL),
(9, 'Nyeri sendi', 'sendi', 'Apakah anda mengalami rasa sakit pada bagian sendi?'),
(10, 'Gangguan pendengaran', 'pendengaran', 'Apakah anda tiba-tiba mengalami kesulitan dalam mendengar?'),
(11, 'Hilang selera makan', 'makan', 'Apakah anda tidak memiliki nafsu makan?'),
(12, 'Hilang indera penciuman', 'cium', 'Apakah anda tidak dapat mencium aroma?'),
(13, 'Batuk berlendir', 'batuk_lendir', 'Apakah batuk anda disertai lendir?'),
(14, 'Keluar lendir bervirus dari mulut dan hidung', 'lendir', NULL),
(15, 'Hilang Rasa', 'rasa', 'Apakah anda tidak dapat merasakan rasa makanan?'),
(17, 'Sesak napas', 'napas', 'Apakah anda mengalami kesulitan bernapas?'),
(18, 'Sulit berpikir jernih', 'jernih', 'Apakah anda mengalami kesulitan untuk berpikit jernih?'),
(19, 'Pusing', 'pusing', 'Apakah anda mengalami pusing?'),
(20, 'Malaise', 'malaise', NULL),
(21, 'Kelelahan', 'lelah', 'Apakah anda selalu merasa kelelahan walau sedang beristirahat?'),
(22, 'Nyeri otot', 'otot', 'Apakah anda mengalami rasa sakit pada otot tubuh?'),
(23, 'Diare', 'diare', 'Apakah anda mengalami diare?'),
(24, 'hidung berlendir', 'hidung_lendir', 'Apakah hidung anda mengeluarkan lendir?'),
(25, 'Masalah ingatan', 'ingatan', 'Apakah anda mengalami kesulitan dalam mengingat?'),
(26, 'Pembiruan', 'biru', 'Apakah kuku, kulit serta selaput lendir anda berwarna kebiruan?'),
(27, 'Penurunan saturasi oksigen', 'oksigen', NULL),
(28, 'brain fog', 'brain', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tindakan`
--

CREATE TABLE `tindakan` (
  `kode_tindakan` int(11) NOT NULL,
  `prioritas` varchar(255) NOT NULL,
  `tindakan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tindakan`
--

INSERT INTO `tindakan` (`kode_tindakan`, `prioritas`, `tindakan`) VALUES
(1, 'Rendah', 'Beritahukan petugas medis dan keluarga/orang dekat, lakukan isolasi mandiri selama 14 hari.'),
(2, 'Sedang', 'Temui petugas medis untuk melakukan cek lebih lanjut, minta keluarga/orang dekat anda untuk juga melakukan tes covid.'),
(3, 'Tinggi', 'Temui petugas medis sesegara mungkin, jangan berinteraksi dengan orang lain, dan minta keluarga/orang dekat anda untuk melakukan tes. '),
(4, 'unknown', 'Hubungi petugas medis jika gejala tidak kunjung sembuh.');

-- --------------------------------------------------------

--
-- Table structure for table `tipe`
--

CREATE TABLE `tipe` (
  `kode_tipe` int(11) NOT NULL,
  `nama_tipe` varchar(255) NOT NULL,
  `keterangan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tipe`
--

INSERT INTO `tipe` (`kode_tipe`, `nama_tipe`, `keterangan`) VALUES
(1, 'Flu-like tanpa demam', 'Pasien tidak memiliki gejala demam'),
(2, 'Flu-like dengan demam', 'Pasien mengalami gejala demam'),
(3, 'Gastrointestinal', ''),
(4, 'Tipe parah tingkat satu', 'Biasa disertai dengan suara serak, nyeri dada, dan kelelahan.'),
(5, 'Tipe parah tingkat dua', 'Biasa disertai dengan rasa kebingungan. Segera pergi ke fasilitas medis terdekat untuk mendapat diagnosa lebih lanjut.'),
(6, 'Tipe parah tingkat tiga', 'Biasa disertai dengan gangguan perut dan pernapasan. Segera pergi ke fasilitas medis terdekat untuk mendapat diagnosa lebih lanjut.');

-- --------------------------------------------------------

--
-- Table structure for table `varian`
--

CREATE TABLE `varian` (
  `kode_varian` int(100) NOT NULL,
  `nama_varian` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `varian`
--

INSERT INTO `varian` (`kode_varian`, `nama_varian`) VALUES
(1, 'Varian awal SARS-CoV-19'),
(2, 'Varian Alpha'),
(3, 'Varian Beta'),
(4, 'Varian Delta');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `covid`
--
ALTER TABLE `covid`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`kode_gejala`);

--
-- Indexes for table `tindakan`
--
ALTER TABLE `tindakan`
  ADD PRIMARY KEY (`kode_tindakan`);

--
-- Indexes for table `tipe`
--
ALTER TABLE `tipe`
  ADD PRIMARY KEY (`kode_tipe`);

--
-- Indexes for table `varian`
--
ALTER TABLE `varian`
  ADD PRIMARY KEY (`kode_varian`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `covid`
--
ALTER TABLE `covid`
  MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `gejala`
--
ALTER TABLE `gejala`
  MODIFY `kode_gejala` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tindakan`
--
ALTER TABLE `tindakan`
  MODIFY `kode_tindakan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tipe`
--
ALTER TABLE `tipe`
  MODIFY `kode_tipe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `varian`
--
ALTER TABLE `varian`
  MODIFY `kode_varian` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
