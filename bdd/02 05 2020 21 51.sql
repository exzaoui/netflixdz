-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  sam. 02 mai 2020 à 22:51
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP :  7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `netflixdz`
--

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `date_insert` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`id`, `name`, `date_insert`) VALUES
(1, 'Autres', '2020-05-02 21:37:01'),
(2, 'Comédie', '2020-05-02 21:37:01'),
(3, 'Drame', '2020-05-02 21:37:01'),
(4, 'Caméra Cachée', '2020-05-02 21:37:01'),
(5, 'Expérience sociale', '2020-05-02 21:37:01');

-- --------------------------------------------------------

--
-- Structure de la table `episodes`
--

CREATE TABLE `episodes` (
  `id` int(11) NOT NULL,
  `num` int(11) DEFAULT NULL,
  `title` text DEFAULT NULL,
  `season_id` int(11) DEFAULT NULL,
  `date_insert` datetime DEFAULT NULL,
  `url` text DEFAULT NULL,
  `img` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `episodes`
--

INSERT INTO `episodes` (`id`, `num`, `title`, `season_id`, `date_insert`, `url`, `img`) VALUES
(1, 1, 'قلب الحقيقة', 1, '2020-05-02 21:44:39', 'https://www.youtube.com/watch?v=di4vJf10qJ4', ''),
(2, 2, 'الجار المشؤوم', 1, '2020-05-02 21:44:39', 'https://www.youtube.com/watch?v=t-fPyu_nQjY', ''),
(3, 3, 'عيد الفقر', 1, '2020-05-02 21:44:39', 'https://www.youtube.com/watch?v=nIQJ8MSAlSU', ''),
(4, 4, 'الطماع', 1, '2020-05-02 21:44:39', 'https://www.youtube.com/watch?v=owCfrxn1PmQ', ''),
(5, 5, 'الحاج حبو يديولو الكلوى', 1, '2020-05-02 21:44:39', 'https://www.youtube.com/watch?v=sJira8cYKV8', ''),
(6, 6, 'فيروس', 1, '2020-05-02 21:44:39', 'https://www.youtube.com/watch?v=89L3QMQgyRw', ''),
(7, 7, 'الرشوة', 1, '2020-05-02 21:44:39', 'https://www.youtube.com/watch?v=yH1oUcdLeNM', ''),
(8, 1, 'الشابة سهام', 2, '2020-05-02 21:44:39', 'https://www.youtube.com/watch?v=vD7CLQo2svI', ''),
(9, 2, 'Phobia Isaac', 2, '2020-05-02 21:44:39', 'https://www.youtube.com/watch?v=S-Tkq5nnNHE', ''),
(10, 3, 'Amine TGV', 2, '2020-05-02 21:44:39', 'https://www.youtube.com/watch?v=OfAMDZMPDtM', ''),
(11, 4, 'محمد سليماني', 2, '2020-05-02 21:44:39', 'https://www.youtube.com/watch?v=8uV29TapjQQ', ''),
(12, 5, 'الشاب مازي', 2, '2020-05-02 21:44:39', 'https://www.youtube.com/watch?v=IpBirxil4nU', ''),
(13, 6, 'فرحات سعدو', 2, '2020-05-02 21:44:39', 'https://www.youtube.com/watch?v=6BdgAy23DtU', ''),
(14, 7, 'فيصل ميهوبي', 2, '2020-05-02 21:44:39', 'https://www.youtube.com/watch?v=bkvEWcIzJPI', ''),
(15, 1, NULL, 3, '2020-05-02 21:44:39', 'https://www.youtube.com/watch?v=u5D685Zy87k', ''),
(16, 2, NULL, 3, '2020-05-02 21:44:39', 'https://www.youtube.com/watch?v=6icz9xooXoU', ''),
(17, 3, NULL, 3, '2020-05-02 21:44:39', 'https://www.youtube.com/watch?v=ccFH3nyX36c', ''),
(18, 4, NULL, 3, '2020-05-02 21:44:39', 'https://www.youtube.com/watch?v=OOpzJrIlsoI', ''),
(19, 5, NULL, 3, '2020-05-02 21:44:39', 'https://www.youtube.com/watch?v=7jrjyO3Koow', ''),
(20, 6, NULL, 3, '2020-05-02 21:44:39', 'https://www.youtube.com/watch?v=Fow51c5wKzU', ''),
(21, 7, NULL, 3, '2020-05-02 21:44:39', 'https://www.youtube.com/watch?v=wvSLKPJZvqg', ''),
(22, 1, NULL, 4, '2020-05-02 21:44:39', 'https://www.youtube.com/watch?v=rMTHi4fyS7k', ''),
(23, 2, NULL, 4, '2020-05-02 21:44:39', 'https://www.youtube.com/watch?v=JdDxMS6NWbU', ''),
(24, 3, NULL, 4, '2020-05-02 21:44:39', 'https://www.youtube.com/watch?v=7mINKxakc6U', ''),
(25, 4, NULL, 4, '2020-05-02 21:44:39', 'https://www.youtube.com/watch?v=K4UTzZkORr8', ''),
(26, 5, NULL, 4, '2020-05-02 21:44:39', 'https://www.youtube.com/watch?v=AFsK19M9ZSU', ''),
(27, 6, NULL, 4, '2020-05-02 21:44:39', 'https://www.youtube.com/watch?v=k4lBCEppyIU', ''),
(28, 7, NULL, 4, '2020-05-02 21:44:39', 'https://www.youtube.com/watch?v=aNXk-AxK2bw', ''),
(29, 1, 'التوسويس', 5, '2020-05-02 21:44:39', 'https://www.youtube.com/watch?v=T4XKF1RTEPA', ''),
(30, 2, 'الرياضة', 5, '2020-05-02 21:44:39', 'https://www.youtube.com/watch?v=AUG95KcDZMM', ''),
(31, 3, 'الدواس', 5, '2020-05-02 21:44:39', 'https://www.youtube.com/watch?v=qlETp3IJWvc', ''),
(32, 4, 'السميد', 5, '2020-05-02 21:44:39', 'https://www.youtube.com/watch?v=pEdKm2YKQyQ', ''),
(33, 5, 'دروس الدعم', 5, '2020-05-02 21:44:39', 'https://www.youtube.com/watch?v=LftyjOM6urc', ''),
(34, 6, 'الإشاعات', 5, '2020-05-02 21:44:39', 'https://www.youtube.com/watch?v=F_sZThEvE_w', ''),
(35, 7, 'التقرعيج', 5, '2020-05-02 21:44:39', 'https://www.youtube.com/watch?v=uz3uweCxK9k', ''),
(36, 1, 'ردة فعل الجزائريين كي يشوفوا زوجة طماعة', 6, '2020-05-02 21:44:39', 'https://www.youtube.com/watch?v=_R6bEHhkAE8', ''),
(37, 2, 'ردة فعل الجزائريين كي يشوفوا امرأة زواخة تتكبر على الناس', 6, '2020-05-02 21:44:39', 'https://www.youtube.com/watch?v=PxROhIWAYG8', ''),
(38, 3, 'ردة فعل الجزائريين كي يشوفوا تاجر يحتال على زبونة', 6, '2020-05-02 21:44:39', 'https://www.youtube.com/watch?v=NecrtLhSccU', ''),
(39, 4, 'ردة فعل جزائرية كي شافت راجل يتهم زوجته بالسرقة', 6, '2020-05-02 21:44:39', 'https://www.youtube.com/watch?v=YCe9Ym_MRBc', ''),
(40, 5, 'موقف رجولي لرياضي كمال الأجسام كي شاف تاجر يشتري سلعة مسروقة', 6, '2020-05-02 21:44:39', 'https://www.youtube.com/watch?v=NNq0dbEjsQ0', ''),
(41, 6, 'ردة فعل الجزائريين كي يشوفوا امرأة تطلب الخلع من زوجها', 6, '2020-05-02 21:44:39', 'https://www.youtube.com/watch?v=LALqDuJbMp4', ''),
(42, 7, 'ردة فعل بطل إفريقيا للكراتي كي شاف سيدة تسرق', 6, '2020-05-02 21:44:39', 'https://www.youtube.com/watch?v=yziqQAEh4n4', ''),
(43, NULL, NULL, NULL, '2020-05-02 21:44:39', NULL, ''),
(44, NULL, NULL, NULL, '2020-05-02 21:44:39', NULL, ''),
(45, NULL, NULL, NULL, '2020-05-02 21:44:39', NULL, ''),
(46, NULL, NULL, NULL, '2020-05-02 21:44:39', NULL, ''),
(47, NULL, NULL, NULL, '2020-05-02 21:44:39', NULL, ''),
(48, NULL, NULL, NULL, '2020-05-02 21:44:39', NULL, ''),
(49, NULL, NULL, NULL, '2020-05-02 21:44:39', NULL, ''),
(50, NULL, NULL, NULL, '2020-05-02 21:44:39', NULL, '');

-- --------------------------------------------------------

--
-- Structure de la table `season`
--

CREATE TABLE `season` (
  `id` int(11) NOT NULL,
  `num` int(11) DEFAULT NULL,
  `date_insert` datetime DEFAULT NULL,
  `serie_id` int(11) DEFAULT NULL,
  `img` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `season`
--

INSERT INTO `season` (`id`, `num`, `date_insert`, `serie_id`, `img`) VALUES
(1, 1, '2020-05-02 21:47:09', 1, NULL),
(2, 1, '2020-05-02 21:47:09', 2, NULL),
(3, 1, '2020-05-02 21:47:09', 3, NULL),
(4, 1, '2020-05-02 21:47:09', 4, NULL),
(5, 1, '2020-05-02 21:47:09', 5, NULL),
(6, 1, '2020-05-02 21:47:09', 6, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `series`
--

CREATE TABLE `series` (
  `id` int(11) NOT NULL,
  `title` varchar(45) DEFAULT NULL,
  `date_insert` datetime DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `img` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `series`
--

INSERT INTO `series` (`id`, `title`, `date_insert`, `cat_id`, `img`) VALUES
(1, 'Hayer Fi Dzair', '2020-05-02 21:48:55', 2, NULL),
(2, 'EL KADNA', '2020-05-02 21:48:55', 4, NULL),
(3, 'Rass El Mahna', '2020-05-02 21:48:55', 2, NULL),
(4, 'Clinique Intik', '2020-05-02 21:48:55', 2, NULL),
(5, 'Vide w el Covide', '2020-05-02 21:48:55', 2, NULL),
(6, 'Machi Normal', '2020-05-02 21:48:55', 5, NULL),
(7, 'Abou walid', '2020-05-02 21:48:55', 1, NULL),
(8, 'Hkemnakoum Ga3', '2020-05-02 21:48:55', 4, NULL),
(9, 'Tadbira m3a Moufida', '2020-05-02 21:48:55', 1, NULL),
(10, 'الليلة شو - Show', '2020-05-02 21:48:55', 1, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `pass` varchar(45) NOT NULL,
  `key` varchar(45) NOT NULL,
  `activated` varchar(45) NOT NULL,
  `date_registered` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `episodes`
--
ALTER TABLE `episodes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `season`
--
ALTER TABLE `season`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `series`
--
ALTER TABLE `series`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `episodes`
--
ALTER TABLE `episodes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT pour la table `season`
--
ALTER TABLE `season`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `series`
--
ALTER TABLE `series`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
