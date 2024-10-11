# Use Ubuntu as the base image
FROM ubuntu:latest

# Set the working directory
WORKDIR /app

# Install required packages and PHP 8.2 with necessary extensions
RUN apt-get update && apt-get install -y \
    software-properties-common \
    && add-apt-repository ppa:ondrej/php \
    && apt-get update && apt-get install -y \
    curl \
    php8.2-cli \
    php8.2-mbstring \
    php8.2-xml \
    php8.2-zip \
    php8.2-curl \
    php8.2-mysql \
    php8.2-gd \
    unzip \
    git \
    && apt-get clean

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copy the Laravel project into the container
COPY . /app

# Install Laravel dependencies
RUN composer install

# Remove existing storage link if it exists and create a new one
RUN rm -f public/storage && php artisan storage:link

# Expose port 9000 for PHP-FPM
EXPOSE 8081

# Définir l'entrypoint
ENTRYPOINT ["/app/entrypoint.sh"]

# Set the default command to run PHP's built-in web server
CMD ["php", "-S", "0.0.0.0:8081", "-t", "public"]
