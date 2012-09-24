<?php

function getInterface () {
	$interface = $_SERVER['HTTP_USER_AGENT'];
	return $interface;
}

function isMobile ($interface) {
	$i = strtolower($interface);
	if ( strpos($i, 'blackberry')
	   | strpos($i, 'ipod')
	   | strpos($i, 'iphone')
	   | strpos($i, 'android')
	   | strpos($i, 'webos')
	   ) {
		return true;
	} else {
		return false;
	}
}

?>