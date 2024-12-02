<?php
include("connect.php");
include("assets/php/classes.php");

$cards = array();

$islandsQuery = "SELECT * FROM islandsOfPersonality";
$islandsResult = executeQuery($islandsQuery);

while ($islandRow = mysqli_fetch_assoc($islandsResult)) {
    $c = new IslandPersonality(
        $islandRow['islandOfPersonalityID'],
        $islandRow['name'],
        $islandRow['shortDescription'],
        $islandRow['image']
    );

    array_push($cards, $c);
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Islands</title>
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
        h1,
        h5 {
            font-family: "Inside Out", sans-serif;
        }

        h1 {
            text-align: center;
        }

        h5 {
            font-size: 50px;
        }

        body,
        html {
            height: 100%
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

        .island-li {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .carousel-item {
            width: 100%;
            height: 550px;
        }

        .carousel-item:hover {
            cursor: pointer;
        }

        .description {
            font-family: "Studio Feixen Variable", sans-serif;
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
                <div id="carouselExampleCaptions" class="carousel slide">
                    <div class="carousel-inner">
                        <?php $counter = 0; ?>
                        <?php foreach ($cards as $card) { ?>
                            <?php
                            $status = $counter == 0;
                            $card->isIslandActive($status);
                            echo $card->buildCard();
                            $counter++;
                            ?>
                        <?php } ?>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>