FROM php:7.2-apache
RUN docker-php-ext-install mysqli
RUN docker-php-ext-install pdo_mysql
WORKDIR /var/www/html
COPY . /var/www/html
EXPOSE 80