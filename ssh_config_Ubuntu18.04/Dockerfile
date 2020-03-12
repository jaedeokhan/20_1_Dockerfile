FROM ubuntu:latest

RUN apt-get update \
&&  apt-get -y install vim openssh-server \
&&  mkdir /var/run/sshd 

## replace sshd_config
RUN  sed -i 's/#PermitRootLogin prohibit-password/PermitRootLogin yes/' /etc/ssh/sshd_config \
RUN  sed -i 's/UsePAM yes/#UsePAM yes/g' /etc/ssh/sshd_config

## set password
RUN  echo "root:1234" | chpasswd \
&&   mkdir /root/.ssh

EXPOSE 22

CMD ["/usr/sbin/sshd", "-D"]

