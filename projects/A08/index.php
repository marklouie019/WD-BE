<?php
include("connect.php");

$pageContent = 'island-list.php';

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
      background: #8C68FC;
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
        <div class="w3-display-middle">
          <h1 class="w3-jumbo w3-animate-top">My <br>
            Islands oF
            <br>
            PERsonALitY
            <hr class="w3-border-white my-3" style="margin:auto;width:100%;background:white;">
            <a href="<?php echo $pageContent;?>" class="link">
              <p class="w3-large w3-center pt-3">ENTER</p>
            </a>
        </div>
        <div class="w3-display-bottomleft w3-padding-large">
          Powered by <a href="https://www.w3schools.com/w3css/default.asp" class="link" target="_blank">w3.css</a>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>