FROM php:7.3.2-fpm-alpine3.8
RUN docker-php-source extract \ 
    && apk add libjpeg-turbo-dev \
    && apk add libpng-dev \
    && apk add libzip-dev \
    && apk add freetype-dev \
    && apk add rabbitmq-c \
    && apk add rabbitmq-c-dev \
    && docker-php-ext-install  pdo_mysql \
    && docker-php-ext-install  mysqli \
    && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ --with-png-dir=/usr/include/ \
    && docker-php-ext-install -j$(nproc) gd \
    && apk add autoconf gcc g++ make \
    && pecl install redis-4.0.1 \
    && docker-php-ext-enable redis \
    && docker-php-ext-install zip \
    && docker-php-ext-enable zip \
    && pecl install amqp \
#    && mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"
    && docker-php-source delete \
    && rm -rf /var/cache/apk/* \
    && rm -rf /tmp/pear/download/* 
