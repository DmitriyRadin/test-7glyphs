FROM php:7.2-fpm

RUN apt-get update

RUN apt-get install -y libpq-dev \
&& docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql \
&& docker-php-ext-install pdo_pgsql pgsql

WORKDIR /7glyphs/laravel