-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 14, 2021 at 05:24 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id15918381_pbw`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `brt_id` int(11) NOT NULL,
  `brt_admin` int(11) NOT NULL,
  `brt_create` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `brt_tgl` timestamp NOT NULL DEFAULT current_timestamp(),
  `brt_foto` varchar(255) DEFAULT NULL,
  `brt_judul` text NOT NULL,
  `brt_isi` text NOT NULL,
  `brt_kategori` varchar(255) DEFAULT NULL,
  `brt_view` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`brt_id`, `brt_admin`, `brt_create`, `brt_tgl`, `brt_foto`, `brt_judul`, `brt_isi`, `brt_kategori`, `brt_view`) VALUES
(1, 2, '2021-01-04 00:07:21', '2021-01-14 17:22:26', '0dd51abdb7b399247558745680f5cc23.jpeg', '4 Syarat Warga Bali  Supaya Boleh Keluar Daerah', '<p>Tim Gugus Tugas Percepatan Penanganan (GTPP) COVID-19 Kota Denpasar, Provinsi Bali, mengimbau kepada masyarakat tidak pulang kampung atau menunda perjalanan keluar daerah dalam upaya mencegah klaster baru COVID-19. Juru Bicara Gugus Tugas Percepatan Penanganan (GTPP) COVID-19</p>\r\n\r\n<p>Kota Denpasar I Dewa Gede Rai mengatakan bahwa imbauan ini merupakan tindak lanjut atas meningkatnya penularan virus corona di Kota Denpasar. Ia mengatakan peningkatan terbesar diketahui akibat klaster pulang kampung atau perjalanan luar daerah serta perkantoran dan klaster keluarga. &quot;Seluruh pegawai, ASN serta masyarakat Kota Denpasar diimbau untuk tidak bepergian keluar daerah termasuk pulang kampung, hal ini lantaran dikhawatirkan terjadi penyebaran COVID-19 lewat pelaku perjalanan, dan jika sangat mendesak untuk keluar daerah atau pulang kampung wajib memperhatikan beberapa hal penting, utamanya penerapan protokol kesehatan yang ketat,&quot; ujar Dewa Rai, Senin 11 Januari 2021, dilansir Antara.</p>\r\n\r\n<p>Hal penting yang dimaksud yakni</p>\r\n\r\n<ul>\r\n	<li>Pertama, selalu memperhatikan peta zonasi resiko penyebaran COVID-19 yang ditetapkan oleh Satuan Tugas Penanganan COVID-19.</li>\r\n	<li>Kedua, memperhatikan peraturan dan kebijakan pemerintah daerah asal dan tujuan perjalanan mengenai pembatasan keluar dan masuk orang.</li>\r\n	<li>Ketiga, adalah memperhatikan kriteria, persyaratan dan protokol perjalanan yang ditetapkan oleh Kementerian Perhubungan dan Satuan Tugas Penanganan COVID-19.</li>\r\n	<li>Keempat, yakni menerapkan protokol kesehatan yang ditetapkan oleh Kementerian Kesehatan. &quot;Kalau memang tidak ada keperluan mendesak keluar daerah, sebaiknya jangan dulu bepergian.</li>\r\n</ul>\r\n\r\n<p>Namun jika mendesak empat poin di atas wajib diterapkan,&quot; kata Dewa Rai. Terkait klaster perkantoran, kata dia, saat ini telah diterapkan sistem kerja dari rumah (Work From Home/WFH) sebanyak 75 persen dan 25 persen sisanya dapat melaksanakan kerja dari kantor (Work From Office/WFO) dengan penerapan protokol kesehatan yang ketat. Dewa Rai menegaskan bahwa ASN dan pegawai juga akan dilaksanakan pemantauan lewat aplikasi absensi online. Sehingga dapat diketahui secara real time posisi pegawai dan ASN. &quot;Jadi untuk menjadi perhatian bersama bagi para ASN, pegawai dan masyarakat di lingkungan Pemkot Denpasar agar dapat mengindahkan dan melaksanakan imbauan ini, sehingga percepatan penanganan dan pencegahan penyebaran COVID-19 dapat dimaksimalkan, dan tren grafiknya dapat melandai,&quot; katanya.</p>\r\n', '3', 11),
(2, 6, '2021-01-14 17:11:15', '2021-01-14 17:20:06', 'adc98b1a76074bf39f6bc4b3140c62da.jpeg', 'Memacu Adrenalin dengan Bermain Banana Boat di Pantai Pasir Putih Minanga', '<p>Siapa orang yang tidak mengenal Pantai Minanga? Wisata pantai yang kini tersohor di kalangan para traveler Gorontalo itu menjadi wisata pilihan yang bisa dikunjungi kapan saja. Terlebih saat pagi dan sore hari, pasti banyak yang melancong ke tempat tersebut. Pantai yang berjarak sekitar tiga kilometer dari pusat pemerintahan Kabupaten Gorontalo Utara (Gorut) ini, membutuhkan waktu kurang lebih dua jam sampai di lokasi, tepatnya di Kecamatan Atinggola.</p>\r\n\r\n<p>Pantai yang khas dengan hamparan pasir putih ini, memberikan sensasi tersendiri bagi para pelancong yang baru mendatangi tempat itu. Apalagi para pelancong kini bisa menikmati wahana yang baru saja dibuka di tempat itu, yakni Banana Boat. Tak menyangka jika wahana ini cukup digandrungi oleh wisatawan yang suka memacu adrenalin. Kemilau dan jernihnya air laut Pantai Minanga bisa terlihat langsung saat menaiki wahana tersebut. Tidak hanya itu, saat menaiki wahana tersebut pengunjung bisa melihat pulau-pulau kecil yang ada di sekitar Pantai Minanga. Ombak yang tidak terlalu besar sangat cocok bagi yang baru pertama kali menaiki Banana Boat. &quot;Pokoknya sensasinya luar biasa, air lautnya bersih dan suasananya juga cukup menyenangkan,&quot; kata Reza Saad salah seorang pengunjung pantai yang mencoba naik wahana Banana Boat</p>\r\n\r\n<p>Ia mengungkapkan, yang paling berkesan saat naik wahana tersebut adalah ketika kita dibawa mengelilingi dan singgah di pulau-pulau kecil yang ada di sekitar. &quot;Saat mengelilingi pulau dengan Banana Boat bagaikan surga, sensasinya terasa dan cukup terasa menyenangkan,&quot; katanya. Hamparan pasir putih yang membentang luas dan air yang tenang seakan menanti kedatangan para wisatawan. Suara gemericik ombak kecil yang pecah di bibir pantai pun membawa suasana ketenangan. Tidak hanya itu, Pantai Minanga juga menjadi lokasi favorit wisatawan untuk menyaksikan sunset alias matahari terbenam. Sembari menunggu sunset, pengunjung bisa bermain di hamparan pasir putih yang begitu luas. &quot;Sangat cocok bagi yang ingin merasakan suasana pantai yang sebenarnya. Sebab semua sudah terlihat di sini, mulai dari hamparan pasir putih, sunset, hingga Banana Boat,&quot; kata Wahyu, pelancong lain. &quot;Kalau di Gorontalo ada pantai yang indah seperti ini, ngapain harus keluar daerah. Ini saja bagi saya sudah cukup,&quot; tandas Wahyu.</p>\r\n', '6', 23),
(3, 1, '2021-01-06 16:58:21', '2021-01-14 16:58:21', 'b0b59c9e1c6ef13d6675151964ef699f.jpeg', 'Tari Tradisional-Giveaway Meriahkan Promosi Wisata RI di Kuwait Kala Pandemi COVID-19', '<p>Wisata Indonesia dan berbagai negara saat ini sedang terdampak pandemi COVID-19. Kementerian Luar Negeri (Kemlu) berusaha mempromosikan wisata Indonesia melalui KBRI Kuwait. Tema yang diambil KBRI Kuwait adalah The Indonesian Day 2021: The Beauty of Bali. Acara digelar pada Minggu 10 Januari 2021</p>\r\n\r\n<p>Situs resmi Kemlu melaporkan, Selasa (12/1/2021), kegiatan promosi wisata tahun ini memakai standar CHSE (Clean, Healthy, Safe dan Environmentally Sustainable). Acara ini terutama merupakan upaya mempromosikan persahabatan dan pemahaman antarbangsa. KBRI Kuwait bekerja sama dengan International Women&#39;s Group in Kuwait (IWG), Dharma Wanita Persatuan (DWP) KBRI Kuwait, Forum Diaspora Indonesia di Kuwait (FDIK) dan Banjar Bali di Kuwait. Acara terdiri dari dua format, yaitu secara virtual dan secara langsung. Pertunjukan Tari Seledet Pong dan Cilinaya disiarkan di akun Youtube dan Facebook KBRI Kuwait. Selain tarian, diputar dua video durasi pendek mengenai highlight destinasi wisata dan CHSE sebagai standar baru pariwisata. Acara offline diisi dengan tari Margepati, giveaway produk kerajinan tangan dan sajian kuliner khas Bali, yaitu Pisang Rai dan Sate Lilit.</p>\r\n', '5,3', 11),
(4, 7, '2021-01-07 00:00:01', '2021-01-14 13:16:12', '99f48a591bed151f165e0f75db512810.jpg', 'Selain Golf, Olahraga Lain akan Didorong dalam Pengembangan Sport Tourism', '<p style=\"text-align:justify\">Wisata golf merupakan salah satu jenis pariwisata berbasis olahraga ( sport tourism) yang tengah gencar dipromosikan oleh Indonesia. Namun, Menteri Pariwisata dan Ekonomi Kreatif (Menparekraf) Sandiaga Uno mengatakan bahwa dia akan mendorong jenis wisata olahraga lain untuk dikembangkan.</p>\r\n\r\n<p style=\"text-align:justify\">&ldquo;Dari ekosistem pariwisata berbasis olahraga banyak sekali. Tentu yang berkaitan dengan wellness, kesehatan kita di tengah pandemi, kita akan dorong,&rdquo; ujarnya.&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">Hal tersebut dia ungkapkan dalam konferensi pers virtual &ldquo;Kerja sama Pengembangan Sport Tourism&rdquo; yang turut dihadiri Menteri Pemuda dan Olahraga (Menpora) Zainudin Amali, Selasa (5/1/2021). Nantinya dalam pengembangan pariwisata berbasis olahraga, dia menegaskan bahwa konsepnya akan mengusung konsep pariwisata berkualitas.</p>\r\n\r\n<p style=\"text-align:justify\">Pariwisata berkualitas adalah di mana seorang wisatawan melakukan pengeluaran yang tinggi ketika berkunjung ke suatu destinasi. Selain wisata olahraga yang berkaitan dengan wellness seperti yoga, Sandiaga juga ingin bulutangkis dan basket makin berkembang.</p>\r\n\r\n<p style=\"text-align:justify\">&ldquo;Persatuan Bola Basket Seluruh Indonesia ( Perbasi) kemarin Ketua Umum-nya bilang basket ala Covid dengan sistem buble. Terbuka konsepnya, bukan hanya prestasi tapi rekreasi. Itu akan kita dorong ke depan,&rdquo; ungkapnya.&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">Meski begitu, Sandiaga mengimbau agar komunitas olahraga turut bergerak dalam mengembangkan wisata olahraga dalam bidang masing-masing. Menurut dia, mereka adalah lokomotif penggerak wisata olahraga. Sementara Kemenparekraf dan Kemenpora hanya fasilitator.</p>\r\n\r\n<p style=\"text-align:justify\"><strong>Kerja sama dengan seniman lokal </strong></p>\r\n\r\n<p style=\"text-align:justify\">Selain mengembangkan wisata olahraga, Sandiaga juga ingin mengembangkan bidang ekonomi kreatif masyarakat setempat. Sebagai contoh, jika ada acara olahraga di Danau Toba seperti triathlon atau open water swimming, para peserta yang hadir bisa mendukung ekosistem ekonomi kreatif di daerah.</p>\r\n\r\n<p style=\"text-align:justify\">&ldquo;Medali jangan impor, tapi dikerjakan teman-teman lokal, pengusaha lokal. Baju kalau bisa bangga buatan Indonesia. Bangga berwisata di Indonesia, ini yang ingin saya sampaikan,&rdquo; jelas Sandiaga.</p>\r\n\r\n<p style=\"text-align:justify\">Sebagai penutup, dia menegaskan bahwa Kemenparekraf dan Kemenpora akan memberi dukungan terhadap pengembangan wisata olahraga dalam bidang lain. Hal tersebut agar masyarakat bisa bergaya hidup sehat di tengah pandemi Covid-19, tetapi juga tetap menerapkan protokol kesehatan yang ketat agar perekonomian masyarakat dapat kembali bergeliat&nbsp;</p>\r\n', '3', 20),
(5, 3, '2021-01-07 06:07:33', '2021-01-14 17:04:54', 'e9210284faf2f3c9277ef3cd53ce0c4c.jpg', 'Jakarta Perpanjang Penutupan Semua Taman Kota', '<p>Seluruh taman kota di Jakarta, termasuk Taman Marga Satwa Ragunan ditutup hingga waktu yang belum ditentukan sejak Jumat (25/12/2020). Berdasarkan informasi dalam akun Instagram @tamanhutandki pada Selasa (29/12/2020), perpanjangan periode penutupan dilakukan karena kasus Covid-19 yang melonjak.</p>\r\n\r\n<p>&ldquo;Mengingat kondisi keadaan pandemi dengan tren kasus yang makin naik, seluruh taman kota, hutan kota dan Taman Marga Satwa Ragunan akan ditutup mulai tanggal 30 Desember 2020 hingga waktu yang akan diinformasikan selanjutnya,&rdquo; tulis akun tersebut.</p>\r\n\r\n<p>Adapun, penutupan dilakukan berdasarkan Instruksi Gubernur Provinsi DKI Jakarta Nomor 64 Tahun 2020 dan Seruan Gubernur Provinsi DKI Jakarta Nomor 17 Tahun 2020. Selama penutupan, Dinas Pertamanan dan Hutan Kota Provinsi DKI Jakarta akan melakukan pembersihan dan penyemprotan rutin. Sebelumnya, seluruh taman kota di Jakara hanya akan ditutup pada 25 dan 31 Desember 2020, serta 1 Januari 2021</p>\r\n\r\n<p>Hal tersebut diumumkan oleh akun @tamanhutandki melalui unggahan pada Senin (21/12/2020) sebelum periode penutupan diperpanjang. Untuk mengetahui lebih lanjut, berikut daftar taman-taman di Jakarta berdasarkan informasi dalam akun Instagram @temantaman.jkt&mdash;organisasi yang dikelola oleh Pemerintah Provinsi DKI Jakarta&mdash;yang telah Kompas.com rangkum, Minggu (3/1/2021):</p>\r\n', '3', 9),
(6, 4, '2021-01-13 17:05:26', '2021-01-14 17:05:26', '35daf110968ff51e3ec06f011946175f.jpeg', 'Liburan ke Aceh? Jangan Lupa Minum Kelapa Muda Bakar', '<p>Seorang pekerja teliti membolak-balik buah kelapa muda di Jalan Muhammad Jam, Kota Banda Aceh, Aceh, Jumat (28/8/2020) sore.</p>\r\n\r\n<p>Sejumlah kendaraan roda dua dan empat parkir di jalanan aspal mulus itu. Lokasi ini persis di depan Gedung Juang Pelajar Islam Indonesia (PII) Provinsi Aceh. Di lokasi itu kelapa muda dibakar. Pekerja sibuk membolak-balik buah kelapa dalam tungku perapian yang telah disiapkan. Buah kelapa itu lalu dipadu padan dengan selera pelanggan.&nbsp;</p>\r\n\r\n<p>Misalnya buah kelapa dengan bumbu serai, buah kelapa murni (artinya buah kelapa bakar saja), kelapa bakar jahe susu, sirup susu, susu gula merah, jahe madu dan aneka jenis lainnya. Salah seorang pekerja, Muhammad, di lokasi menyebutkan puluhan kelapa bakar selalu laku dari pagi hingga sore. Namun, mayoritas pembeli datang ke lokasi siang hingga sore hari. Makin sore, pengunjung makin ramai. Umumnya pekerja yang melepas dahaga selepas seharian di kantor.</p>\r\n\r\n<p>&ldquo;Setelah dibakar sekitar 30 menit, barulah dikupas kulit yang dibakar. Lalu diserut halus-halur, baru dicampur dengan bumsu sesuai pesanan. Apakah pakai madu, atau lainnya,&rdquo; kata Muhammad.</p>\r\n\r\n<p>Penganan lain tak terlalu mewah, tersedia kacang dan kerupuk dsebagai cemilan menemani kelapa muda bakar. Nah, jika berkunjung ke Aceh, silakan nikmati kesegaran kelapa muda bakar ini. Adapun harga yang dibanderol untuk kelapa bakar yakni Rp 16.000 per buah.&nbsp;</p>\r\n', '5,4', 8);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `kategori_id` int(11) NOT NULL,
  `kategori_nama` varchar(255) NOT NULL,
  `kategori_detail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`kategori_id`, `kategori_nama`, `kategori_detail`) VALUES
