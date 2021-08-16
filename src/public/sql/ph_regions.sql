/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

DROP TABLE IF EXISTS `ph_regions`;
CREATE TABLE `ph_regions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `old_names` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `ph_regions` (`id`, `name`, `old_names`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Region I (Ilocos Region)', '', '2021-08-10 11:36:51', '2021-08-10 11:36:51', NULL);
INSERT INTO `ph_regions` (`id`, `name`, `old_names`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'Region II (Cagayan Valley)', '', '2021-08-10 11:36:51', '2021-08-10 11:36:51', NULL);
INSERT INTO `ph_regions` (`id`, `name`, `old_names`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 'Region III (Central Luzon)', '', '2021-08-10 11:36:51', '2021-08-10 11:36:51', NULL);
INSERT INTO `ph_regions` (`id`, `name`, `old_names`, `created_at`, `updated_at`, `deleted_at`) VALUES
(4, 'Region IV-A (CALABARZON)', '', '2021-08-10 11:36:51', '2021-08-10 11:36:51', NULL),
(5, 'Region V (Bicol Region)', '', '2021-08-10 11:36:51', '2021-08-10 11:36:51', NULL),
(6, 'Region VI (Western Visayas)', '', '2021-08-10 11:36:51', '2021-08-10 11:36:51', NULL),
(7, 'Region VII (Central Visayas)', '', '2021-08-10 11:36:51', '2021-08-10 11:36:51', NULL),
(8, 'Region VIII (Eastern Visayas)', '', '2021-08-10 11:36:51', '2021-08-10 11:36:51', NULL),
(9, 'Region IX (Zamboanga Peninsula)', '', '2021-08-10 11:36:51', '2021-08-10 11:36:51', NULL),
(10, 'Region X (Northern Mindanao)', '', '2021-08-10 11:36:51', '2021-08-10 11:36:51', NULL),
(11, 'Region XI (Davao Region)', '', '2021-08-10 11:36:51', '2021-08-10 11:36:51', NULL),
(12, 'Region XII (SOCCSKSARGEN)', '', '2021-08-10 11:36:51', '2021-08-10 11:36:51', NULL),
(13, 'National Capital Region (NCR)', '', '2021-08-10 11:36:51', '2021-08-10 11:36:51', NULL),
(14, 'Cordillera Administrative Region (CAR)', '', '2021-08-10 11:36:51', '2021-08-10 11:36:51', NULL),
(15, 'Autonomous Region In Muslim Mindanao (ARMM)', '', '2021-08-10 11:36:51', '2021-08-10 11:36:51', NULL),
(16, 'Region XIII (Caraga)', '', '2021-08-10 11:36:51', '2021-08-10 11:36:51', NULL),
(17, 'MIMAROPA Region', '', '2021-08-10 11:36:51', '2021-08-10 11:36:51', NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;