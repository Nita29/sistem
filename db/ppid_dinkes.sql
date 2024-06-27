-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2022 at 03:38 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppid_dinkes`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id_banner` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id_banner`, `gambar`, `status`) VALUES
(29, 'Banner_Dirgahayu_kota_cimahi.png', 'aktif'),
(31, 'Banner_ppid_dinkes.png', 'aktif');

-- --------------------------------------------------------

--
-- Table structure for table `i_berkala`
--

CREATE TABLE `i_berkala` (
  `id_berkala` int(11) NOT NULL,
  `kode_dokumen` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `tahun` int(255) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `tipe` varchar(255) NOT NULL,
  `upload` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `i_berkala`
--

INSERT INTO `i_berkala` (`id_berkala`, `kode_dokumen`, `judul`, `tahun`, `tanggal_masuk`, `deskripsi`, `tipe`, `upload`) VALUES
(25, 'FIB-DPB00000001', 'Data wilayah kota cimahi', 2020, '2022-08-11', 'Data wilayah kota cimahi', 'Berkala', 'Data_Wilayah_Kota_Cimahi.pdf'),
(26, 'FIB-DPB00000002', 'Profil kota cimahi', 2020, '2022-08-11', 'Profil kota cimahi', 'Berkala', 'Profile_Kota_Cimahi1.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `i_merta`
--

CREATE TABLE `i_merta` (
  `id_merta` int(11) NOT NULL,
  `kode_dokumen` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `tahun` int(255) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `tipe` varchar(255) NOT NULL,
  `upload` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `i_merta`
--

INSERT INTO `i_merta` (`id_merta`, `kode_dokumen`, `judul`, `tahun`, `tanggal_masuk`, `deskripsi`, `tipe`, `upload`) VALUES
(17, 'FIM-DSM00000002', 'Peta rawan bencana', 2020, '2022-08-11', 'Peta rawan bencana', 'Serta merta', 'Peta_Rawan_bencana.docx'),
(19, 'FIM-DSM00000003', 'Indikator Kinerja Utama', 2022, '2022-11-20', 'Indikator Kinerja Utama', 'Serta merta', 'Indikator_Kinerja_Utama.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `i_private`
--

CREATE TABLE `i_private` (
  `id_private` int(11) NOT NULL,
  `kode_dokumen` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `tahun` int(255) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `tipe` varchar(255) NOT NULL,
  `upload` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `i_private`
--

INSERT INTO `i_private` (`id_private`, `kode_dokumen`, `judul`, `tahun`, `tanggal_masuk`, `deskripsi`, `tipe`, `upload`) VALUES
(141, 'FIP-PRV00000001', 'Struktur Kota Cimahi', 2022, '2022-08-11', 'Struktur Kota Cimahi', 'Private', 'Struktur_kota_cimahi1.pdf'),
(142, 'FIP-PRV00000002', 'Indikator Kinerja Utama', 2022, '2022-08-11', 'Indikator Kinerja Utama', 'private', 'Indikator_Kinerja_Utama.pdf'),
(143, 'FIP-PRV00000003', 'Daftar aplikasi Pemerintah kota cimahi', 2022, '2022-08-12', 'Daftar aplikasi Pemerintah kota cimahi', 'Private', 'Daftar_aplikasi_Pemerintah_kota_cimahi.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `i_saat`
--

CREATE TABLE `i_saat` (
  `id_saat` int(11) NOT NULL,
  `kode_dokumen` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `tahun` int(255) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `tipe` varchar(255) NOT NULL,
  `upload` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `i_saat`
--

INSERT INTO `i_saat` (`id_saat`, `kode_dokumen`, `judul`, `tahun`, `tanggal_masuk`, `deskripsi`, `tipe`, `upload`) VALUES
(14, 'FISS-DS00000001', 'Kota Cimahi dalam angka', 2020, '2022-08-11', 'Kota Cimahi dalam angka', 'Setiap saat', 'Kota_Cimahi_Dalam_Angka.pdf'),
(15, 'FISS-DS00000002', 'RKPD Kota Cimahi Tahun 2017', 2017, '2022-08-11', 'RKPD Kota Cimahi Tahun ', 'Setiap saat', 'RKPD_Kota_Cimahi_Tahun_2017.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `permohonan`
--

CREATE TABLE `permohonan` (
  `id_pemohon` int(11) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) DEFAULT NULL,
  `kecamatan` varchar(255) NOT NULL,
  `kelurahan` varchar(255) NOT NULL,
  `kab` varchar(255) NOT NULL,
  `provinsi` varchar(255) NOT NULL,
  `kodepos` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `resume` varchar(255) NOT NULL,
  `surat` varchar(255) NOT NULL,
  `tema` varchar(255) NOT NULL,
  `tujuan` varchar(255) NOT NULL,
  `email_balas` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `pesan` varchar(255) DEFAULT NULL,
  `judul_balas` varchar(255) NOT NULL,
  `user_balas` varchar(255) NOT NULL,
  `balas_file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `permohonan`
