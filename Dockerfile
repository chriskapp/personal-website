FROM php:8.4-apache
MAINTAINER Christoph Kappestein <christoph.kappestein@apioo.de>
LABEL description="Personal website"

ENV COMPOSER_VERSION "2.8.9"
ENV COMPOSER_SHA256 "8e8829ec2b97fcb05158236984bc252bef902e7b8ff65555a1eeda4ec13fb82b"

ENV APACHE_DOCUMENT_ROOT "/var/www/html/public"

# install default packages
RUN apt-get update && apt-get -y install \
    wget \
    git \
    cron \
    certbot \
    python3-certbot-apache \
    libcurl3-dev \
    libzip-dev \
    libonig-dev

# install php extensions
RUN docker-php-ext-install \
    bcmath \
    curl \
    zip \
    mbstring

# install composer
RUN wget -O /usr/bin/composer https://getcomposer.org/download/${COMPOSER_VERSION}/composer.phar
RUN echo "${COMPOSER_SHA256} */usr/bin/composer" | sha256sum -c -
RUN chmod +x /usr/bin/composer

# adjust apache config
RUN sed -ri -e "s!/var/www/html!${APACHE_DOCUMENT_ROOT}!g" /etc/apache2/sites-available/*.conf
RUN sed -ri -e "s!/var/www/!${APACHE_DOCUMENT_ROOT}!g" /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf
RUN a2enmod rewrite

# install app
COPY . /var/www/html
RUN cd /var/www/html && /usr/bin/composer install
RUN chown -R www-data: /var/www/html
RUN chmod +x /var/www/html/bin/psx

# run commands
RUN cd /var/www/html && ./bin/psx migration:migrate --no-interaction
RUN cd /var/www/html && ./bin/psx blog:update

RUN chmod 777 -R /var/www/html/cache
