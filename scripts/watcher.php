#!/usr/bin/php
<?php
$IPS = file('../conf/watchips');
$PID = '/var/run/motion/motion.pid'; // motion pid file
$found = false; // has a device been found?
for ($i = 0; $i < count($IPS); $i++) {
	$ip = trim($IPS[$i]);
	if (checkIP($ip)) {
		$found = true;
		break;
	}	
}

toggleMotiond($found, $PID);


/**
 * check if ip address answers to ping
 * @param $ip ip address to be pinged
 * @return true if ping was successful, false otherwise
 */
function checkIP($ip) {
	$res = shell_exec("ping -c1 $ip");
	if (strpos($res, '1 received') !== false) {
		return true; // ping successful
	}
	return false;
}

/**
 * stop motiond if a device is logged into the network
 * automatically start it otherwise
 * @param $found indicate if a device was found on the network
 * @param $PID motion pid file
 */
function toggleMotiond($found, $PID) {
	$running = file_exists($PID);
	
	if ($found && $running) {
		echo "motion watcher: key device found, shutting down motion\n";
		system('sudo service motion stop');	
	}

	if (!$found && !$running) {
		echo "motion watcher: no key device found, starting motion\n";
		system('sudo service motion start');
	}
}

?>
