-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 06, 2025 at 12:46 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nextedu`
--

-- --------------------------------------------------------

--
-- Table structure for table `diagnose_results`  (hasil tes)

CREATE TABLE `hasil_tes` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `result` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `diagnose_results` (nama diabetesnya diganti nama jurusan)
--

INSERT INTO `hasil_tes` (`id`, `created_at`, `updated_at`, `user_id`, `result`) VALUES 
(1, '2025-02-06 00:45:03', '2025-02-06 00:45:03', 1, 'Teknik Komputer dan Jaringan'),
(2, '2025-02-06 00:45:03', '2025-02-06 00:45:03', 2, 'Multimedia'),
(3, '2025-02-06 00:45:03', '2025-02-06 00:45:03', 3, 'Rekayasa Perangkat Lunak'),
(4, '2025-02-06 00:45:03', '2025-02-06 00:45:03', 4, 'Akutansi'),
(5, '2025-02-06 00:45:03', '2025-02-06 00:45:03', 5, 'Perbankan'),
(6, '2025-02-06 00:45:03', '2025-02-06 00:45:03', 6, 'Teknik Metrokonika'),
(7, '2025-02-06 00:45:03', '2025-02-06 00:45:03', 7, 'Produksi Siaran Langsung');

-- --------------------------------------------------------

--
-- Table structure for table `diseases` (nama jurusan)
--

CREATE TABLE `nama_jurusan` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `img` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_jurusan_code` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_jurusan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `diseases`
--

INSERT INTO `nama_jurusan` (`id`, `created_at`, `updated_at`, `img`, `nama_jurusan_code`, `nama_jurusan`, `type`, `description`) VALUES
(1, '2025-02-06 00:45:03', '2025-02-06 00:45:03', 'https://source.unsplash.com/-mMoKrWFBjw', 'J1', 'Teknik Komputer dan Jaringan', 'IT', 'Jurusan yang berfokus pada jaringan komputer, pemrograman dasar, dan perbaikan perangkat keras.'),
(2, '2025-02-06 00:45:03', '2025-02-06 00:45:03', 'https://source.unsplash.com/bkc-m0iZ4Sk', 'J2', 'Multimedia', 'Creative', 'Mengembangkan keterampilan dalam desain grafis, animasi, videografi, dan produksi media.'),
(3, '2025-02-06 00:45:03', '2025-02-06 00:45:03', 'https://source.unsplash.com/bkc-m0iZ4Sk', 'J3', 'Rekayasa Perangkat Lunak', 'IT', 'Berfokus pada pemrograman, pengembangan aplikasi, dan rekayasa sistem perangkat lunak.'),
(4, '2025-02-06 00:45:03', '2025-02-06 00:45:03', 'https://source.unsplash.com/bkc-m0iZ4Sk', 'J4', 'Akuntansi', 'Finance', 'Mengajarkan dasar-dasar akuntansi, pembukuan, dan pengelolaan laporan keuangan.'),
(5, '2025-02-06 00:45:03', '2025-02-06 00:45:03', 'https://source.unsplash.com/bkc-m0iZ4Sk', 'J5', 'Perbankan', 'Finance', 'Fokus pada sistem perbankan, layanan keuangan, dan transaksi bisnis.'),
(6, '2025-02-06 00:45:03', '2025-02-06 00:45:03', 'https://source.unsplash.com/bkc-m0iZ4Sk', 'J6', 'Teknik Mekatronika', 'Engineering', 'Kombinasi teknik mesin, elektronik, dan komputer untuk sistem otomatisasi.'),
(7, '2025-02-06 00:45:03', '2025-02-06 00:45:03', 'https://source.unsplash.com/bkc-m0iZ4Sk', 'J7', 'Produksi Siaran Televisi', 'Creative', 'Pembelajaran tentang penyiaran televisi, jurnalistik, dan produksi konten visual.');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `medicines` (artikel)
--

