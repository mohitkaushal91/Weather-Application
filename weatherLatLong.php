<?php

$lat = $_POST['latitude'];
$long = $_POST['longitude'];

	$baseurl = 'http://api.openweathermap.org/data/2.5/weather';
	$finalurl = $baseurl . "?lat=" . $lat . "&lon=" . $long . "&APPID=Your-API-Key-Here";


	$response = json_decode(file_get_contents($finalurl), true);

	echo json_encode($response);

?>
