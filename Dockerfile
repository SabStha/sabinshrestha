# Use PHP base image with Laravel-friendly extensions
FROM php:8.2-fpm

# Install only essential system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    zip \
    unzip \
    libonig-dev \
    libzip-dev \
    libxml2-dev \
    libpq-dev \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    && docker-php-ext-install pdo pdo_mysql mbstring zip exif pcntl bcmath

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www

# Copy entire Laravel project
COPY . .

# Set file permissions
RUN chmod -R 775 storage bootstrap/cache public

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Clear Laravel caches
RUN php artisan config:clear && php artisan route:clear && php artisan view:clear

# Expose Laravel development port
EXPOSE 8000

# Start the Laravel app
CMD php artisan serve --host=0.0.0.0 --port=8000
