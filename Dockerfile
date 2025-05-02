# Base PHP image
FROM php:8.2-fpm

# Install required system packages
RUN apt-get update && apt-get install -y \
    nginx \
    curl \
    git \
    unzip \
    zip \
    supervisor \
    libonig-dev \
    libzip-dev \
    libxml2-dev \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    && docker-php-ext-install pdo pdo_mysql mbstring zip exif pcntl bcmath

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www

# Copy Laravel files (excluding .env for Render)
COPY . .

# Set permissions
RUN chown -R www-data:www-data storage bootstrap/cache \
 && chmod -R ug+rwx storage bootstrap/cache public

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Build config cache (Render will provide env vars)
RUN php artisan config:clear \
 && php artisan config:cache \
 && php artisan route:clear \
 && php artisan view:clear

# Nginx config
RUN rm /etc/nginx/sites-enabled/default
COPY nginx.conf /etc/nginx/conf.d/default.conf

# Supervisor config
COPY supervisord.conf /etc/supervisor/conf.d/supervisord.conf

# Expose HTTP port
EXPOSE 80

# Start Supervisor (runs Nginx + PHP-FPM together)
CMD ["/usr/bin/supervisord"]
