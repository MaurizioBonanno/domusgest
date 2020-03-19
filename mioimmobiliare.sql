-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Mar 17, 2020 alle 17:20
-- Versione del server: 10.4.11-MariaDB
-- Versione PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mioimmobiliare`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `immobili`
--

CREATE TABLE `immobili` (
  `id` int(10) UNSIGNED NOT NULL,
  `indirizzo` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provincia` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titolo` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descrizione` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sorter` int(11) DEFAULT 0,
  `mq` int(11) NOT NULL,
  `prezzo` int(11) NOT NULL,
  `photo` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` geometry DEFAULT NULL,
  `id_tipologia` int(10) UNSIGNED NOT NULL,
  `id_operazione` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `bagni` smallint(6) DEFAULT NULL,
  `camere` smallint(6) DEFAULT NULL,
  `vani` tinyint(4) DEFAULT NULL,
  `certificazione` varchar(125) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dump dei dati per la tabella `immobili`
--

INSERT INTO `immobili` (`id`, `indirizzo`, `provincia`, `titolo`, `descrizione`, `sorter`, `mq`, `prezzo`, `photo`, `position`, `id_tipologia`, `id_operazione`, `created_at`, `updated_at`, `bagni`, `camere`, `vani`, `certificazione`) VALUES
(4, 'Via del Fossato 89', 'GE', 'Sampierdarena affitto via del Fossato', 'Per chi vuole raggiungere in poco tempo ogni angolo della città , Sampierdarena è la location ideale.\r\n\r\nQuesto immobile ha una composizione tra le più richieste , dotato di riscaldamento centralizzato e ascensore, si compone di due camere da letto, una comoda sala , una cucina e un bagno.Esposto a sud gode di una vista magnifica e di sole in tutte le ore della giornata.\r\n\r\nLa crisi del mercato immobiliare degli ultimi anni ci consente di collocarlo ad un prezzo impensabile qualche anno fa, adesso aspetta solo un futuro proprietario che sappia approfittare di questa occasione', 2, 80, 400, 'images/album_thumbs/y6ebSBtQ0ElphMQAMmnbpJVhpYDntLyWDuUzLbpv.jpeg', NULL, 1, 2, '2020-03-09 19:31:38', '2020-03-12 09:54:20', 1, 2, 6, 'Classe G'),
(5, 'via San Quirico', 'GE', 'San Quirico Vani 5 con terrazzo', 'Ci troviamo a Genova nel quartiere di Pontedecimo , San Quirico , e più precisamente in via San Quirico. Questa è un\'abitazione destinata a chi ama la tranquillità , senza trascurare le comodità . Via San Quirico è infatti perfettamente servita e collegata al quartiere di Pontedecimo. In una bella palazzina di tre piani , perfettamente mantenuta. Al suo interno l\'appartamento è ottimamente disposto , spazi ben distribuiti secondo una moderna concezione dell\'abitare, la ristrutturazione completa e recente , perfettamente rifinita anche nei più piccoli particolari. Composto da una camera da letto , una zona giorno divisa in cucina e soggiorno a formare un unico luminosissimo ambiente , e un terrazzo al piano dove poter passare all\'aperto serate con gli amici o in contemplazione leggendo un bel libro.', 1, 70, 89000, 'images/album_thumbs/UTuFAiodxoWHvysMyZDD8po5bkp02ssMIKUWJJjm.jpeg', NULL, 1, 1, '2020-03-09 19:34:01', '2020-03-12 09:54:20', 1, 2, 5, 'Classe G'),
(6, 'via Cabella 16', 'GE', 'Via Cabella 160 Mq con giardino', 'Castelletto , via Cesare Cabella , proprio di fronte al Castello Mackenzie , una delle più belle attrazioni della città . Propongo questa magnifica esperienza abitativa , un immobile con caratteristiche decisamente signorili , in una delle zone più eleganti della città , pur essendo un quartiere tranquillo , si trova nel pieno centro cittadino. L\'immobile internamente presenta caratteristiche uniche , basta vedere le foto dei soffitti per rendersene conto. La metratura importante è ben suddivisa in 5 camere , oltre al salone di ingresso , una cucina due bagni e due ripostigli. Il giardino a cui si accede dalla sala di ingresso , può regalare bellissimi momenti a chi ama il giardinaggio , oppure più semplicemente può regalare rari momenti di relax , incorniciati dalla splendida presenza di castello Mackenzie .', 0, 160, 265000, 'images/album_thumbs/lifgkqzjNI5tFPg3hzfG8jTdseEotXK1kajRfa90.jpeg', NULL, 1, 1, '2020-03-09 19:35:52', '2020-03-12 09:54:13', 2, 9, 9, 'Classe G');

-- --------------------------------------------------------

--
-- Struttura della tabella `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dump dei dati per la tabella `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(24, '2014_10_12_000000_create_users_table', 1),
(25, '2014_10_12_100000_create_password_resets_table', 1),
(26, '2019_08_19_000000_create_failed_jobs_table', 1),
(27, '2020_02_17_200655_create_immobili_table', 2),
(28, '2020_02_17_201008_create_photo_immobili_table', 2),
(29, '2020_02_17_201808_create_tipologie_table', 2),
(30, '2020_02_17_201854_create_operazioni_table', 2);

-- --------------------------------------------------------

--
-- Struttura della tabella `operazioni`
--