CREATE TABLE `artikel` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nama_jurusan_id` bigint UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `medicines`
--

INSERT INTO `artikel` (`id`, `created_at`, `updated_at`, `nama_jurusan_id`, `name`, `img`) VALUES
(1, '2025-02-06 00:45:03', '2025-02-06 00:45:03', 1, 'Kurikulum Merdeka di SMA: Kenali Karakteristik dan Strukturnya', 'https://source.unsplash.com/w8p9cQDLX7I'),
(2, '2025-02-06 00:45:03', '2025-02-06 00:45:03', 2, 'Memilih Jurusan Studi di SMA', 'https://source.unsplash.com/w8p9cQDLX7I'),
(3, '2025-02-06 00:45:03', '2025-02-06 00:45:03', 3, 'Efektivitas Kebijakan Penghapusan Jurusan IPA, IPS, dan Bahasa di SMA', 'https://source.unsplash.com/w8p9cQDLX7I'),
(4, '2025-02-06 00:45:03', '2025-02-06 00:45:03', 4, '20 Jurusan di SMK yang Paling Diminati dan Bergaji Tinggi', 'https://source.unsplash.com/w8p9cQDLX7I'),
(5, '2025-02-06 00:45:03', '2025-02-06 00:45:03', 5, 'Belajar Apa Aja Sih, di Sekolah Menengah Kejuruan (SMK)?', 'https://source.unsplash.com/w8p9cQDLX7I'),
(6, '2025-02-06 00:45:03', '2025-02-06 00:45:03', 6, '10 Pekerjaan Terbaik untuk Lulusan SMA/SMK, Bisa Sukses Gapai Karier Impian!', 'https://source.unsplash.com/w8p9cQDLX7I'),
(7, '2025-02-06 00:45:03', '2025-02-06 00:45:03', 7, 'Tantangan bagi Lulusan SMA dan SMK: Kesiapan Menghadapi Dunia Kerja', 'https://source.unsplash.com/w8p9cQDLX7I'),
(8, '2025-02-06 00:45:03', '2025-02-06 00:45:03', 7, 'Peluang Karier Siswa SMK Setelah Lulus, Apa Saja Ya?', 'https://source.unsplash.com/w8p9cQDLX7I'),
(9, '2025-02-06 00:45:03', '2025-02-06 00:45:03', 7, 'Masa Depan Setelah SMA: Antara Kuliah dan Berdaya Mandiri', 'https://source.unsplash.com/w8p9cQDLX7I'),
(10, '2025-02-06 00:45:03', '2025-02-06 00:45:03',7, 'Lulus SMA Kerja atau Kuliah? Pahami Kekurangan dan Kelebihannya!', 'https://source.unsplash.com/w8p9cQDLX7I');

----------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_03_31_065211_create_pertanyaan_table', 1),
(6, '2023_03_31_073036_create_nama_jurusan_table', 1),
(7, '2023_03_31_083512_create_artikel_table', 1),
(8, '2023_04_24_072240_create_rules_table', 1),
(9, '2023_05_10_063722_create_saran_pekerjaan_table', 1),
(10, '2023_05_11_102512_create_hasil_tes_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rules`
--

CREATE TABLE `rules` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nama_jurusan_id` bigint UNSIGNED NOT NULL,
  `pertanyaan_id` bigint UNSIGNED NOT NULL,
  `rule_value` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rules` (kosongin aja nanti aku yg isi)
--

