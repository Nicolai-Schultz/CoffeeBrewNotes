FROM php:8.3-fpm-alpine

RUN apk add --no-cache \
    bash curl git unzip icu-dev oniguruma-dev libzip-dev sqlite sqlite-dev \
  && docker-php-ext-install pdo pdo_sqlite intl mbstring zip

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html
