FROM php:7.2-apache
RUN apt update
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
COPY index.php /var/www/html
