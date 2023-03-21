<?php


//određivanje funkcije sa dva argumentra

function Imeiprezime ($name,$surname)
 {
    //konketiniraju se argumenti pomoču nov varijable
    $skupa=$name." ".$surname;

    //funkcija vrača novu varijablu koja je konkerinirana i povečava slova
    return strtoupper ($skupa);

 }

//pozivamo funkciju i dodajemo vrijednost novoj varijabli 
$ispis= Imeiprezime('silvestar','puselja');
//ispis varijable
 Var_dump ($ispis);