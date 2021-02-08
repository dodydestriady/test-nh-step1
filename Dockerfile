FROM php:7.2-apache
COPY . /var/www/html

COPY --from=composer /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

RUN  apt update && apt install git -y && composer install

EXPOSE 80