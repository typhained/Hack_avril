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

<h2>Question n°1</h2>
<form action="journal.php" id="quest1" method="post">
    Ce monument est il au Kazakhstan ou en Russie ? :
    <input type="submit" name="choice" value="Kazakhstan">
    <input type="submit" name="choice" value="Russie"><br>
    <img src="<?php echo $photo1['image']?>">

</form>

<h2>Question n°2</h2>
<form action="journal.php" id="quest2" method="post">
    Sommes nous en France ? :
    <input type="submit" name="choice2" value="Vrai">
    <input type="submit" name="choice2" value="Faux"><br>
    <img src="<?php echo $photo2['image']?>">

</form>

<h2>Question n°3</h2>
<form action="journal.php" id="quest3" method="post">
    Sommes nous en Europe ? :
    <input type="submit" name="choice3" value="Vrai">
    <input type="submit" name="choice3" value="Faux"><br>
    <img src="<?php echo $photo3['image']?>">

</form>

<h2>Question n°4</h2>
<form action="journal.php" id="quest4" method="post">
    En quelle année à été terminé la place St-Pierre ? :
    <input type="submit" name="choice4" value="1667">
    <input type="submit" name="choice4" value="1982"><br>
    <img src="<?php echo $photo4['image']?>">

</form>

<h2>Question n°5</h2>
<form action="journal.php" id="quest5" method="post">
    Combien mesure l'Oriental Pearl Tv Tower ? :
    <input type="submit" name="choice5" value="468m">
    <input type="submit" name="choice5" value="684m"><br>
    <img src="<?php echo $photo5['image']?>">

</form>

<h2>Question n°6</h2>
<form action="journal.php" id="quest6" method="post">
    Comment s'orthographie correctement cette ville Islandaise ? :
    <input type="submit" name="choice6" value="Rekyajvik">
    <input type="submit" name="choice6" value="Reykjavik"><br>
    <img src="<?php echo $photo6['image']?>">

</form>

<h2>Question n°7</h2>
<form action="journal.php" id="quest7" method="post">
    A quel personnage de la serie La Casa de Papel, cette ville à prêtée son nom? :
    <input type="submit" name="choice7" value="Rio">
    <input type="submit" name="choice7" value="Nairobi"><br>
    <img src="<?php echo $photo7['image']?>">

</form>

<h2>Question n°8</h2>
<form action="journal.php" id="quest8" method="post">
    S'agit il d'une station météorologique ou d'un aéroport ? :
    <input type="submit" name="choice8" value="Station météorologique">
    <input type="submit" name="choice8" value="Aéroport"><br>
    <img src="<?php echo $photo8['image']?>">

</form>