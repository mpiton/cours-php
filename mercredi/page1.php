<?php
$titre = "Page 1";
   require('header.php');
   

   ?>

    <!-- debut page -->

      <h1>Mot de passe</h1>

      <form action="page2.php" method="POST">
         <label for="password">Mon mot de passe</label>
         <input type="password" class="input is-primary" name="password" id="password">
         <input type="submit" value="Envoyer" class="button is-primary">
      </form>

    <!-- fin page -->

   <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/a025539da5.js" crossorigin="anonymous"></script>
</body>
</html>