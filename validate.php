<?php
require 'quizz.php';

if(isset($_POST['choice'])) {
    $bonneReponse = 'Faux';
    if($bonneReponse == $_POST['choice']){
            echo 'Bonne reponse';
    }else{
            echo 'mauvaise reponse';
        }
}


?>