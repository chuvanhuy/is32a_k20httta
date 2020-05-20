-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 20, 2020 lúc 03:14 PM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `k20httta_db`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_lien_he`
--

CREATE TABLE `tbl_lien_he` (
  `id_lien_he` int(11) NOT NULL,
  `ho_ten` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `dien_thoai` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `noi_dung_lien_he` text COLLATE utf8_unicode_ci NOT NULL,
  `noi_dung_phuc_dap` text COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_lien_he`
--

INSERT INTO `tbl_lien_he` (`id_lien_he`, `ho_ten`, `email`, `dien_thoai`, `noi_dung_lien_he`, `noi_dung_phuc_dap`) VALUES
(1, 'Nguyễn Thị Hà', 'hant@gmail.com', '0989999999', 'Tôi muốn hỏi về quy trình mua sản phẩm bên công ty. Bên công ty có hỗ trợ giao hàng cho tôi miễn phí?', NULL),
(2, 'Nguyễn Thịnh', 'thinhnguyen@gmail.com', '0988999000', 'Tôi muốn hỏi về quy trình mua sản phẩm bên công ty. Bên công ty có hỗ trợ giao hàng cho tôi miễn phí?', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_loai_san_pham`
--

CREATE TABLE `tbl_loai_san_pham` (
  `id_loai_san_pham` int(11) NOT NULL,
  `ten_loai_san_pham` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ghi_chu` text COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_loai_san_pham`
--

INSERT INTO `tbl_loai_san_pham` (`id_loai_san_pham`, `ten_loai_san_pham`, `ghi_chu`) VALUES
(1, 'Máy điều chế nước Javen', NULL),
(2, 'Máy khử khuẩn', NULL),
(3, 'Máy xử lý nước thải bệnh viện', NULL),
(4, 'Máy khác', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_loai_tin_tuc`
--

CREATE TABLE `tbl_loai_tin_tuc` (
  `id_loai_tin_tuc` int(11) NOT NULL,
  `ten_loai_tin_tuc` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ghi_chu` text COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_loai_tin_tuc`
--

INSERT INTO `tbl_loai_tin_tuc` (`id_loai_tin_tuc`, `ten_loai_tin_tuc`, `ghi_chu`) VALUES
(1, 'Tin hoạt động', NULL),
(2, 'Tin sự kiện', NULL),
(3, 'Tin khuyến mại', NULL),
(4, 'Tin tuyển dụng', NULL),
(5, 'Tin tức khác', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_nguoi_dung`
--

CREATE TABLE `tbl_nguoi_dung` (
  `id_nguoi_dung` int(11) NOT NULL,
  `ho_va_ten` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `mat_khau` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ghi_chu` text COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_nguoi_dung`
--

INSERT INTO `tbl_nguoi_dung` (`id_nguoi_dung`, `ho_va_ten`, `email`, `mat_khau`, `ghi_chu`) VALUES
(1, 'Chu Văn Huy', 'chuvanhuy@gmail.com', '111', NULL),
(2, 'Nguyễn Phú Quý', 'quynp@gmail.com', '123', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_san_pham`
--

CREATE TABLE `tbl_san_pham` (
  `id_san_pham` int(11) NOT NULL,
  `id_loai_san_pham` int(11) NOT NULL,
  `ten_san_pham` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `mo_ta` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `anh_minh_hoa` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gia_ban` float NOT NULL,
  `ghi_chu` text COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_san_pham`
--

INSERT INTO `tbl_san_pham` (`id_san_pham`, `id_loai_san_pham`, `ten_san_pham`, `mo_ta`, `anh_minh_hoa`, `gia_ban`, `ghi_chu`) VALUES
(1, 1, 'JAVEN WATER - C30', '    Nước Javen (Giaven) là dung dịch của hỗn hợp hai muối: muối ăn (NaCl) và Natri hypochlorit (NaClO), có màu vàng nhạt, mùi hắc, có tính kiềm và là chất ôxy hóa mạnh.\r\n\r\n    Nước Javen (giaven) là hợp chất rất thông dụng dùng trong công nghiệp và dân dụng. Nước giaven được dùng để ôxy hóa các chất màu, tẩy trắng vải sợi, khử trùng nước sinh hoạt, trong chăn nuôi, nước bể bơi và các vật dụng y tế trong bệnh viện ...\r\n\r\n    Thiết bị JAVEN WATER ứng dụng công nghệ điện phân muối ăn, được sử dụng ', '', 0, ''),
(2, 1, 'JAVEN WATER - C500', '    Nước Javen (Giaven) là dung dịch của hỗn hợp hai muối: muối ăn (NaCl) và Natri hypochlorit (NaClO), có màu vàng nhạt, mùi hắc, có tính kiềm và là chất ôxy hóa mạnh.\r\n\r\n    Nước Javen (giaven) là hợp chất rất thông dụng dùng trong công nghiệp và dân dụng. Nước giaven được dùng để ôxy hóa các chất màu, tẩy trắng vải sợi, khử trùng nước sinh hoạt, trong chăn nuôi, nước bể bơi và các vật dụng y tế trong bệnh viện ...\r\n\r\n    Thiết bị JAVEN WATER ứng dụng công nghệ điện phân muối ăn, được sử dụng ', '', 0, ''),
(3, 1, 'JAVEN WATER - C1000', 'Nước Javen (Giaven) là dung dịch của hỗn hợp hai muối: muối ăn (NaCl) và Natri hypochlorit (NaClO), có màu vàng nhạt, mùi hắc, có tính kiềm và là chất ôxy hóa mạnh.\r\n\r\nNước Javen (Giaven) là hợp chất rất thông dụng dùng trong công nghiệp và dân dụng. Nước giaven được dùng để ôxy hóa các chất màu, tẩy trắng vải sợi, khử trùng nước sinh hoạt,trong chăn nuôi, nước bể bơi và các vật dụng y tế trong bệnh viện ...\r\n\r\n', '', 0, ''),
(4, 1, 'JAVEN WATER - C1500', 'Nước Javen (Giaven) là dung dịch của hỗn hợp hai muối: muối ăn (NaCl) và Natri hypochlorit (NaClO), có màu vàng nhạt, mùi hắc, có tính kiềm và là chất ôxy hóa mạnh.\r\n\r\nNước Javen (Giaven) là hợp chất rất thông dụng dùng trong công nghiệp và dân dụng. Nước giaven được dùng để ôxy hóa các chất màu, tẩy trắng vải sợi, khử trùng nước sinh hoạt,trong chăn nuôi, nước bể bơi và các vật dụng y tế trong bệnh viện ...', '', 0, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_tin_tuc`
--

CREATE TABLE `tbl_tin_tuc` (
  `id_tin_tuc` int(11) NOT NULL,
  `id_loai_tin_tuc` int(11) NOT NULL,
  `tieu_de` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `mo_ta` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `anh_minh_hoa` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noi_dung` text COLLATE utf8_unicode_ci NOT NULL,
  `ghi_chu` text COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_tin_tuc`
--

INSERT INTO `tbl_tin_tuc` (`id_tin_tuc`, `id_loai_tin_tuc`, `tieu_de`, `mo_ta`, `anh_minh_hoa`, `noi_dung`, `ghi_chu`) VALUES
(1, 5, 'Ghế tổng thống của Trump lung lay vì suy thoái kinh tế', 'Kinh tế vốn là \"át chủ bài\" để Trump tái tranh cử tổng thống nhưng Covid-19 đã khiến nó không còn là lợi thế, thậm chí trở thành thách thức.', NULL, 'Suy thoái kinh tế nếu kéo dài sẽ làm phai nhạt những thành tích lẫy lừng về thúc đẩy nền kinh tế trước đó của Trump. Nó cũng có thể mở ra cơ hội cho ứng cử viên đảng Dân chủ Joe Biden, người đã giúp đưa nước Mỹ thoát khỏi cuộc khủng hoảng kinh tế lần trước dưới thời chính quyền Obama.\r\n\r\nCác số liệu công bố mỗi ngày tại Mỹ đang cho thấy những gì ban đầu gọi là \"cắt giảm công việc tạm thời\" có thể thành \"sa thải vĩnh viễn\". Chẳng hạn, GE, Airbnb và United Airlines tuần này tuyên bố cắt giảm hàng ngàn vị trí do kinh doanh yếu ớt. Tin tức về diễn biến còn phức tạp của đại dịch có thể cản trở việc phục hồi hoàn toàn của nền kinh tế.\r\n\r\nTrong nhiều tuần đầu năm, ông Trump đã phủ nhận và coi mối đe dọa từ Covid-19 là rất nhỏ. Tuy nhiên, giờ ông phải thay đổi quan điểm. \"Chúng ta đã phải trải qua một cuộc tấn công tồi tệ nhất trên đất nước này\", ông nói hôm thứ tư (6/5). Tổng thống đang kêu gọi mở cửa trưởng học và nói rằng nền kinh tế sẽ hồi phục nhanh chóng khi tình trạng khẩn cấp sẽ sớm kết thúc.', NULL),
(2, 2, 'Mùa dịch, giá căn hộ chung cư vẫn tăng nhẹ', 'Dù thị trường chịu ảnh hưởng bởi Covid-19, lượng giao dịch giảm mạnh, giá căn hộ chung cư tại Hà Nội, TP HCM vẫn tăng 1-3,5% trong quý I.', NULL, 'Dù thị trường chịu ảnh hưởng bởi Covid-19, lượng giao dịch giảm mạnh, giá căn hộ chung cư tại Hà Nội, TP HCM vẫn tăng 1-3,5% trong quý I.', NULL),
(3, 2, 'Cưỡng chế giai đoạn 2 dự án 8B Lê Trực', 'Lực lượng cưỡng chế quận Ba Đình đã mở khóa cửa các căn hộ tầng 18 tòa 8B Lê Trực, kiểm đếm tài sản để di dời, bàn giao mặt bằng cho đơn vị phá dỡ.', NULL, 'Ngày 7/5, hàng trăm người cùng máy móc, thiết bị tham gia cưỡng chế tầng 17-18 dự án 8B Lê Trực (phường Điện Biên, quận Ba Đình).\r\n\r\nChính quyền quận cho rằng vì chủ đầu tư không hợp tác nên phải cưỡng chế mở khóa cửa các căn hộ tại tầng 18 công trình số 8B Lê Trực. Việc này có sự chứng kiến của đại diện Tòa án nhân dân, Viện Kiểm sát nhân dân quận, đại diện tổ dân phố thuộc địa bàn dân cư số 6, số 12 phường Điện Biên.', NULL),
(4, 5, 'Sáng nay không thêm ca nhiễm nCoV', '6h ngày 8/5, Bộ Y tế không ghi nhận ca dương tính nCoV. Số ca nhiễm 288, trong đó 233 người khỏi bệnh, 55 người đang điều trị.', NULL, 'Như vậy 24 giờ qua thêm 17 ca nhiễm nCoV. Họ đều đi chung chuyến bay từ Các Tiểu vương quốc Arab Thống nhất về nước, cách ly tập trung ngay tại Bạc Liêu, không có nguy cơ lây nhiễm cộng đồng.\r\n\r\nTrong số các ca nhiễm, 148 ca \"xâm nhập\" được cách ly ngay sau khi nhập cảnh; 140 ca do lây nhiễm trong cộng đồng.\r\n\r\nKể từ ngày 16/4 đến nay là 22 ngày, Việt Nam chưa phát hiện thêm ca lây nhiễm trong cộng đồng.\r\n\r\n55 bệnh nhân đang điều trị tại các cơ sở y tế đa số sức khỏe ổn định. 14 bệnh nhân xét nghiệm âm tính lần một, 7 người âm tính lần hai.\r\n\r\n\"Bệnh nhân 91\" rất nguy kịch. Mẫu bệnh phẩm dịch tỵ hầu của bệnh nhân ngày 6/5 dương tính nCoV, trong khi mẫu máu và dịch rửa phế quản thì âm tính. Ngoài ra, men gan tăng, xét nghiệm tầm soát nhiễm trùng có xu hướng tăng, siêu âm cho thấy tràn khí màng phổi phải.\r\n\r\n\"Bệnh nhân 20\" chuyển từ nguy kịch sang trạng thái nặng, thở oxy không xâm nhập, hồi phục tốt.', NULL),
(5, 2, 'Thủ tướng đề nghị chưa tăng lương cơ sở và lương hưu từ 1/7', 'Đề nghị QH xem xét, cân nhắc trước mắt chưa tăng mức lương cơ sở đối với cán bộ, công chức, viên chức, lực lượng vũ trang và lương hưu từ ngày 1/7 do ảnh hưởng của dịch Covid-19.', 'thu-tuong-nghi-chua-tang-luong.jpg', 'Đề nghị QH xem xét, cân nhắc trước mắt chưa tăng mức lương cơ sở đối với cán bộ, công chức, viên chức, lực lượng vũ trang và lương hưu từ ngày 1/7 do ảnh hưởng của dịch Covid-19.', NULL),
(6, 2, 'Phó cục trưởng An ninh mạng làm Giám đốc Công an tỉnh Thanh Hóa', 'Đại tá Trần Phú Hà, Phó cục trưởng Cục An ninh mạng và phòng chống tội phạm công nghệ cao, Bộ Công an giữ chức vụ Giám đốc Công an tỉnh Thanh Hóa.', 'pho-cuc-truong-an-ninh-mang-lam-giam-doc-cong-an-tinh-thanh-hoa.jpg', 'Đại tá Trần Phú Hà, Phó cục trưởng Cục An ninh mạng và phòng chống tội phạm công nghệ cao, Bộ Công an giữ chức vụ Giám đốc Công an tỉnh Thanh Hóa.', NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_lien_he`
--
ALTER TABLE `tbl_lien_he`
  ADD PRIMARY KEY (`id_lien_he`);

--
-- Chỉ mục cho bảng `tbl_loai_san_pham`
--
ALTER TABLE `tbl_loai_san_pham`
  ADD PRIMARY KEY (`id_loai_san_pham`);

--
-- Chỉ mục cho bảng `tbl_loai_tin_tuc`
--
ALTER TABLE `tbl_loai_tin_tuc`
  ADD PRIMARY KEY (`id_loai_tin_tuc`);

--
-- Chỉ mục cho bảng `tbl_nguoi_dung`
--
ALTER TABLE `tbl_nguoi_dung`
  ADD PRIMARY KEY (`id_nguoi_dung`);

--
-- Chỉ mục cho bảng `tbl_san_pham`
--
ALTER TABLE `tbl_san_pham`
  ADD PRIMARY KEY (`id_san_pham`,`gia_ban`);

--
-- Chỉ mục cho bảng `tbl_tin_tuc`
--
ALTER TABLE `tbl_tin_tuc`
  ADD PRIMARY KEY (`id_tin_tuc`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_lien_he`
--
ALTER TABLE `tbl_lien_he`
  MODIFY `id_lien_he` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tbl_loai_san_pham`
--
ALTER TABLE `tbl_loai_san_pham`
  MODIFY `id_loai_san_pham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tbl_loai_tin_tuc`
--
ALTER TABLE `tbl_loai_tin_tuc`
  MODIFY `id_loai_tin_tuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tbl_nguoi_dung`
--
ALTER TABLE `tbl_nguoi_dung`
  MODIFY `id_nguoi_dung` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tbl_san_pham`
--
ALTER TABLE `tbl_san_pham`
  MODIFY `id_san_pham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tbl_tin_tuc`
--
ALTER TABLE `tbl_tin_tuc`
  MODIFY `id_tin_tuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
