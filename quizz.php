<?php

require_once 'ApiClass.php';
$cam = new WindyApi();
$photo1 = $cam->getPhoto(1368909881);
$photo2 = $cam->getPhoto(1368909881);
$photo3 = $cam->getPhoto(1368909881);
$photo4 = $cam->getPhoto(1584623106);
$photo5 = $cam->getPhoto(1368909881);
$photo6 = $cam->getPhoto(1368909881);
$photo7 = $cam->getPhoto(1368909881);
$photo8 = $cam->getPhoto(1368909881);

?>

<h2>Question n°1</h2>
<form action="validate.php" id="quest1" method="post">
    Ce monument est il au Kazakhstan ? :
    <input type="submit" name="choice" value="Vrai">
    <input type="submit" name="choice" value="Faux"><br>
    <img src="<?php echo $photo1['image']?>">
    <!-- 61.617,37.046,5 -->
    <!-- Réponse FAUX -->
</form>

<h2>Question n°2</h2>
<form action="validate.php" id="quest2" method="post">
    Sommes nous en France ? :
    <input type="submit" name="choice2" value="Vrai">
    <input type="submit" name="choice2" value="Faux"><br>
    <img src="<?php echo $photo2['image']?>">
    <!-- 49.372,7.251,7 -->
    <!-- Réponse FAUX -->
</form>

<h2>Question n°3</h2>
<form action="validate.php" id="quest3" method="post">
    Sommes nous en Europe ? :
    <input type="submit" name="choice3" value="Vrai">
    <input type="submit" name="choice3" value="Faux"><br>
    <img src="<?php echo $photo3['image']?>">
    <!-- 38.462,-10.767,5 -->
    <!-- Réponse VRAI -->
</form>

<h2>Question n°4</h2>
<form action="validate.php" id="quest4" method="post">
    Cette montagne est en Suisse ? :
    <input type="submit" name="choice4" value="Vrai">
    <input type="submit" name="choice4" value="Faux"><br>
    <img src="<?php echo $photo4['image']?>">
    <!-- Réponse VRAI -->
</form>

<h2>Question n°5</h2>
<form action="validate.php" id="quest5" method="post">
    ? :
    <input type="submit" name="choice5" value="Espagne">
    <input type="submit" name="choice5" value="Italie"><br>
    <img src="<?php echo $photo5['image']?>">
    <!-- -->
</form>

<h2>Question n°6</h2>
<form action="validate.php" id="quest6" method="post">
     ? :
    <input type="submit" name="choice6" value="Vrai">
    <input type="submit" name="choice6" value="Faux"><br>
    <img src="<?php echo $photo6['image']?>">
    <!-- -->
</form>

<h2>Question n°7</h2>
<form action="validate.php" id="quest7" method="post">
      ? :
    <input type="submit" name="choice7" value="Vrai">
    <input type="submit" name="choice7" value="Faux"><br>
    <img src="<?php echo $photo7['image']?>">
    <!-- -->
</form>

<h2>Question n°8</h2>
<form action="validate.php" id="quest8" method="post">
      ? :
    <input type="submit" name="choice8" value="Vrai">
    <input type="submit" name="choice8" value="Faux"><br>
    <img src="<?php echo $photo8['image']?>">
    <!-- -->
</form>


