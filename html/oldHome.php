<!DOCTYPE html>
<html lang="de">

<head>

    <title>Webshop - Index</title>
    <meta charset="utf-8">

    <!-- Webseite responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Stylesheets für Navigationsbereich -->
    <link rel="stylesheet" href="../css/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Für das Karussell-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <style>
        .carousel-inner>.item>img,
        .carousel-inner>.item>a>img {
            width: 42%;
            margin: auto;
        }
    </style>

</head>

<body>
    <!-- Kopfbereich -->
    <header class="w3-container w3-padding-32">
        <div class="w3-bar w3-light-gray">
            <span class="w3-bar-item w3-pale-yellow"> My Webshop</span>
            <a href="home.php" class="w3-bar-item w3-button w3-hide-small"></i> Home</a>
            <a href="#produkte.html" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-th"></i> Produkte</a>
            <a href="#überuns.html" class="w3-bar-item w3-button w3-hide-small"> Über uns</a>
            <a href="login.html" class="w3-bar-item w3-button w3-hide-small w3-right w3-light-gray"><i
                    class="fa fa-user"></i> Login</a>
        </div>
    </header>

    <!-- Karussell Slideshow-->
    <div class="container">
        <br>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
                <li data-target="#myCarousel" data-slide-to="4"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">

                <div class="item active">
                    <img src="../images/example1.jpg" alt="Chania" width="460" height="345">
                    <div class="carousel-caption">
                        <h3>Produkt 1</h3>
                        <p>Hier könnte eine Beschreibung stehen!</p>
                    </div>
                </div>

                <div class="item">
                    <img src="../images/example2.jpg" alt="Chania" width="460" height="345">
                    <div class="carousel-caption">
                        <h3>Produkt 2</h3>
                        <p>Hier könnte eine Beschreibung stehen!</p>
                    </div>
                </div>

                <div class="item">
                    <img src="../images/example3.png" alt="Chania" width="460" height="345">
                    <div class="carousel-caption">
                        <h3>Produkt 3</h3>
                        <p>Hier könnte eine Beschreibung stehen!</p>
                    </div>
                </div>

                <div class="item">
                    <img src="../images/example4.jpeg" alt="Chania" width="460" height="345">
                    <div class="carousel-caption">
                        <h3>Produkt 4</h3>
                        <p>Hier könnte eine Beschreibung stehen!</p>
                    </div>
                </div>

                <div class="item">
                    <img src="../images/example5.jpeg" alt="Chania" width="460" height="345">
                    <div class="carousel-caption">
                        <h3>Produkt 5</h3>
                        <p>Hier könnte eine Beschreibung stehen!</p>
                    </div>
                </div>

            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <!-- Fußleiste -->
    <footer class="w3-container w3-padding-32 w3-margin-top">
        <div class="w3-bar w3-light-gray">
            <span class="w3-bar-item w3-pale-yellow"> User online: 0</span>
            <a href="#kontakt.html" class="w3-bar-item w3-button w3-right"><i class="fa fa-envelope"></i>
                Kontakt</a>
            <a href="#impressum.html" class="w3-bar-item w3-button w3-right"> Impressum</a>
        </div>
    </footer>

</body>

</html>