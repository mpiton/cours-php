<?php

   $titre = "Exercice 4";
   require('header.php');
   require('outils.php');
   

   echo hx("Ceci est un titre", 3);
   echo hx("Ceci est encore un titre", 1);
   echo hx("Ceci est encore un titre", 5);

  ?>
   <form action="" method="get">
   <input type="text" name="secondes">
   <input type="submit" value="Valider">
</form>

  <?php 

  echo ajoutSecondes($secondes);

   require('footer.php');

?>

