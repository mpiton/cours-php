<?php

require("header.php");

// DESACTIVE LE REPORT D'ERREUR SUR WAMP
error_reporting(E_ALL ^ E_NOTICE);


// VARIABLES
$errorPrenom = "";
$errorNom = "";
$cacheForm = "";
$showResult = "d-none";
$prenom = $_GET['prenom'];
$nom = $_GET['nom'];
$anniversaire = $_GET['anniversaire'];

// AJOUTE LA COULEUR AU CHAMPS VIDE
if (($prenom == NULL)) {
   $errorPrenom = "is-invalid";
}
if (($nom == NULL)) {
   $errorNom = "is-invalid";
}

// CACHE LE FORMULAIRE ET AFFICHE LE RESULTAT
if (($prenom != NULL) && ($nom != NULL) && ($anniversaire != NULL)) {
   $cacheForm = "d-none";
   $showResult = "d-inline-black";
}

?>


<!-- Début du Formulaire -->
<form action="" method="GET" class="<?php echo $cacheForm ?>">
   <div class="form-row">
      <div class="col-md-6 mb-3">
         <label for="validationCustom01">Prénom</label>
         <input type="text" class="form-control <?php echo $errorPrenom ?> " id="validationCustom01" name="prenom"
            value="<?php echo $prenom ?>">
         <div class="invalid-feedback">
            Veuillez entrer votre prénom.
         </div>
      </div>
      <div class="col-md-6 mb-3">
         <label for="validationCustom02">Nom</label>
         <input type="text" class="form-control <?php echo $errorNom ?>" id="validationCustom02" name="nom"
            value="<?php echo $nom ?>">
         <div class="invalid-feedback">
            Veuillez entrer votre nom.
         </div>
      </div>
   </div>
   <div class="form-row">
      <div class="col-md-6 mb-3">
         <label for="validationCustom03">Date de naissance</label>
         <input type="date" name="anniversaire" value="<?php echo $anniversaire ?>">
      </div>
   </div>
   <button class="btn btn-primary" type="submit">Validez</button>
</form>



<!-- Résultat caché en attente -->
<div class="resultat <?php echo $showResult ?>">
   <table>
      <tr>
         <td>Prénom:</td>
         <td><?php echo $prenom ?></td>
      </tr>
      <tr>
         <td>Nom:</td>
         <td><?php echo $nom ?></td>
      </tr>
      <tr>
         <td>Date de naissance:</td>
         <td><?php echo $anniversaire ?></td>
      </tr>
   </table>
</div>



<?php
require("footer.php");
?>