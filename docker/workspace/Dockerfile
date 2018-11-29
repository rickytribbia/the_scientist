FROM alpine:3.6

MAINTAINER Tiknil <info@tiknil.com>

RUN apk add --update curl && \
    rm -rf /var/cache/apk/*

ENV WAITFORIT_VERSION="v1.3.1"
RUN curl -o /usr/local/bin/waitforit -sSL https://github.com/maxcnunes/waitforit/releases/download/$WAITFORIT_VERSION/waitforit-linux_amd64 && \
    chmod +x /usr/local/bin/waitforit