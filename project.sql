-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 15, 2021 lúc 09:40 AM
-- Phiên bản máy phục vụ: 10.4.17-MariaDB
-- Phiên bản PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `project`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `idteam` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `birthday` date NOT NULL,
  `phone` varchar(100) NOT NULL,
  `about` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `member`
--

INSERT INTO `member` (`id`, `idteam`, `fullname`, `sex`, `birthday`, `phone`, `about`) VALUES
(1, 1, 'Mai Vinh Quang ', 'Nam', '2000-12-01', '0915563292', 'Với hơn hai năm kinh nghiệm ở các vị trí Product Manager, Business Analyst, trong việc hỗ trợ nhóm Agile, tạo, sắp xếp mức độ ưu tiên và quản lý backlog; các chứng chỉ TOEIC 750, Google Adwards và bằng Thạc sỹ Quản trị kinh doanh; tôi mong muốn tận dụng các kỹ năng và kiến thức của mình để đóng góp cho công ty với vai trò là Product Manager.'),
(2, 1, 'Hà Gia Phong', 'Nam', '2000-06-07', '0336231066', 'Thuộc tuýp người giải quyết vấn đề (problem-solver) và đam mê kinh doanh trực tuyến, muốn tham gia một nhóm các lập trình viên có cùng chí hướng. Đang tìm kiếm một vị trí phù hợp tại công ty có các dự án với độ thử thách cao, nơi là hiệu suất làm việc được công nhận và khen thưởng xứng đáng.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `message`
--

CREATE TABLE `message` (
  `idteam` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `services`
--

CREATE TABLE `services` (
  `idteam` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `about` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `services`
--

INSERT INTO `services` (`idteam`, `name`, `about`) VALUES
(1, 'Thiết kế Web', 'Với nhiều năm kinh nghiệm về thiết kế Web chúng tôi tự tin sẽ đem lại cho bạn một trang Web tuyệt vời'),
(1, 'Quảng cáo', 'Chúng tôi sẽ giúp bạn chạy quảng cáo trên nhiều nền tảng để sản phẩm của bạn sẽ tiếp cận được thật nhiều người dùng'),
(1, 'Thiết kế ứng dụng', 'Chúng tôi đã làm và thành công trên rất nhiều dự án điển hình như ATM Lucky, Mua Thẻ Cào... hãy trao cho tôi niềm tin tôi sẽ trao cho bạn ứng dụng tuyệt vời. ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `skill`
--

CREATE TABLE `skill` (
  `idteam` int(11) NOT NULL,
  `html` int(11) NOT NULL,
  `css` int(11) NOT NULL,
  `javascript` int(11) NOT NULL,
  `php` int(11) NOT NULL,
  `mysql` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `skill`
--

INSERT INTO `skill` (`idteam`, `html`, `css`, `javascript`, `php`, `mysql`) VALUES
(1, 90, 60, 50, 50, 80);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `teamName` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `team`
--

INSERT INTO `team` (`id`, `teamName`, `address`, `email`, `amount`) VALUES
(1, 'SuperMan', '175 Tây Sơn, Đống Đa, Hà Nội', 'supermanteam@gmail.com', 2);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idteam` (`idteam`);

--
-- Chỉ mục cho bảng `message`
--
ALTER TABLE `message`
  ADD KEY `id` (`idteam`);

--
-- Chỉ mục cho bảng `services`
--
ALTER TABLE `services`
  ADD KEY `idsevice` (`idteam`);

--
-- Chỉ mục cho bảng `skill`
--
ALTER TABLE `skill`
  ADD KEY `idtim` (`idteam`);

--
-- Chỉ mục cho bảng `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `member`
--
ALTER TABLE `member`
  ADD CONSTRAINT `idteam` FOREIGN KEY (`idteam`) REFERENCES `team` (`id`);

--
-- Các ràng buộc cho bảng `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `id` FOREIGN KEY (`idteam`) REFERENCES `team` (`id`);

--
-- Các ràng buộc cho bảng `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `idsevice` FOREIGN KEY (`idteam`) REFERENCES `team` (`id`);

--
-- Các ràng buộc cho bảng `skill`
--
ALTER TABLE `skill`
  ADD CONSTRAINT `idtim` FOREIGN KEY (`idteam`) REFERENCES `team` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
