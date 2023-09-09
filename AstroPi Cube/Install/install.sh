#!/bin/sh


####################################
#           DEPENDENCIES           #
####################################
sudo apt-get update -y
sudo apt-get full-upgrade -y
sudo apt-get install --purge virtualgps
sudo apt-get install git php-fpm mariadb-server php-mysql -y
pip3 install mysql-connector
pip install mysql-connector
pip3 install psutil
pip install psutil
pip3 install adafruit-mcp3008
pip install adafruit-mcp3008


####################################
#           COPY USEFUL            #
####################################
sudo mkdir /opt/astropi-cube/
sudo cp -Rf ./Astropi-Cube/AstroPi\ Cube/Install/scripts/* /opt/astropi-cube/
sudo cp -Rf ./Astropi-Cube/AstroPi\ Cube/Install/config/* /opt/astropi-cube/
sudo cp -f ./Astropi-Cube/AstroPi\ Cube/Install/config/astroberry /etc/nginx/sites-enabled/astroberry
sudo rm -Rf /var/www/html
sudo mkdir /var/www/html/
sudo mkdir /var/www/html/astropi-cube/
sudo cp -Rf ./Astropi-Cube/AstroPi\ Cube/Install/www/* /var/www/html/astropi-cube/
sudo chmod -Rf 755 /var/www/html/astropi-cube/*
sudo chmod -Rf 755 /opt/astropi-cube/*


####################################
#       REMOVE NOT NECESSARY       #
####################################
sudo rm -Rf ./Astropi-Cube
sudo rm -f ./Astropi-Cube/AstroPi\ Cube/Install/config/astroberry


####################################
#      DEPENDENCIES AGAIN          #
####################################
git clone https://github.com/X0x1RG9f/AdminLTE.git /var/www/html/astropi-cube/
git clone https://github.com/X0x1RG9f/BitBangingDS18B20.git /opt/astropi-cube/DS18B20/


####################################
#           CONFIGURATION          #
####################################
sudo echo "www-data ALL=(ALL) NOPASSWD:/sbin/shutdown" >> /etc/sudoers
sudo echo "www-data ALL=(ALL) NOPASSWD:/sbin/reboot" >> /etc/sudoers
sudo sed -i -e "s/dtoverlay/#dtoverlay/g" /boot/config.txt
sudo /usr/bin/mysql -uroot < /opt/astropi-cube/config/mysql.file

####################################
#          STARTUP CONFIG          #
####################################
sudo cp ./Astropi-Cube/AstroPi\ Cube/Install/scripts/startup/astropicube.service /etc/systemd/system/
/bin/systemctl enable astropicube.service

####################################
#         RESTART & DONE!          #
####################################
#sudo service php*-fpm restart
#sudo service nginx restart
reboot
