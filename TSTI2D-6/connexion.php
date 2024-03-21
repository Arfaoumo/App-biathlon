<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Connexion</title>
  <link rel="stylesheet" href="connexion.css">
</head>
<body>

<div class="c">
  <center><p class="item">Se connecter à son profil</p></center>

  <form action="connexion.php" method="post">
    <input type="text" name="prenom" class="prenom" placeholder="Ton prénom...">
    <br>
    <input type="text" name="nom" class="nom" placeholder="Ton nom...">
    <br>
    <br>
    
    <button type="submit">Se connecter</button>
    <a href="index.html"><button class="back-button">Retour</button></a>
    <br>
    <a href="inscrire.html">S'inscrire</a>
  </form>
</div>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $prenominseré = isset($_POST['prenom']) ? $_POST['prenom'] : "";
    $nominseré = isset($_POST['nom']) ? $_POST['nom'] : "";


    $directory = "C:/wamp64/www/TSTI2D-6/data.txt";


    $compteexistant = false;
    $fileContents = file_get_contents($directory);

    $lines = explode("\n", $fileContents);


    for ($i = 0; $i < count($lines); $i += 2) {

        if (isset($lines[$i]) && isset($lines[$i + 1])) {
            $storedPrenom = trim($lines[$i]); // Rimuovi spazi bianchi
            $storedNom = trim($lines[$i + 1]); // Rimuovi spazi bianchi
            if ($storedPrenom === $prenominseré && $storedNom === $nominseré) {
                $compteexistant = true;
                break;
            }
        }
    }

    if ($compteexistant) {

        header("Location: Menu.php?nom=$nominseré&prénom=$prenominseré");
        exit();
    } else {


        echo "<script> alertcomptenonexistant(); </script>";
    }
}
?>




</body>
</html>
