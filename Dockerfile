# Base Image
FROM ubuntu:22.04

# apache2, php, mysql install
RUN apt-get update && \
DEBIAN_FRONTEND="noninteractive" apt-get install -y apache2 php mysql-server php-mysql && \
apt-get clean && \
rm -rf /var/lib/apt/lists/*

# apache2 start
RUN a2enmod rewrite && service apache2 start

# Copy host file to container
COPY *.html /var/www/html/
COPY *.php /var/www/html/
COPY js/ /var/www/html/js/
COPY css/ /var/www/html/css/
COPY images/ /var/www/html/images/

# Port Open

EXPOSE 80

# Run Apache2
CMD ["apache2ctl", "-D", "FOREGROUND"]


