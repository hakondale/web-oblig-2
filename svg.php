<!doctype html>
<html lang="no">
    <head>
        <meta charset="utf-8">
        <title>Håkon Dale sin nettside</title>
        <link href="normalize.css" rel="stylesheet" type="text/css">
        <link href="articleGrid.css" rel="stylesheet" type="text/css">
        <link href="style.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Roboto+Mono|VT323" rel="stylesheet">
    </head>
    <body>
        <div id="article-grid">
            <header>
                <a href="index.php"><img src="Bilder/logo.png"></a>
            </header>

            <div class="sidebar">
                <div class="sidebarTop">
                    <h3>Oversikt</h3>
                    <p>Forelesninger:</p>
                    <p>Mandag: 12-14.</p>
                </div>
                <div class="sidebarBottom">
                    <h3>Viktig informasjon</h3>
                    <p>Oblig 2 innleveringsfrist: Onsdag kl 23:59.</p>
                </div>
            </div>

            <article class="body">
                <h1>SVG</h1>
                <p> 
                    SVG, eller Scalable Vector Images er et XML-basert format for å tegne to-dimensjonale vektorbilder. Vektorbilder har den fine kvaliteten med at de er tegnet av matematiske formler, noe som gjør at uansett hvor my man skalérer dem vil de altid ha samme oppløsning.
                </p>

                <svg width="300" height="200">
                    <circle cx="50" cy="50" r="40" class="eye" />
                    <ellipse cx="50" cy="50" rx="40" ry="10" />
                    <circle cx="50" cy="50" r="10" class="pupil"/>
                    <polygon points="50,50 100,150 0,150"/>
                </svg>
            </article>
            <div class="imgContainer">
                <img src="Bilder/svg.png" class="articleImage">
            </div>
        </div>
    </body>
</html>