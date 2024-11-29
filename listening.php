<?php
function getMusicData() {
    $apiKey = 'nebUpQgNtlQBfQeXW0ex3XTGMnsgs0FN';
    $url = "https://api.voidem.com/v1/listening/?api_key=" . $apiKey;
    
    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_SSL_VERIFYPEER => true,
        CURLOPT_TIMEOUT => 5
    ]);
    
    $response = curl_exec($curl);
    
    if (curl_errno($curl)) {
        error_log('Curl error: ' . curl_error($curl));
        curl_close($curl);
        return null;
    }
    
    curl_close($curl);
    return json_decode($response, true);
}

$musicData = getMusicData();
$listeningData = $musicData['listeningData'] ?? null;

if ($listeningData): ?>
    <div class="music-status">
        <div class="music-header">
            <div class="status-indicator">
                <div class="status-dot <?php echo $listeningData['nowPlaying'] ? 'active' : 'inactive'; ?>"></div>
                <span class="status-text"><?php echo $listeningData['nowPlaying'] ? 'Now Playing' : 'Last Played'; ?></span>
            </div>
        </div>
        <div class="music-container">
            <div class="album-art-container">
                <img src="<?php echo htmlspecialchars($listeningData['image']); ?>" 
                     alt="Album Art" 
                     class="album-art">
            </div>
            <div class="music-info">
                <a href="<?php echo htmlspecialchars($listeningData['url']); ?>" 
                   target="_blank" 
                   class="song-link">
                    <span class="song-name"><?php echo htmlspecialchars($listeningData['song']); ?></span>
                </a>
                <span class="artist-name"><?php echo htmlspecialchars($listeningData['artist']); ?></span>
                <?php if (isset($listeningData['album'])): ?>
                    <span class="album-name"><?php echo htmlspecialchars($listeningData['album']); ?></span>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <link rel="stylesheet" href="assets/listenStyle.css">

    <script>
    setTimeout(function() {
        window.location.reload();
    }, 30000);
    </script>
<?php endif; ?>