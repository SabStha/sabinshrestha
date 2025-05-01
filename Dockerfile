# Use PHP base image with necessary extensions
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

# Copy project files
COPY . .

# Set permissions before build
RUN chmod -R 775 storage bootstrap/cache database

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Install Node/Vite dependencies
RUN npm install && npm run build --verbose && ls -l public/build && cat public/build/manifest.json


# Set correct permissions for Vite build output
RUN chmod -R 775 public/build

# Laravel cache clear (optional but safe)
RUN php artisan config:clear && php artisan view:clear && php artisan route:clear

# Expose port and start Laravel dev server
EXPOSE 8000
CMD php artisan serve --host=0.0.0.0 --port=8000
