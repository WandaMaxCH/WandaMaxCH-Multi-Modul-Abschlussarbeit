# Use official PHP image with Apache
FROM php:8.2-apache

# Install additional PHP extensions if needed
# Based on your reservation system, you likely need database support:
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Uncomment other extensions if needed:
# RUN docker-php-ext-install gd
# RUN docker-php-ext-install zip
# RUN docker-php-ext-install curl

# Enable Apache mod_rewrite (useful for clean URLs)
RUN a2enmod rewrite

# Set working directory
WORKDIR /var/www/html

# Copy your application files to the container
COPY . /var/www/html/

# Set proper permissions
RUN chown -R www-data:www-data /var/www/html
RUN chmod -R 755 /var/www/html

# Expose port 80
EXPOSE 80

# Start Apache in foreground
CMD ["apache2-foreground"]