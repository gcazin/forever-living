-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Dim 16 Février 2020 à 21:39
-- Version du serveur :  5.7.29-0ubuntu0.18.04.1
-- Version de PHP :  7.2.26-1+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `assurance`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `status` enum('PUBLISHED','DRAFT','PENDING') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'DRAFT',
  `featured` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `articles`
--

INSERT INTO `articles` (`id`, `title`, `description`, `image`, `slug`, `user_id`, `category_id`, `meta_description`, `meta_keywords`, `status`, `featured`, `created_at`, `updated_at`) VALUES
(4, 'La Directive sur la Distribution d’Assurances', 'Qu’est-ce que c’est ?\r\n\r\nLa Directive sur la Distribution d’Assurances (DDA) harmonise les conditions de commercialisation des produits d’assurance dans toute l’Europe, entend protéger les consommateurs contre d’éventuels abus et favorise la création d’un marché véritablement concurrentiel qui permettrait de dynamiser l’ensemble du secteur. Elle est applicable à tous les professionnels qui vendent, distribuent, conçoivent, assurent, réassurent des produits d’assurance. Ces nouvelles règles ont pour objet de renforcer la protection de la clientèle, partant du principe que les distributeurs doivent agir de manière honnête, impartiale et professionnelle, et ce au mieux des intérêts de leurs clients et elles viennent rehausser l’obligation de conseil.', 'https://images.unsplash.com/photo-1499083097717-a156f85f0516?ixlib=rb-1.2.1&q=85&fm=jpg&crop=entropy&cs=srgb&h=1500&w=2000&fit=clip&fm=jpg', 'la-directive-sur-la-distribution-dassurances', 1, 1, NULL, NULL, 'DRAFT', 0, '2019-10-01 10:53:11', '2019-10-13 15:45:42'),
(5, 'Bien choisir son assurance habitation', 'Peut-on négocier le prix de la cotisation d\'assurance ?\r\n\r\nOui, mais dans toutes les structures. Il est possible de négocier des prix avec les intermédiaires de l\'assurance qui sont les courtiers et les agents généraux qui ont un budget commercial qui leur permet de pouvoir réduire la cotisation.\r\nPourquoi les primes d\'assurance augmentent ?\r\nLes primes augmentent à cause aux nombreuses catastrophes naturelles qui détruise énormément de choses qui a mis un coût au taux de sinistralité des assureurs. Pour palier cela les assureurs augmentent les primes d\'assurance pour garder un équilibre.\r\n\r\nComment choisir les bonnes garanties ?\r\n\r\nDans un premier temps, il faut comparer les offres présentées par plusieurs assureurs pour comparer les différentes garanties proposées et ainsi pourvoir les associer à vos réels besoins. Vous possédez dans certains cas des doublons d\'assurance comme par exemple, l\'assurance pour téléphone. L plupart des personnes souscrivent une assurance spéciale téléphone alors que dans certains contrats habitation, le téléphone peuvent être pris en charge.', 'https://images.unsplash.com/photo-1556912172-45b7abe8b7e1?ixlib=rb-1.2.1&q=85&fm=jpg&crop=entropy&cs=srgb&h=1500&w=2000&fit=clip&fm=jpg', 'bien-choisir-son-assurance-habitation', 1, 1, NULL, NULL, 'DRAFT', 0, '2019-10-01 10:57:34', '2019-10-13 15:46:48'),
(6, 'Que faire en cas de litige avec son assureur ?', 'Vous pouvez être en désaccord avec votre assureur pour de nombreuse choses comme pour un règlement d\'un sinistre, à la proposition d\'indemnisation, ou le refus de l’assureur de couvrir le sinistre.\r\n\r\nToutes les compagnies ont mis en place des services consommateurs dédiés au traitement des litiges avec leurs clients. Ce type de service permettent de pouvoir régler des conflits plus rapidement que par les tribunaux.', 'https://images.unsplash.com/photo-1552912276-dde406237918?ixlib=rb-1.2.1&q=85&fm=jpg&crop=entropy&cs=srgb&h=1500&w=2000&fit=clip&fm=jpg', 'que-faire-en-cas-de-litige-avec-son-assureur', 1, 1, NULL, NULL, 'DRAFT', 0, '2019-10-01 11:27:04', '2019-10-13 15:47:47'),
(11, 'Comment sont indemnisées les victimes d’accidents de la circulation provoqués par des personnes non assurées ou non identifiées (en délit de fuite)', 'Quel est l’organisme permet une pris en charge ?\r\n\r\nLe FGAO ( Fonds de garantie des assurances obligatoires) a été créé en 1951 pour indemniser les victimes d’accidents de la circulation provoqués par des personnes non assurées, non identifiées ou quand son assureur est insolvable. Dans les autres cas, ce sont les compagnies d\'assurances qui prennent en charge l\'indemnisation. Le FGAO va de pair avec Fonds de Garantie des victimes des actes de Terrorisme et d’autres Infractions (FGTI).\r\n\r\nLe FGAO utilise une réserve spéciale issue de ces cotisations, aujourd\'hui estimée à 200 M€. Le FGAO est aussi chargé de financer, en lieu et place d’une entreprise d’assurance mise en liquidation judiciaire ou qui perdrait son agrément, l’indemnisation des assurés en responsabilité civile automobile et en Dommages-Ouvrage.\r\n\r\nL’organisme est chargé de rembourser aux assureurs les majorations légales des rentes servies aux victimes d’accidents de la circulation.\r\n\r\nEnfin, le FGAO finance des actions de prévention de la non-assurance automobile.', 'https://images.unsplash.com/photo-1566113315431-5ccf4ec0fd9b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80', 'comment-sont-indemnisees-les-victimes-daccidents-de-la-circulation-provoques-par-des-personnes-non-assurees-ou-non-identifiees-en-delit-de-fuite', 1, 1, NULL, NULL, 'DRAFT', 0, '2019-10-07 11:12:10', '2019-10-13 15:58:29');

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `categories`
--

