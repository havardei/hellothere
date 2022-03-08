FROM php:apache-buster
RUN docker-php-ext-install mysqli
RUN apt update && apt install git -y
COPY ./docker-php-entrypoint /usr/local/bin/docker-php-entrypoint