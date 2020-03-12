FROM ubuntu:18.04
MAINTAINER Jaedeok Han <hjaedeok@gmail.com>

RUN apt-get update
RUN apt-get install -y apache2 # Install Apache web server (Only 'yes')

# Open HTTP Port
EXPOSE 80

CMD ["apachectl", "-D", "FOREGROUND"]


