-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 14, 2019 lúc 02:30 AM
-- Phiên bản máy phục vụ: 10.1.36-MariaDB
-- Phiên bản PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ccq1711d`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `brands`
--

CREATE TABLE `brands` (
  `id` int(11) NOT NULL,
  `brand_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `trash` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `brands`
--

INSERT INTO `brands` (`id`, `brand_name`, `status`, `trash`) VALUES
(1, 'APPLE', 1, 0),
(2, 'SAMSUNG', 1, 0),
(3, 'HUAWEI', 1, 0),
(4, 'VINGROUP', 1, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent` tinyint(4) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `trash` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `category_name`, `parent`, `status`, `trash`, `created_at`, `updated_at`) VALUES
(3, 'IPHONE', 10, 1, 0, '2019-06-08 12:18:41', '2019-06-08 00:18:41'),
(4, 'SAMSUNG', 10, 1, 0, '2019-05-08 13:16:49', '2019-05-08 01:16:49'),
(7, 'VSMART', 10, 1, 0, '2019-05-08 07:52:42', '2019-03-24 09:54:42'),
(8, 'HAUWEI', 10, 1, 0, '2019-05-12 10:06:47', '2019-04-09 13:03:42'),
(9, 'PHỤ KIỆN', 0, 0, 0, '2019-06-05 11:02:20', '2019-04-29 21:29:31'),
(10, 'DIEN THOAI', 0, 0, 0, '2019-05-11 07:05:12', '2019-05-10 19:03:35'),
(11, 'ĐỒNG HỒ APPLE', 9, 1, 0, '2019-05-10 14:57:04', '2019-04-17 07:19:54'),
(12, 'TAI NGHE APPLE', 9, 1, 0, '2019-05-10 14:57:02', '2019-04-20 13:44:59'),
(14, 'IPHONE 6s', 10, 1, 1, '2019-05-11 07:06:35', '2019-05-07 18:16:58');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `comment_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `comment_content` tinytext COLLATE utf8mb4_unicode_ci NOT NULL,
  `score` tinyint(4) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `trash` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `contactfullname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contactemail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contactphone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contacttittle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contactdetail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `contacts`
--

INSERT INTO `contacts` (`id`, `contactfullname`, `contactemail`, `contactphone`, `contacttittle`, `contactdetail`, `created_at`, `updated_at`) VALUES
(14, 'thanh vinh', 'thanhvinh199700@gmail.com', '0929506569', 'vinh đẹp trai', 'Vinh đẹp trai', '2019-06-11 00:08:13', NULL),
(15, 'thanh vinh', 'thanhvinh199700@gmail.com', '0929506569', 'vinh đẹp trai', 'Vinh đẹp trai', '2019-06-11 00:08:13', NULL),
(16, 'thanh vinh', 'thanhvinh199700@gmail.com', '0929506569', 'vinh đẹp trai', 'Vinh đẹp trai', '2019-06-11 00:08:13', NULL),
(17, 'thanh vinh', 'thanhvinh199700@gmail.com', '0929506569', 'vinh đẹp trai', 'Vinh đẹp trai', '2019-06-11 00:08:13', NULL),
(18, 'thanh vinh', 'thanhvinh199700@gmail.com', '0929506569', 'vinh đẹp trai', 'Vinh đẹp trai', '2019-06-11 00:08:13', NULL),
(19, 'thanh vinh', 'thanhvinh199700@gmail.com', '0929506569', 'vinh đẹp trai', 'Vinh đẹp trai', '2019-06-11 00:08:13', NULL),
(20, 'thanh vinh', 'thanhvinh199700@gmail.com', '0929506569', 'vinh đẹp trai', 'Vinh đẹp trai', '2019-06-11 00:08:13', NULL),
(21, 'thanh vinh', 'thanhvinh199700@gmail.com', '0929506569', 'vinh đẹp trai', 'Vinh đẹp trai', '2019-06-11 00:08:13', NULL),
(22, 'thanh vinh', 'thanhvinh199700@gmail.com', '0929506569', 'vinh đẹp trai', 'Vinh đẹp trai', '2019-06-11 00:08:13', NULL),
(23, 'thanh vinh', 'thanhvinh199700@gmail.com', '0929506569', 'vinh đẹp trai', 'Vinh đẹp trai', '2019-06-11 00:08:13', NULL),
(24, 'thanh vinh', 'thanhvinh199700@gmail.com', '0929506569', 'vinh đẹp trai', 'Vinh đẹp trai', '2019-06-11 00:08:13', NULL),
(25, 'nguyen thanh vinh', 'thanhvinh199700@gmail.com', '0929506569', 'vinh oc chó', 'vinh oc chó', '2019-06-11 22:54:52', NULL),
(26, 'tổng thống', 'tongthong@gmail.com', '0336605716', 'vinh đẹp trai', 'hajdhsakjdhkajs', '2019-06-12 22:23:28', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `fnews`
--

CREATE TABLE `fnews` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `trash` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `fnews`
--

INSERT INTO `fnews` (`id`, `title`, `short_description`, `content`, `avatar`, `created_at`, `updated_at`, `status`, `trash`) VALUES
(3, 'Màu sắc và nhiều tính năng Pixel 3a và 3a XL xuất hiện trong kết xuất đồ họa', 'Không thiếu rò rỉ về Pixel 3a và 3a XL trong những tháng qua nhưng khi thời điểm ra mắt đến gần mới là lúc hình ảnh rõ hơn về chúng xuất hiện.', 'Trước thời điểm thông báo sản phẩm dự kiến xuất hiện vào ngày 7/5, trang Droid Life đã đăng tải những gì công ty gọi là bản hoàn chỉnh chính thức của thiết bị trong các màu sắc Trắng, Tím và Đen, kèm tài liệu quảng cáo chính thức.\r\n\r\nMọi người đã thấy một số kết xuất thiết bị trước đây, nhưng đây là lần đầu tiên chúng xuất hiện cùng nhau từ nhiều góc độ. Các hình ảnh khẳng định lại các khía cạnh bị nghi ngờ trước đây như máy quét dấu vân tay phía sau, camera đơn phía sau và nút nguồn màu độc đáo. Phong cách của chúng rất phù hợp với các điện thoại pixel trước đó.\r\n\r\nDroid Life cho biết các điện thoại mới sẽ có tính năng Night Vision, Motion Auto Focus, Portrait Mode và sạc nhanh, cho phép sạc để xài 7 giờ trong chu kì 15 phút. Trong khi đó, thông số kĩ thuật được đồn đại là đi kèm chip Snapdragon 670, RAM 4 GB, bộ nhớ trong đến 64 GB và màn hình 1080p.\r\n\r\n Ảnh\r\nCuối cùng, các tài liệu quảng cáo cũng đề xuất điện thoại sẽ nhận được 3 năm cập nhật bảo mật, giống như các thiết bị Pixel khác và sẽ được trang bị tính năng Call Screening ở Mỹ và Canada.\r\n\r\nMặc dù thiếu thông tin cụ thể từ Google, nhưng có vẻ như Pixel 3a và 3a XL gần như chắc chắn sẽ cập bến vào tuần tới.\r\n\r\nTheo Tạp chí công nghệ.', 'avata3.jpg', '2019-05-02 19:16:53', '2019-05-02 19:16:53', 1, 0),
(4, 'Google Pixel 3a và Pixel 3a XL ra mắt ngày 8/5', 'Đã có nhiều tin đồn về Google Pixel 3a sắp ra mắt, và cuối cùng thì \"gã khổng lồ tìm kiếm\" mới cung cấp thông tin xác nhận thời điểm ra mắt sản phẩm.', 'Theo GSMArena, Google đã thiết lập một trang đích tại nhà bán lẻ trực tuyến Flipkart của Ấn Độ, gợi ý rằng công ty sẽ cung cấp nhiều thông tin hơn về một sản phẩm đến tay người tiêu dùng vào ngày 8/5. Điều này có nghĩa đúng 1 tuần nữa thiết bị mới sẽ có mặt tại các nhà bán lẻ.\r\n\r\nMặc dù thông tin này không xác nhận bất kì ngày ra mắt nào nhưng vì các điện thoại Pixel 3 hiện tại đã có sẵn trên Flipkart nên nhiều khả năng Google ám chỉ đến Pixel 3a và Pixel 3a XL đã rò rỉ trước đó.\r\n\r\nCác hình ảnh rò rỉ gần đây cho thấy vẻ ngoài của điện thoại mới có nhiều nét tương đồng với các điện thoại cao cấp hiện tại của Google.\r\n\r\nVề thông số kĩ thuật, thông tin khó hiểu hơn một chút là điện thoại có chip Snapdragon 670 với biến thể thường hoặc Snapdragon 710 với biến thể XL. Điểm chung là chúng đều có camera sau 12 MP và camera đơn 8 MP ở mặt trước.\r\n\r\nTheo Thanh Niên.', 'avata4.jpg', '2019-05-02 19:16:53', '2019-05-02 19:16:53', 1, 0),
(5, 'Mi Band 4 lần đầu lộ ảnh thực tế, hỗ trợ đo điện tâm đồ', 'Vòng đeo sức khỏe thế hệ tiếp theo của Xiaomi có thể được nâng cấp cảm biến, kết nối Bluetooth tiết kiệm năng lượng.', 'Trang DroidShout cho biết Mi Band 4 đã được gửi tới cơ quan quản lí điện tử của Đài Loan để chứng nhận, do đó thiết bị sẽ được phát hành sớm. Hình ảnh rò rỉ cho thấy sản phẩm mới của Xiaomi sẽ có màn hình lớn hơn so với Mi Band 3 hiện nay, mặt sau là cảm biến đo nhịp tim quang học PPG.\r\n\r\nMột số nguồn tin nói rằng Mi Band 4 sẽ hỗ trợ theo dõi điện tâm đồ (ECG), tính năng cao cấp được Apple đưa lên Watch series 4 mới nhất. Bên cạnh đó, sản phẩm của Xiaomi còn dùng chuẩn kết nối Bluetooth 5.0 với tầm phủ sóng xa hơn 4 lần, tốc độ tăng gấp đôi và tiết kiệm năng lượng hơn 2,5 lần so với công nghệ 4.0.\r\n\r\nMi Band 4 bán ở Trung Quốc sẽ có thêm kết nối NFC để hỗ trợ thanh toán điện tử, trong khi đó phiên bản cho các thị trường khác không có tính năng này. Mi Band 3 đang được bán với giá khoảng 30 USD (khoảng 700.000 đồng), phiên bản kế nhiệm được kì vọng có giá cao hơn không nhiều.', 'avata5.jpg', '2019-05-02 19:19:31', '2019-05-02 19:19:31', 1, 0),
(6, 'Nokia 4.2 bắt đầu được đặt hàng trước, sẵn sàng lên kệ', 'Nếu đang quan tâm đến smartphone Android với mức giá hấp dẫn cùng cấu hình tốt, Nokia 4.2 chính là lựa chọn hấp dẫn cho mọi người.', 'Ở thời điểm hiện tại, người tiêu dùng tại Mỹ đã có thể đặt mua Nokia 4.2 thông qua Amazon. Bên cạnh đó, Best Buy cũng bắt đầu tiếp nhận đơn đặt hàng Nokia 4.2.\r\n\r\nNokia 4.2 được thiết lập sẽ phát hành chính thức vào ngày 14/5 với các màu đen và hồng là những tùy chọn màu duy nhất. Giá bán 189 USD khiến cho sản phẩm dễ dàng mua hơn, tuy nhiên cần nhớ rằng điện thoại sẽ chỉ hoạt động với mạng GSM.\r\n\r\nĐược công bố tại MWC 2019, Nokia 4.2 được HMD Global ví là thiết bị hàng đầu với giá phải chăng. Sản phẩm có màn hình IPS 5,71 inch với độ phân giải HD+ (1520 x 720 pixel), camera kép 13 MP và 2 MP ở mặt sau, chip Snapdragon 439, RAM 3 GB, bộ nhớ trong 32 GB và pin 3.000 mAh.\r\n\r\nNokia 4.2 chạy trên nền tảng Android 9 Pie và là thiết bị Android One. Điều đó có nghĩa là điện thoại dự kiến ​​sẽ nhận được các bản cập nhật bảo mật hàng tháng và ít nhất hai bản cập nhật Android chính, gồm Android Q và Android R.\r\n\r\nCuối cùng, Nokia 4.2 là một trong những điện thoại Nokia đầu tiên có nút Google Assistant chuyên dụng. Với một lần bấm sẽ mở Assistant, và bấm đúp sẽ mở Google Assistant bằng nguồn cấp dữ liệu và nhấn giữ giữ Assistant ở chế độ nghe chủ động để duy trì cuộc trò chuyện.', 'avata6.jpg', '2019-05-02 19:19:31', '2019-05-02 19:19:31', 1, 0),
(7, 'Ra mắt Vivo Z3x giá cực “mềm”, camera sau kép', 'Mới đây, chiếc smartphone giá rẻ - Vivo Z3x (là phiên bản mới của Vivo Z1) đã được công bố.', 'nhưng điện thoại lại được gọi là vivo Z3x.\r\n\r\nĐiện thoại sử dụng con chip Snapdragon 660 kết hợp với RAM 4 GB và bộ nhớ trong 64 GB. Màn hình của máy là màn hình LCD cỡ 6,26 inch, độ phân giải Full HD + và có thiết kế “tai thỏ” chứa camera selfie 16 MP, khẩu độ f / 2.0. Camera mặt trước là sự khác biệt phần cứng duy nhất so với Vivo Z1 đã xuất hiện chính thức gần một năm nay.\r\n\r\n Ảnh\r\nCận cảnh camera sau của Vivo Z3x.\r\nLà một thiết bị năm 2019, Vivo Z3x được trang bị đi kèm với giao diện Funtouch OS 9 dựa trên hệ điều hành Android Pie và có nhiều tính năng tập trung vào trò chơi như Game Turbo và System Turbo. Ngoài ra, chiếc smartphone giá rẻ này còn có camera AI cùng với cụm camera sau kép 13 MP + 2 MP. Ở mặt lưng, điện thoại có máy quét dấu vân tay để mở khóa an toàn hơn.\r\n\r\n Ảnh\r\nPhiên bản màu đỏ.\r\nVới 3 tùy chọn màu Đỏ, Tím hoặc Đen, điện thoại chỉ có một mức giá - 180 USD (tương đương 4,18 triệu đồng). Khách hàng có thể đặt hàng ngay hôm nay trên trang web trực tuyến của Vivo.', 'avata7.jpg', '2019-05-02 19:42:17', '2019-05-02 19:42:17', 1, 0),
(10, 'Mẫu smartphone Honor 20 Lite có gì mới?', 'Honor 20 Lite mang đến cho người dùng một sản phẩm trang bị camera selfie lên đến 32 MP, kèm cụm 3 camera ở mặt sau máy khá ấn tượng.', 'Thiết kế\r\nỞ mặt trước, điện thoại được trang bị màn hình 6,21 inch độ phân giải 2.340 x 1.080 (Full HD+) cùng với notch hình giọt nước chứa camera selfie. Ở phần dưới cùng là jack cắm âm thanh 3,5 mm, lỗ micro, cổng micro-USB và loa tản nhiệt dạng lưới.\r\n\r\nPhía bên phải là nút nguồn và điều chỉnh âm lượng. Khá ấn tượng khi điện thoại được phủ cả 4 mặt bằng màu xanh tuyệt đẹp. Thay vì đặt khay SIM/microSD ở bên trái như hầu hết điện thoại, Honor quyết định đặt nó ở phần trên cùng của smartphone.\r\n\r\n Ảnh\r\nMặt dưới của điện thoại chỉ trang bị cổng microUSB\r\nMột trong những lựa chọn khá hấp dẫn với Honor 20 Lite là Phantom Blue có sự pha trộn giữa màu Xanh và Tím, với hiệu ứng gradient cho phép chuyển màu tùy góc nhìn.\r\n\r\nPhần cứng\r\nHonor 20 Lite được trang bị chip Kirin 710, đồ họa Mali-G51, RAM 4 GB và bộ nhớ trong 128 GB. Đây là cấu hình đảm bảo mang đến cho người dùng một thiết bị có hiệu suất mượt mà. Nó cũng tích hợp pin 3.400 mAh cho thời lượng hoạt động tốt, nhưng pin lớn hơn chắc chắn sẽ tốt hơn. Tuy nhiên, máy chỉ được trang bị cổng kết nối micro-USB thay vì USB-C hiện đại hơn, điều này khiến việc sạc pin của máy không ấn tượng.\r\n\r\nĐiểm thu hút chính của điện thoại này chắc chắn là thiết lập camera ba ống kính phía sau, bao gồm camera chính 24 MP, camera góc rộng 8 MP và camera với cảm biến độ sâu 2 MP. Mảng ba camera hoạt động khá tốt, đặc biệt khi chụp ảnh ngoài trời. Trong khi đó, ở mặt trước là camera 32 MP cho bức ảnh chụp selfie thực sự hoàn hảo, đặc biệt nhờ tích hợp nhiều chế độ làm đẹp.\r\n\r\n Ảnh\r\nHệ thống camera ba ống kính mặt sau với sự hỗ trợ của trí tuệ nhân tạo\r\nHệ thống camera trên điện thoại có khả năng chụp ảnh ấn tượng hơn nhờ sự hỗ trợ của trí tuệ nhân tạo (AI). Nó có thể tự động phát hiện xem người dùng đang chụp ảnh nhóm, ảnh phong cảnh hay thậm chí là các dòng văn bản, sau đó sẽ hoạt động để đảm bảo người dùng nhận được bức ảnh với chất lượng tốt nhất có thể. Điện thoại cũng có chế độ chụp đêm (Night) tuyệt vời.\r\n\r\n Ảnh\r\nPhần mềm xử lí thông minh, hiệu năng làm việc tốt\r\nHonor 20 Lite cung cấp thời lượng pin kéo dài 8 giờ 30 phút. Tuy ngắn nhưng nhìn chung đối với nhu cầu sử dụng trung bình là hoàn toàn có thể chấp nhận. Điều này được thể hiện trong bài kiểm tra sử dụng pin cá nhân, nơi điện thoại được khởi động các ứng dụng nhắn tin (WhatsApp và Facebook Messenger), một số phương tiện truyền thông xã hội như Instagram và Facebook thì thời lượng kéo dài khoảng 1,5 ngày trước khi cần sạc lại.', 'avata10.jpg', '2019-05-02 19:52:26', '2019-05-02 19:52:26', 1, 0),
(11, 'Màn hình OLED trên OnePlus 7 Pro nhận đánh giá A+ từ DisplayMate', 'OnePlus 7 Pro dự kiến sẽ đi kèm màn hình chất lượng cao khi sản phẩm ra mắt vào tháng tới.', 'Trong thông báo mới nhất từ OnePlus, công ty nói rằng màn hình OnePlus 7 Pro được xếp hạng A+ từ thử nghiệm đến từ các chuyên gia tại DisplayMate. Dựa vào thông cáo báo chí do OnePlus phát hành, đánh giá này có nghĩa thiết bị sẽ trở thành một trong những smartphone có màn hình tốt nhất trên thị trường.\r\n\r\nOnePlus tuyên bố rằng OnePlus 7 Pro đã đạt được kết quả cực kì tốt khi có độ chính xác về màu sắc, độ sáng, độ tương phản chính xác và mật độ điểm ảnh tốt. Hơn nữa, công ty cho biết họ đã nhận được chứng nhận an toàn của người dùng nhờ vào chức năng bảo vệ mắt được cải thiện. Cụ thể hơn, hãng cho biết chức năng hiện cho phép người dùng điều chỉnh nhiệt độ và độ sáng.\r\n\r\nKhông biết liệu OnePlus 7 Pro có đánh bại gia đình Galaxy S10 để được trao vương miện cho màn hình smartphone tốt nhất hay không, nhưng OnePlus tuyên bố rằng màn hình này là một sản phẩm tốt nhất trong lớp. Tuy nhiên, đánh giá chắc chắn cho thấy rằng công ty đang làm tốt với tuyên bố của mình.\r\n\r\nOnePlus cho biết DisplayMate sẽ cung cấp một đánh giá chi tiết khi điện thoại ra mắt vào ngày 14/5. Vì vậy, mọi người có thể phải đợi đến lúc đó để tìm hiểu xem liệu nó có thực sự tốt nhất khi so sánh với các smartphone cao cấp của Samsung hay không.\r\n\r\n Ảnh\r\nChất lượng màn hình sẽ là một trong những điểm nhấn của sản phẩm.\r\nDisplayMate và OnePlus không tiết lộ bất kì chi tiết màn hình nào, nhưng một rò rỉ gần đây cho biết chúng ta có thể mong đợi màn hình 1440p với tần số làm mới 90 Hz sẽ đến với nó. Nếu được xác nhận, điều này có nghĩa đó là một bản nâng cấp lớn so với OnePlus 6T năm ngoái, cung cấp màn hình Full HD+ với tần số làm mới 60 Hz.\r\n\r\nTheo Dân Việt.', 'avata11.jpg', '2019-05-02 19:52:26', '2019-05-02 19:52:26', 1, 0),
(12, 'iPhone XR tiếp theo sẽ có camera kép bố trí trong hình tam giác', 'iPhone XR tiếp tục chứng minh mình là lựa chọn hấp dẫn cho những ai cần một chiếc iPhone hiện đại mà chi phí khá phù hợp.', 'Phiên bản kế nhiệm của iPhone XR sẽ mang đến một trong những nâng cấp rất đáng chú ý là hệ thống máy ảnh kép phía sau. Nhưng thay vì sử dụng thiết kế dọc hoặc ngang phổ biến như hiện nay, Apple có cách bố trí sắp xếp khác biệt cho sản phẩm của mình.\r\n\r\nDựa vào nguồn tin MacOtakara (Nhật Bản) cho thấy, Apple có vẻ như đang tập trung vào việc giảm chi phí sản xuất. Điều đó chủ yếu liên quan đến việc tái sử dụng cùng một thiết kế và một số thành phần giống nhau trên các mẫu iPhone năm nay. Điều này có nghĩa, mặc dù iPhone XR 2 rẻ hơn nhưng nó sẽ có một số thành phần quan trọng được giữ nguyên.\r\n\r\n Ảnh\r\nMột vài cách bố trí có thể đến với iPhone XR 2.\r\nChẳng hạn, iPhone XR 2 sẽ chia sẻ cùng một ống kính góc rộng và ống kính tele như iPhone 11 và 11 Max dự kiến ra mắt cuối năm nay. Tuy nhiên, một số có thể mang đến một bước tiến đáng kể so với máy ảnh đơn năm ngoái, đặc biệt trong bộ phận chụp ảnh Portrait. Máy ảnh tele được cho là chỉ cung cấp chức năng zoom quang 2x.\r\n\r\nApple sẽ sử dụng hình dạng tam giác cho thiết lập camera của mình, và đặt trong khối hình vuông giống như các rò rỉ với iPhone 11 gần đây. Hệ thống đèn flash LED dường như chiếm vị trí của camera thứ ba, để lại lỗ hổng thứ tư không có gì.\r\n\r\n Ảnh\r\nSẽ có tổng cộng 3 mẫu iPhone 2019 được Apple ra mắt vào mùa thu năm nay.\r\nSự giống nhau không kết thúc ở đó. iPhone XR 2 được cho là cũng sẽ sử dụng cùng một tấm kính 3D đúc như rò rỉ gần đây của iPhone 11. Điều này trông giống hệt với phiên bản đắt tiền hơn, với kích thước là sự khác biệt duy nhất có thể nhìn thấy ngay lập tức.', '12.jpg', '2019-05-02 19:55:04', '2019-05-02 19:55:04', 1, 0),
(13, 'Đây là chiếc smartphone quay video 8K mà Galaxy S10 phải thán phục', 'Nubia Red Magic 3 xuất hiện ấn tượng với khả năng quay video 8K và thông số kĩ thuật “quái vật”.', 'Ngày nay, nhiều nhà sản xuất thường cung cấp một loạt các điện thoại thông minh với thông số kĩ thuật cao cấp với mức giá cạnh tranh. Tuy nhiên, ZTE quyết định đi theo con đường khác và tích hợp mọi thứ để tạo ra một “con quái vật” - nubia Red Magic 3 với giá vô cùng hợp lí.\r\n\r\nChiếc smartphone chơi game mới này cung cấp chip xử lí hàng đầu và RAM 12 GB nhưng nổi bật hơn cả với pin lớn - 5.000 mAh (với sạc nhanh 27W, hỗ trợ Power Delivery). Thiết bị có hai kiểu làm mát bên trong, cung cấp khả năng quay video 8K và quay video siêu chậm với tốc độ 1920 khung hình / giây.\r\n\r\n Ảnh\r\nNgoại hình cực &quot;ngầu&quot;.\r\nCụ thể, chiếc smartphone này sở hữu màn hình AMOLED 6,65 có tốc độ làm mới 90 Hz và tốc độ làm mới cảm ứng 240 Hz. Điện thoại có loa ở cả hai bên, cho âm thanh nổi và đi kèm với các rung động tùy chỉnh 4D.\r\n\r\nZTE mặc dù chỉ tích hợp cho máy một camera ở mặt sau nhưng điều đáng nói là nó có thể quay video 8K và quay video siêu chậm (slow motion) lên tới 1920 khung hình / giây, hoàn toàn \"đánh bại\" khả năng quay chậm tốc độ 960 khung hình / giây trong Galaxy S10 và các flagship khác. Cảm biến được sử dụng là 48 MP IMX586, khẩu độ rộng f / 1.7.\r\n\r\n Ảnh\r\nPhiên bản màu đỏ.\r\nCác game thủ có thể thỏa sức chơi game trên chiếc điện thoại này mà không sợ nóng vì thiết bị đã có hệ thống làm mát bằng chất lỏng ICE thế hệ thứ hai và một chiếc quạt làm giảm nhiệt độ điện thoại xuống 16 độ C. Theo nhà sản xuất, các hiệu ứng làm mát có thể cung cấp phân phối nhiệt lên tới 500% và bao phủ 32.000 sq.mm, đủ để giữ cho điện thoại chạy “ngon” trong cả những trận chiến cam go nhất.\r\n\r\nĐiện thoại có nút action - hành động ở phía trên bên phải, phía trên lưới làm mát và hoạt động như một phím bổ sung trong khi chơi trò chơi. Bạn cũng có thể sử dụng máy quét dấu vân tay hình kim cương ở mặt sau để mở khóa điện thoại.\r\n\r\n Ảnh\r\nCác tùy chọn màu của Nubia Red Magic 3.\r\nĐiện thoại có bốn mức giá, khởi điểm ở mức ​​430 USD (tương đương 10 triệu đồng) cho phiên bản màu Đen RAM 6/ ROM 64 GB. Người dùng có thể chi ra 475 USD (khoảng 11,04 triệu đồng) để nâng bộ nhớ lên gấp đôi - RAM 8/ ROM 128 GB hoặc mua phiên bản màu Đỏ hoặc Đen có giá 520 USD (khoảng 12,09 triệu đồng).\r\n\r\nĐặc biệt, phiên bản “quái vật” với RAM 12/ ROM 256 GB sẽ có giá chỉ 640 USD (khoảng 14,88 triệu đồng) với màu Đỏ gradient hoặc rằn ri - Camo ở mặt sau. Điện thoại sẽ được bán ra từ ngày 03/05 tại các cửa hàng Nubia và nhà bán lẻ trực tuyến JD.com.', '13.jpg', '2019-05-02 19:55:04', '2019-05-02 19:55:04', 1, 0),
(14, 'Hé lộ nguyên nhân khiến Intel ngừng phát triển modem 5G', 'Có vẻ như việc Apple và Qualcomm đạt thỏa thuận là lí do khiến Intel từ bỏ phát triển modem 5G là thông tin chưa thật sự đầy đủ.', 'Báo cáo từ Telegraph mới đây cho thấy việc Apple thuê Umashankar Thyagarajan - một cựu nhân viên của Intel - vào tháng 2 mới khiến hãng sản xuất chip quyết định dừng lại. Ở Intel, Thyagarajan là kĩ sư dự án chip XMM 8160 của Intel. Ông cũng đóng vai trò chính tạo ra các modem Intel được sử dụng trong iPhone Xs và Xr.\r\n\r\nCả Apple và Intel đều không bình luận về báo cáo này. Cũng không rõ chính xác những gì Thyagarajan đang làm trong vai trò mới của mình. Mặc dù thiết kế chip không dây là khả năng chính của ông nhưng trong hồ sơ LinkedIn, ông nói rằng mình đang đảm nhận vị trí “kiến trúc”.\r\n\r\nNhư đã biết, Apple đang nuôi ý định phát triển chip modem di động riêng, bao gồm việc tuyển dụng nhiều nhân tài có liên quan trong một thời gian dài. Thậm chí, công ty còn tìm cách thuê các nhân viên từng làm việc tại Qualcomm.\r\n\r\nTuy nhiên, việc thuê Thyagarajan được xem là hành động quyết liệt nhất khi nó chứng tỏ công ty đang quyết tâm giành lấy một trong những tài năng trong lĩnh vực phần cứng di động, ngay cả người đó làm việc trong một công ty đối tác của họ.', '14.jpg', '2019-05-02 19:56:58', '2019-05-02 19:56:58', 1, 0),
(15, 'Nubia ra mắt smartphone hỗ trợ quay phim 8K', 'Nubia ra mắt smartphone hỗ trợ quay phim 8K', 'Theo Engadget, Nubia Red Magic 3 tích hợp quạt làm mát và hệ thống làm mát bằng chất lỏng, cũng như một dock hỗ trợ kết nối internet có dây, khả năng quay video 8K và một số tính năng phần mềm được thiết kế dành riêng cho game thủ.\r\n\r\nHệ thống quạt của Red Magic 3 có thể quay tối đa 14.000 vòng/phút, tiêu chuẩn IP55 cộng với buồng cách li riêng, vì vậy người dùng sẽ không phải lo lắng về sự xâm nhập của bụi và chất lỏng. Nó có thể hoạt động tốt với hơn 30.000 giờ sử dụng liên tục mặc dù Nubia không cung cấp tốc độ được sử dụng cho thử nghiệm. Sự kết hợp giữa quạt với ống dẫn nhiệt, hiệu suất truyền nhiệt của điện thoại tốt hơn năm lần so với các phương pháp làm mát thụ động thông thường, do đó đảm bảo trải nghiệm chơi game mượt mà trong thời gian dài hơn.\r\n\r\nGiống như người tiền nhiệm và một số đối thủ cạnh tranh trực tiếp, Red Magic 3 có dải đèn LED RGB ở mặt sau mang đậm phong cách game thủ. Đầu đọc dấu vân tay phía trên dải RGB cũng có thể được sử dụng như một nút để chơi game. Điện thoại được thừa hưởng công tắc phần cứng để chuyển qua bảng điều khiển \"Red Magic Game Space 2.0\", nơi bạn có thể truy cập thư viện trò chơi và các cài đặt liên quan như tốc độ quạt, trình quay màn hình và các thông báo.\r\n\r\nĐối với máy ảnh, Red Magic 3 có camera sau 48 MP khẩu độ f1.7 với cảm biến Sony IMX586, cùng camera trước 16 MP khẩu độ f/2.0. Máy ảnh của Red Magic 3 hiện thiết lập hai kỉ lục mới trong ngành công nghiệp di động: quay và xử lí các video chuẩn 8K và chế độ chuyển động siêu chậm lên đến 1.920 khung hình/giây.\r\n\r\nCác yếu tố phần cứng khác của Red Magic 3 gồm nền tảng Android 9, chipset Qualcomm Snapdragon 855 với bộ nhớ RAM tối đa lên đến 12 GB RAM và 256 GB dung lượng lưu trữ, màn hình 6,65 inch FHD+ AMOLED cùng với đó là pin 5.000mAh với khả năng sạc nhanh USB Power Delivery lên tới 27W.\r\n\r\nRed Magic 3 sẽ ra mắt đầu tiên tại Trung Quốc vào ngày 3/5 tới với giá khởi điểm khoảng 430 USD (cho phiên bản 6 GB RAM và 64 GB lưu trữ) và tối đa 640 USD (cho phiên bản 12 GB RAM và 256 GB lưu trữ). Nubia Red Magic 3 cũng dự kiến có mặt tại Mỹ, Canada, Anh và châu Âu cuối tháng 5 tới. Máy cũng bán kèm một số phụ kiện như bộ hỗ trợ radio 5 GB, dock kết nối LAN.', '15.jpg', '2019-05-02 19:56:58', '2019-05-02 19:56:58', 1, 0),
(16, 'Ảnh smartphone màn hình gập Motorola Razr lộ diện', 'Phiên bản màn hình gập của Motorola kế thừa thiết kế của mẫu điện thoại vang bóng một thời Razr 2004.', 'Motorola Razr 2019 là một trong những thiết bị di động được chờ đợi nhất năm nay. Đã có nhiều tin đồn liên quan tới sản phẩm này, mới nhất là từ Slashleaks.\r\n\r\nMáy dự kiến sử dụng màn hình gập đôi 6,2 inch tỉ lệ dài 22:9 nhưng vẫn có \"tai thỏ\" phía trên. Tương tự Razr V3 ra đời cách đây 15 năm, sản phẩm mới được thiết kế phần \"cằm\" khá dày để máy trông liền lạc khi gập lại, đồng thời cho phép tích hợp loa lớn hơn. Hiện chưa rõ Motorola có trang bị thêm một màn hình nhỏ bên ngoài cho Razr 2019 hay không.\r\n\r\n Ảnh\r\nHộp đựng được cho là của Razr.\r\nMotorola Razr được kì vọng sẽ có cấu hình cao cấp như Samsung Galaxy Fold hay Huawei Mate X, nhưng trang XDA Developers cho biết máy chỉ sử dụng bộ vi xử lí Snapdragon 710, RAM 4-6 GB và bộ nhớ trong 64 GB hoặc 128 GB. Do có thiết kế mỏng, điện thoại mới dùng pin 2.730 mAh nhưng có công nghệ sạc nhanh TurboPower 27W. Sản phẩm dự kiến có giá 1.500 USD nhưng thời gian công bố chưa được tiết lộ.', '16.jpg', '2019-05-02 19:58:52', '2019-05-02 19:58:52', 1, 0),
(17, 'Galaxy Note 10 Pro lộ thông số cực quan trọng, Samfan phấn khởi', 'Rò rỉ mới nhất cung cấp cho chúng ta biết thêm một chút về chiếc phablet cao cấp sắp tới của Samsung.', 'Cho đến nay, điều duy nhất chúng ta đã nghe về Galaxy Note 10 Pro chính là việc nó được lên kế hoạch ra mắt cùng với Galaxy Note 10 thông thường. Mặc dù vậy, rò rỉ mới nhất sẽ giúp người dùng có cái nhìn tốt hơn về sản phẩm này.\r\n\r\nMột bức ảnh được cho là pin của Galaxy Note 10 Pro đã xuất hiện, cho thấy nó có dung lượng 4.500 mAh, tức cao hơn 500 mAh so với pin trên Galaxy Note 9. Điều này được tin tưởng thuộc về Galaxy Note 10 Pro bởi vì nếu nhìn kĩ, mọi người cũng có thể thấy số model EB-BN975ABU của pin, có thể được liên kết với số model SM-N975 tương ứng với Galaxy Note 10 Pro.\r\n\r\n Ảnh\r\nHình ảnh được cho là pin của Galaxy Note 10 Pro.\r\nVẫn chưa có thông tin xác nhận từ Samsung nhưng đây là lần đầu tiên chi tiết về dung lượng pin của dòng Galaxy Note 10 xuất hiện. Nếu mức pin 4.500 mAh có trên Galaxy Note 10 Pro là chính xác, nó sẽ giúp sản phẩm tương đương dung lượng pin của Galaxy S10 5G hiện tại. Nhiều khả năng Samsung tin mức dung lượng này là đủ tốt cho chiếc phablet tiếp theo của hãng.', '17.jpg', '2019-05-02 19:58:52', '2019-05-02 19:58:52', 1, 0),
(18, 'Huawei cũng chuẩn bị có smartphone camera bật lên đầu tiên', 'Hình ảnh về chiếc điện thoại đầu tiên của Huawei có thiết kế camera bật lên vừa bị rò rỉ.', 'Phong cách camera trước ẩn được kết hợp với thiết kế toàn màn hình đang dần trở thành xu hướng lớn tiếp theo của ngành công nghiệp smartphone năm nay. Và những hình ảnh mới nhất đã tiết lộ Huawei sẽ sớm đi theo bước chân của Samsung, Xiaomi và Oppo bằng cách tung ra ý tưởng của riêng mình.\r\n\r\nĐược cho là có tên gọi Huawei P Smart Z, điện thoại thông minh sắp ra mắt có màn hình lớn 6,59 inch, được bao quanh bởi các viền siêu mỏng, không có “notch”. Giao diện mặt trước mới này được kết hợp với một cơ chế bật lên, chứa camera selfie 16 megapixel nằm trên đỉnh của điện thoại thông minh.\r\n\r\nĐáng chú ý, cụm camera sau kép trên P Smart Z được xếp theo chiều dọc ở phía sau, bao gồm một cảm biến chính 16 megapixel và cảm biến độ sâu 2 megapixel. Về thông số kĩ thuật bên trong, giống như nhiều điện thoại tầm trung khác của Huawei, P Smart Z sẽ được cung cấp sức mạnh bởi chip Kirin 710, kết hợp với RAM 4 GB và bộ nhớ trong 64 GB (có hỗ trợ mở rộng qua thẻ nhớ microSD lên tới 512 GB).\r\n\r\n Ảnh\r\nCác tùy chọn màu của máy.\r\nCác thông số kĩ thuật quan trọng khác của chiếc smartphone này bao gồm: hệ điều hành Android 9 Pie và giao diện EMUI 9.1, giắc cắm tai nghe 3,5 mm và pin dung lượng lớn 4.000mAh.\r\n\r\nHuawei P Smart Z sẽ được ra mắt chính thức vào tháng tới. Điện thoại thông minh dự kiến ​​sẽ có các tùy chọn màu như: Đen Midnight, Xanh Emerald và Xanh dương Sapphire Blue, có giá chỉ khoảng 210 Euro (tương đương 4,45 triệu đồng).', '18.jpg', '2019-05-02 20:01:09', '2019-05-02 20:01:09', 1, 0),
(19, 'iPhone 11 chính thức lộ ảnh mô hình CAD với camera lồi điên rồ', 'Nếu hình ảnh là kết thúc cuối cùng, iPhone 11 sẽ mang đến một thiết kế camera đột phá.', 'Các tin đồn gần đây cho biết iPhone 11 (bản kế nhiệm iPhone XS) sẽ chứa camera với phần lồi khủng khiếp ở mặt sau, và hình ảnh mô hình kết xuất dựa trên CAD được cho là cuối cùng của iPhone 11 cho thấy nỗi kinh hoàng thực sự là phần lồi khá lớn.\r\n\r\nVề cơ bản, đây phải là vết lồi lớn nhất từng thấy trên smartphone, vì vậy Apple có thể khoe khoang về nó trong bài thuyết trình ra mắt sản phẩm vào mùa thu này. Nếu đây thực sự là thiết kế cuối cùng của iPhone 11, nó có thể tạo ra sự khác biệt rõ ràng với các sản phẩm đối thủ.\r\n\r\n Ảnh\r\nHệ thống camera sau có phần lồi lên khá lớn.\r\nPhần lồi lớn sẽ là nơi chứa camera 3 ống kính cùng một hệ thống đèn flash LED khá lớn và lỗ mic. Điều thú vị là toàn bộ mặt sau của thiết bị được làm từ một tấm kính duy nhất để che đi phần camera.\r\n\r\n Ảnh\r\nMáy có màn hình 5,8 inch như tiền nhiệm.\r\nỞ mặt trước iPhone 11 có màn hình AMOLED 5,8 inch với kích thước không thay đổi so với iPhone X và XS hiện tại. Nguồn gốc của những hình ảnh này cho biết phần viền xung quanh trở nên mỏng hơn một chút, và điện thoại sắp tới còn lớn hơn so với tiền nhiệm trên tất cả các trục.\r\n\r\n Ảnh\r\nNút công tắc của iPhone 11 đã khác so với tiền nhiệm.\r\nKích thước của iPhone 11 được cho là sẽ là 143,9 x 71,4 x 7,8 mm, trong khi phiên bản XS là 143,6 x 70,9 x 7,7 mm. Các nút bật tắt bên cạnh giờ đây trông cũng khác hơn và tương tự như những gì có trên iPad cũ. Đáng buồn là không có dấu hiệu nào cho thấy sự xuất hiện của USB-C ở phía dưới vì Apple vẫn sẽ sử dụng Lightning cho thế hệ điện thoại này.\r\n\r\n Ảnh\r\nNgoài iPhone 11 còn có iPhone 11 Max và iPhone XR (2019).\r\nCông ty dự kiến ​​sẽ tiết lộ những sản phẩm kế nhiệm cho iPhone XS, XS Max và XR vào tháng 9 như thường lệ trước khi bán ra ngay sau đó.', '19.jpg', '2019-05-02 20:01:09', '2019-05-02 20:01:09', 1, 0),
(20, 'Microsoft dùng chiêu độc để nâng tầm máy tính Windows 10 giá rẻ', 'Microsoft đã tăng yêu cầu không gian lưu trữ tối thiểu lên 32 GB trong Windows 10 May 2109 Update.', 'Theo đó, để có thể cập nhật lên Windows 10 May 2109 Update (phiên bản 1903), yêu cầu không gian lưu trữ tối thiểu mà hệ thống còn là 32 GB cho cả Windows 32 bit lẫn 64 bit. Mức tối thiểu tăng từ yêu cầu trước đó là 16 GB đối với bản 32 bit hoặc 20 GB đối với bản 64 bit.\r\n\r\nMặc dù nhiều người chọn sử dụng các thiết bị có dung lượng lưu trữ lớn hơn mức này, nhưng yêu cầu tối thiểu trước đó đã cho phép các nhà sản xuất phần cứng tạo ra máy tính xách tay giá rẻ với bộ nhớ eMMC 32 GB, khiến người dùng không đủ dung lượng trống để cài đặt các bản cập nhật tính năng mới của Windows 10.\r\n\r\nYêu cầu không gian lưu trữ tối thiểu mới xuất hiện trong trang yêu cầu phần cứng tối thiểu được cập nhật gần đây của Microsoft và xuất hiện khi công ty tiếp tục giai đoạn thử nghiệm Preview cuối cùng cho Windows 10 1903 với các thành viên Windows Insiders. Windows 1903 sẽ được phát hành vào tháng 5 và được gọi là Windows 10 May 2019 Update.\r\n\r\nCông ty gần đây cũng đã cập nhật đến các yêu cầu bộ xử lí tối thiểu cho Windows 1903. Tuy nhiên, những yêu cầu này vẫn không thay đổi so với Windows 1809.\r\n\r\nKhông biết tại sao Microsoft lại tăng yêu cầu không gian lưu trữ tối thiểu, nhưng đi kèm với Windows 10 1903 là dung lượng lưu trữ dành riêng của Microsoft, nơi công ty yêu cầu giữ khoảng 7 GB dung lượng trống có sẵn để cài đặt các bản cập nhật một cách trơn tru.\r\n\r\n Ảnh\r\nCác yêu cầu đối với Windows 10 1903 đã được cập nhật so với trước đó.\r\nDung lượng lưu trữ dành riêng sẽ được hỗ trợ bởi tiện ích Storage Sense của Microsoft, nơi nó sẽ quản lí việc xóa các tập tin tạm thời. Người dùng sẽ có tùy chọn để quản lí dung lượng lưu trữ có sẵn.\r\n\r\nTrước khi phát hành Windows 10 1809, Microsoft đã cảnh báo người dùng rằng Windows Update không kiểm tra xem có đủ dung lượng hay không trước khi khởi tạo và khuyên người dùng xóa hoặc di chuyển tập tin sang bộ nhớ ngoài trước khi thử cập nhật.\r\n\r\nTheo Dân Việt.', '20.jpg', '2019-05-02 20:03:13', '2019-05-02 20:03:13', 1, 0),
(21, 'iOS 13 sẽ giúp iPad kết nối được với chuột máy tính', 'Thiếu hỗ trợ chuột là một trong những điểm yếu của iPad, khiến máy không được đánh giá tốt như máy tính xách tay. Tuy nhiên mọi thứ có thể sớm thay đổi.', 'Theo The Next Web, một số nguồn tin ghi nhận Apple đang làm việc để thêm hỗ trợ chuột USB cho iOS, và điều này có thể được áp dụng ngay trong iOS 13 công ty giới thiệu tại sự kiện WWDC vào tháng 6 tới.\r\n\r\nTuy nhiên, thật khó để mong đợi bàn phím iPad tiếp theo sẽ đi kèm bàn di chuột mà thay vào đó nó có thể mở ra các tùy chọn cho các nhà sản xuất phụ kiện bên thứ ba.\r\n\r\nMacRumors cho biết, mặc dù người dùng hiện có thể thêm các phụ kiện bên thứ ba, ví dụ như cần điều khiển, cho iPad nhưng sự hỗ trợ cho chuột USB sẽ là một thay đổi lớn. Từ góc độ khả năng truy cập, nó sẽ giúp người dùng sử dụng chuột USB dễ dàng hơn để bắt đầu công việc trên iPad. Đối với những người khác, nó sẽ mang đến một số lợi ích nhất định bất chấp iPad được thiết kế để tối ưu trải nghiệm cảm ứng, bởi chạm vào màn hình sẽ không được thuận lợi hơn so với chuột khi tương tác trên bàn làm việc.\r\n\r\nỞ thời điểm hiện tại vẫn chưa có nhiều manh mối về khả năng hỗ trợ chuột sẽ ra sao, chẳng hạn như liệu nó có cho phép các cử chỉ nâng cao hoặc cung cấp nhiều chức năng hơn một cú chạm trên màn hình hay không. Tuy nhiên, đây là một bước để làm cho iPad trở nên gần gũi hơn với việc thay thế máy tính xách tay, đặc biệt với những ai quen thuộc với sử dụng chuột.', '21.jpg', '2019-05-02 20:03:13', '2019-05-02 20:03:13', 1, 0),
(29, 'dsadsa', '<p>ddd</p>', '<p>ddddd</p>', '22.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0),
(30, 'ghi chu', '<p>chủ tich giả dạng thường dân troll đồng đội</p>', '<p>đây là nội dung chính</p>', 'avata5.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `menu_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `menu_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `trash` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `menu`
--

INSERT INTO `menu` (`id`, `menu_name`, `menu_link`, `status`, `trash`) VALUES
(1, 'Trang Chủ', 'index.php', 1, 0),
(2, 'Liên Hệ', 'index.php/frontend/lienhe', 1, 0),
(3, 'Giới Thiệu', 'index.php/frontend/gioithieu', 1, 0),
(4, 'Bảo Hành', 'index.php/frontend/baohanh', 1, 0),
(6, 'Khuyến Mãi', 'index.php/frontend/sale_products', 1, 0),
(7, 'Tin Tức', 'index.php/frontend/allNews/1', 1, 0),
(8, 'Sản Phẩm', 'index.php/frontend/all_products/1', 1, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `order_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trash` tinyint(1) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `order_date`, `fullname`, `address`, `email`, `phone`, `trash`, `status`) VALUES
(23, 15, '0000-00-00 00:00:00', 'tổng thống', 'kí túc xá cao đẵng công thương (103, đường tăng nhơn phú , phường phước Long B ', 'tongthong@gmail.com', '0336605716', 0, 1),
(24, 15, '0000-00-00 00:00:00', 'tổng thống', 'kí túc xá cao đẵng công thương (103, đường tăng nhơn phú , phường phước Long B ', 'tongthong@gmail.com', '0336605716', 0, 1),
(25, 15, '0000-00-00 00:00:00', 'tổng thống', 'kí túc xá cao đẵng công thương (103, đường tăng nhơn phú , phường phước Long B ', 'tongthong@gmail.com', '0336605716', 0, 1),
(26, 15, '0000-00-00 00:00:00', 'tổng thống', 'kí túc xá cao đẵng công thương (103, đường tăng nhơn phú , phường phước Long B ', 'tongthong@gmail.com', '0336605716', 0, 1),
(27, 15, '0000-00-00 00:00:00', 'tổng thống', 'kí túc xá cao đẵng công thương (103, đường tăng nhơn phú , phường phước Long B ', 'tongthong@gmail.com', '0336605716', 0, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_details`
--

CREATE TABLE `order_details` (
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `product_price` float NOT NULL,
  `total` float NOT NULL,
  `trash` tinyint(1) DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order_details`
--

INSERT INTO `order_details` (`order_id`, `product_id`, `qty`, `product_price`, `total`, `trash`, `status`) VALUES
(23, 41, 1, 19000000, 19000000, 0, 1),
(23, 42, 1, 17900000, 17900000, 0, 1),
(24, 42, 3, 17900000, 53700000, 0, 1),
(25, 41, 1, 19000000, 19000000, 0, 1),
(25, 44, 23, 13900000, 319700000, 0, 1),
(26, 17, 30, 5000000, 150000000, 0, 1),
(26, 41, 1, 19000000, 19000000, 0, 1),
(27, 38, 50, 4900000, 245000000, 0, 1),
(27, 40, 15, 2490000, 37350000, 0, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_id` int(10) DEFAULT NULL,
  `product_category` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT '0',
  `price` float NOT NULL,
  `sale` bit(1) NOT NULL,
  `saleprice` float NOT NULL,
  `product_detail` text CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  `trash` tinyint(1) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `product_name`, `brand_id`, `product_category`, `image`, `quantity`, `price`, `sale`, `saleprice`, `product_detail`, `created_at`, `updated_at`, `trash`, `status`) VALUES
(15, 'IPhone 7 plus hihi', 1, 3, '16.jpg', 20, 18000000, b'0', 0, '<p>- Màn hình: LED-backlit IPS LCD, 5.5\", Retina HD</p><p>&nbsp;- Hệ điều hành: iOS 11</p><p>&nbsp;- Camera sau: 2 camera 12 MP&nbsp;</p><p>- Camera trước: 7 MP&nbsp;</p><p>- CPU: Apple A10 Fusion 4 nhân 64-bit&nbsp;</p><p>- RAM: 3 GB&nbsp;</p><p>- Thẻ SIM: 1 Nano SIM,&nbsp;</p><p>- Hỗ trợ 4G Dung lượng pin: 2900 mAh</p>', '2019-03-24 16:18:37', '2019-06-13 09:13:52', 0, 1),
(16, 'IPhone 8 plus', 1, 3, '17.jpg', 23, 15000000, b'0', 0, '<p>- Màn hình: LED-backlit IPS LCD, 5.5\", Retina&nbsp;</p><p>- HD Hệ điều hành: iOS 11&nbsp;</p><p>- Camera sau: 2 camera 12 MP&nbsp;</p><p>- Camera trước: 7 MP&nbsp;</p><p>- CPU: Apple A11 Bionic 6 nhân</p><p>&nbsp;- RAM: 3 GB Thẻ SIM: 1 Nano SIM,&nbsp;</p><p>- Hỗ trợ 4G Dung lượng pin: 2691 mAh, có sạc nhanh</p>', '2019-03-24 16:19:53', '2019-06-13 09:15:50', 0, 1),
(17, 'IPhone 6 plus', 1, 3, '18.jpg', 50, 5000000, b'1', 4500000, '<p>- Màn hình: LED-backlit IPS LCD, 5.5\", Retina HD&nbsp;</p><p>- Hệ điều hành: iOS 10&nbsp;</p><p>- Camera sau: 8 MP&nbsp;</p><p>- Camera trước: 1.2 MP&nbsp;</p><p>- CPU: Apple A8 2 nhân 64-bit&nbsp;</p><p>- RAM: 1 GB&nbsp;</p><p>- Thẻ SIM: 1 Nano SIM,&nbsp;</p><p>- Hỗ trợ 4G Dung lượng pin: 2915 mAh</p>', '2019-03-24 16:21:15', '2019-06-13 09:16:27', 0, 1),
(18, 'IPhone 6s', 1, 3, '19.jpg', 50, 4500000, b'1', 4000000, '<p>- Màn hình: LED-backlit IPS LCD, 4.7\", Retina HD&nbsp;</p><p>- Hệ điều hành: iOS 11&nbsp;</p><p>- Camera sau: 12 MP</p><p>&nbsp;- Camera trước: 5 MP&nbsp;</p><p>- CPU: Apple A9 2 nhân 64-bit&nbsp;</p><p>- RAM: 2 GB&nbsp;</p><p>- Thẻ SIM: 1 Nano SIM,&nbsp;</p><p>- Hỗ trợ 4G Dung lượng pin: 1715 mAh</p>', '2019-03-24 16:22:28', '2019-06-13 09:17:03', 0, 1),
(19, 'IPhone 8', 1, 3, '20.jpg', 23, 12000000, b'0', 0, '<p>- Màn hình: LED-backlit IPS LCD, 5.5\", Retina HD&nbsp;</p><p>- Hệ điều hành: iOS 11&nbsp;</p><p>- Camera sau: 2 camera 12 MP&nbsp;</p><p>- Camera trước: 7 MP</p><p>- CPU: Apple A11 Bionic 6 nhân</p><p>- RAM: 2 GB Thẻ SIM: 1 Nano SIM,&nbsp;</p><p>- Hỗ trợ 4G Dung lượng pin: 2691 mAh, có sạc nhanh</p>', '2019-03-24 16:23:30', '2019-06-13 09:17:57', 0, 1),
(20, 'IPhone 7', 1, 3, '21.jpg', 20, 5800000, b'1', 5500000, '<p>- Màn hình: LED-backlit IPS LCD, 5.5\", Retina HD&nbsp;</p><p>- Hệ điều hành: iOS 11&nbsp;</p><p>- Camera sau: 2 camera 12 MP&nbsp;</p><p>- Camera trước: 7 MP&nbsp;</p><p>- CPU: Apple A10 Fusion 4 nhân 64-bit&nbsp;</p><p>- RAM: 2 GB Thẻ SIM: 1 Nano SIM,</p><p>- Hỗ trợ 4G Dung lượng pin: 2900 mAh</p>', '2019-03-24 16:24:38', '2019-06-13 09:18:36', 0, 1),
(21, 'IPhone XS Max', 1, 3, '22.jpg', 25, 30000000, b'1', 28500000, '<p>- Màn hình: OLED, 6.5\", Super Retina</p><p>- Hệ điều hành: iOS 12</p><p>- Camera sau: 2 camera 12 MP</p><p>- Camera trước: 7 MP</p><p>- CPU: Apple A12 Bionic 6 nhân</p><p>- RAM: 4 GB</p><p>- Thẻ SIM: Nano SIM &amp; eSIM,</p><p>- Hỗ trợ 4G Dung lượng pin: 3174 mAh, có sạc nhanh</p>', '2019-03-24 16:25:53', '2019-06-13 09:19:30', 0, 1),
(22, 'IPhone XR', 1, 3, '22.png', 25, 21000000, b'1', 20500000, '<p>- Màn hình: OLED, 6.5\", Super Retina&nbsp;</p><p>- Hệ điều hành: iOS 12</p><p>- Camera sau: 2 camera 12 MP&nbsp;</p><p>- Camera trước: 7 MP&nbsp;</p><p>- CPU: Apple A12 Bionic 6 nhân</p><p>- RAM: 4 GB Thẻ SIM: Nano SIM &amp; eSIM,</p><p>- Hỗ trợ 4G Dung lượng pin: 3174 mAh, có sạc nhanh</p>', '2019-03-24 16:16:20', '2019-06-13 09:20:11', 0, 1),
(23, 'IPhone 6s plus', 1, 3, '24.jpg', 50, 6500000, b'1', 6350000, '<p>- Màn hình: LED-backlit IPS LCD, 5.5\", Retina HD</p><p>- Hệ điều hành: iOS 11&nbsp;</p><p>- Camera sau: 12 MP&nbsp;</p><p>- Camera trước: 5 MP&nbsp;</p><p>- CPU: Apple A9 2 nhân 64-bit&nbsp;</p><p>- RAM: 2 GB&nbsp;</p><p>- Thẻ SIM: 1 Nano SIM,&nbsp;</p><p>- Hỗ trợ 4G Dung lượng pin: 1715 mAh</p>', '2019-03-24 16:32:13', '2019-06-13 09:20:53', 0, 1),
(24, 'IPhone SE', 1, 3, '25.jpg', 23, 3000000, b'1', 2850000, '<p>- Màn hình: LED-backlit IPS LCD, 4\", Retina HD</p><p>- Hệ điều hành: iOS 11&nbsp;</p><p>- Camera sau: 12 MP&nbsp;</p><p>- Camera trước: 5 MP&nbsp;</p><p>- CPU: Apple A9 2 nhân 64-bit&nbsp;</p><p>- RAM: 2 GB Thẻ SIM: 1 Nano SIM,&nbsp;</p><p>- Hỗ trợ 4G Dung lượng pin: 1715 mAh</p>', '2019-03-24 16:35:13', '2019-06-13 09:21:34', 0, 1),
(25, 'IPhone 5s', 1, 3, '26.jpg', 33, 2100000, b'1', 1800000, '<p>- Màn hình: LED-backlit IPS LCD, 4\", Retina HD&nbsp;</p><p>- Hệ điều hành: iOS 11&nbsp;</p><p>- Camera sau: 12 MP&nbsp;</p><p>- Camera trước: 5 MP&nbsp;</p><p>- CPU: Apple A7 2 nhân 64-bit&nbsp;</p><p>- RAM: 1 GB Thẻ SIM: 1 Nano SIM,&nbsp;</p><p>- Hỗ trợ 4G&nbsp;</p><p>- Dung lượng pin: 1715 mAh</p>', '2019-03-24 16:35:13', '2019-06-13 09:27:20', 0, 1),
(30, 'Galaxy A50', 2, 4, '103.png', 20, 6550000, b'0', 0, '<p>- Màn hình: Super AMOLED, 6.4\", Full HD+&nbsp;</p><p>- Hệ điều hành: Android 9.0 (Pie)&nbsp;</p><p>- Camera sau: Chính 25 MP &amp; Phụ 8 MP, 5 MP&nbsp;</p><p>- Camera trước: 25 MP&nbsp;</p><p>- CPU: Exynos 9610 8 nhân 64-bit&nbsp;</p><p>- RAM: 4 GB&nbsp;</p><p>- Bộ nhớ trong: 64 GB&nbsp;</p><p>- Thẻ nhớ: MicroSD, hỗ trợ tối đa 512 GB Thẻ SIM: 2 Nano SIM,&nbsp;</p><p>- Hỗ trợ 4G Dung lượng pin: 4000 mAh,&nbsp;</p><p>- có sạc nhanh</p>', '2019-04-09 18:42:01', '2019-06-13 09:28:01', 0, 1),
(31, 'Galaxy A30', 2, 4, '102.png', 20, 5480000, b'1', 5200000, '<p>- Màn hình: Super AMOLED, 6.4\", Full HD+&nbsp;</p><p>- Hệ điều hành: Android 9.0 (Pie)&nbsp;</p><p>- Camera sau: Chính 16 MP &amp; Phụ 5 MP&nbsp;</p><p>- Camera trước: 16 MP&nbsp;</p><p>- CPU: Exynos 7904 8 nhân 64-bit&nbsp;</p><p>- RAM: 4 GB&nbsp;</p><p>- Bộ nhớ trong: 64 GB&nbsp;</p><p>- Thẻ nhớ: MicroSD, hỗ trợ tối đa 512 GB Thẻ SIM: 2 Nano SIM,&nbsp;</p><p>- Hỗ trợ 4G Dung lượng pin: 4000 mAh,&nbsp;</p><p>- có sạc nhanh</p>', '2019-04-09 18:44:28', '2019-06-13 09:29:20', 0, 1),
(32, 'Galaxy M20', 2, 4, '103.png', 20, 4590000, b'0', 0, '<p>- Màn hình: PLS TFT LCD, 6.3\", Full HD+&nbsp;</p><p>- Hệ điều hành: Android 8.1 (Oreo)&nbsp;</p><p>- Camera sau: Chính 13 MP &amp; Phụ 5 MP&nbsp;</p><p>- Camera trước: 8 MP&nbsp;</p><p>- CPU: Exynos 7904 8 nhân 64-bit&nbsp;</p><p>- RAM: 3 GB&nbsp;</p><p>- Bộ nhớ trong: 32 GB&nbsp;</p><p>- Thẻ nhớ: MicroSD, hỗ trợ tối đa 512 GB Thẻ SIM:2 Nano SIM,&nbsp;</p><p>- Hỗ trợ 4G Dung lượng pin: 5000 mAh,&nbsp;</p><p>- có sạc nhanh</p>', '2019-04-09 18:44:28', '2019-06-13 09:30:02', 0, 1),
(33, 'Galaxy S10', 2, 4, '104.png', 50, 18000000, b'0', 0, '<p>- Màn hình: Dynamic AMOLED, 6.1\", Quad HD+ (2K+)&nbsp;</p><p>- Hệ điều hành: Android 9.0 (Pie)&nbsp;</p><p>- Camera sau Chính 12 MP &amp; Phụ 12 MP, 16 MP&nbsp;</p><p>- Camera trước: 10 MP&nbsp;</p><p>- CPU: Exynos 9820 8 nhân 64-bit&nbsp;</p><p>- RAM: 8 GB&nbsp;</p><p>- Bộ nhớ trong: 128 GB&nbsp;</p><p>- Thẻ nhớ: MicroSD, hỗ trợ tối đa 512 GB Thẻ SIM: 2 SIM Nano (SIM 2 chung khe thẻ nhớ),&nbsp;</p><p>- Hỗ trợ 4G Dung lượng pin: 3400 mAh,&nbsp;</p><p>- có sạc nhanh</p>', '2019-04-09 18:45:50', '2019-06-13 09:30:59', 0, 1),
(34, 'Galaxy S7 Edge', 2, 4, '105.jpg', 20, 5100000, b'0', 0, '<p>- Màn hình: 5.5 inch, tấm nền Super AMOLED độ phân giải 1440 x 2560 pixels&nbsp;</p><p>- Hệ điều hành: Android 6.0 Marshmallow&nbsp;</p><p>- Bộ vi xử lý: Qualcomm MSM8996 Snapdragon 820/Exynos 8890 Octa&nbsp;</p><p>- RAM: 4GB&nbsp;</p><p>- Bộ nhớ trong: 32 GB có hỗ trợ khay cắm thẻ nhớ ngoài&nbsp;</p><p>- Camera: Chính 12 MP, f/1.7, OIS, LED flash quay phim 4K, phụ 5 MP&nbsp;</p><p>- Pin: 3600 mAh&nbsp;</p><p>- Máy chống nước đạt tiêu chuẩn IP68</p>', '2019-04-09 18:47:50', '2019-06-13 09:31:57', 0, 1),
(35, 'Galaxy S10 Plus', 2, 4, '106.png', 50, 21000000, b'1', 20000000, '<p>- Màn hình: Dynamic AMOLED, 6.4\", Quad HD+ (2K+)&nbsp;</p><p>- Hệ điều hành: Android 9.0 (Pie)&nbsp;</p><p>- Camera sau: Chính 12 MP &amp; Phụ 12 MP, 16 MP&nbsp;</p><p>- Camera trước: Chính 10 MP &amp; Phụ 8 MP&nbsp;</p><p>- CPU: Exynos 9820 8 nhân 64-bit&nbsp;</p><p>- RAM: 8 GB&nbsp;</p><p>- Bộ nhớ trong: 128 GB&nbsp;</p><p>- Thẻ nhớ:MicroSD, hỗ trợ tối đa 512 GB&nbsp;</p><p>- Thẻ SIM: 2 SIM Nano (SIM 2 chung khe thẻ nhớ),&nbsp;</p><p>- Hỗ trợ 4G Dung lượng pin: 4100 mAh,&nbsp;</p><p>- có sạc nhanh</p>', '2019-04-09 18:47:50', '2019-06-13 09:32:54', 0, 1),
(36, 'Galaxy A9', 2, 4, '107.jpg', 20, -9200000, b'0', 0, '<p>- Màn hình: Super AMOLED, 6.3\", Full HD+&nbsp;</p><p>- Hệ điều hành: Android 8.0 (Oreo)&nbsp;</p><p>- Camera sau: 24 MP, 10 MP, 8 MP và 5 MP (4 camera)&nbsp;</p><p>- Camera trước: 24 MP&nbsp;</p><p>- CPU: Qualcomm Snapdragon 660 8 nhân&nbsp;</p><p>- RAM: 6 GB&nbsp;</p><p>- Bộ nhớ trong: 128 GB&nbsp;</p><p>- Thẻ nhớ: MicroSD, hỗ trợ tối đa 512 GB&nbsp;</p><p>- Thẻ SIM: 2 Nano SIM, Hỗ trợ 4G&nbsp;</p><p>- Dung lượng pin: 3800 mAh,&nbsp;</p><p>- có sạc nhanh</p>', '2019-04-09 18:49:01', '2019-06-13 09:33:52', 0, 1),
(37, 'Active 1+', 4, 7, '115.jpg', 10, 5700000, b'0', 0, '<p>- Màn hình: IPS LCD, 6.18”, Full HD+&nbsp;</p><p>- Hệ điều hành: Android 8.1 (Oreo)&nbsp;</p><p>- Camera sau: Chính 12 MP &amp; Phụ 24 MP&nbsp;</p><p>- Camera trước: 20 MP&nbsp;</p><p>- CPU: Qualcomm Snapdragon 660 8 nhân&nbsp;</p><p>- RAM: 6 GB Bộ nhớ trong: 64 GB&nbsp;</p><p>- Thẻ nhớ: MicroSD, hỗ trợ tối đa 256 GB&nbsp;</p><p>- Thẻ SIM: 2 SIM Nano (SIM 2 chung khe thẻ nhớ), Hỗ trợ 4G</p>', '2019-04-09 19:55:20', '2019-06-13 09:34:30', 0, 1),
(38, 'Active 1', 4, 7, '116.jpg', 10, 4900000, b'0', 0, '<p>- Màn hình: IPS LCD, 5.65\", Full HD+&nbsp;</p><p>- Hệ điều hành: Android 8.1 (Oreo)&nbsp;</p><p>- Camera sau: Chính 12 MP &amp; Phụ 5 MP&nbsp;</p><p>- Camera trước: 8 MP&nbsp;</p><p>- CPU: Qualcomm Snapdragon 660 8 nhân&nbsp;</p><p>- RAM: 4 GB&nbsp;</p><p>- Bộ nhớ trong: 64 GB&nbsp;</p><p>- Thẻ nhớ: MicroSD, hỗ trợ tối đa 256 GB&nbsp;</p><p>- Thẻ SIM: 2 SIM Nano (SIM 2 chung khe thẻ nhớ), Hỗ trợ 4G</p>', '2019-04-09 19:55:20', '2019-06-13 09:35:02', 0, 1),
(39, 'Vsmart Joy 1+', 4, 7, '117.jpg', 10, 2990000, b'0', 0, '<p>- Màn hình: IPS LCD, 6.18”, HD+&nbsp;</p><p>- Hệ điều hành: Android 8.1 (Oreo)&nbsp;</p><p>- Camera sau: Chính 13 MP &amp; Phụ 2 MP&nbsp;</p><p>- Camera trước: 16 MP&nbsp;</p><p>- CPU: Qualcomm Snapdragon 430 8 nhân 64 bit&nbsp;</p><p>- RAM: 3 GB Bộ nhớ trong: 32 GB&nbsp;</p><p>- Thẻ nhớ: MicroSD, hỗ trợ tối đa 256 GB Thẻ SIM: 2 Nano SIM,&nbsp;</p><p>- Hỗ trợ 4G</p>', '2019-04-09 19:57:15', '2019-06-13 09:26:38', 0, 1),
(40, 'Vsmart Joy 1', 4, 7, '118.jpg', 10, 2490000, b'0', 0, '<p>- Màn hình: IPS LCD, 5.45\", HD+&nbsp;</p><p>- Hệ điều hành: Android 8.1 (Oreo)&nbsp;</p><p>- Camera sau: 13 MP&nbsp;</p><p>- Camera trước: 5 MP&nbsp;</p><p>- CPU: Snapdragon 435 8 nhân 64-bit&nbsp;</p><p>- RAM: 3 GB&nbsp;</p><p>- Bộ nhớ trong: 32 GB&nbsp;</p><p>- Thẻ nhớ: MicroSD, hỗ trợ tối đa 256 GB Thẻ SIM: 2 SIM Nano (SIM 2 chung khe thẻ nhớ),&nbsp;</p><p>- Hỗ trợ 4G</p>', '2019-04-09 19:57:15', '2019-06-13 09:26:07', 0, 1),
(41, 'Huawei P30 Pro', 3, 8, '109.jpg', 0, 19000000, b'1', 17500000, '<p>- Màn hình: OLED, 6.1\", Full HD+&nbsp;</p><p>- Hệ điều hành: Android 9.0 (Pie)&nbsp;</p><p>- Camera sau: Chính 40 MP &amp; Phụ 16 MP, 8 MP&nbsp;</p><p>- Camera trước: 32 MP&nbsp;</p><p>- CPU: Hisilicon Kirin 980 8 nhân 64-bit&nbsp;</p><p>- RAM: 8 GB Bộ nhớ trong: 128 GB&nbsp;</p><p>- Thẻ SIM: 2 Nano SIM,&nbsp;</p><p>- Hỗ trợ 4G</p>', '2019-04-09 20:06:35', '2019-06-13 09:25:28', 0, 1),
(42, 'Mate 20 Pro', 3, 8, '110.jpg', 25, 17900000, b'0', 0, '<p>- Màn hình: OLED, 6.39\", Quad HD+ (2K+)&nbsp;</p><p>- Hệ điều hành: Android 9.0 (Pie)&nbsp;</p><p>- Camera sau: Chính 40 MP &amp; Phụ 20 MP, 8 MP&nbsp;</p><p>- Camera trước: 24 MP CPU:&nbsp;</p><p>- Hisilicon Kirin 980 8 nhân 64-bit&nbsp;</p><p>- RAM: 6 GB&nbsp;</p><p>- Bộ nhớ trong: 128 GB</p><p>- Thẻ nhớ: NM card, hỗ trợ tối đa 256 GB&nbsp;</p><p>- Thẻ SIM: 2 SIM Nano (SIM 2 chung khe thẻ nhớ),&nbsp;</p><p>- Hỗ trợ 4G HOTSIM VIETTEL GÔGÔ 4G (3GB data/ tháng). Giá từ 150.000đ</p>', '2019-04-09 20:06:35', '2019-06-13 09:24:43', 0, 1),
(43, 'hauwei P30', 3, 8, '120.jpg', 0, 16900000, b'1', 15000000, '<p>- Màn hình: OLED, 6.1\", Full HD+&nbsp;</p><p>- Hệ điều hành: Android 9.0 (Pie)&nbsp;</p><p>- Camera sau: Chính 40 MP &amp; Phụ 16 MP, 8 MP</p><p>- Camera trước: 32 MP&nbsp;</p><p>- CPU: Hisilicon Kirin 980 8 nhân 64-bit&nbsp;</p><p>- RAM: 8 GB</p><p>- Bộ nhớ trong: 128 GB&nbsp;</p><p>- Thẻ SIM: 2 Nano SIM,&nbsp;</p><p>- Hỗ trợ 4G HOTSIM VIETTEL GÔGÔ 4G (2.5GB data/ tháng). Giá từ 80.000đ</p>', '2019-04-09 20:10:14', '2019-06-13 09:24:12', 0, 1),
(44, 'Mate 20', 3, 8, '114.jpg', 20, 13900000, b'0', 0, '<p>- Màn hình: IPS LCD, 6.5\", Full HD+&nbsp;</p><p>- Hệ điều hành: Android 9.0 (Pie)&nbsp;</p><p>- Camera sau: Chính 12 MP &amp; Phụ 16 MP, 8 MP&nbsp;</p><p>- Camera trước: 24 MP&nbsp;</p><p>- CPU: Hisilicon Kirin 980 8 nhân 64-bit&nbsp;</p><p>- RAM: 6 GB Bộ nhớ trong: 128 GB&nbsp;</p><p>- Thẻ nhớ: NM card, hỗ trợ tối đa 512 GB&nbsp;</p><p>- Thẻ SIM: 2 SIM Nano (SIM 2 chung khe thẻ nhớ),&nbsp;</p><p>- Hỗ trợ 4G</p>', '2019-04-09 20:10:14', '2019-06-13 09:22:52', 0, 1),
(48, 'Apple Watch 3 (01)', 1, 11, '10000.jpg', 15, 8900000, b'0', 0, '<ul><li>Vi xử lý:&nbsp;<strong>chip không dây dual-core Apple S3 và Apple W2&nbsp;</strong></li><li>RAM: 512MB</li><li>ROM: 8GB hoặc 16GB (cho bản eSim)</li><li>Thời lượng pin: 18 tiếng</li><li>Màn hình: 38 mm và 42 mm OLED Retina display, độ sáng 1000nits và&nbsp;với Force Touch</li><li>Kết nối: GPS, NFC, Bluetooth 4.2, Wi-Fi 802.11b/g/n</li><li>Chống nước: ở độ sâu 50 m</li><li>Cảm biến bao gồm: Accelerometer, Ambient Light Sensor, Gyroscope, Vibration/Haptics engine, Heart rate sensor, Barometer,&nbsp;Barometric altimeter</li></ul>', '2019-03-16 21:07:28', '2019-06-13 09:40:29', 0, 1),
(49, 'Apple Watch 4 (01)', 1, 11, '20000.jpg', 15, 11900000, b'0', 0, '<h3>Màn hình</h3><p>Công nghệ màn hình: AMOLED</p><p>Kích thước màn hình: 2.2 inch</p><p>Độ phân giải: 324 x 394 pixels</p><p>Chất liệu mặt: Ion-X strengthened glass</p><p>Đường kính mặt: 44 mm</p><p><strong>Cấu hình</strong></p><p>CPU: Apple S4 64 bit</p><p>Bộ nhớ trong: 16 GB</p><p>Hệ điều hành: watchOS 5.0</p><p>Kết nối được với hệ điều hành: iOS 12 trở lên</p><p>Cổng sạc: Đế sạc nam châm</p><p><strong>Pin</strong></p><p>Thời gian sử dụng: Khoảng 18 giờ</p><p>Thời gian sạc: Khoảng 2 giờ</p><p>Dung lượng pin: 340 mAh</p>', '2019-03-16 21:07:28', '2019-06-13 09:41:25', 0, 1),
(50, 'Apple Watch 3 (02)', 1, 11, '10000.jpg', 15, 8900000, b'0', 0, '<ul><li>Vi xử lý:&nbsp;<strong>chip không dây dual-core Apple S3 và Apple W2&nbsp;</strong></li><li>RAM: 512MB</li><li>ROM: 8GB hoặc 16GB (cho bản eSim)</li><li>Thời lượng pin: 18 tiếng</li><li>Màn hình: 38 mm và 42 mm OLED Retina display, độ sáng 1000nits và&nbsp;với Force Touch</li><li>Kết nối: GPS, NFC, Bluetooth 4.2, Wi-Fi 802.11b/g/n</li><li>Chống nước: ở độ sâu 50 m</li><li>Cảm biến bao gồm: Accelerometer, Ambient Light Sensor, Gyroscope, Vibration/Haptics engine, Heart rate sensor, Barometer,&nbsp;Barometric altimeter</li></ul>', '2019-03-16 21:07:28', '2019-06-13 09:40:41', 0, 1),
(51, 'Apple Watch 4 (02)', 1, 11, '20000.jpg', 15, 11900000, b'0', 0, '<h3>Màn hình</h3><p>Công nghệ màn hình: AMOLED</p><p>Kích thước màn hình: 2.2 inch</p><p>Độ phân giải: 324 x 394 pixels</p><p>Chất liệu mặt: Ion-X strengthened glass</p><p>Đường kính mặt: 44 mm</p><p><strong>Cấu hình</strong></p><p>CPU: Apple S4 64 bit</p><p>Bộ nhớ trong: 16 GB</p><p>Hệ điều hành: watchOS 5.0</p><p>Kết nối được với hệ điều hành: iOS 12 trở lên</p><p>Cổng sạc: Đế sạc nam châm</p><p><strong>Pin</strong></p><p>Thời gian sử dụng: Khoảng 18 giờ</p><p>Thời gian sạc: Khoảng 2 giờ</p><p>Dung lượng pin: 340 mAh</p>', '2019-03-16 21:07:28', '2019-06-13 09:41:32', 0, 1),
(52, 'Apple Watch 3 (03)', 1, 11, '10000.jpg', 15, 8900000, b'0', 0, '<ul><li>Vi xử lý:&nbsp;<strong>chip không dây dual-core Apple S3 và Apple W2&nbsp;</strong></li><li>RAM: 512MB</li><li>ROM: 8GB hoặc 16GB (cho bản eSim)</li><li>Thời lượng pin: 18 tiếng</li><li>Màn hình: 38 mm và 42 mm OLED Retina display, độ sáng 1000nits và&nbsp;với Force Touch</li><li>Kết nối: GPS, NFC, Bluetooth 4.2, Wi-Fi 802.11b/g/n</li><li>Chống nước: ở độ sâu 50 m</li><li>Cảm biến bao gồm: Accelerometer, Ambient Light Sensor, Gyroscope, Vibration/Haptics engine, Heart rate sensor, Barometer,&nbsp;Barometric altimeter</li></ul>', '2019-03-16 21:07:28', '2019-06-13 09:40:52', 0, 1),
(53, 'Apple Airpods (01)', 1, 12, '1111.PNG', 20, 3900000, b'0', 0, '', '2019-03-20 20:46:42', '2019-06-13 09:39:40', 0, 1),
(54, 'Airpods 2018 (New)', 1, 12, '1111.PNG', 20, 4900000, b'0', 0, '', '2019-03-20 20:46:42', '2019-06-13 09:43:57', 0, 1),
(55, 'Apple Airpods (02)', 1, 12, '1111.PNG', 20, 3900000, b'0', 0, '', '2019-03-20 20:46:42', '2019-06-13 09:39:49', 0, 1),
(57, 'Apple Airpods(03)', 1, 12, '1111.PNG', 20, 3900000, b'0', 0, '', '2019-03-20 20:46:42', '2019-06-13 09:40:00', 0, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `trash` tinyint(1) NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `modified_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `password`, `name`, `email`, `phone`, `address`, `created_at`, `status`, `trash`, `role`, `modified_at`) VALUES
(1, '123456', 'admin', 'thanhvinh199700@gmail.com', '0929506569', '103 tăng nhơn phú', '2019-04-22 16:21:27', 1, 0, 'admin', NULL),
(8, '7c4a8d09ca3762af61e59520943dc26494f8941b', 'nguyen thanh vinh', 'qqq23@gmail.com', '3213213', NULL, '2019-05-29 01:19:35', 1, 0, '', NULL),
(9, 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', 'chutich', 'chutich@gmail.com', '0123456789', NULL, '2019-06-08 07:16:08', 1, 0, 'chutich', NULL),
(15, '7c4a8d09ca3762af61e59520943dc26494f8941b', 'tổng thống', 'tongthong@gmail.com', '0336605716', 'kí túc xá cao đẵng công thương (103, đường tăng nhơn phú , phường phước Long B ', '2019-06-13 05:13:59', 1, 0, '', NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `fnews`
--
ALTER TABLE `fnews`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`order_id`,`product_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `fnews`
--
ALTER TABLE `fnews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
