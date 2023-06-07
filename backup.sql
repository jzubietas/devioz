-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         8.0.30 - MySQL Community Server - GPL
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para devioz


-- Volcando estructura para tabla devioz.blogs
CREATE TABLE IF NOT EXISTS `blogs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(191) COLLATE utf8mb3_unicode_ci NOT NULL,
  `contenido` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- Volcando datos para la tabla devioz.blogs: ~0 rows (aproximadamente)
DELETE FROM `blogs`;

-- Volcando estructura para tabla devioz.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb3_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb3_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb3_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- Volcando datos para la tabla devioz.failed_jobs: ~0 rows (aproximadamente)
DELETE FROM `failed_jobs`;

-- Volcando estructura para tabla devioz.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb3_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- Volcando datos para la tabla devioz.migrations: ~0 rows (aproximadamente)
DELETE FROM `migrations`;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2021_08_22_012813_create_permission_tables', 1),
	(6, '2021_08_22_020736_create_blogs_table', 1);

-- Volcando estructura para tabla devioz.model_has_permissions
CREATE TABLE IF NOT EXISTS `model_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb3_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- Volcando datos para la tabla devioz.model_has_permissions: ~0 rows (aproximadamente)
DELETE FROM `model_has_permissions`;

-- Volcando estructura para tabla devioz.model_has_roles
CREATE TABLE IF NOT EXISTS `model_has_roles` (
  `role_id` bigint unsigned NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb3_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- Volcando datos para la tabla devioz.model_has_roles: ~0 rows (aproximadamente)
DELETE FROM `model_has_roles`;
INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
	(1, 'App\\Models\\User', 1);

-- Volcando estructura para tabla devioz.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb3_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb3_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- Volcando datos para la tabla devioz.password_resets: ~0 rows (aproximadamente)
DELETE FROM `password_resets`;

-- Volcando estructura para tabla devioz.permissions
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb3_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb3_unicode_ci DEFAULT '',
  `modulo` varchar(191) COLLATE utf8mb3_unicode_ci DEFAULT '',
  `guard_name` varchar(191) COLLATE utf8mb3_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=186 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- Volcando datos para la tabla devioz.permissions: ~185 rows (aproximadamente)
DELETE FROM `permissions`;
INSERT INTO `permissions` (`id`, `name`, `description`, `modulo`, `guard_name`, `created_at`, `updated_at`) VALUES
	(1, 'ver-rol', '', '', 'web', '2023-05-20 05:09:35', '2023-05-20 05:09:35'),
	(2, 'crear-rol', '', '', 'web', '2023-05-20 05:09:35', '2023-05-20 05:09:35'),
	(3, 'editar-rol', '', '', 'web', '2023-05-20 05:09:35', '2023-05-20 05:09:35'),
	(4, 'borrar-rol', '', '', 'web', '2023-05-20 05:09:35', '2023-05-20 05:09:35'),
	(5, 'ver-permiso', '', '', 'web', '2023-05-20 05:09:35', '2023-05-20 05:09:35'),
	(6, 'crear-permiso', '', '', 'web', '2023-05-20 05:09:35', '2023-05-20 05:09:35'),
	(7, 'editar-permiso', '', '', 'web', '2023-05-20 05:09:35', '2023-05-20 05:09:35'),
	(8, 'borrar-permiso', '', '', 'web', '2023-05-20 05:09:35', '2023-05-20 05:09:35'),
	(9, 'ver-usuario', '', '', 'web', '2023-05-20 05:09:35', '2023-05-20 05:09:35'),
	(10, 'crear-usuario', '', '', 'web', '2023-05-20 05:09:35', '2023-05-20 05:09:35'),
	(11, 'editar-usuario', '', '', 'web', '2023-05-20 05:09:35', '2023-05-20 05:09:35'),
	(12, 'borrar-usuario', '', '', 'web', '2023-05-20 05:09:35', '2023-05-20 05:09:35'),
	(13, 'ver-blog', '', '', 'web', '2023-05-20 05:09:35', '2023-05-20 05:09:35'),
	(14, 'crear-blog', '', '', 'web', '2023-05-20 05:09:36', '2023-05-20 05:09:36'),
	(15, 'editar-blog', '', '', 'web', '2023-05-20 05:09:36', '2023-05-20 05:09:36'),
	(16, 'borrar-blog', '', '', 'web', '2023-05-20 05:09:36', '2023-05-20 05:09:36'),
	(17, 'ver-item', '', '', 'web', '2023-05-20 05:09:36', '2023-05-20 05:09:36'),
	(18, 'crear-item', '', '', 'web', '2023-05-20 05:09:36', '2023-05-20 05:09:36'),
	(19, 'editar-item', '', '', 'web', '2023-05-20 05:09:36', '2023-05-20 05:09:36'),
	(20, 'borrar-item', '', '', 'web', '2023-05-20 05:09:36', '2023-05-20 05:09:36'),
	(21, 'ver-rubro', '', '', 'web', '2023-05-20 05:09:36', '2023-05-20 05:09:36'),
	(22, 'crear-rubro', '', '', 'web', '2023-05-20 05:09:36', '2023-05-20 05:09:36'),
	(23, 'editar-rubro', '', '', 'web', '2023-05-20 05:09:36', '2023-05-20 05:09:36'),
	(24, 'borrar-rubro', '', '', 'web', '2023-05-20 05:09:36', '2023-05-20 05:09:36'),
	(25, 'ver-alimentario', '', '', 'web', '2023-05-20 05:09:36', '2023-05-20 05:09:36'),
	(26, 'ver-alimentario-banner', '', '', 'web', '2023-05-20 05:09:36', '2023-05-20 05:09:36'),
	(27, 'ver-alimentario-servicios', '', '', 'web', '2023-05-20 05:09:36', '2023-05-20 05:09:36'),
	(28, 'crear-alimentario-servicios', '', '', 'web', '2023-05-20 05:09:37', '2023-05-20 05:09:37'),
	(29, 'editar-alimentario-banner', '', '', 'web', '2023-05-20 05:09:37', '2023-05-20 05:09:37'),
	(30, 'editar-alimentario-servicios', '', '', 'web', '2023-05-20 05:09:37', '2023-05-20 05:09:37'),
	(31, 'borrar-alimentario-servicios', '', '', 'web', '2023-05-20 05:09:37', '2023-05-20 05:09:37'),
	(32, 'ver-callcenter', '', '', 'web', '2023-05-20 05:09:37', '2023-05-20 05:09:37'),
	(33, 'ver-callcenter-banner', '', '', 'web', '2023-05-20 05:09:37', '2023-05-20 05:09:37'),
	(34, 'ver-callcenter-servicios', '', '', 'web', '2023-05-20 05:09:37', '2023-05-20 05:09:37'),
	(35, 'crear-callcenter-servicios', '', '', 'web', '2023-05-20 05:09:37', '2023-05-20 05:09:37'),
	(36, 'editar-callcenter-banner', '', '', 'web', '2023-05-20 05:09:37', '2023-05-20 05:09:37'),
	(37, 'editar-callcenter-servicios', '', '', 'web', '2023-05-20 05:09:37', '2023-05-20 05:09:37'),
	(38, 'borrar-callcenter-servicios', '', '', 'web', '2023-05-20 05:09:37', '2023-05-20 05:09:37'),
	(39, 'ver-comercio', '', '', 'web', '2023-05-20 05:09:37', '2023-05-20 05:09:37'),
	(40, 'ver-comercio-banner', '', '', 'web', '2023-05-20 05:09:37', '2023-05-20 05:09:37'),
	(41, 'ver-comercio-servicios', '', '', 'web', '2023-05-20 05:09:38', '2023-05-20 05:09:38'),
	(42, 'crear-comercio-servicios', '', '', 'web', '2023-05-20 05:09:38', '2023-05-20 05:09:38'),
	(43, 'editar-comercio-banner', '', '', 'web', '2023-05-20 05:09:38', '2023-05-20 05:09:38'),
	(44, 'editar-comercio-servicios', '', '', 'web', '2023-05-20 05:09:38', '2023-05-20 05:09:38'),
	(45, 'borrar-comercio-servicios', '', '', 'web', '2023-05-20 05:09:38', '2023-05-20 05:09:38'),
	(46, 'ver-consultora', '', '', 'web', '2023-05-20 05:09:38', '2023-05-20 05:09:38'),
	(47, 'ver-consultora-banner', '', '', 'web', '2023-05-20 05:09:38', '2023-05-20 05:09:38'),
	(48, 'ver-consultora-servicios', '', '', 'web', '2023-05-20 05:09:38', '2023-05-20 05:09:38'),
	(49, 'crear-consultora-servicios', '', '', 'web', '2023-05-20 05:09:38', '2023-05-20 05:09:38'),
	(50, 'editar-consultora-banner', '', '', 'web', '2023-05-20 05:09:38', '2023-05-20 05:09:38'),
	(51, 'editar-consultora-servicios', '', '', 'web', '2023-05-20 05:09:38', '2023-05-20 05:09:38'),
	(52, 'borrar-consultora-servicios', '', '', 'web', '2023-05-20 05:09:38', '2023-05-20 05:09:38'),
	(53, 'ver-desarrollorural', '', '', 'web', '2023-05-20 05:09:38', '2023-05-20 05:09:38'),
	(54, 'ver-desarrollorural-banner', '', '', 'web', '2023-05-20 05:09:38', '2023-05-20 05:09:38'),
	(55, 'ver-desarrollorural-servicios', '', '', 'web', '2023-05-20 05:09:38', '2023-05-20 05:09:38'),
	(56, 'crear-desarrollorural-servicios', '', '', 'web', '2023-05-20 05:09:38', '2023-05-20 05:09:38'),
	(57, 'editar-desarrollorural-banner', '', '', 'web', '2023-05-20 05:09:38', '2023-05-20 05:09:38'),
	(58, 'editar-desarrollorural-servicios', '', '', 'web', '2023-05-20 05:09:38', '2023-05-20 05:09:38'),
	(59, 'borrar-desarrollorural-servicios', '', '', 'web', '2023-05-20 05:09:38', '2023-05-20 05:09:38'),
	(60, 'ver-educacion', '', '', 'web', '2023-05-20 05:09:38', '2023-05-20 05:09:38'),
	(61, 'ver-educacion-banner', '', '', 'web', '2023-05-20 05:09:38', '2023-05-20 05:09:38'),
	(62, 'ver-educacion-servicios', '', '', 'web', '2023-05-20 05:09:38', '2023-05-20 05:09:38'),
	(63, 'crear-educacion-servicios', '', '', 'web', '2023-05-20 05:09:38', '2023-05-20 05:09:38'),
	(64, 'editar-educacion-banner', '', '', 'web', '2023-05-20 05:09:39', '2023-05-20 05:09:39'),
	(65, 'editar-educacion-servicios', '', '', 'web', '2023-05-20 05:09:39', '2023-05-20 05:09:39'),
	(66, 'borrar-educacion-servicios', '', '', 'web', '2023-05-20 05:09:39', '2023-05-20 05:09:39'),
	(67, 'ver-energia', '', '', 'web', '2023-05-20 05:09:39', '2023-05-20 05:09:39'),
	(68, 'ver-energia-banner', '', '', 'web', '2023-05-20 05:09:39', '2023-05-20 05:09:39'),
	(69, 'ver-energia-servicios', '', '', 'web', '2023-05-20 05:09:39', '2023-05-20 05:09:39'),
	(70, 'crear-energia-servicios', '', '', 'web', '2023-05-20 05:09:39', '2023-05-20 05:09:39'),
	(71, 'editar-energia-banner', '', '', 'web', '2023-05-20 05:09:39', '2023-05-20 05:09:39'),
	(72, 'editar-energia-servicios', '', '', 'web', '2023-05-20 05:09:39', '2023-05-20 05:09:39'),
	(73, 'borrar-energia-servicios', '', '', 'web', '2023-05-20 05:09:39', '2023-05-20 05:09:39'),
	(74, 'ver-entretenimiento', '', '', 'web', '2023-05-20 05:09:39', '2023-05-20 05:09:39'),
	(75, 'ver-entretenimiento-banner', '', '', 'web', '2023-05-20 05:09:39', '2023-05-20 05:09:39'),
	(76, 'ver-entretenimiento-servicios', '', '', 'web', '2023-05-20 05:09:39', '2023-05-20 05:09:39'),
	(77, 'crear-entretenimiento-servicios', '', '', 'web', '2023-05-20 05:09:39', '2023-05-20 05:09:39'),
	(78, 'editar-entretenimiento-banner', '', '', 'web', '2023-05-20 05:09:39', '2023-05-20 05:09:39'),
	(79, 'editar-entretenimiento-servicios', '', '', 'web', '2023-05-20 05:09:39', '2023-05-20 05:09:39'),
	(80, 'borrar-entretenimiento-servicios', '', '', 'web', '2023-05-20 05:09:39', '2023-05-20 05:09:39'),
	(81, 'ver-financiero', '', '', 'web', '2023-05-20 05:09:39', '2023-05-20 05:09:39'),
	(82, 'ver-financiero-banner', '', '', 'web', '2023-05-20 05:09:39', '2023-05-20 05:09:39'),
	(83, 'ver-financiero-servicios', '', '', 'web', '2023-05-20 05:09:39', '2023-05-20 05:09:39'),
	(84, 'crear-financiero-servicios', '', '', 'web', '2023-05-20 05:09:40', '2023-05-20 05:09:40'),
	(85, 'editar-financiero-banner', '', '', 'web', '2023-05-20 05:09:40', '2023-05-20 05:09:40'),
	(86, 'editar-financiero-servicios', '', '', 'web', '2023-05-20 05:09:40', '2023-05-20 05:09:40'),
	(87, 'borrar-financiero-servicios', '', '', 'web', '2023-05-20 05:09:40', '2023-05-20 05:09:40'),
	(88, 'ver-hoteleria', '', '', 'web', '2023-05-20 05:09:40', '2023-05-20 05:09:40'),
	(89, 'ver-hoteleria-banner', '', '', 'web', '2023-05-20 05:09:40', '2023-05-20 05:09:40'),
	(90, 'ver-hoteleria-servicios', '', '', 'web', '2023-05-20 05:09:40', '2023-05-20 05:09:40'),
	(91, 'crear-hoteleria-servicios', '', '', 'web', '2023-05-20 05:09:40', '2023-05-20 05:09:40'),
	(92, 'editar-hoteleria-banner', '', '', 'web', '2023-05-20 05:09:40', '2023-05-20 05:09:40'),
	(93, 'editar-hoteleria-servicios', '', '', 'web', '2023-05-20 05:09:40', '2023-05-20 05:09:40'),
	(94, 'borrar-hoteleria-servicios', '', '', 'web', '2023-05-20 05:09:40', '2023-05-20 05:09:40'),
	(95, 'ver-legal', '', '', 'web', '2023-05-20 05:09:40', '2023-05-20 05:09:40'),
	(96, 'ver-legal-banner', '', '', 'web', '2023-05-20 05:09:40', '2023-05-20 05:09:40'),
	(97, 'ver-legal-servicios', '', '', 'web', '2023-05-20 05:09:40', '2023-05-20 05:09:40'),
	(98, 'crear-legal-servicios', '', '', 'web', '2023-05-20 05:09:40', '2023-05-20 05:09:40'),
	(99, 'editar-legal-banner', '', '', 'web', '2023-05-20 05:09:40', '2023-05-20 05:09:40'),
	(100, 'editar-legal-servicios', '', '', 'web', '2023-05-20 05:09:40', '2023-05-20 05:09:40'),
	(101, 'borrar-legal-servicios', '', '', 'web', '2023-05-20 05:09:40', '2023-05-20 05:09:40'),
	(102, 'ver-logistica', '', '', 'web', '2023-05-20 05:09:40', '2023-05-20 05:09:40'),
	(103, 'ver-logistica-banner', '', '', 'web', '2023-05-20 05:09:41', '2023-05-20 05:09:41'),
	(104, 'ver-logistica-servicios', '', '', 'web', '2023-05-20 05:09:41', '2023-05-20 05:09:41'),
	(105, 'crear-logistica-servicios', '', '', 'web', '2023-05-20 05:09:41', '2023-05-20 05:09:41'),
	(106, 'editar-logistica-banner', '', '', 'web', '2023-05-20 05:09:41', '2023-05-20 05:09:41'),
	(107, 'editar-logistica-servicios', '', '', 'web', '2023-05-20 05:09:41', '2023-05-20 05:09:41'),
	(108, 'borrar-logistica-servicios', '', '', 'web', '2023-05-20 05:09:41', '2023-05-20 05:09:41'),
	(109, 'ver-medicina', '', '', 'web', '2023-05-20 05:09:41', '2023-05-20 05:09:41'),
	(110, 'ver-medicina-banner', '', '', 'web', '2023-05-20 05:09:41', '2023-05-20 05:09:41'),
	(111, 'ver-medicina-servicios', '', '', 'web', '2023-05-20 05:09:41', '2023-05-20 05:09:41'),
	(112, 'crear-medicina-servicios', '', '', 'web', '2023-05-20 05:09:41', '2023-05-20 05:09:41'),
	(113, 'editar-medicina-banner', '', '', 'web', '2023-05-20 05:09:41', '2023-05-20 05:09:41'),
	(114, 'editar-medicina-servicios', '', '', 'web', '2023-05-20 05:09:41', '2023-05-20 05:09:41'),
	(115, 'borrar-medicina-servicios', '', '', 'web', '2023-05-20 05:09:41', '2023-05-20 05:09:41'),
	(116, 'ver-mineria', '', '', 'web', '2023-05-20 05:09:41', '2023-05-20 05:09:41'),
	(117, 'ver-mineria-banner', '', '', 'web', '2023-05-20 05:09:41', '2023-05-20 05:09:41'),
	(118, 'ver-mineria-servicios', '', '', 'web', '2023-05-20 05:09:41', '2023-05-20 05:09:41'),
	(119, 'crear-mineria-servicios', '', '', 'web', '2023-05-20 05:09:41', '2023-05-20 05:09:41'),
	(120, 'editar-mineria-banner', '', '', 'web', '2023-05-20 05:09:41', '2023-05-20 05:09:41'),
	(121, 'editar-mineria-servicios', '', '', 'web', '2023-05-20 05:09:42', '2023-05-20 05:09:42'),
	(122, 'borrar-mineria-servicios', '', '', 'web', '2023-05-20 05:09:42', '2023-05-20 05:09:42'),
	(123, 'ver-redes', '', '', 'web', '2023-05-20 05:09:42', '2023-05-20 05:09:42'),
	(124, 'ver-redes-banner', '', '', 'web', '2023-05-20 05:09:42', '2023-05-20 05:09:42'),
	(125, 'ver-redes-servicios', '', '', 'web', '2023-05-20 05:09:42', '2023-05-20 05:09:42'),
	(126, 'crear-redes-servicios', '', '', 'web', '2023-05-20 05:09:42', '2023-05-20 05:09:42'),
	(127, 'editar-redes-banner', '', '', 'web', '2023-05-20 05:09:42', '2023-05-20 05:09:42'),
	(128, 'editar-redes-servicios', '', '', 'web', '2023-05-20 05:09:42', '2023-05-20 05:09:42'),
	(129, 'borrar-redes-servicios', '', '', 'web', '2023-05-20 05:09:42', '2023-05-20 05:09:42'),
	(130, 'ver-rrhh', '', '', 'web', '2023-05-20 05:09:42', '2023-05-20 05:09:42'),
	(131, 'ver-rrhh-banner', '', '', 'web', '2023-05-20 05:09:42', '2023-05-20 05:09:42'),
	(132, 'ver-rrhh-servicios', '', '', 'web', '2023-05-20 05:09:42', '2023-05-20 05:09:42'),
	(133, 'crear-rrhh-servicios', '', '', 'web', '2023-05-20 05:09:42', '2023-05-20 05:09:42'),
	(134, 'editar-rrhh-banner', '', '', 'web', '2023-05-20 05:09:42', '2023-05-20 05:09:42'),
	(135, 'editar-rrhh-servicios', '', '', 'web', '2023-05-20 05:09:42', '2023-05-20 05:09:42'),
	(136, 'borrar-rrhh-servicios', '', '', 'web', '2023-05-20 05:09:42', '2023-05-20 05:09:42'),
	(137, 'ver-refineria', '', '', 'web', '2023-05-20 05:09:43', '2023-05-20 05:09:43'),
	(138, 'ver-refineria-banner', '', '', 'web', '2023-05-20 05:09:43', '2023-05-20 05:09:43'),
	(139, 'ver-refineria-servicios', '', '', 'web', '2023-05-20 05:09:43', '2023-05-20 05:09:43'),
	(140, 'crear-refineria-servicios', '', '', 'web', '2023-05-20 05:09:43', '2023-05-20 05:09:43'),
	(141, 'editar-refineria-banner', '', '', 'web', '2023-05-20 05:09:43', '2023-05-20 05:09:43'),
	(142, 'editar-refineria-servicios', '', '', 'web', '2023-05-20 05:09:43', '2023-05-20 05:09:43'),
	(143, 'borrar-refineria-servicios', '', '', 'web', '2023-05-20 05:09:43', '2023-05-20 05:09:43'),
	(144, 'ver-seguridad', '', '', 'web', '2023-05-20 05:09:43', '2023-05-20 05:09:43'),
	(145, 'ver-seguridad-banner', '', '', 'web', '2023-05-20 05:09:43', '2023-05-20 05:09:43'),
	(146, 'ver-seguridad-servicios', '', '', 'web', '2023-05-20 05:09:43', '2023-05-20 05:09:43'),
	(147, 'crear-seguridad-servicios', '', '', 'web', '2023-05-20 05:09:44', '2023-05-20 05:09:44'),
	(148, 'editar-seguridad-banner', '', '', 'web', '2023-05-20 05:09:44', '2023-05-20 05:09:44'),
	(149, 'editar-seguridad-servicios', '', '', 'web', '2023-05-20 05:09:44', '2023-05-20 05:09:44'),
	(150, 'borrar-seguridad-servicios', '', '', 'web', '2023-05-20 05:09:44', '2023-05-20 05:09:44'),
	(151, 'ver-servicios', '', '', 'web', '2023-05-20 05:09:44', '2023-05-20 05:09:44'),
	(152, 'ver-servicios-banner', '', '', 'web', '2023-05-20 05:09:44', '2023-05-20 05:09:44'),
	(153, 'ver-servicios-servicios', '', '', 'web', '2023-05-20 05:09:44', '2023-05-20 05:09:44'),
	(154, 'crear-servicios-servicios', '', '', 'web', '2023-05-20 05:09:44', '2023-05-20 05:09:44'),
	(155, 'editar-servicios-banner', '', '', 'web', '2023-05-20 05:09:44', '2023-05-20 05:09:44'),
	(156, 'editar-servicios-servicios', '', '', 'web', '2023-05-20 05:09:44', '2023-05-20 05:09:44'),
	(157, 'borrar-servicios-servicios', '', '', 'web', '2023-05-20 05:09:44', '2023-05-20 05:09:44'),
	(158, 'ver-software', '', '', 'web', '2023-05-20 05:09:45', '2023-05-20 05:09:45'),
	(159, 'ver-software-banner', '', '', 'web', '2023-05-20 05:09:45', '2023-05-20 05:09:45'),
	(160, 'ver-software-servicios', '', '', 'web', '2023-05-20 05:09:45', '2023-05-20 05:09:45'),
	(161, 'crear-software-servicios', '', '', 'web', '2023-05-20 05:09:45', '2023-05-20 05:09:45'),
	(162, 'editar-software-banner', '', '', 'web', '2023-05-20 05:09:45', '2023-05-20 05:09:45'),
	(163, 'editar-software-servicios', '', '', 'web', '2023-05-20 05:09:45', '2023-05-20 05:09:45'),
	(164, 'borrar-software-servicios', '', '', 'web', '2023-05-20 05:09:45', '2023-05-20 05:09:45'),
	(165, 'ver-supermercado', '', '', 'web', '2023-05-20 05:09:45', '2023-05-20 05:09:45'),
	(166, 'ver-supermercado-banner', '', '', 'web', '2023-05-20 05:09:45', '2023-05-20 05:09:45'),
	(167, 'ver-supermercado-servicios', '', '', 'web', '2023-05-20 05:09:45', '2023-05-20 05:09:45'),
	(168, 'crear-supermercado-servicios', '', '', 'web', '2023-05-20 05:09:45', '2023-05-20 05:09:45'),
	(169, 'editar-supermercado-banner', '', '', 'web', '2023-05-20 05:09:45', '2023-05-20 05:09:45'),
	(170, 'editar-supermercado-servicios', '', '', 'web', '2023-05-20 05:09:45', '2023-05-20 05:09:45'),
	(171, 'borrar-supermercado-servicios', '', '', 'web', '2023-05-20 05:09:46', '2023-05-20 05:09:46'),
	(172, 'ver-telecomunicacion', '', '', 'web', '2023-05-20 05:09:46', '2023-05-20 05:09:46'),
	(173, 'ver-telecomunicacion-banner', '', '', 'web', '2023-05-20 05:09:46', '2023-05-20 05:09:46'),
	(174, 'ver-telecomunicacion-servicios', '', '', 'web', '2023-05-20 05:09:46', '2023-05-20 05:09:46'),
	(175, 'crear-telecomunicacion-servicios', '', '', 'web', '2023-05-20 05:09:46', '2023-05-20 05:09:46'),
	(176, 'editar-telecomunicacion-banner', '', '', 'web', '2023-05-20 05:09:46', '2023-05-20 05:09:46'),
	(177, 'editar-telecomunicacion-servicios', '', '', 'web', '2023-05-20 05:09:46', '2023-05-20 05:09:46'),
	(178, 'borrar-telecomunicacion-servicios', '', '', 'web', '2023-05-20 05:09:46', '2023-05-20 05:09:46'),
	(179, 'ver-transporte', '', '', 'web', '2023-05-20 05:09:46', '2023-05-20 05:09:46'),
	(180, 'ver-transporte-banner', '', '', 'web', '2023-05-20 05:09:46', '2023-05-20 05:09:46'),
	(181, 'ver-transporte-servicios', '', '', 'web', '2023-05-20 05:09:46', '2023-05-20 05:09:46'),
	(182, 'crear-transporte-servicios', '', '', 'web', '2023-05-20 05:09:46', '2023-05-20 05:09:46'),
	(183, 'editar-transporte-banner', '', '', 'web', '2023-05-20 05:09:46', '2023-05-20 05:09:46'),
	(184, 'editar-transporte-servicios', '', '', 'web', '2023-05-20 05:09:46', '2023-05-20 05:09:46'),
	(185, 'borrar-transporte-servicios', '', '', 'web', '2023-05-20 05:09:47', '2023-05-20 05:09:47');

-- Volcando estructura para tabla devioz.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb3_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb3_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb3_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb3_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- Volcando datos para la tabla devioz.personal_access_tokens: ~0 rows (aproximadamente)
DELETE FROM `personal_access_tokens`;

-- Volcando estructura para tabla devioz.roles
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb3_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb3_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- Volcando datos para la tabla devioz.roles: ~3 rows (aproximadamente)
DELETE FROM `roles`;
INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
	(1, 'Administrador', 'web', '2023-05-20 05:09:54', '2023-05-20 05:09:54'),
	(2, 'Desarrollo', 'web', '2023-05-20 05:09:54', '2023-05-20 05:09:54'),
	(3, 'Usuario', 'web', '2023-05-20 05:09:54', '2023-05-20 05:09:54');

-- Volcando estructura para tabla devioz.role_has_permissions
CREATE TABLE IF NOT EXISTS `role_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `role_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- Volcando datos para la tabla devioz.role_has_permissions: ~185 rows (aproximadamente)
DELETE FROM `role_has_permissions`;
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
	(1, 1),
	(2, 1),
	(3, 1),
	(4, 1),
	(5, 1),
	(6, 1),
	(7, 1),
	(8, 1),
	(9, 1),
	(10, 1),
	(11, 1),
	(12, 1),
	(13, 1),
	(14, 1),
	(15, 1),
	(16, 1),
	(17, 1),
	(18, 1),
	(19, 1),
	(20, 1),
	(21, 1),
	(22, 1),
	(23, 1),
	(24, 1),
	(25, 1),
	(26, 1),
	(27, 1),
	(28, 1),
	(29, 1),
	(30, 1),
	(31, 1),
	(32, 1),
	(33, 1),
	(34, 1),
	(35, 1),
	(36, 1),
	(37, 1),
	(38, 1),
	(39, 1),
	(40, 1),
	(41, 1),
	(42, 1),
	(43, 1),
	(44, 1),
	(45, 1),
	(46, 1),
	(47, 1),
	(48, 1),
	(49, 1),
	(50, 1),
	(51, 1),
	(52, 1),
	(53, 1),
	(54, 1),
	(55, 1),
	(56, 1),
	(57, 1),
	(58, 1),
	(59, 1),
	(60, 1),
	(61, 1),
	(62, 1),
	(63, 1),
	(64, 1),
	(65, 1),
	(66, 1),
	(67, 1),
	(68, 1),
	(69, 1),
	(70, 1),
	(71, 1),
	(72, 1),
	(73, 1),
	(74, 1),
	(75, 1),
	(76, 1),
	(77, 1),
	(78, 1),
	(79, 1),
	(80, 1),
	(81, 1),
	(82, 1),
	(83, 1),
	(84, 1),
	(85, 1),
	(86, 1),
	(87, 1),
	(88, 1),
	(89, 1),
	(90, 1),
	(91, 1),
	(92, 1),
	(93, 1),
	(94, 1),
	(95, 1),
	(96, 1),
	(97, 1),
	(98, 1),
	(99, 1),
	(100, 1),
	(101, 1),
	(102, 1),
	(103, 1),
	(104, 1),
	(105, 1),
	(106, 1),
	(107, 1),
	(108, 1),
	(109, 1),
	(110, 1),
	(111, 1),
	(112, 1),
	(113, 1),
	(114, 1),
	(115, 1),
	(116, 1),
	(117, 1),
	(118, 1),
	(119, 1),
	(120, 1),
	(121, 1),
	(122, 1),
	(123, 1),
	(124, 1),
	(125, 1),
	(126, 1),
	(127, 1),
	(128, 1),
	(129, 1),
	(130, 1),
	(131, 1),
	(132, 1),
	(133, 1),
	(134, 1),
	(135, 1),
	(136, 1),
	(137, 1),
	(138, 1),
	(139, 1),
	(140, 1),
	(141, 1),
	(142, 1),
	(143, 1),
	(144, 1),
	(145, 1),
	(146, 1),
	(147, 1),
	(148, 1),
	(149, 1),
	(150, 1),
	(151, 1),
	(152, 1),
	(153, 1),
	(154, 1),
	(155, 1),
	(156, 1),
	(157, 1),
	(158, 1),
	(159, 1),
	(160, 1),
	(161, 1),
	(162, 1),
	(163, 1),
	(164, 1),
	(165, 1),
	(166, 1),
	(167, 1),
	(168, 1),
	(169, 1),
	(170, 1),
	(171, 1),
	(172, 1),
	(173, 1),
	(174, 1),
	(175, 1),
	(176, 1),
	(177, 1),
	(178, 1),
	(179, 1),
	(180, 1),
	(181, 1),
	(182, 1),
	(183, 1),
	(184, 1),
	(185, 1);

-- Volcando estructura para tabla devioz.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb3_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb3_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb3_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- Volcando datos para la tabla devioz.users: ~0 rows (aproximadamente)
DELETE FROM `users`;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'admin', 'admin@admin.com', NULL, '$2y$10$KnEZwKPPZP1XGttIIxrPsuPZjrnf7VWnritTp/GffjnMG7OHVDFTG', NULL, '2023-05-20 05:09:54', '2023-05-20 05:09:54');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
