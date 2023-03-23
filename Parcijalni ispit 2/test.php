<?php

function samoglasnici_suglasnici($word){
 
    $samoglasnici = 0;
    $suglasnici = 0;
    $sbroj = ["a", "e", "i", "o", "u"];
    for ($i=0; $i < strlen($word); $i++) {
        if (in_array($word[$i], $sbroj)) {
     $suglasnici++;
        } elseif ($word[$i] >= 'a' && $word[$i] <= 'z') {
          $samoglasnici++;
    }
    }
    return [$samoglasnici, $suglasnici];
}

$word = $_POST['rijec'];
$slova = strlen($word);

[$samoglasnici, $suglasnici] = samoglasnici_suglasnici($_POST['rijec']);

if ($slova != 0) {
    $wordsJson = file_get_contents('words.json');
    $words = json_decode($wordsJson, true);
    $words[] = [
        'rijec' => $word,
        'slova' => $slova,
        'samoglasnici' => $samoglasnici,
        'suglasnici' => $suglasnici
    ];  


    $wordsJson = json_encode($words, JSON_PRETTY_PRINT);
    file_put_contents('words.json', $wordsJson);   
}

require 'index.php';
?>