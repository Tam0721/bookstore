-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2023 at 09:05 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

CREATE TABLE `bills` (
  `bill_id` int(11) NOT NULL,
  `acc_id` bigint(20) UNSIGNED NOT NULL,
  `bill_name` varchar(255) NOT NULL,
  `bill_phone` varchar(10) NOT NULL,
  `bill_address` varchar(255) NOT NULL,
  `bill_email` varchar(255) NOT NULL,
  `bill_payment` tinyint(1) NOT NULL,
  `bill_paystatus` tinyint(1) NOT NULL,
  `bill_status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bills`
--

INSERT INTO `bills` (`bill_id`, `acc_id`, `bill_name`, `bill_phone`, `bill_address`, `bill_email`, `bill_payment`, `bill_paystatus`, `bill_status`, `created_at`, `updated_at`) VALUES
(28, 11, ' Customer ', '0383749441', '  demo', ' kategami1171999@gmail.com ', 0, 0, 0, '2023-08-06 03:05:16', '2023-08-06 03:05:16'),
(30, 11, ' Customer ', '0383749441', '  demo', ' kategami1171999@gmail.com ', 0, 1, 1, '2023-08-08 01:10:13', '2023-08-08 03:41:46'),
(31, 11, ' Customer ', '0383749441', '  demo', ' kategami1171999@gmail.com ', 0, 0, 0, '2023-08-08 03:51:29', '2023-08-08 03:51:29'),
(32, 11, ' Customer ', '0383749441', '  demo', ' kategami1171999@gmail.com ', 0, 0, 0, '2023-08-08 04:12:57', '2023-08-08 04:12:57');

-- --------------------------------------------------------

--
-- Table structure for table `bills_detail`
--

CREATE TABLE `bills_detail` (
  `detail_id` int(11) NOT NULL,
  `bill_id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `detail_quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bills_detail`
--

INSERT INTO `bills_detail` (`detail_id`, `bill_id`, `pro_id`, `detail_quantity`) VALUES
(5, 28, 3, 5),
(6, 28, 4, 1),
(9, 30, 2, 1),
(10, 31, 2, 1),
(11, 31, 3, 9),
(12, 31, 4, 11),
(13, 32, 2, 1),
(14, 32, 3, 9),
(15, 32, 4, 11);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cate_id` int(11) NOT NULL,
  `cate_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cate_id`, `cate_name`, `created_at`, `updated_at`) VALUES
(1, 'Văn học Việt Nam', '2023-07-22 09:42:09', '2023-07-22 09:42:09'),
(2, 'Tâm lý học', '2023-07-22 09:42:09', '2023-07-22 09:42:09'),
(3, 'Kỹ năng sống', '2023-07-22 09:42:09', '2023-07-22 09:42:09'),
(4, 'Trinh thám', '2023-07-22 09:42:09', '2023-07-22 09:42:09'),
(5, 'Văn học nước ngoài', '2023-07-22 09:42:09', '2023-07-22 09:42:09');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content` varchar(4000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `content`, `created_at`, `updated_at`, `user_id`, `product_id`) VALUES
(1, 'demo', '2023-07-26 01:05:55', '2023-07-26 01:05:55', 11, 3),
(2, 'demo', '2023-07-26 01:07:28', '2023-07-26 01:07:28', 11, 3),
(3, 'Socrates in Love', '2023-08-08 03:56:49', '2023-08-08 03:56:49', 11, 2);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `img_id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `img_file` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`img_id`, `pro_id`, `img_file`, `created_at`, `updated_at`) VALUES
(1, 24, '1690299943-5-cm-tren-giay.jpeg', '2023-07-26 09:30:51', '2023-07-26 09:30:51'),
(2, 24, '1690305958-5-cm-tren-giay.jpeg', '2023-07-26 09:30:51', '2023-07-26 09:30:51');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_06_24_171637_create_sessions_table', 1),
(7, '2023_07_16_044308_create_theloai_table', 2),
(8, '2023_07_16_052937_create_tin_table', 2),
(9, '2023_07_16_053238_update_tin_table', 2),
(10, '2023_07_26_065815_create_comments_table', 3),
(11, '2023_07_26_071611_update_comments_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('kategami1171999@gmail.com', '$2y$10$afR8t3SQXOgb43uMDW3jN.KCl9NOLEXuR2mwi/DaNCB6ZEvh9qOWO', '2023-07-20 01:42:05');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pro_id` int(11) NOT NULL,
  `pro_name` varchar(255) NOT NULL,
  `pro_price` int(11) NOT NULL DEFAULT 0,
  `pro_view` int(11) NOT NULL DEFAULT 0,
  `pro_spotlight` tinyint(1) NOT NULL DEFAULT 0,
  `pro_special` tinyint(1) NOT NULL DEFAULT 0,
  `pro_description` varchar(4000) DEFAULT NULL,
  `pro_img` varchar(255) DEFAULT NULL,
  `cate_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pro_id`, `pro_name`, `pro_price`, `pro_view`, `pro_spotlight`, `pro_special`, `pro_description`, `pro_img`, `cate_id`, `created_at`, `updated_at`) VALUES
