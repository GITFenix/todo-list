FROM php:8.1-fpm-bullseye as todo-base

RUN apt-get -y update && apt-get -y upgrade && apt-get -y install git bash libpq-dev libzip-dev unzip
RUN docker-php-ext-install pdo pdo_pgsql

RUN docker-php-ext-install opcache zip sysvsem

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /home/todo
