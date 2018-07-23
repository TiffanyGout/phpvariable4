<?php

//exercice1
function returnTrue() {
    return true;
}
//exercice2
function salut($hello = 'Hello') {
    return $hello;
}

//exercice3
function coucou($hello= "", $hola = ""){
    return 'La phrase comporte' . $hello . 'et ensuite' . $hola;
}

//exercice4
function parametre($nombre1 = 1, $nombre2 = 2) {
    if($nombre1>$nombre2){
        return 'Le premier nombre est plus grand';
    }
    elseif($nombre1<$nombre2){
        return 'Le premier nombre est plus petit';
    }
    elseif($nombre1==$nombre2){
        return 'Les deux nombres sont identiques';
    }
}

//exercice5
function param($nombre=6, $titre="Hola"){
    return $nombre . $titre;
}

//exercice6
function paramet($nom=Dupont, $prénom=Maurice, $age=55){
    return 'Bonjour' . $nom . $prenom . ',tu as' . $age . 'ans';
}

//exercice7
function para($age=65, $gender='homme'){
    if($age >= 18 && $gender == 'homme'){
        return 'Vous êtes un homme et vous êtes majeur';
    }
    elseif ($age < 18 && $gender == 'homme') {
        return 'Vous êtes un homme et vous êtes mineur';
    }
    if($age >= 18 && $gender == 'femme') {
        return 'Vous êtes une femme et vous êtes majeur';
    }
    elseif($age < 18 && $gender == 'femme'){
        return 'Vous êtes une femme et vous êtes mineur';
    }
}

//exercice8
function parame($nombre1=5, $nombre2=2, $nombre3=7){
    return ($nombre1 + $nombre2 + $nombre3);
}