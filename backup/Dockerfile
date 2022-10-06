FROM php:8.0.2-fpm

RUN apk update && apk install add \
    build-base \
    vim


RUN docker-php-ext-install pdo_mysql

WORKDIR /var/www


#FROM httpd:2.4.54

#COPY InventorySystem/* /usr/local/apache2/htdocs/ 


# FROM httpd:latest

# COPY ./httpd.conf 

