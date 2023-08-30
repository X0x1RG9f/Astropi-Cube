<?php

	if ($_GET['cmd'] == 'restart') {
		echo system('sudo reboot');
	}
	if ($_GET['cmd'] == 'shutdown') {
		system('sudo shutdown -h now');
	}
	if ($_GET['cmd'] == 'db') {
		echo system('python /opt/astropi/scripts/database/clean.py');
	}
?>
