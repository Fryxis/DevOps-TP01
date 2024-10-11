#!/bin/bash

# Exécuter les migrations
php artisan migrate

# Démarrer le serveur PHP intégré
php -S 0.0.0.0:8081 -t public