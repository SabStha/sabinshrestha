# Stage 1: Base Laravel + PHP + Nginx + Supervisor
FROM php:8.2-fpm

# Install system and PHP extensions
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

# Copy application source code
COPY . .

# Set correct permissions
RUN chown -R www-data:www-data storage bootstrap/cache \
 && chmod -R ug+rwx storage bootstrap/cache public

# Install Laravel dependencies
RUN composer install --no-dev --optimize-autoloader

# ❌ DO NOT config:cache here — environment is not set at build time!
# Laravel will auto-load from Render-injected env at runtime.

# Nginx config
RUN rm /etc/nginx/sites-enabled/default
COPY nginx.conf /etc/nginx/conf.d/default.conf

# Supervisor config
COPY supervisord.conf /etc/supervisor/conf.d/supervisord.conf

# Expose HTTP port
EXPOSE 80

# Start supervisor (runs PHP-FPM + Nginx together)
CMD ["/usr/bin/supervisord"]
