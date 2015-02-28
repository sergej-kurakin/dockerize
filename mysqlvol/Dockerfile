FROM    zaza/base
RUN     groupadd -r -g 105 mysql && useradd -r -g mysql -u 105 -d /var/lib/mysql -s /bin/false mysql
RUN     mkdir -p /var/lib/mysql && chown -R mysql:mysql /var/lib/mysql
VOLUME  ["/var/lib/mysql"]
USER    mysql
CMD     ["/bin/true"]
