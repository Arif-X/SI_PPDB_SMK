-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 07, 2021 at 06:34 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `si_ppdb_smk`
--

-- --------------------------------------------------------

--
-- Table structure for table `foto`
--

CREATE TABLE `foto` (
  `uid` int(11) NOT NULL,
  `pasphoto` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `foto`
--

INSERT INTO `foto` (`uid`, `pasphoto`) VALUES
(2100001, 0x2e2e2f2e2e2f2e2e2f66696c652f706173666f746f2f312e6a706567),
(2100003, 0x2e2e2f2e2e2f2e2e2f66696c652f706173666f746f2f31202833292e6a706567);

-- --------------------------------------------------------

--
-- Table structure for table `ijazah`
--

CREATE TABLE `ijazah` (
  `uid` int(11) NOT NULL,
  `sekolah_asal` varchar(100) NOT NULL,
  `ijazah` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ijazah`
--

INSERT INTO `ijazah` (`uid`, `sekolah_asal`, `ijazah`) VALUES
(2100001, 'SMPN HORE', 0x2e2e2f2e2e2f2e2e2f66696c652f696a617a61682f312e6a706567),
(2100003, 'SMPN 1', 0x2e2e2f2e2e2f2e2e2f66696c652f696a617a61682f64656661756c74202831292e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id_jurusan` int(11) NOT NULL,
  `id_sekolah` int(11) NOT NULL,
  `nama_jurusan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `id_sekolah`, `nama_jurusan`) VALUES
(210200005, 210100003, 'Test'),
(210200006, 210100003, 'RPL'),
(210200007, 210100005, 'RPL'),
(210200008, 210100005, 'TKJ'),
(210200009, 210100005, 'Multimedia');

--
-- Triggers `jurusan`
--
DELIMITER $$
CREATE TRIGGER `insert_jurusan` AFTER INSERT ON `jurusan` FOR EACH ROW BEGIN 
INSERT INTO profil_jurusan (id_jurusan) VALUES (NEW.id_jurusan);
INSERT INTO kapasitas (id_jurusan) VALUES (NEW.id_jurusan);
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `kapasitas`
--

CREATE TABLE `kapasitas` (
  `id_jurusan` int(11) NOT NULL,
  `kapasitas` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kapasitas`
--

INSERT INTO `kapasitas` (`id_jurusan`, `kapasitas`) VALUES
(210200005, 50),
(210200006, 0),
(210200007, 100),
(210200008, 150),
(210200009, 150);

-- --------------------------------------------------------

--
-- Table structure for table `mendaftar_di`
--

CREATE TABLE `mendaftar_di` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `id_jurusan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mendaftar_di`
--

INSERT INTO `mendaftar_di` (`id`, `uid`, `id_jurusan`) VALUES
(18, 2100003, 210200009),
(19, 2100003, 210200007),
(25, 2100003, 210200008);

-- --------------------------------------------------------

--
-- Table structure for table `profil_jurusan`
--

CREATE TABLE `profil_jurusan` (
  `id_jurusan` int(11) NOT NULL,
  `visi` text DEFAULT NULL,
  `misi` text DEFAULT NULL,
  `kaprodi` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profil_jurusan`
--

INSERT INTO `profil_jurusan` (`id_jurusan`, `visi`, `misi`, `kaprodi`) VALUES
(210200005, NULL, NULL, NULL),
(210200006, NULL, NULL, NULL),
(210200007, NULL, NULL, NULL),
(210200008, NULL, NULL, NULL),
(210200009, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `profil_sekolah`
--

CREATE TABLE `profil_sekolah` (
  `id_sekolah` int(11) NOT NULL,
  `alamat` varchar(250) DEFAULT NULL,
  `visi` text DEFAULT NULL,
  `misi` text DEFAULT NULL,
  `kepala_sekolah` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profil_sekolah`
--

INSERT INTO `profil_sekolah` (`id_sekolah`, `alamat`, `visi`, `misi`, `kepala_sekolah`) VALUES
(210100003, 'Alamat Sekolah', 'Visi', 'Misi', 'Kepala Sekolah'),
(210100004, 'Jl. Joyo Tamansari No. 767 Gang 2', 'Visi asdgfh', 'Misi', 'Kepsek'),
(210100005, 'Jl. Tuban', 'Visi', 'Misi', 'Kepsek');

-- --------------------------------------------------------

--
-- Table structure for table `profil_user`
--

CREATE TABLE `profil_user` (
  `uid` int(11) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `nama_ayah` varchar(100) NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `alamat` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profil_user`
--

INSERT INTO `profil_user` (`uid`, `tempat_lahir`, `tanggal_lahir`, `nama_ayah`, `nama_ibu`, `alamat`) VALUES
(2100001, 'Tuban', '2021-04-08', 'Bapak', 'Ibu', 'Alamat'),
(2100003, 'Tuban', '2021-12-31', 'Bapak', 'Ibu', 'Jl. Joyo Tamansari No. 767 Gang 2');

-- --------------------------------------------------------

--
-- Table structure for table `sekolah`
--

CREATE TABLE `sekolah` (
  `id_sekolah` int(11) NOT NULL,
  `nis` int(50) NOT NULL,
  `nama_sekolah` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sekolah`
--

INSERT INTO `sekolah` (`id_sekolah`, `nis`, `nama_sekolah`) VALUES
(210100003, 123456789, 'Sekolah Test'),
(210100004, 987654321, 'Sekolah'),
(210100005, 1212121212, 'SMKN 1 Tuban');

--
-- Triggers `sekolah`
--
DELIMITER $$
CREATE TRIGGER `insert_sekolah` AFTER INSERT ON `sekolah` FOR EACH ROW BEGIN 
INSERT INTO profil_sekolah (id_sekolah) VALUES (NEW.id_sekolah);
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(11) NOT NULL,
  `nisn` bigint(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(50) NOT NULL DEFAULT 'Peserta'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `nisn`, `nama`, `email`, `password`, `level`) VALUES
(2100001, 123456789, 'Arip', 'ariffudinnotresponding@gmail.com', 'akuganteng', 'Admin'),
(2100003, 12345678, 'Arif', 'akuganteng@gmail.com', 'akuganteng', 'Peserta');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `foto`
--
ALTER TABLE `foto`
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `ijazah`
--
ALTER TABLE `ijazah`
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jurusan`),
  ADD KEY `id_sekolah` (`id_sekolah`);

--
-- Indexes for table `kapasitas`
--
ALTER TABLE `kapasitas`
  ADD KEY `id_jurusan` (`id_jurusan`);

--
-- Indexes for table `mendaftar_di`
--
ALTER TABLE `mendaftar_di`
  ADD PRIMARY KEY (`id`),
  ADD KEY `uid` (`uid`),
  ADD KEY `id_jurusan` (`id_jurusan`);

--
-- Indexes for table `profil_jurusan`
--
ALTER TABLE `profil_jurusan`
  ADD KEY `id_jurusan` (`id_jurusan`);

--
-- Indexes for table `profil_sekolah`
--
ALTER TABLE `profil_sekolah`
  ADD KEY `id_sekolah` (`id_sekolah`);

--
-- Indexes for table `profil_user`
--
ALTER TABLE `profil_user`
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `sekolah`
--
ALTER TABLE `sekolah`
  ADD PRIMARY KEY (`id_sekolah`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=210200010;

--
-- AUTO_INCREMENT for table `mendaftar_di`
--
ALTER TABLE `mendaftar_di`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `sekolah`
--
ALTER TABLE `sekolah`
  MODIFY `id_sekolah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=210100006;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2100004;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `foto`
--
ALTER TABLE `foto`
  ADD CONSTRAINT `foto_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ijazah`
--
ALTER TABLE `ijazah`
  ADD CONSTRAINT `ijazah_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD CONSTRAINT `jurusan_ibfk_1` FOREIGN KEY (`id_sekolah`) REFERENCES `sekolah` (`id_sekolah`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kapasitas`
--
ALTER TABLE `kapasitas`
  ADD CONSTRAINT `kapasitas_ibfk_2` FOREIGN KEY (`id_jurusan`) REFERENCES `jurusan` (`id_jurusan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mendaftar_di`
--
ALTER TABLE `mendaftar_di`
  ADD CONSTRAINT `mendaftar_di_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mendaftar_di_ibfk_3` FOREIGN KEY (`id_jurusan`) REFERENCES `jurusan` (`id_jurusan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `profil_jurusan`
--
ALTER TABLE `profil_jurusan`
  ADD CONSTRAINT `profil_jurusan_ibfk_1` FOREIGN KEY (`id_jurusan`) REFERENCES `jurusan` (`id_jurusan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `profil_sekolah`
--
ALTER TABLE `profil_sekolah`
  ADD CONSTRAINT `profil_sekolah_ibfk_1` FOREIGN KEY (`id_sekolah`) REFERENCES `sekolah` (`id_sekolah`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `profil_user`
--
ALTER TABLE `profil_user`
  ADD CONSTRAINT `profil_user_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
