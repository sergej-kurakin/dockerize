FROM    zaza/base
RUN     groupadd -r -g 105 redis && useradd -r -g redis -u 105 -d /var/lib/redis -s /bin/false redis
RUN     apt-get update && apt-get install -y --no-install-recommends redis-server
ADD     redis.conf /etc/redis/
EXPOSE  6379
WORKDIR /var/lib/redis
USER    redis
CMD     ["/usr/bin/redis-server", "/etc/redis/redis.conf"]

