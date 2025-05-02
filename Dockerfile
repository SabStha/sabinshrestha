# Use official PHP image with necessary extensions
FROM php:8.2-fpm

# Install PHP extensions and system dependencies
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

# Copy Laravel project into the container
COPY . .

# 🔥 Force-copy style.css to ensure it's inside the image
COPY public/css/style.css public/css/style.css

# 🧪 Debug: show contents of public/css
RUN echo "🚨 DEBUG: public/css contents:" && ls -l public/css && cat public/css/style.css || echo "❌ FILE NOT FOUND"

# Set proper permissions
RUN chmod -R 775 public storage bootstrap/cache

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Clear Laravel caches
RUN php artisan config:clear && php artisan view:clear && php artisan route:clear

# Expose default Laravel port
EXPOSE 8000

# Start Laravel dev server
CMD php artisan serve --host=0.0.0.0 --port=8000
