FROM php:7.2-fpm

RUN apt-get update && apt-get install -y \
  libmcrypt-dev \
  libcurl4-gnutls-dev \
  zlib1g-dev \
  libz-dev \
  libzip-dev \
  libxml2-dev \
  libpng-dev \
  libonig-dev \
  && docker-php-ext-install -j$(nproc) curl \
  && docker-php-ext-install -j$(nproc) zip \
  && docker-php-ext-install -j$(nproc) pdo_mysql \
  && docker-php-ext-install -j$(nproc) mbstring \
  && docker-php-ext-install -j$(nproc) soap \
  && docker-php-ext-install -j$(nproc) gd \
  && pecl install -o -f redis \
  && rm -rf /tmp/pear \
  && echo "extension=redis.so" > /usr/local/etc/php/conf.d/redis.ini

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN apt-get install -y libcurl4-openssl-dev pkg-config libssl-dev zip

RUN apt-get install libmcrypt-dev
RUN pecl install mcrypt && docker-php-ext-enable mcrypt
