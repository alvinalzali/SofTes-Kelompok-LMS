-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2021 at 01:55 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lms2`
--

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `ID_Dos` varchar(10) NOT NULL,
  `Nama_Dos` varchar(35) NOT NULL,
  `Matkul` varchar(60) NOT NULL,
  `No_WA` varchar(35) NOT NULL,
  `Jam_Matkul` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`ID_Dos`, `Nama_Dos`, `Matkul`, `No_WA`, `Jam_Matkul`) VALUES
('1', 'Dr. Andi Chairunnas, S.Kom. M.Kom.', 'RPL', 'wa.me/6287873999459', 'Selasa, 13.00 - 14.40'),
('2', 'Dr. Herfina, S.Kom.,M.Pd.,M.Kom', 'IMK', 'wa.me/6285777445577', 'Selasa, 15.00 - 16.40'),
('3', 'Agung Prajuhara Putra, M.Kom.', 'SIGIT', 'wa.me/6281911111232', 'Senin, 15.00 - 16.40'),
('4', 'Arie Qurania, M.Kom.', 'BDL', 'wa.me/6285645612539', 'Jumat, 13.00 - 14.40'),
('5', 'Mulyati, M.Kom', 'AI', 'wa.me/6285277517185', 'Kamis, 10.00 - 11.40'),
('6', 'Agus Ismangil, M.Si', 'METNUM', 'wa.me/6281292263427', 'Rabu, 08.00 - 09.40'),
('7', 'Dini Suhartini, S.Kom., MMSI', 'GRAFKOM', 'wa.me/6281292263427', 'Jumat, 08.00 - 09.40');

-- --------------------------------------------------------

--
-- Table structure for table `lms_mahasiswa`
--

CREATE TABLE `lms_mahasiswa` (
  `id_mahasiswa` int(11) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `npm` varchar(9) NOT NULL,
  `status` varchar(10) NOT NULL,
  `kelas` varchar(2) NOT NULL,
  `semester` varchar(2) NOT NULL,
  `jurusan` varchar(20) NOT NULL,
  `wali_dosen` varchar(64) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `tgl_lhr` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lms_mahasiswa`
--

INSERT INTO `lms_mahasiswa` (`id_mahasiswa`, `nama`, `npm`, `status`, `kelas`, `semester`, `jurusan`, `wali_dosen`, `foto`, `tgl_lhr`) VALUES
(1, 'Yusuf Adi Wijaya Putra', '065119129', 'Regular', 'EF', '4', 'Ilmu Komputer', 'boldson', '1.jpg', '1999-07-14'),
(2, 'Muhammad faisal raafi', ' 06511913', 'Regular', 'EF', '4', 'Argo Bisnis', 'boldson', '2.jpg', '2000-07-15');

-- --------------------------------------------------------

--
-- Table structure for table `lms_user`
--

CREATE TABLE `lms_user` (
  `id_user` varchar(32) NOT NULL,
  `nama_user` varchar(64) NOT NULL,
  `password` varchar(255) NOT NULL,
  `hak_akses` varchar(16) NOT NULL,
  `id_mahasiswa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lms_user`
--

INSERT INTO `lms_user` (`id_user`, `nama_user`, `password`, `hak_akses`, `id_mahasiswa`) VALUES
('065119129', 'Yusuf Adi Wijaya Putra', '202cb962ac59075b964b07152d234b70', 'mahasiswa', 1),
('065119132', 'Muhammad faisal raafi', '202cb962ac59075b964b07152d234b70', 'mahasiswa', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`ID_Dos`);

--
-- Indexes for table `lms_mahasiswa`
--
ALTER TABLE `lms_mahasiswa`
  ADD PRIMARY KEY (`id_mahasiswa`);

--
-- Indexes for table `lms_user`
--
ALTER TABLE `lms_user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `id_mahasiswa` (`id_mahasiswa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lms_mahasiswa`
--
ALTER TABLE `lms_mahasiswa`
  MODIFY `id_mahasiswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `lms_user`
--
ALTER TABLE `lms_user`
  ADD CONSTRAINT `lms-user_ibfk_1` FOREIGN KEY (`id_mahasiswa`) REFERENCES `lms_mahasiswa` (`id_mahasiswa`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
