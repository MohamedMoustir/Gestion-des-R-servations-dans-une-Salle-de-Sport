
-- Base de données : `all_sports`


-- Structure de la table `activites`
--

CREATE TABLE `activites` (
  `id_activite` int NOT NULL,
  `Nom_activite` varchar(100) DEFAULT NULL,
  `Description_activite` text,
  `Capacite` int DEFAULT NULL,
  `date_debut` date DEFAULT NULL,
  `date_fin` date DEFAULT NULL,
  `Disponibilite` tinyint DEFAULT '0',
  `image_path` varchar(255) NOT NULL
) ;

--
-- Déchargement des données de la table `activites`
--

INSERT INTO `activites` (`id_activite`, `Nom_activite`, `Description_activite`, `Capacite`, `date_debut`, `date_fin`, `Disponibilite`, `image_path`) VALUES
(137, 'Risa Carney', 'Aperiam non autem en', 57, '1972-04-03', '1973-03-18', 1, 'pexels-photo-3760268.webp'),
(141, 'Hamish Caldwell', 'Qui fugit delectus', 63, '2017-03-04', '1977-04-01', 2, 'pexels-photo-1229356.webp'),
(142, 'Allen Sullivan', 'Quia adipisicing rem', 46, '2000-03-26', '1994-03-30', 2, 'pexels-photo-6539003.webp');

-- --------------------------------------------------------

--
-- Structure de la table `reservations`
--

CREATE TABLE `reservations` (
  `id` int NOT NULL,
  `activityId` int NOT NULL,
  `userId` int NOT NULL,
  `date_activity` date DEFAULT NULL,
  `time_activity` time DEFAULT NULL,
   PRIMARY KEY (`id`),
  FOREIGN KEY (`activityId`) REFERENCES `activites` (`id_activite`) ON DELETE CASCADE,
  FOREIGN KEY (`userId`) REFERENCES `users` (`id_users`) ON DELETE CASCADE
);

--
-- Déchargement des données de la table `reservations`
--

INSERT INTO `reservations` (`id`, `activityId`, `userId`, `date_activity`, `time_activity`) VALUES
(144, 137, 23, '2022-07-07', '13:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id_users` int  NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `pass_word` varchar(20) ,
  `isAdmin` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id_users`)
);

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id_users`, `username`, `email`, `pass_word`, `isAdmin`) VALUES
(23, 'bihepu', 'kahaqoky@mailinator.com', 'xudopyva', 0),
(24, 'admin@gmail.com', 'admin@gmail.com', 'admin', 1),
(26, 'itsmoustir', 'itsmoustir@gmail.com', '123', 0);

--
-

--
-- AUTO_INCREMENT pour la table `activites`
--
ALTER TABLE `activites`
  MODIFY `id_activite` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;


