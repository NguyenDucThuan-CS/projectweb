-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3307
-- Thời gian đã tạo: Th10 19, 2021 lúc 02:33 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `donoithat`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `cart_id` int(11) NOT NULL,
  `product_amount` int(11) NOT NULL,
  `product_discrip` text NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_image` varchar(50) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_category`
--

CREATE TABLE `tbl_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`) VALUES
(1, 'Bed'),
(2, 'Table & Desk'),
(3, 'Chair');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `customer_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_customer`
--

INSERT INTO `tbl_customer` (`customer_id`, `name`, `email`, `phone`, `address`) VALUES
(1, 'Nguyễn Ngọc An Thư', 'vana@gmail.com', '382524468', 'ấp Thạnh Hòa Tây, xã Thạnh Trị, huyện Gò Công Tây,'),
(2, 'Nguyễn Ngọc An Thư', 'vana@gmail.com', '382524468', 'ấp Thạnh Hòa Tây, xã Thạnh Trị, huyện Gò Công Tây,'),
(3, 'Nguyễn Ngọc An Thư', '0346879659', '382524468', 'ấp Thạnh Hòa Tây, xã Thạnh Trị, huyện Gò Công Tây,'),
(4, 'aaaaaa', 'aaa', 'aaa', 'ấp Thạnh Hòa Tây, xã Thạnh Trị, huyện Gò Công Tây,'),
(5, 'Nguyễn Ngọc An Thư', '0523 736 656', '382524468', 'ấp Thạnh Hòa Tây, xã Thạnh Trị, huyện Gò Công Tây,'),
(6, 'Nguyễn Ngọc An Thư', 'vana@gmail.com', '382524468', 'ấp Thạnh Hòa Tây, xã Thạnh Trị, huyện Gò Công Tây,');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_product`
--

CREATE TABLE `tbl_product` (
  `product_id` int(11) NOT NULL,
  `product_category` int(11) NOT NULL,
  `product_amount` int(11) NOT NULL,
  `product_discrip` text NOT NULL,
  `product_image1` varchar(50) NOT NULL,
  `product_image2` varchar(50) NOT NULL,
  `product_image3` varchar(50) NOT NULL,
  `product_image4` varchar(50) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `product_category`, `product_amount`, `product_discrip`, `product_image1`, `product_image2`, `product_image3`, `product_image4`, `product_name`, `product_price`) VALUES
(1, 1, 10, 'Dingzhi Furniture Luxury Comforter Sets Bedding Literas Adultes Double Bed', 'bed_1_1.jpg', 'bed_1_2.jpg', 'bed_1_3.jpg', 'bed_1_4.jpg', 'King Bed Size', 280),
(2, 3, 10, 'Stadium Chair Stadium Seats Made of High-density polyethylene', 'chair_1_6.jpg', 'chair_1_7.jpg', 'chair_1_8.jpg', 'chair_1_5.jpg', 'Stadium Chair', 50),
(3, 2, 10, 'Nordic Style Black Extendable Dining Table Stainless Steel Dining Table Base Dinning Table Modern Dining', 'table_1_5.jpg', 'table_1_6.jpg', 'table_1_7.jpg', 'table_1_4.jpg', ' Chinese wooden table', 500);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Chỉ mục cho bảng `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Chỉ mục cho bảng `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Chỉ mục cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
