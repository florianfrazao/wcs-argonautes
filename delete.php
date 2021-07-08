<?php

// ajout du fichier de connexion à la BDD
require_once('connect.php');

// Récupération des informations de l'argonaute
$id = $_GET['id'];

// Utilisation de la requête DELETE en SQL
$query = "DELETE FROM members WHERE id = $id";

// Envoi de la requête depuis le script actuel vers la base de données, et récupération du résultat de la requête
$result = mysqli_query($connexion, $query);

// Vérification du bon déroulement de la requête
if ($result) {
    header('Location: index.php');
} else {
    echo "erreur sur le traitement des données";
}

// Fermeture de la connexion à la base de données
mysqli_close($connexion);
