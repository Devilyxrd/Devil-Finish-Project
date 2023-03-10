-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 10 Mar 2023, 14:15:17
-- Sunucu sürümü: 10.4.25-MariaDB
-- PHP Sürümü: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `devildata`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `devilcontact`
--

CREATE TABLE `devilcontact` (
  `id` int(11) NOT NULL,
  `ad` varchar(100) NOT NULL,
  `soyad` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `devilcontact`
--

INSERT INTO `devilcontact` (`id`, `ad`, `soyad`, `email`, `message`) VALUES
(58, 'Mehmet', 'Yılmaz', 'mehmet@gmail.com', 'Devildan Insıdera sevgilerle < 3'),
(59, 'Mehmet', 'Yılmaz', 'mehmet@gmail.com', 'Kaandan Insıdera Sevgilerle < 3');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `devilmembers`
--

CREATE TABLE `devilmembers` (
  `id` int(11) NOT NULL,
  `ad` varchar(15) NOT NULL,
  `soyad` varchar(15) NOT NULL,
  `email` varchar(45) NOT NULL,
  `sifre` varchar(100) NOT NULL,
  `kTarih` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `devilmembers`
--

INSERT INTO `devilmembers` (`id`, `ad`, `soyad`, `email`, `sifre`, `kTarih`) VALUES
(36, 'Mehmet', 'Yılmaz', 'mehmet@gmail.com', '202cb962ac59075b964b07152d234b70', '2023-03-10');

-- Bu Hesabın Şifresi 123'tür isterseniz site içerisinde de kendi hesabınızı açabilirsiniz Kaan'dan sevgiler <3

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `ad` varchar(15) NOT NULL,
  `soyad` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dökümü yapılmış tablolar için indeksler
-- Yukarıdaki test boş table isterseniz kodunu silip kurmasını engelleyebilirsiniz seçim size kalmış <3
--

--
-- Tablo için indeksler `devilcontact`
--
ALTER TABLE `devilcontact`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `devilmembers`
--
ALTER TABLE `devilmembers`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `devilcontact`
--
ALTER TABLE `devilcontact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- Tablo için AUTO_INCREMENT değeri `devilmembers`
--
ALTER TABLE `devilmembers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- Tablo için AUTO_INCREMENT değeri `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


-- Kaan Was Here <3 Made By Kaan <3
-- Devil Was Here <3 Made By Devil <3