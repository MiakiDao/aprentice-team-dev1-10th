# Dockerfile (Plain PHP, Apache)
FROM php:8.3-apache

# 必要最低限の拡張のみ
RUN docker-php-ext-install pdo pdo_mysql

# URLリライトが必要なら
RUN a2enmod rewrite

WORKDIR /var/www/html
