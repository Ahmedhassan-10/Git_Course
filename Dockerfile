FROM php:8.2-apache

# Install mysqli for MySQL connection
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

# Copy your PHP app into the container
COPY . /var/www/html/

EXPOSE 80
