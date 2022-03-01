FROM php:7.3-fpm-alpine

WORKDIR /var/www

RUN apk update && apk add \
	build-base \
	vim

RUN php -r "readfile('http://getcomposer.org/installer');" | php -- --install-dir=/usr/bin/ --filename=composer

RUN docker-php-ext-install pdo_mysql

RUN addgroup -g 1000 -S www && \
	adduser -u 1000 -S www -G www

USER www

COPY --chown=www:www . /var/www

EXPOSE 9000
