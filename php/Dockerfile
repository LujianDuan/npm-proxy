FROM php:5.6-fpm-alpine3.8
RUN docker-php-source extract \ 
    && apk add libmcrypt-dev \
    && docker-php-ext-install mcrypt \
    && docker-php-ext-install  pdo_mysql \
    && docker-php-ext-install  mysql \
    && docker-php-ext-install  mysqli \
    && apk add autoconf gcc g++ make \
    && pecl install redis-4.0.1 \
    && docker-php-ext-enable redis \
#    && mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"
    && docker-php-source delete \
    && rm -rf /var/cache/apk/* \
    && rm -rf /tmp/pear/download/* 
