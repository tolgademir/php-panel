-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 30 Eyl 2021, 15:38:05
-- Sunucu sürümü: 10.4.20-MariaDB
-- PHP Sürümü: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `panel`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

CREATE TABLE `kullanicilar` (
  `kul_id` int(11) NOT NULL,
  `kul_isim` varchar(200) NOT NULL,
  `kul_mail` varchar(200) NOT NULL,
  `kul_sifre` varchar(100) NOT NULL,
  `kul_telefon` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`kul_id`, `kul_isim`, `kul_mail`, `kul_sifre`, `kul_telefon`) VALUES
(1, 'Türker Tolga Demir', 'tolga@tekohaber.com', '202cb962ac59075b964b07152d234b70', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yonetici_paneli`
--

CREATE TABLE `yonetici_paneli` (
  `yonetici_paneli_id` int(11) NOT NULL,
  `yonetici_paneli_icon` varchar(200) NOT NULL,
  `yonetici_paneli_baslik` varchar(200) NOT NULL,
  `yonetici_paneli_aciklama` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `yonetici_paneli`
--

INSERT INTO `yonetici_paneli` (`yonetici_paneli_id`, `yonetici_paneli_icon`, `yonetici_paneli_baslik`, `yonetici_paneli_aciklama`) VALUES
(10, '149298transparan-icon.png', 'Yönetici Paneli Başlık', 'Yönetici Paneli Açıklama');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `kullanicilar`
--
ALTER TABLE `kullanicilar`
  ADD PRIMARY KEY (`kul_id`);

--
-- Tablo için indeksler `yonetici_paneli`
--
ALTER TABLE `yonetici_paneli`
  ADD PRIMARY KEY (`yonetici_paneli_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `kullanicilar`
--
ALTER TABLE `kullanicilar`
  MODIFY `kul_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `yonetici_paneli`
--
ALTER TABLE `yonetici_paneli`
  MODIFY `yonetici_paneli_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
