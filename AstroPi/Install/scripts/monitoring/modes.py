import time
import RPi.GPIO as GPIO
import sys
sys.path.append('/opt/astropi/scripts/database')
import database
import signal


# Pins definitions
fan_pin = 19
drk_pin = 26

# Set up pins
GPIO.setwarnings(False)
GPIO.setmode(GPIO.BCM)
GPIO.setup(fan_pin, GPIO.OUT)
GPIO.setup(drk_pin, GPIO.OUT)

GPIO.output(fan_pin, GPIO.LOW)
GPIO.output(drk_pin, GPIO.LOW)


def exit_properly(self, *args):
	GPIO.cleanup()
	sys.exit(0)

def main():
	signal.signal(signal.SIGINT, exit_properly)
	signal.signal(signal.SIGTERM, exit_properly)

	while True:
		mode = database.get_all("mode")
		if (mode[3] != 1):
			GPIO.output(fan_pin, GPIO.HIGH)
		else:
			GPIO.output(fan_pin, GPIO.LOW)

		if (mode[2] != 1):
			GPIO.output(drk_pin, GPIO.HIGH)
		else:
			GPIO.output(drk_pin, GPIO.LOW)

		time.sleep(1)

main()
