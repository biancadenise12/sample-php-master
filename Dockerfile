FROM nimmis/apache-php7

MAINTAINER mgeronimo3@dxc.com

COPY ./*.php /var/www/html/
COPY ./composer* /var/www/html/
COPY ./css/* /var/www/html/css/
COPY ./image/* /var/www/html/image/
COPY ./js/* /var/www/html/js/
COPY ./vendor/* /var/www/html/vendor/