FROM composer:2 AS composer-bin

FROM php:8.3-apache-bookworm AS runtime

ENV APACHE_DOCUMENT_ROOT=/var/www/html/public
RUN a2enmod rewrite headers expires deflate && a2dismod status \
    && sed -ri 's/^Listen 80$/Listen 8080/' /etc/apache2/ports.conf \
    && sed -ri 's!VirtualHost \*:80!VirtualHost *:8080!; s!DocumentRoot /var/www/html!DocumentRoot /var/www/html/public!' /etc/apache2/sites-available/000-default.conf \
    && mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini" \
    && docker-php-ext-enable opcache \
    && printf 'expose_php=Off\nopcache.enable=1\n' > "$PHP_INI_DIR/conf.d/portfolio.ini" \
    && install -d -o www-data -g www-data /var/run/apache2 /var/lock/apache2

COPY docker/apache.conf /etc/apache2/conf-available/zz-portfolio.conf
RUN a2enconf zz-portfolio

FROM runtime AS build
RUN apt-get update && apt-get install -y --no-install-recommends unzip && rm -rf /var/lib/apt/lists/*
COPY --from=composer-bin /usr/bin/composer /usr/local/bin/composer
WORKDIR /var/www/html
COPY composer.json composer.lock ./
RUN composer install --no-dev --prefer-dist --no-interaction --no-progress --no-scripts --no-autoloader
COPY app app
COPY artisan artisan
COPY bootstrap bootstrap
COPY config config
COPY database database
COPY public public
COPY resources resources
COPY routes routes
COPY storage storage
RUN composer dump-autoload --no-dev --classmap-authoritative \
    && php artisan view:cache

FROM runtime
WORKDIR /var/www/html
COPY --from=build /var/www/html /var/www/html
RUN chown -R www-data:www-data storage bootstrap/cache
USER www-data
EXPOSE 8080

