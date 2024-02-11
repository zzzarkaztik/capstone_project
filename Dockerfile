FROM richarvey/nginx-php-fpm:3.1.4

COPY . .

# Image config
ENV SKIP_COMPOSER 1
ENV WEBROOT /var/www/html/public
ENV PHP_ERRORS_STDERR 1
ENV RUN_SCRIPTS 1
ENV REAL_IP_HEADER 1

# Laravel config
ENV APP_ENV production
ENV APP_DEBUG false
ENV APP_KEY base64:Jwo0AbFESIq6b/hafWC+f7wJPduZPLkny0iTj0xXxD8=
ENV LOG_CHANNEL stderr
ENV DB_CONNECTION pgsql
ENV DB_HOST dpg-cn4g20vqd2ns73em3db0-a.singapore-postgres.render.com
ENV DB_PORT 5432
ENV DB_DATABASE bus_terminal_8c7h
ENV DB_USERNAME root
ENV DB_PASSWORD iiudIAn4bcX721da8A7VuBiRp3JqJSI8
ENV MYSQL_ATTR_SSL_CA cacert-2023-12-12.pem

# Allow composer to run as root
ENV COMPOSER_ALLOW_SUPERUSER 1

CMD ["/start.sh"]