<?php
$apiKey = '0e69d02888f2cdd9348a30390376a97c';
$city = isset($_GET['city']) ? urlencode($_GET['city']) : '';

if (!$city) {
    echo json_encode(['error' => 'City not provided']);
    exit;
}

$url = "https://api.openweathermap.org/data/2.5/forecast?q={$city}&appid={$apiKey}&units=metric";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // allow self-signed
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

if ($httpCode != 200 || !$response) {
    http_response_code($httpCode);
    echo json_encode(['error' => 'Unable to fetch forecast data.']);
    exit;
}

header('Content-Type: application/json');
echo $response;
?>
