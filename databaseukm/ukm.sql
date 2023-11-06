-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2023 at 02:33 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ukm`
--

-- --------------------------------------------------------

--
-- Table structure for table `fungsionaris`
--
CREATE DATABASE ukm;
CREATE TABLE `fungsionaris` (
  `id_fungsionaris` int(11) NOT NULL,
  `jabatan` varchar(45) DEFAULT NULL,
  `tgl_mulai` date DEFAULT NULL,
  `tgl_selesai` date DEFAULT NULL,
  `status` enum('aktif','tidakaktif') DEFAULT NULL,
  `fungsionariscol` varchar(45) DEFAULT NULL,
  `id_anggota_ukm` int(11) NOT NULL,
  `id_jabatan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `nama_jabatan` varchar(45) DEFAULT NULL,
  `deskripsi_jabatan` varchar(45) DEFAULT NULL,
  `id_ukm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_anggota_ukm`
--

CREATE TABLE `tb_anggota_ukm` (
  `id_anggota_ukm` int(11) NOT NULL,
  `id_mahasiswa` int(11) NOT NULL,
  `id_devisi` int(11) NOT NULL,
  `tgl_mulai` date DEFAULT NULL,
  `tgl_selesai` date DEFAULT NULL,
  `status` enum('aktif','tidakaktif') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_daftar_anggota`
--

CREATE TABLE `tb_daftar_anggota` (
  `id_daftar_anggota` int(11) NOT NULL,
  `alasan` text DEFAULT NULL,
  `devisi` varchar(45) DEFAULT NULL,
  `id_mahasiswa` int(11) NOT NULL,
  `id_ukm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_daftar_fungsio`
--

CREATE TABLE `tb_daftar_fungsio` (
  `id_daftar_fungsio` int(11) NOT NULL,
  `id_mahasiswa` int(11) NOT NULL,
  `id_ukm` int(11) NOT NULL,
  `alasan` varchar(45) DEFAULT NULL,
  `jabatan` varchar(45) DEFAULT NULL,
  `devisi` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_devisi`
--

CREATE TABLE `tb_devisi` (
  `id_devisi` int(11) NOT NULL,
  `nama_devisi` varchar(45) DEFAULT NULL,
  `id_ukm` int(11) NOT NULL,
  `tgl_devisi` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_jurusan`
--

CREATE TABLE `tb_jurusan` (
  `id_jurusan` int(11) NOT NULL,
  `nama_jurusan` varchar(60) DEFAULT NULL,
  `NoSKJurusan` varchar(50) DEFAULT NULL,
  `Kajur` varchar(60) DEFAULT NULL,
  `keterangan` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_lomba`
--

CREATE TABLE `tb_lomba` (
  `id_lomba` int(11) NOT NULL,
  `id_proker` int(11) NOT NULL,
  `nama_lomba` varchar(45) DEFAULT NULL,
  `tgl_lomba` varchar(45) DEFAULT NULL,
  `deskrips_lomba` varchar(45) DEFAULT NULL,
  `peraturan_lomba` varchar(45) DEFAULT NULL,
  `tgl_selesai` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_mahasiswa`
--

CREATE TABLE `tb_mahasiswa` (
  `id_mahasiswa` int(11) NOT NULL,
  `nim` int(11) NOT NULL,
  `nama_mahasiswa` varchar(100) DEFAULT NULL,
  `angkatan` year(4) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `no_telp` varchar(15) DEFAULT NULL,
  `level` enum('user','admin') DEFAULT NULL,
  `img_mahasiswa` varchar(45) DEFAULT NULL,
  `img_ktm` varchar(45) DEFAULT NULL,
  `status` enum('aktif','tidakaktif') DEFAULT NULL,
  `id_prodi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengurus_ukm`
--

CREATE TABLE `tb_pengurus_ukm` (
  `id_anggota_organisasi` int(11) NOT NULL,
  `jabatan` enum('ketua','wakil') DEFAULT NULL,
  `status` enum('aktif','tidakaktif') DEFAULT NULL,
  `tgl_mulai` time DEFAULT NULL,
  `tgl_selesai` time DEFAULT NULL,
  `id_ukm` int(11) NOT NULL,
  `id_mahasiswa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_prodi`
--

CREATE TABLE `tb_prodi` (
  `id_prodi` int(11) NOT NULL,
  `nama_prodi` varchar(60) DEFAULT NULL,
  `id_jurusan` int(11) NOT NULL,
  `jenjang` varchar(5) DEFAULT NULL,
  `NoSKPProdi` varchar(45) DEFAULT NULL,
  `Kaprodi` varchar(60) DEFAULT NULL,
  `Keterangan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_proker`
--

CREATE TABLE `tb_proker` (
  `id_proker` int(11) NOT NULL,
  `nama_proker` varchar(45) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `peraturan` text DEFAULT NULL,
  `id_ukm` int(11) NOT NULL,
  `tgl_mulai` varchar(45) DEFAULT NULL,
  `tgl_selesai` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_ukm`
--

CREATE TABLE `tb_ukm` (
  `id_ukm` int(11) NOT NULL,
  `nama_ukm` varchar(45) DEFAULT NULL,
  `deskripsi` varchar(45) DEFAULT NULL,
  `peraturan` varchar(45) DEFAULT NULL,
  `img_ukm` varchar(45) DEFAULT NULL,
  `tgl_buat` time DEFAULT NULL,
  `tb_ukmcol` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fungsionaris`
--
ALTER TABLE `fungsionaris`
  ADD PRIMARY KEY (`id_fungsionaris`),
  ADD KEY `fk_fungsionaris_tb_anggota_ukm1_idx` (`id_anggota_ukm`),
  ADD KEY `fk_fungsionaris_jabatan1_idx` (`id_jabatan`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_jabatan`),
  ADD KEY `fk_jabatan_tb_ukm1_idx` (`id_ukm`);

--
-- Indexes for table `tb_anggota_ukm`
--
ALTER TABLE `tb_anggota_ukm`
  ADD PRIMARY KEY (`id_anggota_ukm`),
  ADD KEY `fk_tb_anggota_ukm_tb_mahasiswa1_idx` (`id_mahasiswa`),
  ADD KEY `fk_tb_anggota_ukm_tb_devisi1_idx` (`id_devisi`);

--
-- Indexes for table `tb_daftar_anggota`
--
ALTER TABLE `tb_daftar_anggota`
  ADD PRIMARY KEY (`id_daftar_anggota`),
  ADD KEY `fk_tb_daftar_tb_mahasiswa1_idx` (`id_mahasiswa`),
  ADD KEY `fk_tb_daftar_tb_ukm1_idx` (`id_ukm`);

--
-- Indexes for table `tb_daftar_fungsio`
--
ALTER TABLE `tb_daftar_fungsio`
  ADD PRIMARY KEY (`id_daftar_fungsio`),
  ADD KEY `fk_tb_mahasiswa_has_tb_ukm_tb_ukm1_idx` (`id_ukm`),
  ADD KEY `fk_tb_mahasiswa_has_tb_ukm_tb_mahasiswa1_idx` (`id_mahasiswa`);

--
-- Indexes for table `tb_devisi`
--
ALTER TABLE `tb_devisi`
  ADD PRIMARY KEY (`id_devisi`),
  ADD KEY `fk_tb_devisi_tb_ukm1_idx` (`id_ukm`);

--
-- Indexes for table `tb_jurusan`
--
ALTER TABLE `tb_jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `tb_lomba`
--
ALTER TABLE `tb_lomba`
  ADD PRIMARY KEY (`id_lomba`),
  ADD KEY `fk_tb_lomba_tb_proker1_idx` (`id_proker`);

--
-- Indexes for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  ADD PRIMARY KEY (`id_mahasiswa`),
  ADD UNIQUE KEY `nim_UNIQUE` (`nim`),
  ADD KEY `fk_tb_mahasiswa_tb_prodi1_idx` (`id_prodi`);

--
-- Indexes for table `tb_pengurus_ukm`
--
ALTER TABLE `tb_pengurus_ukm`
  ADD PRIMARY KEY (`id_anggota_organisasi`),
  ADD KEY `fk_tb_pengurus_ukm_tb_ukm1_idx` (`id_ukm`),
  ADD KEY `fk_tb_pengurus_ukm_tb_mahasiswa1_idx` (`id_mahasiswa`);

--
-- Indexes for table `tb_prodi`
--
ALTER TABLE `tb_prodi`
  ADD PRIMARY KEY (`id_prodi`),
  ADD KEY `fk_tb__tb_jurusan1_idx` (`id_jurusan`);

--
-- Indexes for table `tb_proker`
--
ALTER TABLE `tb_proker`
  ADD PRIMARY KEY (`id_proker`),
  ADD KEY `fk_tb_proker_tb_ukm1_idx` (`id_ukm`);

--
-- Indexes for table `tb_ukm`
--
ALTER TABLE `tb_ukm`
  ADD PRIMARY KEY (`id_ukm`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_daftar_anggota`
--
ALTER TABLE `tb_daftar_anggota`
  MODIFY `id_daftar_anggota` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_daftar_fungsio`
--
ALTER TABLE `tb_daftar_fungsio`
  MODIFY `id_daftar_fungsio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_devisi`
--
ALTER TABLE `tb_devisi`
  MODIFY `id_devisi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  MODIFY `id_mahasiswa` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `fungsionaris`
--
ALTER TABLE `fungsionaris`
  ADD CONSTRAINT `fk_fungsionaris_jabatan1` FOREIGN KEY (`id_jabatan`) REFERENCES `jabatan` (`id_jabatan`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_fungsionaris_tb_anggota_ukm1` FOREIGN KEY (`id_anggota_ukm`) REFERENCES `tb_anggota_ukm` (`id_anggota_ukm`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD CONSTRAINT `fk_jabatan_tb_ukm1` FOREIGN KEY (`id_ukm`) REFERENCES `tb_ukm` (`id_ukm`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tb_anggota_ukm`
--
ALTER TABLE `tb_anggota_ukm`
  ADD CONSTRAINT `fk_tb_anggota_ukm_tb_devisi1` FOREIGN KEY (`id_devisi`) REFERENCES `tb_devisi` (`id_devisi`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tb_anggota_ukm_tb_mahasiswa1` FOREIGN KEY (`id_mahasiswa`) REFERENCES `tb_mahasiswa` (`id_mahasiswa`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tb_daftar_anggota`
--
ALTER TABLE `tb_daftar_anggota`
  ADD CONSTRAINT `fk_tb_daftar_tb_mahasiswa1` FOREIGN KEY (`id_mahasiswa`) REFERENCES `tb_mahasiswa` (`id_mahasiswa`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tb_daftar_tb_ukm1` FOREIGN KEY (`id_ukm`) REFERENCES `tb_ukm` (`id_ukm`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tb_daftar_fungsio`
--
ALTER TABLE `tb_daftar_fungsio`
  ADD CONSTRAINT `fk_tb_mahasiswa_has_tb_ukm_tb_mahasiswa1` FOREIGN KEY (`id_mahasiswa`) REFERENCES `tb_mahasiswa` (`id_mahasiswa`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tb_mahasiswa_has_tb_ukm_tb_ukm1` FOREIGN KEY (`id_ukm`) REFERENCES `tb_ukm` (`id_ukm`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tb_devisi`
--
ALTER TABLE `tb_devisi`
  ADD CONSTRAINT `fk_tb_devisi_tb_ukm1` FOREIGN KEY (`id_ukm`) REFERENCES `tb_ukm` (`id_ukm`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tb_lomba`
--
ALTER TABLE `tb_lomba`
  ADD CONSTRAINT `fk_tb_lomba_tb_proker1` FOREIGN KEY (`id_proker`) REFERENCES `tb_proker` (`id_proker`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  ADD CONSTRAINT `fk_tb_mahasiswa_tb_prodi1` FOREIGN KEY (`id_prodi`) REFERENCES `tb_prodi` (`id_prodi`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tb_pengurus_ukm`
--
ALTER TABLE `tb_pengurus_ukm`
  ADD CONSTRAINT `fk_tb_pengurus_ukm_tb_mahasiswa1` FOREIGN KEY (`id_mahasiswa`) REFERENCES `tb_mahasiswa` (`id_mahasiswa`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tb_pengurus_ukm_tb_ukm1` FOREIGN KEY (`id_ukm`) REFERENCES `tb_ukm` (`id_ukm`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tb_prodi`
--
ALTER TABLE `tb_prodi`
  ADD CONSTRAINT `fk_tb__tb_jurusan1` FOREIGN KEY (`id_jurusan`) REFERENCES `tb_jurusan` (`id_jurusan`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tb_proker`
--
ALTER TABLE `tb_proker`
  ADD CONSTRAINT `fk_tb_proker_tb_ukm1` FOREIGN KEY (`id_ukm`) REFERENCES `tb_ukm` (`id_ukm`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
