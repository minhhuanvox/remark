-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 03, 2023 lúc 04:43 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `phuckhao`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(3, '2023-06-23-132234', 'App\\Database\\Migrations\\CreateTableUsers', 'default', 'App', 1690776182, 1),
(4, '2023-07-03-052943', 'App\\Database\\Migrations\\CreateTableRemark', 'default', 'App', 1690776183, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `remarks`
--

CREATE TABLE `remarks` (
  `id` int(11) UNSIGNED NOT NULL,
  `student-id` varchar(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `date_of_birth` date NOT NULL,
  `class` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_number` varchar(100) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `school_year` varchar(255) NOT NULL,
  `module_id` varchar(6) NOT NULL,
  `module_name` varchar(100) NOT NULL,
  `exam_date` date NOT NULL,
  `exam_room` varchar(255) NOT NULL,
  `score` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `remarks`
--

INSERT INTO `remarks` (`id`, `student-id`, `name`, `date_of_birth`, `class`, `email`, `phone_number`, `semester`, `school_year`, `module_id`, `module_name`, `exam_date`, `exam_room`, `score`) VALUES
(2, '3119560024', 'Võ Minh Huân', '2001-12-16', 'DKP1191', 'minhhuan@gmail.com', '0943925251', 'Học kỳ 1', '2024 - 2025', '862309', 'Quốc phòng 4', '2023-06-27', 'E405', '8.5'),
(3, '3119560024', 'Minh Huan Vo', '2001-12-16', 'DKP1191', 'minhhuan@gmail.com', '0987654321', 'Học kỳ 1', '2023 - 2025', '841308', 'Khai phá dữ liệu', '2023-07-14', 'E408', '3.9'),
(5, '3110410056', 'Minh Huân', '2003-10-30', 'DCT1192', 'minhhuan@gmail.com', '0987899764', 'Học kì 2', '2024 - 2025', '841326', 'Cơ sở lập trình', '2023-07-01', 'C201', '5.6'),
(6, '3119560028', 'Minh Huân', '2005-09-24', 'DKP1191', 'minhhuan@gmail.com', '0987899764', 'Học kỳ 3', '2025 - 2026', '841086', 'WEB 2', '2023-07-19', 'A103', '5.5'),
(7, '3119410045', 'Minh Huan Vo', '2023-07-05', 'DCT1192', 'minhhuan@gmail.com', '0987654321', 'Học kỳ 1', '2023 - 2024', '862378', 'Đại số', '2023-07-05', 'A123', '5'),
(8, '3110410056', 'Vo Minh Huan', '2023-06-29', 'DCT1192', 'minhhuanvox@gmail.com', '+84943925251', 'Học kỳ 1', '2023 - 2024', '841345', 'Giải tích', '2023-07-06', 'C201', '9.6'),
(9, '3110410056', 'Minh Huân', '2023-06-29', 'DCT1192', 'minhhuan@gmail.com', '0987899764', 'Học kỳ 1', '2023 - 2024', '841235', 'SXTK', '2023-07-06', 'A103', '1.2'),
(10, '3119560028', 'Minh Tâm', '2023-06-29', 'DKP1191', 'minhtam@gmail.com', '0987654321', 'Học kỳ 1', '2023 - 2024', '841456', 'Cơ sở lập trình', '2023-07-20', 'E103', '4.5'),
(11, '3119560024', 'Minh Tâm', '2023-06-29', 'DCT1192', 'minhtam@gmail.com', '0987654321', 'Học kỳ 1', '2023 - 2024', '841456', 'WEB 1', '2023-07-12', 'E408', '6.7'),
(12, '3119560024', 'Minh Huan Vo', '2023-06-30', 'DCT1192', 'minhhuan@gmail.com', '0987654321', 'Học kỳ 1', '2023 - 2024', '841324', 'CSDL', '2023-07-11', 'C201', '5.5'),
(13, '3119560045', 'Minh Hoàng', '2023-06-28', 'DCT1191', 'abc@gmail.com', '098486638', 'Học kỳ 2', '2024', '841456', 'DATA', '2023-08-22', 'E404', '5.5'),
(14, '3110410056', 'Trần Minh Hoàng', '2023-07-05', 'DKP1191', 'bcd@gmail.com', '0965245167', 'Học kỳ 3', '2025', '345654', 'Pháp luật đại cương', '2023-07-30', 'E103', '2.5'),
(15, '3110410056', 'Trần Minh Hoàng', '2023-06-29', 'DKP1191', 'bcd@gmail.com', '0965245167', 'Học kỳ 3', '2025', '345654', 'Pháp luật đại cương', '2023-07-30', 'E103', '2.5'),
(16, '3110410056', 'Trần Minh Hoàng', '2023-06-29', 'DKP1191', 'bcd@gmail.com', '0965245167', 'Học kỳ 3', '2025', '345654', 'Pháp luật đại cương', '2023-07-30', 'E103', '2.5'),
(17, '3110410056', 'Trần Minh Hoàng', '2023-06-29', 'DKP1191', 'bcd@gmail.com', '0965245167', 'Học kỳ 3', '2025', '345654', 'Pháp luật đại cương', '2023-07-30', 'E103', '2.5'),
(18, '3119560028', 'Trần Minh Hoàng', '2023-07-30', 'DKP1191', 'bcd@gmail.com', '0965245167', 'Học kỳ 3', '2025', '823456', 'Hình Học', '2023-07-31', 'A103', '6.9'),
(19, '3119560028', 'Trần Minh Hoàng', '2023-07-30', 'DKP1191', 'bcd@gmail.com', '0965245167', 'Học kỳ 3', '2025', '823456', 'Hình Học', '2023-07-31', 'A103', '6.9');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `role` enum('admin','user') DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `name`, `role`) VALUES
(1, 'admin@gmail.com', '$2y$10$ECi5re2PoY0aMHALgUTw5.F9ld.vD1TayebI5LufB5PqTiYxpU1BC', 'Tài khoản quản trị', 'admin'),
(2, 'minhhuan@gmail.com', '$2y$10$vMre7y1MaebMppEyyEO6RuyzRg83x3FeXZqkdliYa2wG6NhX1kN5.', 'Minh Huan Vo', 'user');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `remarks`
--
ALTER TABLE `remarks`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `remarks`
--
ALTER TABLE `remarks`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
