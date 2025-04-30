# Use the official PHP image with necessary extensions
FROM php:8.2-fpm

# Install system dependencies + Node.js for Vite
RUN apt-get update && apt-get install -y \
    git \
    curl \
    zip \
    unzip \
    libpq-dev \
    libonig-dev \
    libzip-dev \
    libxml2-dev \
    nodejs \
    npm \
    && docker-php-ext-install pdo pdo_mysql mbstring zip exif pcntl bcmath

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www

# Copy project files (do this AFTER system setup)
COPY . .

# Set permissions early
RUN chmod -R 775 storage bootstrap/cache database

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Build Vite assets
RUN npm install && npm run build

# Clear Laravel caches
RUN php artisan config:clear && php artisan route:clear && php artisan view:clear

# Fix Vite build folder permissions (important)
RUN chmod -R 775 public/build

# Expose Laravel's dev port
EXPOSE 8000

# Start Laravel's internal server
CMD php artisan serve --host=0.0.0.0 --port=8000
