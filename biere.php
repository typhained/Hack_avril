<?php
require_once 'ApiClass.php';
$cam = new WindyApi('J8lrm1QEzevtGO5nLI9OuJUvzkZZ7SQp');
$camResult1 = $cam->getCityCam(43.382,5.075,10);
$camResult2 = $cam->getCityCam(36.558,137.997,8);
$camResult3 = $cam->getCityCam(64.720,-22.769,50);
$camResult4 = $cam->getCityCam(60.213,16.754,136);
//$camResult5 = $cam->getCityCam(-7.504,31.333,16);
//$camResult6 = $cam->getCityCam(47.42,-139.83,4);
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
    <img src="src/img/brume.png" id="brume" />
    <article>
        <p id="nara-biere"><?=$camResult1['camTitle']?> était tellement beau!</p>
    </article>
    <div id="over-brume">
            <iframe id='frame' src="<?=$camResult1['camEmbed']?>?autoplay=1&showinfo=0"  allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>
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

    localStorage.setItem("day", day);
//cam2
    window.setTimeout(function () {
       $('#nara-biere').html("Une vue à couper le souffle!")
    }, 5000);
    window.setTimeout(function () {
            $('#frame').attr('src', '<?=$camResult2['camEmbed']?>?autoplay=1&showinfo=0');
    }, 5000);
//cam3
    window.setTimeout(function () {
        $('#nara-biere').html("<?=$camResult3['camTitle'] ?> est époustouflant")
    }, 10000);
    window.setTimeout(function () {
        $('#frame').attr('src', '<?=$camResult3['camEmbed']?>?autoplay=1&showinfo=0');
    }, 10000);
//cam4
    window.setTimeout(function () {
        $('#nara-biere').html("A <?=$camResult4['camTitle']?>, il faisait trop froid!")
    }, 15000);
    window.setTimeout(function () {
        $('#frame').attr('src', '<?=$camResult4['camEmbed']?>?autoplay=1&showinfo=0');
    }, 15000);
//cam7
    window.setTimeout(function () {
        $('#nara-biere').html("<?=$camResult7['camTitle']?>")
    }, 20000);
    window.setTimeout(function () {
        $('#frame').attr('src', '<?=$camResult7['camEmbed']?>?autoplay=1&showinfo=0');
    }, 20000);
//cam8
    window.setTimeout(function () {
        $('#nara-biere').html("<?=$camResult8['camTitle']?>")
    }, 25000);
    window.setTimeout(function () {
        $('#frame').attr('src', '<?=$camResult8['camEmbed']?>?autoplay=1&showinfo=0');
    }, 25000);
//cam9
    window.setTimeout(function () {
        $('#nara-biere').html("<?=$camResult9['camTitle']?> avait un paysage ahurissant!")
    }, 30000);
    window.setTimeout(function () {
        $('#frame').attr('src', '<?=$camResult9['camEmbed']?>?autoplay=1&showinfo=0');
    }, 30000);
//cam10
    window.setTimeout(function () {
        $('#nara-biere').html("<?=$camResult10['camTitle']?>  pas de beau temps mais de la bonne binouse")
    }, 35000);
    window.setTimeout(function () {
        $('#frame').attr('src', '<?=$camResult10['camEmbed']?>?autoplay=1&showinfo=0');
    }, 35000);

</script>


</html>