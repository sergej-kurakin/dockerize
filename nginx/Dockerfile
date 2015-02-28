FROM       zaza/base
RUN        apt-get update && apt-get install -y --no-install-recommends nginx
EXPOSE     80
ADD        nginx.conf /etc/nginx/
ADD        default /etc/nginx/sites-available/
WORKDIR    /var/www
CMD        ["/usr/sbin/nginx"]
