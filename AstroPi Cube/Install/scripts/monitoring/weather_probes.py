#!/usr/bin/python

import os
import glob
import time
import re
import sys
import math
from threading import Thread
sys.path.append('/opt/astropi/scripts/database')
import database
import RPi.GPIO as GPIO
import signal

PINS 		= [1, 17, 27, 16]

data = ["ON",-100,-100,-100,-100]
active = False


def exit_properly(self, *args):
        GPIO.cleanup()
        sys.exit(0)


def get_frost_point(t_air, dew_point):
	dew_point_k = 273.15 + dew_point
	t_air_k = 273.15 + t_air
	frost_point_k = dew_point_k - t_air_k + 2671.02 / ((2954.61 / t_air_k) + 2.193665 * math.log(t_air_k) - 13.3448)

	return frost_point_k - 273.15


def get_dew_point(t_air, rel_humidity):
	A = 17.27
	B = 237.7
	alpha = ((A * t_air) / (B + t_air)) + math.log(rel_humidity/100.0)

	return (B * alpha) / (A - alpha)


def main():
        signal.signal(signal.SIGINT, exit_properly)
        signal.signal(signal.SIGTERM, exit_properly)


	while True:
		id = database.insert("gps", ["ON", 0, 0])

		gnd_temperature = 25
		sky_temperature = -100
		gnd_pressure 	= -100
		gnd_humidity 	= 55
		is_light 	= 0
		light_frequency = -100
		sky_quality 	= 0
		dew_point 	= -100
		frz_point 	= -100

		if (gnd_temperature > -100) and (gnd_humidity > -100):
			dew_point = get_dew_point(gnd_temperature, gnd_humidity)
			frz_point = get_frost_point(gnd_temperature, dew_point)

		database.insert("weather", [id, "ON", gnd_temperature, sky_temperature, gnd_pressure, gnd_humidity, is_light, light_frequency, sky_quality, dew_point, frz_point])

		#'gps':          ["module_status", "latitude", "longitude"],
		#'weather':      ["gps_id", "module_status", "gnd_temperature", "sky_temperature", "gnd_pressure", "gnd_humidity", "is_light", "light_frequency", "sky_quality", "dew_point", "frz_point"],

		time.sleep(1)

main()
