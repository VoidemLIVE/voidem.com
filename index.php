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
  <title>Voidem Portfolio</title>
  <meta name="description" content="Voidem's Portfolio">
  <meta name="author" content="Voidem">
  <meta name="keywords" content="Voidem, Portfolio, Voidem Portfolio, Voidem's Portfolio">
  <meta name=viewport content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/styles.css">
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
  <link rel="icon" type="image/x-icon" href="https://gravatar.com/avatar/05a0fe1e2580f4cc2a5e1f32d482530ef5aee5b89a93ce71bd315a780b1412bf">
</head>
<body>

  <div class="frontPageDiv">
    <div class="voidem-text">Voidem</div>
    <img src="https://gravatar.com/avatar/05a0fe1e2580f4cc2a5e1f32d482530ef5aee5b89a93ce71bd315a780b1412bf" alt="Picture of me" class="profilePicture">
    <div class="social-images">
      <div class="social-image">
        <a href="https://github.com/voidemlive" target="#"><img src="assets/github.png" alt="Github Logo" style="filter: invert(100%)"></a>
      </div>
      <div class="social-image">
        <a href="https://support.voidem.com" target="#"><img src="assets/discord.png" alt="Discord Logo" style="filter: invert(100%)"></a>
      </div>
      <div class="social-image">
        <a href=""><img src="assets/steam.png" alt="Steam Logo" style="filter: invert(100%)"></a>
      </div>
    </div>
    <div class="particle-overlay" id="particles-js"></div>
  </div>
</body>
</html>

<script src="particles.js"></script>
