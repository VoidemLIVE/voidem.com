<?php
function output($data)
{
  $output = $data;
  if (is_array($output))
    $output = implode(',', $output);

  echo "<script>console.log('$output');</script>";
}

?>

<!DOCTYPE html>
<html lang=en>

<head>
  <meta charset=utf-8>
  <title>Voidem</title>
  <meta name="description" content="Voidem's Website">
  <meta name="author" content="Voidem">
  <meta name="keywords" content="Voidem, Personal Website, Voidem Website, Voidem's Website">
  <meta name=viewport content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/styles.css">
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
  <link rel="icon" type="image/x-icon" href="assets/pfpNoBG.png">
</head>
<body>

  <div class="frontPageDiv">
    <div class="voidem-text">Voidem</div>
    <img src="assets/pfp.png" alt="Picture of me" class="profilePicture">
    <div class="social-images">
      <div class="social-image">
        <a href="https://github.com/voidemlive" target="#"><img src="assets/github.png" alt="Github Logo" style="filter: invert(100%)"></a>
      </div>
      <div class="social-image">
        <a href="https://dsc.bio/voidemlive" target="#"><img src="assets/discord.png" alt="Discord Logo" style="filter: invert(100%)"></a>
      </div>
      <div class="social-image">
        <a href="https://steamcommunity.com/id/VoidemLIVE/" target="#"><img src="assets/steam.png" alt="Steam Logo" style="filter: invert(100%)"></a>
      </div>
    </div>
    <div class="particle-overlay" id="particles-js"></div>
  </div>
</body>
</html>

<script src="particles.js"></script>
