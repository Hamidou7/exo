<?php
$servername="localhost";
$username="root";
$password="";
try {
    $con=new PDO("mysql:host=$servername", $username, $password);
    $con -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "UNE CONNECTION A LA BASE A BIEN ETE ETABLIE";

$exemple="CREATE DATABASE EXP_FORMULA";
$con->exec($exemple);
echo "BASE EN PLACE";
} catch (PDOException $e) {
    echo "ERREUR :" .$e->getMessage();
}

?>