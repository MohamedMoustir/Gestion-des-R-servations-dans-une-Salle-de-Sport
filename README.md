# Gestion des Réservations dans une Salle de Sport

## Contexte du Projet
Une salle de sport souhaite moderniser son système de gestion en mettant en place une application web. Actuellement, toutes les opérations sont réalisées manuellement, ce qui entraîne des erreurs et des difficultés dans la gestion quotidienne. Le but est de créer un outil simple pour :

- Gérer les membres inscrits à la salle.
- Planifier et afficher les activités ou équipements disponibles.
- Permettre aux membres de réserver des activités ou des équipements.

## Objectifs
Ce projet a pour objectif de fournir une solution complète pour gérer les réservations de la salle de sport, incluant :

1. La gestion des membres
2. La gestion des activités et équipements
3. Le système de réservation en ligne
4. La visualisation des données via des interfaces web

## Structure du Projet

### 1. Schéma de la Base de Données (ERD)
- **Membres** : Contient les informations des utilisateurs inscrits (nom, email, etc.).
- **Activités** : Liste des activités disponibles à la réservation (yoga, musculation, etc.).
- **Réservations** : Enregistre les réservations des membres pour des activités ou équipements.

### 2. Conception des Tables 
A partir du schéma fourni, vous devez :
- Créer les tables nécessaires.
- Ajouter des attributs supplémentaires pour répondre aux besoins spécifiques du projet.

### 3. Diagramme UML (Cas d'Utilisation)
Le diagramme UML comprend :
- **Acteurs principaux** : Membres, Administrateurs.
- **Interactions possibles** : Réservation d'activités, consultation de l'historique des réservations, gestion des membres et des activités par l'administrateur.

### 4. Configuration de l'Environnement
1. Installer et configurer un serveur local (XAMPP, WAMP, ou autre).
2. Créer la base de données à partir du schéma fourni.
3. Configurer les fichiers et répertoires de votre projet.

### 5. Scripts SQL
Les scripts SQL à écrire incluent :
- Création de la base de données et de ses tables.
- Insertion, mise à jour, et suppression des données.
- Requêtes de jointures simples entre les tables.

### 6. Fonctionnalités en PHP
- **Ajout de données via des formulaires** : Membres, Activités, Réservations.
- **Affichage dynamique des données** : Liste des membres ou réservations en temps réel.
- **Modification de données** : Permettre à l'administrateur de modifier les informations des membres, activités, et réservations.
- **Suppression des données** : Ajout d'une fonctionnalité de suppression pour les membres ou réservations.
- **Recherche par critères** : Implémentation d'une recherche de réservations par activité, membre ou date.

## Prérequis

- PHP 7.4 ou version supérieure
- MySQL ou MariaDB
- Serveur web local (laragon)
- Un éditeur de code comme VSCode ou Sublime Text
