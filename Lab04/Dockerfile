FROM php:7.4-apache

RUN apt-get update && apt-get install -y unzip && rm -rf /var/lib/apt/lists/*

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install the PHP extension required for dotenv
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

COPY . /var/www/html

WORKDIR /var/www/html

RUN composer require vlucas/phpdotenv
