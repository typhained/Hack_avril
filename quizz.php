<?php

require_once 'ApiClass.php';
//$photo1 = $cam->getPhoto(61.617,37.046,5);
//$photo2 = $cam->getPhoto(49.372,7.251,7);
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
    Nous sommes en France ? :
    <input type="submit" name="choice2" value="Vrai">
    <input type="submit" name="choice2" value="Faux"><br>
    <img src="<?php echo $photo2['image']?>">
    <!-- 49.372,7.251,7 -->
    <!-- Réponse FAUX -->
</form>

<h2>Question n°3</h2>
<form action="validate.php" id="quest3" method="post">
    Dans quel pays sommes nous ? :
    <input type="submit" name="choice3" value="Vrai">
    <input type="submit" name="choice3" value="Faux"><br>
    <!-- 38.462,-10.767,5 -->
    <!-- Réponse FAUX -->
</form>

<h2>Question n°4</h2>
<form action="validate.php" id="quest4" method="post">
    ? :
    <input type="submit" name="choice4" value="Vrai">
    <input type="submit" name="choice4" value="Faux"><br>
    <!-- -->
    <!-- -->
</form>

<h2>Question n°5</h2>
<form action="validate.php" id="quest5" method="post">
    ? :
    <input type="submit" name="choice5" value="Vrai">
    <input type="submit" name="choice5" value="Faux"><br>
    <!-- -->
    <!-- -->
</form>

<h2>Question n°6</h2>
<form action="validate.php" id="quest6" method="post">
     ? :
    <input type="submit" name="choice6" value="Vrai">
    <input type="submit" name="choice6" value="Faux"><br>
    <!-- -->
    <!-- -->
</form>

<h2>Question n°7</h2>
<form action="validate.php" id="quest7" method="post">
      ? :
    <input type="submit" name="choice7" value="Vrai">
    <input type="submit" name="choice7" value="Faux"><br>
    <!-- -->
    <!-- -->
</form>

<h2>Question n°8</h2>
<form action="validate.php" id="quest8" method="post">
      ? :
    <input type="submit" name="choice8" value="Vrai">
    <input type="submit" name="choice8" value="Faux"><br>
    <!-- -->
    <!-- -->
</form>


