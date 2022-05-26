<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXEMPLE FORMULAIRE</title>
</head>
<body>
    <?php
    echo 'nom : '.$_POST["nom"].'<br>';
    echo 'prenom : '.$_POST["prenom"].'<br>';
    echo 'age : '.$_POST["age"].'<br>';
    echo 'sexe : '.$_POST["sexe"].'<br>';
    echo 'adresse : '.$_POST["adresse"].'<br>';
    echo 'email : '.$_POST["email"].'<br>';
    echo 'password : '.$_POST["password"].'<br>';
    ?>
</body>
</html>