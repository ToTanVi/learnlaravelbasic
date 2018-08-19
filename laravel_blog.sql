-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 07, 2018 at 09:48 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id_category` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name_category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_category`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id_category`, `name_category`) VALUES
(1, 'Đồ Ăn'),
(2, 'Đồ Uống');

-- --------------------------------------------------------

--
-- Table structure for table `category_food`
--

DROP TABLE IF EXISTS `category_food`;
CREATE TABLE IF NOT EXISTS `category_food` (
  `id_category_food` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name_category_food` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_category_food`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_food`
--

INSERT INTO `category_food` (`id_category_food`, `name_category_food`) VALUES
(1, 'Món Bắc'),
(2, 'Món Trung'),
(3, 'Món Nam'),
(4, 'Tráng Miệng'),
(5, 'Nước Giải Khát'),
(6, 'Nước Ép'),
(7, 'Đồ Uống Chứa Cồn');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

DROP TABLE IF EXISTS `food`;
CREATE TABLE IF NOT EXISTS `food` (
  `id_food` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name_food` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_food` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `images_food` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price_food` decimal(10,0) NOT NULL,
  `category` int(10) UNSIGNED NOT NULL,
  `category_food` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_food`),
  KEY `food_category_index` (`category`),
  KEY `food_category_food_index` (`category_food`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id_food`, `name_food`, `description_food`, `images_food`, `price_food`, `category`, `category_food`, `created_at`, `updated_at`) VALUES
(1, 'Mì Quảng', 'Mì quảng của Nhà hàng món Việt được làm từ nguyên liệu chính là: Nước mì quảng, tôm mì quảng, chả mì quảng, thịt nạc, xương thịt, trứng cút, sợi...', 'miquang.png', '60000', 1, 1, NULL, NULL),
(2, 'Bún Bò', 'Bún bò món Huế của Nhà hàng món Vệt được làm từ nguyên liệu chính là: Thịt bò, thịt heo, chả cua, huyết heo, chả thẻ, sợi bún lớn', 'bunbo.png', '65000', 1, 2, NULL, NULL),
(3, 'Cơm Gà Tam Kỳ', 'Cơm đùi gà của Nhà hàng món Việt được làm từ những nguyên liệu chính gồm: Cơm, đùi gà và trứng gà.\r\n\r\n', 'comga.png', '60000', 1, 2, NULL, NULL),
(4, 'Cơm Hến', 'Cơm hến của Nhà hàng món Việt được làm từ nguyên liệu chính là: Tỏi củ, khế xanh, ngò rí, ớt đỏ, nước hến, da heo chiên, bánh đa ', 'comhen.png', '25000', 1, 2, NULL, NULL),
(5, 'Nem Lụi', 'Nem lụi cuốn bánh tráng của Nhà hàng món Việt được làm từ nguyên liệu chính là: Nem nướng, bánh tráng xấp nhỏ và tương đậu', 'nemlui.png', '50000', 1, 2, NULL, NULL),
(6, 'Bánh bèo', 'Bánh bèo của Nhà hàng món Việt được làm từ nguyên liệu chính là: Tôm cháy, mắm bèo, da heo chiên và bánh bèo.', 'banhbeo.png', '50000', 1, 2, NULL, NULL),
(7, 'Hủ Tiếu Mỹ Tho', 'Nguyên liệu chính là hủ tiếu khô, nước dùng chính là thịt bằm nhỏ, lòng heo nấu cùng xương tủy heo. Sau đó trụng sơ mì với nước dùng và cho các nguyên liệu phụ vào như giá, hẹ, thịt bằm cùng lòng heo ', 'hutieu.jpg', '45000', 1, 3, NULL, NULL),
(8, 'Bánh Xèo', 'Bên trong có nhân là tôm, thịt, giá đỗ; kimchi, khoai tây, hẹ, thủy sản; tôm, thịt, cải thảo được rán màu vàng, đúc thành hình tròn hoặc gấp lại ', 'banhxeo.jpg', '40000', 1, 3, NULL, NULL),
(9, 'Gỏi Thập Cẩm ', 'Gỏi thập cẩm là món ăn ưa thích của nhiều gia đình với rau củ giòn sần sật ăn kèm thịt heo tươi ngon, tai heo giòn cùng chút tôm, tất cả hòa quyện với nhau cùng nước gỏi chua ngọt đem lại cảm giác ngon miệng cho người thưởng thức. ', 'goithapcam.jpg', '40000', 1, 3, NULL, NULL),
(10, 'Lẩu Cá Kèo ', 'Lẩu cá kèo là món ăn mang đậm hương vị đặc trưng của miền Nam. Lẩu cá kèo là sự kết hợp độc đáo giữa chút chua chua của lá giang, chút beo béo của cá kèo với chút đăng đắng nhẫn nhẫn của rau đắng cùng kèo nèo ', 'laucakeo.png', '120000', 1, 3, NULL, NULL),
(11, 'Gà Nướng Sài Thành', 'Gà nướng là món ăn được nhiều người yêu thích và với mỗi cách tẩm ướp lại cho ra mỗi hương vị khác nhau. Trong số đó thì có lẽ món gà nướng mật ong được nhiều người yêu thích nhất.', 'ganuong.jpg', '80000', 1, 3, NULL, NULL),
(12, 'Canh Chua Cá Lóc', 'Canh chua cá lóc là một món canh quen thuộc trong bữa ăn của nhiều gia đình. Không cần những nguyên liệu đắt tiền hay cách chế biến cầu kỳ, bạn vẫn có thể nấu cho gia đình một tô canh chua cá lóc ngọt mát, tuyệt ngon.', 'canhchua.jpg', '50000', 1, 3, NULL, NULL),
(13, 'Bún Chả Hà Nội', 'Bún chả là món ăn được ưa thích ở Hà Nội và được bày bán từ vỉa hè bình dân cho đến hàng quán sang trọng gồm bún chả và nem hải sản.', 'buncha.png', '45000', 1, 1, NULL, NULL),
(14, 'Phở Cuốn ', 'Phở cuốn là món ăn quen thuộc được rất nhiều người yêu thích, nhưng để thưởng thức món ăn này gia đình bạn thường phải đến những quán ăn bên ngoài khá tốn thời gian và lại không yên tâm về chất lượng thực phẩm.', 'phocuon.png', '38000', 1, 1, NULL, NULL),
(15, 'Bún Đậu Mắm Tôm', 'Nếu bạn đã từng lần ghé thăm Hà Nội chắc hẳn bạn đã được thưởng thức món bún đậu mắm tôm – một đặc sản lừng danh của người Hà Nội. Tuy rất dân dã nhưng bún đậu lại rất mang đậm hương vị của người Việt Nam chúng ta. Món ăn đơn giản chỉ từ các nguyên liệu cơ bản như: bún tươi, đậu hũ, mắm tôm đã làm nên cái hồn cho món ăn', 'bundau.png', '55000', 1, 1, NULL, NULL),
(16, 'Chả Cá Lã Vọng', 'Chả cá Lã vọng là một món ăn tinh tế, dân dã của người Hà Thành đã được báo chí và các trang ẩm thực hàng đầu trên thế giới ca ngợi là món ăn chắc chắn phải thử một lần trong đời. \r\n', 'chaca.jpg', '60000', 2, 1, NULL, NULL),
(17, 'Nem Chua Rán', 'Những chiếc nem chua rán nóng hổi chấm cùng tương ớt luôn là món ăn vặt hấp dẫn với rất nhiều bạn trẻ. Cách làm nem chua rán Hà Nội ngon không hề khó, các bạn có thể tự làm ngay tại nhà, đảm bảo ngon không khác gì ngoài hàng, và quan trọng là vì tự làm nên đồ ăn rất an toàn', 'nemchua.png', '55000', 1, 1, NULL, NULL),
(18, 'Bún Thang', 'Bún thang là một món ăn quen thuộc của người Hà Nội, được nhiều người yêu thích. Bởi vị của nước dùng rất ngọt, đậm đà, trong veo và thơm nồng mùi tôm khô khiến món ăn có mùi vị rất đặc trưng và ngon khó cưỡng. Nhiều người nghĩ rằng sẽ rất khó để có thể nấu được món ăn này, tuy nhiên với công thức dưới đây, chúng ta sẽ dễ dàng được thưởng thức món bún thang ngay tại nhà.', 'bunthang.png', '25000', 1, 1, NULL, NULL),
(19, 'Pepsi', '', 'pepsi.png', '12000', 2, 5, NULL, NULL),
(20, 'SevenUp', '', 'sevenup.png', '15000', 2, 5, NULL, NULL),
(21, 'Sting', '', 'sting.png', '15000', 2, 5, NULL, NULL),
(22, 'Nước lọc', '', 'nuocloc.png', '10000', 2, 5, NULL, NULL),
(23, 'Cafe', '', 'cafe.png', '25000', 2, 5, NULL, NULL),
(24, 'Soda Chanh Đường', '', 'soda.png', '30000', 2, 5, NULL, NULL),
(25, 'Nước dưa hấu', '', 'duahau.png', '35000', 2, 6, NULL, NULL),
(26, 'Nước ép chanh dây', '', 'chanhday.png', '30000', 2, 6, NULL, NULL),
(27, 'Nước ép bưởi', '', 'epbuoi.png', '35000', 2, 6, NULL, NULL),
(28, 'Nước ép carot', '', 'carot.png', '45000', 2, 6, NULL, NULL),
(29, 'Nước ép cam', '', 'epcam.png', '50000', 2, 6, NULL, NULL),
(30, 'Nước ép dâu', '', 'epdau.png', '45000', 2, 6, NULL, NULL),
(31, 'Bia Tiger', '', 'bia.png', '12000', 2, 7, NULL, NULL),
(32, 'Bia Heniken', '', 'ken.png', '25000', 2, 7, NULL, NULL),
(33, 'Strongbow', '', 'strongbow.png', '20000', 2, 7, NULL, NULL),
(34, 'Mojito', '', 'mojito.png', '35000', 2, 7, NULL, NULL),
(35, 'Bleody Mary', '', 'bleodymary.png', '35000', 2, 7, NULL, NULL),
(36, 'Budweiser', '', 'budweiser.png', '25000', 2, 7, NULL, NULL),
(37, 'Trái Cây', '', 'traicay.png', '40000', 1, 4, NULL, NULL),
(38, 'Chè thập cẩm', '', 'che.png', '25000', 1, 4, NULL, NULL),
(39, 'Kem', '', 'kem.jpg', '30000', 1, 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(14, '2014_10_12_000000_create_users_table', 1),
(15, '2014_10_12_100000_create_password_resets_table', 1),
(17, '2018_02_25_151808_create_category_table', 2),
(18, '2018_02_25_151921_create_category_food__table', 3),
(29, '2018_02_25_152022_create_food_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Tô Tấn Vĩ', 'admin@gmail.com', '$2y$10$Xzmp4FTfxgk1V4yBYyDBF.pK204NmKIAa8iGxhlVf68k8daSwrDWO', 'GLNopqyrlDz1IcKilj8xuEMIHwBmR0rU6QzCnMKHpra1xLaOaoA5UqEEBt6C', '2018-02-25 08:05:22', '2018-02-25 08:05:22');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `food`
--
ALTER TABLE `food`
  ADD CONSTRAINT `food_category_food_foreign` FOREIGN KEY (`category_food`) REFERENCES `category_food` (`id_category_food`) ON DELETE CASCADE,
  ADD CONSTRAINT `food_category_foreign` FOREIGN KEY (`category`) REFERENCES `category` (`id_category`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
