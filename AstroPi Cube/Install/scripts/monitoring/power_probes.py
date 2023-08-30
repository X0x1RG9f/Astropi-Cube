#!/usr/bin/python

import time
import sys
from spidev import SpiDev
import signal
sys.path.append('/opt/astropi/scripts/database')
import database

REF_BUS		= 0
REF_CHAN	= 7
REFERENCE	= 2.41
SLOPE		= 0.185
BUSSES 		= 	{	0: [3, 4, 5, 6, 7],
				1: [1, 2, 3, 4, 5, 6]}
ADC		= ""

def exit_properly(self, *args):
	ADC.close()
        sys.exit(0)

class MCP3008:
	def __init__(self, bus = 0, device = 0):
		self.bus, self.device = bus, device
		self.spi = SpiDev()
		self.open()
		self.spi.max_speed_hz = 100000 # 10KHz

	def open(self):
		self.spi.open(self.bus, self.device)
		self.spi.max_speed_hz = 100000 # 10KHz

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

	# Taking reference on a Dew Heater at startup (sure to be unpowered)
	adc 	= MCP3008( bus = REF_BUS )
	value 	= 0

	for avg in range(100):
		value = value + adc.read( channel = REF_CHAN )
		time.sleep(0.002)

	REFERENCE = round((value / 100.0) / 1023.0 * 3.3, 3)

	while True:
		cpt  = 0
		watt = 0.0
		data	= [0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0]

		for BUS in BUSSES:
			try:
				ADC = MCP3008( bus = BUS )

				for PIN in BUSSES[BUS]:
					value   = 0

					for avg in range(100):
        					value = value + ADC.read( channel = PIN )
        					time.sleep(0.002)

					value = round((value / 100.0) / 1023.0 * 3.3, 3) - REFERENCE

					amps  = round(value / SLOPE, 2)

					if (amps > 0.05):
						data[cpt] 	= amps
						watt 		= watt + (12 * amps)

					cpt = cpt + 1
					time.sleep(0.002)

				ADC.close()
			except IOError:
				cpt = cpt + 1
				continue

		data[-1] = round(watt, 2)
		database.insert("power", data)
		time.sleep(1)
main()
