
<?php
$uploadPath = '/var/www/html/App/uploads'; //lokacija spremanja datoteke
$uploadFile = $uploadPath. '/' . $_FILES['userfile']['name'];

if(str_contains($_FILES['userfile']['type'], 'image')) {
    echo "Poslani file je slika.\n";
}
else {
    echo "Poslani file nije slika.\n";
}

move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadFile); //spremanje datoteke


//od profesora 

 // Definiramo upload direktorij
 $uploadDir = __DIR__ . '/uploads';
 // Provjerimo da li direktorij postoji
 if(!file_exists($uploadDir)){
     // Ako ne postoji, kreiramo ga
     if (!mkdir($uploadDir, 0775, true)) {
        echo "Pogreška kod kreiranja direktorija!";

        return;
     }
 } 