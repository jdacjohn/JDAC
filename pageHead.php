<?php
	//$runMode = "PROD";
	$runMode = "DEV";
	$siteRoot = ".";
	if ($runMode == "DEV") {
		$siteRoot = "https://192.168.42.97/jdacsolutions-old.com";
	} else {
		$siteRoot = "https://www.jdacsolutions.com";
	}
?>
