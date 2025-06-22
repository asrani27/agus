/*
 Navicat Premium Dump SQL

 Source Server         : local
 Source Server Type    : MySQL
 Source Server Version : 50739 (5.7.39)
 Source Host           : localhost:3306
 Source Schema         : _aguskapal

 Target Server Type    : MySQL
 Target Server Version : 50739 (5.7.39)
 File Encoding         : 65001

 Date: 22/06/2025 21:22:32
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for booking
-- ----------------------------
DROP TABLE IF EXISTS `booking`;
CREATE TABLE `booking` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `kode` varchar(255) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `jam` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `pemesanan_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`pemesanan_id`,`user_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of booking
-- ----------------------------
BEGIN;
INSERT INTO `booking` (`id`, `kode`, `tanggal`, `jam`, `status`, `pemesanan_id`, `created_at`, `updated_at`, `user_id`) VALUES (1, '001', '2025-06-22', '15:22', 'ok', 1, '2025-06-22 07:22:05', '2025-06-22 07:22:27', 13);
COMMIT;

-- ----------------------------
-- Table structure for jalur
-- ----------------------------
DROP TABLE IF EXISTS `jalur`;
CREATE TABLE `jalur` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `kode` varchar(255) DEFAULT NULL,
  `supir` varchar(255) DEFAULT NULL,
  `biaya` int(11) DEFAULT NULL,
  `waktu_berangkat` time DEFAULT NULL,
  `waktu_sampai` time DEFAULT NULL,
  `kota_id` int(11) DEFAULT NULL,
  `kapal_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of jalur
-- ----------------------------
BEGIN;
INSERT INTO `jalur` (`id`, `kode`, `supir`, `biaya`, `waktu_berangkat`, `waktu_sampai`, `kota_id`, `kapal_id`, `created_at`, `updated_at`) VALUES (1, '001', 'udin', 100000, '20:01:00', '19:07:00', 1, 1, '2025-06-22 07:01:17', '2025-06-22 07:02:53');
COMMIT;

-- ----------------------------
-- Table structure for kapal
-- ----------------------------
DROP TABLE IF EXISTS `kapal`;
CREATE TABLE `kapal` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `kode` varchar(255) DEFAULT NULL,
  `jenis` varchar(255) DEFAULT NULL,
  `nomor` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of kapal
-- ----------------------------
BEGIN;
INSERT INTO `kapal` (`id`, `kode`, `jenis`, `nomor`, `created_at`, `updated_at`) VALUES (1, '001', 'tongkang', '98765', '2025-06-22 06:43:30', '2025-06-22 06:53:19');
COMMIT;

-- ----------------------------
-- Table structure for kota
-- ----------------------------
DROP TABLE IF EXISTS `kota`;
CREATE TABLE `kota` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `kode` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `jenis` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of kota
-- ----------------------------
BEGIN;
INSERT INTO `kota` (`id`, `kode`, `nama`, `keterangan`, `jenis`, `created_at`, `updated_at`) VALUES (1, 'DA', 'Banjarmasin', '-', 'kota', '2025-06-22 06:42:16', '2025-06-22 06:43:42');
COMMIT;

-- ----------------------------
-- Table structure for pemesanan
-- ----------------------------
DROP TABLE IF EXISTS `pemesanan`;
CREATE TABLE `pemesanan` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `kode` varchar(255) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `jam` time DEFAULT NULL,
  `berangkat` date DEFAULT NULL,
  `pulang` date DEFAULT NULL,
  `jalur_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pemesanan
-- ----------------------------
BEGIN;
INSERT INTO `pemesanan` (`id`, `kode`, `tanggal`, `jam`, `berangkat`, `pulang`, `jalur_id`, `created_at`, `updated_at`) VALUES (1, '001', '2025-06-15', '21:10:00', '2025-06-16', '2025-06-30', 1, '2025-06-22 07:10:03', '2025-06-22 07:13:17');
COMMIT;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `roles` varchar(255) DEFAULT NULL,
  `kode` varchar(255) DEFAULT NULL,
  `telp` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
BEGIN;
INSERT INTO `users` (`id`, `username`, `name`, `password`, `remember_token`, `created_at`, `updated_at`, `roles`, `kode`, `telp`, `email`, `status`) VALUES (1, 'agus', 'agus', '$2y$12$r0HAFQIZdiAabhk3HwCdVub716cax1jMnmwKnv76nJz8sJx0M3TB6', NULL, NULL, '2025-06-22 06:53:39', 'superadmin', '002', '98765', 'agus@gmail.com', NULL);
INSERT INTO `users` (`id`, `username`, `name`, `password`, `remember_token`, `created_at`, `updated_at`, `roles`, `kode`, `telp`, `email`, `status`) VALUES (13, 'andi', 'andi', '$2y$12$BegeF4VduWhuMYZnModua.UW1knHWOgCkbOUE4FC0vMCH7k1.RPyG', NULL, '2025-06-22 06:48:41', '2025-06-22 06:48:41', NULL, '001', '0987654', 'andi@gmail.com', NULL);
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
