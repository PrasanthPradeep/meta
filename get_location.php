<?php
$ip = $_GET["ip"];

// Send request to OpenCage Geocoder to get location, latitude, and longitude
$url = "https://api.opencagedata.com/geocode/v1/json?q=" . urlencode($ip) . "&key=YOUR_API_KEY";
$response = file_get_contents($url);

echo $response;
?>
