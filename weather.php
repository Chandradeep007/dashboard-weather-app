<?php
$apiKey = '0e69d02888f2cdd9348a30390376a97c';
$city = isset($_GET['city']) ? urlencode($_GET['city']) : '';

if (!$city) {
    echo json_encode(['error' => 'City not provided']);
    exit;
}

$url = "https://api.openweathermap.org/data/2.5/weather?q={$city}&appid={$apiKey}&units=metric";

// Suppress warnings with @ and handle failure
$response = @file_get_contents($url);

if ($response === FALSE) {
    http_response_code(500);
    echo json_encode(['error' => 'Unable to fetch weather data. Check PHP openssl extension.']);
    exit;
}

header('Content-Type: application/json');
echo $response;
?>
