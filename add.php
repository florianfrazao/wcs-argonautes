<?php

    // Connexion au serveur MySQL
    $connexion = mysqli_connect("localhost", "root", "root");

    // Règle d'encodage
    mysqli_set_charset($connexion, "utf8");

    // Sélection de la base de données
    mysqli_select_db($connexion, "argonautes");

    // Récupération des informations de l'argonaute
    $name = $_POST['name']; 
                
    // Utilisation de la requete INSERT INTO en SQL
    $query = "INSERT INTO members VALUES (null, '$name')";

    // Envoi de la requête depuis le script actuel vers la base de données, et récupération du résultat de la requête
    $result = mysqli_query($connexion, $query);

    var_dump($result);

    // Vérification du bon déroulement de la requête
    if ($result) {
        header('Location: index.php');
    }

    else {
        echo "erreur";
    }

    // Fermeture de la connexion à la base de données
    mysqli_close($connexion);

?>