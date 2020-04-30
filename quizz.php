    <?php

require_once 'ApiClass.php';
$cam = new WindyApi();
$photo1 = $cam->getPhoto(1521788187);
$photo2 = $cam->getPhoto(1511477795);
$photo3 = $cam->getPhoto(1575921043);
$photo4 = $cam->getPhoto(1230041254);
$photo5 = $cam->getPhoto(1567484660);
$photo6 = $cam->getPhoto(1354637608);
$photo7 = $cam->getPhoto(1284287764);
$photo8 = $cam->getPhoto(1494830834);
$temp1 = $cam->getweather(64.68,97.74);
$temp2 = $cam->getweather(48.85,2.35);
$temp3 = $cam->getWeather(25.34,51.52);
$temp4 = $cam->getweather(41.91,12.48);
$temp5 = $cam->getweather(31.26,121.47);
$temp6 = $cam->getweather(64.13,-21.94);
$temp7 = $cam->getweather(-1.29,36.81);
$temp8 = $cam->getweather(46.21,-63.26);
?>
    <div id="question1" class="">
        <img src="<?php echo $photo1['image']?>">
        <p>(la température actuelle de ce lieu est de <?php echo $temp1;?>°C)</p>
        <div class="quest" >
            <legend>Question 1 : Ce monument est il au Kazakhstan ou en Russie ? </legend>
            <button id="bad">Kazakhstan</button>
            <button id="good">Russie</button>
        </div>
    </div>
    <div id="question2" class="caché">
        <img src="<?php echo $photo2['image']?>">
        <p>(la température actuelle de ce lieu est de <?php echo $temp2;?>°C)</p>
        <div class="quest" >
            <legend>Question 2 <br><br> Sommes nous en France ?</legend>
            <button id="bad2">Faux</button>
            <button id="good2">Vrai</button>
        </div>
    </div>
    <div id="question3" class="caché">
        <img src="<?php echo $photo3['image']?>">
        <p>(la température actuelle de ce lieu est de <?php echo $temp3;?>°C)</p>
        <div class="quest" >
                <legend>Question 3 <br><br> Sommes nous en Europe ?</legend>
                <button id="good3">Faux</button>
                <button id="bad3">Vrai</button>
            </div>
    </div>
    <div id="question4" class="caché">
        <img src="<?php echo $photo4['image']?>">
        <p> (la température actuelle de ce lieu est de <?php echo $temp4;?>°C)</p>
        <div class="quest" >
            <legend>Question 4 <br><br> En quelle année à été terminé la place St-Pierre ?</legend>
            <button id="good4">1667</button>
            <button id="bad4">1982</button>
        </div>
    </div>
    <div id="question5" class="caché">
        <img src="<?php echo $photo5['image']?>">
        <p>(la température actuelle de ce lieu est de <?php echo $temp5;?>°C)</p>
        <div class="quest">
            <legend>Question 5 <br><br> Combien mesure l'Oriental Pearl Tv Tower ?</legend>
            <button id="good5">468m</button>
            <button id="bad5">684m</button>
        </div>
    </div>
    <div id="question6" class="caché">
        <img src="<?php echo $photo6['image']?>">
        <p>(la température actuelle de ce lieu est de <?php echo $temp6;?>°C)</p>
        <div class="quest" >
            <legend>Question 6 <br><br> Comment s'orthographie correctement cette ville Islandaise ?</legend>
            <button id="bad6">Rekyajvik</button>
            <button id="good6">Reykjavik</button>
        </div>
    </div>
    <div id="question7" class="caché">
        <p>(la température actuelle de ce lieu est de <?php echo $temp7;?>°C)</p>
        <img src="<?php echo $photo7['image']?>">
        <div class="temp">La température actuelle de ce lieu est de
            <?php echo $temp7;?>°C</div>
        <div class="quest" >
            <legend>Question 7 <br><br> A quel personnage de la serie La Casa de Papel, cette ville à prêtée son nom?</legend>

            <button id="bad7">Rio</button>
            <button id="good7">Nairobi</button>
        </div>
    </div>
    <div id="question8" class="caché">
        <img src="<?php echo $photo8['image']?>">
        <p>(la température actuelle de ce lieu est de <?php echo $temp8;?>°C)</p>
        <div class="quest" >
            <legend>Question 8 <br><br> S'agit il d'une station météorologique ou d'un aéroport ?</legend>
            <button id="good8">Aéroport</button>
            <button id="bad8">Station météorologique</button>
        </div>
    </div>
    <h1 id="confinement" class="caché">Le président Emmanuel Macron annonce la fin du confinement</h1>