--

INSERT INTO `permohonan` (`id_pemohon`, `tanggal_masuk`, `jenis`, `nama`, `alamat`, `jenis_kelamin`, `kecamatan`, `kelurahan`, `kab`, `provinsi`, `kodepos`, `email`, `mobile`, `nik`, `resume`, `surat`, `tema`, `tujuan`, `email_balas`, `subject`, `pesan`, `judul_balas`, `user_balas`, `balas_file`) VALUES
(208, '2022-06-16', 'Perorangan', 'BERNATARA AULIA PUTRI ', 'Jl. MATRA KENCANA NO.10', 'Perempuan', 'Cimahi Utara', '', 'Cimahi', 'JAWA BARAT', 0, '', '081615448396', '', '', '', 'Laporan bulanan penyakit ( Jumlah penyakit hiperkolesterolemia )', 'Penjajakan data awal penelitian', '', 'Laporan bulanan penyakit ( Jumlah penyakit hiperkolesterolemia )', 'Data yang diminta dapat diberikan', 'Data diberikan', 'Dinas kesehatan kota cimahi', ''),
(209, '2022-06-21', 'Perorangan', 'Anisa pebriani', 'Jl.babakan rohmat Cimareme 01/02', 'Perempuan', 'Ngamprah', '', 'Bandung barat', 'JAWA BARAT', 0, '', '085793569064', '', '', '', 'Hubungan beban kerja dan disiplin Terhadap kinerja pegawai (data penelitian beban kerja di puskesmas wilayah cimahi)', 'Penelitian skripsi awal', '', 'Hubungan beban kerja dan disiplin Terhadap kinerja pegawai (data penelitian beban kerja di puskesmas wilayah cimahi)', 'Data yang diminta dapat diberikan', 'Data diberikan', 'Dinas kesehatan kota cimahi', ''),
(210, '2022-06-22', 'Perorangan', 'Alya Farah Fadillah', 'KP. Mekar Sari RT 02 / RW 07 No.56', 'Perempuan', 'Cimahi Tengah', '', 'Cimahi', 'JAWA BARAT', 0, '', '089656280489', '', '', '', 'Kunjungan pelayanan kesehatan dimasa covid-19(hubungan kecemasan dengan motivasi masyarakat dalam memanfaatkan sarana kesehatan dimasa transisi covid-19 )', 'Tugas Akhir Skripsi', '', 'Kunjungan pelayanan kesehatan dimasa covid-19(hubungan kecemasan dengan motivasi masyarakat dalam memanfaatkan sarana kesehatan dimasa transisi covid-19 )', 'Data yang diminta dapat diberikan', 'Data diberikan', 'Dinas kesehatan kota cimahi', ''),
(211, '2022-06-22', 'Perorangan', 'Debi Ayu Lestari', 'Padasuka Cimahi Tengah', 'Perempuan', 'Cimahi Tengah', '', 'Cimahi', 'JAWA BARAT', 0, '', '082120200405', '', '', '', 'Hipertensi(Analisis hubungan riwayat penyakit kelvara, kebiasaan merokok dan aktifitas fisik dengan kejadian hipertensi di Puskesmas Cimahi Tengah', 'Penelitian Skripsi', '', 'Hipertensi(Analisis hubungan riwayat penyakit kelvara, kebiasaan merokok dan aktifitas fisik dengan kejadian hipertensi di Puskesmas Cimahi Tengah', 'Data yang diminta dapat diberikan', 'Data diberikan', 'Dinas kesehatan kota cimahi', ''),
(212, '2022-06-22', 'Perorangan', 'Tasya Annisa Nurohmah', 'Jl. Perapatan Cihanjuang Gg. Mama Idris no.154 Rt 05 rw 03', '', 'Cimahi Utara', '', 'Cimahi', 'JAWA BARAT', 0, '', '0895630670106', '', '', '', 'ISPA ( hubungan kondisi fisik rumah terhadap kejadian ISPA pada balita di wilayah kerja Puskesmas Cimahi Utara', 'Data Awal', '', 'ISPA ( hubungan kondisi fisik rumah terhadap kejadian ISPA pada balita di wilayah kerja Puskesmas Cimahi Utara', 'Data yang diminta dapat diberikan', 'Data diberikan', 'Dinas kesehatan kota cimahi', ''),
(213, '2022-06-23', 'Perorangan', 'Asriyani', 'Jl. Cinagen Kp.Nagrak 1 , Desa Nagraksari', 'Perempuan', 'Jampang Kulon', '', 'Sukabumi', 'JAWA BARAT', 0, 'asriyani1799@gmail.com', '081289304200', '', '', '', 'Surat Izin Penelitian (Hubungan Self Efficacy Ibu Menyusui Dengan Pemberian ASI Ekslusif di wilayah kerja Puskesmas Cibeber)', 'Penelitian ', '', 'Surat Izin Penelitian (Hubungan Self Efficacy Ibu Menyusui Dengan Pemberian ASI Ekslusif di wilayah kerja Puskesmas Cibeber)', 'Data yang diminta dapat diberikan', 'Data diberikan', 'Dinas kesehatan kota cimahi', ''),
(214, '2022-06-23', 'Perorangan', 'Salma Ar-rum Mawardi', 'Jl. Ir H Juwanda Gg. Krakatau Rt02 rw 18 Cianjur', 'Perempuan', 'Cianjur', '', 'Cianjur', 'JAWA BARAT', 0, 'salmamawardi36@gmail.com', '085797579141', '', '', '', 'Surat Izin Penelitian ( Puskesmas Cibeber - Hubungan Dukungan Keluarga)', 'Penelitian', '', 'Surat Izin Penelitian ( Puskesmas Cibeber - Hubungan Dukungan Keluarga)', 'Data yang diminta dapat diberikan', 'Data diberikan', 'Dinas kesehatan kota cimahi', ''),
(215, '2022-06-23', 'Perorangan', 'Nurul Fharah Istiqamah', 'Dusun Serang Rt 011 rw 04', 'Perempuan', 'Klari', '', 'Karawang', 'JAWA BARAT', 0, 'nurulfharah@gmail.com', '081314880931', '', '', '', 'Pengaruh Pendidikan Kesehatan Terhadap Kemampuan Ibu Primigravida dalam memandikan bayi baru lahir dan perawatan tali pusar di Puskesmas Cibeber tahun 2022', 'Penelitian Skripsi', '', 'Pengaruh Pendidikan Kesehatan Terhadap Kemampuan Ibu Primigravida dalam memandikan bayi baru lahir dan perawatan tali pusar di Puskesmas Cibeber tahun 2022', 'Data yang diminta dapat diberikan', 'Data diberikan', 'Dinas kesehatan kota cimahi', ''),
(216, '2022-06-23', 'Perorangan', 'Ditta Octaviani Putri Wibawa', 'Jl Kapten Musa rt/rw 004/010', 'Perempuan', 'Cianjur', '', 'Cianjur', 'JAWA BARAT', 0, 'dittaoctavianipw@gmail.com', '081564611252', '', '', '', 'Pengaruh edukasi kesehatan terhadap kemampuan ibu primapara dalam teknik menyusui yang benar di Puskesmas Cibeber', 'Penelitian Skripsi', '', 'Pengaruh edukasi kesehatan terhadap kemampuan ibu primapara dalam teknik menyusui yang benar di Puskesmas Cibeber', 'Data yang diminta dapat diberikan', 'Data diberikan', 'Dinas kesehatan kota cimahi', ''),
(217, '2022-06-24', 'Perorangan', 'Amelia Barokah', 'KP Babakan Sari rt/rw 09/09', 'Perempuan', 'Padasuka', '', 'Cimahi', 'JAWA BARAT', 0, '', '082316423777', '', '', '', 'Pengaruh air rebusan daun salam terhadap tekanan darah pada penderita hipertensi di wilayah kerja Puskesmas Padasuka Kota Cimahi', 'Penelitian', '', 'Pengaruh air rebusan daun salam terhadap tekanan darah pada penderita hipertensi di wilayah kerja Puskesmas Padasuka Kota Cimahi', 'Data yang diminta dapat diberikan', 'Data diberikan', 'Dinas kesehatan kota cimahi', ''),
(218, '2022-06-27', 'Perorangan', 'Wafa Hazna Nurhalilah', 'KP Cipare Kec. cikalong wetan Kab. Bandung Barat', 'Perempuan', 'Cikalong Wetan', '', 'Bandung Barat', 'JAWA BARAT', 0, '', '088222857262', '', '', '', 'Gastritis ( Hubungan polo makan, kebiasaan merokok, dan kebiasaan minum kopi dengan kejadian gastritis di wilayah kerja Puskesmas Melong Asih Kota Cimahi tahun 2022)', 'Penelitian', '', 'Gastritis ( Hubungan polo makan, kebiasaan merokok, dan kebiasaan minum kopi dengan kejadian gastritis di wilayah kerja Puskesmas Melong Asih Kota Cimahi tahun 2022)', 'Data yang diminta dapat diberikan', 'Data diberikan', 'Dinas kesehatan kota cimahi', ''),
(219, '2022-06-27', 'Perorangan', 'Tria Khotimah', 'Jln.Sentosa no 543, Palembang', 'Perempuan', 'Lawang Kidul', '', 'Muara Enim', 'SUMATERA SELATAN', 0, '', '082295115070', '', '', '', 'Hipertensi ( Hubungan pengetahuan, sikap dan dukungan keluarga terhadap kepatuhan minum obat anti hipertensi pada lansia di Puskesmas Cigugur Tengah tahun 2022', 'Penelitian', '', 'Hipertensi ( Hubungan pengetahuan, sikap dan dukungan keluarga terhadap kepatuhan minum obat anti hipertensi pada lansia di Puskesmas Cigugur Tengah tahun 2022', 'Data yang diminta dapat diberikan', 'Data diberikan', 'Dinas kesehatan kota cimahi', ''),
(220, '2022-06-30', 'Perorangan', 'Gusti ayu Siti Sri Aryati Andani', 'komplek Leuwigajah Permai Jl. Dahlia no.20', 'Perempuan', 'Cimahi Selatan', '', 'Cimahi', 'JAWA BARAT', 0, '', '082320681270', '', '', '', 'Pengaruh konseling protokol kesehatan penderita diabetes mellitus terhadap pengetahuan dan sikap di Puskesmas Melong Asih', 'Izin Penelitian', '', 'Pengaruh konseling protokol kesehatan penderita diabetes mellitus terhadap pengetahuan dan sikap di Puskesmas Melong Asih', 'Data yang diminta dapat diberikan', 'Data diberikan', 'Dinas kesehatan kota cimahi', ''),
(221, '2022-06-30', 'Perorangan', 'Priani Despitasari', 'Kp. Cimawate', 'Perempuan', 'Sukaraja', '', 'Tasikmalaya', 'JAWA BARAT', 0, 'priani0612@gmail.com', '082321179184', '', '', '', 'Demam Berdarah Dengue (DBD) Faktor faktor yang berhubungan dengan kejadian DBD di wilayah kerja Puskesmas Cimahi Utara kota Cimahi tahun 2022', 'Dafa Awal', '', 'Demam Berdarah Dengue (DBD) Faktor faktor yang berhubungan dengan kejadian DBD di wilayah kerja Puskesmas Cimahi Utara kota Cimahi tahun 2022', 'Data yang diminta dapat diberikan', 'Data diberikan', 'Dinas kesehatan kota cimahi', ''),
(222, '2022-07-07', 'Perorangan', 'Neng Lia Agustina', 'KP. Nanggeleng Desa Cibaregbeg Kec. Cibeber Kota Cianjur', 'Perempuan', 'Cibeber', '', 'Cianjur', 'JAWA BARAT', 0, '', '081573161744', '', '', '', 'Hubungan Pengetahuan Dan Sikap Dengan Perilaku Merokok di dalam rumah.', 'Pengambilan Data Awal', '', 'Hubungan Pengetahuan Dan Sikap Dengan Perilaku Merokok di dalam rumah.', 'Data yang diminta dapat diberikan', 'Data diberikan', 'Dinas kesehatan kota cimahi', ''),
(223, '2022-07-07', 'Perorangan', 'Denta Medina Utami', 'Jl. Ibu Ganirah rt 03 rw 05 no.63 kel.cibeber', 'Perempuan', 'Cimahi Selatan', '', 'Cimahi', 'JAWA BARAT', 0, '', '089631944479', '', '', '', 'Analisis Persepsi Masyarakat Tentang Kelonggaran Protokol Kesehatan COVID-19', 'Pengambilan Data Awal', '', 'Analisis Persepsi Masyarakat Tentang Kelonggaran Protokol Kesehatan COVID-19', 'Data yang diminta dapat diberikan', 'Data diberikan', 'Dinas kesehatan kota cimahi', ''),
(224, '2022-07-07', 'Perorangan', 'Cindy Cahyani', 'Calung', 'Perempuan', 'Telukjambe barat', '', 'Karawang', 'Jawa barat', 0, '', '081317474485', '', '', '', 'Analisis kebutuhan sumberdaya manusia kesehatan ( Berdasarkan standar ketenagaan minimal permenkes Nomor.43 tahun 2019 dipuskesmas citereup kota cimahi tahun 2022', 'Permohonan ijin penelitian', '', 'Analisis kebutuhan sumberdaya manusia kesehatan ( Berdasarkan standar ketenagaan minimal permenkes Nomor.43 tahun 2019 dipuskesmas citereup kota cimahi tahun 2022', 'Data yang diminta dapat diberikan', 'Data diberikan', 'Dinas kesehatan kota cimahi', ''),
(225, '2022-07-07', 'Perorangan', 'Wigiarti indah solihah', 'Subang', 'Perempuan', 'Pagaden', '', 'Subang', 'JAWA BARAT', 0, '', '081317639758', '', '', '', 'Analisis hubungan faktor ibu,anak dan imunisasi dasar ( terhadap tingkat kejadian stenting di wilayah puskesmas cimahi tengah tahun 2022', 'Permohonan izin penelitian', '', 'Analisis hubungan faktor ibu,anak dan imunisasi dasar ( terhadap tingkat kejadian stenting di wilayah puskesmas cimahi tengah tahun 2022', 'Data yang diminta dapat diberikan', 'Data diberikan', 'Dinas kesehatan kota cimahi', ''),
(226, '2022-07-08', 'Perorangan ', 'Yosrizal Martka', 'Cibeber', 'Laki-Laki', '', '', 'Cimahi ', 'JAWA BARAT', 0, '', '081223223025', '', '', '', 'Hubungan status gizi , Pemberian asi ekslisif dan status imunisasi terhadap kejadian pneumonia pada balita dipuskesmas cibeber cimahi 2022', 'Surat izin penelitian', '', 'Hubungan status gizi , Pemberian asi ekslisif dan status imunisasi terhadap kejadian pneumonia pada balita dipuskesmas cibeber cimahi 2022', 'Data yang diminta dapat diberikan', 'Data diberikan', 'Dinas kesehatan kota cimahi', ''),
(227, '2022-07-08', 'Perorangan ', 'Gilang muhamad ramdan', 'Kp. batu gede RT 03/02 Ds. sukamanah ,', 'Laki-Laki', 'Bayombong', '', 'Garut', 'JAWA BARAT', 0, '', '087725164427', '', '', '', 'Program vaksin ( melaksanakan covid-19 dipuskesmas cipageran )', 'Pelaksanaan praktik state elektif mahasiswa unpad program profesi ners angkatan xlii untuk melaksanaakan program vaksin di puskesmas cipageran', '', 'Program vaksin ( melaksanakan covid-19 dipuskesmas cipageran )', 'Data yang diminta dapat diberikan', 'Data diberikan', 'Dinas kesehatan kota cimahi', ''),
(228, '2022-07-08', 'Perorangan', 'Fera imelia agustin', 'Dsn . binangun RT 13/03 Ds kondangjajar', 'Perempuan', 'Cijulang', '', 'Pangandaran', 'JAWA BARAT', 0, '', '082214797840', '', '', '', 'Program vaksin ( melaksanakan vaksinasi covid-19 dipuskesmas cipageran )', 'Pelaksanaan praktik state elektif mahasiswa unpad program profesi ners angkatan xlii untuk melaksanaakan program vaksin di puskesmas cipageran', '', 'Program vaksin ( melaksanakan vaksinasi covid-19 dipuskesmas cipageran )', 'Data yang diminta dapat diberikan', 'Data diberikan', 'Dinas kesehatan kota cimahi', ''),
(229, '2022-07-08', 'Perorangan', 'Evianita ika maharani', 'Dk.tempel RT 18/07 Ds ngalas', 'Perempuan', 'Klaten selatan', '', 'Klaten', 'JAWA TENGAH', 0, '', '085729666927', '', '', '', 'Program vaksin (Melaksanakan program vaksinasi covid-19 dipuskesmas cimahi tengah', 'Pelaksanaan praktik state elektif mahasiswa unpad program profesi ners angkatan xlii untuk melaksanaakan program vaksin di puskesmas cimahi tengah', '', 'Program vaksin (Melaksanakan program vaksinasi covid-19 dipuskesmas cimahi tengah', 'Data yang diminta dapat diberikan', 'Data diberikan', 'Dinas kesehatan kota cimahi', ''),
(230, '2022-07-08', 'Perorangan', 'Wahyu Pratiwi', 'plabuan RT 001 RW 003, Desa Prajeksari', 'Laki-Laki', 'Tempuran', '', 'Magelang', 'JAWA TENGAH', 0, '', '082122976776', '', '', '', 'Program Vaksin (Melaksanakan program vaksinasi di Puskesmas Cimahi Tengah)', 'Pelaksanaan praktik stase elektif mahasiswa Unpad program profesi ners angkatan XIII untuk melaksanakan program vaksin di Puskesmas Cimahi Tengah', '', 'Program Vaksin (Melaksanakan program vaksinasi di Puskesmas Cimahi Tengah)', 'Data yang diminta dapat diberikan', 'Data diberikan', 'Dinas kesehatan kota cimahi', ''),
(231, '2022-07-08', 'Perorangan', 'Meisha Nurlianti Hidayat', 'JL.Rancabelut no.137 RT 001 RW 011, kel.Padasuka', 'Perempuan', 'Cimahi Tengah', '', 'Cimahi', 'JAWA BARAT', 0, '', '082215353107', '', '', '', 'Program Vaksin (Melaksanakan vaksinasi Covid-19 di Puskesmas Cimahi Tengah)', 'Pelaksanaan praktik stase elektif mahasiswa Unpad program profesi ners angkatan XIII untuk melaksanakan program vaksin di Puskesmas Cimahi Tengah', '', 'Program Vaksin (Melaksanakan vaksinasi Covid-19 di Puskesmas Cimahi Tengah)', 'Data yang diminta dapat diberikan', 'Data diberikan', 'Dinas kesehatan kota cimahi', ''),
(232, '2022-07-11', 'Perorangan', 'Dini Yuliani', 'Padalarang', 'Perempuan', 'Padalarang', '', 'Bandung Barat', 'JAWA BARAT', 0, 'yulianid82@gmail.com', '08986491384', '', '', '', 'Kinerja Pegawai Dinas Kesehatan Kota Cimahi ( Pengaruh lingkungan terhadap kinerja pegawai saat WFH masa pandemi COVID-19 di Dinas Kesehatan Kota Cimahi', 'Penelitian Skripsi', '', 'Kinerja Pegawai Dinas Kesehatan Kota Cimahi ( Pengaruh lingkungan terhadap kinerja pegawai saat WFH masa pandemi COVID-19 di Dinas Kesehatan Kota Cimahi', 'Data yang diminta dapat diberikan', 'Data diberikan', 'Dinas kesehatan kota cimahi', ''),
(233, '2022-07-11', 'Perorangan', 'Sri Wulan', 'KP Muara Ciwidey RT 01 RW 02 ', 'Perempuan', 'Katapang', '', 'Bandung', 'JAWA BARAT', 0, '', '089519129550', '', '', '', 'Sistem Manajement Logistik ( Analisis sistem Manajement distribusi vaksin COVID-19 di gudang vaksin Dinas Kesehatan Kota Cimahi)', 'Penilitian Skripsi', '', 'Sistem Manajement Logistik ( Analisis sistem Manajement distribusi vaksin COVID-19 di gudang vaksin Dinas Kesehatan Kota Cimahi)', 'Data yang diminta dapat diberikan', 'Data diberikan', 'Dinas kesehatan kota cimahi', ''),
(234, '2022-07-11', 'Perorangan', 'Anggraeni Nurul Sakilah', 'Jl Babakan Cianjur RT 01 RW 07 ', 'Perempuan', 'Cempaka', 'Cempaka', 'Bandung', 'JAWA BARAT', 0, 'anggraeninurul@gmail.com', '08986125098', '', '', '', 'Sistem Manajement Logistik ( Analisis sistem Manajement distribusi vaksin COVID-19 di gudang vaksin Dinas Kesehatan Kota Cimahi)', 'Penelitian Skripsi', '', 'Sistem Manajement Logistik ( Analisis sistem Manajement distribusi vaksin COVID-19 di gudang vaksin Dinas Kesehatan Kota Cimahi)', 'Data yang diminta dapat diberikan', 'Data diberikan', 'Dinas kesehatan kota cimahi', ''),
(235, '2022-07-12', 'Perorangan', 'Dinda Andyani Fazrin', 'KP Pasekon', 'Perempuan', 'Cipanas', 'Cipanas', 'Cianjur', 'JAWA BARAT', 0, 'dindafazrin14@gmail.com', '083829406553', '', '', '', 'Hubungan status imunisasi dasar lengkap ( Dan asupan dengan kejadian shanting pada balita usia 24 sampai 59 bulan di wilayah Puskesmas Melong Tengah Kota Cimahi', 'Penelitian', '', 'Hubungan status imunisasi dasar lengkap ( Dan asupan dengan kejadian shanting pada balita usia 24 sampai 59 bulan di wilayah Puskesmas Melong Tengah Kota Cimahi', 'Data yang diminta dapat diberikan', 'Data diberikan', 'Dinas kesehatan kota cimahi', ''),
(236, '2022-07-12', 'Perorangan', 'Desi Natalia Ringu Langu', 'Jl. Dacota II no.02 Melong Green', 'Perempuan', 'Cimahi Selatan', '', 'Cimahi', 'JAWA BARAT', 0, '', '', '', '', '', 'Hubungan Tinggi Badan Orang Tua , Asupan Kalsium ( Dan protein dalam status gizi anak usia 12 - 36 bulan di Puskesmas Melong Tengah Cimahi Selatan)', 'Penelitian', '', 'Hubungan Tinggi Badan Orang Tua , Asupan Kalsium ( Dan protein dalam status gizi anak usia 12 - 36 bulan di Puskesmas Melong Tengah Cimahi Selatan)', 'Data yang diminta dapat diberikan', 'Data diberikan', 'Dinas kesehatan kota cimahi', ''),
(237, '2022-07-27', 'Perorangan', 'Siti Hardianti Mahrom', 'KP Kamurang', 'Perempuan', 'Cikarang Barat', '', 'Bekasi', 'JAWA BARAT', 0, '', '081282147127', '', '', '', 'Inhalasi Aroma Terapi Lavender (Untuk mengetahui pengaruh inhalasi aroma terapi lavender terhadap tekanan darah pada lansia dengan hipertensi)', 'Penelitian', '', 'Inhalasi Aroma Terapi Lavender (Untuk mengetahui pengaruh inhalasi aroma terapi lavender terhadap tekanan darah pada lansia dengan hipertensi)', 'Data yang diminta dapat diberikan', 'Data diberikan', 'Dinas kesehatan kota cimahi', ''),
(238, '2022-07-27', 'Perorangan', 'Bariz Piqri Baha', 'Kp. sukamaju', 'Laki-laki', 'Darangdan', '', 'Purwakarta', 'JAWA BARAT', 0, '', '0821196149817', '', '', '', 'Pengaruh terapi black garlic ( untuk mengetahui pengaruh terapi black garlic terhadap hipertensi pada lansia ', 'Penelitian', '', 'Pengaruh terapi black garlic ( untuk mengetahui pengaruh terapi black garlic terhadap hipertensi pada lansia ', 'Data yang diminta dapat diberikan', 'Data diberikan', 'Dinas kesehatan kota cimahi', ''),
(239, '2022-07-27', 'Peorangan', 'Ferdinand syahdika', 'Jl.benda jaya', 'Laki-laki', 'Jayakerja', '', 'Karawang', 'JAWA BARAT', 0, '', '081318182093', '', '', '', 'Pengaruh terapi musik mozart terhadap kualitas tidur lansia', 'Penelitian', '', 'Pengaruh terapi musik mozart terhadap kualitas tidur lansia', 'Data yang diminta dapat diberikan', 'Data diberikan', 'Dinas kesehatan kota cimahi', ''),
(240, '2022-07-28', 'Perorangan', 'Nada ayu salsabila', 'Kp.sayang sari rt02/09', 'Perempuan', 'Pameungpeuk', '', 'Bandung', 'JAWA BARAT', 0, 'nadaayus788@gmail.com', '089691950074', '', '', '', 'Faktor yang berhubungan dengan prilaku buang air besar sembarangan diwilayah Rw 17 Kel.Ciberem 2022', 'Penelitian', '', 'Faktor yang berhubungan dengan prilaku buang air besar sembarangan diwilayah Rw 17 Kel.Ciberem 2022', 'Data yang diminta dapat diberikan', 'Data diberikan', 'Dinas kesehatan kota cimahi', ''),
(241, '2022-07-13', 'Perorangan', 'FRY VANNY DYTA NURHASANAH', 'kp.gardulanguap ', 'Perempuan', 'Pagaden', '', 'Subang', 'JAWA BARAT', 0, 'fryvannydytan4673@gmail.com', '081313262420', '', '', '', 'Diabetes melitus ( Faktor faktor yang berhubungan pada kejadian diabetes melitus diwilayah kerja puskesmas cigugur tengah kota cimahi Tahun 2022', 'Penelitian skripsi', '', 'Diabetes melitus ( Faktor faktor yang berhubungan pada kejadian diabetes melitus diwilayah kerja puskesmas cigugur tengah kota cimahi Tahun 2022', 'Data yang diminta dapat diberikan', 'Data diberikan', 'Dinas kesehatan kota cimahi', ''),
(242, '2022-07-15', 'Perorangan', 'Shenny Melliyani', 'Jln. Cijerah II gg. dukuh NO.183', 'Perempuan', 'Cimahi selatan', '', 'Cimahi', 'JAWA BARAT', 0, '', '', '', '', '', 'Manajemen', 'PKL', '', 'Manajemen', 'Data yang diminta dapat diberikan', 'Data diberikan', 'Dinas kesehatan kota cimahi', '');

