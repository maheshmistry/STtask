FROM php:7.4-cli

RUN apt-get update -y && apt-get install -y libmcrypt-dev libonig-dev libzip-dev git

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN docker-php-ext-install pdo mbstring zip

WORKDIR /app
COPY ./app/STtask /app

RUN composer install

CMD php bin/console server:run 0.0.0.0:8800