FROM ubuntu
RUN apt-get update && apt-get install -y -q nginx
COPY *.html /var/www/html/
COPY css/ /var/www/html/css/
COPY js/ /var/www/html/js/
COPY images/ /var/www/html/images/
CMD ["nginx", "-g", "daemon off; " ]
