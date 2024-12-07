<?php
include("connect.php");
include("assets/php/classes.php");

$islandID = $_GET['islandOfPersonalityID'];
$islandPersonality = new IslandPersonality($islandID);
$coreMemoryOrbs = $islandPersonality->memoryOrbs;
$coreMemoryContent = $islandPersonality->memoryContent;

?>

<!DOCTYPE html>
<html>

<head>
  <title>Core Memories</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <link rel="stylesheet" href="assets/font/font.css">
  <link rel="stylesheet" href="assets/css/view.css">
  <link rel="stylesheet" href="assets/css/navbar.css">
  <link rel="icon" href="assets/img/miop-logo.svg" type="image/x-icon">
  <style>
    .noise {
      background-image: url('assets/img/noise.png');
      background-repeat: repeat;
      background-size: cover;
      height: 100vh;
    }
  </style>
</head>

<body>
  <div class="bgimg w3-display-container w3-animate-opacity w3-text-white">
    <video autoplay muted loop>
      <source src="assets/vid/island-personality.mp4">
    </video>
    <div class="blur">
      <div class="noise">
        <div class="content">
          <?php include('assets/php/navbar.php'); ?>
          <?php echo $islandPersonality->buildIsland(); ?>
          <div class="core-memories-container">
            <div class="row">
              <?php
              foreach ($coreMemoryOrbs as $coreMemoryOrb) {
                echo $coreMemoryOrb->buildMemory();
              }
              ?>
            </div>
          </div>
          <div class="memory-description">
            <p><?php echo $coreMemoryContent ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <script src="assets/js/script.js"></script>
</body>

</html>