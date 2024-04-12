<p align="center">
  <img src="/public/images/logo.png" alt="Logo de l'application" width="300px">
</p>

# InPro - Système d'Inventaire

InPro est une application de gestion d'inventaire développée avec le framework Laravel. Ce système permet de suivre les produits, les lieux, les salles, les catégories, les rôles et le personnel associé.

## Fonctionnalités

- Gestion des produits avec des informations telles que le nom, la catégorie, le numéro de série, le fournisseur, l'état, etc.
- Suivi des lieux avec la quantité disponible.
- Gestion des salles avec une association aux lieux.
- Suivi du personnel associé à chaque produit.
- Gestion des catégories pour classer les produits.
- Gestion des rôles pour contrôler les accès des utilisateurs.

## Configuration requise

- PHP >= 7.4
- Composer
- Node.js >= 14
- MySQL ou autre SGBD

## Installation

1. Clonez le dépôt : `git clone <URL_DU_DEPOT>`
2. Installez les dépendances PHP : `composer install`
3. Installez les dépendances JavaScript : `npm install`
4. Copiez le fichier `.env.example` en `.env` : `cp .env.example .env`
5. Générez la clé d'application : `php artisan key:generate`
6. Configurez votre base de données dans le fichier `.env`
7. Effectuez les migrations de la base de données : `php artisan migrate`
8. Démarrez le serveur de développement : `php artisan serve`

## Note importante

- Un fichier ".env" est déjà présent sur le projet afin de faciliter l'installation, vous pouvez le modifier en fonction de votre configuration avec MySQL et PHP
- Vous avez également un accès GLPI avec les identifiants (test_exam, mot de passe: test)

## Utilisation

- Accédez à l'application dans votre navigateur : `http://127.0.0.1:8000`
- Explorez les fonctionnalités de gestion des produits, des lieux, des salles, des catégories et du personnel.

## Contributeurs

- LE BLAY Alex - Développeur principal

