ZendFramework TP - ESGI
---------------------------------------------

## Meetup CRUD :

Ce projet est basé sur le framework PHP *Zend Framework 3* 
Il a été réalisé dans le contexte d'un TP à rendre.

Voici les fonctionnalités disponibles:

### Afficher la liste des meetups 

> http://localhost:8080/meetup

### Pouvoir ajouter un meetup 

> http://localhost:8080/meetup/new

### Modifier un meetup existant 

> http://localhost:8080/meetup/update/{id}

### Supprimer un meetup existant 

> http://localhost:8080/meetup/remove/{id}

### Consulter les détails d'un meetup existant 

> http://localhost:8080/meetup/detail/{id}

#### Consulter la base de donnée grâce à PhpMyAdmin.

> http://localhost:8090

> utilisateur: `demo`
> Mot de passe: `demo`


## Installation du projet :

#### Démarrer l'environnement Docker

> docker-compose build 

> docker-compose up -d

#### Intégré le bash du ocntainer.

> docker-compose exec zf bash

#### Création de la base de données

> php vendor/bin/doctrine-module orm:schema-tool:create

#### Mettre à jour la base de données

> php vendor/bin/doctrine-module orm:schema-tool:update