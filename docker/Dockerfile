FROM php:8.2-apache

COPY ./apache/httpd.conf /etc/httpd/conf/httpd.conf
COPY ./apache/userdir.conf /etc/httpd/conf.d/userdir.conf
COPY ./php/php.ini /etc/php.ini

# install-php-extensions をインストール
ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/
RUN chmod +x /usr/local/bin/install-php-extensions
# PHP のエクステンションをインストール
RUN install-php-extensions opcache intl gd exif imagick mysqli pdo_mysql redis xdebug

# CMD ["/usr/sbin/httpd","-DFOREGROUND"]