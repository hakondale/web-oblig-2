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
                <h1>Git og Github</h1>
                <p>Git er noe som kalles et versjonskontrollsystem. Det vil si at alle forandringer man gjør på nettsiden(eller andre tjenester), vil bli lagret, og synlig. Et eksempel på hvordan dette er nyttig er hvis man har fått en bug på siden sin og man ikke vet hvor den kommer fra kan man gå tilbake til tidligere versjoner og se hva som har forandret seg. 
                </p>
                <p>Github er et grafisk brukergrensesnitt for git, hvor man kan publisere ("pushe") filene slik at andre også kan se dem og, dersom du tillater det, forrandre dem. Når du pusher en fil fra din PC til Github blir filen lagret på Github sin server slik at andre kan se og laste dem ned. Github holder god kontroll over forrandringer som blir gjort ved å bruke "brancher". Hvis to stykker har gjort hver sine forrandringer på samme fil, gjør github at man kan "merge" disse filene slik at begge forrandringene blir brukt. Det tillater derfor flere mennesker å kunne jobbe på samme prosjekt uten at det blir så rotete. 
                </p>

            </article>
            <div class="imgContainer">
                <img src="Bilder/git.png" class="articleImage">
            </div>
        </div>
    </body>
</html>