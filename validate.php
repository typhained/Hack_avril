<?php
require 'quizz.php';
$color= '';
if(isset($_POST['choice'])) {
    $bonneReponse = 'Russie';
    if($bonneReponse == $_POST['choice']){
            $color="green";
            echo 'Bonne reponse';
    }else{
            $color='red';
            echo 'mauvaise reponse';
    }
}
if(isset($_POST['choice2'])) {
    $bonneReponse = 'Vrai';
    if($bonneReponse == $_POST['choice2']){
        $color="green";
        echo 'Bonne reponse';
    }else{
        $color='red';
        echo 'mauvaise reponse';
    }
}
if(isset($_POST['choice3'])) {
    $bonneReponse = 'Faux';
    if($bonneReponse == $_POST['choice3']){
        $color="green";
        echo 'Bonne reponse';
    }else{
        $color='red';
        echo 'mauvaise reponse';
    }
}
if(isset($_POST['choice4'])) {
    $bonneReponse = '1667';
    if($bonneReponse == $_POST['choice4']){
        $color="green";
        echo 'Bonne reponse';
    }else{
        $color='red';
        echo 'mauvaise reponse';
    }
}
if(isset($_POST['choice5'])) {
    $bonneReponse = '468m';
    if($bonneReponse == $_POST['choice5']){
        $color="green";
        echo 'Bonne reponse';
    }else{
        $color='red';
        echo 'mauvaise reponse';
    }
}
if(isset($_POST['choice6'])) {
    $bonneReponse = 'Reykjavik';
    if($bonneReponse == $_POST['choice6']){
        $color="green";
        echo 'Bonne reponse';
    }else{
        $color='red';
        echo 'mauvaise reponse';
    }
}
if(isset($_POST['choice7'])) {
    $bonneReponse = 'Nairobi';
    if($bonneReponse == $_POST['choice7']){
        $color="green";
        echo 'Bonne reponse';
    }else{
        $color='red';
        echo 'mauvaise reponse';
    }
}
if(isset($_POST['choice8'])) {
    $bonneReponse = 'Aéroport';
    if($bonneReponse == $_POST['choice8']){
        $color="green";
        echo 'Bonne reponse';
    }else{
        $color='red';
        echo 'mauvaise reponse';
    }
}
?>