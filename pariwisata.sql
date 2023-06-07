-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2023 at 01:03 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pariwisata`
--

-- --------------------------------------------------------

--
-- Table structure for table `detailbooking`
--

CREATE TABLE `detailbooking` (
  `IdBooking` int(11) NOT NULL,
  `Id_User` int(11) NOT NULL,
  `Id_Wisata` int(11) DEFAULT NULL,
  `KodeTiket` int(11) DEFAULT NULL,
  `Total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detailbooking`
--

INSERT INTO `detailbooking` (`IdBooking`, `Id_User`, `Id_Wisata`, `KodeTiket`, `Total`) VALUES
(1011, 1, 1, 1111, 550000),
(1012, 2, NULL, 1112, 4300000);

-- --------------------------------------------------------

--
-- Table structure for table `login_admin`
--

CREATE TABLE `login_admin` (
  `Id_Admin` int(11) NOT NULL,
  `NamaAdmin` char(100) NOT NULL,
  `PassAdmin` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_admin`
--

INSERT INTO `login_admin` (`Id_Admin`, `NamaAdmin`, `PassAdmin`) VALUES
(1, 'Afif', '14202');

-- --------------------------------------------------------

--
-- Table structure for table `login_user`
--

CREATE TABLE `login_user` (
  `Id_User` int(11) NOT NULL,
  `Username` char(100) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Passw` varchar(100) DEFAULT NULL,
  `Nama` char(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_user`
--

INSERT INTO `login_user` (`Id_User`, `Username`, `Email`, `Passw`, `Nama`) VALUES
(0, 'aft', 'afif@gmail', 'p', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `metodebayar`
--

CREATE TABLE `metodebayar` (
  `IdMetode` int(11) NOT NULL,
  `JenisMetode` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `metodebayar`
--

INSERT INTO `metodebayar` (`IdMetode`, `JenisMetode`) VALUES
(1145, 'Debit'),
(1146, 'Tunai');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `Id_Pemesanan` int(11) NOT NULL,
  `Id_Jenis` int(11) NOT NULL,
  `Id_Wisata` int(11) NOT NULL,
  `Id_User` int(11) NOT NULL,
  `IdMetode` int(11) DEFAULT NULL,
  `Total` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tiket`
--

CREATE TABLE `tiket` (
  `KodeTiket` int(6) NOT NULL,
  `Id_Transportasi` int(11) NOT NULL,
  `Nama` char(40) NOT NULL,
  `Relasi` varchar(10) NOT NULL,
  `Keberangkatan` varchar(50) NOT NULL,
  `Kedatangan` varchar(50) NOT NULL,
  `Harga` int(12) NOT NULL,
  `Metode_Pembayaran` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tiket`
--

INSERT INTO `tiket` (`KodeTiket`, `Id_Transportasi`, `Nama`, `Relasi`, `Keberangkatan`, `Kedatangan`, `Harga`, `Metode_Pembayaran`) VALUES
(1111, 10003, '0', 'SGU-BD', 'SGU 07:30 ', 'BD 17:25', 550000, 0),
(1112, 10001, '0', 'CP-KTG', 'CP 14:10', 'KTG 11:05', 430000, 0),
(1113, 10027, '0', 'SBI-GMR', 'SBI 08:00', 'GMR 16:34', 450000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `transportasi`
--

CREATE TABLE `transportasi` (
  `Id_Jenis` int(11) NOT NULL,
  `NamaTransportasi` varchar(30) NOT NULL,
  `Kelas` varchar(50) NOT NULL,
  `Relasi` varchar(50) NOT NULL,
  `WaktuTempuh` varchar(10) NOT NULL,
  `Harga` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transportasi`
--

INSERT INTO `transportasi` (`Id_Jenis`, `NamaTransportasi`, `Kelas`, `Relasi`, `WaktuTempuh`, `Harga`) VALUES
(10001, 'KA Wijayakusuma', 'Ekonomi, Eksekutif', 'CP-KTG', '17j 30m', 300000),
(10003, 'KA Argo Wilis', 'Eksekutif', 'SGU-BD', '9j 30m', 550000),
(10004, 'KA Sri Tanjung', 'Ekonomi', 'LPN-KTG', '12j 50m', 94000),
(10005, 'KA  Argo Semeru', 'Eksekutif', 'SGU-PSE', '10j 35m', 350000),
(10008, 'Ka Sancaka', 'Bisnis', 'SGU-YK', '4j 0m', 250000),
(10009, 'KA Sembrani', 'Eksekutif', 'SBI-PSE', '8j 34m', 450000),
(10014, 'Ka Pandalungan', 'Eksekutif', 'GMR-JR', '', 620000),
(10025, 'KA Argo Bromo Anggrek', 'Executive', 'SBI-GMR', '', 825000),
(10026, 'KA Gumarang', 'Executive', 'PSE-SBI', '10j 9m', 520000),
(10027, 'Ka Sembrani', 'Eksekutif', 'GMR-PSE', '8j 34m', 675000),
(10030, 'KRD Indro', 'Ekonomi', 'SDA-IDO', '8j 34m', 620000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Id_User` int(11) NOT NULL,
  `Username` char(11) NOT NULL,
  `NomorTelefon` int(11) NOT NULL,
  `NIK` int(15) NOT NULL,
  `Email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id_User`, `Username`, `NomorTelefon`, `NIK`, `Email`) VALUES
(1, 'Sova', 548964, 1234567890, 'sovaagent@mail.usa'),
(2, 'Hengky', 540215518, 518181479, '123@mail.usa\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `wisata`
--

CREATE TABLE `wisata` (
  `Id_Wisata` int(11) NOT NULL,
  `NamaDestinasi` char(50) NOT NULL,
  `Harga` int(100) NOT NULL,
  `Alamat` varchar(100) NOT NULL,
  `NomorTelefon` int(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wisata`
--

INSERT INTO `wisata` (`Id_Wisata`, `NamaDestinasi`, `Harga`, `Alamat`, `NomorTelefon`) VALUES
(1, 'WBL BANYUWANGI', 2500000, 'Pantai Tanjung Kodok ; Alamat · Jl. Raya Paciran (ex. Tanjung Kodok), Lamongan ', 32266611),
(2, 'Wisata SMK BIZNET', 100000, 'Planet Namex Nomor 1234', 8458687);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detailbooking`
--
ALTER TABLE `detailbooking`
  ADD PRIMARY KEY (`IdBooking`),
  ADD KEY `Id_User_FK` (`Id_User`),
  ADD KEY `Id_Wisata_FK` (`Id_Wisata`),
  ADD KEY `KodeTiket_FK` (`KodeTiket`);

--
-- Indexes for table `login_admin`
--
ALTER TABLE `login_admin`
  ADD PRIMARY KEY (`Id_Admin`);

--
-- Indexes for table `login_user`
--
ALTER TABLE `login_user`
  ADD PRIMARY KEY (`Id_User`);

--
-- Indexes for table `metodebayar`
--
ALTER TABLE `metodebayar`
  ADD PRIMARY KEY (`IdMetode`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`Id_Pemesanan`),
  ADD KEY `Id_Jenis_FK` (`Id_Jenis`),
  ADD KEY `IdMetode_FK` (`IdMetode`);

--
-- Indexes for table `tiket`
--
ALTER TABLE `tiket`
  ADD PRIMARY KEY (`KodeTiket`),
  ADD KEY `Id_Kendaraan_FK` (`Id_Transportasi`);

--
-- Indexes for table `transportasi`
--
ALTER TABLE `transportasi`
  ADD PRIMARY KEY (`Id_Jenis`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id_User`);

--
-- Indexes for table `wisata`
--
ALTER TABLE `wisata`
  ADD PRIMARY KEY (`Id_Wisata`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detailbooking`
--
ALTER TABLE `detailbooking`
  MODIFY `IdBooking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1013;

--
-- AUTO_INCREMENT for table `login_admin`
--
ALTER TABLE `login_admin`
  MODIFY `Id_Admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `metodebayar`
--
ALTER TABLE `metodebayar`
  MODIFY `IdMetode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1147;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `Id_Pemesanan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tiket`
--
ALTER TABLE `tiket`
  MODIFY `KodeTiket` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100012;

--
-- AUTO_INCREMENT for table `transportasi`
--
ALTER TABLE `transportasi`
  MODIFY `Id_Jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10032;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Id_User` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `wisata`
--
ALTER TABLE `wisata`
  MODIFY `Id_Wisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detailbooking`
--
ALTER TABLE `detailbooking`
  ADD CONSTRAINT `Id_User_FK` FOREIGN KEY (`Id_User`) REFERENCES `user` (`Id_User`),
  ADD CONSTRAINT `Id_Wisata_FK` FOREIGN KEY (`Id_Wisata`) REFERENCES `wisata` (`Id_Wisata`),
  ADD CONSTRAINT `KodeTiket_FK` FOREIGN KEY (`KodeTiket`) REFERENCES `tiket` (`KodeTiket`),
  ADD CONSTRAINT `KodeTransport_FK` FOREIGN KEY (`KodeTiket`) REFERENCES `tiket` (`KodeTiket`);

--
-- Constraints for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `IdMetode_FK` FOREIGN KEY (`IdMetode`) REFERENCES `metodebayar` (`IdMetode`),
  ADD CONSTRAINT `Id_Jenis_FK` FOREIGN KEY (`Id_Jenis`) REFERENCES `transportasi` (`Id_Jenis`);

--
-- Constraints for table `tiket`
--
ALTER TABLE `tiket`
  ADD CONSTRAINT `Id_Kendaraan_FK` FOREIGN KEY (`Id_Transportasi`) REFERENCES `transportasi` (`Id_Jenis`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
