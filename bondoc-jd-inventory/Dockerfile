#FROM httpd:2.4.54

#COPY InventorySystem/* /usr/local/apache2/htdocs/ 


FROM php:8.0-apache
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
RUN apt-get update && apt-get upgrade -y