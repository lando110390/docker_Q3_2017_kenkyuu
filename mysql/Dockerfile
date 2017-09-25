FROM mysql

RUN apt-get update
RUN apt-get install mysql-server

# Environment variables
#ENV MYSQL_ROOT_PASSWORD ""

# Allows you to change the value of "max_allowed_packet"
#ADD ["mysqlconf/gatewaymy.cnf", "/etc/mysql/conf.d/conf_mysql.cnf"]

# Create Database
RUN mkdir /usr/sql
RUN chmod 644 /usr/sql

ADD ["source.sql", "/usr/sql/sources.sql"]
#RUN chmod 777 /var/run/mysqld/mysqld.sock
RUN mkdir /share
RUN ln -s /var/run/mysqld/mysqld.sock /share/mysqld.sock
RUN rm /etc/mysql/mysql.conf.d/mysqld.cnf
COPY ./mysql/mysqld.cnf /etc/mysql/mysql.conf.d/mysqld.cnf




RUN /etc/init.d/mysql start

#RUN mysql_config_editor set --login-path=local --host=localhost --user=root --password
#RUN mysql --login-path=local  -e "CREATE DATABASE lba;"
RUN mysql -u root -p -e "CREATE DATABASE lba;"

#RUN mysql -u root -p12345 -e "show databases;"
#RUN CREATE DATABASE lba;
#RUN mysql -u root -p -D api < /usr/sql/sources.sql