(1, 'Án mạng mười một chữ', 100000, 2, 1, 0, '<b class=\"\">Án mạng mười một chữ – Vừa là nạn nhân, vừa là hung thủ.</b>\r\n<p class=\"fs-6\">Một vụ án chẳng ai trong sạch. Tình bạn bị lợi dụng cho mục đích cá nhân. Sự thật phơi bày khiến tất cả đều phải chịu thương tổn.</p>\r\n\r\n<p class=\"fs-6\">Đây là một tác phẩm rất ngắn khi đặt cạnh so sánh với loạt tác phẩm khác của Higashino Keigo.</p>\r\n\r\n<p class=\"fs-6\">Dòng sự kiện tập trung vào nhân vật chính – một nhà văn trinh thám đi tìm lời giải đáp cho cái chết đầy bí ẩn của người cô yêu.</p>\r\n\r\n<p class=\"fs-6\">Trong quá trình đó, cô gái ấy khám phá ra hàng loạt bí ẩn từ quá khứ đến hiện tại.</p>\r\n\r\n<p class=\"fs-6\">Từ đây, sự việc này nối tiếp sự việc kia, hành động trả thù cho quá khứ tạo nên án mạng trong hiện tại.</p>\r\n\r\n<p class=\"fs-6\">Nhân vật trung tâm của tác phẩm – “tôi”, tự kể lại trải nghiệm của bản thân về vụ án và quá trình điều tra đi đến ánh sáng.</p>\r\n\r\n<p class=\"fs-6\">Nhưng “tôi” không phải thám tử lại càng không phải điều tra viên chuyên nghiệp.</p>\r\n\r\n<p class=\"fs-6\">Cô chỉ là một nhà văn trinh thám tự do mà thôi.</p>\r\n\r\n<p class=\"fs-6\">Cô chưa từng nghĩ sẽ có một ngày bản thân bị cuốn vào tấn bi kịch đầy plot twist như một cuốn sách trinh thám như vậy.</p>\r\n\r\n<p class=\"fs-6\">Tấn bi kịch ấy kéo dài từ quá khứ tới hiện tại, và có thể tiếp nối tới tương lai.</p>\r\n\r\n<p class=\"fs-6\">Mà trong đó, muôn vàn gương mặt, vừa là nạn nhân, vừa là hung thủ.</p>\r\n\r\n<p class=\"fs-6\">Không ai trong số bọn họ là trong sạch hoàn toàn, nhưng cũng không ai đáng trách hoàn toàn.</p>\r\n\r\n<p class=\"fs-6\">Nạn nhân hôm nay, trong quá khứ đã từng là hung thủ của một vụ ám sát đầy tàn độc.</p>\r\n\r\n<p class=\"fs-6\">Hung thủ trong hiện tại, lại là nạn nhân của bi kịch trong quá khứ.</p>\r\n\r\n<b class=\"\">Sự thật được phơi bày, cuộc sống vẫn tiếp tục tiến tới tương lai.</b>\r\n\r\n<p class=\"fs-6\">Kết thúc của Án mạng mười một chữ có lẽ không làm hài lòng những độc giả muốn một sự thật trắng – đen phân minh.</p>\r\n\r\n<p class=\"fs-6\">Ai cũng là nạn nhân, ai cũng là hung thủ, và chẳng ai phải trả giá trước pháp luật.</p>', 'an-mang-muoi-mot-chu.jpg', 4, '2023-07-22 09:42:09', '2023-08-08 03:50:16'),
(2, 'Socrates in Love', 60000, 27, 0, 1, '<h5>Socrates in Love – Nỗi đau của người ở lại</h5>\r\n<p class=\"fs-6\">Tình yêu tuổi 16, trong sáng, thuần khiết, từ tình bạn trở thành tình đầu của nhau.</p>\r\n<p class=\"fs-6\">Nhưng không ai là ngoại lệ có thể tránh được trò đùa của số phận.</p>\r\n<p class=\"fs-6\">Căn bệnh máu trắng quái ác đã cướp đi Aki – một cô bé 16 tuổi với ước mơ được đặt chân tới nước Úc xa xôi.</p>\r\n<p class=\"fs-6\">Đồng thời cướp đi của Sakurato một mối tình đầu và cũng là mối tình cuối cùng.</p> \r\n<p class=\"fs-6\">Để lại cậu thanh niên 16 tuổi cùng với ước mơ còn dang dở của cô bạn gái. Buộc cậu phải mạnh mẽ vượt qua nỗi đau mất đi cô để có thể sống tiếp và thay cô biến ước mơ trở thành sự thật.</p>\r\n<p class=\"fs-6\">Ngoài hai nhân vật chính, câu chuyện còn có thêm một người khác nữa là ông nội của Sakurato.</p>\r\n<p class=\"fs-6\">Ông cũng không thể bên cạnh người mình yêu, nhưng ít nhất ông và bà đã từng có thời gian sống trong thế giới có nhau và ông biết được bà ấy vẫn ổn.</p>\r\n<p class=\"fs-6\">Nhưng cháu trai của ông lại không được như vậy.</p>\r\n<p class=\"fs-6\">Ông phải chứng kiến cháu mình sống trong nỗi đau mất đi người yêu.</p>\r\n<p class=\"fs-6\">Sakurato và Aki đã cùng nhau trải qua thời học sinh trong sáng, thuần khiết.</p> \r\n<p class=\"fs-6\">Nhưng giờ đây chỉ còn lại mỗi mình cậu bước tiếp tương lai.</p>\r\n<p class=\"fs-6\">Khoảng cách lớn nhất trong tình yêu có lẽ không phải khoảng cách vật lý hay tuổi tác. Mà là khi một người mãi mãi dừng lại ở tuổi 16 và một người phải tiếp tục bước tiếp theo thời gian.</p>\r\n<p class=\"fs-6\">Liệu thời gian có thực sự chữa lành được nỗi đau?</p>\r\n<p class=\"fs-6\">Socrates in Love – Hồi ức về một tình yêu đầu tiên và mãi mãi.</p>', 'socrates-in-love.jpg', 5, '2023-07-22 09:42:09', '2023-08-08 03:56:52'),
(3, 'Hạ đỏ', 70000, 78, 1, 0, '<h5>Có phải tình đầu là mối tình đẹp nhất?</h5>\r\n<p class=\"fs-6\">Hạ đỏ kể về Chương, trong một kì nghỉ hè về quê ngoại, vô tình phải lòng Út Thêm.</p>\r\n<p class=\"fs-6\">Tác phẩm vừa là một bức tranh đẹp về tuổi thơ tràn đầy sức sống.</p>\r\n<p class=\"fs-6\">Và cũng là bức tranh về nỗi đau da diết cất lên từ mối tình buồn của Chương và Út Thêm.</p>\r\n<p class=\"fs-6\">Hai người gặp nhau trong hoàn cảnh éo le, Út Thêm đưa em trai của mình – Dư – đến nhà Nhạn để băng bó vết thương do Chương gây nên.</p>\r\n<p class=\"fs-6\">Chàng trai mới lớn ngay lập tức say nắng ánh mắt của cô bạn cùng quê.</p>\r\n<p class=\"fs-6\">Một cách lặng lẽ, tình cảm trong Chương lớn dần lên qua từng ngày.</p>\r\n<p class=\"fs-6\">Chàng ta bắt đầu biết giả vờ, biết viết thư tình cho Út Thêm.</p>\r\n<p class=\"fs-6\">Chàng ta cũng từ bỏ mối thù với Dư và còn mơ mộng về một ngày được cưới cô bạn về làm vợ.<p class=\"fs-6\">\r\n<p class=\"fs-6\">Từ bỏ luôn cả những buổi đi chơi cùng Nhạn và Dế, mà thay vào đó ngồi vẩn vơ nghĩ đến đôi mắt ấy.</p>\r\n<p class=\"fs-6\">Định mệnh như muốn tạo cơ hội cho Chương khi Út Thêm không biết đọc. Anh chàng trở thành thầy giáo của cô.</p>\r\n<p class=\"fs-6\">Ngày tháng 2 người bên nhau cứ thế trôi qua trong bình yên như thế.</p>\r\n<p class=\"fs-6\">Và tình yêu trong sáng, thuần khiết cũng lặng lẽ lớn dần lên.</p>\r\n<p class=\"fs-6\">Tất cả những gì Chương muốn là được hằng ngày ngắm Út Thêm.</p>\r\n<br>\r\n<h5>Tình đầu đẹp nhất nhưng đau nhất</h5>\r\n<p class=\"fs-6\">Cứ ngỡ sẽ được chìm đắm trong mật ngọt tình yêu, nhưng trò đùa số phận lại không buông tha một ai.</p>\r\n<p class=\"fs-6\">Tất cả ngọt ngào đều tan biến khi Út Thêm sang năm phải đi lấy chồng.</p>\r\n<p class=\"fs-6\">Mùa hạ năm ấy, Chương không chỉ có thêm những kỉ niệm tuổi thơ bên bạn bè mà còn có một vết cắt sâu trong tim vì mối tình đầu ngọt ngào nhưng nhanh đến và nhanh đi.</p>\r\n<p class=\"fs-6\">Tất cả tình cảm ngọt ngào ấy mãi mãi dừng lại ở tình bạn, tình thầy trò, chẳng thể bước tiếp cũng chẳng nỡ buông bỏ.</p>\r\n<p class=\"fs-6\">Tất cả những gì còn lại dành cho Chương sau mùa hạ đau thương ấy chỉ có sự nuối tiếc.</p>\r\n<p class=\"fs-6\">Dù không đành lòng, Chương cũng phải rời xa miền quê bình yên, rời xa Út Thêm.</p>\r\n<p class=\"fs-6\">Dù không đành lòng, Chương vẫn phải từ bỏ tình cảm dành cho Út Thêm.</p>\r\n<br>\r\n<h5>Hạ đỏ – mùa hạ đẹp nhất nhưng đau nhất</h5>\r\n<p class=\"fs-6\">Tình đầu thường là tình đẹp nhất.</p>\r\n<p class=\"fs-6\">Tất cả những cảm xúc ngây thơ, trong sáng thuở mới biết yêu.</p>\r\n<p class=\"fs-6\">Những kỉ niệm mà sau này khi nhắc lại vẫn khiến người ta có một cảm xúc bồi hồi khó tả.</p>\r\n<p class=\"fs-6\">Tình đầu thường là tình đau nhất.</p>\r\n<p class=\"fs-6\">Những rung động ngọt ngào dở dang, không trọn vẹn.</p>\r\n<p class=\"fs-6\">Những mơ mộng cứ ngỡ một đời, nhưng chỉ trong một khoảnh khắc.</p>\r\n<p class=\"fs-6\">Những tình cảm lặng lẽ và giọt nước mắt hụt hẫng.</p>\r\n<p class=\"fs-6\">Mùa hạ năm ấy thật đẹp nhưng cũng thật đau.</p>\r\n<p class=\"fs-6\">Hạ đỏ – Mùa hạ bắt đầu với những rung động khi tôi được gặp và được say ánh mắt em.</p>\r\n<p class=\"fs-6\">Hạ đỏ – Mùa hạ kết thúc với những nuối tiếc khi tôi phải chôn sâu những rung động ấy.</p>', 'ha-do.jpg', 1, '2023-07-22 09:42:09', '2023-08-08 03:55:24'),
(4, 'Trên đường băng', 70000, 0, 1, 0, '<h5>Trên đường băng – cuốn sách truyền cảm hứng bật nhất cho giới trẻ.</h5>\r\n<p class=\"fs-6\">So với Cà phê cùng Tony, Trên đường băng được viết lại nghiêm túc hơn và mục đích rõ ràng hơn.</p>\r\n\r\n<p class=\"fs-6\">Cuốn sách như một chuyến bay có 3 phần: Chuẩn bị hành trang, ngồi phòng chờ sân bay và lên đường.</p>\r\n\r\n<p class=\"fs-6\">Phần 1 được xem là phần chuẩn bị được đề cập dài nhất và đặc sắc nhất.</p>\r\n\r\n<p class=\"fs-6\">Trong phần 1 có một vài bài viết hài hước và dí dỏm như Bệnh nghiện Internet.</p>\r\n\r\n<p class=\"fs-6\">Câu chuyện kể về một anh chàng gần 30 tuổi, lương 5 triệu, không có bạn gái, ăn xong đi làm rồi về ngủ hoặc lên mạng “chém gió”, không biết làm gì cho đời.</p>\r\n\r\n<p class=\"fs-6\">Đối với trường hợp này, tác giả đã có lời khuyên là “hãy vứt laptop đi, rồi ra ngoài đi nhặt rác…”</p>\r\n\r\n<p class=\"fs-6\">Hay với những ai muốn nghe lời khuyên về bài học kinh doanh trên mạng, tác giả cũng có kể một câu chuyện hài về anh chàng Tony đăng đàn hỏi Internet về việc “có nên mở nhà máy sản xuất củi trấu để xuất qua mấy nước ôn đới làm nhiên liệu sinh học không”.</p>\r\n\r\n<p class=\"fs-6\">Và Tony đã nhận được sự tư vấn nhiệt tình từ anh Thành ở Tiền Giang.</p>\r\n\r\n<p class=\"fs-6\">Sau mấy tháng trời lo dự án, chuẩn bị xong xuôi hết, Tony quyết định xuống Tiền Giang đón anh Thành đi khánh thành nhà máy.</p>\r\n\r\n<p class=\"fs-6\">Nhưng khi xuống tới nơi, Tony lại chẳng thấy “ông Thành” nào cả.</p>\r\n\r\n<p class=\"fs-6\">Thay vào đó chỉ có “thằng Thành đang học lớp 8” mà thôi.</p>\r\n\r\n<p class=\"fs-6\">Sau khi chờ đợi, Tony mới biết những tư vấn của vị quân sư này đều là tưởng tượng của cậu.</p>\r\n\r\n<p class=\"fs-6\">Tony còn biết được các bạn của Thành cũng là những chuyên viên tư vấn trong rất nhiều lĩnh vực.</p>\r\n\r\n<h5>Phần dành cho những bạn trẻ thích làm kinh doanh lớn.</h5>\r\n<p class=\"fs-6\">Những bài viết cuối thường là những bài viết đặc sắc nhất.</p>\r\n\r\n<p class=\"fs-6\">2 phần đầu là những điều các bạn trẻ cần phải học tập và nghiền ngẫm.</p>\r\n\r\n<p class=\"fs-6\">Phần cuối này dành cho các start-up trẻ.</p>\r\n\r\n<p class=\"fs-6\">Đối với việc này, Tony lấy ví dụ tiết kiệm với 6 triệu đồng/tháng để tích vốn khởi nghiệp.</p>\r\n\r\n<p class=\"fs-6\">Khác với các bạn trẻ than phiền về mức lương mãi không tăng.</p>\r\n\r\n<p class=\"fs-6\">Tony khuyên rằng, hãy cống hiến.</p>\r\n\r\n<p class=\"fs-6\">Đừng sợ người khác không thấy được nỗ lực của mình.</p>\r\n\r\n<p class=\"fs-6\">Đừng sống theo kiểu làm nhiều lắm rồi lương cũng vậy.</p>\r\n\r\n<p class=\"fs-6\">Thay vào đó hãy cố gắng làm thêm giờ, làm thêm việc, làm sớm hơn, về trễ hơn.</p>\r\n\r\n<p class=\"fs-6\">“Cứ mãi ở ao làng, rồi ao sẽ cạn</p>\r\n\r\n<p class=\"fs-6\">Sao không ra sông ra biển để vẫy vùng?</p>\r\n\r\n<p class=\"fs-6\">Sao cứ tự trói mình trong nếp nghĩ bùng nhùng?</p>\r\n\r\n<p class=\"fs-6\">Sao cứ mãi online và thở dàii ngao ngán?</p>\r\n\r\n<p class=\"fs-6\">Sao cứ để tuổi trẻ trôi qua thật chán?</p>\r\n\r\n<p class=\"fs-6\">…</p>\r\n\r\n<p class=\"fs-6\">Trên đường băng sân bay mỗi đời người.</p>\r\n\r\n<p class=\"fs-6\">Có những kẻ đang chạy đà và cất cánh.”</p>', 'tren-duong-bang.jpg', 3, '2023-07-22 09:42:09', '2023-07-22 09:42:09'),
(5, 'Thiên Tài Bên Trái, Kẻ Điên Bên Phải', 120000, 0, 0, 0, '<h5>NẾU MỘT NGÀY ANH THẤY TÔI ĐIÊN, THỰC RA CHÍNH LÀ ANH ĐIÊN ĐẤY!</h5>\r\n\r\n<p class=\"fs-6\">Hỡi những con người đang oằn mình trong cuộc sống, bạn biết gì về thế giới của mình?</p>\r\n\r\n<p class=\"fs-6\">Là vô vàn lý thuyết được các bậc vĩ nhân kiểm chứng, là luật lệ, là sự thật bọc trong cái lốt hiển nhiên, hay triết lý cứng nhắc?</p>\r\n\r\n<p class=\"fs-6\">Thế giới sẽ gọi bạn là kẻ điên, nhưng vậy thì có sao?</p>\r\n\r\n<p class=\"fs-6\">Thiên tài bên trái, kẻ điên bên phải, vậy ở giữa là gì?</p>\r\n\r\n<p class=\"fs-6\">Ranh giới duy nhất giữa kẻ điên và thiên tài chẳng qua là một sợi chỉ mỏng manh.<p>\r\n\r\n<p class=\"fs-6\">Thiên tài chứng minh được thế giới của mình, còn kẻ điên chưa kịp làm điều đó.</p>\r\n\r\n<p class=\"fs-6\">Trở thành kẻ điên để vẫy vùng giữa nhân gian loạn thế hay sống mãi một cuộc đời bình thường?</p>\r\n\r\n<p class=\"fs-6\">Đâu là cuộc sống khiến bạn hạnh phúc?</p>\r\n\r\n<p class=\"fs-6\">Thiên tài bên trái kẻ điên bên phải là cuốn sách dành cho những người điên rồ.</p>\r\n\r\n<p class=\"fs-6\">Bạn có thể đồng ý hoặc phản đối, nhưng điều duy nhất bạn không thể làm là phủ nhận sự tồn tại của họ.</p>\r\n\r\n<p class=\"fs-6\">Đó là những người luôn tạo ra sự thay đổi trong khi hầu hết con người chỉ sống rập khuôn như một cái máy.</p>\r\n\r\n<p class=\"fs-6\">Đa số đều nghĩ họ thật điên rồ nhưng nếu nhìn ở góc khác, ta lại thấy họ thiên tài.</p>\r\n\r\n<p class=\"fs-6\">Bởi chỉ những người đủ điên nghĩ rằng họ có thể thay đổi thế giới mới là những người làm được điều đó.</p>\r\n\r\n<p class=\"fs-6\">Chào mừng đến với thế giới của những kẻ điên.</p>', 'thien-tai-ben-trai-ke-dien-ben-phai.jpg', 2, '2023-07-22 09:42:09', '2023-07-22 09:42:09'),
(6, 'Bạch dạ hành', 135000, 0, 1, 0, '<h5>Bạch dạ hành mang nghĩa là chuyến đi trong đêm trắng.</h5>\r\n<p class=\"fs-6\">Không rạng rỡ như vầng dương, ánh trăng nhẹ nhàng trong đêm lại soi rõ bóng tối trong mỗi người.</p>\r\n\r\n<p class=\"fs-6\">Ryoji và Yukiho – 2 đứa trẻ mãi mãi phải sống trong bóng tối quá khứ.</p>\r\n\r\n<p class=\"fs-6\">Cuộc đời Ryoji chìm trong bóng tối, ước mơ của anh là được một lần đi dưới ánh mặt trời.</p>\r\n\r\n<p class=\"fs-6\">Trong bóng tối cuộc đời, Yukiho lại được soi sáng bởi một thứ ánh sáng không phải mặt trời.</p>\r\n\r\n<p class=\"fs-6\">Họ bên nhau và soi sáng cho nhau giữa bóng tối quá khứ.</p>\r\n\r\n<p class=\"fs-6\">Các tình huống trong tiểu thuyết thể hiện sự tha hóa của những người đã từng là nạn nhân của ấu dâm.</p>\r\n\r\n<p class=\"fs-6\">Nỗi đau không thể tha thứ sinh ra từ quá khứ khiến cho cuộc đời của nạn nhân mãi mãi chìm trong đêm tối.</p>\r\n\r\n<p class=\"fs-6\">Nỗi đau ấy biến họ thành những tên tội phạm khiến ta không biết nên chỉ trích hay cảm thông.</p>\r\n\r\n<p class=\"fs-6\">Có lẽ Bạch dạ hành là tác phẩm vẽ ra nỗi đau này rõ nhất.</p>\r\n\r\n<p class=\"fs-6\">Cuốn tiểu thuyết sẽ khiến bạn dần quên đi tội lỗi ấu dâm ở đầu câu chuyện mà thay vào đó bị cuốn vào những toan tính của 2 nhân vật chính.</p>\r\n\r\n<p class=\"fs-6\">Sự toan tính ấy chính là sự giày vò họ dành cho chính cuộc đời của mình.</p>\r\n\r\n<p class=\"fs-6\">Tác phẩm phảng phất một sự cảm thông rất khó định hình.</p>\r\n\r\n<p class=\"fs-6\">Sự cảm thông này không phải dung túng cho cái ác.</p>\r\n\r\n<p class=\"fs-6\">Sự cảm thông này là sự thương xót cho những nạn nhân của những kẻ ấu dâm.</p>', 'bach-da-hanh.jpg', 4, '2023-07-22 09:42:09', '2023-07-22 09:42:09'),
(24, ' 5 Centimet Trên Giây ', 50000, 0, 0, 0, '<h3>TOP 100 BEST SELLER &ndash; 5 Centimet Tr&ecirc;n Gi&acirc;y</h3>\r\n\r\n<p><strong>5 centiment tr&ecirc;n gi&acirc;y</strong>&nbsp;kh&ocirc;ng chỉ l&agrave; vận tốc của những c&aacute;nh anh đ&agrave;o rơi, m&agrave; c&ograve;n l&agrave; vận tốc khi ch&uacute;ng ta lặng lẽ bước qua đời nhau.</p>\r\n\r\n<p><strong>5 centiment tr&ecirc;n gi&acirc;y</strong>&nbsp;kh&ocirc;ng giống như c&aacute;c t&aacute;c phẩm trước của Shinkai Makoto.</p>\r\n\r\n<p>Kh&ocirc;ng c&oacute; bất kỳ yếu tố kỳ ảo hay khoa học viễn tưởng n&agrave;o trong t&aacute;c phẩm n&agrave;y.</p>\r\n\r\n<p>Bằng giọng văn tinh tế v&agrave; truyền cảm,&nbsp;<strong>5 centimet tr&ecirc;n gi&acirc;y</strong>&nbsp;mang đến những khắc họa mới về t&acirc;m hồn v&agrave; khả năng tồn tại của cảm x&uacute;c.</p>\r\n\r\n<p>C&acirc;u chuyện bắt đầu từ t&igrave;nh y&ecirc;u trong s&aacute;ng, ngọt ng&agrave;o của một c&ocirc; b&eacute; v&agrave; cậu b&eacute;.</p>\r\n\r\n<p>Ba giai đoạn, ba mảnh gh&eacute;p, ba ng&ocirc;i kể chuyện kh&aacute;c nhau nhưng đều xoay quanh nh&acirc;n vật nam ch&iacute;nh.</p>\r\n\r\n<p>Kh&aacute;c với những c&acirc;u chuyện cuốn bạn chạy một mạch, truyện n&agrave;y kh&oacute; m&agrave; đọc nhanh.</p>\r\n\r\n<p>Ng&oacute;n tay bạn hẳn sẽ ngừng lại cả trăm lần tr&ecirc;n mỗi trang s&aacute;ch.</p>\r\n\r\n<p>Chỉ v&igrave; một cử động rất khẽ, một c&acirc;u thoại, hay một x&uacute;c cảm bất chợt c&oacute; thể sẽ đ&aacute;nh thức những điều tưởng chừng đ&atilde; ngủ qu&ecirc;n trong bạn.</p>\r\n\r\n<p>C&oacute; l&uacute;c n&oacute; vượt qu&aacute; giới hạn chịu đựng, bạn quyết định gấp cuốn s&aacute;ch lại chỉ để tận hưởng ch&uacute;t &aacute;nh s&aacute;ng từ ngọn đ&egrave;n.</p>\r\n\r\n<p>Hay đơn giản l&agrave; để vết thương trong l&ograve;ng m&igrave;nh c&oacute; thời gian tự t&igrave;m xoa dịu.</p>\r\n\r\n<p>Đ&acirc;y cũng l&agrave; tiểu thuyết đầu ti&ecirc;n m&agrave; t&aacute;c giả chuyển thể th&agrave;nh light sau khi ho&agrave;n tất bộ phim.</p>\r\n\r\n<p>C&aacute;c h&igrave;nh d&ugrave;ng trong tiểu thuyết cũng do ch&iacute;nh t&aacute;c giả Shinkai Makoto chụp.</p>\r\n', '1690305958-5-cm-tren-giay.jpeg', 5, '2023-07-25 08:45:44', '2023-07-25 10:37:37');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('TuR8mrU7dgkkrN3aBs5S4jp2vrhL593h9Tsm8r6R', 11, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiNDFLempONklpbmNzb2ZHSmNtbGxwVmdZa1ZWNHZXU0NKUFRlZXVTciI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kYW5nLW5oYXAiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxMTtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMCRaR3c0TVFXNDVpRFFSR2k0MjhRZ29PVDZyVTBYS3NwNnczVE5hd0JmR3k4dmRqZTduZ2wzTyI7fQ==', 1688205611),
('Ud9HWl5lINonYZkQSo6N5DzLtjllHf1GtwFOA5nE', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoic3VkTGlqck9ERXA5THNma3pjVGxPcVExVnQyWVdIanFlZlV4SHFBcCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9zYW4tcGhhbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1688189292);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_Group` tinyint(1) NOT NULL DEFAULT 0,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `address`, `phone`, `email`, `email_verified_at`, `password`, `id_Group`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(11, 'customer', 'Customer', NULL, NULL, 'kategami1171999@gmail.com', NULL, '$2y$10$UcbyBhKMW77m8Qqk3JBQ2uBQK3hUtEqDCRX.oSAshqKFscMDIB45C', 0, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-01 01:29:06', '2023-07-22 11:45:57'),
(12, 'Admin', 'Admin', NULL, NULL, 'ttmt0721@gmail.com', NULL, '$2y$10$Jd0WmD4L7DJN0k/gcmwYCuyepQwVOasjmwnxKyCamMvPpnfjqXwM2', 1, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-11 04:24:20', '2023-07-22 11:48:52'),
(20, 'delivery', 'delivery', '31, Phú Châu, Tam Phú, Thủ Đức', '0383749441', 'tamttmps25065@fpt.edu.vn', NULL, '$2y$10$i8Gxt26tONlbpiWPeGRTROABBMeBQYdo.95QKJwdJXpxwq0576q4m', 2, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-08 02:02:35', '2023-08-08 02:02:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`bill_id`),
  ADD KEY `acc_id` (`acc_id`);

--
-- Indexes for table `bills_detail`
--
ALTER TABLE `bills_detail`
  ADD PRIMARY KEY (`detail_id`),
  ADD KEY `bill_id` (`bill_id`) USING BTREE,
  ADD KEY `pro_id` (`pro_id`) USING BTREE;

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cate_id`),
  ADD UNIQUE KEY `cate_name` (`cate_name`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_user_id_foreign` (`user_id`),
  ADD KEY `pro_id` (`product_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`img_id`),
  ADD KEY `pro_id` (`pro_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pro_id`),
  ADD UNIQUE KEY `pro_name` (`pro_name`),
  ADD KEY `cate_id` (`cate_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bills`
--
ALTER TABLE `bills`
  MODIFY `bill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `bills_detail`
--
ALTER TABLE `bills_detail`
  MODIFY `detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bills`
--
ALTER TABLE `bills`
  ADD CONSTRAINT `bills_ibfk_1` FOREIGN KEY (`acc_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `bills_detail`
--
ALTER TABLE `bills_detail`
  ADD CONSTRAINT `bills_detail_ibfk_2` FOREIGN KEY (`pro_id`) REFERENCES `products` (`pro_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `bills_detail_ibfk_3` FOREIGN KEY (`bill_id`) REFERENCES `bills` (`bill_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`pro_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_ibfk_1` FOREIGN KEY (`pro_id`) REFERENCES `products` (`pro_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`cate_id`) REFERENCES `categories` (`cate_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
