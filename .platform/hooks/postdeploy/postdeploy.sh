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