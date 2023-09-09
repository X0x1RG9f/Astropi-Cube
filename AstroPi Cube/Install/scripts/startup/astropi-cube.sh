#!/bin/sh

sleep 5
/usr/bin/python /opt/astropi-cube/scripts/monitoring/raspberry.py >> /tmp/astropi-cube.log 2>&1
sleep 2
/usr/bin/python /opt/astropi-cube/scripts/monitoring/modes.py >> /tmp/astropi-cube.log 2>&1
sleep 2
/usr/bin/python /opt/astropi-cube/scripts/monitoring/power_probes.py >> /tmp/astropi-cube.log 2>&1
sleep 2
/usr/bin/python /opt/astropi-cube/scripts/monitoring/dew_probes.py >> /tmp/astropi-cube.log 2>&1
sleep 2
/usr/bin/python /opt/astropi-cube/scripts/monitoring/weather_probes.py >> /tmp/astropi-cube.log 2>&1