#!/bin/bash

set -e

if [ "$1" = 'nginx' ]; then
  PHP_UPSTREAM="${PHP5_PORT_9000_TCP_ADDR}:${PHP5_PORT_9000_TCP_PORT}"
  sed -e "s/%%%PHP5_FPM%%%/$PHP_UPSTREAM/g" /etc/nginx/sites-available/default > /etc/nginx/sites-enabled/default
  exec /usr/sbin/nginx
fi

exec "$@"
