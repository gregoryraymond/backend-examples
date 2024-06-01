from mcr.microsoft.com/devcontainers/php:1-8.2-bullseye

RUN pecl install grpc
RUN pecl install protobuf
RUN docker-php-ext-install sockets

RUN cp /usr/local/etc/php/php.ini-development /usr/local/etc/php/php.ini && \
    sed -i 's/;extensions=sockets/extensions=sockets/g' /usr/local/etc/php/php.ini && \
    sed -i '958 extensions=grpc.so' /usr/local/etc/php/php.ini && \
    sed -i '958 extensions=protobuf.so' /usr/local/etc/php/php.ini

RUN apt-get update && apt-get install -y protobuf-compiler