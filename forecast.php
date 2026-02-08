<?php
// Always return JSON (avoid HTML warnings in fetch)
header('Content-Type: application/json; charset=utf-8');

// Hide PHP warnings/notices from breaking JSON output (recommended for this small project)
ini_set('display_errors', '0');
error_reporting(0);

$apiKey = '0e69d02888f2cdd9348a30390376a97c';
$cityRaw = isset($_GET['city']) ? trim($_GET['city']) : '';

if ($cityRaw === '') {
    http_response_code(400);
    echo json_encode(['error' => 'City not provided']);
    exit;
}

$city = urlencode($cityRaw);
$url = "https://api.openweathermap.org/data/2.5/forecast?q={$city}&appid={$apiKey}&units=metric";

// Prefer file_get_contents for max compatibility (works even if PHP cURL is not installed)
$context = stream_context_create([
  'http' => ['timeout' => 10],
  'ssl'  => ['verify_peer' => true, 'verify_peer_name' => true]
]);

$response = @file_get_contents($url, false, $context);

// If request failed, return JSON error (not HTML)
if ($response === false) {
    http_response_code(500);
    $err = error_get_last();
    echo json_encode([
        'error' => 'Unable to fetch forecast data.',
        'details' => $err ? $err['message'] : 'Unknown error'
    ]);
    exit;
}

echo $response;
?>
