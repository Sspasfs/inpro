# Utilisez une image PHP comme base
FROM php:8.3.3-fpm-bullseye

# Mises à jour du système et installation de dépendances
RUN apt-get update && apt-get install -y \
    autoconf pkg-config libssl-dev git libzip-dev zlib1g-dev && \
    apt-get install -y nodejs npm

# Installation de l'extension PHP pdo_mysql et zip
RUN docker-php-ext-install pdo_mysql zip

# Installation de Vite
RUN npm install -g create-vite@latest

# Définition de l'emplacement du dossier Composer
ENV COMPOSER_HOME=~/tmp/composer

# Copie de l'exécutable Composer dans l'image
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer


# Configuration du répertoire de travail
WORKDIR /var/www

# Copie des fichiers de votre application
COPY . .

RUN php -v 

# Création d'un groupe et d'un utilisateur
RUN addgroup --gid 1001 alexleblay && \
    adduser --ingroup alexleblay --shell /bin/sh alexleblay

# Passage à l'utilisateur alexleblay
USER alexleblay
