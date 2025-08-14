-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : jeu. 14 août 2025 à 21:17
-- Version du serveur : 10.11.11-MariaDB-deb12
-- Version de PHP : 8.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `acdco2615177`
--

-- --------------------------------------------------------

--
-- Structure de la table `candidatures`
--

CREATE TABLE `candidatures` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom_entreprise` varchar(255) NOT NULL,
  `statut_juridique` varchar(255) NOT NULL,
  `numero_rccm` varchar(255) NOT NULL,
  `pays_ville_siege` varchar(255) NOT NULL,
  `nom_responsable` varchar(255) NOT NULL,
  `fonction_responsable` varchar(255) NOT NULL,
  `email_responsable` varchar(255) NOT NULL,
  `telephone_responsable` varchar(255) NOT NULL,
  `produits_services` text NOT NULL,
  `chiffre_affaires` text NOT NULL,
  `logo_hd` varchar(255) NOT NULL,
  `piece_identite` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `candidatures`
--

INSERT INTO `candidatures` (`id`, `nom_entreprise`, `statut_juridique`, `numero_rccm`, `pays_ville_siege`, `nom_responsable`, `fonction_responsable`, `email_responsable`, `telephone_responsable`, `produits_services`, `chiffre_affaires`, `logo_hd`, `piece_identite`, `created_at`, `updated_at`) VALUES
(1, 'Ecole Virtuelle des Créatifs (EVC)', 'SARL', 'CI-ABJ-03-2024-B12-00430', 'Abidjan', 'Bilé Bossombra', 'CEO', 'infos.evc2022@gmail.com', '0747259507', 'Bienvenue à l’École Virtuelle des Créatifs (EVC), une institution innovante dédiée à la formation professionnelle et pratique dans le domaine du digital et de l\'informatique. Fondée sous la forme d\'une SARL, EVC a pour mission de former les professionnels de demain en infographie, marketing digital, community management, et en informatique de gestion. Nous offrons des formations flexibles, en ligne et en présentiel, conçues pour répondre aux besoins réels des entreprises dans un monde numérique en constante évolution.', '2000.000', 'candidatures/logos/CyU2Gqp25krrzwxJVIrbOaRPsCxPuGpTjab3X4kz.png', 'candidatures/identites/zKjnUitM41EUuclwq22LOL9ZLBlx7sSL8gdeRqpG.png', '2025-06-24 17:24:01', '2025-06-24 17:24:01'),
(2, 'ACD CORPORATE SERVICES', 'sas', 'ABJ876655430-90', 'abidjan', 'AUGUSTE CESAR DEZA', 'dg', 'dezditdez@gmail.com', '0777550330', 'networking', '1', 'candidatures/logos/gJubawlUpn7K8uRt8MLad417IO2RMjzh4rvuVFCF.png', 'candidatures/identites/zosmwLU49vqNiM5DpI8B2mpEJEMUcDNWOT6E2uBy.jpg', '2025-06-24 21:41:45', '2025-06-24 21:41:45'),
(3, 'test', 'test', 'TEST', 'tets', 'test', 'test', 'test@gmail.com', '097999', 'tets', '90', 'candidatures/logos/DMCdxCDD1Tgg0hLAOMgGylAK66JyVvHIrOXzmkDW.jpg', 'candidatures/identites/xjIPgHuWInF8Mc0l6h2wnb1ScAhlMcmoaAD6elTZ.pdf', '2025-08-14 06:46:54', '2025-08-14 06:46:54');

-- --------------------------------------------------------

--
-- Structure de la table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL DEFAULT '',
  `email` varchar(255) NOT NULL,
  `objet` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `evenement_en_cours`
--

CREATE TABLE `evenement_en_cours` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `slug` varchar(250) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `evenement_en_cours`
--

INSERT INTO `evenement_en_cours` (`id`, `title`, `content`, `slug`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Diner des chefs d\'entreprise', '<ul>\r\n<li>\r\n<h3><strong>CONTEXTE</strong></h3>\r\n</li>\r\n</ul>\r\n<p class=\"p2\" style=\"margin: 0px; text-align: justify; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 11.5px; line-height: normal; font-family: Montserrat; color: #221e1f;\">Chers Chefs d&rsquo;Entreprise,<span class=\"Apple-converted-space\">&nbsp;</span></p>\r\n<p class=\"p2\" style=\"margin: 0px; text-align: justify; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 11.5px; line-height: normal; font-family: Montserrat; color: #221e1f;\">Nous sommes ravis de vous inviter &agrave; un &eacute;v&eacute;nement exclusif qui promet d&rsquo;&ecirc;tre bien plus qu&rsquo;un simple d&icirc;ner. Le &laquo;<strong>D&icirc;ner des Chefs d&rsquo;Entreprise</strong>&raquo; a &eacute;t&eacute; soigneusement con&ccedil;u pour r&eacute;pondre &agrave; vos besoins professionnels et personnels, offrant une exp&eacute;rience unique qui combine gastronomie exceptionnelle, r&eacute;seautage strat&eacute;gique et opportunit&eacute;s de collaboration.<span class=\"Apple-converted-space\">&nbsp;</span></p>\r\n<p class=\"p2\" style=\"margin: 0px; text-align: justify; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 11.5px; line-height: normal; font-family: Montserrat; color: #221e1f;\">&nbsp;</p>\r\n<h3 class=\"p2\" style=\"margin: 0px; text-align: justify; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 11.5px; line-height: normal; font-family: Montserrat; color: #221e1f;\"><strong style=\"color: #000000; font-family: -apple-system, \'system-ui\', \'Segoe UI\', Roboto, Oxygen, Ubuntu, Cantarell, \'Open Sans\', \'Helvetica Neue\', sans-serif; font-size: medium; text-align: start;\">POURQUOI PARTICIPER &Agrave; CE DINER EXCEPTIONNEL ? </strong></h3>\r\n<h3 class=\"p2\" style=\"margin: 0px; text-align: justify; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 11.5px; line-height: normal; font-family: Montserrat; color: #221e1f;\">&nbsp;</h3>\r\n<h3 class=\"p2\" style=\"margin: 0px; text-align: justify; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 11.5px; line-height: normal; font-family: Montserrat; color: #221e1f;\">- Connexion avec d&rsquo;autres chefs d&rsquo;entreprise<span class=\"Apple-converted-space\">&nbsp;</span></h3>\r\n<p class=\"p2\" style=\"margin: 0px; text-align: justify; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 11.5px; line-height: normal; font-family: Montserrat; color: #221e1f;\">Rencontrez et &eacute;changez avec d&rsquo;autres chefs d&rsquo;entreprise prosp&egrave;res issus de divers secteurs. Profitez de cette occasion privil&eacute;gi&eacute;e pour &eacute;largir votre cercle professionnel et &eacute;tablir des liens pr&eacute;cieux.<span class=\"Apple-converted-space\">&nbsp;</span></p>\r\n<p class=\"p2\" style=\"margin: 0px; text-align: justify; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 11.5px; line-height: normal; font-family: Montserrat; color: #221e1f;\">&nbsp;</p>\r\n<p class=\"p2\" style=\"margin: 0px; text-align: justify; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 11.5px; line-height: normal; font-family: Montserrat; color: #221e1f;\"><strong>- Opportunit&eacute;s de collaboration<span class=\"Apple-converted-space\">&nbsp;</span></strong></p>\r\n<p class=\"p2\" style=\"margin: 0px; text-align: justify; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 11.5px; line-height: normal; font-family: Montserrat; color: #221e1f;\">Le d&icirc;ner offre un cadre propice aux discussions informelles, favorisant ainsi les opportunit&eacute;s de collaboration et de partenariat. D&eacute;couvrez des synergies potentielles avec des leaders visionnaires partageant les m&ecirc;mes valeurs que vous.</p>\r\n<p class=\"p2\" style=\"margin: 0px; text-align: justify; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 11.5px; line-height: normal; font-family: Montserrat; color: #221e1f;\">&nbsp;</p>\r\n<p class=\"p2\" style=\"margin: 0px; text-align: justify; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 11.5px; line-height: normal; font-family: Montserrat; color: #221e1f;\"><strong>- Inspirations et id&eacute;es novatrices<span class=\"Apple-converted-space\">&nbsp;</span></strong></p>\r\n<p class=\"p2\" style=\"margin: 0px; text-align: justify; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 11.5px; line-height: normal; font-family: Montserrat; color: #221e1f;\">Partagez vos exp&eacute;riences et d&eacute;couvrez les meilleures pratiques d&rsquo;autres chefs d&rsquo;entreprise. Stimulez votre cr&eacute;ativit&eacute; en explorant de nouvelles id&eacute;es et en b&eacute;n&eacute;ficiant de perspectives uniques sur les d&eacute;fis et les opportunit&eacute;s du monde des affaires.<span class=\"Apple-converted-space\">&nbsp;</span></p>\r\n<p class=\"p2\" style=\"margin: 0px; text-align: justify; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 11.5px; line-height: normal; font-family: Montserrat; color: #221e1f;\">&nbsp;</p>\r\n<p class=\"p2\" style=\"margin: 0px; text-align: justify; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 11.5px; line-height: normal; font-family: Montserrat; color: #221e1f;\"><strong>- Acc&egrave;s &agrave; un r&eacute;seau exclusif<span class=\"Apple-converted-space\">&nbsp;</span></strong></p>\r\n<p class=\"p2\" style=\"margin: 0px; text-align: justify; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 11.5px; line-height: normal; font-family: Montserrat; color: #221e1f;\">Profitez de l&rsquo;opportunit&eacute; de faire partie d&rsquo;un r&eacute;seau s&eacute;lectif de chefs d&rsquo;entreprise influents. Les relations forg&eacute;es lors de cet &eacute;v&eacute;nement peuvent ouvrir des portes vers de nouvelles collaborations, partenariats et opportunit&eacute;s d&rsquo;affaires.<span class=\"Apple-converted-space\">&nbsp;</span></p>\r\n<p class=\"p2\" style=\"margin: 0px; text-align: justify; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 11.5px; line-height: normal; font-family: Montserrat; color: #221e1f;\">&nbsp;</p>\r\n<p class=\"p2\" style=\"margin: 0px; text-align: justify; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 11.5px; line-height: normal; font-family: Montserrat; color: #221e1f;\"><strong>- Ambiance raffin&eacute;e et gastronomie exceptionnelle<span class=\"Apple-converted-space\">&nbsp;</span></strong></p>\r\n<p class=\"p2\" style=\"margin: 0px; text-align: justify; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 11.5px; line-height: normal; font-family: Montserrat; color: #221e1f;\">Plongez dans une atmosph&egrave;re &eacute;l&eacute;gante et d&eacute;gustez une exp&eacute;rience gastronomique exceptionnelle. Laissez-vous choyer par une soir&eacute;e o&ugrave; chaque d&eacute;tail est pens&eacute; pour offrir une exp&eacute;rience m&eacute;morable.</p>\r\n<p class=\"p2\" style=\"margin: 0px; text-align: justify; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 11.5px; line-height: normal; font-family: Montserrat; color: #221e1f;\">&nbsp;</p>\r\n<h3 class=\"p2\" style=\"margin: 0px; text-align: justify; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 11.5px; line-height: normal; font-family: Montserrat; color: #221e1f;\"><strong style=\"color: #000000; font-family: -apple-system, \'system-ui\', \'Segoe UI\', Roboto, Oxygen, Ubuntu, Cantarell, \'Open Sans\', \'Helvetica Neue\', sans-serif; font-size: medium; text-align: start;\">CONFIRMATION&nbsp;</strong></h3>\r\n<p class=\"p2\" style=\"margin: 0px; text-align: justify; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 11.5px; line-height: normal; font-family: Montserrat; color: #221e1f;\"><span style=\"color: #000000; font-family: -apple-system, \'system-ui\', \'Segoe UI\', Roboto, Oxygen, Ubuntu, Cantarell, \'Open Sans\', \'Helvetica Neue\', sans-serif; font-size: medium; text-align: start;\">- Individuelle : 250.000FCFA</span></p>\r\n<p class=\"p2\" style=\"margin: 0px; text-align: justify; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 11.5px; line-height: normal; font-family: Montserrat; color: #221e1f;\"><span style=\"color: #000000; font-family: -apple-system, \'system-ui\', \'Segoe UI\', Roboto, Oxygen, Ubuntu, Cantarell, \'Open Sans\', \'Helvetica Neue\', sans-serif; font-size: medium; text-align: start;\">- Couple : 300.000FCFA</span></p>\r\n<p><strong style=\"color: #000000; font-family: -apple-system, \'system-ui\', \'Segoe UI\', Roboto, Oxygen, Ubuntu, Cantarell, \'Open Sans\', \'Helvetica Neue\', sans-serif; font-size: medium; text-align: start;\">DRESS CODE</strong><br />- Homme : Costume<br />- Dame : Tenue de soir&eacute;e.</p>\r\n<p><strong>LIEU &amp; DATE : </strong>06 Janvier 2024 de 19h30 &agrave; 23h &agrave; Abidjan - H&ocirc;tel Ivotel Plateau.&nbsp;</p>\r\n<p><strong>Contacts</strong> : +225 27 22 21 83 33 / 05 96 79 08 02</p>\r\n<p class=\"p2\" style=\"margin: 0px; text-align: justify; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 11.5px; line-height: normal; font-family: Montserrat; color: #221e1f;\">&nbsp;</p>\r\n<p class=\"p2\" style=\"margin: 0px; text-align: justify; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 11.5px; line-height: normal; font-family: Montserrat; color: #221e1f;\">&nbsp;</p>', 'diner-des-chefs-d-entreprises', 'events_images/Hp9L4RwY58XwfZaoi1Hu5mnLHZLCaA6GtLoveU2L.jpg', '2023-12-19 11:02:41', '2023-12-20 15:34:56'),
(5, 'Forum des Investisseurs', '<p><span id=\"docs-internal-guid-47b27af4-7fff-bb46-664e-7163ddce051c\"><span style=\"font-size: 11pt; font-family: Arial, sans-serif; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\">Le Forum International des Investisseurs est un espace unique qui r&eacute;unit des entreprises africaines de divers secteurs pour explorer de nouvelles opportunit&eacute;s de collaborations fructueuses. C\'est une occasion en or pour &eacute;tablir des partenariats prometteurs et d&eacute;velopper des synergies gagnantes.</span></span></p>\r\n<p><span id=\"docs-internal-guid-039fbfa7-7fff-e5c3-33a5-d9f3580c3382\"></span></p>\r\n<p dir=\"ltr\" style=\"line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;\"><span style=\"font-size: 11pt; font-family: Arial,sans-serif; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;\"><strong>Au-del&agrave; des fronti&egrave;res :</strong> Le forum est une plateforme d\'&eacute;change, de partage et de connexion entre les pays africains et les investisseurs &eacute;trangers. Des panels de discussion et des rencontres strat&eacute;giques permettent d\'aborder les th&eacute;matiques cl&eacute;s qui concernent le d&eacute;veloppement &eacute;conomique et social de l\'Afrique.</span></p>\r\n<p dir=\"ltr\" style=\"line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;\">&nbsp;</p>\r\n<p dir=\"ltr\" style=\"line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;\"><strong><span style=\"font-size: 11pt; font-family: Arial, sans-serif; color: #000000; background-color: transparent; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;\"><span id=\"docs-internal-guid-876945c3-7fff-1dd3-366c-a163d4c4477b\"></span></span></strong></p>\r\n<p dir=\"ltr\" style=\"line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;\"><span style=\"font-size: 11pt; font-family: Arial,sans-serif; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;\"><strong>Investir dans l\'avenir :</strong> Ce rendez-vous incontournable offre une vision globale des opportunit&eacute;s d\'investissement sur le continent africain. Il favorise la mise en relation entre investisseurs, entrepreneurs et d&eacute;cideurs pour des projets porteurs et durables.</span></p>\r\n<p dir=\"ltr\" style=\"line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;\">&nbsp;</p>\r\n<p dir=\"ltr\" style=\"line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;\"><span style=\"font-size: 11pt; font-family: Arial,sans-serif; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;\"><span id=\"docs-internal-guid-1ec721c7-7fff-6a15-c09a-41fe0df284a5\"></span></span></p>\r\n<p dir=\"ltr\" style=\"line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;\"><span style=\"font-size: 11pt; font-family: Arial,sans-serif; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;\"><strong>Des experts de renom : </strong>Des intervenants prestigieux partageront leur expertise et leur vision sur les enjeux &eacute;conomiques actuels et futurs de l\'Afrique. Des opportunit&eacute;s de networking enrichissantes permettront d\'&eacute;tablir des contacts cl&eacute;s et de tisser des liens solides.</span></p>\r\n<p dir=\"ltr\" style=\"line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;\">&nbsp;</p>\r\n<p dir=\"ltr\" style=\"line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;\"><span style=\"font-size: 11pt; font-family: Arial,sans-serif; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;\"><span id=\"docs-internal-guid-0e95636d-7fff-9b68-2159-f2e9bef3ef08\"></span></span></p>\r\n<p dir=\"ltr\" style=\"line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;\"><span style=\"font-size: 11pt; font-family: Arial,sans-serif; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;\">Participez au Forum International des Investisseurs et prenez part &agrave; l\'&eacute;volution &eacute;conomique de l\'Afrique ! Rejoignez-nous pour cette exp&eacute;rience unique et d&eacute;couvrez les opportunit&eacute;s qui fa&ccedil;onneront l\'avenir de votre entreprise. R&eacute;servez d&egrave;s maintenant votre place pour ne pas manquer cet &eacute;v&eacute;nement in&eacute;dit !</span></p>', 'forum-des-investisseurs', 'events_images/Xo22kVjXZ3jBisAQaS7t6pPJgRKuOmdNu4G985SQ.jpg', '2023-12-19 13:35:22', '2023-12-19 13:35:22');

-- --------------------------------------------------------

--
-- Structure de la table `event_a_venirs`
--

CREATE TABLE `event_a_venirs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `slug` varchar(250) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `event_a_venirs`
--

