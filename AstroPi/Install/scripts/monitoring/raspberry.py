#!/usr/bin/python

import os
import psutil
import time
import sys
sys.path.append('/opt/astropi/scripts/database')
import database
import signal


def exit_properly(self, *args):
	sys.exit(0)


def main():
	signal.signal(signal.SIGINT, exit_properly)
	signal.signal(signal.SIGTERM, exit_properly)

	while True:
		cmd = os.popen("/usr/bin/vcgencmd measure_temp | /bin/grep -Eo '[+-]?[0-9]+([.][0-9]+)?'")

		temperature 	= cmd.read()
		ram		= psutil.virtual_memory().percent
		cpu		= psutil.cpu_percent()
		hdd 		= psutil.disk_usage('/').percent


		data = (temperature, ram, cpu, hdd)
		database.insert('raspberry', data)

		time.sleep(1)



database.clean()
main()

