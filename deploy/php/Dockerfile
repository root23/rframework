FROM php:8.2-fpm
WORKDIR /app

RUN apt-get update && apt-get install -y \
    supervisor \
    unzip \
    git \
    wget \
    ntp \
    lvm2 \
    libmcrypt-dev \
    libxml2-dev \
    libgmp-dev \
    libzip-dev \
    libpng-dev \
    gnupg \
    iputils-ping \
    cron

WORKDIR /app

RUN docker-php-ext-install opcache zip gmp gd pdo_mysql intl sockets bcmath
RUN docker-php-ext-enable opcache zip gmp gd pdo_mysql intl sockets bcmath

#COPY ./deploy/php/php.ini $PHP_INI_DIR/php.ini

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer --version

# fpm config
COPY ./deploy/php-fpm.conf /usr/local/etc/php-fpm.d/default.conf

# opcache config
#COPY ./deploy/php/opcache.ini /usr/local/etc/php/conf.d/opcache.ini

# supervisor config
#COPY ./deploy/supervisor/queue.conf /etc/supervisor/conf.d/queue.conf

# run script
COPY ./deploy/run.sh /app/run.sh
