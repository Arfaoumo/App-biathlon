<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="Menu.css">
  <title>MENU</title>
</head>
<body>

<h1><center>Bienvenue <?php echo isset($_GET["prénom"]) ? $_GET["prénom"] : ""; echo " "; echo isset($_GET["nom"]) ? $_GET["nom"] : ""; ?></center></h1>
<?php

$prénom = isset($_GET["prénom"]) ? $_GET["prénom"] : "";
file_put_contents('data.txt', "\n$prénom", FILE_APPEND);

$nom = isset($_GET["nom"]) ? $_GET["nom"] : "";
file_put_contents('data.txt', "\n$nom", FILE_APPEND);


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
    <a href="#" onclick="createOption(); return false;">
        <button id="Session">Nouvelle session de Tir</button>
    </a>
</center>

<!-- Bouton pour rejoindre les anciennes sessions -->
<center>
    <button onclick="redirectToSession()">Rejoindre une session</button>
</center>

<script type="text/javascript">
    function createOption() {
        var select = document.getElementById("sessionSelect");

        // Obtenir la date et l'heure actuelles
        var currentDate = new Date();
        var formattedDate = formatDate(currentDate);

        // Vérifier si une option pour cette date existe déjà
        var options = select.options;
        for (var i = 0; i < options.length; i++) {
            if (options[i].value === formattedDate) {
                alert("Une session pour cette date existe déjà.");
                return; // Sortir de la fonction si une session pour cette date existe déjà
            }
        }

        // Créer un nouvel élément option
        var option = document.createElement("option");

        // Définir la valeur et le texte de l'option
        option.value = formattedDate;
        option.text = formattedDate;

        // Ajouter l'option à la fin du select
        select.add(option);

        // Sélectionner la nouvelle option créée
        option.selected = true;
    }

    // Fonction pour formater la date en jour/mois/année
    function formatDate(date) {
        var day = date.getDate();
        var month = date.getMonth() + 1; // Les mois commencent à 0, donc on ajoute 1
        var year = date.getFullYear();

        // Ajoute un 0 devant si le jour ou le mois est inférieur à 10
        if (day < 10) {
            day = "0" + day;
        }
        if (month < 10) {
            month = "0" + month;
        }

        return day + "/" + month + "/" + year;
    }

    function redirectToSession() {
        var select = document.getElementById("sessionSelect");
        var selectedDate = select.value;
        if (selectedDate.trim() !== "") {
            window.location.href = "http://localhost/TSTI2D-6/session.html?date= " + selectedDate;
        } else {
            alert("Veuillez sélectionner une date pour rejoindre la session.");
        }
    }
</script>

</body>
</html>
