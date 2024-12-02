<?php
include("connect.php");

$islandID = $_GET['islandOfPersonalityID'];

$islandQuery = "SELECT DISTINCT islandsOfPersonality.image AS contentImage,
                islandsOfPersonality.name,
                islandsOfPersonality.longDescription,
                islandContents.* 
                FROM islandsOfPersonality JOIN islandContents 
                ON islandsOfPersonality.islandOfPersonalityID = islandContents.islandOfPersonalityID
                WHERE islandsOfPersonality.islandOfPersonalityID = '$islandID'";
$islandsResult = executeQuery($islandQuery);

?>

<!DOCTYPE html>
<html>

<head>
  <title>My Islands of Personality</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <link rel="stylesheet" href="assets/font/font.css">
  <link rel="stylesheet" href="assets/css/style.css">

  <link rel="icon" href="assets/img/miop-logo.svg" type="image/x-icon">
  <style>
    body,
    h1 {
      font-family: "Inside Out", sans-serif;
    }

    h1 {
      text-align: center;
    }

    body,
    html {
      height: 100%;
    }

    .bgimg {
      position: relative;
      height: 100vh;
      width: 100%;
      overflow: hidden;

    }

    video {
      position: absolute;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .blur {
      background: rgba(62, 62, 62, 0.04);
      backdrop-filter: blur(24px);
      height: 100vh;
    }

    .noise {
      background-image: url('assets/img/noise.png');
      background-repeat: repeat;
      background-size: cover;
      height: 100vh;
    }

    .link {
      text-decoration: none;
      color: white;
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
          <?php
          while ($islandsRow = mysqli_fetch_assoc($islandsResult)) { ?>

            <h1><?php echo $islandsRow['name'] ?></h1>
            <img src="assets/img/<?php echo $islandsRow['contentImage'] ?>">
            <p><?php echo $islandsRow['longDescription'] ?></p>
            <div class="core-memories-container">
              <div class="row">
                <div class="col-4">
                  <div class="core-memory">
                    <img src="assets/img/JOY.png" alt="">
                    <h4>Core Memory 1</h4>
                  </div>
                </div>
                <div class="col-4">
                  <div class="core-memory">
                    <img src="assets/img/JOY.png" alt="">
                    <h4>Core Memory 2</h4>
                  </div>
                </div>
                <div class="col-4">
                  <div class="core-memory">
                    <img src="assets/img/JOY.png" alt="">
                    <h4>Core Memory 3</h4>
                  </div>
                </div>
              </div>
            </div>

          <?php
          } ?>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>