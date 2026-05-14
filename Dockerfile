FROM php:8.2-apache

RUN docker-php-ext-install mysqli pdo pdo_mysql

RUN a2dismod mpm_event
RUN a2dismod mpm_worker

COPY . /var/www/html/

WORKDIR /var/www/html