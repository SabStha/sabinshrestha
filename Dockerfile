# Use PHP base image with necessary extensions
FROM php:8.2-fpm

# Install required PHP extensions and basic tools
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

# Set the working directory
WORKDIR /var/www

# Copy full Laravel project to container
COPY . .

# Ensure static assets exist and check their content
RUN echo "✅ Verifying public assets:" && \
    ls -l public/css && \
    cat public/css/style.css || echo "❌ style.css MISSING"

# Set proper permissions for storage and cache folders
RUN chmod -R 775 storage bootstrap/cache public

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Clear Laravel caches (optional but safe)
RUN php artisan config:clear && php artisan route:clear && php artisan view:clear

# Expose the default Laravel dev server port
EXPOSE 8000

# Start the Laravel development server
CMD php artisan serve --host=0.0.0.0 --port=8000
