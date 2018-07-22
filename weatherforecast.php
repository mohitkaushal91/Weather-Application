<?php

$city = $_POST['city'];

if($city == "")
{
	echo "Please Enter City!";
}
else
{
	$baseurl = 'http://api.openweathermap.org/data/2.5/forecast';
	$finalurl = $baseurl . "?q=" . $city . "&APPID=Your-API-Key-Here";


	$response = json_decode(file_get_contents($finalurl), true);

	//$temp = $response['main']['temp'];

	//$temp = ($temp-273.15);

	echo json_encode($response);
}

?>