INSERT INTO `rules` (`id`, `created_at`, `updated_at`, `nama_jurusan_id`, `pertanyaan_id`, `rule_value`) VALUES
(1, '2025-02-06 00:45:03', '2025-02-06 00:45:03', 1, 1, 1),    -- Teknik Komputer dan Jaringan (J1)
(2, '2025-02-06 00:45:03', '2025-02-06 00:45:03', 1, 3, 1),
(3, '2025-02-06 00:45:03', '2025-02-06 00:45:03', 1, 5, 1),
(4, '2025-02-06 00:45:03', '2025-02-06 00:45:03', 1, 6, 1),
(5, '2025-02-06 00:45:03', '2025-02-06 00:45:03', 1, 7, 1),
(6, '2025-02-06 00:45:03', '2025-02-06 00:45:03', 1, 8, 1),     -- Multimedia (J2)
(7, '2025-02-06 00:45:03', '2025-02-06 00:45:03', 2, 10, 1),
(8, '2025-02-06 00:45:03', '2025-02-06 00:45:03', 2, 11, 1),
(9, '2025-02-06 00:45:03', '2025-02-06 00:45:03', 2, 12, 1),
(10, '2025-02-06 00:45:03', '2025-02-06 00:45:03', 2, 34, 1),
(11, '2025-02-06 00:45:03', '2025-02-06 00:45:03', 2, 35, 1),
(12, '2025-02-06 00:45:03', '2025-02-06 00:45:03', 2, 36, 1),   -- Rekayasa Perangkat Lunak (J3)
(13, '2025-02-06 00:45:03', '2025-02-06 00:45:03', 3, 4, 1),
(14, '2025-02-06 00:45:03', '2025-02-06 00:45:03', 3, 14, 1),
(15, '2025-02-06 00:45:03', '2025-02-06 00:45:03', 3, 16, 1),
(16, '2025-02-06 00:45:03', '2025-02-06 00:45:03', 3, 17, 1),
(17, '2025-02-06 00:45:03', '2025-02-06 00:45:03', 3, 18, 1),    -- Akuntansi (J4)
(18, '2025-02-06 00:45:03', '2025-02-06 00:45:03', 4, 19, 1),
(19, '2025-02-06 00:45:03', '2025-02-06 00:45:03', 4, 20, 1),
(20, '2025-02-06 00:45:03', '2025-02-06 00:45:03', 4, 21, 1),
(21, '2025-02-06 00:45:03', '2025-02-06 00:45:03', 4, 22, 1),
(22, '2025-02-06 00:45:03', '2025-02-06 00:45:03', 4, 23, 1),    -- Perbankan (J5)
(23, '2025-02-06 00:45:03', '2025-02-06 00:45:03', 5, 24, 1),
(24, '2025-02-06 00:45:03', '2025-02-06 00:45:03', 5, 25, 1),
(25, '2025-02-06 00:45:03', '2025-02-06 00:45:03', 5, 26, 1),
(26, '2025-02-06 00:45:03', '2025-02-06 00:45:03', 5, 27, 1),
(27, '2025-02-06 00:45:03', '2025-02-06 00:45:03', 5, 28, 1),    -- Teknik Mekatronika (J6)
(28, '2025-02-06 00:45:03', '2025-02-06 00:45:03', 6, 29, 1),
(29, '2025-02-06 00:45:03', '2025-02-06 00:45:03', 6, 30, 1),
(30, '2025-02-06 00:45:03', '2025-02-06 00:45:03', 6, 31, 1),
(31, '2025-02-06 00:45:03', '2025-02-06 00:45:03', 6, 32, 1),
(32, '2025-02-06 00:45:03', '2025-02-06 00:45:03', 6, 33, 1),    -- Produksi Siaran Langsung (J7)
(33, '2025-02-06 00:45:03', '2025-02-06 00:45:03', 7, 34, 1),
(34, '2025-02-06 00:45:03', '2025-02-06 00:45:03', 7, 35, 1),
(35, '2025-02-06 00:45:03', '2025-02-06 00:45:03', 7, 36, 1),
(36, '2025-02-06 00:45:03', '2025-02-06 00:45:03', 7, 37, 1),
(37, '2025-02-06 00:45:03', '2025-02-06 00:45:03', 7, 38, 1);

-- --------------------------------------------------------

--
-- Table structure for table `solutions`
--

CREATE TABLE `saran_pekerjaan` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nama_jurusan_id` bigint UNSIGNED NOT NULL,
  `saran_pekerjaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `solutions` (saran pekerjaan)
--

INSERT INTO `saran_pekerjaan` (`id`, `created_at`, `updated_at`, `nama_jurusan_id`, `saran_pekerjaan`) VALUES
(1, '2025-02-06 00:45:03', '2025-02-06 00:45:03', 1, 'lorem ipsum.'),
(2, '2025-02-06 00:45:03', '2025-02-06 00:45:03', 2, 'lorem ipsum.'),
(3, '2025-02-06 00:45:03', '2025-02-06 00:45:03', 3, 'lorem ipsum.'),
(4, '2025-02-06 00:45:03', '2025-02-06 00:45:03', 4, 'lorem ipsum.'),
(5, '2025-02-06 00:45:03', '2025-02-06 00:45:03', 5 'lorem ipsum.'),
(6, '2025-02-06 00:45:03', '2025-02-06 00:45:03', 6 'lorem ipsum.'),
(7, '2025-02-06 00:45:03', '2025-02-06 00:45:03', 7, 'lorem ipsum.');

-- --------------------------------------------------------

--
-- Table structure for table `symptoms`(pertanyaan yang diajukan)
--

CREATE TABLE `pertanyaan` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `pertanyaan_code` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pertanyaan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `symptoms`
--

