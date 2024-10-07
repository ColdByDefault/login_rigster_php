<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/burgerMenue.css">
    <link rel="stylesheet" href="./styles/navi.css">
    <link rel="stylesheet" href="./styles/main.css">
    <link rel="stylesheet" href="./styles/oeffnungszeiten.css">
    <link rel="stylesheet" href="./styles/kontaktformular.css">
    <link rel="stylesheet" href="./styles/header.css">
    <link rel="stylesheet" href="./styles/footer.css">
    <title>Bürger Verwaltung</title>

    <script>
    // AJAX-Funktion, um die Seite zu laden, ohne die ganze Seite neu zu laden
    function loadPage(page) {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("main-content").innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", "./view/" + page + ".php", true); // Seiteninhalt abrufen
        xhttp.send();
    }

    // Verhindert das Standardverhalten des Links und lädt die Seite per AJAX
    function setNavListeners() {
        var links = document.querySelectorAll(".nav-link");
        links.forEach(function(link) {
            link.addEventListener("click", function(event) {
                event.preventDefault(); // verhindert die Seitenweiterleitung
                var page = this.getAttribute("data-page");
                loadPage(page);
            });
        });
    }

    // Führt die setNavListeners Funktion aus, sobald die Seite vollständig geladen ist
    window.onload = function() {
        setNavListeners();
        loadPage("main"); // lädt die Startseite beim Initialisieren
    };
    </script>
</head>

<body>
    <header>
        <h1>Willkommen</h1>
    </header>

    <?php
    // Das Navigationsmenü und das Bürgermenü werden wie gewohnt geladen
    require "./view/navi.php";
    require "./view/burgerMenue.php";
    ?>

    <div id="main-content">
        <!-- Dynamischer Inhalt wird hier geladen -->
    </div>

    <?php
    // Footer wird wie gewohnt eingebunden
    require "./view/footer.php";
    ?>
</body>

</html>