# Menggunakan image Apache dengan PHP 8.2
FROM php:8.2-apache

# Aktifkan mod_rewrite (jika kamu pakai .htaccess)
RUN a2enmod rewrite

# Ubah file default index menjadi home.php
RUN echo "DirectoryIndex home.php" > /etc/apache2/conf-available/directoryindex.conf && \
    a2enconf directoryindex

# Salin semua file dari direktori lokal ke folder Apache
COPY . /var/www/html/

# Port default Apache
EXPOSE 80
