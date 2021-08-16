/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

DROP TABLE IF EXISTS `ph_provinces`;
CREATE TABLE `ph_provinces` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `old_names` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `geographic_Level` enum('PROVINCE','DISTRICT','INDEPENDENT') COLLATE utf8mb4_unicode_ci NOT NULL,
  `region_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `ph_provinces_region_id_foreign` (`region_id`),
  CONSTRAINT `ph_provinces_region_id_foreign` FOREIGN KEY (`region_id`) REFERENCES `ph_regions` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1760 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `ph_provinces` (`id`, `name`, `old_names`, `geographic_Level`, `region_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(128, 'Ilocos Norte', '', 'PROVINCE', 1, '2021-08-10 11:43:09', '2021-08-10 11:43:09', NULL);
INSERT INTO `ph_provinces` (`id`, `name`, `old_names`, `geographic_Level`, `region_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(129, 'Ilocos Sur', '', 'PROVINCE', 1, '2021-08-10 11:43:09', '2021-08-10 11:43:09', NULL);
INSERT INTO `ph_provinces` (`id`, `name`, `old_names`, `geographic_Level`, `region_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(133, 'La Union', '', 'PROVINCE', 1, '2021-08-10 11:43:09', '2021-08-10 11:43:09', NULL);
INSERT INTO `ph_provinces` (`id`, `name`, `old_names`, `geographic_Level`, `region_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(155, 'Pangasinan', '', 'PROVINCE', 1, '2021-08-10 11:43:09', '2021-08-10 11:43:09', NULL),
(209, 'Batanes', '', 'PROVINCE', 2, '2021-08-10 11:43:09', '2021-08-10 11:43:09', NULL),
(215, 'Cagayan', '', 'PROVINCE', 2, '2021-08-10 11:43:09', '2021-08-10 11:43:09', NULL),
(231, 'Isabela', '', 'PROVINCE', 2, '2021-08-10 11:43:09', '2021-08-10 11:43:09', NULL),
(250, 'Nueva Vizcaya', '', 'PROVINCE', 2, '2021-08-10 11:43:09', '2021-08-10 11:43:09', NULL),
(257, 'Quirino', '', 'PROVINCE', 2, '2021-08-10 11:43:09', '2021-08-10 11:43:09', NULL),
(308, 'Bataan', '', 'PROVINCE', 3, '2021-08-10 11:43:09', '2021-08-10 11:43:09', NULL),
(314, 'Bulacan', '', 'PROVINCE', 3, '2021-08-10 11:43:09', '2021-08-10 11:43:09', NULL),
(349, 'Nueva Ecija', '', 'PROVINCE', 3, '2021-08-10 11:43:09', '2021-08-10 11:43:09', NULL),
(354, 'Pampanga', '', 'PROVINCE', 3, '2021-08-10 11:43:09', '2021-08-10 11:43:09', NULL),
(369, 'Tarlac', '', 'PROVINCE', 3, '2021-08-10 11:43:09', '2021-08-10 11:43:09', NULL),
(371, 'Zambales', '', 'PROVINCE', 3, '2021-08-10 11:43:09', '2021-08-10 11:43:09', NULL),
(377, 'Aurora', '', 'PROVINCE', 3, '2021-08-10 11:43:09', '2021-08-10 11:43:09', NULL),
(410, 'Batangas', '', 'PROVINCE', 4, '2021-08-10 11:43:09', '2021-08-10 11:43:09', NULL),
(421, 'Cavite', '', 'PROVINCE', 4, '2021-08-10 11:43:09', '2021-08-10 11:43:09', NULL),
(434, 'Laguna', '', 'PROVINCE', 4, '2021-08-10 11:43:09', '2021-08-10 11:43:09', NULL),
(456, 'Quezon', '', 'PROVINCE', 4, '2021-08-10 11:43:09', '2021-08-10 11:43:09', NULL),
(458, 'Rizal', '', 'PROVINCE', 4, '2021-08-10 11:43:09', '2021-08-10 11:43:09', NULL),
(505, 'Albay', '', 'PROVINCE', 5, '2021-08-10 11:43:09', '2021-08-10 11:43:09', NULL),
(516, 'Camarines Norte', '', 'PROVINCE', 5, '2021-08-10 11:43:09', '2021-08-10 11:43:09', NULL),
(517, 'Camarines Sur', '', 'PROVINCE', 5, '2021-08-10 11:43:09', '2021-08-10 11:43:09', NULL),
(520, 'Catanduanes', '', 'PROVINCE', 5, '2021-08-10 11:43:09', '2021-08-10 11:43:09', NULL),
(541, 'Masbate', '', 'PROVINCE', 5, '2021-08-10 11:43:09', '2021-08-10 11:43:09', NULL),
(562, 'Sorsogon', '', 'PROVINCE', 5, '2021-08-10 11:43:09', '2021-08-10 11:43:09', NULL),
(604, 'Aklan', '', 'PROVINCE', 6, '2021-08-10 11:43:09', '2021-08-10 11:43:09', NULL),
(606, 'Antique', '', 'PROVINCE', 6, '2021-08-10 11:43:09', '2021-08-10 11:43:09', NULL),
(619, 'Capiz', '', 'PROVINCE', 6, '2021-08-10 11:43:09', '2021-08-10 11:43:09', NULL),
(630, 'Iloilo', '', 'PROVINCE', 6, '2021-08-10 11:43:09', '2021-08-10 11:43:09', NULL),
(645, 'Negros Occidental', '', 'PROVINCE', 6, '2021-08-10 11:43:09', '2021-08-10 11:43:09', NULL),
(679, 'Guimaras', '', 'PROVINCE', 6, '2021-08-10 11:43:09', '2021-08-10 11:43:09', NULL),
(712, 'Bohol', '', 'PROVINCE', 7, '2021-08-10 11:43:09', '2021-08-10 11:43:09', NULL),
(722, 'Cebu', '', 'PROVINCE', 7, '2021-08-10 11:43:09', '2021-08-10 11:43:09', NULL),
(746, 'Negros Oriental', '', 'PROVINCE', 7, '2021-08-10 11:43:09', '2021-08-10 11:43:09', NULL),
(761, 'Siquijor', '', 'PROVINCE', 7, '2021-08-10 11:43:09', '2021-08-10 11:43:09', NULL),
(826, 'Eastern Samar', '', 'PROVINCE', 8, '2021-08-10 11:43:09', '2021-08-10 11:43:09', NULL),
(837, 'Leyte', '', 'PROVINCE', 8, '2021-08-10 11:43:09', '2021-08-10 11:43:09', NULL),
(848, 'Northern Samar', '', 'PROVINCE', 8, '2021-08-10 11:43:09', '2021-08-10 11:43:09', NULL),
(860, 'Samar', 'Western Samar', 'PROVINCE', 8, '2021-08-10 11:43:09', '2021-08-10 11:43:09', NULL),
(864, 'Southern Leyte', '', 'PROVINCE', 8, '2021-08-10 11:43:09', '2021-08-10 11:43:09', NULL),
(878, 'Biliran', '', 'PROVINCE', 8, '2021-08-10 11:43:09', '2021-08-10 11:43:09', NULL),
(972, 'Zamboanga del Norte', '', 'PROVINCE', 9, '2021-08-10 11:43:09', '2021-08-10 11:43:09', NULL),
(973, 'Zamboanga del Sur', '', 'PROVINCE', 9, '2021-08-10 11:43:09', '2021-08-10 11:43:09', NULL),
(983, 'Zamboanga Sibugay', '', 'PROVINCE', 9, '2021-08-10 11:43:09', '2021-08-10 11:43:09', NULL),
(997, 'City of Isabela (Not a Province)', '', 'INDEPENDENT', 9, '2021-08-10 11:43:09', '2021-08-10 11:43:09', NULL),
(1013, 'Bukidnon', '', 'PROVINCE', 10, '2021-08-10 11:43:09', '2021-08-10 11:43:09', NULL),
(1018, 'Camiguin', '', 'PROVINCE', 10, '2021-08-10 11:43:09', '2021-08-10 11:43:09', NULL),
(1035, 'Lanao del Norte', '', 'PROVINCE', 10, '2021-08-10 11:43:09', '2021-08-10 11:43:09', NULL),
(1042, 'Misamis Occidental', '', 'PROVINCE', 10, '2021-08-10 11:43:09', '2021-08-10 11:43:09', NULL),
(1043, 'Misamis Oriental', '', 'PROVINCE', 10, '2021-08-10 11:43:09', '2021-08-10 11:43:09', NULL),
(1123, 'Davao del Norte', '', 'PROVINCE', 11, '2021-08-10 11:43:09', '2021-08-10 11:43:09', NULL),
(1124, 'Davao del Sur', '', 'PROVINCE', 11, '2021-08-10 11:43:09', '2021-08-10 11:43:09', NULL),
(1125, 'Davao Oriental', '', 'PROVINCE', 11, '2021-08-10 11:43:09', '2021-08-10 11:43:09', NULL),
(1182, 'Davao de Oro', 'Compostela Valley', 'PROVINCE', 11, '2021-08-10 11:43:09', '2021-08-10 11:43:09', NULL),
(1186, 'Davao Occidental', '', 'PROVINCE', 11, '2021-08-10 11:43:09', '2021-08-10 11:43:09', NULL),
(1247, 'Cotabato', 'North Cotabato', 'PROVINCE', 12, '2021-08-10 11:43:09', '2021-08-10 11:43:09', NULL),
(1263, 'South Cotabato', '', 'PROVINCE', 12, '2021-08-10 11:43:09', '2021-08-10 11:43:09', NULL),
(1265, 'Sultan Kudarat', '', 'PROVINCE', 12, '2021-08-10 11:43:09', '2021-08-10 11:43:09', NULL),
(1280, 'Sarangani', '', 'PROVINCE', 12, '2021-08-10 11:43:09', '2021-08-10 11:43:09', NULL),
(1298, 'City of Cotabato (Not a Province)', '', 'INDEPENDENT', 12, '2021-08-10 11:43:09', '2021-08-10 11:43:09', NULL),
(1339, 'NCR, City of Manila, First District (Not a Province)', '', 'DISTRICT', 13, '2021-08-10 11:43:09', '2021-08-10 11:43:09', NULL),
(1374, 'NCR, Second District (Not a Province)', '', 'DISTRICT', 13, '2021-08-10 11:43:09', '2021-08-10 11:43:09', NULL),
(1375, 'NCR, Third District (Not a Province)', '', 'DISTRICT', 13, '2021-08-10 11:43:09', '2021-08-10 11:43:09', NULL),
(1376, 'NCR, Fourth District (Not a Province)', '', 'DISTRICT', 13, '2021-08-10 11:43:09', '2021-08-10 11:43:09', NULL),
(1401, 'Abra', '', 'PROVINCE', 14, '2021-08-10 11:43:09', '2021-08-10 11:43:09', NULL),
(1411, 'Benguet', '', 'PROVINCE', 14, '2021-08-10 11:43:09', '2021-08-10 11:43:09', NULL),
(1427, 'Ifugao', '', 'PROVINCE', 14, '2021-08-10 11:43:09', '2021-08-10 11:43:09', NULL),
(1432, 'Kalinga', '', 'PROVINCE', 14, '2021-08-10 11:43:09', '2021-08-10 11:43:09', NULL),
(1444, 'Mountain Province', '', 'PROVINCE', 14, '2021-08-10 11:43:09', '2021-08-10 11:43:09', NULL),
(1481, 'Apayao', '', 'PROVINCE', 14, '2021-08-10 11:43:09', '2021-08-10 11:43:09', NULL),
(1507, 'Basilan', '', 'PROVINCE', 15, '2021-08-10 11:43:09', '2021-08-10 11:43:09', NULL),
(1536, 'Lanao del Sur', '', 'PROVINCE', 15, '2021-08-10 11:43:09', '2021-08-10 11:43:09', NULL),
(1538, 'Maguindanao', '', 'PROVINCE', 15, '2021-08-10 11:43:09', '2021-08-10 11:43:09', NULL),
(1566, 'Sulu', '', 'PROVINCE', 15, '2021-08-10 11:43:09', '2021-08-10 11:43:09', NULL),
(1570, 'Tawi-Tawi', '', 'PROVINCE', 15, '2021-08-10 11:43:09', '2021-08-10 11:43:09', NULL),
(1602, 'Agusan del Norte', '', 'PROVINCE', 16, '2021-08-10 11:43:09', '2021-08-10 11:43:09', NULL),
(1603, 'Agusan del Sur', '', 'PROVINCE', 16, '2021-08-10 11:43:09', '2021-08-10 11:43:09', NULL),
(1667, 'Surigao del Norte', '', 'PROVINCE', 16, '2021-08-10 11:43:09', '2021-08-10 11:43:09', NULL),
(1668, 'Surigao del Sur', '', 'PROVINCE', 16, '2021-08-10 11:43:09', '2021-08-10 11:43:09', NULL),
(1685, 'Dinagat Islands', '', 'PROVINCE', 16, '2021-08-10 11:43:09', '2021-08-10 11:43:09', NULL),
(1740, 'Marinduque', '', 'PROVINCE', 17, '2021-08-10 11:43:09', '2021-08-10 11:43:09', NULL),
(1751, 'Occidental Mindoro', '', 'PROVINCE', 17, '2021-08-10 11:43:09', '2021-08-10 11:43:09', NULL),
(1752, 'Oriental Mindoro', '', 'PROVINCE', 17, '2021-08-10 11:43:09', '2021-08-10 11:43:09', NULL),
(1753, 'Palawan', '', 'PROVINCE', 17, '2021-08-10 11:43:09', '2021-08-10 11:43:09', NULL),
(1759, 'Romblon', '', 'PROVINCE', 17, '2021-08-10 11:43:09', '2021-08-10 11:43:09', NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;