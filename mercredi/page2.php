<?php
$titre = "Page 2";
   require('header.php');
   

   ?>
    <!-- debut page -->

      <h1>Mot de passe</h1>

      <?php
      $password = $_POST["password"];

      if ($password == "chocolat") {
         require('prenom.php');
      }
      else{
         echo "Erreur, veuillez revenir sur la page";
         echo "<a href='page1.php'>ici</a>";
      }
?>

    <!-- fin page -->

   <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/a025539da5.js" crossorigin="anonymous"></script>
</body>
</html>



