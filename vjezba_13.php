<?php

$studentsjson = file_get_contents ('polaznici.json');
$students = json_decode ($studentsjson, true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border=1>
    <tr>
        <th>Ime</th>
        <th>Prezime</th>
        <th>Godine</th>
        <th>Email</th>
        <th>Telefon</th>
    <tr>
  
    <?php
    foreach ($students as $student) {
        echo '<tr>';
        echo '<td>' .$student['ime'].'</td>'; 
        echo '<td>' .$student['prezime'].'</td>'; 
        echo '<td>' .$student['godine'].'</td>'; 
        echo '<td>' .$student['email'].'</td>'; 
        echo '<td>' .$student['mobitel'].'</td>'; 
        echo '</tr>';

    }
     ?>   
     
   
   
</table>

</body>
</html>

<?php
$students [] = [
    
    "ime" => "jelena",
    "prezime" => "koncar",
    "godine" => "55",
    "email" => "ivan3@gmail.com",
    "mobitel" => "5345346554" 
];
$studentsjson = json_encode ($students);
file_put_contents ('polaznici.json',$studentsjson);
