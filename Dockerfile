# Use the official PHP image with necessary extensions
FROM php:8.2-fpm

# Install system dependencies including Node.js & npm for Vite
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

# Set permissions early
RUN chmod -R 775 storage bootstrap/cache database

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Build Vite assets
RUN apt-get update && apt-get install -y nodejs npm
RUN npm install && npm run build

RUN chmod -R 775 storage bootstrap/cache public/build



# Optional: Clear Laravel caches to avoid old config/view issues
RUN php artisan config:clear && php artisan view:clear && php artisan route:clear

# Expose port and start Laravel server
EXPOSE 8000
CMD php artisan serve --host=0.0.0.0 --port=8000
