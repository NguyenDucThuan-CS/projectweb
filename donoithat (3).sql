-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3307
-- Thời gian đã tạo: Th10 20, 2021 lúc 03:29 PM
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
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `admin_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `email`, `password`, `admin_name`) VALUES
(1, 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'Thuan Nguyen');

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

--
-- Đang đổ dữ liệu cho bảng `tbl_cart`
--

INSERT INTO `tbl_cart` (`cart_id`, `product_amount`, `product_discrip`, `product_id`, `product_image`, `product_name`, `product_price`) VALUES
(40, 15, 'Nordic Style Black Extendable Dining Table Stainless Steel Dining Table Base Dinning Table Modern Dining', 3, 'table_1_5.jpg', ' Chinese wooden table', 500);

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
(1, 'Bed 1'),
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
(6, 'Nguyễn Ngọc An Thư', 'vana@gmail.com', '382524468', 'ấp Thạnh Hòa Tây, xã Thạnh Trị, huyện Gò Công Tây,'),
(7, 'Nguyễn Ngọc An Thư', 'vana@gmail.com', '382524468', 'ấp Thạnh Hòa Tây, xã Thạnh Trị, huyện Gò Công Tây,'),
(8, 'Nguyễn Ngọc An Thư', 'dpnguyen@gmail.com', '382524468', 'ấp Thạnh Hòa Tây, xã Thạnh Trị, huyện Gò Công Tây,'),
(9, 'Nguyễn Ngọc An Thư', '0346879659', '382524468', 'ấp Thạnh Hòa Tây, xã Thạnh Trị, huyện Gò Công Tây,'),
(10, 'Nguyễn Ngọc An Thư', '0523 736 656', '382524468', 'ấp Thạnh Hòa Tây, xã Thạnh Trị, huyện Gò Công Tây,'),
(11, 'Nguyễn Ngọc An Thư', 'kk', '382524468', 'ấp Thạnh Hòa Tây, xã Thạnh Trị, huyện Gò Công Tây,'),
(12, 'Nguyễn Ngọc An Thư', 'kk', '382524468', 'ấp Thạnh Hòa Tây, xã Thạnh Trị, huyện Gò Công Tây,'),
(13, 'Nguyễn Ngọc An Thư', 'kk', '382524468', 'ấp Thạnh Hòa Tây, xã Thạnh Trị, huyện Gò Công Tây,'),
(14, 'Nguyễn Ngọc An Thư', 'kk', '382524468', 'ấp Thạnh Hòa Tây, xã Thạnh Trị, huyện Gò Công Tây,'),
(15, 'Nguyễn Ngọc An Thư', 'vana@gmail.com', '382524468', 'ấp Thạnh Hòa Tây, xã Thạnh Trị, huyện Gò Công Tây,'),
(16, 'Nguyễn Ngọc An Thư', 'vana@gmail.com', '382524468', 'ấp Thạnh Hòa Tây, xã Thạnh Trị, huyện Gò Công Tây,'),
(17, 'Nguyễn Ngọc An Thư', 'nguyenducthuan8362@gmail.com', '382524468', 'ấp Thạnh Hòa Tây, xã Thạnh Trị, huyện Gò Công Tây,'),
(18, 'Nguyễn Ngọc An Thư', 'vana@gmail.com', '382524468', 'ấp Thạnh Hòa Tây, xã Thạnh Trị, huyện Gò Công Tây,'),
(19, 'Nguyễn Ngọc An Thư', '0346879659', '382524468', 'ấp Thạnh Hòa Tây, xã Thạnh Trị, huyện Gò Công Tây,'),
(20, 'Nguyễn Ngọc An Thư', 'vana@gmail.com', '382524468', 'ấp Thạnh Hòa Tây, xã Thạnh Trị, huyện Gò Công Tây,'),
(21, 'Nguyễn Ngọc An Thư', '0346879659', '382524468', 'ấp Thạnh Hòa Tây, xã Thạnh Trị, huyện Gò Công Tây,'),
(22, ',kkkkk', 'jsskiks', '382524468', 'ấp Thạnh Hòa Tây, xã Thạnh Trị, huyện Gò Công Tây,'),
(23, 'Nguyễn Ngọc An Thư', 'dpnguyen@gmail.com', '382524468', 'ấp Thạnh Hòa Tây, xã Thạnh Trị, huyện Gò Công Tây,'),
(24, 'Nguyễn Ngọc An Thư', 'dpnguyen@gmail.com', '382524468', 'ấp Thạnh Hòa Tây, xã Thạnh Trị, huyện Gò Công Tây,'),
(25, 'Nguyễn Ngọc An Thư', 'vana@gmail.com', '382524468', 'ấp Thạnh Hòa Tây, xã Thạnh Trị, huyện Gò Công Tây,'),
(26, 'Đan', 'vana@gmail.com', '382524468', 'ấp Thạnh Hòa Tây, xã Thạnh Trị, huyện Gò Công Tây,');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_donhang`
--

CREATE TABLE `tbl_donhang` (
  `donhang_id` int(11) NOT NULL,
  `sanpham_id` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `mahang` int(11) NOT NULL,
  `khachhang_id` int(11) NOT NULL,
  `ngaythang` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_donhang`
--

INSERT INTO `tbl_donhang` (`donhang_id`, `sanpham_id`, `soluong`, `mahang`, `khachhang_id`, `ngaythang`, `status`) VALUES
(12, 3, 1, 1637417054, 25, '2021-11-20 13:54:33', 1),
(13, 2, 2, 1637417054, 25, '2021-11-20 13:54:33', 1),
(14, 3, 1, 1637419283, 26, '2021-11-20 14:09:28', 1),
(15, 2, 1, 1637419283, 26, '2021-11-20 14:09:28', 1);

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
(2, 2, 10, 'Stadium Chair Stadium Seats Made of High-density polyethylene', 'chair_1_6.jpg', 'chair_1_7.jpg', 'chair_1_8.jpg', 'chair_1_6.jpg', 'Stadium Chair', 50),
(3, 3, 10, 'Nordic Style Black Extendable Dining Table Stainless Steel Dining Table Base Dinning Table Modern Dining', 'table_1_5.jpg', 'table_1_6.jpg', 'table_1_7.jpg', 'table_1_5.jpg', ' Chinese wooden table', 500);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

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
-- Chỉ mục cho bảng `tbl_donhang`
--
ALTER TABLE `tbl_donhang`
  ADD PRIMARY KEY (`donhang_id`);

--
-- Chỉ mục cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT cho bảng `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `tbl_donhang`
--
ALTER TABLE `tbl_donhang`
  MODIFY `donhang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
