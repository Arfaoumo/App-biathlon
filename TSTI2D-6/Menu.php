<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="Menu.css">
  <title>MENU</title>
</head>
<body>

<a href="#" id="openBtn" class="burger-container">
  <span class="burger-icon">
    <span></span>
    <span></span>
    <span></span>
  </span>
</a>

<div id="mySidenav" class="sidenav">
  <a id="closeBtn" href="#" class="close">×</a>
  <ul>
    <li><a href="">Réessayer</a></li>
    <li><a href="">Points laser</a></li>
    <li><a href="">Équipe</a></li>
    <li><a href="">A propos</a></li>
    <li> <a href="">    <div class="container"> <input type="checkbox" id="toggle"> <label for="toggle" id="toggle-label"></label> </div> </a> </li>

<!-- Dark mode Toggle Button -->

  </ul>

</div>

<h1><center>Bienvenue <?php echo $_GET["nom"]; ?></p>
    <?php
    $nom = isset($_GET["nom"]) ? $_GET["nom"] : "";
    file_put_contents('data.txt', "\n$nom", FILE_APPEND);
    ?></center></h1>
<br>
<center><img src="https://i.pinimg.com/474x/a6/c8/7c/a6c87cc02b79b0c8e3c9b06e61779eea--archery-targets-file.jpg"></center>

<center><a href="FUTUR CIBLE AVEC POINTS.html"><button>Créer session</button></a></center>





<script>
  var sidenav = document.getElementById("mySidenav");
  var openBtn = document.getElementById("openBtn");
  var closeBtn = document.getElementById("closeBtn");

  openBtn.onclick = openNav;
  closeBtn.onclick = closeNav;

  /* Set the width of the side navigation to 250px */
  function openNav() {
    sidenav.classList.add("active");
  }

  /* Set the width of the side navigation to 0 */
  function closeNav() {
    sidenav.classList.remove("active");
  }
</script>

<!-- Dark mode script -->
<script>
  document.addEventListener('DOMContentLoaded', function () {
    var toggleSwitch = document.getElementById('toggle');

    // Check the initial mode preference
    if (localStorage.getItem('dark-mode') === 'enabled') {
      document.body.classList.add('dark-mode');
      toggleSwitch.checked = true;
    }

    // Event listener for the toggle switch
    toggleSwitch.addEventListener('change', function () {
      if (toggleSwitch.checked) {
        document.body.classList.add('dark-mode');
        localStorage.setItem('dark-mode', 'enabled');
      } else {
        document.body.classList.remove('dark-mode');
        localStorage.setItem('dark-mode', 'disabled');
      }
    });
  });
</script>

</body>
</html>
