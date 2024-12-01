<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hey, it's Louie</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="icon" href="assets/img/lo-logo.svg" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/navbar.css">
    <link rel="stylesheet" href="assets/font/font.css">
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
    <div class="base">
        <video autoplay muted loop>
            <source src="assets/vid/blinds-rolling.mp4" type="video/mp4">
        </video>
        <div class="blur">
            <div class="noise">
                <div class="custom-navbar d-flex justify-content-between" id="customNavbar">
                </div>
                <div class="homepage-display" id="mainDisplay">
                    <div class="row">
                        <div class="col">
                            <div class="greet">
                                <h1 class="greet greetings">Hey, it's <span class="greet name"
                                        onmouseenter="applyCursorEffect()"
                                        onmouseleave="revertCursorEffect()">LOUIE.</span></h1>
                                <br>
                                <h4>i'm a <span class="greet skill" onmouseenter="applyCursorEffect()"
                                        onmouseleave="revertCursorEffect()">CODER</span></h4>
                                <br>
                                <h4>slash <span class="greet skill" onmouseenter="applyCursorEffect()"
                                        onmouseleave="revertCursorEffect()">DESIGNER</span></h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="actions">
                                <ul>
                                    <li>
                                        <a href="about.php" class="fontTheme" onmouseenter="applyCursorEffect()"
                                            onmouseleave="revertCursorEffect()">SEE
                                            MY PROFILE</a>
                                    </li>
                                    <li>
                                        <a href="projects.php" class="fontTheme" onmouseenter="applyCursorEffect()"
                                            onmouseleave="revertCursorEffect()">SEE
                                            MY PROJECTS</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="actions2">
                                <a href="about.php">
                                    <div class="btn-redirect fontTheme mb-2 mx-auto" onmouseenter="applyCursorEffect()"
                                        onmouseleave="revertCursorEffect()">SEE MY PROFILE</div>
                                </a>
                                <a href="projects.php">
                                    <div class="btn-redirect fontTheme mx-auto" onmouseenter="applyCursorEffect()"
                                        onmouseleave="revertCursorEffect()">SEE MY PROJECTS</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="menu-display" id="menuDisplay"></div>
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