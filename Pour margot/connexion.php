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
    <center><p class="item">Se connecter à son profile</p></center>

    <input type="text" name="nom" class="nom" placeholder="Ton nom...">
    <br>
    <input type="text" name="prénom" class="prénom" placeholder="Ton prénom...">
    <br>



    <br>
    <br>

    <a href="Menu.php"><button>Se connecter</button></a>
    <a href="index.html"> <button  class="back-button" >    Retour</button> </a>
    <br>

    <a href="inscrire.html">S'inscrire</a>
  </div>



    <?php
    $file = fopen('data.txt', 'r');
if ($file) {
    // Lire les 1024 premiers octets du fichier
    $content = fread($file, 1024);

    
    // Afficher le contenu lu
    echo $content;
    
    // Fermer le fichier
    fclose($file);
} else {
    echo "Impossible d'ouvrir le fichier.";
}

    ?>
</body>
</html>
