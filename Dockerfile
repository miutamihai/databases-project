FROM php:5.6.40-apache

RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

EXPOSE 80
