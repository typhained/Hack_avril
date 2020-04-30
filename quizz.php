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
        <div id="quest1">
            <legend>Question 1 : Ce monument est il au Kazakhstan ou en Russie ? (la température actuelle de ce lieu est de
            <?php echo $temp1;?>°C)</legend>
            <button id="bad">Kazakhstan</button>
            <button id="good">Russie</button>
        </div>
    </div>
    <div id="question2" class="caché">
        <img src="<?php echo $photo2['image']?>">
        <div id="quest2">
            <legend>Question 2 : Sommes nous en France ? (la température actuelle de ce lieu est de
                <?php echo $temp2;?>°C)</legend>
            <button id="bad2">Faux</button>
            <button id="good2">Vrai</button>
            <!-- 49.372,7.251,7 -->
            <!-- Réponse FAUX -->
        </div>
    </div>
    <div id="question3" class="caché">
        <img src="<?php echo $photo3['image']?>">
            <div id="quest3">
                <legend>Question 3 : Sommes nous en Europe ? (la température actuelle de ce lieu est de
                    <?php echo $temp3;?>°C)</legend>
                <button id="good3">Faux</button>
                <button id="bad3">Vrai</button>
                <!-- 38.462,-10.767,5 -->
                <!-- Réponse VRAI -->
            </div>
    </div>
    <div id="question4" class="caché">
        <img src="<?php echo $photo4['image']?>">
        <div id="quest4">
            <legend>Question 4 : En quelle année à été terminé la place St-Pierre ? (la température actuelle de ce lieu est de
                <?php echo $temp4;?>°C)</legend>
            <button id="good4">1667</button>
            <button id="bad4">1982</button>
            <!-- Réponse VRAI -->
        </div>
    </div>
    <div id="question5" class="caché">
        <img src="<?php echo $photo5['image']?>">
        <div id="quest5">
            <legend>Question 5 : Combien mesure l'Oriental Pearl Tv Tower ? (la température actuelle de ce lieu est de
                <?php echo $temp5;?>°C)</legend>
            <input type="submit" name="choice5" value="468m">
            <input type="submit" name="choice5" value="684m">
            <button id="good5">468m</button>
            <button id="bad5">Russie</button>
        </div>
    </div>
    <div id="question6" class="caché">
        <img src="<?php echo $photo6['image']?>">
        <div id="quest6">
            <legend>Question 6 : Comment s'orthographie correctement cette ville Islandaise ? (la température actuelle de ce lieu est de
                <?php echo $temp6;?>°C)</legend>
            <button id="bad6">Rekyajvik</button>
            <button id="good6">Reykjavik</button>
        </div>
    </div>
    <div id="question7" class="caché">
        <img src="<?php echo $photo7['image']?>">
        <div id="quest7">
            <legend>Question 7 : A quel personnage de la serie La Casa de Papel, cette ville à prêtée son nom? (la température actuelle de ce lieu est de
                <?php echo $temp7;?>°C)</legend>
            <button id="bad7">Rio</button>
            <button id="good7">Nairobi</button>
        </div>
    </div>
    <div id="question8" class="caché">
        <img src="<?php echo $photo8['image']?>">
        <div id="quest8">
            <legend>Question 8 : S'agit il d'une station météorologique ou d'un aéroport ? (la température actuelle de ce lieu est de
                <?php echo $temp8;?>°C)</legend>
            <button id="good8">Aéroport</button>
            <button id="bad8">Station météorologique</button>
        </div>
    </div>
    <p class="caché">Le président Emmanuel Macron annonce la fin du confinement</p>
