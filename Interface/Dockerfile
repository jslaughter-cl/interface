
# Use an official PHP-FPM image
FROM php:8.3-fpm-alpine

# Install system dependencies and PHP extensions
RUN apk update && apk add --no-cache \
    nginx \
    git \
    curl \
    postgresql-dev \
    mysql-client \
    zip \
    unzip \
    libpng-dev \
    libjpeg-turbo-dev \
    freetype-dev \
    imagemagick-dev \
    icu-dev && docker-php-ext-install pdo_mysql pdo_pgsql mbstring exif pcntl bcmath opcache gd

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set the working directory
WORKDIR /var/www/html

# Expose ports
EXPOSE 9000

# define the application directory
WORKDIR /app
