# Menggunakan image resmi PHP dengan Apache
FROM php:8.2-apache

# Menyalin seluruh isi folder ke direktori public di dalam container
COPY . /var/www/html/

# Membuka port 80 untuk aplikasi web
EXPOSE 80
