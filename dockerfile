FROM ubuntu:20.04

RUN apt-get update
RUN apt install software-properties-common -y
# Step 1. Install PHP (Ubuntu)
RUN add-apt-repository ppa:ondrej/php -y
RUN apt-get update 
RUN apt-get install php8.0 php8.0-dev php8.0-xml -y --allow-unauthenticated

# step 2. install ODBC Driver
RUN su
RUN curl https://packages.microsoft.com/keys/microsoft.asc | apt-key add -
RUN curl https://packages.microsoft.com/config/ubuntu/20.04/prod.list > /etc/apt/sources.list.d/mssql-release.list
RUN exit

RUN apt-get update
RUN ACCEPT_EULA=Y apt-get install -y msodbcsql17
RUN ACCEPT_EULA=Y apt-get install -y mssql-tools
RUN echo 'export PATH="$PATH:/opt/mssql-tools/bin"' >> ~/.bashrc
SHELL ["/bin/bash", "-c"]
RUN apt-get install -y unixodbc-dev

# Step 3. Install the PHP drivers for Microsoft SQL Server (Ubuntu)
RUN pecl install sqlsrv
RUN pecl install pdo_sqlsrv
RUN su
RUN printf "; priority=20\nextension=sqlsrv.so\n" > /etc/php/8.0/mods-available/sqlsrv.ini
RUN printf "; priority=30\nextension=pdo_sqlsrv.so\n" > /etc/php/8.0/mods-available/pdo_sqlsrv.ini
RUN exit
RUN phpenmod -v 8.0 sqlsrv pdo_sqlsrv

# Step 4. Install Apache and configure driver loading (Ubuntu)
RUN su
RUN apt-get install libapache2-mod-php8.0 apache2
RUN a2dismod mpm_event
RUN a2enmod mpm_prefork
RUN a2enmod php8.0
RUN exit

# Step 5. Restart Apache and test the sample script (Ubuntu)
RUN service apache2 restart

# install composer
RUN apt update
RUN apt install wget php-cli php-zip unzip -y
RUN wget -O composer-setup.php https://getcomposer.org/installer
RUN php composer-setup.php --install-dir=/usr/local/bin --filename=composer



# install locales
RUN apt-get install -y locales && echo "en_US.UTF-8 UTF-8" > /etc/locale.gen && locale-gen



EXPOSE 80

WORKDIR /var/www/html/

CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]

# install nano
RUN apt-get install nano git -y
# clone project repo
RUN git clone https://github.com/abelkm99/IMS.git
RUN mv IMS ims
RUN cd /ims
RUN git checkout docker-setup
RUN cp ./ims/apache2.conf /etc/apache2/
RUN a2enmod rewrite
RUN service apache2 restart







# # Microsoft ODBC 17
# RUN curl https://packages.microsoft.com/keys/microsoft.asc | apt-key add -
# RUN curl https://packages.microsoft.com/config/ubuntu/18.04/prod.list > /etc/apt/sources.list.d/mssql-release.list
# RUN apt-get update
# RUN ACCEPT_EULA=Y apt-get -y install msodbcsql17
# RUN apt-get -y install unixodbc-dev

# # 7.3
# RUN apt-get -y install php-pear php7.3-dev
# RUN update-alternatives --set php /usr/bin/php7.3
# RUN update-alternatives --set phar /usr/bin/phar7.3
# RUN update-alternatives --set phar.phar /usr/bin/phar.phar7.3
# RUN update-alternatives --set phpize /usr/bin/phpize7.3
# RUN update-alternatives --set php-config /usr/bin/php-config7.3

# RUN pecl uninstall -r sqlsrv
# RUN pecl uninstall -r pdo_sqlsrv
# RUN pecl -d php_suffix=7.3 install sqlsrv
# RUN pecl -d php_suffix=7.3 install pdo_sqlsrv
# RUN printf "; priority=30\nextension=sqlsrv.so\n" > /etc/php/7.3/mods-available/sqlsrv.ini
# RUN printf "; priority=40\nextension=pdo_sqlsrv.so\n" > /etc/php/7.3/mods-available/pdo_sqlsrv.ini
# RUN phpenmod -v 7.3 sqlsrv pdo_sqlsrv


