-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : jeu. 29 fév. 2024 à 02:27
-- Version du serveur : 8.0.30
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `crud`
--

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE `posts` (
  `id` int NOT NULL COMMENT 'ID post',
  `title` varchar(100) NOT NULL COMMENT 'Title post',
  `content` text NOT NULL COMMENT 'Content post',
  `added_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Added date',
  `updated_at` datetime DEFAULT NULL COMMENT 'Updated date'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COMMENT='Chaque entrée dans cette table représente un post';

--
-- Déchargement des données de la table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `added_at`, `updated_at`) VALUES
(1, 'Bienfaits du yoga', 'Flexibilité, force, relaxation, concentration, santé. Le yoga améliore le corps et l\'esprit.', '2024-02-29 03:27:09', '2024-02-29 03:27:09'),
(2, 'Films de science-fiction', 'Blade Runner, Inception, Interstellar, Matrix, Star Wars. Des univers fascinants à explorer.', '2024-02-29 03:27:09', '2024-02-29 03:27:09'),
(3, 'Alimentation équilibrée', 'Nutriments, poids santé, santé cardiaque, système immunitaire, santé mentale. Mangez équilibré pour être en forme.', '2024-02-29 03:27:09', '2024-02-29 03:27:09'),
(4, 'Recette de lasagnes', 'Ingrédients : pâtes, viande hachée, sauce tomate, fromage. Préparation : superposez les couches et faites cuire au four.', '2024-02-29 03:27:09', NULL),
(5, 'Meilleurs endroits en Italie', 'Rome, Florence, Venise, Côte amalfitaine, Toscane. Découvrez les trésors de l\'Italie.', '2024-02-29 03:27:09', NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT COMMENT 'ID post', AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
