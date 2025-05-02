FROM php:8.2-fpm

# Install system packages and PHP extensions
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

# Copy full Laravel project
COPY . .

# Set permissions and correct ownership
RUN chown -R www-data:www-data storage bootstrap/cache \
 && chmod -R ug+rwx storage bootstrap/cache public

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# ✅ Clear and rebuild Laravel config to ensure correct APP_URL
RUN php artisan config:clear \
 && php artisan config:cache \
 && php artisan route:clear \
 && php artisan view:clear

# Replace default Nginx config with Laravel-specific config
RUN rm /etc/nginx/sites-enabled/default
COPY nginx.conf /etc/nginx/conf.d/default.conf

# Copy supervisord config to run both PHP-FPM and Nginx
COPY supervisord.conf /etc/supervisor/conf.d/supervisord.conf

# Expose port 80 for HTTP
EXPOSE 80

# Start Supervisor (which runs nginx + php-fpm)
CMD ["/usr/bin/supervisord"]
