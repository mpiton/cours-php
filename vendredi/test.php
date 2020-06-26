<?php

require("outils.php");
require("header.php");

// VARIABLES
// VARIABLES
$tableau = $_FILES['fichier'];
$name = $tableau['name'];
$type = $tableau['type'];
$tmp_name = $tableau['tmp_name'];
$size = $tableau['size'];
$destinationfinale =  $destination . "/" . $name;


echo "<form action=\"\" method='post'enctype=\"multipart/form-data\">";
echo "<input type='file' name='fichier'>";
echo "<input type='submit' value='Valider'>";
echo "</form>";


$destination = 'upload';
$existe = file_exists($destination);

if ($existe) {
   echo "La destination existe";
}
else {
   echo "il va falloir créer un repertoire upload<br>";
   $creationRepertoire = mkdir($destination);
   if ($creationRepertoire) {
      echo "repertoire crée !";
   }
   else {
      echo "on a un problème !";
   }
}







uploadMonFichier($tableau);


require("footer.php");
?>