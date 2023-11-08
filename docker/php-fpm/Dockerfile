FROM php:8.2-fpm


# /Install packages
RUN apt-get -y update && apt-get install -y libpq-dev libz-dev libzip-dev libicu-dev zip unzip git vim bash

# /Install extensions
RUN docker-php-ext-configure intl && docker-php-ext-install intl
RUN docker-php-ext-configure zip && docker-php-ext-install zip
RUN docker-php-ext-configure bcmath && docker-php-ext-install bcmath

#/postgres
RUN docker-php-ext-install pdo_pgsql

# Configure non-root user.
ARG PUID=1000
ARG PGID=1000
RUN groupmod -o -g ${PGID} www-data && \
    usermod -o -u ${PUID} -g www-data www-data

COPY ./ /var/www
WORKDIR /var/www

# /Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

CMD php-fpm

EXPOSE 9000
