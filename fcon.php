<?php
$servername="localhost";
$username="root";
$password="";


try {
    $condb=new PDO("mysql:host=$servername", $username, $password);
    $condb -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "UNE CONNECTION A LA BASE A BIEN ETE ETABLIE";
} catch (PDOException $e) {
    echo "ERREUR :" .$e->getMessage();
}
?>