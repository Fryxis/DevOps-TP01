#!/bin/bash
echo "Postdeploy script"

echo "Création des dossiers dans /var/current"
mkdir -p /var/app/current/storage/framework/sessions
mkdir -p /var/app/current/storage/framework/views
mkdir -p /var/app/current/storage/framework/cache
mkdir -p /var/app/current/storage/logs

echo "Changement des permissions des dossiers dans /var/current"
chmod -R 777 /var/app/current/storage 
chmod -R 777 /var/app/current/storage/framework
chmod -R 777 /var/app/current/storage/framework/sessions
chmod -R 777 /var/app/current/storage/framework/views
chmod -R 777 /var/app/current/storage/framework/cache
chmod -R 777 /var/app/current/storage/logs
chmod -R 777 /var/app/current/resources/lang/
chmod -R 777 /var/app/current/bootstrap/cache/

echo "Changement droit utilisateurs et groupes des dossiers dans /var/current"
chown -R root:root /var/app/current/storage

echo "Création des dossiers dans /var/www/html"
mkdir -p /var/www/html/storage/framework/sessions
mkdir -p /var/www/html/storage/framework/views
mkdir -p /var/www/html/storage/framework/cache
mkdir -p /var/www/html/storage/logs

echo "Changement des permissions des dossiers dans /var/www/html"
chmod -R 777 /var/www/html/storage 
chmod -R 777 /var/www/html/storage/framework
chmod -R 777 /var/www/html/storage/framework/sessions
chmod -R 777 /var/www/html/storage/framework/views
chmod -R 777 /var/www/html/storage/framework/cache
chmod -R 777 /var/www/html/storage/logs
chmod -R 777 /var/www/html/resources/lang/
chmod -R 777 /var/www/html/bootstrap/cache/

echo "Changement droit utilisateurs et groupes des dossiers dans /var/www/html"
chown -R root:root /var/www/html/storage

echo "Suppression du public/storage et création d'un lien symbolique"
cd /var/www/html/
rm -f public/storage && php artisan storage:link

echo "Configuration Nginx"
mkdir /etc/nginx/sites-available/
mkdir /etc/nginx/sites-enabled/
mkdir /etc/nginx/snippets/
rm -rf /etc/nginx/nginx.conf
mv /var/www/html/nginx/nginx.conf /etc/nginx/nginx.conf
mv /var/www/html/nginx/crm /etc/nginx/sites-available/crm
mv /var/www/html/nginx/fastcgi-php.conf /etc/nginx/snippets/fastcgi-php.conf
rm -rf /var/www/html/nginx/
ln -s /etc/nginx/sites-available/crm /etc/nginx/sites-enabled/
echo "Redémarrage Nginx"
systemctl restart nginx
