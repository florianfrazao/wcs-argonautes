<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="style.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <title>Les Argonautes</title>
</head>

<body>
  <header>
    <h1>
      <img src="https://www.wildcodeschool.com/assets/logo_main-e4f3f744c8e717f1b7df3858dce55a86c63d4766d5d9a7f454250145f097c2fe.png" alt="Wild Code School logo" />
      Les Argonautes
    </h1>
  </header>

  <main>
    <!-- Formulaire d'ajout d'un argonaute -->
    <h2>Ajouter un(e) Argonaute</h2>
    <form class="new-member-form" action="add.php" method="post" enctype="multipart/form-data">
      <label for="name">Nom de l&apos;Argonaute</label>
      <input id="name" name="name" type="text" placeholder="Nom..." required />
      <button type="submit">Ajouter</button>
    </form>

    <!-- Affichage de la liste d'équipage -->
    <h2>Membres de l'équipage</h2>
    <section class="member-list">

      <?php

      // ajout du fichier de connexion à la BDD
      require_once('connect.php');

      // Requête de sélection des membres en SQL
      $query = "SELECT members.id, members.name FROM members";

      // Envoi de la requête depuis le script actuel vers la base de données, et récupération du résultat de la requête
      $result = mysqli_query($connexion, $query);

      // Association des données aux variables tant qu'il y'a un résultat
      while ($line_result = mysqli_fetch_assoc($result)) {
        $id = $line_result['id'];
        $name = $line_result['name'];

      ?>

        <!-- Affichage des membres -->
        <div class="member-item">
          <h3><?= $name ?></h3>
          <a href="delete.php?id=<?= $id ?>">
            <span class="material-icons red ">remove_circle_outline</span>
          </a>
        </div>

      <?php
      } // fermeture du while

      mysqli_close($connexion);
      ?>

    </section>
  </main>

  <footer>
    <p>Réalisé par Florian en Anthestérion de l'an 515 avant PHP</p>
  </footer>

</body>

</html>