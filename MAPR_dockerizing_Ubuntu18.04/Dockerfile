FROM ubuntu:latest
RUN apt-get update \
&&  apt-get -y install vim openssh-server wget apt-transport-https ca-certificates curl software-properties-common openjdk-8-jdk \
&&  mkdir /var/run/sshd

## replace sshd_config
RUN  sed -i 's/#PermitRootLogin prohibit-password/PermitRootLogin yes/' /etc/ssh/sshd_config \
&&   sed -i 's/UsePAM yes/#UsePAM yes/g' /etc/ssh/sshd_config
## set password
RUN  echo "root:1234" | chpasswd \
&&   useradd -ms /bin/bash mapr \
&&   echo "mapr:1234" | chpasswd \
&&   mkdir /root/.ssh

EXPOSE 22

## MAPR GPG key add
RUN wget -O - https://package.mapr.com/releases/pub/maprgpg.key | apt-key add

## 1. MAPR v, MEP add 
RUN echo deb https://package.mapr.com/releases/v5.2.2/ubuntu binary trusty >> /etc/apt/sources.list
RUN echo deb https://package.mapr.com/releases/MEP/MEP-5.0.2/ubuntu binary trusty >> /etc/apt/sources.list
RUN apt-get update

## 1.1 JAVA_HOME
ENV JAVA_HOME=/usr/lib/jvm/java-1.8.0-openjdk-amd64
ENV PATH="${JAVA_HOME}/bin:${PATH}"


## 2. mapr package install
RUN apt-get install -y mapr-fileserver mapr-cldb mapr-webserver mapr-zookeeper mapr-resourcemanager mapr-nodemanager

CMD ["/usr/sbin/sshd", "-D"]
