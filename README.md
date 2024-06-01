# Requirements

## Go

https://go.dev/dl/

```
go install google.golang.org/grpc@latest
go install google.golang.org/protobuf/cmd/protoc-gen-go@v1.28
go install google.golang.org/grpc/cmd/protoc-gen-go-grpc@v1.2
export PATH="$PATH:$(go env GOPATH)/bin"
```

## Rust

https://rustup.rs/

```
cargo install
```

## PHP

Install PHP: https://windows.php.net/download#php-8.31
Install composer: https://getcomposer.org/downloadhttps://windows.php.net/download#php-8.://windows.php.net/download#php-8.31~/

```
pecl install grpc
pecl install protobuf
docker-php-ext-install sockets
```

Alter php.ini to enable sockets / protobuf.so / grpc.so

```
composer require vandarpay/laravel-grpc
```

./vendor/bin/rr get-binary -> creates a rr.yaml

For more specific instructions look at the PHP dockerfile.

## C#