INSERT INTO `categories` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Retraite', 'Tout sur la retraite', '2019-10-01 10:13:26', '2019-10-01 10:13:26'),
(2, 'Impôts', 'Tout sur l\'impôt', '2019-10-01 11:56:14', '2019-10-01 11:56:14');

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `commenter_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commenter_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guest_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guest_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commentable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `commentable_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `approved` tinyint(1) NOT NULL DEFAULT '1',
  `child_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `comments`
--

INSERT INTO `comments` (`id`, `commenter_id`, `commenter_type`, `guest_name`, `guest_email`, `commentable_type`, `commentable_id`, `comment`, `approved`, `child_id`, `created_at`, `updated_at`) VALUES
(6, '6', 'App\\User', NULL, NULL, 'App\\Article', '4', 'kpodsfkpods', 1, NULL, '2019-10-26 12:40:11', '2019-10-26 12:40:11'),
(8, '8', 'App\\User', NULL, NULL, 'App\\Article', '4', 'salut', 1, NULL, '2019-11-04 09:05:05', '2019-11-04 09:05:05');

-- --------------------------------------------------------

--
-- Structure de la table `conversations`
--

CREATE TABLE `conversations` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_one` int(11) NOT NULL,
  `user_two` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `conversations`
--

INSERT INTO `conversations` (`id`, `user_one`, `user_two`, `status`, `created_at`, `updated_at`) VALUES
(10, 6, 7, 1, '2019-10-28 18:10:43', '2019-10-28 18:10:43'),
(11, 4, 5, 1, '2020-02-16 17:09:50', '2020-02-16 17:09:50');

-- --------------------------------------------------------

--
-- Structure de la table `followables`
--

CREATE TABLE `followables` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `followable_id` int(10) UNSIGNED NOT NULL,
  `followable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `relation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'follow' COMMENT 'follow/like/subscribe/favorite/upvote/downvote',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `followables`
--

