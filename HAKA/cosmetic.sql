-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 01, 2022 at 01:56 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cosmetic`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

DROP TABLE IF EXISTS `account`;
CREATE TABLE IF NOT EXISTS `account` (
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phonenumber` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthdate` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`email`, `username`, `pass`, `phonenumber`, `birthdate`) VALUES
('minhtien@gmail.com', 'Minh Tiến', '123', '0354600015', '18/01/2002'),
('phongvu@gmail.com', 'Phong Vũ', '123456', '0982726321', '2000-12-13');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `code` tinyint(4) NOT NULL AUTO_INCREMENT,
  `avatar` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skintype` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sex` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `problem` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`code`)
) ENGINE=MyISAM AUTO_INCREMENT=45 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`code`, `avatar`, `name`, `brand`, `country`, `skintype`, `sex`, `problem`, `quantity`, `price`) VALUES
(1, '1', 'Sữa Rửa Mặt Cetaphil Dịu Nhẹ Không Xà Phòng 500ml Gentle Skin Cleanser', 'CETAPHIL', 'Canada', 'Mọi loại da', 'Nam & nữ', 'Da nhạy cảm, dễ kích ứng', 40, 200),
(2, '2', 'Gel Rửa Mặt Cosrx Tràm Trà, 0.5% BHA Có Độ pH Thấp 150ml Low pH Good Morning Gel Cleanser', 'Cosrx', 'Hàn Quốc', 'Mọi loại da', 'Nam & nữ', 'Da nhạy cảm, dễ kích ứng', 50, 150),
(3, '3', 'Gel Rửa Mặt La Roche-Posay Dành Cho Da Dầu, Nhạy Cảm 400ml Effaclar Purifying Foaming Gel For Oily Sensitive Skin', 'LA ROCHE-POSAY', 'Pháp', 'Da dầu', 'Nam & nữ', 'Da dầu, lỗ chân lông to', 60, 450),
(4, '4', 'Sữa Rửa Mặt Naruko Dạng Bùn Tràm Trà 120ml', 'NARUKO', 'Đài Loan', 'Da dầu', 'Nam & nữ', 'Da dầu, lỗ chân lông to', 40, 350),
(5, '5', 'Sữa Rửa Mặt Eucerin Dịu Nhẹ Cho Da Nhạy Cảm 400ml', 'Eucerin', 'Ðức', 'Mọi loại da', 'Nam & nữ', 'Da nhạy cảm, dễ kích ứng', 30, 210),
(11, '11', 'Kem Dưỡng Ẩm Klairs Làm Dịu & Phục Hồi Da Ban Đêm 60ml Midnight Blue Calming Cream', 'Klairs', 'Hàn Quốc', 'Mọi loại da', 'Nữ', 'Da nhạy cảm, dễ kích ứng', 36, 367),
(12, '12', 'Kem Dưỡng Obagi Retinol 0.5% Ngăn Ngừa Lão Hoá Da 28g Retinol 0.5 Cream', 'OBAGI', 'Mỹ', 'Mọi loại da', 'Nam & nữ', 'Da lão hóa, nếp nhăng', 42, 972),
(16, '16', 'Kem Dưỡng Obagi Retinol 0.5% Ngăn Ngừa Lão Hoá Da 28g Retinol 0.5 Cream', 'OBAGI', 'Mỹ', 'Mọi loại da', 'Nam & nữ', 'Da lão hóa, nếp nhăng', 42, 972),
(13, '13', 'Kem Dưỡng Ẩm Neutrogena Cấp Nước Cho Da Dầu 50g Hydro Boost Hyaluronic Acid Water Gel', 'Neutrogena', 'Mỹ', 'Da dầu', 'Nam & nữ', 'Da thiếu nước, thiếu ẩm', 32, 372),
(14, '14', 'Kem Dưỡng Obagi Retinol 1.0% Trẻ Hóa Da, Ngừa Mụn 28g Retinol 1.0 Cream', 'OBAGI', 'Mỹ', 'Mọi loại da', 'Nam & nữ', 'Da lão hóa, nếp nhăn', 51, 992),
(15, '15', 'Kem Dưỡng La Roche-Posay Làm Dịu, Hỗ Trợ Phục Hồi Da 100ml', 'LA ROCHE-POSAY', 'Pháp', 'Mọi loại da', 'Nam & nữ', 'Da nhạy cảm, dễ kích ứng', 49, 442),
(20, '20', 'Kem Chống Nắng La Roche-Posay Kiểm Soát Dầu SPF50+ 50ml', 'LA ROCHE-POSAY', 'Pháp', 'Mọi loại da', 'Nam & nữ', 'Da lão hóa', 27, 342),
(21, '21', 'Sữa Chống Nắng Anessa Dưỡng Da Kiềm Dầu 60ml', 'ANESSA', 'Nhật Bản', 'Da dầu', 'Nam & nữ', 'Da dầu, lỗ chân lông to', 17, 299),
(22, '22', 'Sữa Chống Nắng Sunplay Skin Aqua Dưỡng Da Sáng Mịn 55g', 'Sunplay', 'Nhật Bản', 'Da dầu', 'Nam & nữ', 'Da dầu, lỗ chân lông to', 19, 259),
(23, '23', 'Kem Chống Nắng MartiDerm Phổ Rộng Bảo Vệ Toàn Diện 40ml', 'Martiderm', 'Tây Ban Nha', 'Mọi loại da', 'Nữ', 'Da dầu, lỗ chân lông to', 50, 479),
(24, '24', 'Kem Chống Nắng La Roche-Posay Không Màu Kiểm Soát Dầu 15ml', 'LA ROCHE-POSAY', 'Pháp', 'Da dầu', 'Nam & nữ', 'Da dầu, lỗ chân lông to', 40, 379),
(25, '25', 'Tinh Chất Chống Nắng Sunplay Hiệu Chỉnh Sắc Da 50g', 'Sunplay', 'Nhật Bản', 'Mọi loại da', 'Nam & nữ', 'Da sạm, xỉn màu', 76, 439),
(30, '30', 'Tinh Chất Klairs Vitamin C Dưỡng Sáng Da, Mờ Thâm 35ml Freshly Juiced Vitamin Drop', 'Klairs', 'Hàn Quốc', 'Mọi loại da', 'Nam & nữ', 'Da sạm, xỉn màu', 87, 478),
(31, '31', 'Serum Timeless Vitamin B5 Làm Dịu & Phục Hồi Da 30ml Vitamin B5 Serum', 'Timeless', 'Mỹ', 'Mọi loại da', 'Nam & nữ', 'Da nhạy cảm, dễ kích ứng', 47, 428),
(32, '32', 'Tinh Chất GoodnDoc Dưỡng Ẩm, Hỗ Trợ Phục Hồi Da 30ml Hydra B5 Serum', 'GoodnDoc', 'Hàn Quốc', 'Mọi loại da', 'Nam & nữ', 'Da nhạy cảm, dễ kích ứng', 51, 471),
(33, '33', 'Tinh Chất Neogen Dermalogy Dưỡng Sáng Da, Mờ Thâm 32g Real Vita C Serum', 'Neogen Dermalogy', 'Hàn Quốc', 'Mọi loại da', 'Nam & nữ', 'Da sạm, xỉn màu', 65, 389),
(34, '34', 'Tinh Chất Balance Active Formula Vitamin C Sáng Da 30ml', 'BALANCE ACTIVE FORMULA', 'Anh', 'Mọi loại da', 'Nam & nữ', 'Thâm nám, tàn nhang', 45, 189),
(40, '40', 'Phấn Nước Gilaa Kiềm Dầu Và Dưỡng Da', 'Gilaa', 'Hàn Quốc', 'Mọi loại da', 'Nam & nữ', 'Thâm nám, tàn nhang', 55, 219),
(41, '41', 'Phấn Nước Aprilskin Ma Thuật Màu Sáng Hồng 22 Pink Beige 15g', 'Aprilskin', 'Hàn Quốc', 'Mọi loại da', 'Nam & nữ', 'Thâm nám, tàn nhang', 45, 249),
(42, '42', 'Phấn Nước Missha Kiềm Dầu SPF50+/PA+++ 21 Light Beige 15g', 'MISSHA', 'Hàn Quốc', 'Da dầu', 'Nam & nữ', 'Da dầu, lỗ chân lông to', 45, 249),
(43, '43', 'Phấn Nước Đơn Lemonade A02 Natural (Không Face Filler) 15g', 'LEMONADE', 'Việt Nam', 'Mọi loại da', 'Nam & nữ', 'Da sạm, xỉn màu', 39, 339),
(44, '44', 'Phấn Nước Laneige Căng Bóng 24h Tông Màu 21N 15g Neo Cushion Glow 21N', 'LANEIGE', 'Hàn Quốc', 'Mọi loại da', 'Nam & nữ', 'Da sạm, xỉn màu', 52, 239);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
