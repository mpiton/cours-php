<?php

require("outils.php");
require("header.php");
// require("formulaire.php");

// VARIABLES
$prenom = $_GET["prenom"];
$nom = $_GET["nom"];
$anniversaire = $_GET["anniversaire"];
$error = "";
$value = 


if (($prenom == NULL)) {
   $error = "is-invalid";
} 
if (($nom == NULL)) {
   $error = "is-invalid";
}
if (($anniversaire == NULL)) {
   $error = "is-invalid";
}
?>




<form action="" method="GET">
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationCustom01">Prénom</label>
      <input type="text" class="form-control <?php echo $error ?> "  id="validationCustom01" name="prenom">
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationCustom02">Nom</label>
      <input type="text" class="form-control <?php echo $error ?>" id="validationCustom02" name="nom">
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationCustom03">Date de naissance</label>
      <input type="date" name="anniversaire">
    </div>
  <button class="btn btn-primary" type="submit">Validez</button>
</form>




<?php







require("footer.php");
?>