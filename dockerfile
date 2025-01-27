# Use the official PHP image
FROM php:8.0-apache

# Copy the project files into the container
COPY . /var/www/html/

# Expose port 80 to the outside world
EXPOSE 80

# Start Apache server
CMD ["apache2-foreground"]
