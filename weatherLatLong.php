<?php

$lat = $_POST['latitude'];
$long = $_POST['longitude'];

	$baseurl = 'http://api.openweathermap.org/data/2.5/weather';
	$finalurl = $baseurl . "?lat=" . $lat . "&lon=" . $long . "&APPID=5ab905a423f6d45914490a574a80284d";


	$response = json_decode(file_get_contents($finalurl), true);

	//$temp = $response['main']['temp'];

	//$temp = ($temp-273.15);

	echo json_encode($response);

?>