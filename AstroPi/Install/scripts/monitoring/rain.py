import time
import RPi.GPIO as GPIO

# Pins definitions
btn_pin = 24

# Set up pins
GPIO.setmode(GPIO.BCM)
GPIO.setup(btn_pin, GPIO.IN)
#GPIO.setup(23, GPIO.OUT)

# If button is pushed, light up LED
try:
    while True:
        print GPIO.input(btn_pin)
        time.sleep(1)

# When you press ctrl+c, this will be called
finally:
    print "Exit"
    GPIO.cleanup()