INSERT INTO `event_a_venirs` (`id`, `title`, `content`, `image`, `slug`, `created_at`, `updated_at`) VALUES
(2, 'Prix d\'excellence internationale en Espagne', '<p>Testd</p>', 'events_images/dURM2qvOdbrpehg7ea3FPKFctqfsjpwX8oWzzuY3.jpg', 'prix-d-excellence', '2023-12-19 15:04:15', '2023-12-19 15:09:37');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `formations`
--

CREATE TABLE `formations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) NOT NULL,
  `niveau` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `domaine` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `numero_whatsapp` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `forums`
--

CREATE TABLE `forums` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `fonction` varchar(255) NOT NULL,
  `statut` varchar(255) NOT NULL,
  `numero_whatsapp` varchar(255) NOT NULL,
  `entreprise` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `impact_feminin_candidatures`
--

CREATE TABLE `impact_feminin_candidatures` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `societe` varchar(255) NOT NULL,
  `poste` varchar(255) NOT NULL,
  `prix_choisi` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `impact_feminin_candidatures`
--

INSERT INTO `impact_feminin_candidatures` (`id`, `nom`, `prenom`, `email`, `telephone`, `societe`, `poste`, `prix_choisi`, `created_at`, `updated_at`) VALUES
(25, 'Bossombra', 'Bilé', 'bilebossombra@gmail.com', '0747259507', 'Ecole Virtuelle des Créatifs', 'Dirceteur', 'eclosion', '2025-08-14 06:46:38', '2025-08-14 06:46:38'),
(26, 'Bossombra', 'Bilé', 'bilebossombra20@gmail.com', '0747259507', 'Ecole Virtuelle des Créatifs', 'Dirceteur', 'eclosion', '2025-08-14 06:48:42', '2025-08-14 06:48:42'),
(33, 'sidy', 'samb', 'aboulayesamb@gmail.com', '0151516084', 'acd', 'developper fullstack', 'resilience', '2025-08-14 09:42:15', '2025-08-14 09:42:15'),
(34, 'Bilé', 'Bossombra', 'bilebossombra@gmail.com', '485762395', 'Evc', 'Dg', 'eclosion', '2025-08-14 11:19:37', '2025-08-14 11:19:37');

-- --------------------------------------------------------

--
-- Structure de la table `inscriptions`
--

CREATE TABLE `inscriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom_prenom` varchar(255) NOT NULL,
  `entreprise` varchar(255) DEFAULT NULL,
  `fonction` varchar(255) DEFAULT NULL,
  `destinations_choisies` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`destinations_choisies`)),
  `telephone` varchar(255) NOT NULL,
  `whatsapp` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_08_16_143747_create_contacts_table', 1),
(6, '2023_08_16_150209_modify_contacts_table', 1),
(7, '2023_08_16_152036_create_prixes_table', 1),
(8, '2023_08_17_192736_create_forums_table', 1),
(9, '2023_08_25_112036_create_formations_table', 1),
(10, '2023_08_25_114950_create_experts_table', 1),
(11, '2023_09_01_163131_create_moderateurs_table', 1),
(12, '2023_09_01_163828_create_roles_table', 1),
(13, '2023_09_01_163910_create_role_user_table', 1),
(14, '2023_10_06_035640_create_notifications_table', 1),
(15, '2023_12_15_113530_create_evenement_en_cours_table', 1),
(16, '2023_12_19_113148_create_event_a_venirs_table', 2);

-- --------------------------------------------------------

--
-- Structure de la table `moderateurs`
--

CREATE TABLE `moderateurs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) NOT NULL,
  `type` varchar(255) NOT NULL,
  `notifiable_type` varchar(255) NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `prixes`
