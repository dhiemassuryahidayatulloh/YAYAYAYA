-- phpMyAdmin SQL Dump
-- version 2.9.2
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Feb 27, 2016 at 01:05 PM
-- Server version: 5.0.27
-- PHP Version: 5.2.1
-- 
-- Database: `02-107-008-9`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `jenisservice`
-- 

CREATE TABLE `jenisservice` (
  `idjenisservice` text NOT NULL,
  `nmjenisservice` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `jenisservice`
-- 

INSERT INTO `jenisservice` (`idjenisservice`, `nmjenisservice`) VALUES 
('124', 'ganti aki'),
('125', 'cek servic kalbulator'),
('444', 'ganti dop'),
('ydwtd', 'ganti rem'),
('275', 'ganti ban');

-- --------------------------------------------------------

-- 
-- Table structure for table `karyawan`
-- 

CREATE TABLE `karyawan` (
  `nik` text NOT NULL,
  `nmkaryawan` text NOT NULL,
  `almtkaryawan` text NOT NULL,
  `telpkaryawan` text NOT NULL,
  `nosetoran` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `karyawan`
-- 

INSERT INTO `karyawan` (`nik`, `nmkaryawan`, `almtkaryawan`, `telpkaryawan`, `nosetoran`) VALUES 
('111', 'kabul', 'jejeran', '085866665364', '334'),
('113', 'gendhot', 'pleret', '087654354624', '443'),
('112', 'kamil', 'poyahan', '089632652358', '223');

-- --------------------------------------------------------

-- 
-- Table structure for table `kendaraan`
-- 

CREATE TABLE `kendaraan` (
  `noplat` text NOT NULL,
  `tahun` text NOT NULL,
  `tarifperjam` varchar(20) NOT NULL,
  `statusrental` text NOT NULL,
  `kodeservice` text NOT NULL,
  `idtype` text NOT NULL,
  `kodepemilik` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `kendaraan`
-- 

INSERT INTO `kendaraan` (`noplat`, `tahun`, `tarifperjam`, `statusrental`, `kodeservice`, `idtype`, `kodepemilik`) VALUES 
('AB7654HG', '1988', 'Rp.500.000/jam', 'keluar', 'k01', 'F1', 'ab'),
('AD3452GH', '1975', 'Rp.600.000/jam', 'keluar', 'k02', 'F2', 'cb'),
('AA6754HJ', '1980', 'Rp.200.000/jam', 'kandang', 'k03', 'F3', 'bc');

-- --------------------------------------------------------

-- 
-- Table structure for table `login`
-- 

CREATE TABLE `login` (
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `login`
-- 

INSERT INTO `login` (`username`, `password`) VALUES 
('DHIEMAZ', 'KANCHEL');

-- --------------------------------------------------------

-- 
-- Table structure for table `merk`
-- 

CREATE TABLE `merk` (
  `kodemerk` text NOT NULL,
  `nmmerk` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `merk`
-- 

INSERT INTO `merk` (`kodemerk`, `nmmerk`) VALUES 
('A1', 'AVANZA'),
('K1', 'KIJANG'),
('T1', 'XENIA'),
('S1', 'COROLLA');

-- --------------------------------------------------------

-- 
-- Table structure for table `pelanggan`
-- 

CREATE TABLE `pelanggan` (
  `noktp` text NOT NULL,
  `namapel` text NOT NULL,
  `alamatpel` text NOT NULL,
  `telppel` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `pelanggan`
-- 

INSERT INTO `pelanggan` (`noktp`, `namapel`, `alamatpel`, `telppel`) VALUES 
('1111', 'KUNCHONG', 'SLEMAN', '0879654321'),
('1112', 'SUGIYONO', 'BANTUL', '08576894321'),
('1113', 'BUDIYONO', 'GUNUNG KIDUL', '087658943215'),
('1114', 'SUNARYO', 'KULONPROGO', '087965432135');

-- --------------------------------------------------------

-- 
-- Table structure for table `pemilik`
-- 

CREATE TABLE `pemilik` (
  `kodepemilik` text NOT NULL,
  `nmpemilik` text NOT NULL,
  `almtpemilik` text NOT NULL,
  `telppemilik` text NOT NULL,
  `nosetoran` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `pemilik`
-- 

INSERT INTO `pemilik` (`kodepemilik`, `nmpemilik`, `almtpemilik`, `telppemilik`, `nosetoran`) VALUES 
('ab', 'MUGIO', 'KIROBRAYAN', '0898765432156', '334'),
('bc', 'BAGIO', 'SILUK', '0879765432134', '443'),
('cb', 'SUDIO', 'PUNDONG', '0876967543214', '441');

-- --------------------------------------------------------

-- 
-- Table structure for table `service`
-- 

CREATE TABLE `service` (
  `kodeservice` text NOT NULL,
  `tglservice` date NOT NULL,
  `biayaservice` varchar(20) NOT NULL,
  `idjenisservice` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `service`
-- 

INSERT INTO `service` (`kodeservice`, `tglservice`, `biayaservice`, `idjenisservice`) VALUES 
('k02', '2016-02-16', 'Rp.300.000', '123'),
('k03', '2016-02-17', 'Rp.850.000', '125');

-- --------------------------------------------------------

-- 
-- Table structure for table `setoran`
-- 

CREATE TABLE `setoran` (
  `nosetoran` text NOT NULL,
  `tglsetoran` date NOT NULL,
  `jumlah` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `setoran`
-- 

INSERT INTO `setoran` (`nosetoran`, `tglsetoran`, `jumlah`) VALUES 
('334', '2016-02-15', 'Rp.3.430.000'),
('443', '2016-02-16', 'Rp.6.250.000');

-- --------------------------------------------------------

-- 
-- Table structure for table `sopir`
-- 

CREATE TABLE `sopir` (
  `idsopir` text NOT NULL,
  `nmsopir` text NOT NULL,
  `almtsopir` text NOT NULL,
  `telpsopir` text NOT NULL,
  `nosim` text NOT NULL,
  `tarifperjam` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `sopir`
-- 

INSERT INTO `sopir` (`idsopir`, `nmsopir`, `almtsopir`, `telpsopir`, `nosim`, `tarifperjam`) VALUES 
('A01', 'SARDI', 'DLINGO', '087689543216', '1111113345', 'Rp. 200.000/jam'),
('B02', 'WARSONO', 'PONGGOK', '085679854321', '1111116753', 'Rp.400.000/jam');

-- --------------------------------------------------------

-- 
-- Table structure for table `transaksisewa`
-- 

CREATE TABLE `transaksisewa` (
  `notransaksi` text NOT NULL,
  `tglpinjam` date NOT NULL,
  `tglkembalirencana` date NOT NULL,
  `kondisimobilpinjam` text NOT NULL,
  `kondisimobilkembali` text NOT NULL,
  `nik` text NOT NULL,
  `noktp` text NOT NULL,
  `idsopir` text NOT NULL,
  `noplat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `transaksisewa`
-- 

INSERT INTO `transaksisewa` (`notransaksi`, `tglpinjam`, `tglkembalirencana`, `kondisimobilpinjam`, `kondisimobilkembali`, `nik`, `noktp`, `idsopir`, `noplat`) VALUES 
('a11', '2016-04-15', '2016-05-05', 'kotor', 'baik', '112', '1115werty45', 'b03', 'AB6785HJ'),
('8328', '2016-03-02', '2016-03-06', 'mulus', 'lecet', '19281', '7832', '22891', 'ab2281ft'),
('5678', '2017-03-04', '2017-12-03', 'mulus', 'peyok', '34567', '45678', '9876', 'ab1874kl');

-- --------------------------------------------------------

-- 
-- Table structure for table `type`
-- 

CREATE TABLE `type` (
  `idtype` text NOT NULL,
  `nmtype` text NOT NULL,
  `kodemerk` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `type`
-- 

INSERT INTO `type` (`idtype`, `nmtype`, `kodemerk`) VALUES 
('F2', 'minibus', 'A1'),
('F3', 'sedan', 'S1');
