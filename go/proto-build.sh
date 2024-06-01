#!/bin/bash

SCRIPT_DIR=$( cd -- "$( dirname -- "${BASH_SOURCE[0]}" )" &> /dev/null && pwd )

cd $SCRIPT_DIR/../protos

mkdir -p ../go/src/proto/
protoc --experimental_allow_proto3_optional --go_out=../go/src/proto/ --go_opt=paths=source_relative  \
    --go-grpc_out=../go/src/proto/ --go-grpc_opt=paths=source_relative  \
    sample.proto

cd -