FROM php:8.1-rc-apache

LABEL maintainer="agwan96@gmail.com"

ARG user
ARG uid

RUN apt update && apt install --yes \
    curl libpng-dev libxml2-dev zip \
    unzip autoconf g++ make \
    libjpeg-dev \
    libwebp-dev

RUN docker-php-ext-configure gd --with-jpeg --with-webp
RUN docker-php-ext-install pdo pdo_mysql opcache gd
RUN docker-php-ext-configure intl && docker-php-ext-install intl

RUN pecl install xdebug apcu \
    && docker-php-ext-enable xdebug apcu \
    && pecl clear-cache

RUN rm -rf /var/www/html/*

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN a2enmod rewrite

RUN adduser $user --uid $uid --disabled-password

USER $user

WORKDIR /var/www/html/
