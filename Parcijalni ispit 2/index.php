<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parcijalni 02</title>
    <style>
    </style>
</head>
<body>


        <form action="test.php" method="post">
        <label>Upišite riječ:</label>
        <br>
        <input type="text" name="rijec">
        <br>
        <input type="submit" value="Pošalji">
        </form>
 

 <?php
        $wordsJson = file_get_contents('words.json');
        $words = json_decode($wordsJson, true);
        
        ?>
        <table border="1", align=center>
        <tr>
            <th>Riječ</th>
            <th>Broj slova</th>
            <th>Broj samoglasnika</th>
            <th>Broj suglasnika</th>
        </tr>
<?php
        foreach ($words as $word) {
            echo "<tr>";
            echo "<td>".$word['rijec']."</td>";
            echo "<td>".$word['slova']."</td>";
            echo "<td>".$word['samoglasnici']."</td>";
            echo "<td>".$word['suglasnici']."</td>";
            echo "</tr>";
            }
            ?>
        </table>
    </div>
</div>
</body>
</html>