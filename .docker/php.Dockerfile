FROM php:8.1-fpm-alpine3.16
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
#todo: cleanup maybe. a lot of useless build artifacts
RUN apk add autoconf gcc libc-dev make libpq-dev
RUN pecl install xdebug
RUN docker-php-ext-install pdo_pgsql opcache
RUN cd /usr/local/etc/php && cp -a php.ini-development php.ini
COPY xdebug.ini /usr/local/etc/php/conf.d/
