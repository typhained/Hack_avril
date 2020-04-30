<?php
require_once 'ApiClass.php';
$cam = new WindyApi('J8lrm1QEzevtGO5nLI9OuJUvzkZZ7SQp');
$camResult1 = $cam->getCityCam(43.241,6.356,51);
$camResult2 = $cam->getCityCam(54.000,-10.236,11);
$camResult4 = $cam->getCityCam(65.710,-18.884,50);
$camResult3 = $cam->getCityCam(69.985,22.953,800);
//$camResult5 = $cam->getCityCam(-7.504,31.333,16);
$camResult6 = $cam->getCityCam(25.292,55.471,90);
$camResult7 = $cam->getCityCam(50.534,1.612,19);
$camResult8 = $cam->getCityCam(50.422,1.537,18);
$camResult9 = $cam->getCityCam(28.758,111.160,156);
$camResult10 = $cam->getCityCam(53.295,-9.547,57);


?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="src/css/biere.css">
    <title>Biere</title>
</head>
<body>
    <img id="flash" src="src/img/flash.png">
    <img src="src/img/brume.png" id="brume" />
    <article>
        <p id="nara-biere">C'était si beau à <?=$camResult1['camTitle']?> !</p>
    </article>
    <div id="over-brume">
            <iframe id='frame' src="<?=$camResult1['camEmbed']?>?autoplay=1&showinfo=0"  allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\"></iframe>
        </article>
    </div>
</body>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.0.js" integrity="sha256-r/AaFHrszJtwpe+tHyNi/XCfMxYpbsRg2Uqn0x3s2zc=" crossorigin="anonymous"></script>
<script>
    var day = "3";
    $('#flash').fadeOut(3500);

    localStorage.setItem("day", day);
//cam2
    window.setTimeout(function () {
        $('#frame').attr('src', '<?=$camResult2['camEmbed']?>?autoplay=1&showinfo=0');
    }, 6000);
    window.setTimeout(function () {
       $('#nara-biere').html("Une vue à couper le souffle à <?=$camResult2['camTitle']?>!")
    }, 6010);

//cam3
    window.setTimeout(function () {
        $('#frame').attr('src', '<?=$camResult3['camEmbed']?>?autoplay=1&showinfo=0');
    }, 12000);
    window.setTimeout(function () {
        $('#nara-biere').html("<?=$camResult3['camTitle'] ?> était époustouflant")
    }, 12010);

//cam4
    window.setTimeout(function () {
        $('#frame').attr('src', '<?=$camResult4['camEmbed']?>?autoplay=1&showinfo=0');
    }, 18000);
    window.setTimeout(function () {
        $('#nara-biere').html("A <?=$camResult4['camTitle']?>, il faisait trop froid!")
    }, 18010);

//cam7
    window.setTimeout(function () {
        $('#frame').attr('src', '<?=$camResult7['camEmbed']?>?autoplay=1&showinfo=0');
    }, 24000);
    window.setTimeout(function () {
        $('#nara-biere').html("<?=$camResult7['camTitle']?>")
    }, 24010);

//cam8
    window.setTimeout(function () {
        $('#frame').attr('src', '<?=$camResult10['camEmbed']?>?autoplay=1&showinfo=0');
    }, 30000);
    window.setTimeout(function () {
        $('#nara-biere').html("Je me souviens de <?=$camResult10['camTitle']?> comme si c'était hier!")
    }, 30010);

//cam9
    window.setTimeout(function () {
        $('#frame').attr('src', '<?=$camResult9['camEmbed']?>?autoplay=1&showinfo=0');
    }, 36000);
    window.setTimeout(function () {
        $('#nara-biere').html("<?=$camResult9['camTitle']?> avait un paysage ahurissant!")
    }, 36010);

//cam10
    window.setTimeout(function () {
        $('#frame').attr('src', '<?=$camResult8['camEmbed']?>?autoplay=1&showinfo=0');
    }, 42000);
    window.setTimeout(function () {
        $('#nara-biere').html("<?=$camResult8['camTitle']?>, pas de beau temps mais de la bonne binouse.")
    }, 42010);
    window.setTimeout(function () {
        $('#flash').fadeIn(2000);
    }, 48000);

    window.setTimeout(function () {
        location.href = 'index.php';
    }, 50000);
</script>
<?php
var_dump($camResult1);
var_dump($camResult2);

var_dump($camResult3);

var_dump($camResult4);

var_dump($camResult9);

var_dump($camResult6);
var_dump($camResult7);

var_dump($camResult8);
var_dump($camResult10);


?>
</html>