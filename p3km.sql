-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 01 Jun 2024 pada 10.47
-- Versi server: 8.0.30
-- Versi PHP: 8.2.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `p3km`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` char(36) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `poto` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `nama`, `username`, `password`, `poto`, `created_at`, `updated_at`) VALUES
('9bb82e1a-518a-404a-81a3-1d8814dc319e', 'Super Admin', 'admin', '$2y$12$89gE85kQreMcrHIOb9MFpu.eCyqh7CeKK3LPrGLFtasm2HxmCe.Ny', 'app/admin/1712153495-QfzMS.png', '2024-04-03 07:11:38', '2024-04-03 07:11:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id` char(36) NOT NULL,
  `nama_berita` varchar(255) NOT NULL,
  `tanggal_berita` date DEFAULT NULL,
  `detail` text NOT NULL,
  `poto` varchar(255) DEFAULT NULL,
  `status` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id` char(36) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `poto` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `hki`
--

CREATE TABLE `hki` (
  `id` char(36) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tahun_terbit` varchar(4) NOT NULL,
  `file` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `panduan`
--

CREATE TABLE `panduan` (
  `id` char(36) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenis_panduan` enum('Panduan Internal','Panduan Pusat') NOT NULL,
  `tahun_terbit` varchar(20) NOT NULL,
  `file` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `panduan`
--

INSERT INTO `panduan` (`id`, `nama`, `jenis_panduan`, `tahun_terbit`, `file`, `created_at`, `updated_at`) VALUES
('9c2cfc98-3a72-47f9-90bc-7beeb4a06ce9', 'Bagiaan I', 'Panduan Internal', '2023-2024', 'app/panduan/1717170303-cut2y.pdf', '2024-05-31 08:45:03', '2024-05-31 08:45:03'),
('9c2cfcb0-9720-4aa1-963a-2e0b1d6f5c91', '12. Deadlock', 'Panduan Pusat', '2024-2025', 'app/panduan/1717170319-kWsIM.pdf', '2024-05-31 08:45:19', '2024-05-31 08:45:19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penelitian`
--

CREATE TABLE `penelitian` (
  `id` char(36) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `ketua_peneliti` varchar(255) NOT NULL,
  `anggota_dosen` varchar(255) NOT NULL,
  `anggota_mahasiswa` varchar(255) NOT NULL,
  `skema` varchar(255) NOT NULL,
  `tahun_terbit` int NOT NULL,
  `deskripsi` text NOT NULL,
  `jenis_penelitian` enum('DRTPM/APTV','Internal') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengabdian`
--

CREATE TABLE `pengabdian` (
  `id` char(36) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `ketua_peneliti` varchar(255) NOT NULL,
  `anggota_dosen` varchar(255) NOT NULL,
  `anggota_mahasiswa` varchar(255) NOT NULL,
  `skema` varchar(255) NOT NULL,
  `tahun_terbit` int NOT NULL,
  `deskripsi` text NOT NULL,
  `jenis_pengabdian` enum('DRTPM/APTV','Internal') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id` char(36) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `poto` varchar(255) NOT NULL,
  `tanggal_kegiatan` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pimpinan`
--

CREATE TABLE `pimpinan` (
  `id` char(36) NOT NULL,
  `nip` varchar(25) DEFAULT NULL,
  `nik` varchar(20) DEFAULT NULL,
  `nama_lengkap` varchar(255) DEFAULT NULL,
  `gelar_belakang` varchar(255) DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `bidang_keahlian` varchar(255) DEFAULT NULL,
  `tempat_lahir` varchar(255) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') DEFAULT NULL,
  `agama` enum('Islam') DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `hp` varchar(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil`
--

CREATE TABLE `profil` (
  `id` char(36) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `jenis` enum('Profil','Visi','Misi','Tujuan') NOT NULL,
  `text` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `profil`
--

INSERT INTO `profil` (`id`, `judul`, `jenis`, `text`, `created_at`, `updated_at`) VALUES
('9bb23cdd-c14d-48c7-b0b6-ee465e341c0d', 'PROFIL P3KM', 'Profil', '<p><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify; background-color: var(--bs-card-bg); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight);\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas erat urna, finibus sed sagittis ac, tempor id diam. Sed aliquet dolor sit amet convallis condimentum. Sed vitae mauris pharetra, bibendum diam nec, lacinia ligula. Aenean aliquam sapien sed diam fermentum, eget eleifend massa pulvinar.</span><br></p>', '2024-04-07 15:19:58', '2024-04-07 08:19:58'),
('9bb57be3-757d-4a22-8449-19c552c1dd8e', 'VISI P3KM', 'Visi', '<ol><li><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas erat urna, finibus sed sagittis ac,</span></li><li><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\"> tempor id diam. Sed aliquet dolor sit amet convallis condimentum. Sed vitae mauris pharetra, bibendum diam nec, lacinia ligula. </span></li><li><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Aenean aliquam sapien sed diam fermentum, eget eleifend massa pulvinar. Fusce dui dui, placerat a neque quis, laoreet rutrum felis. </span></li><li><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Mauris a nunc a enim pretium imperdiet a gravida odio. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; </span></li><li><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Nulla molestie hendrerit velit, sit amet commodo purus elementum vel. Mauris in scelerisque arcu, id vehicula purus. </span></li><li><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Praesent a semper urna. Phasellus pulvinar consectetur dolor, vel suscipit libero imperdiet et. </span></li><li><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Etiam vel blandit purus. Nulla orci mauris, aliquet non maximus ultrices, imperdiet sit amet mi. </span></li><li><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Praesent augue risus, efficitur eget dignissim vitae, cursus eget odio.</span><br></li></ol>', '2024-04-02 06:31:17', '2024-04-01 23:31:17'),
('9bb583b3-1eec-4e9f-b26a-9337729ab145', 'MISI P3KM', 'Misi', '<ol><li><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas erat urna, finibus sed sagittis ac,</span></li><li><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">tempor id diam. Sed aliquet dolor sit amet convallis condimentum. Sed vitae mauris pharetra, bibendum diam nec, lacinia ligula.</span></li><li><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Aenean aliquam sapien sed diam fermentum, eget eleifend massa pulvinar. Fusce dui dui, placerat a neque quis, laoreet rutrum felis.</span></li><li><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Mauris a nunc a enim pretium imperdiet a gravida odio. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae;</span></li><li><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Nulla molestie hendrerit velit, sit amet commodo purus elementum vel. Mauris in scelerisque arcu, id vehicula purus.</span></li><li><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Praesent a semper urna. Phasellus pulvinar consectetur dolor, vel suscipit libero imperdiet et.</span></li><li><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Etiam vel blandit purus. Nulla orci mauris, aliquet non maximus ultrices, imperdiet sit amet mi.</span></li><li><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Praesent augue risus, efficitur eget dignissim vitae, cursus eget odio.</span></li></ol>', '2024-04-02 06:31:06', '2024-04-01 23:31:06'),
('9bc052f8-ec15-435f-b7e9-a2100a98e15b', 'TUJUAN P3KM', 'Tujuan', '<div style=\"text-align: justify;\"><span style=\"background-color: var(--bs-card-bg); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\"><font face=\"Open Sans, Arial, sans-serif\">asbdbhabsdjabdashdvasbdhabsdjbasbdbsa</font></span></div><div style=\"text-align: justify;\"><span style=\"background-color: var(--bs-card-bg); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\"><font face=\"Open Sans, Arial, sans-serif\">asdvhgavsdvhsahdsahbdvasvmdhsa</font></span></div><div style=\"text-align: justify;\"><span style=\"background-color: var(--bs-card-bg); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\"><font face=\"Open Sans, Arial, sans-serif\">asdbhavavvadvhfadbfad,mnbfhbadfjda</font></span></div><div style=\"text-align: justify;\"><span style=\"background-color: var(--bs-card-bg); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\"><font face=\"Open Sans, Arial, sans-serif\">adfjdafhhhhhhhhhhhhhhhhhhhhhhhhj</font></span></div>', '2024-04-07 15:24:45', '2024-04-07 08:24:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `prosedur_hki`
--

CREATE TABLE `prosedur_hki` (
  `id` char(36) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `prosedur_hki`
--

INSERT INTO `prosedur_hki` (`id`, `nama`, `file`, `created_at`, `updated_at`) VALUES
('9c2d014f-052b-43f8-af77-9f4c0f33b91b', 'Bagiaan I', 'app/prosedur-hki/1717171094-Vacn9.pdf', '2024-05-31 08:58:14', '2024-05-31 08:58:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `publikasi`
--

CREATE TABLE `publikasi` (
  `id` char(36) NOT NULL,
  `nama_penulis` text NOT NULL,
  `nama_jurnal` text NOT NULL,
  `judul` text NOT NULL,
  `volume` varchar(255) NOT NULL,
  `tahun_terbit` int NOT NULL,
  `deskripsi` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `renstra`
--

CREATE TABLE `renstra` (
  `id` char(36) NOT NULL,
  `nama_renstra` varchar(255) NOT NULL,
  `tahun_terbit` varchar(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `file_pdf` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `cover` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rip`
--

CREATE TABLE `rip` (
  `id` char(36) NOT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `tahun_terbit` varchar(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `file_pdf` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `cover` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `rip`
--

INSERT INTO `rip` (`id`, `nama`, `tahun_terbit`, `deskripsi`, `file_pdf`, `cover`, `created_at`, `updated_at`) VALUES
('9c2cf9a3-24ba-4326-a1cb-4cb40f44bd24', 'Kemeja Cewek', '2023-2024', '<p>sdgggggggggggggggggggggggggg</p>', 'app/rip-file/1717169807-qXPf5.pdf', 'app/rip-cover/1717169807-bBlIs.png', '2024-05-31 15:37:17', '2024-05-31 08:37:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `seminar`
--

CREATE TABLE `seminar` (
  `id` char(36) NOT NULL,
  `nama_seminar` varchar(255) NOT NULL,
  `tanggal_seminar` date NOT NULL,
  `link_seminar` varchar(255) NOT NULL,
  `jenis_seminar` enum('Seminar Nasional','Seminar Internasional') NOT NULL,
  `poto` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `slide`
--

CREATE TABLE `slide` (
  `id` char(36) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `poto` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `slide`
--

INSERT INTO `slide` (`id`, `judul`, `poto`, `created_at`, `updated_at`) VALUES
('9c2cea60-2dfe-4f7e-aaa2-a1ae03500016', 'SIPMARI', 'app/slide/1717167246-3srIg.png', '2024-05-31 07:54:06', '2024-05-31 07:54:06');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `hki`
--
ALTER TABLE `hki`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `panduan`
--
ALTER TABLE `panduan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `penelitian`
--
ALTER TABLE `penelitian`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengabdian`
--
ALTER TABLE `pengabdian`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pimpinan`
--
ALTER TABLE `pimpinan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `prosedur_hki`
--
ALTER TABLE `prosedur_hki`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `publikasi`
--
ALTER TABLE `publikasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `renstra`
--
ALTER TABLE `renstra`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `rip`
--
ALTER TABLE `rip`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `seminar`
--
ALTER TABLE `seminar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
