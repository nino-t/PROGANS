-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 15, 2016 at 04:13 
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dinamik`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `article_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `kota_id` int(11) DEFAULT NULL,
  `article_title` varchar(100) NOT NULL,
  `article_slug` varchar(255) NOT NULL,
  `article_content` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `article_pict` varchar(255) NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `article_sts` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`article_id`, `user_id`, `category_id`, `kota_id`, `article_title`, `article_slug`, `article_content`, `created_at`, `updated_at`, `article_pict`, `latitude`, `longitude`, `article_sts`) VALUES
(1, 3, 5, 497, 'Pesta Budaya Asmat', 'pesta-budaya-asmat', '<p>Asmat&nbsp;sudah&nbsp;dikenal&nbsp;dunia&nbsp;sejak&nbsp;tahun&nbsp;1904.&nbsp;Yang&nbsp;Saya&nbsp;Tau&nbsp;Tercatat&nbsp;pada&nbsp;tahun&nbsp;1770&nbsp;sebuah&nbsp;kapal&nbsp;yang&nbsp;dinahkodai&nbsp;James&nbsp;Cook&nbsp;mendarat&nbsp;di&nbsp;sebuh&nbsp;teluk&nbsp;di&nbsp;daerah&nbsp;Asmat.&nbsp;Tiba-tiba&nbsp;muncul&nbsp;puluhan&nbsp;perahu&nbsp;lesung&nbsp;panjang&nbsp;didayungi&nbsp;ratusan&nbsp;laki-laki&nbsp;berkulit&nbsp;gelap&nbsp;dengan&nbsp;wajah&nbsp;dan&nbsp;tubuh&nbsp;yang&nbsp;diolesi&nbsp;warna-warna&nbsp;merah,hitam,&nbsp;dan&nbsp;putih.&nbsp;Mereka&nbsp;ini&nbsp;menyerang&nbsp;dan&nbsp;berhasil&nbsp;melukai&nbsp;serta&nbsp;membunuh&nbsp;beberapa&nbsp;anak&nbsp;buah&nbsp;James&nbsp;Cook.&nbsp;Berabad-abad&nbsp;kemudian&nbsp;pada&nbsp;tepatnya&nbsp;tanggal&nbsp;10&nbsp;Oktober&nbsp;1904,&nbsp;Kapal&nbsp;SS&nbsp;Flamingo&nbsp;mendarat&nbsp;di&nbsp;suatu&nbsp;teluk&nbsp;di&nbsp;pesisir&nbsp;&nbsp;barat&nbsp;daya&nbsp;Irian&nbsp;jaya.</p>\r\n\r\n<p>Festival&nbsp;budaya&nbsp;Asmat&nbsp;telah&nbsp;diadakan&nbsp;sejak&nbsp;1981.&nbsp;Suku&nbsp;Asmat&nbsp;telah&nbsp;lama&nbsp;dikenal&nbsp;dengan&nbsp;keahliannya&nbsp;dalam&nbsp;membuat&nbsp;ukiran.&nbsp;Mereka&nbsp;biasa&nbsp;mengekspresikan&nbsp;imajinasi&nbsp;ke&nbsp;dalam&nbsp;sebuah&nbsp;ukiran&nbsp;tanpa&nbsp;membuat&nbsp;sketsa&nbsp;terlebih&nbsp;dahulu.</p>\r\n\r\n<p>Coba&nbsp;Anda&nbsp;bayangkan&nbsp;Betapa&nbsp;Hebatnya,&nbsp;Suku&nbsp;Asmat&nbsp;Ini&nbsp;Masih&nbsp;Mempertahankan&nbsp;Adat&nbsp;Dan&nbsp;Istiadat&nbsp;Mereka&nbsp;Seperti&nbsp;Apa&nbsp;Yang&nbsp;Diwarisi&nbsp;Oleh&nbsp;Leluhurnya.</p>\r\n\r\n<p>Penghargaan&nbsp;dunia&nbsp;terhadap&nbsp;Suku&nbsp;Asmat&nbsp;adalah&nbsp;sebagai&nbsp;Situs&nbsp;Warisan&nbsp;Budaya&nbsp;(Site&nbsp;of&nbsp;the&nbsp;World&nbsp;Cutural&nbsp;Heritage)&nbsp;Oleh&nbsp;Unesco.&nbsp;Setiap&nbsp;tahun&nbsp;pada&nbsp;bulan&nbsp;Oktober&nbsp;selalu&nbsp;diadakan&nbsp;event&nbsp;yaitu&nbsp;Festival&nbsp;Budaya&nbsp;yang&nbsp;diprakarsai&nbsp;oleh&nbsp;Kurator&nbsp;Museum&nbsp;Asmat,&nbsp;Keuskupan&nbsp;dan&nbsp;Pemda&nbsp;Asmat.&nbsp;Kegiatan&nbsp;festival&nbsp;ini&nbsp;yakni&nbsp;Lelang&nbsp;Patung,&nbsp;Demonstrasi&nbsp;ukir&nbsp;dari&nbsp;para&nbsp;Pematung&nbsp;Asmat,&nbsp;pagelaran&nbsp;masakan&nbsp;Khas&nbsp;Asmat,&nbsp;Pemilihan&nbsp;Abang&nbsp;dan&nbsp;None&nbsp;Asmat,&nbsp;Pementasan&nbsp;Tarian&nbsp;Adat&nbsp;Asmat,&nbsp;Maneuver&nbsp;perahu/Lomba&nbsp;Perahu&nbsp;Asmat&nbsp;dan&nbsp;lain-lain.</p>\r\n\r\n<p>&nbsp;Berbagai&nbsp;kegiatan&nbsp;akan&nbsp;dilaksanakan&nbsp;dalam&nbsp;festival&nbsp;ini,&nbsp;antara&nbsp;lain&nbsp;lomba&nbsp;perahu,&nbsp;demo&nbsp;membuat&nbsp;ukiran,&nbsp;lelang&nbsp;patung,&nbsp;dan&nbsp;pemilihan&nbsp;putra-putri&nbsp;Asmat.&nbsp;Selain&nbsp;itu,&nbsp;wisatawan&nbsp;juga&nbsp;dapat&nbsp;menikmati&nbsp;pertunjukan&nbsp;tarian&nbsp;dan&nbsp;musik&nbsp;khas&nbsp;Asmat.&nbsp;Tahun&nbsp;ini,&nbsp;Festival&nbsp;Budaya&nbsp;Asmat&nbsp;dilaksanakan&nbsp;bulan&nbsp;Januari&nbsp;di&nbsp;Kabupaten&nbsp;Asmat,&nbsp;Papua.</p>\r\n\r\n<p>Disini&nbsp;Saya&nbsp;Mengajak&nbsp;anda&nbsp;untuk&nbsp;berkunjung&nbsp;kedaerah&nbsp;ini,&nbsp;Disini&nbsp;Banyak&nbsp;Hal&nbsp;Yang&nbsp;Tidak&nbsp;Anda&nbsp;Dapatkan&nbsp;Dari&nbsp;Daerah&nbsp;Lainnya&nbsp;Seperti:&nbsp;Kearifan&nbsp;Lokal&nbsp;Yang&nbsp;Masih&nbsp;Alami,&nbsp;Masyarakatnya&nbsp;Yang&nbsp;Begitu&nbsp;Toleran.</p>\r\n', '2016-02-13 14:33:19', '0000-00-00 00:00:00', '648230a935ad97683d7dc0be1a8f3eb8.jpg', -2.7889282627265155, 140.69366455078125, 1),
(2, 3, 7, 281, ' Kendi Maling Dari Lombok Yang Tenar Hingga ke Eropa', '-kendi-maling-dari-lombok-yang-tenar-hingga-ke-eropa', '<p>Apa&nbsp;Anda&nbsp;Tau&nbsp;Kendi&nbsp;Maling?.&nbsp;Kendi&nbsp;Maling&nbsp;Berasal&nbsp;Dari&nbsp;Pulau&nbsp;Lombok,&nbsp;Nusa&nbsp;Tenggara&nbsp;Barat,&nbsp;anda&nbsp;harus&nbsp;memasukkan&nbsp;kendi&nbsp;maling&nbsp;sebagai&nbsp;salah&nbsp;satu&nbsp;oleh-oleh&nbsp;yang&nbsp;wajib&nbsp;dibawa&nbsp;dari&nbsp;&quot;Pulau&nbsp;Seribu&nbsp;Masjid&quot;&nbsp;ini.</p>\r\n\r\n<p>Yang&nbsp;Saya&nbsp;Tahu,&nbsp;Bentuknya&nbsp;seperti&nbsp;kendi&nbsp;kebanyakan,&nbsp;hanya&nbsp;saja&nbsp;bagian&nbsp;lehernya&nbsp;lebih&nbsp;panjang&nbsp;dan&nbsp;anda&nbsp;akan&nbsp;kesulitan&nbsp;mencari&nbsp;tempat&nbsp;untuk&nbsp;memasukkan&nbsp;air&nbsp;di&nbsp;bagian&nbsp;atas&nbsp;kendi.</p>\r\n\r\n<p>Kenapa&nbsp;Ya&nbsp;Disebut&nbsp;Kendi&nbsp;Maling?.&nbsp;Disebut&nbsp;Kendi&nbsp;maling&nbsp;karena&nbsp;memasukkan&nbsp;airnya&nbsp;dari&nbsp;bagian&nbsp;bawah.&nbsp;Setelah&nbsp;diisi&nbsp;ya&nbsp;didudukkan&nbsp;seperti&nbsp;biasa,&nbsp;airnya&nbsp;tidak&nbsp;akan&nbsp;tumpah.&nbsp;Menuangkannya&nbsp;ya&nbsp;biasa&nbsp;seperti&nbsp;kendi&nbsp;lainnya&nbsp;lewat&nbsp;bagian&nbsp;atas.&nbsp;Itu&nbsp;alasannya&nbsp;Kenapa&nbsp;disebut&nbsp;maling.&nbsp;Masuk&nbsp;lewat&nbsp;bawah&nbsp;keluar&nbsp;lewat&nbsp;atas.</p>\r\n\r\n<p>Kendi&nbsp;maling&nbsp;dan&nbsp;gerabah&nbsp;yang&nbsp;ia&nbsp;jual&nbsp;sudah&nbsp;diekspor&nbsp;hingga&nbsp;ke&nbsp;Eropa,&nbsp;Italia&nbsp;dan&nbsp;Australia.&nbsp;Selain&nbsp;kendi&nbsp;maling,&nbsp;wisatawan&nbsp;banyak&nbsp;yang&nbsp;memesan&nbsp;gerabah&nbsp;tempat&nbsp;air&nbsp;yang&nbsp;dihias&nbsp;dengan&nbsp;kulit&nbsp;telur.</p>\r\n\r\n<p>Di&nbsp;tempat&nbsp;tersebut&nbsp;juga&nbsp;tersedia&nbsp;hiasan&nbsp;ataupun&nbsp;peralatan&nbsp;rumah&nbsp;tangga&nbsp;yang&nbsp;terbuat&nbsp;dari&nbsp;tanah&nbsp;liat.&nbsp;Untuk&nbsp;harga&nbsp;dibanderol&nbsp;paling&nbsp;murah&nbsp;Rp&nbsp;15.000&nbsp;hingga&nbsp;Rp&nbsp;2&nbsp;juta.&nbsp;Tanah&nbsp;liatnya&nbsp;khusus&nbsp;kami&nbsp;ambil&nbsp;dari&nbsp;Gunung&nbsp;Sasak&nbsp;lalu&nbsp;dicampur&nbsp;dengan&nbsp;pasir.&nbsp;Perajinnya&nbsp;adalah&nbsp;warga&nbsp;sekitar.<br />\r\n<br />\r\nUntuk&nbsp;para&nbsp;wisatawan&nbsp;yang&nbsp;ingin&nbsp;mempraktikkan&nbsp;membuat&nbsp;gerabah,&nbsp;Haeniatun&nbsp;menyediakan&nbsp;lahan&nbsp;di&nbsp;bagian&nbsp;belakang.&nbsp;Di&nbsp;sana&nbsp;bisa&nbsp;praktik&nbsp;bikin&nbsp;kura-kura,&nbsp;angsa&nbsp;atau&nbsp;pun&nbsp;asbak.</p>\r\n\r\n<p><br />\r\nKami&nbsp;bantu&nbsp;mereka&nbsp;membuat&nbsp;gerabah&nbsp;dengan&nbsp;model&nbsp;yang&nbsp;mereka&nbsp;pilih&nbsp;sendiri&nbsp;termasuk&nbsp;menghiasnya.&nbsp;Nanti&nbsp;tinggal&nbsp;dijemur&nbsp;dikasih&nbsp;nama&nbsp;dan&nbsp;bisa&nbsp;dibawa&nbsp;pulang&nbsp;sebagai&nbsp;oleh-oleh.&nbsp;jelas&nbsp;hauriyah&nbsp;yang&nbsp;merupakan&nbsp;generasi&nbsp;ketiga&nbsp;perajin&nbsp;gerabah&nbsp;di&nbsp;Desa&nbsp;Banyumulek.</p>\r\n\r\n<p>Kamu&nbsp;Mau&nbsp;Atau&nbsp;Butuh&nbsp;Kendi&nbsp;Yang&nbsp;Unik&nbsp;Dan&nbsp;Bisa&nbsp;Disombongkan&nbsp;Ke&nbsp;Temen-Temen&nbsp;Kamu.&nbsp;Ayo&nbsp;Kesini&nbsp;Aja&nbsp;Ajak&nbsp;Temen-temen&nbsp;Kamu&nbsp;Yang&nbsp;lain&nbsp;Buat&nbsp;Ikut&nbsp;Berpartisipasi&nbsp;Menyebarluaskan&nbsp;Budaya&nbsp;Indonesia.</p>\r\n', '2016-02-13 14:38:06', '0000-00-00 00:00:00', '1d0eb6c68aeaf52645a66a15943ee507.jpg', -8.682674605293913, 116.33105278015137, 1),
(3, 3, 3, 278, 'Tari Pandet', 'tari-pandet', '<p>Kamu&nbsp;Tau&nbsp;Gak&nbsp;Tari&nbsp;Pendet?,&nbsp;Tari&nbsp;Pendet&nbsp;itu&nbsp;pada&nbsp;awalnya&nbsp;merupakan&nbsp;tari&nbsp;pemujaan&nbsp;yang&nbsp;banyak&nbsp;diperagakan&nbsp;di&nbsp;pura,&nbsp;tempat&nbsp;ibadat&nbsp;umat&nbsp;Hindu&nbsp;di&nbsp;Bali,&nbsp;Indonesia.&nbsp;Tarian&nbsp;ini&nbsp;melambangkan&nbsp;penyambutan&nbsp;atas&nbsp;turunnya&nbsp;dewata&nbsp;ke&nbsp;alam&nbsp;dunia.&nbsp;Lambat-laun,&nbsp;seiring&nbsp;perkembangan&nbsp;zaman,&nbsp;para&nbsp;seniman&nbsp;<a href="https://id.wikipedia.org/wiki/Bali">Bali</a>&nbsp;mengubah&nbsp;Pendet&nbsp;menjadi&nbsp;&quot;ucapan&nbsp;selamat&nbsp;datang&quot;,&nbsp;meski&nbsp;tetap&nbsp;mengandung&nbsp;<a href="https://id.wikipedia.org/w/index.php?title=Anasir&amp;action=edit&amp;redlink=1">anasir</a>&nbsp;yang&nbsp;sakral-religius.&nbsp;Pencipta/koreografer&nbsp;bentuk&nbsp;modern&nbsp;tari&nbsp;ini&nbsp;adalah&nbsp;I&nbsp;Wayan&nbsp;Rindi&nbsp;.</p>\r\n\r\n<p>Yang&nbsp;Saya&nbsp;Tau&nbsp;Pendet&nbsp;merupakan&nbsp;pernyataan&nbsp;dari&nbsp;sebuah&nbsp;persembahan&nbsp;dalam&nbsp;bentuk&nbsp;tarian&nbsp;upacara.&nbsp;Tidak&nbsp;seperti&nbsp;halnya&nbsp;tarian-tarian&nbsp;pertunjukkan&nbsp;yang&nbsp;memerlukan&nbsp;pelatihan&nbsp;intensif,&nbsp;Pendet&nbsp;dapat&nbsp;ditarikan&nbsp;oleh&nbsp;semua&nbsp;orang,&nbsp;<em>pemangkus</em>&nbsp;pria&nbsp;dan&nbsp;wanita,&nbsp;dewasa&nbsp;maupun&nbsp;gadis.</p>\r\n\r\n<p>Tarian&nbsp;ini&nbsp;diajarkan&nbsp;sekedar&nbsp;dengan&nbsp;mengikuti&nbsp;gerakan&nbsp;dan&nbsp;jarang&nbsp;dilakukan&nbsp;di&nbsp;<em>banjar-banjar</em>.&nbsp;Para&nbsp;gadis&nbsp;muda&nbsp;mengikuti&nbsp;gerakan&nbsp;dari&nbsp;para&nbsp;wanita&nbsp;yang&nbsp;lebih&nbsp;senior&nbsp;yang&nbsp;mengerti&nbsp;tanggung&nbsp;jawab&nbsp;mereka&nbsp;dalam&nbsp;memberikan&nbsp;contoh&nbsp;yang&nbsp;baik.</p>\r\n\r\n<p>Ayo&nbsp;Dong&nbsp;Dari&nbsp;Pada&nbsp;Cuma&nbsp;Jadi&nbsp;Anak&nbsp;Bangsa&nbsp;Yang&nbsp;Cuma&nbsp;Bisa&nbsp;Ngeliat&nbsp;Budayanya&nbsp;Dicuri&nbsp;Bangsa&nbsp;Lain,&nbsp;Mending&nbsp;kita&nbsp;Yang&nbsp;Jadi&nbsp;Pelindungnya,&nbsp;Sekaligus&nbsp;Mengajak&nbsp;Orang&nbsp;Lain&nbsp;Untuk&nbsp;Aktive&nbsp;Bergerak&nbsp;Untuk&nbsp;Bangsa.</p>\r\n', '2016-02-13 14:40:42', '0000-00-00 00:00:00', '55d9060f4bc4c35fc0cb2b18cbee831e.jpg', -8.721005826706092, 115.18246650695801, 1),
(4, 4, 4, 70, 'Menenun Songket Di Silungkang', 'menenun-songket-di-silungkang', '<p>Pernahkah&nbsp;kamu&nbsp;mendengar&nbsp;nama&nbsp;Silungkang?&nbsp;Nama&nbsp;ini&nbsp;sangat&nbsp;terkenal&nbsp;sampai&nbsp;ke&nbsp;mancanegara.&nbsp;Silungkang&nbsp;adalah&nbsp;nama&nbsp;nagari&nbsp;yang&nbsp;terletak&nbsp;di&nbsp;Pulau&nbsp;Sumatera.&nbsp;Silungkang&nbsp;terkenal&nbsp;bukan&nbsp;karena&nbsp;alamnya&nbsp;yang&nbsp;indah,&nbsp;melainkan&nbsp;karena&nbsp;songketnya.</p>\r\n\r\n<p>Songket&nbsp;adalah&nbsp;kain&nbsp;yang&nbsp;dibuat&nbsp;secara&nbsp;tradisional.&nbsp;Caranya&nbsp;adalah&nbsp;merangkaikan&nbsp;benang&nbsp;helai&nbsp;demi&nbsp;helai&nbsp;dengan&nbsp;alat&nbsp;dari&nbsp;kayu&nbsp;yang&nbsp;disebut&nbsp;panta.&nbsp;Perlu&nbsp;kesabaran&nbsp;untuk&nbsp;membuat&nbsp;songket&nbsp;Silungkang.&nbsp;Seorang&nbsp;pengrajin&nbsp;rata-rata&nbsp;bias&nbsp;menyelesaikan&nbsp;kain&nbsp;sepanjang&nbsp;5-10&nbsp;sentimeter&nbsp;sehari.&nbsp;Untuk&nbsp;menyelesaikan&nbsp;selembar&nbsp;kain,&nbsp;bisa&nbsp;memakan&nbsp;waktu&nbsp;kurang&nbsp;lebih&nbsp;satu&nbsp;bulan.&nbsp;Semakin&nbsp;halus&nbsp;dan&nbsp;rumit&nbsp;motif&nbsp;kainnya,&nbsp;waktu&nbsp;pembuatannya&nbsp;pun&nbsp;semakin&nbsp;lama.&nbsp;Itulah&nbsp;kenapa,&nbsp;harga&nbsp;selembar&nbsp;kain&nbsp;songket&nbsp;rata-rata&nbsp;cukup&nbsp;mahal.</p>\r\n\r\n<p>Satu&nbsp;dua&nbsp;bulan&nbsp;adalah&nbsp;masa&nbsp;yang&nbsp;singkat&nbsp;jika&nbsp;dibandingkan&nbsp;pembuatan&nbsp;songket&nbsp;Silungkang&nbsp;zaman&nbsp;dulu.&nbsp;Dulu,&nbsp;orang-orang&nbsp;membuat&nbsp;songket&nbsp;mulai&nbsp;dari&nbsp;membuat&nbsp;benang&nbsp;yang&nbsp;akan&nbsp;ditenun.&nbsp;Mulai&nbsp;dari&nbsp;meluruskan&nbsp;serat&nbsp;kapas&nbsp;(mamoge),&nbsp;menyaring&nbsp;dan&nbsp;memintalnya&nbsp;menjadi&nbsp;benang.&nbsp;Setelah&nbsp;itu,&nbsp;benang&nbsp;itu&nbsp;harus&nbsp;dicelup&nbsp;dulu&nbsp;dalam&nbsp;pewarna&nbsp;yang&nbsp;dibuat&nbsp;dari&nbsp;kulit,&nbsp;akar,&nbsp;daun,&nbsp;dan&nbsp;bunga&nbsp;kayu.&nbsp;Baru&nbsp;kemudian&nbsp;ditenun.</p>\r\n\r\n<p>Kain&nbsp;songket&nbsp;Silungkang&nbsp;saat&nbsp;ini&nbsp;dibuat&nbsp;dalam&nbsp;dua&nbsp;jenis,&nbsp;yakni&nbsp;songket&nbsp;biasa&nbsp;dan&nbsp;songket&nbsp;bermotif&nbsp;benang&nbsp;emas.&nbsp;Songket&nbsp;bermotif&nbsp;benang&nbsp;emas&nbsp;harganya&nbsp;lebih&nbsp;mahal&nbsp;dari&nbsp;songket&nbsp;biasa.&nbsp;Songket&nbsp;ini&nbsp;dikenakan&nbsp;pada&nbsp;saat&nbsp;ada&nbsp;peristiwa&nbsp;penting&nbsp;seperti&nbsp;pernikahan,&nbsp;penobatan&nbsp;penghulu,&nbsp;dan&nbsp;penyambutan&nbsp;tamu-tamu&nbsp;penting.</p>\r\n\r\n<p>Motif&nbsp;songket&nbsp;Silungkang&nbsp;bukan&nbsp;hanya&nbsp;berfungsi&nbsp;sebagai&nbsp;hiasan,&nbsp;tetapi&nbsp;ada&nbsp;maksudnya.&nbsp;Contoh,&nbsp;motif&nbsp;<em>pucuak&nbsp;rabuang&nbsp;</em>(pucuk&nbsp;rebung).&nbsp;Rebung&nbsp;adalah&nbsp;tunas&nbsp;bambu.&nbsp;Sejak&nbsp;masih&nbsp;tunas&nbsp;(rebung),&nbsp;bambu&nbsp;sudah&nbsp;bermanfaat&nbsp;bagi&nbsp;manusia.&nbsp;Rebung&nbsp;bisa&nbsp;diolah&nbsp;sebagai&nbsp;sayuran.&nbsp;Ketika&nbsp;besar,&nbsp;bambu&nbsp;bisa&nbsp;dimanfaatkan&nbsp;sebagai&nbsp;bahan&nbsp;bangunan,&nbsp;alat&nbsp;rumah&nbsp;tangga,&nbsp;dan&nbsp;lainnya.&nbsp;Songket&nbsp;bermotif&nbsp;<em>pucuak&nbsp;rabuang</em>&nbsp;ini&nbsp;berfungsi&nbsp;sebagai&nbsp;nasihat&nbsp;bagi&nbsp;pemakainya&nbsp;agar&nbsp;menjadi&nbsp;manusia&nbsp;yang&nbsp;bermanfaat.</p>\r\n\r\n<p>Dan&nbsp;kain&nbsp;songket&nbsp;Silungkang&nbsp;ini&nbsp;sudah&nbsp;terkenal&nbsp;sampai&nbsp;mancanegara.&nbsp;Beberapa&nbsp;pengrajin&nbsp;songket&nbsp;Silungkang&nbsp;pernah&nbsp;ikut&nbsp;Pekan&nbsp;Raya&nbsp;Ekonomi&nbsp;di&nbsp;Brussel,&nbsp;ibukota&nbsp;Belgia&nbsp;pada&nbsp;tahun&nbsp;1910.&nbsp;Songket&nbsp;Silungkang&nbsp;mendapat&nbsp;perhatian&nbsp;luar&nbsp;biasa&nbsp;hingga&nbsp;mendapatkan&nbsp;medali&nbsp;dari&nbsp;Ratu&nbsp;Belgia.&nbsp;&nbsp;</p>\r\n\r\n<p>Kamu&nbsp;Tentunya&nbsp;Bangga&nbsp;Dong,&nbsp;Dengan&nbsp;Budaya&nbsp;Indonesia&nbsp;Yang&nbsp;Beraneka&nbsp;Ragam?,&nbsp;Jadi&nbsp;Ayo&nbsp;dukung&nbsp;Dengan&nbsp;Berkunjung&nbsp;Ke&nbsp;Silungkung.&nbsp;Dari&nbsp;ayo&nbsp;Ajak&nbsp;Teman&nbsp;&ndash;&nbsp;Teman&nbsp;Anda&nbsp;Yang&nbsp;Lainnya.</p>\r\n', '2016-02-13 14:45:01', '0000-00-00 00:00:00', '9791b3f3084505af00d70c2ca63e9675.jpg', -0.9170903473635555, 100.40817260742188, 1),
(5, 4, 6, 231, 'Banyak Pilihan di PASAR BERINGHARJO', 'banyak-pilihan-di-pasar-beringharjo', '<p>Kamu&nbsp;Suka&nbsp;Berbelanja?,&nbsp;Kamu&nbsp;Suka&nbsp;Berhemat?,&nbsp;Atau&nbsp;Kamu&nbsp;Mau&nbsp;Suka&nbsp;Makan?.&nbsp;Di&nbsp;Pasar&nbsp;BeringHarjo&nbsp;Kamu&nbsp;Bisa&nbsp;Melakukan&nbsp;Semua&nbsp;Hal&nbsp;Tersebut&nbsp;Dari&nbsp;Mulai&nbsp;Makan&nbsp;Makanan&nbsp;Yang&nbsp;Enak&nbsp;Tanpa&nbsp;Menguras&nbsp;Dompet.&nbsp;Sampai&nbsp;Belanjaan&nbsp;Banyak&nbsp;Tanpa&nbsp;Dompet&nbsp;Tipis.&nbsp;</p>\r\n\r\n<p>Pasar&nbsp;BeringHarjo&nbsp;Terkenal&nbsp;Dikarena&nbsp;Pasar&nbsp;BeringHarjo&nbsp;Begitu&nbsp;Terkenal&nbsp;Dikarenakan&nbsp;Tempatnya&nbsp;Yang&nbsp;Strategis&nbsp;Dan&nbsp;Pasar&nbsp;Yang&nbsp;Begitu&nbsp;Merakyat.</p>\r\n\r\n<p>Konon,&nbsp;Pasar&nbsp;Beringharjo&nbsp;adalah&nbsp;tempat&nbsp;paling&nbsp;lengkap&nbsp;untuk&nbsp;mencari&nbsp;oleh-oleh&nbsp;khas&nbsp;Yogyakarta.&nbsp;Penasaran?&nbsp;Yuk,&nbsp;kita&nbsp;simak.</p>\r\n\r\n<p>Beringharjo&nbsp;terletak&nbsp;hamper&nbsp;diujung&nbsp;selatan&nbsp;jalan&nbsp;Malioboro.&nbsp;Dari&nbsp;depan,&nbsp;Beringharjo&nbsp;agak&nbsp;sulit&nbsp;dikenali&nbsp;sebagai&nbsp;pasar.&nbsp;Kecuali&nbsp;kita&nbsp;membaca&nbsp;plang&nbsp;nama&nbsp;diatas&nbsp;pintu&nbsp;masuknya.&nbsp;Di&nbsp;depan&nbsp;sisi&nbsp;selatan,&nbsp;berderet&nbsp;beberapa&nbsp;kios.&nbsp;Trotoar&nbsp;yang&nbsp;cukup&nbsp;luas&nbsp;di&nbsp;depan&nbsp;kios-kios&nbsp;itu&nbsp;dipenuhi&nbsp;pedagang.&nbsp;Tak&nbsp;jauh&nbsp;beda&nbsp;dengan&nbsp;trotoar&nbsp;di&nbsp;sepanjang&nbsp;Jalan&nbsp;Malioboro.&nbsp;Bedanya,&nbsp;disini,&nbsp;dijual&nbsp;aneka&nbsp;makanan.&nbsp;Ada&nbsp;pecel,&nbsp;gudeg,&nbsp;juga&nbsp;jajan&nbsp;pasar&nbsp;seperti&nbsp;klepon.&nbsp;Ada&nbsp;juga&nbsp;bakpia&nbsp;yang&nbsp;dibungkus&nbsp;plastik.</p>\r\n\r\n<p>Pada&nbsp;saat&nbsp;kita&nbsp;mulai&nbsp;memasuki&nbsp;pintu&nbsp;masuk.&nbsp;Kita&nbsp;langsung&nbsp;dapat&nbsp;melihat,&nbsp;aneka&nbsp;motif&nbsp;pakaian&nbsp;motif&nbsp;pakaian&nbsp;bergantungan.&nbsp;Lorong-lorong&nbsp;dipenuhi&nbsp;kios&nbsp;pedagang&nbsp;batik.&nbsp;Selain,&nbsp;pedagang&nbsp;batik&nbsp;disana&nbsp;juga&nbsp;ada&nbsp;penjual&nbsp;kerajinan.&nbsp;Ada&nbsp;kerajinan&nbsp;hiasan.&nbsp;Ada&nbsp;juga&nbsp;kerajinan&nbsp;untuk&nbsp;upacara&nbsp;adat,&nbsp;pernikahan,&nbsp;kesenian,&nbsp;dan&nbsp;lainnya.&nbsp;Disana&nbsp;terdapat&nbsp;ruko&nbsp;lama&nbsp;dan&nbsp;kios&nbsp;yang&nbsp;menjual&nbsp;rupa-rupa&nbsp;dagangan.&nbsp;Bahkan,&nbsp;ada&nbsp;juga&nbsp;yang&nbsp;menjual&nbsp;barang-barang&nbsp;bekas&nbsp;dan&nbsp;kuno,&nbsp;seperti&nbsp;setrika&nbsp;arang,&nbsp;mesin&nbsp;ketik,&nbsp;toples&nbsp;kaca,&nbsp;uang&nbsp;koin&nbsp;lama,&nbsp;dan&nbsp;lainnya.&nbsp;</p>\r\n\r\n<p>Jadi&nbsp;Janggan&nbsp;Lupa&nbsp;Ya!,&nbsp;Kalau&nbsp;Kamu&nbsp;Datang&nbsp;Ke&nbsp;Jogja.&nbsp;Jangan&nbsp;Lupa&nbsp;Buat&nbsp;Mampir&nbsp;Dulu&nbsp;Ke&nbsp;Pasar&nbsp;Pasar&nbsp;Beringharjo.&nbsp;Jangan&nbsp;Lupa&nbsp;Ajak&nbsp;Juga&nbsp;Yang&nbsp;Lainnya&nbsp;Ya!</p>\r\n', '2016-02-13 14:47:30', '0000-00-00 00:00:00', '4aa186496f86de423eca320dbbcdd163.jpg', -7.838100672671682, 110.36590576171875, 1),
(6, 5, 3, 252, 'Reog Ponorogo, Kebudayaan Dan Kesenian Asli Indonesia', 'reog-ponorogo,-kebudayaan-dan-kesenian-asli-indonesia', '<p>Reog&nbsp;ponorogo&nbsp;merupakan&nbsp;salah&nbsp;satu&nbsp;seni&nbsp;tarian&nbsp;di&nbsp;Jawa&nbsp;Timur&nbsp;yang&nbsp;sampai&nbsp;saat&nbsp;ini&nbsp;masih&nbsp;terus&nbsp;di&nbsp;lestarikan.&nbsp;Reog&nbsp;ini&nbsp;merupakan&nbsp;kebudayaan&nbsp;dan&nbsp;kesenian&nbsp;asli&nbsp;Indonesia.&nbsp;Memang&nbsp;budaya&nbsp;dan&nbsp;seni&nbsp;ini&nbsp;sering&nbsp;dikaitkan&nbsp;dengan&nbsp;hal-hal&nbsp;yang&nbsp;berbau&nbsp;mistis,&nbsp;oleh&nbsp;karenanya&nbsp;tak&nbsp;jarang&nbsp;sering&nbsp;dihubungkan&nbsp;dengan&nbsp;dunia&nbsp;kekuatan&nbsp;spiritual&nbsp;bahkan&nbsp;dunia&nbsp;hitam.</p>\r\n\r\n<p>Lepas&nbsp;dari&nbsp;hal&nbsp;itu,&nbsp;Reog&nbsp;Ponorogo&nbsp;ini&nbsp;oleh&nbsp;masyarakat&nbsp;biasanya&nbsp;sering&nbsp;dipentaskan&nbsp;saat&nbsp;acara&nbsp;pernikahan,&nbsp;khitanan,&nbsp;hari-hari&nbsp;besar&nbsp;nasional,&nbsp;dan&nbsp;juga&nbsp;festival&nbsp;tahunan&nbsp;yang&nbsp;diadakan&nbsp;oleh&nbsp;pemerintah&nbsp;setempat.&nbsp;Festival&nbsp;yang&nbsp;diadakan&nbsp;oleh&nbsp;pemerintah&nbsp;tersebut&nbsp;terdiri&nbsp;dari&nbsp;Festival&nbsp;Reog&nbsp;Mini&nbsp;Nasinonal,&nbsp;Festival&nbsp;Reog&nbsp;Nasional&nbsp;dan&nbsp;juga&nbsp;pertunjukan&nbsp;pada&nbsp;bulan&nbsp;purnama&nbsp;yang&nbsp;bertempat&nbsp;di&nbsp;alun-alun&nbsp;ponorogo.&nbsp;Sedangkan&nbsp;Festival&nbsp;Reog&nbsp;Nasional&nbsp;itu&nbsp;selalu&nbsp;diadakan&nbsp;saat&nbsp;akan&nbsp;memasuki&nbsp;bulan&nbsp;Maharam&nbsp;atau&nbsp;yang&nbsp;sering&nbsp;dalam&nbsp;tradisi&nbsp;Jawa&nbsp;itu&nbsp;biasa&nbsp;di&nbsp;sebut&nbsp;dengan&nbsp;bulan&nbsp;Suro.&nbsp;Pementasan&nbsp;reog&nbsp;ponorogo&nbsp;merupakan&nbsp;rangkaian&nbsp;dari&nbsp;acara&nbsp;Grebeg&nbsp;Suro&nbsp;atau&nbsp;juga&nbsp;dalam&nbsp;rangka&nbsp;ulang&nbsp;tahun&nbsp;kota&nbsp;Ponorogo.</p>\r\n\r\n<p>Dalam&nbsp;rangka&nbsp;menyambut&nbsp;tahun&nbsp;baru&nbsp;islam&nbsp;atau&nbsp;yang&nbsp;sering&nbsp;dikenal&nbsp;dengan&nbsp;sebutan&nbsp;tanggal&nbsp;satu&nbsp;Suro,&nbsp;pemerintah&nbsp;kabupaten&nbsp;Ponorogo&nbsp;mengadakan&nbsp;event&nbsp;budaya&nbsp;terbesar&nbsp;di&nbsp;Ponorogo&nbsp;yaitu&nbsp;Grebeg&nbsp;Suro.&nbsp;Saat&nbsp;Grebeg&nbsp;Suro&nbsp;berlangsung,&nbsp;biasanya&nbsp;saat&nbsp;pementasan&nbsp;kesenian&nbsp;Reog&nbsp;Ponorogo&nbsp;itu&nbsp;selalu&nbsp;dibanjiri&nbsp;penonton&nbsp;baik&nbsp;dari&nbsp;semua&nbsp;penjuru&nbsp;Ponorogo,&nbsp;bahkan&nbsp;karena&nbsp;pagelaran&nbsp;kesenian&nbsp;ini&nbsp;bertaraf&nbsp;nasional,&nbsp;tak&nbsp;jarang&nbsp;wisatawan&nbsp;dari&nbsp;luar&nbsp;daerah&nbsp;Ponorogo&nbsp;bahkan&nbsp;dari&nbsp;luar&nbsp;negeri&nbsp;pun&nbsp;turut&nbsp;hadir&nbsp;untuk&nbsp;melihat&nbsp;acara&nbsp;pagelaran&nbsp;kesenian&nbsp;Reog&nbsp;Ponorogo&nbsp;ini.&nbsp;Hal&nbsp;inipun&nbsp;dimanfaatkan&nbsp;oleh&nbsp;pemerintah&nbsp;daerah&nbsp;Ponorogo&nbsp;sebagai&nbsp;salah&nbsp;satu&nbsp;senjata&nbsp;andalan&nbsp;untuk&nbsp;meningkatkan&nbsp;daya&nbsp;tarik&nbsp;wisata&nbsp;Ponorogo&nbsp;itu&nbsp;sendiri.</p>\r\n\r\n<p>Selain&nbsp;festival&nbsp;Grebeg&nbsp;Suro,&nbsp;Festival&nbsp;Reog&nbsp;Mini&nbsp;tingkat&nbsp;nasional&nbsp;juga&nbsp;bisa&nbsp;menyedot&nbsp;antusias&nbsp;para&nbsp;wisatawan.&nbsp;Seluruh&nbsp;peserta&nbsp;yang&nbsp;mengikutinya&nbsp;merupakan&nbsp;generisa&nbsp;muda,&nbsp;rata-rata&nbsp;mereka&nbsp;masih&nbsp;duduk&nbsp;dibangku&nbsp;sekolah&nbsp;setingkat&nbsp;SD&nbsp;atau&nbsp;SMP.&nbsp;Salah&nbsp;satu&nbsp;tujuan&nbsp;dari&nbsp;festival&nbsp;Reog&nbsp;Mini&nbsp;tingkat&nbsp;nasional&nbsp;adalah&nbsp;untuk&nbsp;tetap&nbsp;menjaga&nbsp;kesenian&nbsp;ini&nbsp;terus&nbsp;berlangsung&nbsp;turun&nbsp;temurun,&nbsp;karena&nbsp;generasi&nbsp;muda&nbsp;inilah&nbsp;kelak&nbsp;yang&nbsp;akan&nbsp;meneruskan&nbsp;kesenian&nbsp;Rog&nbsp;ini.&nbsp;Semua&nbsp;pola&nbsp;kegiatan&nbsp;yang&nbsp;ada&nbsp;di&nbsp;festival&nbsp;Reog&nbsp;Mini&nbsp;hampir&nbsp;sama&nbsp;dengan&nbsp;Festival&nbsp;Reog&nbsp;Nasional,&nbsp;yang&nbsp;membedakannya&nbsp;hanya&nbsp;pada&nbsp;peserta&nbsp;sera&nbsp;waktu&nbsp;pelaksanaannya&nbsp;saja.&nbsp;Waktu&nbsp;pelaksanaan&nbsp;Festival&nbsp;Reog&nbsp;Mini&nbsp;ini&nbsp;pada&nbsp;bulan&nbsp;Agustus.</p>\r\n\r\n<p>Rangkaian&nbsp;pementasan&nbsp;kesenian&nbsp;Reog&nbsp;yang&nbsp;lainnya&nbsp;dan&nbsp;tak&nbsp;kalah&nbsp;seru&nbsp;dari&nbsp;pementasan&nbsp;sebelumnya&nbsp;yaitu&nbsp;pementasan&nbsp;atau&nbsp;pertunjukan&nbsp;Reog&nbsp;Bulan&nbsp;Purnama.&nbsp;Pertunjukan&nbsp;ini&nbsp;selalu&nbsp;rutin&nbsp;dilaksanakan&nbsp;bertepatan&nbsp;dengan&nbsp;adanya&nbsp;malam&nbsp;bulan&nbsp;purnama.&nbsp;Biasanya&nbsp;peserta&nbsp;yang&nbsp;ikut&nbsp;dalam&nbsp;pentas&nbsp;ini&nbsp;merupakan&nbsp;grup-grup&nbsp;lokal&nbsp;perwakilan&nbsp;dari&nbsp;kecamatannya&nbsp;masing-masing.&nbsp;Selain&nbsp;itu&nbsp;dalam&nbsp;pementasan&nbsp;ini&nbsp;juga&nbsp;sering&nbsp;dijumpai&nbsp;beberapa&nbsp;pertunjukan&nbsp;tari&nbsp;garapan&nbsp;yang&nbsp;berasal&nbsp;dari&nbsp;sanggar&nbsp;seni&nbsp;yang&nbsp;ada&nbsp;di&nbsp;Ponorogo.</p>\r\n\r\n<p>Kamu&nbsp;Tentunya&nbsp;Bangga&nbsp;Dong,&nbsp;Dengan&nbsp;Budaya&nbsp;Indonesia&nbsp;Yang&nbsp;Beraneka&nbsp;Ragam?,&nbsp;Jadi&nbsp;Ayo&nbsp;dukung&nbsp;Dengan&nbsp;Berkunjung&nbsp;KePonorogo.&nbsp;Dari&nbsp;ayo&nbsp;Ajak&nbsp;Teman&nbsp;&ndash;&nbsp;Teman&nbsp;Anda&nbsp;Yang&nbsp;Lainnya.</p>\r\n', '2016-02-13 14:53:21', '0000-00-00 00:00:00', '5c4f839040a9b7f788ad45a757c00148.jpg', -7.940689393071323, 111.44805908203125, 1),
(8, 5, 5, 245, 'Kasada Bromo', 'kasada-bromo', '<p><a href="http://wisatabromo.com/upacara-yadnya-kasada-bromo/">Upacara&nbsp;Yadnya&nbsp;Kasada&nbsp;Bromo</a>&nbsp;atau&nbsp;Hari&nbsp;raya&nbsp;besar&nbsp;Suku&nbsp;Tengger&nbsp;umat&nbsp;hindu&nbsp;di&nbsp;Wisata&nbsp;Gunung&nbsp;Bromo&nbsp;yang&nbsp;di&nbsp;sebut&nbsp;Kasodo.&nbsp;Pernah&nbsp;mendengar&nbsp;upacara&nbsp;yang&nbsp;satu&nbsp;ini&nbsp;Upacara&nbsp;Yadnya&nbsp;Kasada&nbsp;atau&nbsp;Kasodo&nbsp;di&nbsp;<a href="http://wisatabromo.com/wisata-gunung-bromo/">wisata&nbsp;gunung&nbsp;Bromo</a>&nbsp;yaitu&nbsp;sebuah&nbsp;Upacara&nbsp;sesembahan&nbsp;atau&nbsp;sesajen&nbsp;ini&nbsp;adalah&nbsp;untuk&nbsp;Sang&nbsp;Hyang&nbsp;Widhi&nbsp;dan&nbsp;para&nbsp;leluhur&nbsp;yang&nbsp;digelar&nbsp;setiap&nbsp;bulan&nbsp;Kasada&nbsp;hari-14&nbsp;dalam&nbsp;penanggalan&nbsp;kalender&nbsp;tradisional&nbsp;Hindu&nbsp;Tengger,&nbsp;Upacara&nbsp;adat&nbsp;ini&nbsp;digelar&nbsp;di&nbsp;Pura&nbsp;Luhur&nbsp;Poten,&nbsp;tepat&nbsp;di&nbsp;kaki&nbsp;Gunung&nbsp;Bromo,&nbsp;pada&nbsp;tengah&nbsp;malam&nbsp;hingga&nbsp;dini&nbsp;hari.&nbsp;Upacara&nbsp;adat&nbsp;suku&nbsp;Tengger&nbsp;ini&nbsp;bertujuan&nbsp;untuk&nbsp;mengangkat&nbsp;dukun&nbsp;atau&nbsp;tabib&nbsp;yang&nbsp;ada&nbsp;di&nbsp;setiap&nbsp;desa&nbsp;di&nbsp;sekitar&nbsp;Gunung&nbsp;Bromo.&nbsp;Dalam&nbsp;festival&nbsp;ini&nbsp;suku&nbsp;Tengger&nbsp;akan&nbsp;melemparkan&nbsp;sesajen&nbsp;berupa&nbsp;sayuran,&nbsp;ayam,&nbsp;dan&nbsp;bahkan&nbsp;uang&nbsp;ke&nbsp;kawah&nbsp;gunung&nbsp;tersebut.</p>\r\n\r\n<p>Berbicara&nbsp;soal&nbsp;Gunung&nbsp;Bromo,&nbsp;Gunung&nbsp;Bromo&nbsp;merupakan&nbsp;bagian&nbsp;Taman&nbsp;Nasional&nbsp;Bromo&nbsp;Tengger&nbsp;Semeru,&nbsp;Provinsi&nbsp;Jawa&nbsp;Timur,&nbsp;Indonesia&nbsp;ini&nbsp;adalah&nbsp;salah&nbsp;satu&nbsp;tujuan&nbsp;wisata&nbsp;tersohor&nbsp;tidak&nbsp;hanya&nbsp;di&nbsp;Indonesia&nbsp;tapi&nbsp;juga&nbsp;di&nbsp;dunia.&nbsp;Gunung&nbsp;Bromo&nbsp;memiliki&nbsp;keunikan&nbsp;panorama&nbsp;indah&nbsp;sekaligus&nbsp;mistis&nbsp;sehingga&nbsp;menyodorkan&nbsp;suasana&nbsp;berbeda&nbsp;dibandingkan&nbsp;gunung&nbsp;lainnya.&nbsp;Di&nbsp;sini&nbsp;terbantang&nbsp;keindahan&nbsp;lanskap&nbsp;pegunungan&nbsp;dengan&nbsp;asap&nbsp;yang&nbsp;membumbung&nbsp;dari&nbsp;kawahnya&nbsp;dan&nbsp;di&nbsp;bawahnya&nbsp;ada&nbsp;lautan&nbsp;pasir&nbsp;luas&nbsp;menggelilinginya,&nbsp;obyek&nbsp;yang&nbsp;akan&nbsp;di&nbsp;kunjungi&nbsp;pun&nbsp;beragam,&nbsp;ketika&nbsp;pagi&nbsp;akan&nbsp;menikmati&nbsp;wisata&nbsp;bromo&nbsp;matahari&nbsp;terbit&nbsp;atau&nbsp;Bromo&nbsp;Sunrise&nbsp;di&nbsp;<a href="http://wisatabromo.com/penanjakan-1-gunung-bromo/">Penanjakan&nbsp;1&nbsp;Gunung&nbsp;Bromo</a>,&nbsp;kedua&nbsp;akan&nbsp;melihat&nbsp;langsung&nbsp;<a href="http://wisatabromo.com/kawah-gunung-bromo/">Kawah&nbsp;Gunung&nbsp;Bromo</a>,&nbsp;menyelusuri&nbsp;<a href="http://wisatabromo.com/padang-savana-bromo/">Padang&nbsp;Savana&nbsp;Bromo</a>&nbsp;dan&nbsp;terakhir&nbsp;menjelajahi&nbsp;indahnya&nbsp;<a href="http://wisatabromo.com/pasir-berbisik-di-wisata-gunung-bromo/">Pasir&nbsp;Berbisik&nbsp;di&nbsp;wisata&nbsp;gunung&nbsp;Bromo</a>.</p>\r\n\r\n<p>Tujuan&nbsp;wisatawan&nbsp;sudah&nbsp;sangat&nbsp;jelas&nbsp;menikmati&nbsp;semua&nbsp;keindahan&nbsp;alam&nbsp;Bromo,&nbsp;tetapi&nbsp;hal&nbsp;yang&nbsp;unik&nbsp;pun&nbsp;yang&nbsp;belum&nbsp;kita&nbsp;tahu&nbsp;dan&nbsp;membuat&nbsp;kita&nbsp;penasaran&nbsp;salah&nbsp;satunya&nbsp;event&nbsp;tahunan&nbsp;yaitu&nbsp;Upacara&nbsp;besar&nbsp;Nyadnya&nbsp;Kasada&nbsp;atau&nbsp;Kasodo&nbsp;yang&nbsp;di&nbsp;adakan&nbsp;pada&nbsp;bulan&nbsp;Agustus-September&nbsp;pada&nbsp;bulan&nbsp;purnama.</p>\r\n\r\n<p><a href="http://wisatabromo.com/suku-tengger-bromo/">Suku&nbsp;Tengger&nbsp;Bromo</a>&nbsp;dikenal&nbsp;sangat&nbsp;berpegang&nbsp;teguh&nbsp;pada&nbsp;adat&nbsp;dan&nbsp;istiadat&nbsp;terutama&nbsp;pada&nbsp;Upacara&nbsp;Yadnya&nbsp;Kasada&nbsp;Bromo&nbsp;ini,&nbsp;dan&nbsp;mereka&nbsp;jadikan&nbsp;Hindu&nbsp;lama&nbsp;sebagai&nbsp;pedoman&nbsp;hidup&nbsp;mereka.&nbsp;Keberadaan&nbsp;suku&nbsp;ini&nbsp;juga&nbsp;sangat&nbsp;dihormati&nbsp;oleh&nbsp;penduduk&nbsp;sekitar&nbsp;termasuk&nbsp;menerapkan&nbsp;hidup&nbsp;yang&nbsp;sangat&nbsp;jujur&nbsp;dan&nbsp;tidak&nbsp;iri&nbsp;hati.&nbsp;kembali&nbsp;ke&nbsp;<a href="http://wisatabromo.com/sejarah-gunung-bromo/">Sejarah&nbsp;Gunung&nbsp;Bromo</a>&nbsp;tentang&nbsp;asal&nbsp;muasal&nbsp;Suku&nbsp;Tengger&nbsp;Bromo&nbsp;di&nbsp;ceritakan&nbsp;bahwa</p>\r\n\r\n<p>Asal&nbsp;mula&nbsp;SUKU&nbsp;TENGGER&nbsp;diambil&nbsp;dari&nbsp;nama&nbsp;belakang&nbsp;RARA&nbsp;ANTENG&nbsp;dan&nbsp;JOKO&nbsp;SEGER.&nbsp;Keduanya&nbsp;membangun&nbsp;pemukiman&nbsp;dan&nbsp;memerintah&nbsp;di&nbsp;kawasan&nbsp;Tengger&nbsp;ini&nbsp;kemudian&nbsp;menamakannya&nbsp;sebagai&nbsp;Purbowasesa&nbsp;Mangkurat&nbsp;Ing&nbsp;Tengger&nbsp;atau&nbsp;artinya&nbsp;&ldquo;<em>Penguasa&nbsp;Tengger&nbsp;yang&nbsp;Budiman</em>&rdquo;.</p>\r\n\r\n<p>Sebelum&nbsp;<em>Upacara&nbsp;Yadnya&nbsp;Kasada&nbsp;Bromo</em>&nbsp;dilangsungkan,&nbsp;calon&nbsp;dukun&nbsp;dan&nbsp;tabib&nbsp;akan&nbsp;menyiapkan&nbsp;beberapa&nbsp;sesaji&nbsp;untuk&nbsp;dipersembahkan&nbsp;dengan&nbsp;cara&nbsp;melemparkannya&nbsp;ke&nbsp;kawah&nbsp;Gunung&nbsp;Bromo.&nbsp;Persembahan&nbsp;sesajen&nbsp;ini&nbsp;dilakukan&nbsp;beberapa&nbsp;hari&nbsp;sebelum&nbsp;upacara&nbsp;Yadnya&nbsp;Kasodo&nbsp;Bromo.&nbsp;Mereka&nbsp;juga&nbsp;harus&nbsp;melalui&nbsp;tes&nbsp;pembacaan&nbsp;mantra&nbsp;terlebih&nbsp;dahulu&nbsp;saat&nbsp;upacara&nbsp;Yadnya&nbsp;Kasada&nbsp;Bromo&nbsp;berlangsung&nbsp;sebelum&nbsp;dinyatakan&nbsp;lulus&nbsp;dan&nbsp;diangkat&nbsp;oleh&nbsp;tetua&nbsp;adat.&nbsp;Peran&nbsp;dukun&nbsp;atau&nbsp;tabib&nbsp;badi&nbsp;suku&nbsp;Tengger&nbsp;sangat&nbsp;kuat&nbsp;karena&nbsp;dipercaya&nbsp;dapat&nbsp;menyembuhkan&nbsp;berbagai&nbsp;penyakit&nbsp;dan&nbsp;masalah&nbsp;yang&nbsp;dialami&nbsp;oleh&nbsp;masyarakatnya,</p>\r\n\r\n<p>Kemudian&nbsp;tepat&nbsp;pada&nbsp;malam&nbsp;ke-14&nbsp;bulan&nbsp;Kasada,&nbsp;pada&nbsp;bulan&nbsp;Purnama,&nbsp;suku&nbsp;Tengger&nbsp;akan&nbsp;beramai-ramai&nbsp;membawa&nbsp;sesajen&nbsp;berupa&nbsp;hasil&nbsp;ternak&nbsp;dan&nbsp;pertanian&nbsp;ke&nbsp;Pura&nbsp;Luhur&nbsp;Poten&nbsp;bromo&nbsp;dan&nbsp;menunggu&nbsp;hingga&nbsp;tengah&nbsp;malam&nbsp;saat&nbsp;dukun&nbsp;ditasbihkan&nbsp;tetua&nbsp;adat.&nbsp;Berikutnya,&nbsp;sesajen&nbsp;yang&nbsp;disiapkan&nbsp;dibawa&nbsp;ke&nbsp;atas&nbsp;kawah&nbsp;Bromo&nbsp;untuk&nbsp;dilemparkan&nbsp;ke&nbsp;kawah&nbsp;sebagai&nbsp;simbol&nbsp;pengorbanan&nbsp;yang&nbsp;dilakukan&nbsp;oleh&nbsp;nenek&nbsp;moyang.&nbsp;Bagi&nbsp;suku&nbsp;Tengger,&nbsp;sesaji&nbsp;yang&nbsp;dilembar&nbsp;ke&nbsp;Kawah&nbsp;Bromo&nbsp;tersebut&nbsp;sebagai&nbsp;bentuk&nbsp;kaul&nbsp;atau&nbsp;rasa&nbsp;syukur&nbsp;atas&nbsp;hasil&nbsp;ternak&nbsp;dan&nbsp;pertanian&nbsp;yang&nbsp;melimpah.&nbsp;Aktivitas&nbsp;pelemparan&nbsp;sesaji&nbsp;ini&nbsp;yang&nbsp;berada&nbsp;di&nbsp;kawah&nbsp;gunung&nbsp;bromo&nbsp;dapat&nbsp;Anda&nbsp;lihat&nbsp;sejak&nbsp;malam&nbsp;hingga&nbsp;siang&nbsp;hari&nbsp;saat&nbsp;hari&nbsp;menjelang&nbsp;upacara&nbsp;Yadnya&nbsp;Kasada&nbsp;Bromo.</p>\r\n', '2016-02-13 14:57:34', '0000-00-00 00:00:00', '568a2354cbeac40e185cd47161318791.jpg', -7.937969116592366, 112.92709350585938, 0),
(9, 5, 2, 178, 'Nikmatnya Sate Maranggi Purwakarta', 'nikmatnya-sate-maranggi-purwakarta', '<p>Pernah&nbsp;coba&nbsp;Sate&nbsp;Maranggi?&nbsp;Kalau&nbsp;belum,&nbsp;sekarang&nbsp;saatnya&nbsp;mampir&nbsp;ke&nbsp;Purwakarta.&nbsp;Sate&nbsp;Maranggi&nbsp;biasanya&nbsp;terbuat&nbsp;dari&nbsp;daging&nbsp;kambing&nbsp;dan&nbsp;daging&nbsp;sapi.&nbsp;Sate&nbsp;Maranggi&nbsp;berbeda&nbsp;dengan&nbsp;sate&nbsp;lainnya,&nbsp;karena&nbsp;bumbunya&nbsp;terbuat&nbsp;dari&nbsp;kecap&nbsp;yang&nbsp;memiliki&nbsp;cita&nbsp;rasa&nbsp;paduan&nbsp;manis,&nbsp;asam,&nbsp;dan&nbsp;pedas.&nbsp;Paduan&nbsp;rasa&nbsp;ini&nbsp;muncul&nbsp;karena&nbsp;bumbu&nbsp;Sate&nbsp;Maranggi&nbsp;terbuat&nbsp;dari&nbsp;kecap,&nbsp;sambal&nbsp;cabai&nbsp;hijau&nbsp;ditambah&nbsp;sedikit&nbsp;cuka&nbsp;lahang&nbsp;(cuka&nbsp;yang&nbsp;terbuat&nbsp;dari&nbsp;aren).&nbsp;Saat&nbsp;disajikan,&nbsp;bumbu&nbsp;kecap&nbsp;itu&nbsp;dilengkapi&nbsp;dengan&nbsp;sambal&nbsp;tomat&nbsp;dan&nbsp;dihidangkan&nbsp;dengan&nbsp;ketan&nbsp;bakar&nbsp;atau&nbsp;nasi&nbsp;timbel.</p>\r\n\r\n<p>Sate&nbsp;Maranggi&nbsp;dijual&nbsp;di&nbsp;sepanjang&nbsp;Jalan&nbsp;Raya&nbsp;Cibungur&nbsp;yang&nbsp;dapat&nbsp;dengan&nbsp;mudah&nbsp;diakses&nbsp;dari&nbsp;Jakarta&nbsp;setelah&nbsp;keluar&nbsp;dari&nbsp;pintu&nbsp;Tol&nbsp;Cikampek.&nbsp;Namun,&nbsp;ada&nbsp;satu&nbsp;warung&nbsp;makan&nbsp;yang&nbsp;tidak&nbsp;pernah&nbsp;sepi,&nbsp;yaitu&nbsp;Warung&nbsp;Makan&nbsp;Sate&nbsp;Maranggi&nbsp;Cibungur.&nbsp;Apa&nbsp;sih&nbsp;keunggulan&nbsp;Sate&nbsp;Maranggi&nbsp;Cibungur&nbsp;dibandingkan&nbsp;warung&nbsp;lainnya?&nbsp;&ldquo;Katanya&nbsp;orang-orang&nbsp;yang&nbsp;kesini&nbsp;sih&nbsp;dagingnya&nbsp;empuk,&nbsp;bau&nbsp;kambingnya&nbsp;nggak&nbsp;terasa,&nbsp;sama&nbsp;sambelnya&nbsp;juga,&rdquo;&nbsp;ujar&nbsp;Ibu&nbsp;Yeti,&nbsp;pemilik&nbsp;Warung&nbsp;Makan&nbsp;Sate&nbsp;Maranggi&nbsp;Cibungur&nbsp;yang&nbsp;telah&nbsp;berjualan&nbsp;sate&nbsp;selama&nbsp;20&nbsp;tahun.</p>\r\n\r\n<p>Pada&nbsp;awalnya,&nbsp;bapaknya&nbsp;Ibu&nbsp;Yeti&nbsp;berjualan&nbsp;es&nbsp;kelapa&nbsp;hingga&nbsp;akhirnya&nbsp;beliau&nbsp;turut&nbsp;serta&nbsp;berjualan&nbsp;sate&nbsp;dengan&nbsp;racikannya&nbsp;sendiri.&nbsp;Kini,&nbsp;di&nbsp;Warung&nbsp;Makan&nbsp;Sate&nbsp;Maranggi&nbsp;Cibungur,&nbsp;saudara-saudara&nbsp;Ibu&nbsp;Yeti&nbsp;turut&nbsp;bergabung&nbsp;dan&nbsp;saling&nbsp;melengkapi&nbsp;dengan&nbsp;jualannya&nbsp;sendiri-sendiri.&nbsp;Ibu&nbsp;Yeti&nbsp;lebih&nbsp;suka&nbsp;kalau&nbsp;usahanya&nbsp;ini&nbsp;disebut&nbsp;sebagai&nbsp;warung&nbsp;makan&nbsp;dibandingkan&nbsp;restoran,&nbsp;padahal&nbsp;tempatnya&nbsp;bisa&nbsp;menampung&nbsp;lebih&nbsp;dari&nbsp;200&nbsp;orang,&nbsp;lho!</p>\r\n\r\n<p>Setiap&nbsp;porsi&nbsp;Sate&nbsp;Maranggi&nbsp;terdiri&nbsp;dari&nbsp;sepuluh&nbsp;tusuk&nbsp;sate&nbsp;disajikan&nbsp;bersama&nbsp;sambal&nbsp;tomat&nbsp;segar.&nbsp;Terbuat&nbsp;dari&nbsp;potongan&nbsp;tomat&nbsp;dan&nbsp;cabai&nbsp;rawit&nbsp;merah&nbsp;utuh&nbsp;yang&nbsp;diulek&nbsp;bersama&nbsp;dalam&nbsp;sebuah&nbsp;cobek&nbsp;ukuran&nbsp;besar.&nbsp;Bahkan&nbsp;yang&nbsp;membuat&nbsp;sambal&nbsp;ini&nbsp;harus&nbsp;memakai&nbsp;masker&nbsp;karena&nbsp;aroma&nbsp;pedas&nbsp;yang&nbsp;sangat&nbsp;menyengat.&nbsp;Kata&nbsp;Ibu&nbsp;Dwita&nbsp;dan&nbsp;Pak&nbsp;Bi&nbsp;yang&nbsp;sejauh&nbsp;ini&nbsp;selalu&nbsp;mampir&nbsp;ke&nbsp;warungnya&nbsp;Ibu&nbsp;Yeti&nbsp;setiap&nbsp;ke&nbsp;Purwakarta,&nbsp;saat&nbsp;potongan&nbsp;daging&nbsp;mendarat&nbsp;di&nbsp;mulut,&nbsp;ternyata&nbsp;rasa&nbsp;gurih&nbsp;manisnya&nbsp;sangat&nbsp;meresap.&nbsp;Tekstur&nbsp;dagingnya&nbsp;juga&nbsp;empuk&nbsp;sekali&nbsp;dan&nbsp;pas&nbsp;dengan&nbsp;sambal&nbsp;tomat&nbsp;yang&nbsp;sangat&nbsp;pedas.</p>\r\n\r\n<p>Jangan&nbsp;heran&nbsp;kalau&nbsp;menemukan&nbsp;serabut&nbsp;kasar&nbsp;yang&nbsp;melapisi&nbsp;daging,&nbsp;karena&nbsp;itu&nbsp;adalah&nbsp;lengkuas.&nbsp;Bumbu&nbsp;rahasia&nbsp;Ibu&nbsp;Yeti&nbsp;menjadikan&nbsp;daging&nbsp;tetap&nbsp;empuk&nbsp;sekaligus&nbsp;dengan&nbsp;rasa&nbsp;gurih&nbsp;manis&nbsp;yang&nbsp;pas.&nbsp;Apalagi&nbsp;daging&nbsp;direndam&nbsp;dengan&nbsp;bumbu&nbsp;sebelum&nbsp;dibakar.&nbsp;Wah,&nbsp;nggak&nbsp;heran&nbsp;kalau&nbsp;pejabat&nbsp;hingga&nbsp;artis&nbsp;langganan&nbsp;makan&nbsp;sate&nbsp;disini.</p>\r\n\r\n<p>Warung&nbsp;ini&nbsp;juga&nbsp;menyediakan&nbsp;menu&nbsp;lainnya&nbsp;yang&nbsp;dijajakan&nbsp;oleh&nbsp;anggota&nbsp;keluarga&nbsp;Ibu&nbsp;Yeti,&nbsp;seperti&nbsp;gado2,&nbsp;nasi&nbsp;tutug&nbsp;oncom&nbsp;dan&nbsp;berbagai&nbsp;macam&nbsp;gorengan&nbsp;seperti&nbsp;combro&nbsp;dan&nbsp;pisang&nbsp;goreng.&nbsp;Tak&nbsp;lupa&nbsp;es&nbsp;kelapa&nbsp;yang&nbsp;segar&nbsp;yang&nbsp;pas&nbsp;untuk&nbsp;menemani&nbsp;santap&nbsp;siang.</p>\r\n\r\n<p>Setiap&nbsp;harinya,&nbsp;Warung&nbsp;Makan&nbsp;Sate&nbsp;Maranggi&nbsp;Cibungur&nbsp;buka&nbsp;pukul&nbsp;08.00&nbsp;hingga&nbsp;pukul&nbsp;18.00.&nbsp;Warung&nbsp;sate&nbsp;ini&nbsp;mampu&nbsp;menghabiskan&nbsp;50&nbsp;kilogram&nbsp;daging&nbsp;kambing&nbsp;dan&nbsp;sapi&nbsp;setiap&nbsp;harinya.&nbsp;Bahkan,&nbsp;jika&nbsp;sedang&nbsp;ramai&nbsp;pengunjung,&nbsp;kebutuhan&nbsp;daging&nbsp;bisa&nbsp;mencapai&nbsp;100&nbsp;hingga&nbsp;200&nbsp;kilogram.</p>\r\n\r\n<p>Daya&nbsp;tarik&nbsp;Sate&nbsp;Maranggi&nbsp;khas&nbsp;Ibu&nbsp;Yeti&nbsp;ini&nbsp;membuat&nbsp;orang&nbsp;datang&nbsp;jauh-jauh&nbsp;dari&nbsp;luar&nbsp;kota.&nbsp;Menurut&nbsp;Ibu&nbsp;Dwita,&nbsp;banyak&nbsp;mobil&nbsp;berplat&nbsp;nomor&nbsp;B&nbsp;dari&nbsp;Jakarta&nbsp;yang&nbsp;memenuhi&nbsp;tempat&nbsp;parkir&nbsp;Warung&nbsp;Sate-nya&nbsp;Ibu&nbsp;Yeti.&nbsp;Warung&nbsp;Makan&nbsp;Sate&nbsp;Maranggi&nbsp;Cibungur&nbsp;telah&nbsp;menjadi&nbsp;destinasi&nbsp;dari&nbsp;kota&nbsp;Purwakarta.</p>\r\n', '2016-02-13 14:59:14', '0000-00-00 00:00:00', '037b9487d6593d2429298effc2bf7a24.jpg', -6.536146465633513, 107.44216918945312, 1),
(10, 5, 5, 35, 'Tradisi Lompat Jauh Di Pulau Nias', 'tradisi-lompat-jauh-di-pulau-nias', '<p>Nias&nbsp;selama&nbsp;ini&nbsp;memang&nbsp;dikenal&nbsp;luas&nbsp;di&nbsp;seluruh&nbsp;wilayah&nbsp;di&nbsp;Indonesia&nbsp;dengan&nbsp;tradisi&nbsp;lompat&nbsp;batunya.&nbsp;Tradisi&nbsp;lompat&nbsp;batu&nbsp;ini&nbsp;juga&nbsp;dikenal&nbsp;dengan&nbsp;fahombo&nbsp;atau&nbsp;hombo&nbsp;batu.&nbsp;Masyarakat&nbsp;di&nbsp;Pulau&nbsp;Nias,&nbsp;Sumatera&nbsp;Utara&nbsp;telah&nbsp;melakukan&nbsp;tradisi&nbsp;ini&nbsp;selama&nbsp;berabad-abad&nbsp;secara&nbsp;turun&nbsp;temurun&nbsp;dan&nbsp;diwariskan&nbsp;dari&nbsp;generasi&nbsp;ke&nbsp;generasi.&nbsp;Tradisi&nbsp;ini&nbsp;konon&nbsp;sudah&nbsp;ada&nbsp;sejak&nbsp;jaman&nbsp;megalitik&nbsp;di&nbsp;pulau&nbsp;yang&nbsp;dikelilingi&nbsp;oleh&nbsp;Samudera&nbsp;Hindia&nbsp;ini.</p>\r\n\r\n<p>Sejak&nbsp;berusia&nbsp;7&nbsp;tahun,&nbsp;anak-anak&nbsp;laki-laki&nbsp;di&nbsp;Nias&nbsp;sudah&nbsp;berlatih&nbsp;untuk&nbsp;melompati&nbsp;tali.&nbsp;Ketinggian&nbsp;tali&nbsp;tersebut&nbsp;semakin&nbsp;meningkat&nbsp;seiring&nbsp;dengan&nbsp;bertambahnya&nbsp;usia&nbsp;mereka.&nbsp;Jika&nbsp;sudah&nbsp;dirasa&nbsp;tiba&nbsp;waktunya,&nbsp;maka&nbsp;anak&nbsp;laki-laki&nbsp;tersebut&nbsp;akan&nbsp;melompati&nbsp;sebuah&nbsp;tumbakan&nbsp;batu&nbsp;yang&nbsp;berbentuk&nbsp;menyerupai&nbsp;prisma&nbsp;terpotong&nbsp;dengan&nbsp;ketinggian&nbsp;sekitar&nbsp;2&nbsp;meter.&nbsp;Lompat&nbsp;batu&nbsp;ini&nbsp;juga&nbsp;menjadi&nbsp;pengukur&nbsp;kedewasaan&nbsp;dan&nbsp;keberanian&nbsp;mereka&nbsp;sebagai&nbsp;generasi&nbsp;keturunan&nbsp;pejuang&nbsp;Nias.</p>\r\n\r\n<p>Tradisi&nbsp;lompat&nbsp;batu&nbsp;ini&nbsp;diwariskan&nbsp;dari&nbsp;generasi&nbsp;ke&nbsp;generasi&nbsp;di&nbsp;tiap-tiap&nbsp;keluarga&nbsp;dari&nbsp;ayah&nbsp;pada&nbsp;anak&nbsp;laki-lakinya.&nbsp;Namun&nbsp;pada&nbsp;kenyataannya,&nbsp;tidak&nbsp;semua&nbsp;pemuda&nbsp;di&nbsp;Nias&nbsp;mampu&nbsp;melompati&nbsp;batu&nbsp;setinggi&nbsp;2&nbsp;meter&nbsp;ini&nbsp;walaupun&nbsp;sudah&nbsp;berlatih&nbsp;keras&nbsp;sejak&nbsp;masih&nbsp;kecil.&nbsp;Masyarakat&nbsp;setempat&nbsp;mempercayai&nbsp;bahwa&nbsp;selain&nbsp;dengan&nbsp;latihan&nbsp;yang&nbsp;keras,&nbsp;kemampuan&nbsp;melompati&nbsp;batu&nbsp;yang&nbsp;tinggi&nbsp;tersebut&nbsp;juga&nbsp;melibatkan&nbsp;unsur&nbsp;magis&nbsp;dari&nbsp;roh&nbsp;nenek&nbsp;moyang&nbsp;dimana&nbsp;seorang&nbsp;pemuda&nbsp;mampu&nbsp;melompati&nbsp;batu&nbsp;yang&nbsp;tinggi&nbsp;tersebut&nbsp;dengan&nbsp;sempurna.</p>\r\n\r\n<p>Awalnya&nbsp;tradisi&nbsp;lompat&nbsp;batu&nbsp;di&nbsp;Nias&nbsp;ini&nbsp;adalah&nbsp;tradisi&nbsp;yang&nbsp;muncul&nbsp;dari&nbsp;kebiasaan&nbsp;perang&nbsp;antar&nbsp;suku-suku&nbsp;yang&nbsp;ada&nbsp;di&nbsp;Nias.&nbsp;Masyarakat&nbsp;di&nbsp;sini&nbsp;mempunyai&nbsp;karakter&nbsp;kuat&nbsp;dan&nbsp;keras&nbsp;yang&nbsp;diwariskan&nbsp;dari&nbsp;budaya&nbsp;para&nbsp;pejuang&nbsp;perang.&nbsp;Dulu,&nbsp;suku-suku&nbsp;di&nbsp;Nias&nbsp;sering&nbsp;berperang&nbsp;lantaran&nbsp;terprovokasi&nbsp;oleh&nbsp;dendam,&nbsp;masalah&nbsp;perbudakan,&nbsp;atau&nbsp;perbatasan&nbsp;tanah.&nbsp;Setiap&nbsp;desa&nbsp;di&nbsp;sini&nbsp;akhirnya&nbsp;membentengi&nbsp;wilayah&nbsp;masing-masing&nbsp;dengan&nbsp;bambu&nbsp;atau&nbsp;bambu&nbsp;setinggi&nbsp;2&nbsp;meter.&nbsp;Oleh&nbsp;sebab&nbsp;itu,&nbsp;lahirlah&nbsp;tradisi&nbsp;fahombo&nbsp;dan&nbsp;dilakukan&nbsp;sebagai&nbsp;persiapan&nbsp;sebelum&nbsp;perang.</p>\r\n\r\n<p>Dulu,&nbsp;saat&nbsp;desa-desa&nbsp;di&nbsp;sNias&nbsp;dipimpin&nbsp;oleh&nbsp;bangsawan-bangsawan&nbsp;dari&nbsp;strata&nbsp;balugu,&nbsp;mereka&nbsp;menentukan&nbsp;pantas&nbsp;atau&nbsp;tidaknya&nbsp;pemuda&nbsp;Nias&nbsp;menjadi&nbsp;prajurit&nbsp;perang.&nbsp;Selain&nbsp;wajib&nbsp;menguasai&nbsp;ilmu&nbsp;bela&nbsp;diri,&nbsp;fisik&nbsp;yang&nbsp;kuat,&nbsp;dan&nbsp;ilmu&nbsp;hitam,&nbsp;calon&nbsp;prajurit&nbsp;tersebut&nbsp;juga&nbsp;harus&nbsp;mampu&nbsp;melompati&nbsp;batu&nbsp;bersusun&nbsp;yang&nbsp;tingginya&nbsp;2&nbsp;meter&nbsp;dan&nbsp;tidak&nbsp;boleh&nbsp;menyentuh&nbsp;permukaan&nbsp;batu&nbsp;sedikitpun.</p>\r\n\r\n<p>Saat&nbsp;ini,&nbsp;tradisi&nbsp;lompat&nbsp;batu&nbsp;sudag&nbsp;tidak&nbsp;lagi&nbsp;digunakan&nbsp;sebagai&nbsp;persiapan&nbsp;untuk&nbsp;perang&nbsp;antar&nbsp;desa&nbsp;maupun&nbsp;antar&nbsp;suku,&nbsp;tetapi&nbsp;lebih&nbsp;fokus&nbsp;sebagai&nbsp;ritual&nbsp;khas&nbsp;masyarakat&nbsp;Nias.&nbsp;Pemuda&nbsp;yang&nbsp;dapat&nbsp;melakukan&nbsp;tradisi&nbsp;lompat&nbsp;batu&nbsp;ini&nbsp;akan&nbsp;dianggap&nbsp;sudah&nbsp;matang&nbsp;dan&nbsp;dewasa&nbsp;secara&nbsp;fisik&nbsp;sehingga&nbsp;ia&nbsp;pun&nbsp;boleh&nbsp;menikah.&nbsp;Selain&nbsp;itu,&nbsp;orang&nbsp;yang&nbsp;dapat&nbsp;melakukan&nbsp;tradisi&nbsp;lompat&nbsp;batu&nbsp;ini&nbsp;juga&nbsp;dianggap&nbsp;akan&nbsp;menjadi&nbsp;pembela&nbsp;desa&nbsp;jika&nbsp;terjadi&nbsp;konflik&nbsp;di&nbsp;desanya.</p>\r\n\r\n<p>Batu&nbsp;yang&nbsp;harus&nbsp;dilompati&nbsp;oleh&nbsp;pemuda&nbsp;nias&nbsp;pada&nbsp;saat&nbsp;melakukan&nbsp;fahombo&nbsp;tingginya&nbsp;sekitar&nbsp;2&nbsp;meter&nbsp;dengan&nbsp;panjang&nbsp;60&nbsp;cm&nbsp;dan&nbsp;lebar&nbsp;90&nbsp;cm.&nbsp;Ancang-ancang&nbsp;lari&nbsp;yang&nbsp;dilakukan&nbsp;oleh&nbsp;pemuda&nbsp;tersebut&nbsp;tidak&nbsp;begitu&nbsp;jauh.&nbsp;Dengan&nbsp;lari&nbsp;ancang-ancang&nbsp;yang&nbsp;tidak&nbsp;jauh,&nbsp;pemuda&nbsp;Nias&nbsp;akan&nbsp;melaju&nbsp;kencang&nbsp;dan&nbsp;menginjakkan&nbsp;kakinya&nbsp;pada&nbsp;sebongkah&nbsp;batu&nbsp;kemudian&nbsp;ia&nbsp;melompat&nbsp;ke&nbsp;udara&nbsp;melewati&nbsp;batu&nbsp;besar&nbsp;yang&nbsp;menyerupai&nbsp;bentek.&nbsp;Pemuda&nbsp;tersebut&nbsp;tidak&nbsp;boleh&nbsp;menyentuh&nbsp;puncak&nbsp;batu&nbsp;sedikit&nbsp;pun&nbsp;dan&nbsp;harus&nbsp;mendarat&nbsp;dengan&nbsp;sempurna.&nbsp;Jika&nbsp;pemuda&nbsp;tersebut&nbsp;tidak&nbsp;mendarat&nbsp;dengan&nbsp;sempurna,&nbsp;maka&nbsp;resikonya&nbsp;adalah&nbsp;mengalami&nbsp;cidera&nbsp;otot&nbsp;atau&nbsp;patah&nbsp;tulang.&nbsp;Saat&nbsp;ini,&nbsp;tradisi&nbsp;lompat&nbsp;batu&nbsp;masih&nbsp;sering&nbsp;dilakukan&nbsp;dan&nbsp;menjadi&nbsp;daya&nbsp;tarik&nbsp;wisatawan&nbsp;yang&nbsp;berkunjung&nbsp;ke&nbsp;Nias.&nbsp;Salah&nbsp;satu&nbsp;desa&nbsp;yang&nbsp;masih&nbsp;menjalankan&nbsp;tradisi&nbsp;lompat&nbsp;batu&nbsp;ini&nbsp;antara&nbsp;lain&nbsp;adalah&nbsp;Desa&nbsp;Bawomataluo&nbsp;di&nbsp;Nias&nbsp;Selatan.</p>\r\n', '2016-02-13 15:01:14', '0000-00-00 00:00:00', 'd4eacb67a9799f61478841bb2e742d3c.jpg', 1.0987943427812632, 97.5146484375, 1),
(11, 5, 3, 364, 'Tari Gong Kalimantan Timur', 'tari-gong-kalimantan-timur', '<p><strong><em>Tari Gong</em></strong> adalah tarian tradisional suku Dayak di <strong><em>Kalimantan timur</em></strong> yang menggunakan gong sebagai media menarinya. Tarian ini di mainkan oleh seorang gadis yang menari di atas gong dengan penuh keanggunan, nama Tari Gong sendiri di ambil dari situ. Tari Gong ini sering di sebut dengan nama tari <em>kancet ledo </em>oleh masyarakat Dayak di sana.</p>\r\n\r\n<p><strong><em>Gerakan</em></strong> dalam Tari Gong menggambarkan kelembutan seorang gadis yang terlihat dari gerakan tubuh dan tangannya yang lemah lembut.&nbsp;Gerakan dalam tarian ini memang tidak begitu banyak seperti tarian dari Kalimantan timur lainnya, bahkan banyak gerakan yang di ulang - ulang. Namun yang di tonjolkan dalam tarian ini adalah kelembutan sang penari dalam bergerak dan menari. Gerakan pada tarian ini lebih fokus pada gerakan tangan saat melambai, gerakan tubuh, dan juga gerakan kaki saat melangkah dan berpijak di gong. Semua gerakan itu di mainkan penuh dengan kelembutan. Tarian ini memang terlihat sederhana, namun kelenturan dan keseimbangan sangat di butuhkan dalam menari tarian satu ini.&nbsp;</p>\r\n\r\n<p>Dalam pertunjukannya penari di balut oleh busana khas adat <strong><em>Dayak</em></strong> <em>kenyah</em> di Kalimantan timur. Yaitu baju dengan yang di hiasi oleh manik - manik berwarna cerah dan corak khas Dayak yang dilengkapi dengan <em>taah</em>. <em>Taah</em> merupakan pakaian khas wanita Dayak berupa kain yang dihiasi manik-manik, taah biasanya dipakai dengan cara dililitkan pada pinggang. Selain itu, kepala penari biasanya menggunakan <em>lavung</em>, yaitu topi yang dibuat dari rotan yang di hiasi motif yang senada dengan pakaian dan taah. Asesoris lain yang di gunakan adalah kalung manik-manik atau yang terbuat dari gigi atau taring macan.&nbsp;</p>\r\n\r\n<p>Pada saat menari, tangan penari di selipkan rangkaian bulu ekor dari burung enggang sebagai property menarinya. Hampir sama dengan tarian enggang, namun dalam tarian ini gerakan yang di gunakan lebih lembut dan sederhana. Dalam tarian ini juga di iringi oleh musik tradisional seperti sapeq atau alat musik seperti kecapi. Ritme musik pengiring dalam tarian ini juga bertempo lambat. Sehingga menyesuaikan dengan gerakan tari yang lemah gemulai.</p>\r\n\r\n<p><strong><em>Tari Gong</em></strong> sering di tampilkan dalam berbagai acara adat seperti acara penyambutan tamu dan festival budaya di <strong><em>Kalimantan timur</em></strong>. Tarian ini masih terus di lestarikan, sehingga banyak modifikasi dan kreasi dalam gerakan dan kostum yang di kenakan. Semua itu agar lebih menarik dan dapat menarik minat wisatawan yang datang berkunjung.</p>\r\n\r\n<p>Nah cukup sekian pengenalan tentang <strong><em>Tari Gong dari Kalimantan timur</em></strong>. Semoga bermanfaat dan menambah wawasan anda tentang kesenian tradisional di Kalimantan timur</p>\r\n', '2016-02-14 05:23:09', '2016-02-14 05:42:07', 'bcf048c6810f21deeb5341b4ee7711b2.jpg', 0, 0, 0),
(12, 5, 5, 317, 'Pontianak Gelar Festival Budaya Melayu VI', 'pontianak-gelar-festival-budaya-melayu-vi', '<p>Pontianak, Demi melestarikan kebudayaan Melayu, Majelis Adat Budaya Melayu (MABM) Kalimantan Barat (Kalbar), rencananya akan menggelar Festival Seni Budaya Melayu VI pada November 2010. Kegiatan ini akan difokuskan di Kota Pontianak.</p>\r\n\r\n<p><br />\r\nRancangan kegiatan telah disiapkan pengurus MABM Kalbar dalam rapat yang dilaksanakan di Rumah Adat Melayu, Sabtu (19/6/2010). Ketua MABM Kalbar, Chairil Effendy menyatakan Festival Seni Budaya Melayu merupakan agenda penting agar masyarakat melayu peduli dengan seni budaya yang ada di Kalbar. &ldquo;FSBM sebelumnya direncanakan di Kapuas Hulu, karena sedang dalam penyelesaian pembangunan rumah melayu, maka pelaksanaan FSBM di serahkan ke DPP MABM Kalbar,&rdquo; ujar Chairil.</p>\r\n\r\n<p>Menurutnya FSBM merupakan agenda tahunan MABM. Berbagai agenda acara sudah dipersiapakan seperti perlombaan terkait dengan budaya melayu di Kalbar seperti lomba lagu daerah, hadrah, tepung tawar, pameran hasil kebun melayu, masakan khas daerah, pemilihan bujang dara, serta seminar tentang budaya. Selain itu, akan dilaksanakan pawai yang melibatkan peserta dari luar daerah dan luar negeri. Ketua Pelaksana FSBM, Awang Sofyan Rozali mengatakan diselenggrakan agenda tahunan ini sebagai bentuk pelestarian kebudayaan dan pariwisata dalam konteks memperkaya kebudayaan Kalbar.</p>\r\n\r\n<p>Seni dan budaya di daerah Kalimantan Selatan seolah lindap ditelan zaman. Dulu waktu saya masih duduk dibangku sekolah dasar, berbagai macam kesenian dan kebudayaan daerah ini begitu banyak, namun setelah roda pemerintahan ini terus berputar seiring bercampurnya ideolgi daerah bahkan manca negara yang masuk kedaerah Kalsel, kebudayaan itu seolah ditelan bumi karena pengaruh berbagai macam kehidupan. Ini tak pantas dibiarkan, bagi generasi muda seperti kita inilah yang harus berjuang untuk mempertahankan kebudayaan dan kesenian kita, jangan sampai menjadi sejarah dengan tergantinya budaya asing. terlihat seorang ibu sedang merajut tanggui di rumah adat banjar (gajah baliku) ini sudah jarang ditemukan. marilah kita membudayakan kebudayaan kita, menjadikan kesenian daerah kita terus berkembang untuk anak cucu serta generasi yang akan datang.</p>\r\n', '2016-02-14 05:29:37', '0000-00-00 00:00:00', 'f38e45d412ace5ff1f3f654bcb7d6d7c.jpg', -0.032730093774040736, 109.37232971191406, 1),
(13, 5, 5, 314, 'Baru 15 Cagar Budaya Kalimantan Barat yang Diakui ', 'baru-15-cagar-budaya-kalimantan-barat-yang-diakui-', '<p>Kalimantan Barat tercatat memiliki 252 cagar budaya yang tersebar di 14 kabupaten/kota. Namun baru 15 cagar budaya yang diakui pemerintah.</p>\r\n\r\n<p>Kepala Dinas Kebudayaan dan Pariwisata Provinsi Kalimantan Barat Yusri Zainuddin mengatakan 15 cagar budaya tersebut dikuatkan dengan surat penetapan cagar budaya. &quot;Sisanya belum dapat surat keputusan penetapan meskipun statusnya sudah masuk dalam cagar budaya,&quot; kata Yusri, Kamis, 24 Mei 2012.</p>\r\n\r\n<p>Kelima belas cagar budaya yang sudah mendapat SK penetapan adalah Keraton Tayan, Sanggau, Al Mukarom Sintang, Amantubillah Mempawah, Azwazoekoebillah Sambas, Landak, Rumah Betang di Kapuas Hulu, Gereja Tua Santo Friedells Sejiram, Istana Kadriah Pontianak, Masjid Jami Kesultanan Pontianak, Sambas, Landak, Tayan, Sanggau, dan Al Mulkarrom Sintang.</p>\r\n\r\n<p>Di Kalimantan Barat, cagar budaya tersebut tersebar di Pontianak sebanyak 14 cagar budaya, Kabupaten Pontianak 15, Kubu Raya 10, Landak 18, Sambas 34, Kota Singkawang 11, Kabupaten Bengkayang 9, Sanggau 17, Sekadau 9, Sintang 18, Melawi 14, Kapuas Hulu 24, Ketapang 26, dan Kabupaten Kayong Utara 7 cagar budaya.</p>\r\n\r\n<p>Pemerintah Provinsi berharap, penetapan ratusan cagar budaya dapat dilakukan segera. Tanpa payung hukum itu, sulit menindak adanya perusakan atau bahkan penjarahan benda yang terdapat di dalam cagar budaya tersebut.</p>\r\n\r\n<p>Sementara itu, Museum Provinsi Kalimantan Barat, kemarin, mendapat tambahan sebanyak 100 piring antik. Seratus piring antik tersebut merupakan benda cagar budaya dari Direktorat Jenderal Pelestarian Cagar Budaya dan Permuseuman.</p>\r\n\r\n<p>&quot;Ini temuan dari Bangka Belitung yang diberikan oleh Ditjen Pelestarian Cagar Budaya dan Permuseuman,&quot; kata Yusri.</p>\r\n\r\n<p>Piring-piring tersebut diperkirakan berasal dari peninggalan bangsa Cina yang ditemukan di dasar laut daerah tersebut. Tambahan seratus piring antik menjadikan koleksi khusus keramik di Museum Kalbar lebih dari 3.000 buah.</p>\r\n', '2016-02-14 05:44:22', '0000-00-00 00:00:00', 'b9e414b5abb014253572e416991f8719.jpg', -0.4809666468293404, 109.37782287597656, 1);
INSERT INTO `article` (`article_id`, `user_id`, `category_id`, `kota_id`, `article_title`, `article_slug`, `article_content`, `created_at`, `updated_at`, `article_pict`, `latitude`, `longitude`, `article_sts`) VALUES
(14, 5, 7, 337, 'Rumah Betang Kalimantan Tengah', 'rumah-betang-kalimantan-tengah', '<p><strong>Rumah Betang</strong> adalah rumah panjang yang merupakan rumah adat suku Dayak (Ngaju) di Kalimantan Tengah, yang terdapat di berbagai penjuru Kalimantan, terutama di daerah hulu sungai yang biasanya menjadi pusat pemukiman suku Dayak, dimana sungai merupakan jalur transportasi utama bagi suku Dayak untuk melakukan berbagai mobilitas kehidupan sehari-hari seperti pergi bekerja ke ladang dimana ladang suku Dayak biasanya jauh dari pemukiman penduduk, atau melakukan aktifitas perdagangan (jaman dulu suku Dayak biasanya berdagang dengan menggunakan system barter yaitu dengan saling menukarkan hasil ladang, kebun maupun ternak).</p>\r\n', '2016-02-14 05:51:58', '0000-00-00 00:00:00', '635e2a7727b9e8d00a09a982abaf43e4.jpg', -2.217631526601396, 113.92204284667969, 1),
(15, 5, 4, 325, 'Pakaian Adat Kalimantan Tengah', 'pakaian-adat-kalimantan-tengah', '<p>Pakaian adatnya pria Kalimantan Tengah berupa kepala berhiasankan bulu-bulu enggang, rompi dan kain-kain yang menutup bagian bawah badan sebatas lutut. Sebuah tameng kayu hiasan yang khas bersama mandaunya berada di tangan. Perhiasan yang dipakai berupa kalung-kalung manik dan ikat pinggang.</p>\r\n\r\n<p>Wanitanya memakai baju rompi dan kain (rok pendek), tutup kepala berhiaskan bulu-bulu enggang, kalung manik, ikat pinggang dan beberapa gelang tangan.</p>\r\n', '2016-02-14 05:57:39', '0000-00-00 00:00:00', 'fc2e3e4c5aa650ffeea454f2b975678d.jpg', -0.9350781390230078, 114.89776611328125, 1),
(16, 5, 7, 329, 'Pisau Mandau Suku Dayak', 'pisau-mandau-suku-dayak', '<p><strong>Pengantar</strong></p>\r\n\r\n<p>&nbsp;\r\n<p>Kalimantan adalah salah satu dari 5 pulau besar yang ada di Indonesia. Sebenarnya pulau ini tidak hanya merupakan &ldquo;daerah asal&rdquo; orang Dayak semata karena di sana ada orang Banjar (Kalimantan Selatan) dan orang Melayu. Dan, di kalangan orang Dayak sendiri satu dengan lainnya menumbuh-kembangkan kebudayaan tersendiri. Dengan perkataan lain, kebudayaan yang ditumbuh-kembangkan oleh Dayak-Iban tidak sama persis dengan kebudayaan yang ditumbuh-kembangkan Dayak-Punan dan seterusnya. Namun demikian, satu dengan lainnya mengenal atau memiliki senjata khas Dayak yang disebut sebagai mandau. Dalam kehidupan sehari-hari senjata ini tidak lepas dari pemiliknya. Artinya, kemanapun ia pergi mandau selalu dibawanya karena mandau juga berfungsi sebagai simbol seseorang (kehormatan dan jatidiri). Sebagai catatan, dahulu mandau dianggap memiliki unsur magis dan hanya digunakan dalam acara ritual tertentu seperti: perang, pengayauan, perlengkapan tarian adat, dan perlengkapan upacara.</p>\r\n<br />\r\nMandau dipercayai memiliki tingkat-tingkat kampuhan atau kesaktian. Kekuatan saktinya itu tidak hanya diperoleh dari proses pembuatannya yang melalui ritual-ritual tertentu, tetapi juga dalam tradisi pengayauan (pemenggalan kepala lawan). Ketika itu (sebelum abad ke-20) semakin banyak orang yang berhasil di-kayau, maka mandau yang digunakannya semakin sakti. Biasanya sebagian rambutnya sebagian digunakan untuk menghias gagangnya. Mereka percaya bahwa orang yang mati karena di-kayau, maka rohnya akan mendiami mandau sehingga mandau tersebut menjadi sakti. Namun, saat ini fungsi mandau sudah berubah, yaitu sebagai benda seni dan budaya, cinderamata, barang koleksi serta senjata untuk berburu, memangkas semak belukar dan bertani.<br />\r\n<br />\r\n<strong>Struktur Mandau</strong><br />\r\n1. Bilah Mandau<br />\r\nBilah mandau terbuat dari lempengan besi yang ditempa hingga berbentuk pipih-panjang seperti parang dan berujung runcing (menyerupai paruh yang bagian atasnya berlekuk datar). Salah satu sisi mata bilahnya diasah tajam, sedangkan sisi lainnya dibiarkan sedikit tebal dan tumpul. Ada beberapa jenis bahan yang dapat digunakan untuk membuat mandau, yaitu: besi montallat, besi matikei, dan besi baja yang diambil dari per mobil, bilah gergaji mesin, cakram kendaraan, dan lain sebagainya. Konon, mandau yang paling baik mutunya adalah yang dibuat dari batu gunung yang dilebur khusus sehingga besinya sangat kuat dan tajam serta hiasannya diberi sentuhan emas, perak, atau tembaga. Mandau jenis ini hanya dibuat oleh orang-orang tertentu.<br />\r\n<br />\r\nPembuatan bilah mandau diawali dengan membuat bara api di dalam sebuah tungku untuk memuaikan besi. Kayu yang digunakan untuk membuat bara api adalah kayu ulin. Jenis kayu ini dipilih karena dapat menghasilkan panas yang lebih tinggi dibandingkan dengan jenis kayu lainnya. Setelah kayu menjadi bara, maka besi yang akan dijadikan bilah mandau ditaruh diatasnya agar memuai. Kemudian, ditempa dengan menggunakan palu. Penempaan dilakukan secara berulang-ulang hingga mendapatkan bentuk bilah mandau yang diinginkan. Setelah bilah terbentuk, tahap selanjutnya adalah membuat hiasan berupa lekukan dan gerigi pada mata mandau serta lubang-lubang pada bilah mandau. Konon, pada zaman dahulu banyaknya lubang pada sebuah mandau mewakili banyaknya korban yang pernah kena tebas mandau tersebut. Cara membuat hiasan sama dengan cara membuat bilah mandau, yaitu memuaikan dan menempanya dengan palu berulang-ulang hingga mendapatkan bentuk yang diinginkan. Setelah itu, barulah bilah mandau dihaluskan dengan menggunakan gerinda.<br />\r\n<br />\r\n2. Gagang (Hulu Mandau)<br />\r\nGagang (hulu mandau) terbuat dari tanduk rusa yang diukir menyerupai kepala burung. Seluruh permukaan gagangnya diukir dengan berbagai motif seperti: kepala naga, paruh burung, pilin, dan kait. Pada ujung gagang ada pula yang diberi hiasan berupa bulu binatang atau rambut manusia. Bentuk dan ukiran pada gagang mandau ini dapat membedakan tempat asal mandau dibuat, suku, serta status sosial pemiliknya.<br />\r\n<br />\r\n3. Sarung Mandau.<br />\r\nSarung mandau (kumpang) biasanya terbuat dari lempengan kayu tipis. Bagian atas dilapisi tulang berbentuk gelang. Bagian tengah dan bawah dililit dengan anyaman rotan sebagai penguat apitan. Sebagai hiasan, biasanya ditempatkan bulu burung baliang, burung tanyaku, manik-manik dan terkadang juga diselipkan jimat. Selain itu, mandau juga dilengkapi dengan sebilah pisau kecil bersarung kulit yang diikat menempel pada sisi sarung dan tali pinggang dari anyaman rotan.<br />\r\n<br />\r\n<strong>Nilai Budaya</strong><br />\r\nPembuatan mandau, jika dicermati secara seksama, di dalamnya mengandung nilai-nilai yang pada gilirannya dapat dijadikan sebagai acuan dalam kehidupan sehari-hari bagi masyarakat pendukungnya. Nilai-nilai itu antara lain: keindahan (seni), ketekunan, ketelitian, dan kesabaran. Nilai keindahan tercermin dari bentuk-bentuk mandau yang dibuat sedemikian rupa, sehingga memancarkan keindahan. Sedangkan, nilai ketekunan, ketelitian, dan kesabaran tercermin dari proses pembuatannya yang memerlukan ketekunan, ketelitian, dan kesabaran. Tanpa nilai-nilai tersebut tidak mungkin akan terwujud sebuah mandau yang indah dan sarat makna.</p>\r\n', '2016-02-14 06:04:25', '0000-00-00 00:00:00', '7fa7edfbd2b7a6d03432997a84d307e3.jpg', -2.0762818813187, 112.18070983886719, 1),
(17, 4, 8, 208, 'Arumba Alat Musik Yang Menarik', 'arumba-alat-musik-yang-menarik', '<p><strong>Arumba</strong>&nbsp;adalah nama&nbsp;<strong>grup musik</strong>&nbsp;yang menggunakan alat musik yang terbuat dari bambu. musik ini biasa dimainkan oleh sekelompok anak-anak muda yang sedang bertugas ronda malam. alat musik ini berasal dari Desa Margoyoso Kec.Salaman Kab.Magelang yang dikembangkan ke desa-desa sekitarnya,seperti Desa Jamblang-Kaliabu yang saat ini sedang gigih-gigihnya mendalami jenis musik tersebut.adapun jumlah pemainnya kurang-lebih 10 orang.selain untuk kegiatan ronda malam,musik ini biasa dimainkan pada acara hajatan seperti pernikahan,sunatan,ulang tahun,dll.</p>\r\n\r\n<p>\\r\\n\\r\\n</p>\r\n\r\n<p><strong>Sejarah Arumba :</strong><br />\r\n\\r\\nKonon pada tahun 1964, Yoes Roesadi dan kawan-kawan membentuk grup musik yang secara khusus menambahkan angklung pada jajaran ensemble-nya. Ketika sedang naik truk untuk pentas ke Jakarta, mereka mendapat ide untuk menamai diri sebagai grup Aruba (Alunan Rumpun Bambu).<br />\r\n\\r\\n<br />\r\n\\r\\nKemudian sekitar tahun 1968, Muhamad Burhan di Cirebon membentuk grup musik yang bertekad untuk sepenuhnya memainkan alat musik bambu. Mereka memakai alat musik lama (angklung, calung), dan juga berinovasi membuat alat musik baru (gambang, bass lodong). Ensemble ini kemudian mereka beri nama Arumba (Alunan Rumpun Bambu).<br />\r\n\\r\\n<br />\r\n\\r\\nSekitar tahun 1969, Grup Musik Aruba juga mengubah nama menjadi Arumba, sehingga timbul sedikit perselisihan istilah arumba tersebut. Dengan berjalannya waktu, istilah arumba akhirnya melekat sebagai ensemble musik bambu asal Jawa Barat.</p>\r\n\r\n<p>\\r\\n\\r\\n</p>\r\n\r\n<p>Jadi Ayo Dong kesini Dan Mari Lestarikan Arumba.</p>\r\n\r\n<p>\\r\\n</p>\r\n', '2016-02-14 06:12:07', '0000-00-00 00:00:00', '3db38697ba6e2a8c6643b467a2a926f9.jpg', -7.467325994487277, 110.23612976074219, 1),
(18, 5, 8, 354, 'Sampek', 'sampek', '<p>Suku Dayak Kayaan memiliki seni musik yang unik. Suku ini memiliki alat musik yang dinamakan sampek atau masyarakat Kayaan menyebutnya sape&rsquo; kayaan. Sape&rsquo; adalah musik petik. Alat musik sape&rsquo; yang dimiliki oleh Dayak Kayaan bentuknya berbadan lebar, bertangkai kecil, panjangnya sekitar satu meter, memiliki dua senar/tali dari bahan plastik. Sape jenis ini memiliki empat tangga nada.</p>\r\n\r\n<p>Cara pembuatan sape&rsquo; sesungguhnya cukup rumit. Kayu yang digunakan juga harus dipilih. Selain kayu Pelaik (kayu gabus) atau jenis kayu lempung lainnya, juga bisa kayu keras seperti nangka, belian dan kayu keras lainnya. Semakin keras dan banyak urat daging kayunya, maka suara yang dihasilkannya lebih bagus. Bagian permukaannya diratakan, sementara bagian belakang di lobang secara memanjang, namun tidak tembus kepermukaan. Untuk mencari suara yang bagus maka tingkat tebal tipisnya tepi dan permukannya harus sama, agar suara bisa bergetar merata, sehingga mengehasilkan suara yang cekup lama dan nyaring ketika dipetik.</p>\r\n\r\n<p>Cara memainkannya, berbeda dengan cara memainkan melodi gitar, karena jari-jari tangan hanya pada satu senar yang sama bergeser ke atas dan bawah. Biasanya para pemusik ketika memainkan sebuah lagu, hanya dengan perasaan saja.</p>\r\n\r\n<p>Sape&rsquo; Kayaan sangat populer karena irama dan bunyi yang dilantunkannya dapat membawa pendengar serasa di awang-awang. Alat musik sape&rsquo; ini biasa dimainkan ketika acara pesta rakyat atau gawai padai (ritual syukuran atas hasil panen padi).Musik ini dimainkan oleh minimal satu orang. Bisa juga dua atau tiga orang. Jenis lagu musik sape&rsquo; ini bermacam-macam, biasanya sesuai dengan jenis tariannya. Misalnya musik Datun Julut, maka tariannya juga Datun Julut dan sebagainya.</p>\r\n\r\n<p>Bermusik itu bermain mengolah rasa. Petikan dawai menghadirkan dentingan yang memecah kesunyian. Orang Dayak punya rasa bermusik yang tinggi. Musik tradisional tiga dawai telah mengolah rasa.</p>\r\n\r\n<p>Tak jauh dari tangga Betang. Seorang pria separuh baya memegang sebuah alat musik tradisional khas masyarakat Dayak: sape atau sampe. Pakaian khas Dayak menghiasi tubuhnya. Ia kemudian memainkan gitar tali tiga yang digenggamnya.</p>\r\n\r\n<p>&ldquo;Kita bermain dengan rasa. Karena sape tidak sama dengan gitar kebanyakan. Tidak ada tangga nadanya. Tidak semua orang bisa memainkan alat musik ini,&rdquo; kata Stepanus, pemain sape yang berasal dari Kabupaten Malino, Provinsi Kalimantan Timur.</p>\r\n\r\n<p>Sujarni Alloy, peneliti Institut Dayakologi mengungkapkan, sape adalah sebuah mitologi dalam masyarakat Dayak. Keberagaman suku bangsa, semakin menambah ciri khas seni dan budaya bermusik. Ia menyebut Dayak Kayaan dan Kenyah yang memiliki kekhasan bermusik dengan tiga dawai itu.</p>\r\n\r\n<p>Dayak Kayaan yang mendiami Kalimantan, baik di Sungai Mendalam, Kabupaten Kapuas Hulu, Kalimantan Barat, Sungai Mahakam, Sungai Kayaan dan sekitarnya di Kalimantan Timur dan Sungai Baram, Telaang Usaan, Tubau dan sekitarnya Serawak-Malaysia, memiliki seni musik yang unik.</p>\r\n\r\n<p>Suku ini cukup besar. Dalam groupnya ada berbagai subKayaan, antara lain Punan, Kenyah dan Kayaan sendiri. Suku ini memiliki alat musik yang dinamakan sampek (orang Kayaan menyebutnya Sape&rsquo;). Sape&rsquo; adalah musik petik yang tidak asing lagi di mata para pelagiat seni baik di Indonesia maupun Sarawak-Malaysia.</p>\r\n\r\n<p>Musik sape&rsquo; yang dimiliki oleh Dayak Kayaan terdiri atas dua jenis. Pertama, berbadan lebar, bertangkai kecil, panjangnya sekitar satu meter, memiliki dua senar/tali dari bahan plastik. Sape jenis ini memiliki empat tangga nada. &ldquo;Orang kerap menyebutnya sebagai sape Kayaan, karena ditemui oleh orang Kayaan,&rdquo; kata Alloy.</p>\r\n\r\n<p>Sementara satunya berbadan kecil memanjang. Pada bagian ujungnya berbentuk kecil dengan panjangnya sekitar 1,5 meter. Orang menyebutnya dengan sape&rsquo; Kenyah, karena ditemui oleh orang Kenyah. Sape&rsquo; ini memiliki tangga nada 11-12. Talinya dari senar gitar atau dawai yang halus lainnya, tiga sampai lima untai.</p>\r\n\r\n<p>Dari kedua jenis sape ini, yang paling populer adalah Sape&rsquo; Kenyah. Karena irama dan bunyi yang dilantunkannya dapat membawa pendengar serasa di awang-awang. Tidak heran pada zaman dulu, ketika malam tiba, anak muda memainkannya dengan perlahan-lahan baik di jalan maupun sepanjang pelataran rumah panjang, sehingga pemilik rumah tertidur pulas karena menikmatinya.</p>\r\n\r\n<p>Dengan kekhasan suaranya, konon menurut mitologi Dayak Kayaan, Sape&rsquo; Kenyah, diciptakan oleh seorang yang terdampar di karangan (pulau kecil di tengah sungai) karena sampannya karam di terjang riam. Ketika orang tersebut yang sampai hari ini belum diketahui siapa sebenarnya, bersama rekan-rekannya menyusuri sungai, diperkirakan di Kaltim.</p>\r\n\r\n<p>Karena mereka tidak mampu menyelamatkan sampan dari riam, akibatnya mereka karam. Dari sekian banyak orang tersebut, satu di antaranya hidup dan menyelamatkan diri kekarangan. Sementara yang lainnya meninggal karena tengelam dan dibawa arus.</p>\r\n\r\n<p>Ketika tertidur, antara sadar dan tidak, dia mendengar suara alunan musik petik yang begitu indah dari dasar sungai. Semakin lama dia mendengar suara tersebut, semakin dekat pula rasanya jarak sumber suara musik yang membuatnya penasaran.</p>\r\n\r\n<p>Sepertinya dia mendapat ilham dari leluhur nenek moyangnya. Sekembali ke rumah, dia mencoba membuat alat musik tersebut dan memainkannya sesuai dengan lirik lagu apa yang didengarnya ketika di karangan. Mulai saat itulah Sape&rsquo; Kenyah mulai dimainkan dan menjadi musik tradisi pada suku Dayak Kenyah, hingga ke group Kayaan lainnya. Kini Sape&rdquo; Kenyah itu bukanlah alat musik yang asing lagi.</p>\r\n\r\n<p>Ketika acara pesta rakyat atau gawai padai (ritual syukuran atas hasil panen padi) pada suku ini, sape kerap dimainkan. Para pengunjung disuguhkan dengan tarian yang lemah gemulai. Aksessoris bulu-bulu burung enggang dan ruai di kepala dan tangan serta manik-manik indah besar dan kecil pada pakaian adat dan kalung di leher yang diiringi dengan musik sape&rsquo;.</p>\r\n\r\n<p>Musik ini dimainkan oleh minimal satu orang. Bisa juga dua atau tiga orang, sehingga suaranya lebih indah. Jenis lagu musik sape&rsquo; ini bermacam-macam, biasanya sesuai dengan jenis tariannya. Misalnya musik Datun Julut, maka tariannya juga Datun Julut dan sebagainya.</p>\r\n\r\n<p>Ada beberapa jenis lagu musik sape&rsquo;, di antaranya: Apo Lagaan, Isaak Pako&rsquo; Uma&rsquo; Jalaan, Uma&rsquo; Timai, Tubun Situn, Tinggaang Lawat dan Tinggaang Mate. Nama-nama lagu tersebut semua dalam bahasa Kayaan dan Kenyah.</p>\r\n\r\n<p>Cara pembuatan sape&rsquo; sesungguhnya cukup rumit. Kayu yang digunakan juga harus dipilih. Selain kayu Pelaik (kayu gabus) atau jenis kayu lempung lainnya, juga bisa kayu keras seperti nangka, belian dan kayu keras lainnya.</p>\r\n\r\n<p>Semakin keras dan banyak urat daging kayunya, maka suara yang dihasilkannya lebih bagus ketimbang kayu lempung. Bagian permukaannya diratakan, sementara bagian belakang di lobang secara memanjang, namun tidak tembus kepermukaan.</p>\r\n\r\n<p>Untuk mencari suara yang bagus maka tingkat tebal tipisnya tepi dan permukannya harus sama, agar suara bisa bergetar merata, sehingga mengehasilkan suara yang cekup lama dan nyaring ketika dipetik.</p>\r\n\r\n<p>Menurut V. Aem Jo Lirung Anya, seorang pemusik sape asal Dayak Kayaan Sungai Mendalam, Kabupaten Kapuas Hulu, Kalimantan Barat, tidak jarang pembuat sape&rsquo; selalu salah untuk menentukan mutu dari suaranya.</p>\r\n\r\n<p>Sedangkan cara memainkannya, jelas berbeda dengan cara memainkan melodi gitar, karena jari-jari tangan hanya pada satu senar yang sama bergeser ke atas dan bawah. Para pemusik ketika memeinkan sebuah lagu, hanya dengan perasaan atau viling saja.</p>\r\n\r\n<p>Untuk sementara ini belum ada panduan khusus yang menulis tentang notasi lagu musiknya. Rekaman Musik sape&rsquo; ini bisa di dapat seperti Sarawak, Kalimantan Barat dan Kalimantan Timur, dalam bentuk kaset tape recorder maupun Compact Disk.</p>\r\n\r\n<p>Saat ini sape&rsquo; tidak saja bisa dimainkan sendiri bersaman dengan musik tradisi lainnya, tapi juga dapat dikolaborasikan dengan musik modern seperti organ, gitar bahkan drum sebagai pengganti beduk. Saat ini sape&rsquo; dapat dibeli di toko kerajinan, hanya saja kebanyakan dari sape&rsquo; tersebut sudah tidak lagi asli dan bermutu, bahkan tidak lebih dari fungsi pajangan belaka.</p>\r\n\r\n<p>Dan, dawai sape tetap berdenting. Zaman telah mengadopsinya menjadi inspirasi bagi pemusik modern.</p>\r\n', '2016-02-14 06:12:15', '0000-00-00 00:00:00', '8612fc163beca5f0d89446ae6763a9a4.jpg', 0.8303542606276905, 117.45208740234375, 1),
(19, 5, 7, 389, 'Rumah Adat Tongkonan', 'rumah-adat-tongkonan', '<p>Mendengar Tana Toraja yang pertama kali terpikir ialah Sulawesi Selatan dan yang kedua adalah rumah tongkonan. Tepat sekali, bahwa rumah tongkonan merupakan rumah adat Tana Toraja. Rumah adat ini memiliki bentuk unik menyerupai perahu dari kerajaan Cina pada zaman dahulu. Tongkonan juga disebut-sebut mirip dengan rumah adat asal Sumatera Barat, yaitu rumah gadang. &nbsp;Rumah adat ini masih ditinggali sebagai tempat beraktivitas sehari-hari.&nbsp;</p>\r\n\r\n<p>&ldquo;Tongkonan&rdquo; sendiri berasal dari kata &ldquo;tongkon&rdquo; yang berarti duduk. Tongkonan berfungsi untuk pusat pemerintahan, kekuasaan adat dan perkembangan kehidupan sosial budaya masyarakat Tana Toraja pada zaman dahulu. Rumah ini merupakan warisan secara turun-temurun dari nenek moyang rang Tana Toraja.Rumah ini tidak bisa dimiliki perorangan</p>\r\n\r\n<p>Rumah tongkonan dianggap sebagai ibu oleh Masyarakat Toraja. Sedangkan bapaknya adalah alang sura (lumbung padi). Rumah tongkonan memiliki tiga bagian di dalamnya, yaitu bagian utara, tengah, dan selatan. Tengalok, yaitu ruangan di bagian utara berfungsi sebagai ruang tamu dan tempat anak-anak tidur, serta tempat menaruh sesaji. Ruang sambung, yaitu ruangan sebelah utara merupakan ruangan untuk kepala keluarga namun juga dianggap sebagai sumber penyakit. &nbsp;Ruangan yang terakhir, yaitu ruangan bagian tengah yang disebut Sali. Ruang ini berfungsi sebagai ruang makan, pertemuan keluarga, dapur, serta tempat meletakkan orang mati.</p>\r\n\r\n<p>Tongkonan Layuk atau Tongkonan Pesio&rsquo; Aluk, Tongkonan Pekaindoran atau Pekaindoran, dan Togkonan Batu A&rsquo;riri merupakan jenis tongkonan yang memiliki fungsi secara khusus. Pertama, Tongkonan Layuk atau Tongkonan Pesio&rsquo; Aluk, yaitu tempat untuk menciptakan dan menyusun aturan-aturan sosial keagamaan.</p>\r\n\r\n<p>Jenis kedua Tongkonan Pekaindoran atau Pekamberan atau Tongkonan kaparengngesan, yaitu Tongkonan yang berfungsi sebagai tempat pengurus atau pengatur pemerintahan adat, berdasarkan aturan dari Tongkonan Pesio&rsquo; Aluk. Tongkonan Batu A&rsquo;riri yang berfungsi sebagai tongkonan penunjang.</p>\r\n\r\n<p><br />\r\nUtara merupakan arah yang penting bagi rumah adat tongkonan dan masyarakat Tana Toraja. Semua rumah tongkonan menghadap ke utara. Utara dan ujung atap yang berdiri berjejer mengarah ke utara merupakan lambing bahwa leluhur mereka berasal dari utara dan di waktunya nanti mereka akan berkumpul kembali di utara.</p>\r\n\r\n<p>Kepala kerbau tak bisa dipisahkan dari rumah adat tongkonan. Kepala kerbau menjadi ciri khas dari rumah tongkonan. Kepala kerbau tersebut ditempel di depan rumah dan tanduk-tanduk kerbau pada tiang utama di depan setiap rumah. Semakin banyak jumlah tanduk kerbau yang terpasang di depan rumah semakin tinggi pula derajat keluarga tersebut. Tanduk kerbau di depan tongkonan melambangkan kemampuan ekonomi keluarga yang mendiami rumah tersebut saat upacara penguburan anggota keluarganya.</p>\r\n\r\n<p>Kerbau dikurbankan dalam jumlah yang banyak setiap upacara adat di Toraja seperti pemakaman. Tanduk kerbau yang dikurbankan kemudian dipasang pada tongkonan milik keluarga bersangkutan. Semakin banyak tanduk yang terpasang di depan tongkonan maka semakin tinggi pula status sosial keluarga pemilik rumah tongkonan tersebut.</p>\r\n\r\n<p>Aluk To Dolo merupakan empat warna dasar, yaitu hitam, merah, kuning, dan putih mewakili kepercayaan asli Toraja. Kematian dan kegelapan dilambangkan dengan warna hitam, sementara kuning melambangkan anugerah dan kekuasaan ilahi. Merah merupakan warna darah yang melambangkan kehidupan manusia. Sementara daging dan tulang dilambangkan dengan warna putih yang artinya suci.</p>\r\n\r\n<p>Di sisi barat dipasang rahang kerbau yang pernah di sembelih. Di sisi kanan yang menghadap ke arah timur dipasang rahang babi.</p>\r\n\r\n<p>Tongkonan milik bangsawan Toraja berbeda dengan dari orang umumnya. Yaitu pada bagian dinding, jendela, dan kolom, dihiasi motif ukiran yang halus, detail, dan beragam. Ada ukiran bergambar ayam, babi, dan kerbau, serta diselang-seling sulur mirip batang tanaman.</p>\r\n\r\n<p>Keunikan yang terdapat di rumah tongkonan ialah tidak digunakannya unsur logam (seperti paku) dalam pembuatan tongkonan. Rumah adat tongkonan akan terus dibangun dan didekorasi ulang oleh masyarakat Toraja. Hal itu bukan karena alasan perbaikan tetapi lebih untuk menjaga gengsi dan pengaruh dari kaum bangsawan. Pembangunan kembali rumah tongkonan akan disertai upacara rumit yang melibatkan seluruh warga dan tidak jauh berbeda dengan upacara pemakaman.</p>\r\n\r\n<p>Rumat adat Tana Toraja, Tongkonan, oleh pemerintah diajukan untuk masuk dalam daftar warisan budaya dunia United Nations Educational, Scientific and Cultural Organization (UNESCO) sejak tahun 2010.</p>\r\n', '2016-02-14 06:23:43', '0000-00-00 00:00:00', '2d89e92e38285fe2513133229b7300a3.jpg', -3.116976408421603, 119.83268737792969, 1),
(20, 4, 6, 311, 'Pasar Terapung Muara Kuin yang Melegenda', 'pasar-terapung-muara-kuin-yang-melegenda', '<p>Apa Kamu Tahu Kalau Diindonesia, Punya Pasar Yang Mengapung?, Kalau Kamu Belum Tahu Ya Udah Ayo Simak Artikel Ini Ini.</p>\r\n\r\n<p>Tidak sedikit orang yang mengetahui tentang keberadaan&nbsp;<strong>Pasar Terapung</strong>&nbsp;di bumi Borneo atau Kalimantan. Umumnya masyarakat Indonesia mengetahui informasi tentang&nbsp;<strong>Pasar Terapung</strong>&nbsp;semenjak pasar unik ini muncul di salah satu iklan sebuah stasiun televisi swasta yang muncul pada 1992. Namun sayangnya, informasi terkait&nbsp;<strong>Pasar Terapung</strong>&nbsp;masih belum banyak diketahui.</p>\r\n\r\n<p><strong>Pasar Terapung</strong>&nbsp;memang sangat identik dengan Kalimantan, di mana salah satu&nbsp;<strong>Pasar Terapung</strong>&nbsp;terbesar berada di Banjarmasin, yaitu&nbsp;<strong>Pasar Terapung Muara Kuin</strong>.&nbsp;<strong>Pasar Terapung Muara Kuin</strong>&nbsp;terletak di antara Kelurahan Kuin Utara dan Kelurahan Alalak Selatan. Pasar Terapung Muara Kuin juga sangat erat kaitannya dengan sejarah berdirinya Kota Banjarmasin dan Kerajaan Banjar pada 1595. Bahkan diyakini&nbsp;<strong>Pasar Terapung Muara Kuin</strong>&nbsp;sudah ada sebelum Kerajaan Banjar berdiri.</p>\r\n\r\n<p>Area pasar ini berada termasuk dalam Pelabuhan Sungai Bandamasih yang meliputi Sungai Barito, Kuin, hingga bermuara di Sungai Kalayan. Untuk mencapai ke lokasi pasar, masyarakat lokal maupun wisatawan membutuhkan waktu sekitar 15 menit menggunakan jukung atau kelotok (perahu motor) menuju muara Sungai Kuin.</p>\r\n\r\n<p>Hal yang masih dilestarikan sampai sekarang oleh para pedagang di&nbsp;<strong>Pasar Terapung Muara Kuin</strong>&nbsp;adalah siitem barter yang masih berlangsung sampai sekarang. Para pedagang, yang di dominasi oleh perempuan menggunakan pakaian Tanggui dan topi caping lebar yang terbuat dari daun rumbia untuk menutupi diri dari sengatan matahari. Barang dagangan yang dijual antara lain aneka ikan,&nbsp; sayur mayur dan buah lokal, aneka hidanngan khas Banjar seperti Soto Banjar, Udang Galah, Nasi Sop Banjar, dan Bingka Kentang.</p>\r\n', '2016-02-14 06:26:57', '0000-00-00 00:00:00', '', 1.0491357039128182, 111.86897277832031, 1),
(21, 5, 3, 376, 'Tarian Kipas Pakerana', 'tarian-kipas-pakerana', '<p><strong>Tari Kipas Pakarena</strong> merupakan tarian yang berasal dari Gowa, Sulawesi Selatan. Kata pakarena sendiri berasal dari bahasa setempat yakni karena yang berarti main. Tarian ini merupakan salah satu tradisi di kalangan masayarakat Gowa yang masih dipertahankan sampai saat ini. Masyarakat Gowa sendiri adalah masyarakat yang tinggal di daerah bekas kekuasaan kerajaan Gowa. Kerajaan gowa berdiri sekitar abad ke 16 dan mencapai masa kejayaan di abad ke-18 kemudian mengalami keruntuhan di abad itu juga. Seluruh bagian Sulawesi Selatan merupakan wilayah kekuasaan kerajaan gowa sehingga masyarakat asli yang tinggal di daerah tersebut dikenal dengan masyarakat Gowa. Hegemoni kerajaan Gowa yang berlangsung berabad-abad turut&nbsp; mempengaruhi corak kebudayaan masyarakat Gowa. Tari Kipas Pakarena merupakan salah satu bukti kekuatan tradisi masyarakat Gowa yang masih dipercaya dan dipertahankan sebagai warisan budaya yang tak ternilai harganya.</p>\r\n\r\n<p><br />\r\n<em><strong>Tari kipas pakarena</strong></em> mencerminkan ekspresi kelembutan,kesantunan, kesetiaan, kepatuhan dan sikap hormat perempuan Gowa terhadap laki-laki. Setiap pola gerakan dalam tarian pakarena memiliki makna tersendiri. Tarian ini diawali dan diakhiri dengan posisi duduk sebagai tanda hormat dan santun para penari.&nbsp; Pola gerakan memutar bermakna siklus hidup manusia yang selalu berputar. Pola gerakan memutar yang dimainkan adalah gerakan memutar searah jarum jam. Kemudian pola gerakan naik turun melambangkan kehidupan manusia yang kadang berada di bawah dan kadang di atas,pola gerakan ini mengingatkan akan pentingnya kesabaran dan keasadaran manusia dalam mengahadapi kehidupan.</p>\r\n\r\n<p><br />\r\nTarian ini juga diiringi oleh kelompok musik yang dikenal dengan nama gondrong rinci. Kelompok ini beranggotakan 7 orang pemain musik yang semuanya adalah kaum pria. Tugas dari kelompok musik ini adalah mengiringi para penari dengan tabuhan gandrang sebagai pengatur irama musik dan juga memainkan alat musik tiup berupa seruling.&nbsp; Selain itu kelompok pengiring ini juga harus memainkan alat musik sambil melakukan gerakan, terutama gerakan kepala. Setiap hentakan dari tabuhan gandrang dari pengiring musik melambangkan watak lelaki Gowa yang keras. Keunikan lain yang diliki tarian ini adalah aturan bagi para penari dalam memainkan tarian ini. para penari tidak diperkenankan membuka mata terlalulebar dan mengankat kai terlalu tinggi, hal ini dikarenakan aspek kesopanan dan kesantunan sangat diutamakan dalam tarian ini. Dalam memainkan tarian ini,parapenari dituntut memiliki kondisi fisik yang prima karena durasi tarian bisa mencapai dua jam dengan gerakan-gerakan yang dinamis.</p>\r\n\r\n<p>Masyarakat Gowa percaya bahwa Tarian Kipas Pakarena berasal dari kisah perpisahan antara penghuni negeri kahyangan (boting langi) dengan penghuni bumi (lino) di zaman dahulu. Sebelum perpisahan, penghuni boting langi&nbsp; mengajarkan penghuni bumi cara menjalani hidup dengan bercocok tanam,berburu dan beternak melalui gerakan-gerakan badan dan kaki. Gerakan-gerakan ini kemudian digunakanoleh penghuni lino untuk mengungkapkan rasa syukur kepada penghuni boting langi.</p>\r\n\r\n<p>Masyarakat Gowa biasanya mementaskan Tari Kipas Pakarena di acara- acara adat atau acara-acara hiburan. Akan tetapi, masyarakat Gowa tidak menganggap tarian ini hanya sebagai hiburan saja tapi juga sebagai wujud rasa syukur yang dilambangkan dengan setiap gerakan yang estetik dari tarian ini. Selain memiliki nilai hiburan dan nilai filosofi bagi masyarkat Gowa, tarian ini juga menjadi salah satu daya tarik pariwisata bagi provinsi Sulawesi Selatan sehingga tarian ini seringkali dipentaskan dalam rangkaian acara promosi pariwisata provinsi&nbsp; Sulawesi Selatan.</p>\r\n', '2016-02-14 06:29:58', '0000-00-00 00:00:00', '3adf6d1db4992077d291588244c13b07.jpg', -5.340987630356902, 119.80796813964844, 1),
(22, 4, 9, 69, 'Hutan Tropis Sumatra Butuh Pendatang', 'hutan-tropis-sumatra-butuh-pendatang', '<p>Warisan Hutan Hujan Tropis Sumatera adalah tempat pelestarian bagi Hutan Hujan Tropis di Sumatera dan habitat dari beberapa spesies yang hampir punah seperti, Harimau Sumatera, Gajah Sumatera, dan Badak Sumatera yang merupakan spesies Badak terkecil dan memiliki dua cula. Luas dari Hutan Hujan Tropis Sumatera seluruhnya adalah 2,5 juta hektar yang terdiri dari 3 Taman Nasional di Sumatera, yaitu Taman Nasional Gunung Leuser, Taman Nasional Kerinci Seblat, dan Taman Nasional Bukit Barisan Selatan. Tempat ini juga tempat berbagai jenis tumbuhan endemik seperti, kantong semar, bunga terbesar di dunia Rafflesia Arnoldi, dan bunga tertinggi Amorphophallus. Selain memiliki keanekaragaman hayati yang tinggi, hutan hujan tropis Sumatera juga merupakan sumber mata pencarian bagi masyarakat yang tinggal di sana. Beberapa suku tinggal di hutan hujan tropis Sumatera, seperti suku Mentawai dan suku Anak Dalam.</p>\r\n\r\n<p>Untuk itulah dalam sidang ke 28 World Heritage Commitee, yang diselenggarakan di Suzhou RRC pada bulan Juli 2004, Hutan Hujan Tropis Sumatera ditetapkan sebagai Situs Warisan Dunia oleh&nbsp;<em><strong>UNESCO</strong></em>, karena merupakan kawasan Hutan Lindung dan rumah bagi sekitar 10.000 jenis tanaman. Termasuk 17 genus endemis, lebih dari 200 spesies mamalia, dan 580 spesies burung dan 465 berdomisili dan 21 merupakan endemis. Di antara jenis mamalia, 22 adalah orang utan, yang tidak ditemukan di tempat lain di Indonesia dan 15 hanya terbatas ke wilayah Indonesia, termasuk Sumatra yaitu orang utan Sumatera.</p>\r\n', '2016-02-14 06:32:48', '0000-00-00 00:00:00', '696f7bd8b442eb5a680b0c3f30f7e15e.jpg', -0.3529335590552926, 100.45005798339844, 1),
(23, 5, 8, 392, 'Puik puik, Terompet Tradisional Sulawesi Selatan', 'puik-puik,-terompet-tradisional-sulawesi-selatan', '<p>Salah satu alat musik tradisional dari daerah Sulawesi Selatan yang hampir punah karena jarang dimainkan adalah puik puik. Puik puik merupakan alat musik tradisional yang berasal dari Sulawesi Selatan dan dimainkan dengan cara ditiup. Alat musik ini terbuat dari kayu besi yang dibuat kerucut dan pada bagian pangkalnya terdapat pipa sebagai penghasil suara.</p>\r\n\r\n<p>Bentuk dan suara yang dihasilkan dari alat musik tradisional Sulawesi Selatan ini secara umum hampir sama dengan alat musik tradisional serunai dari Minang dan selompret dari Betawi. Hanya saja, terdapat sedikit perbedaan pada pangkal dan ukiran yang ada pada bagian tubuh alat musik tersebut.</p>\r\n\r\n<p>Pangkal pada puik puik terbuat dari lempengan logam. pipa tersebut menghasilkan suara yang bersumber dari potongan daun lontar yang ditiup. Biasanya, pada puik puik terdapat dua bilah daun lontar, salah satunya menjadi cadangan jika daun lontar yang lain rusak. Karena menggunakan daun lontar, meniup alat musik tradisional ini perlu keahlian khusus. Jika meniup dengan sembarang, puik puik hanya akan menghasilkan suara yang aneh bahkan sama sekali tidak bersuara.</p>\r\n', '2016-02-14 06:37:22', '0000-00-00 00:00:00', '93b6e453b90b5d93d791019244b3b82f.jpg', -5.618491401536308, 119.65003967285156, 1),
(24, 5, 9, 431, 'Taman Laut Bunaken', 'taman-laut-bunaken', '<p><strong>Taman Laut Nasional Bunaken</strong> mempunyai area dengan luas 75.265 ha. Terdapat 5 pulau yang termasuk dalam taman nasional ini yaitu Pulau Naen, Pulau Bunaken, Pulau Manado Tua, Pulau Siladen, dan Pulau Mantehage beserta anak pulau yang di sekelilingnya. Dan jumlah penduduk yang ada di kelima pulau tersebut sekitar 21.000 orang.</p>\r\n\r\n<p>Secara geografis Pulau Bunaken termasuk dalam wilayah perairan &ldquo;<strong>Segi Tiga Emas</strong>&ldquo;. Lebih dari sekitar 3000-an spesies ikan berada di Bunaken. Wilayah &ldquo;Segi Tiga Emas&rdquo; adalah jalur perairan laut yang menghubungkan laut Filipina, laut Papua, dan laut Indonesia. Karena kekayaan alam yang berada di Bunaken, organisasi nasional dan internasional non pemerintah saling bekerja sama dalam menjalankan <em>konservasi terumbu karang dan mangrove</em>.</p>\r\n\r\n<p>Pemerintah Kota Manado mempunyai gagasan menjadikan Bunaken sebagai obyek wisata bahari dan wisata edukasi, karena pemerintah setempat melihat aktivitas konservasi alam laut di wilayah ini. Maka dari itu kawasan Pulau Bunaken pada 1991 silam, Menteri Kelautan meresmikannya sebagai <em>Taman Laut Nasional Bunaken</em>.</p>\r\n\r\n<h3>Obyek Wisata</h3>\r\n\r\n<p>Pada saat wisatawan berkunjung ke Manado, Sulawesi Utara, mereka tidak akan lupa untuk berkunjung ke Taman Laut Nasional Bunaken. Karena Bunaken merupakan obyek wisata yang paling populer.</p>\r\n\r\n<p>Bunaken memiliki luas kurang lebih sekitar&nbsp; 8 km&sup2; yang terletak di Teluk Manado. Di sekeliling Bunaken, ada taman laut yang juga bagian Taman Nasional Kelautan Manado Tua. Bunaken juga merupakan salah satu taman laut yang mempunyai <em>biodiversitas laut</em> tertinggi dunia. Oleh karena itu banyak para wisatawan yang datang berkunjung untuk melakukan aktivitas menyelam di kawasan Bunaken. Meski luas area mencapai 75.265 ha, lokasi menyelam sangat terbatas, hanya berada di sekitar pantai yang mengitari kelima pulau yang berada di kawasan Taman Laut Nasional Bunaken.</p>\r\n\r\n<p>Di Bunaken terdapat 40 lokasi penyelaman yang memiliki beraneka ragam terumbu karang dan ikan laut tropis yang indah. Wisatawan yang melakukan penyelaman di wilayah Bunaken akan disuguhi pemandangan 150 spesies ikan dari sekitar 58 genus ikan dan terumbu karang.</p>\r\n\r\n<p><a href="http://www.gocelebes.com/taman-laut-nasional-bunaken/">Taman Laut Nasional Bunaken</a> mempunyai 20 <em>dive spot</em> / titik penyelaman dengan berbagai kedalaman yang bervariasi. Dari 20 <em>dive spot</em>, 12 <em>dive spot</em> berada di Pulau Bunaken dan merupakan titik penyelaman yang paling sering dikunjungi oleh penyelam-penyelam baik lokal maupun mancanegara.</p>\r\n\r\n<p>Titik penyelaman Bunaken berderet dari tenggara hingga barat laut. Di kawasan ini terdapat dinding karang berukuran raksasa berbentuk vertikal dan melengkung. Dinding ini merupakan sumber makanan bagi ikan-ikan dan penghuni laut lainnya.</p>\r\n\r\n<h3>Lokasi</h3>\r\n\r\n<p>Bunaken terletak di perairan laut <a href="http://www.gocelebes.com/">Pulau Sulawesi</a>. Sebagian Taman Laut Nasional Bunaken berada di utara Teluk Manado dan merupakan bagian administrasi Kota Manado, <a href="http://www.gocelebes.com/category/area/sulawesi-utara/">Sulawesi Utara</a>.</p>\r\n\r\n<h3>Akses</h3>\r\n\r\n<p>Untuk mencapai Taman Laut Nasional Bunaken, wisatawan dapat menggunakan transportasi yang sudah tersedia yaitu perahu motor dari pantai Teluk Manado.</p>\r\n\r\n<h3>Harga Tiket Masuk</h3>\r\n\r\n<p>Harga tiket masuk ke Taman Laut Nasional Bunaken yaitu Rp. 50.000,-/orang untuk sekali masuk. Dan Rp. 150.000,-/orang yang berlaku 1 tahun. Jika Anda membeli tiket yang berlaku untuk 1 tahun, Anda akan diberi seperti lencana yang terbuat dari plastik sebagai pengganti tiket.</p>\r\n\r\n<h3>Fasilitas dan Akomodasi</h3>\r\n\r\n<p>Beberapa akomodasi hotel di kawasan Bunaken sudah tersedia dengan berbagai pilihan. Beberapa <em>hotel dekat Taman Nasional Bunaken</em> yang direkomendasikan yaitu <a href="http://www.gocelebes.com/hotel/BunakenIslandDiveResort" target="_blank">Bunaken Island Dive Resort</a> dan&nbsp;<a href="http://www.gocelebes.com/hotel/BunakenDiversSeaBreezeResort" target="_blank">Bunaken Divers Sea Breeze Resort</a>. Kedua hotel tersebut terletak di <strong>Pulau Bunaken<em>.</em></strong>&nbsp;Terdapat juga penyewaan selam beserta instrukturnya. Untuk instruktur selam sudah menguasai bahasa Perancis, Belanda, Inggris, dan Jerman.</p>\r\n', '2016-02-14 07:40:31', '2016-02-14 07:46:59', '6506f30a5ea16d633af14b46632d7b41.jpg', 1.7193311452243007, 124.75868225097656, 1),
(25, 5, 9, 447, 'Pulau Banda, Kepulauan Maluku', 'pulau-banda,-kepulauan-maluku', '<p>Kepulauan Banda terletak di Bandaneira, Kabupaten Maluku Tengah, Provinsi Maluku, Indonesia atau berjarak sekitar 132 kilometer sebelah tenggara kota <a href="http://www.utiket.com/id/tiket-pesawat/ke-ambon-amq.html">Ambon</a>. Kepulauan Banda sebenarnya terdiri dari tiga pulau besar dan tujuh pulau kecil. Panorama di kepulauan ini cukup indah, begitu juga dengan keindahan bawah lautnya.</p>\r\n\r\n<p>Menurut sejarah, Kepulauan Banda merupakan penghasil rempah-rempah khususnya pala yang terbesar di dunia. Maka tak heran bila sejak tahun 600-an, Bangsa <a href="http://www.utiket.com/id/tiket-pesawat/china.html">Tiongkok</a> sudah mulai berdagang di kepulauan ini. Lalu diikuti oleh Bangsa Moro, Bangsa Portugis, Inggris dan Belanda di tahun 1621.</p>\r\n\r\n<p>Pesona keindahan Kepulauan Banda memang cukup terkenal. Perairan lautnya yang cukup hangat serta keindahan bawah laut yang dimiliki menjadikannya sebagai salah satu surga bagi para penyelam dunia. Beberapa spot untuk menyelam pun tersedia di kepulauan ini. Beberapa tempat juga menyediakan jasa penyewaan perahu serta alat untuk menyelam. Namun saat musim hujan tiba yakni antara bulan Juli hingga September, hanya beberapa spot untuk menyelam saja yang boleh dikunjungi.</p>\r\n\r\n<h3>Fasilitas</h3>\r\n\r\n<p>Dari penginapan sederhana hingga hotel mewah bisa Anda dapatkan di tempat ini. Selain itu beberapa rumah makan juga menyediakan menu makanan tradisional yang bisa Anda cicipi. Tak kalah ketinggalan beberapa penjual cinderamata lokal juga bisa Anda dapatkan di sini.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>Akses <img alt="transport" src="http://www.utiket.com/images/bus-icon2.png" style="height:17px" /></h3>\r\n\r\n<p>Tempat terdekat untuk berkunjung ke tempat ini adalah dari kota Ambon. Setelah tiba di Bandara Pattimura Ambon, perjalanan bisa dilanjutkan dengan menggunakan pesawat kecil menuju ke Bandaneira yang mempunyai jadwal penerbangan seminggu sekali atau dua minggu sekali.</p>\r\n\r\n<p>Tidak ada penerbangan pulang-pergi sehingga penerbangan kembali juga harus melalui Bandaneira.</p>\r\n\r\n<p>Atau Anda bisa juga menggunakan kapal feri KM Ciremai yang beroperasi dua kali seminggu dari <a href="http://www.utiket.com/id/tiket-pesawat/ke-ambon-amq.html">Ambon</a> ke Bandaneira dengan waktu tempuh sekitar tujuh jam perjalanan.</p>\r\n', '2016-02-14 08:00:10', '0000-00-00 00:00:00', '8fc35c6b7a421fd22e48f9e05702e3b6.jpg', -3.674922140903226, 128.2042694091797, 1),
(26, 5, 9, 296, 'Keindahan Pulau Komodo', 'keindahan-pulau-komodo', '<p><strong>Pulau Komodo</strong> terletak di Kepulauan Nusa Tenggara. Pulau Komodo dikenal sebagai habitat asli hewan komodo. Pulau ini juga merupakan kawasan Taman Nasional Komodo . Pulau Komodo berada di sebelah barat Pulau Sumbawa, yang dipisahkan oleh Selat Sape, termasuk wilayah Kecamatan Komodo, Kabupaten Manggarai Barat, Provinsi Nusa Tenggara Timur, Indonesia. Pulau Komodo merupakan ujung paling barat Provinsi Nusa Tenggara Timur, berbatasan dengan Provinsi Nusa Tenggara Barat.</p>\r\n\r\n<p>Pulau Komodo, tempat hewan komodo hidup dan berkembang biak dengan baik. Hingga Agustus 2009, di pulau ini terdapat sekitar 1300 ekor komodo. Ditambah dengan pulau lain, seperti Pulau Rinca dan dan Pulau Gili Motang, jumlah keseluruhan mencapai sekitar 2500 ekor. diperkirakan sekitar 100 ekor komodo di Cagar Alam Wae Wuul di daratan Pulau Flores tapi tidak termasuk wilayah Taman Nasional Komodo.</p>\r\n\r\n<p>Selain komodo, pulau ini juga menyimpan eksotisme flora yang beragam, pohon kayu sepang yang oleh warga sekitar digunakan sebagi obat dan bahan pewarna pakaian, pohon nitak (sterculia oblongata) ini di yakini berguna sebagai obat dan bijinya gurih dan enak seperti kacang polong</p>\r\n\r\n<p>Pulau Komodo&nbsp; sangat&nbsp;mengesankan , menelusuri pulau yang eksotis, menyelami birunya laut, dan bermandikan cahaya mentari&nbsp;sambil melihat jejak-jejak kehidupan masa lalu yang terpelihara dan akan &nbsp;menjadi bagian dari ragam keindahan Indonesia.</p>\r\n\r\n<p><strong>Taman Nasional Komodo</strong><br />\r\nMeliputi Pulau Komodo, Rinca and Padar, ditambah pulau-pulau lain seluas 1.817 persegi adalah habitat asli komodo.<br />\r\nTaman Nasional Komodo didirikan pada 1980 untuk melindungi kelestarian komodo. Tak hanya hewan langka tersebut, Taman Nasional Komodo juga untuk melindungi berbagai macam tumbuh-tumbuhan dan satwa, termasuk binatang-binatang laut.<br />\r\nUNESCO mengakui sebagai Situs Warisan Dunia pada 1986. Bersama dua pulau besar lainnya, yakni Pulau Rinca dan Padar, Pulau Komodo dan beberapa pulau kecil di sekitarnya terus dipelihara sebagai habitat asli reptil yang dijuluki &ldquo;Komodo&rdquo;.</p>\r\n\r\n<p><strong>Sejarah</strong><br />\r\nKomodo yang dijuluki Komodo dragon atau <em>Varanus Komodoensis</em> atau nama lokal &ldquo;Ora&rdquo;, kadal raksasa ini menurut cerita dipublikasikan pertama kali pada tahun 1912 di harian nasional Hindia Belanda. Peter A. Ouwens, direktur Museum Zoologi di Bogor adalah orang yang telah mengenalkan komodo kepada dunia lewat papernya itu. Semenjak itu, ekspedisi dan penelitian terhadap spesies langka ini terus dilakukan, bahkan dikabarkan sempat menginspirasi Film KingKong di tahun 1933. Menyadari perlunya perlindungan terhadap Komodo di tengah aktivitas manusia di habitat aslinya itu, pada tahun 1915 Pemerintah Belanda mengeluarkan larangan perburuan dan pembunuhan komodo.</p>\r\n\r\n<p>Pulau Komodo masuk 28 finalis yang dipilih oleh sebuah panel ahli dari 77 nominasi. Sebelumnya ada 261 lokasi di dunia yang dicalonkan menjadi salah satu dari tujuh keajaiban dunia.<br />\r\nPulau Komodo, yang jadi andalan Indonesia dalam ajang New7Wonders of Nature punya keunggulan di banding lokasi-lokasi lainnya, apalagi kalau bukan komodo, satwa langka yang dipercaya sebagai &lsquo;dinosaurus terakhir di muka bumi&rsquo;.<br />\r\nKampanye ini diharapkan dapat meningkatkan pengetahuan mengenai alam, tak hanya yang ada di lingkungan kita tapi juga di seluruh dunia. serta didedikasikan untuk generasi di masa depan.</p>\r\n\r\n<p>Komodo yang dikenal dengan nama ilmiah Varanus komodoensis adalah spesies kadal terbesar di dunia yang hidup di pulau Komodo, Rinca, Flores, Gili Motang, dan Gili Dasami di Nusa Tenggara. Oleh penduduk setempat, komodo kerap disebut Ora.</p>\r\n\r\n<p>Termasuk anggota famili biawak Varanidae, dan klad Toxicofera, komodo merupakan kadal terbesar di dunia, dengan rata-rata panjang 2-3 m. Ukurannya yang besar ini berhubungan dengan gejala gigantisme pulau, yakni kecenderungan meraksasanya tubuh hewan-hewan tertentu yang hidup di pulau kecil terkait dengan tidak adanya mamalia karnivora di pulau tempat hidup komodo, dan laju metabolisme komodo yang kecil. Karena besar tubuhnya, kadal ini menduduki posisi predator puncak yang mendominasi ekosistem tempatnya hidup.</p>\r\n\r\n<p>Komodo ditemukan pada 1910. Tubuhnya yang besar dan reputasinya yang mengerikan membuat mereka populer di kebun binatang. Habitat komodo di alam bebas telah menyusut dan karenanya IUCN memasukkan komodo sebagai spesies yang rentan terhadap kepunahan. Biawak besar ini kini dilindungi di bawah peraturan pemerintah Indonesia dan sebuah taman nasional didirikan untuk melindungi mereka.</p>\r\n\r\n<p>Sebenarnya daya tarik Taman Nasional Komodo tidak semata-mata oleh kehadiran Komodo belaka. Seperti yang saya kutip dari situs resmi Kementerian Kehutanan yang mengelola situs Taman Nasional Komodo ini, panorama savana dan pemandangan bawah laut merupakan daya tarik pendukung yang potensial. Wisata bahari misalnya, memancing, snorkeling, diving, kano, bersampan. Sedangkan di daratan, potensi wisata alam yang bisa dilakukan adalah pengamatan satwa, hiking, dan camping. Mengunjungi Taman Nasional Komodo dan menikmati pemandangan alam yang sangat menawan merupakan pengalaman yang tidak akan pernah terlupakan.</p>\r\n', '2016-02-14 08:05:41', '0000-00-00 00:00:00', '6e0aa3cdb95f66cf6c569ed665c013b8.jpg', -8.596863250165027, 119.47219848632812, 1),
(27, 5, 9, 462, 'Kepulauan Raja Ampat', 'kepulauan-raja-ampat', '<p><strong>Raja Ampat </strong>merupakan sekelompok pulau yang berlokasi di Provinsi Papua Barat. Keindahan Pulau ini menjadikan Raja Ampat sebagai salah satu ikon <a href="http://indonesiaexplorer.net/wisata-pulau-bunaken-manado.html">wisata bawah laut</a> terpopuler di Indonesia. Terdapat satu hal yang menjadi ciri khas Raja Ampat yakni pemandangan bawah lautnya yang menakjubkan.</p>\r\n\r\n<p>Memang, sejak dahulu kawasan pulau raja ampat papua selalu menjadi daya tarik tersendri bagi para wisatawan domestik maupun mancanegara. Kebanyakan dari mereka sengaja mengunjungi wisata ini untuk menilik keindahan biota dan terumbu karang bawah laut yang menakjubkan. Bahkan banyak pihak yang menyatakan Kepulauan Raja Ampat memiliki banyak keanekaragaman spesies terbanyak dari seluruh pulau-pulau di dunia. Beberapa spesies biota laut langka yang belum pernah Anda jumpai bahkan dapat Anda temui disini.</p>\r\n\r\n<h2>Aktifitas Menarik di Wisata Raja Ampat</h2>\r\n\r\n<p>Jika Anda berminat mengunjungi Raja Ampat Papua, terdapat beragam aktivitas yang dapat Anda lakukan disana mulai dari diving, snorkeling, memancing, berlayar, naik perahu hingga wisata kuliner. Cukup asyik bukan?. Hal pertama yang wajib dilakukan saat mengunjungi pulau raja ampat &nbsp;adalah diving. Diving atau lebih dikenal dengan aktivitas menyelam tentu merupakan suatu aktivitas yang menantang dan menarik, apalagi jika ditemani oleh ikan pari, penyu dan juga terumbu karang warna-warni. Tentu hal ini akan menjadi pengalaman menyelam yang tak biasa. Terdapat sedikitnya 537 spesies koral dan juga 699 hewan tak bertulang belakang yang dapat Anda jumpai disini. Sementara untuk masalah keamanan, Anda tak perlu canggung sebab aktivitas diving Anda akan ditemani oleh ahlinya dan tentunya dengan peralatan menyelam yang sangat memadai sehingga keselamatan dan keamanannya terjamin.</p>\r\n\r\n<p>Wisata Raja Ampat merupakan salah satu tujuan <a href="http://indonesiaexplorer.net/">wisata Indonesia</a> yang patut dibanggakan, sebab tak hanya wisatawan domestik saja yang tertarik menyambanginya, namun wisatawan mancanegara atau yang lebih dikenal dengan &lsquo;turis&rsquo; juga berbondong-bondong mengunjunginya. Ada yang berniat mengunjungi Wisata di Raja Ampat hanya sekedar untuk merefreshkan diri (rekreasi) namun ada juga mengunjunginya dengan alasan edukasi. Beberapa pakar Sains dari luar negeri bahkan ikut terjun langsung dalam penyelaman tersebut. Mereka sengaja melakukan ini untuk keperluan pengembangan sains dan observasi tingkat lanjut.</p>\r\n\r\n<p>Tak hanya pemandangan bawah lautnya saja yang menakjubkan, raja ampat papua juga memiliki daya tarik lain yang tak kalah istimewa. Beberapa elemen juga memiliki andil yang besar dalam menyusun keindahan wisata ini diantaranya hutan yang lebat, gugusan batu kapur berwarna-warni, spesies tumbuhan langka dan juga sarang penyu di tepi pantai. Selain itu, Anda juga berkesempatan menikmati sajian kuliner khas Raja Ampat yang disuguhkan melalui restoran-restoran elit tepi pantai. Tentu suasana berbeda akan tergambar saat Anda menyantap hidangan sea food ditemani deburan ombak dan kura-kura yang menyapa.</p>\r\n\r\n<p>Oleh karena itu, tak ada salahnya jika Anda menyambangi Raja Ampat Papua sebagai destinasi utama Anda.</p>\r\n', '2016-02-14 08:10:57', '2016-02-14 13:11:15', 'ce323d0b7522e40b5ae11a87a2f6f5c1.jpg', -1.0912423911067874, 130.93505859375, 1);

