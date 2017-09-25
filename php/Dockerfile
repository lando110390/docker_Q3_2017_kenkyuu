FROM nanoninja/php-fpm

MAINTAINER landth

# Get repository and install wget and vim
RUN apt-get update
RUN apt-get -y install autoconf
RUN apt-get -y install curl
RUN apt-get -y install git
RUN apt-get -y install subversion
RUN apt-get -y install libmcrypt-dev
RUN apt-get -y install libpng-dev
RUN apt-get -y install libxslt-dev
RUN apt-get -y install openssh-client
RUN apt-get -y install make
RUN apt-get -y install unzip
RUN apt-get -y install wget
RUN apt-get -y install vim

ADD ./key/id_rsa /root/.ssh/id_rsa
RUN git config --global http.sslVerify false
RUN git clone https://github.com/lando110390/yii2_basic.git

RUN chmod -R 777 /var/www

#ADD ./php/run.sh /usr/local/bin/run.sh
#RUN chmod +x /usr/local/bin/run.sh
#CMD ["/usr/local/bin/run.sh"]


