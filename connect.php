<?php
    
    // Connexion au serveur MySQL
    $connexion = mysqli_connect("localhost", "root", "root");

    // Règle d'encodage
    mysqli_set_charset($connexion, "utf8");

    // Sélection de la base de données
    mysqli_select_db($connexion, "argonautes");
