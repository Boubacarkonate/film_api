<?php
//création des variables de la base de données
   $dbname = "film_api";
   $host = "localhost";  //ou 127.0.0.1
   $username = "root";
   $password = "";

//connexion à la base de données
    $connect = mysqli_connect($host,$username,$password,$dbname);

//vérification de la connexion à la base données
    if ($connect) {
        echo "connexion à la Bd avec succès";
    }else {
        echo "connexion non établie";
        die();
    }

?>