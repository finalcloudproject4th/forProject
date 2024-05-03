FROM ubuntu
RUN apt-get update && apt-get install -y -q nginx
COPY *.html /var/www/html/
COPY css/ /var/www/html/
COPY images/ /var/www/html/
COPY js/ /var/www/html/
CMD ["nginx", "-g", "daemon off; " ]
