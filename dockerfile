FROM php:8.3-apache

# 1. System-Pakete installieren, die Composer zum Entpacken benötigt
RUN apt-get update && apt-get install -y \
    git \
    zip \
    unzip \
    && rm -rf /var/lib/apt/lists/*

# 2. PHP-Datenbank-Erweiterungen installieren
RUN docker-php-ext-install pdo pdo_mysql

# 3. Composer in den Container laden
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# 4. Arbeitsverzeichnis festlegen
WORKDIR /var/www/html

# 5. Umgebungsvariable für Root-Zugriff setzen
ENV COMPOSER_ALLOW_SUPERUSER=1

# 6. JETZT NEU: Sichere Version ^7.0 installieren!
RUN composer require firebase/php-jwt:^7.0 --no-interaction --optimize-autoloader

RUN a2enmod rewrite

