#!/usr/bin/python
# encoding: utf-8

############################################
#                                          #
# DEW STRAPS CALCULATOR Ludovic COURGNAUD  #
# 08-2021                                  #
#                                          #
# DEW STRAPS CALCULATOR BASED ON:         #
#    - Telescope Circumference (inch / mm) #
#    - Resistor value [optional] (ohms)    #
#    - Power value [optional] (watts)      #
#                                          #
# Usefull:                                 #
# U = Ri / V = Ri                          #
# P = Ui / P = Vi                          #
############################################

###################################################### IMPORTS #####################################################################
import argparse

###################################################### CONFIG ######################################################################
VOLTAGE = 12
DEBUG	= False
CIRC	= ""
RESISTOR= 330
POWER	=	[	[114, 2.1],
			[165, 3.1],
			[229, 4.2],
			[330, 6.0],
			[406, 7.3],
			[457, 7.9],
			[521, 9.6],
			[635, 11.8],
			[762, 14.0],
			[838, 15.5],
			[965, 17.8],
			[1016, 18.8],
			[1092, 20.2],
			[1245, 23.0],
			[1397, 25.8]
		]

##################################################### FUNCTIONS ####################################################################

#
# Print with debug condition
#
def myprint(str):
	if DEBUG:
		print(str)

#
# Parse args from command line
#
def parse_args():
	global CIRC
	global RESISTOR
	global POWER
	global DEBUG

	example_text = '''Examples:
 		python dew_straps.py 762
 		python dew_straps.py 30 -u inch -r 330
 		python dew_straps.py 762 -r 470 -p 15  '''

	parser = argparse.ArgumentParser(prog='./dew_straps.py', epilog=example_text,  formatter_class=argparse.RawDescriptionHelpFormatter)

	# Mandatory args
	parser.add_argument("Circumference", type=float, help="Circumference of the scope (measured, not given by vendor).")

	# Optional args
	parser.add_argument("-u",  "--unit", type=str, help="Circumference unit in inches or millimeters (Default 'mm').", choices=['inch', 'mm'], default='mm')
	parser.add_argument("-d",  "--debug", help="Activate debug mode. Default 'False'.",  action='store_true', default=False)
	parser.add_argument("-r",  "--resistor", type=int, help="Value of the desired resistors in Ohms. Default '330'.", default=330)
	parser.add_argument("-p",  "--power", type=float, help="Value of the desired output power in Watts. Default values taken from Dew Not Straps (http://www.dew-not.com) specifications.", default=0)
	parser.add_argument("-v",  "--voltage", type=float, help="Voltage applied to the Dew Straps in Volts. Default '12'.", default=12)

	args = parser.parse_args()

	CIRC		= args.Circumference
	DEBUG		= args.debug
	RESISTOR	= args.resistor
	VOLTAGE		= args.voltage

	if (args.unit != 'mm'):
		CIRC = CIRC * 25.4

	close = []
	if (args.power == 0):
		myprint("")
		myprint("No output power provided. Default values taken from Dew Not Straps (http://www.dew-not.com) specifications.")
		closest = min(POWER, key=lambda x:abs(x[0]-CIRC))
		POWER = closest[1]
	else:
		POWER = args.power

	myprint("")
	myprint('Circumference: ' + str(CIRC) + 'mm (' + str(round(CIRC / 25.4, 1))+ ' inches)')
	myprint('Resistor: ' + str(RESISTOR) + ' Ohms')
	myprint('Power: ' + str(POWER) + ' Watts')
	myprint('Voltage: ' + str(POWER) + ' Watts')
	myprint('Launching process...')


#
# Main function
#
def main():
	print ""

	# P = Ui
	myprint("Processing P = Ui...")
	i = POWER / VOLTAGE
	myprint("Current Consumption: " + str(round(i,2)) + " amps")
	myprint("")

	# U = Ri
	myprint("Processing U = Ri...")
	r = VOLTAGE / i
	myprint("Global Resistance: " + str(round(r,2)) + " Ohms")
	myprint("")

	total = (RESISTOR / r)
	print "Total consumption of the circuit: " + str(round(i,2)) + " amps"
	print "Total of " + str(RESISTOR) + " ohms resistors needed in parallel: " + str(int(round(total,0)))
	print "Minimum Wattage acceptance for each " + str(RESISTOR) + " ohms resistor: " + str(round(POWER / total,1)) + " watts"
	distance_mm = round( CIRC / (int(round(total,0))),1)
	distance_in = round(distance_mm / 25.4,2)
	print "Distance between each " + str(RESISTOR) + " ohms resistor on the " + str(int(CIRC)) + " mm wire: " + str(distance_mm) + " mm (" + str(distance_in) + " inches)" 
	print ""
	print "/!\ Total lenght of the wire should be " + str(int(CIRC + 100)) + " mm to include power supply connexion!" 
	print ""
	print ""
	print " \033[91m----------------- .............................. -------------------"
	print " \33[0m|  " + (str(distance_mm) + " mm").ljust(8,' ') + " |                 x" + str(int(round(total,0))).ljust(3,' ') + "                     |           \033[91m|"
	print " \33[0m|           |                                          |           \033[91m|"
	print " \33[0m|           |                                          |           \033[91m|"
	print "\33[41m|/|\33[0m         \33[41m|/|\33[0m " + (str(RESISTOR) + " ohms").ljust(9,' ') + "                              \33[41m|/|\33[0m          \033[91m--------------------  +"
	print "\33[41m|/|\33[0m         \33[41m|/|\33[0m                                        \33[41m|/|\33[0m          \33[94m--------------------  -"
	print " \33[0m|           |                                          |           \33[94m|"
	print " \33[0m|           |                                          |           \33[94m|"
	print " \33[0m|  " + (str(distance_in) + " in").ljust(8,' ') + " |                 x" + str(int(round(total,0))).ljust(3,' ') + "                     |           \33[94m|"
	print " \33[94m----------------- .............................. -------------------\33[0m"
################################################### START PROGRAM ##################################################################
parse_args()
main()
