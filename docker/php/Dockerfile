FROM php:8.1.9-fpm

RUN apt-get update && apt-get install -y git
#In this place you can specify all the extensions you need.
RUN docker-php-ext-install pdo_mysql

RUN apt-get install -y \
        libzip-dev \
        zip \
  && docker-php-ext-install zip

COPY --from=composer:2.5.5 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www