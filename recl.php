<?php
    $serveur = "localhost";
    $dbname = "EXP_FORMULA";
    $user = "root";
    $pass = "";
    
    $motif = $_POST["yeah"];
    $messag = $_POST["comment"];
    
    try{
        //On se connecte à la BDD
        $dbco = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
        $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        //On insère les données reçues
        $sth = $dbco->prepare("
            INSERT INTO Reclamation(motif, messag)
            VALUES(:yeah, :comment)");
        $sth->bindParam(':yeah',$motif);
        $sth->bindParam(':comment',$messag);
        $sth->execute();
        
        //On renvoie l'utilisateur vers la page de remerciement
        echo "insertion ok";
    }
    catch(PDOException $e){
        echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
    }
?>