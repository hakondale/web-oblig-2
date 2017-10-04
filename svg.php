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
                    <p>  Mandag: 14:15 - 16</p>
                    <p>  Onsdag: 12:15 - 14</p>
                    <p>  Fredag: 09:15 - 11</p>
                    <br>
                    <p>Øvingstimer</p>
                    <p>  Mandag: 08:15 - 12</p>
                    <p>  Tirsdag: 10:15 - 15</p>
                    <p>  Onsdag: 08:15 - 12</p>
                    <p>  Torsdag: 08:15 - 10</p>
                    <p>  Fredag: 11:15 - 16</p>
                </div>
                <div class="sidebarBottom">
                    <h3>Viktig informasjon</h3>
                    <p>Innleveringsfrister:</p>
                    <p>  Oblig 2 - 18. okt - kl</p>
                    <p>  Oblig 3 - 18. okt</p>
                </div>
            </div>

            <article class="body">
                <h1>SVG</h1>
                <p> 
                    SVG, eller Scalable Vector Images er et XML-basert format for å tegne to-dimensjonale vektorbilder. Vektorbilder har den fine kvaliteten med at de er tegnet av matematiske formler, noe som gjør at uansett hvor my man skalérer dem vil de altid ha samme oppløsning.
                </p>
                <p>Her under er et eksempel på hva man kan lage i SVG-formatet. 
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