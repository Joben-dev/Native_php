# Use an official PHP image as the base
FROM php:8.0-fpm

# Install system dependencies and PHP extensions
RUN apt-get update && apt-get install -y libpng-dev libjpeg-dev libfreetype6-dev zip git \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo pdo_mysql

# Set the working directory
WORKDIR /var/www

# Copy the application files into the container
COPY . .

# Install Composer (if needed for Laravel)
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install PHP dependencies using Composer
RUN composer install --no-dev --optimize-autoloader

# Expose port 80 to be accessible from outside
EXPOSE 80

# Start the PHP server
CMD ["php", "-S", "0.0.0.0:80", "-t", "public"]