(3, 'Covid-19', ' Dampak covid ke tempat wisata '),
(4, 'Kuliner', 'aneka ragam wisata kuliner di indonesia'),
(5, 'Budaya', 'Sebuah Berita Wisata yang Mengajarkan kita soal budaya'),
(6, 'Hiburan', 'Jalan-jalan dan seru-seruan');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(11) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `profil` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `name`, `username`, `password`, `status`, `foto`, `profil`) VALUES
(1, 'Admin', 'admin', '$2y$10$/YnjzXjse8MQEqEkUiibGO64.1IYriPq3eREKfFnHEL48Ioah7SnS', 1, 'operator.png', 'Akun Admin dari web ini. Dia sering dipanggil minmin'),
(2, 'Penulis', 'penulis', '$2y$10$/YnjzXjse8MQEqEkUiibGO64.1IYriPq3eREKfFnHEL48Ioah7SnS', 0, 'uwu.jpg', 'Beta Tester, The Old User One'),
(3, 'Aldi Mulia Wijaya', 'aldimw', '$2y$10$/YnjzXjse8MQEqEkUiibGO64.1IYriPq3eREKfFnHEL48Ioah7SnS', 1, 'dev01.jpg', 'Orang salah jurusan karena salah baca saat daftar'),
(4, 'Muhamad Rafif', 'afiafi', '$2y$10$/YnjzXjse8MQEqEkUiibGO64.1IYriPq3eREKfFnHEL48Ioah7SnS', 1, 'dev02.jpg', 'Susah banget dikontak :('),
(5, 'Ir. Yaddarabullah, M.Kom., IPM', 'yaddarabullah', '$2y$10$/YnjzXjse8MQEqEkUiibGO64.1IYriPq3eREKfFnHEL48Ioah7SnS', 1, 'dev03.png', 'Yaddarabullah. Lahir di Kota Bekasi, 14 Januari 1990. Menyelesaikan pendidikan dasar di SDN Bojong\r\nRawalumbu X Kota Bekasi (1995-2001), menyelesaikan pendidikan menengah pertama di SMPN 16 Bekasi (2001-\r\n2004). Menamatkan pendidikan menengah kejuruan di SMK Telkom Sandhy Putra Jakarta dengan jurusan Teknik\r\nKomputer Jaringan (2004-2007). Menempuh pendidikan profesi di CEP CCIT Fakultas Teknik Universitas Indonesia\r\ndan Diploma NIIT dengan konsentrasi Network Engineering (2007-2009).\r\nMenyelesaikan pendidikan S1 di Sekolah Tinggi Teknologi Informasi NIIT (2009-2012) dengan program studi Teknik\r\nInformatika. Menyelesaikan pendidikan S2 di Universitas Budi Luhur dengan program studi Ilmu Komputer (2013-\r\n2015). Menyelesaikan pendidikan profesi Insinyur (Ir) di Universitas Hasanuddin (2019-2020). Saat ini aktif\r\nmenjadi pengurus Inkubator Bisnis Trilogi dan Dosen di Prodi Teknik Informatika Universitas Trilogi.'),
(6, 'test', 'user', '$2y$10$4snzF0sLYoX1TDGvgU60XOAuAe7xQaifCmH1I277crXYbl9h5RpSm', 0, '1d03d377423820db43e51c2be54afe7d.png', 'hanya akun tes'),
(7, 'Garuda Sakti', 'garuda', '$2y$10$WcRNWv.CyNMK1hCzYPQ1QuIt5kk/.gWiExhCWT7crpR3RomjYEDH2', 0, 'sandalphon.png', 'Love Indonesia <3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`brt_id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `brt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
