<?php
$cmd = $_GET['cmd'];
$MOTION_API = 'http://localhost:8080/0/detection/';

if ($cmd === 'status' ||
	$cmd === 'pause' ||
	$cmd === 'start') {
	echo file_get_contents($MOTION_API . $cmd);
}
?>
