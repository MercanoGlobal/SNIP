FROM php:7.4-fpm-alpine

RUN apk add -U libjpeg-turbo-dev libpng-dev freetype-dev
RUN docker-php-ext-configure gd --with-freetype --with-jpeg
RUN docker-php-ext-install gd mysqli
