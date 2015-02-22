FROM       zaza/base
RUN        apt-get update && apt-get install -y --no-install-recommends nginx
EXPOSE     80
RUN        rm /etc/nginx/sites-enabled/default
ADD        nginx.conf /etc/nginx/
ADD        default /etc/nginx/sites-available/
ADD        docker-entrypoint.sh /usr/sbin/
WORKDIR    /var/www
ENTRYPOINT ["/usr/sbin/docker-entrypoint.sh"]
CMD        ["nginx"]
