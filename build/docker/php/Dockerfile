FROM php:7.0-fpm

# Install some required tools
RUN apt-get update && apt-get install -y sudo less

# Run this container as "webuser"
RUN groupadd -r webuser && useradd -r -g webuser webuser
RUN usermod -aG www-data webuser
USER webuser
