-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 04 juil. 2024 à 17:27
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestion_vente_ligne`
--

-- --------------------------------------------------------

--
-- Structure de la table `agent`
--

CREATE TABLE `agent` (
  `idagent` int(11) NOT NULL,
  `nomagent` varchar(15) NOT NULL,
  `postnomagent` varchar(15) NOT NULL,
  `prenomagent` varchar(15) NOT NULL,
  `genreagent` varchar(10) NOT NULL,
  `telephoneagent` varchar(15) NOT NULL,
  `mailagent` varchar(25) NOT NULL,
  `adresseagent` varchar(15) NOT NULL,
  `mdpassagent` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `agent`
--

INSERT INTO `agent` (`idagent`, `nomagent`, `postnomagent`, `prenomagent`, `genreagent`, `telephoneagent`, `mailagent`, `adresseagent`, `mdpassagent`) VALUES
(2, 'sedrick', 'bakambu', 'jeremi', 'Masculin', '+24322435', 'jeremi@gmail.com', 'hoho', '2233');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `idclient` int(11) NOT NULL,
  `nomclient` varchar(15) NOT NULL,
  `postnomclient` varchar(15) NOT NULL,
  `prenomclient` varchar(15) NOT NULL,
  `genreclient` varchar(10) NOT NULL,
  `telephoneclient` varchar(15) NOT NULL,
  `mailclient` varchar(25) NOT NULL,
  `adresseclient` varchar(15) NOT NULL,
  `mdpassclient` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`idclient`, `nomclient`, `postnomclient`, `prenomclient`, `genreclient`, `telephoneclient`, `mailclient`, `adresseclient`, `mdpassclient`) VALUES
(2, 'herve', 'puluku', 'mumbere', 'Masculin', '24343524', 'merite@gamil.com', 'kindia', '54321');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `idcommande` int(11) NOT NULL,
  `quantitecommande` int(15) NOT NULL,
  `datecommande` datetime NOT NULL,
  `idclient` varchar(25) NOT NULL,
  `id` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `livraison`
--

CREATE TABLE `livraison` (
  `idlivraison` int(11) NOT NULL,
  `idagent` int(11) NOT NULL,
  `idclient` int(11) NOT NULL,
  `idcommande` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `livraison`
--

INSERT INTO `livraison` (`idlivraison`, `idagent`, `idclient`, `idcommande`) VALUES
(24, 2, 2, 15),
(25, 2, 2, 15),
(26, 2, 2, 15),
(27, 2, 2, 16),
(28, 2, 2, 15),
(29, 2, 2, 35),
(30, 2, 2, 37);

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `id` int(11) NOT NULL,
  `nomproduit` varchar(25) NOT NULL,
  `puproduit` int(15) NOT NULL,
  `stockdisponible` varchar(15) NOT NULL,
  `imageproduit` varchar(255) NOT NULL,
  `descriptionproduit` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id`, `nomproduit`, `puproduit`, `stockdisponible`, `imageproduit`, `descriptionproduit`) VALUES
(27, 'Montre', 25, '50', 'uploads/TAG Heuer Carrera Connected.jpeg', 'montre marque rolex du prix abordable'),
(28, 'Montre', 25, '50', 'uploads/69da7708-27ba-4a10-bce3-828f94efcef9.jpeg', 'montre marque rolex du prix abordable'),
(29, 'Chapeau', 60, '57', 'uploads/chapeau rolx.jpeg', 'chapeau de la marque norva'),
(30, 'Veste', 25, '57', 'uploads/Homme Veste universitaire à applique lettre à blocs de couleurs à doublure thermique.jpeg', 'veste de la marque norva'),
(31, 'Canape', 300, '57', 'uploads/Vanguard Furniture Canapé American Bungalow Tissu du corps, Kimoni naturel.jpeg', 'cavape marque ikea '),
(32, 'Veste costume', 600, '57', 'uploads/costumes de bal pour hommes noir champagne bordeaux costumes de mariage costumes de bal jacquard costumes floraux 2 pièces coupe sur mesure simple boutonnage un bouton 2024.jpeg', 'marque rolex unique'),
(33, 'Chapeau', 23, '440', 'uploads/Chapeau pour hommes Casquette de baseball décontractée simple Chapeau de sports de plein air - Kaki.jpeg', 'chapeau du marque vertax'),
(34, 'Chapeau ', 23, '440', 'uploads/Ousudela - Unisexe Anime Naruto Akatsuki Red Cloud Bucket Hat Fisherman Fisher Sun Cap.jpeg', 'chapeau du marque vertax'),
(36, 'Ensembe culotte bleu', 120, '20', 'uploads/d2910267-4de1-42d9-84b5-8ab8454a276d.jpeg', 'culotte bleu de la marque gucci'),
(37, 'enssemble pantolon', 122, '20', 'uploads/84e91341-b3e0-4dcc-a711-889408b8a6c2.jpeg', 'pour enfant');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `agent`
--
ALTER TABLE `agent`
  ADD PRIMARY KEY (`idagent`),
  ADD UNIQUE KEY `mailagent` (`mailagent`),
  ADD UNIQUE KEY `telephoneagent` (`telephoneagent`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`idclient`),
  ADD UNIQUE KEY `telephoneclient` (`telephoneclient`),
  ADD UNIQUE KEY `mailclient` (`mailclient`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`idcommande`),
  ADD KEY `idclient` (`idclient`),
  ADD KEY `idproduit` (`id`),
  ADD KEY `id` (`id`);

--
-- Index pour la table `livraison`
--
ALTER TABLE `livraison`
  ADD PRIMARY KEY (`idlivraison`),
  ADD KEY `idagent` (`idagent`),
  ADD KEY `idclient` (`idclient`),
  ADD KEY `idcommande` (`idcommande`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `agent`
--
ALTER TABLE `agent`
  MODIFY `idagent` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `idclient` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `idcommande` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT pour la table `livraison`
--
ALTER TABLE `livraison`
  MODIFY `idlivraison` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