-- --------------------------------------------------------

--
-- Table structure for table `regulasi`
--

CREATE TABLE `regulasi` (
  `id_regulasi` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `text` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `role` enum('user','admin') NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` int(11) NOT NULL,
  `foto` text NOT NULL,
  `is_active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `email`, `no_telp`, `role`, `password`, `created_at`, `foto`, `is_active`) VALUES
(21, 'Rizki Kurniawan', 'rizki', 'rizki@gmail.com', '089608445221', 'admin', '$2y$10$PaDUQJfF50KDU75cjYKLyOMglsKEridQFsVwcfNBR8TKw6Cxs/hGq', 1658389143, '58d31ce147d8b2df8094a6aaf323bf2f.jpg', 1),
(27, 'Sony Santana', 'sony', 'sony.santana@student.unjani.ac.id', '0896087412223', 'user', '$2y$10$oEUEDireVmBhJcv1FHkNVOmroVAkQRmt.pO8RDrYr5yOHZsyjfhri', 1659662621, 'ba8294727e9a1415e6a22132837e2f56.jpg', 1),
(28, 'Dinas Kesehatan Kota Cimahi', 'dinkes', 'dinkes.cimahikota@gmail.com', '0226632197', 'admin', '$2y$10$mdyU7wyd9in0L/yJbpYQXOxdJequwJOmS.ilJXZM9BMvcpZYz.7GC', 1660017631, 'c5344fe5484ee939159dd75dfaccc3fb.png', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id_banner`);

--
-- Indexes for table `i_berkala`
--
ALTER TABLE `i_berkala`
  ADD PRIMARY KEY (`id_berkala`);

--
-- Indexes for table `i_merta`
--
ALTER TABLE `i_merta`
  ADD PRIMARY KEY (`id_merta`);

--
-- Indexes for table `i_private`
--
ALTER TABLE `i_private`
  ADD PRIMARY KEY (`id_private`);

--
-- Indexes for table `i_saat`
--
ALTER TABLE `i_saat`
  ADD PRIMARY KEY (`id_saat`);

--
-- Indexes for table `permohonan`
--
ALTER TABLE `permohonan`
  ADD PRIMARY KEY (`id_pemohon`);

--
-- Indexes for table `regulasi`
--
ALTER TABLE `regulasi`
  ADD PRIMARY KEY (`id_regulasi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id_banner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `i_berkala`
--
ALTER TABLE `i_berkala`
  MODIFY `id_berkala` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `i_merta`
--
ALTER TABLE `i_merta`
  MODIFY `id_merta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `i_private`
--
ALTER TABLE `i_private`
  MODIFY `id_private` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;

--
-- AUTO_INCREMENT for table `i_saat`
--
ALTER TABLE `i_saat`
  MODIFY `id_saat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `permohonan`
--
ALTER TABLE `permohonan`
  MODIFY `id_pemohon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=259;

--
-- AUTO_INCREMENT for table `regulasi`
--
ALTER TABLE `regulasi`
  MODIFY `id_regulasi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
