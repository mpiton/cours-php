<?php
$titre = "Page 1";
   require('header.php');
   

   ?>

    <!-- debut page -->
      <div class="content is-large">
      <h1 class="">Choisissez un nombre entre 1 et 10</h1>

      <form action="" method="GET">
         <input type="text" name="nombre" class="input" style="width: 25%;">
         <input type="submit" value="Envoyer" class="button is-primary">
      </form>

      <?php
      
      $nombre = $_GET["nombre"];
      if ($nombre < 8) {
         echo "<p>Votre nombre est plus petit</p>";
      } elseif ($nombre > 8) {
        echo "<p>Votre nombre est plus grand</p>";
      } else {
         echo "<p>Félicitation, vous avez trouvé le nombre mystère</p>";
      }
      
      ?>
      </div>


    <!-- fin page -->

   <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/a025539da5.js" crossorigin="anonymous"></script>
</body>
</html>