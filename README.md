# 🏢 Meet-Up Manager

Application de réservation de salles de réunion développée avec Laravel 12.

## Prérequis

- PHP 8.2+
- Composer

## Installation

### 1. Cloner le projet
git clone https://github.com/zwayzo/meet-up-manager.git
cd meet-up-manager-v11

### 2. Installer les dépendances
composer install

### 3. Configurer l'environnement
cp .env.example .env
php artisan key:generate

### 4. Créer le fichier SQLite
touch database/database.sqlite

### 5. Lancer les migrations et insérer les salles
php artisan migrate --seed

### 6. Lancer le serveur
php artisan serve

L'application est accessible sur http://localhost:8000