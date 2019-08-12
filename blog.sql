-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2019 at 12:50 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--
CREATE DATABASE IF NOT EXISTS `blog` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `blog`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(60) NOT NULL,
  `parola` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `parola`) VALUES
(1, 'admin@admin.com', '$2y$10$cg/CIzJo3R3LvAlIb95N.uqCh.1g37P61TG6e0TmREDQabqHe34rK');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(60) NOT NULL,
  `description` varchar(320) NOT NULL,
  `keywords` varchar(300) NOT NULL,
  `author` varchar(100) NOT NULL,
  `hakkimda` text NOT NULL,
  `deneyim` text NOT NULL,
  `egitim` text NOT NULL,
  `yetenek` text NOT NULL,
  `proje` text NOT NULL,
  `etkinlik` text NOT NULL,
  `linkedin` varchar(50) NOT NULL,
  `twitter` varchar(50) NOT NULL,
  `instagram` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `description`, `keywords`, `author`, `hakkimda`, `deneyim`, `egitim`, `yetenek`, `proje`, `etkinlik`, `linkedin`, `twitter`, `instagram`, `email`) VALUES
(1, 'Mustafa Dalğa Kişisel Web Sitesi', 'Mustafa Dalğa Kişisel Web Sitesi', 'Yazılım Geliştirici,Siber güvenlik,CSS,HTML,HTML5,PHP,Python,Jquery,Ajax', 'Mustafa Dalğa', '<p style=\"text-align:center\">Ben kendimi &ouml;ğrenmeye adamış , bilgiye değer veren ve bununla birlikte bilgiye a&ccedil; bir &ouml;ğrenciyim. &Uuml;niversiteye başladığım yıldan beri yazılım alanında &ouml;ğrenmek , kendimi geliştirmek ve deneyim kazanmak i&ccedil;in s&uuml;rekli bir koşuşturmanın i&ccedil;erisindeyim.&Uuml;niversite okurken de part-time olarak 2 firmada &ccedil;alışarak deneyim kazanma şansı yakaladım. Şimdi ise edindiğim tecr&uuml;beyi ve araştırma yeteneklerimi kullanarak , &quot;Kendi kendini yetiştir&quot; felsefesi ile kendimi ilerletiyorum. Asıl hedefim siber g&uuml;venliğin bir alanında uzmanlaşıp bu alanda &ccedil;alışmaktır. G&uuml;venlik ile ara&ccedil;lar geliştirmeyi istediğim i&ccedil;in ve aynı zamanda Python dilini de sevdiğim i&ccedil;in şuan Python dili &uuml;zerinde &ccedil;alışıyorum. &Ouml;ğrendiklerimle yaptığım uygulamaları da github adresimde yayınlıyorum.</p>\r\n', '<ol>\r\n	<li>\r\n	<p>Front End Developer &nbsp; &nbsp; - Private Procare Sağlık Hizmetleri</p>\r\n	</li>\r\n	<li>\r\n	<p>Front End Developer &nbsp; &nbsp;- Vizyon Dijital</p>\r\n	</li>\r\n	<li>\r\n	<p>Bilgisayar Teknisyeni &nbsp;- Teknoas Bilgisayar&nbsp;</p>\r\n	</li>\r\n	<li>\r\n	<p>Bilgisayar Teknisyeni &nbsp;- Teknoas Bilgisayar</p>\r\n	</li>\r\n</ol>\r\n', '<ol>\r\n	<li>\r\n	<p>Ağ G&uuml;venliği ve Sızma Testi - Akademik Bilişim</p>\r\n	</li>\r\n	<li>\r\n	<p>Kriptolojiye Giriş - Cezeri Siber G&uuml;venlik Akademisi</p>\r\n	</li>\r\n	<li>\r\n	<p>Web Uygulama G&uuml;venliği Eğitimi - BUSiber &amp;&amp; Netsparker</p>\r\n	</li>\r\n	<li>\r\n	<p>Uygulamalı Sızma Testi Eğitimi - BUSiber &amp;&amp; Btrisk</p>\r\n	</li>\r\n	<li>\r\n	<p>BGA Security Sızma Testi - Boğazi&ccedil;i &Uuml;niversitesi Compec Kul&uuml;b&uuml;</p>\r\n	</li>\r\n	<li>\r\n	<p>Web G&uuml;venliği ve Sızma Teknikleri - Cezeri Siber G&uuml;venlik Akademisi</p>\r\n	</li>\r\n	<li>\r\n	<p>Java Programlama Dili Eğitimi - Boğazi&ccedil;i &Uuml;niversitesi Compec Kul&uuml;b&uuml;</p>\r\n	</li>\r\n	<li>\r\n	<p>C# Programlama Dili Eğitimi - Yıldız Teknik &Uuml;niversitesi E-biltek Kul&uuml;b&uuml;</p>\r\n	</li>\r\n	<li>\r\n	<p>İngilizce A1 &amp;&amp; A2 - İsmek</p>\r\n	</li>\r\n</ol>\r\n', '<ol>\r\n	<li>\r\n	<p>PHP</p>\r\n	</li>\r\n	<li>\r\n	<p>Python</p>\r\n	</li>\r\n	<li>\r\n	<p>C#</p>\r\n	</li>\r\n	<li>\r\n	<p>Powershell</p>\r\n	</li>\r\n	<li>\r\n	<p>HTML - HTML5</p>\r\n	</li>\r\n	<li>\r\n	<p>CSS-CSS3</p>\r\n	</li>\r\n	<li>\r\n	<p>Jquery</p>\r\n	</li>\r\n	<li>\r\n	<p>Bootstrap</p>\r\n	</li>\r\n</ol>\r\n', '<ol>\r\n	<li>\r\n	<p><strong>Projelerimin depolandığı github hesabım: <a href=\"https://github.com/mustafadalga\">https://github.com/mustafadalga</a></strong></p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Fotoğraflarını &ccedil;ektiğim hayvan ve doğa fotoğraflarını paylaştığım instagram hesabım: <a href=\"https://www.instagram.com/dogaklani\">https://www.instagram.com/dogaklani</a></strong></p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Front End Developer olarak , yapımında&nbsp;g&ouml;rev aldığım web sitesi: <a href=\"http://www.privateprocare.com\">http://www.privateprocare.com</a></strong></p>\r\n	</li>\r\n</ol>\r\n', '<ol>\r\n	<li>\r\n	<p>İstanbul Şehir &Uuml;niversitesi - Deep Web/Underground</p>\r\n	</li>\r\n	<li>\r\n	<p>İstanbul &Uuml;niversitesi - Bilgi G&uuml;venliği Konferansı &#39;17</p>\r\n	</li>\r\n	<li>\r\n	<p>İstanbul Şehir &Uuml;niversitesi - T&uuml;rkiye&#39;de Siber G&uuml;venlik ve Bilgi G&uuml;venliği</p>\r\n	</li>\r\n	<li>\r\n	<p>&Uuml;sk&uuml;dar &Uuml;niversitesi - Bilgi G&uuml;venliği ve Bilişim Su&ccedil;ları</p>\r\n	</li>\r\n	<li>\r\n	<p>Boğazi&ccedil;i &Uuml;niversitesi - Bilişim &Ouml;d&uuml;lleri T&ouml;reni 2016</p>\r\n	</li>\r\n	<li>\r\n	<p>Bah&ccedil;eşehir &Uuml;niversitesi - İstSec (İstanbul Bilgi G&uuml;venliği Konferansı)</p>\r\n	</li>\r\n	<li>\r\n	<p>Nopcon Security Conference &#39;17</p>\r\n	</li>\r\n	<li>\r\n	<p>İstanbul Şehir &Uuml;niversitesi-OWASP T&uuml;rkiye Uygulama G&uuml;venliği G&uuml;nleri</p>\r\n	</li>\r\n	<li>\r\n	<p>Yıldız Teknik &Uuml;niversitesi - Edutech&#39;17 BGA &quot;T&uuml;rkiye&#39;de Siber G&uuml;venlik ve Beyaz Şapkalı Hackerlik&quot; konferansı</p>\r\n	</li>\r\n</ol>\r\n', 'https://www.linkedin.com/in/mustafadalga/', 'https://twitter.com/mustafadalgaa', 'https://www.instagram.com/mustafadalgaa', 'mustafadalgaa@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
