-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3325
-- Généré le : ven. 02 avr. 2021 à 20:16
-- Version du serveur :  10.4.13-MariaDB
-- Version de PHP : 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `hotelhallou`
--

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(11) NOT NULL,
  `id_room` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `cin` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`id`, `id_room`, `first_name`, `last_name`, `cin`, `phone`, `start_date`, `end_date`) VALUES
(2, 2, 'Hamza', 'Ait bourhim', '6535435', '0640404004', '2021-04-03', '2021-04-10');

-- --------------------------------------------------------

--
-- Structure de la table `room`
--

CREATE TABLE `room` (
  `id` int(11) NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `availabe_after` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `room`
--

INSERT INTO `room` (`id`, `description`, `price`, `rating`, `availabe_after`) VALUES
(1, 'En tant que nos plus petites chambres économiques, les chambres Compact conviennent à une occupation simple ou à une occupation double pour un court séjour, car elles disposent d\'un espace et d\'un espace de rangement limités.', 300, 3, '2021-03-02'),
(2, 'Notre lit king size à baldaquin offre une vue sur les jardins paysagers. Elle dispose d\'un coin salon, de nombreux rangements, d\'un coffre-fort numérique, d\'un minibar et d\'une luxueuse literie en duvet de canard.', 500, 4, '2021-04-10'),
(3, 'Notre chambre lit king-size de luxe dispose d\'un coin salon, de nombreux rangements, d\'un coffre-fort numérique, d\'un minibar et d\'une luxueuse literie en duvet de canard. Cette chambre peut être configurée avec un lit pliant\r\n', 650, 5, '2021-03-02');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
