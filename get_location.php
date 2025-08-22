<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $latitude = $_POST['latitude'];
    $longitude = $_POST['longitude'];
    // Use a Geotag API to fetch location data
    $apiKey = 'e829b45e44df49a99e35a14ec5b3ea19';
    $apiUrl = "https://api.ipgeolocation.io/geolocation?apiKey=$apiKey&lat=$latitude&long=$longitude";

    $response = file_get_contents($apiUrl);
    $locationData = json_decode($response, true);

    // Extract relevant information
    $country = $locationData['country_name'];
    $city = $locationData['city'];

    echo "Location: $city, $country (Latitude: $latitude, Longitude: $longitude)";
}
?>