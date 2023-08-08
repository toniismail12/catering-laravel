# Use an official PHP image as the base image
FROM php:8.0-fpm

# Set the working directory inside the container
WORKDIR /var/www/html

# Install system dependencies
RUN apt-get update && apt-get install -y \
    curl \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libzip-dev \
    unzip

# Install PHP extensions
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd pdo pdo_mysql zip

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copy the Laravel application files to the container
COPY . .

# Install Composer dependencies
RUN composer install --no-interaction

# Set permissions for Laravel storage and bootstrap cache directories
RUN chown -R www-data:www-data storage bootstrap/cache

# Expose port 9000 and start the PHP-FPM server
EXPOSE 5007
CMD ["php-fpm"]

# Optionally, you might want to customize additional settings, such as:
# - Environment variables
# - Nginx or Apache configuration (if you're using a web server)
