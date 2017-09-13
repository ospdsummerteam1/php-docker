FROM php:5.6-apache

# www-dataの権限
RUN usermod -u 1000 www-data \
    && groupmod -g 1000 www-data

# PHPのインストール
RUN apt-get update \
    && apt-get install -y \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libmcrypt-dev \
        libpng12-dev \
        openssl libssl-dev \
        libxml2-dev \
    && docker-php-ext-install -j$(nproc) iconv mcrypt pdo_mysql mbstring xml tokenizer zip \
    && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install -j$(nproc) gd

# apacheのrewriteを有効にする
RUN cd /etc/apache2/mods-enabled \
    && ln -s ../mods-available/rewrite.load

# composerのインストール
RUN cd /usr/bin && curl -s http://getcomposer.org/installer | php && ln -s /usr/bin/composer.phar /usr/bin/composer
RUN apt-get install -y git && composer global require "laravel/installer=~1.1"

WORKDIR /var/www/html

