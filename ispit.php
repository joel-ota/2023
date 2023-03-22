


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form>
<form method="POST" action="<?php echo $_POST['Rijec'] ;?>">


  Upiši riječ: 
  
  <input type="text" Rijec="Rijec">
  <input type="submit">




<table border=1 type align="center">

    <tr>
        <th>Riječ</th>
        <th>Broj slova</th>
        <th>Broj samoglasnika</th>
        <th>Broj suglasnika</th>
    </tr>

    <tr>
        <th> <?php($_POST["REQUEST_METHOD"] == "POST");
        {
            echo $Rijec;
        } ?>
</th>
        <th>Broj slova</th>
        <th>Broj samoglasnika</th>
        <th>Broj suglasnika</th>
    </tr>

      
</table>

</form>
</body>




