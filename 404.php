<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Error: File Not Found</title>
    <base href="/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="icon" href="assets/img/lo-logo.svg" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/font/font.css">
    <style>
        .noise {
            background-image: url('assets/img/noise.png');
            background-repeat: repeat;
            background-size: cover;
            height: 100vh;
        }

        .homepage-display {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="base">
        <video autoplay muted loop>
            <source src="assets/vid/blackhole.mp4" type="video/mp4">
        </video>
        <div class="blur">
            <div class="noise">
                <div class="custom-navbar d-none justify-content-between" id="customNavbar"></div>
                <div class="homepage-display p-5">
                    <div class="message">
                        <h4 class="message error">ERROR</h4>
                        <h1 class="message error-404 text-center">404</h1>
                        <p onmouseenter="applyCursorEffect()" onmouseleave="revertCursorEffect()">THIS PAGE FELL INTO A
                            BLACKHOLE</p>
                    </div>
                    <div class="go-back">
                        <p>The page you requested may have been moved, or it just doesn't exist.</p>
                        <a href="index.php" class="linkHome" onmouseenter="applyCursorEffect()"
                            onmouseleave="revertCursorEffect()">go back home</a>
                    </div>
                </div>
            </div>
            <div class="cursor" id="cursor"></div>
        </div>
    </div>
    <script src="assets/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>