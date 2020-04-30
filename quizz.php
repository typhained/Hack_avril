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
?>
    <div id="question1" class="">
        <img src="<?php echo $photo1['image']?>">
        <form action="validate.php" id="quest1" method="post">
            <legend>Question 1 : Ce monument est il au Kazakhstan ou en Russie ?</legend>
            <input type="submit" name="choice" value="Kazakhstan">
            <input type="submit" name="choice" value="Russie">
        </form>
    </div>
    <div id="question2" class="caché">
        <img src="<?php echo $photo2['image']?>">
        <form action="validate.php" id="quest2" method="post">
            <legend>Question 2 : Sommes nous en France ?</legend>
            <input type="submit" name="choice2" value="Vrai">
            <input type="submit" name="choice2" value="Faux">
            <!-- 49.372,7.251,7 -->
            <!-- Réponse FAUX -->
        </form>
    </div>
    <div id="question3" class="caché">
        <img src="<?php echo $photo3['image']?>">
            <form action="validate.php" id="quest3" method="post">
                <legend>Question 3 : Sommes nous en Europe ?</legend>
                <input type="submit" name="choice3" value="Vrai">
                <input type="submit" name="choice3" value="Faux">
                <!-- 38.462,-10.767,5 -->
                <!-- Réponse VRAI -->
            </form>
    </div>
    <div id="question4" class="caché">
        <img src="<?php echo $photo4['image']?>">
        <form action="validate.php" id="quest4" method="post">
            <legend>Question 4 : En quelle année à été terminé la place St-Pierre ?</legend>
            <input type="submit" name="choice4" value="1667">
            <input type="submit" name="choice4" value="1982">
            <!-- Réponse VRAI -->
        </form>
    </div>
    <div id="question5" class="caché">
        <img src="<?php echo $photo5['image']?>">
        <form action="validate.php" id="quest5" method="post">
            <legend>Question 5 : Combien mesure l'Oriental Pearl Tv Tower ?</legend>
            <input type="submit" name="choice5" value="468m">
            <input type="submit" name="choice5" value="684m">
        </form>
    </div>
    <div id="question6" class="caché">
        <img src="<?php echo $photo6['image']?>">
        <form action="validate.php" id="quest6" method="post">
            <legend>Question 6 : Comment s'orthographie correctement cette ville Islandaise ?</legend>
            <input type="submit" name="choice6" value="Rekyajvik">
            <input type="submit" name="choice6" value="Reykjavik">
        </form>
    </div>
    <div id="question7" class="caché">
        <img src="<?php echo $photo7['image']?>">
        <form action="validate.php" id="quest7" method="post">
            <legend>Question 7 : A quel personnage de la serie La Casa de Papel, cette ville à prêtée son nom?</legend>
            <input type="submit" name="choice7" value="Rio">
            <input type="submit" name="choice7" value="Nairobi">
        </form>
    </div>
    <div id="question8" class="caché">
        <img src="<?php echo $photo8['image']?>">
        <form action="validate.php" id="quest8" method="post">
            <legend>Question 8 : S'agit il d'une station météorologique ou d'un aéroport ?</legend>
            <input type="submit" name="choice8" value="Station météorologique">
            <input type="submit" name="choice8" value="Aéroport">
        </form>
    </div>
    <p class="caché">Le président Emmanuel Macron annonce la fin du confinement</p>

