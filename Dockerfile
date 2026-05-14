FROM php:8.2-apache

RUN docker-php-ext-install mysqli

RUN a2dismod mpm_event || true
RUN a2dismod mpm_worker || true

COPY . /var/www/html/

WORKDIR /var/www/html/

EXPOSE 80