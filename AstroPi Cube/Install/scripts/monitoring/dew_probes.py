#!/usr/bin/python

import os
import glob
import time
import re
import sys
import math
from threading import Thread
sys.path.append('/opt/astropi-cube/scripts/database')
import database
import RPi.GPIO as GPIO
import signal

# Pins definitions
PINS 		= [24,23,4,22]

# Set up pins
#GPIO.setwarnings(False)
#GPIO.setmode(GPIO.BCM)

#for PIN in PINS:
#	GPIO.setup(PIN, GPIO.OUT)

data = ["ON",-100,0,0,-100,0,0,-100,0,0,-100,0,0]
active = False

def exit_properly(self, *args):
        GPIO.cleanup()
        sys.exit(0)

def get_temperature(pin,pos):
	global data
	global active

	try:
		a = os.popen('/opt/astropi-cube/DS18B20/DS18B20Scan -gpio ' + str(pin) + ' -12bits')
		x = re.search(r".*Temperature:\s*(\d*\.\d*)", a.read())
		if (x.groups()[0] != None):
			data[pos] = x.groups()[0]
			active = True
	except:
		return

	return

#p = GPIO.PWM(26, 100)
#p.start(70)

def main():
	global active
	global data

        signal.signal(signal.SIGINT, exit_properly)
        signal.signal(signal.SIGTERM, exit_properly)

	while True:
		data = ["ON",-100,0,0,-100,0,0,-100,0,0,-100,0,0]
		active = False
		t = [None]*4

		for i in range (0, 3):
			t[i] = Thread(target=get_temperature, args=(PINS[i],(i*3)+1))
			t[i].start()

		for i in range (0, 3):
			t[i].join()

		previous = database.get_all('dew')

		if (previous != None):
			data[2]  = previous[4]
			data[3]  = previous[5]
			data[5]  = previous[7]
			data[6]  = previous[8]
			data[8]  = previous[10]
			data[9]  = previous[11]
			data[11] = previous[13]
			data[12] = previous[14]

		database.insert("dew", data)

		#p.ChangeDutyCycle(70)

		# Pause script if no detection is made
		if (not active):
			data = ["PAUSED",-100,0,0,-100,0,0,-100,0,0,-100,0,0]
			while True:
				database.insert("dew", data)
				time.sleep(1)
				if (database.module_status("dew")):
					break

		time.sleep(1)

main()
