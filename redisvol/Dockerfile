FROM    zaza/base
RUN     groupadd -r -g 105 redis && useradd -r -g redis -u 105 -d /var/lib/redis -s /bin/false redis
RUN     mkdir -p /var/lib/redis && chown -R redis:redis /var/lib/redis
VOLUME  ["/var/lib/redis"]
USER    redis
CMD     ["/bin/true"]
