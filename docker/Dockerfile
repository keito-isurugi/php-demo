FROM php:8.2-apache

COPY ./apache/httpd.conf /etc/httpd/conf/httpd.conf
COPY ./apache/userdir.conf /etc/httpd/conf.d/userdir.conf
COPY ./php/php.ini /etc/php.ini

# CMD ["/usr/sbin/httpd","-DFOREGROUND"]