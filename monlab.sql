-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Sep 2020 pada 21.12
-- Versi server: 10.1.32-MariaDB
-- Versi PHP: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `monlab`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `power_alld`
--

CREATE TABLE `power_alld` (
  `id_power` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `power` decimal(10,2) NOT NULL,
  `d` int(2) NOT NULL,
  `m` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `power_alld`
--

INSERT INTO `power_alld` (`id_power`, `time`, `power`, `d`, `m`) VALUES
(1, 1600613703, '36362.00', 20, 9);

-- --------------------------------------------------------

--
-- Struktur dari tabel `power_allh`
--

CREATE TABLE `power_allh` (
  `id_power` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `power` decimal(10,2) NOT NULL,
  `t` int(2) NOT NULL,
  `d` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `power_allh`
--

INSERT INTO `power_allh` (`id_power`, `time`, `power`, `t`, `d`) VALUES
(3, 1600626005, '0.00', 1, 21);

-- --------------------------------------------------------

--
-- Struktur dari tabel `power_allm`
--

CREATE TABLE `power_allm` (
  `id_power` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `power` decimal(10,2) NOT NULL,
  `m` int(2) NOT NULL,
  `y` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `power_allm`
--

INSERT INTO `power_allm` (`id_power`, `time`, `power`, `m`, `y`) VALUES
(2, 1600627772, '0.00', 9, 2020);

-- --------------------------------------------------------

--
-- Struktur dari tabel `power_s1d`
--

CREATE TABLE `power_s1d` (
  `id_power` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `power` decimal(10,2) DEFAULT NULL,
  `d` int(2) NOT NULL,
  `m` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `power_s1d`
--

INSERT INTO `power_s1d` (`id_power`, `time`, `power`, `d`, `m`) VALUES
(1, 1600525023, '15326.00', 19, 9),
(2, 1600525048, '2855.00', 19, 9),
(3, 1600531738, '2854.61', 20, 9),
(6, 1600618227, '4841.86', 20, 9);

-- --------------------------------------------------------

--
-- Struktur dari tabel `power_s1h`
--

CREATE TABLE `power_s1h` (
  `id_power` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `power` decimal(10,2) DEFAULT NULL,
  `t` int(2) NOT NULL,
  `d` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `power_s1h`
--

INSERT INTO `power_s1h` (`id_power`, `time`, `power`, `t`, `d`) VALUES
(5, 1600519461, '2420.93', 0, 0),
(6, 1600519462, '2420.93', 0, 0),
(7, 1600519463, '2420.93', 0, 0),
(8, 1600519463, '2420.93', 0, 0),
(9, 1600521408, '0.00', 1, 0),
(10, 1600521547, '2787.62', 21, 0),
(13, 1600523467, '2854.61', 21, 0),
(15, 1600523819, '2854.61', 21, 19),
(16, 1600531478, '2420.93', 0, 20),
(17, 1600588989, '2420.93', 16, 20),
(21, 1600619328, '0.00', 23, 20);

-- --------------------------------------------------------

--
-- Struktur dari tabel `power_s1m`
--

CREATE TABLE `power_s1m` (
  `id_power` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `power` decimal(10,2) DEFAULT NULL,
  `m` int(2) NOT NULL,
  `y` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `power_s1m`
--

INSERT INTO `power_s1m` (`id_power`, `time`, `power`, `m`, `y`) VALUES
(2, 1600533920, '21035.61', 9, 2020),
(3, 1600583424, '21035.61', 9, 2020),
(7, 1600618459, '25877.47', 9, 2020);

-- --------------------------------------------------------

--
-- Struktur dari tabel `power_s2d`
--

CREATE TABLE `power_s2d` (
  `id_power` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `power` decimal(10,2) NOT NULL,
  `d` int(2) NOT NULL,
  `m` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `power_s2d`
--

INSERT INTO `power_s2d` (`id_power`, `time`, `power`, `d`, `m`) VALUES
(1, 1600586012, '9407.20', 20, 9),
(3, 1600586054, '9407.20', 20, 9),
(6, 1600586183, '0.00', 20, 9),
(8, 1600586445, '0.00', 20, 9);

-- --------------------------------------------------------

--
-- Struktur dari tabel `power_s2h`
--

CREATE TABLE `power_s2h` (
  `id_power` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `power` decimal(10,2) DEFAULT NULL,
  `t` int(2) NOT NULL,
  `d` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `power_s2h`
--

INSERT INTO `power_s2h` (`id_power`, `time`, `power`, `t`, `d`) VALUES
(2, 1600585666, '2945.80', 15, 20),
(3, 1600585803, '2945.80', 15, 20),
(4, 1600585883, '0.00', 15, 20),
(5, 1600585888, '3515.60', 15, 20);

-- --------------------------------------------------------

--
-- Struktur dari tabel `power_s2m`
--

CREATE TABLE `power_s2m` (
  `id_power` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `power` decimal(10,2) DEFAULT NULL,
  `m` int(2) NOT NULL,
  `y` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `power_s3d`
--

CREATE TABLE `power_s3d` (
  `id_power` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `power` decimal(10,2) DEFAULT NULL,
  `d` int(2) NOT NULL,
  `m` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `power_s3d`
--

INSERT INTO `power_s3d` (`id_power`, `time`, `power`, `d`, `m`) VALUES
(1, 1600525023, '15326.00', 19, 9),
(2, 1600525048, '2855.00', 19, 9),
(3, 1600531738, '2854.61', 20, 9);

-- --------------------------------------------------------

--
-- Struktur dari tabel `power_s3h`
--

CREATE TABLE `power_s3h` (
  `id_power` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `power` decimal(10,2) DEFAULT NULL,
  `t` int(2) NOT NULL,
  `d` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `power_s3h`
--

INSERT INTO `power_s3h` (`id_power`, `time`, `power`, `t`, `d`) VALUES
(5, 1600519461, '2420.93', 0, 0),
(6, 1600519462, '2420.93', 0, 0),
(7, 1600519463, '2420.93', 0, 0),
(8, 1600519463, '2420.93', 0, 0),
(9, 1600521408, '0.00', 1, 0),
(10, 1600521547, '2787.62', 21, 0),
(13, 1600523467, '2854.61', 21, 0),
(15, 1600523819, '2854.61', 21, 19),
(16, 1600531478, '2420.93', 0, 20);

-- --------------------------------------------------------

--
-- Struktur dari tabel `power_s3m`
--

CREATE TABLE `power_s3m` (
  `id_power` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `power` decimal(10,2) DEFAULT NULL,
  `m` int(2) NOT NULL,
  `y` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `power_s3m`
--

INSERT INTO `power_s3m` (`id_power`, `time`, `power`, `m`, `y`) VALUES
(2, 1600533920, '21035.61', 9, 2020);

-- --------------------------------------------------------

--
-- Struktur dari tabel `power_s4d`
--

CREATE TABLE `power_s4d` (
  `id_power` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `power` decimal(10,2) DEFAULT NULL,
  `d` int(2) NOT NULL,
  `m` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `power_s4h`
--

CREATE TABLE `power_s4h` (
  `id_power` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `power` decimal(10,2) DEFAULT NULL,
  `t` int(2) NOT NULL,
  `d` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `power_s4m`
--

CREATE TABLE `power_s4m` (
  `id_power` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `power` decimal(10,2) DEFAULT NULL,
  `m` int(2) NOT NULL,
  `y` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sensor_1r1`
--

CREATE TABLE `sensor_1r1` (
  `id_sensor` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `current` decimal(10,3) NOT NULL,
  `voltage` decimal(10,2) NOT NULL,
  `power` decimal(10,2) NOT NULL,
  `t` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sensor_1r1`
--

INSERT INTO `sensor_1r1` (`id_sensor`, `time`, `current`, `voltage`, `power`, `t`) VALUES
(1, 1600490150, '9.000', '220.00', '1980.00', 0),
(2, 1600490174, '2.700', '220.00', '594.00', 0),
(3, 1600490220, '0.020', '220.00', '4.40', 0),
(4, 1600490742, '0.030', '220.00', '6.60', 0),
(5, 1600490921, '0.430', '220.00', '94.60', 0),
(6, 1600491058, '0.021', '220.00', '4.62', 0),
(7, 1600493886, '0.122', '220.00', '26.84', 0),
(11, 1600521471, '3.131', '220.00', '688.82', 21),
(12, 1600523150, '2.200', '220.00', '484.00', 21);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sensor_1r2`
--

CREATE TABLE `sensor_1r2` (
  `id_sensor` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `current` decimal(10,3) NOT NULL,
  `voltage` decimal(10,2) NOT NULL,
  `power` decimal(10,2) NOT NULL,
  `t` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sensor_1r2`
--

INSERT INTO `sensor_1r2` (`id_sensor`, `time`, `current`, `voltage`, `power`, `t`) VALUES
(1, 1600585091, '0.030', '220.00', '6.60', 14),
(2, 1600585125, '0.420', '220.00', '92.40', 14),
(3, 1600585720, '15.000', '220.00', '3300.00', 15),
(4, 1600585729, '1.300', '220.00', '286.00', 15);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sensor_1r3`
--

CREATE TABLE `sensor_1r3` (
  `id_sensor` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `current` decimal(10,3) NOT NULL,
  `voltage` decimal(10,2) NOT NULL,
  `power` decimal(10,2) NOT NULL,
  `t` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sensor_1r3`
--

INSERT INTO `sensor_1r3` (`id_sensor`, `time`, `current`, `voltage`, `power`, `t`) VALUES
(1, 1600490150, '9.000', '220.00', '1980.00', 0),
(2, 1600490174, '2.700', '220.00', '594.00', 0),
(3, 1600490220, '0.020', '220.00', '4.40', 0),
(4, 1600490742, '0.030', '220.00', '6.60', 0),
(5, 1600490921, '0.430', '220.00', '94.60', 0),
(6, 1600491058, '0.021', '220.00', '4.62', 0),
(7, 1600493886, '0.122', '220.00', '26.84', 0),
(11, 1600521471, '3.131', '220.00', '688.82', 21),
(12, 1600523150, '2.200', '220.00', '484.00', 21);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sensor_1r4`
--

CREATE TABLE `sensor_1r4` (
  `id_sensor` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `current` decimal(10,3) NOT NULL,
  `voltage` decimal(10,2) NOT NULL,
  `power` decimal(10,2) NOT NULL,
  `t` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sensor_2r1`
--

CREATE TABLE `sensor_2r1` (
  `id_sensor` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `current` decimal(10,3) NOT NULL,
  `voltage` decimal(10,2) NOT NULL,
  `power` decimal(10,2) NOT NULL,
  `t` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sensor_2r1`
--

INSERT INTO `sensor_2r1` (`id_sensor`, `time`, `current`, `voltage`, `power`, `t`) VALUES
(1, 1600490150, '9.000', '220.00', '1980.00', 0),
(2, 1600490174, '2.700', '220.00', '594.00', 0),
(3, 1600490220, '0.020', '220.00', '4.40', 0),
(4, 1600490742, '0.030', '220.00', '6.60', 0),
(5, 1600490921, '0.430', '220.00', '94.60', 0),
(6, 1600491058, '0.021', '220.00', '4.62', 0),
(7, 1600493896, '1.122', '220.00', '246.84', 0),
(8, 1600521481, '3.210', '220.00', '706.20', 21);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sensor_2r2`
--

CREATE TABLE `sensor_2r2` (
  `id_sensor` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `current` decimal(10,3) NOT NULL,
  `voltage` decimal(10,2) NOT NULL,
  `power` decimal(10,2) NOT NULL,
  `t` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sensor_2r2`
--

INSERT INTO `sensor_2r2` (`id_sensor`, `time`, `current`, `voltage`, `power`, `t`) VALUES
(1, 1600585141, '1.220', '220.00', '268.40', 14),
(2, 1600585737, '2.360', '220.00', '519.20', 15);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sensor_2r3`
--

CREATE TABLE `sensor_2r3` (
  `id_sensor` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `current` decimal(10,3) NOT NULL,
  `voltage` decimal(10,2) NOT NULL,
  `power` decimal(10,2) NOT NULL,
  `t` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sensor_2r3`
--

INSERT INTO `sensor_2r3` (`id_sensor`, `time`, `current`, `voltage`, `power`, `t`) VALUES
(1, 1600490150, '9.000', '220.00', '1980.00', 0),
(2, 1600490174, '2.700', '220.00', '594.00', 0),
(3, 1600490220, '0.020', '220.00', '4.40', 0),
(4, 1600490742, '0.030', '220.00', '6.60', 0),
(5, 1600490921, '0.430', '220.00', '94.60', 0),
(6, 1600491058, '0.021', '220.00', '4.62', 0),
(7, 1600493896, '1.122', '220.00', '246.84', 0),
(8, 1600521481, '3.210', '220.00', '706.20', 21);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sensor_2r4`
--

CREATE TABLE `sensor_2r4` (
  `id_sensor` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `current` decimal(10,3) NOT NULL,
  `voltage` decimal(10,2) NOT NULL,
  `power` decimal(10,2) NOT NULL,
  `t` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sensor_3r1`
--

CREATE TABLE `sensor_3r1` (
  `id_sensor` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `current` decimal(10,3) NOT NULL,
  `voltage` decimal(10,2) NOT NULL,
  `power` decimal(10,2) NOT NULL,
  `t` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sensor_3r1`
--

INSERT INTO `sensor_3r1` (`id_sensor`, `time`, `current`, `voltage`, `power`, `t`) VALUES
(1, 1600490150, '9.000', '220.00', '1980.00', 0),
(2, 1600490174, '2.700', '220.00', '594.00', 0),
(3, 1600490220, '0.020', '220.00', '4.40', 0),
(4, 1600490742, '0.030', '220.00', '6.60', 0),
(5, 1600490921, '0.430', '220.00', '94.60', 0),
(6, 1600491058, '0.021', '220.00', '4.62', 0),
(7, 1600493908, '0.212', '220.00', '46.64', 0),
(10, 1600502997, '2.131', '220.00', '468.82', 16),
(11, 1600521488, '1.210', '220.00', '266.20', 21),
(12, 1600523164, '3.110', '220.00', '684.20', 21);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sensor_3r2`
--

CREATE TABLE `sensor_3r2` (
  `id_sensor` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `current` decimal(10,3) NOT NULL,
  `voltage` decimal(10,2) NOT NULL,
  `power` decimal(10,2) NOT NULL,
  `t` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sensor_3r2`
--

INSERT INTO `sensor_3r2` (`id_sensor`, `time`, `current`, `voltage`, `power`, `t`) VALUES
(1, 1600585155, '2.100', '220.00', '462.00', 14),
(2, 1600585746, '1.360', '220.00', '299.20', 15);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sensor_3r3`
--

CREATE TABLE `sensor_3r3` (
  `id_sensor` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `current` decimal(10,3) NOT NULL,
  `voltage` decimal(10,2) NOT NULL,
  `power` decimal(10,2) NOT NULL,
  `t` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sensor_3r3`
--

INSERT INTO `sensor_3r3` (`id_sensor`, `time`, `current`, `voltage`, `power`, `t`) VALUES
(1, 1600490150, '9.000', '220.00', '1980.00', 0),
(2, 1600490174, '2.700', '220.00', '594.00', 0),
(3, 1600490220, '0.020', '220.00', '4.40', 0),
(4, 1600490742, '0.030', '220.00', '6.60', 0),
(5, 1600490921, '0.430', '220.00', '94.60', 0),
(6, 1600491058, '0.021', '220.00', '4.62', 0),
(7, 1600493908, '0.212', '220.00', '46.64', 0),
(10, 1600502997, '2.131', '220.00', '468.82', 16),
(11, 1600521488, '1.210', '220.00', '266.20', 21),
(12, 1600523164, '3.110', '220.00', '684.20', 21);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sensor_3r4`
--

CREATE TABLE `sensor_3r4` (
  `id_sensor` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `current` decimal(10,3) NOT NULL,
  `voltage` decimal(10,2) NOT NULL,
  `power` decimal(10,2) NOT NULL,
  `t` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sensor_4r1`
--

CREATE TABLE `sensor_4r1` (
  `id_sensor` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `current` decimal(10,3) NOT NULL,
  `voltage` decimal(10,2) NOT NULL,
  `power` decimal(10,2) NOT NULL,
  `t` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sensor_4r1`
--

INSERT INTO `sensor_4r1` (`id_sensor`, `time`, `current`, `voltage`, `power`, `t`) VALUES
(2, 1600490174, '2.700', '220.00', '594.00', 0),
(3, 1600490220, '0.020', '220.00', '4.40', 0),
(4, 1600490742, '0.030', '220.00', '6.60', 0),
(5, 1600490921, '0.430', '220.00', '94.60', 0),
(6, 1600491058, '0.021', '220.00', '4.62', 0),
(7, 1600493917, '0.312', '220.00', '68.64', 0),
(8, 1600521502, '0.910', '220.00', '200.20', 21);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sensor_4r2`
--

CREATE TABLE `sensor_4r2` (
  `id_sensor` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `current` decimal(10,3) NOT NULL,
  `voltage` decimal(10,2) NOT NULL,
  `power` decimal(10,2) NOT NULL,
  `t` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sensor_4r2`
--

INSERT INTO `sensor_4r2` (`id_sensor`, `time`, `current`, `voltage`, `power`, `t`) VALUES
(1, 1600585164, '5.100', '220.00', '1122.00', 14),
(2, 1600585755, '1.580', '220.00', '347.60', 15);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sensor_4r3`
--

CREATE TABLE `sensor_4r3` (
  `id_sensor` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `current` decimal(10,3) NOT NULL,
  `voltage` decimal(10,2) NOT NULL,
  `power` decimal(10,2) NOT NULL,
  `t` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sensor_4r3`
--

INSERT INTO `sensor_4r3` (`id_sensor`, `time`, `current`, `voltage`, `power`, `t`) VALUES
(1, 1600490150, '9.000', '220.00', '1980.00', 0),
(2, 1600490174, '2.700', '220.00', '594.00', 0),
(3, 1600490220, '0.020', '220.00', '4.40', 0),
(4, 1600490742, '0.030', '220.00', '6.60', 0),
(5, 1600490921, '0.430', '220.00', '94.60', 0),
(6, 1600491058, '0.021', '220.00', '4.62', 0),
(7, 1600493917, '0.312', '220.00', '68.64', 0),
(8, 1600521502, '0.910', '220.00', '200.20', 21);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sensor_4r4`
--

CREATE TABLE `sensor_4r4` (
  `id_sensor` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `current` decimal(10,3) NOT NULL,
  `voltage` decimal(10,2) NOT NULL,
  `power` decimal(10,2) NOT NULL,
  `t` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sensor_5r1`
--

CREATE TABLE `sensor_5r1` (
  `id_sensor` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `current` decimal(10,3) NOT NULL,
  `voltage` decimal(10,2) NOT NULL,
  `power` decimal(10,2) NOT NULL,
  `t` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sensor_5r1`
--

INSERT INTO `sensor_5r1` (`id_sensor`, `time`, `current`, `voltage`, `power`, `t`) VALUES
(1, 1600490150, '9.000', '220.00', '1980.00', 0),
(2, 1600490174, '2.700', '220.00', '594.00', 0),
(3, 1600490220, '0.020', '220.00', '4.40', 0),
(4, 1600490742, '0.030', '220.00', '6.60', 0),
(5, 1600490921, '0.430', '220.00', '94.60', 0),
(6, 1600491058, '0.021', '220.00', '4.62', 0),
(7, 1600492151, '0.022', '220.00', '4.84', 0),
(8, 1600521520, '1.710', '220.00', '376.20', 21),
(9, 1600523173, '1.350', '220.00', '297.00', 21);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sensor_5r2`
--

CREATE TABLE `sensor_5r2` (
  `id_sensor` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `current` decimal(10,3) NOT NULL,
  `voltage` decimal(10,2) NOT NULL,
  `power` decimal(10,2) NOT NULL,
  `t` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sensor_5r2`
--

INSERT INTO `sensor_5r2` (`id_sensor`, `time`, `current`, `voltage`, `power`, `t`) VALUES
(1, 1600585178, '3.720', '220.00', '818.40', 14),
(2, 1600585764, '1.250', '220.00', '275.00', 15);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sensor_5r3`
--

CREATE TABLE `sensor_5r3` (
  `id_sensor` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `current` decimal(10,3) NOT NULL,
  `voltage` decimal(10,2) NOT NULL,
  `power` decimal(10,2) NOT NULL,
  `t` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sensor_5r3`
--

INSERT INTO `sensor_5r3` (`id_sensor`, `time`, `current`, `voltage`, `power`, `t`) VALUES
(1, 1600490150, '9.000', '220.00', '1980.00', 0),
(2, 1600490174, '2.700', '220.00', '594.00', 0),
(3, 1600490220, '0.020', '220.00', '4.40', 0),
(4, 1600490742, '0.030', '220.00', '6.60', 0),
(5, 1600490921, '0.430', '220.00', '94.60', 0),
(6, 1600491058, '0.021', '220.00', '4.62', 0),
(7, 1600492151, '0.022', '220.00', '4.84', 0),
(8, 1600521520, '1.710', '220.00', '376.20', 21),
(9, 1600523173, '1.350', '220.00', '297.00', 21);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sensor_5r4`
--

CREATE TABLE `sensor_5r4` (
  `id_sensor` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `current` decimal(10,3) NOT NULL,
  `voltage` decimal(10,2) NOT NULL,
  `power` decimal(10,2) NOT NULL,
  `t` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sensor_6r1`
--

CREATE TABLE `sensor_6r1` (
  `id_sensor` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `current` decimal(10,3) NOT NULL,
  `voltage` decimal(10,2) NOT NULL,
  `power` decimal(10,2) NOT NULL,
  `t` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sensor_6r1`
--

INSERT INTO `sensor_6r1` (`id_sensor`, `time`, `current`, `voltage`, `power`, `t`) VALUES
(1, 1600490150, '9.000', '220.00', '1980.00', 0),
(2, 1600490174, '2.700', '220.00', '594.00', 0),
(3, 1600490220, '0.020', '220.00', '4.40', 0),
(4, 1600490742, '0.030', '220.00', '6.60', 0),
(5, 1600490921, '0.430', '220.00', '94.60', 0),
(6, 1600491058, '0.021', '220.00', '4.62', 0),
(8, 1600521532, '2.500', '220.00', '550.00', 21);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sensor_6r2`
--

CREATE TABLE `sensor_6r2` (
  `id_sensor` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `current` decimal(10,3) NOT NULL,
  `voltage` decimal(10,2) NOT NULL,
  `power` decimal(10,2) NOT NULL,
  `t` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sensor_6r2`
--

INSERT INTO `sensor_6r2` (`id_sensor`, `time`, `current`, `voltage`, `power`, `t`) VALUES
(1, 1600585191, '1.025', '220.00', '225.50', 14),
(2, 1600585773, '1.280', '220.00', '281.60', 15);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sensor_6r3`
--

CREATE TABLE `sensor_6r3` (
  `id_sensor` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `current` decimal(10,3) NOT NULL,
  `voltage` decimal(10,2) NOT NULL,
  `power` decimal(10,2) NOT NULL,
  `t` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sensor_6r3`
--

INSERT INTO `sensor_6r3` (`id_sensor`, `time`, `current`, `voltage`, `power`, `t`) VALUES
(1, 1600490150, '9.000', '220.00', '1980.00', 0),
(2, 1600490174, '2.700', '220.00', '594.00', 0),
(3, 1600490220, '0.020', '220.00', '4.40', 0),
(4, 1600490742, '0.030', '220.00', '6.60', 0),
(5, 1600490921, '0.430', '220.00', '94.60', 0),
(6, 1600491058, '0.021', '220.00', '4.62', 0),
(8, 1600521532, '2.500', '220.00', '550.00', 21);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sensor_6r4`
--

CREATE TABLE `sensor_6r4` (
  `id_sensor` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `current` decimal(10,3) NOT NULL,
  `voltage` decimal(10,2) NOT NULL,
  `power` decimal(10,2) NOT NULL,
  `t` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `power_alld`
--
ALTER TABLE `power_alld`
  ADD PRIMARY KEY (`id_power`);

--
-- Indeks untuk tabel `power_allh`
--
ALTER TABLE `power_allh`
  ADD PRIMARY KEY (`id_power`);

--
-- Indeks untuk tabel `power_allm`
--
ALTER TABLE `power_allm`
  ADD PRIMARY KEY (`id_power`);

--
-- Indeks untuk tabel `power_s1d`
--
ALTER TABLE `power_s1d`
  ADD PRIMARY KEY (`id_power`);

--
-- Indeks untuk tabel `power_s1h`
--
ALTER TABLE `power_s1h`
  ADD PRIMARY KEY (`id_power`);

--
-- Indeks untuk tabel `power_s1m`
--
ALTER TABLE `power_s1m`
  ADD PRIMARY KEY (`id_power`);

--
-- Indeks untuk tabel `power_s2d`
--
ALTER TABLE `power_s2d`
  ADD PRIMARY KEY (`id_power`);

--
-- Indeks untuk tabel `power_s2h`
--
ALTER TABLE `power_s2h`
  ADD PRIMARY KEY (`id_power`);

--
-- Indeks untuk tabel `power_s2m`
--
ALTER TABLE `power_s2m`
  ADD PRIMARY KEY (`id_power`);

--
-- Indeks untuk tabel `power_s3d`
--
ALTER TABLE `power_s3d`
  ADD PRIMARY KEY (`id_power`);

--
-- Indeks untuk tabel `power_s3h`
--
ALTER TABLE `power_s3h`
  ADD PRIMARY KEY (`id_power`);

--
-- Indeks untuk tabel `power_s3m`
--
ALTER TABLE `power_s3m`
  ADD PRIMARY KEY (`id_power`);

--
-- Indeks untuk tabel `power_s4d`
--
ALTER TABLE `power_s4d`
  ADD PRIMARY KEY (`id_power`);

--
-- Indeks untuk tabel `power_s4h`
--
ALTER TABLE `power_s4h`
  ADD PRIMARY KEY (`id_power`);

--
-- Indeks untuk tabel `power_s4m`
--
ALTER TABLE `power_s4m`
  ADD PRIMARY KEY (`id_power`);

--
-- Indeks untuk tabel `sensor_1r1`
--
ALTER TABLE `sensor_1r1`
  ADD PRIMARY KEY (`id_sensor`);

--
-- Indeks untuk tabel `sensor_1r2`
--
ALTER TABLE `sensor_1r2`
  ADD PRIMARY KEY (`id_sensor`);

--
-- Indeks untuk tabel `sensor_1r3`
--
ALTER TABLE `sensor_1r3`
  ADD PRIMARY KEY (`id_sensor`);

--
-- Indeks untuk tabel `sensor_1r4`
--
ALTER TABLE `sensor_1r4`
  ADD PRIMARY KEY (`id_sensor`);

--
-- Indeks untuk tabel `sensor_2r1`
--
ALTER TABLE `sensor_2r1`
  ADD PRIMARY KEY (`id_sensor`);

--
-- Indeks untuk tabel `sensor_2r2`
--
ALTER TABLE `sensor_2r2`
  ADD PRIMARY KEY (`id_sensor`);

--
-- Indeks untuk tabel `sensor_2r3`
--
ALTER TABLE `sensor_2r3`
  ADD PRIMARY KEY (`id_sensor`);

--
-- Indeks untuk tabel `sensor_2r4`
--
ALTER TABLE `sensor_2r4`
  ADD PRIMARY KEY (`id_sensor`);

--
-- Indeks untuk tabel `sensor_3r1`
--
ALTER TABLE `sensor_3r1`
  ADD PRIMARY KEY (`id_sensor`);

--
-- Indeks untuk tabel `sensor_3r2`
--
ALTER TABLE `sensor_3r2`
  ADD PRIMARY KEY (`id_sensor`);

--
-- Indeks untuk tabel `sensor_3r3`
--
ALTER TABLE `sensor_3r3`
  ADD PRIMARY KEY (`id_sensor`);

--
-- Indeks untuk tabel `sensor_3r4`
--
ALTER TABLE `sensor_3r4`
  ADD PRIMARY KEY (`id_sensor`);

--
-- Indeks untuk tabel `sensor_4r1`
--
ALTER TABLE `sensor_4r1`
  ADD PRIMARY KEY (`id_sensor`);

--
-- Indeks untuk tabel `sensor_4r2`
--
ALTER TABLE `sensor_4r2`
  ADD PRIMARY KEY (`id_sensor`);

--
-- Indeks untuk tabel `sensor_4r3`
--
ALTER TABLE `sensor_4r3`
  ADD PRIMARY KEY (`id_sensor`);

--
-- Indeks untuk tabel `sensor_4r4`
--
ALTER TABLE `sensor_4r4`
  ADD PRIMARY KEY (`id_sensor`);

--
-- Indeks untuk tabel `sensor_5r1`
--
ALTER TABLE `sensor_5r1`
  ADD PRIMARY KEY (`id_sensor`);

--
-- Indeks untuk tabel `sensor_5r2`
--
ALTER TABLE `sensor_5r2`
  ADD PRIMARY KEY (`id_sensor`);

--
-- Indeks untuk tabel `sensor_5r3`
--
ALTER TABLE `sensor_5r3`
  ADD PRIMARY KEY (`id_sensor`);

--
-- Indeks untuk tabel `sensor_5r4`
--
ALTER TABLE `sensor_5r4`
  ADD PRIMARY KEY (`id_sensor`);

--
-- Indeks untuk tabel `sensor_6r1`
--
ALTER TABLE `sensor_6r1`
  ADD PRIMARY KEY (`id_sensor`);

--
-- Indeks untuk tabel `sensor_6r2`
--
ALTER TABLE `sensor_6r2`
  ADD PRIMARY KEY (`id_sensor`);

--
-- Indeks untuk tabel `sensor_6r3`
--
ALTER TABLE `sensor_6r3`
  ADD PRIMARY KEY (`id_sensor`);

--
-- Indeks untuk tabel `sensor_6r4`
--
ALTER TABLE `sensor_6r4`
  ADD PRIMARY KEY (`id_sensor`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `power_alld`
--
ALTER TABLE `power_alld`
  MODIFY `id_power` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `power_allh`
--
ALTER TABLE `power_allh`
  MODIFY `id_power` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `power_allm`
--
ALTER TABLE `power_allm`
  MODIFY `id_power` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `power_s1d`
--
ALTER TABLE `power_s1d`
  MODIFY `id_power` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `power_s1h`
--
ALTER TABLE `power_s1h`
  MODIFY `id_power` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `power_s1m`
--
ALTER TABLE `power_s1m`
  MODIFY `id_power` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `power_s2d`
--
ALTER TABLE `power_s2d`
  MODIFY `id_power` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `power_s2h`
--
ALTER TABLE `power_s2h`
  MODIFY `id_power` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `power_s2m`
--
ALTER TABLE `power_s2m`
  MODIFY `id_power` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `power_s3d`
--
ALTER TABLE `power_s3d`
  MODIFY `id_power` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `power_s3h`
--
ALTER TABLE `power_s3h`
  MODIFY `id_power` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `power_s3m`
--
ALTER TABLE `power_s3m`
  MODIFY `id_power` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `power_s4d`
--
ALTER TABLE `power_s4d`
  MODIFY `id_power` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `power_s4h`
--
ALTER TABLE `power_s4h`
  MODIFY `id_power` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `power_s4m`
--
ALTER TABLE `power_s4m`
  MODIFY `id_power` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `sensor_1r1`
--
ALTER TABLE `sensor_1r1`
  MODIFY `id_sensor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `sensor_1r2`
--
ALTER TABLE `sensor_1r2`
  MODIFY `id_sensor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `sensor_1r3`
--
ALTER TABLE `sensor_1r3`
  MODIFY `id_sensor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `sensor_1r4`
--
ALTER TABLE `sensor_1r4`
  MODIFY `id_sensor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `sensor_2r1`
--
ALTER TABLE `sensor_2r1`
  MODIFY `id_sensor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `sensor_2r2`
--
ALTER TABLE `sensor_2r2`
  MODIFY `id_sensor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `sensor_2r3`
--
ALTER TABLE `sensor_2r3`
  MODIFY `id_sensor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `sensor_2r4`
--
ALTER TABLE `sensor_2r4`
  MODIFY `id_sensor` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `sensor_3r1`
--
ALTER TABLE `sensor_3r1`
  MODIFY `id_sensor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `sensor_3r2`
--
ALTER TABLE `sensor_3r2`
  MODIFY `id_sensor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `sensor_3r3`
--
ALTER TABLE `sensor_3r3`
  MODIFY `id_sensor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `sensor_3r4`
--
ALTER TABLE `sensor_3r4`
  MODIFY `id_sensor` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `sensor_4r1`
--
ALTER TABLE `sensor_4r1`
  MODIFY `id_sensor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `sensor_4r2`
--
ALTER TABLE `sensor_4r2`
  MODIFY `id_sensor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `sensor_4r3`
--
ALTER TABLE `sensor_4r3`
  MODIFY `id_sensor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `sensor_4r4`
--
ALTER TABLE `sensor_4r4`
  MODIFY `id_sensor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `sensor_5r1`
--
ALTER TABLE `sensor_5r1`
  MODIFY `id_sensor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `sensor_5r2`
--
ALTER TABLE `sensor_5r2`
  MODIFY `id_sensor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `sensor_5r3`
--
ALTER TABLE `sensor_5r3`
  MODIFY `id_sensor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `sensor_5r4`
--
ALTER TABLE `sensor_5r4`
  MODIFY `id_sensor` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `sensor_6r1`
--
ALTER TABLE `sensor_6r1`
  MODIFY `id_sensor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `sensor_6r2`
--
ALTER TABLE `sensor_6r2`
  MODIFY `id_sensor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `sensor_6r3`
--
ALTER TABLE `sensor_6r3`
  MODIFY `id_sensor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `sensor_6r4`
--
ALTER TABLE `sensor_6r4`
  MODIFY `id_sensor` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
