<?php

if(!isset($icinga_status_file)) {
	$icinga_status_file = '/var/lib/icinga/status.dat';
}

// $host = 'tiss';
// $service = 'vhost tiss.tuwien.ac.at ssl';

$handle = fopen($icinga_status_file, 'r');
$icinga_service_data = array();
if($handle) {
	$current_service_data = array();
	$current_host = '';
	$current_service = '';
	$skip = true;
	while(($line = fgets($handle)) !== false) {
		$line = trim($line);
		if($line == 'servicestatus {') {
			$skip = false;
			$current_service_data = array();
		}
		else if($line == '}') {
			if(!$skip && count($current_service_data) > 0) {
				if(!isset($icinga_service_data[$current_host])) {
					$icinga_service_data[$current_host] = array();
				}
				$icinga_service_data[$current_host][$current_service] = $current_service_data;
			}
			$skip = true;
		}
		else if(!$skip) {
			if(strpos($line, '=') !== false) {
				$parts = explode('=', $line);

				$key = array_shift($parts);
				$value = implode('=', $parts);

				if($key == 'host_name') {
					$current_host = $value;
				}
				else if($key == 'service_description') {
					$current_service = $value;
				}
				$current_service_data[$key] = $value;
			}
		}
	}
	fclose($handle);
}


