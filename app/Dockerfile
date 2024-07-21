FROM php:8.3.6-fpm-bullseye

# Install system dependencies
RUN apt-get update && apt-get install -y git unzip curl

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Install NVM
# nvm env vars
##RUN mkdir -p /usr/local/nvm
##ENV NVM_DIR /usr/local/nvm
# IMPORTANT: set the exact version
##ENV NODE_VERSION v16.17.0
RUN curl -o- https://raw.githubusercontent.com/nvm-sh/nvm/v0.39.1/install.sh | bash
# RUN . /root/.bashrc
# RUN nvm install v18.20.4
##RUN /bin/bash -c "source $NVM_DIR/nvm.sh && nvm install $NODE_VERSION && nvm use --delete-prefix $NODE_VERSION"
# add node and npm to the PATH
##ENV NODE_PATH $NVM_DIR/versions/node/$NODE_VERSION/bin
##ENV PATH $NODE_PATH:$PATH
#-RUN npm -v
#-RUN node -v
#-RUN nvm -v
# Node install
# RUN nvm install 22.2.0
# RUN npm install

# RUN chown -R www-data:www-data /var/www/storage

# Set working directory
WORKDIR /var/www/public

# -- After creation commands
# docker ps
# docker exec -it <CONTAINER ID for IMAGE docker-app> sh
# . /root/.bashrc
# nvm install v18.20.4
# Version Checks -->
## npm -v
#10.7.0
## nvm -v
#0.39.1
## node -v
#v18.20.4

# --Database Migrate and Clear Cache (run in same container)
# php artisan migrate
# php artisan optimize:clear

# npm install @vitejs/plugin-react-refresh --save
# npm run build
