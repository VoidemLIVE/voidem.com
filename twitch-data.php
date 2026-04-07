<?php
header('Content-Type: application/json; charset=utf-8');

function loadEnvValue(string $key): ?string {
    $value = getenv($key);
    if ($value !== false && $value !== '') {
        return $value;
    }

    $envFile = __DIR__ . '/.env';
    if (!is_readable($envFile)) {
        return null;
    }

    $env = parse_ini_file($envFile, false, INI_SCANNER_TYPED);
    if (!is_array($env) || !array_key_exists($key, $env)) {
        return null;
    }

    $envValue = $env[$key];
    return is_string($envValue) || is_numeric($envValue) ? (string) $envValue : null;
}

$apiKey = loadEnvValue('API_KEY') ?? loadEnvValue('LASTFM_API_KEY');
$username = loadEnvValue('LASTFM_USERNAME') ?? 'VoidemLIVE';

if (!$apiKey) {
    http_response_code(500);
    echo json_encode([
        'playing' => false,
        'status' => 'not playing',
        'error' => 'Missing API key',
    ]);
    exit;
}

$url = 'https://ws.audioscrobbler.com/2.0/?method=user.getrecenttracks'
    . '&user=' . urlencode($username)
    . '&api_key=' . urlencode($apiKey)
    . '&format=json&limit=1';

$curl = curl_init();
curl_setopt_array($curl, [
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_SSL_VERIFYPEER => true,
    CURLOPT_TIMEOUT => 5,
]);

$response = curl_exec($curl);

if ($response === false || curl_errno($curl)) {
    $error = curl_error($curl);
    curl_close($curl);
    http_response_code(502);
    echo json_encode([
        'playing' => false,
        'status' => 'not playing',
        'error' => $error ?: 'Failed to fetch track data',
    ]);
    exit;
}

curl_close($curl);
$data = json_decode($response, true);
$track = $data['recenttracks']['track'][0] ?? null;

if (!$track) {
    echo json_encode([
        'playing' => false,
        'status' => 'not playing',
    ]);
    exit;
}

$playing = (($track['@attr']['nowplaying'] ?? '') === 'true');

if (!$playing) {
    echo json_encode([
        'playing' => false,
        'status' => 'not playing',
    ]);
    exit;
}

$image = $track['image'][1]['#text'] ?? '';

echo json_encode([
    'playing' => true,
    'status' => 'now playing',
    'trackName' => $track['name'] ?? '—',
    'artist' => $track['artist']['#text'] ?? '—',
    'image' => $image,
]);
