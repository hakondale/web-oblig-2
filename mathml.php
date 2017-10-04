<!doctype html>
<html lang="no">
    <head>
        <meta charset="utf-8">
        <title>MathML</title>
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
                <h1>MathML</h1>
                <p>MathML eller "Mathematical Markup Language" er et markeringsspråk, basert på XML som er beregnet til å fremstille matematiske formler på nett. Språket ligner på HTML, men har enkelte ulikheter, som for eksempel at man ikke kan avslutte "tager". MathML vil ikke gjøre utregninger, men bare vise frem matematiske utrykk i et leselig format. Før MathML ble oppfunnet, måtte man laste opp formlene som bilder man hadde laget i andre programmer. Det finnes to forskjellige syntakser i MathML, og de heter Presentation MathML (P-MathML), og Content MathML (C-MathML). P-MathML er best egnet for å gi en visuel fremstilling av formelen, mens C-MathML beskriver bedre hva utrykket gjør, og beholder semantikken. MathML er ikke støttet av nettleseren Chrome, så hvis du vil se hvordan det fungerer bør du bytte nettleser til for eksempel Firefox. </p>
                <p>Vi skal nå se noen eksempler på hvordan MathML kan brukes. Se kildekode for beskrivelser av hvordan semantikken er bygget opp.</p>
                <math>
                    <!-- <mn> er en "number"-tag som brukes med nummere -->
                    <mi>5</mi>
                    <!-- Det tegnet som kommer først inni <msup> vil bli opphøyd i det som står i neste  -->
                    <msup>
                        <!-- <mi> er en "identifyer"-tag som brukes med variabler, funksjonsnavn, og symboler-->
                        <mi>x</mi>
                        <mn>2</mn>
                    </msup>
                    <!-- <mo> er operator-taggen-->
                    <mo>+</mo>
                    <mi>b</mi>
                    <mi>x</mi>
                    <mo>+</mo>
                    <mi>c</mi>
                </math>
                <br>
                <br>
                <math>
                    <!-- Her starter parantesen-->
                    <mfenced>
                        <!--                        brøk-->
                        <mfrac>
                            <!-- over brøkstreken-->
                            <mrow>
                                <mi>x</mi>
                                <mo>+</mo>
                                <mn>2</mn>
                            </mrow>
                            <!-- under brøkstreken-->
                            <mn>3</mn>
                        </mfrac>
                        <!-- her avsluttes parantesen-->
                    </mfenced>
                </math>
                <br>
                <br>
                <math>
                    <!-- <msqrt> brukes for kvadratrøtterrøtter-->
                    <msqrt>
                        <mi>x</mi><mo>+</mo><mn>2</mn>
                    </msqrt>
                </math>
            </article>
            <img src="Bilder/math.png" class="articleImage">
        </div>
    </body>
</html>