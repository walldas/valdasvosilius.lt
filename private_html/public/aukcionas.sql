-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2017 m. Geg 29 d. 09:50
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aukcionas`
--

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `apiemanes`
--

CREATE TABLE `apiemanes` (
  `id` int(10) UNSIGNED NOT NULL,
  `about` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Sukurta duomenų kopija lentelei `apiemanes`
--

INSERT INTO `apiemanes` (`id`, `about`, `created_at`, `updated_at`) VALUES
(2, '<p>Trumpai mano asmenybę galima apibūdinti 4 žodžiais: kruopštumas, smalsumas,\r\ngeranoriškumas ir sąžiningumas. Kitos mano savybės, tai pasekmės šių keturių\r\nsavybių: esu žingeidus, smalsus, darbštus, smulkmeniškas, užsispyręs užbaigti\r\npradėtus darbus, atsakingas, sportiškas, savikritiškas, neturiu žalingų įpročių. Esu\r\nkūrybingas ir beveik visada turiu naujų idėjų. Geriausia ir tuo pačiu blogiausia mano savybė \"naujumo alkis\".</p>\r\n<p>\r\nGreitai perprantu žmones, todėl lengvai randu bendrą kalbą su bet kokiu žmogumi,\r\ngreitai perprantu darbo specifiką, lengva dirbti savarankiškai, arba mažame kolektyve\r\n(iki 3-4 asmenų), ypatingai greitai išmokstu jei turiu mokytoją, daug klausinėju, visada\r\npalaikau teigiamą atmosferą bet kokioje aplinkoje.</p>', '2017-03-26 10:18:56', '2017-04-02 12:55:18');

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `comentar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `userName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `userId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Sukurta duomenų kopija lentelei `contacts`
--

INSERT INTO `contacts` (`id`, `comentar`, `userName`, `created_at`, `updated_at`, `userId`) VALUES
(29, 'pyyyyyyktas komentaras asd asd asd asd ad asd asd asd asd', 'Vėjas', '2017-04-07 02:01:48', '2017-04-07 02:01:48', 6),
(31, 'Man patiko Jūsu svatainės stilius', 'Jonas', '2017-04-07 02:03:28', '2017-04-07 02:03:28', 2),
(32, 'Labai idomus Jūsu svetainės valdimo sistema ir Kinų kalentorius labai unikalus argoritmas.', 'Petras', '2017-04-07 02:06:11', '2017-04-07 02:06:11', 3),
(36, 'h9 kibib', 'Jonas', '2017-04-11 06:27:33', '2017-04-11 06:27:33', 2);

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `courses`
--

CREATE TABLE `courses` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `webLink` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `info` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Sukurta duomenų kopija lentelei `courses`
--

INSERT INTO `courses` (`id`, `title`, `webLink`, `info`, `created_at`, `updated_at`) VALUES
(2, 'Tinklapių programavimas (3WA Academy)', 'http://3wa.lt/', '<li>Patirtis:400 val.</li>\r\n\r\n								<li>Įvaldytos technologijos:\r\n									<ul>\r\n										<li>WED dizainas</li>\r\n										<li>HTML</li>\r\n										<li>CSS</li>\r\n										<li>LESS</li>\r\n										<li>Java Script</li>\r\n										<li>jQuery</li>\r\n										<li>JSON</li>\r\n										<li>MySQL</li>\r\n										<li>WordPress</li>\r\n										<li>PHP</li>\r\n										<li>Laravel</li>\r\n										<li>Git</li>\r\n									</ul>\r\n\r\n								</li>', '2017-03-31 14:51:22', '2017-03-31 14:57:26'),
(3, 'Vairuotojo pažimėjimas', 'http://www.mokomesvairuoti.lt/', '<li>Kategorija: B </li>\r\n<li>Patirtis:10 m.</li>', '2017-03-31 14:54:50', '2017-03-31 14:54:50');

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `cvtitles`
--