CREATE TABLE `operazioni` (
  `id` int(10) UNSIGNED NOT NULL,
  `operazione` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dump dei dati per la tabella `operazioni`
--

INSERT INTO `operazioni` (`id`, `operazione`, `created_at`, `updated_at`) VALUES
(1, 'Vendita', '2020-02-16 23:00:00', '2020-02-16 23:00:00'),
(2, 'Locazione', '2020-02-23 10:52:27', '2020-03-09 19:29:48'),
(3, 'Locazione Commerciale', '2020-02-24 09:26:31', '2020-02-24 09:27:07');

-- --------------------------------------------------------

--
-- Struttura della tabella `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `photo_immobili`
--

CREATE TABLE `photo_immobili` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_immobile` int(10) UNSIGNED NOT NULL,
  `path` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descrizione` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sorter` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dump dei dati per la tabella `photo_immobili`
--

INSERT INTO `photo_immobili` (`id`, `id_immobile`, `path`, `descrizione`, `sorter`, `created_at`, `updated_at`) VALUES
(14, 4, 'images/album_thumbs/URPVxmAMuJDU7kF8dRhU6IsNyqEBwEtTHhSUFzyl.jpeg', NULL, 0, '2020-03-09 19:31:58', '2020-03-09 19:31:58'),
(15, 4, 'images/album_thumbs/8M8qRkQN1SLHqlBG6gLyfrDw1ny6Few44aGpsfdY.jpeg', NULL, 0, '2020-03-09 19:31:58', '2020-03-09 19:31:58'),
(16, 4, 'images/album_thumbs/TFfeHz3KU2sCWRf7Ldk1b3zFV2sDkyHwVOo2PMPs.jpeg', NULL, 0, '2020-03-09 19:31:58', '2020-03-09 19:31:58'),
(17, 4, 'images/album_thumbs/IHvOof9V3tPQ5uZfa3OdeDe5lt8i9jhTUaYh1Mc9.jpeg', NULL, 0, '2020-03-09 19:31:58', '2020-03-09 19:31:58'),
(18, 5, 'images/album_thumbs/VmCrCLHpWeKLVDqd7pBI7hdwA4p1yCuTF6BoynsM.jpeg', NULL, 0, '2020-03-09 20:09:49', '2020-03-09 20:09:49'),
(19, 5, 'images/album_thumbs/xL7xgEMGWezxa0dPn93yeCgVaxlMnXyP3epaSuyV.jpeg', NULL, 0, '2020-03-09 20:09:49', '2020-03-09 20:09:49'),
(20, 5, 'images/album_thumbs/5BBIIXMa1r6onz6T9zIRHrsEXqZeAqdum5oa3yI5.jpeg', NULL, 0, '2020-03-09 20:09:50', '2020-03-09 20:09:50'),
(21, 6, 'images/album_thumbs/NbP0qz3gcTuNZytOWhfzZNVYl5B7Q9rMKMBYJrjL.jpeg', NULL, 1, '2020-03-09 20:13:28', '2020-03-09 20:13:33'),
(22, 6, 'images/album_thumbs/77LAlGKzPqBiChsK3sErOy054bvRade6K7xdsnFj.jpeg', NULL, 2, '2020-03-09 20:13:28', '2020-03-09 20:13:33'),
(23, 6, 'images/album_thumbs/sdpn4LU3gn4pbliOlrKujmllRDQf5xFx1r9rZDbJ.jpeg', NULL, 0, '2020-03-09 20:13:28', '2020-03-09 20:13:28');

-- --------------------------------------------------------

--
-- Struttura della tabella `tipologie`
--

CREATE TABLE `tipologie` (
  `id` int(10) UNSIGNED NOT NULL,
  `tipologia` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dump dei dati per la tabella `tipologie`
--

INSERT INTO `tipologie` (`id`, `tipologia`, `created_at`, `updated_at`) VALUES
(1, 'Appartamento', NULL, NULL),
(2, 'Villa', '2020-02-23 09:17:33', '2020-02-24 08:21:12'),
(3, 'Appartamento in villino', '2020-02-24 08:21:33', '2020-02-24 08:21:42');

-- --------------------------------------------------------

--
-- Struttura della tabella `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dump dei dati per la tabella `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Maurizio Bonanno', 'mauriziobonanno43@gmail.com', NULL, '$2y$10$fAEYxKtlTO0qF3MMo6XkiOTLCnJxf.5BwByfYuCGx.EYbQHbFgzlS', '2sesFqyLNX0eN505PxAl9lDZJCFIqh37EfGiS9zZ0p88ct8EyjVHWCWFW3Ls', '2020-02-17 21:11:19', '2020-02-17 21:11:19');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `immobili`
--
ALTER TABLE `immobili`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_tipologia` (`id_tipologia`),
  ADD KEY `id_operazione` (`id_operazione`);

--
-- Indici per le tabelle `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `operazioni`
--
ALTER TABLE `operazioni`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indici per le tabelle `photo_immobili`
--
ALTER TABLE `photo_immobili`
  ADD PRIMARY KEY (`id`),
  ADD KEY `photo_immobili_id_immobile_foreign` (`id_immobile`);

--
-- Indici per le tabelle `tipologie`
--
ALTER TABLE `tipologie`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `immobili`
--
ALTER TABLE `immobili`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT per la tabella `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT per la tabella `operazioni`
--
ALTER TABLE `operazioni`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT per la tabella `photo_immobili`
--
ALTER TABLE `photo_immobili`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT per la tabella `tipologie`
--
ALTER TABLE `tipologie`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT per la tabella `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `immobili`
--
ALTER TABLE `immobili`
  ADD CONSTRAINT `immobili_ibfk_1` FOREIGN KEY (`id_tipologia`) REFERENCES `tipologie` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `immobili_ibfk_2` FOREIGN KEY (`id_operazione`) REFERENCES `operazioni` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limiti per la tabella `photo_immobili`
--
ALTER TABLE `photo_immobili`
  ADD CONSTRAINT `photo_immobili_id_immobile_foreign` FOREIGN KEY (`id_immobile`) REFERENCES `immobili` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
