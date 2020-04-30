<?php
require 'quizz.php';

if(isset($_POST['choice'])) {
    $bonneReponse = 'Russie';
    if($bonneReponse == $_POST['choice']){
            echo 'Bonne reponse';
    }else{
            echo 'mauvaise reponse';
    }
}
if(isset($_POST['choice2'])) {
    $bonneReponse = 'Vrai';
    if($bonneReponse == $_POST['choice2']){
        echo 'Bonne reponse';
    }else{
        echo 'mauvaise reponse';
    }
}
if(isset($_POST['choice3'])) {
    $bonneReponse = 'Faux';
    if($bonneReponse == $_POST['choice3']){
        echo 'Bonne reponse';
    }else{
        echo 'mauvaise reponse';
    }
}
if(isset($_POST['choice4'])) {
    $bonneReponse = '1667';
    if($bonneReponse == $_POST['choice4']){
        echo 'Bonne reponse';
    }else{
        echo 'mauvaise reponse';
    }
}
if(isset($_POST['choice5'])) {
    $bonneReponse = '468m';
    if($bonneReponse == $_POST['choice5']){
        echo 'Bonne reponse';
    }else{
        echo 'mauvaise reponse';
    }
}
if(isset($_POST['choice6'])) {
    $bonneReponse = 'Reykjavik';
    if($bonneReponse == $_POST['choice6']){
        echo 'Bonne reponse';
    }else{
        echo 'mauvaise reponse';
    }
}
if(isset($_POST['choice7'])) {
    $bonneReponse = 'Nairobi';
    if($bonneReponse == $_POST['choice7']){
        echo 'Bonne reponse';
    }else{
        echo 'mauvaise reponse';
    }
}
if(isset($_POST['choice8'])) {
    $bonneReponse = 'Aéroport';
    if($bonneReponse == $_POST['choice8']){
        echo 'Bonne reponse';
    }else{
        echo 'mauvaise reponse';
    }
}
?>