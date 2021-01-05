-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2021 at 11:18 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pbw`
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
  `brt_judul` text NOT NULL,
  `brt_isi` text NOT NULL,
  `brt_kategori` int(11) DEFAULT NULL,
  `brt_view` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`brt_id`, `brt_admin`, `brt_create`, `brt_tgl`, `brt_judul`, `brt_isi`, `brt_kategori`, `brt_view`) VALUES
(1, 1, '2021-01-04 10:51:46', '2020-12-25 18:21:38', 'dummy', '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error cumque saepe totam suscipit veniam nisi, laudantium eaque dolorum. Voluptatibus rerum laudantium ad dolor aperiam numquam consectetur, corrupti quo magni quas?</p>\r\n\r\n<p>Asperiores officiis assumenda eius, blanditiis molestiae minima alias quidem vero repellat! Non, nemo distinctio. Aspernatur nobis fugit rerum quasi est voluptatum molestias? Corrupti totam, ea repellat repellendus eaque adipisci pariatur!</p>\r\n\r\n<p>Id rem dolorem nostrum dolore maiores molestias sunt dignissimos animi deleniti aspernatur ut ipsa, voluptas doloribus ex corrupti enim nulla quisquam laudantium doloremque, iste totam error. Maxime dignissimos totam commodi!</p>\r\n\r\n<p>Sint doloremque deserunt ab minima repudiandae nobis aut magni, eum natus fugiat adipisci laborum minus nam dolores provident, possimus consequuntur voluptas deleniti voluptatibus inventore voluptate soluta sunt. Accusantium, quibusdam exercitationem!</p>\r\n\r\n<p>Corrupti assumenda pariatur, aut voluptatem similique saepe modi laboriosam dolore, velit alias deserunt nihil consectetur, dicta asperiores minima. Aut neque iure perferendis aspernatur ipsa dolor atque hic incidunt voluptatem modi.</p>\r\n', 2, 3),
(2, 1, '2020-12-25 18:15:55', '2020-12-25 18:15:55', 'Yang ini ada gambar', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam viverra, massa nec semper congue, velit elit hendrerit nulla, et feugiat nisi risus ac augue. Aenean efficitur nec neque a euismod. Suspendisse nec nisi eget augue laoreet ullamcorper. Nunc elementum mauris et tincidunt convallis. Nunc laoreet, magna et faucibus ullamcorper, neque diam commodo massa, ut pretium ante lectus at ligula. Sed mattis eros nibh, eget fringilla libero congue aliquet. Pellentesque auctor, neque sit amet sollicitudin tincidunt, nibh ligula dictum ante, sagittis condimentum nunc mi porttitor libero. Proin at nunc leo. Curabitur non eros sit amet velit vestibulum aliquet non sit amet lorem. In tincidunt luctus dignissim. Fusce in felis sed diam condimentum suscipit sed quis magna. Vestibulum efficitur ut nunc at iaculis. Suspendisse placerat risus magna, id sagittis lacus sodales eu. Curabitur vitae vestibulum odio.</p>\r\n\r\n<p>Integer hendrerit interdum nisi ac finibus. Mauris a risus odio. Sed eu metus vehicula, semper quam non, consequat orci. Sed sed mauris porta, porttitor lectus ut, ultricies sapien. Sed ultricies, orci mollis ornare consectetur, mauris massa dignissim sapien, in maximus nibh lorem in purus. Morbi rutrum eget libero id finibus. Cras volutpat urna eu ultricies tincidunt. Phasellus auctor nibh ut posuere tempus. Nunc efficitur quam nisl, id rutrum magna blandit hendrerit. Aliquam pretium fermentum leo, eu varius lacus blandit sit amet. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam erat volutpat.</p>\r\n\r\n<p>Integer mattis, est in pellentesque ullamcorper, tellus eros porta neque, sed ultrices quam sem vel mi. In hac habitasse platea dictumst. Etiam convallis, libero vitae ullamcorper pretium, nisi justo mollis neque, vitae elementum orci velit id enim. Curabitur a velit at massa tempus convallis. Cras pellentesque, ipsum quis lobortis venenatis, ex nunc laoreet nisi, at vehicula ante risus non tortor. Pellentesque auctor, ipsum in eleifend blandit, mauris lacus pulvinar massa, quis pulvinar enim felis ut nisi. Sed et congue elit, a bibendum nisi. Morbi tincidunt congue pretium. Vestibulum auctor id leo at tempor. Cras nisl sapien, vulputate at eleifend in, euismod vitae lacus. Duis hendrerit massa vitae auctor porta. Curabitur auctor viverra tellus, vitae ullamcorper metus gravida iaculis. Praesent sit amet est placerat, suscipit ligula id, eleifend lectus. Morbi feugiat sed ligula volutpat viverra. Nunc egestas lobortis mi, a tempus sem tristique pulvinar.</p>\r\n\r\n<p><img alt=\"\" src=\"/Kuliah/prakWEB/tugas12/assets/js/plugin/editor/kcfinder/upload/files/Deepcolor.png\" style=\"height:180px; width:180px\" /></p>\r\n\r\n<p>Donec laoreet molestie massa id mollis. Praesent tortor eros, suscipit sit amet odio vel, lobortis mattis enim. Nullam iaculis lobortis lacinia. Sed aliquet, enim vestibulum maximus ultrices, elit velit auctor diam, sit amet mollis neque elit eu leo. Etiam imperdiet lacus non magna iaculis, sed pulvinar lorem condimentum. Vivamus non ultricies libero. Mauris tempor sapien eu pulvinar volutpat. Donec vulputate in nunc ut maximus. Aliquam placerat purus hendrerit sodales convallis. Sed semper bibendum odio, sit amet malesuada quam sagittis porta. Morbi eget est nec turpis scelerisque facilisis quis et erat. Proin efficitur ligula a ante bibendum ultrices. Praesent in pharetra dui. Nam vel ultricies dolor.</p>\r\n\r\n<p>Quisque lectus magna, auctor eu hendrerit id, lacinia vitae lectus. Quisque non purus in est maximus eleifend. Suspendisse potenti. Nunc pulvinar ultrices fringilla. Duis aliquam mi sed nibh efficitur hendrerit. Praesent laoreet egestas dolor eu bibendum. Curabitur quam tellus, accumsan id velit ac, cursus placerat orci. Nam ultrices fermentum nibh eget accumsan. Vivamus dapibus pulvinar lacinia. Phasellus feugiat nec lorem quis consectetur. In et velit convallis, placerat mi nec, volutpat odio. Donec urna dui, varius eget nibh eget, maximus tempor elit. Maecenas rhoncus lacinia massa, vel posuere diam dictum id. Vivamus diam turpis, mollis a dui ut, fermentum congue risus.</p>\r\n', 1, 2),
(3, 4, '2021-01-05 13:26:30', '2020-12-18 17:48:21', 'UwU First News', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas feugiat consequat diam. Maecenas metus. Vivamus diam purus, cursus a, commodo non, facilisis vitae, nulla. Aenean dictum lacinia tortor. Nunc iaculis, nibh non iaculis aliquam, orci felis euismod neque, sed ornare massa mauris sed velit. Nulla pretium mi et risus. Fusce mi pede, tempor id, cursus ac, ullamcorper nec, enim. Sed tortor. Curabitur molestie. Duis velit augue, condimentum at, ultrices a, luctus ut, orci. Donec pellentesque egestas eros. Integer cursus, augue in cursus faucibus, eros pede bibendum sem, in tempus tellus justo quis ligula. Etiam eget tortor. Vestibulum rutrum, est ut placerat elementum, lectus nisl aliquam velit, tempor aliquam eros nunc nonummy metus. In eros metus, gravida a, gravida sed, lobortis id, turpis. Ut ultrices, ipsum at venenatis fringilla, sem nulla lacinia tellus, eget aliquet turpis mauris non enim. Nam turpis. Suspendisse lacinia. Curabitur ac tortor ut ipsum egestas elementum. Nunc imperdiet gravida mauris.</p>\r\n', 1, 6),
(4, 2, '2020-12-25 18:32:09', '2020-12-25 18:32:09', 'Beta Tester, The Old User One', '<p>Beta testing adalah rangkaian dari user acceptance test yang dilakukan sebelum produk diluncurkan kepada publik. Hal ini dilakukan untuk menemukan dan mengidentifikasi sebanyak mungkin bug atau masalah dalam sistem dan penggunaan produk tersebut.</p>\r\n\r\n<p>Beta testing dilakukan dengan melibatkan sejumlah pengguna yang disebut sebagai beta tester. Mereka melakukan pengujian dalam kondisi dan karakteristik yang sama, mulai dari hardware hingga kondisi internet yang digunakan.</p>\r\n\r\n<p>&nbsp;</p>\r\n', 5, 6),
(5, 5, '2021-01-05 16:43:59', '2020-12-25 18:34:20', 'SCP  3001', '<p>CP-3001 adalah hipotesis paradoks paralel / saku &quot;non-dimensi&quot; yang dapat diakses melalui pembuatan Wormhole &quot;Masuk Rusak&quot; Kelas C sesaat.1 Meskipun diyakini sebagai alam semesta paralel yang meluas tanpa batas, SCP-3001 hampir sepenuhnya tanpa masalah apa pun dan memiliki Tingkat Hume yang sangat rendah yaitu 0,032,2 bertentangan dengan Hukum Realitas Kejel dengan hubungan antara Hume dan ruangwaktu. Fenomena ini menyebabkan materi di dalamnya membusuk dengan kecepatan yang sangat rendah, dan kerusakan yang bisa berakibat fatal tidak menghalangi fungsi biologis / elektronik apa pun; simulasi menunjukkan suatu organisme dapat kehilangan lebih dari 70% jaringan tubuh mereka dan masih beroperasi secara normal, selama sedikitnya 40% dari otak tetap ada. Namun, paparan yang lama akan menyebabkan materi tersebut secara bertahap mendekati Level Hume SCP-3001 sendiri, yang mengakibatkan kerusakan jaringan / struktural yang parah saat Bidang Hume materi itu sendiri mulai hancur.</p>\r\n\r\n<p>SCP-3001 pertama kali ditemukan pada 2 Januari 2000, di Site-120, sebuah fasilitas yang didedikasikan untuk pengujian dan berisi teknologi pembengkokan realitas. Dr. Robert Scranton dan istrinya Dr. Anna Lang adalah Kepala Peneliti di Site-120, dan sedang mengembangkan perangkat eksperimental, yang disebut &quot;Lang-Scranton Stabilizer&quot; (LSS) .3 Dr. Scranton dipindahkan ke SCP-3001 setelah tidak terduga Aktivitas seismik merusak beberapa LSS aktif di Site-120 Reality Lab A.</p>\r\n\r\n<p>Awalnya dianggap meninggal, Dr. Scranton telah bertahan di SCP-3001 selama setidaknya lima tahun, 11 bulan, dan 21 hari. Selama waktu ini, ia dapat merekam pengalaman dan pengamatannya dalam SCP-3001 melalui panel kontrol LSS yang masih berfungsi, yang juga dibawa ke SCP-3001 bersamanya melalui Wormhole &quot;Masuk Rusak&quot; Kelas-C. Rekaman ini kemudian ditemukan setelah panel kembali tiba-tiba, efek samping yang tidak terduga dari pengujian teknologi pembengkokan realitas yang ditingkatkan; log ini adalah dasar dari studi SCP-3001. Meskipun teknologi baru sedang dikembangkan, pengambilan dan integrasi kembali Dr. Scranton tidak berhasil. Kondisi fisik dan mentalnya saat ini, jika dia masih hidup, tidak diketahui.</p>\r\n', 4, 4),
(6, 1, '2021-01-05 21:43:59', '2021-01-03 19:53:09', 'test-Edit', '<p>warai aerutte sugoku shiawase na koto<br />\r\nsore wo kimi kara oshiete moraetan da yo</p>\r\n\r\n<p>chiisana toki kara nandemo shitteite<br />\r\nkimi no shumi sono risou ni awaseyou to shita<br />\r\nsonna kimi ga kossori oshiete kureta<br />\r\nsuki na hito toshiue no kirei na josei<br />\r\noitsukenai dakara chikara tsukau<br />\r\nkako he trip soko de mata kimi to deai mata koi wo surun da</p>\r\n\r\n<p>boroboro ni naite kimi wa sagashiteita<br />\r\ntotsuzen ni naku natta atashi no omokage wo<br />\r\nhayaku kaero demo chikara wa ippoutsuukou mirai ni wa tobenakatta</p>\r\n\r\n<p>tooku kara kitatte koto wo tsutaetai<br />\r\ndemo sore wa dame datte dokoka de kizuiteta<br />\r\ntoshiue no atashi wo mite kiku no<br />\r\n&lsquo;anata ni nita hito wo sagashitemasu nanika shirimasenka?&rsquo; to</p>\r\n\r\n<p>boroboro ni natte ano hi wo sagashiteita<br />\r\nbarabara ni natta futari wo tsunagou to shita<br />\r\nyamete atashi koko iru yo dakara doko ni mo ikanaide</p>\r\n\r\n<p>mata haru ga kite kimi wa koko wo tatsu to kimeta<br />\r\n&lsquo;moshi anata ga ano hito dattara yokatta no ni&rsquo; to nokoshi</p>\r\n\r\n<p>koi wo suru zeitaku na kanjou sore wo omoidashita<br />\r\ndakara zenryoku de sono te wo toru</p>\r\n\r\n<p>boroboro ni natte kimi ni hontou wo tsutaeta<br />\r\nbarabara ni natta jiku ni suikomareteiku<br />\r\nsoshite mezametara soko wa ichimen haiiro no sekai</p>\r\n\r\n<p>te ni motteta no wa furui daiji nai no shashin<br />\r\nkonna iro wo shiteta jidai mo attanda<br />\r\nsoko de mujaki ni waratteru kimi ni ai ni koko kara ippo wo hajimeta</p>\r\n\r\n<p>mata waraeru ka na atashi kono sekai de<br />\r\nkimi no shashin wa oita mama de arukidasu</p>\r\n\r\n<p>&mdash;</p>\r\n\r\n<p>From the end of the world</p>\r\n\r\n<p>You&rsquo;ve taught me that<br />\r\nTo laugh is the happiest thing one can do</p>\r\n\r\n<p>From when I was little, I took notice of everything<br />\r\nI took on your interests and ideals<br />\r\nYou then secretly told me<br />\r\nThe person you like is an older girl<br />\r\nI can&rsquo;t catch up, so I used up all of my strength<br />\r\nTo take a trip back to the past, to meet you again, to fall in love again</p>\r\n\r\n<p>All worn out and crying, I searched for you<br />\r\nSuddenly my own traces begin to vanish<br />\r\nI want to return back, but I&rsquo;m weakened,<br />\r\nI can&rsquo;t fly back towards the one-way future</p>\r\n\r\n<p>I came back to the past and wanted tell you I&rsquo;m back<br />\r\nSomewhere along the way, I realised that would be impossible<br />\r\nBut you looked at the now older me, and asked<br />\r\n&lsquo;I&rsquo;m looking for someone who looks just like you, have you heard anything?&rdquo;</p>\r\n\r\n<p>I was all worn out from searching for that day<br />\r\nWe were finally reunited after being scattered<br />\r\n&lsquo;Stop, I&rsquo;m right here, so please don&rsquo;t go anywhere else&rsquo;.</p>\r\n\r\n<p>Spring came again, you stood here and decided to leave me with<br />\r\n&lsquo;It&rsquo;d be great if you were that person&rsquo;.</p>\r\n\r\n<p>I remember that falling in love is an extravagant feeling<br />\r\nSo I took your hand with all my strength</p>\r\n\r\n<p>I told the truth to the worn-out you<br />\r\nI breathed in the scattered pieces of time and space<br />\r\nThen I awakened in a greyscale world</p>\r\n\r\n<p>All I had in my hands were an old photo<br />\r\nThis era is even retaining its colour<br />\r\nI took the first step to finding you, who was innocently laughing in the photo.</p>\r\n\r\n<p>I wonder if I&rsquo;ll be able to laugh again in this world<br />\r\nI continued to follow the photo of you</p>\r\n', 1, 12);

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
(1, 'test', 'Hanya Untuk Test'),
(2, 'dummy', 'Hanya untuk tes'),
(4, 'SCP', 'SCP'),
(5, 'UwU', 'UwU');

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
(1, 'admin', 'admin', '$2y$10$/YnjzXjse8MQEqEkUiibGO64.1IYriPq3eREKfFnHEL48Ioah7SnS', 1, 'operator.png', 'Sang Dewa dan Admin Web ini'),
(2, 'Beta Tester, The Old User One', 'test', '$2y$10$S.RYwTGoQXumZvfJ8XND3OQyvy1WEKNeP8YEhg8Rl82OYl6PqL/dG', 0, NULL, 'Si tua'),
(3, 'Aldi Mulia Wijaya', 'aldimw', '$2y$10$wq2pO6L7gzH9ZHMRxhJZ7OFZu/KSL6OKiIDQstt4vsM0wOGMWP.PW', 1, 'anime.png', 'Saya'),
(4, 'UwU News, portal berita imut :3', 'uwunews', '$2y$10$/YnjzXjse8MQEqEkUiibGO64.1IYriPq3eREKfFnHEL48Ioah7SnS', 1, 'uwu.jpg', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas feugiat consequat diam. Maecenas metus. Vivamus diam purus, cursus a, commodo non, facilisis vitae, nulla. Aenean dictum lacinia tortor. Nunc iaculis, nibh non iaculis aliquam, orci felis euismod neque, sed ornare massa mauris sed velit. Nulla pretium mi et risus. Fusce mi pede, tempor id, cursus ac, ullamcorper nec, enim. Sed tortor. Curabitur molestie. Duis velit augue, condimentum at, ultrices a, luctus ut, orci. Donec pellentesque egestas eros. Integer cursus, augue in cursus faucibus, eros pede bibendum sem, in tempus tellus justo quis ligula. Etiam eget tortor. Vestibulum rutrum, est ut placerat elementum, lectus nisl aliquam velit, tempor aliquam eros nunc nonummy metus. In eros metus, gravida a, gravida sed, lobortis id, turpis. Ut ultrices, ipsum at venenatis fringilla, sem nulla lacinia tellus, eget aliquet turpis mauris non enim. Nam turpis. Suspendisse lacinia. Curabitur ac tortor ut ipsum egestas elementum. Nunc imperdiet gravida mauris.'),
(5, 'SCP3001 and SCP3999', 'SCP', '$2y$10$vp6HrdPZbWzC4WadVhjVDuz4ZzPovYL6ZVUG0DK0APAGjhD7YReSK', 0, 'SCP.jpg', 'Orang yang terperangkap di dimensi serba hitam dan gelap yang mana segala hukum alam sangat berbeda. Hal ini membuat tubuhnya lama kelamaan berubah. Iya hanyya ditemani alat komunikasi yang memiliki lampu merah'),
(6, 'Muhamad Afi', 'afiafi', '$2y$10$/YnjzXjse8MQEqEkUiibGO64.1IYriPq3eREKfFnHEL48Ioah7SnS', 1, 'phantom.png', 'Afi yang susah dikontak :('),
(7, 'Pak Yada', 'yada', '$2y$10$/YnjzXjse8MQEqEkUiibGO64.1IYriPq3eREKfFnHEL48Ioah7SnS', 1, 'tes.png', 'dosen'),
(11, 'kucing yang imut', 'neko', '$2y$10$dZL1XQmTWY/NdJOKMNgAtOLIOXd0ekTxrvUQCnfcZCmkdMtP/Y1L.', 0, '1d03d377423820db43e51c2be54afe7d.png', 'meow~meow~meow~');

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
  MODIFY `brt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
