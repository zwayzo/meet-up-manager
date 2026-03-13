#!/bin/bash

echo "🚀 Installation de Meet-Up Manager..."

echo "📦 Installation des dépendances..."
composer install

echo "⚙️ Configuration de l'environnement..."
cp .env.example .env
php artisan key:generate

echo "🗄️ Création de la base de données..."
touch database/database.sqlite

echo "📊 Migrations et Seeder..."
php artisan migrate --seed

echo "✅ Installation terminée !"

echo "👉 Lance : php artisan serve"

php artisan serve
