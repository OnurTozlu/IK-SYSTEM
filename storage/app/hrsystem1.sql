-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 23 Ağu 2023, 20:06:23
-- Sunucu sürümü: 10.4.27-MariaDB
-- PHP Sürümü: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `hrsystem1`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `company`
--

CREATE TABLE `company` (
  `cname` varchar(255) NOT NULL,
  `caddress` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `logo` longblob NOT NULL,
  `web` varchar(255) NOT NULL,
  `id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `company`
--

INSERT INTO `company` (`cname`, `caddress`, `email`, `phone`, `logo`, `web`, `id`) VALUES
('ipera', 'İncili Sokak 73/19 Etlik Keçiören Ankara', 'sa@asdasd.com', '05310110996', 0x696e6469722e706e67, '123213.com', 13),
('qweqrqeewrwer', 'İncili Sokak 73/19 Etlik Keçiören Ankara', 'admin@admin.co', '05310110991', '', '123213213321.com', 14),
('asdasd', 'İncili Sokak 73/19 Etlik Keçiören Ankara', 'aw@asdsad.com', '05310110993', '', '123213213321.com', 15),
('microsoft', 'İncili Sokak 73/19 Etlik Keçiören Ankara', 'sa@asdasd.com', '05310110994', '', '123213.com', 16),
('SDA', 'İncili Sokak 73/19 Etlik Keçiören Ankara', 'aw@asdsad.com', '05310110996', '', '131313.com', 17),
('qweqrqeewrwer', 'İncili Sokak 73/19 Etlik Keçiören Ankara', 'onuryozlu06@gmail.com', '05310110996', '', '123213', 18),
('microsoft', 'İncili Sokak 73/19 Etlik Keçiören Ankara', 'admin@admin.co', '05310110992', '', '123213.com', 20),
('qweqrqeewrwer', 'İncili Sokak 73/19 Etlik Keçiören Ankara', 'aw@asdsad.com', '05310110996', '', '123213213321.com', 21),
('qweqrqeewrwer', 'İncili Sokak 73/19 Etlik Keçiören Ankara', 'aw@asdsad.com', '05310110996', '', '123213', 22),
('SDA', 'İncili Sokak 73/19 Etlik Keçiören Ankara', 'sa@asdasd.com', '05310110996', '', '123213.com', 23);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `company`
--
ALTER TABLE `company`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
