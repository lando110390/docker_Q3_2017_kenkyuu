FROM nginx

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

RUN mkdir /var/www
RUN mkdir /var/www/html
RUN mkdir /var/www/public
RUN mkdir /var/www/html/yii2_basic

ADD ./key/id_rsa /root/.ssh/id_rsa
RUN git config --global http.sslVerify false
RUN git clone https://github.com/lando110390/yii2_basic.git /var/www/html/yii2_basic
WORKDIR /var/www/html
RUN chmod -R 777 /var/www

EXPOSE 80