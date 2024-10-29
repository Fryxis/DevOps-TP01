#!/bin/bash
echo "Postdeploy script"

mkdir -p /var/current/storage/framework/sessions
mkdir -p /var/current/storage/framework/views
mkdir -p /var/current/storage/framework/cache
mkdir -p /var/current/storage/logs
chmod -R 777 /var/current/storage 
chmod -R 777 /var/current/storage/framework
chmod -R 777 /var/current/storage/framework/sessions
chmod -R 777 /var/current/storage/framework/views
chmod -R 777 /var/current/storage/framework/cache
chmod -R 777 /var/current/storage/logs
chmod -R 777 /var/current/ressources/lang
chmod -R 777 /var/current/bootstrap/cache
chown -R root:root /var/current/storage

mkdir -p /var/www/storage/framework/sessions
mkdir -p /var/www/storage/framework/views
mkdir -p /var/www/storage/framework/cache
mkdir -p /var/www/storage/logs
chmod -R 777 /var/www/storage 
chmod -R 777 /var/www/storage/framework
chmod -R 777 /var/www/storage/framework/sessions
chmod -R 777 /var/www/storage/framework/views
chmod -R 777 /var/www/storage/framework/cache
chmod -R 777 /var/www/storage/logs
chmod -R 777 /var/www/ressources/lang
chmod -R 777 /var/www/bootstrap/cache
chown -R root:root /var/www/storage