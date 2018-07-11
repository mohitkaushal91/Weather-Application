<?php

$city = $_POST['city'];

if($city == "")
{
	echo "Please Enter City!";
}
else
{
	$baseurl = 'http://api.openweathermap.org/data/2.5/forecast';
	$finalurl = $baseurl . "?q=" . $city . "&APPID=5ab905a423f6d45914490a574a80284d";


	$response = json_decode(file_get_contents($finalurl), true);

	//$temp = $response['main']['temp'];

	//$temp = ($temp-273.15);

	echo json_encode($response);
}

?>