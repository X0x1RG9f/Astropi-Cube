#!/usr/bin/python

import time
import sys
from spidev import SpiDev
from RPi import GPIO
import signal
sys.path.append('/opt/astropi-cube/scripts/database')
import database


GPIO.setwarnings(False)
GPIO.setmode(GPIO.BCM)
GPIO.setup(8, GPIO.OUT)
GPIO.setup(7, GPIO.OUT)

REF_BUS		= 0
REF_CHAN	= 4
REFERENCE	= 5
SLOPE		= 0.185
BUSSES 		= 	{	0: [0, 1, 2, 3, 4, 5, 6, 7],
				1: [0, 1, 2, 3, 4, 5, 6, 7]}
ADC		= ""
SLEEP		= 0.01

def exit_properly(self, *args):
	ADC.close()
        sys.exit(0)

class MCP3008:
	def __init__(self, bus = 0, device = 1):
		self.bus, self.device = bus, device
		self.spi = SpiDev()
		self.open()
		self.spi.max_speed_hz = 10000 # 10KHz

	def open(self):
		self.spi.open(self.bus, self.device)
		self.spi.max_speed_hz = 10000 # 10KHz

	def read(self, channel = 0):
		adc = self.spi.xfer2([1, (8 + channel) << 4, 0])
		data = ((adc[1] & 3) << 8) + adc[2]
		return data

	def close(self):
		self.spi.close()



def main():
        signal.signal(signal.SIGINT, exit_properly)
        signal.signal(signal.SIGTERM, exit_properly)

	global REF_BUS
	global REF_CHAN
	global REFERENCE
	global SLOPE
	global BUSSES
	global ADC
	global SLEEP

	# Taking reference on a Dew Heater at startup (sure to be unpowered)
	adc 	= MCP3008( bus = REF_BUS )
	value 	= 0
	nbr = 0

	for avg in range(100):
		val = adc.read( channel = REF_CHAN )

		if val != 0 :
			value = value + val
			nbr = nbr + 1
		time.sleep(SLEEP)

	#REFERENCE = round((value / nbr) / 1023.0 * 4.96, 3)
	REFERENCE = round((value / nbr) / 1023.0 * 5, 3)
	print "REFERENCE"
	print REFERENCE
	print ""

	while True:
		cpt  = 0
		watt = 0.0
		data	= [0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0]

		for BUS in BUSSES:
			try:
				ADC = MCP3008(device  = BUS)

				for PIN in BUSSES[BUS]:
					value   = 0
					nbr = 0

					for avg in range(200):
						val = ADC.read( channel = PIN )

						if val != 0 :
        						value = value + val
							nbr = nbr + 1
        					time.sleep(SLEEP)


					#value = round((value / nbr) / 1023.0 * 4.96, 3) - REFERENCE
					if nbr > 0 :
						value = round((value / nbr) / 1023.0 * 5, 3) - REFERENCE

					amps  = round(value / SLOPE, 2)

					print value
					if (amps > 0.05):
						data[cpt] 	= amps
						watt 		= watt + (12 * amps)

					cpt = cpt + 1
					#time.sleep(SLEEP)

				ADC.close()
			except IOError:
				print "here"
				cpt = cpt + 1
				continue

		data[-1] = round(watt, 2)
		print data
		database.insert("power", data)
		#time.sleep(1)
main()
