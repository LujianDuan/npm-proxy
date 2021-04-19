FROM php:7.4.16-fpm-alpine3.12
RUN docker-php-source extract \ 
    && apk add libjpeg-turbo-dev \
    && apk add libpng-dev \
    && apk add libzip-dev \
    && apk add freetype-dev \
    && apk add rabbitmq-c \
    && apk add rabbitmq-c-dev \
    && docker-php-ext-install  pdo_mysql \
    && docker-php-ext-install  mysqli \
    && docker-php-ext-configure gd --with-freetype=/usr/include/ --with-jpeg=/usr/include/ \
    && docker-php-ext-install -j$(nproc) gd \
    && apk add autoconf gcc g++ make \
    && pecl install redis-4.0.1 \
    && docker-php-ext-enable redis \
    && docker-php-ext-install zip \
    && docker-php-ext-enable zip \
    && pecl install amqp \
    && docker-php-ext-enable amqp \
    && pecl install mongodb \
    && docker-php-ext-enable mongodb \
    && docker-php-ext-install bcmath \
    && docker-php-ext-enable bcmath \
    && docker-php-ext-install sockets \
    && docker-php-ext-enable sockets \
    && pecl install mongodb \
    && docker-php-ext-enable mongodb \
    && apk --update add imagemagick \
    && apk add imagemagick-dev \
    && pecl install imagick \
    && docker-php-ext-enable imagick \
#    && mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"
    && docker-php-source delete \
    && rm -rf /var/cache/apk/* \
    && rm -rf /tmp/pear/download/* \
    && curl -sS https://getcomposer.org/installer | php \
    && mv composer.phar /usr/bin/composer && chmod u+x /usr/bin/composer \
    && apk add npm \
    && apk add nodejs
