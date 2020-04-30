
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="src/css/index.css">
    <title>Salon</title>
</head>
<body>

<section id="salon" class="jour">
    <img class="hidden" id="flash" src="src/img/flash.png">
    <article>
            <p id="nara-index">Voyons voir ce qu'il y a à la télé ce soir!</p>
    </article>

    <div  class="col" id="tv">
        <img class="hidden" src="src/img/BN.png">
    </div>
    <article>
        <div class="tableBasse1">
                <img class="table-size" src="src/img/table.png" alt="table gauche" />
                <div>
                    <img src="src/img/telecommande.png" class="img-fluid" alt="telecommande" id="telecommande">
                </div>
                <div>
                    <img src="src/img/biere.png" class="img-fluid" alt="biere" id="biere">
                    <img src="src/img/biere-vide.png" class="img-fluid hidden" alt="biere vide" id="biere-vide">
                </div>
        </div>
        <div class="tableBasse2">
                <img class="table-size" src="src/img/table.png" alt="table droite" />
                <div>
                    <img src="src/img/journal.png" class="img-fluid" alt="journal" id="journal">
                </div>
            </div>
        </div>
    </article>
    <div>
        <p><audio src="src/beer.mp3" controls id="player"></audio></p>
    </div>
</section>
<section class="container" id="corona">

    <iframe id="yt" width="560" height="315" src="" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

</section>
<div id="end">THE END</div>

</body>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.0.js" integrity="sha256-r/AaFHrszJtwpe+tHyNi/XCfMxYpbsRg2Uqn0x3s2zc=" crossorigin="anonymous"></script>
<script src="src/js/index.js"></script>
</html>
