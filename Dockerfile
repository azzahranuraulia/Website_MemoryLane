FROM php:8.2-apache

# Install extensions
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copy project ke dalam image
COPY . /var/www/html/

# Aktifkan mod_rewrite Apache
RUN a2enmod rewrite
