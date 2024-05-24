Install PHP: https://windows.php.net/download#php-8.31
Install composer: https://getcomposer.org/downloadhttps://windows.php.net/download#php-8.://windows.php.net/download#php-8.31~/

pecl install grpc
pecl install protobuf
docker-php-ext-install sockets

Alter php.ini to enable sockets / protobuf.so / grpc.so

composer require vandarpay/laravel-grpc

./vendor/bin/rr get-binary -> creates a rr.yaml