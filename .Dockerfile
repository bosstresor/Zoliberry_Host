FROM php:8.1-fpm

# Install dependencies
RUN apt-get update && apt-get install -y libzip-dev zip && apt-get clean

# Install Dotenv
RUN composer require symfony/dotenv

# Install PSR-Container
RUN composer require symfony/psr-container

# Copy application code
COPY . ./public

# Set working directory
WORKDIR ./public

# Expose port
EXPOSE 80

# Start the application
CMD ["php", "-S", "0.0.0.0:80"]
