<?php
include("connect.php");
include("assets/php/classes.php");

$islandID = $_GET['islandOfPersonalityID'];

$islandQuery = "SELECT islandsOfPersonality.image AS contentImage,
                islandsOfPersonality.name,
                islandsOfPersonality.shortDescription,
                islandsOfPersonality.longDescription,
                islandContents.* 
                FROM islandsOfPersonality JOIN islandContents 
                ON islandsOfPersonality.islandOfPersonalityID = islandContents.islandOfPersonalityID
                WHERE islandsOfPersonality.islandOfPersonalityID = '$islandID' LIMIT 1";
$islandsResult = executeQuery($islandQuery);

$selectedMemoryID = 1;
$memoryContent = "";

$memoryQuery = "SELECT * FROM islandContents WHERE islandOfPersonalityID = '$islandID'";
$memoryResult = executeQuery($memoryQuery);

$selectedMemQuery = "SELECT content FROM islandContents WHERE islandContentID = '$selectedMemoryID'";
$selectedMemQueryResult = executeQuery($selectedMemQuery);

if ($selectedMemoryRow = mysqli_fetch_assoc($selectedMemQueryResult)) {
  $memoryContent = $selectedMemoryRow['content'];
}

while ($islandRow = mysqli_fetch_assoc($islandsResult)) {
  $islandInfo = new IslandPersonality(
    $islandRow['islandOfPersonalityID'],
    $islandRow['name'],
    $islandRow['shortDescription'],
    $islandRow['longDescription'],
    $islandRow['contentImage']
  );
}

$memoryBalls = array();
$counter = 1;

while ($memoryRow = mysqli_fetch_assoc($memoryResult)) {
  $m = new CoreMemory(
    $memoryRow['color'],
    $memoryRow['image'],
    $memoryRow['content'],
    $counter
  );

  array_push($memoryBalls, $m);
  $counter++;
}

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
          <a href="./">
            <div class="w3-padding-large w3-xlarge">
              <img src="assets/img/miop-logo-2.png" style="height:75px">
            </div>
          </a>
          <?php echo $islandInfo->buildIsland(); ?>
          <div class="core-memories-container">
            <div class="row">
              <?php
              foreach($memoryBalls as $memoryBall){
                echo $memoryBall->buildMemory();
              }
              ?>
            </div>
          </div>
          <div class="memory-description">
            <p><?php echo $memoryContent ?></p>
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