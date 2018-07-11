//Author: Mohit Kumar
function searchcity()
{
	var city = document.getElementById('city').value;
	var key = '5ab905a423f6d45914490a574a80284d';
	var baseurl = "http://api.openweathermap.org/data/2.5/weather";
	var data = baseurl + '?q=' + city + '&APPID=' + key;
	
	$.getJSON(data, function(data){
    console.log(data);
});
}