-- --------------------------------------------------------

--
-- Table structure for table `article_comment`
--

CREATE TABLE `article_comment` (
  `comment_id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `reply_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `comment_sts` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `article_comment`
--

INSERT INTO `article_comment` (`comment_id`, `article_id`, `user_id`, `reply_id`, `comment`, `created_at`, `updated_at`, `latitude`, `longitude`, `comment_sts`) VALUES
(1, 3, 5, 0, 'Bagus gan, jadi pengen ikut belajar', '2016-02-13 15:02:08', '0000-00-00 00:00:00', 0, 0, 0),
(2, 3, 4, 0, 'Aman Gak Ya?', '2016-02-14 05:05:52', '0000-00-00 00:00:00', 0, 0, 1),
(3, 3, 4, 2, 'test', '2016-02-14 05:06:30', '0000-00-00 00:00:00', 0, 0, 1),
(4, 3, 5, 2, 'Tris coba praktekin tari pandet', '2016-02-14 05:06:48', '0000-00-00 00:00:00', 0, 0, 1),
(5, 3, 6, 0, 'Nice Article.', '2016-02-14 05:09:15', '0000-00-00 00:00:00', 0, 0, 1),
(6, 3, 3, 2, 'Apa ini rame2?', '2016-02-14 05:10:14', '0000-00-00 00:00:00', 0, 0, 1),
(7, 3, 3, 5, 'Makasih :D', '2016-02-14 05:15:28', '0000-00-00 00:00:00', 0, 0, 1),
(8, 14, 0, 0, 'Hola', '2016-02-14 05:52:44', '0000-00-00 00:00:00', 0, 0, 1),
(9, 19, 5, 0, 'Desain rumah terbaik. Unik saling berhadapan, sehingga membentuk panorama seperti pohon berayun', '2016-02-14 06:24:53', '0000-00-00 00:00:00', 0, 0, 1),
(10, 20, 5, 0, 'Kapan kapan pengen berkunjung kesana', '2016-02-14 06:27:51', '0000-00-00 00:00:00', 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `article_like`
--

CREATE TABLE `article_like` (
  `like_id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `like_sts` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `article_like`
--

INSERT INTO `article_like` (`like_id`, `article_id`, `user_id`, `like_sts`) VALUES
(1, 3, 3, 1),
(2, 3, 5, 1),
(3, 8, 5, 1),
(4, 3, 4, 1),
(5, 11, 5, 1),
(6, 18, 5, 1),
(7, 14, 5, 1),
(8, 17, 4, 1),
(9, 17, 5, 1),
(10, 16, 5, 1),
(11, 15, 5, 1),
(12, 19, 5, 1),
(13, 20, 5, 1),
(14, 24, 5, 1),
(15, 26, 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `article_view_log`
--

CREATE TABLE `article_view_log` (
  `view_id` int(11) NOT NULL,
  `article_id` int(11) DEFAULT NULL,
  `viewer_ip` varchar(45) DEFAULT NULL,
  `view_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `view_sts` int(11) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `article_view_log`
--

INSERT INTO `article_view_log` (`view_id`, `article_id`, `viewer_ip`, `view_at`, `view_sts`) VALUES
(1, 1, '127.0.0.1', '2016-02-13 14:33:25', 1),
(2, 2, '127.0.0.1', '2016-02-13 14:38:12', 1),
(3, 8, '127.0.0.1', '2016-02-13 14:57:38', 1),
(4, 9, '127.0.0.1', '2016-02-13 15:01:27', 1),
(5, 3, '127.0.0.1', '2016-02-13 15:01:42', 1),
(6, 9, '192.168.43.160', '2016-02-13 15:07:42', 1),
(7, 10, '127.0.0.1', '2016-02-13 15:24:07', 1),
(8, 3, '127.0.0.1', '2016-02-14 04:58:28', 1),
(9, 3, '192.168.0.8', '2016-02-14 04:59:01', 1),
(10, 3, '192.168.0.11', '2016-02-14 05:02:29', 1),
(11, 3, '192.168.0.22', '2016-02-14 05:03:05', 1),
(12, 10, '192.168.0.8', '2016-02-14 05:03:17', 1),
(13, 9, '192.168.0.11', '2016-02-14 05:03:33', 1),
(14, 9, '192.168.0.22', '2016-02-14 05:03:41', 1),
(15, 1, '192.168.0.11', '2016-02-14 05:03:41', 1),
(16, 8, '192.168.0.22', '2016-02-14 05:03:47', 1),
(17, 3, '192.168.0.6', '2016-02-14 05:08:51', 1),
(18, 9, '192.168.0.15', '2016-02-14 05:21:48', 1),
(19, 9, '192.168.0.8', '2016-02-14 05:21:55', 1),
(20, 11, '192.168.0.21', '2016-02-14 05:23:40', 1),
(21, 11, '192.168.0.22', '2016-02-14 05:24:12', 1),
(22, 10, '192.168.0.21', '2016-02-14 05:25:45', 1),
(23, 11, '192.168.0.11', '2016-02-14 05:37:07', 1),
(24, 14, '192.168.0.10', '2016-02-14 05:52:14', 1),
(25, 12, '192.168.0.10', '2016-02-14 05:53:22', 1),
(26, 14, '192.168.0.11', '2016-02-14 05:53:37', 1),
(27, 1, '192.168.0.10', '2016-02-14 05:54:50', 1),
(28, 3, '192.168.0.10', '2016-02-14 05:55:20', 1),
(29, 14, '192.168.0.8', '2016-02-14 05:57:26', 1),
(30, 18, '192.168.0.22', '2016-02-14 06:13:09', 1),
(31, 14, '192.168.0.22', '2016-02-14 06:13:39', 1),
(32, 17, '192.168.0.8', '2016-02-14 06:14:18', 1),
(33, 17, '192.168.0.22', '2016-02-14 06:14:43', 1),
(34, 16, '192.168.0.22', '2016-02-14 06:15:36', 1),
(35, 15, '192.168.0.22', '2016-02-14 06:15:58', 1),
(36, 18, '192.168.0.11', '2016-02-14 06:21:03', 1),
(37, 19, '192.168.0.22', '2016-02-14 06:23:50', 1),
(38, 20, '192.168.0.22', '2016-02-14 06:27:20', 1),
(39, 17, '192.168.0.15', '2016-02-14 07:15:41', 1),
(40, 24, '192.168.0.22', '2016-02-14 07:40:39', 1),
(41, 27, '127.0.0.1', '2016-02-14 13:11:45', 1),
(42, 1, '127.0.0.1', '2016-02-14 13:14:15', 1),
(43, 26, '192.168.0.22', '2016-02-14 14:09:11', 1),
(44, 18, '127.0.0.1', '2016-02-14 14:55:13', 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `sub_category_id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `category_desc` varchar(255) NOT NULL,
  `map_icon` varchar(50) NOT NULL,
  `category_sts` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `sub_category_id`, `category_name`, `category_desc`, `map_icon`, `category_sts`) VALUES
(2, 0, 'Kuliner', 'Kategori Kumpulan Kuliner Khas Indonesia', '5af493afee08b102b60ec827cb68e938.png', 1),
(3, 0, 'Tari Tradisional', 'Kategori Kumpulan Tari Tradisional', 'c638bb90632053d660ee7ee75b81503d.png', 1),
(4, 0, 'Pakaian', 'Kategori Kumpulan Pakaian Tradisional', '3d565ab4e548fc05fc39754726fe3ff7.png', 1),
(5, 0, 'Acara', 'Kumpulan Acara Keren Mengenalkan Budaya Indonesia', '8baa932b79c2b581073846b77c78877c.png', 1),
(6, 0, 'Belanja', 'Kategori Kumpulan Tempat Belanja Asik', '63ec54c17327ca093fe67c4c2df9314e.png', 1),
(7, 0, 'Seni Rupa', 'Kategori Kumpulan Seni Rupa', 'f93b1d51fb510076d640d784b91e4b5e.png', 1),
(8, 0, 'Alat Musik', 'Kategori Kumpulan Musik Tradisinal', '25fd0359c7044e90ac6f3b494555949b.png', 1),
(9, 0, 'Wisata', 'Kategori Kumpulan Wisata Di Indonesia', '722279903d7d88b9bae80f6f80930b0c.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `master_kokab`
--

CREATE TABLE `master_kokab` (
  `kota_id` int(10) NOT NULL,
  `kokab_nama` varchar(30) DEFAULT NULL,
  `provinsi_id` int(10) DEFAULT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_kokab`
--

INSERT INTO `master_kokab` (`kota_id`, `kokab_nama`, `provinsi_id`, `latitude`, `longitude`) VALUES
(1, 'Kabupaten Aceh Barat', 1, 4.4513201, 95.9055942),
(2, 'Kabupaten Aceh Barat Daya', 1, 3.8354528, 96.5870507),
(3, 'Kabupaten Aceh Besar', 1, 5.4041708, 95.1452202),
(4, 'Kabupaten Aceh Jaya', 1, 4.8109169, 95.1058215),
(5, 'Kabupaten Aceh Selatan', 1, 3.0700274, 96.8644197),
(6, 'Kabupaten Aceh Singkil', 1, 2.3736881, 97.6467631),
(7, 'Kabupaten Aceh Tamiang', 1, 4.2184441, 97.7212465),
(8, 'Kabupaten Aceh Tengah', 1, 4.5624552, 96.5346597),
(9, 'Kabupaten Aceh Tenggara', 1, 3.3378691, 97.0567735),
(10, 'Kabupaten Aceh Timur', 1, 4.7025774, 97.0787055),
(11, 'Kabupaten Aceh Utara', 1, 4.993586, 96.8704822),
(12, 'Kabupaten Bener Meriah', 1, 4.7747372, 96.7121871),
(13, 'Kabupaten Bireuen', 1, 5.0829675, 96.3442362),
(14, 'Kabupaten Gayo Luwes', 1, 3.9808591, 96.7630037),
(15, 'Kabupaten Nagan Raya', 1, 4.1763108, 95.9452486),
(16, 'Kabupaten Pidie', 1, 5.1131251, 95.5262538),
(17, 'Kabupaten Pidie Jaya', 1, 5.1047673, 96.0551257),
(18, 'Kabupaten Simeulue', 1, 2.6294101, 95.8244796),
(19, 'Kota Banda Aceh', 1, 5.5611009, 95.2936827),
(20, 'Kota Langsa', 1, 4.4823996, 97.9447656),
(21, 'Kota Lhokseumawe', 1, 5.1718862, 97.0375947),
(22, 'Kota Sabang', 1, 5.8785872, 95.3154171),
(23, 'Kota Subulussalam', 1, 2.7571931, 97.6614626),
(24, 'Kabupaten Asahan', 2, 2.846843, 99.2531331),
(25, 'Kabupaten Batubara', 2, 3.2304195, 99.1997971),
(26, 'Kabupaten Dairi', 2, 2.83535, 97.9745044),
(27, 'Kabupaten Deli Serdang', 2, 3.4798124, 98.1463516),
(28, 'Kabupaten Humbang Hasundutan', 2, 2.247815, 98.326923),
(29, 'Kabupaten Karo', 2, 3.0997941, 97.991477),
(30, 'Kabupaten Labuhan Batu', 2, 2.2697955, 99.4527028),
(31, 'Kabupaten Labuhanbatu Selatan', 2, 1.8337531, 99.7802906),
(32, 'Kabupaten Labuhanbatu Utara', 2, 2.4255101, 99.1737013),
(33, 'Kabupaten Langkat', 2, 3.7599596, 97.6712262),
(34, 'Kabupaten Mandailing Natal', 2, 0.7795677, 98.8282521),
(35, 'Kabupaten Nias', 2, 1.0843062, 97.5849171),
(36, 'Kabupaten Nias Barat', 2, 0.9823136, 97.3173477),
(37, 'Kabupaten Nias Selatan', 2, 0.7889851, 97.443509),
(38, 'Kabupaten Nias Utara', 2, 1.3101518, 97.0097151),
(39, 'Kabupaten Padang Lawas', 2, 1.1565281, 99.5212684),
(40, 'Kabupaten Padang Lawas Utara', 2, 1.6363894, 99.5653366),
(41, 'Kabupaten Pakpak Barat', 2, 2.5305432, 97.9883266),
(42, 'Kabupaten Samosir', 2, 2.556193, 98.4159667),
(43, 'Kabupaten Serdang Bedagai', 2, 3.3459036, 98.751674),
(44, 'Kabupaten Simalungun', 2, 2.9505773, 98.7690486),
(45, 'Kabupaten Tapanuli Selatan', 2, 1.5509943, 98.6187846),
(46, 'Kabupaten Tapanuli Tengah', 2, 1.8692451, 98.0356322),
(47, 'Kabupaten Tapanuli Utara', 2, 2.0150268, 98.7892471),
(48, 'Kabupaten Toba Samosir', 2, 2.385554, 98.968171),
(49, 'Kota Binjai', 2, 3.6223238, 98.4661842),
(50, 'Kota Gunung Sitoli', 2, 1.2990102, 97.5728733),
(51, 'Kota Medan', 2, 3.6422756, 98.5294042),
(52, 'Kota Padangsidempuan', 2, 1.367772, 99.2463008),
(53, 'Kota Pematang Siantar', 2, 2.964108, 99.0258127),
(54, 'Kota Sibolga', 2, 1.7308217, 98.7490407),
(55, 'Kota Tanjung Balai', 2, 2.9672569, 99.7529881),
(56, 'Kota Tebing Tinggi', 2, 3.3276017, 99.1519422),
(57, 'Kabupaten Agam', 3, -0.2531795, 99.873529),
(58, 'Kabupaten Dharmas Raya', 3, -1.2505837, 100.9587972),
(59, 'Kabupaten Kepulauan Mentawai', 3, -1.4180507, 98.3982651),
(60, 'Kabupaten Lima Puluh Kota', 3, 0.0290697, 100.2757209),
(61, 'Kabupaten Padang Pariaman', 3, -0.5660148, 99.929727),
(62, 'Kabupaten Pasaman', 3, 0.3998694, 99.486926),
(63, 'Kabupaten Pasaman Barat', 3, 0.1879592, 99.3275354),
(64, 'Kabupaten Pesisir Selatan', 3, -1.7176778, 100.2299682),
(65, 'Kabupaten Sijunjung', 3, -0.6487282, 100.8627109),
(66, 'Kabupaten Solok', 3, -0.9275229, 100.5576775),
(67, 'Kabupaten Solok Selatan', 3, -1.3644546, 100.9933761),
(68, 'Kabupaten Tanah Datar', 3, -0.4698171, 100.4427042),
(69, 'Kota Bukittinggi', 3, -0.3027606, 100.3544704),
(70, 'Kota Padang', 3, -0.9402077, 100.2511805),
(71, 'Kota Padang Panjang', 3, -0.4652866, 100.3778703),
(72, 'Kota Pariaman', 3, -0.6096365, 100.0662065),
(73, 'Kota Payakumbuh', 3, -0.2294954, 100.5977331),
(74, 'Kota Sawah Lunto', 3, -0.5935983, 100.7196195),
(75, 'Kota Solok', 3, -0.7899398, 100.6358087),
(76, 'Kabupaten Bengkalis', 4, 1.4296532, 102.1131921),
(77, 'Kabupaten Indragiri Hilir', 4, -0.293218, 102.0626103),
(78, 'Kabupaten Indragiri Hulu', 4, -0.4925354, 101.6872829),
(79, 'Kabupaten Kampar', 4, 0.3203257, 100.5008356),
(80, 'Kabupaten Kuantan Singingi', 4, -0.4937939, 100.9160535),
(81, 'Kabupaten Meranti', 4, 1.0561984, 102.4028335),
(82, 'Kabupaten Pelalawan', 4, 0.1585436, 101.875121),
(83, 'Kabupaten Rokan Hilir', 4, 1.8840499, 100.2448277),
(84, 'Kabupaten Rokan Hulu', 4, 0.8932172, 99.9300186),
(85, 'Kabupaten Siak', 4, 0.8279934, 101.3443164),
(86, 'Kota Dumai', 4, 1.6675746, 101.3414178),
(87, 'Kota Pekanbaru', 4, 0.5137908, 101.3711348),
(88, 'Kabupaten Bintan', 5, 0.9632598, 104.2902003),
(89, 'Kabupaten Karimun', 5, 0.8210802, 103.3491513),
(90, 'Kabupaten Kepulauan Anambas', 5, 2.9714647, 105.5788867),
(91, 'Kabupaten Lingga', 5, -0.1789028, 103.9491981),
(92, 'Kabupaten Natuna', 5, 3.9118739, 107.8493247),
(93, 'Kota Batam', 5, 0.8371559, 103.7729245),
(94, 'Kota Tanjung Pinang', 5, 0.9170618, 104.4495776),
(95, 'Kabupaten Bangka', 6, -1.9341775, 105.3813226),
(96, 'Kabupaten Bangka Barat', 6, -1.8404582, 105.166923),
(97, 'Kabupaten Bangka Selatan', 6, -2.8070104, 105.9489207),
(98, 'Kabupaten Bangka Tengah', 6, -2.4328024, 106.0185245),
(99, 'Kabupaten Belitung', 6, -2.9294905, 107.2713306),
(100, 'Kabupaten Belitung Timur', 6, -2.9546244, 107.7388045),
(101, 'Kota Pangkal Pinang', 6, -2.1159944, 106.0855071),
(102, 'Kabupaten Kerinci', 7, -2.0612088, 101.2027474),
(103, 'Kabupaten Merangin', 7, -2.2069545, 101.5256473),
(104, 'Kabupaten Sarolangun', 7, -2.3321941, 102.0821114),
(105, 'Kabupaten Batang Hari', 7, -1.8530324, 102.4278512),
(106, 'Kabupaten Muaro Jambi', 7, -1.704861, 103.2220762),
(107, 'Kabupaten Tanjung Jabung Timur', 7, -1.257656, 103.6216436),
(108, 'Kabupaten Tanjung Jabung Barat', 7, -1.0939494, 102.82993),
(109, 'Kabupaten Tebo', 7, -1.3951707, 101.7626817),
(110, 'Kabupaten Bungo', 7, -1.5157338, 101.6981324),
(111, 'Kota Jambi', 7, -1.610435, 103.5394873),
(112, 'Kota Sungai Penuh', 7, -2.0670521, 101.3765496),
(113, 'Kabupaten Bengkulu Selatan', 8, -4.358928, 102.9043486),
(114, 'Kabupaten Bengkulu Tengah', 8, -3.677786, 102.2698211),
(115, 'Kabupaten Bengkulu Utara', 8, -3.1850874, 101.4379019),
(116, 'Kabupaten Kaur', 8, -4.5892433, 103.1365522),
(117, 'Kabupaten Kepahiang', 8, -3.6475246, 102.4876847),
(118, 'Kabupaten Lebong', 8, -3.052542, 101.9335671),
(119, 'Kabupaten Mukomuko', 8, -2.730714, 100.8837933),
(120, 'Kabupaten Rejang Lebong', 8, -3.4381199, 102.4028945),
(121, 'Kabupaten Seluma', 8, -4.0802738, 102.3561196),
(122, 'Kota Bengkulu', 8, -3.8253431, 102.2345375),
(123, 'Kabupaten Banyuasin', 9, -2.3985758, 104.2561418),
(124, 'Kabupaten Empat Lawang', 9, -3.7170007, 102.6264416),
(125, 'Kabupaten Lahat', 9, -3.7890331, 103.5221407),
(126, 'Kabupaten Muara Enim', 9, -3.6968561, 103.4372316),
(127, 'Kabupaten Musi Banyu Asin', 9, -2.4957121, 103.2699033),
(128, 'Kabupaten Musi Rawas', 9, -3.1750454, 102.5073716),
(129, 'Kabupaten Ogan Ilir', 9, -3.4196202, 104.2798431),
(130, 'Kabupaten Ogan Komering Ilir', 9, -3.3271384, 104.2471044),
(131, 'Kabupaten Ogan Komering Ulu', 9, -4.1104645, 103.8070595),
(132, 'Kabupaten Ogan Komering Ulu Se', 9, -4.5676466, 103.6044186),
(133, 'Kabupaten Ogan Komering Ulu Ti', 9, -4.1061397, 103.9809097),
(134, 'Kota Lubuklinggau', 9, -3.299642, 102.8429571),
(135, 'Kota Pagar Alam', 9, -4.0435622, 103.1493593),
(136, 'Kota Palembang', 9, -2.9549663, 104.6929233),
(137, 'Kota Prabumulih', 9, -3.4164708, 104.2102468),
(138, 'Kabupaten Lampung Barat', 10, -5.3576306, 103.5558463),
(139, 'Kabupaten Lampung Selatan', 10, -5.6692392, 104.9080725),
(140, 'Kabupaten Lampung Tengah', 10, -4.8738994, 104.6217531),
(141, 'Kabupaten Lampung Timur', 10, -5.1202722, 105.0288682),
(142, 'Kabupaten Lampung Utara', 10, -4.8083317, 104.5305777),
(143, 'Kabupaten Mesuji', 10, -3.9740266, 105.1235727),
(144, 'Kabupaten Pesawaran', 10, -5.4820603, 104.8583242),
(145, 'Kabupaten Pringsewu', 10, -5.3690346, 104.6371643),
(146, 'Kabupaten Tanggamus', 10, -5.476117, 104.1441393),
(147, 'Kabupaten Tulang Bawang', 10, -4.3253612, 104.6008437),
(148, 'Kabupaten Tulang Bawang Barat', 10, -4.4328727, 104.8175952),
(149, 'Kabupaten Way Kanan', 10, -4.573243, 104.3972231),
(150, 'Kota Bandar Lampung', 10, -5.4285755, 105.2006968),
(151, 'Kota Metro', 10, -5.1210832, 105.2720469),
(152, 'Kabupaten Lebak', 11, -6.6432753, 105.9143854),
(153, 'Kabupaten Pandeglang', 11, -6.3255338, 106.0763301),
(154, 'Kabupaten Serang', 11, -6.1106524, 106.1240002),
(155, 'Kabupaten Tangerang', 11, -6.1818662, 106.3924983),
(156, 'Kota Cilegon', 11, -5.9782717, 105.8647583),
(157, 'Kota Serang', 11, -6.1002354, 106.0205012),
(158, 'Kota Tangerang', 11, -6.176683, 106.5799928),
(159, 'Kota Tangerang Selatan', 11, -6.2954984, 106.6382713),
(160, 'Kabupaten Adm. Kepulauan Serib', 12, -5.7985263, 106.4896885),
(161, 'Kota Jakarta Barat', 12, -6.160164, 106.6872183),
(162, 'Kota Jakarta Pusat', 12, -6.1823119, 106.8014449),
(163, 'Kota Jakarta Selatan', 12, -6.2841019, 106.7320382),
(164, 'Kota Jakarta Timur', 12, -6.2611435, 106.8349796),
(165, 'Kota Jakarta Utara', 12, -6.1358814, 106.7718593),
(166, 'Kabupaten Bandung', 13, -7.0633889, 107.3109654),
(167, 'Kabupaten Bandung Barat', 13, -6.9051823, 107.1740279),
(168, 'Kabupaten Bekasi', 13, -6.198337, 106.8527038),
(169, 'Kabupaten Bogor', 13, -6.545286, 106.5338924),
(170, 'Kabupaten Ciamis', 13, -7.311218, 108.1664184),
(171, 'Kabupaten Cianjur', 13, -6.8144748, 107.0896637),
(172, 'Kabupaten Cirebon', 13, -6.7612234, 108.30144),
(173, 'Kabupaten Garut', 13, -7.3432392, 107.4979474),
(174, 'Kabupaten Indramayu', 13, -6.4517064, 107.9145619),
(175, 'Kabupaten Karawang', 13, -6.2647322, 107.0835279),
(176, 'Kabupaten Kuningan', 13, -6.9793117, 108.4584227),
(177, 'Kabupaten Majalengka', 13, -6.8075794, 107.947522),
(178, 'Kabupaten Purwakarta', 13, -6.592378, 107.2711847),
(179, 'Kabupaten Subang', 13, -6.4952145, 107.4543832),
(180, 'Kabupaten Sukabumi', 13, -6.8494019, 106.8852638),
(181, 'Kabupaten Sumedang', 13, -6.8101098, 107.7001939),
(182, 'Kabupaten Tasikmalaya', 13, -7.3599766, 108.1612978),
(183, 'Kota Bandung', 13, -6.9034443, 107.5731163),
(184, 'Kota Banjar', 13, -7.3724812, 108.5011845),
(185, 'Kota Bekasi', 13, -6.2845209, 106.8332877),
(186, 'Kota Bogor', 13, -6.5951886, 106.7218508),
(187, 'Kota Cimahi', 13, -6.8862572, 107.523612),
(188, 'Kota Cirebon', 13, -6.7428633, 108.4839977),
(189, 'Kota Depok', 13, -6.3878438, 106.7477563),
(190, 'Kota Sukabumi', 13, -6.9370126, 106.8822902),
(191, 'Kota Tasikmalaya', 13, -7.3599766, 108.1627118),
(192, 'Kabupaten Banjarnegara', 14, -7.4152236, 109.6767252),
(193, 'Kabupaten Banyumas', 14, -7.4549134, 108.8883669),
(194, 'Kabupaten Batang', 14, -7.0319806, 109.7232953),
(195, 'Kabupaten Blora', 14, -7.1104688, 111.0880034),
(196, 'Kabupaten Boyolali', 14, -7.3870042, 110.3264329),
(197, 'Kabupaten Brebes', 14, -6.8651681, 108.9739003),
(198, 'Kabupaten Cilacap', 14, -7.7065127, 108.997478),
(199, 'Kabupaten Demak', 14, -6.922967, 110.3677474),
(200, 'Kabupaten Grobogan', 14, -7.1285816, 110.6139945),
(201, 'Kabupaten Jepara', 14, -6.5994955, 110.6448008),
(202, 'Kabupaten Karanganyar', 14, -7.6041974, 110.9390252),
(203, 'Kabupaten Kebumen', 14, -7.6439184, 109.4692359),
(204, 'Kabupaten Kendal', 14, -7.0203229, 109.858506),
(205, 'Kabupaten Klaten', 14, -7.7170146, 110.3728659),
(206, 'Kabupaten Kota Tegal', 14, -6.8697603, 109.0480636),
(207, 'Kabupaten Kudus', 14, -6.7976298, 110.7275456),
(208, 'Kabupaten Magelang', 14, -7.5135438, 110.1046809),
(209, 'Kabupaten Pati', 14, -6.7039976, 110.7568579),
(210, 'Kabupaten Pekalongan', 14, -7.0418597, 109.5009815),
(211, 'Kabupaten Pemalang', 14, -6.9190663, 109.3034844),
(212, 'Kabupaten Purbalingga', 14, -7.3273184, 109.2640055),
(213, 'Kabupaten Purworejo', 14, -7.72626, 109.9963347),
(214, 'Kabupaten Rembang', 14, -6.769835, 111.3223038),
(215, 'Kabupaten Semarang', 14, -7.2877063, 110.1764035),
(216, 'Kabupaten Sragen', 14, -7.3922546, 110.8220514),
(217, 'Kabupaten Sukoharjo', 14, -7.6828249, 110.6913449),
(218, 'Kabupaten Temanggung', 14, -7.318303, 110.1728449),
(219, 'Kabupaten Wonogiri', 14, -7.961814, 110.7565321),
(220, 'Kabupaten Wonosobo', 14, -7.399709, 109.6254745),
(221, 'Kota Magelang', 14, -7.4730525, 110.1825047),
(222, 'Kota Pekalongan', 14, -6.8959407, 109.6394837),
(223, 'Kota Salatiga', 14, -7.3262522, 110.4620657),
(224, 'Kota Semarang', 14, -7.0247702, 110.3488071),
(225, 'Kota Surakarta', 14, -7.5592076, 110.7837923),
(226, 'Kota Tegal', 14, -6.8705694, 109.0822198),
(227, 'Kabupaten Bantul', 15, -7.8981666, 110.2226675),
(228, 'Kabupaten Gunung Kidul', 15, -7.9930907, 110.3017285),
(229, 'Kabupaten Kulon Progo', 15, -7.8124709, 110.0040499),
(230, 'Kabupaten Sleman', 15, -7.6896953, 110.2411858),
(231, 'Kota Yogyakarta', 15, -7.803249, 110.3398252),
(232, 'Kabupaten Bangkalan', 16, -7.0462304, 112.7705223),
(233, 'Kabupaten Banyuwangi', 16, -8.3322203, 113.6609814),
(234, 'Kabupaten Blitar', 16, -8.1311936, 111.9370606),
(235, 'Kabupaten Bojonegoro', 16, -7.1560884, 111.8785383),
(236, 'Kabupaten Bondowoso', 16, -7.9451912, 113.6558211),
(237, 'Kabupaten Gresik', 16, -7.1649201, 112.6179177),
(238, 'Kabupaten Jember', 16, -8.1768084, 113.6559506),
(239, 'Kabupaten Jombang', 16, -7.5613896, 111.9790255),
(240, 'Kabupaten Kediri', 16, -7.801471, 111.8294131),
(241, 'Kabupaten Lamongan', 16, -7.1228671, 112.3766789),
(242, 'Kabupaten Lumajang', 16, -8.1239467, 112.859291),
(243, 'Kabupaten Madiun', 16, -7.6117285, 111.3684714),
(244, 'Kabupaten Magetan', 16, -7.6455211, 111.3169443),
(245, 'Kabupaten Malang', 16, -8.1124483, 112.3425846),
(246, 'Kabupaten Mojokerto', 16, -7.5410309, 112.221454),
(247, 'Kabupaten Nganjuk', 16, -7.5952477, 111.8690029),
(248, 'Kabupaten Ngawi', 16, -7.432469, 111.2547398),
(249, 'Kabupaten Pacitan', 16, -8.1018812, 111.0225618),
(250, 'Kabupaten Pamekasan', 16, -7.1548002, 113.4379637),
(251, 'Kabupaten Pasuruan', 16, -7.7504729, 112.557171),
(252, 'Kabupaten Ponorogo', 16, -7.8681201, 111.4556577),
(253, 'Kabupaten Probolinggo', 16, -7.8518553, 113.0054526),
(254, 'Kabupaten Sampang', 16, -7.0580471, 113.1217556),
(255, 'Kabupaten Sidoarjo', 16, -7.4510431, 112.6767485),
(256, 'Kabupaten Situbondo', 16, -7.7985024, 113.739697),
(257, 'Kabupaten Sumenep', 16, -7.0418194, 113.6261536),
(258, 'Kabupaten Trenggalek', 16, -8.0849423, 111.6750121),
(259, 'Kabupaten Tuban', 16, -6.8921193, 112.0053257),
(260, 'Kabupaten Tulungagung', 16, -8.0942783, 111.8887858),
(261, 'Kota Batu', 16, -7.8806984, 112.5047944),
(262, 'Kota Blitar', 16, -8.103902, 112.1347727),
(263, 'Kota Kediri', 16, -7.8424163, 111.9461463),
(264, 'Kota Madiun', 16, -7.6300605, 111.4930316),
(265, 'Kota Malang', 16, -7.9786395, 112.5617418),
(266, 'Kota Mojokerto', 16, -7.4714887, 112.4217213),
(267, 'Kota Pasuruan', 16, -7.6514349, 112.8875851),
(268, 'Kota Probolinggo', 16, -7.7723105, 113.1664442),
(269, 'Kota Surabaya', 16, -7.2756141, 112.6416432),
(270, 'Kabupaten Badung', 17, -8.545469, 114.8873633),
(271, 'Kabupaten Bangli', 17, -8.3339605, 115.2049048),
(272, 'Kabupaten Buleleng', 17, -8.2223736, 114.6644466),
(273, 'Kabupaten Gianyar', 17, -8.5122797, 115.266655),
(274, 'Kabupaten Jembrana', 17, -8.3131606, 114.5427693),
(275, 'Kabupaten Karang Asem', 17, -8.3585753, 115.4106704),
(276, 'Kabupaten Klungkung', 17, -8.7413291, 115.4586919),
(277, 'Kabupaten Tabanan', 17, -8.4385024, 114.9259623),
(278, 'Kota Denpasar', 17, -8.6726769, 115.1542216),
(279, 'Kabupaten Bima', 18, -8.4829659, 117.9899276),
(280, 'Kabupaten Dompu', 18, -8.4936124, 117.8365338),
(281, 'Kabupaten Lombok Barat', 18, -8.6582641, 115.7998032),
(282, 'Kabupaten Lombok Tengah', 18, -8.6821963, 115.9888637),
(283, 'Kabupaten Lombok Timur', 18, -8.5914972, 116.2857342),
(284, 'Kabupaten Lombok Utara', 18, -8.3454055, 116.1209626),
(285, 'Kabupaten Sumbawa', 18, -8.6163408, 117.0248882),
(286, 'Kabupaten Sumbawa Barat', 18, -8.8001224, 116.6227377),
(287, 'Kota Bima', 18, -8.4628875, 118.7098979),
(288, 'Kota Mataram', 18, -8.5877022, 116.0815803),
(289, 'Kabupaten Alor', 19, -8.3330119, 123.9146504),
(290, 'Kabupaten Belu', 19, -9.1757576, 124.7122797),
(291, 'Kabupaten Ende', 19, -8.6734214, 121.4300795),
(292, 'Kabupaten Flores Timur', 19, -8.3502166, 122.7138211),
(293, 'Kabupaten Kupang', 19, -9.811999, 123.1881726),
(294, 'Kabupaten Lembata', 19, -8.3779401, 123.2847562),
(295, 'Kabupaten Manggarai', 19, -8.578224, 120.1070877),
(296, 'Kabupaten Manggarai Barat', 19, -8.574063, 119.5911477),
(297, 'Kabupaten Manggarai Timur', 19, -8.5739499, 120.3360867),
(298, 'Kabupaten Nagekeo', 19, -8.6743768, 121.0215962),
(299, 'Kabupaten Ngada', 19, -8.6499861, 120.7171141),
(300, 'Kabupaten Rote Ndao', 19, -10.7191802, 122.7620591),
(301, 'Kabupaten Sabu Raijua', 19, -10.5304302, 121.6244009),
(302, 'Kabupaten Sikka', 19, -8.5758895, 122.0267096),
(303, 'Kabupaten Sumba Barat', 19, -9.5852365, 119.0630924),
(304, 'Kabupaten Sumba Barat Daya', 19, -9.543981, 119.0302349),
(305, 'Kabupaten Sumba Tengah', 19, -9.5936899, 119.3907708),
(306, 'Kabupaten Sumba Timur', 19, -9.8048779, 119.6995885),
(307, 'Kabupaten Timor Tengah Selatan', 19, -9.8229573, 124.1572318),
(308, 'Kabupaten Timor Tengah Utara', 19, -9.3404433, 124.1934768),
(309, 'Kota Kupang', 19, -10.1749491, 123.5796986),
(310, 'Kabupaten Bengkayang', 20, 1.0338604, 108.9287404),
(311, 'Kabupaten Kapuas Hulu', 20, 0.8344141, 111.7441499),
(312, 'Kabupaten Kayong Utara', 20, -1.2405761, 109.0147672),
(313, 'Kabupaten Ketapang', 20, -1.6820529, 109.4631153),
(314, 'Kabupaten Kubu Raya', 20, -0.3785024, 108.9500396),
(315, 'Kabupaten Landak', 20, 0.5108546, 109.1441601),
(316, 'Kabupaten Melawi', 20, -0.729705, 111.2266681),
(317, 'Kabupaten Pontianak', 20, 0.3437056, 108.8287165),
(318, 'Kabupaten Sambas', 20, 1.352272, 109.2868825),
(319, 'Kabupaten Sanggau', 20, 0.3509568, 109.3227408),
(320, 'Kabupaten Sekadau', 20, 0.015637, 110.8798482),
(321, 'Kabupaten Sintang', 20, 0.1809238, 110.9903032),
(322, 'Kota Pontianak', 20, -0.0353948, 109.2615093),
(323, 'Kota Singkawang', 20, 0.8835085, 108.8223063),
(324, 'Kabupaten Barito Selatan', 21, -1.9639341, 114.4543868),
(325, 'Kabupaten Barito Timur', 21, -2.0148034, 114.9001535),
(326, 'Kabupaten Barito Utara', 21, -0.7244443, 114.5915627),
(327, 'Kabupaten Gunung Mas', 21, -0.9868717, 112.9525321),
(328, 'Kabupaten Kapuas', 21, -1.9160555, 113.10033),
(329, 'Kabupaten Katingan', 21, -1.8738362, 111.8116244),
(330, 'Kabupaten Kotawaringin Barat', 21, -2.5557488, 110.556112),
(331, 'Kabupaten Kotawaringin Timur', 21, -2.2298822, 111.5560927),
(332, 'Kabupaten Lamandau', 21, -1.8072256, 110.7785478),
(333, 'Kabupaten Murung Raya', 21, -0.03668, 113.0500217),
(334, 'Kabupaten Pulang Pisau', 21, -2.5038313, 112.8333655),
(335, 'Kabupaten Seruyan', 21, -2.1303726, 111.0000381),
(336, 'Kabupaten Sukamara', 21, -2.5608541, 110.5063859),
(337, 'Kota Palangkaraya', 21, -2.2097019, 113.8666453),
(338, 'Kabupaten Balangan', 22, -2.2892882, 115.30387),
(339, 'Kabupaten Banjar', 22, -3.276417, 114.4943846),
(340, 'Kabupaten Barito Kuala', 22, -3.014001, 114.0432179),
(341, 'Kabupaten Hulu Sungai Selatan', 22, -2.718209, 114.9527145),
(342, 'Kabupaten Hulu Sungai Tengah', 22, -2.6115628, 115.2448971),
(343, 'Kabupaten Hulu Sungai Utara', 22, -2.4250247, 114.9921187),
(344, 'Kabupaten Kota Baru', 22, -3.5279212, 114.9083132),
(345, 'Kabupaten Tabalong', 22, -1.8371151, 114.8801267),
(346, 'Kabupaten Tanah Bumbu', 22, -3.4435991, 115.1070731),
(347, 'Kabupaten Tanah Laut', 22, -3.8422958, 114.6651285),
(348, 'Kabupaten Tapin', 22, -2.8668582, 114.8746966),
(349, 'Kota Banjar Baru', 22, -3.4593192, 114.7301834),
(350, 'Kota Banjarmasin', 22, -3.3172208, 114.5591928),
(351, 'Kabupaten Berau', 23, 1.8048609, 116.4786504),
(352, 'Kabupaten Bulongan', 23, 2.844588, 116.4273329),
(353, 'Kabupaten Kutai Barat', 23, -0.4712205, 115.3138645),
(354, 'Kabupaten Kutai Kartanegara', 23, 0.1965844, 115.4501458),
(355, 'Kabupaten Kutai Timur', 23, 0.9304082, 116.3771649),
(356, 'Kabupaten Malinau', 23, 2.5818089, 114.564425),
(357, 'Kabupaten Nunukan', 23, 3.9044857, 115.6229417),
(358, 'Kabupaten Paser', 23, -1.6896922, 115.5519731),
(359, 'Kabupaten Penajam Paser Utara', 23, -1.2001612, 116.365058),
(360, 'Kabupaten Tana Tidung', 23, 3.5492672, 116.981831),
(361, 'Kota Balikpapan', 23, -1.2446971, 116.8094588),
(362, 'Kota Bontang', 23, 0.118414, 117.4397769),
(363, 'Kota Samarinda', 23, -0.5014662, 117.0973125),
(364, 'Kota Tarakan', 23, 3.3551555, 117.5078331),
(365, 'Kabupaten Boalemo', 24, 0.6816043, 122.0879319),
(366, 'Kabupaten Bone Bolango', 24, 0.5562274, 123.0142306),
(367, 'Kabupaten Gorontalo', 24, 0.6989106, 122.3824536),
(368, 'Kabupaten Gorontalo Utara', 24, 0.8650062, 122.0679316),
(369, 'Kabupaten Pohuwato', 24, 0.6665795, 121.3676855),
(370, 'Kota Gorontalo', 24, 0.548922, 123.0050008),
(371, 'Kabupaten Bantaeng', 25, -5.4714972, 119.8376268),
(372, 'Kabupaten Barru', 25, -4.4336633, 119.4165012),
(373, 'Kabupaten Bone', 25, -4.6798055, 119.5165989),
(374, 'Kabupaten Bulukumba', 25, -5.4841077, 120.0771857),
(375, 'Kabupaten Enrekang', 25, -3.5320509, 119.6120686),
(376, 'Kabupaten Gowa', 25, -5.3300556, 119.4176902),
(377, 'Kabupaten Jeneponto', 25, -5.5446845, 119.5719317),
(378, 'Kabupaten Luwu', 25, -3.1664873, 119.58552),
(379, 'Kabupaten Luwu Timur', 25, -2.531974, 120.5704843),
(380, 'Kabupaten Luwu Utara', 25, -2.4064565, 119.5816148),
(381, 'Kabupaten Maros', 25, -4.965086, 119.4394342),
(382, 'Kabupaten Pangkajene Kepulauan', 25, -4.7633567, 119.2360821),
(383, 'Kabupaten Pinrang', 25, -3.648746, 119.3274776),
(384, 'Kabupaten Selayar', 25, -6.1185143, 120.2000433),
(385, 'Kabupaten Sidenreng Rappang', 25, -3.8080481, 119.7176854),
(386, 'Kabupaten Sinjai', 25, -5.2002914, 119.9916143),
(387, 'Kabupaten Soppeng', 25, -4.318537, 119.6209802),
(388, 'Kabupaten Takalar', 25, -5.41118, 119.2783702),
(389, 'Kabupaten Tana Toraja', 25, -3.0568655, 119.4269256),
(390, 'Kabupaten Toraja Utara', 25, -2.8990469, 119.600139),
(391, 'Kabupaten Wajo', 25, -3.9681887, 119.884241),
(392, 'Kota Makassar', 25, -5.1227566, 119.3912288),
(393, 'Kota Palopo', 25, -3.0149806, 120.1649644),
(394, 'Kota Pare-pare', 25, -4.0127934, 119.6031279),
(395, 'Kabupaten Bombana', 26, -4.6484067, 121.5275741),
(396, 'Kabupaten Buton', 26, -5.3894999, 122.4647822),
(397, 'Kabupaten Buton Utara', 26, -4.7574928, 122.7405632),
(398, 'Kabupaten Kolaka', 26, -4.0438054, 121.5957152),
(399, 'Kabupaten Kolaka Utara', 26, -3.2629566, 120.6000795),
(400, 'Kabupaten Konawe', 26, -3.5127428, 121.4816361),
(401, 'Kabupaten Konawe Selatan', 26, -4.2511468, 122.1291622),
(402, 'Kabupaten Konawe Utara', 26, -3.4194412, 121.3966615),
(403, 'Kabupaten Muna', 26, -4.872141, 122.2681877),
(404, 'Kabupaten Wakatobi', 26, -5.4243419, 123.5339737),
(405, 'Kota Bau-bau', 26, -5.4896869, 122.5713686),
(406, 'Kota Kendari', 26, -3.9850467, 122.4670036),
(407, 'Kabupaten Banggai', 27, -1.1160375, 122.0904791),
(408, 'Kabupaten Banggai Kepulauan', 27, -1.5974615, 123.4979731),
(409, 'Kabupaten Buol', 27, 0.9945335, 120.9733513),
(410, 'Kabupaten Donggala', 27, -0.3510062, 118.7035138),
(411, 'Kabupaten Morowali', 27, -2.7704902, 121.4701955),
(412, 'Kabupaten Parigi Moutong', 27, -0.240212, 119.5041853),
(413, 'Kabupaten Poso', 27, -1.6736439, 119.9692017),
(414, 'Kabupaten Sigi', 27, -1.4615206, 119.4422281),
(415, 'Kabupaten Tojo Una-Una', 27, -1.1815691, 120.9342601),
(416, 'Kabupaten Toli Toli', 27, 0.9811388, 120.3767415),
(417, 'Kota Palu', 27, -0.8193704, 119.7321613),
(418, 'Kabupaten Bolaang Mangondow', 28, 0.7211009, 123.7547384),
(419, 'Kabupaten Bolaang Mangondow Se', 28, 0.7261819, 124.2747072),
(420, 'Kabupaten Bolaang Mangondow Ti', 28, 0.7350465, 124.2819701),
(421, 'Kabupaten Bolaang Mangondow Ut', 28, 0.7605839, 123.145568),
(422, 'Kabupaten Kepulauan Sangihe', 28, 3.5524496, 125.3966232),
(423, 'Kabupaten Kepulauan Siau Tagul', 28, 2.3354501, 125.3697997),
(424, 'Kabupaten Kepulauan Talaud', 28, 4.1733495, 126.2657608),
(425, 'Kabupaten Minahasa', 28, 1.2411567, 124.5335434),
(426, 'Kabupaten Minahasa Selatan', 28, 1.0709632, 124.2481544),
(427, 'Kabupaten Minahasa Tenggara', 28, 0.982506, 124.6103097),
(428, 'Kabupaten Minahasa Utara', 28, 1.5783706, 124.678212),
(429, 'Kota Bitung', 28, 1.4666279, 125.1105992),
(430, 'Kota Kotamobagu', 28, 0.7350465, 124.2819701),
(431, 'Kota Manado', 28, 1.4827758, 124.7656207),
(432, 'Kota Tomohon', 28, 1.3305561, 124.8013252),
(433, 'Kabupaten Majene', 29, -3.2422884, 118.6558166),
(434, 'Kabupaten Mamasa', 29, -2.9963747, 119.043464),
(435, 'Kabupaten Mamuju', 29, -2.5516186, 118.7153883),
(436, 'Kabupaten Mamuju Utara', 29, -1.3436497, 119.0155577),
(437, 'Kabupaten Polewali Mandar', 29, -3.3026055, 118.9159071),
(438, 'Kabupaten Buru', 30, -3.3447227, 126.410502),
(439, 'Kabupaten Buru Selatan', 30, -3.508566, 126.0590356),
(440, 'Kabupaten Kepulauan Aru', 30, -6.1786746, 133.8565061),
(441, 'Kabupaten Maluku Barat Daya', 30, -7.8078753, 126.0024725),
(442, 'Kabupaten Maluku Tengah', 30, -3.2539821, 128.447643),
(443, 'Kabupaten Maluku Tenggara', 30, -5.6556143, 132.5295903),
(444, 'Kabupaten Maluku Tenggara Bara', 30, -7.4979807, 130.2605453),
(445, 'Kabupaten Seram Bagian Barat', 30, -3.1635654, 127.5563254),
(446, 'Kabupaten Seram Bagian Timur', 30, -3.5743014, 130.0912871),
(447, 'Kota Ambon', 30, -3.70476, 128.114753),
(448, 'Kota Tual', 30, -5.5462993, 132.5796302),
(449, 'Kabupaten Halmahera Barat', 31, 1.3630383, 127.0324623),
(450, 'Kabupaten Halmahera Selatan', 31, -0.7454942, 126.6914878),
(451, 'Kabupaten Halmahera Tengah', 31, 0.3888704, 127.8134891),
(452, 'Kabupaten Halmahera Timur', 31, 1.002776, 127.6641931),
(453, 'Kabupaten Halmahera Utara', 31, 1.5594309, 127.2743717),
(454, 'Kabupaten Kepulauan Sula', 31, -2.1145332, 125.6272485),
(455, 'Kabupaten Pulau Morotai', 31, 2.3127829, 128.165435),
(456, 'Kota Ternate', 31, 0.8334664, 127.2743813),
(457, 'Kota Tidore Kepulauan', 31, 0.3900103, 127.3991782),
(458, 'Kabupaten Fakfak', 32, -3.2005645, 132.2537525),
(459, 'Kabupaten Kaimana', 32, -3.5839776, 132.9083268),
(460, 'Kabupaten Manokwari', 32, -0.8643668, 134.0040573),
(461, 'Kabupaten Maybrat', 32, -1.42418, 132.0877825),
(462, 'Kabupaten Raja Ampat', 32, -0.9869582, 130.5048865),
(463, 'Kabupaten Sorong', 32, -1.0522183, 130.8322652),
(464, 'Kabupaten Sorong Selatan', 32, -1.6674677, 131.5580805),
(465, 'Kabupaten Tambrauw', 32, -0.7207549, 132.1968115),
(466, 'Kabupaten Teluk Bintuni', 32, -2.086636, 132.2008611),
(467, 'Kabupaten Teluk Wondama', 32, -2.6358536, 133.3611451),
(468, 'Kota Sorong', 32, -0.8930878, 131.1955136),
(469, 'Kabupaten Merauke', 33, -8.5283829, 140.4021858),
(470, 'Kabupaten Jayawijaya', 33, -4.1225284, 138.6973586),
(471, 'Kabupaten Nabire', 33, -3.2062558, 134.9359405),
(472, 'Kabupaten Kepulauan Yapen', 33, -1.7876645, 135.6728164),
(473, 'Kabupaten Biak Numfor', 33, -1.0127793, 135.9281355),
(474, 'Kabupaten Paniai', 33, -3.7576176, 136.0217852),
(475, 'Kabupaten Puncak Jaya', 33, -3.4894009, 137.5646865),
(476, 'Kabupaten Mimika', 33, -4.6290643, 135.2209465),
(477, 'Kabupaten Boven Digoel', 33, -6.1524141, 139.2006812),
(478, 'Kabupaten Mappi', 33, -6.2462936, 138.1950929),
(479, 'Kabupaten Asmat', 33, -5.5813267, 137.4757802),
(480, 'Kabupaten Yahukimo', 33, -4.3889628, 138.9828004),
(481, 'Kabupaten Pegunungan Bintang', 33, -4.494601, 139.9179395),
(482, 'Kabupaten Tolikara', 33, -3.4887324, 138.1232901),
(483, 'Kabupaten Sarmi', 33, -2.5321209, 137.9450026),
(484, 'Kabupaten Keerom', 33, -3.3265871, 140.0924763),
(485, 'Kabupaten Waropen', 33, -2.7294026, 136.1363554),
(486, 'Kabupaten Jayapura', 33, -3.036121, 139.4772119),
(487, 'Kabupaten Deiyai', 33, -4.15566, 136.1279526),
(488, 'Kabupaten Dogiyai', 33, -3.9992067, 135.0767627),
(489, 'Kabupaten Intan Jaya', 33, -3.4084463, 136.1820016),
(490, 'Kabupaten Lanny Jaya', 33, -3.9572259, 137.9229941),
(491, 'Kabupaten Mamberamo Raya', 33, -2.442752, 136.8556889),
(492, 'Kabupaten Mamberamo Tengah', 33, -3.6255828, 138.7523167),
(493, 'Kabupaten Nduga', 33, -4.4359436, 137.6582723),
(494, 'Kabupaten Puncak', 33, -3.5925285, 136.8562456),
(495, 'Kabupaten Supiori', 33, -0.7536552, 135.4420152),
(496, 'Kabupaten Yalimo', 33, -3.7850818, 139.1551847),
(497, 'Kota Jayapura', 33, -2.5651361, 140.6109865),
(498, 'Kabupaten Bulungan', 34, 2.844588, 116.4273329),
(499, 'Kabupaten Malinau', 34, 2.5818089, 114.564425),
(500, 'Kabupaten Nunukan', 34, 3.9044857, 115.6229417),
(501, 'Kabupaten Tana Tidung', 34, 3.5492672, 116.981831),
(502, 'Kota Tarakan', 34, 3.3551555, 117.5078331);

-- --------------------------------------------------------

--
-- Table structure for table `master_provinsi`
--

CREATE TABLE `master_provinsi` (
  `provinsi_id` int(10) NOT NULL,
  `provinsi_nama` varchar(30) DEFAULT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_provinsi`
--

INSERT INTO `master_provinsi` (`provinsi_id`, `provinsi_nama`, `latitude`, `longitude`) VALUES
(1, 'Nanggroe Aceh Darussalam', 4.0377715, 94.4036956),
(2, 'Sumatera Utara', 1.8298871, 96.4969341),
(3, 'Sumatera Barat', -1.5551568, 97.9996679),
(4, 'Riau', 0.8797709, 99.6738192),
(5, 'Kepulauan Riau', 3.911917, 107.8492232),
(6, 'Kepulauan Bangka-Belitung', -2.4588225, 105.856667),
(7, 'Jambi', -1.7525674, 101.6714758),
(8, 'Bengkulu', -3.8947435, 101.2714852),
(9, 'Sumatera Selatan', -3.2728874, 101.8369007),
(10, 'Lampung', -4.9448954, 103.7705251),
(11, 'Banten', -6.4457721, 105.3794887),
(12, 'DKI Jakarta', -6.229728, 106.6894288),
(13, 'Jawa Barat', -6.8665454, 106.4836045),
(14, 'Jawa Tengah', -7.3057673, 109.0019632),
(15, 'Daerah Istimewa Yogyakarta  ', -7.8729515, 110.1440815),
(16, 'Jawa Timur', -7.6250654, 111.3380471),
(17, 'Bali', -8.4556973, 114.5110188),
(18, 'Nusa Tenggara Barat', -8.593363, 116.4566613),
(19, 'Nusa Tenggara Timur', -9.5283233, 119.8146543),
(20, 'Kalimantan Barat', -0.5134655, 108.8657995),
(21, 'Kalimantan Tengah', -1.3832526, 111.0451899),
(22, 'Kalimantan Selatan', -3.0276032, 113.2056651),
(23, 'Kalimantan Timur', 0.0985018, 114.1858264),
(24, 'Gorontalo', 0.6736145, 121.2352269),
(25, 'Sulawesi Selatan', -4.8234002, 117.1941929),
(26, 'Sulawesi Tenggara', -4.492024, 120.4954027),
(27, 'Sulawesi Tengah', -1.1319261, 119.5694768),
(28, 'Sulawesi Utara', 2.5182257, 122.1784036),
(29, 'Sulawesi Barat', -2.2097945, 118.1936237),
(30, 'Maluku', -3.7523323, 126.7040367),
(31, 'Maluku Utara', 0.3888862, 125.7538866),
(32, 'Papua Barat', -1.6230767, 130.0337282),
(33, 'Papua', -4.8592687, 133.3082353),
(34, 'Kalimantan Utara', 2.7236865, 114.0299916);

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `notification_id` int(11) NOT NULL,
  `thread_id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_id_parent` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `notification_sts` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`notification_id`, `thread_id`, `article_id`, `user_id`, `user_id_parent`, `created_at`, `notification_sts`) VALUES
(1, 0, 3, 5, 3, '2016-02-14 05:06:48', 0),
(2, 1, 0, 3, 5, '2016-02-14 05:27:46', 0),
(3, 0, 3, 4, 3, '2016-02-14 05:06:30', 0),
(4, 0, 3, 6, 3, '2016-02-14 05:09:15', 0),
(5, 4, 0, 4, 5, '2016-02-14 05:12:46', 0),
(6, 0, 14, 0, 5, '2016-02-14 05:52:44', 0),
(7, 0, 20, 5, 4, '2016-02-14 06:27:51', 0),
(8, 6, 0, 5, 4, '2016-02-14 06:41:39', 1);

-- --------------------------------------------------------

--
-- Table structure for table `thread`
--

CREATE TABLE `thread` (
  `thread_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `kota_id` int(11) NOT NULL,
  `thread_title` varchar(255) NOT NULL,
  `thread_slug` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `thread_sts` int(11) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `thread`
--

INSERT INTO `thread` (`thread_id`, `category_id`, `user_id`, `kota_id`, `thread_title`, `thread_slug`, `created_at`, `thread_sts`) VALUES
(1, 2, 5, 178, 'Sate Maranggi Yang Mantap Di Mana Ya gan', 'sate-maranggi-yang-mantap-di-mana-ya-gan', '2016-02-13 15:06:34', 1),
(2, 5, 5, 88, 'Ada acara kebudayaan ga gan', 'ada-acara-kebudayaan-ga-gan', '2016-02-13 15:08:02', 1),
(3, 8, 5, 166, 'Pengen belajar angklung', 'pengen-belajar-angklung', '2016-02-13 15:10:53', 1),
(4, 5, 5, 231, 'Kasada Bromo apa sih', 'kasada-bromo-apa-sih', '2016-02-13 15:16:47', 1),
(5, 9, 4, 310, 'Butuh Kendaraan Buat Pergi Ke Pasar Apung', 'butuh-kendaraan-buat-pergi-ke-pasar-apung', '2016-02-14 06:35:02', 1),
(6, 9, 4, 69, 'Jalan Menuju Hutan Tropis', 'jalan-menuju-hutan-tropis', '2016-02-14 06:36:45', 1),
(7, 4, 4, 231, 'Mau Beli Baju 100% Indonesia Asli', 'mau-beli-baju-100%-indonesia-asli', '2016-02-14 10:06:11', 0);

-- --------------------------------------------------------

--
-- Table structure for table `thread_like`
--

CREATE TABLE `thread_like` (
  `like_id` int(11) NOT NULL,
  `thread_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `like_sts` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `thread_like`
--

INSERT INTO `thread_like` (`like_id`, `thread_id`, `user_id`, `like_sts`) VALUES
(1, 1, 5, 1),
(2, 4, 5, 1),
(3, 5, 5, 1),
(4, 6, 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `thread_post`
--

CREATE TABLE `thread_post` (
  `post_id` int(11) NOT NULL,
  `thread_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_sts` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `thread_post`
--

INSERT INTO `thread_post` (`post_id`, `thread_id`, `user_id`, `post_title`, `content`, `created_at`, `updated_at`, `post_sts`) VALUES
(1, 1, 5, 'Sate Maranggi Yang Mantap Di Mana Ya gan', '<p>sate maranggi yang mantap di mana gan</p>\r\n', '2016-02-13 15:06:34', '0000-00-00 00:00:00', 1),
(2, 2, 5, 'Ada acara kebudayaan ga gan', '<p>Saya lagi mau jalan2 sama keluarga dan mau ngenalkan anak ane tentang budaya</p>\r\n', '2016-02-13 15:08:02', '0000-00-00 00:00:00', 1),
(3, 3, 5, 'Pengen belajar angklung', '<p>Pengen belajar angklung dimana ya?</p>\r\n', '2016-02-13 15:10:53', '0000-00-00 00:00:00', 1),
(4, 4, 5, 'Kasada Bromo apa sih', '<p>Kasada Bromo apa sih gan?</p>\r\n', '2016-02-13 15:16:47', '0000-00-00 00:00:00', 1),
(5, 1, 3, '', '<p>di jonggol</p>\n', '2016-02-13 15:25:30', '0000-00-00 00:00:00', 1),
(6, 4, 4, 'Gk Tau', '<p>Gan Ampun Saya Gak Tau</p>\n', '2016-02-14 05:12:46', '0000-00-00 00:00:00', 1),
(7, 1, 5, 'sate', '<blockquote>Mengutip:abdillah98\n<p>di jonggol</p>\n</blockquote>\n\n<p>yang bener gan</p>\n', '2016-02-14 05:15:48', '2016-02-14 05:16:49', 1),
(8, 1, 3, '', '<blockquote>Mengutip:rizal123\n<blockquote>Mengutip:abdillah98\n<p>di jonggol</p>\n</blockquote>\n\n<p>yang bener gan</p>\n</blockquote>\n\n<p>Ih serius</p>\n', '2016-02-14 05:27:46', '0000-00-00 00:00:00', 1),
(9, 5, 4, 'Butuh Kendaraan Buat Pergi Ke Pasar Apung', '<p>Help Me Gan!</p>\r\n', '2016-02-14 06:35:02', '0000-00-00 00:00:00', 1),
(10, 6, 4, 'Jalan Menuju Hutan Tropis', '<p>Mau Kesana Tapi Gak Ada Kendaraan!</p>\r\n', '2016-02-14 06:36:45', '0000-00-00 00:00:00', 1),
(11, 7, 4, 'Mau Beli Baju 100% Indonesia Asli', '<p>Ada Yang Tau Gak Tempat Beli Baju Khas Indonesia!</p>\r\n', '2016-02-14 06:40:15', '0000-00-00 00:00:00', 0),
(12, 6, 5, '', '<p>Pergi rame rame gan. Biasanya kalo pergi bareng temen, masalah ditanggung bersama. Banyak Serunya!</p>\n', '2016-02-14 06:41:39', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `thread_view_log`
--

CREATE TABLE `thread_view_log` (
  `view_id` int(11) NOT NULL,
  `thread_id` int(11) DEFAULT NULL,
  `viewer_ip` varchar(45) DEFAULT NULL,
  `view_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `view_sts` int(11) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `thread_view_log`
--

INSERT INTO `thread_view_log` (`view_id`, `thread_id`, `viewer_ip`, `view_at`, `view_sts`) VALUES
(1, 1, '127.0.0.1', '2016-02-13 15:25:16', 1),
(2, 4, '127.0.0.1', '2016-02-14 04:34:42', 1),
(3, 3, '192.168.0.8', '2016-02-14 04:57:42', 1),
(4, 1, '192.168.0.22', '2016-02-14 05:01:10', 1),
(5, 1, '192.168.0.11', '2016-02-14 05:02:09', 1),
(6, 4, '192.168.0.8', '2016-02-14 05:11:51', 1),
(7, 4, '192.168.0.22', '2016-02-14 05:14:03', 1),
(8, 0, '192.168.0.22', '2016-02-14 05:16:50', 1),
(9, 1, '192.168.0.15', '2016-02-14 05:23:13', 1),
(10, 1, '192.168.0.21', '2016-02-14 05:24:23', 1),
(11, 4, '192.168.0.10', '2016-02-14 05:52:00', 1),
(12, 5, '192.168.0.22', '2016-02-14 06:40:04', 1),
(13, 6, '192.168.0.22', '2016-02-14 06:40:37', 1),
(14, 1, '127.0.0.1', '2016-02-14 14:47:13', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `group_id` enum('1','2') NOT NULL DEFAULT '2' COMMENT '1 = admin, 2 = user biasa',
  `name` varchar(100) NOT NULL,
  `username` varchar(32) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(32) NOT NULL,
  `user_photo_id` int(11) NOT NULL,
  `kota_id` int(11) NOT NULL,
  `registered_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_sts` int(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `group_id`, `name`, `username`, `email`, `password`, `user_photo_id`, `kota_id`, `registered_at`, `user_sts`) VALUES
(1, '1', 'Administrator', 'admin', 'admin@kesini.com', '21232f297a57a5a743894a0e4a801fc3', 0, 179, '2016-02-13 14:13:01', 1),
(3, '2', 'Ala Rai AbdiAllah', 'abdillah98', 'spensa2010alarai@gmail.com', '086c282bbbb00035e507c235ad2a2ad8', 1, 179, '2016-02-13 14:26:23', 1),
(4, '2', 'zingga nino', 'zingga', 'nino@yahoo.com', '36a302757418a76b09f55ac0e3c77812', 8, 98, '2016-02-13 14:41:37', 1),
(5, '2', 'Rizal Nur Shiddiq', 'rizal123', 'rizal123@gmail.com', 'ed6b202e937c3e83cfc9f9ea1aedbe0e', 3, 179, '2016-02-13 14:48:50', 1),
(6, '2', 'Nugraha', 'nugraha', 'e.nugraha18@gmail.com', 'bcdc641f827bd521d9b00d231b6a3b62', 5, 179, '2016-02-14 05:08:30', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users_photo`
--

CREATE TABLE `users_photo` (
  `user_photo_id` int(11) NOT NULL,
  `photo_name` varchar(255) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `photo_sts` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_photo`
--

INSERT INTO `users_photo` (`user_photo_id`, `photo_name`, `user_id`, `photo_sts`) VALUES
(1, 'e01fc77b00f6bc905670e3bead8d699d.jpg', 3, 0),
(2, '6ecfdfe1160bd5d12b8e604234a8c1c6.jpg', 5, 0),
(3, 'fa6d43bb26acc5c32c2037c39ddd9f3b.jpg', 5, 0),
(4, 'b6ba07dcfbe9f8f47436fd808b6807a1.jpg', 4, 0),
(5, '0144c3847cade1684d16aed6c2a90f1d.jpg', 6, 0),
(6, '0144c3847cade1684d16aed6c2a90f1d.jpg', 6, 0),
(7, '585f6c262d5220d9cab536eb0090c6d7.jpg', 4, 0),
(8, 'd43d20f397a965044cb559361a8dd6a0.jpg', 4, 0);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_article`
--
CREATE TABLE `v_article` (
`article_id` int(11)
,`user_id` int(11)
,`category_id` int(11)
,`kota_id` int(11)
,`article_title` varchar(100)
,`article_slug` varchar(255)
,`article_content` text
,`created_at` timestamp
,`updated_at` timestamp
,`article_pict` varchar(255)
,`latitude` double
,`longitude` double
,`article_sts` int(11)
,`category_name` varchar(100)
,`map_icon` varchar(50)
,`name` varchar(100)
,`username` varchar(32)
,`user_photo_id` int(11)
,`photo_name` varchar(255)
,`kokab_nama` varchar(30)
,`provinsi_nama` varchar(30)
,`provinsi_id` int(10)
,`jumlahLike` bigint(21)
,`jumlahViewer` bigint(21)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_thread`
--
CREATE TABLE `v_thread` (
`thread_id` int(11)
,`category_id` int(11)
,`user_id` int(11)
,`thread_title` varchar(255)
,`kota_id` int(11)
,`thread_slug` varchar(255)
,`created_at` timestamp
,`thread_sts` int(11)
,`category_name` varchar(100)
,`name` varchar(100)
,`username` varchar(32)
,`registered_at` timestamp
,`user_photo_id` int(11)
,`photo_name` varchar(255)
,`kokab_nama` varchar(30)
,`provinsi_nama` varchar(30)
,`provinsi_id` int(10)
,`jumlahViewer` bigint(21)
,`jumlahLike` bigint(21)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_thread_post`
--
CREATE TABLE `v_thread_post` (
`post_id` int(11)
,`thread_id` int(11)
,`user_id` int(11)
,`post_title` varchar(255)
,`content` text
,`created_at` timestamp
,`updated_at` timestamp
,`post_sts` int(11)
,`thread_slug` varchar(255)
,`name` varchar(100)
,`username` varchar(32)
,`registered_at` timestamp
,`user_photo_id` int(11)
,`photo_name` varchar(255)
);

-- --------------------------------------------------------

--
-- Structure for view `v_article`
--
DROP TABLE IF EXISTS `v_article`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_article`  AS  select `a`.`article_id` AS `article_id`,`a`.`user_id` AS `user_id`,`a`.`category_id` AS `category_id`,`a`.`kota_id` AS `kota_id`,`a`.`article_title` AS `article_title`,`a`.`article_slug` AS `article_slug`,`a`.`article_content` AS `article_content`,`a`.`created_at` AS `created_at`,`a`.`updated_at` AS `updated_at`,`a`.`article_pict` AS `article_pict`,`a`.`latitude` AS `latitude`,`a`.`longitude` AS `longitude`,`a`.`article_sts` AS `article_sts`,`b`.`category_name` AS `category_name`,`b`.`map_icon` AS `map_icon`,`c`.`name` AS `name`,`c`.`username` AS `username`,`c`.`user_photo_id` AS `user_photo_id`,`d`.`photo_name` AS `photo_name`,`e`.`kokab_nama` AS `kokab_nama`,`f`.`provinsi_nama` AS `provinsi_nama`,`f`.`provinsi_id` AS `provinsi_id`,(select count(`g`.`article_id`) from `article_like` `g` where (`a`.`article_id` = `g`.`article_id`)) AS `jumlahLike`,(select count(`h`.`article_id`) from `article_view_log` `h` where (`a`.`article_id` = `h`.`article_id`)) AS `jumlahViewer` from (((((`article` `a` left join `category` `b` on((`a`.`category_id` = `b`.`category_id`))) left join `users` `c` on((`a`.`user_id` = `c`.`user_id`))) left join `users_photo` `d` on((`c`.`user_photo_id` = `d`.`user_photo_id`))) left join `master_kokab` `e` on((`e`.`kota_id` = `a`.`kota_id`))) left join `master_provinsi` `f` on((`e`.`provinsi_id` = `f`.`provinsi_id`))) ;

-- --------------------------------------------------------

--
-- Structure for view `v_thread`
--
DROP TABLE IF EXISTS `v_thread`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_thread`  AS  select `a`.`thread_id` AS `thread_id`,`a`.`category_id` AS `category_id`,`a`.`user_id` AS `user_id`,`a`.`thread_title` AS `thread_title`,`a`.`kota_id` AS `kota_id`,`a`.`thread_slug` AS `thread_slug`,`a`.`created_at` AS `created_at`,`a`.`thread_sts` AS `thread_sts`,`b`.`category_name` AS `category_name`,`c`.`name` AS `name`,`c`.`username` AS `username`,`c`.`registered_at` AS `registered_at`,`c`.`user_photo_id` AS `user_photo_id`,`d`.`photo_name` AS `photo_name`,`e`.`kokab_nama` AS `kokab_nama`,`f`.`provinsi_nama` AS `provinsi_nama`,`f`.`provinsi_id` AS `provinsi_id`,(select count(`g`.`thread_id`) from `thread_view_log` `g` where (`g`.`thread_id` = `a`.`thread_id`)) AS `jumlahViewer`,(select count(`h`.`thread_id`) from `thread_like` `h` where (`h`.`thread_id` = `a`.`thread_id`)) AS `jumlahLike` from (((((`thread` `a` left join `category` `b` on((`a`.`category_id` = `b`.`category_id`))) left join `users` `c` on((`a`.`user_id` = `c`.`user_id`))) left join `users_photo` `d` on((`c`.`user_photo_id` = `d`.`user_photo_id`))) left join `master_kokab` `e` on((`e`.`kota_id` = `a`.`kota_id`))) left join `master_provinsi` `f` on((`e`.`provinsi_id` = `f`.`provinsi_id`))) ;

-- --------------------------------------------------------

--
-- Structure for view `v_thread_post`
--
DROP TABLE IF EXISTS `v_thread_post`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_thread_post`  AS  select `a`.`post_id` AS `post_id`,`a`.`thread_id` AS `thread_id`,`a`.`user_id` AS `user_id`,`a`.`post_title` AS `post_title`,`a`.`content` AS `content`,`a`.`created_at` AS `created_at`,`a`.`updated_at` AS `updated_at`,`a`.`post_sts` AS `post_sts`,`b`.`thread_slug` AS `thread_slug`,`c`.`name` AS `name`,`c`.`username` AS `username`,`c`.`registered_at` AS `registered_at`,`c`.`user_photo_id` AS `user_photo_id`,`d`.`photo_name` AS `photo_name` from (((`thread_post` `a` left join `thread` `b` on((`a`.`thread_id` = `b`.`thread_id`))) left join `users` `c` on((`a`.`user_id` = `c`.`user_id`))) left join `users_photo` `d` on((`c`.`user_photo_id` = `d`.`user_photo_id`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`article_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `article_comment`
--
ALTER TABLE `article_comment`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `article_id` (`article_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `article_like`
--
ALTER TABLE `article_like`
  ADD PRIMARY KEY (`like_id`),
  ADD KEY `article_id` (`article_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `article_view_log`
--
ALTER TABLE `article_view_log`
  ADD PRIMARY KEY (`view_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `master_kokab`
--
ALTER TABLE `master_kokab`
  ADD PRIMARY KEY (`kota_id`),
  ADD KEY `pro_kota` (`provinsi_id`);

--
-- Indexes for table `master_provinsi`
--
ALTER TABLE `master_provinsi`
  ADD PRIMARY KEY (`provinsi_id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`notification_id`),
  ADD KEY `thread_id` (`thread_id`),
  ADD KEY `article_id` (`article_id`);

--
-- Indexes for table `thread`
--
ALTER TABLE `thread`
  ADD PRIMARY KEY (`thread_id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `kota_id` (`kota_id`);

--
-- Indexes for table `thread_like`
--
ALTER TABLE `thread_like`
  ADD PRIMARY KEY (`like_id`);

--
-- Indexes for table `thread_post`
--
ALTER TABLE `thread_post`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `thread_id` (`thread_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `thread_view_log`
--
ALTER TABLE `thread_view_log`
  ADD PRIMARY KEY (`view_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `kota_id` (`kota_id`);

--
-- Indexes for table `users_photo`
--
ALTER TABLE `users_photo`
  ADD PRIMARY KEY (`user_photo_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `article_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `article_comment`
--
ALTER TABLE `article_comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `article_like`
--
ALTER TABLE `article_like`
  MODIFY `like_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `article_view_log`
--
ALTER TABLE `article_view_log`
  MODIFY `view_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `master_kokab`
--
ALTER TABLE `master_kokab`
  MODIFY `kota_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=503;
--
-- AUTO_INCREMENT for table `master_provinsi`
--
ALTER TABLE `master_provinsi`
  MODIFY `provinsi_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `notification_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `thread`
--
ALTER TABLE `thread`
  MODIFY `thread_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `thread_like`
--
ALTER TABLE `thread_like`
  MODIFY `like_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `thread_post`
--
ALTER TABLE `thread_post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `thread_view_log`
--
ALTER TABLE `thread_view_log`
  MODIFY `view_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users_photo`
--
ALTER TABLE `users_photo`
  MODIFY `user_photo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `master_kokab`
--
ALTER TABLE `master_kokab`
  ADD CONSTRAINT `pro_kota` FOREIGN KEY (`provinsi_id`) REFERENCES `master_provinsi` (`provinsi_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
