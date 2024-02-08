<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style type="text/css">
	body{
  background:linear-gradient(blue, pink);
  	}
</style>
<body>
 
<?php

echo "hello";
?>
<form action="resultat.php" method="get">
     nom :<input name="nom" id="nom" type="text" />
     age :<input name="age" id="age" type="number" />
     mdp :<input type="password" name "mdp">

   <button type="submit">Valider</button>
</form>


</body>

</html>