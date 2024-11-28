<?php
function output($data)
{
  echo "<script>console.log('PHP: " . $data . "');</script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Voidem</title>
  <meta
    name="description"
    content="Welcome to Voidem's website, showcasing Voidem's experience and skills." />
  <meta name="author" content="Voidem" />
  <meta
    name="keywords"
    content="Voidem, VoidemLIVE, Personal Website, Web Development, Minecraft Plugins, Java, PHP, HTML, CSS, SQL, Python, JavaScript" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="robots" content="index, follow" />
  <link rel="stylesheet" href="assets/styles.css" />
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
  <link rel="icon" type="image/x-icon" href="assets/pfpNoBG.png" />
</head>

<body>
  <div class="frontPageDiv">
    <div class="voidem-text">Voidem</div>
    <img src="assets/pfp.png" alt="Picture of me" class="profilePicture" />
    <div class="social-images">
      <div class="social-image">
        <a href="https://github.com/voidemlive" target="#"><img
            src="assets/github.png"
            alt="Github Logo"
            style="filter: invert(100%)" /></a>
      </div>
      <div class="social-image">
        <a href="https://discord.com/users/547439411856408576" target="#"><img
            src="assets/discord.png"
            alt="Discord Logo"
            style="filter: invert(100%)" /></a>
      </div>
      <div class="social-image">
        <a
          href="https://steamcommunity.com/id/VoidemLIVE/myworkshopfiles/"
          target="#"><img
            src="assets/steam.png"
            alt="Steam Logo"
            style="filter: invert(100%)" /></a>
      </div>
    </div>
  </div>
  <div class="nextPage">
    <section class="timeline">
      <div class="title-wrapper">
        <div class="icon-box">
          <ion-icon name="book-outline"></ion-icon>
        </div>
        <h3 class="h3" style="font-size: 2em; color: white">Experience</h3>
      </div>
      <div class="timeline-list">
        <div class="timeline-item">
          <h4 class="h4 timeline-item-title">
            <a href="https://support.voidem.com" target="#">Voidem Development</a>
            - Owner
          </h4>
          <span>May 2021 — Present</span>
          <p class="timeline-text">
            My personal development project which creates Minecraft plugins
            and websites.
            <br /><a style="color: white">Skills:</a> Java, PHP, HTML, CSS,
            SQL, Python, JavaScript.
          </p>
        </div>
        <div class="timeline-item">
          <h4 class="h4 timeline-item-title">
            <a href="https://bundlegroup.gg/" target="#">Bundle Group LTD</a>
            - Volunteer Staff
          </h4>
          <span>Dec 2022 — Present</span>
          <p class="timeline-text">
            Volunteer moderator and developer. Bundle Group create unique
            Minecraft projects.
            <br /><a style="color: white">Skills:</a> Moderation, Java.
          </p>
        </div>
        <div class="timeline-item">
          <h4 class="h4 timeline-item-title">
            <a href="https://coastersandcrafters.com/" target="#">Coasters & Crafters LTD</a>
            - Moderator
          </h4>
          <span>Dec 2022 — Feb 2024</span>
          <p class="timeline-text">
            Moderating Coasters & Crafters' yearly event, Coaster Con. Now
            merged with Bundle Group LTD.
            <br /><a style="color: white">Skills:</a> Moderation.
          </p>
        </div>
        <div class="timeline-item">
          <h4 class="h4 timeline-item-title">
            <a href="https://greenwoodmc.net" target="#">Greenwood Parks</a> -
            Technical Director
          </h4>
          <span>Aug 2022 — Nov 2023</span>
          <p class="timeline-text">
            Managing the tech and dev team of Greenwood Parks. A Minecraft
            theme park server, now closed.
            <br /><a style="color: white">Skills:</a> Community management,
            System administration, Java.
          </p>
        </div>
        <br />
      </div>
    </section>
  </div>
  <div class="particle-overlay" id="particles-js"></div>
</body>

</html>

<script src="particles.js"></script>