/*
Navicat MySQL Data Transfer

Source Server         : Butchigho
Source Server Version : 50625
Source Host           : localhost:3306
Source Database       : laravel5_model

Target Server Type    : MYSQL
Target Server Version : 50625
File Encoding         : 65001

Date: 2016-03-08 14:04:19
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `butchigho`
-- ----------------------------
DROP TABLE IF EXISTS `butchigho`;
CREATE TABLE `butchigho` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phonenumber` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of butchigho
-- ----------------------------
INSERT INTO `butchigho` VALUES ('1', 'test1', '021', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `butchigho` VALUES ('2', 'test2', '113', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `butchigho` VALUES ('3', 'test3', '114', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `butchigho` VALUES ('4', 'test4', '115', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- ----------------------------
-- Table structure for `butchighos`
-- ----------------------------
DROP TABLE IF EXISTS `butchighos`;
CREATE TABLE `butchighos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of butchighos
-- ----------------------------

-- ----------------------------
-- Table structure for `category`
-- ----------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of category
-- ----------------------------
INSERT INTO `category` VALUES ('1', 'ao', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `category` VALUES ('2', 'quan', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- ----------------------------
-- Table structure for `images`
-- ----------------------------
DROP TABLE IF EXISTS `images`;
CREATE TABLE `images` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `new_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of images
-- ----------------------------
INSERT INTO `images` VALUES ('1', 'image1', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `images` VALUES ('2', 'image2', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `images` VALUES ('3', 'image3', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `images` VALUES ('4', 'image4', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `images` VALUES ('5', 'image5', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- ----------------------------
-- Table structure for `migrations`
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('2014_10_12_000000_create_users_table', '1');
INSERT INTO `migrations` VALUES ('2014_10_12_100000_create_password_resets_table', '1');
INSERT INTO `migrations` VALUES ('2016_01_06_020724_create_butchigho_table', '1');
INSERT INTO `migrations` VALUES ('2016_01_06_035841_create_butchighos_table', '2');
INSERT INTO `migrations` VALUES ('2016_01_07_013525_create_products_table', '2');
INSERT INTO `migrations` VALUES ('2016_01_07_013650_create_news_table', '2');
INSERT INTO `migrations` VALUES ('2016_01_07_013657_create_images_table', '2');
INSERT INTO `migrations` VALUES ('2016_01_08_093915_insertNewsTable', '3');
INSERT INTO `migrations` VALUES ('2016_01_15_033044_News', '4');

-- ----------------------------
-- Table structure for `news`
-- ----------------------------
DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `images` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of news
-- ----------------------------
INSERT INTO `news` VALUES ('15', 'bai so 3', '3', '2016-03-01 03:49:00', '2016-03-01 03:49:00', 'Selection_001.png', 'Mo ta bai so 3', 'Noi dung bai so 3	');
INSERT INTO `news` VALUES ('16', 'thông tin thời tiết ngày mai', '3', '2016-03-01 09:20:56', '2016-03-01 09:20:56', 'cautructhumuc.PNG', 'Mô tả thời tiết ngày mai', 'Mô tả chi tiết thời tiết ngày mai									\r\n								');
INSERT INTO `news` VALUES ('17', 'Thông tin ngày thứ 5', '3', '2016-03-03 01:49:21', '2016-03-03 01:49:21', 'cautructhumuc.PNG', 'Ngày trước ngày thứ 6', 'Đang cập nhật						');

-- ----------------------------
-- Table structure for `password_resets`
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for `product`
-- ----------------------------
DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `cate_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `product_cate_id_foreign` (`cate_id`),
  CONSTRAINT `product_cate_id_foreign` FOREIGN KEY (`cate_id`) REFERENCES `category` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of product
-- ----------------------------
INSERT INTO `product` VALUES ('1', 'ao thun', '1', '1', '0000-00-00 00:00:00', '2016-01-06 09:07:41');
INSERT INTO `product` VALUES ('2', 'quan dai', '2000', '2', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `product` VALUES ('3', 'ao balo', '5000', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `product` VALUES ('5', 'ao mới', '100000', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- ----------------------------
-- Table structure for `products`
-- ----------------------------
DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of products
-- ----------------------------

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('3', 'admin', 'admin@admin.com', '$2y$10$LWt5GWsDlFDvJxefh/6sbe2Tpjo9aKFQfDNXlJVeXUzvjkwMHX1j.', 'vZfHrU7jXAwDMcFKinnJcE9pN7fBoIREbVVstYESzQFem4TmHgp2eln8gRnT', '2016-02-18 03:45:52', '2016-03-01 02:58:18');
INSERT INTO `users` VALUES ('4', 'Lê Quang Quý Hòa', 'quyhoait@gmail.com', '$2y$10$p29C06vErjVfEpN.YXQNL.ML1mIMPJkd45daZdtyxTHrd4.rCsCly', null, '2016-02-29 08:45:15', '2016-02-29 08:45:15');
