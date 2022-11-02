# Dockerfile
FROM php:7.4-apache

# RUN apt-get update \
#     && apt-get install -y --no-install-recommends \
#     && docker-php-ext-install pdo_mysql \
#     && docker-php-ext-install mysqli

COPY 000-default.conf /etc/apache2/sites-available/000-default.conf

COPY _app /var/www/html/
COPY index.php /var/www/html/
COPY rota4.php /var/www/html/rota4/ 
#COPY ENV.env  /var/www/html/ 

#ENV MYSQL_ROOT_PASSWORD=secret
ENV MYSQL_HOST=${MYSQL_HOST}
# #ENV MYSQL_DB=${MYSQL_DB}
ENV MYSQL_DATABASE=${MYSQL_DATABASE}
ENV MYSQL_USERNAME=${MYSQL_USERNAME}
ENV MYSQL_PASSWORD=${MYSQL_PASSWORD}

# ENV MYSQL_HOST localhost
# ENV MYSQL_USERNAME tests
# ENV MYSQL_PASSWORD tests
 

#EXPOSE 80


