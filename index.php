<?php

$wordsJson = file_get_contents ('words.json');
$word = json_decode ($wordsJson, true);
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
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>


<table border=1 align=center>
    <tr>
        <th>Ime</th>
        <th>Prezime</th>
        <th>Godine</th>
        <th>Email</th>
        <th>Telefon</th>
    <tr>
  
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo '<tr>';

        echo '<td>' .$name = $_POST['fname'];'
                    </td>'; 

        echo '<td>'. strlen($name);'</td>'; 
        echo '<td></td>'; 
        echo '<td></td>'; 
        echo '<td></td>'; 
        echo '</tr>';

    }
     ?>   
   
</table>

</body>
</html>

<?php
