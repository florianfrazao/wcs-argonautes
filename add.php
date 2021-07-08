<?php

// Gestion des erreurs
if (empty($_POST['name'])) {
    echo "Vous n'avez pas saisi le nom de l'argonaute !";
} else {

    // ajout du fichier de connexion à la BDD
    require_once('connect.php');

    // Récupération des informations de l'argonaute
    $name = $_POST['name'];

    // Utilisation de la requete INSERT INTO en SQL
    $query = "INSERT INTO members VALUES (null, '$name')";

    // Envoi de la requête depuis le script actuel vers la base de données, et récupération du résultat de la requête
    $result = mysqli_query($connexion, $query);

    // Vérification du bon déroulement de la requête
    if ($result) {
        header('Location: index.php');
    } else {
        echo "erreur";
    }

    // Fermeture de la connexion à la base de données
    mysqli_close($connexion);
}
