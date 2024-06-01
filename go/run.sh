#!/bin/sh

./proto-build.sh

GOPATH=$PWD
go build src/*.go
go run src/main.go src/server.go