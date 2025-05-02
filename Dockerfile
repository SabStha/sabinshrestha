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

# Copy app files
COPY . .

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Set permissions
RUN chmod -R 775 public storage bootstrap/cache

# Remove default nginx config
RUN rm /etc/nginx/sites-enabled/default

# Add Laravel nginx config
COPY nginx.conf /etc/nginx/conf.d/default.conf

# Add supervisord config to run both Nginx and PHP-FPM
COPY supervisord.conf /etc/supervisor/conf.d/supervisord.conf

EXPOSE 80

CMD ["/usr/bin/supervisord"]
