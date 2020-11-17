<!doctype html>
<html lang="en">
<head>
    <title>Over WFFlix</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="views/css/about_page.css" type="text/css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<div class="jumbotron">
    <div class="container">
        <h1 class="display-2">WFFLIX</h1>
        <p class="lead">Makkelijk, snel, programmeren</p>
    </div>
</div>
<?php

require 'sidebar.view.php'
?>


<div class="main">
    <div class="container">

        <div class="card bg-dark text-white">
            <img class="card-img-top" src="asset/images/code5.jpg" alt="Card image cap">
            <div class="card-img-overlay">
                <h5 class="card-title" id="QuoteCardTitle">WFFlix</h5>
                <blockquote class="blockquote mb-0">
                    <p id="QuoteCardText">Makkelijk, snel, programmeren!</p>
                    <footer class="blockquote-footer" id="QuoteCardFooter"> ADSD Team B3</footer>
                </blockquote>
            </div>
        </div>

        <br>


    <div id="accordion">
        <div class="card text-white bg-secondary">
            <div class="card-header text-white" id="headingOne">
                <h5 class="mb-0">
                    <button class="btn collapsed text-white" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Onstaan van WFFlix
                    </button>
                </h5>
            </div>

            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                    Meer dan 190 miljoen mensen gebruiken Netflix. Het is een van de grotere streamingdiensten in de wereld en als je aan mensen vraagt
                    of ze Netflix kennen is het antwoord bijna altijd “ja”.
                    In een wereld waarin steeds meer digitaliseert is de vraag naar programmeurs enorm.
                    Met een groeiend aantal programmeurs stijgt ook automatisch de vraag naar uitleg en informatie over programmeren.
                    Daarom wordt het tijd om een streamingsdienst te maken waar filmpjes/video’s op geplaatst worden en er uitleg gegeven wordt over programmeertalen.
                    Deze applicatie is in principe een studie opdracht van de module ‘Database, Ontwerpen, Modelleren en programmeren’ binnen de opleiding AD Software Development van de hogeschool Windesheim Flevoland.
                    De naam van deze applicatie is daarom WFFlix, een combinatie van WF(Windesheim Flevoland) en Flix( overgenomen van Netflix). Iedereen heeft wel eens de gedachte van: “hoe zat dat ook alweer?”, en met WFFlix willen we het mogelijk maken om snel en makkelijk informatie te verschaffen aan beginnende en ervaren programmeurs.
                </div>
            </div>
        </div>
        <div class="card text-white bg-secondary">
            <div class="card-header" id="headingTwo">
                <h5 class="mb-0">
                    <button class="btn collapsed text-white" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                       Visie
                    </button>
                </h5>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                <div class="card-body">
                    Wij willen met WFFlix op een makkelijke en laagdrempelige manier iedereen in aanraking willen laten komen met de wereld van programmeren, en mensen handvaten geven in een snel digitaliserende wereld.
                </div>
            </div>
        </div>
        <div class="card text-white bg-secondary">
            <div class="card-header" id="headingThree">
                <h5 class="mb-0">
                    <button class="btn collapsed text-white" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Onze doelgroep
                    </button>
                </h5>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                <div class="card-body">
                    WFFlix heeft als doelgroep de programmeurs. Hierbij maken wij geen onderscheid tussen man/vrouw, leeftijd etc.
                    Iedereen, van professionele programmeurs tot hobbyisten is welkom om via WFFlix iets te leren over programmeren
                </div>
            </div>
        </div>
    </div>

    <div class="card text-white bg-secondary">
        <div class="card-header" id="headingFour">
            <h5 class="mb-0">
                <button class="btn collapsed text-white" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                    Het team achter WFFlix
                </button>
            </h5>
        </div>
        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
            <div class="card-body">
                WFFlix is opgebouwd door team B3, bestaande uit 6 studenten van de opleiding AD Software Development aan Windesheim te Almere.
                Team B3 wordt gevormd door: Ali, Houwaida, Maksim, Roderik, Amjad & Trisjan.
            </div>
        </div>
    </div>

</div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

</body>
</html>
