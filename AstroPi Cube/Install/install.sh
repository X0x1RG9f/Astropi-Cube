#!/bin/sh

[ "$PWD" != "/opt/astropi" ] || { echo "Script not executed from /opt/astropi/. Exiting." >&2; exit 1; }

sudo apt-get update -y
sudo apt-get full-upgrade -y

sudo apt-get install git php-fpm mariadb-server php-mysql -y
pip3 install mysql-connector
pip install mysql-connector
pip3 install psutil
pip install psutil
pip3 install adafruit-mcp3008
pip install adafruit-mcp3008

cp ./config/astroberry /etc/nginx/sites-enabled/astroberry

sudo service php*-fpm restart
sudo service nginx restart

# cp * /opt/astropi ?
# chmod -R 755 /opt/astropi

echo "www-data ALL=(ALL) NOPASSWD:/sbin/shutdown" >> /etc/sudoers
echo "www-data ALL=(ALL) NOPASSWD:/sbin/reboot" >> /etc/sudoers

git clone https://github.com/X0x1RG9f/AdminLTE.git /var/www/html/astropi/
git clone https://github.com/X0x1RG9f/BitBangingDS18B20.git /opt/astropi/DS18B20/

chmod -Rf 755 /var/www/html/astropi/*
chmod -Rf 755 /opt/astropi/*


line="@reboot sleep 5; /usr/bin/python /opt/astropi/scripts/monitoring/raspberry.py >> /tmp/astropi.log 2>&1"
(crontab -l; echo "$line" ) | crontab -
line="@reboot sleep 7; /usr/bin/python /opt/astropi/scripts/monitoring/modes.py >> /tmp/astropi.log 2>&1"
(crontab -l; echo "$line" ) | crontab -
line="@reboot sleep 9; /usr/bin/python /opt/astropi/scripts/monitoring/power_probes.py >> /tmp/astropi.log 2>&1"
(crontab -l; echo "$line" ) | crontab -
line="@reboot sleep 11; /usr/bin/python /opt/astropi/scripts/monitoring/dew_probes.py >> /tmp/astropi.log 2>&1"
(crontab -l; echo "$line" ) | crontab -
line="@reboot sleep 11; /usr/bin/python /opt/astropi/scripts/monitoring/weather_probes.py >> /tmp/astropi.log 2>&1"
(crontab -l; echo "$line" ) | crontab -

sed -i -e "s/dtoverlay/#dtoverlay/g" /boot/config.txt
reboot

