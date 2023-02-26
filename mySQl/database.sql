-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for shop_x
CREATE DATABASE IF NOT EXISTS `shop_x` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `shop_x`;

-- Dumping structure for table shop_x.admin
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `avatar` longtext,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `Linkedin` varchar(255) DEFAULT NULL,
  `behance` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table shop_x.admin: ~2 rows (approximately)
INSERT INTO `admin` (`id`, `name`, `email`, `password`, `address`, `avatar`, `facebook`, `twitter`, `Linkedin`, `behance`) VALUES
	(1, 'Vũ Đình Đô', 'vudinhdo2409@gmail.com', '111111', 'Yên Trị - Ý Yên - Nam Định', '1.jpg', 'https://www.facebook.com/VuDinhDoDeveloper', NULL, NULL, NULL),
	(2, 'Đinh Hằng Nhật Anh', 'dinhhangnhatanh2804@gmail.com', '222222', 'Lãng Vân', 'nhatanh.jpg', 'https://www.facebook.com/DinhHangNhatAnh', NULL, NULL, NULL);

-- Dumping structure for table shop_x.categories
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table shop_x.categories: ~3 rows (approximately)
INSERT INTO `categories` (`id`, `title`, `slug`) VALUES
	(1, 'man', 'man'),
	(2, 'woman', 'woman'),
	(3, 'kid', 'kid');

-- Dumping structure for table shop_x.items
CREATE TABLE IF NOT EXISTS `items` (
  `id` int NOT NULL AUTO_INCREMENT,
  `product_id` int unsigned NOT NULL,
  `order_id` int unsigned DEFAULT NULL,
  `user_id` int unsigned NOT NULL,
  `quantity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_items_products` (`product_id`),
  KEY `FK_items_orders` (`order_id`),
  KEY `FK_items_users` (`user_id`),
  CONSTRAINT `FK_items_orders` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  CONSTRAINT `FK_items_products` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  CONSTRAINT `FK_items_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table shop_x.items: ~2 rows (approximately)
INSERT INTO `items` (`id`, `product_id`, `order_id`, `user_id`, `quantity`) VALUES
	(13, 14, NULL, 2, 5),
	(14, 16, NULL, 2, 5);

-- Dumping structure for table shop_x.orders
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT NULL,
  `address` varchar(50) NOT NULL,
  `phone` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table shop_x.orders: ~0 rows (approximately)

-- Dumping structure for table shop_x.products
CREATE TABLE IF NOT EXISTS `products` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `thumbnail` longtext NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `amount` int NOT NULL,
  `category_id` int unsigned NOT NULL,
  `create_time` datetime NOT NULL,
  `update_time` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `category_id` (`category_id`),
  CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table shop_x.products: ~6 rows (approximately)
INSERT INTO `products` (`id`, `title`, `thumbnail`, `description`, `price`, `amount`, `category_id`, `create_time`, `update_time`) VALUES
	(13, ' VINTAS SODA POP - LOW TOP - AMPARO BLUE', 'Pro_AV00154_2-500x500.jpg', 'Mã sản phẩm: AV00154', 68000, 12, 1, '2023-01-10 00:00:00', '2023-01-10 00:00:00'),
	(14, 'VINTAS SODA POP - HIGH TOP - RED VIOLET', 'Pro_AV00155_1.jpg', 'Mã sản phẩm: AV00155', 720000, 13, 1, '2023-01-10 00:00:00', '2023-01-10 00:00:00'),
	(15, 'VINTAS LANDFORMS - LOW TOP - RAIN DRUM', 'Pro_AV00176_1.jpg', 'Mã sản phẩm: AV00176', 720000, 14, 2, '2023-01-10 00:00:00', '2023-01-10 00:00:00'),
	(16, 'VINTAS LANDFORMS - LOW TOP - GREEN MOSS', 'Pro_AV00177_1.jpg', 'Mã sản phẩm: AV00177', 720000, 15, 2, '2023-01-10 00:00:00', '2023-01-10 00:00:00'),
	(17, ' URBAS SC - MULE - DARK PURPLE', 'Pro_AV00197_1.jpg', 'Mã sản phẩm: AV00197', 580000, 16, 2, '2023-01-10 00:00:00', '2023-01-10 00:00:00'),
	(18, 'Black', 'Pro_AV00191_2-500x500.jpg', 'shoes', 90000, 17, 3, '2023-01-11 00:00:00', '2023-01-03 00:00:00');

-- Dumping structure for table shop_x.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `avatar` longtext,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table shop_x.users: ~2 rows (approximately)
INSERT INTO `users` (`id`, `username`, `email`, `password`, `avatar`) VALUES
	(1, 'Đinh Hằng Nhật Anh', 'vudinhdo2409@gmail.com', '1111', 'nhatanh.jpg'),
	(2, 'Đinh Công Thắng', 'dinhcongthang@gmail.com', '2222', '1.jpg');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
