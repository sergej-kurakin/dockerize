FROM   zaza/base
RUN    groupadd -r -g 105 mysql && useradd -r -g mysql -u 105 -d /var/lib/mysql -s /bin/false mysql
RUN    apt-get update && apt-get install -y mysql-server-5.5
ADD    my.cnf /etc/mysql/
RUN    rm -rf /var/lib/mysql/*
COPY   docker-entrypoint.sh /usr/sbin/entrypoint.sh
RUN    chmod a+x /usr/sbin/entrypoint.sh
EXPOSE 3306

ENTRYPOINT ["/usr/sbin/entrypoint.sh"]

CMD    ["mysqld"]
