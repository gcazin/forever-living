<p align="center"><img height="170" src="https://photos.smugmug.com/photos/i-VKnSVxZ/0/X2/i-VKnSVxZ-X2.png"></p>

Documentation pour l'installation du site MyAllonsY. 

# Sommaire

* [Installation](#installation)
    * [Installation du site web](#installation-du-site-web)
        * [En développement](#en-dveloppement)
        * [En production](#en-production)
    * [Installation de la base de donnée](#installation-de-la-base-de-donne)
    * [Configuration du lien symbolique](#configuration-du-lien-symbolique)

# Installation

## Installation du site web

### En développement

Télécharger le projet avec **Git bash** ou directement en ``.zip``.

Placer le dans le dossier ``www`` de votre serveur web local.

Une fois cela fait, **exécuter les commandes suivantes**:
    
Installer les dépendances php
    
    composer install
    
Installe les différentes dépendances javascript

    npm install
    
*Si vous souhaitez remplir la base de donnée avec des données factices, exécuter la commande `php artisan db:seed`*
    
Vous pouvez maintenant lancer le site web avec la commande ``php artisan serve``.

### En production

L'installation est sensiblement la même qu'en production, mise à part le fait que vous devez impérativement exécuter la commande`php artisan db:seed` pour créer le premier utilisateur avec un rôle défini en tant qu'administrateur.
Vous pourrez par la suite modifier vos informations de connexion en vous connectant avec les identifiants suivant:

    Nom d'utilisateur: admin
    Mot de passe: admin

## Installation de la base de donnée

Renommez le fichier `.env.example` en `.env`.

Modifier les informations de votre base de donnée dans le fichier ``.env``. (*Vous devez avoir créer au préalable votre base de donnée*)

Lorsque la base de donnée est configuré, lancer la commande ``php artisan migrate`` pour lancer la création des tables.

## Configuration du lien symbolique

Lancer la commande ``php artisan storage:link`` pour créer un lien symbolique qui reliera les dossiers utiles au bon déploiement de l'application.

# Pour aller plus loin

## Modification des fichiers CSS

Les fichiers CSS peuvent être changés dans le dossier `/resources/sass`.
Si vous décidez de modifier un de ces fichiers, vous devez lancer la commande `npm run dev` pour compiler les fichiers SCSS modifiés en CSS. 

## Tests unitaires

Lancer la commande `./vendor/phpunit/bin` dans la console pour vérifier que tout fonctionne.
