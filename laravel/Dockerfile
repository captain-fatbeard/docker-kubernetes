FROM php:7-fpm-alpine AS base

# set container workdir
WORKDIR /var/www/html

# copy src file to workdir
COPY src .

RUN docker-php-ext-install pdo pdo_mysql

# FROM base AS dev

# COPY --from=composer /usr/bin/composer /usr/bin/composer

###

# FROM dev AS build

# COPY composer.json composer.json

# RUN composer install

# COPY /src /app

###

FROM base AS production

COPY --from=base /var/www/html /var/www/html