CREATE TABLE `cvtitles` (
  `id` int(10) UNSIGNED NOT NULL,
  `myname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Sukurta duomenų kopija lentelei `cvtitles`
--

INSERT INTO `cvtitles` (`id`, `myname`, `status`, `address`, `email`, `phone`, `dob`) VALUES
(4, 'Valdas Vosilius', 'Jaunesnysis web programuotojas', 'Vilnius Ateities g.  9-11', '88waldas@gmail.com', 860483138, '1988-06-15');

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `education`
--

CREATE TABLE `education` (
  `id` int(10) UNSIGNED NOT NULL,
  `institution` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profesion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imgLink` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `webLink` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `finalTitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `finalLocation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skills` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Sukurta duomenų kopija lentelei `education`
--

INSERT INTO `education` (`id`, `institution`, `profesion`, `imgLink`, `webLink`, `start`, `end`, `finalTitle`, `finalLocation`, `skills`, `created_at`, `updated_at`) VALUES
(1, 'Vilniaus Universitetas', 'Biofizikos Bakalauras', 'http://www.vu.lt/site_images/vu-logo.jpg', 'http://www.vu.lt/', '2008-09-01', '2012-06-01', 'Temperatūros poveikio tyrimas menturdumblių ląstelių membranų joninėms srovėms.', 'Vilniaus Universiteto Gamtos mokslų fakulteto augalų elektrofiziologijos laboratorijoje.', '<p>Ten įgyjau patirties smulkmeniškai:</p>\r\n<ul>\r\n<li>analizuojant duomenys su OriginPro8 programa,</li>\r\n<li>spręsti iškilusias problemas,</li>\r\n<li>pasigaminti ir dirbti su mikroelektrodais,</li>\r\n<li>pasirūpinti ląstelėmis,</li>\r\n<li>bei pasiruošti įvairių koncentracijų tirpalus.</li>\r\n</ul>', '2017-03-31 10:44:39', '2017-03-31 11:27:28'),
(3, 'Vilniaus Universitetas', 'Molekulinės Biologijos Magistras', 'http://www.vu.lt/site_images/vu-logo.jpg', 'http://www.vu.lt/', '2012-09-01', '2014-02-01', 'Chlorino e6 fotosensibilizacinis poveikis MCF-7 ir MDA-MB-231 krūties vėžinėms ląstelėms.', 'Vilniaus Universiteto onkologijos institute.', '<p>Ten įgyjau patirties dirbant su vėžinėmis ląstelių kultūromis jų auginimų, kultivavimu ir su tokiais įrenginiais kaip:</p>\r\n<ul>\r\n<li>fluorimetras,</li>\r\n<li>spektrofotometras,</li>\r\n<li>konfokalinis mikroskopas,</li>\r\n<li>plokštelių ir ląstelių skaitytuvais,</li>\r\n<li>įvairios lazerinės sistemos jų surinkimas ir suderinimas.</li>\r\n</ul>\r\n<p>Visa tai mane išmokė kaip reikia vaizdžiai ir prestižiškai perteikti gautų duomenų rezultatus skaidrėse, bei kruopščiai suplanuoti eksperimento laiką.</p>', '2017-03-31 11:34:05', '2017-03-31 16:26:04');

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `jobs`
--

CREATE TABLE `jobs` (
  `id` int(10) UNSIGNED NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `workWith` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `moreInfo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `imgLink` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `webLink` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Sukurta duomenų kopija lentelei `jobs`
--

INSERT INTO `jobs` (`id`, `status`, `title`, `workWith`, `moreInfo`, `start`, `end`, `imgLink`, `webLink`, `created_at`, `updated_at`) VALUES
(1, 'Operatorius', 'Operatorius', 'Palaikyti bioetanolio, skirto biodegalams, bei elektros ir šiluminės energijos iš atsinaujinančių energijos šaltinių (mezofilinio proceso metu pagamintų biodujų) gamybos technologinius procesus į vieną  nepertraukiamą technologinę grandinę', '.', '2014-06-16', '2014-06-30', 'http://www.kurana.lt/wp-content/themes/kurana/images/logo.png', 'http://www.kurana.lt/lt/', '2017-03-31 09:02:31', '2017-03-31 09:02:31'),
(2, 'Jaunesnysis mokslo darbuotojas - Biotechnologas', 'Baltymų grynintojas', '<ul>\r\n	<li>Gamybynių bei mokslių protokolų taisymas.</li>\r\n	<li>Chromatografinių kolonų krovimas sorbentais.\r\n		<ul>\r\n		    <li>Nuo 1cm. iki 50 cm. diametro.</li>\r\n		</ul>\r\n	</li>\r\n	<li>Chromatografinių buferių gamyba iki 500L.</li>\r\n	<li>Biomasės ardymas</li>\r\n	<li>Tangentinis Filtravimas.\r\n		<ul>\r\n		<li>Turiu didžiausią patirtį šioje įmonėje su tangentinių filtravimo sistemų surinkime bei filtravime, mokslo ir gamybos skalėse.</li>\r\n		<li>Teko filtruoti nuo 10-1000L žinduolinių ląstelių kultūras.</li>\r\n		</ul>\r\n		</li>\r\n	<li>Ultrafiltravimas / Koncentravimas.<ul>\r\n	<li>Pasiekimas- Baltymo sukoncentravimas nuo 5L iki 5ml kai vidinis filtravimo sistemos tūris 12 ml. Visa tai atlikus buvo pataikyta į tikslinę baltymo koncentracija. Išeiga 98%.</li>\r\n	</ul>\r\n	</li>\r\n	<li>Diafiltravimas / Buferio keitimas.</li>\r\n	<li>Darbas su dujokaukėmis dirbant cianidų laboratorijoje.</li>\r\n	<li>Darbas su skysčių chromatografais (Akta avant ir K-prime).</li>\r\n	</ul>', '<p>Šis darbas mane išmokė kaip galima darbus atlikti lygiagrečiai tuo pat metu puikiai suplanavus darbo laiką. </p>\r\n<p>Visa tai man suteikė naujos neįkainojamos patirties ne tik šioje biotechnologijų sritį, bet ir apie savo galimybių ribą: nepakeliu naktinio darbo.</p>', '2014-12-17', '2016-12-17', 'https://upload.wikimedia.org/wikipedia/lt/9/9e/Biotechpharma_logo.jpg', 'http://www.biotechpharma.lt/', '2017-03-31 07:24:44', '2017-03-31 08:36:22');

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `leisures`
--

CREATE TABLE `leisures` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `moreInfo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Sukurta duomenų kopija lentelei `leisures`
--

INSERT INTO `leisures` (`id`, `title`, `moreInfo`, `created_at`, `updated_at`) VALUES
(2, 'Tinklapių kurimas', NULL, '2017-04-01 09:05:43', '2017-04-01 09:26:06'),
(5, 'Astronomija', NULL, '2017-04-01 09:22:08', '2017-04-01 09:22:08'),
(6, 'Psichologija', NULL, '2017-04-01 09:22:24', '2017-04-01 09:22:24'),
(7, 'Filosofija', 'žinau gyvenimo prasme', '2017-04-01 09:22:53', '2017-04-01 09:22:53'),
(8, 'Sportas', 'įvairus fizinis aktivumas', '2017-04-01 09:23:17', '2017-04-01 09:23:17'),
(9, 'Meterologija', NULL, '2017-04-01 09:23:29', '2017-04-01 09:23:29'),
(10, 'Bitininkystė', 'turiu viena avilį', '2017-04-01 09:23:59', '2017-04-01 09:23:59'),
(11, 'Šachmatai', NULL, '2017-04-01 09:24:11', '2017-04-01 09:24:11'),
(12, 'Piešimas', NULL, '2017-04-01 09:24:23', '2017-04-01 09:24:23'),
(13, 'PC games', 'pagrinde Blizzard Games', '2017-04-01 09:25:04', '2017-04-01 09:25:04'),
(14, 'Domėjimasis įvairiomis programomis', NULL, '2017-04-01 09:25:16', '2017-04-01 09:25:16'),
(15, 'Programavimas Python', 'Siekiu parašyti algoritmą kuris suspaustu informacija. Su dabartiniais pasirašytais algoritmais teoriškai išeina suspausti 1TB į 8kB neprarandant informacijos.', '2017-04-01 09:25:35', '2017-04-01 09:25:35');

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Sukurta duomenų kopija lentelei `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(4, '2017_03_25_135926_CvtitleTable', 2),
(6, '2017_03_25_213922_create_apiemanes_table', 3),
(10, '2017_03_26_123102_create_skills_table', 4),
(11, '2017_03_26_182822_AddTypeToUser', 5),
(12, '2017_03_26_191517_UserNameId', 6),
(13, '2017_03_31_085956_create_jobs_table', 6),
(14, '2017_03_31_121106_create_education_table', 7),
(15, '2017_03_31_162840_create_courses_table', 8),
(16, '2017_04_01_113256_create_leisures_table', 9),
(17, '2017_03_12_183719_CreateNamesTable', 10),
(18, '2017_04_03_080855_create_porfolios_table', 11);

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `names`
--

CREATE TABLE `names` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `priceMin` decimal(8,2) NOT NULL,
  `priceMax` decimal(8,2) DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Sukurta duomenų kopija lentelei `names`
--

INSERT INTO `names` (`id`, `title`, `status`, `priceMin`, `priceMax`, `user_id`, `description`, `created_at`, `updated_at`) VALUES
(17, 'Front programuotojas', 'Jaunesnysis', '1000.00', '2000.00', 2, 'Puiki galimybe tobulinti savo CSS ir HTML bei Bootstrep\'o igudžius.', '2017-04-07 01:45:44', '2017-04-07 01:45:44'),
(18, 'Full Stack Programuotojas', 'Jaunesnysis', '2000.00', '3000.00', 3, 'Logika ir dar karta logika štai kas mums svarbiausia jei sugebi rašyti if\'us ir while ciklus tu mums tinki.', '2017-04-07 01:50:29', '2017-04-07 01:50:29'),
(19, 'Programuotojas', 'Vadovas', '3300.00', '4000.00', 3, 'Kontroliuoti programuotojų darbus, Dėl detalisnės informacijos tik per pokalbi.', '2017-04-07 01:53:21', '2017-04-07 01:53:21'),
(20, 'Web Dizaineris', 'Programuotojas', '600.00', '2000.00', 4, 'Garantuotos socialinės garantijos ir pastovus atlyginimas nepriklausomai nuo darbo rezultatų.', '2017-04-07 01:58:23', '2017-04-07 01:58:23');

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `porfolios`
--

CREATE TABLE `porfolios` (
  `id` int(10) UNSIGNED NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `textColor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Sukurta duomenų kopija lentelei `porfolios`
--

INSERT INTO `porfolios` (`id`, `img`, `title`, `description`, `created_at`, `updated_at`, `textColor`) VALUES
(20, 'W4qQLntJ09knTmLsSCi9Fzt8DVcRi9huoCgIiAMh.png', 'Pirmieji patepliojimai', 'Pirmoji mano kurta svetainė iš bakalauro laikų', '2017-04-06 17:44:39', '2017-04-06 17:44:39', 'blue'),
(21, 'dZYcIbi3y5lXhAKVh8K6mwycHIbVm0OcadGCjTKD.jpeg', 'Filmų kolekcija', '3wa filų,  atvaizdavimas , php pamokos.', '2017-04-06 17:47:53', '2017-04-06 17:48:14', 'gold'),
(22, 'SuUONLby1Qa4THXJiCGSrML1gnF3ePMuR49l0H6b.png', 'Typo', 'Trečioji 3wa pamoka :)', '2017-04-06 17:49:58', '2017-04-06 17:49:58', '#333'),
(23, 'Gy6UANJDISoxCJh8GBGAII0c8XNuifb55rNtFtKS.png', 'Grean office', 'Minimalistiškas bet tuo pačiu ir toks tobulas', '2017-04-06 17:51:51', '2017-04-06 17:51:51', 'red'),
(24, 'drvutF1YhcPbcRvpFjUkOcxAXZ184l6bITKiOpE8.png', 'Fish and chips', 'Kreivas, šleivas, bet margin\'sus minusinius išmokom :D', '2017-04-06 17:53:57', '2017-04-06 17:54:36', 'white'),
(25, 'BVstkMeZU9bffi9qKNuYff541EedO67uZQVYbT7O.jpeg', 'Joga', 'Ramiai ir sklandžiai ėjo CSS', '2017-04-06 17:57:30', '2017-04-06 17:57:30', 'black'),
(26, 'qQ1ncbAj9DbV2lhufcHvkjjwo0PL8IJiHWTWQVlP.jpeg', 'Red folf', 'Skuodė raudonas vilkas ant motociklo pas savo zuikute <3', '2017-04-06 18:00:53', '2017-04-06 18:00:53', 'black'),
(27, 'FHm8UfmpvFzCOg94ZFFTuz6iBY6KX49OhsZTrKIF.png', 'Pasaka', 'Dar viena puiki diena su 3WA', '2017-04-06 18:02:06', '2017-04-06 18:02:20', 'black'),
(28, 'rnm8r5tPyFAzpbqEYiKE6fVP9q7hnaUfMgPCUrFW.png', 'Cats and Tables', 'Smagu grazu ir bootstrap boots boots', '2017-04-06 18:03:54', '2017-04-06 18:03:54', 'black'),
(29, 'WlzOZjRZ2wUoE3q6cpVU9BNLOWm9MRz8ubEDFYIZ.jpeg', 'Tiltas', 'labai baisus bet labai ir gražus', '2017-04-06 18:06:12', '2017-04-06 18:06:45', 'orange'),
(30, 'jqu7sNvh13jety1p8JxAWClrSi8IEJ0NgapVCRaI.png', 'Karuselė', 'Rankomis padaryta karuselė yra pati geriausia, karuselė', '2017-04-06 18:08:09', '2017-04-06 18:08:09', 'black'),
(31, 'qBgzroUA2UfeBXO3oxpB03g4hYgtfM7WkmzuJ2XC.jpeg', 'Svajonių namas', 'Svajonių namas kuris juda !!!!', '2017-04-06 18:10:29', '2017-04-06 18:10:29', 'white'),
(32, 'eqtnRElUvhkPLG1zC1uk1arwW5MaPlwI2wrjWkJV.png', 'Tik tak', 'Tik tak, tik tak JavaScript\'as eina', '2017-04-06 18:11:49', '2017-04-06 18:11:49', 'white'),
(33, '0VdHocAx21WGJY4vFSczfvgAPvdlzD6jNmpJs127.png', 'Stebuklinga piešimo lenta', 'Magiška piešimo lenta, spalvų tiek daug kad du kartus tos pačios nepasirinksi, Garantuoju :D', '2017-04-06 18:13:27', '2017-04-06 18:14:13', 'blue'),
(35, '2Fa4D9EQLpUyPUJitIZO45Vq6Kmm0gUHJZYEy3ix.png', 'Kas laimės ?', 'O O P ?', '2017-04-06 18:18:49', '2017-04-06 18:18:49', 'black'),
(36, 'ibnh2BChseA9cTdRkP80HcVX2hQ5uAr9rftq8BeP.png', 'CV idėja', 'MANO ASMENISIS TINKLAPIS pagaliau !!!!!!', '2017-04-06 18:20:25', '2017-04-06 18:20:41', 'blue');

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `skills`
--

CREATE TABLE `skills` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `point` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Sukurta duomenų kopija lentelei `skills`
--

INSERT INTO `skills` (`id`, `name`, `point`, `created_at`, `updated_at`) VALUES
(2, 'HTML', 10, '2017-03-26 12:38:36', '2017-04-05 04:07:50'),
(3, 'CSS', 10, '2017-03-26 12:47:05', '2017-03-26 12:47:05'),
(4, 'PHP', 7, '2017-03-26 12:48:31', '2017-03-26 12:48:31'),
(5, 'JavaScript', 7, '2017-03-26 12:48:47', '2017-03-26 12:48:47'),
(6, 'jQuery', 6, '2017-03-26 12:49:25', '2017-03-26 12:49:25'),
(8, 'Laravel', 7, '2017-03-26 12:50:13', '2017-03-26 12:50:13'),
(9, 'WordPress', 5, '2017-03-26 12:50:44', '2017-03-26 12:50:44'),
(10, 'Bootstrap', 8, '2017-03-26 12:51:04', '2017-03-26 12:51:04'),
(11, 'Git', 7, '2017-03-26 12:51:28', '2017-03-26 12:51:28'),
(12, 'Python', 7, '2017-03-26 12:51:53', '2017-03-26 12:51:53'),
(13, 'Adobe Photoshop', 8, '2017-03-26 12:52:09', '2017-03-26 12:52:09'),
(14, 'Excel', 8, '2017-03-26 12:52:29', '2017-03-26 12:52:29'),
(15, 'PowerPoint', 8, '2017-03-26 12:52:47', '2017-03-26 12:52:47'),
(16, 'Sublime 2', 9, '2017-03-26 12:53:08', '2017-03-26 12:53:08'),
(17, 'Atom', 9, '2017-03-26 12:53:23', '2017-03-26 12:53:23');

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `surename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Sukurta duomenų kopija lentelei `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `type`, `surename`, `address`, `city`, `phone`, `company`) VALUES
(1, 'Valdas', '88waldas@gmail.com', '$2y$10$JmMA4gYsrSvxDImO/QIgyuA1V9OvY86ImoS7kHwqVN1TyjsS3P602', 'RN5j8Buuzefz0L76KLNoUEAaiCQ0945A2krcr7Rfmk7GhBk7FvQut00F2Cmj', '2017-03-14 16:11:24', '2017-04-07 02:07:31', 'admin', 'Vosilius', 'Ateities 9-11', 'Vilnius', 860483138, 'pats sau'),
(2, 'Jonas', 'user@user.lt', '$2y$10$.19oVUT9ph.7Vo/SGOEMPOlDqAoTG.zelaz2ej9mwIeeO7R2Vatcm', 'Wi2VpzPFK7pV4nvP5yIpsMve8BeyKHwf2XwnUCBH1OfiCOVXIvgrkquBwLZ3', '2017-03-26 17:41:59', '2017-04-07 01:43:09', 'user', 'Jonaitis', 'sdsdfsdfsdf', 'Vilnius', 863483178, 'UAB Feikas'),
(3, 'Petras', 'user2@user.lt', '$2y$10$C2PFgNND8O3ub3IvwDg0w.eewhlhpVpZez91FBHNNrx0wkdAj9TQG', 'gyJbpd6HF30k7mx1eFnNfY99sPKaaXq5q4ZZeipeGqN2PIGWKqZKuaUGhHx1', '2017-03-26 17:57:24', '2017-04-07 01:48:27', 'user', 'Petraitis', 'asdasd', 'Klaipėda', 864345345, 'UAB Star'),
(4, 'Marius', 'user3@user.lt', '$2y$10$.04ZhZkP2BWjBNtx0TmsvenaaztThQ112xXDME.xFr.lmaVhwkOsi', '1zhe7LLjqYK2VMJkGY4mvBaGPv9g559uVuVD8EohfwLRKI4Y5YZzguaEyf1P', '2017-03-27 03:26:07', '2017-04-07 01:55:49', 'user', 'Marinauskas', 'asdasd', 'Vilnius', 866234234, 'UAB TV3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apiemanes`
--
ALTER TABLE `apiemanes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cvtitles`
--
ALTER TABLE `cvtitles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leisures`
--
ALTER TABLE `leisures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `names`
--
ALTER TABLE `names`
  ADD PRIMARY KEY (`id`),
  ADD KEY `names_user_id_foreign` (`user_id`);

--
-- Indexes for table `porfolios`
--
ALTER TABLE `porfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apiemanes`
--
ALTER TABLE `apiemanes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `cvtitles`
--
ALTER TABLE `cvtitles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `leisures`
--
ALTER TABLE `leisures`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `names`
--
ALTER TABLE `names`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `porfolios`
--
ALTER TABLE `porfolios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Apribojimai eksportuotom lentelėm
--

--
-- Apribojimai lentelei `names`
--
ALTER TABLE `names`
  ADD CONSTRAINT `names_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
