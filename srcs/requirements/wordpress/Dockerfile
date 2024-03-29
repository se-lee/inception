FROM debian:buster

RUN apt-get update -y && apt-get upgrade -y

RUN apt-get install -y php-fpm php-mysql curl php-mbstring php-zip php-gd php-xml php-pear php-gettext php-cgi \
	&& mkdir -p /var/www/html/wordpress && rm -rf /etc/php/7.3/fpm/pool.d/www.conf

ARG	DB_NAME=${DB_NAME}
ARG DB_USER=${DB_USER}
ARG DB_PASS=${DB_PASS}
ARG DB_HOST=${DB_HOST}

ENV WP_ADMIN=${WP_ADMIN}
ENV WP_APASS=${WP_APASS}
ENV WP_AMAIL=${WP_AMAIL}
ENV WP_USER=${WP_USER}
ENV WP_PASS=${WP_APASS}
ENV WP_MAIL=${WP_MAIL}
ENV WP_TITLE=${WP_TITLE}
ENV WP_URL=${WP_URL}

# copy the www.conf file in php/7.3/fpm/pool.d/
COPY /config/www.conf /etc/php/7.3/fpm/pool.d/www.conf

RUN service php7.3-fpm start \
	&& curl -O https://wordpress.org/wordpress-5.9.2.tar.gz \
	&& mkdir -p /var/www/html/ \
	&& tar xvf wordpress-5.9.2.tar.gz --directory /var/www/html/ \
	&& rm wordpress-5.9.2.tar.gz

RUN curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar \
	&& chmod +x wp-cli.phar \
	&& mv wp-cli.phar /usr/local/bin/wp

COPY /config/wp-config.php /var/www/html/wordpress/wp-config.php

RUN sed -i "s/db_name_here/${DB_NAME}/g" /var/www/html/wordpress/wp-config.php \
	&& sed -i "s/db_user_here/${DB_USER}/g" /var/www/html/wordpress/wp-config.php \
	&& sed -i "s/db_pass_here/${DB_PASS}/g" /var/www/html/wordpress/wp-config.php \
	&& sed -i "s/db_host_here/${DB_HOST}/g" /var/www/html/wordpress/wp-config.php

COPY /script/run.sh /

EXPOSE 9000

CMD [ "sh", "/run.sh" ]
