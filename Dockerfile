FROM php:8.2-fpm

# Install system dependencies
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

# Copy entire Laravel project
COPY . .

# ✅ Fix file ownership + permissions
RUN chown -R www-data:www-data storage bootstrap/cache \
 && chmod -R ug+rwx storage bootstrap/cache public

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Replace default Nginx config with our Laravel config
RUN rm /etc/nginx/sites-enabled/default
COPY nginx.conf /etc/nginx/conf.d/default.conf

# Supervisor config to run both nginx + php-fpm
COPY supervisord.conf /etc/supervisor/conf.d/supervisord.conf

# Expose web port
EXPOSE 80

# Start both PHP-FPM and Nginx via supervisor
CMD ["/usr/bin/supervisord"]
