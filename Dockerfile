# Usa PHP 8.2 con FPM
FROM php:8.2-fpm

# Instala dependencias necesarias para WordPress
RUN apt-get update && apt-get install -y \
    unzip \
    curl \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libonig-dev \
    libzip-dev \
    mariadb-client \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd mbstring zip pdo pdo_mysql mysqli

# Copia el archivo de configuración de PHP (Opcional)
COPY php/php.ini /usr/local/etc/php/conf.d/custom.ini

# Configura permisos para WordPress
RUN usermod -u 1000 www-data

# Ajusta permisos para que WordPress pueda escribir archivos
RUN chown -R www-data:www-data /var/www/html && chmod -R 755 /var/www/html

# Establece el directorio de trabajo
WORKDIR /var/www/html
