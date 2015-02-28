FROM    zaza/base
RUN     apt-get update && apt-get install -y --no-install-recommends php5-fpm php5-redis php5-mysql
EXPOSE  9000
ADD     php-fpm.conf /etc/php5/fpm/
ADD     www.conf /etc/php5/fpm/pool.d/
WORKDIR /var/www
CMD     ["/usr/sbin/php5-fpm"]

