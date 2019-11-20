<p align="center"><img width="400" src="https://photos.smugmug.com/photos/i-VKnSVxZ/0/X2/i-VKnSVxZ-X2.png"></p>

# Installation

## Installation du site web

Télécharger le projet avec *Git bash* ou directement en ``.zip``.

Placer le dans le dossier ``www`` de votre serveur web local.

Une fois cela fait, éxécuter les commandes suivantes:
    
    composer install
    
    npm install
    
Vous pouvez maintenant lancer le site web avec la commande ``php artisan serve``.

## Installation de la base de donnée

Modifier les informations de votre base de donnée dans le fichier ``.env``. (*Vous devez avoir au préalable avoir créer votre base de donnée*)

Lorsque la base de donnée est configuré, lancer la commande ``php artisan migrate`` pour créer les tables.
