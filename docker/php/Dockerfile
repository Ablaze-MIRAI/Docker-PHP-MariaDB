FROM php:8.1-apache

RUN apt-get update
RUN apt-get install -y htop libpq-dev libonig-dev
RUN docker-php-ext-install mbstring pdo_mysql opcache

COPY ./config/httpd.conf /usr/local/apache2/conf/
COPY ./config/php.ini /usr/local/etc/php/
