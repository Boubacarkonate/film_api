<?php
//Cette ligne envoie un en-tête HTTP au client indiquant que le contenu de la réponse sera au format JSON. Cela est important pour informer le client sur le type de données qu'il recevra.
header('content-type: application/json');

//appel de la base de données
require_once 'connection.php';

//préparation de la requête sql
// $requete_prepare = $connect->prepare("SELECT * FROM film");

// //execution de la requête
// $requete_execute = $query->execute();

//requête sql pour récupérer tous les champs
$sql="SELECT * FROM film";

//prépare et exécute la requête sql précédente pour la base de données($PDO)
    $resultat=$connect->query($sql);
 
//je récupère les infos de la requête sous forme de tableau 
    $liste_films=$resultat->fetchAll();
     
    // var_dump($liste_films);

    // foreach ($liste_films as $value) {
        // echo($value['titre'])  ;
    echo json_encode($liste_films);

    // }

?>