INSERT INTO `followables` (`user_id`, `followable_id`, `followable_type`, `relation`, `deleted_at`, `created_at`, `updated_at`) VALUES
(3, 1, 'App\\User', 'like', NULL, '2020-02-16 16:13:08', NULL),
(3, 2, 'App\\User', 'like', NULL, '2020-02-16 16:13:34', NULL),
(5, 3, 'App\\User', 'like', NULL, '2020-02-16 17:17:10', NULL),
(5, 4, 'App\\User', 'like', NULL, '2020-02-16 17:56:25', NULL),
(5, 6, 'App\\User', 'like', NULL, '2020-02-16 18:07:33', NULL),
(5, 1, 'App\\User', 'like', NULL, '2020-02-16 18:17:24', NULL),
(5, 2, 'App\\Post', 'like', NULL, '2020-02-16 18:18:57', NULL),
(5, 3, 'App\\Post', 'like', NULL, '2020-02-16 18:24:14', NULL),
(5, 1, 'App\\Post', 'like', NULL, '2020-02-16 18:24:55', NULL),
(5, 4, 'App\\Post', 'like', NULL, '2020-02-16 19:36:04', NULL),
(5, 5, 'App\\Post', 'like', NULL, '2020-02-16 19:36:10', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `formations`
--

CREATE TABLE `formations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `entry_price` double DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `formations`
--

INSERT INTO `formations` (`id`, `title`, `description`, `location`, `entry_price`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Formation React-Native', 'fdiufsuih', 'fijodsfso', 1000, 3, '2020-02-16 14:25:37', '2020-02-16 14:25:37');

-- --------------------------------------------------------

--
-- Structure de la table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `hours` int(11) DEFAULT NULL,
  `salary` double DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `type_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `jobs_type`
--

CREATE TABLE `jobs_type` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE `messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_seen` tinyint(1) NOT NULL DEFAULT '0',
  `deleted_from_sender` tinyint(1) NOT NULL DEFAULT '0',
  `deleted_from_receiver` tinyint(1) NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL,
  `conversation_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `messages`
--

INSERT INTO `messages` (`id`, `message`, `is_seen`, `deleted_from_sender`, `deleted_from_receiver`, `user_id`, `conversation_id`, `created_at`, `updated_at`) VALUES
(149, 'cxwcxcwx', 1, 0, 0, 6, 10, '2019-10-28 18:10:43', '2019-10-28 18:11:11'),
(150, 'Salut', 0, 0, 0, 5, 11, '2020-02-16 17:09:50', '2020-02-16 17:09:50');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(31, '2014_01_07_073615_create_tagged_table', 1),
(32, '2014_01_07_073615_create_tags_table', 1),
(33, '2014_02_15_204651_create_categories_table', 1),
(34, '2014_10_12_000000_create_users_table', 1),
(35, '2014_10_12_100000_create_password_resets_table', 1),
(36, '2014_11_29_131910_create_ratings_table', 1),
(37, '2015_01_01_000000_create_articles_table', 1),
(38, '2016_01_01_000000_add_voyager_user_fields', 1),
(39, '2016_01_01_000000_create_data_types_table', 1),
(40, '2016_01_01_000000_create_pages_table', 1),
(41, '2016_05_19_173453_create_menu_table', 1),
(42, '2016_06_29_073615_create_tag_groups_table', 1),
(43, '2016_06_29_073615_update_tags_table', 1),
(44, '2016_10_21_190000_create_roles_table', 1),
(45, '2016_10_21_190000_create_settings_table', 1),
(46, '2016_11_30_135954_create_permission_table', 1),
(47, '2016_11_30_141208_create_permission_role_table', 1),
(48, '2016_12_26_201236_data_types__add__server_side', 1),
(49, '2017_01_13_000000_add_route_to_menu_items_table', 1),
(50, '2017_01_14_005015_create_translations_table', 1),
(51, '2017_01_15_000000_make_table_name_nullable_in_permissions_table', 1),
(52, '2017_03_06_000000_add_controller_to_data_types_table', 1),
(53, '2017_04_21_000000_add_order_to_data_rows_table', 1),
(54, '2017_07_05_210000_add_policyname_to_data_types_table', 1),
(55, '2017_08_05_000000_add_group_to_settings_table', 1),
(56, '2017_11_26_013050_add_user_role_relationship', 1),
(57, '2017_11_26_015000_create_user_roles_table', 1),
(58, '2018_03_11_000000_add_user_settings', 1),
(59, '2018_03_14_000000_add_details_to_data_types_table', 1),
(60, '2018_03_16_000000_make_settings_value_nullable', 1),
(61, '2018_06_30_113500_create_comments_table', 1),
(62, '2019_09_12_094723_alter_category_name_to_title', 1),
(63, '2015_10_05_110608_create_messages_table', 2),
(64, '2015_10_05_110622_create_conversations_table', 3),
(65, '2019_10_05_205844_create_skills_table', 4),
(66, '2019_10_06_121727_create_skills_table', 5),
(67, '2019_11_05_123030_create_skills_pivot_table', 6),
(68, '2019_11_06_184713_alter_table_user', 7),
(69, '2019_11_06_190709_alter_table_user_agent_agence', 8),
(70, '2019_11_06_204542_alter_table_user_departement', 9),
(71, '2019_11_06_204938_alter_table_user_departement', 10),
(72, '2020_02_15_140122_create_jobs_type_table', 11),
(73, '2020_02_16_114541_create_jobs_table', 12),
(74, '2020_02_16_135938_create_formations_table', 13),
(75, '2018_06_29_032244_create_laravel_follow_tables', 14),
(76, '2020_02_16_162241_create_posts_table', 15),
(77, '2020_02_16_163739_create_reply_posts_table', 16);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `posts`
--

INSERT INTO `posts` (`id`, `content`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Salut', 3, '2020-02-16 15:50:14', '2020-02-16 15:50:14'),
(2, 'Je test le feed', 3, '2020-02-16 15:54:01', '2020-02-16 15:54:01'),
(3, 'salut', 5, '2020-02-16 17:17:07', '2020-02-16 17:17:07'),
(4, 'salut', 5, '2020-02-16 17:56:16', '2020-02-16 17:56:16'),
(5, 'test like', 5, '2020-02-16 17:59:00', '2020-02-16 17:59:00'),
(6, 'test dsd', 5, '2020-02-16 18:07:30', '2020-02-16 18:07:30'),
(7, 'salut', 5, '2020-02-16 19:35:59', '2020-02-16 19:35:59');

-- --------------------------------------------------------

--
-- Structure de la table `reply_posts`
--

CREATE TABLE `reply_posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Administrateur', NULL, NULL),
(2, 'salaried', 'Salarié', NULL, NULL),
(3, 'enterprise', 'Entreprise', NULL, NULL),
(4, 'school', 'Ecole', NULL, NULL),
(5, 'student', 'Etudiant', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `skills`
--

CREATE TABLE `skills` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `skills`
--

INSERT INTO `skills` (`id`, `name`, `description`) VALUES
(1, 'Prévoyance', NULL),
(2, 'Santé', NULL),
(3, 'Retraite', NULL),
(4, 'Épargne', NULL),
(5, 'Informations financières', NULL),
(6, 'Automobile', NULL),
(7, 'Habitation', NULL),
(8, 'Protection juridique', NULL),
(9, 'Épargne salariale', NULL),
(10, 'Multirisque dommage', NULL),
(11, 'Assurance de bien et responsabilité', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `skills_pivot`
--

CREATE TABLE `skills_pivot` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `skill_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `tagging_tagged`
--

CREATE TABLE `tagging_tagged` (
  `id` int(10) UNSIGNED NOT NULL,
  `taggable_id` int(10) UNSIGNED NOT NULL,
  `taggable_type` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag_name` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag_slug` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `tagging_tagged`
--

INSERT INTO `tagging_tagged` (`id`, `taggable_id`, `taggable_type`, `tag_name`, `tag_slug`) VALUES
(71, 4, 'App\\Article', 'Directive', 'directive'),
(72, 4, 'App\\Article', 'Assurance', 'assurance'),
(73, 4, 'App\\Article', 'Distribution', 'distribution'),
(74, 5, 'App\\Article', 'Assurance', 'assurance'),
(75, 5, 'App\\Article', 'Habitation', 'habitation'),
(76, 6, 'App\\Article', 'Assureur', 'assureur'),
(77, 6, 'App\\Article', 'Litige', 'litige'),
(81, 11, 'App\\Article', 'Accident', 'accident'),
(82, 11, 'App\\Article', 'Circulation', 'circulation'),
(83, 11, 'App\\Article', 'Personnes', 'personnes'),
(84, 11, 'App\\User', 'Accident', 'accident'),
(85, 11, 'App\\User', 'Assurance', 'assurance'),
(86, 11, 'App\\User', 'Assureur', 'assureur');

-- --------------------------------------------------------

--
-- Structure de la table `tagging_tags`
--

CREATE TABLE `tagging_tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `suggest` tinyint(1) NOT NULL DEFAULT '0',
  `count` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `tag_group_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `tagging_tags`
--

INSERT INTO `tagging_tags` (`id`, `slug`, `name`, `suggest`, `count`, `tag_group_id`) VALUES
(1, 'test', 'Test', 0, 0, NULL),
(2, 'impot', 'Impot', 0, 0, NULL),
(3, 'retraite', 'Retraite', 0, 0, NULL),
(4, 'assurance', 'Assurance', 0, 3, NULL),
(5, 'emploi', 'Emploi', 0, 0, NULL),
(6, 'metier', 'Metier', 0, 0, NULL),
(7, 'btp', 'Btp', 0, 0, NULL),
(8, 'astuce', 'Astuce', 0, 0, NULL),
(9, 'salut', 'Salut', 0, 0, NULL),
(10, 'impots', 'Impots', 0, 0, NULL),
(11, 'toy-story', 'Toy Story', 0, 0, NULL),
(12, 'automobile', 'Automobile', 0, 0, NULL),
(13, 'renault', 'Renault', 0, 0, NULL),
(14, 'numerique', 'Numerique', 0, 0, NULL),
(15, 'association', 'Association', 0, 0, NULL),
(16, 'visa', 'Visa', 0, 0, NULL),
(17, 'mastercard', 'Mastercard', 0, 0, NULL),
(18, 'ebay', 'Ebay', 0, 0, NULL),
(19, 'crypto-monnaie', 'Crypto-Monnaie', 0, 0, NULL),
(20, 'blockchain', 'Blockchain', 0, 0, NULL),
(21, 'technologie', 'Technologie', 0, 0, NULL),
(22, 'sante', 'Sante', 0, 0, NULL),
(23, 'specialiste', 'Specialiste', 0, 0, NULL),
(24, 'ito', 'Ito', 0, 0, NULL),
(25, 'neo-assurance', 'Neo-Assurance', 0, 0, NULL),
(26, 'tracabilite', 'Tracabilite', 0, 0, NULL),
(27, 'maritime', 'Maritime', 0, 0, NULL),
(28, 'directive', 'Directive', 0, 1, NULL),
(29, 'distribution', 'Distribution', 0, 1, NULL),
(30, 'habitation', 'Habitation', 0, 1, NULL),
(31, 'assureur', 'Assureur', 0, 2, NULL),
(32, 'litige', 'Litige', 0, 1, NULL),
(33, 'accident', 'Accident', 0, 2, NULL),
(34, 'circulation', 'Circulation', 0, 1, NULL),
(35, 'personnes', 'Personnes', 0, 1, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `tagging_tag_groups`
--

CREATE TABLE `tagging_tag_groups` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `translations`
--

CREATE TABLE `translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_key` int(10) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adresse` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `departement` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `email_verified_at`, `password`, `avatar`, `remember_token`, `settings`, `created_at`, `updated_at`, `tel`, `adresse`, `departement`) VALUES
(1, 1, 'Admin', 'admin@admin.fr', NULL, '$2y$10$2fcNR4KYWEgNW68o0MiGteFRFnG83y09AtMHJ/oz/2tNKWlAdH3mm', '1_avatar1572885270.png', '91vR55d9eyvsfLTxWWZgrHx57tY5J5uRwLAsdM6SfrpsUaRGkbuw7kiLAeZn', NULL, '2019-10-01 10:10:34', '2019-11-04 15:34:31', NULL, NULL, 59),
(2, 2, 'Salarié', 'salarie@salarie.fr', NULL, '$2y$10$ULZbU/5nAzKxB6/E/ngsKOkDma35LtmMrIL1z1lo8rXq6wJEaqjQq', NULL, NULL, NULL, '2019-10-08 11:18:13', '2019-10-08 11:22:09', NULL, NULL, 0),
(3, 4, 'Ecole', 'ecole@ecole.fr', NULL, '$2y$10$a0/Qf82nV9PA4CESZDuerO2/MZvY0M7h37wnaAFYSqia4oiXINGYi', NULL, NULL, NULL, '2020-02-16 13:15:27', '2020-02-16 13:15:27', NULL, NULL, 62),
(4, 3, 'Entreprise', 'entreprise@entreprise.fr', NULL, '$2y$10$1vZfE9rauQXOLiqOGUWg8eF4FfPtWm7bJdH9fBFgXAeSQYW7us9wC', NULL, NULL, NULL, '2020-02-16 13:46:31', '2020-02-16 13:46:31', '0321319338', '112 rue du', 62),
(5, 5, 'Etudiant', 'etudiant@etudiant.fr', NULL, '$2y$10$UksRwbINCh7iLwJ9MFW9oegX3wiiAyz7TfNkfmATd9LX6vOfW76lO', NULL, NULL, NULL, '2020-02-16 13:47:46', '2020-02-16 13:47:46', NULL, NULL, 0);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `articles_slug_unique` (`slug`),
  ADD KEY `articles_user_id_foreign` (`user_id`),
  ADD KEY `articles_category_id_foreign` (`category_id`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_commenter_id_commenter_type_index` (`commenter_id`,`commenter_type`),
  ADD KEY `comments_commentable_type_commentable_id_index` (`commentable_type`,`commentable_id`),
  ADD KEY `comments_child_id_foreign` (`child_id`);

--
-- Index pour la table `conversations`
--
ALTER TABLE `conversations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `followables`
--
ALTER TABLE `followables`
  ADD KEY `followables_user_id_foreign` (`user_id`),
  ADD KEY `followables_followable_type_index` (`followable_type`);

--
-- Index pour la table `formations`
--
ALTER TABLE `formations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `formations_user_id_foreign` (`user_id`);

--
-- Index pour la table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_user_id_foreign` (`user_id`),
  ADD KEY `jobs_type_id_foreign` (`type_id`);

--
-- Index pour la table `jobs_type`
--
ALTER TABLE `jobs_type`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `menus_name_unique` (`name`);

--
-- Index pour la table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permissions_key_index` (`key`);

--
-- Index pour la table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_user_id_foreign` (`user_id`);

--
-- Index pour la table `reply_posts`
--
ALTER TABLE `reply_posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reply_posts_post_id_foreign` (`post_id`),
  ADD KEY `reply_posts_user_id_foreign` (`user_id`);

--
-- Index pour la table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Index pour la table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `skills_pivot`
--
ALTER TABLE `skills_pivot`
  ADD PRIMARY KEY (`id`),
  ADD KEY `skills_pivot_skill_id_foreign` (`skill_id`),
  ADD KEY `skills_pivot_user_id_foreign` (`user_id`);

--
-- Index pour la table `tagging_tagged`
--
ALTER TABLE `tagging_tagged`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tagging_tagged_taggable_id_index` (`taggable_id`),
  ADD KEY `tagging_tagged_taggable_type_index` (`taggable_type`),
  ADD KEY `tagging_tagged_tag_slug_index` (`tag_slug`);

--
-- Index pour la table `tagging_tags`
--
ALTER TABLE `tagging_tags`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tagging_tags_slug_index` (`slug`),
  ADD KEY `tagging_tags_tag_group_id_foreign` (`tag_group_id`);

--
-- Index pour la table `tagging_tag_groups`
--
ALTER TABLE `tagging_tag_groups`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tagging_tag_groups_slug_index` (`slug`);

--
-- Index pour la table `translations`
--
ALTER TABLE `translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `conversations`
--
ALTER TABLE `conversations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT pour la table `formations`
--
ALTER TABLE `formations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `jobs_type`
--
ALTER TABLE `jobs_type`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;
--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
--
-- AUTO_INCREMENT pour la table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `reply_posts`
--
ALTER TABLE `reply_posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT pour la table `skills_pivot`
--
ALTER TABLE `skills_pivot`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `tagging_tagged`
--
ALTER TABLE `tagging_tagged`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;
--
-- AUTO_INCREMENT pour la table `tagging_tags`
--
ALTER TABLE `tagging_tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT pour la table `tagging_tag_groups`
--
ALTER TABLE `tagging_tag_groups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `translations`
--
ALTER TABLE `translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `articles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_child_id_foreign` FOREIGN KEY (`child_id`) REFERENCES `comments` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `followables`
--
ALTER TABLE `followables`
  ADD CONSTRAINT `followables_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `formations`
--
ALTER TABLE `formations`
  ADD CONSTRAINT `formations_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `jobs`
--
ALTER TABLE `jobs`
  ADD CONSTRAINT `jobs_type_id_foreign` FOREIGN KEY (`type_id`) REFERENCES `jobs_type` (`id`),
  ADD CONSTRAINT `jobs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `reply_posts`
--
ALTER TABLE `reply_posts`
  ADD CONSTRAINT `reply_posts_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`),
  ADD CONSTRAINT `reply_posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `skills_pivot`
--
ALTER TABLE `skills_pivot`
  ADD CONSTRAINT `skills_pivot_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `tagging_tags`
--
ALTER TABLE `tagging_tags`
  ADD CONSTRAINT `tagging_tags_tag_group_id_foreign` FOREIGN KEY (`tag_group_id`) REFERENCES `tagging_tag_groups` (`id`);

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
