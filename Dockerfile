FROM php:8.2-apache

# Aktifkan mod_rewrite (kalau kamu pakai routing .htaccess)
RUN a2enmod rewrite

# Ganti default DirectoryIndex dari index.php ke home.php
RUN echo "DirectoryIndex home.php" > /etc/apache2/conf-available/directoryindex.conf && \
    a2enconf directoryindex

# Copy semua file ke folder web Apache
COPY . /var/www/html/

EXPOSE 80
