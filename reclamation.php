<?php
$servername="localhost";
$dbname='exp_formula';
$username="root";
$password="";

try {
    $reclamation=new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $reclamation->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "CREATE TABLE Reclamation(
        Motif VARCHAR(30) NOT NULL,
        Messag VARCHAR(30) NOT NULL)";

    $reclamation->exec($sql);
    echo "TABLE RECLAMATION CREER AVEC JOIE";
} catch (PDOException $e) {
    echo "ERREUR :" .$e->getMessage();
}
?>