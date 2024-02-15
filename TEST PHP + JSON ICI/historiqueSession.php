<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MENU</title>
    <link rel="stylesheet" href="Menu.css">
    <style type="text/css">
        p {
            color: blue;
        }
    </style>
</head>
<body>
    <p>Salut <?php echo $_GET["nom"]; ?></p>
    <?php
    $nom = isset($_GET["nom"]) ? $_GET["nom"] : "";
    file_put_contents('data.txt', "\n$nom", FILE_APPEND);
    ?>
    <script type="text/javascript">
        alert("Bonjour");
    </script>
</body>
</html>
