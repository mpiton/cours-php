<?php
$titre = "Exercice 2";
   require('header.php');
   

   ?>

<!-- debut page -->
<div class="content is-large">
   <h1 class="">Calculatrice</h1>

   <form action="" method="GET">
      <label for="nombre1">Nombre 1</label>
      <input type="text" name="nombre1" class="input" style="width: 25%;">
      <br>
      <label for="nombre2">Nombre 2</label>
         <input type="text" name="nombre2" class="input" style="width: 25%;">
         <br>
         <input type="submit" value="Addition" class="button is-primary" name="butaddition">
         <input type="submit" value="Soustraction" class="button is-primary" name="butsoustraction">
         <input type="submit" value="Multiplication" class="button is-primary" name="butmultiplication">
         <input type="submit" value="Division" class="button is-primary" name="butdivision">
   </form>


   <?php
      $nombre1 = $_GET["nombre1"];
      $nombre2 = $_GET["nombre2"];

      // DECLARATION FONCTIONS
      function multiplication($a, $b) {
         return $a*$b;
      }
      function addition($a, $b) {
         return $a+$b;
      }
      function soustraction($a, $b) {
         return $a-$b;
      }
      function division($a, $b) {
         return $a/$b;
      }

      //VARIABLES STOCKEE
      $multiplication = multiplication($nombre1, $nombre2);
      $addition = addition($nombre1, $nombre2);
      $soustraction = soustraction($nombre1, $nombre2);
      $division = division($nombre1, $nombre2);
      
      // SI ADDITION
      if ($_GET["butaddition"]) {
         echo "<h2>" . $addition . "</h2>";
      }
      //  SINON SOUSTRACTION
      elseif ($_GET["butsoustraction"]) {
         echo "<h2>" . $soustraction . "</h2>";
      }
      // SINON MULTIPLICATION
      elseif ($_GET["butmultiplication"]) {
         echo "<h2>" . $multiplication . "</h2>";
      }
      // SINON DIVISION
      else {
         echo "<h2>" . $division . "</h2>";
      }


      ?>

</div>
<!-- fin page -->

<!-- Font Awesome -->
<script src="https://kit.fontawesome.com/a025539da5.js" crossorigin="anonymous"></script>
</body>

</html>