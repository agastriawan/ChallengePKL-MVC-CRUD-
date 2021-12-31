-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Des 2021 pada 02.20
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pkl_app`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `NamaKaryawan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `employees`
--

INSERT INTO `employees` (`id`, `NamaKaryawan`, `email`, `pekerjaan`, `image`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'Heri abdullah', 'heriys@gmail.com', 'Tata Usaha', 'image/lvzwwBPkyJnk5ExqdwPwCI0qdurYZbwn1bxclcpG.jpg', '<div>Jl. kalimantan 01, Depok</div>', '2021-12-30 08:45:11', '2021-12-30 08:45:11'),
(2, 'Rahmat Sukajono', 'matrahjon78@gmail.com', 'Sarpas', 'image/gyIRB1ZbxB1wuEA8QJOdJK1ys2qtwyvUrULwTpWH.jpg', '<div>Jl. Sukakamu No.60, Depok</div>', '2021-12-30 08:46:06', '2021-12-30 08:46:06'),
(4, 'Kilah Rohimah', 'lahhihmah@gmail.com', 'Resepsionis', 'image/h4fYJZDeJPla7FkaTA5z5XBUTL1RI5wAnGutsAkv.jpg', '<div>Jl. Menujupintukesuksesan No.09, Depok</div>', '2021-12-30 08:48:34', '2021-12-30 08:48:34'),
(5, 'Purwomastah', 'purwotah88@gmail.com', 'OB', 'image/AGaMvLgvqywVgvq2z7HFf21PnNue4KBYklatJK9L.jpg', '<div>Jl. jalan No.09, Depok</div>', '2021-12-30 08:49:30', '2021-12-30 08:49:30'),
(6, 'Romlih', 'romlihi876@gmail.com', 'Sarpas', 'image/Lvd9x1FcXmGXWlMeEOXdVjYukQOPUZavA77cK8j4.jpg', '<div>Jl. artisan No.88, Depok</div>', '2021-12-30 08:50:22', '2021-12-30 08:50:22'),
(7, 'Rohanah', 'hanahroh@gmail.com', 'Tata Usaha', 'image/93hJJoJbDsbTuWalwK7dk4aAkBJU4HZKqORP1jm7.jpg', '<div>Jl. Kedingdong No.09, Depok</div>', '2021-12-30 08:51:07', '2021-12-30 08:51:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_12_29_082234_create_teachers_table', 1),
(6, '2021_12_30_063920_create_students_table', 1),
(7, '2021_12_30_064049_create_employees_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `NamaSiswa` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `students`
--

INSERT INTO `students` (`id`, `NamaSiswa`, `email`, `jurusan`, `image`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'Agas Triawan', 'agastriawan55@gmail.com', 'Rekayasa Perangkat Lunak', 'image/smGGSofxto6pk6f0VpDwuSAqWNFaTjZ3Xsu30ht5.jpg', '<div>Cimpaeun RT/01 RW/13 NO.23 Kec.Tapos Kota.Depok</div>', '2021-12-30 07:28:04', '2021-12-30 07:44:41'),
(2, 'Muhammad Rizky Perdana', 'mrizky89@gmail.com', 'Multimedia', 'image/Zc4l8zV1WkaX8Wyj4Hqz27XCqJgX2JfutTjp6erk.jpg', '<div>Jl haji sara No.56 Kec.Tapos Kota.Depok</div>', '2021-12-30 07:35:04', '2021-12-30 07:48:12'),
(3, 'Sulthan Ali Rasyid', 'sulthanalirash67@gmail.com', 'Akutansi', 'image/3WsV1tvA1I8MIzJeOMx5FvUWAXpFqi0BEOYdL4tv.jpg', '<div>Jl Babakan Sari III 307, Jawa Barat</div>', '2021-12-30 07:38:59', '2021-12-30 07:51:09'),
(4, 'Nadia Shaliha', 'nadia990@gmail.com', 'TKRO', 'image/kXDYIJc7UylcxSX608UU02IrMW71qAAoFbVjMUUR.jpg', '<div>Jl. Bhakti Suci No.89, Cimpaeun, Kec. Tapos, Kota Depok</div>', '2021-12-30 07:41:04', '2021-12-30 07:48:49'),
(5, 'Ahmad Murabith', 'ahmadmurabt56@gmail.com', 'TBSM', 'image/5vT3Kk48FUILVSxCd0DwHWfRN6HuwqNnvat0aXUI.jpg', '<div>Jl Pungkur 195, Jawa Bara</div>', '2021-12-30 07:52:48', '2021-12-30 07:52:48'),
(6, 'Rangga Aditya', 'ranggaadit78@gmail.com', 'Rekayasa Perangkat Lunak', 'image/dCExeGizD2h7EfMuhXwDfEuGG9GU0ndeRD5ONvHN.jpg', '<div>Jl Duren Tiga PLN 14, Dki Jakarta</div>', '2021-12-30 07:54:53', '2021-12-30 07:54:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `teachers`
--

CREATE TABLE `teachers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `NamaGuru` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mapel` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `teachers`
--

INSERT INTO `teachers` (`id`, `NamaGuru`, `email`, `mapel`, `image`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'Suminar Budijosono', 'suminae00@gmail.com', 'Sejarah', 'image/24MwYcWCPOusjNS41llPctzZVDHrHZHI0JBhjvNW.jpg', '<div>Jl Gajah Mada 3-5, Dki Jakarta</div>', '2021-12-30 08:09:07', '2021-12-30 08:09:07'),
(2, 'Susila Ningsih', 'susiningsi76@gmail.com', 'Bahasa Sunda', 'image/65eqOFvY2iKUyuV1p8cGFfLn5c9LG7IrRMeDDogu.jpg', '<div>Jl KH Hasyim Ashari 9 E, Depok</div>', '2021-12-30 08:11:34', '2021-12-30 08:11:34'),
(3, 'Bursa Hidayatullah', 'bursa88@gmail.com', 'Matematika', 'image/NUdcygithDpvFmIFea6JDjOCWM5rRbCy027qgoDr.jpg', '<div>Jl Awali hasan sukthan 9 E, Dki Jakarta</div>', '2021-12-30 08:13:35', '2021-12-30 08:13:35'),
(4, 'Endah Sukasasi', 'endah789suka@gmail.com', 'Bahasa Indonesia', 'image/uaAsmTOysZh3O4GDiWk5c5KlmiOVma7dxhO4RMFR.jpg', '<div>Jl Cikapundung Brt 1, Jawa Barat</div>', '2021-12-30 08:21:14', '2021-12-30 08:21:14'),
(5, 'Muhadiratin', 'muhadiratinna@gmail.com', 'Bahasa Indonesia', 'image/KdyH3vJ0v97Vm80phnBkT89jgQKqX3avNu8xBnX6.jpg', '<div>Jl Ngagel Jaya 20, Jawa barat</div>', '2021-12-30 08:22:34', '2021-12-30 08:22:34'),
(6, 'Dadan Sukandang', 'dandan@gmail.com', 'Ipa', 'image/gTx2S8PMPhPKxmep6iZCPHdvb1D08Av5VgbT3Z9Z.jpg', '<div>Jl mekarsri 02, depok</div>', '2021-12-30 08:30:39', '2021-12-30 08:30:39'),
(7, 'sukimin', 'sukinmin89@gmail.com', 'Matematika', 'image/VhnsSJKuT2t3MO4W2vCyC8al0GA5nqo3sRFxkPs9.jpg', '<div>Jl Pulau Alor 10, Depok</div>', '2021-12-30 08:42:44', '2021-12-30 08:42:44'),
(8, 'Rehan aulian', 'rehanaulian90@gmail.com', 'Bahasa Indonesia', 'image/bchMPQXf5yLcX0L3iU5hYg2ew1fa6vRiScscOvnF.jpg', '<div>Jl Inspeksi Saluran Kalimalang Bl E7/12 RT 00-/07, Dki Jakarta</div>', '2021-12-30 08:44:16', '2021-12-30 08:44:16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Agas Triawan', 'agasssu', 'agastriawan55@gmail.com', NULL, '$2y$10$lLvAsJdMqKg9nS68VYitLOcdHJLjcxKJhZwBq4HMsFtkHPX57mJqu', NULL, '2021-12-30 07:20:10', '2021-12-30 07:20:10'),
(2, 'AGGA', 'anansbbs', 'admin1234@gmail.com', NULL, '$2y$10$XANdjiPfSvd.sD4r97vXwewoVHbws1Cd5sT4c1cUcSEPHOleb.vBO', NULL, '2021-12-30 07:24:21', '2021-12-30 07:24:21');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