--

CREATE TABLE `prixes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) NOT NULL,
  `fonction` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `statut` varchar(255) NOT NULL,
  `entreprise` varchar(255) NOT NULL,
  `numero_whatsapp` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `reservations`
--

CREATE TABLE `reservations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `societe` varchar(255) NOT NULL,
  `poste` varchar(255) NOT NULL,
  `type_reservation` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `reservations`
--

INSERT INTO `reservations` (`id`, `nom`, `prenom`, `email`, `telephone`, `societe`, `poste`, `type_reservation`, `created_at`, `updated_at`) VALUES
(7, 'Bilé Bossombra', 'Eliora', 'bilebossombra@gmail.com', '0747259507', 'EVC', 'Fondateur', 'sponsor', '2025-08-14 06:51:13', '2025-08-14 06:51:13');

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `role_user`
--

CREATE TABLE `role_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'bilebossombra@gmail.com', NULL, '$2y$10$guf2gYxY787j.ImF5yUa/uieyQ8ZcnJwFvHsPjZXzEiDU7P.Lpami', NULL, NULL, NULL),
(3, 'Administrator', 'admin@admin.com', '2025-08-14 15:07:40', '$2y$10$C1YR.MMrrRwkYuRxmbvafOnUpuF24pegPq6Wz6PdFz2yH.E34a/Ci', NULL, '2025-08-14 15:07:40', '2025-08-14 15:07:40');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `candidatures`
--
ALTER TABLE `candidatures`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `evenement_en_cours`
--
ALTER TABLE `evenement_en_cours`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `event_a_venirs`
--
ALTER TABLE `event_a_venirs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `formations`
--
ALTER TABLE `formations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `forums`
--
ALTER TABLE `forums`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `impact_feminin_candidatures`
--
ALTER TABLE `impact_feminin_candidatures`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `inscriptions`
--
ALTER TABLE `inscriptions`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `moderateurs`
--
ALTER TABLE `moderateurs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Index pour la table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `prixes`
--
ALTER TABLE `prixes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Index pour la table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_user_user_id_foreign` (`user_id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `candidatures`
--
ALTER TABLE `candidatures`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `evenement_en_cours`
--
ALTER TABLE `evenement_en_cours`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `event_a_venirs`
--
ALTER TABLE `event_a_venirs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `formations`
--
ALTER TABLE `formations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `forums`
--
ALTER TABLE `forums`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `impact_feminin_candidatures`
--
ALTER TABLE `impact_feminin_candidatures`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT pour la table `inscriptions`
--
ALTER TABLE `inscriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `moderateurs`
--
ALTER TABLE `moderateurs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `prixes`
--
ALTER TABLE `prixes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
