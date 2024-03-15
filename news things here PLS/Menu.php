<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="Menu.css">
  <title>MENU</title>
</head>
<body>

<h1><center>Bienvenue <?php echo isset($_GET["prénom"]) ? $_GET["prénom"] : ""; echo " "; echo isset($_GET["nom"]) ? $_GET["nom"] : ""; ?></center></h1>
<?php
    $nom = isset($_GET["prénom"]) ? $_GET["prénom"] : "";
    file_put_contents('data.txt', "\n$nom", FILE_APPEND);

    $prénom = isset($_GET["nom"]) ? $_GET["nom"] : "";
    file_put_contents('data.txt', "\n$prénom", FILE_APPEND);

?>
<br>

<center>
    <form>
        <select class="box" id="sessionSelect">
            <option> </option>
            <option value=" "> --- Session xxx --- </option>
        </select>
        <p>CHOISIR UNE SESSION</p>
    </form>
</center>

<center>
    <a href="FUTUR CIBLE AVEC POINTS.html">
        <button onclick="createOption()" id="Session">Créer session</button>
    </a>
</center>

<script type="text/javascript">
    document.getElementById("Session").onclick = function () {
        createOption();
    };

    function createOption() {
        var select = document.getElementById("sessionSelect");

        // Créer un nouvel élément option
        var option = document.createElement("option");

        // Obtenir la date et l'heure actuelles
        var currentDate = new Date();
        var formattedDate = currentDate.toLocaleString();

        // Définir la valeur et le texte de l'option
        option.value = formattedDate;
        option.text = formattedDate;

        // Ajouter l'option à la fin du select
        select.add(option);
    }
</script>

</body>
</html>
