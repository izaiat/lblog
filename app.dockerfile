FROM php:7.0.4-fpm

RUN apt-get update && apt-get install -y libmcrypt-dev \
    mysql-client libmagickwand-dev --no-install-recommends \
    && pecl install imagick \
    && docker-php-ext-enable imagick \
    && docker-php-ext-install mcrypt pdo_mysql
    && pecl install xdebug \
    && echo "zend_extension=$(find /usr/local/lib/php/extensions/ -name xdebug.so)\n" >> /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.remote_enable=1\n" >> /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.remote_autostart=1\n" >> /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.remote_connect_back=0\n" >> /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.remote_host=10.0.75.1\n" >> /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.remote_port=9001\n" >> /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.idekey=REMOTE\n" >> /usr/local/etc/php/conf.d/xdebug.ini