INSERT INTO `pertanyaan` (`id`, `created_at`, `updated_at`, `pertanyaan_code`, `pertanyaan`) VALUES
(1, '2025-02-06 00:45:03', '2025-02-06 00:45:03', 'F1', 'Apakah anda senang dengan matematika?'),
(2, '2025-02-06 00:45:03', '2025-02-06 00:45:03', 'F2', 'Apakah anda senang bergaul dan memiliki banyak relasi?'),
(3, '2025-02-06 00:45:03', '2025-02-06 00:45:03', 'F3', 'Apakah anda senang bekerja dengan alat alat?'),
(4, '2025-02-06 00:45:03', '2025-02-06 00:45:03', 'F4', 'Apakah anda senang membaca buku / artikel komputer?'),
(5, '2025-02-06 00:45:03', '2025-02-06 00:45:03', 'F5', 'Apakah anda senang bekerja dengan perangkat jaringan?'),
(6, '2025-02-06 00:45:03', '2025-02-06 00:45:03', 'F6', 'Apakah anda senang menginstal software sistem operasi dan aplikasi?'),
(7, '2025-02-06 00:45:03', '2025-02-06 00:45:03', 'F7', 'Apakah anda senang memperbaiki pripheral computer?'),
(8, '2025-02-06 00:45:03', '2025-02-06 00:45:03', 'F8', 'Apakah anda tertarik dalam bidang komputer jaringan?'),
(9, '2025-02-06 00:45:03', '2025-02-06 00:45:03', 'F9', 'Apakah anda bisa mempengaruhi (persuasive)?'),
(10, '2025-02-06 00:45:03', '2025-02-06 00:45:03', 'F10', 'Apakah anda senang menggunkan kamera?'),
(11, '2025-02-06 00:45:03', '2025-02-06 00:45:03', 'F11', 'Apakah anda senang menggambar / melukis?'),
(12, '2025-02-06 00:45:03', '2025-02-06 00:45:03', 'F12', 'Apakah anda senang memperhatikan gambar daripada tulisan?'),
(13, '2025-02-06 00:45:03', '2025-02-06 00:45:03', 'F13', 'Apakah anda senang mengingat sesuatu melalui gambar atau diagram?'),
(14, '2025-02-06 00:45:03', '2025-02-06 00:45:03', 'F14', 'Apakah anda senang dengan permainan yang menggunakan logika?'),
(15, '2025-02-06 00:45:03', '2025-02-06 00:45:03', 'F15', 'Apakah anda bisa mengurutkan sesuatu agar mudah diingat?'),
(16, '2025-02-06 00:45:03', '2025-02-06 00:45:03', 'F16', 'Apakah anda senang memanajemen pengembangan perangkat lunak?'),
(17, '2025-02-06 00:45:03', '2025-02-06 00:45:03', 'F17', 'Apakah anda senang dengan kode-kode unik?'),
(18, '2025-02-06 00:45:03', '2025-02-06 00:45:03', 'F18', 'Apakah anda senang membuat desain-desain unik?'),
(19, '2025-02-06 00:45:03', '2025-02-06 00:45:03', 'F19', 'Apakah anda senang mengerjakan laporan keuangan?'),
(20, '2025-02-06 00:45:03', '2025-02-06 00:45:03', 'F20', 'Apakah anda senang dengan pekerjaan yang membutuhkan ketelitian?'),
(21, '2025-02-06 00:45:03', '2025-02-06 00:45:03', 'F21', 'Apakah anda senang mengoperasikan aplikasi komputer akuntansi?'),
(22, '2025-02-06 00:45:03', '2025-02-06 00:45:03', 'F22', 'Apakah anda senang dengan program pengolahan angka?'),
(23, '2025-02-06 00:45:03', '2025-02-06 00:45:03', 'F23', 'Apakah anda tertarik mendalami bidang akuntansi?'),
(24, '2025-02-06 00:45:03', '2025-02-06 00:45:03', 'F24', 'Apakah anda menguasai atau senang berbahasa asing?'),
(25, '2025-02-06 00:45:03', '2025-02-06 00:45:03', 'F25', 'Apakah anda senang dengan kegiatan surat-menyurat?'),
(26, '2025-02-06 00:45:03', '2025-02-06 00:45:03', 'F26', 'Apakah anda senang mengatur jadwal atau memanajemen waktu?'),
(27, '2025-02-06 00:45:03', '2025-02-06 00:45:03', 'F27', 'Apakah anda senang mengoperasikan perangkat lunak perbankan?'),
(28, '2025-02-06 00:45:03', '2025-02-06 00:45:03', 'F28', 'Apakah anda tertarik pada pekerjaan perbankan?'),
(29, '2025-02-06 00:45:03', '2025-02-06 00:45:03', 'F29', 'Apakah anda tertarik mendalami permesinan?'),
(30, '2025-02-06 00:45:03', '2025-02-06 00:45:03', 'F30', 'Apakah anda bisa mengoperasikan permesinan?'),
(31, '2025-02-06 00:45:03', '2025-02-06 00:45:03', 'F31', 'Apakah anda bisa berpikir secara logis dan sistematis?'),
(32, '2025-02-06 00:45:03', '2025-02-06 00:45:03', 'F32', 'Apakah anda senang memperbaiki barang-barang elektronik?'),
(33, '2025-02-06 00:45:03', '2025-02-06 00:45:03', 'F33', 'Apakah anda senang dengan ilmu komputasi?'),
(34, '2025-02-06 00:45:03', '2025-02-06 00:45:03', 'F34', 'Apakah anda senang bercerita?'),
(35, '2025-02-06 00:45:03', '2025-02-06 00:45:03', 'F35', 'Apakah anda senang tampil di depan kamera?'),
(36, '2025-02-06 00:45:03', '2025-02-06 00:45:03', 'F36', 'Apakah anda senang mencari berita?'),
(37, '2025-02-06 00:45:03', '2025-02-06 00:45:03', 'F37', 'Apakah anda senang memandu acara?'),
(38, '2025-02-06 00:45:03', '2025-02-06 00:45:03', 'F38', 'Apakah anda tertarik mendalami bidang penyiaran?');


