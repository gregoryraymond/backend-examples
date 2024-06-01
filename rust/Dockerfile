FROM mcr.microsoft.com/devcontainers/rust:1-1-bullseye as build

COPY . .
RUN cargo build --release

FROM debian:bullseye-slim as final
COPY --from=build ./target/Release/backend .

ENTRYPOINT [ "backend" ]