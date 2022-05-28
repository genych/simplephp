FROM php:8.1-fpm-alpine
RUN apk add bash mc git libpq-dev autoconf
RUN docker-php-ext-install pdo_pgsql opcache
RUN cd /usr/local/etc/php && cp -a php.ini-development php.ini
