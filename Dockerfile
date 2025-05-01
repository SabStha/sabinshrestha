# Stage 1: Build Vite Assets
FROM node:18 as nodebuilder

WORKDIR /app
COPY package*.json vite.config.js ./
COPY resources ./resources
RUN npm install && npm run build

# Stage 2: PHP + Laravel
FROM php:8.2-fpm

# System dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    zip \
    unzip \
    libpq-dev \
    libonig-dev \
    libzip-dev \
    libxml2-dev \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    nodejs \
    npm \
    && docker-php-ext-install pdo pdo_mysql mbstring zip exif pcntl bcmath gd

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www

# Copy app files
COPY . .

# Copy Vite build output from Node stage
COPY --from=nodebuilder /app/public/build ./public/build

# Set permissions
RUN chmod -R 775 storage bootstrap/cache public/build

# Laravel backend install
RUN composer install --no-dev --optimize-autoloader
RUN php artisan config:clear && php artisan route:clear && php artisan view:clear

EXPOSE 8000
CMD php artisan serve --host=0.0.0.0 --port=8000