-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `is_admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$ZvdEn/EJc1jPtNTJXgg9YuMEuNVdYJ9lOWBFcF.Unlid5ZH86cbSy', 1, NULL, '2025-02-06 00:45:03', '2025-02-06 00:45:03'),
(2, 'vincent', 'vincent@gmail.com', '$2y$10$/oyHHLpGx7dkbgia6KJbzeK0yTUtedbd2Nz86KP.Cet2wseJyojpi', 0, NULL, '2025-02-06 00:45:03', '2025-02-06 00:45:03'),
(3, 'rucci', 'rucci@gmail.com', '$2y$10$Bzuawn3oxUB3PVvH1xGpF.YPWDm1aD/h3E.ojtFQNflGHVAdKvyKS', 0, NULL, '2025-02-06 00:45:03', '2025-02-06 00:45:03'),
(4, 'darren', 'darren@gmail.com', '$2y$10$1GMvDgJR8qJzl4PMLS/UduK/jRMgcOm0zzcE40ykcDDuelbEaQ26C', 0, NULL, '2025-02-06 00:45:03', '2025-02-06 00:45:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `diagnose_results`
--
ALTER TABLE `hasil_tes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hasil_tes_user_id_foreign` (`user_id`);

--
-- Indexes for table `diseases` -nama_jurusan
--
ALTER TABLE `nama_jurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `medicines` -artikel
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `artikel_nama_jurusan_id_foreign` (`nama_jurusan_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `rules`
--
ALTER TABLE `rules`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rules_nama_jurusan_id_foreign` (`nama_jurusan_id`),
  ADD KEY `rules_pertanyaan_id_foreign` (`pertanyaan_id`);

--
-- Indexes for table `solutions` -saran_pekerjaan
--
ALTER TABLE `saran_pekerjaan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `saran_pekerjaan_nama_jurusan_id_foreign` (`nama_jurusan_id`);

--
-- Indexes for table `symptoms`
--
ALTER TABLE `pertanyaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `diagnose_results`
--
ALTER TABLE `hasil_tes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `diseases`
--
ALTER TABLE `nama_jurusan`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `medicines`
--
ALTER TABLE `artikel`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rules`
--
ALTER TABLE `rules`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `solutions`-saran pekerjaan
--
ALTER TABLE `saran_pekerjaan`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `symptoms`
--
ALTER TABLE `pertanyaan`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `diagnose_results`
--
ALTER TABLE `hasil_tes`
  ADD CONSTRAINT `hasil_tes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `medicines`
--
ALTER TABLE `artikel`
  ADD CONSTRAINT `artikel_nama_jurusan_id_foreign` FOREIGN KEY (`nama_jurusan_id`) REFERENCES `nama_jurusan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rules`
--
ALTER TABLE `rules`
  ADD CONSTRAINT `rules_nama_jurusan_id_foreign` FOREIGN KEY (`nama_jurusan_id`) REFERENCES `nama_jurusan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rules_pertanyaan_id_foreign` FOREIGN KEY (`pertanyaan_id`) REFERENCES `pertanyaan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `solutions`
--
ALTER TABLE `saran_pekerjaan`
  ADD CONSTRAINT `saran_pekerjaan_nama_jurusan_id_foreign` FOREIGN KEY (`nama_jurusan_id`) REFERENCES `nama_jurusan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
